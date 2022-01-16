<?php
	include_once('./_common.php');
$g5['title'] = 'Vegan Certification';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:1rem; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
    
	body{padding-top:0px; padding-bottom:50px;}
    
	ul,ol,li{margin:0;padding:0;list-style:none;}	
</style>


<?php
	/*
		CSS파일 로드(25~26라인)
		(주)아이지씨인증원에 사용하신다면 적용하지 않아도 됩니다.
		(주)아이지씨인증원가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
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
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

     /* Vegan 인증 |  비건 사회(Vegan Soecity) 시작 */
	.business_type3{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type3:after{content:""; display:block; clear:both;}
	.business_type3 .business_info{ width:100%; }
	.business_type3 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type3 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type3 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_vegan1_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_vegan1_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_vegan1_011.jpg') no-repeat center top; }
    
	.business_type3 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
    
    /* Vegan 인증 |  식품 영국 비건 제품인증 시작 */
	.business_type4{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type4:after{content:""; display:block; clear:both;}
	.business_type4 .business_info{ width:100%; }
	.business_type4 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type4 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type4 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type4 .business_info .backImg:nth-child(1){background:url('images/product_vegan_certification_01.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(2){background:url('images/product_vegan1_01_01.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(3){background:url('images/product_vegan_certification_02.jpg') no-repeat center top; }
    .business_type4 .business_info .backImg:nth-child(4){background:url('images/product_vegan_certification_03.jpg') no-repeat center top; }

	.business_type4 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type4 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type4 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type4 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
    
     /* 비건 제품 인증 | 화장품 시작 */
	.business_type5{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type5:after{content:""; display:block; clear:both;}
	.business_type5 .business_info{ width:100%; }
	.business_type5 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type5 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type5 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type5 .business_info .backImg:nth-child(1){background:url('images/product_vegan_cosmetic_01.jpg') no-repeat center top; }
	.business_type5 .business_info .backImg:nth-child(2){background:url('images/product_vegan_cosmetic_02.jpg') no-repeat center top; }
	.business_type5 .business_info .backImg:nth-child(3){background:url('images/product_vegan_cosmetic_03.jpg') no-repeat center top; }
	.business_type5 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
    
	.business_type5 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type5 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type5 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
    
    /* Vegan 인증 |  식품 영국 비건 제품인증 시작 */
	.business_type6{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type6:after{content:""; display:block; clear:both;}
	.business_type6 .business_info{ width:100%; }
	.business_type6 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type6 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type6 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type6 .business_info .backImg:nth-child(1){background:url('images/product_vegan_certification_01.jpg') no-repeat center top; }
	.business_type6 .business_info .backImg:nth-child(2){background:url('images/product_vegan1_01_01.jpg') no-repeat center top; }
	.business_type6 .business_info .backImg:nth-child(3){background:url('images/product_vegan_certification_02.jpg') no-repeat center top; }
    .business_type6 .business_info .backImg:nth-child(4){background:url('images/product_vegan_certification_03.jpg') no-repeat center top; }

	.business_type6 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type6 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type6 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type6 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
    
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
		.business_type3 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type3 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
	}

	@media screen and (max-width:480px){

		.business_type3 .business_info .backImg {width:100%;}
		.business_type3 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type3 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃  사업영역 설정  */

	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>


<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
   
    <!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 시작 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;position:relative;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">Vegan Society Introduction</a></li>
			<li><a href="javascript:;">Food</a></li>
			<li><a href="javascript:;">Cosmetic</a></li>
			<li class="on"><a href="javascript:;">Restaurant</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 종료  +++-->
  
<!-----내용구분 선 2개 ------>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:5px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

  <!--+++ 20.05.01 탭컨텐츠 영역 시작 +++-->
  <div class="tab_con">
    <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
  <article>	
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">Vegan Society(UK) </span> <br> Introduction to Vegan Product Certification</h1>
		<h2 class="sub_txt"></h2>
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            The Vegan Society is a non-profit organization founded in November 1944 by its founder Donald Watson and 6 founding members. It is the organization that invented the new vegetarian concept and created the word ‘vegan’, and is the oldest vegan organization in the world. The Vegan Society created the word ‘vegan’ in 1944.<br><br>
            As the world’s oldest and most original vegan organization, the Vegan Society founded an international vegan trademark in 1990 to improve product labeling. They have been registering our products around the world for 29 years and the vegan trademark can be found on over 35,000 products worldwide.<br>
            </span>
	</div>

	<div class="business_type3">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">Vegan Trademark</p>
					<ul style="display:block;text-align:justify;">
                       In 1990, the Vegan Society established International Vegan Trademark to improve the labeling of vegan products. It is known as the most trusted international vegan mark because it allows trademarks on products that have passed strict standards and meticulous auditing. For 29 years, the Vegan Society have registered products around the world and you can find the vegan trademark on over 35,000 products worldwide.  
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">Product Registration Standards</p>
					
					<ul style="display:block;text-align:justify;">
                        <span style="font-weight:bold;"> &#10050; Animal ingredients </span> <br>
                                       &nbsp; &nbsp; &nbsp; The manufacture and/or development of the product, and where applicable its ingredients, must not involve, or have involved, the use of any animal product, by-product or derivative.<br><br>
                        <span style="font-weight:bold;"> &#10050; Animal testing </span> <br>
                                       &nbsp; &nbsp; &nbsp; The development and/or manufacture of the product, and where applicable its ingredients, must not involve, or have involved, testing of any sort on animals conducted at the initiative of the company or on its behalf, or by parties over whom the company has effective control.<br><br> 
                        <span style="font-weight:bold;"> &#10050; Cross-contamination </span> <br>
                                       &nbsp; &nbsp; &nbsp; Potential cross-contamination of animal-derived ingredients should be avoided as much as possible. Vegan production lines require thorough cleaning of minimal surfaces and equipment prior to use. Recognizing the risk of cross-contamination by non-vegan raw materials in the production space, and taking all reasonable and practical steps to eliminate it. If you are producing vegan and non-vegan in the same space, it is strongly recommended to start with the non-vegan line.<br><br>
                        <span style="font-weight:bold;"> &#10050; Genetically Modified Organisms (GMO’s) </span><br>
                                       &nbsp; &nbsp; &nbsp;The development and/or production of genetically modified organisms (GMO) must not have involved animal genes or animal-derived substances. Products put forward for registration which contain or may contain any GMOs must be labelled as such.<br><br>
                                       <span style="font-weight:bold;color:#0099cc;">Animal refers to the entire animal kingdom, that is all vertebrates and all multicellular invertebrates.</span>

					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">Benefits of choosing Vegan Trademark</p>
					<ul style="display:block;text-align:justify;">
                    1. The oldest and most trusted vegan organization.<br><br>
                    2. We have a professional team for evaluation of vegan product registration.<br><br>
                    3. Vegan Trademark is easier to identify internationally by consumers.<br><br>
                    4. Vegan Trademark logo assures consumers that a product meets their ethical standards.<br><br>
                    5. Upon registration, customers can receive benefits such as using logos on packaging, marketing materials, and online.<br><br>
                    6. Product updates and additions are included in the fee and there is no additional charge during the registration period.<br><br>
                    7. Customers can provide samples to exhibits attended by The Vegan Society.<br><br>
                    8. Currently more than 35,000 products are registered in the trademark.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:10px;margin-top:2px;width:100%;">
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>Related Services from IGC</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>Sysyem certification</span></p></li>
				<li><p><em><strong>02</strong></em><span>Product certification-Foods (Vegan certification, HALAL certification, Eurasian certification, Hygiene registration, FDA registration/approval)</span></p></li>
				<li><p><em><strong>03</strong></em><span>Product certification-Cosmetics (Vegan certification, Eurasian certification, VCRP, EWG, CPNP)</span></p></li>
				<li><p><em><strong>04</strong></em><span>Product testing</span></p></li>
				<li><p><em><strong>05</strong></em><span>Audit qualification certification</span></p></li>
				<li><p><em><strong>06</strong></em><span>Training for professional human resources</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>
   </article>
   <!--+++++ 컨텐츠 01 Vegan 제품인증 / Vegan Society  종료+++++-->  

 
   <!--+++++ 컨텐츠 02 Vegan 제품인증 / 식품  시작+++++-->
   <article>
       <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">Foods</span> <br> Introduction to Vegan Product Certification</h1>
		<h2 class="sub_txt">
            <span style="display:block;text-align:left;color:#009966;">
                 The Vegan Society (British Vegan Association)<br><br>
            </span>
        </h2>
                 <ul style="display:block;text-align:justify;">
                    The Vegan Society is a non-profit organization founded in November 1944. As the world's oldest original vegan organization, more than 70 years later, it is still more active than any other vegan organization in the world, spreading the concept and necessity of veganism.<br><br>
                    ❁It is a unique vegan organization with the longest history and experience.<br><br>
                    ❁It has a global authority to lead a new trend by inventing the new word 'Vegan'.<br><br>
                    ❁We strictly comply with the standards for applying the mark to individual products, and carefully review that there is no possibility of containing any animal ingredients, including ingredients that are no longer present in the finished product.<br><br>
                    ❁Vegan Trademark is an international mark that can be easily identified by consumers around the world.<br><br>
                    ❁Vegan Trademark Logo convinces consumers that their products meet ethical standards.<br><br>
                    ❁Various promotional effects can be obtained by using the mark on all promotional materials related to the product during the license period.<br><br>
                    ❁Over 35,000 products worldwide are registered with Vegan Trademark.<br><br>
                    ❁There is no on-site due diligence on manufacturing lines or facilities, and only 100% document review is conducted.<br><br>
                </ul>
	  </div>

	  <div class="business_type4">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">The importance of vegan certification</p>
					<ul style="display:block;text-align:justify;">
                       Vegan certification is a certification given as a standard for not using or using animal-derived raw materials, managing cross-contamination, and not conducting animal tests on products. Vegan Trademark has gone through a rigorous certification process, saving consumers the hassle of checking the detailed raw materials, and making it easier to select vegan products. Producers who manufacture products can also help increase profits by confidently promoting the vegan products they manufacture and rethinking the reliability of their products.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg" style="width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;">
				<div class="txt_area">
					<p class="tit">Vegan Trademark Registration Standards</p>
					<ul style="display:block;text-align:justify;">
                       <span style="font-weight:bold;color:#ff9933;">   &#10070; Animal Ingredients</span><br>
                       The manufacture and/or development of the product, and where applicable its ingredients, must not involve, or have involved, the use of any animal product, by-product or derivative.<br><br>
                       
                       <span style="font-weight:bold;color:#ff9933;">   &#10070; Animal Testing</span><br>
                       The development and/or manufacture of the product, and where applicable its ingredients, must not involve, or have involved, testing of any sort on animals conducted at the initiative of the company or on its behalf, or by parties over whom the company has effective control.<br><br>
                       
                       <span style="font-weight:bold;color:#ff9933;">   &#10070; Genetically Modified Organisms (GMO)</span><br>
                       The development and/or production of genetically modified organisms (GMO) must not have involved animal genes or animal-derived substances. Products put forward for registration which contain or may contain any GMOs must be labelled as such.<br><br>
                       
                       <span style="font-weight:bold;color:#ff9933;">   &#10070; Cross Contamination with Non-vegan</span><br> 
                       Potential cross-contamination of animal-derived ingredients should be avoided as much as possible. Vegan production lines require thorough cleaning of minimal surfaces and equipment prior to use. Recognizing the risk of cross-contamination by non-vegan raw materials in the production space, and taking all reasonable and practical steps to eliminate it. If you are producing vegan and non-vegan in the same space, it is strongly recommended to start with the non-vegan line.<br><br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">Vegan Trademark Registration Procedure</p>
					<ul style="display:block;text-align:justify;">
                        <span style="font-weight:bold;color:#009966;">&#8284;  Process </span><br>
                        Consultation ➜ Providing quotation ➜ Application acceptance ➜ Payment in full ➜ Document review ➜ Contact signing ➜ Certificate issuance ➜ Product registration ➜ Mark application ➜ Complete
                        &#8227; Estimated time required: average 6 months<br><br>
                        
                        <span style="font-weight:bold;color:#009966;">&#8284; License terms</span><br>
                         The license for Vegan Trademark can be selected from 12 months or 24 months, and renewal is checked 1 to 2 months before the expiration date in the UK. If there are no changes to the product at the time of renewal (product name/design change/all ingredients change/product discontinuation, etc.), you can pay the same amount as the existing license fee and extend the period through renewal.<br><br>
                         
                        <span style="font-weight:bold;color:#009966;">&#8284; Period</span><br>
                         fter receiving the application, it takes about 3-6 months to complete the registration. The time required may vary slightly depending on various factors such as the type of product and all ingredients, document handling speed, cost handling, and communication efficiency.<br><br>
                         
                        <span style="font-weight:bold;color:#009966;">&#8284; Cost</span><br>
                         License cost is calculated flexibly in consideration of the company's annual sales, number of product registrations, and product types. If, during the vegan status of the product, it is determined that the product is unsuitable for vegan registration and cannot be registered, 50% of the payment will be refunded.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">IGC’s Competency</p>
					<ul style="display:block;text-align:justify;">
                    ✥ IGC is working with The Vegan Society to conduct vegan certification.<br><br>
                    ✥ Even vegan foods may use animal-derived ingredients that are unknown to the manufacturer during the production of food additives or ingredients.
                    ✥ IGC is contributing to the continuous development of customers by accurately evaluating the suitability of vegan certification through the technology and expertise accumulated over the years.<br><br>
                    ✥ As a broad range of food-related certification providers, IGC leverages its vast network of highly skilled and knowledgeable auditors to provide the best certification services.<br><br>
                    ✥ IGC is a leading food-related certification body, providing fast and accurate vegan certification process.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>

	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>Related Services from IGC</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>Sysyem certification</span></p></li>
				<li><p><em><strong>02</strong></em><span>Product certification-Foods (Vegan certification, HALAL certification, Eurasian certification, Hygiene registration, FDA registration/approval)</span></p></li>
				<li><p><em><strong>03</strong></em><span>Product certification-Cosmetics (Vegan certification, Eurasian certification, VCRP, EWG, CPNP)</span></p></li>
				<li><p><em><strong>04</strong></em><span>Product testing</span></p></li>
				<li><p><em><strong>05</strong></em><span>Audit qualification certification</span></p></li>
				<li><p><em><strong>06</strong></em><span>Training for professional human resources</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>

   </article>
   <!--+++++ 컨텐츠 02 Vegan인증 / 식품  종료+++++-->  


   <!--+++++ 컨텐츠 03 Vegan 제품인증 / 화장품  시작+++++-->
   <article>
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">Cosmetics</span> <br> Introduction to Vegan Product Certification </h1>
		<h2 class="sub_txt"></h2>
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
                Vegan certification is a certification given as a standard for not using or using animal-derived raw materials, managing cross-contamination, and not conducting animal tests on products. Vegan Trademark has gone through a rigorous certification process, saving consumers the hassle of checking the detailed raw materials, and making it easier to select vegan products. Producers who manufacture products can also help increase profits by confidently promoting the vegan products they manufacture and rethinking the reliability of their products.<br>
                </span>
                <br>
                
                <ul style="display:block;text-align:justify;">
                a) It is a unique vegan organization with the longest history and experience.<br><br>
                b) It has a global authority to lead a new trend by inventing the new word 'Vegan'.<br><br>
                c) We strictly comply with the standards for applying the mark to individual products, and carefully review that there is no possibility of containing any animal ingredients, including ingredients that are no longer present in the finished product.<br><br>
                d) Vegan Trademark is an international mark that can be easily identified by consumers around the world.<br><br>
                e) Vegan Trademark Logo convinces consumers that their products meet ethical standards.<br><br>
                f) Various promotional effects can be obtained by using the mark on all promotional materials related to the product during the license period.<br><br>
                g) Over 35,000 products worldwide are registered with Vegan Trademark.<br><br>
                h) There is no on-site due diligence on manufacturing lines or facilities, and only 100% document review is conducted.<br><br>
                </ul>
	  </div>

	  <div class="business_type5">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">The importance of vegan certification</p>
					<ul style="display:block;text-align:justify;">
						Vegan certification is a certification given as a standard for not using or using animal-derived raw materials, managing cross-contamination, and not conducting animal tests on products. Vegan Trademark has gone through a rigorous certification process, saving consumers the hassle of checking the detailed raw materials, and making it easier to select vegan products. <br><br>
						
						Producers who manufacture products can also help increase profits by confidently promoting the vegan products they manufacture and rethinking the reliability of their products.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">Vegan Trademark Registration Standards</p>
					<ul style="display:block;text-align:justify;">
                        <span style="font-weight:bold;color:#669900;">&#10049; </span><span style="font-weight:bold;color:#ff9933;">Animal Ingredients</span><br> 
                        The manufacture and/or development of the product, and where applicable its ingredients, must not involve, or have involved, the use of any animal product, by-product or derivative.<br><br>
                        
                        <span style="font-weight:bold;color:#669900;">&#10049; </span><span style="font-weight:bold;color:#ff9933;">Animal Testing</span><br>
                        The development and/or manufacture of the product, and where applicable its ingredients, must not involve, or have involved, testing of any sort on animals conducted at the initiative of the company or on its behalf, or by parties over whom the company has effective control.<br><br>
                        
                        <span style="font-weight:bold;color:#669900;">&#10049; </span><span style="font-weight:bold;color:#ff9933;">Genetically Modified Organisms (GMO) </span><br>
                        The development and/or production of genetically modified organisms (GMO) must not have involved animal genes or animal-derived substances. Products put forward for registration which contain or may contain any GMOs must be labelled as such.<br><br>
                        
                        <span style="font-weight:bold;color:#669900;">&#10049; </span><span style="font-weight:bold;color:#ff9933;">Cross Contamination with Non-vegan</span><br>
                        Potential cross-contamination of animal-derived ingredients should be avoided as much as possible. Vegan production lines require thorough cleaning of minimal surfaces and equipment prior to use. Recognizing the risk of cross-contamination by non-vegan raw materials in the production space, and taking all reasonable and practical steps to eliminate it. If you are producing vegan and non-vegan in the same space, it is strongly recommended to start with the non-vegan line.<br><br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">Vegan Trademark Registration Procedure</p>
					<ul style="display:block;text-align:justify;">
                        <span style="font-weight:bold;color:#ff9933">&#10049; Vegan certification process</span><br>
                        <span style="line-height:2.5em;">
                            1. Reception<br>
                            2. Confirmation of document review items<br>
                               &nbsp; &nbsp; a) Submit the documents for the product to be certified. (Application, agreement, OEM contract, etc.)<br>
                               &nbsp; &nbsp; b) Request for application review and supplement<br>
                            3. Payment of fees<br>
                            4. Raw material review document audit (animal genetic test)<br>
                            5. Request for supplementation according to the determination of conformity / supplement / cancellation<br>
                            6. Conduct animal DNA test<br>
                            7. Final examination after confirmation that the animal gene was not detected<br>
                            8. Issuance of vegan certification<br>
                        </span>
                        *The official audit processing deadline is 30 days.<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>Related Services from IGC</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>Sysyem certification</span></p></li>
				<li><p><em><strong>02</strong></em><span>Product certification-Foods (Vegan certification, HALAL certification, Eurasian certification, Hygiene registration, FDA registration/approval)</span></p></li>
				<li><p><em><strong>03</strong></em><span>Product certification-Cosmetics (Vegan certification, Eurasian certification, VCRP, EWG, CPNP)</span></p></li>
				<li><p><em><strong>04</strong></em><span>Product testing</span></p></li>
				<li><p><em><strong>05</strong></em><span>Audit qualification certification</span></p></li>
				<li><p><em><strong>06</strong></em><span>Training for professional human resources</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>
   </article>
   <!--+++++ 컨텐츠 03 Vegan 제품인증 / 화장품  종료+++++-->  
    
    
   <!--+++++ 컨텐츠 04 Vegan 제품인증 / Restaurant  시작+++++-->
   <article style="display:block;">
       <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">Restaurant</span> <br> Introduction to Vegan Product Certification</h1>
		<h2 class="sub_txt">
            <span style="display:block;text-align:left;color:#009966;">
                The Vegan Society (British Vegan Association)<br><br>
            </span>
        </h2>
                 <ul style="display:block;text-align:justify;">
                   The Vegan Society is a non-profit organization founded in November 1944. As the world's oldest original vegan organization, more than 70 years later, it is still more active than any other vegan organization in the world, spreading the concept and necessity of veganism.<br><br>
                   ❁ It is a unique vegan organization with the longest history and experience.<br><br>
                   ❁ It has a global authority to lead a new trend by inventing the new word 'Vegan'.<br><br>
                   ❁ We strictly comply with the standards for applying the mark to individual products, and carefully review that there is no possibility of containing any animal ingredients, including ingredients that are no longer present in the finished product.<br><br>
                   ❁ Vegan Trademark is an international mark that can be easily identified by consumers around the world.<br><br>
                   ❁ Vegan Trademark Logo convinces consumers that their products meet ethical standards.<br><br>
                   ❁ Various promotional effects can be obtained by using the mark on all promotional materials related to the product during the license period.<br><br>
                   ❁ Over 35,000 products worldwide are registered with Vegan Trademark.<br><br>
                   ❁ There is no on-site due diligence on manufacturing lines or facilities, and only 100% document review is conducted.<br><br>
                </ul>
	   </div>

	   <div class="business_type6">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">The importance of vegan certification</p>
					<ul style="display:block;text-align:justify;">
                       Vegan certification is a certification given as a standard for not using or using animal-derived raw materials, managing cross-contamination, and not conducting animal tests on products. Vegan Trademark has gone through a rigorous certification process, saving consumers the hassle of checking the detailed raw materials, and making it easier to select vegan products. <br><br>
                       
                       Producers who manufacture products can also help increase profits by confidently promoting the vegan products they manufacture and rethinking the reliability of their products.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg" style="width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;">
				<div class="txt_area">
					<p class="tit">Vegan Trademark Registration Standards</p>
					<ul style="display:block;text-align:justify;">
                       <span style="font-weight:bold;color:#ff9933;">   &#10070; Animal Ingredients</span><br>
                           The manufacture and/or development of the product, and where applicable its ingredients, must not involve, or have involved, the use of any animal product, by-product or derivative.<br><br>
                       
                       <span style="font-weight:bold;color:#ff9933;">   &#10070; Animal Testing</span><br>
                           The development and/or manufacture of the product, and where applicable its ingredients, must not involve, or have involved, testing of any sort on animals conducted at the initiative of the company or on its behalf, or by parties over whom the company has effective control.<br><br>
                       
                       <span style="font-weight:bold;color:#ff9933;">   &#10070; Genetically Modified Organisms (GMO)</span><br>
                           The development and/or production of genetically modified organisms (GMO) must not have involved animal genes or animal-derived substances. Products put forward for registration which contain or may contain any GMOs must be labelled as such.<br><br>
                       
                       <span style="font-weight:bold;color:#ff9933;">   &#10070; Cross Contamination with Non-vegan (논비건과의 교차오염)</span><br> 
                       Potential cross-contamination of animal-derived ingredients should be avoided as much as possible. Vegan production lines require thorough cleaning of minimal surfaces and equipment prior to use. Recognizing the risk of cross-contamination by non-vegan raw materials in the production space, and taking all reasonable and practical steps to eliminate it. If you are producing vegan and non-vegan in the same space, it is strongly recommended to start with the non-vegan line.<br><br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">Vegan Trademark Registration Procedure</p>
					<ul style="display:block;text-align:justify;">
                        <span style="font-weight:bold;color:#009966;">&#8284; Process </span><br>
                        Consultation ➜ Providing quotation ➜ Application acceptance ➜ Payment in full ➜ Document review ➜ Contact signing ➜ Certificate issuance ➜ Product registration ➜ Mark application ➜ Complete<br>
                        &#8227; Estimated time required: average 6 months<br><br>
                        
                        <span style="font-weight:bold;color:#009966;">&#8284; License terms</span><br>
                         The license for Vegan Trademark can be selected from 12 months or 24 months, and renewal is checked 1 to 2 months before the expiration date in the UK. If there are no changes to the product at the time of renewal (product name/design change/all ingredients change/product discontinuation, etc.), you can pay the same amount as the existing license fee and extend the period through renewal.<br><br>
                         
                        <span style="font-weight:bold;color:#009966;">&#8284; Period</span><br>
                        After receiving the application, it takes about 3-6 months to complete the registration. The time required may vary slightly depending on various factors such as the type of product and all ingredients, document handling speed, cost handling, and communication efficiency.<br><br>
                         
                        <span style="font-weight:bold;color:#009966;">&#8284; Cost</span><br>
                         License cost is calculated flexibly in consideration of the company's annual sales, number of product registrations, and product types. If, during the vegan status of the product, it is determined that the product is unsuitable for vegan registration and cannot be registered, 50% of the payment will be refunded.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">IGC’s Competency</p>
					<ul style="display:block;text-align:justify;">
                        <span style="font-weight:bold;color:#ff9933;"> &#10021; </span> IGC is working with The Vegan Society to conduct vegan certification.<br><br>
                        <span style="font-weight:bold;color:#ff9933;"> &#10021; </span> Even vegan foods may use animal-derived ingredients that are unknown to the manufacturer during the production of food additives or ingredients.<br><br> 
                        <span style="font-weight:bold;color:#ff9933;"> &#10021; </span> IGC is contributing to the continuous development of customers by accurately evaluating the suitability of vegan certification through the technology and expertise accumulated over the years.<br><br> 
                        <span style="font-weight:bold;color:#ff9933;"> &#10021; </span> As a broad range of food-related certification providers, IGC leverages its vast network of highly skilled and knowledgeable auditors to provide the best certification services.<br><br> 
                        <span style="font-weight:bold;color:#ff9933;"> &#10021; </span> IGC is a leading food-related certification body, providing fast and accurate vegan certification process.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:10px;margin-top:2px;width:100%;">
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>Related Services from IGC</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>Sysyem certification</span></p></li>
				<li><p><em><strong>02</strong></em><span>Product certification-Foods (Vegan certification, HALAL certification, Eurasian certification, Hygiene registration, FDA registration/approval)</span></p></li>
				<li><p><em><strong>03</strong></em><span>Product certification-Cosmetics (Vegan certification, Eurasian certification, VCRP, EWG, CPNP)</span></p></li>
				<li><p><em><strong>04</strong></em><span>Product testing</span></p></li>
				<li><p><em><strong>05</strong></em><span>Audit qualification certification</span></p></li>
				<li><p><em><strong>06</strong></em><span>Training for professional human resources</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>
   </article>
   <!--+++++ 컨텐츠 04 Vegan 제품인증 / Restaurant  종료+++++-->  

 </div><!------div class="tab_con" 종료 --------->

</div> <!--------// div class="content_wrap"  종료  ------------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>