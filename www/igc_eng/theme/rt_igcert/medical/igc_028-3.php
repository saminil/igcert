<?php
	include_once('./_common.php');
$g5['title'] = 'Medical Device';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
        
        .content li .img_area { width: 90%;margin: 50px auto 0 }/* 이미지 크기/여백 조정 */
        
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */
        
    }

    
    /* ============= 상세페이지 반응형 종료 ============= */

</style>


<div class="content_wrap">
   
   <section class="business_type5" class="area">
		<h1 class="tit_cer fc_pointer">Medical Device | Test</h1>
		<!--<h2 class="tit_cer fc_pointer">의료기기 시험</h2>	-->	
		<p class="outline">
            All medical devices must be taken for electrical safety test. Although many designers/ manufacturers are apt to mistakenly believe that first-class items, or products with low risk ratings, do not require permission and therefore do not have to comply with the electrical safety regulations, they must also meet the electrical safety requirements.<br><br>
            Most users think it's a good idea to make it mandatory to electrical safety test before launching the product. The standard for that electrical safety test is IEC 60601-1, which we know very well. Regulators in all countries around the world now require demonstrate suitability by the third edition of the IEC 60601-1 standard.<br><br>
            The important point is that, by adding the concept of risk in the third edition, it is no longer a test that can be found to be suitable by simply performing the test method as in the past.
		</p>

		<ul class="content">
			<li><!-- content 01 -->
			    <dl>
					<dt class="img_area">
						<img src="./images/clinicaltest_medicalclinical_01.jpg" alt="IEC 60601-1 Safety Test">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">IEC 60601-1 Safety Test</h3>
						<p style="text-align: justify">
                            Electrical medical device test is based on product safety requirements to demonstrate basic safety and essential performance, with equipment complying with IEC/EN 60601 safety standards for electronic medical device product approval.<br><br>
                            All medical devices typically require approved laboratory test results and are controlled by strict local approval procedures. With respect to electrical medical devices, these requirements should be documented internationally in accordance with the criteria of IEC 60601 standard specifications.<br><br>
                            Now, IEC 60601-1 3rd edition is the basis for the approval process of electrical medical devices in most regulatory systems around the world. Due to the same requirements as the European Union's EN 60601 standard specification, IEC define a suitability about the Medical Device Directive (MDD) 93/42/EEC.<br><br>
                            Our testing laboratory provides generally accepted testing methods, test limits, and test levels for the evaluation of electrical medical devices in European and international standards, and provides all product safety tests according to the 60601-1 series of standards specification.<br><br>
                            IGC’s testing laboratories issue test reports for IEC international standards that can be used to perform tests in accordance with IEC/EN 60601 Safety Standards for electrical medical devices and obtain product safety certifications for electrical medical devices.
                        </p>
					</dd>
				</dl>	
			</li>
          
            <li><!-- content 02 -->
				<dl>
					<dt class="img_area">
						<img src="./images/clinicaltest_medicalclinical_02.jpg" alt="Capability of IGC’s Testing Laboratory">
					</dt>
					<dd class="txt_area">
                        <h3 class="con_tit">Capability of IGC’s Testing Laboratory</h3>
                        <div class="con_txt">
                            <ul class="list_st">
                                <li><span class="bullet"></span>IGC provides management system certification services with recognition in the field of management systems from the U.S. accreditation body, IAS.</li>
                                <li><span class="bullet"></span>IGC's assessors contribute to the continued development of customers by accurately assessing the suitability of the management system through many years of technical skills and expertise.</li>
                                <li><span class="bullet"></span>IGC has up-to-date knowledge of a various specific range and legal requirements in major markets around the world and provides knowledge and services to support your overall global operations.</li>
                            </ul>
                        </div>
						<p style="text-align:justify">
                            Under the customer impression, based on <sapn style="fot-weight:bold;color:red;">more than 17 years of technology</sapn>, know-how, and extensive certification experience, IGC operates a testing laboratory to support the testing and inspecting work required to obtain certification from customers. Starting with testing work about medical devices, electrical electron and machinery, we have expanded our scope to testing work about food products by achieving continuous development.<br><br>
                            From now on, IGC as a reliable professional testing and certification body, will continue to actively respond to changes with a challenge, research and development attitude and back to the basics and strive to grow together with the trust and belief of our customers.
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