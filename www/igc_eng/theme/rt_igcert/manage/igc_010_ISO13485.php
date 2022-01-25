<?php
	include_once('./_common.php');
$g5['title'] = 'Health & Medical Device';
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
    <!--+++ 20.05.13 탭메뉴/ 시스템인증 > 보건 및 의료기기 시작 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">ISO 13485</a></li>
			<li><a href="javascript:;">ISO 15378</a></li>
			<li><a href="javascript:;">ISO 14155</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 시스템인증 > 보건 및 의료기기 종료 +++-->
	
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
            <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

    <!--+++ 20.05.13 탭컨텐츠 영역 시작 +++-->
    
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block;">	
            <section class="business_type5" class="area">
                <h1 class="tit_num"><span>ISO</span> 13485</h1>
                <h2 class="tit_cer fc_pointer">Medical Devices-Quality Management System</h2>	
                <p class="outline">
                    ISO 13485 is a standard that stipulates the requirements for the quality management system of organizations providing design and development, production, installation and additional services of medical device. In addition, this standard can be applied to external organizations that provide services such as sterilization, calibration, and sales. It can provide the basis for a quality management system to organizations that provide medical devices and related services.
                </p>

                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO 13485_01.jpg" alt="ISO 13485:2016 Requirements">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 13485:2016 Requirements</h3>
                                <p class="con_txt">
                                    ISO 13485 is an international standard for the quality management system of the medical device industry, which was established based on ISO 9001 by adding items related to medical devices.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Scope</li>
					                <li><span class="number">2. </span>Normative references</li>
					                <li><span class="number">3. </span>Terms and definitions</li>
					                <li><span class="number">4. </span>Quality Management System</li>
					                <li><span class="number">5. </span>Management responsibility</li>
					                <li><span class="number">6. </span>Resource management</li>
					                <li><span class="number">7. </span>Product realization</li>
					                <li><span class="number">8. </span>Measurement, analysis and improvement</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>

                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO 13485_02.jpg" alt="The importance of ISO 13485">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 13485</h3>
                                <p class="con_txt">
                                    Medical devices have a direct impact on human life and health, so they must ensure a higher level of stability than any other product. Therefore, the medical device industry must meet domestic regulatory systems, international standards and other requirements.<br><br>
                                    In order to meet the requirements of the EU Medical Device Directive, a quality system must be established, and some countries, such as Canada, require ISO 13485 certification for product sales.<br><br>
                                    With ISO 13485 system certification, A manufacturers who manufacture medical devices can demonstrate that their system meets the comprehensive requirements for quality management systems and the specific requirements for medical devices.<br><br>
                                    This standard helps following :
                                </p>
                                
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Management of all processes of the organization through ISO 13485 quality management system</li>
					                <li><span class="number">2. </span>Improvement of Work environment</li>
					                <li><span class="number">3. </span>Proactive quality management</li>
					                <li><span class="number">4. </span>Improving the awareness of the quality management system for all employees</li>
					                <li><span class="number">5. </span>Reduce cost and increase efficiency</li>
                                </ul>
                            </dd>
                        </dl>			
                    </li>

                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO 13485_03.jpg" alt="Estimated Effectiveness of ISO 13485">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Estimated Effectiveness of ISO 13485</h3>
                                <p class="con_txt">
                                    obtaining ISO 13485 certification, organizations can benefit from :
                                </p>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>Clients Satisfaction
                                    </span>
                                    <p>
                                        Achieved by delivering products that consistently meet customer requirements, including quality, safety and legal requirements.
                                    </p>
                                </div>
                                  
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>Reduction of Operational cost
                                    </span>
                                    <p>
                                        Operational efficiency improvement through continuous process improvement
                                    </p>
                                </div>
                                  
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>Improvement of a relationship between shareholders
                                    </span>
                                    <p>
                                        increase organizational awareness with employees, customers and suppliers
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">4. </span>Compliance
                                    </span>
                                    <p>
                                        Understanding legal and regulatory requirements that may affect the organization and its customers
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">5. </span>Improvement of risk management
                                    </span>
                                    <p>
                                        Improve risk management through improved traceability of products and services
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">6. </span>Verification of Business credibility
                                    </span>
                                    <p>
                                        business credential through certification to international standards
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">7. </span>Business Expansion
                                    </span>
                                    <p>
                                        Satisfying the requirements for entering overseas markets
                                    </p>
                                </div>
                            </dd>
                        </dl>			
                    </li>

                    <li><!-- content 1-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_9001_03.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p style="text-align: justify">
                                    IGC has been accredited for ISO 13485 by IAS, an Accreditation Body in the United States, and provides certification services for quality management systems.<br><br>
                                    The auditors of IGC are contributing to the continuous development of customers by accurately assessing the suitability of the medical device quality management system through the technology and expertise accumulated over the years.<br><br>
                                    As a trusted global leader in management system certification, IGC offers ISO 13485 certification as well as CE and FDA.<br><br>
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
           
            </article>
          
            <!--+++++ 컨텐츠 02 시스템인증 > 보건 및 의료기기 +++++-->
            <article>
                <section class="business_type5" class="area">
                    <h1 class="tit_num"><span>ISO</span> 15378</h1>
                    <h2 class="tit_cer fc_pointer">Primary packaging materials for medicinal products</h2>		
                    <div class="outline">
                        ISO 15378:2017 is a standard for primary packaging materials for medicinal products and also non-accredited standard developed to prove a quality management system to an organizations who supply materials. Primary packaging materials are packaging materials that directly contact the contents such as pharmaceuticals, medical devices and cosmetics. It includes glass, plastic, rubber, and aluminum.<br><br>
                        The requirements of ISO 9001 and the requirements of GMP (Good Manufacturing Practice) must be applied. The requirements is integrated with GMP principles for design, manufacture and supply and quality management systems. The realization of GMP principles in the management of primary packaging within an organization is very important for the safety of patients using pharmaceuticals that come in direct contact with the materials.<br><br>
                        In order to obtain ISO 15378:2017 certification, the following must be complied.
                    </div>
                    <div class="outline">
                        <ul class="list_st">
                            <li><span class="bullet"></span>Compliance with legal regulations</li>
                            <li><span class="bullet"></span>Identification, reduction and control of risks, including contamination and manufacturing errors</li>
                            <li><span class="bullet"></span>Approach for effective monitoring of the system</li>
                            <li><span class="bullet"></span>Provide continuous improvement for overall products and processes</li>
                        </ul>
                    </div>

                    <ul class="content">
                        <li><!-- content 2-1 -->
                            <dl>
                                <dt class="img_area">
                                    <img src="./image/ISO 15378-2017_04.jpg" alt="ISO 15378:2017 Requirements">
                                </dt>
                                <dd class="txt_area">
                                    <h3 class="con_tit">ISO 15378:2017 Requirements</h3>
                                    <p class="con_txt">
                                        The ISO 15378:2017 consists of the same 10 high-level structures, and must consistently meet the requirements of the clients including the requirements of the relevant standards and international standards. The ISO 15378:2017 consists of 10 chapters and 4 appendices. Manufacturers who understand and implement the quality management system can also obtain ISO 15378 certification through understanding and reflection of additional requirements.
                                    </p>
                                    <div class="con_txt">
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
                                    </div>
                                    <p class="con_txt">
                                        Following are the additional requirements of ISO 15378:2017.
                                    </p>
                                    <p class="con_txt_2">
                                        <span class="number">4.3 </span>Determining the scope of the quality management system : The document must be signed and, if necessary, designated as a security document, and must be identified.<br><br>
                                        <span class="number">4.4 </span>A record of important process should be double checked.<br><br>
                                        <span class="number">5.2 </span>It should accept the an audit client wants and meet the requirements.<br><br>
                                        <span class="number">5.5 </span>Maintain a signed list of employees and emphasize the independence of the quality department.<br><br>
                                        <span class="number">5.5.3 </span>In internal communication, legal matters must be included and important quality situations must be communicated in a timely manner.<br><br>
                                        <span class="number">5.8.3 </span>At the management review meeting, the effectiveness of education and training should be grasped.<br><br>
                                        <span class="number">6.2 </span>GMP training was emphasized.<br><br>
                                        <span class="number">6.4 </span>Criteria for clean room and work environment must be established, and pollution control, pest control, utility, and maintenance activities must be described.<br><br>
                                        <span class="number">7.1 </span>A risk assessment must be conducted.<br><br>
                                        <span class="number">7.2 </span>Any changes to the product must be notified and client requirements for disposal of discarded packaging materials must be documented.<br><br>
                                        <span class="number">7.2.3 </span>Clients should also be notified of product problems that have not yet been discovered.<br><br>
                                        <span class="number">7.3 </span>Risk assessment should also be carried out in the design and development stages, and clients should be notified of any design changes.<br><br>
                                        <span class="number">7.4 </span>Outsourced companies should be managed, and especially those conducting experiments should evaluate their capabilities. The quality department's approval is required for key supplies.<br><br>
                                        <span class="number">7.5.1 </span>The date of manufacturing must be managed and the production environmental conditions must be approved by the client. Containers and filling and packaging lines should be identified, and reprocessed materials also require client's approval. Line checks for the next work should be performed, and change management procedures should be established.<br><br>
                                        <span class="number">7.5.2 </span>The validity of the product process must be checked and performed, and if there are any changes, the validity must be checked again. In addition, this validity should be managed as a record, and data such as a results of function test when using the software and accuracy should be maintained.<br><br>
                                        <span class="number">7.5.3 </span>It must be possible to identify and track products in the production process including important process data.<br><br>
                                        <span class="number">7.5.5 </span>The retention period and storage conditions must be specified.<br><br>
                                        <span class="number">7.6 </span>The load of automatic inspection equipment must be tested, production data must be provided upon customer request, and critical measuring equipment must be calibrated.<br><br>
                                        <span class="number">8.2.4 </span>Records of deviation and warehousing inspection, process inspection, final inspection, and stored products must be managed.<br><br>
                                        <span class="number">8.3 </span>The risk of reworked products must be evaluated, and the quality department must approve the rework, and nonconformity must be managed under client's approval.<br><br>
                                        <span class="number">8.5.2 </span>Corrective action should be carried out as quickly as possible within a specific schedule.
                                    </p>
                                    <p class="con_txt_2">
                                        <span class="point_blk">
                                            * Scope
                                        </span>
                                        <span class="number">1. </span>If it is necessary to demonstrate the organization's ability to provide primary packaging for medicinal products, the requirements for the quality management system should be specified.<br><br>
                                        <span class="number">2. </span>This standard is applied to the design, manufacture and supply of primary packaging materials for medicinal products, and this standard can also be used for certification purposes.<br><br>
                                        <span class="number">3. </span>All requirements of this standard are general, developed to be applicable to all organizations regardless of product, and if the requirements of the standard cannot be applied to the organization and product, its provisions can be excluded.
                                    </p>
                                    <p class="con_txt_2">
                                        <span class="point_blk">
                                            * Additional requirements except ISO 9001:2015
                                        </span>
                                        The ISO 15378:2017 consists of 10 chapters and 4 appendices. Manufacturers who understand and implement the quality management system can also obtain ISO 15378 certification through understanding and reflection of additional requirements.
                                    </p>
                                </dd>
                            </dl>
                        </li>

                        <li><!-- content 2-2 -->
                            <dl>
                                <dt class="img_area">
                                    <img src="./image/ISO 15378-2017_000.jpg" alt="ISO The importance of ISO 15378">
                                </dt>
                                <dd class="txt_area">
                                    <h3 class="con_tit">ISO The importance of ISO 15378</h3>
                                    <p class="con_txt">
                                        Certification for primary packaging materials that apply the requirements of GMP and quality management systems is recognized worldwide. Primary packaging materials in direct contact with medicinal products is especially important. Because It is directly related to the health of people or animals using pharmaceuticals.<br><br>
                                        The advantages of ISO 15378 certification are as follows :
                                    </p>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li>
                                                <span class="number">1. </span>It can reduce costs by minimizing contamination, mixing and manufacturing errors and waste in manufacturing and improving productivity.
                                            </li>
                                            <li>
                                                <span class="number">2. </span>By providing guidance on risk management and validation, you can mitigate the risks identified as contamination in your products, and ensure product efficacy and shelf life.
                                            </li>
                                            <li>
                                                <span class="number">3. </span>By complying with GMP requirements in accordance with the ISO 15378:2017, you can improve your production process proficiency.
                                            </li>
                                            <li>
                                                <span class="number">4. </span>By producing products in compliance with the requirements of the quality management system and GMP requirements, high-quality products are guaranteed and this can lead to improved clients' satisfaction, and can establish optimized quality management system requirements.
                                            </li>
                                            <li>
                                                <span class="number">5. </span>It can help protect your brand by enhancing your organization's value with key stakeholders and ensure the quality and stability of your organization.
                                            </li>
                                            <li>
                                                <span class="number">6. </span>It helps organizations effectively manage risk by helping organizations identify, control and manage risks throughout the ISO 15378 audit process.
                                            </li>
                                        </ul>
                                    </div>
                                </dd>
                            </dl>
                        </li>

                        <li><!-- content 2-3 -->
                            <dl>
                                <dt class="img_area">
                                    <img src="./image/ISO 15378-2017_05.jpg" alt="IGC’s Competency">
                                </dt>
                                <dd class="txt_area">
                                    <h3 class="con_tit">IGC’s Competency</h3>
                                    <ul class="list_st">
                                        <li>
                                            <span class="number">1. </span>IGC has been accredited for ISO 13485 by IAS, an Accreditation Body in the United States, and provides certification services for quality management systems.
                                        </li>
                                        <li>
                                            <span class="number">2. </span>The auditors of IGC are contributing to the continuous development of customers by accurately assessing the suitability of the medical device quality management system through the technology and expertise accumulated over the years.
                                        </li>
                                        <li>
                                            <span class="number">3. </span>As a trusted global leader in management system certification, IGC offers ISO 9001 and ISO 13485 certification as well as environmental management and other management systems.
                                        </li>
                                        <li>
                                            <span class="number">4. </span>IGC has up-to-date knowledge of a wide range of specific scopes and legal requirements in major markets around the world, and provides the knowledge and services to support your entire global operation.
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
        </article><!--+++++ 컨텐츠 02 시스템인증 > 보건 및 의료기기 종료+++++-->  


        <article><!--+++++ 컨텐츠 03 시스템인증 > 보건 및 의료기기 시작+++++-->
            <section class="business_type5" class="area">
                <h1 class="tit_num"><span>ISO</span> 14155</h1>
                <h2 class="tit_cer fc_pointer">Clinical investigation of medical devices for human subjects - Good clinical practice</h2>
                <p class="outline">
                    ISO 14155 is 'Clinical investigation of medical devices for human subjects -Good Clinical Practice (GCP)', which provides guidelines for clinical investigation principles, procedures to be carried out, and information to be collected.<br><br>
                    By conducting clinical investigation according to ISO 14155, it is possible to collect objective and reliable scientific clinical data while protecting the safety and health of subjects. In addition, not only the EU, but also United States, Canada, Brazil, Australia, Japan, China, and Russia have recognized medical device clinical investigation and clinical data based on ISO 14155, so their importance and efficiency will increase further.
                </p>

                <ul class="content">
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso_14155_01.jpg" alt="ISO 14155:2011 Requirements">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 14155:2011 Requirements</h3>
                                <p class="con_txt">
                                    ISO 14155:2011 is a standard that introduces not only the GCP, but also the concept of research review by sponsors, researchers, and sites related to the clinical quality management process. It enables accurate and reliable clinical data collection with ethical considerations and a step-by-step approach to clinical investigation.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Scope</li>
                                    <li><span class="number">2. </span>Normative reference</li>
                                    <li><span class="number">3. </span>Terms and definitions</li>
                                    <li><span class="number">4. </span>Summary of good clinical practice (GCP) principles</li>
                                    <li><span class="number">5. </span>Ethical considerations</li>
                                    <li><span class="number">6. </span>Clinical investigation planning</li>
                                    <li><span class="number">7. </span>Clinical investigation conduct</li>
                                    <li><span class="number">8. </span>Suspension, termination, and close-out of the clinical investigation</li>
                                    <li><span class="number">9. </span>Responsibilities of the sponsor</li>
                                    <li><span class="number">10. </span>Responsibilities of the principal investigator</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>

                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso_14155_02.jpg" alt="The importance of ISO 14155">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 14155</h3>
                                <p class="con_txt">
                                    Proper design of the clinical investigation plan is essential. Failure to disclose the proper rules and procedures for data collection is very important as it can result in the medical device manufacturer's safety and performance claims being insufficiently supported. In addition, compliance with this standard is vital evidence that the rights, stability, and well-being of subjects are guaranteed and that clinical investigation data are reliable.<br><br>
                                    This standard helps following :
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Identification of all possible risks associated with medical devices</li>
                                    <li><span class="number">2. </span>Clinical data related to safety and performance can be collected</li>
                                    <li><span class="number">3. </span>Protecting patient safety and welfare</li>
                                    <li><span class="number">4. </span>Device’s conformity assessment</li>
                                </ul>
                            </dd>
                        </dl>			
                    </li>

                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso_14155_03.jpg" alt="Estimated Effectiveness of ISO 14155">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Estimated Effectiveness of ISO 14155</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>Quality Management System Certification and Audit Specialist
                                    </span>
                                    <p>
                                        In general, approval of medical devices requires implementation of a quality management system. IGC performs quality management system certification, audit and factory audit in accordance with most international regulations and standards, allowing customers to reduce time and cost and receive integrated inspection and audit.
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>Provision of the best solution
                                    </span>
                                    <p>
                                        IGC provides testing services necessary to enter the major medical device market in accordance with international standards and regulations.
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>Partnership with professional groups
                                    </span>
                                    <p>
                                        IGC has accumulated expertise in technology and regulation for medical devices for a long time, and is consistently trusted by various organizations ranging from global manufacturers to local research institutes.
                                    </p>
                                </div>
                            </dd>
                        </dl>			
                    </li>

                    <li><!-- content 3-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_9001_03.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p class="con_txt">
                                    From May 2020, when MDR is fully applied, clinical data and research results based on ISO 14155 will be required for the export of medical devices to the EU. IGC's medical device clinical experts will conduct a GCP compliance review for your clinical investigation and provide corrective action recommendations.<br><br>
                                    IGC has the best Competency to :
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Clinical investigation management and monitoring of Medical device</li>
					                <li><span class="number">2. </span>Design of medical device clinical investigation research and Support of protocol development</li>
					                <li><span class="number">3. </span>Review of clinical investigation report</li>
					                <li><span class="number">4. </span>Review of Clinical Trial Master File</li>
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
           
        </article><!--+++++ 컨텐츠 03 시스템인증 > 보건 및 의료기기 종료+++++-->  
    </div> <!---------++++++/ <div class="tab_con">  종료 /++++++++++------------>
</div> <!---------------/ <div class="content_wrap" 종료   / ------------------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>