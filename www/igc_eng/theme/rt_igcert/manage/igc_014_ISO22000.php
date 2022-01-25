<?php
	include_once('./_common.php');
$g5['title'] = 'Food';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
        .tit_img { width: 90%;margin: 0 auto 50px }
        
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
			<li class="on"><a href="javascript:;">ISO 22000</a></li>
			<li><a href="javascript:;">FSSC 22000</a></li>
			<li><a href="javascript:;">FDA FSMA</a></li>
			<li><a href="javascript:;">Global HACCP</a></li>
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
		    <h1 class="tit_num"><span>ISO</span> 22000</h1>
		    <h2 class="tit_cer fc_pointer">Food Safety Management</h2>		
		    <div class="outline">
                ISO 22000 is an international standard suitable for the entire food chain business, including equipment production, material packaging, detergents, additives and raw materials.<br><br>
                ISO 22000 is a standard in which the main contents of ISO 9001 and HACCP are mixed and supplemented, thereby providing an effective framework for the development, implementation and continuous improvement of the Food Safety Management System (FSMS).<br><br>
                With the revision of ISO 22000 in June 2018, the existing ISO 22000:2005 certificates will expire on June 1, 2021. The organizations certified to ISO 22000:2005 must complete the transition to ISO 22000:2018 before the expiration date, and all initial and re-certification organizations must be certified to ISO 22000:2018 after June 2020.<br><br>
                Major changes to ISO 22000:2018 are as follows :
            </div>
            <div class="outline">
                <ul class="list_st">
                    <li><span class="bullet"></span>Stronger emphasis on leadership responsibilities</li>
                    <li><span class="bullet"></span>Applying a risk-based approach to developing a food safety management system</li>
                    <li>
                        <span class="bullet"></span>Clarification of key concepts including :
                        <ul class="list_st">
                            <li><span class="number">① </span>Plan-Do-Check-Act cycle has two separate cycles : one that deals with the management system and one that deals with the HACCP principles, working together within this standard</li>
                            <li><span class="number">② </span>Differentiation of key terms including Critical Control Points (CCPs), Operational Prerequisite Programs (Operational PRPs), and Prerequisite Programs (PRPs)</li>
                        </ul>
                    </li>
                    <li><span class="bullet"></span>Improved versatility with other ISO management systems through content relocation of standards with high-level structure structures</li>
                </ul>
            </div>
		    
		    <ul class="content">
                <li><!-- content 1-1 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/iso_22000_01.jpg" alt="ISO 22000:2018 Requirements">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">ISO 22000:2018 Requirements</h3>
                            <p class="con_txt">
                                ISO 22000:2018 applies a high-level structure that is applied to standards such as ISO 9001:2015 and can be managed by integrating with other standards. In addition, the clarity and applicability of the standard are improved with consistent use of structure, definitions, and terminology.
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
                
                <li><!-- content 1-2 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/iso_22000_02.jpg" alt="The importance of ISO 22000">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">The importance of ISO 22000</h3>
                            <p class="con_txt">
                                ISO 22000 integrates the principles and application stages of the Hazard Analysis and Critical Control Points (HACCP) system developed by the International Food Standards Committee.<br><br>
                                This standard requires the identification and evaluation of all expected hazards in the food chain, including hazards that may be associated with process forms and facilities. Therefore, ISO 22000 helps to distinguish between identified hazards that need and don’t need to be managed and provide a means for documentation.<br><br>
                                This standard helps you as the following things :
                            </p>
                            <div class="con_txt">
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Establishment of effective FSMS management measures and minimization of risks in the implementation process</li>
                                    <li><span class="number">2. </span>Secure reliability of the organization</li>
                                    <li><span class="number">3. </span>Improving employees' sense of responsibility</li>
                                    <li><span class="number">4. </span>Improving the sustainability of the business</li>
                                </ul>
                            </div>
                            <p class="con_txt">
                                This standard is applicable to all organizations directly or indirectly involved in the food chain, including the follows :
                            </p>
                            <div class="con_txt">
                                <ul class="list_st">
                                    <li><span class="number">1. </span>The producers of feed, animal food, and ingredients</li>
                                    <li><span class="number">2. </span>The harvesters of wild plants and animals, farmers</li>
                                    <li><span class="number">3. </span>Manufacturers and retailers of food</li>
                                    <li><span class="number">4. </span>The organization providing food services including restaurants, fast food franchises, hospitals, hotels, and catering</li>
                                    <li><span class="number">5. </span>Storage and Distribution services, suppliers of equipment, additives, raw materials, cleaning and disinfectants, and packaging materials</li>
                                </ul>
                            </div>
                            <p style="text-align:justify">
                                ※ In conclusion, some or all of the ISO 22000 requirements will apply to all products in the food industry or food chain.
                            </p>
                        </dd>
                    </dl>			
                </li>
			
			    <li><!-- content 1-3 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/iso_22000_03.jpg" alt="Estimated effectiveness of ISO 22000">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">Estimated effectiveness of ISO 22000</h3>
                            
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">1. </span>Clients Satisfaction
                                </span>
                                <p>
                                    Achieved through the delivery of products that consistently meet the client requirements, including quality, safety, and legality.
                                </p>
                            </div>
                            
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">2. </span>Reduced operating costs
                                </span>
                                <p>
                                    Consistently process improvement and reduced the costs due to operational efficacy
                                </p>
                            </div>
                              
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">3. </span>Operational Efficacy
                                </span>
                                <p>
                                    The integration of PRPs &amp; OPRPs and ISO 9001 Plan-Do-Check-Act to increase the effectiveness of the FSMS.
                                </p>
                            </div>
                              
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">4. </span>Improving stakeholder relationship
                                </span>
                                <p>
                                    Including employees, clients, and suppliers
                                </p>
                            </div>
                              
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">5. </span>Compliance with laws
                                </span>
                                <p>
                                    Understand how legal and regulatory requirements affect compliance with your company, clients and testing regulations through internal audits and management reviews.
                                </p>
                            </div>
                            
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">6. </span>Improving risk management
                                </span>
                                <p>
                                    Achieved through increased product consistency and traceability
                                </p>
                            </div>
                            
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">7. </span>Verified business reliability
                                </span>
                                <p>
                                    Achieved through independent verification of recognized standards
                                </p>
                            </div>
                            
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">8. </span>Business expansion
                                </span>
                                <p>
                                    The client requires a certificate as a delivery qualification
                                </p>
                            </div>
                        </dd>
                    </dl>
			    </li>

			    <li><!-- content 1-4 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/ISO_9001_03.jpg">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">IGC’s Competency</h3>
                            <p class="con_txt">
                                IGC has been accredited by IAS, an accreditation body in the United States, for FSSC 22000, providing certification services for management systems. IGC provides various services in the food sector in addition to FSSC 22000 certification based on global competitiveness.
                            </p>
                            <ul class="list_st">
                                <li><span class="number">1. </span>FSSC 22000 Training Organization</li>
                                <li><span class="number">2. </span>ISO 22000 Certification</li>
                                <li><span class="number">3. </span>Vegan</li>
                                <li><span class="number">4. </span>Food test (accredited by ISO 17025)</li>
                                <li><span class="number">5. </span>FSMA Accredited Third-Party Certification Body</li>
                                <li><span class="number">6. </span>PCQI Lead Instructor (2 persons)</li>
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

    </article>
    
    <!--+++++ 컨텐츠 02 시스템인증 > 식품 인증 > FSSC 22000 시작 +++++-->
    <article>
        <section class="business_type5" class="area">
            <h1 class="tit_num"><span>FSSC</span> 22000</h1>
            <h2 class="tit_cer fc_pointer">Food Safety System Certification</h2>		
            <p class="outline">
                The FSSC 22000 (Food Safety System Certification) standard is a food safety standard approved by the Global Food Safety Initiative (GFSI), the most influential food manufacturers, to introduce a food safety certification system suitable for the overall food industry.<br><br>
                As the world population grows, the demand for cheap, safe and high-quality food is increasing. To meet these needs, FSSC 22000 provides a reliable food safety platform to the food industry. The FSSC 22000 is based on ISO 22000, a combination of Sector Prerequisite Programs (PRPs) and additional FSSC 22000 requirements for suppliers of food products and their ingredients.<br><br>
                It applies to all food manufacturers, regardless of the size, complexity or location of the organization. In addition, storage at transport and production sites are included in the scope of certification.
            </p>
            
            <div class="tit_img">
                <img src="./image/FSSC22000_01.jpg" alt="Food Safety System Certification" style="width: 100%">
            </div>
            
            <p class="outline">
                IGC is an FSSC 22000 certification body accredited by IAS. IGC has the largest scope and number of clients in Korea. Therefore, the manufacturers certified FSSC 22000 can be trusted by buyers as the international demand for GFSI approved standards increases.<br><br>
                In particular, certificates from IGC can help enhance the company's image and strengthen its competitiveness in that it has obtained a certificate from a reliable certification body.
            </p>
            
            <ul class="content">
                <li><!-- content 2-1 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/FSSC22000_05.jpg" alt="FSSC 22000 Requirements">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">FSSC 22000 Requirements</h3>
                            <p class="con_txt">
                                The FSSC 22000 requirements consist of the following :
                            </p>
                            
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    &#10020; ISO 22000:2018
                                </span>
                            </div>
                            
                            <div class="con_txt_2">
                                <ul class="list_st">
                                    <span class="point_blk">
                                        &#10020; PRP (Prerequisite programs)
                                    </span>
                                    <li><span class="bullet"></span>ISO 22002-1 (Food manufacturing)</li>
                                    <li><span class="bullet"></span>ISO 22002-4 (Food packaging manufacturing)</li>
                                    <li><span class="bullet"></span>PAS 221 (Food Retail)</li>
                                </ul>
                            </div>
                            
                            <div class="con_txt_2">
                                <ul class="list_st">
                                    <span class="point_blk">
                                        &#10020; FSSC additional requirements
                                    </span>
                                    <li><span class="bullet"></span>Management of Services</li>
                                    <li><span class="bullet"></span>Product Labelling</li>
                                    <li><span class="bullet"></span>PAS 221 (Food Retail)</li>
                                    <li><span class="bullet"></span>Food defense</li>
                                    <li><span class="bullet"></span>Food fraud mitigation</li>
                                    <li><span class="bullet"></span>Logo Use</li>
                                    <li><span class="bullet"></span>Management of Allergens</li>
                                    <li><span class="bullet"></span>Environmental monitoring (Food chain categories C, I &amp; K)</li>
                                    <li><span class="bullet"></span>Transport and delivery (Food chain category FI)</li>
                                </ul>
                            </div>
                            
                            <div class="con_txt_2">
                                FSSC requirements are published on the FSSC 22000 website, and can be found at the following url.<br><br>
                                <p>
                                    <a href="https://www.fssc22000.com/wp-content/uploads/19.0528-FSSC-22000-Scheme-Version-5.pdf" target="_blank">[ Go to check FSSC 22000 Requirements (PDF file) ] ☜ Click!</a>
                                </p><br>
                                PDF file url : <br>https://www.fssc22000.com/wp-content/uploads/19.0528-FSSC-22000-Scheme-Version-5.pdf
                            </div>
                        </dd>
                    </dl>
                </li>

                <li><!-- content 2-2 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/FSSC22000_02.jpg" alt="The importance of FSSC 22000">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">The importance of FSSC 22000</h3>
                            
                            <div class="con_txt_2">
                                <ul class="list_st">
                                     <span class="point_blk">&#10020; The need for certification</span>
                                    <li>
                                        <span class="number">1. </span>Increasing client awareness of food safety and increasing demand for accurate management of safety
                                    </li>
                                    <li>
                                        <span class="number">2. </span>Increasing the need for certification to cover ISO 22000, etc. in accordance with the requirements of domestic/overseas buyers to ensure food safety
                                    </li>
                                    <li>
                                        <span class="number">3. </span>Trade Barriers in International Commerce for Food Safety
                                    </li>
                                    <li>
                                        <span class="number">4. </span>Prevention of food safety accidents and response to emergencies
                                    </li>
                                    <li>
                                        <span class="number">5. </span>Effective communication with related parties, such as food suppliers, internal and business partners
                                    </li>
                                    <li>
                                        <span class="number">6. </span>Improving the level of food safety management and preventing it in advance
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="con_txt_2">
                                <ul class="list_st">
                                     <span class="point_blk">&#10020; Benefits of certification</span>
                                    <li>
                                        <span class="number">1. </span>Maximizing the efficiency of the hygiene management system
                                    </li>
                                    <li>
                                        <span class="number">2. </span>Easily respond to domestic/overseas food safety regulations and strengthened laws
                                    </li>
                                    <li>
                                        <span class="number">3. </span>Compliance with food-related laws
                                    </li>
                                    <li>
                                        <span class="number">4. </span>Smooth communication with the supply chain
                                    </li>
                                    <li>
                                        <span class="number">5. </span>Increased awareness of responsibility for food industry workers
                                    </li>
                                    <li>
                                        <span class="number">6. </span>Integrated operation of various food-related programs (HACCP, PRPs, Food Defense &amp; Fraud)
                                    </li>
                                    <li>
                                        <span class="number">7. </span>Improvement of company image, reliability improvement and export increase effect by maintaining FSSC 22000 certification
                                    </li>
                                </ul>
                            </div>
                        </dd>
                    </dl>			
                </li>

                <li><!-- content 2-3 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/FSSC22000_03.jpg" alt="IGC’s Competency">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">IGC’s Competency</h3>
                            <p class="con_txt">
                                IGC has been accredited by IAS, an accreditation body in the United States, for FSSC 22000, providing certification services for management systems. IGC provides various services in the food sector in addition to FSSC 22000 certification based on global competitiveness.
                            </p>
                            <ul class="list_st">
                                <li>
                                    <span class="number">1. </span>FSSC 22000 Training Organization
                                </li>
                                <li>
                                    <span class="number">2. </span>ISO 22000 Certification
                                </li>
                                <li>
                                    <span class="number">3. </span>Vegan
                                </li>
                                <li>
                                    <span class="number">4. </span>Food test (accredited by ISO 17025)
                                </li>
                                <li>
                                    <span class="number">5. </span>FSMA Accredited Third-Party Certification Body
                                </li>
                                <li>
                                    <span class="number">6. </span>PCQI Lead Instructor (2 persons)
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
    </article>
    <!--+++++ 컨텐츠 02 시스템인증 > 식품 인증 > FSSC 22000 종료 +++++-->
    

    <!--+++++ 컨텐츠 03 시스템인증 > 식품 인증 > FDA FSMA 시작 +++++-->
    <article>
        <section class="business_type5" class="area">
            <h1 class="tit_num"><span>FDA </span> FSMA </h1>
            <h2 class="tit_cer fc_pointer">FDA Food Safety Modernization Act</h2>		
            <p class="outline">
                <span style="font-size:1.4rem;color:#1f2558">FSMA (Food Safety Modernization Act)</span><br><br>
                On January 4, 2011, the US government enacted the Food Safety Modernization Act (FSMA) for the purpose of protecting the safety of food supply and national health through prevention in advance. As a result, the FDA can focus on preventing food safety problems by establishing FSMA.<br><br>
                FSMA applies to facilities that manufacture, process, package or store food or feed. Also, companies that send food to the United States, such as producers, US importers, shippers, recipients, shippers, and transporters, must comply with FSMA. Therefore, according to FSMA, companies need to establish a food safety system that includes preventive management based on hazard analysis and prepare a documented food safety plan.
            </p>
                        
            <div class="tit_img">
                <img src="./image/FDA_FSMA_01.jpg" alt="FSMA" style="width: 100%">
            </div>
            
            <p class="outline">
                <span style="font-size:1.4rem;color:#1f2558">FSMA Accredited Third-Party Certification</span><br><br>
                IGC was accredited by the US FDA and IAS as a third party certification body for FDA FSMA, the 7th in the world and the first in Korea.
            </p>
            
            <div style="width: 100%">
                <img src="./image/FDA_FSMA_02.jpg" alt="FDA FSMA 제3자인증기관 인증서 샘플1" style="float:left;width:45%;margin:0 2.5%;" > 
				<img src="./image/FDA_FSMA_03.jpg" alt="FDA FSMA 제3자인증기관 인증서 샘플2" style="float:left;width:45%;margin:0 2.5%;">
            </div>
            
            <div class="outline">
                <span class="point_blk">
                    <a href="https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification" target="_blank">Confirmation accreditation information Click</a>
                </span>
                <a href="https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification" target="_blank">https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification</a><br><br>
                <p>
                    FSMA has a policy called Accredited Third-Party Certification Program. This program is designed to issue a certificate if the production facilities of foods produced outside of the United States comply with the requirements of FSMA by an authorized third party.<br><br>
                    These certificates are used to qualify for the Voluntary Qualified Importer Program (VQIP) or to be used by the FDA to prevent the import of food that may be harmful to American clients.
                </p>
            </div>
            
            <div>
                <div style="margin: 0 auto 30px">
                    <p class="point_blk">
                        <span class="number">1. </span>VQIP (Voluntary Qualified Importer Program)
                    </p>
                    <p style="padding-left:20px">
                        A program that allows the FDA to provide customs clearance benefits to food importers so that food can be brought into the United States quickly.
                    </p>
                </div>
                <div style="margin: 0 auto 30px">
                    <p class="point_blk">
                        <span class="number">2. </span>Certification procedure
                    </p>
                    <p style="padding-left:20px">
                        Application for certification &#8658; Signing a contract &#8658; Payment of audit fees &#8658; Submission of documents &#8658; 1st stage audit &#8658; Certification review (1st stage) &#8658; 2nd stage audit &#8658; Certification review (2nd stage) &#8658; Certificate issuance &#8658; Surveillance audit &#8658; Recertification audit
                    </p>
                </div>
                <div style="margin: 0 auto 30px">
                    <p class="point_blk">
                        <span class="number">3. </span>Third-Party Certification Program
                    </p>
                    <div class="tit_img">
                        <img src="./image/FDA_FSMA_04.png" alt="Third-Party Certification Program">
                        <span style="display:block;text-align:center;">FDA Food Safety Modernization Act Response Guidebook</span>
                    </div>
                </div>
                <div style="margin: 0 auto 30px">
                    <p class="point_blk">
                        <span class="number">4. </span>Exempted from accredited third-party certification ★
                    </p>
                    <p style="padding-left:20px">
                        <span style="display:block">- Alcoholic beverages manufactured at foreign facilities under certain circumstances</span>
                        <span style="display:block">- Specific meat, poultry and egg products supervised by the USDA at the time of import</span>
                    </p>
                </div>
            </div>

            <ul class="content">
                <li><!-- content 3-1 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/FDA_FSMA_05.jpg" alt="FSMA Third Party Certification Preparation">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">FSMA Third Party Certification Preparation</h3>
                            <p class="con_txt">
                                Food facilities should establish and implement a food safety system that includes risk analysis and preventive management based on the risk. In addition, the food safety plan must be prepared in writing and reviewed a Preventive Control Qualified Individual (PCQI).<br><br>
                                The food safety system shall establish a food safety plan that includes the following.
                            </p>
                            <div class="con_txt">
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Risk Analysis</li>
                                    <li><span class="number">2. </span>Preventive management (process, food allergens, hygiene, supply chain and others, recovery plan)</li>
                                    <li><span class="number">3. </span>Monitoring and operation of preventive management</li>
                                    <li><span class="number">4. </span>Corrective action and correction</li>
                                    <li><span class="number">5. </span>Verification</li>
                                </ul>
                            </div>
                            <p>
                                In the food safety plan, a recovery plan should be established so that products that are problematic for food safety can be recalled. In response, IGC also provides training courses for PCQI for the organization which related to the food that are exporting or planning to the US market.
                            </p>
                        </dd>
                    </dl>
                </li>

                <li><!-- content 3-2 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/FDA_FSMA_06.jpg" alt="The importance of FSMA Third Party Certification">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">The importance of FSMA Third Party Certification</h3>
                            <p style="text-align:justify">
                                FSMA focuses on prevention of food safety, which places new requirements from food manufacturers, facilities and importers in the United States and outside the United States. Therefore, selling and distributing products in the US market requires compliance with new requirements. In order to facilitate food exports to the U.S market in response to FSMA, organization that export food to the U.S. need careful preparation.
                            </p>
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
                                IGC was accredited by the US FDA and IAS as the FSMA Third Party Certification Body, the 7th in the world and the first in Korea.<br><br>
                                IGC has extensive knowledge of food safety regulations as it operates a food laboratory and conduct various food-related certifications.<br><br>
                                IGC provides fast and accurate services for our clients, helping clients make the right choices and demonstrate due diligence with FSMA compliance services.<br><br>
                                IGC is a leading provider of the FSMA Third Party Certification Body and provides fast and accurate certification services.
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
    <!--+++++ 컨텐츠 03 시스템인증 > 식품 인증 > FDA FSMA 종료 +++++-->
    

    <!--+++++ 컨텐츠 04 시스템인증 > 식품 인증 > Global HACCP 시작 +++++-->
    <article>
        <section class="business_type5" class="area">
		    <h1 class="tit_num"><span>Global HACCP</span></h1>
		    <h2 class="tit_cer fc_pointer">Hazard Analysis and Critical Control Points</h2>		
		    <p class="outline">
                Codex Alimentarius Commission (CODEX) has presented guidelines for the application of HACCP and has applied HACCP in accordance with these guidelines worldwide.<br><br>
                HACCP is a management system that deals with food safety through analysis and control of biological, chemical and physical risks from raw material production, procurement and handling to finished product manufacturing and distribution, and consumption.<br><br>
                HACCP-based systems are legal requirements in the United States and several countries including EU, in all but primary production.<br><br>
                Demonstrating the true commitment to food safety through HACCP compliance opens up new business opportunities around the world by acting as an effective market enabler.
            </p>
            
            <ul class="content">
                <li><!-- content 4-1 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/Global HACCP_01.jpg" alt="Global HACCP 7 Principles">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit"><span>Global HACCP 7 Principles</span></h3>
                            <p class="con_txt">
                                Codex Alimentarius Commission (CODEX) suggested 7 principles guidelines for HACCP application.
                            </p>
                            <ul class="list_st">
                                <li><span class="number">1. </span>Conduct a hazard analysis</li>
                                <li><span class="number">2. </span>Determine critical control points (CCPs)</li>
                                <li><span class="number">3. </span>Establish critical limits</li>
                                <li><span class="number">4. </span>Establish monitoring procedures</li>
                                <li><span class="number">5. </span>Establish corrective actions</li>
                                <li><span class="number">6. </span>Establish verification procedures</li>
                                <li><span class="number">7. </span>Establish record-keeping and documentation procedures</li>
                            </ul>
                        </dd>
                    </dl>
                </li>

                <li><!-- content 4-2 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/Global HACCP_02.jpg" alt="The importance of HACCP">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit"><span>The importance of HACCP</span></h3>
                            <p class="con_txt">
                                The principles of the Hazard Analysis and Critical Control Points (HACCP) system developed by CODEX are the basis for many certification schemes such as ISO 22000, FSSC 22000, and FSMA. This guidance requires the identification and evaluation of all expected hazards in the food chain, including hazards that may be associated with the type of process and facility used.<br><br>
                                Through Global HACCP, organizations can expect the following effects.
                            </p>
                            <ul class="list_st">
                                <li><span class="number">1. </span>Establishment of effective FSMS management measures and minimization of risks in the implementation process</li>
                                <li><span class="number">2. </span>Secure reliability of the organization</li>
                                <li><span class="number">3. </span>Improving employees' sense of responsibility</li>
                                <li><span class="number">4. </span>Improving the sustainability of the business</li>
                            </ul>
                        </dd>
                    </dl>			
                </li>

                <li><!-- content 4-3 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/Global HACCP_03.jpg" alt="IGC’s Competency">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">IGC’s Competency</h3>
                            <p style="text-align:justify">
                                IGC has a large number of experienced auditors with extensive experience and expertise.<br><br>
                                IGC quickly and accurately supports the processes necessary for organization’s growth with additional support through ISO 22000, FSSC 22000 and EAC certification, as well as FSVP and PCQI expert training courses.
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
    <!--+++++ 컨텐츠 04 시스템인증 > 식품 인증 > Global HACCP 종료 +++++-->
    
    </div> <!------------+++++++/ <div class="tab_con"> 종료  /+++++++++++--------------->
</div><!--------++++++++/ <div class="content_wrap">  /++++++++---------------->




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>