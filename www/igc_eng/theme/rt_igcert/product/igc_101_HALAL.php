<?php
	include_once('./_common.php');
$g5['title'] = 'HALAL Certification';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #404953 }/* 상세페이지 포인트 컬러 */
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
    .content li .txt_area .con_txt { text-align: justify;margin: 0 0 50px }/* 텍스트 영역 내용 */
    .content li .txt_area .con_txt_2 { margin: 0 0 30px }/* 텍스트 영역 내용 스타일 2 */
    .content li .txt_area .con_txt_2:last-child { margin: 0 }
    .content li .txt_area .con_txt_3 { margin: 0 0 50px;border-bottom: 1px solid #ddd }/* 텍스트 영역 내용 스타일 3 */
    .content li .txt_area .con_txt_3:last-child { margin: 0;border: none }
    
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
		<h1 class="tit_num">Introduction to Halal Product Certification</h1>
		<h2 class="tit_cer fc_pointer">HALAL</h2>
		<div class="outline">
            <ul class="list_st">
                <li><span class="bullet"></span>Halal is an Arabic word that means “permissible” or “lawful”. Halal certification is a certification scheme and certification mark that can be assigned to products or services produced in accordance with Islamic Sharia law for use by Muslims.</li>
                <li><span class="bullet"></span>Halal products mean compliance with the requirements for raw materials used in the manufacture of halal products, as well as for work, production facilities, tools used by employees, work clothes and labels.</li>
                <li><span class="bullet"></span>The recognition that halal products are clean and safe is growing, which is why many companies are receiving halal certifications for food, cosmetics, pharmaceuticals and beverages.</li>
                <li><span class="bullet"></span>Companies can export halal products to Islamic countries after their qualification has been verified after submitting documents that meet Halal's requirements and standards, and audit.</li>
            </ul>
        </div>
        
        <ul class="content">
            <li><!-- content 01 -->
                <dl>
                    <dt class="img_area">
                        <img src="./images/product_HALAL_02.jpg" alt="Products classification">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">Products classification</h3>
                        <p class="con_txt">
                            Products are classified as Halal, Haram, or Mashbooh.
                        </p>
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">&#10020; </span>Halal
                            </span>
                            <p>
                                Halal is anything that is “allowed” for Muslims. Typical halal includes foods such as cattle, sheep, chicken, and duck etc.
                            </p>
                        </div>
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">&#10020; </span>Haram
                            </span>
                            <p>
                                Haram is the opposite of Halal and has the meaning of "prohibited." Typical Haram foods include pig, blood, and alcohol etc.
                            </p>
                        </div>
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">&#10020; </span>Mashbooh
                            </span>
                            <p>
                                Mashbooh refers to products with ambiguous or suspicious ingredients that are hard to classify by standards whether they’re Halal or Haram. The typical mash part is cigarette.
                            </p>
                        </div>
                    </dd>
                </dl>
            </li>
            
            <li><!-- content 02 -->
                <dl>
                    <dt class="img_area">
                        <img src="./images/product_HALAL_03.jpg" alt="Halal Certified Product Requirements">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">Halal Certified Product Requirements</h3>
                        <ul class="list_st">
                            <li><span class="bullet"></span>Selection of proper products for Halal certification</li>
                            <li><span class="bullet"></span>Raw materials used in the manufacturing process and the supplier of raw materials</li>
                            <li><span class="bullet"></span>Product production process review</li>
                            <li><span class="bullet"></span>Work environment or equipment / facility safety and hygiene management assessment</li>
                            <li><span class="bullet"></span>Appointment of members of the organization's internal halal team and training in Islamic halal rules and requirements</li>
                            <li><span class="bullet"></span>Review the labeling of the packaging</li>
                        </ul>
                    </dd>
                </dl>
            </li>
            
            <li><!-- content 03 -->
                <dl>
                    <dt></dt>
                    <dd class="txt_area" style="width:90%;margin:0 auto">
                        <h3 class="con_tit" style="text-align:center">Certification Process</h3>
                        <div style="width:100%;margin: 0 auto 50px">
                            <div style="text-align:center">
                                <img src="./images/Process_halal_en.png" alt="Certification Process">
                            </div>
                        </div>
                    </dd>
                </dl>
            </li>
            
            <li><!-- content 04 -->
                <dl>
                    <dt class="img_area">
                        <img src="./images/product_HALAL_04.jpg" alt="Documents to be submitted">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">Documents to be submitted</h3>
                        <div class="con_txt">
                            <ul class="list_st">
                                <li><span class="number">1. </span>Application</li>
                                <li><span class="number">2. </span>Product questionnaire (ingredients/raw materials)</li>
                                <li><span class="number">3. </span>Certificate of Business Registration</li>
                                <li><span class="number">4. </span>Company profile</li>
                                <li><span class="number">5. </span>Certification of Manufacture Registration</li>
                                <li><span class="number">6. </span>Product manufacturing process chart</li>
                                <li><span class="number">7. </span>Map of premise/factory location</li>
                                <li><span class="number">8. </span>Process flow chart, production procedure</li>
                                <li><span class="number">9. </span>Halal certificate or specification for major ingredients (raw materials)</li>
                                <li><span class="number">10. </span>Other documents such as HACCP, ISO, GHP, GMP (must have for cosmetic product), TQM etc. (if applicable)</li>
                                <li><span class="number">11. </span>Design and label of products</li>
                            </ul>
                        </div>
                        <p>※ Additional documents may be required depending on the product.</p>
                    </dd>
                </dl>
            </li>
            
            <li><!-- content 05 -->
                <dl>
                    <dt class="img_area">
                        <img src="./images/product_HALAL_05.jpg" alt="IGC’s Competency">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">IGC’s Competency</h3>
                        <ul class="list_st">
                            <li><span class="bullet"></span>IGC provides Halal certification services in cooperation with international Halal Certification Bodies with JAKIM (Malaysia) and Eurasian certification schemes.</li>
                            <li><span class="bullet"></span>IGC provides professional services from applying for Halal certification to training of the internal halal group, auditing and issuing certificates with the involvement of professional staff.</li>
                            <li><span class="bullet"></span>IGC promises to actively work to support the global operation of the businesses, based on the latest knowledge of Sharia legal requirements in the Muslim markets of countries around the world.</li>
                        </ul>
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
                <li><p><em><strong>01</strong></em><span>System certification (ISO 22000, FSSC 22000, FDA FSMA, Global HACCP)</span></p></li>
                <li><p><em><strong>02</strong></em><span>Product certification (Vegan certification, HALAL certification, Eurasian certification, Hygiene registration, FDA registration/approval)</span></p></li>
                <li><p><em><strong>03</strong></em><span>FDA (Test, FSMA certification, registration/approval)</span></p></li>
                <li><p><em><strong>04</strong></em><span>Audit qualification certification</span></p></li>
                <li><p><em><strong>05</strong></em><span>Training for professional human resources</span></p></li>
            </ul>
        </div>
    </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------>
    
</div>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
