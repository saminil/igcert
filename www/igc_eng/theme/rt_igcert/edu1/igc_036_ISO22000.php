<?php
	include_once('./_common.php');
$g5['title'] = 'Food';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #B3AA00 }/* 상세페이지 포인트 컬러 */
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
    <!--+++ 20.05.07 탭메뉴 버튼 시작 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">ISO 22000</a></li>
			<li><a href="javascript:;">FSSC 22000</a></li>
			<li><a href="javascript:;">FDA FSMA</a></li>
			<li><a href="javascript:;">PCQI</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 버튼 종료 +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
    <!--+++ 20.05.07 탭 컨텐츠 영역 +++-->
    
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	    <article style="display: block">
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 22000 Professional training</h1>
	  	        <h2 class="tit_cer fc_pointer">Food Safety Management System training course</h2>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/iso_22000_01.jpg" alt="ISO 22000:2018 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 22000:2018 Outline</h3>
                                <p style="text-align:justify">
                                    ISO 22000 stipulates requirements for a food safety management system to manage food safety hazards such as raw material production, manufacturing, processing, preservation, and distribution stages to ensure that food is safe at the point of human consumption. It is an international standard.<br><br>
                                    It is a hygiene management system that secures food safety by identifying factors that may occur at each stage before the final consumer consumes it, and setting and managing important control points for intensive management.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/iso_22000_03.jpg" alt="The importance of ISO 22000 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 22000 training</h3>
                                <p style="text-align:justify">
                                    ISO 22000 supports the achievement of a food safety management system by identifying all hazards predicted to occur in the food chain, including hazards that may be related to process types and facilities used.<br><br>
                                    For the effective application of ISO 22000, companies and industries need qualified professionals. The purpose of the ISO 22000 Auditor Certification process is to provide the certification body with the confidence that auditors and individuals accredited through this program are eligible.<br><br>
                                    As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility. The ISO 22000 training program is based on the ISO 22000 standard, and is based on the audit guidance standard ISO 19011:2018.
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
                        <li><p><em><strong>01</strong></em><span>Quality</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Environment</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Health and Safety</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Medical Device</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Food</span></p></li>
                        <li><p><em><strong>06</strong></em><span>Information Security</span></p></li>
                        <li><p><em><strong>07</strong></em><span>Risk Management</span></p></li>
                        <li><p><em><strong>08</strong></em><span>Traffic &amp; Energy</span></p></li>
                        <li><p><em><strong>09</strong></em><span>Continuity &amp; Restoring force</span></p></li>
                        <li><p><em><strong>10</strong></em><span>Business management</span></p></li>
                        <li><p><em><strong>11</strong></em><span>Social accountability &amp; Bribery management</span></p></li>
                        <li><p><em><strong>12</strong></em><span>Testing &amp; Calibration</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!--+++ / 20.05.25 탭컨텐츠 01 영역 종료 / +++-->

        <article><!--+++ / Tab Menu 컨텐츠 02, 20.05.25 탭컨텐츠 영역 시작 / +++-->
            <section class="business_type5" class="area">
		        <h1 class="tit_num">FSSC 22000 Professional training</h1>
		        <h2 class="tit_cer fc_pointer">Food Safety Management System training course</h2>

                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_fssc_22000_01.jpg" alt="FSSC 22000 Ver. 5 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FSSC 22000 Ver. 5 Outline</h3>
                                <p class="con_txt">
                                    FSSC 22000 is a global food safety standard that provides a comprehensive set of standards for food safety risk management based on the food management system standard ISO 22000 and Pre-Requisite Program (PRP) and additional requirements.<br><br>
                                    This standard provides a framework for food safety and quality accountability management as it includes guidelines for storage and transport as well as a food safety management system.<br><br>
                                    IGC has been granted training rights for FSSC 22000 Full License from FSSC, providing the following training :
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Courses for organizations, certification bodies, consultants and others</li>
                                    <li><span class="number">2. </span>FSSC 22000 internal auditor process</li>
                                    <li><span class="number">3. </span>FSSC 22000 Senior Auditor Course</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_fssc_22000_02.jpg" alt="The importance of FSSC 22000 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of FSSC 22000 training</h3>
                                <p class="con_txt">
                                    Course for organizations, certification bodies, consultants and others interested in general knowledge of FSSC 22000 requirements and to understand how they can be applied in other food chain organizations.<br><br>
                                    It shows how FSSC 22000 can be implemented within various food chain categories.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>Internal Auditor Course
                                    </span>
                                    <p>
                                        Designed for organizations implementing FSSC 22000 to meet the training requirements for internal auditors. Training covers all elements specified in ISO 19011:2018.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>Senior Auditor Course
                                    </span>
                                    <p>
                                        Designed to become a senior auditor certified by a certification body. It can also be applied to organizations looking to further develop internal audit skills and consultants. Prior knowledge of FSSC 22000 is required.<br><br>
                                        Training covers all elements specified in ISO 19011:2018, ISO/IEC 17021-1:2015 and ISO/TS 22003:2013, and includes practice courses (e.g. case study) and written exams. Total training time is 40 hours.
                                    </p>
                                </div>
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
                        <li><p><em><strong>01</strong></em><span>Quality</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Environment</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Health and Safety</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Medical Device</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Food</span></p></li>
                        <li><p><em><strong>06</strong></em><span>Information Security</span></p></li>
                        <li><p><em><strong>07</strong></em><span>Risk Management</span></p></li>
                        <li><p><em><strong>08</strong></em><span>Traffic &amp; Energy</span></p></li>
                        <li><p><em><strong>09</strong></em><span>Continuity &amp; Restoring force</span></p></li>
                        <li><p><em><strong>10</strong></em><span>Business management</span></p></li>
                        <li><p><em><strong>11</strong></em><span>Social accountability &amp; Bribery management</span></p></li>
                        <li><p><em><strong>12</strong></em><span>Testing &amp; Calibration</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>
        </article><!--+++ / Tab Menu 컨텐츠 02, 20.05.25 탭컨텐츠 영역  종료 / +++-->

        <!--+++ / Tab Menu 컨텐츠 03, 20.05.25 탭컨텐츠 영역 시작 / +++-->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">FDA FSMA Professional training</h1>
		        <h2 class="tit_cer fc_pointer">Food Safety Modernization Act training course</h2>
		        
		        <ul class="content">
		            <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_fda-fsma_01.jpg" alt="FSMA(FOOD SAFETY MODERNIZATION ACT) outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FSMA(FOOD SAFETY MODERNIZATION ACT) outline</h3>
                                <p style="text-align:justify">
                                    Through the FSMA Act, FDA has the authority to ensure that all food-related companies exporting to the United States have a food safety system in place and take recall actions for hazardous foods, effectively preventing food safety problems. All countries and businesses involved in the U.S. food supply chain are eligible for FSMA.<br><br>
                                    Therefore, in order to facilitate food exports to the US in response to FSMA, companies that export food to the US need to prepare.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_fda-fsma_02.jpg" alt="What is FSMA (FOOD SAFETY MODERNIZATION ACT)?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">What is FSMA (FOOD SAFETY MODERNIZATION ACT)?</h3>
                                <p style="text-align:justify">
                                    FDA FSMA third-party certification is a system in which a third-party accredited certification body conducts an audit of FSMA compliance for food production facilities located outside the United States and issues a certificate if the requirements are met.<br><br>
                                    It was enacted on January 4, 2011 by the US government for the purpose of'safety of food supply and protection of public health through proactive prevention'. Through the FSMA Act, FDA has the authority to ensure that all food-related companies exporting to the U.S. have a food safety system in place and take recall actions for hazardous foods, effectively preventing food safety issues.<br><br>
                                    All countries and businesses involved in the food supply chain may be eligible for FSMA. Therefore, in order to facilitate food exports to the US in response to FSMA, companies that export food to the US need to prepare.
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
                        <li><p><em><strong>01</strong></em><span>Quality</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Environment</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Health and Safety</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Medical Device</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Food</span></p></li>
                        <li><p><em><strong>06</strong></em><span>Information Security</span></p></li>
                        <li><p><em><strong>07</strong></em><span>Risk Management</span></p></li>
                        <li><p><em><strong>08</strong></em><span>Traffic &amp; Energy</span></p></li>
                        <li><p><em><strong>09</strong></em><span>Continuity &amp; Restoring force</span></p></li>
                        <li><p><em><strong>10</strong></em><span>Business management</span></p></li>
                        <li><p><em><strong>11</strong></em><span>Social accountability &amp; Bribery management</span></p></li>
                        <li><p><em><strong>12</strong></em><span>Testing &amp; Calibration</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!--+++ / Tab Menu 컨텐츠 03, 20.05.25 탭컨텐츠 영역  종료 / +++-->
        
        <!--+++ / Tab Menu 컨텐츠 04, 20.05.25 탭컨텐츠 영역 시작 / +++-->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">PCQI Professional training</h1>
		        <h2 class="tit_cer fc_pointer">Food safety prevention management expert training course</h2>
		        
		        <ul class="content">
                    <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/EDU_FSPCA_PCQI_01.jpg" alt="FSPCA-approved PCQI training outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FSPCA-approved PCQI training outline</h3>
                                <p style="text-align:justify">
                                    According to the FDA FSMA Act, food production facilities must have at least one PCQI expert for FDA FSMA third-party certification.<br><br>
                                    PCQI is a person who establishes a food safety plan within each company, and each company establishes a food safety plan through the appropriate number of Preventive Control Qualified Individuals (PCQI: qualified preventive management personnel) and establishes the FSMA Act. Can comply.<br><br>
                                    Qualification is obtained by completing the PCHF (Preventive Controls for Human Food) Lead Instructor training course administered by the Food Safety Preventive Control Alliance (FSPCA), a designated organization in the United States that conducts PCQI training commissioned by the US FDA. After that, it is given to the person who obtained the certificate.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_fda-fsma_03.jpg" alt="What is PCQI?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">What is PCQI?</h3>
                                <p class="con_txt">
                                    PCQI is a Preventive Controls Qualified Individual (PCQI). PCQI (Preventive controls qualified individual) Persons who are qualified in preventive controls (controls) are qualified by successfully completing training equivalent to the standardized curriculum recognized by FDA through the development and application of risk-based preventive controls.<br><br>
                                    It refers to an individual who is given or otherwise qualified through experience in the development and application of a food safety system. The preventive control regulations for food state that certain food safety related tasks must be carried out by the PCQI or be supervised.<br><br>
                                    In order to qualify for PCQI, food safety workers must successfully complete the US FDA-approved standard curriculum conducted by FSPCA.<br><br>
                                    PCQI training content is as follows.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Preventive management concept training for FSMA response</li>
                                    <li><span class="number">2. </span>Food safety plan outline</li>
                                    <li><span class="number">3. </span>Operate GMP and other prerequisite programs</li>
                                    <li><span class="number">4. </span>Biological food safety hazards</li>
                                    <li><span class="number">5. </span>Food safety hazards in chemical, physical and economic aspects</li>
                                    <li><span class="number">6. </span>Pre-steps in developing a food safety plan</li>
                                    <li><span class="number">7. </span>Support for preparing food safety plans (data)</li>
                                    <li><span class="number">8. </span>Hazard analysis and determination of preventive control points-overview</li>
                                    <li><span class="number">9. </span>Preventive management</li>
                                    <li><span class="number">10. </span>Food allergy support preventive management</li>
                                    <li><span class="number">11. </span>Hygiene prevention management</li>
                                    <li><span class="number">12. </span>Preventive management of supply chain</li>
                                    <li><span class="number">13. </span>Verification and validation procedure</li>
                                    <li><span class="number">14. </span>Record storage and management</li>
                                    <li><span class="number">15. </span>Recovery plan</li>
                                    <li><span class="number">16. </span>Legal outline (cGMP, risk analysis, risk-based preventive management)</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/EDU_FSPCA_PCQI_02.jpg" alt="The importance of PCQI training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of PCQI training</h3>
                                <p style="text-align:justify">
                                    According to the preventive control regulations for food, PCQI first, establishes a food safety plan, second, verifies preventive control, third, reviews records, and fourth, performs or manages the task of reanalyzing the food safety plan. As such, the employment of PCQI is a prerequisite for meeting the requirements of current preventive control regulations for food.<br><br>
                                    The PCQI may be an employee of the food-related facility, or may be consulted by an external PCQI when establishing a food safety plan, and in some cases, two or more PCQIs may be effective in establishing a food safety plan.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso9001_03.jpg" alt="PCQI requirements">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">PCQI requirements</h3>
                                <p class="con_txt">
                                    One or more persons qualified for preventive care must do or supervise the following :
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Preparation of food safety plan</li>
                                    <li><span class="bullet"></span>Verification of preventive management</li>
                                    <li><span class="bullet"></span>Proof of valid reason for verification conducted after the first 90 days of production of the applicable food</li>
                                    <li><span class="bullet"></span>Decision that verification is not required</li>
                                    <li><span class="bullet"></span>Record review</li>
                                    <li><span class="bullet"></span>Proof of valid reason that the review of the monitoring and corrective action record was not made within 7 days</li>
                                    <li><span class="bullet"></span>Re-analysis of food safety plan</li>
                                    <li><span class="bullet"></span>Decision that after 90 days after production of the applied food, re-analysis is completed appropriate to the characteristics of preventive management and the role in the food safety system of the relevant facility, and additional preventive management can be verified.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/iso-iec1725-05.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p class="con_txt">
                                    The IGC Certification Center was recognized by the US FDA and IAS as the third-party FDA FSMA certification body, the 7th in the world and the first in Korea.
                                </p>
                                <div class="con_txt">
                                    <button onclick="window.open('https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification')" style="margin-top:7px;border-radius:30px;border:1px solid #0099ff;">
                                        &nbsp; <span style="color:#0099ff;margin:10px;">https://www.fda.gov</span> &nbsp;
                                    </button>
                                </div>
                                <p style="text-align:justify">
                                    For FDA FSMA third-party certification, food producers must have at least one PCQI expert. IGC provides FSMA, PCQI, and FSVP expert training services by receiving the training authority (designated as Lead Instructor) for the PCQI training course and FSVP expert training from FSPCA.
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
                        <li><p><em><strong>01</strong></em><span>Quality</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Environment</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Health and Safety</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Medical Device</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Food</span></p></li>
                        <li><p><em><strong>06</strong></em><span>Information Security</span></p></li>
                        <li><p><em><strong>07</strong></em><span>Risk Management</span></p></li>
                        <li><p><em><strong>08</strong></em><span>Traffic &amp; Energy</span></p></li>
                        <li><p><em><strong>09</strong></em><span>Continuity &amp; Restoring force</span></p></li>
                        <li><p><em><strong>10</strong></em><span>Business management</span></p></li>
                        <li><p><em><strong>11</strong></em><span>Social accountability &amp; Bribery management</span></p></li>
                        <li><p><em><strong>12</strong></em><span>Testing &amp; Calibration</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!--+++ / Tab Menu 컨텐츠 04, 20.05.25 탭컨텐츠 영역 종료 / +++-->
    </div><!------------ class="tab_con" 종료 ---------------->	
</div><!------ class="content_wrap" 종료 ----------->





<?php
include_once(G5_THEME_PATH.'/tail.php');
?>