<?php
	include_once('./_common.php');
$g5['title'] = '할랄 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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


	.business_type3{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type3:after{content:""; display:block; clear:both;}
	.business_type3 .business_info{ width:100%; }
	.business_type3 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type3 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type3 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_HALAL_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_HALAL_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_HALAL_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_HALAL_04.jpg') no-repeat center top; }
    
	.business_type3 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
    
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
	.partner_type2 .con_box ul li {float:none; width:100%; list-style:none; margin:10px 0; }
	.partner_type2 .con_box ul li p{display:table; width:100%; }
	.partner_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.partner_type2 .con_box ul li p > em{ width:30px; }
	.partner_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.partner_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}
    /* (주)아이지씨인증원 사업영역 종료  */
    
    /* 차트/할랄인증 절차 시작  */
    #body{padding: 10px; background: #fafafa;}
    .system { position:relative; width: 700px; height: 631px; background: url(bg_system.png) no-repeat center 70px; font-family: dotum; font-family: dotum; color:#000;}
    
    .system p { display:table; width: 200px; margin: 0 auto 60px; background: #fff;}
    
    .system b { display: table-cell; vertical-align: middle; text-align: center; height: 68px; border: 1px solid #d3d3d3;}
    
    .system em { display:block; font-weight: normal;}
    
    .system span {position:absolute; right: 0; top: 160px; display: table; width: 200px; height: 68px; background: #ededed; border: 1px solid #d3d3d3; }

    
    .system .depth3 strong { display: block; width: 200px; height: 48px; line-height: 48px; border: 1px solid #d3d3d3; background: #ededed; text-align: center;}
    .system .depth3 div { padding: 18px 0 0 ; width: 200px; height: 128px; border: 1px solid #d3d3d3; border-top: none; background: #fff; line-height: 26px; text-align: center;}
    .system .depth3 > li:nth-child(2) { padding:44px 0 0; margin: 0 auto; width: 200px;}
    .system .depth3 > li:nth-child(1) { position: absolute; left:0; bottom:0;}
    .system .depth3 > li:nth-child(3) { position: absolute; right:0; bottom:0;}
/* 차트/할랄인증 절차 시작  */
    

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
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">HALAL</span> / 할랄 제품인증 소개</h1>
		<ul style="display:block;text-align:justify;line-height:2.5em;">
            &#10046; 할랄(HALAL)의 사전적 의미는 ‘허용되는 것’을 의미합니다.<br>        		    
            &#10046; 할랄은 생활 전반에 걸쳐 이슬람법에 따라 사용이 허용되는 것을 의미하며, 음식, 화장품 과 의약품 등 생활 전반에 걸친 모든 것이 해당됩니다.<br>
            &#10046; 무슬림이 먹을 수 있는 음식은 ‘할랄식품’이라 하여 별도로 규정하고 있으며 공산품의 경우 할랄 식품에는 할랄 인증마크를 붙이고 있습니다. <br>
            &#10046; 할랄 인증과정의 철저한 위생검사를 통해 할랄인증은 이슬람권에서 일종의 품질보증 마크로 여겨지고 있습니다.<br>
            &#10046; 인도네시아의 경우 ‘신할랄인증법’을 시행하고 있습니다<br>
            &#10174; 이에 따라 이전에는 할랄 인증이 없더라도 제품 유통이 가능했으나 19년 10월 17일부터 일정 계도기간을 거친 후, 할랄 인증이 본격적으로 의무화 될 예정이므로 할랄 인증의 중요성은 더욱 커지고 있습니다.<br>
		</ul>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">할랄 인증 -MUI 할랄 인증</p>
					<ul style="display:block;text-align:justify;">
                      MUI인증은 인도네시아의 할랄인증으로, 타 국가의 할랄 인증보다도 받기가 어려운 제품으로 인지되고 있으며, 해외 기업들도 이 인증은 획득 절차가 까다로운 만큼 공신력이 있다고 판단되는 인증입니다. 인도네시아로 수출하고 있는 제품에 대해서 자국의 할랄 인증 기관을 통한 인증 마크를 부착하는 대신 인도네시아 MUI 할랄 인증을 받아 진행하는 경우도 발생하고 있습니다. 수요 또한 2014년 이후 MUI 할랄 인증을 제품 수가 급속도로 증가세를 보이고 있어 공신력과 인지도를 모두 확보한 인증입니다.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">할랄(Halal)과 하람(Haram)</p>
					<ul style="display:block;text-align:justify;">
                        할랄이란 사전적 의미뿐만 아니라 제품의 전 생산과정에서 철저한 검증을 거쳤다는 의미를 가지므로 비 이슬람 사이에서도 인기가 높아지고 있습니다.<br>
                        
                        할랄은 의무도에 따라 아래 세가지로 나뉩니다.<br>
                        <span style="line-height;2.5em;">
                        &nbsp; &nbsp; &#10044; 파르드 : 반드시 해야 할 의무<br>
                        &nbsp; &nbsp; &#10044; 만두브 : 하도록 권장되는 것<br>
                        &nbsp; &nbsp; &#10044; 무바흐 : 법과 무관한 행위<br><br>
                        </span>

                        하람은 할랄의 반대 개념으로 ‘금지된’ 이라는 의미를 가지고 있습니다. 대표적인 하람은 돼지, 피, 알코올 등이 있으며 이러한 재료를 사용한 제품을 하람이 됩니다.<br>

					</ul>
					
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">할랄 인증 제품 요구사항</p>
					<ul style="display:block;text-align:justify;line-height:2.5em;">
                      &#10050; 제품의 브랜드 또는 명칭은 하람인 것 또는 이슬람 율법에서 부적절한 행위를 연상시키는 이름을 절대로 사용해서는 안 된다.<br> 
                      &#10050; 제품의 특성 또는 감각적 설명은 하람 제품 또는 MUI 파트와에서 하람 제품으로 명시하고 있는 것을 절대로 연상시켜서는 안된다.<br>
                      &#10050; 모든 소매 식품에 대해, 모든 제품은 인도네시아 내에서 동일 브랜드로 유통되어야 하며, 모든 제품은 반드시 할랄 인증 등록을 해야 한다. 동일 브랜드의 일부 제품만을 등록하는 것은 허용되지 않는다.<br>

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">할랄 인증 절차 및 제출 서류</p>
					
                       <div id="body">					
                       <div class="system">
                               <ul>
                                 <li><p><b>대표이사 타쿠대디</b></p></li>
                                  <li>
                                   <ul>
                                     <li><p><b>금융소비자보호총괄책임자<em>(CCO : Chief Consumer Officer)</em></b></p></li>
                                     <li><span><b>금융소비자보호협의회<em>(CCO를 포함한 금융소비자보호 최고의결기가)</em></b></span></li>
                                     <li><p><b>소비자 보호파트</b></p></li>
                                         <ul class="depth3">
                                            <li>
                                              <strong>소비자제도 기획</strong>
                                               <div>
                                                  소비자 보호 관련 업무기획<br>
                                                  상품개발 및 판매 시 사전협의 및 모니터링 <br>
                                                  민원분석을 통한 제도 개선
                                               </div>
                                            </li>
                                            <li>
                                              <strong>VOC 및 민원 업무</strong>
                                               <div>
                                                  고객의 소리 접수 및 처리<br>
                                                  대내외 민원 접수 및 처리 <br>
                                                  보이스피싱 피해 등 소비자 피해 보상의<br>
                                                  접수 및 처리
                                               </div>
                                            </li>
                                            <li>
                                              <strong>피해 예방 모니터링</strong>
                                               <div>
                                                  보이스피싱 및 해킹에 의한<br>
                                                  이상금융거래 등 소비자피해 <br>
                                                  예방을 위한 모니터링 및 조치
                                               </div>
                                            </li>
                                         </ul>
                                   </ul>
                                  </li>
                              </ul>
                           </div>
                       </div>
					
					
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
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
			<span style="font-weight:bold;font-size:120%;"></span>
				<li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 22000, FSSC 22000, FDA FSMA, Global HACCP)</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품 인증 (Vegan 인증, HALAL 인증, 유라시아 인증, 위생등록, FDA 등록/승인)</span></p></li>
				<li><p><em><strong>03</strong></em><span>FDA (시험, FSMA 인증, 등록/승인) </span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>

	
</div> <!--------// div class="content_wrap"  종료  ------------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
