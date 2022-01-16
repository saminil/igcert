<?php
	include_once('./_common.php');
$g5['title'] = '시스템 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<!------ Existing File Codings  시작----->
<style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:1rem; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style>
<!------ Existing File Codings  종료----->

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
/*    *:lang(en) {font-family: georgia;} */ /*영문 폰트 정의 */
/*    *:lang(ko) {font-family: 'Noto Sans', sans-serif; font-weight:400; letter-spacing:-0.02em;}   */
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; max-width:1200px; min-width:320px; margin:0 auto; font-size:1.2em;}
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
	.partner_type2 .con_area:nth-child(2n){float:left; }  
	.partner_type2 .con_area:after{content:""; clear:both; display:block;}
	.partner_type2 .con_area .thumb{position:relative;float:left; width:300px; height:240px; overflow:hidden;}
	.partner_type2 .con_area .thumb img{width:100%; max-width:750px;} 
	.partner_type2 .con_area .txtArea{float:left; width:300px; padding-left:40px;}
	.partner_type2 .con_area .txtArea .tit{font-size:2em; color:#023059; margin-top:5px;}
	.partner_type2 .con_area .txtArea ul{margin-top:5px; color:#023059;}/* 규격 목록과 상단 이미지 상하간격 */
    .partner_type2 .con_area .txtArea ul a {color:#6699cc;}
    /*.partner_type2 .con_area .txtArea ul {width:20px; height:10px;}*/
    /*.partner_type2 .con_area .txtArea ul:after {content:''; position:absolute; width:0; height:0; border-style:solid;}*/
    /*.partner_type2 .con_area .txtArea ul:after {content:''; position:absolute; width:20px; height:10px;border-color:transparent transparent transparent #6699cc; top:-10px; left:20px;border-style:solid;}  서브페이지 컨텐츠 규격 앞 화살표 넣기 */
 
	.partner_type2 .con_area .txtArea ul li{margin-top:15px;}/* 규격 목록 상하 간격 */
	.partner_type2 .con_area .txtArea ul li:first-child{margin-top:0}
	.partner_type2 .con_area .txtArea ul li span{font-weight:700; margin-right:5px; }
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
		.content_wrap{width:96%;text-align:left;}
		.page_title{margin-bottom:40px;}
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.partner_type2 .con_area .thumb{float:none; width:90%; height:auto; margin:0 auto; }
        .partner_type2 .con_arrow{width:95%; margin:0 auto;}
        .partner_type2 .con_box{width:95%; margin:0 auto;}
	}

    
	@media screen and (max-width:480px){
        .content_wrap{width:80%;}
		.partner_type2 .con_area{width:100%; height:auto; 
            float:none;}
        .partner_type2 .con_arrow p{ font-size:1.5em; margin-top:30px;}
        .partner_type2 .con_box ul li { width:100%; }
	}
    
    @media screen and (max-width:320px){
        .content_wrap{width:70%;text-align:justify;}
		.partner_type2 .con_area{width:100%; height:auto; 
            float:none;}
	}
    
    /* 서브페이지 컨텐츠 최상위 타이틀 배경 시작 */
    .sub_tit{ 
        /*background: linear-gradient( to top, #6699cc, #6699cc );*/
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
        background: linear-gradient( to top, #6699cc, #6699cc); 
        padding: 10px 30px; 
        border-radius: 0px;
        width:100%;
        height:20%;
        color:#fff;
        text-align:center;  
    }  

    /* 목록 앞에 화살표 기호 시작  */
    .arrow {display:inline-block; background:#6699cc; position:relative;}
    .arrow:after {content:''; position:absolute; width:0; height:0; border-style:solid;}
    /*.arrow.test_4 {width:20px; height:10px;}*/
    .arrow.test_4:after {border-color:transparent transparent transparent #6699cc; top:-15px; left:-20px;border-width:10px 10px;}
    /*.arrow.test_4:after {border-width:15px 20px;} */
</style>

<div class="content_wrap">
	<section class="page_title">
		<h3 class="sub_tit"><span>경영시스템</span>&nbsp;인증서비스 목록</h3>
		<h2 class="sub_txt" ><a href="/theme/rt_igcert/igc/process.php" style="position:relative;top:-40px;color:#023059;">인증절차 미리보기 Click!</a></h2>
	</section>	

	<section class="partner_type2">
		<div class="txt">
		 <span style="color:#1698de;">경영시스템 인증이란?</span><br>
           <strong style="font-weight:bold;">프로세스 최적화를 통한 품질 목표 달성</strong><br>
           <p style="text-align:justify;text-justify: inter-word;">
           효과적인 경영 시스템은 해당 조직에 관해 많은 것을 이야기해줍니다. 조직의 운영을 최적화하기 위해 얼마나 노력하고 있는지를 보여주는 것은 물론 품질, 안전 및 보안에 대한 조직의 노력을 보여 줍니다. 또한 체계적인 시스템을 통해 지속 가능한 성장에 대한 약속을 강조하는 것은 물론 직원들의 동기 부여와 고객 만족을 높이기 위한 노력을 보여줍니다.    <br><br>
           결론적으로, 경영 시스템 인증을 통해 고객 및 주주들에게 기업 및 조직의 시스템에 대한 강력한 선언을 할 수 있습니다.
           IGC는 다양한 경영 시스템에 대해 국제적으로 인정받은 인증 기관으로, 품질, 환경, 에너지, 안전, 위험, 건강, 교육, 비즈니스의 연속성 그리고 사회적 책임 등과 관련된 다양한 경영 시스템에 대해 심사 및 인증 노하우를 보유하고 있으며, 자동차, 철도, 항공, 기계 공학, 정보 통신 기술, 금융 및 의료 산업 등 다양한 분야에서 경영 시스템 인증 서비스를 제공하고 있습니다.<br><br>
           IGC 는 단순하게 인증만이 아닌, 운영 과정을 최적화하고 평가하기 위한 다양한 도구와 사례를 제공하여 고객 여러분들의 비즈니스 전 과정에 걸쳐 위험을 줄이고 효율성이 향상될 수 있도록 실질적인 도움을 드리고 있습니다.<br><br>
           따라서, 조직과 프로세스의 지속적인 개선과 최적화를 지원해드릴 파트너를 찾고 계신다면  IGC를 선택하시기 바랍니다.
           </p>
		</div>

		<!-----1line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="igc_006_ISO9001.php">
			    <h3>품질경영 인증</h3>
				<img src="../image/00000_bg.jpg" alt="품질경영 인증">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="igc_006_ISO9001.php"><span><div  class="arrow test_4"></div>ISO 9001</span></a></li>
					<li><a href="igc_006_ISO9001.php"><span><div  class=""></div></span></a></li>
				</ul>
			</div>
		</div>	
	
        <div class="con_area">
			<div class="thumb">
              <a href="igc_007_ISO14001.php">
			    <h3>환경 인증</h3>
				<img src="../image/1000_bg.jpg" alt="환경 인증">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="igc_007_ISO14001.php"><span><div  class="arrow test_4"></div>ISO 14001</span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
				</ul>
			</div>
		</div>
  
  		<div class="con_area">
			<div class="thumb">
              <a href="igc_008_OHSAS18001.php">
			    <h3>안전보건 인증</h3>
				<img src="../image/2000_bg.jpg" alt="안전보건 인증">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">품질경영 - 1라인 우측</p------>
				<ul>
					<li><a href="igc_008_OHSAS18001.php"><span><div  class="arrow test_4"></div>OHSAS 18001</span></a></li>
					<li><a href="igc_008_ISO45001.php"><span><div  class="arrow test_4"></div>ISO 45001</span></a></li>
				</ul>
			</div>
		</div>

		<!-----2line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="igc_010_ISO13485.php">
			    <h3>보건 및 의료기기 인증</h3>
				<img src="../image/3000_bg.jpg" alt="보건 및 의료 기기">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 의료기기</p------>
				<ul>
					<li><a href="igc_010_ISO13485.php"><span><div  class="arrow test_4"></div>ISO 13485</span></a></li>
					<li><a href="igc_010_ISO15378.php"><span><div  class="arrow test_4"></div>ISO 15378</span></a></li>
					<li><a href="igc_010_ISO14155.php"><span><div  class="arrow test_4"></div>ISO 14155</span></a></li>
					<li><a href="#"><span><div  class=""></div><!-----MDSAP-----></span></a></li>
				</ul>
			</div>
		</div>

		<div class="con_area">
			<div class="thumb">
              <a href="igc_014_ISO22000.php">
			    <h3>식품 인증</h3>
				<img src="../image/4000_bg.jpg" alt="식품 인증">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">식품</p------>
				<ul>
					<li><a href="igc_014_ISO22000.php"><span><div  class="arrow test_4"></div>ISO 22000</span></a></li>
					<li><a href="igc_015_FSSC22000.php"><span><div  class="arrow test_4"></div>FSSC 22000</span></a></li>
					<li><a href="igc_016_FDA-FSMA.php"><span><div  class="arrow test_4"></div>FDA FSMA</span></a></li>
					<li><a href="igc_017_GlobalHACCP.php"><span><div  class="arrow test_4"></div>Global HACCP</span></a></li>
				</ul>
			</div>
		</div>

        <div class="con_area">
			<div class="thumb">
              <a href="igc_018_ISO50001.php">
			    <h3>에너지 경영인증</h3>
				<img src="../image/5000_bg.jpg" alt="에너지 경영 인증">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">에너지 경영</p------>
				<ul>
					<li><a href="igc_018_ISO50001.php"><span><div  class="arrow test_4"></div>ISO 50001</span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
				</ul>
			</div>
		</div>

        <!-----3line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="igc_019_ISO27001.php">
			    <h3>정보보안 인증</h3>
				<img src="../image/6000_bg.jpg" alt="정보 보안 인증">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="igc_019_ISO27001.php"><span><div  class="arrow test_4"></div>ISO/IEC 27001</span></a></li>
					<li><a href="igc_019_ISO27701.php"><span><div  class="arrow test_4"></div>ISO/IEC 27701</span></a></li>
					<li><a href="igc_020_ISO20000-1.php"><span><div  class="arrow test_4"></div>ISO/IEC 20000-1</span></a></li>
				</ul>
			</div>
		</div>
 
 		<div class="con_area">
			<div class="thumb">
              <a href="igc_021ISO37001.php">
			    <h3>부패방지 인증</h3>
				<img src="../image/7000_bg.jpg" alt="부패방지 인증">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">정보보안</p------>
				<ul>
					<li><a href="igc_021ISO37001.php"><span><div  class="arrow test_4"></div>ISO 37001</span></a></li>
					<li><a href="#"><span><div  class=""></div> </span></a></li>
					<li><a href="#"><span><div  class=""></div> </span></a></li>
				</ul>
			</div>
		</div>
		
 		<div class="con_area">
			<div class="thumb">
              <a href="igc_022_ISO21001.php">
			    <h3>교육 인증</h3>
				<img src="../image/8000_bg.jpg" alt="교육 인증">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="igc_022_ISO21001.php"><span><div  class="arrow test_4"></div>ISO 21001</span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
				</ul>
			</div>
		</div>

        <!-----4line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="igc_023_ISO22301.php">
			    <h3>사업연속성 인증</h3>
				<img src="../image/9000_bg.jpg" alt="사업연속성 인증">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">사업연속성 인증 - 1라인 우측</p------>
				<ul>
					<li><a href="igc_023_ISO22301.php"><span><div  class="arrow test_4"></div>ISO 22301</span></a></li>
					<li><a href="igc_025_ISO10004.php"><span><div></div></span></a></li>
				</ul>
			</div>
		</div>

		<div class="con_area">
			<div class="thumb">
              <a href="igc_024_ISO22716.php">
			    <h3>화장품 인증</h3>
				<img src="../image/10000_bg.jpg" alt="화장품 인증">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="igc_024_ISO22716.php"><span><div  class="arrow test_4"></div>ISO 22716</span></a></li>
					<li><a href="igc_025_ISO10004.php"><span><div></div></span></a></li>
				</ul>
			</div>
		</div>

		<div class="con_area">
			<div class="thumb">
              <a href="igc_025_ISO10002.php">
			    <h3>고객만족 인증</h3>
				<img src="../image/11000_bg.jpg" alt="고객만족 인증">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="igc_025_ISO10002.php"><span><div  class="arrow test_4"></div>ISO 10002</span></a></li>
					<li><a href="igc_025_ISO10004.php"><span><div  class="arrow test_4"></div>ISO 10004</span></a></li>
				</ul>
			</div>
		</div>

        <!-----5line 시작------------>
 		<div class="con_area">
			<div class="thumb">
              <a href="igc_026_SA8000.php">
			    <h3>사회적 책임 인증</h3>
				<img src="../image/SA8000.jpg" alt="사회적 책임 인증 교육">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="igc_026_SA8000.php"><span><div  class="arrow test_4"></div>SA8000</span></a></li>
				</ul>
			</div>
		</div>
	</section>
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	   <section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
          <ul>
          	<li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
          	<li><p><em><strong>02</strong></em><span>환경 인증</span></p></li>
          	<li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
          	<li><p><em><strong>04</strong></em><span>보건&의료기기 인증</span></p></li>
          	<li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
          	<li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
          	<li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
          	<li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
          	<li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
          	<li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
          	<li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
          	<li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
          	<li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
          </ul>
		</div>
       </section>
       <!---------(주)아이지씨인증원 사업영역 종료 ------>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>