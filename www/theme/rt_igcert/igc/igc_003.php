<?php
include_once('./_common.php');
$g5['title'] = '공정성';
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
	.vision_type1 ul { /* 공정성 선언문 */
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
        height:330px; 
        text-align:center;  
    }
	.vision_type1 ul li:nth-child(2n) {background-color:#f9f9f9;}
    .vision_type1 ul li p{ /* 공정성 숫자, 타이틀 */
        font-size:1.5rem; 
        color:#136dbb; 
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
        .vision_type1 ul li{ height:350px; }
		.vision_type1 ul li p {font-size:1.2rem;}
		.vision_type1 ul li span{font-size:0.85rem;}
        
    }
    
    @media only screen and (max-device-width: 768px) and (-webkit-min-device-pixel-ratio: 1) {
        
        .txtBox02{display:none;} 
        .page_title h2>img{width:20%;margin:0 40%}
        .vision_type1 ul li { height:280px;padding:15px 5px;}
        .vision_type1 ul li span{margin:15px 10px;}
        .partner_type2 .con_box ul li { float:left; width:100%; list-style:none; margin:10px 0; } /* 사업영역 */
        
    }
    
    @media (max-width: 640px) {
        
        .content_wrap { font-size: 0.85rem }/* 전체 폰트 사이즈 조정 */
        .vision_type1 h3.title {font-size: 1.1rem;font-weight:500;}
        .vision_type1 span.stitle {font-size: 0.85rem;}
        .vision_type1 ul li { height:350px;;padding:15px 0;}
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
		<div class="txtBox02">공정성 선언문</div>
		<h2><img src="images/ICG_LOGO.png" alt="(주)아이지씨인증원 로고"></h2>
	</section>
    
	<section class="vision_type1">
		<h3 class="title">공정성 선언문</h3>
		<span class="stitle">
             Institute of Global Certification Co., LTD.  (이하 IGC)는 인증활동에 대한 책임이 있는 법인입니다.<br>
             IGC는 인증 활동을 수행함에있어 공정성의 중요성을 충분히 이해하고 있으며, 고객 또는 잠재 고객과의 모든 거래와, 직원 또는 기타 인사가 공정하고 공정하게 유지되도록 할 것입니다.<br>
             공정성이 유지되고 입증 될 수 있도록 IGC는 다음 원칙을 수립하였습니다.
		</span>
		<div class="img_div">
		   <img src="./images/impartiality_01.jpg" alt="IGC 공정성">
		</div>
		<ul>
			<li>
                <p><em><strong>01</strong></em></p>
				<p>공정 인증서 발행</p>
				<span>
					IGC 인증서는 공정성 위해요소가 없다는 것을 보증하기 위해 내부의 독립적이고 권한있는 구성원의 검토 후 발행됩니다.
				</span>
			</li>
			<li>
				<p><em><strong>02</strong></em></p>
				<p>컨설팅 비제공</p>
				<span>
					IGC는 조직 또는 개인에게 경영 시스템 컨설팅이나 다른 형태의 컨설팅을 제공하지 않습니다.
				</span>
			</li>
			<li>
				<p><em><strong>03</strong></em></p>
				<p>내부심사 서비스 제공 통제</p>
				<span>
					IGC는 조직 또는 개인에게 내부 심사 서비스를 제공하지 않습니다.
				</span>
			</li>
			<li>
				<p><em><strong>04</strong></em></p>
				<p>고객사 및 금융사 소유 제한</p>
				<span>
					IGC는 인증, 경영시스템 컨설팅 또는 내부심사 서비스를 제공하는 다른 회사를 소유하지 않으며 (금융 또는 기타) 관심을 갖지 않습니다. 
				</span>
			</li>
			<li>
				<p><em><strong>05</strong></em></p>
				<p>내부 고객 관계 금지</p>
				<span>
					IGC는 IGC가 제공하는 인증 서비스에 영향을 미치는 것으로 판단 될 수 있는 컨설팅, 내부 심사 서비스 또는 기타 서비스를 제공하는 회사와 관계를 맺지 않습니다.
				</span>
			</li>
			<li>
				<p><em><strong>06</strong></em></p>
				<p>정기 위험평가 수행</p>
				<span>
					IGC와 다른 회사 간의 제안 된 관계는 관계가 공식화되기 전에 공정성위원회의 위험 평가를 거칩니다. 회사, 조직 및 개인과의 현재 관계는 인증 프로세스의 공정성에 영향을주지 않는 관계를 보장하기 위해 정기적으로 위험을 평가합니다.
				</span>
			</li>
			<li>
				<p><em><strong>07</strong></em></p>
				<p>공정성 위원회</p>
				<span>
					위험 평가는 공정성위원회에서 수행합니다.
				</span>
			</li>
			<li>
				<p><em><strong>08</strong></em></p>
				<p>정보 기록 및 선언</p>
				<span>
					IGC에 고용되었거나 계약을 맺은 개인은 모든 회사와의 현재 및 과거 관계를 기록해야합니다. 잠재적인 이해 상충을 유발할 수 있는 과거나 현재의 상황은 IGC에 의해 선언되어야 합니다.
				</span>
			</li>
			<li>
				<p><em><strong>09</strong></em></p>
				<p>동종 업무배제</p>
				<span>
					IGC는 경영시스템 심사에 과거 관계가 있었던 직원 또는 하도급 인원을 배정하지 않습니다.
				</span>
			</li>
			<li>
				<p><em><strong>10</strong></em></p>
				<p>공정 심사배정 기준 </p>
				<span>
					최소 2년 동안 관계가 없었던 경영시스템 심사에 배정될 수 있습니다.
				</span>
			</li>
			<li>
				<p><em><strong>11</strong></em></p>
				<p>위험성 평가</p>
				<span>
					위험 평가는 공정성위원회에서 검토 할 것입니다.
				</span>
			</li>
			<li>
				<p><em><strong>12</strong></em></p>
				<p>시스템구축 교육 금지</p>
				<span>
					IGC는 시스템 구축에 대한 어떠한 교육도 제공하지 않습니다.
				</span>
			</li>
			<li>
				<p><em><strong>13</strong></em></p>
				<p>경영시스템 컨설팅활동</p>
				<span>
					IGC는 경영시스템 컨설팅활동과 연계된 어떤 방식의 연결이나 판매가 없도록 보장하며 그러한 관계가 확인되면 적절한 조치를 취할 것입니다.
				</span>
			</li>
			<li>
				<p><em><strong>14</strong></em></p>
				<p>직원 심사</p>
				<span>
					모든 직원은 최소한 매년 심사를 실시하여 심사를 실시 할 때 공평한 지 확인합니다.
				</span>
			</li>
			<li>
				<p><em><strong>15</strong></em></p>
				<p>심사원 독립성</p>
				<span>
					심사원 및 인증 과정에 참여한 다른 사람들은 어떠한 압력도 받지 않을 것이며 심사 결과와 관련하여 특별한 결론을 내리기 위해 어떤식의 영향도 받지 않을 것입니다.
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