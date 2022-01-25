<?php
	include_once('./_common.php');
$g5['title'] = 'System certification process';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
		(주)아이지씨인증원테마에 사용하신다면 적용하지 않아도 됩니다.
		(주)아이지씨인증원테마가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
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
	/* 그누보드 내용관리등 에디터로 입력할 경우  여기서부터 */
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
	.vision_type2 .img_div img{width:100%; max-width:1200px; border-radius:85px; margin-bottom:30px}
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
		<img src="./images/banner03_04.jpg" alt="Certification Procedure"><br><br><br>
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#b1f5ef">Application and Certification </span>&nbsp; Process</h1>
		<h2 class="sub_txt" style="color:red;">This is a guide to the certification application and certification process. </h2>
	</div>

	<div class="vision_type2">
		<span class="stitle" style="display:block;text-align:justify">IGC Certification Institute Co., Ltd. is researching a faster and easier approach in the ever-changing global exchange field. We will devote ourselves to continuous and continuous improvement for product development and productivity improvement, and contribute to industrial development through quality innovation and improvement of production capacity.</span>
		<div class="img_div"><img src="../image/process_01_system_english.png"></div>
		<br><br>
		<ul>
			<li>
				<div class="circle_box"> 
					<div class="icon"><i class="fab fa-medapps"></i><em>01. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>1. Certification inquiry and proposal</p>
					<span style="display:block;text-align:justify">
						<br>
						Before applying for certification, we provide consultation on the overall procedure and method for certification audit.
                        Upon request from the company, we will send you a proposal for the certification review period and certification fee.
					</span>
				</div>
			</li>
			
			
			<li class="inverse_li">
				<div class="circle_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>02. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>2. Application for certification</p>
					<span style="display:block;text-align:justify">
						<br>
						The contract is automatically concluded upon receipt of the certification application, and a separate contract can be issued upon request.				
					</span>
				</div>
			</li>
			
			
			<li>
				<div class="circle_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>03. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>3. Notice of Review Plan</p>
					<span style="display:block;text-align:justify">
						<br>
						 After the certification application is confirmed, a detailed audit plan including the audit team and audit schedule is notified to the company.
                         At this time IGC Certification Institute Co., Ltd. discusses the audit schedule with the company.<br><br>
					</span>
				</div>
			</li>
			
			
			<li class="inverse_li">
				<div class="circle_box">
					<div class="icon"><i class="fas fa-hand-holding-heart"></i><em>04. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>4. Preliminary audit</p>
					<span style="display:block;text-align:justify">
						<br>
						The purpose is to give an opportunity to improve the system through a preliminary review prior to this review, and it is conducted only at the request of the applicant company.<br><br>
					</span>
				</div>
			</li>
			
			
			<li>
				<div class="circle_box">
					<div class="icon"><i class="fas fa-globe"></i><em>05. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>5. 1st stage audit (document audit)</p>
					<span style="display:block;text-align:justify">
						<br>
						The first stage audit is an audit conducted to confirm the suitability of the management system.
                        There are partial differences in the scope of the examination for each requested standard, and the management system documents are reviewed.<br><br>
					</span>
				</div>
			</li>
			
			
			<li class="inverse_li">
				<div class="circle_box">
					<div class="icon"><i class="fas fa-balance-scale"></i><em>06. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>6. 2nd stage audit (site audit)</p>
					<span style="display:block;text-align:justify">
						<br>
						The second stage of the audit is to verify the actual fact that the certification application standards and the organization's management system meet all the requirements related to the scope of certification through on-site inspection. If the standards are met based on objective facts, the certification registration registration is recommended. <br><br>
					</span>
				</div>
			</li>
			
			
			<li>
				<div class="circle_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>07. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>7. Nonconformity Corrective Action</p>
					<span style="display:block;text-align:justify">
						<br>
						In case of nonconformity as a result of the audit, corrective action must be taken, and the result of corrective action is made through written confirmation or confirmation at the on-site audit.<br><br>
					</span>
				</div>
			</li>
			
			
			<li class="inverse_li">
				<div class="circle_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>08. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>8. Certification review</p>
					<span style="display:block;text-align:justify">
						<br>
						The certification committee determines whether to register for certification by evaluating the appropriateness of the entire audit process.	<br><br>			
					</span>
				</div>
			</li>
			
			
			<li>
				<div class="circle_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>09. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>9. Certificate issuance</p>
					<span style="display:block;text-align:justify">
						<br>
						 When certification registration is decided, a certificate is issued and delivered to the customer.<br><br>
					</span>
				</div>
			</li>
			
			
			<li class="inverse_li">
				<div class="circle_box">
					<div class="icon"><i class="fas fa-hand-holding-heart"></i><em>10. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>10. surveillance audit</p>
					<span style="display:block;text-align:justify">
						<br>
						If it is conducted to verify that the certification registration organization continues to comply with the certification conditions, it is carried out in accordance with the initial on-site audit procedure.<br>
                        The regular follow-up audit cycle takes place every year from the date of the initial audit, and must be conducted regularly in accordance with ISO international regulations and IAF MD regulations.<br>
                        [Remarks] The first post audit cannot exceed 12 months from the date of the previous certification decision.<br><br>

					</span>
				</div>
			</li>
			
			
			<li>
				<div class="circle_box">
					<div class="icon"><!------i class="fas fa-globe"></i------><em>11. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>11. Recertification audit</p>
					<span style="display:block;text-align:justify">
						<br>
						It is conducted every three years for the purpose of recertification of certification, and it is conducted according to the same procedure as the initial certification review.<br><br>					
					</span>
				</div>
			</li>
        </ul>
        </div>		
			
	<br><br><br><br>
    <!---//인증의 확대와 축소, 인증의 정지 및 취소 시작 ----->			
	<div class="vision_type5">
	
		<div class="vision_area">
		<h2 class="title">Expansion and reduction of certification</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>Expansion and reduction</em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;text-align:justify">
					<h1 style="font-weight:bold;">Expansion of certification</h1>
						If the certified organization is considering expanding the scope of certification or adding a site, it can apply for certification expansion.<br>
                        The certification body that has received the application reviews it and then conducts necessary audit activities to decide whether to approve it.
					</span>
					
					<span style="display:block;text-align:justify">
					<h1 style="font-weight:bold;">reduction of certification</h1>
						If a certified organization ceases to provide certain products or services specified in the scope of certification, or withdraws from a registered site or services is discontinued, the organization shall notify the certification authority within one month. <br>
						Upon receiving the notification, the certificating authority reviews it and conducts necessary audit activities to determine whether to approve it or not. If the scope of the certification is reduced, all relevant promotional materials must also be modified.
					</span>
				</div>
			</li>
		</ul>
		</div> <!----// class="vision_area" 종료----->


		<div class="vision_area">
		<h2 class="title">Suspension and cancellation of certification</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>Suspension and cancellation </em></div>
				</div>
				<div class="con_txt">
				    <span style="display:block;text-align:justify">
					    The certified organization is not limited to the following cases, but certification may be suspended or cancelled in the following cases, and the certificate may be withdrawn. In the event of such a reason for suspension or cancellation, the Certification Authority reviews the matter and makes a decision on suspension or cancellation. The organization shall ensure that in the event of suspension or revocation of certification, the use of all promotional materials mentioned about the status of certification is suspended.
					</span>
					
					<span style="display:block;text-align:justify">
					   <h2 style="font-weight:bold;">Suspension of certification</h2>
                        - In case the follow-up audit is not conducted within the specified time limit (if the follow-up audit is not performed within 12 months from the previous certification decision date<br><br>
                        - In case the certification system does not have the resources and organization to meet the requirements of the applicable standard as a result of the audit for maintaining certification, or the certification system is mostly not operate.<br><br>
                        - If there is no credibility in the certification system due to a claim or social question from a stakeholder<br><br>
                        - In the event that the certification registration organization has not taken measures to respond to changes in the certification system and certification requirements<br><br>
                        <p>- In the event that a major nonconformity occurs as a result of the on-site verification audit, and a major nonconformity occurs again as a result of the reconfirmation review<br><br>
                        - In case the related contents are not corrected within one month after receiving the corrective order due to misuse of the certification mark<br><br>
                        - In case the certification examination fee is overdue for more than 3 months<br><br>
                        - In case of failure to comply with the organization's obligations under the certification contract<br><br>
                        - When used beyond the scope of the certificate<br><br>
                        - In case of violation of contract or agreement<br><br>
					</span>
					<span style="display:block;text-align:justify">
					    <h2 style="font-weight:bold;">Cancellation of certificates</h2>
                        - In case corrective action is not taken after 3 months despite the suspension of effect<br><br>
                        - In case the certificate is officially returned by the certification registration organization<br><br>
                        - In case the production, activity or service of products (processes) included in the scope of certification is suspended<br><br>
                        - If the entity to be certified is lost or not confirmed due to the dissolution of the certification registration organization or loss of contact, etc.<br><br>
                        - In the case of post-examination, if the review does not proceed within one month after the suspension <br><br>
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