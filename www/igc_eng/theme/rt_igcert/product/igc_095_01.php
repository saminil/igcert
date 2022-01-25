<?php
	include_once('./_common.php');
$g5['title'] = 'Southeast Product Certification';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    <!--+++ 20.05.11 탭메뉴/ 동남아시아 제품인증 시작 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">Thailand medical device registration</a></li>
			<li><a href="javascript:;">Taiwan medical device registration</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 동남아시아 제품인증 종료  +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
    <!--+++ 20.05.01 탭컨텐츠 영역 시작 +++-->
    <div class="tab_con">
    <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	    <article style="display:block;">
	        <section class="business_type5" class="area">
	            <h1 class="tit_num">Southeast Asia product certification introduction</h1>
	            <h2 class="tit_cer fc_pointer">Thailand medical device registration</h2>
	            
	            <div class="tit_img">
                    <img src="./images/product_tailand_00.jpg" alt="태국 국기" style="width: 100%">
                </div>
	            
	            <ul class="content">
	                <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_tailand_02.jpg" alt="Licensing procedure">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Licensing procedure</h3>
                                <p style="text-align: justify">
                                    In order to handle imported medical devices in Thailand, business registration, medical device import license (Thai FDA), and certification procedures according to the classification of medical devices are required.<br><br>
                                    The conformity assessment of medical devices is regulated by the Medical Device Act 2008 and is under the jurisdiction of the Food and Drug Administration (FDA) under the Ministry of Public Health.<br><br>
                                    Regarding product certification, the Thai Food and Drug Administration categorizes medical devices into three categories: General Medical Device, Notified Medical Device, and Licensed Medical Device. Is 5 years, and an extension is required after 5 years.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_tailand_03.jpg" alt="General Medical Devices Certification_Class I">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">General Medical Devices Certification_Class I</h3>
                                <p class="con_txt">
                                    Producers, importers, or distributors of products in this category do not need to obtain a separate license. However, they are required to submit a Certificate of Free Sale issued by the government of the country of origin. As an exception, for the following medical devices that are used directly on the human body among general medical devices, ISO 13485 or GMP certificates must be submitted.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Implant</li>
                                    <li><span class="bullet"></span>Tissue origin medical device</li>
                                    <li><span class="bullet"></span>Radiation equipment for diagnosis and treatment In vitro diagnostic equipment (In Vitro Diagnostic Products)</li>
                                    <li><span class="bullet"></span>Medical equipment disinfection supplies</li>
                                    <li><span class="bullet"></span>Tooth filling, prosthetic-related devices</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_tailand_05.jpg" alt="Notified Medical Devices Certification_Class II">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Notified Medical Devices Certification_Class II</h3>
                                <p class="con_txt">
                                    In addition to the certificate of free sale issued by the government of the country in which the product is produced, producers, importers or distributors of products falling under this category must submit product technical documentation together with a declaration form (Jor Nor 1), which must include :
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Product technical documentation
                                    </span>
                                    <p>
                                        product instructions, instructions, specifications, labels, names of producers and distributors
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Target medical device
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Rehabilitation treatment medical equipment</li>
                                        <li><span class="bullet"></span>Blood alcohol diagnostic tool</li>
                                        <li><span class="bullet"></span>Medical silicone</li>
                                        <li><span class="bullet"></span>Other diagnostic tools</li>
                                        <li><span class="bullet"></span>Silicone breast implants</li>
                                        <li><span class="bullet"></span>Ophthalmic Viscosurgical Devices; OVD</li>
                                        <li><span class="bullet"></span>Metamphetamine screening test in urine</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_tailand_04.jpg" alt="Licensed Medical Device_Class III">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Licensed Medical Device_Class III</h3>
                                <p class="con_txt">
                                    Producers, importers, or distributors of products falling under this category must obtain a license to produce, import and sell products. The Thai Food and Drug Administration requires the licensee to submit information on the production process, import, sale, and side effects of the product. Also, the Thai Food and Drug Administration requires a Certificate of Free Sale and an application for permission (Khor Por 1) issued by the government of the product producing country. ) Must be submitted.<br><br>
                                    There are 8 types of medical devices in this category :
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>HIV diagnostic tool</li>
                                    <li><span class="bullet"></span>Condom</li>
                                    <li><span class="bullet"></span>Lab gloves</li>
                                    <li><span class="bullet"></span>Surgical gloves</li>
                                    <li><span class="bullet"></span>Medical blood bag</li>
                                    <li><span class="bullet"></span>Contact lens</li>
                                    <li><span class="bullet"></span>Disposable hypodermic syringe</li>
                                    <li><span class="bullet"></span>Disposable insulin syringe</li>
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
                        <li><p><em><strong>01</strong></em><span>System Certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Certification of screening qualifications</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Professional manpower training education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 01 태국 의료기기 등록 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 02 대만 의료기기 등록 컨텐츠 시작 //------->
        <article>
	        <section class="business_type5" class="area">
	            <h1 class="tit_num">Southeast Asia product certification introduction</h1>
                <h2 class="tit_cer fc_pointer">Taiwan medical device registration</h2>
                <p class="outline">
                    Medical devices exported to Taiwan must be licensed and registered in accordance with the registration requirements required by TFDA (Taiwan Food and Drug Administration). Since February 2004, Taiwan has compulsory requirements for medical device GMP for medical devices sold in Taiwan, and this certification was established based on the contents of ISO 13485.<br><br>
                    The medical device market in Taiwan is showing continuous growth as awareness of the need for medical system development spreads, and the market growth will be further promoted by the advancement of the health care system and the government's support for the medical device industry.
                </p>
	            
	            <ul class="content">
	                <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_Taiwan_01.jpg" alt="Medical device definition and classification">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Medical device definition and classification</h3>
                                <p class="con_txt">
                                    According to the Pharmaceuticals Affair Law of Taiwan, medical devices include equipment, machinery, instruments and accessories, and are defined as products that can affect diagnosis, treatment, healing, disease alleviation, disease prevention, or body function or structure.<br><br>
                                    The classification of medical devices in Taiwan basically follows the classification of the US FDA. It is largely divided into general medical devices and in vitro diagnostic medical devices, and is classified into 17 categories according to the function, purpose, use and operating principle of the product. It is classified into three classes (Class I, II, III) according to the characteristics and risk of medical devices.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>Class I (Low risk)
                                    </span>
                                    <p>
                                        A medical device that does not sustain or prolong life, is not used for a very important purpose in preventing human damage, and does not have the potential for risk of disease or injury.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>Class II (Medium risk)
                                    </span>
                                    <p>
                                        Medical devices recognized as being used to sustain or extend life.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>Class III (High risk)
                                    </span>
                                    <p>
                                        A device that sustains or prolongs life, or a device that is of great importance to prevent human damage, or that may present a potential risk of illness and injury.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_Taiwan_02.jpg" alt="Registration process">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Registration process</h3>
                                <p class="con_txt">
                                    The procedure for registration of medical devices in Taiwan is as follows.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>Classification of medical devices
                                    </span>
                                    <p>
                                        The Taiwan medical device registration process is essential for all classes of medical devices, and the documents to be submitted differ depending on the class of medical devices. Therefore, the product must be properly classified prior to application.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>Designated as a local representative in Taiwan
                                    </span>
                                    <p>
                                        For overseas manufacturers who wish to sell medical devices in Taiwan, they must appoint a local representative in Taiwan. The Taiwan agent must reside in Taiwan and have a sales license in Taiwan. Agents register medical devices on behalf of the business, contact TFDA directly, and conduct business.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>Product Permit/Report Application
                                    </span>
                                    <p>
                                        Application for a product license varies depending on the medical device class.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">4. </span>QSD (GMP) preparation and application
                                    </span>
                                    <p>
                                        For local manufacturers in Taiwan, certification must be obtained according to the procedure for obtaining GMP for medical devices, and for overseas manufacturers, if they have ISO 13485 certificates, they must undergo a QSD (Quality System Documentation) review.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">5. </span>TFDA audit
                                    </span>
                                    <p>
                                        Prepare a quality system certification document and submit it to the agency designated by TFDA, and the audit agency will conduct the review. Overseas manufacturing site audits are conducted as needed.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">6. </span>Issuance of final certification
                                    </span>
                                    <p>
                                        After registration of medical devices with TFDA is completed, products can be distributed in Taiwan.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_Taiwan_03.jpg" alt="Required information and documents">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Required information and documents</h3>
                                <p class="con_txt">
                                    The Taiwan medical device approval process consists of product license/report application and quality system certification.<br><br>
                                    The documents to be prepared by the medical device manufacturer when applying for product approval / declaration differ by medical device class.
                                </p>
                                <div class="con_txt_2">
                                    <ul class="list_st">
                                        <span class="point_blk">(1) Class I</span>
                                        <li><span class="bullet"></span>Application</li>
                                        <li><span class="bullet"></span>Copy of medical device manufacturing business license</li>
                                        <li><span class="bullet"></span>For Taiwanese local manufacturers, GMP conformity certificate</li>
                                        <li><span class="bullet"></span>For overseas manufacturers, QSD conformity certificate</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <ul class="list_st">
                                        <span class="point_blk">(2) Class II / III</span>
                                        <li><span class="bullet"></span>Application</li>
                                        <li><span class="bullet"></span>Copy of medical device manufacturing business license</li>
                                        <li><span class="bullet"></span>For Taiwanese local manufacturers, GMP conformity certificate</li>
                                        <li><span class="bullet"></span>In the case of overseas manufacturers, the original QSD certificate of conformity and approval for manufacturing and marketing in the relevant country</li>
                                        <li><span class="bullet"></span>Chinese instruction leaflet, catalog packaging, labeling, usage, product appearance photo</li>
                                        <li><span class="bullet"></span>Test records and reports</li>
                                        <li><span class="bullet"></span>Technical documentation</li>
                                        <li><span class="bullet"></span>Papers and data</li>
                                        <li><span class="bullet"></span>Clinical trial report</li>
                                        <li><span class="bullet"></span>In the case of radiation products, safety information data</li>
                                    </ul>
                                </div>
                                <p class="con_txt">
                                    When applying for medical device quality system certification, Taiwanese local manufacturers must acquire the certification according to the medical device GMP acquisition procedure, and in the case of overseas manufacturers, if they have ISO 13485 certification, the audit is conducted through the Quality System Documentation (QSD).<br><br>
                                    QSD is classified into three categories :
                                </p>
                                <div class="con_txt_2">
                                    <ul class="list_st">
                                        <span class="point_blk">(1) European CE certified manufacturers and US FDA registered products: Subject to QSD simplification</span>
                                        <li><span class="bullet"></span>Application</li>
                                        <li><span class="bullet"></span>Manufacturer documentation</li>
                                        <li><span class="bullet"></span>For CE certified manufacturers, a copy of the ISO 13485 certificate, the most recent audit report, CFG (Certificate to Foreign Government)</li>
                                        <li><span class="bullet"></span>For manufacturers of FDA-registered products in the U.S., factory investigation report issued by FDA, certificate of conformity verification registration, and CFG of FDA manufacturing and sales certificate</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <ul class="list_st">
                                        <span class="point_blk">(2) Medical device licensed products from other foreign countries : General QSD target</span>
                                        <li><span class="bullet"></span>Application</li>
                                        <li><span class="bullet"></span>Manufacturer documentation</li>
                                        <li><span class="bullet"></span>Factory layout</li>
                                        <li><span class="bullet"></span>Process area for the product</li>
                                        <li><span class="bullet"></span>List of major production facilities</li>
                                        <li><span class="bullet"></span>Process</li>
                                        <li><span class="bullet"></span>Manufacturing factory quality manual and procedure</li>
                                        <li><span class="bullet"></span>List of quality documents</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <ul class="list_st">
                                        <span class="point_blk">(3) If the above does not apply : Subject to field inspection by overseas manufacturers</span>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_Taiwan_04.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC is contributing to the continuous development of customers by accurately evaluating the suitability of the medical device product quality management system through the technology and expertise accumulated over the years.</li>
                                    <li><span class="bullet"></span>IGC has up-to-date knowledge of a wide range of specific scopes and legal requirements to assist customers with medical device certification in major markets around the world.</li>
                                    <li><span class="bullet"></span>IGC provides a variety of certification-related services in the medical device field by establishing cooperative relationships with overseas product certification organizations.</li>
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
                        <li><p><em><strong>01</strong></em><span>System Certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Certification of screening qualifications</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Professional manpower training education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 02 대만 의료기기 등록 컨텐츠 종료 //------->

    </div><!------div class="tab_con" 종료 --------->	
</div> <!--------// div class="content_wrap"  종료  ------------------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>