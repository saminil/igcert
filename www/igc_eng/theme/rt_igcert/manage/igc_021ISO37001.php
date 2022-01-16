<?php
	include_once('./_common.php');
$g5['title'] = 'Anti‐bribery';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #1F88E5 }/* 상세페이지 포인트 컬러 */
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
    .list_st li .bullet { content: '';position: absolute;display: inline-block;width: 5px;height: 5px;background: #222;border-radius: 50%;top: 10px;left: 0}/* 리스트 스타일 2 */

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
        <h1 class="tit_num"><span>ISO</span> 37001</h1>
		<h2 class="tit_cer fc_pointer">Anti‐bribery management systems</h2>		
		<p class="outline">
            Anti-bribery management system is an international standard published in October 2016 by the International Organization for Standardization (ISO) and contains specific implementation measures that companies in each country must implement to anti‐bribery.<br><br>
            ISO 37001 is a requirement for the anti-bribery that can occur in all areas of an organization's activities. Through the establishment of an anti-bribery management system, we can bring out a positive awareness of corruption worldwide. In addition, it can be expected to increase trust by reducing the risk of legal violations among stakeholders.
		</p>

		<ul class="content">
			<li><!-- content 01 -->
				<dl>
					<dt class="img_area">
						<img src="./image/ISO15378-2017_000.jpg" alt="ISO 37001:2016 Requirements">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">ISO 37001:2016 Requirements</h3>
						<p class="con_txt">
                            ISO 37001:2016 has a high level structure applied to standards such as ISO 9001:2015, and can be managed by integrating with other standards. In addition, the clarity and applicability of the standard is improved through the use of consistent structure, definition and terms.
                        </p>
                        <ul class="list_st">
                            <li><span class="number">1. </span>Scope</li>
                            <li><span class="number">2. </span>Normative References</li>
                            <li><span class="number">3. </span>Terms and definitions</li>
                            <li><span class="number">4. </span>Context of the Organization</li>
                            <li><span class="number">5. </span>Leadership</li>
                            <li><span class="number">6. </span>Planning</li>
                            <li><span class="number">7. </span>Support</li>
                            <li><span class="number">8. </span>Operation</li>
                            <li><span class="number">9. </span>Performance Evaluation</li>
                            <li><span class="number">10. </span>Improvement</li>
                        </ul>
					</dd>
				</dl>
			</li>
			
			<li><!-- content 02 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_37001_02.jpg" alt="The importance of ISO 37001">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">The importance of ISO 37001</h3>
						<p style="text-align:justify">
                            The International Anti-Corruption Conference has been held biennial since it was first held in Washington in 1983 due to the growing a need for anti-bribery experiences, exchanging information and international cooperation.<br><br>
                            As the world's largest international anti-bribery conference, the 19th conference in 2020 will be held in Korea.<br><br>
                            Starting from this, it is expected that the domestic government, public institutions, and various industrial sectors will increase the demand for certification such as anti-bribery, compliance, and social responsibility.
                        </p>
					</dd>
				</dl>			
			</li>
			
			<li><!-- content 03 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_14155_03.jpg" alt="Estimated Effectiveness of ISO 37001">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">Estimated Effectiveness of ISO 37001</h3>
						<ul class="list_st">
					        <li><span class="number">1. </span>Reduction of risks due to violations of laws and regulations due to bribery at the individual and organizational.</li>
					        <li><span class="number">2. </span>Increasing client's trust about organization and business activities</li>
					        <li><span class="number">3. </span>Enhancement of cooperation based on trust from organizations and institutions in partnership.</li>
					        <li><span class="number">4. </span>Sharing anti-bribery awareness with employees and suppliers</li>
					        <li><span class="number">5. </span>Satisfying the anti-bribery system strengthened in various tenders including public institutions</li>
                        </ul>
					</dd>
				</dl>			
			</li>

			<li><!-- content 04 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_37001_03.jpg" alt="IGC’s Competency">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">IGC’s Competency</h3>
						<ul class="list_st">
                            <li>
                                <span class="bullet"></span>The auditors of IGC are contributing to the continuous development of customers by accurately assessing the suitability of the management system through the technology and expertise accumulated over the years.
                            </li>
                            <li>
                                <span class="bullet"></span>As a trusted global leader in management system certification, IGC offers ISO 37001 certification as well as environmental management and other management systems.
                            </li>
                            <li>
                                <span class="bullet"></span>IGC has up-to-date knowledge of a wide range of specific scopes and legal requirements in major markets around the world, and provides the knowledge and services to support your entire global operation.
                            </li>
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
    <!---------(주)아이지씨인증원 사업영역 종료 ------>
</div>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>