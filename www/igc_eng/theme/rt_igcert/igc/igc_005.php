<?php
	include_once('./_common.php');
$g5['title'] = 'Appeal';
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
    
    /* ------------ 컨텐츠 ----------- */
    .vision_type5{margin-top:60px;}
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
        
    }
        
        
    @media screen and (max-width: 1024px){
        
        .txtBox02{font-size:1.4rem;padding:20px 0;}
        .vision_type5 .vision_area h2.title { font-size:1.3rem; } /* 타이틀 폰트 사이즈 축소 */

	}
    
    
    @media only screen and (max-device-width: 768px) and (-webkit-min-device-pixel-ratio: 1) {
       
        .txtBox02{display:none;} 
        .content_wrap .main_bbs{;padding:0 0 50px;}   
        
        .partner_type2 .con_box ul li { float:left; width:100%; list-style:none; margin:10px 0; } /* 사업영역 */
       
	}
    
    
    @media (max-width: 640px) {
        
        .content_wrap { font-size: 0.85rem }/* 전체 폰트 사이즈 조정 */
        .vision_type5 .vision_area h2.title { font-size:1.1rem; } /* 타이틀 폰트 사이즈 축소 */
        .vision_type5 .vision_area h2.title:before { width:20px; } /* 타이틀 위 선 넓이 축소 */

        .partner_type2 .con_arrow p { font-size: 1.4rem }/* 사업영역 타이틀 폰트 사이즈 조정 */
        
    }
    
    
    @media all and (min-width:360px) and (max-device-width : 414px) {
        
    }
    
    /* ============= 상세페이지 반응형 종료 ============= */
    

</style>



<div class="content_wrap">
    <section class="page_title">
	   <div class="txtBox02">Raising the Appeal and Complaint</div>
	</section>

	<div class="vision_type5">
		<div class="vision_area">
            <h2 class="title">1. Appeal Process</h2>
            <div class="con_txt con_txt_first">
                Any customer can appeal the IGC's certification decision. <br>
                The Executive Director of the IGC must decide whether to accept the appeal within 30 days of being notified of the appeal.<br><br>

                Appeals can be submitted to the IGC's management (administrative) manager by email or at the address below.<br>

                <p>
                &#9919; Address: #501, 638, Seobusaet-gil, Geumcheon-gu, Seoul, Republic of Korea<br>
                &#9919; e-mail: <span class="igc_email">info@igcert.org</span><br>
                &#9919; Phone: +82 2 6749 0701   Fax: +82 2 6749 0711<br><br>
                </p>

                In order to verify and investigate the submitted appeal document, the relevant evidence must also be submitted.<br><br>

                The administration can verify appeal documents and request additional data if necessary.<br>
                After confirming the appeal, if it is delivered to the manager of the administration department, the manager does not acknowledge the appeal or has the right to organize the appeal panel based on the appeal content.<br><br>

                Adverse certification, decision on re-certification, or appeal to revocation of certification shall be processed in writing. Any written appeals will be reviewed and resolved as soon as possible through formal documented procedures.<br><br>

                <ul class="appeal_info2">
                    <li class="first_line">Appeals can be made in the following decisions:</li>
                    <li>a. Refusing to accept initial certification</li>
                    <li>b. Rejecting approval for maintaining certification</li>
                    <li>c. Refusing to approve upgrading certification grade</li>
                    <li>d. Decrease in certification rating</li>
                </ul>

                If an appeal is accepted, the administrative manager organizes an appeal panel, and if necessary, the chairman of the appeal panel can request the applicant to attend.<br>
                The Appeal Panel recommends the administrative manager to take necessary measures for the satisfaction of the claimant, and the Appeal Panel recommends preventive measures to prevent recurrence of such a situation.<br><br>
                The administrator makes the decision on the appeal based on the recommendation of the Appeal Panel, and the Executive Director's decision is treated as a final decision.<br>
                The above procedure must be completed within 45 days of the complaint being filed.<br><br>


                Objectors who disapprove of the Administrator's decision may raise an appeal to IGC representative.<br><br>


                IGC representatives will convene a three-member Appeal Panel, which will investigate the Appeal Case and follow the relevant procedures to handle the Appeal.<br><br>


                IGC representatives make decisions on accepting appeals based on recommendations from the Appeal Panel. In this case, the representative's decision is final.<br>
                The above procedure will be completed within 45 days of the complaint being reported to the Representative.<br><br>


                IGC representatives can seek advice from the appropriate experts they think are necessary.<br>
                If the complainant is not satisfied with IGC representative's decision, the complainant may challenge the Accreditation Body.<br>
                However, this method can be used after all appeals to IGC have been made.<br>
                In this case, the process of filing an appeal from the accreditation body will be followed.<br>

            </div>

         </div>

         <div class="vision_area">
            <h2 class="title">2. Complaints</h2>
            <div class="con_txt">
               Customer complaints are handled by the administration. The administration has authorities to receive, verify, and investigate customer complaints, as well as the decision to take corrective action on customer complaints.<br>
               Written or verbal, internal or external customer complaints can be filed by any employee at IGC.<br>
               Customer complaints received are registered in the complaint register operated by GPC and forwarded to the Executive Director.<br>
               If necessary, additional information can be requested from the complainant.<br><br>

               IGC must respond to complaints by phone, interim reply or e-mail to the complainant within 24 hours.<br>
               If possible, formal notices should be given to the person making the complaint at the end of the complaint process.<br>
               The administrative manager will, without delay, deliver the official disposition of the IGC, including corrective and preventive measures necessary to resolve customer complaints, to the complaint applicant.<br>
               The conclusion of the complaint must be notified to the complainant, and the complainant and the contents of the complaint must be kept confidential in accordance with the IGC complaint processing procedures.<br>
            </div>	
        </div>
    </div>
    <br>


	<!----(주)아이지씨인증원 사업영역 시작-------->
   <section class="partner_type2">
    <h2 class="con_arrow">
        <p>Related Services from IGC</p>
    </h2>
    <div class="con_box">
      <ul>
        <li><p><em><strong>01</strong></em><span>System Certification</span></p></li>
        <li><p><em><strong>02</strong></em><span>Testing</span></p></li>
        <li><p><em><strong>03</strong></em><span>Professional Manpower Training Course</span></p></li>
        <li><p><em><strong>04</strong></em><span>Product Certification</span></p></li>
        <li><p><em><strong>05</strong></em><span>Auditor Certification</span></p></li>
        <li><p><em><strong>06</strong></em><span>Designation of Training Institute</span></p></li>
      </ul>
    </div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>
      
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>