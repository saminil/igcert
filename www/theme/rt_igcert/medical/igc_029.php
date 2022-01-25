<?php
	include_once('./_common.php');
$g5['title'] = '시험/화학 분석';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .tit_img { width: 50%;margin: 0 auto 70px;text-align: center }
    
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
    
    .content li .txt_area .con_sub_tt { display: block;font-size: 1.1rem;font-weight: 500;margin: 0 0 10px }/* 텍스트 영역 부제목 */
    
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
        .tit_img { width: 90%;margin: 0 auto 50px }
        
        .content li .img_area { width: 90%;margin: 50px auto 0 }/* 이미지 크기/여백 조정 */
        
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */
        
    }

    
    /* ============= 상세페이지 반응형 종료 ============= */

</style>


<div class="content_wrap">
   
    <section class="business_type5" class="area">
        <h1 class="tit_cer fc_pointer">식품 영양분석</h1>
        <p class="outline">
            2016년 5월 미국 FDA는 최종 연방 법안 ‘식품 라벨링: 식품 및 건강보조식품의 영양성분표 개정안(Food Labeling: Revision of the Nutrition and Supplement Facts Labels)’을 발표하면서, 소비자들의 건강한 식습관을 돕기 위해 업데이트된 영양정보를 식품 및 건강보조식품의 영양성분표에 표기하게끔 라벨 규정을 수정했습니다.<br><br>
            제품에 영양성분표 라벨링을 해야하는 식품 및 건강보조식품 제조회사는 모두 관련 법규를 준수해야 하는 대상입니다.
        </p>
        
        <div class="tit_img">
            <img src="images/clinicaltest_NutritionandSupplementFacts_01.jpg" alt="식품 영양분석">
        </div>
        
        <p class="outline">
            미국 시장 진출을 위한 식품 시험중 영양 분석 시험의 경우 AOAC 검증 방법이 있을 경우 AOAC 방법의 사용을 요구하고 있습니다.<br><br>
            AOAC, BAM등의 시험법으로 ISO/IEC 17025 인정받은 IGCLAB의 식품 영양분석 시험을 통해 미국에서 요구하는 14대 영양성분에 대한 시험 및 검증이 가능하며 영양 함량 정보가 포함된 샘플 라벨을 제공받을 수 있습니다.
        </p>
        
        <ul class="content">
			<li><!-- content 01 -->
			    <dl>
                    <dt class="img_area">
                        <img src="./images/clinicaltest_NutritionandSupplementFacts_02.jpg" alt="식품 시험소 소개 (TL-832)">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">식품 시험소 소개 (TL-832)</h3>
                        <p style="text-align:justify">
                            IGC 식품 시험소는 미국 IAS로부터 ISO ISO/IEC 17025 인정을 취득한 시험기관입니다.<br><br>
                            제품 및 생산 현장의 시험 관련 법률적 요구사항 준수를 기본으로 품질 및 지속적인 요구사항을 추가적으로 만족하는 국제 공인 시험성적서 발행을 품질방침으로 하여 미국 수출 국내 기업의 시장 진출을 위한 영양성분, 화학적, 미생물학적 시험 성적서를 발급합니다.
                        </p>

                    </dd>
                </dl>
            </li>
            
            <li><!-- content 02 -->
			    <dl>
                    <dt class="img_area">
                        <img src="./images/clinicaltest_NutritionandSupplementFacts_03.jpg" alt="식품 시험소 소개 (TL-832)">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">시험 항목 – 영양성분 검사 / 중금속 검사</h3>
                        <ul class="list_st">
                            <li><span class="bullet"></span>Calories / Calories from fat / Carbohydrates / Other carbohydrates</li>
                            <li><span class="bullet"></span>Fat (crude) / Total fat-sum of fatty acids</li>
                            <li><span class="bullet"></span>Dietary Fiber (include soluble, insoluble fiber)</li>
                            <li><span class="bullet"></span>Sugar – Total</li>
                            <li><span class="bullet"></span>Added sugar</li>
                            <li><span class="bullet"></span>Cholesterol</li>
                            <li><span class="bullet"></span>Moisture</li>
                            <li><span class="bullet"></span>Protein (crude)</li>
                            <li><span class="bullet"></span>Vitamin A IU</li>
                            <li><span class="bullet"></span>Vitamin-B1 Thiamin</li>
                            <li><span class="bullet"></span>Vitamin-B2 Riboflavin</li>
                            <li><span class="bullet"></span>Vitamin-B3 Niacin</li>
                            <li><span class="bullet"></span>Vitamin-B5 Pantothenic Acid</li>
                            <li><span class="bullet"></span>Vitamin-B6</li>
                            <li><span class="bullet"></span>Vitamin C</li>
                            <li><span class="bullet"></span>Vitamin D IU</li>
                            <li><span class="bullet"></span>Vitamin E IU</li>
                            <li><span class="bullet"></span>Total fat-sum of fatty acids</li>
                            <li><span class="bullet"></span>Calcium / Copper / Iron / Magnesium / Phosphorus / Potassium / sodium / zinc</li>
                            <li><span class="bullet"></span>Selenium / Cadmium / Arsenic / Lead</li>
                        </ul>
                    </dd>
                </dl>
            </li>
            
            <li><!-- content 03 -->
			    <dl>
                    <dt class="img_area">
                        <img src="images/clinicaltest_Nutrition&analysis_01.jpg" alt="FDA 영양성분표 개정 양식">
                        <span style="display:block;text-align:center;">FDA 영양성분표 개정 양식</span>
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">미국 식품 영양성분 표시규정</h3>
                        <p style="text-align:justify">
                            1993년 이후 23년만에 새롭게 영양분석표 양식이 변경되었습니다.<br><br>
                            식품 제조업체들에 대한 의무 적용은 2018년 7월 26일 시작되지만 연 매출 1000만 달러 미만 업체는 이보다 1년 후부터 의무 적용됩니다.<br><br>
                            새롭게 변경된 영양분석표 양식의 가장 두드러진 특징은 칼로리 함량, 1인분의 양(serving size), 몇 인분용 포장인지를 크고 굵게 표기해 소비자들이 잘 볼 수 있도록 한 점입니다.<br><br>
                            그 이외에 자연적 당분 외에 추가된 설탕(added sugars) 함량과 이 성분이 하루 권장 칼로리 섭취량(2000칼로리)에서 차지하는 비율도 별도 항목으로 명시하도록 하였습니다.<br><br>
                            FDA는 추가 설탕 섭취로 인한 칼로리가 전체 섭취 칼로리의 10%를 넘길 경우 하루 섭취 허용 기준인 2000칼로리 이하를 유지하기 어려운 것으로 파악했는데, 그 이유는 연구 결과 미국인의 평균 하루 섭취 칼로리의 약 13%를 추가 설탕에서 섭취하는 것으로 나타났기 때문입니다.
                        </p>

                    </dd>
                </dl>
                <dl>
                    <dt class="img_area">
                        <img src="images/clinicaltest_Nutrition&analysis_02.jpg" alt="FDA 영양성분표 개정 전 후 비교">
                        <span style="display:block;text-align:center;">FDA 영양성분표 개정 전 후 비교</span>
                    </dt>
                    <dd class="txt_area">
                        <p style="text-align:justify">
                            반면 현재 지방 섭취 자체보다 칼로리 섭취량과 당분 섭취량이 비만과 심장병 등 만성질환의 주 원인이라는 최근 연구결과들을 적극 반영하여 레이블에서 강조되고 있는 지방 성분 함량 표시의 비중은 줄었습니다. 또한 '지방 섭취에 따른 칼로리(calories from fat)' 항목은 제외시키고 지금처럼 총 지방, 포화지방(saturated fat), 트랜스 지방(trans fat)을 구분해서 표시하도록 하였습니다.<br><br>
                            또 새 영양성분표에는 부족하면 만성질환 발병 위험이 커지는 비타민D와 포타슘(Potassium) 함량이 표기되는 대신 비타민A와 비타민C 함량 표기는 없어집니다. FDA는 미국인들의 비타민D와 포타슘 섭취량이 부족한 대신 비타민A, C 섭취가 부족한 경우는 드물기 때문이라고 설명했습니다. 다만 제조업체가 자율적으로 비타민A, C 함량 등을 표시할 수는 있고, 칼슘과 철분 함량은 현행과 같이 표시됩니다.<br><br>
                            영양성분표 규정은 포장된 거의 모든 식품에 적용되지만 농무부 관할인 일부 육류 및 가금류 등은 제외됩니다.
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