<?php
include_once('./_common.php');
$g5['title'] = '행동강령';
include_once(G5_THEME_PATH.'/head.php');
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">


<style>
    .content_wrap { 
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        font-size: 1rem;
        text-align:justify;
        font-weight: 400;
        line-height: 1.6 
    }
    .txtBox02 {  /* 상세페이지 타이틀 박스 */
        display: block;
        color:#006699;
        font-size: 1.6rem;
        font-weight: 500;
        text-align: center;
        border-radius: 5px;
        background: #f9f9f9;
        width: 100%;
        padding: 25px 0;
        margin: 0 0 50px;
    }
    .page_title{margin:0 auto 60px;}
    .page_title h2>img{ /*로고 이미지*/
        width:16%; 
        margin:0 42%; 
        display:block;
    } 
    /* ------------ 컨텐츠 ----------- */
    .vision_type1 h3.title{ /* 파란색 타이틀 */
        font-weight: 600;
        color: #3296dd;
        font-size: 1.3rem;
    }
	.vision_type1 span.stitle {
        display:block; 
        width:100%; 
        text-align:justify; 
        margin:5px auto 0px; 
        font-size:1.05rem; 
        font-weight:400; 
    }
    .vision_type1 .img_div{ /* 행동강령 이미지 */
        margin:50px auto;
        width:70%;
    }
	.vision_type1 .img_div img{ 
        width:100%; 
    }
	.vision_type1 ul { /* 행동강령 */
        margin:0; 
        border-top:1px solid #ddd; 
        border-bottom:1px solid #ddd; 
        overflow:hidden;
    }
	.vision_type1 ul li {
        float:left; 
        display:inline-block;
        padding:30px 0; 
        width:33.33333%; 
        height:280px; 
        text-align:center;  
    }
	.vision_type1 ul li:nth-child(2n) {background-color:#f9f9f9;}
    .vision_type1 ul li p{ /* 행동강령 숫자, 타이틀 */
        font-size:1.5rem; 
        color:#d91616; 
        margin-bottom:5px;
    }
	.vision_type1 ul li span { 
        display:block; 
        color:#555;  
        margin:20px;  
        line-height:1.5;
    }
    
    
    /* ============= (주)아이지씨인증원 사업영역 부분 ============= */
    
	.partner_type2 .con_arrow { padding: 20px 0 }/* 사업영역 타이틀 */
	.partner_type2 .con_arrow p { position: relative;padding-left: 30px;font-size: 1.75rem }
	.partner_type2 .con_arrow p::before { content: "";display: inline-block;width: 3px;height: 23px;position: absolute;top: 4px;left: 10px;background-color: #1F88E5;transform:rotate(45deg) }/* 사업영역 타이틀 arrow */
    
	.partner_type2 .con_box { width: 100%;padding: 20px 0;border-top: 1px solid #000;border-bottom: 1px solid #000 }/* 사업영역 리스트 부분 */
	.partner_type2 .con_box::after { content: "";display: block;clear: both }
	.partner_type2 .con_box ul li { float: left;width: 50%;margin: 10px 0 }/* 리스트 2배수 가로배열 */
	.partner_type2 .con_box ul li p { display: table }
	.partner_type2 .con_box ul li p > em { display: table-cell;width: 30px }/* 리스트 좌측 원형 */
	.partner_type2 .con_box ul li p > em > strong { display: inline-block;width: 30px;height: 30px;line-height: 30px;color: #fff;background-color: #000;text-align: center;border-radius: 100%;font-weight: 500 }/* 원형 안에 숫자 */
	.partner_type2 .con_box ul li p > span { color: #555;letter-spacing: -0.75px;padding: 0 15px }/* 리스트 내용(텍스트) */
    
    
    /* =========================================================================================================================================================================== */
    
    
    /* ============= 상세페이지 반응형 시작 ============= */
    
    @media screen and (max-width: 1024px){
        
        .txtBox02{font-size:1.4rem;padding:20px 0;}
        .vision_type1 span.stitle {font-size: 1rem;}
		.vision_type1 ul li p {font-size:1.2rem;}
		.vision_type1 ul li span{font-size:0.85rem;}
        
    }
    
    @media only screen and (max-device-width: 768px) and (-webkit-min-device-pixel-ratio: 1) {
        
        .txtBox02{display:none;} 
        .page_title h2>img{width:20%;margin:0 40%}
        .vision_type1 ul li { height:250px;padding:15px 5px;}
        .vision_type1 ul li span{margin:15px 10px;}
        .partner_type2 .con_box ul li { float:left; width:100%; list-style:none; margin:10px 0; } /* 사업영역 */
        
    }
    
    @media (max-width: 640px) {
        
        .content_wrap { font-size: 0.85rem }/* 전체 폰트 사이즈 조정 */
        .vision_type1 h3.title {font-size: 1.1rem;font-weight:500;}
        .vision_type1 span.stitle {font-size: 0.85rem;}
        .vision_type1 ul li p {font-size:1.1rem;}
        .partner_type2 .con_arrow p { font-size: 1.4rem }/* 사업영역 타이틀 폰트 사이즈 조정 */
    }
    
    @media (min-width: 360px) and (max-device-width: 414px) {
        
        .vision_type1 .img_div{width:100%;}
        .vision_type1 ul li{width:100%;height:auto;padding:20px 5px;}
        .vision_type1 ul li p {margin-top:0px;}
        
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */
        
    }
    
    /* ============= 상세페이지 반응형 종료 ============= */
    
    
</style>

<div class="content_wrap">
	<section class="page_title">
		<div class="txtBox02">행동강령</div>
		<h2><img src="images/ICG_LOGO.png" alt="(주)아이지씨인증원 로고"></h2>
	</section>
    
	<section class="vision_type1">
		<h3 class="title">IGC인증원의 목표와 핵심 가치</h3>
		<span class="stitle">
            IGC인증원는 시시각각 변화하는 글로벌 산업 분야에서 좀 더 빠르고 확실한 접근하는 방법을 모색하고,
            상품 개발과 생산성 향상을 위해 지속적이고도 끊임없는 개선에 매진하며, 품질 혁신 생산능력 향상을 통해 고객님의 성공적인 글로벌 비즈니스에 기여합니다.
        </span>
		<div class="img_div">
            <img src="./images/impartiality_02.jpg" alt="IGC 행동강령">
        </div>
		<ul>
			<li>
                <p class="number"><em><strong >01</strong></em></p>
				<p>공정 심사전문가</p>
				<span>
					전문적이고 정확하며 공정한 방식으로 활동을 수행합니다. 항상 최고의 전문 기술과 판단력을 심사에 적용합니다.
				</span>
			</li>
			<li>
				<p  class="number"><em><strong>02</strong></em></p>
				<p>전문역량 개발</p>
				<span>
					모든 심사원은 지속적으로 자신의 전문 역량을 개발하고 올바른 심사를 위해 최상의 상태를 유지합니다.
				</span>
			</li>
			<li>
				<p  class="number"><em><strong>03</strong></em></p>
				<p>이해상충관계 지양</p>
				<span>
					이해 관계가 상충되는 고용 또는 양도를 피합니다. 
				</span>
			</li>
			<li>
				<p  class="number"><em><strong>04</strong></em></p>
				<p>규정 엄수</p>
				<span>
					인증 기관의 평판, 이익 및 신용에 대한 불법적인 방법으로 행동하지 않습니다. 
				</span>
			</li>
			<li>
				<p class="number"><em><strong>05</strong></em></p>
				<p>고객 정보보안</p>
				<span>
					피청구인과 감사 기관이 서면으로 승인한 경우를 제외하고는 심사 과정에서 얻은 결과, 정보 또는 그 일부를 공개하지 않습니다.
				</span>
			</li>
			<li>
				<p class="number"><em><strong>06</strong></em></p>
				<p>금품수수 금지</p>
				<span>
					피심사조직, 직원 또는 기타 이해 관계자로부터 커미션, 선물 또는 기타 혜택을 받지 않습니다. 
				</span>
			</li>
			<li>
				<p class="number"><em><strong>07</strong></em></p>
				<p>무결성 정보</p>
				<span>
					심사 또는 심사 프로세스의 무결성을 손상시킬 수있는 허위 또는 조작된 정보를 의도적으로 전달하지 않습니다.
				</span>
			</li>
			<li>
				<p class="number"><em><strong>08</strong></em></p>
				<p>고객만족</p>
				<span>
					피심사조직에 대한 부당하고 비합리적인 비판을 게시하거나 전달하지 않습니다. 
				</span>
			</li>
			<li>
				<p class="number"><em><strong>09</strong></em></p>
				<p>협력의무</p>
				<span>
					본 행동강령을 위반해서는 안되며 이 규범의 위반이 의심될 경우 발생하는 공식적인 조사에 전적으로 협력합니다.
				</span>
			</li>
		</ul>
	</section>	
	<br><br>
	
    <!----(주)아이지씨인증원 사업영역 시작-------->
    <section class="partner_type2">
            <h2 class="con_arrow">
        <p>우리가 제공하는 관련 서비스</p>
            </h2>
            <div class="con_box">
              <ul>
                <li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
                <li><p><em><strong>02</strong></em><span>시험</span></p></li>
                <li><p><em><strong>03</strong></em><span>전문인력 양성 교육</span></p></li>
                <li><p><em><strong>04</strong></em><span>제품 인증</span></p></li>
                <li><p><em><strong>05</strong></em><span>심사원 인증</span></p></li>
                <li><p><em><strong>06</strong></em><span>연수기관 지정</span></p></li>
              </ul>
            </div>
    </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------>   
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>