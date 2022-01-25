<?php
	include_once('./_common.php');
$g5['title'] = 'Cosmetics';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .content li .txt_area .con_txt { text-align: justify;margin: 0 0 50px }/* 텍스트 영역 내용 스타일 */
    .content li .txt_area .con_txt_2 { margin: 0 0 30px }/* 텍스트 영역 내용 스타일 2 */
    .content li .txt_area .con_txt_2:last-child { margin: 0 }
    
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
		<h1 class="tit_num"><span>ISO</span> 22716 </h1>
		<h2 class="tit_cer fc_pointer">Good Manufacturing Practices</h2>		
		<p class="outline">
            ISO 22716 aims to provide a guide to Good Manufacturing Practices (GMP) for cosmetic products. These guidelines have been prepared taking into account the specific needs of the cosmetic sector in the manufacturing industry.<br><br>
            ISO 22716 provides organized and practical advice on the management of factors affecting product quality.<br><br>
            GMP consists of practical development of quality assurance through in-factory activities based on correct scientific judgment and risk assessment.
        </p>

		<ul class="content">
			<li><!-- content 01 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_22716_01.jpg" alt="ISO 22716:2007 Requirements">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">ISO 22716:2007 Requirements</h3>
						<ul class="list_st">
					        <li><span class="number">1. </span>Scope</li>
					        <li><span class="number">2. </span>Terms and definitions</li>
					        <li><span class="number">3. </span>Personnel</li>
					        <li><span class="number">4. </span>Premises</li>
					        <li><span class="number">5. </span>Equipment</li>
					        <li><span class="number">6. </span>Raw materials and packaging materials</li>
					        <li><span class="number">7. </span>Production</li>
					        <li><span class="number">8. </span>Finished products</li>
					        <li><span class="number">9. </span>Quality control laboratory</li>
					        <li><span class="number">10. </span>Treatment of product that is out of specification</li>
					        <li><span class="number">11. </span>Wastes</li>
					        <li><span class="number">12. </span>Subcontracting</li>
					        <li><span class="number">13. </span>Deviations</li>
					        <li><span class="number">14. </span>Complaints and recalls</li>
					        <li><span class="number">15. </span>Change control</li>
					        <li><span class="number">16. </span>Internal audit</li>
					        <li><span class="number">17. </span>Documentation</li>
                        </ul>
					</dd>
				</dl>
			</li>
			
			<li><!-- content 02 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_22716_02.jpg" alt="The importance of ISO 22716">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">The importance of ISO 22716</h3>
						<p class="con_txt">
                            ISO 22716 has become a mandatory requirement for cosmetics exports. In particular, Europe's new cosmetics EU regulation requires cosmetics manufacturers to comply with a harmonized standard, which is ISO 22716.<br><br>
                            Using ISO 22716 as a business tool offers the following benefits :
                        </p>
                        <div class="con_txt_2">
                            <p class="point_blk"><span class="bullet"></span>&#10020; Trends and trends in certification</p>
                            <table class="type01">
                                <tbody>
                                    <tr>
                                        <th width="30%" scope="row">
                                            <p>Country</p>
                                        </th>
                                        <td width="70%" class="none">
                                            <p>Trends and trends in certification</p>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <th width="30%" scope="row">
                                            <p>Europe</p>
                                        </th>
                                        <td width="70%" class="none">
                                            <p>Cosmetic manufacturers must apply ISO 22716</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="30%" scope="row">
                                            <p>USA</p>
                                        </th>
                                        <td width="70%" class="none">
                                            <p>Consideration of ISO22716 and revision of current FDA guidelines</p>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <th width="30%" scope="row">
                                            <p>Canada</p>
                                        </th>
                                        <td width="70%" class="none">
                                            <p>Adopted as voluntary cosmetic GMP directive</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="30%" scope="row">
                                            <p>Japan</p>
                                        </th>
                                        <td width="70%" class="none">
                                            <p>Adoption of ISO 22716 as a voluntary directive</p>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <th width="30%" scope="row">
                                            <p>Republic of Korea</p>
                                        </th>
                                        <td width="70%" class="none">
                                            <p>Promoting mandatory CGMP certification</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
					</dd>
				</dl>			
			</li>
			
			<li><!-- content 03 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_22716_03.jpg" alt="ISO 22716 Estimated Effectiveness">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">ISO 22716 Estimated Effectiveness</h3>
						<div class="con_txt_2">
                            <ul class="list_st">
                                <span class="point_blk">&#10020; Organization</span>
                                <li>
                                    <span class="number">1. </span>Building trust through trusted brands
                                </li>
                                <li>
                                    <span class="number">2. </span>Products conforming to quality and purity
                                </li>
                            </ul>
                        </div>
                        <div class="con_txt_2">
                            <ul class="list_st">
                                <span class="point_blk">&#10020; Seller</span>
                                <li>
                                    <span class="number">1. </span>Meets standards such as GMP requirements, quality, and safety
                                </li>
                                <li>
                                    <span class="number">2. </span>Batch consistency guarantees process reproducibility/stability
                                </li>
                                <li>
                                    <span class="number">3. </span>Minimize the risk of contamination and errors
                                </li>
                                <li>
                                    <span class="number">4. </span>Protection of brand &amp; reputation
                                </li>
                            </ul>
                        </div>
					</dd>
				</dl>	
			</li>
			
			<li><!-- content 04 -->
				<dl>
					<dt class="img_area">
						<img src="./image/ISO_9001_03.jpg">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">IGC’s Competency</h3>
						<ul class="list_st">
                            <li>
                                <span class="bullet"></span>IGC supports organizations worldwide to achieve and achieve ISO 22716 certification.
                            </li>
                            <li>
                                <span class="bullet"></span>The IGC's experts is helping the organization with ISO 22716 instructions to minimize the inherent risk of production lines throughout the process through field audit approval.
                            </li>
                            <li>
                                <span class="bullet"></span>In addition to accreditation, IGC offers regular feedback, the most effective way to improve existential outcomes and empower your organization.
                            </li>
                            <li>
                                <span class="bullet"></span>This enables organizations to receive recognition from customers for their commitment and commitment to the highest level of quality.
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