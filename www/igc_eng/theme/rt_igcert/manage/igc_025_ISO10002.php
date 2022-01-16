<?php
	include_once('./_common.php');
$g5['title'] = 'Customer satisfaction';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	<!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">ISO 10002</a></li>
			<li><a href="javascript:;">ISO 10004</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.07 탭컨텐츠 영역 +++-->
	
	<div class="tab_con">
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block;">
            <section class="business_type5" class="area">
		        <h1 class="tit_num"><span>ISO</span> 10002</h1>
		        <h2 class="tit_cer fc_pointer">Guidelines for Customer Satisfaction Quality Management System</h2>		
                <p class="outline">
                    ISO 10002 provides guidance on product-related complaints processes within an organization, including planning, design, operation, maintenance and improvement, for all types of commercial or non-commercial activities, including e-commerce. It is also appropriate to use the described complaint handling process as one of the processes in the overall quality management system.<br><br>
                    An effective and efficient complaint handling process reflects the needs of both the organization that supplies the product and those who receive it. In addition, the information obtained through the grievance process can lead to product and process improvements and, if properly handled, the organization's reputation can be enhanced regardless of its size, region and industry.<br><br>
                    This standard is increasingly valuable in the international market because it gives confidence in consistent complaint handling.
                </p>

                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso_10002_03.jpg" alt="ISO 10002:2014 Requirements">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 10002:2014 Requirements</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Scope</li>
                                    <li><span class="number">2. </span>Normative Reference</li>
                                    <li><span class="number">3. </span>Terms and definitions</li>
                                    <li><span class="number">4. </span>Guiding principles</li>
                                    <li><span class="number">5. </span>Complaints-handling framework</li>
                                    <li><span class="number">6. </span>Planing and design</li>
                                    <li><span class="number">7. </span>Operating of complaints-handling proces</li>
                                    <li><span class="number">8. </span>Maintenance and improvement</li>
                                </ul>
                            </dd>
                        </dl>	
                    </li>

                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso_10002_01.jpg" alt="The importance of ISO 10002">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 10002</h3>
                                <ul class="list_st">
                                    <li>
                                        <span class="bullet"></span>Recognizing the need to enhance competitiveness for survival and development in the face of unlimited competition among companies due to the market opening of the market
                                    </li>
                                    <li>
                                        <span class="bullet"></span>Prevent existing customers from leaving by improving customer service
                                    </li>
                                    <li>
                                        <span class="bullet"></span>Improving customer standards and increasing consumer rights awareness
                                    </li>
                                    <li>
                                        <span class="bullet"></span>Responding to customer inquiries due to diversification of products and services
                                    </li>
                                    <li>
                                        <span class="bullet"></span>Improving customer relationships
                                    </li>
                                    <li>
                                        <span class="bullet"></span>Improve customer satisfaction
                                    </li>
                                    <li>
                                        <span class="bullet"></span>The importance of customer counselors and salespeople has emerged.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>Strengthen customer satisfaction surveys by public institutions
                                    </li>
                                    <li>
                                        <span class="bullet"></span>Strengthens ability to respond to manufacturer's responsibilities
                                    </li>
                                </ul>
                            </dd>
                        </dl>
                    </li>

                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso_10002_02.jpg" alt="Estimated Effectiveness of ISO 10002">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Estimated Effectiveness of ISO 10002</h3>
                                <ul class="list_st">
                                    <li>
                                        <span class="bullet"></span>Provide a complaint handling process to the complainant, which is open and responsive
                                    </li>
                                    <li>
                                        <span class="bullet"></span>Improving the organization's ability to address complaints in a consistent, systematic and responsive manner to complaints and organizations
                                    </li>
                                    <li>
                                        <span class="bullet"></span>Improving the organization's ability to identify trends, eliminate sources of dissatisfaction, and improve the organization's operations
                                    </li>
                                    <li>
                                        <span class="bullet"></span>Encourage organizations to establish a customer-centered approach to resolving complaints and to improve the proficiency of relevant personnel in customer affairs.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>Provides a basis for ongoing review and analysis of complaints processing processes, resolution of complaints, and improvement of processes
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

        </article><!--+++++ /컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->

       
        <article><!--+++++ 컨텐츠 02 +++++-->	
            <section class="business_type5" class="area">
                <h1 class="tit_num"><span>ISO</span> 10004</h1>
                <h2 class="tit_cer fc_pointer">Guidelines for Customer Satisfaction Quality Management System</h2>	
                <p class="outline">
                    ISO 10004 provides an organization with a guide to help establish effective procedures for monitoring and measuring customer satisfaction. It aims to apply to all sizes and industries. An important part of the many benefits that can be gained from applying this specification is the solution to customer complaints, customer satisfaction, customer-centricity and personal motivation to improve relationships with customers.<br><br>
                    Specifically, the focus of this standard is to accurately understand the satisfaction of individuals or organizations receiving products or services from public or private organizations and to ensure that the organization develops through appropriate responses to them.
                </p>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso_10002_03.jpg" alt="ISO 10004:2018 Requirements">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 10004:2018 Requirements</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Scope</li>
					                <li><span class="number">2. </span>Normative Reference</li>
					                <li><span class="number">3. </span>Terms and definitions</li>
					                <li><span class="number">4. </span>Guiding principles</li>
					                <li><span class="number">5. </span>Framework for monitoring and measuring customer satisfaction</li>
					                <li><span class="number">6. </span>Planning, design and development</li>
					                <li><span class="number">7. </span>Operation</li>
					                <li><span class="number">8. </span>Maintenance and improvement</li>
                                </ul>
                            </dd>
                        </dl>	
                    </li>

                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso10004_01.jpg" alt="The importance of ISO 10004">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The importance of ISO 10004</h3>
                                <p class="con_txt">
                                    ISO 10004 is appropriate for any organization that wishes to exceed customer expectations and is the most basic requirement that can be applied to various industries of all shapes and sizes, regardless of whether the organization is personal, public, or voluntary.<br><br>
                                    Customer satisfaction is determined by the difference between the customer's expectations and the customer's perception of the product supplied by the organization (enterprise). In order to achieve customer satisfaction, companies (organizations) must understand customer expectations first.<br><br>
                                    The level of customer satisfaction determines the level of customer satisfaction by which the product is supplied and meets the customer's expectations. It is important that there is a feature between the organization's perspective on the quality of the delivered product and the customer's perception. Because this feature determines the degree of customer satisfaction in the future.
                                </p>
                                <div class="con_txt_2">
                                    <ul class="list_st">
                                        <span class="point_blk">&#10020; Items performed by the organization to achieve customer satisfaction</span>
                                        <li><span class="bullet"></span>Identify and understand customer expectations</li>
                                        <li><span class="bullet"></span>Collect customer satisfaction information</li>
                                        <li><span class="bullet"></span>Analyze customer satisfaction information</li>
                                        <li><span class="bullet"></span>Presentation of opinions to improve customer satisfaction</li>
                                        <li><span class="bullet"></span>Management supervision of customer satisfaction progress</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>

                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso10004_02.jpg" alt="Estimated Effectiveness of ISO 10004">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Estimated Effectiveness of ISO 10004</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Get information about new expectations</li>
                                    <li><span class="bullet"></span>Solve complaints and complaints about the satisfaction of the organization</li>
                                    <li><span class="bullet"></span>Identify customer trends and eliminate sources of dissatisfaction</li>
                                    <li><span class="bullet"></span>Customer-centric approach to resolving complaints</li>
                                    <li><span class="bullet"></span>Improve the ability of customers and employees to respond to customers</li>
                                    <li><span class="bullet"></span>Establish a foundation for continuous review and analysis of complaints handling procedures</li>
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
	
        </article><!--+++++ /컨텐츠 02 종료 +++++-->					
    </div> <!----class="tab_con------>
</div> <!-----div class="content_wrap------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>