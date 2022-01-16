 <?php
	include_once('./_common.php');
$g5['title'] = '제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #1F88E5 }/* 상세페이지 포인트 컬러 */
	.content_wrap { width: 100%;max-width: 1200px;margin: 0 auto;font-size: 1rem;font-weight: 400;line-height: 1.6 }/* 컨텐츠 중간 그리드 지정 */
    
    /* ============= 컨텐츠 타이틀 영역 ============= */
    
	.page_title { width: 100%; margin-bottom: 70px;text-align: center }
    .page_title h1 { padding: 10px 0;font-size: 1.5rem;color: #fff;background: #404953 }/* 컨텐츠 타이틀 */
	.page_title h2 { padding: 20px 0 }/* 컨텐츠 서브 타이틀 */
	.page_title h2 a { font-size: 1.2rem;color: #023059 }
    
    /* ============= 컨텐츠 영역 ============= */
    
    /* 규격 목록 부분 */
	.partner_type2 { clear: both; display: grid;grid-template-columns: 1fr 1fr 1fr;grid-gap: 1.6rem}
	.partner_type2 .con_area { margin: 0 0 20px 0;padding: 0 0 50px 0;border-bottom: 1px solid #eee;overflow: hidden }/* 각 컨텐츠 여백 조정 */
    
    /* 규격 목록 썸네일 부분 */
    .partner_type2 .con_area .thumb a { display: block }
	.partner_type2 .con_area .thumb h3 { width: 100%;position: relative;padding: 10px;background: #404953;color: #fff;text-align: center }/* 규격 목록 타이틀 */
    
    /* 규격 목록 리스트 부분 */
	.partner_type2 .con_area .txtArea { padding-left: 40px }
    .partner_type2 .con_area .txtArea ul li { margin-top: 15px }/* 규격 목록 리스트 상하 간격 */
    .partner_type2 .con_area .txtArea ul li a { color: #404953;font-weight: 500 }
    
    /* 규격 목록 리스트 좌측 화살표 기호 부분 */
    .partner_type2 .con_area .txtArea ul li .arrow { display: inline-block;position:relative }
    .partner_type2 .con_area .txtArea ul li .arrow::after { content: '';width: 0;height: 0;position: absolute;top: -15px;left: -20px;border-width:10px 10px;border-style:solid;border-color:transparent transparent transparent #404953 }

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
        
    }
    
    
    @media (min-width: 360px) and (max-device-width: 414px) {
        
        .partner_type2 { grid-template-columns: 1fr }
        
        .partner_type2 .con_area { width: 100%;margin: 0;border: none }/* 규격 목록 가로비율 100%, 컨텐츠 세로정렬 */
        .partner_type2 .con_area:nth-child(3n) { margin: 0 }
        
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */
        
    }
    
    /* ============= 상세페이지 반응형 종료 ============= */
    
    
</style>




<div class="content_wrap">
	<section class="page_title">
		<h1 class="sub_tit"><span>제품인증</span>&nbsp; / 서비스 목록</h1>
		<h2 class="sub_txt" ><a href="/theme/rt_igcert/igc/process02_product.php">제품 인증절차 미리보기 Click!</a></h2>
	</section>	
	<section class="partner_type2">
				
		<!-----1line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_069_CEMDD.php">
			    <h3>유럽제품 인증</h3>
				<img src="../image/products_01.jpg" alt="유럽제품 인증">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_069_CEMDD.php"><span><div class="arrow test_4"></div>CE MDD</span></a></li>
					<li><a href="./igc_070_CEMDR.php"><span><div class="arrow test_4"></div>CE MDR</span></a></li>
					<li><a href="./igc_071_PMS.php"><span><div class="arrow test_4"></div>임상평가</span></a></li>
					<li><a href="./igc_072_CE-IVD-IVDR.php"><span><div class="arrow test_4"></div>CE IVD/IVDR</span></a></li>
					<li><a href="./igc_073_CE-LVD-EMC.php"><span><div class="arrow test_4"></div>CE LVD/EMC</span></a></li>
					<li><a href="./igc_074_CE-Machinery.php"><span><div class="arrow test_4"></div>CE Machinery</span></a></li>
					<li><a href="./igc_075_PED.php"><span><div class="arrow test_4"></div>CE PED</span></a></li>
					<li><a href="./igc_076_SPVD.php"><span><div class="arrow test_4"></div>CE SPVD</span></a></li>
					<li><a href="./igc_077_Hot-water-boiler.php"><span><div class="arrow test_4"></div>Hot-water boiler</span></a></li>
					<li><a href="./igc_078_Gas-Appliance.php"><span><div class="arrow test_4"></div>Gas Appliance</span></a></li>
				</ul>
			</div>
		</div>	
			
        <div class="con_area">
			<div class="thumb">
              <a href="./igc_079_EAC-Certification.php">
			    <h3>유라시아 제품인증</h3>
				<img src="../image/products_02.jpg" alt="유라시아 제품인증">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_079_EAC-Certification.php"><span><div class="arrow test_4"></div>EAC 인증</span></a></li>
					<li><a href="./igc_080_01.php"><span><div class="arrow test_4"></div>의료기기</span></a></li>
					<li><a href="./igc_081_01.php"><span><div class="arrow test_4"></div>식품</span></a></li>
					<li><a href="./igc_082_01.php"><span><div class="arrow test_4"></div>화장품</span></a></li>
					<li><a href="./igc_083_01.php"><span><div class="arrow test_4"></div>의약품</span></a></li>
				</ul>
			</div>
		</div>
  
  		<div class="con_area">
			<div class="thumb">
              <a href="igc_084_GOST-R.php">
			    <h3>러시아 제품인증</h3>
				<img src="../image/products_03.jpg" alt="러시아 제품인증">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_084_GOST-R.php"><span><div class="arrow test_4"></div>GOST-R</span></a></li>
					<li><a href="./igc_085_01.php"><span><div class="arrow test_4"></div>의료기기 러시아 등록</span></a></li>
				</ul>
			</div>
		</div>

		<!-----2line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_086_FDA.php">
			    <h3>미주 제품인증</h3>
				<img src="../image/products_04.jpg" alt="미주 제품인증">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_086_FDA.php"><span><div class="arrow test_4"></div>FDA</span></a></li>
					<li><a href="./igc_087_01.php"><span><div class="arrow test_4"></div>의료기기</span></a></li>
					<li><a href="./igc_088_01.php"><span><div class="arrow test_4"></div>전자 및 방사선 장치</span></a></li>
					<li><a href="./igc_089_01.php"><span><div class="arrow test_4"></div>의약품</span></a></li>
					<li><a href="./igc_090_01.php"><span><div class="arrow test_4"></div>식음료품</span></a></li>
					<li><a href="./igc_091_01.php"><span><div class="arrow test_4"></div>건강 보조 식품</span></a></li>
					<li><a href="./igc_092_01.php"><span><div class="arrow test_4"></div>화장품</span></a></li>
				</ul>
			</div>
		</div>

		<div class="con_area">
			<div class="thumb">
              <a href="./igc_093_CFDA.php">
			    <h3>중국 제품인증</h3>
				<img src="../image/products_05.jpg" alt="중국 제품인증">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_093_CFDA.php"><span><div class="arrow test_4"></div>CFDA</span></a></li>
					<li><a href="./igc_094_01.php"><span><div class="arrow test_4"></div>식품 위생 등록</span></a></li>
				</ul>
			</div>
		</div>

		
        <div class="con_area">
			<div class="thumb">
              <a href="./igc_095_01.php">
			    <h3>동남아시아 제품인증</h3>
				<img src="../image/products_06.jpg" alt="동남아시아 제품인증">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_095_01.php"><span><div class="arrow test_4"></div>태국 의료기기 등록</span></a></li>
					<li><a href="./igc_096_01.php"><span><div class="arrow test_4"></div>대만 의료기기 등록</span></a></li>
				</ul>
			</div>
		</div>

        <!-----3line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_097_VeganSociety.php">
			    <h3>Vegan 인증</h3>
				<img src="../image/products_07.jpg" alt="Vegan 인증">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_097_VeganSociety.php"><span><div  class="arrow test_4"></div>Vegan Society 소개</span></a></li>
					<li><a href="./igc_098_01.php"><span><div class="arrow test_4"></div>식품 &amp; Restaurant</span></a></li>
					<li><a href="./igc_099_01.php"><span><div class="arrow test_4"></div>화장품</span></a></li>
				</ul>
			</div>
		</div>
 
 		<div class="con_area">
			<div class="thumb">
              <a href="./igc_101_HALAL.php">
			    <h3>HALAL 인증</h3>
				<img src="../image/products_08.jpg" alt="HALAL 인증">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_101_HALAL.php"><span><div class="arrow test_4"></div>HALAL</span></a></li>
				</ul>
			</div>
		</div>
		
 		<div class="con_area">
			<div class="thumb">
              <a href="./igc_102_EWG.php">
			    <h3>화장품 인증</h3>
				<img src="../image/products_09.jpg" alt="화장품 인증">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_102_EWG.php"><span><div class="arrow test_4"></div>EWG</span></a></li>
					<li><a href="./igc_103_CPNP.php"><span><div class="arrow test_4"></div>CPNP</span></a></li>
				</ul>
			</div>
		</div>
		
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_078_kc.php">
			    <h3>한국 KC 인증</h3>
				<img src="../image/products_09_02.jpg" alt="KC 인증,이미지">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_078_kc.php"><span><div class="arrow test_4"></div>안전/전자파 인증</span></a></li>
				</ul>
			</div>
		</div>
      </section>
		
	<!----(주)아이지씨인증원 사업영역 시작-------->
	   <section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
          <ul>
          	<li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
          	<li><p><em><strong>02</strong></em><span>시험</span></p></li>
          	<li><p><em><strong>03</strong></em><span>전문인력 양성 교육</span></p></li>
          	<li><p><em><strong>04</strong></em><span>제품 인증</span></p></li>
          	<li><p><em><strong>05</strong></em><span>심사원 인증</span></p></li>
          	<li><p><em><strong>06</strong></em><span>연수기관 지정</span></p></li>
          </ul>
		</div>
       </section>
       <!---------(주)아이지씨인증원 사업영역 종료 ------>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>