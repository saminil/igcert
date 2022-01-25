<?php
	include_once('./_common.php');
$g5['title'] = 'Product Certification Procedure';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<!------ Existing File Codings  시작----->

<style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:14px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style>
<!------ Existing File Codings  종료----->


<?php
	/*
		CSS파일 로드(25~26라인)
		적용하지 않아도 됩니다.
		(주)아이지씨인증원테마가 아닌 다른 곳에 적용하신다면 
        24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
	*/
?>
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">


<?php
	/*
		주의사항 
		관리자모드 내용관리등 에디터로 내용을 등록하실 경우, 보안문제로 자바스크립트와 css가 필터될 수 있습니다.
		이럴 경우 공통 css 파일에 아래 style을 별도 추가하고, 내용관리 에디터의 HTML 모드로 태그를 넣으시면 됩니다.(에디터마다 HTML 모드 버튼이 있으니 HTML 모드로 넣어주세요.)
		javascript 를 사용한다면 공통하단 파일 </body> 위에 코드를 복사하여 추가 합니다.	
	
	*/
?>
<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#BC0000; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

	.vision_type2 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type2:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type2 h2.title {text-align:center; font-size:2em; font-weight:400; color:#333; line-height:1.2em; margin-bottom:40px; }
	.vision_type2 span.stitle {display:block; width:100%; text-align:center; margin:0 auto; font-size:1.1em; font-weight:400; color:#333; line-height:1.6em; margin-bottom:40px; }
	.vision_type2 .img_div img{width:100%; max-width:1200px; border-radius:85px; margin-bottom:0px}
	.vision_type2 ul {margin:0; padding:0; }
	.vision_type2 ul li {clear:both; padding:0px; margin:0; margin-bottom:30px; width:100%; border-radius:85px; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type2 ul li .circle_box {display:block; float:left; width:170px; height:170px; border-radius:85px; }
	.vision_type2 ul li:nth-child(1) .circle_box {background:#6699CC; }
	.vision_type2 ul li:nth-child(2) .circle_box {background:#99CCFF; }
	.vision_type2 ul li:nth-child(3) .circle_box {background:#CCCC99; }
	.vision_type2 ul li:nth-child(4) .circle_box {background:#023059; }
	.vision_type2 ul li:nth-child(5) .circle_box {background:#7fa5dc; }
	.vision_type2 ul li:nth-child(6) .circle_box {background:#9b9740; }
    .vision_type2 ul li:nth-child(7) .circle_box {background:#6de5f2; }
    .vision_type2 ul li:nth-child(8) .circle_box {background:#cc9900; }
    .vision_type2 ul li:nth-child(9) .circle_box {background:#ff9999; }
    .vision_type2 ul li:nth-child(10) .circle_box {background:#cfa182; }
    .vision_type2 ul li:nth-child(11) .circle_box {background:#ec6d9a; }
    .vision_type2 ul li:nth-child(12) .circle_box {background:#e6bbf0; }
    .vision_type2 ul li:nth-child(13) .circle_box {background:#bdd8f4; }
	.vision_type2 ul li .circle_box .icon {display:block; position:relative; left:0; top:25%; width:100%; height:100%; text-align:center; }
	.vision_type2 ul li .circle_box .icon i {display:block; font-size:3em; color:#fff; }
	.vision_type2 ul li .circle_box .icon em {display:block; font-size:2.0em; color:#fff; font-style:normal; margin-top:10px;}
	.vision_type2 ul li .con_txt {display:block; float:left; width:70%; margin-left:50px; margin-top:30px;}
	.vision_type2 ul li .con_txt p {font-size:2.3em; color:#000; text-align:left; }
	.vision_type2 ul li .con_txt span {font-size:1.2em; color:#555; text-align:left;  line-height:1.5em;margin-bottom:15px;}
	.vision_type2 ul li.inverse_li{background-color:#fff;}
	.vision_type2 ul li.inverse_li .circle_box {float:right;}
	.vision_type2 ul li.inverse_li .con_txt {float:right; }
    
    
    <!---//인증의 확대와 축소, 인증의 정지 및 취소 시작 ----->
    .vision_type5 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; list-style:none;}
	.vision_type5:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type5 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type5 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type5 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type5 .vision_area ul {margin:0; padding:0; }
	.vision_type5 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle; }
	.vision_type5 .vision_area:nth-child(1) ul li .i_box {background:#005bab;}
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#36b1d4;}
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#f48025;}
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type5 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}

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

     /* 서브페이지 컨텐츠 최상위 타이틀 배경 시작 */
    .sub_tit{ 
        background: linear-gradient( to top, #6699CC, #6699CC );
        position:relative;
        width:100%;
        height:5%;
        /*color:#023059;*/
        line-height:40px;
        padding-top:10px;
        Font-size:1.5em;
        color:#fff;
    }

    
    /* 서브페이지 2Depth 컨텐츠 내용, 이미지 위에 텍스트 올려쓰기 시작 */
    h3 {
        position: absolute; 
        left: 50%; 
        top: 10%; 
        transform: translate(-50%, -50%); 
        /*background: rgba(255,255,255,0.5)*/
        background: linear-gradient( to top, #6699FF, #6699FF); 
        padding: 10px 30px; 
        border-radius: 0px;
        width:100%;
        height:20%;
        color:#fff;
        text-align:center;  
    }  
     
    /* 목록 앞에 화살표 기호 시작  */
    .arrow {display:inline-block; background:#6699FF; position:relative;}
    .arrow:after {content:''; position:absolute; width:0; height:0; border-style:solid;}
    /*.arrow.test_4 {width:20px; height:10px;}*/
    .arrow.test_4:after {border-color:transparent transparent transparent #6699FF; top:-15px; left:-20px;border-width:10px 10px;}
    /*.arrow.test_4:after {border-width:15px 20px;} */

	@media screen and (max-width: 992px){
		
		.content_wrap{width:96%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		.vision_type2 h2.title { font-size:1.5em; }
		.vision_type2 span.stitle{font-size:1em; width:90%;}
		.vision_type2 ul li {width:100%; margin-bottom:50px; border-radius:40px; border-bottom-left-radius:0px; border-bottom-right-radius:0px}
		.vision_type2 ul li .circle_box{float:none; width:100%;  border-radius:40px; }
		.vision_type2 ul li.inverse_li .circle_box{float:none; width:100%;  border-radius:40px; }
		.vision_type2 ul li .con_txt{float:none; width:90%; margin:0px; padding:30px 5%;}
		.vision_type2 ul li.inverse_li .con_txt{float:none; width:90%; margin:0px; padding:30px 5%;}
		.vision_type2 .img_div img{border-radius:40px;}
	}

	@media screen and (max-width: 480px){
		
		
		.vision_type2 ul li{border-radius:15px;}
		.vision_type2 ul li .circle_box{border-radius:15px; }
		.vision_type2 ul li.inverse_li .circle_box{ border-radius:15px; }
		.vision_type2 .img_div img{border-radius:15px;}
	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>


<!-- /* 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
	<img src="./images/banner03_07.png" alt="Product Certification Procedure"><br><br><br>
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#b1f5ef">Product Certification </span>&nbsp; Procedure</h1>
		<h2 class="sub_txt"  style="display:block;text-align:justify">Product certification varies from country to country and type of certification, so you can check the exact procedure on the information page by category. IGC studies faster and easier access to global exchanges that change from time to time.
</h2>
	</div>

	<div class="vision_type2">
		<span class="stitle" style="display:block;text-align:justify">We will continue to improve our products and improve our productivity, and contribute to the development of our industry by improving our quality innovation production capacity.</span>
		<div class="img_div">
		<img src="./images/process_02_product_english.png">
		<span style="display:block;text-align:center;font-size:0.8rem;color:red;">*Product certification varies from country to country and type of certification, so you can check the exact procedure on the information page by category.</span>
		</div>
		<br>
		
		<br>
		<ul>
			<li>
				<div class="circle_box"> 
					<div class="icon"><i class="fab fa-medapps"></i><em>01. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>1. Certification Inquiry and Proposal</p>
					<span>
						<br style="display:block;text-align:justify">
						We will discuss the overall procedures and methods of the certification audit before applying for certification and 
send you a proposal for the certification audit period and audit expenses upon request from the company.

					</span>
				</div>
			</li>
			
			
			<li class="inverse_li">
				<div class="circle_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>02. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>2. Application Registration</p>
					<span style="display:block;text-align:justify">
						<br>
						The company submits application for the product and certification to the IGC.					
					</span>
				</div>
			</li>
			
			
			<li>
				<div class="circle_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>03. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>3. Conclusion of Contract </p>
					<span style="display:block;text-align:justify">
						<br>
						 By writing contract, you conclude a contract for product certification.
					</span>
				</div>
			</li>
			
			
			<li class="inverse_li">
				<div class="circle_box">
					<div class="icon"><i class="fas fa-hand-holding-heart"></i><em>04. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>4. Submit Related Documents </p>
					<span style="display:block;text-align:justify">
						<br>
						The company submits related documents about the product, such as technical documents, to the IGC.
					</span>
				</div>
			</li>
			
			
			<li>
				<div class="circle_box">
					<div class="icon"><i class="fas fa-globe"></i><em>05. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>5. 1 Stage Audit(Documentation Audit)</p>
					<span style="display:block;text-align:justify">
						<br>
						(if applicable)Documentation audit is carried out regarding product certification.				
					</span>
				</div>
			</li>
			
			
			<li class="inverse_li">
				<div class="circle_box">
					<div class="icon"><i class="fas fa-balance-scale"></i><em>06. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>6. 2 Stage Audit(On-site Audit)</p>
					<span style="display:block;text-align:justify">
						<br>
						 (if applicable)The 2 stage audit is to ensure that
the actual facts of whether the requirements for product certification regulations or guidelines are met through on-site audit,
and certification recommendations will be obtained if the requirements are met based on objective facts.

					</span>
				</div>
			</li>
			
			
			<li>
				<div class="circle_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>07. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>7. Non-conformity Corrective Action</p>
					<span style="display:block;text-align:justify">
						<br>
						Corrective action shall be taken for nonconformities as a result of the audit,
result of corrective action is made through written confirmation or on-site audit.

					</span>
				</div>
			</li>
			
			
			<li class="inverse_li">
				<div class="circle_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>08. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>8. Certification Review</p>
					<span style="display:block;text-align:justify">
						<br>
						Determination whether to register for certification by evaluating the appropriateness of the entire process of audit 
of the entire process of audit through the certification committee.
.						
					</span>
				</div>
			</li>
			
			
			<li>
				<div class="circle_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>09. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>9. Certificate Issue</p>
					<span style="display:block;text-align:justify">
						<br>
						 Once the certification registration is decided, 
the certificate is issued and delivered to the client.

					</span>
				</div>
			</li>
			
			
			<li class="inverse_li">
				<div class="circle_box">
					<div class="icon"><i class="fas fa-hand-holding-heart"></i><em>10. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>10. Surveillance Audit</p>
					<span style="display:block;text-align:justify">
						<br>
                        If the certification registration organization is to verify that the certification conditions are continuously complied with, it shall be carried out in accordance with the initial on-site audit procedure.<br>
                        Periodic surveillance audit cycles take place every year from the date of initial audit and shall be carried out regularly in accordance with ISO international regulations and IAF MD regulations.<br>
                        [Reference] The 1st surveillance audit shall not exceed 12 months from the date of determination of prior certification.
					</span>
				</div>
			</li>
			
			
			<li>
				<div class="circle_box">
					<div class="icon"><i class="fas fa-globe"></i><em>11. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>11. Recertification Audit</p>
					<span style="display:block;text-align:justify">
						<br>
						The certification is re-certified every 3 years and is carried out in accordance with the same procedure as the initial certification audit.
					</span>
				</div>
			</li>
        </ul>
        </div>		
			
	<br><br><br><br>
    <!---//인증의 확대와 축소, 인증의 정지 및 취소 시작 ----->			
	<div class="vision_type5">
	
		<div class="vision_area">
		<h2 class="title">Extending and Reducing Certification</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>Extending and Reducing</em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;text-align:justify">
					<h1 style="font-weight:bold;">Extension of Certification</h1>
						If a certified organization considers extending its scope of certification or adding sites, it may apply for an extension of certification.<br>
                        Upon receipt of the application, the certification institute reviews it and carries out necessary audit activities to determine whether to approve the application.<br>
					</span>
					
					<span style="display:block;text-align:justify">
					<h1 style="font-weight:bold;">Reduce of Certification</h1>
						If a certified organization ceases to provide certain products or services specified in the scope of certification, or withdraws from a registered site or services is discounted, the organization shall notify the certification institute within one month. Upon receiving the notification, the certification institute reviews it and carries out necessary audit activities to determine whether to approve it or not. If the scope of the certification is reduced, all relevant promotional materials must also be modified. 
					</span><br>
				</div>
			</li>
		</ul>
		</div> <!----// class="vision_area" 종료----->


		<div class="vision_area">
		<h2 class="title">Suspending and Canceling Certification</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>Suspending and Canceling</em></div>
				</div>
				<div class="con_txt">
				    <span style="display:block;text-align:justify">
					    Certified organizations are not limited to the following cases, but effectiveness of audit may be suspended or canceled and the certification may be revoked. In the event of such a suspension or cancellation, the certification institute reviews the case and makes a decision on the suspension or cancellation. The organization shall ensure that, upon suspension or cancellation of certification, all promotional materials referred to in the status of certification are discounted. 
					</span>
					
					<span style="display:block;text-align:justify">
					   <h2 style="font-weight:bold;">Suspension of Certification</h2>
                             -Where surveillance audit has not been carried out within the set period(where surveillance audit has not been carried out within 12 months from the date of the previous certification decision)<br><br>
                             -As a result of the audit to maintain certification, the certification system does not have resources or organizations to meet the requirements of the application standards, or most of the certification system are not in operation<br><br>
                             -Where there is no reliability of the certification system by claim or social inquiry from interested parties<br><br>
                             -In the event that the certification registration organization has not taken countermeasures against changes in the certification system and certification requirements<br><br>
                             -In the case of re-occurrence of major nonconformity even though the major nonconformity has been reconfirmation as a result of the on-site audit<br><br>
                             -Where the relevant details are not corrected within 1 month after receiving the correction order due to misuse of the certification mark<br><br>
                             -In case of overdue certification audit expenses by more than 3 months<br><br>
                             -Failure to comply with the organization’s obligations under the certification contract<br><br>
                             -In case the certificate is used in excess of the scope of the certificate<br><br>
                             -In case of breach of contract or agreement<br><br>
					</span>
					<span style="display:block;text-align:justify">
					    <h2 style="font-weight:bold;">Cancellation of Certification</h2>
                         -If corrective action is not taken for 3 months despite suspension of validity<br><br>
                         -The certification registration organization officially returned the certificate<br><br>
                         -The production, activity, or service of a product(process) within the scope of certification is discontinued.<br><br>
                         -Where the organization subject to certification is lost or has not been confirmed due to the vanish of the certification registration organization, loss of contract, etc.<br><br>
                         -In the case of surveillance audit, if the audit is not carried out within 1 month after the suspension<br><br>
					    </span>
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
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
<!----위 코드 관련 내용 : 상단 메인메뉴 ----->