<?php
	include_once('./_common.php');
$g5['title'] = 'Electric electron';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #11A6A6 }/* 상세페이지 포인트 컬러 */
    .point_blk { display: block;color: #111;font-weight: 500;margin: 0 0 10px }/* 상세페이지 폰트스타일 1 */
	.content_wrap { width: 100%;max-width: 1200px;margin: 0 auto;font-size: 1rem;font-weight: 400;line-height: 1.6 }/* 컨텐츠 중간 그리드 지정 */
    .content_wrap .business_type5 { margin: 0 0 100px }
    
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

    <section class="business_type5" class="area">
		<h1 class="tit_cer fc_pointer">Electrical Safety | Test</h1>
        <p class="outline">
            Demonstrating the safety of products that use electricity is essential for entering all markets around the world. To enter one of the world's largest markets in Europe, electric/electronic manufacturers must demonstrate the safety of their products in order to enter the market. Many electrical and electronic products imported and sold in Europe must comply with the requirements of the Low Voltage Directive.<br><br>
            The CE marking product is deemed to comply with the requirements of the Low Voltage Directive and other applicable Directive (EMC Directives, etc.) and is legally accessible to the EC Member Market.
        </p>

		<ul class="content">
			<li><!-- content 01 -->
			    <dl>
					<dt class="img_area">
						<img src="./images/clinicaltest_electricsafety_01.jpg" alt="Introduction of Testing Laboratory">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">Introduction of Testing Laboratory</h3>
						<p style="text-align: justify">
                            IGC supports the testing and inspecting work required to obtain certification from customer through an Electric electron testing laboratory established with technologyand know-how accumulated from many years of certification experience.<br><br>
                            Based on ripe with experience in many years, customer satisfaction, and customer-centered mindset, all employees of the testing laboratory support the necessary services to meet the needs of their customer.<br><br>
                            In addition, by complying with the quality management system established based on the requirements of ISO/IEC 17025, international standard and related laws and regulations, our testing laboratory provides the highest level of service and reliable test reports to our customers and strives to satisfy and comply with their requirements continuously.
                        </p>
					</dd>
				</dl>	
			</li>
           
            <li><!-- content 02 -->
			    <dl>
					<dt class="img_area">
						<img src="./images/clinicaltest_electricsafety_02.jpg" alt="What is Low Voltage Directive (LVD)?">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">What is Low Voltage Directive (LVD)?</h3>
						<p style="text-align: justify">
                            Low Voltage Directive (LVD) is intended for electrical equipment designed and used as voltage specifications between 50-1000 volts for AC and 75-1500 volts for DC.<br><br>
                            As with most other EU Directives, the Low Voltage Directive provides a broad set of goals for electrical safety (required requirements) with detailed technical specification sbe specified in published technical standards. Manufacturers can test the key requirements of the instructions and compliance with the technical specifications of the relevant standards, demonstrate compliance with the declaration of conformity, and attach CE marks to the product.<br><br>
                            Safety standards generally refer to Electrical Safety, which are considered as application requirements for verifying and ensuring safety by testing and inspecting hazards<br><br>
                            In the field of electrical product certification. This is to prevent human and property injury or loss from hazards (Hazard) that may arise in predictable or unforeseen circumstances. Electrical parts used in certain categories of electrical and finished products, such as medical devices, are excluded from the scope of the Low Voltage Directive.<br><br>
                            A revised version of the Low Voltage Directive 2014/35/EU was issued in February 2014, and has been applied on electrical products since April 2016 by force. IGC’s Testing Laboratories are issuing test reports in accordance with 2014/35/EU guidelines.
                        </p>
					</dd>
				</dl>	
            </li>
            
            <li><!-- content 03 -->
			    <dl>
					<dt class="img_area">
						<img src="./images/clinicaltest_electricsafety_04.jpg" alt="What is Electromagnetic Compatibility Directive (EMC)?">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">What is Electromagnetic Compatibility Directive (EMC)?</h3>
						<p style="text-align: justify">
                            The Electromagnetic Compatibility Directive (EMC) is a guideline for evaluating the electromagnetic compatibility of electronic devices and certifying suitability by testing whether electromagnetic obstacles are appropriate level object to equipment that can generate electromagnetic waves through immunity tests about electromagnetic interference from the outside.<br><br>
                            As the industry advances, the use of Electric electron equipment has increased dramatically, which has increased the likelihood of malfunctioning caused by electromagnetic waves and problem with function of system as devices are used in limited space. As a result, it has become essential to test whether the device complies with the acceptable range of electromagnetic interference to the surrounding environment and is not affected by electromagnetic waves by other products.<br><br>
                            Electromagnetic compatibility guidelines 2014/30/EU were issued in February 2014, and have been applied on electrical products since April 2016 by force. IGC’s Testing Laboratories are issuing test reports in accordance with 2014/30/EU guidelines.
                        </p>
					</dd>
				</dl>	
            </li>
            
            <li><!-- content 04 -->
			    <dl>
					<dt class="img_area">
						<img src="./images/clinicaltest_electricsafety_03.jpg" alt="IGC’s Competency">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">IGC’s Competency</h3>
						<p style="text-align: justify">
                            IGC’s Testing laboratories offer One-Stop services ranging from testing required for certification to obtaining various certifications for electrical/electron products.<br><br>
                            IGC's accumulated know-how and competitive experts are trying to maximize the rate of return and enter the market for their products by providing customized guides for their customer.
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
                <li><p><em><strong>01</strong></em><span>CE LVD/EMC Certification</span></p></li>
                <li><p><em><strong>02</strong></em><span>Eurasia Certification</span></p></li>
                <li><p><em><strong>03</strong></em><span>Product Registration (CPNP, FDA)</span></p></li>
                <li><p><em><strong>04</strong></em><span>Provide technical support services for testing and certification</span></p></li>
            </ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
      
</div> <!----------++++++++ content_wrap 종료 +++++++++----------------->




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>