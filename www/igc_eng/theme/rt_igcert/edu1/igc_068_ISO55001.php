<?php
	include_once('./_common.php');
$g5['title'] = 'Business Management';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    <!--+++ 20.05.13 탭메뉴/  +++-->
    <div class="tab_menu tab01">
        <ul>
            <!-- 처음 활성화 메뉴에 class="on" -->
            <li><a href="javascript:;">ISO 13053</a></li>
            <li><a href="javascript:;">ISO 21500</a></li>
            <li><a href="javascript:;">ISO 30301</a></li>
            <li class="on"><a href="javascript:;">ISO 55001</a></li>
        </ul>
    </div><!--+++ 20.05.11 탭메뉴/ 종료 +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
    <!--+++ 20.05.13 탭컨텐츠 영역 시작 +++-->
    
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 ISO 13053 +++++-->
        <article>	
            <section class="page_title">
                <h1 class="tit_num">ISO 13053 Professional Training</h1>
                <h2 class="tit_cer fc_pointer">Quantitative methods in process improvement – Six Sigma Training Course</h2>
                <p class="outline">
                    ISO 13053 is an international standard describing the Six Sigma methodology. This methodology is used to improve an organization's business processes. Many companies are experiencing process variations that often lead to defects and errors, such as waste.<br><br>
                    The purpose of Six Sigma is to identify and significantly reduce variances by using a statistical approach to lower error rates and by using a statistical approach to improve quality performance. In addition, the Six Sigma methodology can be used to improve existing processes through DMAIC(Define, Measure, Analyze, Improve, Control), DMADV(Define, Measure, Analyze, Design, Verify) used to develop new services, products or processes.<br><br>
                    DMADV means that through Define, Measure, Analyze, Improve, and Control, finally reaching the Six Sigma standard, the contents of each step are as follows.
				</p>
              
                <div class="tit_img">
                    <img src="./images/edu_iso_13053_01.jpg" alt="ISO 13053 Professional Training" style="width: 100%">
                </div>
                
                <div class="outline">
                    <ul class="list_st">
                        <li>
                            <span class="number">1. </span>Define<br>
                            Set objectives for design activities consistent with corporate strategy and consumer requirements
                        </li>
                        <li>
                            <span class="number">2. </span>Measure<br>
                            Measure current process capability, product levels, and risk levels, and identify Criticals to Qualities (CTQs) .
                        </li>
                        <li>
                            <span class="number">3. </span>Analyze<br>
                            Develop design alternatives, creating high-level designs, and develop evaluating the design possibilities for choosing the best design
                        </li>
                        <li>
                            <span class="number">4. </span>Improvement<br>
                            Improve system components so that the desired process can be built
                        </li>
                        <li>
                            <span class="number">5. </span>Control<br>
                            Control inputs and volatility to ensure that the improved process achieves the intended performance
                        </li>
                    </ul>
                </div>
               
                <ul class="content">                    
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_13053_02.jpg" alt="The importance of ISO 13053 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 13053 training</h3>
                                <p style="text-align:justify">
                                    If you understand Six Sigma and can run its practice in your profession, it can have great impact in the future.<br><br>
                                    Your knowledge of reducing costs, improving business processes and increasing profits sets this certification apart from other experts in your field. Individuals certified to ISO 13053 are also prepared to take on leadership roles because they have the ability to be a driver for change in the workplace, as well as information on Sigma's methodology.<br><br>
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
               
        </article> <!--------+++++++/ 컨텐츠 01 종료 /++++++++----------->
        
        
        <!--------+++++++/ 컨텐츠 02 ISO 21500 시작 /++++++++----------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 21500 Professional Training</h1>
                <h2 class="tit_cer fc_pointer">Training / Business operations</h2>
                <p class="outline">
                    ISO 21500 is guidance on project management, ensuring successful project completion within budget and time constraints with minimal disruption to business operations other than project management.<br><br>
                    It also helps organizations meet all project management requirements and reduce the likelihood of project failure.
				</p>
               
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso21500_01.jpg" alt="What is ISO 21500?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">What is ISO 21500?</h3>
                                <p class="con_txt">
                                    ISO 21500 training targets are variable.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Individuals involved in project management</li>
                                    <li><span class="bullet"></span>Individuals and auditors seeking knowledge of the key processes in project management</li>
                                    <li><span class="bullet"></span>Individuals who want to pursue a career in project management</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso21500_02.jpg" alt="The importance of ISO 21500 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 21500 training</h3>
                                <p style="text-align:justify">
                                    ISO 21500 provides the knowledge needed to lead a project and manage a team, and demonstrates that the trainee has the skills and knowledge necessary to successfully manage a project.<br><br>
                                    For the effective management of projects, companies and industries need qualified professionals. The purpose of the ISO 21500 training course is to ensure that the competence of auditors and individuals who complete this program is competent, and to provide credibility to accredited personnel and to businesses and industries.<br><br>
                                    As part of the training process, we will conduct assessments against requirements that reflect key competencies, knowledge and experience that define competence. The training program is based on the key standards for screening.
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
        
        
        <!--------+++++++/ 컨텐츠 03 ISO 30301 시작 /++++++++----------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 30301 Professional Training</h1>
                <h2 class="tit_cer fc_pointer">Information and documentation — Management systems for records Training Course</h2>
                
                <ul class="content">
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_30301_01.jpg" alt="ISO 30301:2019 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 30301:2019 Outline</h3>
                                <p style="text-align:justify">
                                    ISO 30301 is a standard that ultimately supports the organization's mission, performance and objectives achieved through records management. The ISO 30301 standard establishes an organization's records management system to achieve the organization's performance and goals, and presents the necessary requirements.<br><br>
                                    This standard can be used and easily applied by all members of the organization, including management of the organization, when it comes to records management, such as the production and management of records.<br><br>
                                    The ISO 30301 International Standard applies to all individuals interested in records management and records management and who wish to contribute to the organization's performance and achievement of goals through effective records management.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_30301_02.jpg" alt="What is ISO 30301?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">What is ISO 30301?</h3>
                                <p style="text-align:justify">
                                    ISO 30301 is a standard that ultimately supports the organization's mission, performance and objectives achieved through records management. The ISO 30301 standard establishes an organization's records management system to achieve the organization's performance and goals, and presents the necessary requirements.<br><br>
                                    This standard can be used and easily applied by all members of the organization, including management of the organization, when it comes to records management, such as the production and management of records.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_30301_03.jpg" alt="The importance of ISO 30301:2019 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 30301:2019 training</h3>
                                <p style="text-align:justify">
                                    The ISO 30301 standard does not stop at “management” of records, but moves to the area of “(business) management” of records, and is a standard that ultimately supports the organization's performance and goals desired by the organization by managing records rather than simply managing records<br><br>
                                    For effective records management, companies and industries need qualified professionals. The purpose of the ISO 30301 training course is to ensure that the competence of auditors and individuals who complete this program is competent, and to provide credibility to accredited personnel and to business and industry sectors.<br><br>
                                    As part of the training process, we will conduct assessments against requirements that reflect key competencies, knowledge and experience that define competence. The training program is based on the key standards for screening
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
        
        
        <!--------+++++++/ 컨텐츠 04 ISO 55001 시작 /++++++++----------->
        <article style="display:block;">
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 55001 Professional Training</h1>
                <h2 class="tit_cer fc_pointer">Asset Management - Management System Training Course</h2>
                
                <ul class="content">
                    <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso55001_01.jpg" alt="ISO 55001:2014 Outline">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 55001:2014 Outline</h3>
                                <p style="text-align:justify">
                                    Asset Management System (AMS) stands for Asset Management - Management System.<br><br>
                                    The dictionary meaning of asset management is to coordinate an organization's finance, operations, maintenance, and other asset-related activities to realize more value from assets.<br><br>
                                    It is an international standard aimed at maximizing the value and systematic management of the entire asset life cycle.<br><br>
                                    ISO 55001 is also helpful for the organization's asset management itself, but it can give customers and partners credibility by forming an image of stable financial management externally.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/ISO55001_02.jpg" alt="The importance of ISO 55001 training">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 55001 training</h3>
                                <p style="text-align:justify">
                                    For effective asset management, companies and industries need qualified professionals. The purpose of the ISO 55001 training course is to ensure that the competence of auditors and individuals who complete this program is competent, and to provide credibility to accredited personnel and to businesses and industries.<br><br>
                                    As part of the training process, we will conduct assessments against requirements that reflect key competencies, knowledge and experience that define competence. The training program is based on the key standards for screening
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