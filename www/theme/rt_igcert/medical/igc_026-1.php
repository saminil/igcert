<?php
	include_once('./_common.php');
$g5['title'] = '시험/전기전자';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #11A6A6 }/* 상세페이지 포인트 컬러 */
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
    .content li .txt_area .con_txt { text-align: justify;margin: 0 0 50px }/* 텍스트 영역 내용 스타일 */
    .content li .txt_area .con_txt_2 { margin: 0 0 30px }/* 텍스트 영역 내용 스타일 2 */
    .content li .txt_area .con_txt_2:last-child { margin: 0 }
    
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
		<h1 class="tit_cer fc_pointer">전기 안전 시험</h1>
        <p class="outline">
            전기를 사용하는 제품의 안전성을 입증하는 것은 전 세계 모든 시장 진입 시 필수적으로 요구됩니다. 세계 최대 시장 중 하나인 유럽 시장에 진입하려는 전기/전자제품 제조업체는 시장 진입을 위해 자사의 제품의 안전성을 입증하여야 합니다. 유럽 지역에 수입되고 판매되는 많은 전기 및 전자 제품은 저전압 지침 요구사항을 준수해야 합니다. CE 마크를 부착한 제품은 저전압 지침 및 적용되는 다른 지침 (EMC 지침 등)의 요구사항을 준수하고 있다고 간주되며 EC 회원국 시장에 법적으로 접근이 보장됩니다.
        </p>

		<ul class="content">
			<li><!-- content 01 -->
			    <dl>
					<dt class="img_area">
						<img src="./images/clinicaltest_electricsafety_01.jpg" alt="시험소 소개">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">시험소 소개</h3>
						<p style="text-align: justify">
                            전기 의료기기 제품 승인을 위해 장비가 IEC/EN 60601 안전 표준을 준수하는 시험으로, 기본 안전 및 필수 성능을 입증하기위한 제품 안전 요구 사항 준수에 의거한 전기 의료 기기 시험입니다.<br><br>
                            모든 의료 기기는 일반적으로 승인된 실험실의 시험 결과를 필요로 하고 엄격한 지역 승인 절차에 의해 제어됩니다. 전기 의료 기기와 관련하여 이러한 요구 사항은 국제적으로 IEC 60601 표준 규격의 기준에 따라 문서화되어야 합니다.<br><br>
                            현재 IEC 60601-1 제3판은 전 세계 대부분의 규제 체계에서 전기 의료 기기의 승인 절차를 위한 기반입니다. 유럽 연합의 EN 60601 표준 규격과 동일한 요구조건으로 인해 IEC는 의료 기기 지침 MDD(Medical Device Directive) 93/42/EEC에 대한 적합성을 정의합니다.<br><br>
                            저희 시험소는 유럽 및 국제 표준은 전기 의료 기기의 평가를 위해 일반적으로 허용되는 시험 방법, 시험 한계 및 시험 수준을 제공하며, 60601-1 시리즈 표준규격에 따라 모든 제품 안전 테스트를 제공합니다.<br><br>
                            IGC 시험소는 전기 의료 기기의 IEC/EN 60601 안전 표준 규격에 따라 시험을 수행하고 전기 의료 기기에 대한 제품 안전 인증을 얻는 데 사용할 수 있는 IEC 국제 표준에 대한 시험 성적서를 발행합니다.
                        </p>
					</dd>
				</dl>	
			</li>
           
            <li><!-- content 02 -->
			    <dl>
					<dt class="img_area">
						<img src="./images/clinicaltest_electricsafety_02.jpg" alt="저전압 지침(LVD)란?">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">저전압 지침(LVD)란?</h3>
						<p style="text-align: justify">
                            저전압지침(LVD, Low Voltage Directive)은 AC 50~1000V, DC 75~1500V 사이의 전압 규격으로 설계 및 사용되는 전기장비를 대상으로 합니다.<br><br>
                            대부분의 다른 EU 지침과 마찬가지로 저전압 지침은 공표된 기술 표준에 명기된 상세한 기술 사양과 함께 전기 안전 (필수 요구사항)에 대한 폭넓은 목표를 제시합니다. 제조업체는 지침의 핵심 요구 사항 및 관련 표준의 기술 사양의 준수 여부를 시험하고 적합성 선언을 통해 적합성 준수를 입증하고 제품에 CE 마크를 부착할 수 있습니다.<br><br>
                            전기제품 인증분야에서 위험 요소를 사전에 시험 및 검사함으로써 안전성을 확인하고 보증하기 위한 적용 요구사항으로 취급되는 안전규격은 통상적으로 Electrical Safety를 의미합니다. 이것은 예측 또는 예측하지 못한 상황에서 발생할 수 있는 위험요소(Hazard)로부터 인체 및 재산상의 상해나 손실을 예방하기 위한 것입니다.<br><br>
                            의료기기와 같은 특정 범주의 전기 제품 및 완제품에 사용되는 전기 부품은 저전압 지침의 범위에서 제외됩니다.<br><br>
                            2014년 2월 저전압 지침의 개정판 2014/35/EU가 공표되어 2016년 4월부터 전기 제품에 강제적으로 적용되고 있습니다. IGC 시험소는 2014/35/EU 지침에 따라 시험 성적서를 발행하고 있습니다.
                        </p>
					</dd>
				</dl>	
            </li>
            
            <li><!-- content 03 -->
			    <dl>
					<dt class="img_area">
						<img src="./images/clinicaltest_electricsafety_04.jpg" alt="전자파 적합성 지침(EMC)란?">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">전자파 적합성 지침(EMC)란?</h3>
						<p style="text-align: justify">
                            전자파 적합성 지침(EMC, Electromagnetic Compatibility Directive)은 전자기기의 전자파 적합성을 평가하기 위한 지침으로 전자파를 발생시킬 수 있는 장비를 대상으로 외부로부터 전자기파 간섭에 대한 내성시험을 통해 전자기 장해가 적정 수준인지에 대하여 시험하여 적합성을 인증하는 것입니다.<br><br>
                            산업이 발전함에 따라 전기전자 장비의 사용이 급증하게 되었으며 이로 인해 기기들이 제한된 공간내에서 사용되면서 전자파로 인한 오작동 및 시스템의 기능에 문제가 생길 가능성이 높아지게 되었습니다. 이에 따라 기기가 주변환경에 대한 전자파 간섭의 허용 범위를 준수하는지와 함께 다른 제품에 의해 전자파의 영향을 받지 않는지를 시험하는 것이 필수적 사항이 되었습니다.<br><br>
                            2014년 2월 전자파 적합성 지침 2014/30/EU가 공표되어 2016년 4월부터 전기 제품에 강제적으로 적용되고 있습니다. IGC 시험소는 2014/30/EU 지침에 따라 시험 성적서를 발행하고 있습니다.
                        </p>
					</dd>
				</dl>	
            </li>
            
            <li><!-- content 04 -->
			    <dl>
					<dt class="img_area">
						<img src="./images/clinicaltest_electricsafety_03.jpg" alt="IGC인증원의 역량">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">IGC인증원의 역량</h3>
						<p style="text-align: justify">
                            IGC의 시험소는 인증에 필요한 시험부터 전기/전자제품에 대한 다양한 인증 취득까지의 과정을 One-Stop 서비스로 제공하고 있습니다.<br><br>
                            IGC의 축적된 노하우와 경쟁력 있는 전문가는 고객사를 위한 맞춤형 가이드를 제시함으로써 고객사 제품의 시장 진입과 수익률 극대화를 위해 노력하고 있습니다.
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
                <li><p><em><strong>01</strong></em><span>CE LVD/EMC 인증</span></p></li>
                <li><p><em><strong>02</strong></em><span>유라시아 인증</span></p></li>
                <li><p><em><strong>03</strong></em><span>제품 등록 (CPNP, FDA)</span></p></li>
                <li><p><em><strong>04</strong></em><span>시험 및 인증을 위한 기술 지원 서비스 제공</span></p></li>
            </ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
      
</div> <!----------++++++++ content_wrap 종료 +++++++++----------------->



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>