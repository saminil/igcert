<?php
	include_once('./_common.php');
$g5['title'] = 'Product Certification Procedure';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.vision_type2 p.stitle {
        display:block; 
        margin-bottom:50px; 
    }
    .vision_type2 .img_div{
        width:100%;
        margin-bottom:60px;
        padding-bottom:50px;
        border-bottom:1px solid #ddd;
    }
	.vision_type2 .img_div img{
        width:90%; 
        margin:0 5% 10px;
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
        height:240px;
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
        top:30px;
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
        .vision_type2 .img_div img { width: 100%;margin: 10px 0% 0px;}
        .step_list li{padding:25px 25px 30px;height:auto;line-height:1.6em;}
        .step_list li .step_number{ position:static;width:50px;height:50px;margin:0 auto 0px;border:1px solid #f0f0f0;font-size:1.5rem;line-height:46px; } /*STEP CIRCLE*/
        .step_list li .step_number>span{display:none;}
        .step_list .step_tt{margin-left:0;margin-top:15px;text-align:center; }
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
        .step_list .step_tt{font-size:1.1rem; line-height: 1.6;}
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



<div class="content_wrap">
	<div class="page_title">
        <img src="./images/banner03_07.png" alt="Product Certification Procedure">
		<h1 class="txtBox02">Product Certification Procedure</h1>
		<h2 class="sub_txt" >Product certification varies from country to country and type of certification, so you can check the exact procedure on the information page by category. IGC studies faster and easier access to global exchanges that change from time to time.</h2>
	</div>

	<div class="vision_type2">
		<p class="stitle">
            We will continue to improve our products and improve our productivity, and contribute to the development of our industry by improving our quality innovation production capacity.
        </p>
        
		<div class="img_div">
		  <img src="./images/process_02_product_english.png" alt="인증절차">
		</div>

        <!-- 제품 절차 리스트-->
		<ul class="step_list">
			<li>
                <div class="step_number"><span>STEP</span> 1</div>
				<div class="step_tt">Certification Inquiry and Proposal</div>
                <div class="step_txt">
                    We will discuss the overall procedures and methods of the certification audit before applying for certification and send you a proposal for the certification audit period and audit expenses upon request from the company.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 2</div>
                <div class="step_tt">Application Registration</div>
                <div class="step_txt">
                    The company submits application for the product and certification to the IGC.					
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 3</div>
                <div class="step_tt">Conclusion of Contract </div>
                <div class="step_txt">
                     By writing contract, you conclude a contract for product certification.
				</div>
			</li>
			
			
            <li>
                <div class="step_number"><span>STEP</span> 4</div>
                <div class="step_tt">Submit Related Documents </div>
                <div class="step_txt">
                    The company submits related documents about the product, such as technical documents, to the IGC.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 5</div>
                <div class="step_tt">1 Stage Audit(Documentation Audit)</div>
                <div class="step_txt">
                    (if applicable)Documentation audit is carried out regarding product certification.				
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 6</div>
                <div class="step_tt">2 Stage Audit(On-site Audit)</div>
                <div class="step_txt">
                     (if applicable)The 2 stage audit is to ensure that
                    the actual facts of whether the requirements for product certification regulations or guidelines are met through on-site audit,
                    and certification recommendations will be obtained if the requirements are met based on objective facts.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 7</div>
                <div class="step_tt">Non-conformity Corrective Action</div>
                <div class="step_txt">
                    Corrective action shall be taken for nonconformities as a result of the audit,
                    result of corrective action is made through written confirmation or on-site audit.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 8</div>
                <div class="step_tt">Certification Review</div>
                <div class="step_txt">
                    Determination whether to register for certification by evaluating the appropriateness of the entire process of audit 
                    of the entire process of audit through the certification committee.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 9</div>
                <div class="step_tt">Certificate Issue</div>
                <div class="step_txt">
                     Once the certification registration is decided, 
                    the certificate is issued and delivered to the client.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 10</div>
                <div class="step_tt">Surveillance Audit</div>
                <div class="step_txt">
                    If the certification registration organization is to verify that the certification conditions are continuously complied with, it shall be carried out in accordance with the initial on-site audit procedure.<br>
                    Periodic surveillance audit cycles take place every year from the date of initial audit and shall be carried out regularly in accordance with ISO international regulations and IAF MD regulations.<br>
                    <SMALL>[Reference] The 1st surveillance audit shall not exceed 12 months from the date of determination of prior certification.</SMALL>
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 11</div>
                <div class="step_tt">Recertification Audit</div>
                <div class="step_txt">
                    The certification is re-certified every 3 years and is carried out in accordance with the same procedure as the initial certification audit.
				</div>
			</li>
        </ul>
    </div>		
			
	<br><br>
    
    <!---//인증의 확대와 축소, 인증의 정지 및 취소 시작 ----->			
	<div class="vision_type5">
	
		<div class="vision_area">
            <h3 class="title">Extending and Reducing Certification</h3>
            <ul class="box_content_txt">
                <li class="clear content_box1">
                    <div class="title_box"><span class="material-icons">open_in_full</span>Extending and Reducing</div>
                    <div class="text_box">
                        <p>Extension of Certification</p>
                        <ul>
                            <li>
                                If a certified organization considers extending its scope of certification or adding sites, it may apply for an extension of certification.<br>
                                Upon receipt of the application, the certification institute reviews it and carries out necessary audit activities to determine whether to approve the application.
                           </li>
                        </ul>

                        <p>Reduce of Certification</p>
                        <ul>
                            <li>
                                If a certified organization ceases to provide certain products or services specified in the scope of certification, or withdraws from a registered site or services is discounted, the organization shall notify the certification institute within one month. Upon receiving the notification, the certification institute reviews it and carries out necessary audit activities to determine whether to approve it or not. If the scope of the certification is reduced, all relevant promotional materials must also be modified. 
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div> <!----// class="vision_area" 종료----->


		<div class="vision_area">
		<h3 class="title">Suspending and Canceling Certification</h3>
        <ul class="box_content_txt">
            <li class="clear content_box2">
                <div class="title_box"><span class="material-icons">block</span>Suspending and Canceling</div>
                <div class="text_box">
                    <ul class="text_box_first">
                        <li>
					       Certified organizations are not limited to the following cases, but effectiveness of audit may be suspended or canceled and the certification may be revoked. In the event of such a suspension or cancellation, the certification institute reviews the case and makes a decision on the suspension or cancellation. The organization shall ensure that, upon suspension or cancellation of certification, all promotional materials referred to in the status of certification are discounted. 
                        </li>
                    </ul>
                    <p>Suspension of Certification</p>
                    <ul>
                        <li>&bull; Where surveillance audit has not been carried out within the set period(where surveillance audit has not been carried out within 12 months from the date of the previous certification decision)</li>
                        <li>&bull; As a result of the audit to maintain certification, the certification system does not have resources or organizations to meet the requirements of the application standards, or most of the certification system are not in operation</li>
                        <li>&bull; Where there is no reliability of the certification system by claim or social inquiry from interested parties</li>
                        <li>&bull; In the event that the certification registration organization has not taken countermeasures against changes in the certification system and certification requirements</li>
                        <li>&bull; In the case of re-occurrence of major nonconformity even though the major nonconformity has been reconfirmation as a result of the on-site audit</li>
                        <li>&bull; Where the relevant details are not corrected within 1 month after receiving the correction order due to misuse of the certification mark</li>
                        <li>&bull; In case of overdue certification audit expenses by more than 3 months</li>
                        <li>&bull; Failure to comply with the organization’s obligations under the certification contract</li>
                        <li>&bull; In case the certificate is used in excess of the scope of the certificate</li>
                        <li>&bull; In case of breach of contract or agreement</li>
                    </ul>

                    <p>Cancellation of Certification</p>
                    <ul>
                        <li>&bull; If corrective action is not taken for 3 months despite suspension of validity</li>
                        <li>&bull; The certification registration organization officially returned the certificate</li>
                        <li>&bull; The production, activity, or service of a product(process) within the scope of certification is discontinued.</li>
                        <li>&bull; Where the organization subject to certification is lost or has not been confirmed due to the vanish of the certification registration organization, loss of contract, etc.</li>
                        <li>&bull; In the case of surveillance audit, if the audit is not carried out within 1 month after the suspension</li>
                    </ul>
				</div>
			</li>
		</ul>
     </div> <!----class="vision_area 종료------>
   </div> <!--//class="vision_type2" 종료---->
   
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