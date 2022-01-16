<?php
	include_once('./_common.php');
$g5['title'] = 'Europe Product Certification';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
        
        .content li .img_area { width: 90%;margin: 50px auto 0 }/* 이미지 크기/여백 조정 */
        
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */
        
    }

    
    /* ============= 상세페이지 반응형 종료 ============= */

</style>


<div class="content_wrap">
    <!--+++ 20.05.07 탭메뉴 버튼 설정 시작 +++-->
	<div class="tab_menu tab01">
        <ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">CE MDD</a></li>
			<li><a href="javascript:;">CE MDR</a></li>
			<li><a href="javascript:;">Clinical Evaluation</a></li>
			<li class="on"><a href="javascript:;">CE IVD/IVDR</a></li>
			<li><a href="javascript:;">CE LVD/EMC</a></li>
			<li><a href="javascript:;">CE Machinery</a></li>
			<li><a href="javascript:;">CE PED</a></li>
			<li><a href="javascript:;">CE SPVD</a></li>
			<li><a href="javascript:;">Hot-water boiler</a></li>
			<li><a href="javascript:;">Gas Appliance</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 버튼 설정 종료 +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.07 탭컨텐츠 영역 시작 +++-->
	<div class="tab_con">
        <!--+++++ 컨텐츠 01 +++++-->	
		<article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">European Product Certification Introduction</h1>
                <h2 class="tit_cer fc_pointer">CE MDD | Medical Device</h2>
                <p class="outline">
                    The medical Device Directive is intended to harmonize the legislation on medical devices within the European Union. Legally, in order to sell Medical devices to the European Market, manufacturers must comply with the requirements of the Medical Device Directive. The applicant’s product and quality system must be evaluated, and the manufacturer must affix the CE mark before selling the products.
                </p>
                
                <ul class="content">
		            <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_ce-mdd_01.jpg" alt="Applicable Items">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Applicable Items</h3>
                                <p style="text-align: justify">
                                    The Medical Device Directive is applicable to devices according to the definition of ‘medical device’. A medical device is a machine, device, equipment, material, or other article used alone or in combination that contains software intended for human use as intended by the manufacturer.<br><br>
                                    Is applicable to diagnosis, prevention, monitoring, treatment or alleviation, diagnosis, monitoring, treatment of disease or alleviation or compensation for injury or disability, investigation, replacement or modification of anatomical or physiological processes, control or concepts. It also refers to something that does not achieve its intended primary action in or on the human body by pharmacological, immunological or metabolic means, but can help its function by such means.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">Qualification Assessment Process</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_ce-mdd_03_01.jpg" alt="Qualification Assessment Process">
                                        <span style="display:block;text-align:center;">Conformity assessment procedure</span>
                                    </div>
                                </div>

                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; Classification
                                    </span>
                                    <p class="con_txt">
                                        Annex IX of the Medical Device Directive(93/42/EEC) provides 18 rules for classifying medical devices. Under these rules, medical devices are classified according to their intended purpose.
                                    </p>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li><span class="bullet"></span>Rule 1 ~ 4 : Non-invasive device</li>
                                            <li><span class="bullet"></span>Rule 5 ~ 8 : Invasive device</li>
                                            <li><span class="bullet"></span>Rule 9 ~ 12 : Active device</li>
                                            <li><span class="bullet"></span>Rule 13 ~ 18 : Special Law</li>
                                        </ul>
                                    </div>
                                    <p class="con_txt">
                                        Medical device risk assessment to patients and users are identified and classified according to the above 18 rules. The eligibility assessment process is based on the identified risk values. If the risk value is higher, the eligibility requirements get more stringent.<br><br>
                                        Class I medical devices follow the evaluation procedures in Annex VII.
                                    </p>
                                </div>
                                
                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; Procedure of Class I (Including measurement function)
                                    </span>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <p>Manufacturer’s option :</p><br>
                                            <li><span class="bullet"></span>Qualification and technological documentation of competence to meet metrological requirements for each or statistically selected ample in accordance with Annex VII section 3 and Annex IV</li>
                                            <li><span class="bullet"></span>Evaluation and technical documentation of product quality system in accordance with Annex VII section 3 and Annex V which is related to statistical requirements.</li>
                                            <li><span class="bullet"></span>Quality assessment and technical documentation of medical devices in accordance with Annex VII section 3 and Annex VI associated with statistical requirements.</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; Procedure of Class I (including sterilization)
                                    </span>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <p>Manufacturer’s option :</p><br>
                                            <li><span class="bullet"></span>Evaluation and technical documentation of product quality systems in accordance with Annex VII section 3 and annex V associated with sterile conditions.</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; Procedure of Class IIa Medical device
                                    </span>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <p>Manufacturer’s option :</p><br>
                                            <li><span class="bullet"></span>Qualification and technical documentation of each or statistically selected sample according to Annex VII Section 3 and Annex IV Section 8.</li>
                                            <li><span class="bullet"></span>Evaluation and technical documentation of the product quality system in accordance with Annex VII section 3 and Annex V section 6(examined at the manufacturer’s site).</li>
                                            <li><span class="bullet"></span>Evaluation and technical documentation of medical device quality in accordance with Annex VII Section 3 and Annex VI Section 6(examined at on-site audit).</li>
                                            <li><span class="bullet"></span>Evaluation and technical documentation where the overall quality system has been audited at the manufacturer’s site in accordance with Annex VII section3 and Annex II (Development evaluation excluded according to section 4)</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; Procedure of Class IIb Medical Device
                                    </span>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <p>Manufacturer’s option :</p><br>
                                            <li><span class="bullet"></span>Qualification, type examination and technical documentation for each manufactured product in accordance to Annex III Section 3: Samples selected statistically(randomly) according to Annex IV or validated by Section 5.</li>
                                            <li><span class="bullet"></span>Evaluation, type examination and technical documentation of manufacturing quality systemin accordance with Annex III Section 3 and Annex V(examined at onsite audit)</li>
                                            <li><span class="bullet"></span>Technical documentation of evaluation and type examination of medical device in accordance with Annex III Section 3 and Annex VI(examined at manufacturer’s onsite audit)</li>
                                            <li><span class="bullet"></span>Technical documentation of the evaluation of all quality systems that have been audited on site of the manufacturer in accordance with Annex II Section 3.2 and Annex II (excluding development evaluation by Section 4)</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; Procedure of Class III Medical device
                                    </span>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <p>Manufacturer’s option :</p><br>
                                            <li><span class="bullet"></span>Evaluation of all quality systems according to Annex II Section 3.2 and Annex II(examined at the manufacturer’s on site audit) and technical documentation of the description of the development according to Section 4.2.</li>
                                            <li><span class="bullet"></span>Annex III Section 3 and Qualification, Type examination and technical documentation for each manufactured device: Verification shall be made by Section 5 for statistically (randomly) selected samples in accordance with Annex IV Section 6.</li>
                                            <li><span class="bullet"></span>Technical documentation of Evaluation, type examination of the product quality system(examined at the manufacturer’s onsite audit) in accordance with Annex III Section 3 and Annex V Section 3.2</li>
                                        </ul>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">End of the MDD</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_ce-mdd_03.jpg" alt="End of the MDD">
                                    </div>
                                </div>
                                <p style="text-align:justify;">
                                    The European Medical Device Directive MDD(93/42/EEC) will be completely replaced by MDR from 26 May 2020. After that, it is not possible to apply for CE certification to MDD, and the new medical device must meet the MDR (2017/745/EU) requirements.<br><br>
                                    However, if the MDD conformity assessment has been completed and the certificate has been issued before the time of compulsory application, the product can be shipped(exported) to European jurisdiction with the validity of the certificate recognized up to May 27, 2024.<br><br>
                                    You may check the above materials officially issued by the European Authority.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_ce-mdd_04.jpg" alt="CE / MDD Service">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">CE / MDD Service</h3>
                                <p style="text-align:justify;">
                                    IGC is currently working on a CE/MDD project in cooperation with 3 Notified Body (referred to as NB) organizations. Because of this, you can apply without exception of almost all scopes from Class I to Class III. We will not spare any support to obtain your CE/MDD certification based on the experience accumulated through numerous projects.
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
                        <li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>
           
        </article> <!--------+++++++ / 컨텐츠 01 종료 / ++++++++----------->
        
        
        <!--+++++ /컨텐츠 02 CE MDR 컨텐츠 시작 +++++-->   
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">European product certification introduction</h1>
		        <h2 class="tit_cer fc_pointer">CE MDR | Medical Device</h2>
		        
		        <ul class="content">
		            <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/prodeuct_ce-mdr_01.jpg" alt="What is CE Marking ?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">What is CE Marking ?</h3>
                                <p class="con_txt">
                                    The medical Device Regulation is intended to harmonize the legislation on medical devices within the European Union. Legally, in order to sell Medical devices to the European Market, manufacturers must comply with the requirements of the Medical Device Regulation(MDR) after enforcement in 2020. The applicant’s product and quality system must be evaluated, and the manufacturer must affix the CE mark before selling the products.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Applicable standards : Regulation (EU) 2017/745 of the European Parliament and of the Council of 5 Ap</li>
                                    <li><span class="bullet"></span>Legal content : Council Directive 93/42/EEC (MDD) + Council Directive 90/385/EEC (AIMD)</li>
                                    <li><span class="bullet"></span>Effective Date : May 25, 2017</li>
                                    <li><span class="bullet"></span>Compulsory application date : May 26, 2020, after the MDR takes effect a grace period of 3 years</li>
                                    <li><span class="bullet"></span>Purpose : To create a safer, more effective and innovative medical device market in Europe.</li>
                                    <li><span class="bullet"></span>MDD certificate final validity date: May 26, 2024 (sale until May 27, 2025)</li>
                                    <li><span class="bullet"></span>Changed from Directive to Regulation. Regulation change more frequently than Directives and are more enforceable.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_ce-mdd_02.jpg" alt="Major Revision Contents">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Major Revision Contents</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Strong control of health authorities over the Notified Body(NB): Reinforcement of sub-contractor management</li>
                                    <li><span class="bullet"></span>Introduction and application Common Specification for each product in addition to the harmonized standard.</li>
                                    <li><span class="bullet"></span>Strengthening the responsibility of economic operators [Manufacturer, Importer, Distributor, Authorized Representative]</li>
                                    <li><span class="bullet"></span>Strengthening the responsibility of economic operators (Manufacturer, Importer, Distributor, Authorized Representative)</li>
                                    <li><span class="bullet"></span>NB’s strong control over manufacturers</li>
                                    <li><span class="bullet"></span>Expansion of clinical evaluation of Pre/Post Market and management of all clinical investigations, and reinforcement of market surveillance (Vigilance &amp; PMS) after marketing by manufacturers</li>
                                    <li><span class="bullet"></span>Establishment of computer system based on EUDAMED(European database on medical devices): product registration, UDI, economic operator registration, NB and certificate, clinical research, Vigilance &amp; PMS, market research (health authorities)</li>
                                    <li><span class="bullet"></span>Improvement and introduction of UDI System : sequential introduction from Class III. Currently it’s compatible with FDD, subject to change.</li>
                                    <li><span class="bullet"></span>MDCG(Medical Device Coordination Group) : A medical device coordination group composed of independent expert within the health authority. Evaluate NB, Manage Class III, Consult clinical evaluation and investigate conformity assessment in detail for Class III implantable &amp; Class IIb active device product.</li>
                                    <li><span class="bullet"></span>Class I reusable surgical instrument : Like Class I sterilization/measuring devices, subject to NB review → only for reprocessing processes such as washing/cleaning process</li>
                                    <li><span class="bullet"></span>Implant Card : Doctor, manufacturer, patient, serial number, etc.</li>
                                    <li><span class="bullet"></span>Person Responsible for Regulatory Compliance) : A person who has more than one year of quality &amp; RA work experience, and four-year college degree or higher, responsible for the release of technical documents and products.</li>
                                    <li><span class="bullet"></span>Application of MDR to products that do not belong to the definition of medical devices → Fillers, ties, and laser surgery devices(hair removal, cosmetic purposes)</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/prodeuct_ce-mdr_02.jpg" alt="Content to be included in the TCF(Technical Document)">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Content to be included in the TCF(Technical Document)</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Completion of GSPR(General Safety and Performance Requirements) Check List of MDR Annex 1</li>
                                    <li><span class="number">2. </span>Biological Safety Assessment Report (ISO10993-1:2018)</li>
                                    <li><span class="number">3. </span>Risk Management Plan (ISO14971:2019)</li>
                                    <li><span class="number">4. </span>Risk Management Report</li>
                                    <li><span class="number">5. </span>Usability Validation Plan (IEC62366-1:2015)</li>
                                    <li><span class="number">6. </span>Usability Validation Report</li>
                                    <li><span class="number">7. </span>Clinical Evaluation Plan (MEDDEV 2.7/1 :2016</li>
                                    <li><span class="number">8. </span>Clinical Literature Search Protocol</li>
                                    <li><span class="number">9. </span>Clinical Literature Search Report</li>
                                    <li><span class="number">10. </span>Adverse Event Search Report</li>
                                    <li><span class="number">11. </span>Clinical Evaluation Report</li>
                                    <li><span class="number">12. </span>Prepare Process (Sterilization, Cleaning, Packaging, Clean Room) Validation Report</li>
                                    <li><span class="number">13. </span>Software Validation Plan</li>
                                    <li><span class="number">14. </span>Software Validation Report</li>
                                    <li><span class="number">15. </span>Product drawing and schematic drawing</li>
                                    <li><span class="number">16. </span>Manufacturing flow chart</li>
                                    <li><span class="number">17. </span>User Manual (Instructions for use)</li>
                                    <li><span class="number">18. </span>List of used materials(important components), etc./li>
                                    <li><span class="number">19. </span>Product Label</li>
                                    <li><span class="number">20. </span>Annual upload of SSCP(Summary of safety and clinical performance) : Implantable and Class III Article 32</li>
                                    <li><span class="number">21. </span>Regularly update PSUR(Periodic Safety Update Report) : Class IIa, IIb, III product Article 86</li>
                                    <li><span class="number">22. </span>DOC (Declaration of Conformity)</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/prodeuct_ce-mdr_03.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p class="con_txt">
                                    IGC is contributing to the continuous development of customers by accurately evaluating the suitability of product certifications through the technology and expertise accumulated over the years.<br><br>
                                    IGC has up-to-date knowledge of a wide range of specific scopes and legal requirements in major markets around the world and provides the knowledge and services to support your entire global operation.<br><br>
                                    In addition, IGC provides various certification related services in the medical device field.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>93/42/EEC</li>
                                    <li><span class="bullet"></span>ISO 13485</li>
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
                        <li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>
           
        </article> <!--------+++++++ / 컨텐츠 02 종료 / ++++++++----------->
        
        
        <!--+++++ / 컨텐츠 03 ISO 27799 탭메뉴 컨텐츠 영역 시작 / +++++-->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">European Product Certification Introduction</h1>
		        <h2 class="tit_cer fc_pointer">Clinical Evaluation</h2>
		        <p class="outline">
		            Clinical evaluation is the process of collecting and evaluating clinical data related to medical devices to verify safety, effectiveness and performance, and to demonstrate conformity to relevant regulatory requirements.<br><br>
		            Clinical evaluation is a process conducted throughout the life cycle of a medical device, it should be conducted in the process of developing a medical device to approve data for manufacturers to study and obtaining new information about the device’s safety, effectiveness and performance.<br><br>
		            Medical device manufacturers shall meet the requirements of ISO 14155 standard when conducting clinical trials in order to prove the safety and effectiveness of the product according to the purpose of use.
		        </p>
		        
		        <ul class="content">
		            <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_evalu_01.jpg" alt="MDR and Clinical">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">MDR and Clinical</h3>
                                <p style="text-align:justify">
                                    Medical Device Regulation(MDR) refers to a new medical device regulation that all medical device manufacturers planning to enter the European market must comply with. MDR requires a process that enhances clinical data and evaluation processes, and manufacturers must provide clinical evaluation reports to demonstrate the safety and performance of medical devices.<br><br>
                                    For Class III and Class IIb products, clinical evaluation is mandatory, and the clinical evaluation instruction manual and PMCF plan are included.<br><br>
                                    Clinical data can be acquired by collecting data on the clinical experience of equivalent medical devices, deriving clinical results through clinical evaluation reports, and clinical evaluation using similar devices.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_evalu_02.jpg" alt="Stages of Clinical Evaluation">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Stages of Clinical Evaluation</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Establish a clinical evaluation plan</li>
                                    <li><span class="number">2. </span>Creation and identification of clinical data (Literature search, clinical experience, clinical research)</li>
                                    <li><span class="number">3. </span>Evaluation of the suitability of clinical data</li>
                                    <li><span class="number">4. </span>Analyzing the entire data and drawing conclusion</li>
                                    <li><span class="number">5. </span>Preparation of clinical evaluation report</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_evalu_03.jpg" alt="Prerequisite of Clinical Trial Data">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Prerequisite of Clinical Trial Data</h3>
                                <p class="con_txt">
                                    Clinical trial evaluation data should include.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Risk assessment, justification of the designed clinical trial, clinical trial stage, clinical trial brochure, clinical trial Clinical progress report, monitoring plan, reasons for selection of clinical trial region, clinical participant consent, and clinical participant identification method, etc. should be included.</li>
                                    <li><span class="bullet"></span>Information about the initial clinical trial region is required.</li>
                                    <li><span class="bullet"></span>Periodic monitoring for clinical trial region is required.</li>
                                    <li><span class="bullet"></span>Data on side effects or device defects is required.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_evalu_04.jpg" alt="What is PMS?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">What is PMS?</h3>
                                <p style="text-align:justify">
                                    ‘PMS’ is also referred to as a post-market surveillance system and an any activity carried out by manufacturers including pre-gather and review experience gained from medical devices placed on the EU market, and to keep the collected data up to date.<br><br>
                                    Manufacturers must plan, establish, document, implement, maintain and update post-market surveillance systems for each device in a manner proportional to the risk class and appropriate for the device type. Post-market surveillance systems must be suitable for actively and systemically collecting, recording and analyzing data on the quality, performance and stability of devices over their entire life span, drawing necessary conclusions, and determining, implementing and monitoring preventive and corrective actions.<br><br>
                                    In MDR, there is an increased obligation to proactively collect post market requirements and data for manufacturers and to document and report the analysis of these post market activities and data.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_evalu_05.jpg" alt="PMS Report Creation">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">PMS Report Creation</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>Post-Market Surveillance Report (PMSR)
                                    </span>
                                    <p>
                                        Manufacturers of Class I devices are required to prepare a post-market surveillance report summarizing and analysis results and conclusions of the post-market surveillance data collected as a result of the post-market surveillance plan to prepare a rationale and explanation for prevention and correction. If necessary, the report must be updated and provided to the competent authority upon request.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>Periodic Safety Update Report (PSUR)
                                    </span>
                                    <p>
                                        Manufacturers of Class IIa, Class IIb and Class III devices are required to summarize the results and conclusions of the post-analysis for each category or group of devices, as well as results of periodic safety update report (PSUR) for each device. Market surveillance data is collected as a rationale and explanation for preventive and corrective actions taken as a result of post market surveillance plans.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-6 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_evalu_06.jpg" alt="PMCF & PSUR">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">PMCF &amp; PSUR</h3>
                                <p style="text-align:justify">
                                    PMCF(Post-Market Clinical Follow-up), a type of PMS, is the process of collecting and updating data on clinical evaluation, which is an essential requirement of MDR. It is designed to collect and validate long-term data on the performance, safety and residual risk of medical devices. Manufacturers are required to submit clinical data obtained through PMCF and data such as PMS reports, clinical assessment reports, and risk assessment reports.<br><br>
                                    The purpose of PMCF is to verify the safety and clinical performance of medical devices, to continuously manage identified risks, and to detect risks based on factual evidence. PMCF can be achieved through new clinical studies, review of data derived from medical device registries, follow-up by customers who have conducted premarket clinical trials, or through follow-up by patients who have previously used medical devices.<br><br>
                                    The PSUR(Periodic Safety Update Report) is a document intended to provide an evaluation of the safety and performance of approved medical devices. It is the purpose of PSUR to present a comprehensive and critical analysis by identifying new risks to stability and performance.<br><br>
                                    Manufacturers of Class IIb, Class III medical devices must submit a PSUR annually, and manufacturers of Class IIa medical devices must submit a PSUR at least once every two years.<br><br>
                                    The company must submit a report on PMS data analysis to the certification body, and after reviewing the report, the certification body must register the result in EUDAMED.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-7 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_evalu_07.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p style="text-align:justify">
                                    IGC provides services for conducting clinical trials in partnership with DNA Technologies Pacific.<br><br>
                                    DNA Technologies Pacific performs CRO as a clinical trial consignee, and supports the creation of clinical evaluation reports, and regular safety update reports according to evaluation by incorporating the results of research from investigation which will help you effectively acquire and maintain certification.
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
                        <li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 03 ISO 27799 탭메뉴 컨텐츠 영역 종료 //------->
        
        
        <!--+++++ / 컨텐츠 04 CE IVD/IVDR 컨텐츠 시작 / +++++-->
        <article style="display:block;">
            <section class="business_type5" class="area">
		        <h1 class="tit_num">European product certification introduction</h1>
		        <h2 class="tit_cer fc_pointer">CE IVD/IVDR | In-vitro diagnostic medical device</h2>
		        <p class="outline">
		            The In-vitro diagnostic medical devices Directive 98/79/EC, IVD was enacted on December 7, 1998 and has been applied to all in vitro diagnostic medical devices sold in the European market from December 7, 2003. Devices that comply with this directive are marked with the CE mark, and the EU mandates to attach the CE mark to in vitro diagnostic medical devices.<br><br>
		            The European Union enacted the ‘regulation for medical devices in 2017 and revised the legal system on medical devices. Unlike the existing form of ‘Directive’, ‘Regulation’ has legal effect applied directly to member states and is applied directly, not through implementing legislation of member states.<br><br>
		            In vitro diagnostic medical device regulation(EU Regulation 2017/746, IVDR) entered into force on May 26, 2018, and the invitro diagnostic medical device regulation was enforced from May 26, 2022 after a transition period of 5 years.
		        </p>
		        
		        <ul class="content">
		            <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_ceivdivdr_01.jpg" alt="Understanding of in-vitro diagnostic medical devices">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Understanding of in-vitro diagnostic medical devices</h3>
                                <p class="con_txt">
                                    In vitro diagnostic medical device regulations are applied to devices that comply with IVDR Article 2 ‘Definition of in vitro diagnostic medical devices’. In vitro diagnostic medical devices, either alone or in combination, mean reagents, reagent products, measuring instruments, kits, instruments, equipment, software and system medical devices intended by the manufacturer to be used in vitro for specimen testing, including donation of blood and tissues derived from human body for the purpose of providing information on one or more of the following :
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="number">(a) </span>Relating to physiological or pathological process or condition;</li>
                                        <li><span class="number">(b) </span>Relating to a congenital physical or mental disorder;</li>
                                        <li><span class="number">(c) </span>Relating to a medical condition or predisposition to disease;</li>
                                        <li><span class="number">(d) </span>To determine safety and compatibility with potential subjects;</li>
                                        <li><span class="number">(e) </span>To predict treatment response or action;</li>
                                        <li><span class="number">(f) </span>To establish or monitor treatment measures;</li>
                                    </ul>
                                </div>
                                <p style="text-align:justify">
                                    If the intended use of the product to be certified meets the definition of in vitro diagnostic medical devices stipulated by laws and meets the IVDR requirements, CE marking can be affixed, and medical devices can be sold in the European Economic Area.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">Major changes in IVD/IVDR</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_ceivdivdr_02.jpg" alt="Major changes in IVD/IVDR">
                                    </div>
                                </div>
                                <p class="con_txt">
                                    IVD consists of 24 groups and 10 annexes, and IVDR consists of 10 chapters, 113 groups and 15 annexes. As IVD was replaced by IVDR, requirements were added and the management of the product was strengthened.<br><br>
                                    The major changes are as followings :
                                </p>
                                <table class="type02">
                                    <thead>
                                        <tr>
                                            <th scope="cols" width="30%">
                                                <p>Major changes</p>
                                            </th>
                                            <th scope="cols" colspan="5" width="70%">
                                                <p>Details</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" rowspan="9">
                                                <p>Medical device classificaiton system change</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>In IVD, the grades were classified into General, Self-testing, List B, List A, but in IVDR, the grade classification system was changed to A, B, C, D.</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="none">
                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="5" width="14%">
                                                <p>&nbsp;</p>
                                            </td>
                                            <td width="14%">
                                                <p style="text-align:center">IVD classification</p>
                                            </td>
                                            <td width="14%">
                                                <p style="text-align:center">IVDR classification</p>
                                            </td>
                                            <td width="14%">
                                                <p style="text-align:center">Risk</p>
                                            </td>
                                            <td rowspan="5" class="none" width="14%">
                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align:center">General</p>
                                            </td>
                                            <td>
                                                <p style="text-align:center">A</p>
                                            </td>
                                            <td>
                                                <p style="text-align:center">Low</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align:center">Self-testing</p>
                                            </td>
                                            <td>
                                                <p style="text-align:center">B</p>
                                            </td>
                                            <td>
                                                <p style="text-align:center">↓</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align:center">List B</p>
                                            </td>
                                            <td>
                                                <p style="text-align:center">C</p>
                                            </td>
                                            <td>
                                                <p style="text-align:center">High</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align:center">List A</p>
                                            </td>
                                            <td>
                                                <p style="text-align:center">D</p>
                                            </td>
                                            <td>
                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="none">
                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Changes in conformity assessment procedure</p>
                                            </td>
                                            <td colspan="5" class="none">
                                                <p>
                                                    In the case of Class A, there is no need to undergo conformity assessment through a Certification Body. However, devices that are sterilized among Class A(Class As) or higher must go through a certification body, and a quality management system is also required.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Changes in the obligation of economic operators</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>
                                                    The obligation of operators(manufacturer, delegated agent, importer, distributor) have been strengthened and added.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>Changes in performance evaluation</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>
                                                    IVDR requires the preparation of accurate and additional data on performance and should include scientific validity, analytical performance, and clinical performance.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="none">
                                                <p>
                                                    For Class D, testing by an EU standard laboratory is required.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Introduction of UDI</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>
                                                    A unique identification code(UDI) must be introduced to secure identification and traceability and to secure post-marketing safety.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Requirements for the software</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>
                                                    Regulations related to software that were not included in IVD have been strengthened.
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                        <li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 04 CE IVD/IVDR 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 05 CE LVD/EMC 탭메뉴 컨텐츠 영역 시작 //------->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">European product certification introduction</h1>
		        <h2 class="tit_cer fc_pointer">CE LVD/EMC | Low Voltage/Electromagnetic Compatibility</h2>
		        <p class="outline">
		            The European Low Voltage Directive(LVD) is a directive to protect electrical equipment against electric shock and other electrical hazards within a specific voltage range. These guidelines apply to electrical equipment designed and used with voltage specification for direct current between 70 ~ 1500 V and alternating current between 50 ~ 1000 V. Also, the voltage specifications that apply to these directives are for the electrical input/output voltage, not the voltage inside the equipment.<br><br>
		            The Low Voltage Directive also defines the human body’s effects of electromagnetic field radiation from electrical equipment. The Low Voltage Directive is one of the oldest single directives established prior to the introduction of the “New” or “Global” concepts. In a broad sense, it provides a pre-market conformity assessment procedure for a device and the Essential Health and Safety Requirements(HSR) that the device must meet either directly or by harmonized standards, which ensure that equipment is used safely.<br><br>
		            This is to prevent personal and property injury or loss from the following hazards that may occur under predicated or unforeseen circumstances.
		        </p>
		        
		        <ul class="content">
		            <li><!-- content 5-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_celvdemc_01.jpg" alt="Applicable Hazard">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Applicable Hazard</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Electrical Hazard : When exposed to danger during use such as electronic shock</li>
                                    <li><span class="number">2. </span>Fire Hazard : In case of fire due to overload, short circuit, etc.</li>
                                    <li><span class="number">3. </span>Mechanical Hazard : Risk factors due to mechanical malfunction</li>
                                    <li><span class="number">4. </span>Physical Hazard : Structural risk factors such as falling, external shock, and collapse</li>
                                    <li><span class="number">5. </span>Chemical Hazard : Possible hazards caused by the paint used on the product</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/igc_078_kc_01.jpg" alt="CE LVD / EMC Certification Procedure">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">CE LVD / EMC Certification Procedure</h3>
                                <p style="text-align: justify">
                                    According to 2014/35/EU, it is applied to electrical appliances with a rated voltage of AC50~1000V or DC75~1500V. (However, products listed in Annex II are excluded(Explosion-proof equipment, radiation and medical equipment, electric parts of elevators, electric meters, indoor plugs and socket outlets, electric barbed wire controllers, jamming equipment, special electricity used for ships, aircraft, and railroads complying with safety regulations prepared by international organization device))
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_celvdemc_02.jpg" alt="Detailed Procedure">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Detailed Procedure</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">[ Step 1 ]</span>
                                    <ul class="list_st">
                                        <li><span class="number">1. </span>In order to carry out CE marking, the manufacturer must understand the EMC Directive that defines the product to be marked. EMC Directive: 2014/30/EU Electromagnetic compatibility (EMC) Directive</li>
                                        <li><span class="number">2. </span>For the suitability of the product, the essential requirements stipulated in the Directive shall be organized by item. The manufacturer must prove that the requirements stipulated in the relevant Directive are met. For this purpose, technical details of the response for safety and risk prevention in product must be described or results of product test and related data must be presented.</li>
                                        <li><span class="number">3. </span>The manufacturer determines the conformity assessment method(applied module) to prove and declare that the product meets the requirements of the relevant guidelines related to CE marking, and conducts conformity assessment accordingly. CE marking conformity assessment stipulates in each Directive to use one or a combination of two modules according to the characteristics of the product among the 8 modules.</li>
                                        <li><span class="number">4. </span>Once the guidelines to be applied to the product have been determined, the European test standards to be tested for each of those guidelines should be determined.</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">[ Step 2 ]</span>
                                    <ul class="list_st">
                                        <li><span class="number">1. </span>If the EN standard related to the product has been determined, conduct the test in an accredited institution according to the standard.</li>
                                        <li><span class="number">2. </span>Product tests are used as data to prove the safety and risk response skills of products required by the guidelines.</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">[ Step 3 ]</span>
                                    <ul class="list_st">
                                        <li><span class="number">1. </span>For the declaration of conformity, a technical document (Technical Construction Files; T.C.F) that deals with the technical contents for the safety and risk prevention of the product shall be prepared.</li>
                                        <li><span class="number">2. </span>The technical contents to be dealt with in the technical document must be prepared by referring to the relevant guidelines as the required data differs according to the relevant directive.</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">[ Step 4 ]</span>
                                    <ul class="list_st">
                                        <li><span class="number">1. </span>In this step, in order to declare the conformity of the Directive, the manufacturer prepares a declaration of conformity based on the quality system certification required for each module and various technical documents, and signs and approves it as a confirmation.</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">[ Step 5 ]</span>
                                    <ul class="list_st">
                                        <li><span class="number">1. </span>After completing and approving the declaration of conformity, the manufacturer attaches the labeling information of the product when the product is shipped. The label includes the manufacturer’s name, product related matters and CE marking.</li>
                                        <li>
                                            <span class="number">2. </span>In general, the details of the technical document are as follows :
                                            <ul class="list_st">
                                                <li><span class="bullet"></span>General information about the product and explanation necessary for understanding the operating system of the product</li>
                                                <li><span class="bullet"></span>Installation drawings, design drawings, circuit diagrams, circuit distribution diagram, etc.</li>
                                                <li><span class="bullet"></span>Parts List, test report, design calculation, standard checklist</li>
                                                <li><span class="bullet"></span>Clinical trial data(for MDD), risk factor analysis</li>
                                                <li><span class="bullet"></span>Catalogs, technical data, etc. of important parts or parts exchanged during maintenance</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <p style="text-align: justify">
                                    The purpose of this guideline is to ensure safety from electricity by preventing the sale of electrical products that threaten human and animal safety in the European Union. Related products include computers, information technology equipment, household appliances, power tools, laboratory equipment, test and measurement equipment and power supplies. In other words, it is essential for manufacturers planning to sell electrical products to Europe.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_celvdemc_03.jpg" alt="Post management of CE LVD/EMC certification">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Post management of CE LVD/EMC certification</h3>
                                <p style="text-align: justify">
                                    CE marked products are cleared through 17 EEA countries’ custom without any restriction. Cleared products can be distributed in the European market without any discrimination.<br><br>
                                    CE Customs checks the CE marking and accepts the declaration of conformity.<br><br>
                                    Even for the customs clearance product, if necessary, follow-up management such as sample inspection, along with a request for submission of technical documents, is subject to objections from relevant stakeholders (customers, competitors, and domestic inspection agencies).<br><br>
                                    CE marking is a system that receives post-management, not a pre-inspection system that can be marketed after receiving pre-inspection and approval of CE marking authority of the member country’s government or mandatory standard. The CE marking authority will voluntarily, or when a stakeholder reports or a problem occurs, collects the products distributed on the market and conducts a document inspection related to conformity of standards and, if necessary, conducts a safety inspection of the product.
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
                        <li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 05 CE LVD/EMC 탭메뉴 컨텐츠 영역 종료 //------->
        
        
        <!----// 컨텐츠 06 CE Machinery 탭메뉴 컨텐츠 영역 시작 //------->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">Introduction to European Product Certification</h1>
		        <h2 class="tit_cer fc_pointer">CE Machinery | Machinery</h2>
		        <p class="outline">
		            A manufacturer that intends to distribute or sell a product within Europe shall affix a CE mark to the product through declaration or certification of conformity that the product conforms to the applicable EU guidelines. In Europe, the guidelines applicable to the safety of machinery are Machinery Directive 2006/42/EC and apply to all machinery, including transport machines, mechanism, lifts and transport equipment and safety components.
		        </p>
		        
		        <ul class="content">
                    <li><!-- content 6-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cemachinery_01.jpg" alt="CE Machinery(Machinery Safety) European Product Certification Overview">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">CE Machinery(Machinery Safety) European Product Certification Overview</h3>
                                <p class="con_txt">
                                    The definition of machinery is defined in MD as "at least one part of the operation, with multiple interrelated parts and proper actuator, controller and power circuitry." The European Machinery Directive (Machinery Directive:2006/42/EC) is designed to ensure the health and safety of workers in the use of a wide range of machinery and other products, including accessories, chains, ropes and webbing, replacement equipment, mobile mechanical transmitters and safety components.<br><br>
                                    The following products can be attach CE marks :
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>General industrial machinery : semiconductor equipment, excavator accessories and partial machinery, press, CNC lathe, machine tool, industrial compressor, industrial hoist, industrial printer, packaging equipment, etc.</li>
                                    <li><span class="number">2. </span>Hazardous machinery : similar machinery, such as circular saws, products for underground work, such as presses, plastics, rubber ejectors, mines, car lifts for work, lifts for passenger transport, safety relays, etc.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 6-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">CE Machinery Directive(2006/42/EC)</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_cemachinery_02.jpg" alt="CE Machinery Directive(2006/42/EC)">
                                    </div>
                                </div>

                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; Composition of CE Machinery Directive(2006/42/EC)
                                    </span>
                                    <p class="con_txt">
                                        Introduction : Guidelines and general explanations and cautions for preparation<br>
                                        Main subject : A provision for the application of guidelines, legal obligations or authority to the member countries
                                    </p>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li><span class="bullet"></span>Annex I : Essential requirements for health and safety regarding design and manufacturing</li>
                                            <li><span class="bullet"></span>Annex II : Matters concerning the Declaration of Conformity</li>
                                            <li><span class="bullet"></span>Annex III : CE – Marking</li>
                                            <li><span class="bullet"></span>Annex IV : List of machinery that must be tested in the EU format by the Notified Body</li>
                                            <li><span class="bullet"></span>Annex V : Declaration of Conformity and Technical Files</li>
                                            <li><span class="bullet"></span>Annex VI : EU Type Test</li>
                                            <li><span class="bullet"></span>Annex VII : Notified Body Criteria</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; Standard classification
                                    </span>
                                    <p class="con_txt">
                                        European Standard for machine safety can be divided into A, B, and C standard. The product must meet all 3 applicable standards.
                                    </p>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li>
                                                <span class="bullet"></span>Standard A (EN 414, EN 12100)
                                                <p>Standard that define basic concepts, design principles, and general aspects as basic safety standard</p>
                                            </li>
                                            <li>
                                                <span class="bullet"></span>Standard B (EN 13850, EN 13849-1, EN 60204-1 and etc.)
                                                <p>Safety-related standard applicable to machines that are widely classified according to their basic use and purpose.</p>
                                                <ul class="list_st">
                                                    <li><span class="number">1) </span>Standard B1 for specific safety aspects (Electricity, Safety Distance, Surface Temperature, Noise and etc.)</li>
                                                    <li><span class="number">2) </span>Standard B2 for safety-related devices and mechanical components (emergency switches, pressure sensing devices and etc.)</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="bullet"></span>Standard C
                                                <p>Standard that specify detailed safety requirements for a particular machine or group of machines.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; Applied Devices
                                    </span>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li><span class="number">1. </span>Products with at least one operating part, with electricity, air pressure, hydraulic pressure, weight and etc. as the source of energy</li>
                                            <li><span class="number">2. </span>Parts of machinery that are involved in health or safety; equipment that is shipped on separateness</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; CE Machinery Directive(2006/42/EC) core requirement
                                    </span>
                                    <p class="con_txt">
                                        The documentation requirements that the manufacturer must comply with are in the essential health and safety requirements of Annex I of the MD, documenting whether the machine is being used safely and properly alerting the user if any remaining risks are present<br><br>
                                        Required requirements as below :
                                    </p>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li><span class="number">1. </span>the principle of safety, design that facilitates handling, Ergonomics, Control system, Protects against mechanical hazards, electrical and other energy temperatures, other hazards, such as fire and explosion, common to all types of machinery, such as noise emission, Vibration, Radiation and hazardous materials, maintenance and maintenance, Cleaning, Display and Warning of Information</li>
                                            <li><span class="number">2. </span>Requirements applicable to certain classes of machinery, such as food, cosmetics, and medicines</li>
                                            <li><span class="number">3. </span>Requirements for offsetting the risk of machine mobility</li>
                                            <li><span class="number">4. </span>Requirements to offset the risk of lift operations</li>
                                            <li><span class="number">5. </span>Requirements for underground work machines</li>
                                            <li><span class="number">6. </span>Requirements for mechanical lift personnel</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; The certification procedure
                                    </span>
                                    <p class="con_txt">
                                        There are four methods as follows :
                                    </p>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li>
                                                <span class="number">A) </span>High-risk machinery described in Annex 4
                                                <p>Accreditation through the notified Body (NB)</p>
                                            </li>
                                            <li>
                                                <span class="number">B) </span>General machinery other than Annex 4 (Anex II A)
                                                <p>Acquired by Declaration of self-conformity (with a CE mark as proof of conformity with the finished product)</p>
                                            </li>
                                            <li>
                                                <span class="number">C) </span>Declaration of self-conformity with respect to Machine Parts (Annes II B)
                                                <p>Acquired by self-compliance declaration (with a CE mark as proof of conformity with the finished product)</p>
                                            </li>
                                            <li>
                                                <span class="number">D) </span>Declaration of self-conformity with safety components (Annes II C)
                                                <p>Acquired by self-compliance declaration (with a CE mark as proof of conformity with the finished product)</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Note: In the case of B) and C), a Declaration of self-conformity can be made and the relevant technical documents stored to declare compliance with the specification, but CE marks cannot be affixed to the product or packaging.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 6-3 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">Related document</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_cemachinery_03.jpg" alt="Related document">
                                    </div>
                                </div>

                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; TCF: Technical Construction Files
                                    </span>
                                    <p class="con_txt">
                                        Technical Construction Files requirements contained in 2006/42/EC Annex VII. The TCF should verify that the machine is suitable for the requirements of the Machinery Directive. The language used must be written as the official community language.<br><br>
                                        TCF should include the following documents :
                                    </p>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li><span class="bullet"></span>General description of the machine</li>
                                            <li><span class="bullet"></span>Technical drawings necessary to check the overall drawings of the machine and the suitability of the machinery</li>
                                            <li><span class="bullet"></span>List of essential health and safety requirements applicable to machinery</li>
                                            <li><span class="bullet"></span>Explanation of protective measures taken to reduce identified risks, instructions on residual risks associated with machinery</li>
                                            <li><span class="bullet"></span>Standards that present the essential health and safety requirements contained in this standard</li>
                                            <li><span class="bullet"></span>A report showing the results of a test performed by a manufacturer or by an agency recognized by the manufacturer</li>
                                            <li><span class="bullet"></span>Copy of EC Declaration of Conformity for Machinery and Other Products</li>
                                        </ul>
                                    </div>
                                    <p class="con_txt">
                                        Technical documents shall be available for at least 10 years from the date of manufacture of the machine.
                                    </p>
                                </div>
                                
                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; EC -Declarative of Conformity
                                    </span>
                                    <p class="con_txt">
                                        To attach a CE mark, the manufacturer must issue a declaration of conformity indicating that the product conforms to the applicable guidelines and standard regulations. Most machine manufacturers can declare their own suitability. Several product categories, including high-risk machines such as electrical saws, require third-party certification.<br><br>
                                        Forced safety certification is carried out to ensure the safety of workers by using the machine properly and safely designing and properly installing products and maintaining the machine, due to numerous accidents caused by the use of the machine.<br><br>
                                        The manufacturer shall prepare and sign the EU Declaration of Conformity, and the DOC shall include the applied Harmonized Organization and the information of the manufacturer, European representative and certification authority, and, if necessary, additional information such as harmonized specifications, products and technical specifications.<br><br>
                                        Like the technical documentation, DOC should be stored for 10 years from the time the product is released. DOC's storage obligations are to the manufacturer or to the European representative, and in the case of imported products, the importer is responsible.<br><br>
                                        DOC should include the following :
                                    </p>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li><span class="bullet"></span>The name and full address of the manufacturer and, if applicable, the representative's information which recognized by the manufacture</li>
                                            <li><span class="bullet"></span>Names and addresses of persons authorized to edit technical documents</li>
                                            <li><span class="bullet"></span>Description of machinery including general information including functions, models, serial numbers, and trade name</li>
                                            <li><span class="bullet"></span>Statement by which the machinery clearly declares that these guidelines have carried out all relevant regulations</li>
                                            <li><span class="bullet"></span>Similar statements declaring other guidelines and/or related regulations appropriate for machinery, if applicable</li>
                                            <li><span class="bullet"></span>Name, address and identification number of Notified body and number of certificates</li>
                                            <li><span class="bullet"></span>Criteria for harmonized standard</li>
                                            <li><span class="bullet"></span>Criteria for other technical standards and specification</li>
                                            <li><span class="bullet"></span>Site and date of certification</li>
                                            <li><span class="bullet"></span>The status and signature of a manufacturer or a person entrusted to prepare a declaration on behalf of a manufacturer's recognized representative</li>
                                        </ul>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 6-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cemachinery_05.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p style="text-align: justify">
                                    IGC works with European Notified Body (NB) to provide product certification services such as CE Machinery, CE MDD, CE IVD and CE LVD.<br><br>
                                    IGC have years of technical skills and expertise, as well as up-to-date knowledge of a range of specific legal requirements in major markets around the world.<br><br>
                                    Provide knowledge and services to support your overall global operations.
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
                        <li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 06 CE Machinery 탭메뉴 컨텐츠 영역 종료 //------->
        
        
        <!----// 컨텐츠 07 PED 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">Introduction to European Product Certification</h1>
		        <h2 class="tit_cer fc_pointer">CE PED | Pressure equipment</h2>
		        <p class="outline">
		            PED is abbreviation of Pressure Equipment Directive (2014/68/EU), which is a pressure equipment instruction that applies to design, manufacture and conformity assessment of pressure equipment and components with a maximum permissible pressure of 0.5 bar or more. Manufacturers wishing to export their products to EU countries must be certified in accordance with the Pressure Equipment Directive, which was amended from 97/23/EC to 2014/68/EU as of July 19, 2016.
		        </p>
		        
		        <ul class="content">
		            <li><!-- content 7-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_ceivdivdr_01.jpg" alt="Scope">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Scope</h3>
                                <p class="con_txt">
                                    This guidance applies to the design, manufacture and conformity assessment of pressure equipment and assemblies with a maximum permissible pressure of 0.5 bar or more. Includes all vessels, piping, safety accessories and pressure accessories.
                                </p>
                                <div class="con_txt_2">
                                    <ul class="list_st">
                                        <span class="point_blk">
                                            <span class="bullet"></span>&#10020; Applied pressure equipment
                                        </span>
                                        <li><span class="number">&#9745; </span>Water pipe boiler</li>
                                        <li><span class="number">&#9745; </span>Heat Exchanger</li>
                                        <li><span class="number">&#9745; </span>Pressure vessel</li>
                                        <li><span class="number">&#9745; </span>Pipe</li>
                                        <li><span class="number">&#9745; </span>Electric heater</li>
                                        <li><span class="number">&#9745; </span>Valve (Isolated, Controlled)</li>
                                        <li><span class="number">&#9745; </span>Meter</li>
                                        <li><span class="number">&#9745; </span>Release valve</li>
                                        <li><span class="number">&#9745; </span>Safety valve</li>
                                        <li><span class="number">&#9745; </span>Controlled safety pressure release system</li>
                                        <li><span class="number">&#9745; </span>Pressure switch</li>
                                        <li><span class="number">&#9745; </span>Temperature change</li>
                                        <li><span class="number">&#9745; </span>Fluid level switch</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <ul class="list_st">
                                        <span class="point_blk">
                                            <span class="bullet"></span>&#10020; Excluded scope
                                        </span>
                                        <li><span class="number">&#9745; </span>Items applicable to SPVD(Simple Pressure Vessels Directive) and TPED(Transportable Pressure Equipment Directive)</li>
                                        <li><span class="number">&#9745; </span>Products with relatively low pressurization : Mechanical Directive</li>
                                        <li><span class="number">&#9745; </span>Pressure vessel</li>
                                        <li><span class="number">&#9745; </span>Equipment for vehicles, etc.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 7-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">Proof of pressure equipment (CE marking)</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_PressureEquipmentDirective_02.jpg" alt="Proof of pressure equipment (CE marking)">
                                    </div>
                                </div>
                                <p class="con_txt">
                                    Pressure instruments are classified into four stages of Category I, II, III, and IV according to the maximum allowable pressure (PS), fluid use, volume, and external diameter (DN), and are subject to the module requirements applicable to that category as shown in the table below. For detailed technical requirements for conformity assessment, European technical specifications such as EN 1345, AD2000, and ASME codes are applied.
                                </p>
                                <div class="con_txt_2">
                                    <p class="point_blk"><span class="bullet"></span>&#10020; Annex II, Conformity assessment table</p>
                                    <table class="type02">
                                        <thead>
                                            <tr>
                                                <th scope="cols" width="30%">
                                                    <p>Category</p>
                                                </th>
                                                <th scope="cols" width="70%">
                                                    <p>Modules</p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <p>I</p>
                                                </th>
                                                <td class="none">
                                                    <p>Module A</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p>II</p>
                                                </th>
                                                <td class="none">
                                                    <p>Modules A2, D1, E1</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p>III</p>
                                                </th>
                                                <td class="none">
                                                    <p>Modules B(Design type)+D, B(Design type)+F, B(Production type)+E, B(Production type)+C2, H</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p>IV</p>
                                                </th>
                                                <td class="none">
                                                    <p>Modules B(Production type)+D, B(Production type)+F, G, H1</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="con_txt_2">
                                    <p class="point_blk"><span class="bullet"></span>&#10020; Annex III, Conformity assessment table</p>
                                    <table class="type01">
                                        <tbody>
                                            <tr>
                                                <th width="30%" scope="row">
                                                    <p>Module A</p>
                                                </th>
                                                <td width="70%" class="none">
                                                    <p>Internal production management</p>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <th width="30%" scope="row">
                                                    <p>Module A2</p>
                                                </th>
                                                <td width="70%" class="none">
                                                    <p>Internal production management + Product inspection under supervision at random cycles</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="30%" scope="row">
                                                    <p>Module B</p>
                                                </th>
                                                <td width="70%" class="none">
                                                    <p>
                                                        EU-Type inspection (Production type)<br>
                                                        EU-Type inspection (Design type)
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <th width="30%" scope="row">
                                                    <p>Module C2</p>
                                                </th>
                                                <td width="70%" class="none">
                                                    <p>Formal conformity based on internal production management + Product inspection under supervision at random cycles</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="30%" scope="row">
                                                    <p>Module D/D1</p>
                                                </th>
                                                <td width="70%" class="none">
                                                    <p>
                                                        D: Formal suitability based on quality assurance of production process<br>
                                                        D1: Quality Assurance of Production Process
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <th width="30%" scope="row">
                                                    <p>Module E/E1</p>
                                                </th>
                                                <td width="70%" class="none">
                                                    <p>
                                                        E: Formal suitability based on product quality assurance<br>
                                                        E1: Quality Assurance of Inspection and Testing of Final Products
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="30%" scope="row">
                                                    <p>Module F</p>
                                                </th>
                                                <td width="70%" class="none">
                                                    <p>
                                                        Formal suitability based on product verification
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <th width="30%" scope="row">
                                                    <p>Module G</p>
                                                </th>
                                                <td width="70%" class="none">
                                                    <p>
                                                        Conformity based on unit verification
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="30%" scope="row">
                                                    <p>Module H/H1</p>
                                                </th>
                                                <td width="70%" class="none">
                                                    <p>
                                                        H: Conformity based on full quality assurance<br>
                                                        H1: Conformity based on complete quality assurance + Design inspection
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 7-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_PressureEquipmentDirective_03.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC provides product certification services to companies that want to export their products to Europe based on years of experience.</li>
                                    <li><span class="bullet"></span>We provide the most competitive product certification service through cooperation with leading overseas product certification institutions.</li>
                                    <li><span class="bullet"></span>ISO 9000, Companies that already comply quality management systems can make the most of their current quality systems and meet the essential safety requirements of PEDs.</li>
                                    <li><span class="bullet"></span>If the manufacturer has not been formally certified as a Quality Management System, IGC will provide certification authority services in accordance with the PED QA approach.</li>
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
                        <li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 07 PED 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 08 SPVD 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">Introduction to European Product Certification</h1>
		        <h2 class="tit_cer fc_pointer">CE SPVD | Simple pressure container</h2>
		        <p class="outline">
		            SPVD is a Simple Pressure Vessel Directive that is a weld container with an internal pressure of 0.5 or higher, applies to pressure vessels that contain air or nitrogen and target all non-flammable fluids, and is manufactured continuously.<br><br>
		            Manufacturers who wish to export their products to EU countries shall be certified according to the simple pressure container guidelines, and the simple pressure container guidelines have been revised to 2014/29/EU as of April 20, 2016
		        </p>
		        
		        <ul class="content">
		            <li><!-- content 8-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_spvd_01.jpg" alt="Applied scope/ Excluded scope">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Applied scope/ Excluded scope</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>Applied scope
                                    </span>
                                    <p class="con_txt">
                                        All pressure vessels containing air or nitrogen and non-flammable as a welding vessel with an internal pressure of 0.5 bar or higher.
                                    </p>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li><span class="bullet"></span>Areas and assemblies that affect the strength of the vessel under pressure must be made of non-alloyed steel, non-alloyed aluminum, or sturdy aluminum alloy that does not undergo aging.</li>
                                            <li><span class="bullet"></span>The container consists of a cylindrical part or cylindrical part of a circular cross-sectional area closed by a stool on the outside, and a plate rotating coaxially or a stool rotating coaxially.</li>
                                            <li><span class="bullet"></span>The maximum operating pressure of the container must not exceed 30 bar, and the product of the inner volume and pressure of the container must not exceed 10,000 bar/liter.</li>
                                            <li><span class="bullet"></span>The minimum operating temperature of the container should not be lower than -50℃ and the maximum operating temperature should not be higher than 300℃ for steel and 100℃ for aluminum and aluminum alloy containers.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>Excluded scope
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Container designed to prevent radioactive leakage for use in nuclear power</li>
                                        <li><span class="bullet"></span>Container used for propulsion devices or equipment of ships or aircraft</li>
                                        <li><span class="bullet"></span>Fire extinguisher</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 8-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_spvd_02.jpg" alt="Essential requirements">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Essential requirements</h3>
                                <p class="con_txt">
                                    The prerequisites for SPVD are below :
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Vessels with a maximum permissible pressure (PS) x capacity (V) exceeding 50 bar.L must meet the essential safety requirements of Annex I</li>
                                    <li><span class="number">2. </span>Vessels with a maximum permissible pressure (PS) x capacity (V) of 50 bar.L or less must be designed and manufactured according to the engineering practice of one of the member states.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 8-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_spvd_03.jpg" alt="The importance of SPVD">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of SPVD</h3>
                                <p class="con_txt">
                                    Dangers are created if pressure vessels are handled and evaluated incorrectly. Therefore, European Directive 2014/29/EU (SPVD) stipulates that all pressure vessels must be certified by notified body.<br><br>
                                    This standard helps below :
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Meets conformity assessment procedures including safety</li>
                                    <li><span class="bullet"></span>Satisfying prerequisites for product export</li>
                                    <li><span class="bullet"></span>Compliance with European usage standards and directive requirements</li>
                                    <li><span class="bullet"></span>Enhance product competitiveness</li>
                                    <li><span class="bullet"></span>Strengthen internal production management</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 8-4 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">Conformity assessment procedure</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_spvd_04.jpg" alt="Conformity assessment procedure">
                                    </div>
                                </div>
                                <p class="con_txt">
                                    For simple pressure vessels, the module is determined according to the maximum allowable pressure (PS) x capacity (V).
                                </p>
                                <table class="type03">
                                    <tbody>
                                        <tr>
                                            <td width="20%" rowspan="3" class="headerT">
                                                <p>Module B +</p>
                                            </td>
                                            <td width="20%">
                                                <p>Module C1</p>
                                            </td>
                                            <td width="60%">
                                                <p>EU- Type inspection + Product testing under formal conformity and supervision based on internal production management</p>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td width="20%">
                                                <p>Module C2</p>
                                            </td>
                                            <td width="60%">
                                                <p>EU- Type inspection + Product testing under formal conformity and supervision based on internal production management at random cycles</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="20%">
                                                <p>Module C3</p>
                                            </td>
                                            <td width="60%">
                                                <p>EU- Type inspection + Formal compatibility based on internal production management</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 8-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_spvd_05.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC provides certification services for simple pressure vessels in agreement with FQC (First Quality Certification, NB2674), a European accreditation body.</li>
                                    <li><span class="bullet"></span>The auditors of IGC contribute to the continuous development of customers by accurately evaluating the suitability of the management system through the technology and expertise accumulated over the years.</li>
                                    <li><span class="bullet"></span>As a reliable global leader in product certification, IGC provides certifications for ISO SPVD as well as PED and hot-water boilers.</li>
                                    <li><span class="bullet"></span>IGC has up-to-date knowledge of a wide range of specific scopes and legal requirements in major markets around the world.</li>
                                    <li><span class="bullet"></span>IGC provides knowledge and services to support your entire global operations.</li>
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
                        <li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 08 SPVD 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 09 Hot-water boiler 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">Introduction to European Product Certification</h1>
		        <h2 class="tit_cer fc_pointer">Hot-water boiler</h2>
		        <p class="outline">
		            92/42/EEC is a directive on the efficiency requirements for new hot water boilers burning on liquid or gaseous fuels rated at 4 kW ~ 400 kW and is part of the European Union's SAVE program on promoting energy efficiency.<br><br>
		            The purpose of this directive is to improve energy efficiency by setting efficiency requirements for hot water boilers that burn as liquid or gas.
		        </p>
		        
		        <ul class="content">
		            <li><!-- content 9-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_hotwaterBoiler_01.jpg" alt="Scope">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Scope</h3>
                                <p style="text-align:justify">
                                    Hot water boilers that use liquid or gaseous fuel with a rated output of 4 Kw ~ 400 Kw (standard boiler, low temperature boiler, gas condensing boiler)
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 9-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_hotwaterBoiler_02.jpg" alt="Excluded Scope">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Excluded Scope</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Hot water boiler that can be burned by various fuels including solid fuel</li>
                                    <li><span class="bullet"></span>Hot water preparation equipment</li>
                                    <li><span class="bullet"></span>Boiler designed to be burned by fuels(Industrial waste gas, biogas, etc.) with properties different from those of liquid and gaseous fuels on the market.</li>
                                    <li><span class="bullet"></span>Cooking utensils and appliances installed in the building to provide central heating and sanitary hot water with the main purpose of heating</li>
                                    <li><span class="bullet"></span>Equipment designed for the production of stored sanitary hot water with a rated output of less than 6kW using gravity circulation</li>
                                    <li><span class="bullet"></span>Single use Boiler</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 9-4 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">Efficiency requirements</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_hotwaterBoiler_03.jpg" alt="Efficiency requirements">
                                    </div>
                                </div>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Rated power : Operates at an average boiler water temperature of 70 °C at rated power (Pn) expressed in kW</li>
                                        <li><span class="bullet"></span>Partial load : Operates with a load of 30% at the average water temperature of the boiler depending on the type of boiler</li>
                                    </ul>
                                </div>
                                <table class="type02" style="text-align:center">
                                    <thead>
                                        <tr style="border-bottom:1px solid #fff">
                                            <th scope="cols" style="border-right:1px solid #fff">
                                                <p>Type of boiler</p>
                                            </th>
                                            <th scope="cols" style="border-right:1px solid #fff">
                                                <p>Output range</p>
                                            </th>
                                            <th scope="cols" colspan="2" style="border-right:1px solid #fff">
                                                <p>Efficiency at rated power</p>
                                            </th>
                                            <th scope="cols" colspan="2">
                                                <p>Efficiency at partial load</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="cols" style="border-right:1px solid #fff">
                                                <p>&nbsp;</p>
                                            </th>
                                            <th scope="cols" style="border-right:1px solid #fff">
                                                <p>Kw</p>
                                            </th>
                                            <th scope="cols" style="border-right:1px solid #fff">
                                                <p>Average boiler water temperature (in  ℃)</p>
                                            </th>
                                            <th scope="cols" style="border-right:1px solid #fff">
                                                <p>Efficiency requirement (in %)</p>
                                            </th>
                                            <th scope="cols" style="border-right:1px solid #fff">
                                                <p>Average boiler water temperature (in  ℃)</p>
                                            </th>
                                            <th scope="cols">
                                                <p>Efficiency requirement (in %)</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <p>Standard boiler</p>
                                            </th>
                                            <td>
                                                <p>4 - 400</p>
                                            </td>
                                            <td>
                                                <p>70</p>
                                            </td>
                                            <td>
                                                <p>≥ 84 + 2 logPn</p>
                                            </td>
                                            <td>
                                                <p>≥ 50</p>
                                            </td>
                                            <td class="none">
                                                <p>≥ 80 + 3</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Low temperature boiler +</p>
                                            </th>
                                            <td>
                                                <p>4 - 400</p>
                                            </td>
                                            <td>
                                                <p>70</p>
                                            </td>
                                            <td>
                                                <p>≥ 87.5 + 1.5 logPn</p>
                                            </td>
                                            <td>
                                                <p>40</p>
                                            </td>
                                            <td class="none">
                                                <p>≥ 87.5 + 1.5</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Gas condensing boiler</p>
                                            </th>
                                            <td>
                                                <p>4 - 400</p>
                                            </td>
                                            <td>
                                                <p>70</p>
                                            </td>
                                            <td>
                                                <p>≥91 + 1 logPn</p>
                                            </td>
                                            <td>
                                                <p>30(**)</p>
                                            </td>
                                            <td class="none">
                                                <p>≥ 97 + 1 logPn</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="font-size:0.8rem">(*) Condensing boilers using liquid fuel included</p>
                                <p style="font-size:0.8rem">(**) Water temperature of Boiler</p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 9-5 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">Conformity assessment procedure</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_hotwaterBoiler_05.jpg" alt="Conformity assessment procedure">
                                    </div>
                                </div>
                                <table class="type03">
                                    <tbody>
                                        <tr>
                                            <td width="20%" rowspan="3" class="headerT">
                                                <p>Module B +</p>
                                            </td>
                                            <td width="20%">
                                                <p>Module C</p>
                                            </td>
                                            <td width="60%">
                                                <p>EU- Type Inspection + Type suitability</p>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td width="20%">
                                                <p>Module D</p>
                                            </td>
                                            <td width="60%">
                                                <p>EU- Type Inspection + Production quality assurance</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="20%">
                                                <p>Module E</p>
                                            </td>
                                            <td width="60%">
                                                <p>EU- Type Inspection + Production quality assurance</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 9-6 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_hotwaterBoiler_04.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC has been accredited by IAS, an accreditation body in the United States, and provides certification services for management systems.</li>
                                    <li><span class="bullet"></span>The auditors of IGC contribute to the continuous development of client by accurately evaluating the suitability of the management system through the technology and expertise accumulated over the years.</li>
                                    <li><span class="bullet"></span>IGC is a trusted global leader in management system certification, providing certification for quality, environment and other management systems.</li>
                                    <li><span class="bullet"></span>IGC has up-to-date knowledge of a wide range of specific scope and legal requirements in major markets around the world.</li>
                                    <li><span class="bullet"></span>IGC provides knowledge and services to support your entire global operation.</li>
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
                        <li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 09 Hot-water boiler 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 10 Gas Applicance 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">Introduction to European Product Certification</h1>
		        <h2 class="tit_cer fc_pointer">Gas Appliance | Gas fuel combustion equipment</h2>
		        <p class="outline">
		            EU 2016/426 is a European gas appliance regulation that applies to gas appliances and accessories designed for hot water production, refrigeration, lighting, heating, washing and cooking purposes.<br><br>
		            The European Gas Appliances Directive (GAD 2009/142/EC) issued in March 2017 was replaced by the Gas Appliances Regulation (GAR 2016/426) has been updated and applied from April 2018.
		        </p>
		        
		        <ul class="content">
		            <li><!-- content 10-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_gasAppliance_01.jpg" alt="Scope">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Scope</h3>
                                <p style="text-align:justify">
                                    Gas-fired cooking, heating, hot water, refrigeration, and laundry equipment are included, and generally used household and commercial products excluding industrial products.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 10-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_gasAppliance_02.jpg" alt="Excluded scope">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Excluded scope</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Products used in industrial processes carried out in industrial sites</li>
                                    <li><span class="bullet"></span>Products used in aircraft and railroads</li>
                                    <li><span class="bullet"></span>Research purpose products for temporary use in the laboratory</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 10-3 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">Conformity assessment procedure</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_gasAppliance_03.jpg" alt="Conformity assessment procedure">
                                    </div>
                                </div>
                                <div class="con_txt">
                                    In the case of products that are continuously produced, the manufacturer must evaluate the suitability by combining one of Modules C2, D, E, and F according to Module B-Production Type.
                                </div>
                                <div class="con_txt">
                                    <table class="type03">
                                        <tbody>
                                            <tr>
                                                <td width="20%" rowspan="4" class="headerT">
                                                    <p>Module B (Production Type) +</p>
                                                </td>
                                                <td width="20%">
                                                    <p>Module C2</p>
                                                </td>
                                                <td width="60%">
                                                    <p>EU-Type Inspection + Formal conformity based on internal production management and product inspection under supervision at random cycles</p>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td width="20%">
                                                    <p>Module D</p>
                                                </td>
                                                <td width="60%">
                                                    <p>EU-Type Inspection + Form conformity based on quality assurance of the production process</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="20%">
                                                    <p>Module E</p>
                                                </td>
                                                <td width="60%">
                                                    <p>EU-Type Inspection + Form conformity based on product quality assurance</p>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td width="20%">
                                                    <p>Module F</p>
                                                </td>
                                                <td width="60%">
                                                    <p>EU-Type Inspection + Form conformity based on product verification</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p style="text-align:justify">
                                    In the case of products produced in single units or in small quantities, the manufacturer can also be evaluated for conformity with Module G (Unit Verification).
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
                        <li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 10 Gas Applicance 컨텐츠 종료 //------->
        
    </div><!--+++ / 20.05.07 탭컨텐츠 영역 / +++-->
</div> <!--------// div class="content_wrap"  종료 //------------------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>