<?php
	include_once('./_common.php');
$g5['title'] = 'Biological test';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #11A6A6 }/* 상세페이지 포인트 컬러 */
    .point_blk { display: block;color: #111;font-weight: 500;margin: 0 0 10px }/* 상세페이지 폰트스타일 1 */
	.content_wrap { width: 100%;max-width: 1200px;margin: 0 auto;font-size: 1rem;font-weight: 400;line-height: 1.6 }/* 컨텐츠 중간 그리드 지정 */
    .content_wrap .business_type5 { margin: 0 0 100px }
    
    /* ============= 탭메뉴 영역 ============= */
    
    .tab01 { margin: 0 0 45px }
    .tab01 ul { display: inline-block;text-align: center }
    .tab01 ul li { float: left;margin: 0 0 10px }
    .tab01 ul li a { font-size: 1rem;font-weight: 300;color: #999;background: #f0f0f0;margin: 0 5px;padding: 12px 25px;border: 0 }/* 탭메뉴 버튼 스타일 */
    
    .tab01 ul li:hover a { background: #ddd }/* 마우스오버시 버튼 스타일 */
    
    .tab01 ul li.on a { color: #fff;background: dodgerblue }/* active 상태의 버튼 스타일 */
    
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

    /* 리스트 스타일 생성 */
    .list_st li { position: relative;padding: 0 0 4px 30px }
    .list_st li .number { position: absolute;display: inline-block;width: 5px;height: 5px;top: 0;left: 0}/* 리스트 스타일 1 */
    .list_st li .bullet { content: '';position: absolute;display: inline-block;width: 5px;height: 5px;background: #222;border-radius: 50%;top: 10px;left: 0}/* 리스트 스타일 2

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

    <!--+++ 20.05.19 탭메뉴/ 시험 /식품영양 분석 시작 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">Food Microorganism Test</a></li>
			<li><a href="javascript:;">Sanitary test</a></li>
		</ul>
	</div>
	<!--+++ 20.05.19 탭메뉴/ 시험 /식품영양 분석 종료 +++-->
 
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.19 탭컨텐츠 영역 시작 +++-->
	
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	    <article style="display:block">
            <section class="business_type5" class="area">
                <h1 class="tit_cer fc_pointer">Food Microorganism Test</h1>
                <p class="outline">
                    Because the FDA's food safety requirements vary from food to food, manufacturers should carefully identify the FDA's requirements and analyze hazards. To analyze these hazards, you need to go through the steps to identify biological, chemical, and physical hazards.<br><br>
                    Through IGC's food microbiology tests, domestic and foreign food companies can analyze harmful factors and establish an effective food safety system based on them.
                </p>
                
                <div class="tit_img">
                    <img src="images/clinicaltest_Nutrition&analysis_07.jpg" alt="biological Test item" style="max-width: 100%;height:auto;">
                    <span style="display:block;text-align:center;">biological Test item</span>
                </div>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
						<dl>
							<dt class="img_area">
								<img src="./images/clinicaltest_Nutrition&analysis_04.jpg" alt="ISO/IEC 17025 accreditation testing body">
							</dt>
							<dd class="txt_area">
							    <h3 class="con_tit">ISO/IEC 17025 accreditation testing body</h3>
								<p class="con_txt">
								    IAS, a U.S. testing laboratory accreditation body, has published a Guideline that refers to the requirements for food testing laboratory accreditation, which requests the use of U.S. national standards and international authorized standards for the testing standards used to accredited and obtain an accreditation in accordance with ISO/IEC 17025. AOAC, BAM, etc. are used for this.<br><br>
                                    IGC's Food Testing Laboratory has achieved ISO/IEC 17025 accreditation based on AOAC and BAM, providing a more reliable testing service.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>E. coli</li>
                                    <li><span class="bullet"></span>E. coli / Total Coliform Counts</li>
                                    <li><span class="bullet"></span>Salmonella Sp.</li>
                                    <li><span class="bullet"></span>Listeria Sp. / Listeria monocytogenes</li>
                                    <li><span class="bullet"></span>Staphylococcus aureus</li>
                                    <li><span class="bullet"></span>Aerobic Plate Counts</li>
                                    <li><span class="bullet"></span>Yeast and Mold</li>
                                    <li><span class="bullet"></span>Bacillus cereus</li>
                                </ul>
							</dd>
						</dl>
					</li>
					
					<li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/clinicaltest_Nutrition&analysis_05.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <ul class="list_st">
                                    <li>
                                        <span class="bullet"></span>IGC operates a testing laboratory to support testing and inspection work required for obtaining certification from customers.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>Starting with testing medical devices, electrical and electron products and machinery, the company has expanded its scope to test work about food products by achieving continuous development.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>IGC food testing laboratories, which obtained ISO/IEC 17025 accreditation from IAS, provide food safety and production site safety testing services for FDA FSMA third party certification according to internationally accredited testing methods AOAC and BAM.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>A Report issued by IGC LAB are those of testing bodies accredited by IAS, the accreditation body for which ilac and MRA have been concluded, and IGC LAB's reports can be used anywhere in the world.
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
                    <p>Related Services from IGC</p>
                </h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>Eurasia Certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>The Americas Product Certification</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Provide technical support services for testing and certification</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>	
        </article><!-------+++++++ / 시험/식품영양 분석 종료 /++++++++++-------------->  
   
        <!-------++++++ / 시험 > 위생테스트(Sanitation test) [ Insert ] 시작 / ++++++-------> 
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_cer fc_pointer">Sanitary test</h1>

                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/clinicaltest_Sanitationtest_01.jpg" alt="Sanitary test">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Sanitary Test Outline</h3>
                                <p style="text-align:justify">
                                    Foreign companies exporting food to the United States must demonstrate that they operate food safety systems in accordance with the requirements of the FDA Food Safety Modernization Act (FSMA). This includes the requirement that 'Food production facilities that wish to be FSMA certified should conduct on-site sanitary tests at FDA or ISO/IEC 17025 accredited testing laboratories'.<br><br>
                                    The U.S. FDA inspection team checks the methods, microbiological inspection methods, frequency, etc. of the environment swab test when conducting due diligence, so exporters should conduct sanitary tests. Through sanitary tests provided by IGC LAB, an ISO/IEC 17025 accreditation testing laboratory, can be prepared for this and demonstrate compliance with U.S. FDA regulations.
                                </p>
                            </dd>
                        </dl>
                    </li>

                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/clinicaltest_Sanitationtest_02.jpg" alt="Importance of Sanitary test">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Importance of Sanitary test</h3>
                                <p style="text-align:justify">
                                    The Food Modern Eye Telephone Act (FSMA) in force in earnest, which was enacted in the U.S. in 2011, emphasizes the management of biological hazards especially, among those that affect food. FSMA applies HARPC (HARPC) to all food manufacturers that to be subject.<br><br>
                                    To identify and prevent potential risks to food supply, the HARPC takes a different approach from the existing GMP and HACCP, particularly highlighting the management of biological hazards in the food manufacturing process.<br><br>
                                    In addition, FSMA preventive management requirements stipulate allergy-causing substances management and sanitary control, which requires thorough preparation for sanitary testing.<br><br>
                                    These requirements can be met through IGC-supplied sanitary tests.<br><br>
                                    IGC supports customized services about requirement for food facilities based on its experience in providing various certifications and testing services and expertise.
                                </p>
                            </dd>
                        </dl>
                    </li>

                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/clinicaltest_Sanitationtest_03.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <ul class="list_st">
                                    <li>
                                        <span class="bullet"></span>IGC LAB supports a variety of services to help customers enter into overseas markets.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>A report issued by IGC LAB is a report of a testing body accredited from IAS, an accreditation body for which ILAC and MRA are established, and may be used anywhere in the world.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>IGC LAB supports a variety of services to help customers enter into overseas markets.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>IGC certification authority may utilize IGC-issued test reports when conducting FSMA third-party certification or FSVP certification.
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
                    <p>Related Services from IGC</p>
                </h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>Eurasia Certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>The Americas Product Certification</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Provide technical support services for testing and certification</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>	
           
        </article><!-----+++++ / 심사원인증 > Sanitation test 종료 / +++++-----> 
    </div><!-----+++++ / tab_con 종료 / +++++----->
</div><!-----+++++ / content_wrap 종료 / +++++----->




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>