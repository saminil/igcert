<?php
	include_once('./_common.php');
$g5['title'] = '심사원 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #1F88E5 }/* 상세페이지 포인트 컬러 */
	.content_wrap { width: 100%;max-width: 1200px;margin: 0 auto;font-size: 1rem;font-weight: 400;line-height: 1.6 }/* 컨텐츠 중간 그리드 지정 */
    
    /* ============= 컨텐츠 타이틀 영역 ============= */
    
	.page_title { width: 100%; margin-bottom: 70px;text-align: center }
    .page_title h1 { padding: 10px 0;font-size: 1.5rem;color: #fff;background: #009999 }/* 컨텐츠 타이틀 */
	.page_title h2 { padding: 20px 0 }/* 컨텐츠 서브 타이틀 */
	.page_title h2 a { font-size: 1.2rem;color: #023059 }
    
    /* ============= 컨텐츠 영역 ============= */
    
    /* 규격 목록 부분 */
	.partner_type2 { clear: both; display: grid;grid-template-columns: 1fr 1fr 1fr;grid-gap: 1.6rem}
	.partner_type2 .con_area { margin: 0 0 20px 0;padding: 0 0 50px 0;border-bottom: 1px solid #eee;overflow: hidden }/* 각 컨텐츠 여백 조정 */
    
    /* 규격 목록 썸네일 부분 */
    .partner_type2 .con_area .thumb a { display: block }
	.partner_type2 .con_area .thumb h3 { width: 100%;position: relative;padding: 10px;background: #009999;color: #fff;text-align: center }/* 규격 목록 타이틀 */
    
    /* 규격 목록 리스트 부분 */
	.partner_type2 .con_area .txtArea { padding-left: 40px }
    .partner_type2 .con_area .txtArea ul li { margin-top: 15px }/* 규격 목록 리스트 상하 간격 */
    .partner_type2 .con_area .txtArea ul li a { color: #009999;font-weight: 500 }
    
    /* 규격 목록 리스트 좌측 화살표 기호 부분 */
    .partner_type2 .con_area .txtArea ul li .arrow { display: inline-block;position:relative }
    .partner_type2 .con_area .txtArea ul li .arrow::after { content: '';width: 0;height: 0;position: absolute;top: -15px;left: -20px;border-width:10px 10px;border-style:solid;border-color:transparent transparent transparent #009999 }

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
        .partner_type2 .con_area:nth-child(3n) { margin: 0 }/* 해상도 640px에서 조정한 값 재변경 (디폴트) */
        
        
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */
        
    }
    
    /* ============= 상세페이지 반응형 종료 ============= */
    
    
</style>





<div class="content_wrap">
	<section class="page_title">
		<h1 class="sub_tit"><span>심사원</span>&nbsp;인증서비스 목록</h1>
	</section>
	<section class="partner_type2">
				
		<!-----1line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_104_ISO9001.php">
			    <h3>Part 1</h3>
				<img src="../image/audits_01.jpg" alt="심사원 인증 목록">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_104_ISO9001.php"><span><div  class="arrow test_4"></div>ISO 9001</span></a></li>
					<li><a href="./igc_105_ISO14001.php"><span><div  class="arrow test_4"></div>ISO 14001</span></a></li>
					<li><a href="./igc_106_ISO13485.php"><span><div  class="arrow test_4"></div>ISO 13485</span></a></li>
					<li><a href="./igc_107_ISO45001.php"><span><div  class="arrow test_4"></div>ISO 45001</span></a></li>
					
				</ul>
			</div>
		</div>	
				
        <div class="con_area">
			<div class="thumb">
              <a href="./igc_108_ISOIEC22000-1.php">
			    <h3>Part 2</h3>
				<img src="../image/audits_02.jpg" alt="심사원인증 목록">
              </a>
			</div>
			<div class="txtArea">
				<ul>
				    <li><a href="./igc_108_ISOIEC22000-1.php"><span><div  class="arrow test_4"></div>ISO/IEC 20000-1</span></a></li>
					<li><a href="./igc_109_ISO27001.php"><span><div  class="arrow test_4"></div>ISO/IEC 27001</span></a></li>
					<li><a href="./igc_110_ISO22716.php"><span><div  class="arrow test_4"></div>ISO 22716</span></a></li>
					<li><a href="./igc_111_ISO50001.php"><span><div  class="arrow test_4"></div>ISO 50001</span></a></li>
				</ul>
			</div>
		</div>
  
  		<div class="con_area">
			<div class="thumb">
              <a href="./igc_112_ISO22000.php">
			    <h3>Part 3</h3>
				<img src="../image/audits_03.jpg" alt="심사원 인증 목록">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_112_ISO22000.php"><span><div  class="arrow test_4"></div>ISO 22000</span></a></li>
					<li><a href="./igc_113_FSSC22000.php"><span><div  class="arrow test_4"></div>FSSC 22000</span></a></li>
					<li><a href="./igc_114_FDAFSMA.php"><span><div  class="arrow test_4"></div>FDA FSMA</span></a></li>
					<li><a href="./igc_115_PCQI.php"><span><div  class="arrow test_4"></div>PCQI</span></a></li>
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
</div><!--------class="content_wrap 종료 -------------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>