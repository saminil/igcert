<?php
	include_once('./_common.php');
$g5['title'] = 'Cosmetic Certification';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
			<li><a href="javascript:;">EWG</a></li>
			<li class="on"><a href="javascript:;">CPNP</a></li>
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
	            <h1 class="tit_num">Introduction of cosmetic product certification</h1>
	            <h2 class="tit_cer fc_pointer">EWG</h2>
	            <div class="tit_img">
                    <img src="./images/product_cosmetics_ewg_01.png" alt="EWG cosmetics verification" style="width: 100%">
                </div>
	            <p class="outline">
                    EWG stands for Environmental Working Group and is one of the most influential nonprofit environmental movement groups in the United States. EWG is an organization that mainly conducts education and enlightenment activities to avoid harmful ingredients and toxic substances and to select the right and safe products. Since EWG does not receive any external pressure or sponsorship from companies or governments, it provides fair and objective information more than any other organization.<br><br>
                    EWG conducts research on human health and environment in the fields of food, energy, and agriculture, and provides a database on its ingredients and safety, especially in relation to cosmetics. Product safety ratings are given based on the scores given by EWG's evaluation and verification, and can be used in personal hygiene products and cosmetics.
                </p>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_ewg_03.jpg" alt="Features of EWG">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Features of EWG</h3>
                                <p class="con_txt">
                                    EWG aims to enable people to live healthier lives in healthier environments. EWG tracks the safety of chemicals, enabling producers to promote the safety of ingredients, promote transparency and promote sales, and enable consumers to recognize risks and pursue safety.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>EWG Grade
                                    </span>
                                    <p class="con_txt">
                                        The rating is based on the Skin Deep database operated by EWG, and this data is based on safety research data published by research groups around the world.<br><br>
                                        Available in red, yellow or green grades depending on the ingredient safety score, of which green is the product that meets the most stringent criteria.
                                    </p>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Grade 1~2: Green</li>
                                        <li><span class="bullet"></span>Grade 3~6: Yellow</li>
                                        <li><span class="bullet"></span>Grade 7~10: Red</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_ewg_05.jpg" alt="Necessity of EWG verification">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Necessity of EWG verification</h3>
                                <p style="text-align: justify">
                                    Since the EWG verification began, manufacturers have been making healthier and safer products. Manufacturers have been considering increasing cancer rates and allergies. EWG recognizes products that meet EWG's most stringent standards for health. This means there are no chemicals of concern to EWG, which means complete transparency. The EWG Approval Mark means a sign of trust.<br><br>
                                    With thousands of consumer products on the market, it is difficult to know which products are safer and healthier. When a product is marked with the EWG mark, you can ensure that it is free of EWG's chemicals and meets the most stringent standards for health.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_ewg_04.jpg" alt="EWG certification process">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">EWG certification process</h3>
                                <p class="con_txt">
                                    When applying for the first time, follow the procedure below.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>Application and permission: EWG verification by partner HLB (Healthy Lifestyle Brands)
                                    </span>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li><span class="bullet"></span>Submission of application form and other documents (statement, disclosure contract, product ingredient spreadsheet, safety enhancement notice, etc.)</li>
                                            <li><span class="bullet"></span>4~6 weeks</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>Certification progress: Certification proceeds when HBL's EWG verification criteria are met
                                    </span>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li><span class="bullet"></span>Additional certification processing fee: Product sales and differences by company</li>
                                            <li><span class="bullet"></span>6~8 weeks</li>
                                            <li><span class="bullet"></span>Additional documents may be requested as needed</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>Approval and writing of license agreement
                                    </span>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">4. </span>Completion of mark usage and access training
                                    </span>
                                </div>
                                <p style="text-align: justify">
                                    ※ The new certification is valid for 3 years, and if the ingredient is changed, it must undergo a retest.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_ewg_02.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC is contributing to the continuous development of customers by accurately evaluating the suitability of product certification through the technology and expertise accumulated over the years.</li>
                                    <li><span class="bullet"></span>IGC has up-to-date knowledge of a wide range of specific scopes and legal requirements in major markets around the world.</li>
                                    <li><span class="bullet"></span>IGC provides knowledge and services to support your entire global operations.</li>
                                    <li><span class="bullet"></span>IGC provides various certification related services in the cosmetic field.</li>
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
                        <li><p><em><strong>01</strong></em><span>System certification (ISO 22716)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (Vegan certification, Eurasia certification, VCRP, EWG, CPNP)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Certification of screening qualifications</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Professional manpower training education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 01 EWG(미국비영리환경단체) 컨텐츠 종료 //------->
            
        
        <!----// 컨텐츠 02 CPNP 컨텐츠 시작 //------->
        <article style="display:block">
	        <section class="business_type5" class="area">
	            <h1 class="tit_num">Introduction of cosmetic product certification</h1>
	            <h2 class="tit_cer fc_pointer">CPNP</h2>
	            <p class="outline">
                    <span class="point_blk">CPNP(Cosmetic Product Notification Portal)</span>
                    All cosmetic products to be distributed in the European market must meet the requirements of Cosmetic Regulation 1223/2009, the European Union (EU) cosmetic regulation, and be registered with the CPNP. CPNP is a Cosmetic Product Notification Portal, EC No. Online cosmetic registration portal created according to 1223/2009. Through one registration with CPNP, the ingredients and raw materials of cosmetic products are managed and controlled, and it is possible to enter the entire EU market.<br><br>
                    CPNP registration of cosmetic products is done by the responsible person in Europe, the Responsible Person (RP). The RP is the legal officer for cosmetic products distributed in the EU, helping to ensure that the product is well distributed in the European market, and in the event of a problem with the product, the competent authority orders the RP to take action.
                </p>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_cpnp_01.jpg" alt="Registration process">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Registration process</h3>
                                <p class="con_txt">
                                    The CPNP registration process is as follows.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>RP designation
                                    </span>
                                    <p>
                                        Cosmetics manufacturers who want to export cosmetics to the European market designate RP, and RP prepares a procedure for registering cosmetic products with CPNP. RP also stores and manages product information files (PIF), and is responsible for post management of cosmetic products in Europe in the future.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>Fill out required documents and labeling
                                    </span>
                                    <p>
                                        Cosmetics manufacturers submit information and documents necessary for CPNP registration to RP.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>Product ingredients and label review
                                    </span>
                                    <p>
                                        RP reviews product ingredients and labels based on documents submitted by cosmetic manufacturers.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>Product information file (PIF) preparation
                                    </span>
                                    <p>
                                        Product information file is a single file that combines all the data necessary to enter the European market. RP creates a product information file based on the reviewed documents.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>CPNP registration
                                    </span>
                                    <p>
                                        When all requirements are met, RP registers the cosmetic product with CPNP.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>Product market launch
                                    </span>
                                    <p>
                                        Once a registration number is assigned to a cosmetic product from CPNP, the cosmetic product can be distributed in the European market.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_cpnp_02.jpg" alt="Required information and documents">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Required information and documents</h3>
                                <p class="con_txt">
                                    Cosmetics manufacturers must prepare basic and detailed information and labels for cosmetics products to be registered with CPNP.<br><br>
                                    The information and documents that cosmetic manufacturers must submit to RP are as follows.
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="number">&#10020; </span>Manufacturer information</li>
                                        <li><span class="number">&#10020; </span>ISO 22716, GMP certificate</li>
                                        <li><span class="number">&#10020; </span>product information</li>
                                        <li><span class="number">&#10020; </span>Ingredient mixing ratio</li>
                                        <li><span class="number">&#10020; </span>Name of EU member country in which the product will be released</li>
                                        <li><span class="number">&#10020; </span>CoA</li>
                                        <li><span class="number">&#10020; </span>MSDS (Material Safety Data Sheet)</li>
                                        <li><span class="number">&#10020; </span>Product safety, suitability, antiseptic, animal testing, etc.</li>
                                    </ul>
                                </div>
                                <p class="con_txt">
                                    Additionally, the cosmetic label must contain the following information :
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">&#10020; </span>Basic information of the product</li>
                                    <li><span class="number">&#10020; </span>Serial number</li>
                                    <li><span class="number">&#10020; </span>Ingredients Table</li>
                                    <li><span class="number">&#10020; </span>Weight or volume of the product</li>
                                    <li><span class="number">&#10020; </span>Raw material information</li>
                                    <li><span class="number">&#10020; </span>Expiration date</li>
                                    <li><span class="number">&#10020; </span>Allergy-causing ingredients</li>
                                    <li><span class="number">&#10020; </span>How to use and precautions</li>
                                    <li><span class="number">&#10020; </span>Origin</li>
                                    <li><span class="number">&#10020; </span>RP information</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_cpnp_03.jpg" alt="CPSR includes">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">CPSR includes</h3>
                                <p class="con_txt">
                                    The Cosmetic Product Safety Report is a document to prove that cosmetics to be registered in CPNP are safe products. The Product Safety Report (CPSR) is prepared by the safety evaluator, and the safety evaluator must have a degree in a related field and have at least 3 years of experience.<br><br>
                                    The CPSR includes the following information :
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">&#10020; </span>Ingredient table</li>
                                    <li><span class="number">&#10020; </span>MSDS</li>
                                    <li><span class="number">&#10020; </span>CoA</li>
                                    <li><span class="number">&#10020; </span>Ingredient mixing ratio</li>
                                    <li><span class="number">&#10020; </span>Cosmetic manufacturer and container manufacturer declaration</li>
                                    <li><span class="number">&#10020; </span>Draft label</li>
                                    <li><span class="number">&#10020; </span>Package image</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_cpnp_04.jpg" alt="PIF includes">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">PIF includes</h3>
                                <p class="con_txt">
                                    The Product Information File is a file that combines all the information necessary for the distribution of cosmetic products in the European market and includes the Cosmetic Product Safety Report.<br><br>
                                    The Product Information File (PIF) contains the following information :
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">&#10020; </span>Product description</li>
                                    <li><span class="number">&#10020; </span>Product safety report</li>
                                    <li><span class="number">&#10020; </span>Manufacturing method GMP conformity (ISO 22716 certificate or GMP)</li>
                                    <li><span class="number">&#10020; </span>Product efficacy and evidence (clinical test, etc.)</li>
                                    <li><span class="number">&#10020; </span>Animal test data</li>
                                    <li><span class="number">&#10020; </span>label</li>
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
                        <li><p><em><strong>01</strong></em><span>System certification (ISO 22716)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (Vegan certification, Eurasia certification, VCRP, EWG, CPNP)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Certification of screening qualifications</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Professional manpower training education</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 02 CPNP 컨텐츠 종료 //------->

    </div><!------div class="tab_con" 종료 --------->
</div> <!--------// div class="content_wrap"  종료  ------------------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>