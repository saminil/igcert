<?php
	include_once('./_common.php');
$g5['title'] = 'America Product Certification';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
			<li><a href="javascript:;">FDA</a></li>
			<li><a href="javascript:;">Medica Device</a></li>
			<li><a href="javascript:;">Electronic &amp; Radiation Devices</a></li>
			<li><a href="javascript:;">Medicine</a></li>
			<li><a href="javascript:;">Food &amp; Beverage</a></li>
			<li><a href="javascript:;">Health Supplement Food</a></li>
			<li class="on"><a href="javascript:;">Cosmetics</a></li>
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
                <h1 class="tit_num">U.S Product Certification Introduction</h1>
                <h2 class="tit_cer fc_pointer">FDA</h2>
                <p class="outline">
                    The U.S. Federal Food and Drug Administration (FDA) is one of the U.S. Department of Health and Human Service's oldest and most trusted consumer protection agencies. In Korea, it is the Ministry of Food and Drug Safety. When foreign companies export to the United States, products from US customs are often detained (seized) due to unfamiliarity with FDA regulations, of which food, cosmetics and medical devices account for most.
                </p>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_FDA_01.jpg" alt="FDA Role">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FDA Role</h3>
                                <p style="text-align: justify">
                                    The most important role of the FDA is to protect public health by managing the safety and efficient production, distribution, and sales of various products, and to continuously monitor the safety of products even while consumers are using them.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_FDA_05.jpg" alt="FDA Investigation">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FDA Investigation</h3>
                                <p style="text-align: justify">
                                    FDA's investigation, analysis, research, and regulatory compliance monitoring are under the jurisdiction of the National Medical Device and Radiation Protection Center, the Biology and Research Center, the Drug Evaluation and Research Center, the Food Safety and Nutrition Center, and the Veterinary Medicine Center.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_FDA_03.jpg" alt="FDA Enforcement Rules">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FDA Enforcement Rules</h3>
                                <p style="text-align: justify">
                                    FDA performs three main tasks: analysis, surveillance, and assessment. Analysis is a task to take precautions that can be taken during customs clearance before a new product is shipped to the US market, and the monitoring task is to inspect the production plant and facilities of the product, and is performed by front-line inspectors. It is an institution that can take stronger sanctions against regulatory violations such as mixing of impurities or false labeling.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_FDA_04.jpg" alt="FDA Regulations and Standards">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FDA Regulations and Standards</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>FDA Food Standards
                                    </span>
                                    <p>
                                        Detailed regulations for food and these products.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Good Manufacturing Practices (CGMP)
                                    </span>
                                    <p>
                                        Quality control guidelines such as hygiene, inspection, and regulations for the design, manufacture and sale of food and products.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>New Drug Regulation
                                    </span>
                                    <p>
                                        Regulations on approval of new drugs and on the continued safety and efficacy of drugs
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
                        <li><p><em><strong>01</strong></em><span>System certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European, Eurasia, U.S., China, Southeast Asia)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Product testing</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Certification of auditor qualifications</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Professional manpower training and education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 01 미주 FDA 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 02 미주 의료기기 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">U.S Product Certification Introduction</h1>
                <h2 class="tit_cer fc_pointer">Medica Device</h2>
                <p class="outline">
                    The owner or operator of a business (facility or facility) involved in the production or distribution of medical devices intended for use in the United States must annually register the business with the U.S. Food and Drug Administration. This process is called the facility registration process.<br><br>
                    The US Congress has given the Food and Drug Administration authority to collect annual tuition fees from businesses. The details of who you must register and pay for the facility are described in detail in the document “Subject to Registration and Payment”. The annual registration fee is collected for SMEs and all other businesses in the same amount.<br><br>
                    Most of the business registration targets are the device registration targets, and information on what production activities are in charge of the production of products being manufactured on site must also be provided. If the product is subject to premarket approval or premarket declaration in the United States, the owner or operator of the business must complete the relevant procedures (510(k), PMA, PDP, HDE).
                </p>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_medical_01.jpg" alt="Conformity procedure">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Conformity procedure</h3>
                                <p style="text-align: justify">
                                    Medical devices are classified according to the risks they pose to patients. Depending on the type of product and grade, the conformity assessment process will be categorized as 510(k) (premarket notification and specific management) and Premarket Approval (PMA) registration.<br><br>
                                    FDA applies one of three classes based on regulations required to ascertain safety and effectiveness.<br><br>
                                    Additionally, classification is evaluated based on risk. In other words, the risk to patients and users of medical devices is an important factor in assigning ratings. Class 1 includes devices with the least risk and class 3 includes devices with the highest risk.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_medical_02.jpg" alt="Classification">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Classification</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>Class 1 medical device
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>1 class refers to the class of medical devices that are subject to general management only.</li>
                                        <li><span class="bullet"></span>Product types : band, surgical gloves, surgical knife, surgical brush</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>Class 2 medical device
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>2 grade refers to the class of medical devices that are subject to special management or will eventually be subject to special management.</li>
                                        <li><span class="bullet"></span>Product types : condoms, contact lenses, infusion pumps, bone powder, tooth material</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>Class 3 medical device
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Class 3 refers to the class of medical devices that require or will require Premarket Approval in accordance with Section 515 of the Act.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_medical_03.jpg" alt="Premarket Approval">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Premarket Approval</h3>
                                <p style="text-align:justify">
                                    Medical devices are classified according to the risks they pose to patients. Depending on the type of product and grade, the conformity assessment process will be categorized as 510(k) (premarket notification and specific management) and Premarket Approval (PMA) registration.<br><br>
                                    FDA applies one of three classes based on regulations required to ascertain safety and effectiveness.<br><br>
                                    Additionally, classification is evaluated based on risk. In other words, the risk to patients and users of medical devices is an important factor in assigning ratings. Class 1 includes devices with the least risk and class 3 includes devices with the highest risk.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_medical_04.jpg" alt="How to register medical devices (510k)">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">How to register medical devices (510k)</h3>
                                <p class="con_txt">
                                    Premarket Notification-510(k) / Applied to 1st and 2nd class medical devices.<br><br>
                                    Class 1 medical devices are 510k with the exception of some Class 1 medical devices. And Class 2 medical devices must submit a premarket notification to the FDA.<br><br>
                                    Premarket notification includes facility registration.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>Audit period
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>About 90 to 180 days (Sometimes it takes a year of audit.)</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>Premarket notification contents
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Fill in the applicant's name, address, manufacturer, sterilization facility address, registration number, and application date.</li>
                                        <li><span class="bullet"></span>Product description: product name, classification, appearance and structure, purpose of use, principle of operation, labeling and performance criteria</li>
                                        <li><span class="bullet"></span>Evaluation report, evaluation report on biocompatibility and performance</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_medical_05.jpg" alt="Medical device requirements">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Medical device requirements</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Registration of manufacturer</li>
                                    <li><span class="bullet"></span>List of all manufactured devices</li>
                                    <li><span class="bullet"></span>Records maintained and reported by the manufacturer</li>
                                    <li><span class="bullet"></span>Regulation on labeling</li>
                                    <li><span class="bullet"></span>Regulations on repair and refund of medical devices</li>
                                    <li><span class="bullet"></span>Registration of medical devices and facilities</li>
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

        </article><!----// 컨텐츠 02 미주 의료기기 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 03 미주 전자 및 방사선 장치 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">U.S Product Certification Introduction</h1>
                <h2 class="tit_cer fc_pointer">Electronic &amp; Radiation Devices</h2>
                
                <ul class="content">                    
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_electronic_02.jpg" alt="Electronic and Radiation Devices">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Electronic and Radiation Devices</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>What is the FDA?
                                    </span>
                                    <p style="text-align: justify">
                                        In the United States, medical devices are regulated and managed along with foods, pharmaceuticals, and cosmetics under the "Federal Food, Drug &amp; Cosmetic Act: Federal Food, Drug &amp; Cosmetic Act". The safety of the product is secured through pre-inspection and approval of the product, sanctions for nonconforming products through post-inspection, and inspection of imported/exported products.<br><br>
                                        If you do not comply with the regulations required by the FDA, it cannot be distributed or sold in the United States. Products that do not meet the medical device regulations, even if they are on sale, may be subject to corrective action, recall, product seizure or disposal, criminal disposition, etc. through FDA follow-up management.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Related regulations
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>FD &amp; C Act (Federal Food, Drug &amp; Cosmetic Act)</li>
                                        <li><span class="bullet"></span>21 CFR (The Code of Federal Regulations)</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Coverage
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Food, cosmetics, medicines and medical devices (including accessories), veterinary drugs, animal feed, infant formula, food additives, low acid canned food, oxidized food However, in the case of meat, poultry, and processed meat products, inspection and regulations are enforced by the "Food Safety &amp; Inspection Service (FSIS)"</li>
                                        <li><span class="bullet"></span>Radiation equipment (electronic products): Ultrasound treatment equipment, Sunlamp, X-rays, TV receiver, etc.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_electronic_04.jpg" alt="What is Center for Devices and Radiological Health (CRDH)?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">What is Center for Devices and Radiological Health (CRDH)?</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Recommend safe use of radiation by conducting an epidemiological investigation based on the various and potential dangers of radiation.</li>
                                    <li><span class="bullet"></span>Develop measurement methods and tools to evaluate equipment and products that emit radiation.</li>
                                    <li><span class="bullet"></span>Medical devices are classified according to their safety and efficacy (class I, class II, and class III) to be declared and approved before sale.</li>
                                    <li><span class="bullet"></span>By developing working standards for equipment that emit radiation, guidelines for use are prepared to prevent unnecessary exposure to radiation.</li>
                                    <li><span class="bullet"></span>Educate consumers and manufacturers about accurate information and evidence for medical devices and radiation-emitting products.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_ce-mdd_02.jpg" alt="What is accession number?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">What is accession number?</h3>
                                <p style="text-align: justify">
                                    The accession number is the unique identification number for a report in FDA's database. This number is provided in the CDRH confirmation letter. Market access numbers facilitate communication on specific reports. Because all agencies can use this market access number to determine if a document has been discussed. In addition, FDA import department personnel use accession numbers to ensure that manufacturers have documented requirements for products that are minimally imported.<br><br>
                                    The accession number not only means that the report has been received into CDRH's filing cabinet, but also means that some of the information about manufacturers and products has been entered into FDA's database.<br><br>
                                    The confirmation letter will be returned to the address provided by the report submitter. Only one copy will be shipped. If the submitter is different from the manufacturer, the letter will only be sent to the report submitter. Submitters can send a copy to the manufacturer.<br><br>
                                    Please allow at least 4 weeks after the manufacturer sends the product report, summary report, annual report, or pre-inquiry supplemental report.<br><br>
                                    If submitted by the manufacturer in electronic report format, an e-mail confirmation message will be sent as soon as the CDRH database has been successfully published. Typically, electronic reports are published in the database within 1 day of receipt.<br><br>
                                    Manufacturers are required to file a report with CDRH prior to the product being introduced into US commerce. The confirmation letter and accession number are evidence that these reports have been received by the CDRH. If the product was made in another country and then imported into the United States, the import approval process will require the identification of the market access number on the Customs Declaration Form FDA 2877
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_electronic_01.jpg" alt="What is electronic product?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">What is electronic product?</h3>
                                <p style="text-align: justify">
                                    Any product that contains an electronic circuit and generates any kind of radiation is an electronic product that emits radiation. X radiation (x-rays), microwaves, radio waves (radiofrequency (RF)), laser, visible light, sound, ultrasound, and ultraviolet light are a few examples of the many types of radiation-emitting electronic products. Diagnostic x-ray systems, laser products, laser light shows, and microwave ovens are a few examples out of the many different electronic products that emit radiation.<br><br>
                                    The United States (U.S.) Food and Drug Administration’s (FDA) Center for Devices and Radiological Health (CDRH) is responsible for regulating radiation-emitting electronic products. The CDRH goal is to protect the public from hazardous and unnecessary exposure to radiation from electronic products. For most electronic products, safety regulation is divided between CDRH and state regulatory agencies. CDRH regulates the manufacture of the products, and the states regulate the use of the products.<br><br>
                                    Title 21 of the Code of Federal Regulations, Subchapter J, Parts 1000 through 1050 (21 CFR 1000 – 1050) contains radiation safety regulations for manufacturers of radiation-emitting electronic products. Manufacturers are responsible for producing products that do not emit hazardous and unnecessary radiation. All manufacturers must comply with the applicable requirements in Title 21 CFR 1000, 1002, 1003, 1004 and 1005. If a mandatory radiation safety performance standard applies to a manufacturer’s product, then the manufacturer must also comply with Title 21 CFR 1010 and the product must comply with the requirements of the standard. Mandatory radiation safety performance standards are found in 21 CFR 1020 – 1050”<br><br>
                                    As FDA homepage stated above, FDA requests manufacturer of such products to comply the requirements it they wish to market their products in US.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_electronic_05.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p style="text-align: justify">
                                    IGC provides differentiated FDA registration consulting services through its US subsidiary Pats corp.<br><br>
                                    Pats Corp is located in LA, USA, and provides high-quality support for domestic and overseas companies in compliance with US FDA regulations and cGMP.<br><br>
                                    IGC focuses on preventing problems before they arise in all regulatory requirements that may arise to customers, and provides customers with technical information and best-in-class compliance services. We do our best to support our customers in expanding their business by efficiently and successfully entering the US market.<br><br>
                                    We will provide accurate, reliable and up-to-date information on the ever-changing FDA legal requirements and provide services in the following categories
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
                        <li><p><em><strong>01</strong></em><span>System certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European, Eurasia, U.S., China, Southeast Asia)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Product testing</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Certification of auditor qualifications</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Professional manpower training and education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 03 미주 전자 및 방사선 장치 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 04 미주 의약품 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">U.S Product Certification Introduction</h1>
                <h2 class="tit_cer fc_pointer">Medicine</h2>
                <p class="outline">
                    The U.S. Food and Drug Administration secures the effectiveness of food and drugs, promotes the supply of safer and less expensive products to their own citizens, and provides accurate and scientifically based information necessary for the use of drugs and foods to maintain and improve public health. We are promoting public health by helping you get it.
                </p>
                
                <ul class="content">                    
                    <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usas_medicine01.jpg" alt="Application type">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Application type</h3>
                                <p class="con_txt">
                                    There are two categories of Investigational New Drug application (IND) for sale and for research (non-sale). There are three types of application :
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>Researcher IND(Investigational New Drug application)
                                    </span>
                                    <p>
                                        The application is submitted by the doctor who initiates and conducts the clinical trial, and the investigational drug is administered or dispensed under the direct' direction of the doctor. Doctors may submit an application for approval of a research trial plan to propose a trial for an unlicensed drug or a drug for a new indication or a new patient population.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>IND(Investigational New Drug application) for Emergency Use
                                    </span>
                                    <p>
                                        The application allows the U.S. Food and Drug Administration to authorize the use of the test drug in situations where time is not allowed for approval of a clinical trial plan pursuant to Article 312.23 or 312.34 of the Code of Federal Regulations. It can also be used for patients who do not meet the conditions of an existing trial plan, or if no approved trial plan exists.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>IND(Investigational New Drug application) for treatment purposes
                                    </span>
                                    <p>
                                        The application is submitted for an investigational drug that has the prospect of severe or immediate life-threatening symptoms in the clinical trial when a clinical trial is being conducted and a review by the U.S. Food and Drug Administration is in progress. In the case of severe disease, drugs in phase 3 clinical trials or all clinical trials have been completed can be used for treatment according to this section. In the case of immediate life-threatening diseases, even before phase 3 clinical trials, the drug may be available for treatment pursuant to this section unless it is usually prior to phase 2 clinical trials.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usas_medicine02.jpg" alt="How to register">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">How to register</h3>
                                <p style="text-align: justify">
                                    Establishment in a foreign country involved in manufacturing, preparation, dissemination, synthesis or processing of drugs (particularly including repackaging and relabeling) imported or provided for import into the United States (with no exceptions) must participate in initial activities. You must register immediately and register annually.<br><br>
                                    Drug registration amendments must be submitted in accordance with 21 CFR 207.26<br><br>
                                    Section 510 of the Act and Part 207 of 21 CFR provide registration information required to be submitted by domestic and international drug establishments. Under these regulations, all registrants must specify the name and full address of each facility, any trade name used in the establishment, the type of title or business (e.g., individually owned, jointly owned or legal), the name of the owner or the operator's name ( In the case of joint ownership, the name of each partner must be included; in the case of a legal entity, the name and the name and title of each officer and director, and the state of the corporation) must be provided.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usas_medicine03.jpg" alt="Specific additional information">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Specific additional information</h3>
                                <p class="con_txt">
                                    In addition to the information required for all registered establishments, certain additional information must be provided in order to register a foreign establishment.<br><br>
                                    For example, foreign registrants must submit :
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Name, address, and phone number of the foreign registrant's U.S. agent</li>
                                        <li><span class="bullet"></span>The name of each importer known to the facility (this means each U.S. company or individual is the owner, consignee, or recipient of the drug in an outpatient facility that is imported into the U.S. Importers do not include customers or patients who ultimately purchase, receive, or administer drugs, unless a foreign facility directly ships the drug to the customer or patient.)</li>
                                        <li><span class="bullet"></span>The name of the person who imports or provides the drug (this means the name of each agent, broker, or other entity other than the carrier that foreign drug establishments use to facilitate the import of their drugs into the United States)</li>
                                    </ul>
                                </div>
                                <p class="con_txt">
                                    To facilitate the registrant's and FDA's response, you must provide an email address of the importer's U.S. agent and phone number and email address of the importer you provide to import or import foreign registrants.<br><br>
                                    Registrants must submit additional drug facility registration information using Form FDA 2656.16. Likewise, for electronic submissions, registrants must submit the following additional information in their SPL file :
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Official contractor name, address, phone number, e-mail address</li>
                                    <li><span class="bullet"></span>Type of work performed at each facility</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usas_medicine04.jpg" alt="Drug list">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Drug list</h3>
                                <ul class="list_st">
                                    <li><span class="number">&#9745; </span>Registrants must provide initial inventory information for all commercially distributed drugs upon initial registration of the facility.</li>
                                    <li><span class="number">&#9745; </span>Failure to provide any inventory information required by Act 510(j) pursuant to Section 301(p) of Act is a prohibited act and, in addition, if the inventory required by Section 502(o) of Act is not included, the drug It is marked with an unauthorized trademark.</li>
                                    <li><span class="number">&#9745; </span>FDA does not accept drug facility registration information from private label distributors (PLDs), but PLDs may request their own NDC label code and submit drug listing information to the FDA.</li>
                                    <li><span class="number">&#9745; </span>By submitting drug listing information, PLD assumes full responsibility for compliance with listing requirements.</li>
                                    <li><span class="number">&#9745; </span>In this case, when submitting or updating drug listing information, private label distributors must manufacture, prepare, disseminate, synthesize or process (especially, including repackaging and relabeling) the listed drugs. You must prove your registered facility.</li>
                                    <li><span class="number">&#9745; </span>For certification of registered facilities by private label distributors, paper format can be used.</li>
                                    <li><span class="number">&#9745; </span>If a drug product is listed by PLD, it is also by the owner of a registered facility that manufactures, prepares, disseminates, synthesizes or processes (including, in particular, repackaging and relabeling) the listed drug. It should not be listed.</li>
                                    <li><span class="number">&#9745; </span>Registrants (and private label distributors, if applicable) must update their drug listing information and ensure that drugs have not been previously listed and introduced for commercial distribution.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usas_medicine05.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC supports exports of pharmaceuticals to the US with many years of rich experience.</li>
                                    <li><span class="bullet"></span>Drug FDA registration, drug label review, IND, NDA, ANDA, NADA, ANADA, OTC registration, NDC registration, SPL preparation, and manufacturing facility GMP compliance services.</li>
                                    <li><span class="bullet"></span>IGC is quick and results-oriented, and provides certification audits through certification bodies and post-certification enhancement/maintenance services to help organizations make the most of GMP quality management.</li>
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

        </article><!----// 컨텐츠 04 미주 의약품 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 05 미주 식음료품 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">U.S Product Certification Introduction</h1>
                <h2 class="tit_cer fc_pointer">Food and Beverage</h2>
                <p class="outline">
                    In the United States, the FDA regulates food exported to the United States through law to protect their citizens from food-borne hazards, and products that meet established standards require FDA approval and registration.
                </p>
                
                <ul class="content">                    
                    <li><!-- content 5-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_food&beverage_01.jpg" alt="What is FDA's Food and Beverage Registration?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">What is FDA's Food and Beverage Registration?</h3>
                                <p class="con_txt">
                                    Under the Public Health Safety and Bioterrorism Preparedness and Response Act (Bio-Terrorism Act), the FDA Food &amp; Drug Administration (www.fda.gov) is a food regulatory agency that threatens the U.S. food supply and other food-related emergencies. Or have taken steps to protect the people from real terrorist attacks.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Medicines, foods, cosmetics, radiation equipment emission pre-inspection, imports / exports inspection</li>
                                    <li><span class="bullet"></span>Compulsory approval and management of target products (food, pharmaceuticals, etc.) at the time of import customs clearance in the US market.</li>
                                    <li><span class="bullet"></span>If you get disqualified during import clearance decision, Legal marketing in the United States is prohibited</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_food&beverage_02.jpg" alt="FDA registration target items">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FDA registration target items</h3>
                                <p style="text-align: justify">
                                    Food, cosmetics, medicines and medical devices (including accessories), veterinary drugs, animal feed, infant formula, food additives, low acid canned food, oxidized food (in the case of meat, poultry and processed meat products, the Ministry of Agriculture, Food Safety &amp; Inspection Service (FSIS) inspects and regulates.)
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_food&beverage_03.jpg" alt="Food and beverage FDA export flow chart">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Food and beverage FDA export flow chart</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Factory registration (FFR)</li>
                                    <li><span class="bullet"></span>Product ingredient review</li>
                                    <li><span class="bullet"></span>Nutrition analysis and nutrition fact label creation</li>
                                    <li><span class="bullet"></span>SID/FCE report in case of low acidity room temperature food</li>
                                    <li><span class="bullet"></span>GACCP certification and related documents for seafood</li>
                                    <li><span class="bullet"></span>In the case of health food, comply with US health food cGMP regulations</li>
                                    <li><span class="bullet"></span>In the case of general food, the manufacturer shall comply with the Food for Human Use Regulation (PDCHF).</li>
                                    <li><span class="bullet"></span>In the case of fresh agricultural products, comply with the Produce Safety Rule</li>
                                    <li><span class="bullet"></span>USDA-related approval when a small amount of meat, eggs, and milk ingredients (2%) are included(In principle, Korean meat is prohibited for export to the United States.)</li>
                                    <li><span class="bullet"></span>Whether the importer of the United States has DUNS# or FSVP (Overseas Supplier Verification System)</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_food&beverage_04.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC is contributing to the continuous development of customers by accurately evaluating the suitability of product certification through the technology and expertise accumulated over the years.</li>
                                    <li><span class="bullet"></span>IGC has updated knowledge of a wide range of specific scope and legal requirements in major markets around the world, and provides the knowledge and services to support your entire global operations.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_food&beverage_05.jpg" alt="Related Services">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Related Services</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>Food facility registration (FFR)
                                    </span>
                                    <p>
                                        Domestic and foreign facilities that manufacture, process, package, and store food and feed consumed in the United States must register as an FDA food facility. FDA food facility registration must be completed before any food can be manufactured, processed, packaged, or stored for distribution in the United States
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>Foreign Supplier Verification Program (FSVP)
                                    </span>
                                    <p>
                                        FSVP is a program that requires importers to certify that a manufacturer's food is produced in accordance with the process of US food safety standards. Companies wishing to export food and beverages to the United States must appoint a United States agent to export food to the United States.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>FDA Health Supplement labeling
                                    </span>
                                    <p>
                                        Health supplements that are not pharmaceuticals do not need to go through the FDA pre-approval process. However, unlike in Korea, if the product is labeled with a phrase saying that it has a therapeutic effect, it may be treated as a drug, so it is necessary to pay close attention. We help you comply with Health supplements labeling regulations.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">4. </span>US agent service
                                    </span>
                                    <p>
                                        Foreign companies wishing to sell food or beverages in the United States must go through the process through a United States agent. The US agent acts as an intermediary between the company and the FDA. IGC offers a wealth of experienced U.S. agent services
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">5. </span>FDA Food Labeling Review
                                    </span>
                                    <p>
                                        Food labeling must be strictly observed when exporting food to the United States. Those in the food manufacturing, food export, and distribution businesses considering entering the U.S. should check for new regulations and amendments to related laws and prepare food labeling.

                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">6. </span>FCE &amp; SID registration
                                    </span>
                                    <p>
                                        FCE &amp; SID registration (food factory registration &amp; process registration) is required if the product is acidic or low-acid food. According to FDA regulations, acidified foods and low-acid foods must be registered as a food factory and process registration before they can be exported to the United States. IGC helps you comply with FDA regulations through FCE &amp; SID registration (food factory registration &amp; process registration).
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">7. </span>FDA prior notification
                                    </span>
                                    <p>
                                        The United States has enacted the Bioterrorism Act to prevent terrorism using food. Accordingly, in the United States, it is mandatory for facilities in and outside the United States that manufacture/process, package, and store food consumed by humans and animals to be registered as FDA facilities. Until the time, the product may be detained at the port of entry or moved to a third place. Assist with FDA-defined pre-declared imported foods and assist with FDA pre-declaration and facility registration.
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
                        <li><p><em><strong>01</strong></em><span>System certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European, Eurasia, U.S., China, Southeast Asia)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Product testing</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Certification of auditor qualifications</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Professional manpower training and education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 05 미주 식음료품 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 06 미주 건강보조식품 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">U.S Product Certification Introduction</h1>
                <h2 class="tit_cer fc_pointer">Health Supplement Food</h2>
                <p class="outline">
                    Congress defined the term' Dietary supplement ' in the Health Supplement Health Education Act of 1994 (DSHEA). Dietary supplement are foods that people need every day to maintain a healthy life (vitamins, minerals, co-enzymes, carbohydrates, fats, proteins, etc.)
                </p>
                
                <ul class="content">                    
                    <li><!-- content 6-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_dietarysupplementinusa_04.jpg" alt="FDA (Food and Drug Administration) Approval">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FDA (Food and Drug Administration) Approval</h3>
                                <p style="text-align: justify">
                                    All Dietary Supplements are categorized as food and are subject to FDA control. Although the developer is responsible for its effectiveness or safety, unlike drugs, there is no procedure that requires FDA approval before marketing. (Except for newly developed raw materials) All Dietary Supplements include 'These statements has not been evaluated by the Food and Drug Administration. The phrase “This product is not intended to diagnose, treat, cure, or prevent any disease” must be displayed, and phrases using the name of a specific disease cannot be used in advertising or product packaging. Also, it is against the law to use the word FDA in advertising for commercial purposes, and the FDA will take strong sanctions.<br><br>
                                    FDA approval from the Dietary Supplement is an import license approval, and all foods imported from foreign countries are tested for safety by investigating the experimental results that do not contain substances harmful to consumers such as heavy metal test, contamination test, bacteria test, and pesticide test. Is to license the import. This stability test is not directly conducted by the FDA and the results are not recognized, and the importer's documents are submitted for approval.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 6-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_dietarysupplementinusa_02.jpg" alt="Good Manufacturing Practices (GMP)">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Good Manufacturing Practices (GMP)</h3>
                                <p class="con_txt">
                                    If you produce, label, and own dietary supplements that are imported or proposed to be imported into a U.S. state or territory, region of Colombia or the Puerto Rican Union, the current Health Supplement Good Practices Standard (DS CGMP) applies. Retail establishment establishments do not include warehouses or other storage facilities for retailers and other storage facilities that may be sold directly to individual customers.
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li>
                                            <span class="point_blk"><span class="number">1. </span>For labeler, DS CGMP regulations are as follows.</span>
                                            <ul class="list_st">
                                                <li><span class="bullet"></span>Meet 21 CFR 111.255 requirements to establish batch production records.</li>
                                                <li><span class="bullet"></span>Other related requirements such as personnel, facilities and physical facilities and spaces, facilities and equipment, and status maintenance must be observed.</li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <p class="con_txt">
                                    Since the individual component steps start with the packaging process that has already been completed, there is no need to comply with the characteristics and weights or measurements of each component used in 21 CFR111.260(e) requirements.
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li>
                                            <span class="point_blk"><span class="number">2. </span>For Distributor, DS CGMP regulations are as follows.</span>
                                            <ul class="list_st">
                                                <li><span class="bullet"></span>The requirements for storage and distribution must be observed.</li>
                                                <li><span class="bullet"></span>You must comply with those requirements, such as those for human resources, physical facilities and space.</li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <p style="text-align: justify">
                                    If your only customer is a manufacturer that processes dietary ingredients for the manufacture of dietary supplements, you are not subject to DS CGMP. However, by complying with DS CGMP regulations, you can encourage good governance. Companies that package dietary ingredients as simple dietary supplements or label packaged dietary ingredients are subject to DS CGMP regulations. This is because the company is a manufacturer of dietary supplements that are simply packaged or labeled without any additional processing.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 6-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_dietarysupplementinusa_03.jpg" alt="Packaging and labeling of dietary supplements">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Packaging and labeling of dietary supplements</h3>
                                <p class="con_txt">
                                    All details of the manufacturing process and steps that need to be controlled to ensure the quality of the dietary supplement must be indicated on the packaging and labeling as specified in the manufacturing record of the finished product of the dietary supplement.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Specifications of parts used in the manufacture of dietary supplements</li>
                                    <li><span class="bullet"></span>Specifications for intermediate production</li>
                                    <li><span class="bullet"></span>Label and packaging specifications for dietary supplements</li>
                                    <li><span class="bullet"></span>Product specification for finished products of dietary supplements</li>
                                    <li><span class="bullet"></span>Specifications for products received from suppliers for packaging and labeling as dietary supplements</li>
                                    <li><span class="bullet"></span>Packaging and label specifications for dietary supplements that have been packaged and labeled</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 6-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_dietarysupplementinusa_01.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC is contributing to the continuous development of customers by accurately evaluating the suitability of product certification through the technology and expertise accumulated over the years.</li>
                                    <li><span class="bullet"></span>IGC has updated knowledge of a wide range of specific scope and legal requirements in major markets around the world, and provides the knowledge and services to support your entire global operations.</li>
                                    <li><span class="bullet"></span>IGC offers a variety of certification related services in the food area.</li>
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

        </article><!----// 컨텐츠 06 미주 건강보조식품 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 07 미주 화장품 컨텐츠 종료 //------->
        <article style="display:block">
            <section class="business_type5" class="area">
                <h1 class="tit_num">U.S Product Certification Introduction</h1>
                <h2 class="tit_cer fc_pointer">Cosmetics</h2>
                <p class="outline">
                    The U.S. FDA regulates cosmetics sold in the Americas to protect consumers in the Americas, but the regulations are strict, so if you export cosmetics without sufficient understanding, problems may arise. For this reason, companies that export cosmetics to the Americas must fully understand and apply the relevant information before exporting their products<br><br>
                    When a cosmetic is classified as a drug, a company must register a manufacturer with the FDA and pass the approval process for the drug. If it is classified as a general cosmetic, the product can be sold through self-registration rather than FDA approval.<br><br>
                    Companies can register company information, products, and ingredients in relation to their products under the FDA's Cosmetic Self-Registration Program. This registration program is The Voluntary Cosmetic Registration Program (VCRP) and is a reporting system to the FDA by companies that manufacture, package, and distribute cosmetics that are commercially distributed in the United States. The VCRP is divided into two items, and you can participate in two or one item of
                </p>
                
                <ul class="content">                    
                    <li><!-- content 7-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_01.jpg" alt="Subject to VCRP registration">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Subject to VCRP registration</h3>
                                <p style="text-align: justify">
                                    VCRP applies only to cosmetics sold to consumers in the United States. It does not apply to cosmetics used for professional use, such as products used in beauty salons, spas, or skin clinics. It also does not apply to products other than for sale, such as hotel samples, free gifts, or homemade cosmetics to give to friends.<br><br>
                                    In addition, products for which cosmetics are used for therapeutic or preventive purposes are considered both cosmetics as well as pharmaceuticals, so the relevant drug provisions must be applied to comply with legal requirements.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 7-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_02.jpg" alt="Advantages of VCRP registration">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Advantages of VCRP registration</h3>
                                <p style="text-align: justify">
                                    VCRP assists FDA in its responsibility to regulate cosmetics marketed in the US Product submission and facility registration are not required, but through voluntary submission, we provide data so that FDA can obtain useful information about cosmetics and ingredients, frequency of use, and business related to manufacturing and distribution. This can in turn help promote the export activities of companies.<br><br>
                                    Information from the VCRP database is also used for Cosmetic Ingredient Review (CIR). Independent Industry Supported Expert Panel the CIR Expert Panel is being used to help prioritize ingredient safety assessments as part of the ingredient safety review.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 7-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_03.jpg" alt="Precautions on VCRP registration">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Precautions on VCRP registration</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Cosmetics are not FDA pre-market approval.</li>
                                    <li><span class="bullet"></span>VCRP cannot be a cosmetic approval program or a marketing promotion tool.</li>
                                    <li><span class="bullet"></span>Cosmetic registration, registration numbering, cosmetic filing, or CPIS numbering does not mean that the FDA has approved the company or product.</li>
                                    <li><span class="bullet"></span>VCRP is not a prior notification system for imported cosmetics, and importing companies in the United States are not required to register with the FDA.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 7-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_04.jpg" alt="How to register">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">How to register</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>Registration of cosmetics manufacturing and/or packaging facilities
                                    </span>
                                    <p>
                                        Cosmetic facility refers to the place where cosmetics are manufactured and/or packaged, and does not apply to places where only business operations are conducted. Only the owner or operator of a cosmetic manufacturing or packaging facility can register the facility using the form for the location of each facility, and distributors cannot register the facility. Companies located outside the United States may voluntarily register their facilities after exporting cosmetics for sale to the United States. FDA will assign a registration number to each facility location.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>Preparation of Cosmetic Product Ingredient Statement (CPIS)
                                    </span>
                                    <p>
                                        Cosmetics manufacturers, packers, or distributors may submit a statement for each product that the company has initiated commercial distribution in the United States. A separate form must be used for each lineage. FDA will assign a CPIS number for each line submitted to the VCRP.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>Modification or disruption of the product line
                                    </span>
                                    <p>
                                        CPIS may be amended or discontinued in a complete form and a continuous form. Changes to the brand name or ingredient must be submitted within 60 days of the product entering commercial distribution. CPIS must cease distribution within 180 days of becoming aware of the discontinuation of distribution of commercial distribution.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 7-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_05.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC, in cooperation with PATS Corp. located in the United States, assists in registering cosmetics sold in the US and provides overall guidelines.</li>
                                    <li><span class="bullet"></span>PATS Corp. (Pan America Technical Service, Corp.) is located in LA, USA, and provides fast and competitive support services to domestic and foreign companies in compliance with US FDA regulations and cGMP</li>
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

        </article><!----// 컨텐츠 07 미주 화장품 컨텐츠 종료 //------->

    </div><!------div class="tab_con" 종료 --------->		
</div> <!--------// div class="content_wrap"  종료  ------------------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>