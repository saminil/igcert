<?php
	include "../include/header.php"; 
?>
<style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:50px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<style>
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }


	.business_type3{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type3:after{content:""; display:block; clear:both;}
	.business_type3 .business_info{ width:100%; }
	.business_type3 .business_info .backImg{width:580px; margin-top:0; float:left; margin-left:40px; padding-top:200px;}
	.business_type3 .business_info .backImg:nth-child(2n-1){margin-left:0}
	.business_type3 .business_info .backImg:nth-child(1){background:url('../image/business_img5.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('../image/business_img5.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('../image/business_img5.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('../image/business_img5.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg .txt_area{width:90%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:280px; background:#fff; }
	.business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }

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


</style>

<div class="content_wrap">
	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">OUR</span> BUSINESS</h1>
		<h2 class="sub_txt">DNA TECHNOLOGIES PACIFIC의 다양한 사업영역를 소개합니다.</h2>
	</section>

	<section class="business_type3">
		
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">심플하지만 다 갖춘 인덱스</p>
					<ul>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
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
		</div>




	</section>

	
</div>




<?php
	include "../include/tail.php"; 
?>