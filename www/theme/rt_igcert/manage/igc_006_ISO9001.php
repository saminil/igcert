<?php
	include_once('./_common.php');
$g5['title'] = '품질경영 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #1F88E5 }/* 상세페이지 포인트 컬러 */
    .point_blk { display: block;color: #111;font-weight: 500;margin: 0 0 10px }/* 상세페이지 폰트스타일 1 */
	.content_wrap { width: 100%;max-width: 1200px;margin: 0 auto;font-size: 1rem;font-weight: 400;line-height: 1.6 }/* 컨텐츠 중간 그리드 지정 */
    .content_wrap .business_type5 { margin: 0 0 100px }
    
    /* ============= 컨텐츠 타이틀 영역 ============= */
    
    .tit_num { font-size: 2.2rem;font-weight: 600;color: #111;text-align: center;margin: 70px auto 0 }/* 컨텐츠 타이틀 : 규격 넘버 */
    .tit_cer { font-size: 2.5rem;font-weight: 600;text-align: center;margin: 20px auto 70px }/* 컨텐츠 타이틀 : 규격 타이틀 */
    .tit_cer::after { content: '';display: block;position: relative;top: 35px;left: 50%;transform: translateX(-50%);width: 2px;height: 30px;background: #999 }
    .outline { text-align: justify;margin: 0 0 70px }/* 개요 */
    
    /* ============= 컨텐츠 영역 ============= */
    
    .content > li { width: 100%;overflow: hidden }
    .content > li:nth-child(odd) { background: #f8f8f8;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd }/* 컨텐츠 스타일 (홀수만) */
    
    .content li dl { display: table;width: 100% }
    .content li dl dt, .context li dl dd { display: table-cell;vertical-align: middle }
    
    /* 이미지 영역 */
    .content li .img_area { width: 40%;padding: 20px }
    .content li .img_area img { width: 100%;margin: 0 auto }
    
    /* 텍스트 영역 */
    .content li .txt_area { padding: 70px 20px }
    .content li .txt_area .con_tit { font-size: 2rem;font-weight: 500;color: #111;margin: 0 0 30px }/* 텍스트 영역 타이틀 */
    .content li .txt_area .con_txt { text-align: justify;margin: 0 0 50px }/* 텍스트 영역 내용 */
    
    /* 리스트 스타일 생성 */
    .list_st li { position: relative;padding: 0 0 4px 30px }
    .list_st li .number { position: absolute;display: inline-block;width: 5px;height: 5px;top: 0;left: 0}/* 리스트 스타일 1 */

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
    
    @media only screen and (max-device-width: 768px) and (-webkit-min-device-pixel-ratio: 1) {
        
        .content li dl { display: block }/* SNB 없어지고 컨텐츠 width 100%에 맞춰 그리드 변경 */
        .content li dl dt, .context li dl dd { display: block }/* 이미지 영역과 텍스트 영역 좌우 -> 상하 위치로 변경 */
        
        .content li .img_area { width: 50%;margin: 70px auto 0;padding: 0 }/* 이미지 크기/여백 조정 */
        
    }
    
    
    @media (max-width: 640px) {
        
        .content_wrap { font-size: 0.85rem }/* 전체 폰트 사이즈 조정 */
        
        .tit_num { font-size: 1.6rem;margin: 0 }/* 컨텐츠 타이틀 폰트 사이즈 조정 */
        .tit_cer { font-size: 1.85rem }/* 컨텐츠 타이틀 폰트 사이즈 조정 */
        .tit_cer::after { height: 24px }
        
        .content li .txt_area { padding: 50px 20px }/* 텍스트 영역 여백 조정 */
        .content li .txt_area .con_tit { font-size: 1.4rem }/* 텍스트 영역 타이틀 폰트 사이즈 조정 */
        
        .partner_type2 .con_arrow p { font-size: 1.4rem }/* 사업영역 타이틀 폰트 사이즈 조정 */
        
    }
    
    
    @media (min-width: 360px) and (max-device-width: 414px) {
        
        .outline { margin: 0 0 50px }
        
        .content li .img_area { width: 90%;margin: 50px auto 0 }/* 이미지 크기/여백 조정 */
        
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */
        
    }

    
    /* ============= 상세페이지 반응형 종료 ============= */

</style>


<div class="content_wrap">

	<section class="business_type5" class="area">
		<h1 class="tit_num"><span>ISO</span> 9001</h1>
		<h2 class="tit_cer fc_pointer">품질경영시스템 인증</h2>		
		<p class="outline">
            오늘날 많은 기업은 고객의 요구를 단순히 충족시키는 것뿐만 아니라 더욱 향상된 제품 및 서비스를 제공하기를 원하고 있습니다. 또한, 비용 절감을 통해 경쟁력을 유지하기 원합니다. 대기업이든 중소기업이든 품질 및 가격 경쟁력을 개선하기 위한 종합적인 솔루션이 필요하고, <span>ISO</span> 9001은 이러한 기업에게 효과적인 품질경영 프로세스를 제공합니다.<br><br>
            소프트웨어 개발은 식품제조나 상담서비스 제공과는 다릅니다. 그러나 <span>ISO</span> 9001은 모든 산업에 적용될 수 있습니다. 제조 회사, 소프트웨어 개발 회사, 거래 조직, 서비스 조직, 경찰서, 프로 축구 팀 및 시의회 등 다양한 조직이 <span>ISO</span> 9001:2015 시스템을 성공적으로 적용하였습니다. 이처럼 <span>ISO</span> 9001의 요구사항은 포괄적이며, 조직의 형태, 규모 또는 제공되는 제품 및 서비스에 관계없이 모든 조직에 적용될 수 있습니다. 그렇기에, 이 표준은 전세계적으로 가장 보편적으로 사용되고 있는 품질 경영 표준입니다.
		</p>
		
		<ul class="content">
			<li><!-- content 01 -->
				<dl>
					<dt class="img_area">
						<img src="./image/ISO_9001_01.jpg" alt="ISO 9001:2015 요구사항">
					</dt>
					<dd class="txt_area">
                        <h3 class="con_tit"><span>ISO</span> 9001:2015 요구사항</h3>
						<p class="con_txt">
                            조직의 목적과 목표를 뒷받침하는 <span>ISO</span> 9001은 품질 방침과 목표를 달성하기 위한 프로세스, 절차 및 책임사항을 문서화합니다. ISO 9001:2015는 High Level Structure가 적용되어, 다른 High Level Structure가 적용된 규격과 통합하여 관리할 수 있습니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
                        </p>
					    <ul class="list_st">
					        <li><span class="number">1. </span>적용범위</li>
					        <li><span class="number">2. </span>인용표준</li>
					        <li><span class="number">3. </span>용어와 정의</li>
					        <li><span class="number">4. </span>조직 상황</li>
					        <li><span class="number">5. </span>리더십</li>
					        <li><span class="number">6. </span>기획</li>
					        <li><span class="number">7. </span>지원</li>
					        <li><span class="number">8. </span>운용</li>
					        <li><span class="number">9. </span>성과평가</li>
					        <li><span class="number">10. </span>개선</li>
                        </ul>
					</dd>
				</dl>
			</li>
			
			<li><!-- content 02 -->
				<dl>
					<dt class="img_area">
						<img src="./image/ISO_9001_02.jpg" alt="ISO 9001의 중요성">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 9001의 중요성</h3>
						<p class="con_txt">
                            오늘날의 서비스 부문 중심 경제에서 점점 더 많은 회사들이 <span>ISO</span> 9001을 비즈니스 도구로 사용하고 있습니다. 적절하게 명시된 품질 목표, 고객 만족도 조사 및 지속적인 개선 프로그램을 통해 기업은 효율성과 수익성을 높일 수 있습니다.<br><br>
                            즉, 적절한 품질 관리는 비즈니스를 향상 시키며, 투자, 시장 점유율, 매출 증가, 매출 이윤, 경쟁 우위 및 소송 회피에 긍정적인 영향을 미칩니다.<br><br>
                            <span>ISO</span> 9001을 비즈니스 도구로 사용한다면 다음과 같은 이점이 있습니다.
                        </p>
                        <ul class="list_st">
                            <li><span class="number">1. </span>보다 효율적이고 효과적인 운영</li>
                            <li><span class="number">2. </span>마케팅 강화</li>
					        <li><span class="number">3. </span>이익 증가</li>
					        <li><span class="number">4. </span>직원 동기 부여, 인식 및 사기 개선</li>
					        <li><span class="number">5. </span>국제 무역 촉진</li>
					        <li><span class="number">6. </span>고객 만족도 및 고객 유지력 향상</li>
					        <li><span class="number">7. </span>폐기물 감소 및 생산성 향상</li>
                        </ul>
					</dd>
				</dl>			
			</li>
			
			<li><!-- content 03 -->
				<dl>
					<dt class="img_area">
						<img src="./image/ISO_9001_03.jpg" alt="ISO 9001, 아이지씨인증원의 역량">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>IGC</span> 인증원의 역량</h3>
						<p style="text-align: justify">
                            IGC는 미국의 인정기구인 IAS로부터 <span>ISO</span> 9001에 대한 인정을 받아 품질경영시스템에 대한 인증 서비스를 제공하고 있습니다.<br><br>
                            IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
                            IGC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 9001은 물론 환경경영 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.<br><br>
                            IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.
                       </p>
					</dd>
				</dl>	
			</li>
			
		</ul>
	</section>
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
            <p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
            <ul>
                <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
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