<?php
	include_once('./_common.php');
$g5['title'] = 'Russian Product Certification';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #404953 }/* 상세페이지 포인트 컬러 */
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
    .content li .txt_area .con_txt_3 { margin: 0 0 50px;border-bottom: 1px solid #ddd }/* 텍스트 영역 내용 스타일 3 */
    .content li .txt_area .con_txt_3:last-child { margin: 0;border: none }

    /* 리스트 스타일 생성 */
    .list_st li { position: relative;padding: 0 0 4px 30px }
    .list_st li .number { position: absolute;display: inline-block;width: 5px;height: 5px;top: 0;left: 0}/* 리스트 스타일 1 */
    .list_st li .bullet { content: '';position: absolute;display: inline-block;width: 5px;height: 5px;background: #222;border-radius: 50%;top: 10px;left: 0}/* 리스트 스타일 2 */
    
    
    table { font-size: 0.85rem }
    
    /* type01 : 줄노트형식 */
    table.type01 { border-collapse: collapse;text-align: left;line-height: 1.6;border-top: 3px solid #404953;border-bottom: 3px solid #404953 }
    table.type01 th { padding: 10px 0 10px 20px;vertical-align: middle }
    table.type01 td { padding: 10px 0 10px 20px;vertical-align: top }
    table.type01 .even { background: #f4f4f4 }
    
    /* type02 : 헤더에 배경색/왼쪽-항목명/오른쪽-내용 기본테이블형식 */
    table.type02 { border-collapse: collapse;line-height: 1.6;border-bottom: 3px solid #404953 }
    table.type02 thead th { padding: 10px;vertical-align: middle;color: #fff;background: #404953 }
    table.type02 tbody th { padding: 10px;vertical-align: middle;font-weight: 500;border-bottom: 1px solid #e1e1e1;border-right: 1px solid #e1e1e1 }
    table.type02 tbody td { padding: 10px;vertical-align: middle;border-bottom: 1px solid #e1e1e1;border-right: 1px solid #e1e1e1 }
    table.type02 tbody td.none { border-right: none }
    
    /* type03 : 항목명과 내용이 가로정렬 되어있는 테이블형식 */
    table.type03 { border-collapse: collapse;text-align: left;line-height: 1.6;border-top: 3px solid #404953;border-bottom: 3px solid #404953 }
    table.type03 th { padding: 10px 20px;vertical-align: middle }
    table.type03 td { padding: 10px 20px;vertical-align: middle }
    table.type03 .even { background: #f4f4f4 }
    table.type03 .headerT { background: #404953;color: #fff;text-align: center;vertical-align: middle }

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
    <!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 시작 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">GOST-R</a></li>
			<li class="on"><a href="javascript:;">Medical Device Registration</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 종료  +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

    <!--+++ 20.05.01 탭컨텐츠 영역 시작 +++-->
    <div class="tab_con">

        <!--+++++ 컨텐츠 01 +++++-->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">Russian product certification introduction</h1>
                <h2 class="tit_cer fc_pointer">GOST-R</h2>
                <p class="outline">
                    GOST is a national technical standard specified by the Euro-Asian Council for Standardization, Metrology and Certification (EASC) and stands for GOsudarstvennyy STandart, which means federal standard in Russian.
                </p>
                
                <div class="tit_img">
                    <img src="./images/product_russia_gost-r_01.jpg" alt="GOST-R 로고" style="width: 100%">
                </div>
                
                <p class="outline">
                    As the subject of the issuing certification body is different from the GOST certificate currently issued by country, each country's GOST certificate is a different certificate. Russia is called GOST-R, and Kazakhstan is called GOST-K.<br><br>
                    Since the introduction of the EAC, an integrated certification system that took effect between customs alliance countries, the share of GOST-R certification in Russia has decreased significantly compared to the past. However, GOST-R certification is still required for import customs clearance for compulsory certification items that have not yet been negotiated between customs alliances.
                </p>
                
                <ul class="content">	
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_russia_gost-r_03_gostrCoC.jpg" alt="GOST R Certificate">
                                <span style="display:block;text-align:center;">- GOST R Certificate -</span>
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">GOST R Certificate Type</h3>
                                <div style="text-align:justify">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>GOST R CoC</span>
                                    <p>It is issued for objects that are obligated to obtain certification of conformity. GOST R CoC is a certificate that certifies that items and manufacturing process lines conform to Russian safety regulations for goods imported into Russia, and the issuance of GOST R CoC must be made by an accredited certification body.</p>
                                </div>

                            </dd>
                        </dl>
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_russia_gost-r_04_gostrDoC.jpg" alt="GOST R DoC certificate">
                                <span style="display:block;text-align:center;">- GOST R DoC Certificate -</span>
                            </dt>
                            <dd class="txt_area">
                                <div style="text-align:justify">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>GOST R DoC</span>
                                    <p>GOST R DoC is issued for objects that are obligated to receive a declaration of conformity. The Declaration of Conformity (GOST R DoC) is a simplified type of certificate compared to the Mandatory Certificate of Conformity (GOST R CoC).</p>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_russia_gost-r_05_gostrVoluntary.jpg" alt="GOST Voluntary Certificate">
                                <span style="display:block;text-align:center;">- GOST Voluntary Certificate -</span>
                            </dt>
                            <dd class="txt_area">
                                <div style="text-align:justify">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>GOST Voluntary</span>
                                    <p>GOST Voluntary is not a product that is obligated to obtain GOST certification, but it is a certificate that proves that the product is made in accordance with applicable regulations and guidelines. If a company receiving EAC certification additionally applies for GOST Voluntary, it is a company's publicity, securing trust, etc. Has the effect of.</p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_ce-mdd_01.png" alt="GOST R Certificate">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">GOST R Certificate</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>GOST R Certificate Validity Period
                                    </span>
                                    <p>
                                        GOST R certification is valid for a minimum of 1 year and a maximum of 3 years.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>GOST R certification procedure
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="number">1. </span>Submit application form and product-related documents to the certification body</li>
                                        <li><span class="number">2. </span>Document review</li>
                                        <li><span class="number">3. </span>Check the type of certification applied</li>
                                        <li><span class="number">4. </span>Check whether sample test and factory audit is necessary</li>
                                        <li><span class="number">5. </span>Issuance of quotation and contract</li>
                                        <li><span class="number">6. </span>If a sample test is needed, the test proceeds after sending the sample and the test report is issued</li>
                                        <li><span class="number">7. </span>If factory audit is needed, proceed with audit</li>
                                        <li><span class="number">8. </span>Draft certificate issuance and customer verification</li>
                                        <li><span class="number">9. </span>Certificate issuance</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Documents to be submitted for GOST R certification
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Application</li>
                                        <li><span class="bullet"></span>HS Code</li>
                                        <li><span class="bullet"></span>Product manual (Russian or exporting country language)</li>
                                        <li><span class="bullet"></span>Existing test report</li>
                                        <li><span class="bullet"></span>Existing certificate</li>
                                        <li><span class="bullet"></span>Drawing (if applicable)</li>
                                        <li><span class="bullet"></span>Technical documentation (if applicable)</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_russia_gost-r01.jpg" alt="Why is it important?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Why is it important?</h3>
                                <p style="text-align: justify">
                                    After the introduction of the EAC, an integrated certification system that took effect between customs alliance countries, the share of GOST-R certification in Russia has decreased significantly compared to the past. However, compulsory certification items that have not yet been negotiated between the Customs Union countries still require GOST-R certification for import customs clearance.<br><br>
                                    Therefore, companies that wish to export goods to the Russian region must obtain a GOST R certification to demonstrate compliance with products that are subject to compulsory certification that have not been negotiated between the Customs Union countries. Only when the product, packaging, or attached document shows the GOST R conformity mark, can it be exported to the relevant country.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_russia_gost-r03.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p class="con_txt">
                                    The IGC certification body cooperates with the RUS-TEST PACIFIC certification body to provide the best competitive value to customers and stakeholders, and is reborn as a global certification body through continuous shared growth.<br><br>
                                    IGC complies with :
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Comply with legal requirements</li>
                                    <li><span class="bullet"></span>Teamwork and solidarity among members</li>
                                    <li><span class="bullet"></span>Sincerity and fairness</li>
                                    <li><span class="bullet"></span>Social and environmental responsibility</li>
                                    <li><span class="bullet"></span>Continuous development and improvement activities through knowledge and learning as a certification and registration service provider</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_russia_gost-r04.jpg" alt="Why IGC?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Why IGC?</h3>
                                <p class="con_txt">
                                    IGC provides a competitive and satisfactory service to its customers through several strengths.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Providing competitive services based on knowledge and technology secured through certification projects in various fields</li>
                                    <li><span class="bullet"></span>Competitive certification cost</li>
                                    <li><span class="bullet"></span>Minimum time required through rapid authentication service</li>
                                    <li><span class="bullet"></span>Provide One Stop Service for certification of various systems and products in fields other than Eurasia through subsidiaries</li>
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
                        <li><p><em><strong>01</strong></em><span>System certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European, Eurasia, U.S., China, Southeast Asia)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Product testing</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Certification of auditor qualifications</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Professional manpower training and education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 01 GOST-R 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 02 의료기기 러시아 등록 컨텐츠 시작 //------->
        <article style="display:block">
            <section class="business_type5" class="area">
                <h1 class="tit_num">Introduction of product certification in Russia</h1>
                <h2 class="tit_cer fc_pointer">Medical device registration in Russia</h2>
                <p class="outline">
                    The medical device registration certificate, an official document issued by the Russian Federation Health Supervisory Authority, Roszdravnadzor, authorizes the relevant medical device to be suitable for production, import, sale and use in Russia because it has passed a preliminary assessment.<br><br>
                    Not only medical devices produced in Russia, but all medical devices imported into Russia from abroad must be registered.
                </p>
                
                <ul class="content">	
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medical_divice_registration_01.jpg" alt="Classification of medical devices">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Classification of medical devices</h3>
                                <p class="con_txt">
                                    Names and classes for medical devices operating in Russia are listed in [Order N4H “About Conformation of Nomenclature Classification of Medical Devices”], and in vitro diagnostic equipment is not included. In vitro diagnostic equipment is subject to separate class regulations.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Class 1 – Low risk</li>
                                    <li><span class="bullet"></span>Class 2a – Medium risk</li>
                                    <li><span class="bullet"></span>Class 2b – High risk</li>
                                    <li><span class="bullet"></span>Class 3 – Top risk</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_04.jpg" alt="Medical device registration progress test type">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Medical device registration progress test type</h3>
                                <p class="con_txt">
                                    Testing according to medical device registration can only be conducted in laboratories registered in accordance with the 06.05.2011 N 352 Act, and for clinical trials, a list of institutions that can perform this function is posted on the Roszdravnadzor website.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Toxicity test</li>
                                    <li><span class="bullet"></span>Functional test</li>
                                    <li><span class="bullet"></span>Electromagnetic inspection</li>
                                    <li><span class="bullet"></span>Clinical trial</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_05.jpg" alt="Medical device registration validity period">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Medical device registration validity period</h3>
                                <p class="con_txt">
                                    Permanent(valid until the product registered in the certificate is discontinued)
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medical_divice_registration_05.jpg" alt="Medical device registration process">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Medical device registration process</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>The agent of the enterprise must apply for a permit that Rosdravnadzor agrees to send the samples to Russia, which is valid for 6 months. In addition, the agent must provide a description of the applied product, a contract with the laboratory, and a contract with an attorney or manufacturer.</li>
                                    <li><span class="number">2. </span>The agent must go through the procedures to get the sample through customs. In addition to the samples, the representative must provide contracts, documents to be submitted to customs officials, and invoices.</li>
                                    <li><span class="number">3. </span>Toxicology tests, technical tests and electromagnetic wave tests of electrical products are conducted at accredited laboratory.</li>
                                    <li><span class="number">4. </span>(Simultaneous with step 3) The company must prepare all technical documents required for registration.</li>
                                    <li><span class="number">5. </span>The medical device is graded and, if there is no similar medical device registered in Russia, quality assessment, efficiency and safety tests are carried out as the first step. After that, clinical evaluations are conducted at two different medical institutions. A two-step quality assessment, efficiency and safety assessment are performed on medical devices.</li>
                                    <li><span class="number">6. </span>The entity submits the entire technical file to Rosdravnadzor. After completing the medical device registration, you must obtain the "GOST-R" certificate based on the registration certificate, the hygiene certificate according to the item, and the measuring instrument certificate according to the characteristics of the product.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medical_divice_registration_03.jpg" alt="Medical device registration submission documents">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Medical device registration submission documents</h3>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Manufacturer's power of attorney according to the registration and certification process (requires notarization)</li>
                                        <li><span class="bullet"></span>Certificates of company registration in the home country (eg, chamber of commerce, internal FDA registration, company registration certificate, business license) must be notarized and submitted</li>
                                        <li><span class="bullet"></span>ISO 9001 or ISO 13485 certificate issued by domestic or international organizations applicable to medical devices</li>
                                        <li><span class="bullet"></span>Certificate of conformity in accordance with the requirements of 93/42/EEC, declaration of conformity, free-selling certificate, FDA certification document, medical device certification document for domestic or other countries. (Must be notarized and submitted)</li>
                                        <li><span class="bullet"></span>Test report proving safety (IEC 60601-1, IEC 60601-1-2, ISO 10993, etc.)-Accurate test report can help to simplify work during technical inspection at the laboratory.</li>
                                        <li><span class="bullet"></span>Toxic safety/biocompatibility safety test report</li>
                                        <li><span class="bullet"></span>Providing samples for technical and toxicity testing</li>
                                        <li><span class="bullet"></span>Medical device new registration application or renewal registration application. The application must use the letterhead of the applicant (a legal entity authorized to conduct registration in Russia). The application must include a description of all components and parts included in the medical device or device. Applications must be submitted in Russian.</li>
                                        <li><span class="bullet"></span>Submit a power of attorney for appointment of a legal representative to perform the application. The manufacturing company must issue a power of attorney to a legal entity with registration authority (address to the head of the legal entity), and must be notarized in the country of origin of the manufacturer. It must also be translated into Russian and notarized by the Russian consulate in your country. The power of attorney must state that the manufacturer must entrust the applicant to sign a contract and receive a registration certificate to perform the registration of medical devices/equipment, consultation and professional work.</li>
                                    </ul>
                                </div>
                                <p style="text-align:justify">
                                    The registration process does not require Good Manufacturing Practices (GMP) audits. However, legislation to introduce such audits will be implemented in the near future.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-6 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medical_divice_registration_04.jpg" alt="Why is it important?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Why is it important?</h3>
                                <p style="text-align: justify">
                                    All medical devices produced abroad and imported into Eurasia, as well as medical devices produced in Eurasia, must be registered with the Federal Health Supervisory Service. Medical devices can be imported and sold in Eurasia only after passing the pre-evaluation and registration.<br><br>
                                    In order to register medical devices in Russia, even if tests were performed for approval by CE or FDA, a separate test, etc., conducted at an Eurasian authorized laboratory must be performed according to mandatory requirements. Russia does not accept internationally recognized certifications such as EU CE certification or US FDA approval, as Russia has not entered into a certification agreement with the EU or the US.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-7 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medical_divice_registration_02.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p class="con_txt">
                                    The IGC certification body cooperates with the RUS-TEST PACIFIC certification body to provide the best competitive value to customers and stakeholders, and is reborn as a global certification body through continuous shared growth.<br><br>
                                    IGC complies with :
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Comply with legal requirements</li>
                                    <li><span class="bullet"></span>Teamwork and solidarity among members</li>
                                    <li><span class="bullet"></span>Sincerity and fairness</li>
                                    <li><span class="bullet"></span>Social and environmental responsibility</li>
                                    <li><span class="bullet"></span>Continuous development and improvement activities through knowledge and learning as a certification and registration service provider</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-8 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medical_divice_registration_06.jpg" alt="Why IGC?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Why IGC?</h3>
                                <p class="con_txt">
                                    IGC provides a competitive and satisfactory service to its customers through several strengths.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Providing competitive services based on knowledge and technology secured through certification projects in various fields</li>
                                    <li><span class="bullet"></span>Competitive certification cost</li>
                                    <li><span class="bullet"></span>Minimum time required through rapid authentication service</li>
                                    <li><span class="bullet"></span>Provide One Stop Service for certification of various systems and products in fields other than Eurasia through subsidiaries</li>
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
                        <li><p><em><strong>01</strong></em><span>System certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European, Eurasia, U.S., China, Southeast Asia)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Product testing</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Certification of auditor qualifications</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Professional manpower training and education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 02 의료기기 러시아 등록 컨텐츠 종료 //------->
        
    </div> <!--------// div class="content_wrap"  종료  ------------------>
</div><!-------div class="tab_con" 종료 ------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>