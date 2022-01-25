<?php
	include_once('./_common.php');
$g5['title'] = '보건 및 안전 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<!------ Existing File Codings  시작----->

<!-------style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:50px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style -------->
<!------ Existing File Codings  종료----->

<!-------style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:50px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style------>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet"> <!-------// 상세 페이지 본문 전체 영문 폰트 정의----------->
<!-----link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"---///퀵메뉴와 충돌-->


<style>
    /* *:lang(en) {font-family: georgia;} */ 
    /* *:lang(ko) {font-family: 'Noto Sans', sans-serif;} */
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

		
	.business_type5 h1{font-size:3em; font-weight:700; color:#111; text-align:center;  margin:0 auto; margin-bottom:0px; }
	.business_type5 h2{font-weight:700; font-size:2em; color:#0078D7; text-align:center; margin-bottom:25px;}
	.business_type5 h2:after{display:block; position:relative; bottom:0; left:50%; margin-left:-2px; content:""; width:2px; height:30px; background-color:#195883; margin-top:20px;}
	.business_type5 h3{font-size:1.1em; color:#666; text-align:center; margin-bottom:50px;}
	.business_type5 h3 br.sn{display:none;}
	.business_type5 ul{width:100%;}
	.business_type5 ul > li{width:100%; border-bottom:1px solid #d1d1d1; overflow:hidden;}
	.business_type5 ul > li:first-child{border-top:1px solid #d1d1d1;}
	.business_type5 ul > li:nth-child(odd){background-color:#f4f4f4;}
	.business_type5 ul li dl{display:table;}
	.business_type5 ul li dl dt, .business_type5 ul li dl dd{display:table-cell; vertical-align:middle;}
	.business_type5 ul li dl dt{width:40%; padding-left:5%;}
	.business_type5 ul li dl dt img{max-width:100%; margin:0 auto;}	
	.business_type5 ul li dl dd{width:60%; padding:50px 0; padding-top:30px; padding-left:5%;}
	.business_type5 ul li dl dd > strong{display:block; font-size:2em; line-height:80px; color:#111; font-weight:500;}
	.business_type5 ul li dl dd > p{font-size:1em; line-height:40px; color:#111; letter-spacing:-0.75px; font-weight:300; word-break:keep-all; padding-left:15px; position:relative;}
	.business_type5 ul li dl dd > p:before{display:inline-block; position:absolute; left:0; top:17px; content:""; width:6px; height:6px; background-color:#0263ac; border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%;}
    
    
    
    /* (주)아이지씨인증원 사업영역 시작  */	
    
	.partner_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.partner_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.partner_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.partner_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}

	.partner_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.partner_type2 .con_box:after{content:""; display:block; clear:both;}
	.partner_type2 .con_box ul { padding:0; margin:0; }
	.partner_type2 .con_box ul li {float:none; width:100%; list-style:none; margin:10px 0; }
	.partner_type2 .con_box ul li p{display:table; width:100%; }
	.partner_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.partner_type2 .con_box ul li p > em{ width:30px; }
	.partner_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.partner_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}
    
    /* (주)아이지씨인증원 사업영역 종료  */
    
    
    

	@media screen and (max-width:992px){		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}
	}

	@media all and (max-width:768px){
		.business_type5 h1{font-size:2.3em; }
		.business_type5 h2{font-size:1.9em; }
		.business_type5 h3{font-size:1.6em; padding:0 5px;}
		.business_type5 ul li dl, .business_type5 ul li dl dt, .business_type5 ul li dl dd{display:block; width:100%;}
		.business_type5 ul li dl dt{padding:5%;}
		.business_type5 ul li dl dt img{width:91%;}
		.business_type5 ul li dl dd > strong{line-height:30px; font-size:1.3em;}
		.business_type5 ul li dl dd{width:90%; padding:5%; padding-top:0;}
		.business_type5 ul li dl dd > p{line-height:24px; font-size:0.95em;}
		.business_type5 ul li dl dd > p:before{top:10px;}
	}

	@media all and (max-width:480px){
		.business_type5 h3 br.sn{display:inline;}
	}
</style>


<div class="content_wrap">
	
	<!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">OHSAS 18001</a></li>
			<li><a href="javascript:;">ISO 45001</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
	<!--+++ 20.05.07 탭컨텐츠 영역 +++-->
	<div class="tab_con">
		
		<!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
		<article style="display:block">
			<section class="business_type5" class="area">
				<h1><span style="font-family: georgia;">OHSAS</span> 18001 안전보건경영시스템 인증</h1>
				<h2>Occupational Health and Safety Assessment Series</h2>		
				<p style="display:inline-block;text-align:justify;font-size:1.2em">
					조직 내부의 안전 관련 위험성을 현저히 줄이기 위해 OHSAS 18001 인증은 모든 기업에 적합합니다. 안전보건경영시스템은 가장 잘 알려진 산업 안전 관리 시스템으로 인정받고 있습니다. 이 인증을 통해 귀사 임직원의 건강과 안전이 귀사의 우선 사항이라는 것을 입증할 수 있습니다. <br> 안전보건경영시스템이 국제표준(<span style="font-family: georgia;">ISO</span> 45001)으로 채택됨에 따라, 기존의 OHSAS 18001은 인증전환기간(2018.3.12~2021.3.11)이 경과하면 효력을 상실하게 됩니다.따라서 OHSAS 18001 인증기업들은 그전에 <span style="font-family: georgia;">ISO</span> 45001로 인증을 전환하셔야 합니다. <span style="font-family: georgia;">IGC</span>는 전환 및 신규 인증을 돕기 위하여 최적의 인증 서비스를 제공하고 있습니다.
				</p>
				<br><br><br><br>
				<ul>
				
					<li>
						<dl>
							<dt>
								<img src="./image/OHSAS_18001_01.jpg" alt="OHSAS 18001 인증이란">
							</dt>
							<dd>
								<strong>OHSAS 18001이란?</strong>
								<span style="font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
							  OHSAS 18001은 보건 및 안전 경영 시스템입니다. 이는 모든 리스크 관리 측면 미 법규 준수를 포함한 보건 및 안전의 효율적 관리를 위한 프레임워크를 제공합니다. 귀사의 조직에 필요한 정책 절차 및 통제를 통해 국제적으로 인정된 모범 사례에 부합하는, 최상의 근로 조건 및 근로 환경 상의 건강과 안전을 달성할 수 있도록 지원합니다.  
							   </span><br><br>
							   <!------
								<span style="font-size:1.2em">1.고객 중시</span><br><br>
								------>
							</dd>
						</dl>
					</li>
					
					<li>
						<dl>
							<dt>
								<img src="./image/OHSAS_18001_02.jpg" alt="OHSAS 18001 인증의 중요성">
							</dt>
							<dd>
								<strong>OHSAS 18001의 중요성</strong>
								<span style="font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
							  OOHSAS 18001은 품질, 환경 및 기타 경영시스템과 더불어 핵심적인 경영시스템 중 하나입니다. 조직 전체에 최적의 작업 환경을 만들어 위험요소를 파악하고 이를 제대로 통제할 수 있도록 관리할 수 있습니다. 이는 작업장에서의 부상을 예방하는 동시에 기업의 직접 및 간접 비용을 줄이는데 도움을 줍니다. OHSAS 18001을 준수함으로써, 더 안전하고 나은 작업 환경을 통해 기업은 종업원, 공급자 및 고객 등과 같은 이해 관계자들을 위험으로부터 보호할 수 있습니다.
							   </span><br><br>
							   <!------
								<span style="font-size:1.2em">1.고객 중시</span><br><br>                        
								------>
							</dd>
						</dl>
					</li>
					
					<li>
						<dl>
							<dt>
								<img src="./image/ISO_9001_03.jpg" alt="OHSAS 18001 인증 이익">
							</dt>
							<dd>
								<strong>OHSAS 18001 인증 이익</strong>
								<!------------
								<span style="font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
							  IGC는 미국의 인정기구인 IAS로부터 <span style="font-family: georgia;">ISO</span> 9001에 대한 인정을 받아 품질경영시스템에 대한 인증 서비스를 제공하고 있습니다. <br><br>                 
							   </span>
								 -------><br><br>
		
								<span style="font-size:1.2em;"><strong>고객 만족</strong><br> 고객의 건강 및 재산을 보호함으로써 지속적으로 고객 요구사항을 충족</span><br><br>
								<span style="font-size:1.2em;"><strong>운영비용 감소</strong><br> 사고 및 질병으로 인한 시간 손실 감소. 그리고, 법률 비용 및 보상으로 인한 비용 감소로 현금 축적</span><br><br>
								<span style="font-size:1.2em;"><strong>법규 준수</strong><br> 법적/규제적 요구사항이 어떻게 귀사 및 고객에 영향을 끼치는지 이해</span><br><br>
								<span style="font-size:1.2em;"><strong>리스크 관리 개선</strong><br> 잠재적 사고를 파악하여 리스크를 최대한 낮게 유지하기 위해 관리 및 조치를 실행합니다.</span><br><br>
								<span style="font-size:1.2em;"><strong>증명된 사업 신뢰도</strong><br> 인정된 규격에 대한 독립적 심사는 많은 것을 보여줍니다.</span><br><br>
								<span style="font-size:1.2em;"><strong>사업 확대</strong><br> 고객은 보통 납품 조건으로 인증서를 요구합니다. 그러므로 해당 규격을 취득하면 선택의 폭이 넓어집니다. OHSAS 18001은 또한 구매 관련 안전 스킴 (Scheme)으로 인식됩니다.</span><br><br>
		
							</dd>
						</dl>	
					</li>
					
				</ul>
			</section>
			<br><br><br><br><br><br>
			<!----(주)아이지씨인증원 사업영역 시작-------->
			<section class="partner_type2" style="font-size:1.5em;text-align:justify;margin-right:10px;display:inline-block;">
				<h2 class="con_arrow" style="font-size:0.7em;">
					<p>우리가 제공하는 서비스</p>
				</h2>
				<div class="con_box">
				IGC는 OHSAS 18001 및 ISO 45001에 대한 전 과정에 대한 서비스를 제공합니다. <br><br>
					<ul style="display:inline-block;text-aling:left;">
						<li><p><em><strong>01</strong></em><span style="font-family: georgia;">OHSAS 18001 / ISO 45001 : 시스템 인증</span></p></li>
						<li><p><em><strong>02</strong></em><span style="font-family: georgia;">OHSAS 18001 / ISO 45001 : 교육 가능 연수기관 안내</span></p></li>
						<li><p><em><strong>03</strong></em><span style="font-family: georgia;">OHSAS 18001 / ISO 45001 : 심사원 인증</span></p></li><br>
						
						또한, 개인인증기관인 GPC와의 협력을 통해 다음과 같은 여러 분야에 관련된 교육 관련 서비스를 제공하고 있습니다.
						<li><p><em>1.</em><span>정보 보안</span></p></li>
						<li><p><em>2.</em><span>보건, 안전 및 환경</span></p></li>
						<li><p><em>3.</em><span>품질경영시스템</span></p></li>
						<li><p><em>4.</em><span>경영, 위험 및 규정 준수</span></p></li>
						<li><p><em>5.</em><span>교통, 통신 및 에너지</span></p></li>
						<li><p><em>6.</em><span>연속성, 복원력 및 복구</span></p></li>
						<li><p><em>7.</em><span>IT 보안</span></p></li>
						<li><p><em>8.</em><span>서비스 관리</span></p></li>
		
						
						<br>
					</ul>
				</div>
		   </section>
		   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
		</article>
		<!--+++++ /컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
		
		<!--+++++ 컨텐츠 02 +++++-->
		<article>
			<section class="business_type5" class="area">
				<h1><span style="font-family: georgia;">ISO</span> : 45001</h1>
				<h2>안전/보건 경영시스템 인증</h2>		
				<p style="display:inline-block;text-align:justify;font-size:1.2em">
				   <span style="font-family: georgia;">ISO</span> 45001은 안전보건경영시스템으로, 기존의 <span style="font-family: georgia;">OHSAS</span> 18001:2007 규격이 2018년 <span style="font-family: georgia;">ISO</span> 45001로 대체되었습니다. 이는 <span style="font-family: georgia;">ISO</span> 9001 및 14001 관리 시스템과 호환되는 산업 보건 및 안전 관리 시스템을 통해 보건 및 안전 관리 책임을 관리하기 위한 프레임워크를 제공합니다. 이 표준은 국제적 사용을 위해 개발되었으며 조직이 보건 및 안전 위험을 제어하고 성능을 향상시킬 수 있도록 합니다. 
				   <br>효과적인 안전보건 관리시스템은 직원 및 기타 이해 관계자에 대한 위험을 줄이고 법규 준수를 지원합니다. 기존 <span style="font-family: georgia;">OHSAS</span> 18001 규격이 2021년 3월 만료됨에 따라 신규 고객의 경우 2020년 3월부터는 <span style="font-family: georgia;">ISO</span> 45001로 진행되어야 하고, 기존 <span style="font-family: georgia;">OHSAS</span> 18001 인증 고객은 <span style="font-family: georgia;">ISO</span> 45001로 전환되어야 합니다.
	
				</p>
				<br><br><br><br>
				<ul>
					<li>
						<dl>
							<dt>
								<img src="./image/ISO 45001_01.jpg" alt="ISO 45001 요구사항">
							</dt>
							<dd>
								<strong><span style="font-family: georgia;">ISO</span>45001 요구사항</strong>
								<span style="font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
							   <span style="font-family: georgia;">ISO</span> 45001:2018은 ISO 9001:2015 등 규격에 적용되는 High Level Structure가 적용되어, 다른 규격과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
							   </span><br><br>                    
								 <span style="font-size:1.2em">1. 적용범위</span><br><br>
								 <span style="font-size:1.2em">2. 인용표준</span><br><br>
								 <span style="font-size:1.2em">3. 용어와 정의</span><br><br>
								 <span style="font-size:1.2em">4. 조직 상황</span><br><br>
								 <span style="font-size:1.2em">5. 리더십과 근로자 참여</span><br><br>
								 <span style="font-size:1.2em">6. 기획</span><br><br>
								 <span style="font-size:1.2em">7. 지원</span><br><br>
								 <span style="font-size:1.2em">8. 운용</span><br><br>
								 <span style="font-size:1.2em">9. 성과 평가</span><br><br>
								 <span style="font-size:1.2em">10. 개선</span><br><br>   
							</dd>
						</dl>
					</li>
					
					<li>
						<dl>
							<dt>
								<img src="./image/ISO 45001_02.jpg" alt="ISO 4500의 중요성">
							</dt>
							<dd>
								<strong><span style="font-family: georgia;">ISO</span> 54001의 중요성</strong>
								<span style="font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
								<span style="font-family: georgia;">ISO</span> 45001은 127개국 이상의 9만개 이상 조직에게 적합합니다. 만약에 귀사의 조직이 책임이 있는 사람들의 안전관리의 '모범 사례'를 보여야 한다면 귀사에게 맞을 것입니다.
								<span style="font-family: georgia;">IGC</span>는 관공서, 제조업, 서비스업, 식품회사, 프랜차이즈점을 포함한 다양한 분야의 다양한 조직에게 인증을 부여하고 있습니다.</span><br><br>
								
								
								
								<span style="font-size:1.2em">이 규격은 다음 사항들에 도움을 줍니다.</span> <br><br>
								
								  <span style="font-size:1.2em">1.작업장 유해물질 파악 및 효과적인 예방관리 수행</span><br><br>
								  <span style="font-size:1.2em">2.작업장 내 부상 및 건강 악화 방지</span><br><br>
								  <span style="font-size:1.2em">3.현장 사고 감소를 통해 비용 절감</span><br><br>
								  <span style="font-size:1.2em">4.법적 요구사항 준수 평가</span><br><br>
								  <span style="font-size:1.2em">5.안전 환경 개선</span><br><br>
								  <span style="font-size:1.2em">6.교육훈련 및 적격성 요구사항 분야 파악</span><br><br>
								  <span style="font-size:1.2em">7.생산성 증가</span><br><br>
								  <span style="font-size:1.2em">8.고객사의 사전 등록 프로세스 보완</span><br><br>
								  <span style="font-size:1.2em">9.기업 책임 촉진</span><br><br>
							</dd>
						</dl>			
					</li>
					
					<li>
						<dl>
							<dt>
								<img src="./image/ISO 45001_03.jpg" alt="ISO 45001 기대효과">
							</dt>
							<dd>
								<strong><span style="font-family: georgia;">ISO 45001</span> 기대효과</strong>
								
								<span style="font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
							   <!------
								<span style="font-family: georgia;">ISO</span> 45001은 127개국 이상의 9만개 이상 조직에게 적합합니다. 만약에 귀사의 조직이 책임이 있는 사람들의 안전관리의 '모범 사례'를 보여야 한다면 귀사에게 맞을 것입니다.
								<span style="font-family: georgia;">IGC</span>는 관공서, 제조업, 서비스업, 식품회사, 프랜차이즈점을 포함한 다양한 분야의 다양한 조직에게 인증을 부여하고 있습니다.<br><br>
								------>
								<!----span style="font-size:1.2em">이0 규격은 다음 사항들에 도움을 줍니다.</span-----> <br><br>
								  <list><strong>고객 만족</strong><br> 
																고객의 건강 및 재산을 보호함으로써 지속적으로 고객 요구사항을 충족</list><br><br>
								  <list><strong>운영비용 감소 </strong><br>
																사고 및 질병으로 인한 시간 손실 감소. 그리고, 법률 비용 및 보상으로 인한 비용 감소로 현금 축적</list><br><br>
								  <list><strong>주주 관계 개선 </strong><br>
																직원, 고객 및 협력업체의 건상 및 재산을 더 우선시함으로써, 그들이 반응할 것입니다.</list><br><br>
								  <list><strong>법규 준수 </strong><br>
																법적/규제적 요구사항이 어떻게 귀사 및 고객에 영향을 끼치는지 이해</list><br><br>
								  <list><strong>리스크관리 개선</strong><br> 
																잠재적 사고를 파악하여 리스크를 최대한 낮게 유지하기 위해 관리 및 조치를 실행합니다.</list><br><br>
								  <list><strong>증명된 사업 신뢰도 </strong><br>
																인정된 규격에 대한 독립적 심사는 많은 것을 보여줍니다.</list><br><br>
								  <list><strong>사업 확대 </strong><br>
																고객은 보통 납품 조건으로 인증서를 요구합니다. 그러므로 해당 규격을 취득하면 선택의 폭이 넓어집니다. ISO 45001은 또한 구매 관련 안전 스킴 (SSIP)으로 인식됩니다.</list><br><br>
								</span>
																
							</dd>
						</dl>			
					</li>
					
					
					<li>
						<dl>
							<dt>
								<img src="./image/ISO_9001_03.jpg" alt="ICG인증원의 역량">
							</dt>
							<dd>
								<strong>IGC의 역량</strong><br><br>
								<span style="font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
							  
							  <span style="font-family: georgia;">1. IGC</span>는 미국의 인정기구인 <span style="font-family: georgia;">IGC</span>로부터 <span style="font-family: georgia;">ISO</span> 45001에 대한 인정을 받아 경영시스템에 대한 인증 서비스를 제공하고 있습니다. <br><br>
							  
							  <span style="font-family: georgia;">2. IGC</span>의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
							  <span style="font-family: georgia;">3. IGC</span>는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 <span style="font-family: georgia;">ISO</span> 45001은 물론 품질, 환경 및 기타 경영시스템에 대한 인증을 제공하고 있습니다. <br><br>
							  <span style="font-family: georgia;">4. IGC</span>는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
		
							   </span><br><br>
							   <!------
								<span style="font-size:1.2em">1.고객 중시</span><br><br>
								<span style="font-size:1.2em">2.리더십</span><br><br>
								<span style="font-size:1.2em">3.관련 인원들의 적극적 관여</span><br><br>
								<span style="font-size:1.2em">4.프로세스 접근방식</span><br><br>
								<span style="font-size:1.2em">5.경영에의 체계적 접근</span><br><br>
								<span style="font-size:1.2em">6.의사결정에의 사실 기반 접근</span><br><br>
								<span style="font-size:1.2em">7.상호 이익 공급업체 관계</span><br><br>
								<span style="font-size:1.2em">8.지속적 개선</span><br><br>
								------>
							</dd>
						</dl>	
					</li>
					
				</ul>
			</section>
			<br><br><br><br>	
			<!----(주)아이지씨인증원 사업영역 시작-------->
			<section class="partner_type2" style="font-size:1.5em;text-align:justify;margin-right:10px;display:inline-block;">
				<h2 class="con_arrow" style="font-size:0.7em;">
					<p>우리가 제공하는 서비스</p>
				</h2>
				<div class="con_box">
		
				<span style="font-family: georgia;">IGC</span>는 다음과 같은 인증 및 관련 서비스를 제공하고 있습니다. 특히, <span style="font-family: georgia;">ISO</span> 45001은 <span style="font-family: georgia;">ISO</span> 9001, <span style="font-family: georgia;">ISO</span> 14001과 통합 인증이 가능합니다.<br><br><br>
					<ul style="display:inline-block;text-aling:left;">
						<li><p><em><strong>01</strong></em><span><span style="font-family: georgia;">ISO 9001  </span> : 품질경영시스템</span></p></li>
						<li><p><em><strong>02</strong></em><span><span style="font-family: georgia;">ISO 14001 </span> : 환경경영시스템</span></p></li>
						<li><p><em><strong>03</strong></em><span><span style="font-family: georgia;">ISO 45001 </span> : 심사원 교육 및 인증</span></p></li>
						<!------
						<li><p><em><strong>04</strong></em><span>심사자격 인증 서비스</span></p></li>
						<li><p><em><strong>05</strong></em><span>심사원 교육 및 양성</span></p></li>
						----->
						<br>
					</ul>
				</div>
		   </section>
		   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
		</article>
		<!--+++++ .컨텐츠 02 +++++-->
		
	</div>
	<!--+++ /20.05.07 탭컨텐츠 영역 +++-->
	
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>