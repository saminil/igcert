<?php
	include_once('./_common.php');
$g5['title'] = '건강, 안전 및 환경';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>


<!-----style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:50px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style------>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<!--------link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"------->


<style>
	.fc_pointer {color:#BC0000; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto; font-family:georgia; font-size:1.2em;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

	.vision_type5 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type5:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type5 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type5 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type5 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type5 .vision_area ul {margin:0; padding:0; }
	.vision_type5 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; }
    
	.vision_type5 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#339999;}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#ccccff;}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
    
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
    
    
    
    /* ISO 26000 심사원 교육 / 사회적 책임  시작 */
    .vision_type6 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type6:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type6 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type6 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type6 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type6 .vision_area ul {margin:0; padding:0; }
	.vision_type6 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type6 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; }
    
	.vision_type6 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type6 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}
	.vision_type6 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;}
    .vision_type6 .vision_area:nth-child(4) ul li .i_box {background:#005bab;}
    .vision_type6 .vision_area:nth-child(5) ul li .i_box {background:#339999;}
    .vision_type6 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type6 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
    
	.vision_type6 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type6 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type6 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type6 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type6 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type6 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type6 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type6 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type6 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
    
    
    
    
    /* ISO45001 심사원 교육 / 안전보건경영시스템 시작  */
    .vision_type7 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type7:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type7 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type7 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type7 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type7 .vision_area ul {margin:0; padding:0; }
	.vision_type7 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type7 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; }
    
	.vision_type7 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type7 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}
	.vision_type7 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;}
    .vision_type7 .vision_area:nth-child(4) ul li .i_box {background:#ffffff;}
    .vision_type7 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}
    .vision_type7 .vision_area:nth-child(6) ul li .i_box {background:#f48025;}
    .vision_type7 .vision_area:nth-child(7) ul li .i_box {background:##339999;}
    
	.vision_type7 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type7 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type7 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type7 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type7 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type7 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type7 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type7 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type7 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
    

    
	.partner_type2 .con_area .txtArea ul li{margin-top:15px;}
	.partner_type2 .con_area .txtArea ul li:first-child{margin-top:0}
	.partner_type2 .con_area .txtArea ul li span{font-weight:700; margin-right:10px; }
	.partner_type2 .con_area .txtArea ul li p{display:inline-block; }
    
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
    
    @media screen and (max-width:768px){
		
		.content_wrap{width:96%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

        .vision_type5 .vision_area h2.title { font-size:1.5em; }
		.vision_type5 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type5 .vision_area ul li {width:100%;}
		.vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃 설정  */
        
        .vision_type6 .vision_area h2.title { font-size:1.5em; }
		.vision_type6 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type6 .vision_area ul li {width:100%;}
		.vision_type6 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type6 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type6 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
        
        
        
        .vision_type7 .vision_area h2.title { font-size:1.5em; }
		.vision_type7 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type7 .vision_area ul li {width:100%;}
		.vision_type7 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type7 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type7 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
        
        
        
	}

</style>

<div class="content_wrap">

<!--+++ 20.05.26 탭메뉴/ 시스템인증 > 보건 및 의료기기 시작 +++-->
		<div class="tab_menu tab01">
			<ul style="display:inline-block;position:relative;text-align:center;">
				<!-- 처음 활성화 메뉴에 class="on" -->
				<li class="on"><a href="javascript:;">ISO 20121</a></li>
				<li><a href="javascript:;">ISO 26000</a></li>
				<li><a href="javascript:;">ISO 45001</a></li>
			</ul>
		</div>
		<!--+++ 20.05.26 탭메뉴/ 시스템인증 > 보건 및 의료기기 종료 +++-->
		
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
		

<!--+++ 20.05.26 탭컨텐츠 영역 시작 +++-->
  <div class="tab_con">
  
    <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
<article style="display:block">	

	<section class="page_title">
		<h1 class="sub_tit">ISO 20121 <span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt"> ISO 20121: 이벤트 지속가능성 경영시스템 교육</h2>
	</section>

		<section class="vision_type5">	
		<div class="vision_area">
		<h2 class="title">ISO 20121: 이벤트 지속가능성 경영시스템 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_20121_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO 20121 이벤트 지속가능성 경영시스템은 이벤트 관련 기업이 조직 운영과 사업을 추진하는 데있어 경제, 환경, 사회적으로 가장 효율적인 방법을 제공하는 국제표준입니다. 이 규격은 이벤트와 관련한 모든 상황을 미리 대비하고 발생될 수 있는 문제를 최소화하고자 개발한 것입니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						※이벤트: 회의, 컨벤션, 전시, 행사, 축제 등 불특정의 사람들을 모아 놓고 개최하는 모임
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">ISO 20121란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_20121_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO 20121은 주최자, 관리자, 요리사 및 물류 공급 업체를 포함한 모든 구성원이 관련 있습니다. 이 규격은 보다 지속 가능한 이벤트를 운영하기 위해 관리 시스템 접근 방식을 취합니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						이벤트의 부정적인 영향인 폐기물과 탄소 배출 등을 줄이거나 예방하고 긍정적인 영향을 파악하여 환경과 지역 사회에 미치는 영향을 최소화하면서 최대의 성과를 올리는 방법을 제공합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">이벤트 지속가능성 경영시스템의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_20121_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO 20121은 지속 가능한 방식으로 이벤트를 실행하고 최고의 방법으로 산업에 도움을 줄 수 있는 표준입니다. 또한 보다 나은 에너지 및 폐기물 관리를 통해 비용 절감에 도움이 됩니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						ISO 20121를 실행함으로써, 굿우드(국제적인 이벤트를 운영하는 여러 지역 사이트)는 대중 교통 이용이 40% 증가하고 인쇄 용지 소비량이 50% 감소하는 비용 절감을 보였습니다. 또, 웨이마우스 및 포틀랜드 국립 요트 아카데미(WPNSA)에서 올림픽 경기장의 폐기물 관리 및 에너지 사용과 비용이 15% 절감한 사례를 보이며 WPNSA의 명성을 향상시켰습니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
                        사례와 같이, ISO 20121은 법적 위반에 대한 위험 감소에 도움을 주며 기업에서 중요한 비용 절감에 도움을 줄수 있습니다.<br><br>
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						<p style="font-weight:bold;">&#10003; 기대효과</p><br>
                          &#10102; 경쟁우위<br><br>
                          &#10103; 계획 개선<br><br>
                          &#10104; 직원의 동기 부여 및 유지 능력 향상<br><br>
                          &#10105; 자재 관리, 폐기물 감소 및 에너지 관리를 개선하여 비용 절감<br><br>
                          &#10106; 수익성 향상<br><br>
                          &#10107; 더 나은 고객, 공급자 및 지역사회 관계<br><br>
					</span>
					
					
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">IGC인증원의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>SOLUTIONS</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						&#10025; IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO/IEC 20121에 대한 교육서비스를 제공합니다.<br><br> 
						&#10025; GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다.<br><br>
						&#10025; IPC는 IAF로부터 IPC의 개인인증에 관한 절차를 인정받았습니다.<br><br> 
						&#10025; IPC와 개인인증 및 연수기관 지정에 대해 MLA를 체결한 GPC의 경우, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<!----(주)아이지씨인증원 사업영역 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>우리가 제공하는 서비스</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul style="text-align:justify;text-justify: inter-word;">
	         		IGC는 개인인증기관인 GPC와의 협력을 통해 여러 분야에 관련된 교육 및 심사원 인증 서비스를 제공합니다.<br><br>
	         			<li><p><em><strong>01</strong></em><span>정보 보안</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>보건, 안전 및 환경</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>품질경영시스템</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>경영, 위험 및 규정 준수</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>교통, 통신 및 에너지</span></p></li>
	         			<li><p><em><strong>06</strong></em><span>연속성, 복원력 및 복구</span></p></li>
	         			<li><p><em><strong>07</strong></em><span>IT 보안</span></p></li>
	         			<li><p><em><strong>08</strong></em><span>서비스 관리</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>	
	</section>
	
</article><!--------+++++++/ 컨텐츠 04  심사원 교육 >  교육 >  style="display:block"  종료 /++++++++----------->
	
	
	
<article><!--------+++++++/ 컨텐츠 04  심사원 교육 >  건강,안전 및 환경 > ISO 20121  시작 /++++++++----------->
	
	<section class="page_title">
		<h1 class="sub_tit">ISO 26000<span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 26000: 사회적 책임/심사원 교육</h2>
	</section>
	<section class="vision_type6">
		
		<div class="vision_area">
		<h2 class="title">ISO 26000: 사회적 책임 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_26000_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						국제표준화기구(ISO)가 2010년 11월 1일 발표한 기업의 사회적 책임(CSR : corporate social responsibility)에 대한 국제표준이다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						이는 사회의 모든 조직이나 기업이 의사결정 및 활동 등을 할 때 소속된 사회에 이익이 될 수 있도록 하는 책임을 규정한 것이다.				
				    </span>
				    <span style="text-align:justify;text-justify: inter-word;">
						구체적으로 산업계, 정부, 소비자, 노동계, 비정부기구(NGO) 등 7개 경제주체를 대상으로 지배구조, 인권, 노동관행, 환경, 공정거래, 소비자 이슈, 공동체 참여 및 개발 등 7대 의제를 사회적 책임 이슈로 규정하고, 이에 대한 실행지침과 권고사항 등을 담고 있다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 26000의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_26000_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						우리가 살고 있는 21세기는 기업이 단순하게 이윤추구를 넘어서 더 나은 사회를 만들기 위한 책임을 가지고 경영활동을 해야 하는 시대입니다. 
                        기업의 사회적 책임(CSR, Corporate Social Responsibility)이란, 기업이 사회에 대해 가지고 있는 책임을 뜻한다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">	
                        기업의 활동 과정에서 뇌물수수를 금지하고 회계 관리를 투명하게 관리하는 등 윤리경영과 환경이나 인권보호, 사회 공헌의 가치를 개선하는 것이다. 이해관계자뿐만 아니라 지역사회, 더 나아가 인류 사회 전체에 이익이 되도록 하기 위한 기업의 책무랍니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">	
                        ISO 26000은 국제표준화기구가 제정한 기업의 사회적 책임에 대한 국제표준입니다. 이는 사회의 모든 조직이나 기업이 의사결정이나 활동을 할 때 소속된 사회에 이익이 될 수 있도록 하는 책임을 규정한 것입니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">	
                        기업이 더 많은 사회적 책임을 하도록 국제 권장 사항을 설명하는 역할도 하고 있다. 환경 정책을 위한 작업 관행, 지속 가능한 발전 및 지역 사회에 미치는 영향에 이르기까지 모든 것을 해결할 수 있다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">	
                        기업이 더 많은 사회적 책임을 하도록 국제 권장 사항을 설명하는 역할도 하고 있다. 환경 정책을 위한 작업 관행, 지속 가능한 발전 및 지역 사회에 미치는 영향에 이르기까지 모든 것을 해결할 수 있다. 
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 26000의 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_26000_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span>
                       &#10056; 책임성<br><br>
                       &#10056; 투명성<br><br>
                       &#10056; 윤리적 행동<br><br>
                       &#10056; 이해 관계자의 이익 존중<br><br>
                       &#10056; 법규 준수<br><br>
                       &#10056; 국제 행동 규범존중<br><br>
                       &#10056; 인권 존중<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">ISO 26000 기대효과</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>CHALLENGE</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
                      &#10057; ISO 26000 지침을 준수하는 기업은 다음과 같은 혜택을 받을 수 있다.<br><br> 
                      &#10057; 기존 법률이나 규제를 준수하고, 향후 법률이나 규제를 파악하는 등 체계적인 접근법을 통해 법률 및 규제 요건에 대한 준수 체계 개선<br><br>
                      &#10057; 기업의 사회적 책임을 국제 규범 및 표준에 의거하여 이행하고 있음을 입증<br><br>
                      &#10057; 정부가 ISO 26000 준수 여부를 중요한 자격 기준으로 간주하고 있기 때문에 정부 입찰 참여시 경쟁업체 대비 경쟁력 확보<br><br>
                      &#10057; 주요 인력, 고객, 클라이언트, 사용자를 유지하고 새롭게 확보할 수 있는 능력<br><br>
                      &#10057; 직원의 사기, 헌신, 생산성 확보<br><br>
                      &#10057; 투자자, NGO, 기타 활동가, 정부가 기업을 바라보는 관점 개선<br><br>
                      &#10057; 지속 가능성 관련 위험에 대한 경영진의 인식 제고<br><br>
                      &#10057; 기업의 비즈니스 관행에 CSR 반영<br><br>
                      &#10057; 인식 제고, 지식 향상, 비즈니스 의사 결정 개선<br><br>
                      &#10057; 자원의 효율적 사용, 비용 감소에 관한 비즈니스 의사 결정 개선<br><br>
                      &#10057; 브랜드 이미지/명성 제고, 소비자 만족도 향상으로 인한 소비자 선호도 증가, 지역사회 및 환경 운동가들과의 관계 개선, 공정 거래 기업으로서의 이미지 구축 등 다양한 혜택<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		<!----(주)아이지씨인증원 사업영역 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>(주)아이지씨인증원 사업영역</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         			<li><p><em><strong>01</strong></em><span>경영시스템 인증</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>제품인증 서비스</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>심사자격 인증 서비스</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>심사원 교육 및 양성</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
		
		
		
		
		
	</section>

</article><!--------+++++++/ 컨텐츠 04  심사원 교육 >  건강,안전 및 환경 > ISO 20121  종료 /++++++++----------->
    
    
    
    
    
    
<article><!--------+++++++/ 컨텐츠 04  심사원 교육 >  건강,안전 및 환경 > ISO 45001  시작 /++++++++----------->
	
	<section class="page_title">
		<h1 class="sub_tit">ISO 45001<span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 45001:안전보건경영시스템/심사원 교육</h2>
	</section>
	<section class="vision_type7">
		
		<div class="vision_area">
		<h2 class="title">ISO 45001:안전보건경영시스템 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_45001_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO 45001은 안전보건경영시스템으로, 기존의 OHSAS 18001:2007 규격이 2018년 ISO 45001로 대체되었습니다. 이는 ISO 9001 및 14001 관리 시스템과 호환되는 산업 보건 및 안전 관리 시스템을 통해 보건 및 안전 관리 책임을 관리하기 위한 프레임워크를 제공합니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						이 표준은 국제적 사용을 위해 개발되었으며 조직이 보건 및 안전 위험을 제어하고 성능을 향상시킬 수 있도록 합니다. 효과적인 안전보건 관리시스템은 직원 및 기타 이해 관계자에 대한 위험을 줄이고 법규 준수를 지원합니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						기존 OHSAS 18001 규격이 2021년 3월 만료됨에 따라 신규 고객의 경우 2020년 3월부터는 ISO 45001로 진행되어야 하고, 기존 OHSAS 18001 인증 고객은 ISO 45001로 전환되어야 합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 45001 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_45001_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO 45001:2018은 ISO 9001:2015 등 규격에 적용되는 High Level Structure가 적용되어, 다른 규격과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.<br><br>
					</span>
					<span>
                       1. 적용범위<br><br>
                       2. 인용표준<br><br>
                       3. 용어와 정의<br><br>
                       4. 조직 상황<br><br>
                       5. 리더십과 근로자 참여<br><br>
                       6. 기획<br><br>
                       7. 지원<br><br>
                       8. 운용<br><br>
                       9. 성과 평가<br><br>
                       10. 개선<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">PDCA 모델</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_45001_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span>
						ISO 45001의 가장 큰 특징은 PDCA모델입니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
                       1)	PLAN (계획): 안전보건 및 기타 리스크, 안전보건 및 기타 기회를 결정 및 평가하고, 조직의 안전보건 방침에 따라서 결과를 만들어내는 데 필요한 안전보건 목표 및 프로세스 수립<br><br>
                       2)	DO (실행): 계획대로 프로세스 실행<br><br>
                       3)	CHECK (검토): 안전보건 방침과 목표에 관한 활동 및 프로세스를 모니터링 및 측정하고, 그 결과를 보고<br><br>
                       4)	ACT (조치): 의도된 결과를 달성하기 위하여 안전 보건 성과를 지속적으로 개선하기 위한 조치 시행<br><br>

					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">ISO 45001의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_45001_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO 45001은 127개국 이상의 9만개 이상 조직에게 적합합니다. 만약에 귀사의 조직이 책임이 있는 사람들의 안전관리의 ‘모범 사례’를 보여야 한다면 귀사에게 맞을 것입니다.<br><br>
                        IGC는 관공서, 제조업, 서비스업, 식품회사, 프랜차이즈점을 포함한 다양한 분야의 다양한 조직에게 인증을 부여하고 있습니다.

					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						이 규격은 다음 사항들에 도움을 줍니다.<br><br>
                        &#10051; 작업장 유해물질 파악 및 효과적인 예방관리 수행<br><br>
                        &#10051; 작업장 내 부상 및 건강 악화 방지<br><br>
                        &#10051; 현장 사고 감소를 통해 비용 절감<br><br>
                        &#10051; 법적 요구사항 준수 평가<br><br>
                        &#10051; 안전 환경 개선<br><br>
                        &#10051; 교육훈련 및 적격성 요구사항 분야 파악<br><br>
                        &#10051; 생산성 증가<br><br>
                        &#10051; 고객사의 사전 등록 프로세스 보완<br><br>
                        &#10051; 기업 책임 촉진<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">기대효과</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>DEDICATION</em></div>
				</div>
				<div class="con_txt">
					<span>
						ISO 45001의 기대효과는 다음과 같습니다:<br>
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
                       <p style="font-weight:bold;">&#10047; 고객 만족</p>
                               고객의 건강 및 재산을 보호함으로써 지속적으로 고객 요구사항을 충족<br><br>
                       <p style="font-weight:bold;">&#10047; 운영비용 감소</p>
                               사고 및 질병으로 인한 시간 손실 감소. 그리고, 법률 비용 및 보상으로 인한 비용 감소로 현금 축적<br><br>
                       <p style="font-weight:bold;">&#10047; 주주 관계 개선</p>
                               직원, 고객 및 협력업체의 건상 및 재산을 더 우선시함으로써, 그들이 반응할 것입니다.<br><br>
                       <p style="font-weight:bold;">&#10047; 법규 준수</p>
                               법적/규제적 요구사항이 어떻게 귀사 및 고객에 영향을 끼치는지 이해<br><br>
                       <p style="font-weight:bold;">&#10047; 리스크관리 개선</p>
                               잠재적 사고를 파악하여 리스크를 최대한 낮게 유지하기 위해 관리 및 조치를 실행합니다.<br><br>
                       <p style="font-weight:bold;">&#10047; 증명된 사업 신뢰도</p>
                               인정된 규격에 대한 독립적 심사는 많은 것을 보여줍니다.<br><br>
                       <p style="font-weight:bold;">&#10047; 사업 확대</p>
                               고객은 보통 납품 조건으로 인증서를 요구합니다. 그러므로 해당 규격을 취득하면 선택의 폭이 넓어집니다. ISO 45001은 또한 구매 관련 안전 스킴 (SSIP)으로 인식됩니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">IGC인증원의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>SOLUTIONS</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						&#10052; IGC는 미국의 인정기구인 IAS로부터 ISO 45001에 대한 인정을 받아 경영시스템에 대한 인증 서비스를 제공하고 있습니다. <br><br>
						&#10052; IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
                        &#10052; IGC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 45001은 물론 품질, 환경 및 기타 경영시스템에 대한 인증을 제공하고 있습니다. <br><br>
                        &#10052; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<!----(주)아이지씨인증원 사업영역 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>우리가 제공하는 서비스</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul style="display:block;text-align:justify;text-justify: inter-word;">
	         		IGC는 다음과 같은 인증 및 관련 서비스를 제공하고 있습니다. 특히, ISO 45001은 ISO 9001, ISO 14001과 통합 인증이 가능합니다.<br><br>
	        			<li style="float:none;"><p><em><strong>01</strong></em><span>ISO 9001: 품질경영시스템</span></p></li>
	         			<li style="float:none;"><p><em><strong>02</strong></em><span>ISO 9001: 품질경영시스템</span></p></li>
	         			<li style="float:none;"><p><em><strong>03</strong></em><span>ISO 45001 심사원 교육 및 인증</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>

</article><!--------+++++++/ 컨텐츠 04  심사원 교육 >  건강,안전 및 환경 > ISO 45001  시작 /++++++++----------->    
    
    
    
    
    
    

	
</div> <!------------+++++++/    <div class="tab_con"> 종료  /+++++++++++--------------->

</div><!--------++++++++/ <div class="content_wrap">  /++++++++---------------->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>