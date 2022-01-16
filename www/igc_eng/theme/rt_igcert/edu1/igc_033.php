<?php
	include_once('./_common.php');
$g5['title'] = 'Education';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #B3AA00 }/* 상세페이지 포인트 컬러 */
	.content_wrap { width: 100%;max-width: 1200px;margin: 0 auto;font-size: 1rem;font-weight: 400;line-height: 1.6 }/* 컨텐츠 중간 그리드 지정 */
    
    /* ============= 컨텐츠 타이틀 영역 ============= */
    
	.page_title { width: 100%;margin-bottom: 70px;text-align: center }
    .page_title h1 { padding: 10px 0;font-size: 1.5rem;color: #fff;background: #9B9740 }/* 컨텐츠 타이틀 */
	.page_title h2 { padding: 20px 0 }/* 컨텐츠 서브 타이틀 */
	.page_title h2 a { font-size: 1.2rem;color: #023059 }
    
    /* ============= 컨텐츠 개요 영역 ============= */
    
    .txt { border-left: 3px solid #666;margin: 0 0 70px;padding: 0 0 0 15px }
    .txt h3 { font-size: 1.4rem;font-weight: 600 }
    
    /* ============= 컨텐츠 영역 ============= */
    
    /* 규격 목록 부분 */
	.partner_type2 { clear: both; display: grid;grid-template-columns: 1fr 1fr 1fr;grid-gap: 1.6rem}
	.partner_type2 .con_area { margin: 0 0 20px 0;padding: 0 0 50px 0;border-bottom: 1px solid #eee;overflow: hidden }/* 각 컨텐츠 여백 조정 */
    
    /* 규격 목록 썸네일 부분 */
    .partner_type2 .con_area .thumb a { display: block }
	.partner_type2 .con_area .thumb h3 { width: 100%;position: relative;padding: 10px;background: #9B9740;color: #fff;text-align: center }/* 규격 목록 타이틀 */
    
    /* 규격 목록 리스트 부분 */
	.partner_type2 .con_area .txtArea { padding-left: 40px }
    .partner_type2 .con_area .txtArea ul li { margin-top: 15px }/* 규격 목록 리스트 상하 간격 */
    .partner_type2 .con_area .txtArea ul li a { color: #9B9740;font-weight: 500 }
    
    /* 규격 목록 리스트 좌측 화살표 기호 부분 */
    .partner_type2 .con_area .txtArea ul li .arrow { display: inline-block;position:relative }
    .partner_type2 .con_area .txtArea ul li .arrow::after { content: '';width: 0;height: 0;position: absolute;top: -15px;left: -20px;border-width:10px 10px;border-style:solid;border-color:transparent transparent transparent #9B9740 }

    /* ============= (주)아이지씨인증원 사업영역 부분 ============= */
    
    .partner_type2 .con_arrow { grid-column: 1 / 4;padding-top: 70px }/* 사업영역 타이틀 */
	.partner_type2 .con_arrow p { position: relative;padding-left: 30px;font-size: 1.75rem }
	.partner_type2 .con_arrow p::before { content: "";display: inline-block;width: 3px;height: 23px;position: absolute;top: 4px;left: 10px;background-color: #1F88E5;transform:rotate(45deg) }/* 사업영역 타이틀 arrow */
    
	.partner_type2 .con_box { grid-column: 1 / 4;padding: 20px 0;border-top: 1px solid #000;border-bottom: 1px solid #000 }/* 사업영역 리스트 부분 */
	.partner_type2 .con_box::after { content: "";display: block;clear: both }
	.partner_type2 .con_box ul li { float: left;width: 50%;margin: 10px 0 }/* 리스트 2배수 가로배열 */
	.partner_type2 .con_box ul li p { display: table }
	.partner_type2 .con_box ul li p > em { display: table-cell;width: 30px }/* 리스트 좌측 원형 */
	.partner_type2 .con_box ul li p > em > strong { display: inline-block;width: 30px;height: 30px;line-height: 30px;color: #fff;background-color: #000;text-align: center;border-radius: 100%;font-weight: 500 }/* 원형 안에 숫자 */
	.partner_type2 .con_box ul li p > span { color: #555;letter-spacing: -0.75px;padding: 0 15px }/* 리스트 내용(텍스트) */

    
    /* =========================================================================================================================================================================== */
    

    /* ============= 상세페이지 반응형 시작 ============= */    
    
    @media (max-width: 1280px) {
        
        .partner_type2 { grid-template-columns: 1fr 1fr }
    }
    
    
    @media (max-width: 640px) {
        
        .content_wrap { font-size: 0.85rem }/* 전체 폰트 사이즈 조정 */
        
        .page_title h1 { font-size: 1.2rem }/* 컨텐츠 타이틀 폰트 사이즈 조정 */
        .page_title h2 a  { font-size: 1.1rem }/* 컨텐츠 서브 타이틀 폰트 사이즈 조정 */
        
        .partner_type2 .con_area .thumb h3 { font-size: 0.9rem }/* 규격 목록 타이틀 폰트사이즈 조정 */
        .partner_type2 .con_area .txtArea ul li .arrow::after { border-width: 8px 8px;top: -13px }/* 규격 목록 리스트 좌측 화살표 기호 사이즈 변경 */
        
        .partner_type2 .con_arrow p { font-size: 1.4rem }/* 사업영역 타이틀 폰트 사이즈 조정 */
        
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */
        
    }
    
    
    @media (min-width: 360px) and (max-device-width: 414px) {
        
        .partner_type2 { grid-template-columns: 1fr }
        
        .partner_type2 .con_area { width: 100%;margin: 0;padding: 0;border: none }/* 규격 목록 가로비율 100%, 컨텐츠 세로정렬 */
        .partner_type2 .con_area:nth-child(3n) { margin: 0 }
    
        
        
    }
    
    /* ============= 상세페이지 반응형 종료 ============= */
    
    
</style>


<div class="content_wrap">
	<section class="page_title">
		<h1 class="sub_tit"><span>Training</span>&nbsp;Service List</h1>
	</section>	
	
	<div class="txt">
	    <h3 class="fc_pointer">What is Training Service? </h3><br><br>
		<p style="text-align:justify;">
            Employees are the company's best asset. If your employees are familiar with the latest business trends, relevant standards, and quality and safety requirements, so too are companies. That's why investing in training is a sure investment that guarantees a company's success. In order to develop your employees to the fullest, you must find the best training partner.<br><br>
            IGC improves corporate efficiency by providing comprehensive training programs ranging from occupational safety, management systems and professional skills to training programs for top executives, providing tangible economic value to customers.<br><br>
            Provided by the right people with extensive experience in employee training, IGC's employee training programs will provide your employees with expertise and competitiveness. Through IGC's training programs, we hope that you will develop your employees' skills and develop your expertise to achieve your business goals.      
		</p>
    </div>
		
	<section class="partner_type2">

        <!-----1line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_033_ISO9001.php">
			    <h3>Quality</h3>
				<img src="../image/edu_01.jpg" alt="Quality image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_033_ISO9001.php"><span><div  class="arrow test_4"></div>ISO 9001</span></a></li>
				</ul>
			</div>
		</div>
		
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_034_ISO14001.php">
			    <h3>Environment</h3>
				<img src="../image/edu_02.jpg" alt="Environment image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_034_ISO14001.php"><span><div  class="arrow test_4"></div>ISO 14001</span></a></li>
				</ul>
			</div>
		</div>
		
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_040-14_OHSAS18001.php">
			    <h3>Health & Safety</h3>
				<img src="../image/edu_05.jpg" alt="Health & Safety image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_040-14_OHSAS18001.php"><span><div  class="arrow test_4"></div>OHSAS 18001</span></a></li>
					<li><a href="./igc_047_ISO45001.php"><span><div  class="arrow test_4"></div>ISO 45001</span></a></li>
				</ul>
			</div>
		</div>
       
        <!-----2line 시작------------>
        <div class="con_area">
			<div class="thumb">
              <a href="./igc_035_ISO13485.php">
			    <h3>Medical device</h3>
				<img src="../image/edu_03.jpg" alt="Medical device image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_035_ISO13485.php"><span><div  class="arrow test_4"></div>ISO 13485</span></a></li>
				</ul>
			</div>
		</div>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_036_ISO22000.php">
			    <h3>Food</h3>
				<img src="../image/edu_04.jpg" alt="Food image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_036_ISO22000.php"><span><div  class="arrow test_4"></div>ISO 22000</span></a></li>
					<li><a href="./igc_037_FSSC22000.php"><span><div  class="arrow test_4"></div>FSSC 22000</span></a></li>
					<li><a href="./igc_038-12_FDA-FSMA.php"><span><div  class="arrow test_4"></div>FDA FSMA</span></a></li>
					<li><a href="./igc_039-13_FSPCA-PCQL.php"><span><div  class="arrow test_4"></div>PCQI</span></a></li>
				</ul>
			</div>
		</div>
        <div class="con_area">
			<div class="thumb">
              <a href="./igc_067_ISO-ICE20000.php">
			    <h3>Information Security</h3>
				<img src="../image/edu_06.jpg" alt="Information Security image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
				    <li><a href="./igc_067_ISO-ICE20000.php"><span><div  class="arrow test_4"></div>ISO/IEC 20000-1</span></a></li>
				    <li><a href="./igc_044_ISO27001.php"><span><div  class="arrow test_4"></div>ISO/IEC 27001</span></a></li>
					<li><a href="./igc_041-15_ISO-IEC27002.php"><span><div  class="arrow test_4"></div>ISO/IEC 27002</span></a></li>
					<li><a href="./igc_042_ISO-IEC27005.php"><span><div  class="arrow test_4"></div>ISO/IEC 27005</span></a></li>
					<li><a href="./igc_064_ISO-IEC27032.php"><span><div  class="arrow test_4"></div>ISO/IEC 27032</span></a></li>
					<li><a href="./igc_066_ISO-IEC27035.php"><span><div  class="arrow test_4"></div>ISO/IEC 27035-1</span></a></li>
					<li><a href="./igc_043_ISO27799.php"><span><div  class="arrow test_4"></div>ISO 27799</span></a></li>
					<li><a href="./igc_054_ISO-IEC29100.php"><span><div  class="arrow test_4"></div>ISO/IEC 29100</span></a></li>
					<li><a href="./igc_053_ISO-IEC38500.php"><span><div  class="arrow test_4"></div>ISO/IEC 38500</span></a></li>
				</ul>
			</div>
		</div>
       
        <!-----3line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_052_ISO31000.php">
			    <h3>Risk Management</h3>
				<img src="../image/partner_img1.jpg" alt="Risk Management image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_052_ISO31000.php"><span><div  class="arrow test_4"></div>ISO 31000</span></a></li>
				</ul>
			</div>
		</div>
      
       <div class="con_area">
			<div class="thumb">
              <a href="./igc_056_ISO-TS29001.php">
			    <h3>Traffic & Energy</h3>
				<img src="../image/edu_10.jpg" alt="Transportation, Communication and Energy image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_056_ISO-TS29001.php"><span><div  class="arrow test_4"></div>ISO 29001</span></a></li>
					<li><a href="./igc_058_ISO39001.php"><span><div  class="arrow test_4"></div>ISO 39001</span></a></li>
					<li><a href="./igc_057_ISO50001.php"><span><div  class="arrow test_4"></div>ISO 50001</span></a></li>
				</ul>
			</div>
		</div>
       <div class="con_area">
			<div class="thumb">
              <a href="./igc_059_ISO28000.php">
			    <h3>Continuity & Resilience </h3>
				<img src="../image/edu_11.jpg" alt="Continuity and Resilience ">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_059_ISO28000.php"><span><div  class="arrow test_4"></div>ISO 22301</span></a></li>
					<li><a href="./igc_062_ISO22316.php"><span><div  class="arrow test_4"></div>ISO 22316</span></a></li>
					<li><a href="./igc_063_ISO22317.php"><span><div  class="arrow test_4"></div>ISO/TS 22317</span></a></li>
					<li><a href="./igc_061_ISO22320.php"><span><div  class="arrow test_4"></div>ISO 22320</span></a></li>
				</ul>
			</div>
		</div>
        <!-----4line 시작------------>        
       <div class="con_area">
			<div class="thumb">
              <a href="./igc_048_ISO13053.php">
			    <h3>Business management</h3>
				<img src="../image/edu_08.jpg" alt="Business Continuity image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_048_ISO13053.php"><span><div  class="arrow test_4"></div>ISO 13053</span></a></li>
					<li><a href="./igc_051_ISO2021500.php"><span><div  class="arrow test_4"></div>ISO 21500</span></a></li>
					<li><a href="./igc_050_ISO30301.php"><span><div  class="arrow test_4"></div>ISO 30301</span></a></li>
					<li><a href="./igc_068_ISO55001.php"><span><div  class="arrow test_4"></div>ISO 55001</span></a></li>
				</ul>
			</div>
		</div>
 		<div class="con_area">
			<div class="thumb">
              <a href="./igc_046_ISO26000.php">
			    <h3>Social accountability & Bribery management</h3>
				<img src="../image/edu_07.jpg" alt="Social Accountability and Anti-Bribery image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
				    <li><a href="./igc_046_ISO26000.php"><span><div  class="arrow test_4"></div>ISO 26000</span></a></li>
				    <li><a href="./igc_055_ISO37001.php"><span><div  class="arrow test_4"></div>ISO 37001</span></a></li>
				</ul>
			</div>
		</div>
        <div class="con_area">
			<div class="thumb">
              <a href="./igc_049_ISO-IEC17025.php">
			    <h3>Testing & Calibration</h3>
				<img src="../image/edu_13.jpg" alt="Test and Calibration image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_049_ISO-IEC17025.php"><span><div  class="arrow test_4"></div>ISO/IEC 17025</span></a></li>
				</ul>
			</div>
		</div>
</section>

		<!----(주)아이지씨인증원 사업영역 HTML5 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>Related Services from IGC</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         		    <li><p><em><strong>01</strong></em><span>Quality</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>Environment</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>Health and Safety</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>Medical Device</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>Food</span></p></li>
	         			<li><p><em><strong>06</strong></em><span>Information Security</span></p></li>
	         			<li><p><em><strong>07</strong></em><span>Risk Management</span></p></li>
	         			<li><p><em><strong>08</strong></em><span>Traffic & Energy</span></p></li>
	         			<li><p><em><strong>09</strong></em><span>Continuity & Restoring force</span></p></li>
	         			<li><p><em><strong>10</strong></em><span>Business management</span></p></li>
	         			<li><p><em><strong>11</strong></em><span>Social accountability & Bribery management</span></p></li>
	         			<li><p><em><strong>12</strong></em><span>Testing & Calibration</span></p></li>
	         		</ul>
	         	</div>
            </section><!---------(주)아이지씨인증원 사업영역 HTML5 종료 ------>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>