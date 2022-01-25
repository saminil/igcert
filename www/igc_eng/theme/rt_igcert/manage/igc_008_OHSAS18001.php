<?php
	include_once('./_common.php');
$g5['title'] = 'Health and Safety ';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #1F88E5 }/* 상세페이지 포인트 컬러 */
    .point_blk { display: block;color: #111;font-weight: 500;margin: 0 0 10px }/* 상세페이지 폰트스타일 1 */
	.content_wrap { width: 100%;max-width: 1200px;margin: 0 auto;font-size: 1rem;font-weight: 400;line-height: 1.6 }/* 컨텐츠 중간 그리드 지정 */
    .content_wrap .business_type5 { margin: 0 0 100px }
    
    /* ============= 탭메뉴 영역 ============= */
    
    .tab01 { margin: 0 0 45px }
    .tab01 ul { display: inline-block;text-align: center }
    .tab01 ul li { float: left;margin: 0 0 10px }
    .tab01 ul li a { font-size: 1rem;font-weight: 300;color: #999;background: #f0f0f0;margin: 0 5px;padding: 12px 25px;border: 0 }/* 탭메뉴 버튼 스타일 */
    
    .tab01 ul li:hover a { background: #ddd }/* 마우스오버시 버튼 스타일 */
    
    .tab01 ul li.on a { color: #fff;background: dodgerblue }/* active 상태의 버튼 스타일 */
    
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
	<!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">OHSAS 18001</a></li>
			<li><a href="javascript:;">ISO 45001</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.07 탭컨텐츠 영역 +++-->
	
	<div class="tab_con">
		<!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
		<article style="display:block">
			<section class="business_type5" class="area">
				<h1 class="tit_num"><span>OHSAS</span> 18001</h1>
				<h2 class="tit_cer fc_pointer">
				    Occupational Health and Safety Assessment Series
				</h2>		
				<p class="outline">
					To significantly reduce safety-related risks within an organization, OHSAS 18001 certification is appropriate for all enterprises. The safety and health management system is recognized as the most well-known industrial safety management system. This certification can prove that your employees' health and safety are your priorities.<br> <br>
					With the adoption of the Safety and Health Management System as an International Standard (ISO 45001), the existing OHSAS 18001 will become ineffective after the certification transition period (2018.3.12-2021.3.11) Therefore, OHSAS 18001 certified companies must convert their certification to ISO 45001. IGC provides optimal certification services to help with conversion and new certification.
				</p>

				<ul class="content">
			        <li><!-- content 1-1 -->
						<dl>
							<dt class="img_area">
								<img src="./image/OHSAS_18001_01.jpg" alt="OHSAS 18001:2007 Requirements">
							</dt>
							<dd class="txt_area">
							    <h3 class="con_tit">OHSAS 18001:2007 Requirements</h3>
								<p class="con_txt">
								    OHSAS 18001 is a health and safety management system. It provides a framework for efficient management of health and safety, including all risk management aspects non-compliance. Help your organization achieve the health and safety of the best working conditions and working environment in line with internationally recognized best practices through the necessary policy procedures and controls.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Scope</li>
					                <li><span class="number">2. </span>Normative References</li>
					                <li><span class="number">3. </span>Terms and definitions</li>
					                <li><span class="number">4.1. </span>General Requirements</li>
					                <li><span class="number">4.2. </span>OH&amp;S Policy</li>
					                <li><span class="number">4.3. </span>Planning</li>
					                <li><span class="number">4.4. </span>Implementation and Operation</li>
					                <li><span class="number">4.5. </span>Checking</li>
					                <li><span class="number">4.6. </span>Management Review</li>
                                </ul>
							</dd>
						</dl>
					</li>
					
					<li><!-- content 1-2 -->
						<dl>
							<dt class="img_area">
								<img src="./image/OHSAS_18001_02.jpg" alt="The importance of ISO 18001">
							</dt>
							<dd class="txt_area">
								<h3 class="con_tit">The importance of ISO 18001</h3>
								<p class="con_txt">
								    OHSAS 18001 is ideal for more than 90,000 organizations in 127 countries. If your organization needs to show 'best practices' for the safety management of those responsible, it will fit you. IGC grants certification to various organizations in various fields, including government offices, manufacturing, service industries, food companies, and franchises.<br><br>
                                    This standard helps with the following particulars
                                </p>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>Organization Satisfaction
                                    </span>
                                    <p>
                                        Protecting Organizations' health and property to meet ongoing Organization requirements
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>Reduced operating costs
                                    </span>
                                    <p>
                                        Reduced time loss due to accidents and diseases. In addition, cash accumulation due to reduced legal costs and compensation
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>Compliance with the law
                                    </span>
                                    <p>
                                        Understand how legal and regulatory requirements affect you and your Organizations
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">4. </span>Improving risk management
                                    </span>
                                    <p>
                                        Manage and take action to identify potential incidents and keep risks as low as possible
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">5. </span>Proven Business Reliability
                                    </span>
                                    <p>
                                        Increase reliability through independent audit of accepted specifications
                                    </p>
                                </div>
                			</dd>
						</dl>
					</li>
					
					<li><!-- content 1-3 -->
						<dl>
							<dt class="img_area">
								<img src="./image/ISO_9001_03.jpg" alt="IGC’s Competency">
							</dt>
							<dd class="txt_area">
								<h3 class="con_tit">IGC’s Competency</h3>
								<p style="text-align: justify">
								    IGC has been accredited for OHSAS 18001 by IAS, an Accreditation Body in the United States, and provides certification services for occupational Health and safety management systems<br><br>
								    The auditors of IGC are contributing to the continuous development of customers by accurately assessing the suitability of the management system through the technology and expertise accumulated over the years.<br><br>
								    As a trusted global leader in management system certification, IGC offers OHSAS 18001 certification as well as quality management and other management systems.<br><br>
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
           
		</article>		
		
		<!--+++++ 컨텐츠 02 +++++-->
		<article>
			<section class="business_type5" class="area">
				<h1 class="tit_num"><span>ISO</span> 45001</h1>
				<h2 class="tit_cer fc_pointer">Occupational Health and Safety Assessment Series</h2>		
				<p class="outline">
                    ISO 45001 is a occupational safety and health management system, and the existing OHSAS 18001:2007 standard has been replaced by ISO 45001 in 2018. It provides a framework for managing health and safety management responsibilities through industrial health and safety management systems that are compatible with ISO 9001 and 14001 management systems. This standard has been developed for international use and enables organizations to control health and safety risks and improve performance.<br><br>
                    Effective health and safety management systems reduce risks to employees and other stakeholders and help them comply with regulations. As the existing OHSAS 18001 standard expires in March 2021, new customers must proceed to ISO 45001 from March 2020 and existing OHSAS 18001 certified customers must switch to ISO 45001.
				</p>

				<ul class="content">
					<li><!-- content 2-1 -->
						<dl>
							<dt class="img_area">
								<img src="./image/ISO 45001_01.jpg" alt="ISO 45001:2018 Requirements">
							</dt>
							<dd class="txt_area">
								<h3 class="con_tit">ISO 45001:2018 Requirements</h3>
								<p class="con_txt">
                                    ISO 45001:2018 is applied with high-level structure applied to ISO 9001:2015, and can be managed by integrating with other specifications. In addition, consistent structure, definition, and use of terminology improve the clarity and applicability of standards.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Scope</li>
                                    <li><span class="number">2. </span>Normative References</li>
                                    <li><span class="number">3. </span>Terms and definitions</li>
                                    <li><span class="number">4. </span>Context of the Organization</li>
                                    <li><span class="number">5. </span>Leadership and Worker Participation</li>
                                    <li><span class="number">6. </span>Planning</li>
                                    <li><span class="number">7. </span>Support</li>
                                    <li><span class="number">8. </span>Operation</li>
                                    <li><span class="number">9. </span>Performance Evaluation</li>
                                    <li><span class="number">10. </span>Improvement</li>
                                </ul>
							</dd>
						</dl>
					</li>
					
					<li><!-- content 2-2 -->
						<dl>
							<dt class="img_area">
								<img src="./image/ISO 45001_02.jpg" alt="The importance of ISO 45001">
							</dt>
							<dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 45001</h3>
								<p class="con_txt">
								    ISO 45001 is ideal for over 90,000 organizations in 127 countries. If your organization needs to show 'best practices' for the safety management of those responsible, it will fit you. IGC grants certification to various organizations in various fields, including government offices, manufacturing, service industries, food companies, and franchises.<br><br>
                                    This standard helps with the following particulars
                                </p>
                                <ul class="list_st">
                                    <li>
                                        <span class="number">1. </span>Identifying hazardous substances in the workplace and conducting effective preventive management
                                    </li>
                                    <li>
                                        <span class="number">2. </span>Preventing injuries and deterioration of health in the workplace
                                    </li>
                                    <li>
                                        <span class="number">3. </span>Reduce costs by reducing field accidents
                                    </li>
                                    <li>
                                        <span class="number">4. </span>Assessment of compliance with legal requirements
                                    </li>
                                    <li>
                                        <span class="number">5. </span>Improving the Safety Environment
                                    </li>
                                    <li>
                                        <span class="number">6. </span>Identifying areas of education and training and qualification requirements
                                    </li>
                                    <li>
                                        <span class="number">7. </span>Increase in productivity
                                    </li>
                                    <li>
                                        <span class="number">8. </span>Complementing the pre-registration process of the customer
                                    </li>
                                    <li>
                                        <span class="number">9. </span>Promoting Corporate Responsibilities
                                    </li>
                                </ul>
							</dd>
						</dl>			
					</li>
					
					<li><!-- content 2-3 -->
						<dl>
							<dt class="img_area">
								<img src="./image/ISO_9001_03.jpg" alt="IGC’s Competency">
							</dt>
							<dd class="txt_area">
								<h3 class="con_tit">IGC’s Competency</h3>
								<ul class="list_st">
                                    <li>
                                        <span class="number">1. </span>IGC has been accredited for ISO 45001 by IAS, an Accreditation Body in the United States, and provides certification services for occupational Health and safety management systems.
                                    </li>
                                    <li>
                                        <span class="number">2. </span>The auditors of IGC are contributing to the continuous development of customers by accurately assessing the suitability of the management system through the technology and expertise accumulated over the years.
                                    </li>
                                    <li>
                                        <span class="number">3. </span>As a trusted global leader in management system certification, IGC offers ISO 9001 certification as well as quality, environment, and other management systems.
                                    </li>
                                    <li>
                                        <span class="number">4. </span>IGC has up-to-date knowledge of a wide range of specific scopes and legal requirements in major markets around the world, and provides the knowledge and services to support your entire global operation
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
		</article><!--+++++ .컨텐츠 02 +++++-->
	</div><!--+++ /20.05.07 탭컨텐츠 영역 +++-->
</div>





<?php
include_once(G5_THEME_PATH.'/tail.php');
?>