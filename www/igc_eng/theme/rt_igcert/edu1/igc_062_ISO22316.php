<?php
	include_once('./_common.php');
$g5['title'] = 'Continuity & Resilience';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    <!--+++ 20.05.26 탭메뉴/ 시스템인증 > 보건 및 의료기기 시작 +++-->
    <div class="tab_menu tab01">
        <ul>
            <!-- 처음 활성화 메뉴에 class="on" -->
            <li><a href="javascript:;">ISO 22301</a></li>
            <li class="on"><a href="javascript:;">ISO 22316</a></li>
            <li><a href="javascript:;">ISO/TS 22317</a></li>
            <li><a href="javascript:;">ISO 22320</a></li>
        </ul>
    </div>
    <!--+++ 20.05.26 탭메뉴/ 시스템인증 > 보건 및 의료기기 종료 +++-->
    
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

    <!--+++ 20.0526.13 탭컨텐츠 영역 시작 +++-->
    
    <div class="tab_con">	  
        <!--+++++ 컨텐츠 01 +++++-->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 22301 Professional Training</h1>
                <h2 class="tit_cer fc_pointer">Business Continuity Management System Training Course</h2>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso22301_01.jpg" alt="ISO 22301:2019 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 22301:2019 Outline</h3>
                                <p style="text-align:justify">
                                    ISO 22301 is a business continuity management system that establishes a documented management system for the organization to defend against, reduce, prepare, respond to, and recover from incidents such as theft, natural disasters and diseases, as well as market risks, and to provide requirements for implementing, operating, monitoring and continuous improvement.<br><br>
                                    Business continuity management system can be applied to all industries and activities, and provides a framework to understand the impact of an organization's various threats, and to build effective response and organizational resilience. This standard provides guidance on business continuity for continuing business operations after a disruption, and seeks to minimize the impact on products and services by ensuring that products and services can be delivered and restored immediately in the event of a disruption.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso22301_03.jpg" alt="The importance of ISO 22301 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 22301 training</h3>
                                <p style="text-align:justify">
                                    In the event of unanticipated incidents that may lead to disruption of business such as terrorism and natural disasters, organizations must respond effectively and ensure that products and services continue to be supplied as planned.<br><br>
                                    In order to be competitive and competent, companies and industries need qualified auditors. The purpose of the ISO 22301 management system auditor certification course is to provide the certification body, business and industry with the confidence that auditors and individuals trained through this program are eligible.<br><br>
                                    As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility. The ISO 22301 training program is based on the ISO 22301 standard, and is based on the audit guidance standard ISO 19011:2018.
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
               
        </article> <!--------+++++++/ 컨텐츠 01 종료 /++++++++----------->
              
               
        <!--------+++++++/ 컨텐츠 02 ISO 22316 시작 /++++++++----------->
        <article style="display:block;">
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 22316 Professional Training</h1>
                <h2 class="tit_cer fc_pointer">Organizational resilience – Principles and attributes Training Course</h2>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso22316_01.jpg" alt="ISO 22316:2017 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 22316:2017 Outline</h3>
                                <p style="text-align:justify">
                                    ‘Resilience’ is the core of a business that any organization wishing to continue prospering should have. This standard enables organizations to respond to problems in a more favorable position when faced with problems. In addition, this standard includes building upon strong and autonomous leadership, in addition to existing risk management forms, and includes information about shared values and awareness of changing circumstances.<br><br>
                                    ISO 22316 (Security and Resilience, Organizational Resilience, Principles and Attributes) helps organizations secure the business of the future. This standard covers a wide range of factors that can enhance resilience within an organization. In addition, this standard includes building on top of existing risk management forms based on strong and autonomous leadership, and also includes the shared values and awareness of changing circumstances by members of the organization. Therefore, ISO 22316 is necessary to enable organizations to accept and adapt to the unpredictable factors while striving to achieve and realize their objectives.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/iso-22316_02.jpg" alt="The importance of ISO 22316 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 22316 training</h3>
                                <p style="text-align:justify">
                                    For the effective application of ISO 22316, companies and industries need qualified professionals. The purpose of the ISO 22316 training course is to provide the certification body, business and industry with the confidence that auditors and individuals trained through this program are eligible.<br><br>
                                    As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility. The ISO 22316 training program is based on the ISO 22316 standard.
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
               
        </article> <!--------+++++++/ 컨텐츠 02 종료 /++++++++----------->
        
        <!--------+++++++/ 컨텐츠 03 ISO 22317 시작 /++++++++----------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO/TS 22317 Professional Training</h1>
                <h2 class="tit_cer fc_pointer">Societal security, Business continuity management systems – Guidelines for business impact analysis (BIA) Training Course</h2>
                
                <ul class="content">
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso22317_01.jpg" alt="ISO/TS 22317:2015 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/TS 22317:2015 Outline</h3>
                                <p style="text-align:justify">
                                    This international standard is a technical specification that provides detailed guidance on how to establish, implement, and maintain a business impact analysis (BIA) process. This is not a uniform process for performing a BIA, but assists an organization to design a BIA process that is appropriate to its needs.<br><br>
                                    Organizations cannot certify BIA to ISO/TS 22317. However, it can be used as a guide for effectively implementing the BIA process. ISO/TS 22317 is the only standard covering only BIA (business impact analysis).<br><br>
                                    Although designed to complement ISO 22301, it can be used as a standalone standard. The objective of the BIA process is to analyze the actual impact of disruptive events in organizations.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso22317_03.jpg" alt="The importance of ISO/TS 22317 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO/TS 22317 training</h3>
                                <p style="text-align:justify">
                                    The consequences of an unanticipated business disruption have profound implications, leading to loss of life, loss of property or income, or inability to provide an organization’s viable products or services.<br><br>
                                    The global economic recession has become a real fact through travel restrictions and blockades in countries caused by COVID-19, which began in December 2019, and it had a serious impact on the global economy in just one month. As such, all organizations have the potential to collapse. This includes technical failures, floods, utility outages, fires and terrorist attacks.<br><br>
                                    To cope with this situation, companies and industries need qualified professionals. The purpose of the ISO/TS 22317 Auditor Certification Course is to provide the certification body, business and industry with the confidence that auditors and individuals trained through this program are eligible.
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
               
        </article> <!--------+++++++/ 컨텐츠 03 종료 /++++++++----------->
        
        
        <!--------+++++++/ 컨텐츠 04 ISO 22320 시작 /++++++++----------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 22320 Professional Training</h1>
                <h2 class="tit_cer fc_pointer">Security and resilience - Emergency management-Guidelines for incident management Training Course</h2>
                
                <ul class="content">
                    <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso22320_01.jpg" alt="ISO 22320:2018 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 22320:2018 Outline</h3>
                                <p style="text-align:justify">
                                    ISO 22320 is an international standard that defines incident response requirements. This standard is established to minimize disasters, terrorism and disasters in other major events, and to manage emergency situations and respond to disasters, include water supply and food supply, health, rescue services, fuel supply and electricity.<br><br>
                                    ISO 22320 prescribes the minimum requirements for effective incident response and provides the basics for command and control, operational information, coordination and cooperation within an incident response organization. It includes command and control structure and procedures, decision support, traceability, information management and interoperability.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso22320_04.jpg" alt="The importance of ISO 22320 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 22320 training</h3>
                                <p style="text-align:justify">
                                    For various disasters and incidents that may occur around the world, internationally accepted standards are needed for disaster response measures and corresponding management that are appropriate for each country and region's social situation as well as the population.<br><br>
                                    By enabling public and private organizations to establish and strengthen their ability to respond to emergencies of all kinds, regardless of the importance of ISO 22320, threats, confusion and damage can be minimized and the continuity of the underlying facility can be ensured.<br><br>
                                    For the effective application of the standard ISO 22320, companies and industries need qualified professionals. The purpose of the ISO 22320 training course is to provide the certification body, business and industry with the confidence that auditors and individuals trained through this program are eligible.<br><br>
                                    We will evaluate against requirements that reflect the key competencies, knowledge and experience that define eligibility. The training program is based on the key standards for audit.
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
               
        </article> <!--------+++++++/ 컨텐츠 04 종료 /++++++++----------->
    </div><!------------ class="tab_con" 종료 ---------------->
</div><!------ class="content_wrap" 종료 ----------->




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>