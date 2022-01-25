<?php
	include_once('./_common.php');
$g5['title'] = 'Information Security '; 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #1F88E5 }/* 상세페이지 포인트 컬러 */
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
    .list_st li .bullet { content: '';position: absolute;display: inline-block;width: 5px;height: 5px;background: #222;border-radius: 50%;top: 10px;left: 0}/* 리스트 스타일 2 */

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
	<!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">ISO/IEC 27001</a></li>
			<li><a href="javascript:;">ISO/IEC 27701</a></li>
			<li class="on"><a href="javascript:;">ISO/IEC 20000-1</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
        <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.07 탭컨텐츠 영역 +++-->
	
	<div class="tab_con">
        <!--+++++ 컨텐츠 01 +++++-->
        <article>
	        <section class="business_type5" class="area">
                <h1 class="tit_num"><span>ISO/IEC</span> 27001</h1>
                <h2 class="tit_cer fc_pointer">Information Security Management System</h2>
                <p class="outline">
                    ISO/IEC 27001 is an international standard for information security management system established by the International Organization for Standardization (ISO) and the International Electrotechnical Commission (IEC) and the most authoritative international certification standard in the field of information security. This covers 133 items in 11 areas related to information security, including information protection policy, physical security, and information access control.
                </p>

                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_IEC 27001_02.jpg" alt="ISO/IEC 27001:2013 Standard">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 27001:2013 Standard</h3>
                                <p class="con_txt">
                                    ISO/IEC 27001 is composed of 10 items including organizational environment, leadership, planning, support, operation, performance evaluation, and improvement, and 14 control items (refer to ISO/IEC 27002 for control items). The requirements of this standard have been formulated to be general for applicable to any organization, regardless of its type, size or characteristics.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Scope</li>
                                    <li><span class="number">2. </span>Normative References</li>
                                    <li><span class="number">3. </span>Terms and definitions</li>
                                    <li><span class="number">4. </span>Context of the Organization</li>
                                    <li><span class="number">5. </span>Leadership</li>
                                    <li><span class="number">6. </span>Planning</li>
                                    <li><span class="number">7. </span>Support</li>
                                    <li><span class="number">8. </span>Operation</li>
                                    <li><span class="number">9. </span>Performance Evaluation</li>
                                    <li><span class="number">10. </span>Improvement</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
			
                    <li><!-- content 02 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_IEC 27001_01.jpg" alt="The importance of ISO/IEC 27001">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO/IEC 27001</h3>
                                <p class="con_txt">
                                    Through ISO/IEC 27001 certification, organizations can benefit like below :
                                </p>
                                 
                                 <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>Customer satisfaction
                                    </span>
                                    <p>
                                        Realization of customer satisfaction through protection of customer information
                                    </p>
                                </div>
                                 
                                 <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>Business continuity
                                    </span>
                                    <p>
                                        Secure business stability through risk management, legal compliance and vigilance on future security issues and concerns
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>Compliance with laws
                                    </span>
                                    <p>
                                        Understand how legal/regulatory requirements affect you and your customers, and how to reduce the risk of legal sanctions
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">4. </span>Risk management
                                    </span>
                                    <p>
                                        Ensure that customer records, accounting information and intellectual property rights are protected from loss, theft and damage through a systematic framework
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">5. </span>Proof of business reliability
                                    </span>
                                    <p>
                                        Reliability is secured through independent verification of recognized global industry standards
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">6. </span>Business expansion
                                    </span>
                                    <p>
                                        Customers often require a certificate as a condition of delivery, so certification can help you expand your business.
                                    </p>
                                </div>
                            </dd>
                        </dl>			
                    </li>
			
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_IEC 27001_04.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p style="text-align: justify">
                                    IGC has been accredited for ISO/IEC 27001 by IAS, an Accreditation Body in the United States, and provides certification services for quality management systems.<br><br>
                                    IGC has a lot of knowledge and rich experience in certification activities for quality management systems in various industries, including information security.<br><br>
                                    IGC has up-to-date knowledge of a wide range of specific scopes and legal requirements in major markets around the world, and provides the knowledge and services to support your entire global operation.
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
                        <li><p><em><strong>04</strong></em><span>Medical Devices</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Food</span></p></li>
                        <li><p><em><strong>06</strong></em><span>Energy</span></p></li>
                        <li><p><em><strong>07</strong></em><span>Information Security</span></p></li>
                        <li><p><em><strong>08</strong></em><span>Anti-Bribery</span></p></li>
                        <li><p><em><strong>09</strong></em><span>Education</span></p></li>
                        <li><p><em><strong>10</strong></em><span>Business Continuity</span></p></li>
                        <li><p><em><strong>11</strong></em><span>Cosmetics</span></p></li>
                        <li><p><em><strong>12</strong></em><span>Customer Satisfaction</span></p></li>
                        <li><p><em><strong>13</strong></em><span>Social Accountability</span></p></li>
                    </ul>
                </div>
            </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>
           	
        </article> <!--+++++ /컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	
        <!--+++ 컨텐츠 02 /20.06.08 ISO/IEC 27701 탭컨텐츠 영역  시작+++-->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num"><span>ISO/IEC </span>27701</h1>
                <h2 class="tit_cer fc_pointer">Privacy Information Management</h2>
                <div class="outline">
                    As data collection and processing increases, there is a growing demand for how data should be managed and processed to reduce privacy threats.<br><br>
                    This became the background for the establishment of the international standard ISO/IEC 27701.<br><br>
                    ISO/IEC 27701 is an extension of ISO/IEC 27001 and ISO/IEC 27002, and provides requirements and guidelines for establishing, implementing, maintaining and continually improving PIMS (Privacy Information Management System) for organizational privacy management.<br><br>
                    It also provides guidance on PII controllers and PII processors that are responsible and responsible for the processing of Personally Identifiable Information (PII).<br><br>
                    ISO/IEC 27701 is for all type of organizations, including public and private enterprises, government agencies and non-profit organizations, including PII controllers and/or PII processors that process PII within the Information Security Management System (ISMS) based on ISO/IEC 27001.
                </div>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_IEC 27701_02.jpg" alt="ISO/IEC 27701:2019 Standard">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 27701:2019 Standard</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Scope</li>
                                    <li><span class="number">2. </span>Normative references</li>
                                    <li><span class="number">3. </span>Terms, definitions and abbreviation</li>
                                    <li><span class="number">4. </span>General</li>
                                    <li><span class="number">5. </span>PIMS-specific requirements related to ISO/IEC 27001</li>
                                    <li><span class="number">6. </span>PIMS-specific guidance related to ISO/IEC 27002</li>
                                    <li><span class="number">7. </span>Additional ISO/IEC 27002 guidance for PII controllers</li>
                                    <li><span class="number">8. </span>Additional ISO/IEC 27002 guidance for PII processors</li>
                                </ul>
                            </dd>
                        </dl>			
                    </li>

                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_IEC 27701_03.jpg" alt="The importance of ISO/IEC 27701">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO/IEC 27701</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Build trust in your personal information management skills</li>
                                    <li><span class="number">2. </span>Clarification of roles and responsibilities within the organization</li>
                                    <li><span class="number">3. </span>Prevention of violations by improving internal capabilities and improving processes</li>
                                    <li><span class="number">4. </span>Provide established controls and transparency for privacy management</li>
                                    <li><span class="number">5. </span>Facilitating consensus with business partners</li>
                                    <li><span class="number">6. </span>Easily integrate with leading information security standard ISO/IEC 27001</li>
                                </ul>
                            </dd>
                        </dl>	
                    </li>

                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_IEC 27701_04.jpg" alt="Estimated Effectiveness of ISO/IEC 27701">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Estimated Effectiveness of ISO/IEC 27701</h3>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="number">1. </span>Coordinate multiple regulatory requirements using a universal group of operational controls to enable consistent and efficient implementation.</li>
                                        <li><span class="number">2. </span>PIMS can reduce the cost of auditing certification by evaluating it against multiple regulatory requirements.</li>
                                        <li><span class="number">3. </span>Since most clients are spread around the world, it is recommended to use ISO international standards to manage compliance.</li>
                                    </ul>
                                </div>
                                <p style="text-align:justify">
                                    This reliance on compliance increases the importance of certification to standards.<br><br>
                                    You can benefit from partners and suppliers, especially when dealing with large amounts of sensitive data.
                                </p>
                            </dd>
                        </dl>	
                    </li>

                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_IEC 27701_05.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p style="text-align: justify">
                                    IGC has been accredited for ISO/IEC 27701 by IAS, an Accreditation Body in the United States, and provides certification services for quality management systems.<br><br>
                                    IGC has a lot of knowledge and rich experience in certification activities for quality management systems in various industries, including information security.<br><br>
                                    IGC has up-to-date knowledge of a wide range of specific scopes and legal requirements in major markets around the world, and provides the knowledge and services to support your entire global operation.
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
                        <li><p><em><strong>04</strong></em><span>Medical Devices</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Food</span></p></li>
                        <li><p><em><strong>06</strong></em><span>Energy</span></p></li>
                        <li><p><em><strong>07</strong></em><span>Information Security</span></p></li>
                        <li><p><em><strong>08</strong></em><span>Anti-Bribery</span></p></li>
                        <li><p><em><strong>09</strong></em><span>Education</span></p></li>
                        <li><p><em><strong>10</strong></em><span>Business Continuity</span></p></li>
                        <li><p><em><strong>11</strong></em><span>Cosmetics</span></p></li>
                        <li><p><em><strong>12</strong></em><span>Customer Satisfaction</span></p></li>
                        <li><p><em><strong>13</strong></em><span>Social Accountability</span></p></li>
                    </ul>
                </div>
            </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
        </article><!--+++ 02 컨텐츠 /20.06.08 ISO/IEC 27701 탭컨텐츠 영역 종료 +++-->
   
        <!--+++ 03 컨텐츠 /20.05.25 탭컨텐츠 영역 시작 +++-->
        <article style="display:block;">
            <section class="business_type5" class="area">
		        <h1 class="tit_num"><span>ISO/IEC</span> 20000-1</h1>
		        <h2 class="tit_cer fc_pointer">Information technology — Service management</h2>		
		        <p class="outline">
                    Service Management System (SMS) is applied to the activities performed to design, plan, provide, operate, and control IT services performed by an organization. ISO/IEC 20000-1 is the first international standard applicable to these types, established in 2005 and has been revised twice in 2011 and 2018.<br><br>
                    ISO/IEC 20000-1 includes service planning, design, transformation, delivery and improvement to meet service requirements and deliver value.
                </p>
                
                <ul class="content">
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso20000-1_1.jpg" alt="ISO/IEC 20000-1:2018 Requirements">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 20000-1:2018 Requirements</h3>
                                <p class="con_txt">
                                    ISO/IEC 20000-1 consists of 10 items: organizational environment, leadership, planning, support, operations, performance evaluation and improvement.<br><br>
                                    See ISO/IEC 20000-3 for guide documents and ISO/IEC 20000-5 for best practices.<br><br>
                                    The requirements of this standard have been established to be general and applicable to all organizations providing services, regardless of the type or size of the organization.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Scope</li>
                                    <li><span class="number">2. </span>Normative references</li>
                                    <li><span class="number">3. </span>Terms and definitions</li>
                                    <li><span class="number">4. </span>Context of the organization</li>
                                    <li><span class="number">5. </span>Leadership</li>
                                    <li><span class="number">6. </span>Planning</li>
                                    <li><span class="number">7. </span>Support of the service management system</li>
                                    <li><span class="number">8. </span>Operation of the service management system</li>
                                    <li><span class="number">9. </span>Performance evaluation</li>
                                    <li><span class="number">10. </span>Improvement</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
			
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso20000-1_2.jpg" alt="The Importance of ISO/IEC 20000-1">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The Importance of ISO/IEC 20000-1</h3>
                                <p class="con_txt">
                                    Organizations can achieve the following effects through ISO/IEC 20000-1 certification.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Improvement of service quality</li>
                                    <li><span class="number">2. </span>Maintain a consistent level of service quality</li>
                                    <li><span class="number">3. </span>Demonstrate ability to plan, design, transform, deliver and improve services</li>
                                    <li><span class="number">4. </span>Monitoring, measurement and review of SMS and service</li>
                                    <li><span class="number">5. </span>Service commercialization, service integration, supplier management by company, customer service value determination</li>
                                </ul>
                            </dd>
                        </dl>			
                    </li>

                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_9001_03.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p style="text-align:justify">
                                    IGC auditors are experts with IT experience and technical qualifications in each sector, providing a thorough and honest audit of the implementation and effectiveness of the ISO/IEC 20000-1 management system.<br><br>
                                    In addition, we have the knowledge and capabilities to meet your business needs, so we provide an effective and thorough audit of the management system.
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
                        <li><p><em><strong>04</strong></em><span>Medical Devices</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Food</span></p></li>
                        <li><p><em><strong>06</strong></em><span>Energy</span></p></li>
                        <li><p><em><strong>07</strong></em><span>Information Security</span></p></li>
                        <li><p><em><strong>08</strong></em><span>Anti-Bribery</span></p></li>
                        <li><p><em><strong>09</strong></em><span>Education</span></p></li>
                        <li><p><em><strong>10</strong></em><span>Business Continuity</span></p></li>
                        <li><p><em><strong>11</strong></em><span>Cosmetics</span></p></li>
                        <li><p><em><strong>12</strong></em><span>Customer Satisfaction</span></p></li>
                        <li><p><em><strong>13</strong></em><span>Social Accountability</span></p></li>
                    </ul>
                </div>
            </section>
            <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!--+++ /20.05.25 탭컨텐츠 영역 종료+++-->
    </div><!------------ class="tab_con" 종료 ---------------->
</div>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>