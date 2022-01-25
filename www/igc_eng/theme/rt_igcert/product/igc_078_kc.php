<?php
	include_once('./_common.php');
$g5['title'] = 'Korea KC';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #404953 }/* 상세페이지 포인트 컬러 */
    .point_blk { display: block;color: #111;font-weight: 500;margin: 0 0 10px }/* 상세페이지 폰트스타일 1 */
	.content_wrap { width: 100%;max-width: 1200px;margin: 0 auto;font-size: 1rem;font-weight: 400;line-height: 1.6 }/* 컨텐츠 중간 그리드 지정 */
    .content_wrap .business_type5 { margin: 0 0 100px }
    
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
    .content li .txt_area .con_txt { text-align: justify;margin: 0 0 50px }/* 텍스트 영역 내용 */
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
    table.type03 .even { border-top: 1px solid #e1e1e1;border-bottom: 1px solid #e1e1e1 }
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
	<section class="business_type5" class="area">
		<h1 class="tit_num">Safety Certification / Electromagnetic Certification</h1>
		<h2 class="tit_cer fc_pointer">KC</h2>
		<p class="outline">
		    KC Certification is the compactly product certification scheme prepared by the Korean government. The KC means that electrical appliances manufactured in South Korea or imported from abroad, that are distributed, sold and used must be safe for consumers. Before being offered for sale, all electrical and electronic products importing into or manufactured within South Korea must undergo applied product testing and inspection to ensure they do not endanger the consumer through fire or electric shock.<br><br>
		    If the product – subject for KC certification is not certified, it cannot be sold in Korea. Additionally, when importing overseas products, customs clearance is impossible without KC certificate.
		</p>
        <div class="tit_img">
            <img src="./images/igc_078_kc_00.jpg" alt="KC인증 로고" style="width: 100%">
        </div>
        
        <ul class="content">
            <li><!-- content 01 -->
                <dl>
                    <dt></dt>
                    <dd class="txt_area" style="width:90%;margin:0 auto">
                        <h3 class="con_tit" style="text-align:center">KC Certification Types</h3>
                        <p class="con_txt">
                            KC Certification is largely divided into 'Safety Certification' and 'Electromagnetic Certification'. 'Safety Certification' and 'Electromagnetic Certification' are subdivided according to the item (type)/function (specification) of the target product as follows :
                        </p>
                        <div class="con_txt_2">
                            <table class="type03">
                                <tbody>
                                    <tr>
                                        <td width="20%" rowspan="3" class="headerT">
                                            <p>Safety Certification</p>
                                        </td>
                                        <td width="20%">
                                            <p>Safety certification</p>
                                        </td>
                                        <td width="60%">
                                            <p>Products which required strict quality control need product test and factory inspection for the production line.</p>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td width="20%">
                                            <p>Safety check</p>
                                        </td>
                                        <td width="60%">
                                            <p>Product inspection is conducted through the KC Certification Body which authorized by government.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">
                                            <p>Supplier Conformity Check</p>
                                        </td>
                                        <td width="60%">
                                            <p>Product tests  can be done by supplier or by private laboratories are both acceptable.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="con_txt_2">
                            <table class="type03">
                                <tbody>
                                    <tr>
                                        <td width="20%" rowspan="2" class="headerT">
                                            <p>Electromagnetic Certification</p>
                                        </td>
                                        <td width="20%">
                                            <p>Electromagnetic Compatibility Registration</p>
                                        </td>
                                        <td width="60%">
                                            <p>The subjects for this certification type are general electric products without wireless function; product inspection is conducted.</p>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td width="20%">
                                            <p>Conformity Certification</p>
                                        </td>
                                        <td width="60%">
                                            <p>The subjects for this certification type are general electric products with wireless function; product inspection is conducted.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </dd>
                </dl>
            </li>
            
            <li><!-- content 02 -->
                <dl>
                    <dt class="img_area">
                        <img src="./images/igc_078_kc_01.jpg" alt="KC Certification Procedure">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">KC Certification Procedure</h3>
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">1. </span>Application for Safety Certification
                            </span>
                            <p style="text-align: justify">
                                Anyone who manufactures electrical appliances that are subjects to safety certification in Korea or overseas manufacturers who are planning to export electrical appliances to Korea must obtain safety certification for each model by electrical appliance safety certification body.<br><br>
                                Foreign manufacturer who intends to obtain certification must submit the relevant documents for the application KC certification before shipment or before customs. Additionally foreign manufacturer should use Korean reponsibilty for liasion. In this case, the manufacturer has all rights of certification.
                            </p>
                        </div>
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">2. </span>Application Documents
                            </span>
                            <ul class="list_st">
                                <li><span class="bullet"></span>Application Electrical Safety Certification</li>
                                <li><span class="bullet"></span>Product User's Manual</li>
                                <li><span class="bullet"></span>Product Specification</li>
                                <li><span class="bullet"></span>Electrical Circuit Diagram</li>
                                <li><span class="bullet"></span>Parts list (if applicable, including certificates)</li>
                                <li><span class="bullet"></span>Documents proving the representative qualification</li>
                                <li><span class="bullet"></span>One piece of the product for the sample test (if it’s not specified otherwise in the safety standard, 1 piece is required, but if the electromagnetic compatibility test requested one more sample need).</li>
                                <li><span class="bullet"></span>Parts (parts that are not certified as electrical appliances subject to safety certification) should be provided.</li>
                            </ul>
                        </div>
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">3. </span>KC Certification Process
                            </span>
                            <ul class="list_st">
                                <li><span class="bullet"></span>Manufacturer submits Safety Certification Application to the Safety Certification Body</li>
                                <li><span class="bullet"></span>Application received and reviewed by Safety Certification Body</li>
                                <li><span class="bullet"></span>Factory Inspection and Product Test conducted by Safety Certification Body</li>
                                <li><span class="bullet"></span>After issue of certificate can the applicant use labelling.</li>
                                <li><span class="bullet"></span>Conduct Periodic Inspections (In case of failure, consequential actions)</li>
                            </ul>
                        </div>
                    </dd>
                </dl>
            </li>
            
            <li><!-- content 03 -->
                <dl>
                    <dt class="img_area">
                        <img src="./images/products_09_04.jpg" alt="IGC’s Competency">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">IGC’s Competency</h3>
                        <p style="text-align: justify">
                            IGC has up-to-date knowledge of a wide range of specific scope and legal requirements in major markets around the world, and provides the knowledge and services to support your entire global operation.<br><br>
                            IGC provides professional and competitive services to both domestic and international customers in the field of electrical products.
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
                <li><p><em><strong>01</strong></em><span>System Certification</span></p></li>
                <li><p><em><strong>02</strong></em><span>Product Certification ( KC Certification, European CE Certification, Eurasian Certification)</span></p></li>
                <li><p><em><strong>03</strong></em><span>Product Test (Electrical safety, Machine safety)</span></p></li>
                <li><p><em><strong>04</strong></em><span>Audit Qualification Certification</span></p></li>
                <li><p><em><strong>05</strong></em><span>Professional Personnel Training Course</span></p></li>
            </ul>
        </div>
    </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------>

</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>