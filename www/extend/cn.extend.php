<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 2020.04.17 추가 from lux
// Ver. 0.0.2

$_cn = new MyClass($member['mb_id']); // 기본객체 생성
$_menu = new Menu(); // 메뉴객체 생성

// 기본 클래스
class MyClass {
    private $g5;
    private $userid;

    // 생성자
    function __construct($mb_id='')
    {
        $this->userid = $mb_id;
    }

    function privacy($str, $len=1)
    {
        $charset = mb_detect_encoding($str); // charset 검사
        $str = trim(strip_tags($str)); // 태그 및 공백 제거
        $str = mb_substr($str, 0, $len, $charset); // $len 만큼만 가져오기
        $str = $str . "**";

        return $str;
    }

    // 메인 타임라인용 함수
    function getTimeline($bo_table, $startDate="", $endDate="") {
        global $g5;

        $startDate		= $startDate ? $startDate :date("Ymd", strtotime("-6 month"));
        $endDate		= $endDate ? $endDate : date("Ymd", strtotime("+6 month"));
        $timelineStr	= "";
        $sql			= "select * from {$g5['board_table']} where bo_table = '{$bo_table}' ";
        $board			= sql_fetch($sql);

        $tmp_write_table = $g5['write_prefix'] . $bo_table; // 게시판 테이블 전체이름

        $sql	= " select * from {$tmp_write_table} where wr_is_comment = 0 AND (wr_1 <= '".$endDate."' OR wr_1 >= '".$startDate."')";
        $result	= sql_query($sql);

        for ($i=0; $row = sql_fetch_array($result); $i++) {
            $row['wr_1']  = date("Y-m-d", strtotime($row['wr_1']));
            $timelineStr .= "{id:".$i.", content:'".$row['wr_subject']."', start:'".$row['wr_1']."'},";
        }
        $timelineSrt = substr($timelineStr, 0, -1);
        return $timelineSrt;
    }

}

// 게시판 클래스
class Board {

    private $g5;
    private $skin_url;

    // 생성자
    function __construct($url='')
    {
        global $g5;

        $this->g5 = $g5;
        $this->skin_url = $url;
    }
}

// 유지보수 게시판 클래스
class Request extends Board {

    protected $g5;
    protected $skin_url;

    // 생성자
    function __construct($url='')
    {
        $this->skin_url = $url;
        echo $this->g5;
    }

    function setStat($stat=0)
    {

    }

    function getStatVal($stat=0)
    {
        switch($stat) {
            case 0:
                $css = 'state_rec';
                $val = "접수대기";
                break;
            case 1:
                $css = 'state_ing';
                $val = "진행중";
                break;
            case 2:
                $css = 'state_end';
                $val = "작업완료";
                break;
            case 3:
                $css = 'state_stop';
                $val = "작업보류";
                break;
            case 4:
                $css = 'state_cancel';
                $val = "작업취소";
                break;
            default:
                $css = 'state_rec';
                $val = "접수대기";
        }

        $val = "<span class='" . $css . "'>" . $val . "</span>";

        return $val;
    }

    function getLevelVal($stat=0)
    {
        switch($stat) {
            case 0:
                $img = "user_1.png";
                $val = "일반회원";
                break;
            case 1:
                $img = "user_2.png";
                $val = "계약회원";
                break;
            default:
                $img = "user_1.png";
                $val = "일반회원";
        }

        $img = "<img src='" . $this->skin_url . "/img/" . $img . "' alt='" . $val . "' />";
        $val = $img . $val;

        return $val;
    }
}

// 메뉴 클래스
class Menu {

    public $menu;

    // 생성자
    function Menu()
    {
        $this->setMenu();
    }

    // 메뉴 배열로 세팅하기
    function setMenu()
    {
        global $g5;

        $order = "order by me_order, me_id";

        $query = "select * from {$g5['menu_table']}  where me_use = '1' $order";

        $result = sql_query($query, false);

        while($row=sql_fetch_array($result)) {
            $menu[] = $row; // 배열에 메뉴 저장
        };

        $this->menu = $menu;

    }

    // 메뉴 출력하기
    function viewMenu()
    {
        $menu = $this->getMenu(1); // 1차메뉴 가져오기

        for($i=0, $strMenu1='', $strMenu2='', $menucode='', $menulength=2; $i < count($menu); $i++) {
            $menucode =  $menu[$i]['me_code'];
            $menulength = strlen($menucode);

            $strMenu1 .= "<li><a href=" . $menu[$i]['me_link'] . " target=_{$menu[$i]['me_target']}>{$menu[$i]['me_name']}</a></li>";
            $strMenu2 .= "<li><ul>";
            $arrMenu = $this->getMenu($menucode);
            if($arrMenu) {
                foreach ($arrMenu as $submenu) { // 2차메뉴
                    $strMenu2 .= "<li><a href=" . $submenu['me_link'] . " target=_{$submenu['me_target']}>{$submenu['me_name']}</a></li>";
                }
            }
            $strMenu2 .= "</ul></li>";
        }

        echo "<link rel='stylesheet' href='".G5_URL."/extend/menu.extend.css'>"; // 메뉴 CSS가져오기
        echo "<link rel='stylesheet' href='".G5_URL."/extend/menu_responsive.extend.css'>"; // 메뉴반응형 CSS가져오기
        echo "<div class='menu'><div class='lnb'>";
        echo "<div class='wrap'><ul class='lnb_depth1'>$strMenu1</ul></div>"; // 1차메뉴 출력
        echo "<div class='lnb_depth2'><div class='wrap'><ul>$strMenu2</ul></div></div>"; // 2차메뉴 출력
        echo "</div></div>";
    }

    // 메뉴 가져오기
    function getMenu($code='')
    {
        $totalMenu = $this->menu;

        if($code=='') return $totalMenu; // 인덱스가 없을 경우 전체메뉴 반환
        if($totalMenu) {
            if ($code == 1) { // 1차메뉴
                foreach ($totalMenu as $valMenu) {
                    $me_code = trim($valMenu['me_code']); // 메뉴코드
                    if (strlen($me_code) == 2) $menu[] = $valMenu;
                }
            } else { // 서브메뉴
                foreach ($totalMenu as $valMenu) {
                    $me_code = trim($valMenu['me_code']); // 메뉴코드
                    if ((strlen($me_code) == 4) & (substr($me_code, 0, 2) == $code)) $menu[] = $valMenu;
                }

            }
        }

        return $menu;
    }

    // 메뉴 코드 가져오기
    function getMenuCode($str='')
    {
        global $g5;

        if(!$str) $str = explode("&", $_SERVER['QUERY_STRING'] );
        $token = ''; //토큰 초기화

        foreach($str as $val)
        {
            if(substr($val, 0, 8) == "bo_table") $token = $val;
            if(substr($val, 0, 5) == "co_id") $token = $val;
            if(substr($val, 0, 5) == "ca_id") $token = $val;
            if(substr($val, 0, 5) == "it_id") $token = $val;
        }

        // 메뉴링크에서 일치하는 토큰이 있는지 검사

        if($token) { // 토큰이 있는 경우
            $query = "select * from {$g5['menu_table']} where me_link like '%{$token}%'";

            $result = sql_query($query);

            while ($row = sql_fetch_array($result)) {
                $me_code = $row['me_code'];
                $me_link = $row['me_link'];

                $tmp_str = @explode("&", strstr($me_link, $token)); // token을 포함한 경우

                if(is_array($tmp_str)) {
                    foreach ($tmp_str as $tmp_val) {
                        if ($token == $tmp_val) {
                            $code = $me_code;
                        } else {
                            continue;
                        }
                    }
                }
            }
        }

        return $code;
    }

    function getMenuTitle($idx=10)
    {
        global $g5;

        $query = "select me_name from {$g5['menu_table']} where me_code=$idx";
        $row = sql_fetch($query);

        return $row['me_name'];
    }

    function getMenuLink($idx=10)
    {
        global $g5;

        $query = "select me_link from {$g5['menu_table']} where me_code=$idx";
        $row = sql_fetch($query);

        return $row['me_link'];
    }

    function getPageType($str='')
    {
        if(!$str) $str = $_SERVER['QUERY_STRING']; // URI가 없을 경우 현재 페이지 URI

        if(preg_match("/board.php/", $str)) return "bbs"; // 게시판
        else if(preg_match("/write.php/", $str)) return "bbs"; // 게시판
        else if(preg_match("/content.php/", $str)) return "content"; // 콘텐츠
        else if(preg_match("/list.php/", $str)) return "list"; // 상품리스트
        else if(preg_match("/item.php/", $str)) return "item"; // 상품상세페이지
        else if(preg_match("/login.php/", $str)) return "login"; // 로그인페이지
        else if(preg_match("/mypage.php/", $str)) return "mypage"; // 마이페이지
        else if(preg_match("/register.php/", $str)) return "register"; // 회원가입
        else return "etc"; // 기타

    }

    // 네비게이션 문구 출력 (예: 홈 > 고객센터 > 공지사항)
    function viewNav()
    {

        $pageType = $this->getPageType($_SERVER['SCRIPT_NAME']);

        $me_code = $this->getMenuCode();
        if(!$me_code) $me_code = "10";

        $middleMenuCode = substr($me_code, 0, 2); // 1차메뉴 코드
        $middleMenu = $this->getMenu($middleMenuCode); // 1차메뉴 배열
        $middleMenuTitle = $this->getMenuTitle($middleMenuCode); // 1차메뉴 이름
        $curMenu    = $this->getMenu($me_code[0]); // 현재메뉴 배열
        $curMenuTitle = $this->getMenuTitle($me_code); // 현재메뉴 이름
        $menuLength = strlen($me_code);

        $middleLink = $this->getMenuLink($middleMenuCode);

        switch($pageType) {
            case "login" :
                $middleMenuTitle = "로그인";
                $middleLink = '';
                $menuLength = 1;
                break;

            case "mypage" :
                $middleMenuTitle = "마이페이지";
                $middleLink = '';
                $menuLength = 1;
                break;

            case "register" :
                $middleMenuTitle = "회원가입";
                $middleLink = '';
                $menuLength = 1;
                break;

            case "etc" :
                $middleMenuTitle = "기타";
                $middleLink = '';
                $menuLength = 1;
                break;
        }

        $strNav  = "<div class='sub_history'>";
        $strNav .= "<div class='wrap'>";
        $strNav .= "<ul class='hist_depth1'>";
        $strNav .= "<li><a href='/'>홈</a></li>";
        $strNav .= "<li><a href='" . $middleLink . "'>{$middleMenuTitle}</a></li>";

        // 마지막 메뉴인 경우
        if($menuLength>2) {
            $strNav .= "<li class='active'>";
            $strNav .= "<a href='#none'>{$curMenuTitle} ▼</a>";
            $strNav .= "<ul class='hist_depth2'>";
            for($i=0; $i<count($middleMenu); $i++) {
                $strNav .= "<li><a href='" . $middleMenu[$i]['me_link'] . "'>{$middleMenu[$i]['me_name']}</a></li>";
            }
            $strNav .= "</ul>";
            $strNav .= "</li>";
        } else if ($menuLength == 2) {
            //처음 메뉴일 경우
            $strNav .= "<li class='active'>";
            $strNav .= "<a href='#none'>전체 ▼</a>";
            $strNav .= "<ul class='hist_depth2'>";
            for($i=0; $i<count($middleMenu); $i++) {
                $strNav .= "<li><a href='" . $middleMenu[$i]['me_link'] . "'>{$middleMenu[$i]['me_name']}</a></li>";
            }
            $strNav .= "</ul>";
            $strNav .= "</li>";
        }
        $strNav .= "</ul>";
        $strNav .= "</div>";
        $strNav .= "</div>";

        return $strNav;
    }
}
?>