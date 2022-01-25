<?php
	include_once('./_common.php');
$g5['title'] = 'Business Continuity';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
        <h1 class="tit_num"><span>ISO</span> 22301</h1>
		<h2 class="tit_cer fc_pointer">Business Continuity Management System</h2>		
		<p class="outline">
            ISO 22301 is a business continuity management system, which is a documented management system for organizations to defend against, reduce the likelihood of occurrence, prepare, respond, and recover from disruptive accidents such as theft, natural disasters, and diseases as well as market risks. The requirements for implementing, operating, monitoring and continuous improvement activities of this system are specified.<br><br>
            The business continuity management system can be applied to all industries and activities, and provides a framework to understand the impact of an organization's various threats, and build effective response and organizational resilience. This standard provides guidance on business continuity for continuing business operations after disruption, and seeks to minimize the impact on products and services by ensuring that products and services are delivered and restored immediately in the event of disruption.<br><br>
            ISO 22301:2012, issued in 2012, was revised as of October 31, 2019 and is valid until October 20, 2022 and undergoes a three-year transition grace period. From May 1, 2021, audits of all business continuity management systems will be subject to the ISO 22301:2019 version. The 2012 version can only be audited until April 30, 2021.
		</p>
		
		<ul class="content">
			<li><!-- content 01 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_22301_01.jpg" alt="ISO 22301:2019 Requirements">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">ISO 22301:2019 Requirements</h3>
						<p class="con_txt">
                            This International Standard identifies products and services that have a significant impact on the existence of an organization and helps to establish what response is required in organization disruption. In addition, it also provides a function to respond appropriately in case of business disruption.
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
						<img src="./image/iso_22301_02.jpg" alt="The importance of ISO 22301">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">The importance of ISO 22301</h3>
						<p class="con_txt">
                            ISO 22301 is suitable for global enterprises that operate in hazardous or complex environments or where the ability to get things done quickly is a priority.<br><br>
                            The aim of this specification is to protect against a broad range of potential threats and disruption, including :
                        </p>
                        <ul class="list_st">
					        <li><span class="number">1. </span>Technology failure</li>
					        <li><span class="number">2. </span>Sudden loss of key resources</li>
					        <li><span class="number">3. </span>Natural disaster</li>
					        <li><span class="number">4. </span>Terrorist attack</li>
					        <li><span class="number">5. </span>Other emergency situations</li>
                        </ul>
					</dd>
				</dl>			
			</li>
			
			<li><!-- content 03 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_22301_03.jpg" alt="ISO 22301 Estimated Effectiveness">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">ISO 22301 Estimated Effectiveness</h3>
						
						<div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">1. </span>Customer Satisfaction
                            </span>
                            <p>
                                Give your customers the confidence that your service is reliable and always reliant on.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">2. </span>Business resilience
                            </span>
                            <p>
                                Efficient management of crises, emergency preparedness and contingency plans avoids downtime and financial losses.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">3. </span>Compliance
                            </span>
                            <p>
                                Understand the impact of legal/regulatory requirements on you and your clients.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">4. </span>Improved risk management
                            </span>
                            <p>
                                Manage risk and recover quickly from crisis situations and protect your reputation.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">5. </span>Proof of Business Credentials
                            </span>
                            <p>
                                Independent verification of a certified line of business enhances your brand.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">6. </span>More Business Procurement Ability
                            </span>
                            <p>
                                Procurement specifications often require certification as a condition of supply, so the door opens with certification.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">7. </span>International Recognition
                            </span>
                            <p>
                                You will be recognized and evaluated worldwide.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk" style="display:inline-block">8.</span>
                            <span>
                                Acquiring KS A ISO 22301 domestic certification to secure international public confidence and enhance internal and external image
                            </span>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk" style="display:inline-block">9.</span>
                            <span>
                                BCMS system establishment to spread leading disaster safety management system and culture establishment
                            </span>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk" style="display:inline-block">10.</span>
                            <span>
                                Increased corporate value by protecting shareholder value and meeting stakeholder expectations
                            </span>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk" style="display:inline-block">11.</span>
                            <span>
                                Preoccupy the initial market and expand the base through certification in the future
                            </span>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk" style="display:inline-block">12.</span>
                            <span>
                                Securing efficient response capability in case of disaster
                            </span>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk" style="display:inline-block">13.</span>
                            <span>
                                Securing continuity of the organization's management system from disaster
                            </span>
                        </div>
					</dd>
				</dl>			
			</li>

			<li><!-- content 04 -->
				<dl>
					<dt class="img_area">
						<img src="./image/ISO_9001_03.jpg" alt="IGC’s Competency">
					</dt>
					<dd class="txt_area">
				        <h3 class="con_tit">IGC’s Competency</h3>
				        <p style="text-align: justify">
                            IGC provides certification services for business continuity management systems.<br><br>
                            The auditors of IGC are contributing to the continuous development of customers by accurately assessing the suitability of the management system through the technology and expertise accumulated over the years.<br><br>
                            As a trusted global leader in management system certification, IGC has been recognized for various standards by IAS, an accreditation body in the United States, and provides certification services.<br><br>
                            IGC has up-to-date knowledge of a wide range of specific scopes and legal requirements in major markets around the world, and provides the knowledge and services to support your entire global operation.
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