<?php
	include_once('./_common.php');
$g5['title'] = '시험/의료기기';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
		<h1 class="tit_cer fc_pointer">의료기기 시험</h1>
		<!--<h2 class="tit_cer fc_pointer">의료기기 시험</h2>	-->	
		<p class="outline">
            모든 의료기기는 전기안전 시험을 거쳐야 합니다. 보통 많은 제조업체/설계자들이 1등급 품목, 즉 위험 등급이 낮은 제품들은 허가를 받지 않아도 되기 때문에 전기안전 규정도 지키지 않아도 된다고 잘못 생각하기 쉽지만 1등급 제품들도 전기안전 요구사항을 만족하여야 합니다.<br><br>
            대부분의 사용자들은 제품 출시 이전에 전기안전 시험을 의무화하고 있는 것이 좋은 일이라고 생각하고 있습니다. 바로 그 전기안전 시험의 표준이 되는 규격이 우리가 잘 아는 IEC60601-1입니다. 이제 전 세계 모든 국가의 규제당국이 IEC60601-1 표준의 제3판 규격에 의하여 적합성을 입증하도록 요구하고 있습니다. 중요한 점은 제3판 규격의 경우 위험 개념이 추가됨으로써 과거와 같이 시험방법에 따라 수행하기만 하면 적부가 확인되는 시험이 더 이상 아니라는 것입니다.
		</p>

		<ul class="content">
			<li><!-- content 01 -->
			    <dl>
					<dt class="img_area">
						<img src="./images/clinicaltest_medicalclinical_01.jpg" alt="IEC 60601-1 안전 테스트">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">IEC 60601-1 안전 테스트</h3>
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
						<img src="./images/clinicaltest_medicalclinical_02.jpg" alt="IGC 시험소의 역량">
					</dt>
					<dd class="txt_area">
                        <h3 class="con_tit">IGC 시험소의 역량</h3>
                        <div class="con_txt">
                            <ul class="list_st">
                                <li><span class="bullet"></span>IGC는 미국의 인정기구인 IAS로부터 경영시스템 분야의 인정을 받아 경영시스템 인증 서비스를 제공하고 있습니다.</li>
                                <li><span class="bullet"></span>IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                <li><span class="bullet"></span>IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                            </ul>
                        </div>
						<p style="text-align:justify">
                            저희 IGC는 고객감동의 가치아래 <sapn style="fot-weight:bold;color:red;">17년 이상의 기술</sapn>, Know-How 및 풍부한 인증 경험을 바탕으로 고객사의 인증획득에 필요한 시험검사 업무를 지원하고자 시험소를 운영하고 있습니다. 의료기기, 전기전자 제품 및 기계류에 대한 시험업무를 시작으로 지속적인 발전을 달성하여 식품에 대한 시험 업무로 영역을 확대하였습니다.<br><br>
                            앞으로도 저희 IGC는 신뢰할 수 있는 전문적인 시험 및 인증 기관으로서, 도전과 연구 개발하는 자세로 변화에 능동적으로 대응하며 초심을 잃지 않고 노력하여 고객사의 신뢰와 믿음으로 함께 성장해가도록 노력하겠습니다.
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