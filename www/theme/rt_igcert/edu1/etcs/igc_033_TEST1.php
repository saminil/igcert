<?php
	include_once('./_common.php');
$g5['title'] = '교육';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
@import url(http://fonts.googleapis.com/earlyaccess/notosanskr.css); font-family:

	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; max-width:1200px; min-width:320px; margin:0 auto; font-size:1.4em;font-family: 'Noto Sans KR', sans-serif;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }
	.partner_type2{clear:both; width:100%; min-width:320px; margin:0 auto;}
	.partner_type2:after{content:""; clear:both; display:block;}

	.partner_type2 .txt{text-align:left; font-size:1em; line-height:2em; border-left:5px solid #666; padding-left:15px; margin-bottom:50px;}
	.partner_type2 .txt span{font-weight:700; font-size:1.4em;}
	.partner_type2 .con_area{ width:33.2%; float:left;  padding:0; padding-bottom:50px; margin:0 auto; border-bottom:1px solid #eee; margin-bottom:50px;}

     /* ISO등 규격목록 이미지 정렬 + 순서 변경, 2020년3월26일  수정===> float:right를 float:left로 수정하면 순서가 좌측에서부터 시작합<=== 마르코 수정함 */
	.partner_type2 .con_area:nth-child(2n){float:right; }
	.partner_type2 .con_area:after{content:""; clear:both; display:block;}
	.partner_type2 .con_area .thumb{position:relative;float:left; width:300px; height:240px; overflow:hidden;}
	.partner_type2 .con_area .thumb img{width:100%; max-width:750px;} 
	.partner_type2 .con_area .txtArea{float:left; width:300px; padding-left:40px;}
	.partner_type2 .con_area .txtArea .tit{font-size:2em; color:#023059; margin-top:10px;}
	.partner_type2 .con_area .txtArea ul{margin-top:20px; color:#023059;}
    .partner_type2 .con_area .txtArea ul a {color:#9B9740;}
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
    
 	
	@media screen and (max-width:992px){	
		.content_wrap{width:96%;}
		.page_title{margin-bottom:40px;}
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.partner_type2 .con_area .thumb{float:none; width:90%; height:auto; margin:0 auto; }
        .partner_type2 .con_arrow{width:95%; margin:0 auto;}
        .partner_type2 .con_box{width:95%; margin:0 auto;}
	}

    
	@media screen and (max-width:480px){
		.partner_type2 .con_area{width:100%; height:auto; 
            float:none;text-align:}
        .partner_type2 .con_arrow p{ font-size:1.5em; margin-top:30px;}
        .partner_type2 .con_box ul li { width:100%; }
	}
    
 /* 서브페이지 컨텐츠 최상위 타이틀 배경 시작 */
    .sub_tit{ 
        background: linear-gradient( to top, #9B9740, #9B9740 );
        position:relative;
        width:100%;
        height:5%;
        color:#023059;
        line-height:40px;
        padding-top:10px;
        Font-size:1.5em;
        color:#fff;
    }
    
    /* 서브페이지 컨텐츠 내용, 이미지 위에 텍스트 올려쓰기 시작 */
    h3 {
        position: absolute; 
        left: 50%; 
        top: 10%; 
        transform: translate(-50%, -50%); 
        /*background: rgba(255,255,255,0.5)*/
        background: linear-gradient( to top, #9B9740, #9B9740); 
        padding: 10px 30px; 
        border-radius: 0px;
        width:100%;
        height:20%;
        color:#fff;
        text-align:center;
    }  
    
  
    /* 목록 앞에 화살표 기호 시작  */
    .arrow {display:inline-block; background:#9B9740; position:relative;}
    .arrow:after {content:''; position:absolute; width:0; height:0; border-style:solid;}
    /*.arrow.test_4 {width:20px; height:10px;}*/
    .arrow.test_4:after {border-color:transparent transparent transparent #9B9740; top:-15px; left:-20px;border-width:10px 10px;}
    /*.arrow.test_4:after {border-width:15px 20px;} */
</style>


<div class="content_wrap">
	<section class="page_title">
		<h3 class="sub_tit"><span>교육인증</span>&nbsp;서비스 목록</h3>
	</section>	

	<section class="partner_type2">
		<div class="txt"><span style="color:#9B9740;">교육인증 서비스란? </span>
		<p style="text-align:justify;text-justify: inter-word;font-family:georgia;">
            직원이 기업의 최고 자산입니다. 직원들이 최신 경영 동향, 관련 규격, 품질 및 안전에 관한 요구 사항 등에 정통하다면 기업 또한 그렇습니다.그렇기 때문에 교육에 대한 투자는 기업의 성공을 보장하는 확실한 투자입니다.
            직원의 역량을 최대한 개발하기 위해서는 먼저 최선의 교육 파트너를 찾아야 합니다. IGC는 직업 안전, 경영 시스템 및 전문 기술에서부터 최고 경영자를 위한 교육 프로그램에 이르기까지 종합적인 교육 프로그램을 제공하여 기업의 효율성을 향상시키며, 고객 여러분들께 유형의 경제적 가치를 제공하고 있습니다.
            또한, IGC는 국제적으로 공인받은 교육 및 실습 프로그램을 기반으로 전문 자격증을 제공하고 있습니다. 여기에는 ITSM (Information Technolgy Service Management)의  ITIL® 과 같은 다양한 과정이 있습니다. 경영 자문과 직원 교육 분야에서 풍부한 경험을 보유한 적임자가  제공하는 IGC의 직원 교육 프로그램은 고객 여러분의 직원들에게 전문성과 경쟁력을 제공할 것입니다.
            IGC의 교육 프로그램을 통해 직원들의 능력을 개발하고 전문성의 함양하여 기업의 사업 목표를 달성하시기 바랍니다.
		</p>
		</div>
	<section class="partner_type2">
		<div class="txt"></div>
		
		
		
		
		<!-----1line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_035_ISO13485.php">
			    <h3>의료기기</h3>
				<img src="../image/edu_03.jpg" alt="품질 교육">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="./igc_035_ISO13485.php"><span><div  class="arrow test_4"></div>ISO 13485</span></a></li>
					<!-----li>
						<span>분야01</span> 00000000 &nbsp;<span>분야02</span> 11111111
					</li---->
				</ul>
			</div>
		</div>	
		
				
        <div class="con_area">
			<div class="thumb">
              <a href="./igc_033_ISO9001.php">
			    <h3>품질</h3>
				<img src="../image/edu_01.jpg" alt="의료기기 인증 교육">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="./igc_033_ISO9001.php"><span><div  class="arrow test_4"></div>ISO 9001</span></a></li>

					<!-----li>
						<span>분야01</span> 00000000 &nbsp;<span>분야02</span> 11111111
					</li---->
				</ul>
			</div>
		</div>
  
  		<div class="con_area">
			<div class="thumb">
              <a href="./igc_034_ISO14001.php">
			    <h3>환경</h3>
				<img src="../image/edu_02.jpg" alt="환경 인증 교육">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">품질경영 - 1라인 우측</p------>
				<ul>
					<li><a href="./igc_034_ISO14001.php"><span><div  class="arrow test_4"></div>ISO 14001</span></a></li>
					<!-----li>
						<span>분야01</span> 00000000 &nbsp;<span>분야02</span> 11111111
					</li---->
				</ul>
			</div>
		</div>
		
		
		
		<!-----2line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_036_ISO22000.php">
			    <h3>식품</h3>
				<img src="../image/edu_04.jpg" alt="식품인증 교육">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 의료기기</p------>
				<ul>
					<li><a href="./igc_036_ISO22000.php"><span><div  class="arrow test_4"></div>ISO 22000</span></a></li>
					<li><a href="./igc_037_FSSC22000.php"><span><div  class="arrow test_4"></div>FSSC 22000</span></a></li>
					<li><a href="./igc_038-12_FDA-FSMA.php"><span><div  class="arrow test_4"></div>FDA FSMA</span></a></li>
					<li><a href="./igc_039-13_FSPCA-PCQL.php"><span><div  class="arrow test_4"></div>FSPCA승인 PCQI양성과정</span></a></li>
					<!-----li>
						<span>분야01</span> 00000000 &nbsp;<span>분야02</span> 11111111
					</li---->
				</ul>
			</div>
		</div>

  
		<div class="con_area">
			<div class="thumb">
              <a href="#">
			    <h3>^^광고/홍보^^</h3>
				<img src="../image/partner_img1.jpg" alt="보건 및 안전 인증 교육">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">식품</p------>
				<ul>
					<li><a href="#"><span><div  class=""></div></span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
				</ul>
			</div>
		</div>
		
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_040-14_OHSAS 18001.php">
			    <h3>보건 및 안전</h3>
				<img src="../image/edu_05.jpg" alt="보건 및 안전 인증 교육">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">식품</p------>
				<ul>
					<li><a href="./igc_040-14_OHSAS18001.php"><span><div  class="arrow test_4"></div>OHSAS 18001</span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
				</ul>
			</div>
		</div>
        
     </section>   
       
    <section class="partner_type2">
		<div class="txt"></div>
		
       
       <!-----3Line 시작------------>
        <div class="con_area">
			<div class="thumb">
              <a href="./igc_048_ISO13053.php">
			    <h3>품질 경영시스템</h3>
				<img src="../image/edu_08.jpg" alt="정보 보안인증 교육">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">에너지 경영</p------>
				<ul>
					<li><a href="./igc_048_ISO13053.php"><span><div  class="arrow test_4"></div>ISO 13053</span></a></li>
					<li><a href="./igc_049_ISO-IEC17025.php"><span><div  class="arrow test_4"></div>ISO/IEC 17025</span></a></li>
					<li><a href="./igc_050_ISO30301.php"><span><div  class="arrow test_4"></div>ISO 30301</span></a></li>
					<li><a href="./igc_051_ISO 21500.php"><span><div  class="arrow test_4"></div>ISO 21500</span></a></li>

					<!-----li>
						<span>분야01</span> 00000000 &nbsp;<span>분야02</span> 11111111
					</li---->
				</ul>
			</div>
		</div>
		
		
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_041-15_ISO-IEC27002.php">
			    <h3>정보 보안</h3>
				<img src="../image/edu_06.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="./igc_041-15_ISO-IEC27002.php"><span><div  class="arrow test_4"></div>ISO/IEC 27002</span></a></li>
					<li><a href="./igc_042_ISO-IEC27005.php"><span><div  class="arrow test_4"></div>ISO/IEC 27005</span></a></li>
					<li><a href="./igc_043_ISO27799.php"><span><div  class="arrow test_4"></div>ISO 27799</span></a></li>
					<li><a href="./igc_044_ISO27001.php"><span><div  class="arrow test_4"></div>ISO 27001</span></a></li>
				</ul>
			</div>
		</div>
 
 		<div class="con_area">
			<div class="thumb">
              <a href="./igc_045_ISO20121.php">
			    <h3>건강,안전 및 환경</h3>
				<img src="../image/edu_07.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">정보보안</p------>
				<ul>
					<li><a href="./igc_045_ISO20121.php"><span><div  class="arrow test_4"></div>ISO 20121</span></a></li>
					<li><a href="./igc_046_ISO26000.php"><span><div  class="arrow test_4"></div>ISO 26000</span></a></li>
					<li><a href="./igc_047_ISO45001.php"><span><div  class="arrow test_4"></div>ISO 45001</span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
				</ul>
			</div>
		</div>
		
        
        

        <!-----4line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_052_ISO31000.php">
			    <h3>경험, 위험 및 규정 준수</h3>
				<img src="../image/edu_09.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="./igc_052_ISO31000.php"><span><div  class="arrow test_4"></div>ISO 31000</span></a></li>
					<li><a href="./igc_053_ISO-IEC38500.php"><span><div  class="arrow test_4"></div>ISO/IEC 38500</span></a></li>
					<li><a href="./igc_054_ISO-IEC29100.php"><span><div  class="arrow test_4"></div>ISO/IEC 29100</span></a></li>
					<li><a href="./igc_055_ISO37001.php"><span><div  class="arrow test_4"></div>ISO 37001</span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
				</ul>
			</div>
		</div>
		

		<div class="con_area">
			<div class="thumb">
              <a href="./igc_059_ISO28000.php">
			    <h3>연속성, 복원력 및 복구</h3>
				<img src="../image/edu_11.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="./igc_059_ISO28000.php"><span><div  class="arrow test_4"></div>ISO 28000</span></a></li>
					<li><a href="./igc_060_ISO22301.php"><span><div  class="arrow test_4"></div>ISO 22301</span></a></li>
					<li><a href="./igc_061_ISO22320.php"><span><div  class="arrow test_4"></div>ISO 22320</span></a></li>
					<li><a href="./igc_062_ISO22316.php"><span><div  class="arrow test_4"></div>ISO 22316</span></a></li>
					<li><a href="./igc_063_ISO22317.php"><span><div  class="arrow test_4"></div>ISO 22317</span></a></li>
				</ul>
			</div>
		</div>
		

		<div class="con_area">
			<div class="thumb">
              <a href="./igc_056_ISO-TS29001.php">
			    <h3>교통, 통신 및 에너지</h3>
				<img src="../image/edu_10.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="./igc_056_ISO-TS29001.php"><span><div  class="arrow test_4"></div>ISO/TS 29001</span></a></li>
					<li><a href="./igc_057_ISO50001.php"><span><div  class="arrow test_4"></div>ISO 50001</span></a></li>
					<li><a href="./igc_058_ISO39001.php"><span><div  class="arrow test_4"></div>ISO 39001</span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
				</ul>
			</div>
		</div>
 
        <!-----5line 시작------------>
 		<div class="con_area">
			<div class="thumb">
              <a href="#">
			    <h3>^^광고/홍보^^</h3>
				<img src="../image/partner_img1.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="#"><span><div  class=""></div></span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
				</ul>
			</div>
		</div>
		
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_064_ISO-IEC27032.php">
			    <h3>IT 보안</h3>
				<img src="../image/edu_12.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="./igc_064_ISO-IEC27032.php"><span><div  class="arrow test_4"></div>ISO/IEC 27032</span></a></li>
					<li><a href="./igc_065_ISO-IEC27034.php"><span><div  class="arrow test_4"></div>ISO/IEC 27034</span></a></li>
					<li><a href="./igc_066_ISO-IEC27035.php"><span><div  class="arrow test_4"></div>ISO/IEC 27035</span></a></li>
				</ul>
			</div>
		</div>
		
		
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_067_ISO-ICE20000.php">
			    <h3>서비스 관리</h3>
				<img src="../image/edu_13.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="././igc_067_ISO-ICE20000.php"><span><div  class="arrow test_4"></div>ISO/IEC 20000</span></a></li>
					<li><a href="./igc_068_ISO55001.php"><span><div  class="arrow test_4"></div>ISO 55001</span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
				</ul>
			</div>
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


</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
<!----위 코드 관련 내용 : 상단 메인메뉴 ----->

<!----?php
	include "../include/tail.php"; 
?------>