<?php
include_once('./_common.php');
$g5['title'] = 'Code of Conduct';
include_once(G5_THEME_PATH.'/head.php');
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">


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
        margin: 0 0 50px;
    }
    .page_title{margin:0 auto 60px;}
    .page_title h2>img{ /*로고 이미지*/
        width:16%; 
        margin:0 42%; 
        display:block;
    } 
    /* ------------ 컨텐츠 ----------- */
    .vision_type1 h3.title{ /* 파란색 타이틀 */
        font-weight: 600;
        color: #3296dd;
        font-size: 1.3rem;
    }
	.vision_type1 span.stitle {
        display:block; 
        width:100%; 
        text-align:justify; 
        margin:5px auto 0px; 
        font-weight:400; 
    }
    .vision_type1 .img_div{ /* 행동강령 이미지 */
        margin:50px auto;
        width:70%;
    }
	.vision_type1 .img_div img{ 
        width:100%; 
    }
	.vision_type1 ul { /* 행동강령 */
        margin:0; 
        border-top:1px solid #ddd; 
        border-bottom:1px solid #ddd; 
        overflow:hidden;
    }
	.vision_type1 ul li {
        float:left; 
        display:inline-block;
        padding:30px 0; 
        width:33.33333%; 
        height:320px; 
        text-align:center;  
    }
	.vision_type1 ul li:nth-child(2n) {background-color:#f9f9f9;}
    .vision_type1 ul li p{ /* 행동강령 타이틀 */
        font-size:1.2rem; 
        color:#d91616; 
        margin-bottom:5px;
        padding: 0 5px;
    }
    .vision_type1 ul li p.number{ /* 행동강령 숫자 */
        font-size:1.4rem; 
    }
	.vision_type1 ul li span { 
        display:block; 
        color:#555;  
        margin:20px;  
        line-height:1.5;
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
    
    @media screen and (max-width: 1024px){
        
        .txtBox02{font-size:1.4rem;padding:20px 0;}
        .vision_type1 span.stitle {font-size: 1rem;}
        .vision_type1 ul li { height:360px;}
        .vision_type1 ul li p{font-size:1.1rem;}
		.vision_type1 ul li p.number {font-size:1.2rem;}
		.vision_type1 ul li span{font-size:0.85rem;}
        
    }
    
    @media only screen and (max-device-width: 768px) and (-webkit-min-device-pixel-ratio: 1) {
        
        .txtBox02{display:none;} 
        .page_title h2>img{width:20%;margin:0 40%}
        .vision_type1 ul li { padding:20px 5px;}
        .vision_type1 ul li span{margin:15px 10px;}
        .partner_type2 .con_box ul li { float:left; width:100%; list-style:none; margin:10px 0; } /* 사업영역 */
        
    }
    
    @media (max-width: 640px) {
        
        .content_wrap { font-size: 0.85rem }/* 전체 폰트 사이즈 조정 */
        .vision_type1 h3.title {font-size: 1.1rem;font-weight:500;}
        .vision_type1 span.stitle {font-size: 0.85rem;}
        .vision_type1 ul li{width:100%;height:auto;padding:20px 5px;}
        .vision_type1 ul li p, .vision_type1 ul li p.number {font-size:1rem; margin-top:0px;}
        .partner_type2 .con_arrow p { font-size: 1.4rem }/* 사업영역 타이틀 폰트 사이즈 조정 */
    }
    
    @media (min-width: 360px) and (max-device-width: 414px) {
        
        .vision_type1 .img_div{width:100%;}
        
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */
        
    }
    
    /* ============= 상세페이지 반응형 종료 ============= */
    
    
</style>

<div class="content_wrap">
	<section class="page_title">
		<div class="txtBox02">Code of Conduct</div>
		<h2><img src="images/ICG_LOGO.png" alt="(주)아이지씨인증원 로고"></h2><br>
	</section>
    
	<section class="vision_type1">
		<h3 class="title">Goals and Core Values of IGC</h3>
		<span class="stitle">
		  IGC seeks a quicker and more reliable approach in the ever-changing global industrial field, strives for continuous improvement for product development and productivity improvement, and contributes to the successful global business of customers through quality innovation and improvement of production capacity.
		</span>
		<div class="img_div">
		   <img src="./images/impartiality_02.jpg" alt="IGC 행동강령">
		</div>
		<ul>
			<li>
				<p class="number"><em><strong >01</strong></em></p>
				<p>Fair Professional Audit Expert</p>
				<span>
					We conduct our activities in a professional, accurate and fair manner. We always apply our best expertise and judgment to Audit.
				</span>
			</li>
			<li>
				<p  class="number"><em><strong>02</strong></em></p>
				<p>Professional Competency Development</p>
				<span>
					All auditors continually develop their professional competencies and are in excellent condition for correct auditing.
				</span>
			</li>
			<li>
				<p  class="number"><em><strong>03</strong></em></p>
				<p>Conflicts of Interest Avoidance</p>
				<span>
					Avoid employment or transfers in conflict of interest.
				</span>
			</li>
			<li>
				<p  class="number"><em><strong>04</strong></em></p>
				<p>Regulatory Compliance</p>
				<span>
					We do not act in an illegal manner to the detriment of the reputation, interests and reputation of the certification body.
				</span>
			</li>
			<li>
				<p class="number"><em><strong>05</strong></em></p>
				<p>Customer Information Security</p>
				<span>
					We will not disclose the results, information, or parts of the review process, unless approved in writing by the respondent and the auditing body.
				</span>
			</li>
			<li>
				<p class="number"><em><strong>06</strong></em></p>
				<p>Prohibition of Giving and Receiving Money</p>
				<span>
					No commissions, gifts or other benefits are received from the audited organization, employees or other stakeholders.
				</span>
			</li>
			<li>
				<p class="number"><em><strong>07</strong></em></p>
				<p>Integrity of Information</p>
				<span>
					We do not knowingly convey false or manipulated information that could compromise the integrity of the audit or audit process.
				</span>
			</li>
			<li>
				<p class="number"><em><strong>08</strong></em></p>
				<p>Customer Satisfaction</p>
				<span>
					We do not post or convey unreasonable or unreasonable criticism of the audited organization.
				</span>
			</li>
			<li>
				<p class="number"><em><strong>09</strong></em></p>
				<p>Cooperation Obligation</p>
				<span>
					We must not violate this Code of Conduct and cooperate fully with any formal investigation of any suspected violation of this Code.
				</span>
			</li>
		</ul>
	</section>	
	<br><br>
	
    <!----(주)아이지씨인증원 사업영역 시작-------->
    <section class="partner_type2">
            <h2 class="con_arrow">
        <p>Related Services from IGC</p>
            </h2>
            <div class="con_box">
              <ul>
                <li><p><em><strong>01</strong></em><span>System Certification</span></p></li>
                <li><p><em><strong>02</strong></em><span>Testing</span></p></li>
                <li><p><em><strong>03</strong></em><span>Professional Personnel Training Course</span></p></li>
                <li><p><em><strong>04</strong></em><span>Product Certification</span></p></li>
                <li><p><em><strong>05</strong></em><span>Auditor Certification</span></p></li>
                <li><p><em><strong>06</strong></em><span>Training Institution Designation</span></p></li>
              </ul>
            </div>
    </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------>   
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>