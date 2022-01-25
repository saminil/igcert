<?php
	include_once('./_common.php');
$g5['title'] = 'Machinary';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
        
        .content li .img_area { width: 90%;margin: 50px auto 0 }/* 이미지 크기/여백 조정 */
        
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */
        
    }

    
    /* ============= 상세페이지 반응형 종료 ============= */

</style>


<div class="content_wrap">

    <section class="business_type5" class="area">
		<h1 class="tit_cer fc_pointer">Machine Safety | Test</h1>
        <p class="outline">
            Many types of products require mechanical safety testing to be exported or imported to other major markets such as the European Union, the United States, etc. Mechanical breakdowns can cause injury or death to the user, so the importance has been highlighted for ensuring the user's safety.<br><br>
            Machinery manufacturers shall conduct a risk assessment together to determine the health and safety requirements applicable to the machinery. It is important to reduce risk and eliminate risk factors through protective and preventive measures.<br><br>
            Mechanical safety tests include an assessment of the shape and design of the product, whether it could cause injury to the user, and whether the user's body parts have been trapped, tightened or dislodged.<br><br>
            It also structurally evaluates the strength and durability of the product in its general use environment, and includes testing of specific product characteristics. Safety testing should also be included for key components such as screws and hinges used in finished products.
        </p>
        
        <ul class="content">
            <li><!-- content 01 -->
				<dl>
					<dt></dt>
					<dd class="txt_area" style="width:90%;margin:0 auto">
						<h3 class="con_tit" style="text-align:center">Introduction of IGC’s Testing Laboratory</h3>
                        <p class="con_txt">IGC's Testing laboratories are ISO/IEC 17025-accredited Testing laboratories by the U.S. accreditation body, IAS, and are issuing machinery test and test reports.</p>
                        <div style="margin: 0 auto 50px">
                            <div style="text-align:center">
                                <img src="images/clinicaltest_machinery_01_1.png" alt="Introduction of IGC’s Testing Laboratory">
                                <span style="display:block;text-align:center;">For more information, please contact IGC’s Testing laboratory and we will help you with your answer.</span>
                            </div>
                        </div>
					</dd>
				</dl>			
			</li>
     
            <li><!-- content 02 -->
				<dl>
				    <dt class="img_area">
						<img src="images/clinicaltest_machinery_02.jpg" alt="All-purpose material tester UTM">
					</dt>
					<dd class="txt_area">
				        <h3 class="con_tit">All-purpose material tester UTM</h3>
						<p class="con_txt">
                            Most commonly used for static testing in tensile or compression mode, also known as push-pull tester. Tensile, compression, shear, flexion, scale off, tear, cycle, and bending tests can be performed.
                        </p>
                        <ul class="list_st">
					        <li><span class="bullet"></span>Measurement items: tensile, compression, banding strength, flexural strength, breaking strength, etc.</li>
					        <li><span class="bullet"></span>Capacity (N): 10KN (1 ton)</li>
					        <li><span class="bullet"></span>Resolution: 1/100,000</li>
					        <li><span class="bullet"></span>Test speed: 1~500mm/min</li>
                        </ul>
					</dd>
				</dl>			
			</li>
      
            <li><!-- content 03 -->
				<dl>
				    <dt class="img_area">
						<img src="images/clinicaltest_machinery_03.jpg" alt="Thermal Shock Tester">
					</dt>
					<dd class="txt_area">
				        <h3 class="con_tit">Thermal Shock Tester</h3>
						<p class="con_txt">
                            The thermal shock test is a test that assesses how the product is affected by sudden temperature changes. The test starts at room temperature and repeats the prescribed number of cycles, which are exposed for a relatively short period of time at very low (or high) temperatures and very high (or low) temperatures before returning to room temperature.<br><br>
                            After finishing the last cycle, perform a visual inspection on Case, Lead/Terminal, etc. or check the normal condition of marking to magnify. If it is difficult to verify or if damage is found in Case, Terminal, etc., it is judged as Failure.
                        </p>
                        <ul class="list_st">
					        <li><span class="bullet"></span>Equipment specification</li>
					        <li>&nbsp; &nbsp; - Sample Basket: 350x350x350mm</li>
					        <li>&nbsp; &nbsp; - Temp Tange: -40℃ ~ 125℃</li>
					        <li><span class="bullet"></span>Application specification</li>
                            <li>&nbsp; &nbsp; - IEC 60068 2-14 Test N: Change of temperature</li>
                        </ul>
					</dd>
				</dl>			
			</li>
      
            <li><!-- content 04 -->
				<dl>
				    <dt class="img_area">
						<img src="images/clinicaltest_machinery_04.jpg" alt="Thermo-hygrostat">
					</dt>
					<dd class="txt_area">
				        <h3 class="con_tit">Thermo-hygrostat</h3>
						<p class="con_txt">
                            Equipment that can check durability of parts and equipment in high temperature and high humidity environment.
                        </p>
                        <ul class="list_st">
					        <li><span class="bullet"></span>Thermo-hygrostat specifications</li>
					        <li>&nbsp; &nbsp; - Temperature: -40°C to 150°C</li>
					        <li>&nbsp; &nbsp; - Humidity: 30 to 98%</li>
					        <li>&nbsp; &nbsp; - Chamber Size: 500x500x500mm</li>
					        <li><span class="bullet"></span>Application specification</li>
                            <li>&nbsp; &nbsp; - IEC 60068 2-78 (Damp Heat Test)</li>
                        </ul>
					</dd>
				</dl>			
			</li>
      
            <li><!-- content 05 -->
				<dl>
					<dt></dt>
					<dd class="txt_area" style="width:90%;margin:0 auto">
						<h3 class="con_tit" style="text-align:center">CE Machinery Directive(2006/42/EEC)</h3>
                        <div class="con_txt_2">
                            <span class="con_sub_tt fc_pointer">1. Composition of CE Machinery Directive (2006/42/EEC)</span>
                            <ul class="list_st">
                                <li><span class="bullet"></span>Introduction : Guidelines for preparation and general explanations and caution</li>
                                <li><span class="bullet"></span>Text : A provision for the application of guidelines, legal obligations or authority to the Member Countries</li>
                                <li><span class="bullet"></span>Annex I : Essential Health and Safety Requirements for Design and Manufacturing</li>
                                <li><span class="bullet"></span>Annex II : Matters concerning the Declaration of Conformity</li>
                                <li><span class="bullet"></span>Annex III : Matters concerning CE – Marking</li>
                                <li><span class="bullet"></span>Annex IV : List of machinery that must be taken in the EU type test by the Notified Body</li>
                                <li><span class="bullet"></span>Annex V : Declaration of Conformity and Technical Wave</li>
                                <li><span class="bullet"></span>Annex VI : EU Type Test</li>
                                <li><span class="bullet"></span>Annex VII : Notified Body Criteria</li>
                            </ul>
                        </div>
                        <div class="con_txt_2">
                            <div class="con_txt">
                                <span class="con_sub_tt fc_pointer">2. The key requirement of CE Machinery Directive (2006/42/EEC)</span>
                                The CE Machinery Directive (2006/42/EEC) documents whether the machine is being used safely and correctly warns the user if any remaining risks remain, and the documentation requirements that the manufacturer must comply with are in the essential health and safety requirements of Annex I of the MD.<br><br>
                                Required requirements include :
                            </div>
                            <div class="con_txt">
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Principles on safety, design to facilitate handling, ergonomic, control system, protection by mechanical hazards, electrical and other energy temperatures, other risks such as fire and explosion, and noise emissions, common to all types of machines, vibration, radiation and hazardous materials, maintenance, cleaning, and information display and warning.</li>
                                    <li><span class="number">2. </span>Requirements applicable to certain classes of machinery, such as food, cosmetics, and medicines</li>
                                    <li><span class="number">3. </span>Requirements for offsetting the risk of machine mobility</li>
                                    <li><span class="number">4. </span>Requirements to offset the risk of lift operations</li>
                                    <li><span class="number">5. </span>Requirements for underground work machines</li>
                                    <li><span class="number">6. </span>Requirements for mechanical lift personnel</li>
                                </ul>
                            </div>
                            <div class="con_txt">
                                The required preparation documents are as follows :
                            </div>
                            <div class="con_txt">
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Manual : User's Manual, Service Manual (Experts only)</li>
                                    <li><span class="bullet"></span>Parts List (Copy of Certificate for Approval Parts: CoC, AoC, DoC, Type Approval Certificates) </li>
                                    <li><span class="bullet"></span>Catalogs : Finished Products and Major Parts</li>
                                    <li><span class="bullet"></span>Drawings : Products, Assembly Plots, and Major Parts Assembly Plots</li>
                                    <li><span class="bullet"></span>Hydraulic, pneumatic, and Data related electric.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="con_txt_2">
                            <div class="con_txt">
                                <span class="con_sub_tt fc_pointer">3. certification procedure</span>
                                There are four ways as follows :
                            </div>
                            <div class="con_txt">
                                <ul class="list_st">
                                    <li><span class="number">A)</span>High-risk machinery described in Annex 4.<br>Accreditation through the Certified Body (NB)</li>
                                    <li><span class="number">B)</span>General machinery other than Annex 4 (Annex II A)<br>Acquired by self-compliance declaration (affixed a CE mark as proof of conformity with the finished product)</li>
                                    <li><span class="number">C)</span>Declaration of self-compliance with respect to Machine Parts (Annex II B)<br>Acquired by self-compliance declaration (affixed a CE mark as proof of conformity with the finished product)</li>
                                    <li><span class="number">D)</span>Declaration of self-compliance with safety components (Annex II C)<br>Acquired by self-compliance declaration (affixed a CE mark as proof of conformity with the finished product)</li>
                                </ul>
                            </div>
                            <p>※ Note : In the case of B) and C), by writing a self-compliance declaration and storing the relevant technical documents to declare compliance with the specification, but CE marks cannot be affixed to the product or packaging.</p>
                        </div>
					</dd>
				</dl>			
			</li>
       
            <li><!-- content 06 -->
				<dl>
					<dt class="img_area">
						<img src="./images/clinical_06constructionmaterials_01.jpg" alt="IGC’s Competency">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">IGC’s Competency</h3>
						<p style="text-align:justify">
                            IGC’s Testing laboratories have obtained accreditation for their mechanical testing work from the U.S. accreditation body, IAS to provide mechanical safety testing for a wide range of mechanical hazards and to support the customer’s products enter into overseas markets (TL-799).<br><br>
                            IGC's Testing laboratories help manufacturers comply the legal requirements need for enter into the global market.
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