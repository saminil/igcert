<?php
	include_once('./_common.php');
$g5['title'] = '이의제기';
include_once(G5_THEME_PATH.'/head.php');

	/* 이 페이지는 jquery 로 작동됩니다.	*/
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<style>
    .content_wrap { 
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        font-size: 1rem;
        text-align:justify;
        overflow:hidden;
        font-weight: 400;
        line-height: 1.6 
    }
    .txtBox02 {  /* 상세페이지 타이틀 박스 */
        display: block;
        color:#006699;
        font-size: 1.6rem;
        font-weight: 500;
        text-align: center;
        border-radius: 5px;
        background: #f9f9f9;
        width: 100%;
        padding: 25px 0;
        margin: 0 0 50px;
    }
    /* ------------ 게시판 영역 ----------- */  
    .main_bbs{
        border-bottom:1px solid #ddd;
        margin-bottom:50px;
    }
    .claim_opinion{
        display:block;
        width:100%;
        margin-top:-40px;
    }
    .claim_opinion .lat .lt_more{
        top:8px; 
        right:1%;
    }
    .lat .lat_title { /* 게시판 타이틀 */
        position:relative;
        font-size:1.5rem; 
        font-weight: 500;
        padding:5px 0;
    }
    .lat li:first-child {
        border-top: 1px solid #999;
    }
    .write_qna_btn a { /* 글쓰기 버튼 */
        display: block;
        background: #fff;
        border: 1px solid #666;
        font-weight: 500;
        color: #444;
        padding: 12px 10px 12px;
        width: 210px;
        text-align: center;
        vertical-align: middle;
        margin: 30px auto 0px;
        transition: all 0.2s;
    }
    .write_qna_btn a .material-icons { /* 글쓰기 버튼 아이콘 */
        vertical-align: middle;
        font-size: 1.3rem;
        color: #333;
        margin-bottom: 3px;
        transition: all 0.2s;
    }
    .write_qna_btn:hover a { 
        background: #f4f4f4;
        border: 1px solid #f4f4f4;
    }
    .write_qna_btn:hover a .material-icons { 
        color: #999;
    }
    
    /* ------------ 컨텐츠 ----------- */
	.vision_type5 .vision_area {
        width:100%; 
        margin-bottom:40px; 
    }
	.vision_type5 .vision_area h2.title { /* 컨텐츠 타이틀 */
        position:relative; 
        font-size:1.5rem; 
        color:#000; 
        margin-bottom:20px; 
    }
	.vision_type5 .vision_area h2.title:before, .lat .lat_title:before{
        content: "";
        display: block;
        width: 30px;
        height: 2px;
        background: #3296dd;
        position: absolute;
        left: 0;
        top:-8px;
    }
    /* 컨텐츠 텍스트 박스 */
	.vision_type5 .vision_area .con_txt { 
        width:100%; 
        height:auto; 
        line-height:1.8;
    }
    .vision_type5 .vision_area .con_txt_first{ /* 첫번째 박스 */
        border-bottom:1px solid #ddd;
        padding-bottom:50px;
        margin-bottom:50px;
    } 
	.vision_type5 .vision_area .con_txt>span {
        display:block; 
        word-break:keep-all; 
        margin-top:15px;
    }
	.vision_type5 .vision_area .con_txt span:first-child{ margin-top:0; }
    /* 이의제기 제출 정보 */
    .vision_type5 .vision_area .con_txt p{
        color:#3296dd;
        margin-top:20px;
    }
    /* 이의제기 결정 컨텐츠 */
    .vision_type5 ul.appeal_info2{margin-bottom:15px;}
    .vision_type5 ul.appeal_info2 li:not(:first-child) {
        height: 30px;
        color: #2e516f;
        font-weight: 400;
        margin: 0 3%;
    }
    .vision_type5 ul.appeal_info2 li:first-child { margin: 0 0% 15px 0%; }
    
    
    /* ============= (주)아이지씨인증원 사업영역 부분 ============= */
    
	.partner_type2 .con_arrow { padding: 20px 0 }/* 사업영역 타이틀 */
	.partner_type2 .con_arrow p { position: relative;padding-left: 30px;font-size: 1.75rem }
	.partner_type2 .con_arrow p::before { content: "";display: inline-block;width: 3px;height: 23px;position: absolute;top: 4px;left: 10px;background-color: #1F88E5;transform:rotate(45deg) }/* 사업영역 타이틀 arrow */
    
	.partner_type2 .con_box { width: 100%;padding: 20px 0;border-top: 1px solid #000;border-bottom: 1px solid #000 }/* 사업영역 리스트 부분 */
	.partner_type2 .con_box::after { content: "";display: block;clear: both }
	.partner_type2 .con_box ul li { float: left;width: 50%;margin: 10px 0 }/* 리스트 2배수 가로배열 */
	.partner_type2 .con_box ul li p { display: table }
	.partner_type2 .con_box ul li p > em { display: table-cell;width: 30px }/* 리스트 좌측 원형 */
	.partner_type2 .con_box ul li p > em > strong { display: inline-block;width: 30px;height: 30px;line-height: 30px;color: #fff;background-color: #000;text-align: center;border-radius: 100%;font-weight: 500 }/* 원형 안에 숫자 */
	.partner_type2 .con_box ul li p > span { color: #555;letter-spacing: -0.75px;padding: 0 15px }/* 리스트 내용(텍스트) */
    
    
    /* =========================================================================================================================================================================== */
    
    
    /* ============= 상세페이지 반응형 시작 ============= */
    
    
    @media (max-width:1280px) {
        
        .main_bbs .wrap{padding:0px;}
        .claim_opinion{display:block;width:100%;}
        .claim_opinion .lat .lt_more{right:0%;}
        
    }
        
        
    @media screen and (max-width: 1024px){
        
        .txtBox02{font-size:1.4rem;padding:20px 0;}
        .lat .lat_title, .vision_type5 .vision_area h2.title { font-size:1.3rem; } /* 타이틀 폰트 사이즈 축소 */

	}
    
    
    @media only screen and (max-device-width: 768px) and (-webkit-min-device-pixel-ratio: 1) {
       
        .txtBox02{display:none;} 
        .content_wrap .main_bbs{;padding:0 0 50px;}   
        .claim_opinion{display:block;width:100%;margin-top:20px;}
        
        .partner_type2 .con_box ul li { float:left; width:100%; list-style:none; margin:10px 0; } /* 사업영역 */
       
	}
    
    
    @media (max-width: 640px) {
        
        .content_wrap { font-size: 0.85rem }/* 전체 폰트 사이즈 조정 */
        .lat .lat_title, .vision_type5 .vision_area h2.title { font-size:1.1rem; } /* 타이틀 폰트 사이즈 축소 */
        .lat .lat_title:before, .vision_type5 .vision_area h2.title:before { width:20px; } /* 타이틀 위 선 넓이 축소 */
        .write_qna_btn a{ width:160px; padding:10px; }
        .write_qna_btn a .material-icons { font-size:1rem; }
        .partner_type2 .con_arrow p { font-size: 1.4rem }/* 사업영역 타이틀 폰트 사이즈 조정 */
        
    }
    
    
    @media all and (min-width:360px) and (max-device-width : 414px) {
        
        .main_bbs .wrap{padding:0px !important;}
        
    }
    
    /* ============= 상세페이지 반응형 종료 ============= */
    

</style>



<div class="content_wrap">
    <section class="page_title">
        <div class="txtBox02">불만 및 이의 제기</div>
	</section>
    
	<section class="main_sec main_bbs">
        <div class="wrap">
            <!-- 일반 최근글 /theme/구매테마/skin/latest/basic/latest.skin.php -->
            <div class="claim_opinion"><?php echo latest('theme/basic', 'claim', 5, 40); ?></div>
        </div>
        <!-- 고객게시판 글쓰기 버튼 -->
        <div class="write_qna_btn">
            <a href="/bbs/write.php?bo_table=claim">고객게시판 글쓰기 <span class="material-icons">edit</span></a>
        </div>
    </section>
    
	<div class="vision_type5">
		<div class="vision_area">
            <h2 class="title">1. 이의제기</h2>
            <div class="con_txt con_txt_first">
                어떤 고객이라도 IGC 의 인증결정에 대하여 이의제기를 할 수 있습니다. <br>
                IGC의 행정부장은 이의제기가 통지된 후 30 일 이내에 수용 여부를 결정하여야 합니다.<br><br>

                이의제기는 이메일 또는 아래의 주소로 IGC 의 운영(행정)관리자에게 제출하실 수 있습니다.<br>

                <p>
                &#9919; 주소 : 서울특별시 금천구 서부샛길 638 대륭테크노타운 7차 501호<br>
                &#9919; E-Mail : <span class="igc_email">info@igcert.org</span><br>
                &#9919; 전화 : 02-6749-0701 / 팩스: 02-6749-0711<br><br>
                </p>

                제출된 이의제기 문서를 검증하고 조사하기 위해,  관련된 증거 자료도 함께 제출되어야 합니다.<br><br>

                행정부는 이의제기 문서를 검증하고, 필요시 추가자료를 요청할 수 있습니다.<br>
                이의제기에 대한 확인 후, 행정부서의 관리자에게 전달되면, 관리자는 이의제기를 인정하지 않거나, 이의제기 내용에 기반하여 어필패널을 구성할 권리를 갖고 있습니다.<br><br>

                Adverse certification 이나 재인증에 대한 결정 또는 인증 취소에 대한 이의제기는 서면으로 처리되어야 합니다.  서면으로 작성된 이의제기는 공식적으로 문서화된 절차를 통해 빠른 시일 내 검토 및 해결할 것입니다.<br><br>

                <ul class="appeal_info2">
                    <li class="first_line">이의제기는 다음과 같은 결정으로 진행 될 수 있습니다.</li>
                    <li>a. 최초 인증에 대한 승인 거절</li>
                    <li> b. 인증 유지에 대한 승인 거절 </li>
                    <li> c. 인증 등급 상향 승인에 대한 거절</li>
                    <li> d. 인증 등급 하락</li>
                </ul>

                이의제기가 받아들여지면, 행정관리자는 어필패널을 구성하며, 필요하다면, 어필패널의장은 이의제기 신청인에게 참석을 요청 할 수 있습니다.<br>
                어필패널은 이의제기 신청인의 만족을 위하여 행정관리자에게 필요한 조치를 하도록 권고사항을 제공하며, 어필패널은 이러한 상황의 재발을 막기 위하여 예방조치를 권고 합니다.<br><br>
                행정관리자는 이러한 어필패널의 권고사항을 기반으로 이의제기에 대한 결정을 하며, 이 행정부장의 결정은 최종결정으로 처리됩니다.<br>
                위의 절차는 이의제기가 접수된 후로부터 45일 안에 완료되어야 합니다.<br><br>

                행정관리자의 결정에 불복한 이의신청인은 IGC 대표에게 다시 이의를 제기할 수 있습니다.<br><br>

                IGC의 대표는 3명으로 구성된 어필패널을 소집하고, 어필패널은 어필케이스를 조사하고 어필을 처리하기 위한 관련절차를 따르게 됩니다.<br><br>

                IGC의 대표는 어필패널의 권고를 기반으로 어필 수용에 대한 결정을 내립니다. 이 경우, 대표의 결정은 최종적입니다.<br>
                위 절차는 대표에게 이의제기가 보고된 이후로 45일 안에 완료됩니다.<br><br>

                IGC의 대표는 필요하다고 생각되는 적절한 전문가에게 조언을 구할 수 있습니다.<br>
                이의신청인이 IGC 대표의 결정에 만족하지 못한다면 , 이의신청인은 Accreditation Body에 이의를 제기할 수 있습니다.<br>
                하지만, 이 방법은 IGC 에 대한 모든 이의제기 방법을 모두 사용한 다음에 사용될 수 있습니다.<br>
                이 경우, 인정기관의 이의신청절차를 따르게 됩니다.<br>
            </div>
        </div>

        <div class="vision_area">
            <h2 class="title">2. 불만 제출</h2>
            <div class="con_txt">
               고객 불만은 행정부가 처리합니다. 행정부는 고객 불만을 접수하고, 검증하고, 조사하는 모든 권한과 그리고 고객 불만에 대한 시정조치를 할 수 있는 결정권을 가지고 있습니다.<br>
               서면 또는 구두, 내 외부 고객 불만은 IGC의 모든 직원들에 의해서 접수 될 수 있습니다.<br><br>
                
               접수된 고객 불만은 GPC 가 운영하는 컴플레인 레지스터에 등록되는 동시에 행정부장에게 전달됩니다.<br>
               필요하다면 추가적인 정보를 불만 제기자에게 요청할 수 있습니다.<br><br>

               IGC는 고객불만에 대해 전화, intrerim reply 또는 이메일을 통해 24시간 안에 컴플레인을 건 사람에게 답변을 보내야 합니다.<br>
               가능하다면, 공식적인 통지는 불만 처리과정이 끝날 때, 불만제기를 한 사람에게 제공해야 합니다.<br><br>
                
               행정관리자는 지체 없이 컴플레인 신청인에게 고객 불만을 해결하기 위해  필요한 시정 및 예방조치 등 IGC의 공식적인 처분을 전달 할 것입니다.<br>
               컴플레인의 종결은 신청인에게 통보해야 하며, 컴플레인 신청인과 컴플레인의 내용은 IGC 컴플레인 처리 절차에 따라 기밀 유지 되어야 합니다.<br>
            </div>
	    </div>
    </div>
    <br>

    <!----(주)아이지씨인증원 사업영역 시작-------->
    <section class="partner_type2">
            <h2 class="con_arrow">
        <p>우리가 제공하는 관련 서비스</p>
            </h2>
            <div class="con_box">
              <ul>
                <li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
                <li><p><em><strong>02</strong></em><span>시험</span></p></li>
                <li><p><em><strong>03</strong></em><span>전문인력 양성 교육</span></p></li>
                <li><p><em><strong>04</strong></em><span>제품 인증</span></p></li>
                <li><p><em><strong>05</strong></em><span>심사원 인증</span></p></li>
                <li><p><em><strong>06</strong></em><span>연수기관 지정</span></p></li>
              </ul>
            </div>
    </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------>
      
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>