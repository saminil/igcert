<?php
	include_once('./_common.php');
$g5['title'] = 'Test and Calibration';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #B3AA00 }/* 상세페이지 포인트 컬러 */
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
    .content li .txt_area .con_txt { text-align: justify;margin: 0 0 50px }/* 텍스트 영역 내용 */
    
    /* 리스트 스타일 생성 */
    .list_st li { position: relative;padding: 0 0 4px 30px }
    .list_st li .number { position: absolute;display: inline-block;width: 5px;height: 5px;top: 0;left: 0}/* 리스트 스타일 1 */

    /* ============= (주)아이지씨인증원 사업영역 부분 ============= */
    
	.partner_type2 .con_arrow { padding: 20px 0 }/* 사업영역 타이틀 */
	.partner_type2 .con_arrow p { position: relative;padding-left: 30px;font-size: 1.75rem }
	.partner_type2 .con_arrow p::before { content: "";display: inline-block;width: 3px;height: 23px;position: absolute;top: 4px;left: 10px;background-color: #1F88E5;transform:rotate(45deg) }/* 사업영역 타이틀 arrow */
    
	.partner_type2 .con_box { width: 100%;padding: 20px 0;border-top: 1px solid #000;border-bottom: 1px solid #000 }/* 사업영역 리스트 부분 */
	.partner_type2 .con_box::after { content: "";display: block;clear: both }
	.partner_type2 .con_box ul li { float: left;width: 50%;margin: 10px 0 }/* 리스트 2배수 가로배열 */
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
		<h1 class="tit_num">ISO/IEC 17025 Professional Training</h1>
		<h2 class="tit_cer fc_pointer">General requirements for the competence of testing and calibration Laboratories training Course</h2>

		<ul class="content">
            <li><!-- content 01 -->
				<dl>
					<dt class="img_area">
						<img src="./images/iso-iec1725-01.jpg" alt="ISO/IEC 17025:2017 Outline">
					</dt>
					<dd class="txt_area">
                        <h3 class="con_tit">ISO/IEC 17025:2017 Outline</h3>
                        <p style="text-align:justify">
                            ISO/IEC 17025 is an international standard for the general requirements for the competence of a laboratory or calibration laboratory (general requirements for the competence of test and calibration laboratories) established by the International Organization for Standardization.<br><br>
                            The ISO/IEC 17025:2017 operational practice course is a structure that can be applied to practice, understanding the requirements of the accreditation criteria of testing and calibration institutions.<br><br>
                            The goal is to fulfill the educational requirements of test and correctional institution personnel through practical training that includes explanations and case analysis including kaldo exams, subacute guidelines, and eligibility criteria.
                        </p>
					</dd>
				</dl>
			</li>
			
			<li><!-- content 02 -->
				<dl>
					<dt class="img_area">
						<img src="./images/iso-iec1725-05.jpg" alt="The importance of ISO/IEC 17025:2017 training">
					</dt>
					<dd class="txt_area">
                        <h3 class="con_tit">The importance of ISO/IEC 17025:2017 training</h3>
                        <p style="text-align:justify">
                            It is possible to write the accreditation mark on certificates issued by ISO/IEC 17025 accredited testing laboratories/calibrators, and it is possible to increase reliability as an internationally accepted certificate.<br><br>
                            Businesses and industries need qualified professionals. The purpose of the ISO/IEC 17025 training course is to provide accreditation agencies, businesses and industry sectors with the confidence that individuals trained through this program are eligible.<br><br>
                            As part of the training process, we will conduct assessments against requirements that reflect key competencies, knowledge and experience that define competence. The training program is based on the key standards for screening.
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
                <li><p><em><strong>01</strong></em><span>Quality</span></p></li>
                <li><p><em><strong>02</strong></em><span>Environment</span></p></li>
                <li><p><em><strong>03</strong></em><span>Health and Safety</span></p></li>
                <li><p><em><strong>04</strong></em><span>Medical Device</span></p></li>
                <li><p><em><strong>05</strong></em><span>Food</span></p></li>
                <li><p><em><strong>06</strong></em><span>Information Security</span></p></li>
                <li><p><em><strong>07</strong></em><span>Risk Management</span></p></li>
                <li><p><em><strong>08</strong></em><span>Traffic &amp; Energy</span></p></li>
                <li><p><em><strong>09</strong></em><span>Continuity &amp; Restoring force</span></p></li>
                <li><p><em><strong>10</strong></em><span>Business management</span></p></li>
                <li><p><em><strong>11</strong></em><span>Social accountability &amp; Bribery management</span></p></li>
                <li><p><em><strong>12</strong></em><span>Testing &amp; Calibration</span></p></li>
            </ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	

</div>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>