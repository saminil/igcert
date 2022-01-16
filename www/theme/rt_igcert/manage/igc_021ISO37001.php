<?php
	include_once('./_common.php');
$g5['title'] = '부패방지 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .list_st li .bullet { content: '';position: absolute;display: inline-block;width: 5px;height: 5px;background: #222;border-radius: 50%;top: 10px;left: 0}/* 리스트 스타일 2 */

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
        <h1 class="tit_num"><span>ISO</span> 37001</h1>
		<h2 class="tit_cer fc_pointer">부패 방지 경영시스템 인증</h2>		
		<p class="outline">
            부패 방지 경영 시스템 (Anti-bribery management system)은 국제표준화기구 (ISO, International Organization for Standardization)가 2016년 10월에 발표한 국제 표준으로 부패 방지를 위해 각국 기업이 실행해야 하는 구체적인 실행방안을 담고 있습니다.<br><br>
            조직의 활동 전 부문에서 발생할 수 있는 부패 방지를 위한 요구 사항으로 부패 방지 관리 시스템의 수립을 통해 전 세계적으로 부패에 대한 긍정적인 인식을 이끌어 나갈 수 있으며 이해관계자들 간의 법규 위반 리스크를 감소하여 신뢰를 증대시킬 수 있는 효과를 기대할 수 있습니다.
		</p>

		<ul class="content">
			<li><!-- content 01 -->
				<dl>
					<dt class="img_area">
						<img src="./image/ISO15378-2017_000.jpg" alt="ISO 37001 요구사항">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 37001:2016 요구 사항</h3>
						<p class="con_txt">
                            ISO 37001:2016은 ISO 9001:2015 등 표준에 적용되는 High Level Structure가 적용되어, 다른 표준과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
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
						<img src="./image/iso_37001_02.jpg" alt="ISO 37001의 중요성">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 37001의 중요성</h3>
						<p style="text-align:justify">
                            국제 반부패회의 (International Anti-Corruption Conference)는 반부패 경험과 정보의 교환, 국제적 협력 필요성 증대에 따라 1983년 워싱턴에서 처음 개최한 이래 격년제로 개최하고 있습니다.<br><br>
                            세계에서 가장 큰 규모의 국제 반부패 회의로서 2020년 제19차 회의를 한국에서 개최할 예정입니다.<br><br>
                            이를 기점으로 국내 정부, 공공 기관 및 다양한 산업분야에 부패 방지, 컴플라이언스, 사회적 책임 등의 인증 수요가 증가할 것으로 보입니다.
                        </p>
					</dd>
				</dl>			
			</li>
			
			<li><!-- content 03 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_14155_03.jpg" alt="ISO 14155의 기대효과">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 기대효과</h3>
						<ul class="list_st">
					        <li><span class="number">1. </span>개인 및 조직 차원에서 뇌물수수로 인한 법규 위반 등에 따른 리스크 감소</li>
					        <li><span class="number">2. </span>조직 및 사업 활동에 대한 고객으로부터의 신뢰 증대</li>
					        <li><span class="number">3. </span>파트너십 관계에 있는 조직 및 기관으로부터의 신뢰를 바탕으로 협력관계 향상</li>
					        <li><span class="number">4. </span>직원 및 협력회사에 부패방지 인식 공유</li>
					        <li><span class="number">5. </span>공공기관을 포함한 다양한 입찰에서 강화되는 부패방지 시스템 충족</li>
                        </ul>
					</dd>
				</dl>			
			</li>

			<li><!-- content 04 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_37001_03.jpg" alt="IGC인증원의 역량">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">IGC 인증원의 역량</h3>
						<ul class="list_st">
                            <li>
                                <span class="bullet"></span>IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.
                            </li>
                            <li>
                                <span class="bullet"></span>IGC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 37001은 물론 품질, 환경 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.
                            </li>
                            <li>
                                <span class="bullet"></span>IGC는 전 세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.
                            </li>
                        </ul>
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