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


	.business_type4 {width:100%; max-width:1200px;  margin:0 auto;}
	.business_type4:after{ content:""; display:block; clear:both;}
	.business_type4 .business_info { position:relative; width:100%; height:400px; margin:150px auto; background:none;}
	.business_type4 .business_info:after{ content:""; display:block; clear:both;}
	.business_type4 .business_info:first-child {margin-top:0px;}
	.business_type4 .business_info .img_left { position:absolute; left:0; top:0; width:650px; height:400px; background:blue; }
	.business_type4 .business_info .img_left img{ width:100%; height:100%;}
	.business_type4 .business_info .img_right { position:absolute; right:0; top:0; width:650px; height:400px; background:blue; }
	.business_type4 .business_info .img_right img{ width:100%; height:100%;}
	.business_type4 .business_info .con_box { position: absolute; right:0; top:25%; width:55%; height:350px; background:rgba(255,255,255,1); box-shadow:10px 10px 5px rgba(0,0,0,0.04); }
	.business_type4 .business_info .con_box .txt_area {padding:10%; }
	.business_type4 .business_info .con_box .txt_area:before { display: block; content: ''; position: absolute; left: -80px; top:23%;  width:20%; height:1px; background:#000;}
	.business_type4 .business_info .con_box .txt_area em { position:relative; display:block; vertical-align:middle; color:#ddd;  font-size:3em;}
	.business_type4 .business_info .con_box .txt_area strong {display:block; color:#333;  font-size:1.5em; font-weight: 600;  line-height:1.5em; margin:30px 0 20px 0;}
	.business_type4 .business_info .con_box .txt_area p.box_txt {display:block; color:#555; font-size:1em;  font-weight: 300;  line-height:1.5em; text-align:justify;  }
	.business_type4 .business_info .type_other { position: absolute; left: 0; top:25%; width:55%; height:350px; background:rgba(255,255,255,1);  box-shadow:10px 10px 5px rgba(0,0,0,0.04); }
	.business_type4 .business_info .type_other .txt_area:before {display:none;}
	.business_type4 .business_info .type_other .txt_area:after { display: block; content: ''; position: absolute; right:-80px; top:23%; width:20%; height:1px; background:#000; }


	@media screen and (max-width:992px){
		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

	}

	@media screen and (max-width:768px){

		.business_type4 .business_info { height:auto; margin:50px auto;}
		.business_type4 .business_info .img_left { position:relative; width:100%; height:auto;  background:#000; }
		.business_type4 .business_info .img_left img{ height:auto;}
		.business_type4 .business_info .img_right { position:relative; width:100%; height:auto;  background:#000; }
		.business_type4 .business_info .img_right img{ height:auto;}
		.business_type4 .business_info .con_box { position:relative; width:90%; left:50%; top:-50px; margin-left:-45%; height:auto; }
		.business_type4 .business_info .con_box .txt_area:before { display: none;}
		.business_type4 .business_info .type_other .txt_area:after {display:none;}
		.business_type4 .business_info .con_box .txt_area{padding:15px;}
		.business_type4 .business_info .con_box .txt_area strong{font-size:1.2em;}

	}

</style>




<div class="content_wrap">
	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">OUR</span> BUSINESS</h1>
		<h2 class="sub_txt">DNA TECHNOLOGIES PACIFIC의 다양한 사업영역를 소개합니다.</h2>
	</section>


	<section class="business_type4">

		<div class="business_info">
			<div class="img_left"><img src="../image/business_img6.jpg"></div>
			<div class="con_box">
				<div class="txt_area">
					<em>01</em>
					<strong>타이틀이 들어갈 자리입니다.</strong>
					<p class="box_txt">
						간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다.
					</p>
				</div>
			</div>
		</div>

		<div class="business_info">
			<div class="img_right"><img src="../image/business_img6.jpg"></div>
			<div class="con_box type_other">
				<div class="txt_area">
					<em>02</em>
					<strong>타이틀이 들어갈 자리입니다.</strong>
					<p class="box_txt">
						간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다.
					</p>
				</div>
			</div>
		</div>

		<div class="business_info">
			<div class="img_left"><img src="../image/business_img6.jpg"></div>
			<div class="con_box">
				<div class="txt_area">
					<em>03</em>
					<strong>타이틀이 들어갈 자리입니다.</strong>
					<p class="box_txt">
						간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다.
					</p>
				</div>
			</div>
		</div>

		<div class="business_info">
			<div class="img_right"><img src="../image/business_img6.jpg"></div>
			<div class="con_box type_other">
				<div class="txt_area">
					<em>04</em>
					<strong>타이틀이 들어갈 자리입니다.</strong>
					<p class="box_txt">
						간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다.
					</p>
				</div>
			</div>
		</div>



	</section>


	
</div>




<?php
	include "../include/tail.php"; 
?>