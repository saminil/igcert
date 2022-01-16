<?php
	include_once('./_common.php');
$g5['title'] = '제품인증 서비스';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<?php 
	/*	
		기본 css(11~15라인)
		기본 css 는 적용하지 않습니다. 
	*/ 
?>
<!-------style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:50px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
</style----->


<?php
	/*
		CSS파일 로드(25~26라인)
		구매하신 (주)아이지씨인증원에 사용하신다면 적용하지 않아도 됩니다.
		(주)아이지씨인증원가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
	*/
?>
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<!----link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet"---->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



<?php
	/*
		주의사항 
		그누보드 관리자모드 내용관리등 에디터로 내용을 등록하실 경우, 보안문제로 자바스크립트와 css가 필터될 수 있습니다.
		이럴 경우 공통 css 파일에 아래 style을 별도 추가하고, 내용관리 에디터의 HTML 모드로 태그를 넣으시면 됩니다.(에디터마다 HTML 모드 버튼이 있으니 HTML 모드로 넣어주세요.)
		javascript 를 사용한다면 공통하단 파일 </body> 위에 코드를 복사하여 추가 합니다.	
	
	*/
?>
<style>
	/* 그누보드 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }


	.business_type3{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type3:after{content:""; display:block; clear:both;}
	.business_type3 .business_info{ width:100%; }
	.business_type3 .business_info .backImg{width:580px; margin-top:0; float:none; margin-left:40px; padding-top:250px;}
	.business_type3 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type3 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_ce-mdd_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_ce-mdd_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_ce-mdd_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_ce-mdd_04.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('../image/business_img5.jpg') no-repeat center top;}
    
	.business_type3 .business_info .backImg .txt_area{width:90%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
    
    
    
	.business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
    
    
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
		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		.business_type3 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type3 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
	}

	@media screen and (max-width:480px){

		.business_type3 .business_info .backImg {width:100%;}
		.business_type3 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type3 .business_info .backImg .txt_area{ height:auto; padding:15px;}


	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>


<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">CE/MDD</span> / 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span  style="margin:0 auto;display:inline-block;text-align:justify;">기 지침은 유럽 연합 내에서 의료기기에 관한 법률을 조화하기 위한 것입니다. 법적으로 유럽 시장에 의료기기들을 판매하기 위해서는 제조자들은 MD지침(Medical Device Directive)의 요구 사항을 준수해야 합니다. 신청자의 제품 및 품질 시스템을 평가해야 하며 제조자는 제품들을 판매 하기전에 CE 마크를 부착해야 합니다.</span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">적용 품목</p>
					<ul>
					
						<li>의료기기 지침은 '의료기기'의 정의에 따르는 장치에 적용 가능합니다. 의료기기란 제조자의 의도대로 인간에게 사용되는 목적을 가진 소프트웨어를 포함하는 단독 또는 조합으로 사용되는 기계, 장치, 기기, 재료 또는 기타 물품입니다.</li>
						<li> 진단, 예방, 감시, 치료 또는 질병의 경감, 진단, 감시, 치료, 상해 또는 장애에 대한 완화 또는 보상, 조사, 교체 또는 해부학적 또는 생리학적 과정의 수정, 개념의 제어, 약리적, 면역적 또는 신진대사적 수단에 의해 인체 내에 또는 인체상에 의도한 주요 작용을 달성하지는 않지만 그런 수단에 의해 그 기능을 도와줄 수 있는 것을 말합니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
					</ul>
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">PC+모바일 반응형 디자인</p>
					<ul>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
					</ul>
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">홈페이지에 꼭 필요한 기본 디자인 6종</p>
					<ul>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
					</ul>
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">부트스트랩이 아닌 CSS기반 반응형</p>
					<ul>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
					</ul>
				</div>
			</div>
			
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">부트스트랩이 아닌 CSS기반 반응형5</p>
					<ul>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
					</ul>
				</div>
			</div>
			
		</div>  <!--------//  div class="business_info" 종료  --------------->
		
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

	
</div> <!--------// div class="content_wrap"  종료  ------------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>

<!-----?php
	include "../include/tail.php"; 
?----->