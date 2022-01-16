<?php
	include_once('./_common.php');
$g5['title'] = 'Chemical analysis';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.partner_type2 .con_box ul li { float: left;width: 100%;margin: 10px 0 }/* 리스트 세로배열 */
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
        <h1 class="tit_cer fc_pointer">Food Nutrition Analysis | Test</h1>
        <p class="outline">
            In May 2016, the U.S. FDA published its final federal bill, "Food Labeling: Revision of the Nutrition and Supplement Facts Labels," which amended the labeling rule to mark updated nutritional information in the nutrition components tables of food and dietary supplements to help consumer’s eating habits.<br><br>
            Both food and dietary supplement manufacturers that are required to labeling nutrition components tables in their products are subject to obey the all relevant regulations.
        </p>
        
        <div class="tit_img">
            <img src="images/clinicaltest_NutritionandSupplementFacts_01.jpg" alt="Food Nutrition Analysis">
        </div>
        
        <p class="outline">
            In case of nutrition analysis tests during food testing for enter into the US market, require the use of the AOAC method if there is an AOAC verification method.<br><br>
            Through Food nutrition analysis testing by ISO/IEC 17025 recognized IGC LAB by testing methods such as AOAC and BAM, it allows testing and verification of the 14 major nutrients required by the United States and provided sample labels containing nutritional content information.
        </p>
        
        <ul class="content">
			<li><!-- content 01 -->
			    <dl>
                    <dt class="img_area">
                        <img src="./images/clinicaltest_NutritionandSupplementFacts_02.jpg" alt="Introduction to Food Testing Laboratory (TL-832)">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">Introduction to Food Testing Laboratory (TL-832)</h3>
                        <p style="text-align:justify">
                            IGC Food Testing Laboratory is a testing body that has obtained ISO ISO/IEC 17025 accreditation from U.S. IAS.<br><br>
                            Based on compliance with the legal requirements related to testing at the product and production sites, the quality policy is to issue an international certified test report that additionally satisfies the quality and ongoing requirements, and the nutrition components, chemical and microbiological test report for enter into the market of domestic companies exporting to the United States.
                        </p>
                    </dd>
                </dl>
            </li>
            
            <li><!-- content 02 -->
			    <dl>
                    <dt class="img_area">
                        <img src="./images/clinicaltest_NutritionandSupplementFacts_03.jpg" alt="Test item – nutritive components / heavy metals test">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">Test item – nutritive components / heavy metals test</h3>
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
                        <img src="images/clinicaltest_Nutrition&analysis_01.jpg" alt="FDA Nutritive Components Table Revision form">
                        <span style="display:block;text-align:center;">FDA Nutritive Components Table Revision form</span>
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">U.S. Food nutritive components Indication Regulations</h3>
                        <p style="text-align:justify">
                            The nutrition analysis table form has been changed newly in 23 years since 1993.<br><br>
                            Mandatory application about food manufacturers will begin on July 26, 2018, but companies with annual sales of less than $10 million will be mandatory applied from one year later.<br><br>
                            The most notable feature of the newly changed nutrition analysis table form is the large and bold mark of calorie content, serving size, and how many servings it is packed so that consumers can see it well.<br><br>
                            Besides, the added sugar content in addition to natural sugars and account for the percentage of this ingredient is recommended daily calorie intake (2,000 calories) are specified separately.<br><br>
                            The FDA found it difficult to maintain the daily intake acceptable standards, 2,000 calories or less if the calories from the extra sugar intake exceed 10% of the total calories because results of studies show that about 13% of the calories average daily intake of Americans is from extra sugar.
                        </p>

                    </dd>
                </dl>
                <dl>
                    <dt class="img_area">
                        <img src="images/clinicaltest_Nutrition&analysis_02.jpg" alt="Before and after comparison table of the FDA Nutritive Components">
                        <span style="display:block;text-align:center;">Before and after comparison table of the FDA Nutritive Components</span>
                    </dt>
                    <dd class="txt_area">
                        <p style="text-align:justify">
                            On the other hand, the percentage of fat components content displayed highlighting in the label has decreased, active reflecting recent results of studies that show that calories and sugar intake are the main causes of chronic diseases such as obesity and heart disease rather than fat intake itself now. Also, the 'calories from fat' item was excluded and required to the total fat, saturated fat, and trans-fat were marked separately as now.<br><br>
                            Moreover, instead of marked the vitamin D and Potassium, which increase the risk of occurring chronic disease in new nutritive components table if lacking, marked the vitamin A and vitamin C content is eliminated. The FDA explained that it is rare for Americans to lack vitamin A and C, while lacking intake of vitamin D and potassium. However, manufacturers can autonomously display vitamin A and C contents, and calcium and iron contents are displayed as they are now.<br><br>
                            Nutritive components table regulation applies to almost all packaged foods, but excludes some meat and poultry under the jurisdiction of the Department of Agriculture.
                        </p>

                    </dd>
                </dl>
            </li>
        </ul>
    </section>
    
    <!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
            <p>Related Services from IGC</p>
		</h2>
		<div class="con_box">
            <ul>
                <li><p><em><strong>01</strong></em><span>CE LVD/EMC Certification</span></p></li>
                <li><p><em><strong>02</strong></em><span>Eurasia Certification</span></p></li>
                <li><p><em><strong>03</strong></em><span>Product Registration (CPNP, FDA)</span></p></li>
                <li><p><em><strong>04</strong></em><span>Provide technical support services for testing and certification</span></p></li>
            </ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
   
</div> <!----------++++++++ content_wrap 종료 +++++++++----------------->




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>