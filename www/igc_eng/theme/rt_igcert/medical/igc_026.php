<?php
	include_once('./_common.php');
$g5['title'] = 'Testing';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #11A6A6 }/* 상세페이지 포인트 컬러 */
	.content_wrap { width: 100%;max-width: 1200px;margin: 0 auto;font-size: 1rem;font-weight: 400;line-height: 1.6 }/* 컨텐츠 중간 그리드 지정 */
    
    /* ============= 컨텐츠 타이틀 영역 ============= */
    
	.page_title { width: 100%; margin-bottom: 70px;text-align: center }
    .page_title h1 { padding: 10px 0;font-size: 1.5rem;color: #fff;background: #669999 }/* 컨텐츠 타이틀 */
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
	.partner_type2 .con_area .thumb h3 { width: 100%;position: relative;padding: 10px;background: #669999;color: #fff;text-align: center }/* 규격 목록 타이틀 */
    
    /* 규격 목록 리스트 부분 */
	.partner_type2 .con_area .txtArea { padding-left: 40px }
    .partner_type2 .con_area .txtArea ul li { margin-top: 15px }/* 규격 목록 리스트 상하 간격 */
    .partner_type2 .con_area .txtArea ul li a { color: #669999;font-weight: 500 }
    
    /* 규격 목록 리스트 좌측 화살표 기호 부분 */
    .partner_type2 .con_area .txtArea ul li .arrow { display: inline-block;position:relative }
    .partner_type2 .con_area .txtArea ul li .arrow::after { content: '';width: 0;height: 0;position: absolute;top: -15px;left: -20px;border-width:10px 10px;border-style:solid;border-color:transparent transparent transparent #669999 }
    
    /* ============= (주)아이지씨인증원 국제공인 이미지 영역 ============= */
    
    .img_area { width: 100%;margin: 50px 0;clear: both }
    .img_area img { width: 100% }

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
		<h1 class="sub_tit"><span>Test</span>&nbsp;Services List</h1>
	</section>
    
    <div class="txt">		
		<h3 class="fc_pointer">What is a Test?</h3><br><br>
        <strong>Ensure of Product Guaranteed Quality</strong><br>
        <p style="text-align:justify;">
		    If you plan to expand into more overseas markets, you need to verify the quality of your products. Independent testing can help you anticipate and identify problems from the early stages of product development, and solve them immediately to reduce costs and avoid delays in the market launch. It can also protect the company's brand image and reputation from product recalls and related lawsuits.<br><br>
            IGC tests products according to relevant international standards and standards and publishes international quality and safety certification marks and test reports, such as CE marking in the European Union. Also, IGC help meet customer’s goals and market needs in an effective and efficient ways by providing various overseas certification services, including EAC, GOST, and FDA, to meet the needs of each country to enter the market.
        </p> 
    </div>
    
	<section class="partner_type2">
			
		<!-----1line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_028-3.php">
			    <h3>Medical Device</h3>
				<img src="../image/clinical_03medicaldivices_01.jpg" alt="Medical Device image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_028-3.php"><span><div  class="arrow test_4"></div>Medical Device Test</span></a></li>
				</ul>
			</div>
		</div>	
			
        <div class="con_area">
			<div class="thumb">
              <a href="./igc_026-1.php">
			    <h3>Electric electron</h3>
				<img src="../image/clinical_01electrenic_01.jpg" alt="Electric electron image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_026-1.php"><span><div  class="arrow test_4"></div>Electrical Safety</span></a></li>
				</ul>
			</div>
		</div>
  
  		<div class="con_area">
			<div class="thumb">
              <a href="./igc_027-2.php">
			    <h3>Machinary</h3>
				<img src="../image/clinical_02mechine_01.jpg" alt="Machinary image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_027-2.php"><span><div  class="arrow test_4"></div>Machinary Safety</span></a></li>
				</ul>
			</div>
		</div>

		<!-----2line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_029.php">
			    <h3>Chemical Analysis</h3>
				<img src="../image/clinical_04food&chemical_01.jpg" alt="Chemical Analysis image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_029.php"><span><div  class="arrow test_4"></div>Food Nutrition Analysis</span></a></li>
				</ul>
			</div>
		</div>

		<div class="con_area">
			<div class="thumb">
              <a href="./igc_036.php">
			    <h3>Construction Material</h3>
				<img src="../image/clinical_06constructionmaterials_01.jpg" alt="Construction Material image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_036.php"><span><div  class="arrow test_4"></div>Construction Material Test</span></a></li>
				</ul>
			</div>
		</div>

        <div class="con_area">
			<div class="thumb">
              <a href="./igc_030-4.php">
			    <h3>Biological Test</h3>
				<img src="../image/clinical_05foodnutrition_01.jpg" alt="image">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_030-4.php"><span><div  class="arrow test_4"></div>Food Biological Test</span></a></li>
					<li><a href="./igc_031-5.php"><span><div  class="arrow test_4"></div>Sanitation Test</span></a></li>
				</ul>
			</div>
		</div>
    </section>
		
		<div class="img_area">
		    <img src="./images/mainLogo_certificate-of-accreditation01.jpg" alt="(주)아이지씨인증원 국제공인 이미지">
		</div>

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
          	<li><p><em><strong>04</strong></em><span>Providing Technical Support Services for Testing and Certification</span></p></li>
          </ul>
        </div>
       </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>