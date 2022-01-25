<?php
	include_once('./_common.php');
$g5['title'] = 'Transportation, Communication and Energy';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
            <li><a href="javascript:;">ISO 29001</a></li>
            <li class="on"><a href="javascript:;">ISO 39001</a></li>
            <li><a href="javascript:;">ISO 50001</a></li>
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
                <h1 class="tit_num">ISO 29001 Professional Training</h1>
		        <h2 class="tit_cer fc_pointer">Petroleum, Petrochemical and Natural Gas Industries - Quality Control System Training Courses by Sector</h2>
		        
		        <ul class="content">
		            <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso29001_01.jpg" alt="ISO 29001:2020 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 29001:2020 Outline</h3>
                                <p style="text-align:justify">
                                    ISO 29001 has been prepared as a supplement to ISO 9001:2015. It was developed to provide a framework for managing supply chain risks and opportunities related to the petroleum, petrochemical and natural gas industries, and for coordinating the requirements for complementary standards adopted within the industry.<br><br>
                                    The goal of ISO 29001 is the development of a quality management system that provides for continual improvement, emphasizing defect prevention and the reduction of variation and waste in the supply chain and from service providers.<br><br>
                                    ISO 29001 is also intended to avoid multiple certification audits and to provide a common approach to quality control systems in the petrochemical and natural gas industries.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/ISO_29001_02.jpg" alt="The importance of ISO 29001 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 29001 training</h3>
                                <p style="text-align:justify">
                                    Given that the oil and gas industry is most exposed to catastrophic threats, quality control processes and qualified professionals are very important in this area.<br><br>
                                    Hazardous liquids and gases can cause serious damage to people and the environment if mishandled. Therefore, a high level of operational reliability is essential to the industry to ensure the safety and maintenance of smooth operation.<br><br>
                                    As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility. The ISO 29001 training program is based on the ISO 29001 standard, and is based on the audit guidance standard ISO 19011:2018.
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
        
        <!--------+++++++/ 컨텐츠 02 ISO 39001 시작 /++++++++----------->
        <article style="display:block;">
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 39001 Professional Training</h1>
		        <h2 class="tit_cer fc_pointer">Road Traffic Safety (RTS) Management System Training Course</h2>
		        
		        <ul class="content">
		            <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso39001_01.jpg" alt="ISO 39001:2012 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 39001:2012 Outline</h3>
                                <p style="text-align:justify">
                                    ISO 39001:2012 Road Traffic Safety (RTS) management system is an international standard for road traffic safety management system established by ISO/TC 241, where countries around the world participated.<br><br>
                                    ISO 39001 was developed with the aim of reducing the number of fatalities or serious injuries in traffic accidents, and sets the requirements of the organization's management system for road traffic safety.<br><br>
                                    ISO 39001 is a standard that helps organizations reduce and ultimately eliminate the incidence and risk of deaths and serious injuries from road traffic accidents.<br><br>
                                    Road traffic safety management systems based on ISO 39001 apply to both public and private companies that interact with road traffic systems.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso39001_02.jpg" alt="What is ISO 39001?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">What is ISO 39001?</h3>
                                <p class="con_txt">
                                    ISO 39001 can meet organizational safety and social responsibility goals, and see how to improve efficiency through better management.<br><br>
                                    The targets of ISO 39001 are as follows.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Organizations seeking to improve road traffic safety performance</li>
                                    <li><span class="number">2. </span>Organizations seeking to establish, implement, maintain, and improve road traffic safety management systems</li>
                                    <li><span class="number">3. </span>Organizations seeking to establish the conformity of road traffic safety policies within the organization</li>
                                    <li><span class="number">4. </span>An organization that intends to prove the conformity of the road traffic safety policy within the organization and this international standard</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso39001_03.jpg" alt="The importance of ISO 39001 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 39001 training</h3>
                                <p style="text-align:justify">
                                    The consequences of ignoring road traffic safety can be tragic when it comes to turning a minor accident into a terrible accident. ISO 39001 specifies requirements for road traffic safety (RTS) management systems to help organizations that interact with road traffic systems reduce deaths and serious injuries associated with road traffic accidents.<br><br>
                                    In order to be competitive and competent, companies and industries need qualified professionals. The purpose of the ISO 39001 Management Systems Auditor Training Course is to provide the certification body with the confidence that auditors certified through this program are eligible.<br><br>
                                    As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility. The ISO 39001 training program is based on the ISO 39001 standard.
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
        
        <!--------+++++++/ 컨텐츠 03 ISO 50001  시작 /++++++++----------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 50001 Professional Training</h1>
		        <h2 class="tit_cer fc_pointer">Energy Management System Training Course</h2>
		        
		        <ul class="content">
		            <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso50001_01.jpg" alt="ISO 50001:2018 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 50001:2018 Outline</h3>
                                <p style="text-align:justify">
                                    The aim of this standard is to enable organizations to establish the systems and processes necessary to improve energy performance, including energy efficiency, energy use, and energy consumption. Through systematic energy management, greenhouse gas emissions, energy costs and other related environmental impacts can be reduced.<br><br>
                                    This standard is applicable to any organization of all types and sizes regardless of regional, cultural, and social conditions. For successful implementation, commitment from all departments and functions of the customer organization, especially top management, is important.<br><br>
                                    The organizations can develop and implement an energy policy, and can establish objectives, targets, and action plans that take into account legal requirements and information related to the significant energy use. An EnMS(Energy Management Systems) enables an organization to achieve policy commitment, to take actions as needed to improve its energy performance, and to demonstrate the conformity of its system to the requirements of this standard.<br><br>
                                    This standard applies to the activities under the control of the organization, and its application can be tailored to fit the specific requirements of the organization, including the complexity of its systems, degree of documented information and available resources.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso50001_02.jpg" alt="The importance of ISO 50001 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 50001 training</h3>
                                <p style="text-align:justify">
                                    Efficient use of energy not only contributes to the economic benefit of the organization, but can also have a positive impact on environmental issues that are rapidly emerging as a global topic.<br><br>
                                    For the effective application of ISO 50001, companies and industries need qualified professionals. The purpose of the ISO 50001 auditor certification course is to provide the certification body, business and industry with the confidence that auditors and individuals trained through this program are eligible.<br><br>
                                    As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility. The ISO 50001 training program is based on the ISO 50001 standard, and is based on the audit guidance standard ISO 19011:2018.
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
    </div><!------------ class="tab_con" 종료 ---------------->
</div><!------ class="content_wrap" 종료 ----------->




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>