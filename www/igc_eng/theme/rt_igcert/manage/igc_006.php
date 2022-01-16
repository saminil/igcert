<?php
	include_once('./_common.php');
$g5['title'] = 'System Certification';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #1F88E5 }/* 상세페이지 포인트 컬러 */
	.content_wrap { width: 100%;max-width: 1200px;margin: 0 auto;font-size: 1rem;font-weight: 400;line-height: 1.6 }/* 컨텐츠 중간 그리드 지정 */
    
    /* ============= 컨텐츠 타이틀 영역 ============= */
    
	.page_title { width: 100%; margin-bottom: 70px;text-align: center }
    .page_title h1 { padding: 10px 0;font-size: 1.5rem;color: #fff;background: #6699cc }/* 컨텐츠 타이틀 */
	.page_title h2 { padding: 20px 0 }/* 컨텐츠 서브 타이틀 */
	.page_title h2 a { font-size: 1.2rem;color: #023059 }
    
    /* ============= 컨텐츠 개요 영역 ============= */
    
    .txt { border-left: 3px solid #666;margin: 0 0 70px;padding: 0 0 0 15px }
    .txt h3 { font-size: 1.4rem;font-weight: 600 }
    
    /* ============= 컨텐츠 영역 ============= */
    
    /* 규격 목록 부분 */
	.partner_type2 { clear: both;display: grid;grid-template-columns: 1fr 1fr 1fr;grid-gap: 1.6rem }
	.partner_type2 .con_area { margin: 0 0 20px 0;padding: 0 0 50px 0;border-bottom: 1px solid #eee;overflow: hidden }/* 각 컨텐츠 여백 조정 */
    
    /* 규격 목록 썸네일 부분 */
	.partner_type2 .con_area .thumb a { display: block }
	.partner_type2 .con_area .thumb h3 { width: 100%;position: relative;padding: 10px;background: #6699cc;color: #fff;text-align: center }/* 규격 목록 타이틀 */
    
    /* 규격 목록 리스트 부분 */
	.partner_type2 .con_area .txtArea { padding-left: 40px }
    .partner_type2 .con_area .txtArea ul li { margin-top: 15px }/* 규격 목록 리스트 상하 간격 */
    .partner_type2 .con_area .txtArea ul li a { color: #6699cc;font-weight: 500 }
    
    /* 규격 목록 리스트 좌측 화살표 기호 부분 */
    .partner_type2 .con_area .txtArea ul li .arrow { display: inline-block;position:relative }
    .partner_type2 .con_area .txtArea ul li .arrow::after { content: '';width: 0;height: 0;position: absolute;top: -15px;left: -20px;border-width:10px 10px;border-style:solid;border-color:transparent transparent transparent #6699cc }

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
		<h1 class="sub_tit"><span>Management System</span>&nbsp;Certification Service List</h1>
		<h2 class="sub_txt" ><a href="/igc_eng/theme/rt_igcert/igc/process.php">Click for Certification Process!</a></h2>
	</section>	
	
	<div class="txt">
        <h3 class="fc_pointer">What is Management System Certification?</h3><br><br>
        <strong>Achieve quality goals through process optimization</strong><br>
        <p style="text-align:justify;">
            An effective management system can tell a lot about your organization. It shows how well the organization is committed to operational optimization and quality, safety and security. It also highlights our commitment to sustainable growth through a systematic system and demonstrates our commitment to increasing employee motivation and customer satisfaction.<br><br>
            In conclusion, management system certification allows customers and shareholders to make strong declarations about the system of companies and organizations. IGC is an internationally recognized certification body for various management systems, and possesses the know-how of audit and certification for various management systems related to quality, environment, energy, safety, risk, health, education, business continuity and social responsibility. Automotive, Railway, Aviation, Mechanical Engineering, Information and Communication Technology, Financial and Medical Industries, etc.<br><br>
            IGC provides a variety of tools and practices for optimizing and evaluating operational processes, not just certification, to help customers reduce risk and increase efficiency throughout the entire business process.<br><br>
            So, if you are looking for a partner to help you continuously improve and optimize your organization and processes, IGC will be the best choice.
        </p>
    </div>

	<section class="partner_type2">

		<!-----1line start------------>
		<div class="con_area">
			<div class="thumb">
              <a href="igc_006_ISO9001.php">
			    <h3>Quality</h3>
				<img src="../image/00000_bg.jpg" alt="Quality">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="igc_006_ISO9001.php"><span><div  class="arrow test_4"></div>ISO 9001</span></a></li>
				</ul>
			</div>
		</div>	
	
        <div class="con_area">
			<div class="thumb">
              <a href="igc_007_ISO14001.php">
			    <h3>Environment</h3>
				<img src="../image/1000_bg.jpg" alt="Environment">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="igc_007_ISO14001.php"><span><div  class="arrow test_4"></div>ISO 14001</span></a></li>
				</ul>
			</div>
		</div>
  
  		<div class="con_area">
			<div class="thumb">
              <a href="igc_008_OHSAS18001.php">
			    <h3>Health & Safety</h3>
				<img src="../image/2000_bg.jpg" alt="Health & Safety">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="igc_008_OHSAS18001.php"><span><div  class="arrow test_4"></div>OHSAS 18001</span></a></li>
					<li><a href="igc_008_ISO45001.php"><span><div  class="arrow test_4"></div>ISO 45001</span></a></li>
				</ul>
			</div>
		</div>

		<!-----2line start------------>
		<div class="con_area">
			<div class="thumb">
              <a href="igc_010_ISO13485.php">
			    <h3>Medical device</h3>
				<img src="../image/3000_bg.jpg" alt="Medical device">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="igc_010_ISO13485.php"><span><div  class="arrow test_4"></div>ISO 13485</span></a></li>
					<li><a href="igc_010_ISO15378.php"><span><div  class="arrow test_4"></div>ISO 15378</span></a></li>
					<li><a href="igc_010_ISO14155.php"><span><div  class="arrow test_4"></div>ISO 14155</span></a></li>
				</ul>
			</div>
		</div>

		<div class="con_area">
			<div class="thumb">
              <a href="igc_014_ISO22000.php">
			    <h3>Food</h3>
				<img src="../image/4000_bg.jpg" alt="Food">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="igc_014_ISO22000.php"><span><div  class="arrow test_4"></div>ISO 22000</span></a></li>
					<li><a href="igc_015_FSSC22000.php"><span><div  class="arrow test_4"></div>FSSC 22000</span></a></li>
					<li><a href="igc_016_FDA-FSMA.php"><span><div  class="arrow test_4"></div>FDA FSMA</span></a></li>
					<li><a href="igc_017_GlobalHACCP.php"><span><div  class="arrow test_4"></div>Global HACCP</span></a></li>
				</ul>
			</div>
		</div>

        <div class="con_area">
			<div class="thumb">
              <a href="igc_018_ISO50001.php">
			    <h3>Energy</h3>
				<img src="../image/5000_bg.jpg" alt="Energy">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="igc_018_ISO50001.php"><span><div  class="arrow test_4"></div>ISO 50001</span></a></li>
				</ul>
			</div>
		</div>

        <!-----3line start------------>
		<div class="con_area">
			<div class="thumb">
              <a href="igc_019_ISO27001.php">
			    <h3>Information Security</h3>
				<img src="../image/6000_bg.jpg" alt="Information Security">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="igc_019_ISO27001.php"><span><div  class="arrow test_4"></div>ISO/IEC 27001</span></a></li>
					<li><a href="igc_019_ISO27701.php"><span><div  class="arrow test_4"></div>ISO/IEC 27701</span></a></li>
					<li><a href="igc_020_ISO20000-1.php"><span><div  class="arrow test_4"></div>ISO/IEC 20000-1</span></a></li>
				</ul>
			</div>
		</div>
 
 		<div class="con_area">
			<div class="thumb">
              <a href="igc_021ISO37001.php">
			    <h3>Anti-Bribery</h3>
				<img src="../image/7000_bg.jpg" alt="Anti-Bribery">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="igc_021ISO37001.php"><span><div  class="arrow test_4"></div>ISO 37001</span></a></li>
				</ul>
			</div>
		</div>
		
 		<div class="con_area">
			<div class="thumb">
              <a href="igc_022_ISO21001.php">
			    <h3>Education</h3>
				<img src="../image/8000_bg.jpg" alt="Education">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="igc_022_ISO21001.php"><span><div  class="arrow test_4"></div>ISO 21001</span></a></li>
				</ul>
			</div>
		</div>

        <!-----4line start------------>
		<div class="con_area">
			<div class="thumb">
              <a href="igc_023_ISO22301.php">
			    <h3>Business Continuity</h3>
				<img src="../image/9000_bg.jpg" alt="Business Continuity">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="igc_023_ISO22301.php"><span><div  class="arrow test_4"></div>ISO 22301</span></a></li>
				</ul>
			</div>
		</div>

		<div class="con_area">
			<div class="thumb">
              <a href="igc_024_ISO22716.php">
			    <h3>Cosmetic</h3>
				<img src="../image/10000_bg.jpg" alt="Cosmetic">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="igc_024_ISO22716.php"><span><div  class="arrow test_4"></div>ISO 22716</span></a></li>
				</ul>
			</div>
		</div>

		<div class="con_area">
			<div class="thumb">
              <a href="igc_025_ISO10002.php">
			    <h3>Customer Satisfaction</h3>
				<img src="../image/11000_bg.jpg" alt="Customer Satisfaction">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="igc_025_ISO10002.php"><span><div  class="arrow test_4"></div>ISO 10002</span></a></li>
					<li><a href="igc_025_ISO10004.php"><span><div  class="arrow test_4"></div>ISO 10004</span></a></li>
				</ul>
			</div>
		</div>

        <!-----5line start------------>
 		<div class="con_area">
			<div class="thumb">
              <a href="igc_026_SA8000.php">
			    <h3>Social Accountability</h3>
				<img src="../image/SA8000.jpg" alt="Social Accountability">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="igc_026_SA8000.php"><span><div  class="arrow test_4"></div>SA8000</span></a></li>
				</ul>
			</div>
		</div>
	</section>
	
<!---- Related Services from IGC Start -------->
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
       <!---------    Related Services from IGC END  	 ------>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>