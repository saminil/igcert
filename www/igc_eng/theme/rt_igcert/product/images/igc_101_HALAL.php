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
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_HALAL_05.jpg') no-repeat center top; }
    
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
            &#10046; 할랄 인증은 '허용되는'을 의미하는 아랍어로 무슬림이 사용할 수 있도록 이슬람 샤리아 율법에 따라 생산된 제품 또는 서비스에 부여할 수 있는 인증 스킴 및 인증 마크입니다.<br>  
                  		    
            &#10046; 할랄 인증 제품은 할랄 제품의 생산에 사용되는 원자재 뿐만 아니라 작업자, 생산 시설, 직원이 사용하는 도구, 작업복, 포장지, 라벨지 등에 대한 요구 사항을 준수함을 의미합니다.<br>
            
            &#10046; 할랄 제품이 깨끗하고 안전한 제품이라는 인식이 증가하며 많은 기업들이 식품, 화장품, 의약품, 음료 등에 대한 할랄 인증을 받고 있으며, 해당 제품에는 할랄 인증마크가 붙습니다.<br>
            
            &#10046; 기업은 할랄의 요구사항을 충족하는 문서를 제출하고 심사를 통해 적격성을 확인 받은 이후 이슬람 국가로 할랄 제품을 수출할 수 있습니다.<br>
		</ul>
	</div>

	<div class="business_type3">
		<div class="business_info">
		
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="padding-top:50px">1.제품 분류</p>
					<ul style="display:block;text-align:justify;">
                     제품은 할랄(Halal), 하람(Haram), 또는 마쉬부(Mashbooh)로 분류합니다.<br><br>
                     <span style="font-weight:bold;color:red;">할랄(Halal)</span> : 무슬림에게 ‘허용되는’ 모든 것입니다. 대표적인 할랄에는 소, 양, 닭, 오리와 같은 식품 등이 있습니다.<br><br>
                     <span style="font-weight:bold;color:red;">하람(Haram)</span> : 할랄의 반대 개념으로 ‘금지된’이라는 의미를 가지고 있는 하람입니다. 대표적인 하람 제품은 돼지, 피, 알코올 등이 있으며 이러한 재료를 사용한 제품이 하람에 속합니다.<br><br>
                     <span style="font-weight:bold;color:red;">매쉬부(Mashbooh)</span> : 기준상 할랄인지 하람인지 분류하기 애매모호한 또는 의심스러운 성분을 가진 제품을 의미합니다. 대표적인 매쉬부에는 담배가 있습니다.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

<!--
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
-->
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="padding-top:50px">2.할랄 인증 제품 요구사항</p>
					<ul style="display:block;text-align:justify;line-height:2.5em;">
                      &#10050; 할랄 인증 대상 제품 선정<br> 
                      &#10050; 제생산공정에 사용되는 원재료 및 원재료의 공급자<br>
                      &#10050; 제품의 생산 과정 검토<br>
                      &#10050; 작업 환경 또는 장비/설비 안전성 확보 및 위생관리 평가 <br> 
                      &#10050; 조직의 내부할랄팀 구성원 임명 및 이슬람 규칙 및 할랄 요구사항에 대한 교육 <br>
                      &#10050; 제포장의 라벨링 검토<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="padding-top:50px">3.인증절차</p>
					<ul style="display:block;text-align:justify;">
<!--					<span style="font-weight:bold;color:#999933;"> &#10049; 인증 절차</span><br>-->
					<span>
                       <img src="images/Process_halal.png" alt="할랄인증 프로세스" style="display: block; margin: 0px auto;">
                    </span>
					</ul> 
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="padding-top:50px">4.제출 서류</p>
					<ul style="display:block;text-align:justify;">
<!--					<span style="font-weight:bold;color:#999933;"> &#10049; 인증 절차</span><br>-->
					<span style="line-height:2.5em;">
                       1.	신청서<br>
                       2.	제품 설문지(성문/원재료)<br>
                       3.	사업자등록증<br>
                       4.	회사 소개서<br>
                       5.	제조 등록증명서<br>
                       6.	제품 제조공정도<br>
                       7.	공장 위치 및 공장 구내 지도<br>
                       8.	공정흐름도, 생산절차서<br>
                       9.	주요 성분(원자재)에 대한 할랄 인증서 또는 사양<br>
                       10.	HACCP, CMP, GHP, ISO 또는 기타 보유 인증서 사본 (있을 경우)<br>
                       11.	제품 디자인 및 라벨지<br>
                       <p style="display:block;line-height:3.5em">*제품에 따라 추가 서류가 요구될 수 있습니다.</p>
                    </span>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="padding-top:70px">IGC인증원의 역량</p>
					<ul style="display:block;text-align:justify;">
					<span style="line-height:2.5em;">
                       <p>* IGC는 JAKIM(말레이시아) 및 유라시아 인증 스킴을 함께 보유하고 있는 국제적인 할랄 인증기관과 협력하여 할랄 인증 서비스를 제공하고 있습니다.</p><br>
                       <p>* IGC는 전문인력을 통해 할랄 인증 신청부터, 내부할랄그룹 교육, 심사 및 인증서 발행까지 전문적인 서비스를 제공하고 있습니다.</p><br>
                    </span>
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
