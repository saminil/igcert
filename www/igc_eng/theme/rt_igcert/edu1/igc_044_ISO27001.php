<?php
	include_once('./_common.php');
$g5['title'] = 'Information Security';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    <!--+++ Tab Menu 20.07.29 탭메뉴 버튼 설정 시작 +++-->
    <div class="tab_menu tab01">
        <ul>
      	    <!-- 처음 활성화 메뉴에 class="on" -->
            <li><a href="javascript:;">ISO/IEC 20000-1</a></li>
            <li class="on"><a href="javascript:;">ISO/IEC 27001</a></li>
            <li><a href="javascript:;">ISO/IEC 27002</a></li>
            <li><a href="javascript:;">ISO/IEC 27005</a></li>
            <li><a href="javascript:;">ISO/IEC 27032</a></li>
            <li><a href="javascript:;">ISO/IEC 27035-1</a></li>
            <li><a href="javascript:;">ISO 27799</a></li>
            <li><a href="javascript:;">ISO/IEC 29100</a></li>
            <li><a href="javascript:;">ISO/IEC 38500</a></li>
        </ul>
    </div>
    <!--+++ /Tab Menu 20.07.29 탭메뉴 버튼 설정 종료 +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
    <!--+++ 20.0526.13 탭컨텐츠 영역 시작 +++-->
    
    <div class="tab_con"> 
        <!--+++++ 컨텐츠 01 +++++-->
        <article>	
	        <section class="business_type5" class="area">
		        <h1 class="tit_num">ISO/IEC 20000-1 Professional Training</h1>
		        <h2 class="tit_cer fc_pointer">Information Technology - Service Management Training Course</h2>
		        
		        <ul class="content">
		            <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso20000_01.jpg" alt="ISO/IEC 20000-1:2018 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 20000-1:2018 Outline</h3>
                                <p style="text-align:justify">
                                    ISO/IEC 20000-1 is an international standard that specifies the requirements for information technology (IT) service organizations to plan, establish, implement, operate, monitor, review, maintain, and improve service management systems. This standard is the standardization of the British Standard BS 15000 standard established by the British Standards Institution (BSI) by the ISO. It contains guidelines for the application of service management systems within the scope of ISO/IEC 20000-1.<br><br>
                                    ISO/IEC 20000-1 enables organizations to systematically build IT service management systems. Establishing a formal framework saves time and money by improving the organization's services and processes, and prevents recurring errors and accidents. By doing this, the organization gives customers confidence in their IT systems and improves service quality to gain competitiveness.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso20000-1_02.jpg" alt="The importance of ISO/IEC 20000-1 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO/IEC 20000-1 training</h3>
                                <p style="text-align:justify">
                                    ISO/IEC 20000-1 supports individuals to understand the content and purpose of the requirements and manage the IT service management system based on this to improve the level of IT service management in the organization. In addition, ISO/IEC 20000 training helps auditors achieve and respond to ITSM audits by acquiring the skills and knowledge required for the audit.<br><br>
                                    As part of the certification process, the assessment will be based on requirements that reflect key skills, knowledge and experience that define eligibility. The ISO/IEC 20000-1 training program is based on the ISO/IEC 20000-1 standard, and is based on the audit guidance standard ISO 19011:2018.
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
           
        </article> <!--------+++++++ / 컨텐츠 01 종료 / ++++++++----------->


        <!----// 컨텐츠 02 ISO/IEC 27001 탭메뉴 컨텐츠 영역 시작 //------->
        <article style="display: block">
            <section class="business_type5" class="area">
		        <h1 class="tit_num">ISO/IEC 27001:2013 Professional Training</h1>
		        <h2 class="tit_cer fc_pointer">Information Technology, Security Technology - Information Security Management System Training Course</h2>
		        
		        <ul class="content">
		            <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_iec_27001-2013_00.jpg" alt="ISO/IEC 27001:2013 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 27001:2013 Outline</h3>
                                <p style="text-align:justify">
                                    ISO/IEC 27001 is an international standard for information security management system established by the International Organization for Standardization (ISO) and the International Electrotechnical Commission (IEC) and the most authoritative international certification standard in the field of information security. This covers 133 items in 11 areas related to information security, including information protection policy, physical security, and information access control.<br><br>
                                    ISO/IEC 27001 is a management system based on a systematic business risk approach to establishing, implementing, operating, monitoring, reviewing, maintaining and improving information security.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso27001-2013_02.jpg" alt="Importance of ISO/IEC 27001 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Importance of ISO/IEC 27001 training</h3>
                                <p style="text-align:justify">
                                    Securing sensitive corporate information and personal data is not only mandatory for all businesses, but also it is a legal obligation.<br><br>
                                    An expert is required to have reliability of ISO/IEC 27001. The purpose of the ISO/IEC 27001 training course is not only to provide the necessary knowledge as an auditor, but also to provide relevant knowledge experts to the industry.<br><br>
                                    As part of the certification process, assessments will be conducted against requirements that reflect the key skills, knowledge and experience that define eligibility. The ISO/IEC 27001 training program is based on the ISO/IEC 27001 standard, and is based on the audit guidance standard ISO 19011:2018.
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

        </article><!----// 컨텐츠 02 ISO/IEC 27001 탭메뉴 컨텐츠 영역 종료 //------->
        
        
        <!----// 컨텐츠 03 ISO/IEC 27002 탭메뉴 컨텐츠 영역 시작 //------->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">ISO/IEC 27002 Professional Training</h1>
		        <h2 class="tit_cer fc_pointer">Information Technology, Security Technology - Practice Code for Information Security Control Training Course</h2>
		        
		        <ul class="content">
		            <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_27002_01.jpg" alt="ISO/IEC 27002:2013 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 27002:2013 Outline</h3>
                                <p style="text-align:justify">
                                    ISO/IEC 27002:2013 provides guidance on organizational information security standards and information security management practices, including the selection, implementation, and management of controls that take into account the organization's information security risk environment.<br><br>
                                    ISO/IEC 27002:2013 is designed to be used by organizations implementing information security management systems based on ISO/IEC 27001, implementing generally accepted information security controls, or developing their own information security management guidelines.<br><br>
                                    This standard is used as a reference to selecting control in the process of implementing an information security management system and can help organizations build confidence in inter-organizational activities and implement appropriate controls, including policies, processes, organizational structures, and software and hardware features.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_27002_03.jpg" alt="Importance of ISO/IEC 27002 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Importance of ISO/IEC 27002 training</h3>
                                <p style="text-align:justify">
                                    ISO/IEC 27002 enables individuals to understand basic guidelines to help implement, maintain and improve information security management systems within an organization. Individuals can acquire the methods and skills used to implement information security controls to effectively manage their organization's information security management system (ISMS) and respond appropriately to the various information security risks of their organization.<br><br>
                                    For the effective application of ISO/IEC 27002, companies and industries need qualified experts. The purpose of the ISO/IEC 27002 training course is to provide the certification body, businesses and industries with the confidence that auditors and individuals trained through this program are eligible.<br><br>
                                    As part of the certification process, assessments will be conducted against requirements that reflect the key skills, knowledge and experience that define eligibility. The ISO/IEC 27002 training program is based on the ISO/IEC 27002 standard, and is based on the audit guidance standard ISO 19011:2018.
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

        </article><!----// 컨텐츠 03 ISO/IEC 27002 탭메뉴 컨텐츠 영역 종료 //------->
        
        
        <!----// 컨텐츠 04 ISO/IEC 27005 탭메뉴 컨텐츠 영역 시작 //------->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">ISO/IEC 27005 Professional Training</h1>
		        <h2 class="tit_cer fc_pointer">Information Technology, Security Technology - Information Security Risk Management Training Course</h2>
		        
		        <ul class="content">
		            <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_iec27005_01.jpg" alt="ISO/IEC 27005:2018 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 27005:2018 Outline</h3>
                                <p style="text-align:justify">
                                    ISO/IEC 27005 provides guidance on identifying organization's requirements for information security and establishing a systematic approach to information security risk management needed to establish an effective information security management system.<br><br>
                                    This International Standard is designed to support the concept of ISO/IEC 27001 and to support the efficient implementation of information security based on a risk management approach.<br><br>
                                    Therefore, ISO/IEC 27005 demonstrates that organizations can identify, assess, analyze, assess, and address the various information security risks they face. Also, ISO/IEC 27005 helps organizations prioritize risk and take appropriate measures to reduce or mitigate risk.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_iec27005_02.jpg" alt="Importance of ISO/IEC 27005 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Importance of ISO/IEC 27005 training</h3>
                                <p style="text-align:justify">
                                    For the effective application of ISO/IEC 27005, organizations and industries need qualified experts. The purpose of the ISO/IEC 27005 training is to provide certification bodies, businesses and industries with the confidence that auditors and individuals certified through this program are eligible.<br><br>
                                    As part of the examiner's course, we will evaluate against requirements that reflect key competencies, knowledge and experience that define eligibility. The training program is based on the main standard for audit.
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

        </article><!----// 컨텐츠 04 ISO/IEC 27005 탭메뉴 컨텐츠 영역 종료 //------->
        
        
        <!----// 컨텐츠 05 ISO/IEC 27032 탭메뉴 컨텐츠 영역 시작 //------->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">ISO/IEC 27032 Professional Training</h1>
		        <h2 class="tit_cer fc_pointer">Information Technology, Security Technology - Guidelines for Cyber Security Training Course</h2>
		        
		        <ul class="content">
		            <li><!-- content 5-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso27032_01.jpg" alt="ISO/IEC 27032:2012 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 27032:2012 Outline</h3>
                                <p style="text-align:justify">
                                    Cyberspace is a complex environment in which people, software and services interact on the Internet, and is supported by networks connected with distributed information and communication technology devices around the world.<br><br>
                                    However, the lack of communication between organizations and informants in cyberspace and the gaps between these areas can create security issues. The international standard ISO/IEC 27032 provides a policy framework covering the establishment of technical guidelines for reliability, cooperation, exchange of information, and system integration among stakeholders in cyberspace.<br><br>
                                    ISO/IEC 27032 is intended to highlight the role of various security in cyberspace in relation to information security, network and Internet security, and critical information infrastructure protection (CIIP). ISO/IEC international standards provide technical guidance for bridging gaps between different security domains in cyberspace and addressing cybersecurity risks such as hacking, cyberattacks, and malicious software.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso27032_03.jpg" alt="Importance of ISO/IEC 27032 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Importance of ISO/IEC 27032 training</h3>
                                <p style="text-align:justify">
                                    For the effective application of ISO/IEC 27032, organizations and industries need qualified experts. The purpose of ISO/IEC 27032 training is to provide accreditation agencies, businesses and industry sectors with the confidence that auditors and individuals certified through this program are eligible.<br><br>
                                    As part of the auditor process, we will evaluate against requirements that reflect the key skills, knowledge and experience that define eligibility. The training program is based on the main standards for audit.
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

        </article><!----// 컨텐츠 05 ISO/IEC 27032 탭메뉴 컨텐츠 영역 종료 //------->
        
        
        <!----// 컨텐츠 06 ISO/IEC 27035-1 탭메뉴 컨텐츠 영역 시작 //------->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">ISO/IEC 27035-1 Professional Training</h1>
		        <h2 class="tit_cer fc_pointer">Information Technology, Security Technology - Information Security Training Course</h2>
		        
		        <ul class="content">
		            <li><!-- content 6-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso27035_01.jpg" alt="ISO/IEC 27035-1:2016 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 27035-1:2016 Outline</h3>
                                <p style="text-align:justify">
                                    In today's business world, information security incidents are considered an unexpected risk that can seriously damage your business. Therefore, organizations must immediately take action to identify, evaluate and effectively manage incidents.<br><br>
                                    ISO/IEC 27035-1 Information Security Incident Management is an international standard that provides best practices and guidance for conducting strategic incident management plans and preparing for incident response. Organizations with incident management capabilities of misinformation security can control business risk.<br><br>
                                    Likewise, the ISO/IEC 27035-1 framework is an important function in an organization's security structure with the ability to effectively manage information security, mitigate incidents, and build sustainable business processes. ISO/IEC 27035-1 Information Security Incident Management helps individuals with comprehensive expertise to detect, report and evaluate information security incidents.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 6-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso27035_03.jpg" alt="Importance of ISO/IEC 27035-1 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Importance of ISO/IEC 27035-1 training</h3>
                                <p style="text-align:justify">
                                    ISO/IEC 27035-1 helps individuals become global security experts, helping organizations minimize the impact of incidents.<br><br>
                                    For the effective application of ISO/IEC 27035-1, organizations and industries need qualified experts. The purpose of ISO/IEC 27035-1 training is to provide certification bodies, organizations and industry sectors with the confidence that auditors and individuals certified through this program are eligible.<br><br>
                                    As part of the auditor process, we will evaluate against requirements that reflect the key skills, knowledge and experience that define eligibility. The training program is based on the key standards for auditing.
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

        </article><!----// 컨텐츠 06 ISO/IEC 27035-1 탭메뉴 컨텐츠 영역 종료 //------->
        
        
        <!----// 컨텐츠 07 ISO 27799 탭메뉴 컨텐츠 영역 시작 //------->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">ISO 27799 Professional Training</h1>
		        <h2 class="tit_cer fc_pointer">Health informatics - Health information security management training course using ISO/IEC 27002</h2>
		        
		        <ul class="content">
		            <li><!-- content 7-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_27799_2016_01.jpg" alt="ISO 27799:2016 outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 27799:2016 outline</h3>
                                <p style="text-align:justify">
                                    ISO 27799 is an international standard that provides guidance on how to best protect the confidentiality, integrity and availability of personal health data for the healthcare industry and for everyone working in a unique operating environment.<br><br>
                                    Specifically, it is an information protection management system standard that can legally and safely manage patient's sensitive medical and personal data such as medical treatment and prescription records and examination results in medical institutions.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 7-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_27799_2016_02.jpg" alt="The importance of ISO 27799 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 27799 training</h3>
                                <p style="text-align:justify">
                                    ISO 27799 training is essential for personnel working in the field as it provides basic guidance for protecting personal health information. The advantage of these standards is that they are valid in all medical institutions, regardless of size, type or complexity.<br><br>
                                    For the effective application of ISO 27799, companies and industries need qualified professionals. The purpose of the ISO 27799 training is to provide certification body, businesses and industries with the confidence that auditors and individuals trained through this program are eligible.<br><br>
                                    As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility. The ISO 27799 training program is based on the ISO 27799 standard, and is based on the audit guidance standard ISO 19011:2018.
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

        </article><!----// 컨텐츠 07 ISO 27799 탭메뉴 컨텐츠 영역 종료 //------->
        
        
        <!----// 컨텐츠 08 ISO/IEC 29100 탭메뉴 컨텐츠 영역 시작 //------->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">ISO/IEC 29100 professional training</h1>
		        <h2 class="tit_cer fc_pointer">Information Technology, Security Technology - Personal Information Framework training course</h2>
		        
		        <ul class="content">
		            <li><!-- content 8-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso29100_01.jpg" alt="ISO/IEC 29100:2011 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 29100:2011 Outline</h3>
                                <p class="con_txt">
                                    ISO/IEC 29100 provides a high-level framework for protecting Personally Identifiable Information (PII) within Information and Communication Technology Systems (ICT).<br><br>
                                    There are several existing standards related to security (such as ISO/IEC 27001, ISO/IEC 27002 and ISO/IEC 27018), but ISO/IEC 29100 focuses more on the processing of personally identifiable information (PII).<br><br>
                                    Given the number of technologies that process personally identifiable information (PII), it is essential for organizations to implement a privacy framework that provides guidance on how to protect PII.<br><br>
                                    This privacy framework is intended to help organizations define the PII-related requirements for privacy protection within the Information and Communication Technology System (ICT).<br><br>
                                    This can be done by specifying common privacy terms, defining actors and their roles in the processing of PII, and referring to familiar privacy principles.<br><br>
                                    Personally identifiable information may contain confidential data for limited use only. The main reasons organizations protect PII are :
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>To protect personal personally identifiable information</li>
                                    <li><span class="bullet"></span>To meet legal and regulatory requirements</li>
                                    <li><span class="bullet"></span>To fulfill corporate responsibility</li>
                                    <li><span class="bullet"></span>To increase consumer confidence</li>
                                    <li><span class="bullet"></span>To reduce security violations</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 8-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso29100_04.jpg" alt="The importance of ISO/IEC 29100 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO/IEC 29100 training</h3>
                                <p style="text-align:justify">
                                    This privacy framework provided by ISO/IEC 29100 applies not only to organizations, but also to individuals using ICTs that require privacy controls to process PII.<br><br>
                                    For the effective application of ISO/IEC 29100, companies and industries need qualified professionals. The purpose of the ISO/IEC 29100 training is to provide certification body, businesses and industries with the confidence that auditors and individuals certified through this program are eligible.<br><br>
                                    As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility. The ISO/IEC 29100 training program is based on the ISO/IEC 29100 standard, and is based on the audit guidance standard ISO 19011:2018.
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

        </article><!----// 컨텐츠 08 ISO/IEC 29100 탭메뉴 컨텐츠 영역 종료 //------->
        
        
        <!----// 컨텐츠 09 ISO/IEC 38500 탭메뉴 컨텐츠 영역 시작 //------->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">ISO/IEC 38500 professional training</h1>
		        <h2 class="tit_cer fc_pointer">Information Technology - IT Management Curriculum</h2>
		        
		        <ul class="content">
		            <li><!-- content 9-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso38500_01.jpg" alt="ISO/IEC 38500:2015 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 38500:2015 Outline</h3>
                                <p style="text-align:justify">
                                    ISO/IEC 38500 supports management organizations in helping IT organizations make a positive contribution to their organization's performance. Thus, by meeting ISO/IEC 38500 requirements, organizations can monitor IT usage, ensure business continuity and sustainability, align IT with business needs, and ensure proper implementation and operation of IT assets.<br><br>
                                    In addition, this standard helps you gain the expertise and knowledge you need to build, implement, and continuously improve a framework that adheres to the principles and models for good IT governance set by ISO/IEC 38500.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 9-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_isoISO-IEC38500_02.jpg" alt="The importance of ISO/IEC 38500 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO/IEC 38500 training</h3>
                                <p style="text-align:justify">
                                    The ISO/IEC 38500 enables assessors and individuals to understand business strategies and adapt them to fit their organizations.<br><br>
                                    For the effective application of ISO/IEC 38500, companies and industries need qualified professionals. The purpose of the ISO/IEC 38500 trainnig is to provide certification body, businesses and industries with the confidence that auditors and individuals trained through this program are eligible.<br><br>
                                    As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility. The ISO/IEC 38500 training program is based on the ISO/IEC 38500 standard, and is based on the audit guidance standard ISO 19011:2018.
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

        </article><!----// 컨텐츠 09 ISO/IEC 38500 탭메뉴 컨텐츠 영역 종료 //------->
    </div><!------------ class="tab_con" 종료 ---------------->
</div><!------ class="content_wrap" 종료 ----------->




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>