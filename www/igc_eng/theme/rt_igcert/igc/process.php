<?php
	include_once('./_common.php');
$g5['title'] = 'System certification process';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

    /* 이 페이지는 jquery 로 작동됩니다.	*/
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 


<style>
    .content_wrap { 
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        font-size: 1rem;
        text-align:justify;
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
        margin: 0 0 20px;
    }
   .page_title img{margin-bottom:40px;} /*배너 이미지*/
	.page_title h2.sub_txt{ /* 타이틀 하단 텍스트 */
        margin:0 auto 50px; 
        text-align:center;
        color:#666; 
        font-weight:400;
        font-size:0.95rem;
    }
    .page_title h2.sub_txt:after {
        content: "";
        clear: both;
        display: block;
        width: 30px;
        margin: 50px auto 0;
        border: 1px solid #333;
    }
    /* ------------ 컨텐츠 ----------- */  
	.vision_type2 p.stitle { display:block; }
    .vision_type2 .img_div{
        width:100%;
        margin-bottom:60px;
        padding-bottom:0px;
        border-bottom:1px solid #ddd;
    }
	.vision_type2 .img_div img{
        width:90%; 
        margin:60px 5% 70px;
    }
    .vision_type2 .img_div span{
        display:block;
        text-align:center;
        font-size:0.8rem;
        color: #1eafed;
    }
    
    /*인증절차 리스트*/
    .step_list{margin:80px 0 60px;}
    .step_list li{
        overflow:hidden;
        width:100%;
        height:220px;
        padding:20px 30px;
        margin:35px 0;
        background:#f7f7f7;
        border-radius:200px;
        position:relative;
        box-shadow:1px 1px 6px 4px #f0f0f0;
        text-align: justify;
    }
    .step_list li .step_number{ /*STEP CIRCLE*/
        position:absolute;
        top:40px;
        left:20px;
        width:140px;
        height:140px;
        border-radius:50%;
        border:1px solid #f0f0f0;
        background:#fff;
        color:#0a4f81;
        font-size:1.5rem;
        font-weight:500;
        line-height:140px;
        text-align:center;
    }
    .step_list .step_tt{
        font-size:1.5rem;
        color:#79af0d;
        font-weight:500;
        margin-left:160px;
        margin-bottom:5px;
    }
    .step_list .step_txt{
        font-weight:400;
        line-height:1.6rem;
        margin-left:160px;
    }
    
    
    /* 인증의 확대와 축소, 인증의 정지 및 취소 시작 */
    .vision_type5{margin-bottom:80px}
	.vision_type5 h3.title { /* 컨텐츠 타이틀 */
        position:relative; 
        font-size:1.5rem; 
        color:#000; 
        margin-bottom:20px; 
    }
	.vision_type5 h3.title:before{
        content: "";
        display: block;
        width: 30px;
        height: 2px;
        background: #3296dd;
        position: absolute;
        left: 0;
        top:-8px;
    }
    .vision_area{margin-bottom:80px;} /* 확대 축소 컨텐츠 박스 */
    .vision_area:last-child{margin-bottom:0px;}
    .box_title{
        font-size:1.4rem;
        color:#102f45;
        font-weight:500;
    }
    .box_content_txt{
        color:#222;
        font-weight:400;
        line-height:1.8em;
    }
    .box_content_txt>li{width:100%;}
    .content_box1, .content_box2{
        width:100%;
        height:auto;
        overflow:hidden;
        display:table;
    }
    .content_box1 .title_box, .content_box2 .title_box{ /* 왼쪽 타이틀 박스 */
        display:table-cell;
        width:30%;
        height:auto;
        vertical-align: middle;
        text-align:center;
        font-size:1.2rem;
        font-weight:400;
        background:#005bab;
        color:#fff;
    }
    .content_box2 .title_box{ background:#36b1d4;}
     .content_box1 .title_box>.material-icons,.content_box2 .title_box>.material-icons{
        display:block;
        font-size:1.8rem;
        margin-bottom:10px;
    }
    .content_box1 .text_box, .content_box2 .text_box{ /* 오른쪽 텍스트 박스 */
        display:table-cell;
        width:70%;
        height:auto;
        padding:20px 25px;
        color:#333;
        font-weight:400;
        background:#f7f7f7;
    }
    .text_box>ul:not(.text_box_first){
        width:98%;
        margin:5px 0 0 2%;
    }
    .text_box>ul li{
        color:#333;
        font-weight:400;
        font-size:0.95rem;
        line-height:1.7em;
        padding:3px 0;
        width:100%;
        text-align: justify;
    }
    .text_box>p{
        font-size:1.1em;
        line-height:1.7em;
        font-weight:500;
        color:#79af0d;
        margin-top:15px;
    }
    

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
        
        .step_list li{ height:230px; }
        .step_list li .step_number{ top:45px; } /*STEP CIRCLE*/
        
    }

    
    @media (max-width:1024px) {
        
        .step_list{ margin:60px 0; }
        .step_list li{ height:340px;padding:20px;border-radius:20px; }
        .step_list li .step_number{ top:25px;left:20px;width:110px; height:110px;line-height:110px; } /*STEP CIRCLE*/
        .step_list .step_tt{margin-left:125px;  font-size: 1.3rem;}
        .step_list .step_txt{margin-left:125px;}
    
    }


    @media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        
        .txtBox02{display:none;} 
        .vision_type2 .img_div img { width: 100%;margin: 60px 0% 70px;}
        .step_list li{padding:25px 25px 30px;height:auto;line-height:1.6em;}
        .step_list li .step_number{ position:static;width:50px;height:50px;margin:0 auto 0px;border:1px solid #f0f0f0;font-size:1.5rem;line-height:46px; } /*STEP CIRCLE*/
        .step_list li .step_number>span{display:none;}
        .step_list .step_tt{margin-left:0;margin-top:15px;text-align:center;}
        .step_list .step_txt{margin-left:0;margin-top:15px;text-align:center;}
        
        .content_box1 .title_box, .content_box2 .title_box{display:none;}
        .content_box1 .text_box, .content_box2 .text_box{width:100%;padding:0; background:#fff;}
        
        .partner_type2 .con_box ul li { float:left; width:100%; list-style:none; margin:10px 0; } /* 사업영역 */
        
    }

   
    @media all and (max-device-width : 640px) { 
        
        .content_wrap { font-size: 0.85rem }/* 전체 폰트 사이즈 조정 */
        .page_title h2.sub_txt{font-size:0.85rem;}
        .step_list li{padding:20px 20px 30px;height:auto;}
        .step_list li .step_number{ width:42px;height:42px;font-size:1.2rem;line-height:40px; } /*STEP CIRCLE*/
        .step_list .step_tt{font-size:1.1rem; line-height: 1.6}
        .step_list .step_txt{margin-top:10px;}
        
        .vision_type5 h3.title{ font-size:1.1rem; } /* 타이틀 폰트 사이즈 축소 */
        .vision_type5 h3.title:before { width:20px; } /* 타이틀 위 선 넓이 축소 */
        .text_box>ul li{font-size:0.85rem;}
        .partner_type2 .con_arrow p { font-size: 1.4rem }/* 사업영역 타이틀 폰트 사이즈 조정 */
    }



    @media all and (min-width:360px) and (max-device-width : 414px) { 
        .vision_type2 .stitle{margin-bottom:40px;}
        .vision_type2 .img_div{width:100%;margin:0%;}
        .step_list{margin:50px 0;}
        .step_list .step_txt{line-height:1.6}
        
        .vision_type5{margin-bottom:60px}
        
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */

    } 
    
   /* ============= 상세페이지 반응형 종료 ============= */
    
</style>

<!-- /* 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<img src="./images/banner03_04.jpg" alt="Certification Procedure">
		<h1 class="txtBox02">Application and Certification Process</h1>
		<h2 class="sub_txt">This is a guide to the certification application and certification process. </h2>
	</div>

	<div class="vision_type2">
		<span class="stitle">
            IGC Certification Institute Co., Ltd. is researching a faster and easier approach in the ever-changing global exchange field. We will devote ourselves to continuous and continuous improvement for product development and productivity improvement, and contribute to industrial development through quality innovation and improvement of production capacity.
        </span>
		<div class="img_div"><img src="../image/process_01_system_english.png" alt="인증절차"></div>

        <!-- 제품 절차 리스트-->
		<ul class="step_list">
			<li>
                <div class="step_number"><span>STEP</span> 1</div>
                <div class="step_tt">Certification inquiry and proposal</div>
                <div class="step_txt">
						Before applying for certification, we provide consultation on the overall procedure and method for certification audit.
                        Upon request from the company, we will send you a proposal for the certification review period and certification fee.
                </div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 2</div>
                <div class="step_tt">Application for certification</div>
				<div class="step_txt">
                    The contract is automatically concluded upon receipt of the certification application, and a separate contract can be issued upon request.				
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 3</div>
                <div class="step_tt">Notice of Review Plan</div>
				<div class="step_txt">
                     After the certification application is confirmed, a detailed audit plan including the audit team and audit schedule is notified to the company.
                     At this time IGC Certification Institute Co., Ltd. discusses the audit schedule with the company.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 4</div>
                <div class="step_tt">Preliminary audit</div>
                <div class="step_txt">
                    The purpose is to give an opportunity to improve the system through a preliminary review prior to this review, and it is conducted only at the request of the applicant company.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 5</div>
                <div class="step_tt">1st stage audit (document audit)</div>
                <div class="step_txt">
                    The first stage audit is an audit conducted to confirm the suitability of the management system.
                    There are partial differences in the scope of the examination for each requested standard, and the management system documents are reviewed.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 6</div>
                <div class="step_tt">2nd stage audit (site audit)</div>
				 <div class="step_txt">
                    The second stage of the audit is to verify the actual fact that the certification application standards and the organization's management system meet all the requirements related to the scope of certification through on-site inspection. If the standards are met based on objective facts, the certification registration registration is recommended. 
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 7</div>
                <div class="step_tt">Nonconformity Corrective Action</div>
				 <div class="step_txt">
                    In case of nonconformity as a result of the audit, corrective action must be taken, and the result of corrective action is made through written confirmation or confirmation at the on-site audit.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 8</div>
                <div class="step_tt">Certification review</div>
				 <div class="step_txt">
                    The certification committee determines whether to register for certification by evaluating the appropriateness of the entire audit process.				
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 9</div>
                <div class="step_tt">Certificate issuance</div>
                <div class="step_txt">
                     When certification registration is decided, a certificate is issued and delivered to the customer.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 10</div>
                <div class="step_tt">surveillance audit</div>
                <div class="step_txt">
                    If it is conducted to verify that the certification registration organization continues to comply with the certification conditions, it is carried out in accordance with the initial on-site audit procedure.
                    The regular follow-up audit cycle takes place every year from the date of the initial audit, and must be conducted regularly in accordance with ISO international regulations and IAF MD regulations.<br>
                    <SMALL>[Remarks] The first post audit cannot exceed 12 months from the date of the previous certification decision.</SMALL>
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 11</div>
                <div class="step_tt">Recertification audit</div>
                <div class="step_txt">
                    It is conducted every three years for the purpose of recertification of certification, and it is conducted according to the same procedure as the initial certification review.				
				</div>
			</li>
        </ul>
    </div>		
			
	<br><br>
    <!---//인증의 확대와 축소, 인증의 정지 및 취소 시작 ----->			
	<div class="vision_type5">
	
		<div class="vision_area">
            <h3 class="title">Expansion and reduction of certification</h3>
            <ul class="box_content_txt">
                <li class="clear content_box1">
                    <div class="title_box"><span class="material-icons">open_in_full</span>Expansion and reduction</div>
                     <div class="text_box">
                        <p>Expansion of certification</p>
                        <ul>
                            <li>
                                If the certified organization is considering expanding the scope of certification or adding a site, it can apply for certification expansion.<br>
                                The certification body that has received the application reviews it and then conducts necessary audit activities to decide whether to approve it.
                           </li>
                        </ul>

                        <p>reduction of certification</p>
                        <ul>
                            <li>
                              If a certified organization ceases to provide certain products or services specified in the scope of certification, or withdraws from a registered site or services is discontinued, the organization shall notify the certification authority within one month. <br>
                              Upon receiving the notification, the certificating authority reviews it and conducts necessary audit activities to determine whether to approve it or not. If the scope of the certification is reduced, all relevant promotional materials must also be modified.
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div> <!----// class="vision_area" 종료----->


		<div class="vision_area">
		<h3 class="title">Suspension and cancellation of certification</h3>
        <ul class="box_content_txt">
            <li class="clear content_box2">
				<div class="title_box"><span class="material-icons">block</span>Suspension and cancellation</div>
				<div class="text_box">
                        <ul class="text_box_first">
                            <li>
                                The certified organization is not limited to the following cases, but certification may be suspended or cancelled in the following cases, and the certificate may be withdrawn. In the event of such a reason for suspension or cancellation, the Certification Authority reviews the matter and makes a decision on suspension or cancellation. The organization shall ensure that in the event of suspension or revocation of certification, the use of all promotional materials mentioned about the status of certification is suspended.
                            </li>
                        </ul>
                        <p>Suspension of certification</p>
                        <ul>
                            <li>&bull; In case the follow-up audit is not conducted within the specified time limit (if the follow-up audit is not performed within 12 months from the previous certification decision date</li>
                            <li>&bull; In case the certification system does not have the resources and organization to meet the requirements of the applicable standard as a result of the audit for maintaining certification, or the certification system is mostly not operate.</li>
                            <li>&bull; If there is no credibility in the certification system due to a claim or social question from a stakeholder</li>
                            <li>&bull; In the event that the certification registration organization has not taken measures to respond to changes in the certification system and certification requirements</li>
                            <li>&bull; In the event that a major nonconformity occurs as a result of the on-site verification audit, and a major nonconformity occurs again as a result of the reconfirmation review</li>
                            <li>&bull; In case the related contents are not corrected within one month after receiving the corrective order due to misuse of the certification mark</li>
                            <li>&bull; In case the certification examination fee is overdue for more than 3 months</li>
                            <li>&bull; In case of failure to comply with the organization's obligations under the certification contract</li>
                            <li>&bull; When used beyond the scope of the certificate</li>
                            <li>&bull; In case of violation of contract or agreement</li>
                        </ul>

                        <p>Cancellation of certificates</p>
                        <ul>
                            <li>&bull; In case corrective action is not taken after 3 months despite the suspension of effect</li>
                            <li>&bull; In case the certificate is officially returned by the certification registration organization</li>
                            <li>&bull; In case the production, activity or service of products (processes) included in the scope of certification is suspended</li>
                            <li>&bull; If the entity to be certified is lost or not confirmed due to the dissolution of the certification registration organization or loss of contact, etc.</li>
                            <li>&bull; In the case of post-examination, if the review does not proceed within one month after the suspension </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div> <!----class="vision_area 종료------>
    </div> <!--//class="vision_type5" 종료---->
   
   <!----(주)아이지씨인증원 사업영역 시작-------->
   <section class="partner_type2">
        <h2 class="con_arrow">
            <p>Related Services from IGC</p>
        </h2>
        <div class="con_box">
          <ul>
            <li><p><em><strong>01</strong></em><span>System Certification</span></p></li>
            <li><p><em><strong>02</strong></em><span>Testing</span></p></li>
            <li><p><em><strong>03</strong></em><span>Professional Training</span></p></li>
            <li><p><em><strong>04</strong></em><span>Product Certification</span></p></li>
            <li><p><em><strong>05</strong></em><span>Auditor Certification</span></p></li>
            <li><p><em><strong>06</strong></em><span>Designation of Training Institute</span></p></li>
          </ul>
        </div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>
   
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
