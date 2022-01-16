<?php
include_once('./_common.php');
$g5['title'] = '(주)아이지씨인증원 | 사이트맵';
include_once(G5_THEME_PATH.'/head.php');
?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>

    /*자료실-사이트맵 페이지 시작-YR 211001*/
    .container_title{display:none;}
    .sitemap1>span{ /*메뉴클릭시 이동한다는 안내메세지*/
        font-size:0.9rem;
        font-weight:400;
        height:40px;
        line-height:40px;
    }
    .sitemap1 .material-icons{
        vertical-align:middle;
        font-size:1rem;
        padding-right:4px;
    }
    .sitemap1 .swipe{display:none;}
    
    
    /*테이블 시작*/
    table{
        width:100%;
        min-width:250px;
        overflow-x: auto;
        margin-top:5px;
        font-size:0.75rem;
        line-height:1.4rem;
    }
    th,td{
        border: 1px solid #555;
        padding:5px;
        margin-top:-10px;
    }
    table tr{
        height:40px;
        color:#333;
        font-weight:400;
    }
    table a{transition:all 0.2s;} /* 210721 전산팀 yr*/
    table td:hover a{color:#fff}
    table td{transition:all 0.2s;} /* 210721 전산팀 yr*/
    table td:hover{background:#6cb3ef;}
    table td.empty_block:hover{background:#fff;cursor:default;}
    
    .table_tt, .table_tt_2{ /*상단 주메뉴 제목*/
        text-align:center;
        font-weight:500;
        color:#222;
        font-size:0.95rem;
        background:#a6d2f7;
        height:45px; 
    }
    .table_tt_2{height:40px;}
    .menu_2depth{
        font-weight:400;
        color:#222;
        font-size:0.85rem;
        background:#edf3f7;
    }
    .menu_3depth{
        font-weight:400;
        color:#222;
        font-size:0.8rem;
        background:#f9f9f9;
    }
    
    .last_row{}

    /*자료실-사이트맵 페이지 종료*/

    
    
    /* (주)아이지씨인증원 사업영역 시작  */	
	.partner_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.partner_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.partner_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.partner_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}

	.partner_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.partner_type2 .con_box:after{content:""; display:block; clear:both;}
	.partner_type2 .con_box ul { padding:0; margin:0; }
	.partner_type2 .con_box ul li {float:left; width:50%; list-style:none; margin:10px 0; }
	.partner_type2 .con_box ul li p{display:table; width:100%; }
	.partner_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.partner_type2 .con_box ul li p > em{ width:30px; }
	.partner_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.partner_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}
    /* (주)아이지씨인증원 사업영역 종료  */
    
    
    /* -----------------------------------------------------반응형 시작 -210803 yr*/  
    
    /* 놋북,태블릿 사이즈, 최대 1280px 화소까지 적용 */
    @media (max-width:1280px) {}
    
    /* 최대 1024px 화소까지 적용 */
    @media (max-width:1024px) {
        
        .table_tt, .table_tt_2{ font-size:0.9rem; } /*상단 주메뉴 제목*/
        th,td{ min-width:60px; }

    }
    

    /*  최대 768px 화소까지 적용 */
    @media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        
        .sitemap1>span{ font-size:0.8rem; } /*메뉴클릭시 이동한다는 안내메세지*/
        
        .sub_top_tt{ display:none; } /*탭메뉴와 중복되어서 안보이게함*/
        table{font-size:0.7rem;}
        th,td{ padding:5px 0.6%; }
        .menu_2depth{ font-size:0.8rem; }
        .menu_3depth{ font-size:0.75rem; }
        
        .partner_type2 .con_arrow p{ font-size:1.4rem }
        
    }


    /* 모바일(가장 작은 사이즈: SAMSUNG GALAXY S6) 가로 버전 사이즈, 최소 360px ~ 최대 640px(가로로 볼때) 화소까지 적용 */    
    @media all and (max-device-width : 640px) { 
        .sitemap1{overflow-x:scroll}
        .sitemap1 .swipe {display: block;color: #2e78e6;text-align: right;height: 15px;font-size: 0.8rem;}
        
        .sitemap1>span{ font-size:0.7rem; } /*메뉴클릭시 이동한다는 안내메세지*/
        table{ font-size:0.7rem; }
        th,td{ padding:4px 0.6%; }
        .table_tt, .table_tt_2{ font-size:0.8rem;color:#333; } /*상단 주메뉴 제목*/
        .menu_2depth{ font-size:0.75rem;background:#f7f7f7; }
        a:visited{ color:inherit; }
        
    }


    /* 모바일(가장 큰 사이즈: iPhone 6/7/8 Plus) 세로 버전 사이즈, 최소 360px ~ 최대 414px 화소까지 적용 */
    @media all and (min-width:360px) and (max-device-width : 414px) {  
        
        .sitemap1>span{ font-size:0.7rem; } /*메뉴클릭시 이동한다는 안내메세지*/
        th,td{ padding:4px 0.8%; border:1px solid #ddd }
        .table_tt, .table_tt_2{ font-size:0.75rem;color:#333; } /*상단 주메뉴 제목*/
        
        .partner_type2 .con_arrow p{ font-size:1.2rem }
        
    }  
    
/*---------------------------------------------------------------반응형 끝*/
    
</style>



<div class="content_wrap">

	<section class="vision_type1">
         <img src="./images/banner03_06.png" alt="사이트맵 배너"><br><br>
          <div class="sitemap1">
              <div class="swipe"><span class="material-icons">swipe</span>Swipe&nbsp;</div>
             <span style="display:block;text-align:right;color:#28a4ed"><span class="material-icons">open_in_new</span>메뉴를 클릭하시면 관련내용을 확인하실 수 있습니다.</span>
             
                 <table cellspacing="0" cellpadding="0">
                      <col width="168" span="7">
                      <tr>
                        <td width="168" class="table_tt"><strong><a href="../igc/igc_001.php">회사안내</a></strong></td>
                        <td width="504" colspan="3" align="center"  class="table_tt"><strong><a href="../manage/igc_006.php">제공서비스</a></strong></td>
                        <td width="168" class="table_tt"><strong><a href="/bbs/board.php?bo_table=notice">자료실</a></strong></td>
                        <td width="168" class="table_tt"><strong><a href="/bbs/board.php?bo_table=free">주요뉴스</a></strong></td>
                        <td width="168" class="table_tt"><strong><a href="/bbs/board.php?bo_table=gallery">인재채용</a></strong></td>
                      </tr>
                      <tr>
                        <td width="168" data-sheets-value="{'1':2,'2':'회사소개'}" class="menu_2depth"><a href="../igc/igc_001.php">회사소개</a></td>
                        <td rowspan="23" width="168"  class="menu_2depth"><a href="../manage/igc_006.php">시스템 인증</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'품질 경영'}" class="menu_3depth"><a href="../manage/igc_006_ISO9001.php">품질</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 9001'}"><a href="../manage/igc_006_ISO9001.php">ISO 9001</a></td>
                        <td width="168" class="menu_2depth"><a href="/bbs/board.php?bo_table=notice">자료파일</a></td>
                        <td width="168" class="menu_2depth"><a href="/bbs/board.php?bo_table=free">인증정보</a></td>
                        <td width="168" class="menu_2depth"><a href="/bbs/board.php?bo_table=gallery">채용공고</a></td>
                      </tr>
                      <tr>
                        <td width="168" data-sheets-value="{'1':2,'2':'행동강령'}" class="menu_2depth"><a href="../igc/igc_002.php">행동강령</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'환경'}" class="menu_3depth"><a href="../manage/igc_007_ISO14001.php">환경</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 14001'}"><a href="../manage/igc_007_ISO14001.php">ISO 14001</a></td>
                        <td width="168" class="menu_2depth"><a href="/bbs/board.php?bo_table=introduce">홍보자료</a></td>
                        <td rowspan="13" width="168" class="empty_block">　</td> <!--주요뉴스 공백-->
                        <td rowspan="112" width="168" class="empty_block">　</td> <!--인재채용 공백-->
                      </tr>
                      <tr>
                        <td width="168" data-sheets-value="{'1':2,'2':'공정성'}" class="menu_2depth"><a href="../igc/igc_003.php">공정성</a></td>
                        <td rowspan="2" width="168" data-sheets-value="{'1':2,'2':'보건 및 안전'}" class="menu_3depth"><a href="../manage/igc_008_OHSAS18001.php">안전보건</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'OHSAS 18001'}"><a href="../manage/igc_008_OHSAS18001.php">OHSAS 18001</a></td>
                        <td width="168"class="menu_2depth"><a href="/bbs/board.php?bo_table=igcglobal">협력업체</a></td>
                      </tr>
                      <tr>
                        <td width="168" data-sheets-value="{'1':2,'2':'인증로고&마크'}"class="menu_2depth"><a href="../igc/igc_004.php">CI&amp;Mark</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 45001'}"><a href="../manage/igc_008_ISO45001.php">ISO 45001</a></td>
                        <td width="168"class="menu_2depth"><a href="../igc/process.php">시스템절차</a></td>
                      </tr>
                      <tr>
                        <td width="168" data-sheets-value="{'1':2,'2':'이의제기'}"class="menu_2depth"><a href="../igc/igc_005.php">이의제기</a></td>
                        <td rowspan="3" width="168" data-sheets-value="{'1':2,'2':'보건 및 의료기기'}" class="menu_3depth"><a href="../manage/igc_010_ISO13485.php">보건 및 의료기기</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 13485'}"><a href="../manage/igc_010_ISO13485.php">ISO 13485</a></td>
                        <td width="168"class="menu_2depth"><a href="../igc/process02_product.php">제품절차</a></td>
                      </tr>
                      <tr>
                        <td width="168" data-sheets-value="{'1':2,'2':'오시는 길'}"class="menu_2depth"><a href="../igc/igc_location.php">오시는 길</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 15378'}"><a href="../manage/igc_010_ISO15378.php">ISO 15378</a></td>
                        <td width="168"class="menu_2depth"><a href="../igc/igc_sitemap.php">사이트맵</a></td>
                      </tr>
                      <tr>
                        <td rowspan="107" width="168" class="empty_block">　</td> <!-- 회사안내 공백 -->
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 14155'}"><a href="../manage/igc_010_ISO14155.php">ISO 14155</a></td>
                        <td rowspan="107" width="168" class="empty_block">　</td> <!-- 자료실 공백 -->
                      </tr>
                      <tr>
                        <td rowspan="5" width="168"  class="menu_3depth"><a href="../manage/igc_014_ISO22000.php">식품</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 22000'}"><a href="../manage/igc_014_ISO22000.php">ISO 22000</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="/theme/rt_igcert/manage/igc_015_FSSC22000.php">FSSC 22000</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="/theme/rt_igcert/manage/igc_016_FDA-FSMA.php">FDA FSMA</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="/theme/rt_igcert/manage/igc_017_GlobalHACCP.php">Global HACCP</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="/theme/rt_igcert/manage/igc_017-2_SQF.php">SQF</a></td>
                      </tr>
                      <tr>
                        <td width="168"  class="menu_3depth"><a href="../manage/igc_018_ISO50001.php">에너지</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 50001'}"><a href="../manage/igc_018_ISO50001.php">ISO 50001</a></td>
                      </tr>
                      <tr>
                        <td rowspan="3" width="168"  class="menu_3depth"><a href="../manage/igc_019_ISO27001.php">정보 보안</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 27001'}"><a href="../manage/igc_019_ISO27001.php">ISO/IEC 27001</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../manage/igc_019_ISO27701.php">ISO/IEC 27701</a></td>
                        <td width="168" align="center" class="table_tt"><a href="../igc/igc_sitemap.php"><strong>기타</strong></a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../manage/igc_020_ISO20000-1.php">ISO/IEC 20000-1</a></td>
                        <td width="168"><a href="/bbs/content.php?co_id=privacy">개인정보처리방침</a></td>
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../manage/igc_021ISO37001.php">부패 방지</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 37001'}"><a href="../manage/igc_021ISO37001.php">ISO 37001</a></td>
                        <td width="168"><a href="/bbs/content.php?co_id=provision">서비스이용약관</a></td>
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../manage/igc_022_ISO21001.php">교육</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 21001'}"><a href="../manage/igc_022_ISO21001.php">ISO 21001</a></td>
                        <td width="168"><a href="/bbs/qalist.php">1:1상담</a></td>
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../manage/igc_023_ISO22301.php">사업연속성</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 22301'}"><a href="../manage/igc_023_ISO22301.php">ISO 22301</a></td>
                        <td width="168"><a href="/bbs/search.php?sfl=wr_subject%7C%7Cwr_content&sop=and&stx=">게시판 전체 검색</a></td>
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../manage/igc_024_ISO22716.php">화장품</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 22716'}"><a href="../manage/igc_024_ISO22716.php">ISO 22716</a></td>
                        <td width="168"><a href="/bbs/register.php">회원가입 페이지</a></td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="168" class="menu_3depth"><a href="../manage/igc_025_ISO10002.php">고객 만족</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 10002/10004'}"><a href="../manage/igc_025_ISO10002.php">ISO 10002</a></td>
                        <td width="168"><a href="/bbs/login.php">로그인 페이지</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../manage/igc_025_ISO10004.php">ISO 10004</a></td>
                        <td width="168" class="empty_block">　</td> <!-- 기타메뉴 하단 공백-->
                      </tr>
                      <tr>
                        <td width="168"  class="menu_3depth"><a href="../manage/igc_026_SA8000.php">사회적 책임</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'SA 8000'}"><a href="../manage/igc_026_SA8000.php">SA 8000</a></td>
                        <td width="168" align="center" class="table_tt"><a href="/igc_eng/"><strong>영문홈페이지</strong></a></td>
                      </tr>
                      <tr>
                        <td rowspan="7" width="168" class="menu_2depth"><a href="../medical/igc_026.php">시험</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'전기전자'}" class="menu_3depth"><a href="../medical/igc_026-1.php">전기전자</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'전기안전'}"><a href="../medical/igc_026-1.php">전기안전</a></td>
                        <td rowspan="90" width="168" class="empty_block">　</td>  <!-- 영문페이지 하단 공백-->
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../medical/igc_027-2.php">기계</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'기계안전'}"><a href="../medical/igc_027-2.php">기계안전</a></td>
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../medical/igc_028-3.php">의료기기</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'의료기기 인증시험'}"><a href="../medical/igc_028-3.php">의료기기 인증시험</a></td>
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../medical/igc_029.php">화학분석</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'식품 영양분석'}"><a href="../medical/igc_029.php">식품 영양분석</a></td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="168" class="menu_3depth"><a href="../medical/igc_030-4.php">생물학적 시험</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'식품 영양분석'}"><a href="../medical/igc_030-4.php">식품 미생물 시험</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../medical/igc_031-5.php">위생테스트</a></td>
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../medical/igc_036.php">건축자재</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'건축자재 인증시험'}"><a href="../medical/igc_036.php">건축자재 인증시험</a></td>
                      </tr>
                      <tr>
                        <td rowspan="33" width="168" class="menu_2depth"><a href="../edu1/igc_033.php">교육</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'품질'}" class="menu_3depth"><a href="../edu1/igc_033_ISO9001.php">품질</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 9001'}"><a href="../edu1/igc_033_ISO9001.php">ISO 9001</a></td>
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../edu1/igc_034_ISO14001.php">환경</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 14001'}"><a href="../edu1/igc_034_ISO14001.php">ISO 14001</a></td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="168" class="menu_3depth"><a href="../edu1/igc_040-14_OHSAS18001.php">안전 보건</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'OHSAS 18001'}"><a href="../edu1/igc_040-14_OHSAS18001.php">OHSAS 18001</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_047_ISO45001.php">ISO 45001</a></td>
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../edu1/igc_035_ISO13485.php">의료기기</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 13485'}"><a href="../edu1/igc_035_ISO13485.php">ISO 13485</a></td>
                      </tr>
                      <tr>
                        <td rowspan="4" width="168" class="menu_3depth"><a href="../edu1/igc_036_ISO22000.php">식품</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 22000'}"><a href="../edu1/igc_036_ISO22000.php">ISO 22000</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_037_FSSC22000.php">FSSC 22000</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_038-12_FDA-FSMA.php">FDA FSMA</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_039-13_FSPCA-PCQL.php">PCQI</a></td>
                      </tr>
                      <tr>
                        <td rowspan="9" width="168" class="menu_3depth"><a href="../edu1/igc_067_ISO-ICE20000.php">정보보안</a></td>
                        <td width="168"><a href="../edu1/igc_067_ISO-ICE20000.php">ISO/IEC 20000-1</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_044_ISO27001.php">ISO/IEC 27001</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_041-15_ISO-IEC27002.php">ISO/IEC 27002</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_042_ISO-IEC27005.php">ISO/IEC 27005</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_064_ISO-IEC27032.php">ISO/IEC 27032</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_066_ISO-IEC27035.php">ISO/IEC 27035-1</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_043_ISO27799.php">ISO 27799</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_054_ISO-IEC29100.php">ISO/IEC 29100</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_053_ISO-IEC38500.php">ISO/IEC 38500</a></td>
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../edu1/igc_052_ISO31000.php">위험관리</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 31000'}"><a href="../edu1/igc_052_ISO31000.php">ISO 31000</a></td>
                      </tr>
                      <tr>
                        <td rowspan="3" width="168" class="menu_3depth"><a href="../edu1/igc_056_ISO-TS29001.php">교통, 통신 및 에너지</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO/TS 29001'}"><a href="../edu1/igc_056_ISO-TS29001.php">ISO 29001</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_058_ISO39001.php">ISO 39001</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_057_ISO50001.php">ISO 50001</a></td>
                      </tr>
                      <tr>
                        <td rowspan="4" width="168" class="menu_3depth"><a href="../edu1/igc_059_ISO28000.php">연속성 및 복원력</a></td>
                        <td width="168"><a href="../edu1/igc_059_ISO28000.php">ISO 22301</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_062_ISO22316.php">ISO 22316</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_063_ISO22317.php">ISO/TS 22317</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_061_ISO22320.php">ISO 22320</a></td>
                      </tr>
                      <tr>
                        <td rowspan="4" width="168" class="menu_3depth"><a href="../edu1/igc_048_ISO13053.php">비즈니스운영</a></td>
                        <td width="168"><a href="../edu1/igc_048_ISO13053.php">ISO 13053</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_051_ISO2021500.php">ISO 21500</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_050_ISO30301.php">ISO 30301</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_068_ISO55001.php">ISO 55001</a></td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="168" class="menu_3depth"><a href="../edu1/igc_046_ISO26000.php">사회적 책임 및 부패관리</a></td>
                        <td width="168"><a href="../edu1/igc_046_ISO26000.php">ISO 26000</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../edu1/igc_055_ISO37001.php">ISO 37001</a></td>
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../edu1/igc_049_ISO-IEC17025.php">시험 및 교정</a></td>
                        <td width="168"><a href="../edu1/igc_049_ISO-IEC17025.php">ISO/IEC 17025</a></td>
                      </tr>
                      <tr>
                        <td rowspan="35" width="168" class="menu_2depth"><a href="../product/igc_069.php">제품 인증</a></td>
                        <td rowspan="10" width="168" data-sheets-value="{'1':2,'2':'유럽 제품인증'}" class="menu_3depth"><a href="../product/igc_069_CEMDD.php">유럽 제품인증</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'CE MDD'}"><a href="../product/igc_069_CEMDD.php">CE MDD</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_070_CEMDR.php">CE MDR</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_071_PMS.php">임상평가</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_072_CE-IVD-IVDR.php">CE IVD/IVDR</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_073_CE-LVD-EMC.php">CE LVD/EMC</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_074_CE-Machinery.php">CE Machinery</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_075_PED.php">CE PED</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_076_SPVD.php">CE SPVD</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_077_Hot-water-boiler.php">Hot-water boiler</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_078_Gas-Appliance.php">Gas Appliance</a></td>
                      </tr>
                      <tr>
                        <td rowspan="5" width="168" class="menu_3depth"><a href="../product/igc_079_EAC-Certification.php">유라시아 제품인증</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'EAC 인증'}"><a href="../product/igc_079_EAC-Certification.php">EAC 인증</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_080_01.php">의료기기</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_081_01.php">식품</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_082_01.php">화장품</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_083_01.php">의약품</a></td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="168" class="menu_3depth"><a href="../product/igc_084_GOST-R.php">러시아 제품인증</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'GOST-R'}"><a href="../product/igc_084_GOST-R.php">GOST-R</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_085_01.php">의료기기 러시아 등록</a></td>
                      </tr>
                      <tr>
                        <td rowspan="7" width="168" class="menu_3depth"><a href="../product/igc_086_FDA.php">미주 제품인증</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'FDA'}"><a href="../product/igc_086_FDA.php">FDA</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_087_01.php">의료기기</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_088_01.php">전자 및 방사선 장치</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_089_01.php">의약품</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_090_01.php">식음료품</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_091_01.php">건강 보조 식품</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_092_01.php">화장품</a></td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="168" class="menu_3depth"><a href="../product/igc_093_CFDA.php">중국 제품인증</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'CFDA'}"><a href="../product/igc_093_CFDA.php">CFDA</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_094_01.php">식품 위생 등록</a></td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="168" class="menu_3depth"><a href="../product/igc_095_01.php">동남아시아 제품인증</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'태국 의료기기 등록'}"><a href="../product/igc_095_01.php">태국 의료기기 등록</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_096_01.php">대만 의료기기 등록</a></td>
                      </tr>
                      <tr>
                        <td rowspan="3" width="168" class="menu_3depth"><a href="../product/igc_097_VeganSociety.php">Vegan 인증</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'Vegan Society 소개'}"><a href="../product/igc_097_VeganSociety.php">Vegan Society 소개</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_098_01.php">식품 &amp; Restaurant</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_099_01.php">화장품</a></td>
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../product/igc_101_HALAL.php">HALAL 인증</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'HALAL'}"><a href="../product/igc_101_HALAL.php">HALAL</a></td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="168" class="menu_3depth"><a href="../product/igc_102_EWG.php">화장품 인증</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'EWG'}"><a href="../product/igc_102_EWG.php">EWG</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../product/igc_103_CPNP.php">CPNP</a></td>
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../product/igc_078_kc.php">한국 KC 인증</a></td>
                        <td width="168"><a href="../product/igc_078_kc.php">안전/전자파 인증</a></td>
                      </tr>
                      <tr>
                        <td rowspan="12" width="168" class="menu_2depth"><a href="../aduits/igc_104.php">심사원 인증</a></td>
                        <td rowspan="4" width="168" class="menu_3depth"><a href="../aduits/igc_104_ISO9001.php">Part 1</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'ISO 9001'}"><a href="../aduits/igc_104_ISO9001.php">ISO 9001</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../aduits/igc_105_ISO14001.php">ISO 14001</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../aduits/igc_106_ISO13485.php">ISO 13485</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../aduits/igc_107_ISO45001.php">ISO 45001</a></td>
                      </tr>
                      <tr>
                        <td rowspan="4" width="168" class="menu_3depth"><a href="../aduits/igc_108_ISOIEC22000-1.php">Part 2</a></td>
                        <td width="168"><a href="../aduits/igc_108_ISOIEC22000-1.php">ISO/IEC 20000-1</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../aduits/igc_109_ISO27001.php">ISO/IEC 27001</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../aduits/igc_110_ISO22716.php">ISO 22716</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../aduits/igc_111_ISO50001.php">ISO 50001</a></td>
                      </tr>
                      <tr>
                        <td rowspan="4" width="168" class="menu_3depth"><a href="../aduits/igc_112_ISO22000.php">Part 3</a></td>
                        <td width="168"><a href="../aduits/igc_112_ISO22000.php">ISO 22000</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../aduits/igc_113_FSSC22000.php">FSSC 22000</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../aduits/igc_114_FDAFSMA.php">FDA FSMA</a></td>
                      </tr>
                      <tr>
                        <td width="168"><a href="../aduits/igc_115_PCQI.php">PCQI</a></td>
                      </tr>
                      <tr>
                        <td rowspan="3" width="168" class="menu_2depth"><a href="../global/igc_105.php">연수기관</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'개요'}" class="menu_3depth"><a href="../global/igc_116_012.php">개요</a></td>
                        <td width="168" data-sheets-value="{'1':2,'2':'개요'}"><a href="../global/igc_116_012.php">개요</a></td>
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../global/igc_117_01.php">연수시관 지정 절차</a></td>
                        <td width="168"><a href="../global/igc_117_01.php">연수시관 지정 절차</a></td>
                      </tr>
                      <tr>
                        <td width="168" class="menu_3depth"><a href="../global/igc_118_01.php">연수기관 시험 감독관</a></td>
                        <td width="168"><a href="../global/igc_118_01.php">연수기관 시험 감독관</a></td>
                      </tr>
                    </table> 
           </div>
         <br>
	</section>	
	<br><br>
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>시스템인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>시험</span></p></li>
				<li><p><em><strong>03</strong></em><span>전문인력 양성 교육</span></p></li>
				<li><p><em><strong>04</strong></em><span>제품 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span>심사원 인증</span></p></li>
				<li><p><em><strong>06</strong></em><span>연수기관 지정</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>   

</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>