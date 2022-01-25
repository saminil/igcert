<?php
	include_once('./_common.php');
$g5['title'] = 'Vegan Certification';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
			<li><a href="javascript:;">Vegan Society Introduction</a></li>
			<li><a href="javascript:;">Food &amp; Restaurant</a></li>
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
                <h1 class="tit_num">Introduction to Vegan Product Certification</h1>
                <h2 class="tit_cer fc_pointer">Vegan Society(UK)</h2>
                <p class="outline">
                    The Vegan Society is a non-profit organization founded in November 1944 by its founder Donald Watson and 6 founding members. It is the organization that invented the new vegetarian concept and created the word ‘vegan’, and is the oldest vegan organization in the world.<br><br>
                    As the world’s oldest and most original vegan organization, the Vegan Society founded an international vegan trademark in 1990 to improve product labeling. They have been registering our products around the world for 29 years and the vegan trademark can be found on over 35,000 products worldwide.
                </p>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan1_01.jpg" alt="Vegan Trademark">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Vegan Trademark</h3>
                                <p style="text-align: justify">
                                    In 1990, the Vegan Society established International Vegan Trademark to improve the labeling of vegan products. It is known as the most trusted international vegan mark because it allows trademarks on products that have passed strict standards and meticulous auditing. For 29 years, the Vegan Society have registered products around the world and you can find the vegan trademark on over 35,000 products worldwide.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan1_02.jpg" alt="Product Registration Criteria">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Product Registration Criteria</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>Animal ingredients
                                    </span>
                                    <p>
                                        The manufacture and/or development of the product, and where applicable its ingredients, must not involve, or have involved, the use of any animal product, by-product or derivative.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>Animal testing
                                    </span>
                                    <p>
                                        The development and/or manufacture of the product, and where applicable its ingredients, must not involve, or have involved, testing of any sort on animals conducted at the initiative of the company or on its behalf, or by parties over whom the company has effective control.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>Cross-contamination
                                    </span>
                                    <p>
                                        Potential cross-contamination of animal-derived ingredients should be avoided as much as possible. Vegan production lines require thorough cleaning of minimal surfaces and equipment prior to use. Recognizing the risk of cross-contamination by non-vegan raw materials in the production space, and taking all reasonable and practical steps to eliminate it. If you are producing vegan and non-vegan in the same space, it is strongly recommended to start with the non-vegan line.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>Genetically Modified Organisms (GMO’s)
                                    </span>
                                    <p>
                                        The development and/or production of genetically modified organisms (GMO) must not have involved animal genes or animal-derived substances. Products put forward for registration which contain or may contain any GMOs must be labelled as such.
                                    </p>
                                </div>
                                <p>
                                    ※ Animal refers to the entire animal kingdom, that is all vertebrates and all multicellular invertebrates.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan1_011.jpg" alt="Benefits of choosing Vegan Trademark">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Benefits of choosing Vegan Trademark</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>The oldest and most trusted vegan organization.</li>
                                    <li><span class="number">2. </span>We have a professional team for evaluation of vegan product registration.</li>
                                    <li><span class="number">3. </span>Vegan Trademark is easier to identify internationally by consumers.</li>
                                    <li><span class="number">4. </span>Vegan Trademark logo assures consumers that a product meets their ethical standards.</li>
                                    <li><span class="number">5. </span>Upon registration, customers can receive benefits such as using logos on packaging, marketing materials, and online.</li>
                                    <li><span class="number">6. </span>Product updates and additions are included in the fee and there is no additional charge during the registration period.</li>
                                    <li><span class="number">7. </span>Customers can provide samples to exhibits attended by The Vegan Society.</li>
                                    <li><span class="number">8. </span>Currently more than 35,000 products are registered in the trademark.</li>
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
                        <li><p><em><strong>01</strong></em><span>Sysyem certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification-Foods (Vegan certification, HALAL certification, Eurasian certification, Hygiene registration, FDA registration/approval)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Product certification-Cosmetics (Vegan certification, Eurasian certification, VCRP, EWG, CPNP)</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Product testing</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Audit qualification certification</span></p></li>
                        <li><p><em><strong>06</strong></em><span>Training for professional human resources</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 01 Vegan Society 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 02 식품 & Restaurant 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">Introduction to Vegan Product Certification</h1>
                <h2 class="tit_cer fc_pointer">Food &amp; Restaurant</h2>
                <div class="outline">
                    The Vegan Society is a non-profit organization founded in November 1944. As the world's oldest original vegan organization, more than 70 years later, it is still more active than any other vegan organization in the world, spreading the concept and necessity of veganism.
                </div>
                <div class="outline">
                    <ul class="list_st">
                        <li><span class="bullet"></span>It is a unique vegan organization with the longest history and experience.</li>
                        <li><span class="bullet"></span>It has a global authority to lead a new trend by inventing the new word 'Vegan'.</li>
                        <li><span class="bullet"></span>We strictly comply with the standards for applying the mark to individual products, and carefully review that there is no possibility of containing any animal ingredients, including ingredients that are no longer present in the finished product.</li>
                        <li><span class="bullet"></span>Vegan Trademark is an international mark that can be easily identified by consumers around the world.</li>
                        <li><span class="bullet"></span>Vegan Trademark Logo convinces consumers that their products meet ethical standards.</li>
                        <li><span class="bullet"></span>Various promotional effects can be obtained by using the mark on all promotional materials related to the product during the license period.</li>
                        <li><span class="bullet"></span>Over 35,000 products worldwide are registered with Vegan Trademark.</li>
                        <li><span class="bullet"></span>There is no on-site due diligence on manufacturing lines or facilities, and only 100% document review is conducted.</li>
                    </ul>
                </div>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan_certification_01.jpg" alt="The importance of vegan certification">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of vegan certification</h3>
                                <p style="text-align: justify">
                                    Vegan certification is a certification given as a standard for not using or using animal-derived raw materials, managing cross-contamination, and not conducting animal tests on products. Vegan Trademark has gone through a rigorous certification process, saving consumers the hassle of checking the detailed raw materials, and making it easier to select vegan products. Producers who manufacture products can also help increase profits by confidently promoting the vegan products they manufacture and rethinking the reliability of their products.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan1_01_01.jpg" alt="Vegan Trademark Registration Criteria">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Vegan Trademark Registration Criteria</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Animal Ingredients
                                    </span>
                                    <p>
                                        The manufacture and/or development of the product, and where applicable its ingredients, must not involve, or have involved, the use of any animal product, by-product or derivative.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Animal Testing
                                    </span>
                                    <p>
                                        The development and/or manufacture of the product, and where applicable its ingredients, must not involve, or have involved, testing of any sort on animals conducted at the initiative of the company or on its behalf, or by parties over whom the company has effective control.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Genetically Modified Organisms (GMO)
                                    </span>
                                    <p>
                                        The development and/or production of genetically modified organisms (GMO) must not have involved animal genes or animal-derived substances. Products put forward for registration which contain or may contain any GMOs must be labelled as such.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Cross Contamination with Non-vegan
                                    </span>
                                    <p>
                                        Potential cross-contamination of animal-derived ingredients should be avoided as much as possible. Vegan production lines require thorough cleaning of minimal surfaces and equipment prior to use. Recognizing the risk of cross-contamination by non-vegan raw materials in the production space, and taking all reasonable and practical steps to eliminate it. If you are producing vegan and non-vegan in the same space, it is strongly recommended to start with the non-vegan line.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan_certification_02.jpg" alt="Vegan Trademark Registration Procedure">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Vegan Trademark Registration Procedure</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Process
                                    </span>
                                    <p>
                                        Consultation ➜ Providing quotation ➜ Application acceptance ➜ Payment in full ➜ Document review ➜ Contact signing ➜ Certificate issuance ➜ Product registration ➜ Mark application ➜ Complete<br><br>
                                        ‣ Estimated time required : average 6 months
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>License terms
                                    </span>
                                    <p>
                                        The license for Vegan Trademark can be selected from 12 months or 24 months, and renewal is checked 1 to 2 months before the expiration date in the UK. If there are no changes to the product at the time of renewal (product name/design change/all ingredients change/product discontinuation, etc.), you can pay the same amount as the existing license fee and extend the period through renewal.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Period
                                    </span>
                                    <p>
                                        After receiving the application, it takes about 3-6 months to complete the registration. The time required may slightly vary depending on various factors such as the type of product and all ingredients, document handling speed, cost handling, and communication efficiency.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Cost
                                    </span>
                                    <p>
                                        License cost is calculated flexibly in consideration of the company's annual sales, number of product registrations, and product types. If, during the vegan status of the product, it is determined that the product is unsuitable for vegan registration and cannot be registered, 50% of the payment will be refunded.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan_certification_03.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC is working with The Vegan Society to conduct vegan certification.</li>
                                    <li><span class="bullet"></span>IGC is contributing to the continuous development of customers by accurately evaluating the suitability of vegan certification through the technology and expertise accumulated over the years.</li>
                                    <li><span class="bullet"></span>As a broad range of food-related certification providers, IGC leverages its vast network of highly skilled and knowledgeable auditors to provide the best certification services.</li>
                                    <li><span class="bullet"></span>IGC is a leading food-related certification body, providing fast and accurate vegan certification process.</li>
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
                        <li><p><em><strong>01</strong></em><span>Sysyem certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification-Foods (Vegan certification, HALAL certification, Eurasian certification, Hygiene registration, FDA registration/approval)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Product certification-Cosmetics (Vegan certification, Eurasian certification, VCRP, EWG, CPNP)</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Product testing</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Audit qualification certification</span></p></li>
                        <li><p><em><strong>06</strong></em><span>Training for professional human resources</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 02 식품 & Restaurant 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 03 화장품 컨텐츠 시작 //------->
        <article style="display:block">
            <section class="business_type5" class="area">
                <h1 class="tit_num">Introduction to Vegan Product Certification</h1>
                <h2 class="tit_cer fc_pointer">Cosmetics</h2>
                <div class="outline">
                    Vegan certification is a certification given as a standard for not using or using animal-derived raw materials, managing cross-contamination, and not conducting animal tests on products. Vegan Trademark has gone through a rigorous certification process, saving consumers the hassle of checking the detailed raw materials, and making it easier to select vegan products. Producers who manufacture products can also help increase profits by confidently promoting the vegan products they manufacture and rethinking the reliability of their products.
                </div>
                <div class="outline">
                    <ul class="list_st">
                        <li><span class="bullet"></span>It is a unique vegan organization with the longest history and experience.</li>
                        <li><span class="bullet"></span>It has a global authority to lead a new trend by inventing the new word 'Vegan'.</li>
                        <li><span class="bullet"></span>We strictly comply with the standards for applying the mark to individual products, and carefully review that there is no possibility of containing any animal ingredients, including ingredients that are no longer present in the finished product.</li>
                        <li><span class="bullet"></span>Vegan Trademark is an international mark that can be easily identified by consumers around the world.</li>
                        <li><span class="bullet"></span>Vegan Trademark Logo convinces consumers that their products meet ethical standards.</li>
                        <li><span class="bullet"></span>Various promotional effects can be obtained by using the mark on all promotional materials related to the product during the license period.</li>
                        <li><span class="bullet"></span>Over 35,000 products worldwide are registered with Vegan Trademark.</li>
                        <li><span class="bullet"></span>There is no on-site due diligence on manufacturing lines or facilities, and only 100% document review is conducted.</li>
                    </ul>
                </div>
                
                <ul class="content">
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan_cosmetic_01.jpg" alt="The importance of vegan certification">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of vegan certification</h3>
                                <p style="text-align: justify">
                                    Vegan certification is a certification given as a standard for not using or using animal-derived raw materials, managing cross-contamination, and not conducting animal tests on products. Vegan Trademark has gone through a rigorous certification process, saving consumers the hassle of checking the detailed raw materials, and making it easier to select vegan products.<br><br>
                                    Producers who manufacture products can also help increase profits by confidently promoting the vegan products they manufacture and rethinking the reliability of their products.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan_cosmetic_02.jpg" alt="Vegan Trademark Registration Criteria">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Vegan Trademark Registration Criteria</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Animal Ingredients
                                    </span>
                                    <p>
                                        The manufacture and/or development of the product, and where applicable its ingredients, must not involve, or have involved, the use of any animal product, by-product or derivative.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Animal Testing
                                    </span>
                                    <p>
                                        The development and/or manufacture of the product, and where applicable its ingredients, must not involve, or have involved, testing of any sort on animals conducted at the initiative of the company or on its behalf, or by parties over whom the company has effective control.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Genetically Modified Organisms (GMO)
                                    </span>
                                    <p>
                                        The development and/or production of genetically modified organisms (GMO) must not have involved animal genes or animal-derived substances. Products put forward for registration which contain or may contain any GMOs must be labelled as such.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Cross Contamination with Non-vegan
                                    </span>
                                    <p>
                                        Potential cross-contamination of animal-derived ingredients should be avoided as much as possible. Vegan production lines require thorough cleaning of minimal surfaces and equipment prior to use. Recognizing the risk of cross-contamination by non-vegan raw materials in the production space, and taking all reasonable and practical steps to eliminate it. If you are producing vegan and non-vegan in the same space, it is strongly recommended to start with the non-vegan line.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan_cosmetic_03.jpg" alt="Vegan Trademark Registration Procedure">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Vegan Trademark Registration Procedure</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Vegan certification process
                                    </span>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li><span class="number">1. </span>Reception</li>
                                            <li>
                                                <span class="number">2. </span>Confirmation of document review items
                                                <div>
                                                    <ul class="list_st">
                                                        <li><span class="bullet"></span>Submit the documents for the product to be certified. (Application, agreement, OEM contract, etc.)</li>
                                                        <li><span class="bullet"></span>Request for application review and supplement</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><span class="number">3. </span>Payment of fees</li>
                                            <li><span class="number">4. </span>Raw material review document audit (animal genetic test)</li>
                                            <li><span class="number">5. </span>Request for supplementation according to the determination of conformity / supplement / cancellation</li>
                                            <li><span class="number">6. </span>Conduct animal DNA test</li>
                                            <li><span class="number">7. </span>Final examination after confirmation that the animal gene was not detected</li>
                                            <li><span class="number">8. </span>Issuance of vegan certification</li>
                                        </ul>
                                    </div>
                                    <p>※ The official audit processing deadline is 30 days.</p>
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
                        <li><p><em><strong>01</strong></em><span>Sysyem certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification-Foods (Vegan certification, HALAL certification, Eurasian certification, Hygiene registration, FDA registration/approval)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Product certification-Cosmetics (Vegan certification, Eurasian certification, VCRP, EWG, CPNP)</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Product testing</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Audit qualification certification</span></p></li>
                        <li><p><em><strong>06</strong></em><span>Training for professional human resources</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 03 화장품 컨텐츠 종료 //------->
        
    </div><!------div class="tab_con" 종료 --------->
</div> <!--------// div class="content_wrap"  종료  ------------------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>