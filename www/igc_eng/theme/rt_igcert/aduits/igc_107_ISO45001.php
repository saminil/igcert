<?php
	include_once('./_common.php');
$g5['title'] = 'Part 1';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #00BFBF }/* 상세페이지 포인트 컬러 */
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
    .content li .txt_area .con_txt_3 { margin: 0 0 50px;border-bottom: 1px solid #ddd }/* 텍스트 영역 내용 스타일 3 */
    .content li .txt_area .con_txt_3:last-child { margin: 0;border: none }

    /* 리스트 스타일 생성 */
    .list_st li { position: relative;padding: 0 0 4px 30px }
    .list_st li .number { position: absolute;display: inline-block;width: 5px;height: 5px;top: 0;left: 0}/* 리스트 스타일 1 */
    .list_st li .bullet { content: '';position: absolute;display: inline-block;width: 5px;height: 5px;background: #222;border-radius: 50%;top: 10px;left: 0}/* 리스트 스타일 2 */

    /* 리스트 내부 텍스트 - 수정사항 반영 211216 전산팀 yr*/
    .list_st li .list_st_txt{ margin-bottom:15px; }
    .list_st li:last-child .list_st_txt{ margin-bottom:0px; }
    
    
    table { font-size: 0.85rem }
    /* type01 : 줄노트형식 */
    table.type01 { border-collapse: collapse;text-align: left;line-height: 1.6;border-top: 3px solid #009999;border-bottom: 3px solid #009999 }
    table.type01 th { padding: 10px 0 10px 20px;vertical-align: middle }
    table.type01 td { padding: 10px 0 10px 20px;vertical-align: top }
    table.type01 .even { background: #f4f4f4 }
    
    /* type02 : 헤더에 배경색/왼쪽-항목명/오른쪽-내용 기본테이블형식 */
    table.type02 { border-collapse: collapse;line-height: 1.6;border-bottom: 3px solid #009999 }
    table.type02 thead th { padding: 10px;vertical-align: middle;color: #fff;background: #009999 }
    table.type02 tbody th { padding: 10px;vertical-align: middle;font-weight: 500;border-bottom: 1px solid #e1e1e1;border-right: 1px solid #e1e1e1 }
    table.type02 tbody td { padding: 10px;vertical-align: middle;border-bottom: 1px solid #e1e1e1;border-right: 1px solid #e1e1e1 }
    table.type02 tbody td.none { border-right: none }
    
    /* type03 : 항목명과 내용이 가로정렬 되어있는 테이블형식 */
    table.type03 { border-collapse: collapse;text-align: left;line-height: 1.6;border-top: 3px solid #009999;border-bottom: 3px solid #009999 }
    table.type03 th { padding: 10px 20px;vertical-align: middle }
    table.type03 td { padding: 10px 20px;vertical-align: middle }
    table.type03 .even { background: #f4f4f4 }
    table.type03 .headerT { background: #009999;color: #fff;text-align: center;vertical-align: middle }

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
    <!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 시작 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">ISO 9001</a></li>
			<li><a href="javascript:;">ISO 14001</a></li>
			<li><a href="javascript:;">ISO 13485</a></li>
			<li class="on"><a href="javascript:;">ISO 45001</a></li>
		</ul>
	</div><!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 종료  +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
    
    
	<!--+++ 20.05.01 탭컨텐츠 영역 시작 +++-->
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block;">
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 9001:2015</h1>
                <h2 class="tit_cer fc_pointer">Quality Management System | Auditor Certification</h2>
                <p class="outline">
                    IGC provides certification services such as ISO 9001 quality management system provisional auditor, auditor, lead auditor, internal auditor, and senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personnel certification body based on ISO/IEC 17024.
                </p>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso9001_01.jpg" alt="ISO 9001:2015 Certification Overview">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 9001:2015 Overview</h3>
                                <p style="text-align:justify;">
                                    ISO 9001 is an internationally recognized standard for Quality Management Systems (QMS). This is the most used standard worldwide, and more than 11 million certificates are issued to customers in 178 countries.<br><br>
                                    Today many companies want not only to meet the needs of their customers, but also provide better products and services. They also want to remain competitive through cost reduction. Whether it’s a large or small business, they need a comprehensive solution to improve quality and price competitiveness, and ISO 9001 provides these companies with effective quality management processes.<br><br>
                                    Software development is different from food manufacturing or providing consulting services. However, ISO 9001 can be applied to any industry. Various organizations including manufacturing companies, software development companies, trading organizations, service organizations, police stations, professional football teams and city councils have successfully applied the ISO 9001:2015 system.<br><br>
                                    As such, the requirements of ISO 9001 are comprehensive and can be applied to any organization, regardless of the type, size, or products and services offered. Therefore, this standard is the most widely used quality management standard worldwide.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO 9001 Auditor Certification Requirements</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso9001_02.jpg" alt="ISO 9001 Auditor Certification Requirements">
                                    </div>
                                </div>
                                <table class="type02">
                                    <thead style="text-align:center">
                                        <tr style="border-bottom:1px solid #fff">
                                            <th scope="cols" width="10%" style="border-right:1px solid #fff">
                                                <p>&nbsp;</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>Auditor</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>Lead Auditor</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>Senior Auditor</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>Internal Auditor</p>
                                            </th>
                                            <th scope="cols" width="18%">
                                                <p>Provisional Auditor</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <p>Education</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>Secondary education or higher</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Work experience</p>
                                            </th>
                                            <td colspan="2">
                                                <p>5 years and more (Including 2 years or more of experience in quality or environment field related to the standard)</p>
                                            </td>
                                            <td>
                                                <p>10 years and more (Including 5 years or more of experience in quality or environment field related to the standard)</p>
                                            </td>
                                            <td>
                                                <p>3 years and more (Including 1 year or more experience in quality or environment field related to the standard)</p>
                                            </td>
                                            <td class="none">
                                                <p>None</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Audit experience</p>
                                            </th>
                                            <td>
                                                <p>Audit log of 20 M/D or higher as an auditor or lead auditor within the last 3 years</p>
                                            </td>
                                            <td>
                                                <p>Audit log of 35 MD or higher as an auditor or lead auditor within the last 3 years (of which 15 M/D or more are audit log as lead auditor)</p>
                                            </td>
                                            <td>
                                                <p>Audit log of 15 M/D or more as a lead auditor within the last 3 years (only the log after acquiring lead auditor certification from an accredited personnel certification body is acceptable)</p>
                                            </td>
                                            <td>
                                                <p>Within the last 3 years awarded 5 times + audit log of at least 15 M/D</p>
                                            </td>
                                            <td class="none">
                                                <p>None</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Education training</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>* Completion of auditor training course within the last 3 years (Only a certificate of completion issued by an accredited personnel certification body or a training provider designated by it can be accepted)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Exam</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>GPC knowledge and personality exam pass</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso9001_03.jpg" alt="Auditor Certification ISO 9001 Procedure">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 9001 Auditor Certification Procedure</h3>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li>
                                            <p><span class="number">1.</span> Receipt of application documents</p>
                                            <p class="list_st_txt">- The applicants fill out the application form and submit materials to prove their background.</p>
                                            
                                        </li>
                                        <li>
                                            <p><span class="number">2.</span> Review of application documents and other materials</p>
                                            <p class="list_st_txt">- After reviewing the submitted application documents and other materials, if they are not sufficient, applicants should prove their history by supporting additional data.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">3.</span> Performing GPC exam</p>
                                            <p class="list_st_txt">- The applicants should take the knowledge and attribution test and are granted certification upon passing the test.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">4.</span> Review by Certification Panel</p>
                                            <p class="list_st_txt">- Based on the submitted data and test results, the certification panel makes a certification decision.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">5.</span> Certification issuance</p>
                                            <p class="list_st_txt">- When the certification is determined, a certificate is issued and delivered to the applicant.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="con_txt">
                                    The certification is valid for 3 years from the date of issue, and maintenance fees must be paid annually in accordance with the certified cycle, and additional requirements must be met at the 3rd year in the renewal cycle.
                                </div>
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
                        <li><p><em><strong>01</strong></em><span>System Certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Testing</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Professional Personnel Training Education</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Product Certification</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Auditor Certification</span></p></li>
                        <li><p><em><strong>06</strong></em><span>Training Provider Designation</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 01 ISO 9001 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 02 ISO 14001 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 14001:2015</h1>
                <h2 class="tit_cer fc_pointer">Environmental Management System | Auditor Certification</h2>
                <p class="outline">
                    IGC provides certification services such as ISO 14001 environmental management system provisional auditor, auditor, lead auditor, internal auditor, and senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personnel certification body based on ISO/IEC 17024.
                </p>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso27716_01.jpg" alt="ISO 14001:2015 Certification Overview">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 14001:2015 Overview</h3>
                                <p style="text-align:justify;">
                                    ISO 14001:2015 is an international standard for environmental management systems (EMS), and is a major management system standard that specifies requirements for configuring and maintaining an environmental management system. Many companies in Korea are certified for their organization's environmental management, and more than 250,000 certificates are issued worldwide.<br><br>
                                    ISO 14001 deals with issues such as establishing, implementing, maintaining and improving environmental management systems, along with general guidelines on principles, systems and supporting technologies for environmental management systems. This controls the customer's environmental aspects, reduces environmental impact, and ensures compliance with laws and regulations.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO 14001 Auditor Certification Requirements</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso9001_04.jpg" alt="ISO 14001 Auditor Certification Requirements">
                                    </div>
                                </div>
                                <table class="type02">
                                    <thead style="text-align:center">
                                        <tr style="border-bottom:1px solid #fff">
                                            <th scope="cols" width="10%" style="border-right:1px solid #fff">
                                                <p>&nbsp;</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>Auditor</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>Lead Auditor</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>Senior Auditor</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>Internal Auditor</p>
                                            </th>
                                            <th scope="cols" width="18%">
                                                <p>Provisional Auditor</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <p>Education</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>Secondary education or higher</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Work experience</p>
                                            </th>
                                            <td colspan="2">
                                                <p>5 years and more (Including 2 years or more of experience in quality or environment field related to the standard)</p>
                                            </td>
                                            <td>
                                                <p>10 years and more (Including 5 years or more of experience in quality or environment field related to the standard)</p>
                                            </td>
                                            <td>
                                                <p>3 years and more (Including 1 year or more experience in quality or environment field related to the standard)</p>
                                            </td>
                                            <td class="none">
                                                <p>None</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Audit experience</p>
                                            </th>
                                            <td>
                                                <p>Audit log of 20 M/D or higher as an auditor or lead auditor within the last 3 years</p>
                                            </td>
                                            <td>
                                                <p>Audit log of 35 MD or higher as an auditor or lead auditor within the last 3 years (of which 15 M/D or more are audit log as lead auditor)</p>
                                            </td>
                                            <td>
                                                <p>Audit log of 15 M/D or more as a lead auditor within the last 3 years (only the log after acquiring lead auditor certification from an accredited personnel certification body is acceptable)</p>
                                            </td>
                                            <td>
                                                <p>Within the last 3 years awarded 5 times + audit log of at least 15 M/D</p>
                                            </td>
                                            <td class="none">
                                                <p>None</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Education training</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>* Completion of auditor training course within the last 3 years (Only a certificate of completion issued by an accredited personnel certification body or a training provider designated by it can be accepted)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Exam</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>GPC knowledge and personality exam pass</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso9001_05.jpg" alt="ISO 14001 Auditor Certification Procedure">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 14001 Auditor Certification Procedure</h3>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li>
                                            <p><span class="number">1.</span> Receipt of application documents</p>
                                            <p class="list_st_txt">- The applicants fill out the application form and submit materials to prove their background.</p>
                                            
                                        </li>
                                        <li>
                                            <p><span class="number">2.</span> Review of application documents and other materials</p>
                                            <p class="list_st_txt">- After reviewing the submitted application documents and other materials, if they are not sufficient, applicants should prove their history by supporting additional data.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">3.</span> Performing GPC exam</p>
                                            <p class="list_st_txt">- The applicants should take the knowledge and attribution test and are granted certification upon passing the test.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">4.</span> Review by Certification Panel</p>
                                            <p class="list_st_txt">- Based on the submitted data and test results, the certification panel makes a certification decision.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">5.</span> Certification issuance</p>
                                            <p class="list_st_txt">- When the certification is determined, a certificate is issued and delivered to the applicant.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="con_txt">
                                    The certification is valid for 3 years from the date of issue, and maintenance fees must be paid annually in accordance with the certified cycle, and additional requirements must be met at the 3rd year in the renewal cycle.
                                </div>
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
                        <li><p><em><strong>01</strong></em><span>System Certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Testing</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Professional Personnel Training Education</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Product Certification</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Auditor Certification</span></p></li>
                        <li><p><em><strong>06</strong></em><span>Training Provider Designation</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 02 ISO 14001 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 03 ISO 13485 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 13485:2016</h1>
                <h2 class="tit_cer fc_pointer">Medical devices — Quality management systems | Auditor Certification</h2>
                <p class="outline">
                    IGC provides certification services such as ISO 13485 medical device quality management system provisional auditor, auditor, lead auditor, internal auditor, senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personnel certification body based on ISO/IEC 17024.
                </p>
                
                <ul class="content">
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso9001_06.jpg" alt="ISO 13485 Certification Overview">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 13485 Overview</h3>
                                <p style="text-align:justify;">
                                    ISO 13485 is a standard that stipulates the requirements for the quality management system of organizations that provide medical device design and development, production, installation and additional services. Also, this standard can be applied to external organizations that provide services such as sterilization, calibration, and sales to medical device organizations, providing the basis for a quality management system to organizations that provide medical devices and related services.<br><br>
                                    Medical devices directly affect human life and health, they need to guarantee a higher level of stability than any other product. Therefore, the medical device industry has a variety of regulations that must be met, including domestic regulatory systems, international standards and other requirements. In order to meet the requirements of the EU Medical Device Directive, a quality system must be established, and some countries, such as Canada, require ISO 13485 certification for product sales.<br><br>
                                    With ISO 13485 system certification, medical device manufacturers can demonstrate that an organization's system meets the comprehensive requirements for a quality management system and specific requirements for medical devices.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO 13485 Auditor Certification Requirements</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso9001_07.jpg" alt="ISO 13485 Auditor Certification Requirements">
                                    </div>
                                </div>
                                <div class="con_txt">
                                    <table class="type02">
                                        <thead style="text-align:center">
                                            <tr style="border-bottom:1px solid #fff">
                                                <th scope="cols" width="10%" style="border-right:1px solid #fff">
                                                    <p>&nbsp;</p>
                                                </th>
                                                <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                    <p>Auditor</p>
                                                </th>
                                                <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                    <p>Lead Auditor</p>
                                                </th>
                                                <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                    <p>Senior Auditor</p>
                                                </th>
                                                <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                    <p>Internal Auditor</p>
                                                </th>
                                                <th scope="cols" width="18%">
                                                    <p>Provisional Auditor</p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <p>Education</p>
                                                </th>
                                                <td colspan="5" class="none">
                                                    <p>Secondary education or higher</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p>Work experience</p>
                                                </th>
                                                <td colspan="2">
                                                    <p>5 years and more (Including 2 years or more of experience in quality or environment field related to the standard)</p>
                                                </td>
                                                <td>
                                                    <p>10 years and more (Including 5 years or more of experience in quality or environment field related to the standard)</p>
                                                </td>
                                                <td>
                                                    <p>3 years and more (Including 1 year or more experience in quality or environment field related to the standard)</p>
                                                </td>
                                                <td class="none">
                                                    <p>None</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p>Audit experience</p>
                                                </th>
                                                <td>
                                                    <p>Audit log of 20 M/D or higher as an auditor or lead auditor within the last 3 years</p>
                                                </td>
                                                <td>
                                                    <p>Audit log of 35 MD or higher as an auditor or lead auditor within the last 3 years (of which 15 M/D or more are audit log as lead auditor)</p>
                                                </td>
                                                <td>
                                                    <p>Audit log of 15 M/D or more as a lead auditor within the last 3 years (only the log after acquiring lead auditor certification from an accredited personnel certification body is acceptable)</p>
                                                </td>
                                                <td>
                                                    <p>Within the last 3 years awarded 5 times + audit log of at least 15 M/D</p>
                                                </td>
                                                <td class="none">
                                                    <p>None</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p>Education training</p>
                                                </th>
                                                <td colspan="5" class="none">
                                                    <p>* Completion of auditor training course within the last 3 years (Only a certificate of completion issued by an accredited personnel certification body or a training provider designated by it can be accepted)</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p>Exam</p>
                                                </th>
                                                <td colspan="5" class="none">
                                                    <p>GPC knowledge and personality exam pass</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; ISO 13485:2016 Auditor requirements
                                    </span>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li><span class="bullet"></span>Education : University (4 years) graduation or higher</li>
                                            <li><span class="bullet"></span>Majors : Biology, Microbiology, Chemistry, Biochemistry, Computer and Software Technology, Electrical, Electronics, Mechanical, Biological Engineering, Human Physiology, Pharmacy, Physics</li>
                                            <li><span class="bullet"></span>Experience : Persons who have worked full-time for at least 4 years in medical devices and medical research fields</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; Special requirements and technical competence
                                    </span>
                                    <div class="con_txt_2">
                                        <ul class="list_st">
                                            <li>
                                                <span class="number">1. </span>Basic knowledge of medical devices and an understanding of related production activities, including :
                                                <ul class="list_st">
                                                    <li><span class="bullet"></span>purpose of use</li>
                                                    <li><span class="bullet"></span>Classification of medical devices including risk analysis</li>
                                                    <li><span class="bullet"></span>Legal regulatory framework and the role of the certification body</li>
                                                    <li><span class="bullet"></span>Medical device risk evaluation (ISO 14971)</li>
                                                    <li><span class="bullet"></span>Product standards related to medical device evaluation</li>
                                                    <li><span class="bullet"></span>ISO 13485 certification by certification body</li>
                                                    <li><span class="bullet"></span>Knowledge of medical device business/technology</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="con_txt_2">
                                        <ul class="list_st">
                                            <li>
                                                <span class="number">2. </span>Statistical analysis
                                                <ul class="list_st">
                                                    <li><span class="bullet"></span>Basic knowledge of probability and statistics according to sampling and trend analysis considering reliability and standard deviation</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="con_txt_2">
                                        <ul class="list_st">
                                            <li>
                                                <span class="number">3. </span>Knowledge of :
                                                <ul class="list_st">
                                                    <li><span class="bullet"></span>Sterilization technology and verification technology</li>
                                                    <li><span class="bullet"></span>Microbiology and BIO-Burden monitoring</li>
                                                    <li><span class="bullet"></span>Biocompatibility and validation</li>
                                                    <li><span class="bullet"></span>Clean room operation</li>
                                                    <li><span class="bullet"></span>Environmental monitoring and control</li>
                                                    <li><span class="bullet"></span>Packaging technology</li>
                                                    <li><span class="bullet"></span>Stability test</li>
                                                    <li><span class="bullet"></span>Risk management base</li>
                                                    <li><span class="bullet"></span>Cleaning and disinfection</li>
                                                    <li><span class="bullet"></span>Biological evaluation of medical devices</li>
                                                    <li><span class="bullet"></span>Clinical evaluation of medical devices</li>
                                                    <li><span class="bullet"></span>Physical and chemical evaluation of medical devices</li>
                                                    <li><span class="bullet"></span>Knowledge of process validation practices</li>
                                                    <li><span class="bullet"></span>Software verification technology</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso9001_08.jpg" alt="ISO 13485 Auditor Certification Procedure">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 13485 Auditor Certification Procedure</h3>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li>
                                            <p><span class="number">1.</span> Receipt of application documents</p>
                                            <p class="list_st_txt">- The applicants fill out the application form and submit materials to prove their background.</p>
                                            
                                        </li>
                                        <li>
                                            <p><span class="number">2.</span> Review of application documents and other materials</p>
                                            <p class="list_st_txt">- After reviewing the submitted application documents and other materials, if they are not sufficient, applicants should prove their history by supporting additional data.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">3.</span> Performing GPC exam</p>
                                            <p class="list_st_txt">- The applicants should take the knowledge and attribution test and are granted certification upon passing the test.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">4.</span> Review by Certification Panel</p>
                                            <p class="list_st_txt">- Based on the submitted data and test results, the certification panel makes a certification decision.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">5.</span> Certification issuance</p>
                                            <p class="list_st_txt">- When the certification is determined, a certificate is issued and delivered to the applicant.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="con_txt">
                                    The certification is valid for 3 years from the date of issue, and maintenance fees must be paid annually in accordance with the certified cycle, and additional requirements must be met at the 3rd year in the renewal cycle.
                                </div>
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
                        <li><p><em><strong>01</strong></em><span>System Certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Testing</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Professional Personnel Training Education</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Product Certification</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Auditor Certification</span></p></li>
                        <li><p><em><strong>06</strong></em><span>Training Provider Designation</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 03 ISO 13485 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 04 OHSAS 18001 OR ISO 45001 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 45001:2018</h1>
                <h2 class="tit_cer fc_pointer">Occupational Health and safety Management Systems | Auditor Certification</h2>
                <p class="outline">
                    IGC provides certification services such as for ISO 45001 occupational health and safety management systems provisional auditor, auditor, lead auditor, internal auditor, senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personnel certification body based on ISO/IEC 17024.
                </p>
                
                <ul class="content">
                    <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_ohsas18001_03.jpg" alt="ISO 45001:2018 Certification Overview">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 45001:2018 Overview</h3>
                                <p style="text-align:justify;">
                                    ISO 45001 is a occupational health and safety management systems, and the existing OHSAS 18001:2007 standard was replaced by ISO 45001 in 2018. It provides a framework for managing health and safety management responsibilities through an occupational health and safety management system compatible with ISO 9001 and 14001 management systems.<br><br>
                                    This standard was developed for international use and enables organizations to control health and safety risks and improve performance.<br><br>
                                    ISO 45001 is suitable for over 90,000 organizations in over 127 countries. If your organization needs to show the best practice of the safety management of those responsible for it, it will be right for you. IGC grants certifications to various organizations in various fields, including government offices, manufacturing, service, food companies, and franchises.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO 45001 Auditor Certification Requirements</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_ohsas18001_01.jpg" alt="ISO 45001 Auditor Certification Requirements">
                                    </div>
                                </div>
                                <table class="type02">
                                    <thead style="text-align:center">
                                        <tr style="border-bottom:1px solid #fff">
                                            <th scope="cols" width="10%" style="border-right:1px solid #fff">
                                                <p>&nbsp;</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>Lead auditor</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>Auditor</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>Senior Auditor</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>Internal Auditor</p>
                                            </th>
                                            <th scope="cols" width="18%">
                                                <p>Provisional Auditor</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <p>Education</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>Secondary education or higher</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Work experience</p>
                                            </th>
                                            <td colspan="2">
                                                <p>5 years and more (Including 2 years or more of experience in quality or environment field related to the standard)</p>
                                            </td>
                                            <td>
                                                <p>10 years and more (Including 2 years or more of experience in quality or environment field related to the standard)</p>
                                            </td>
                                            <td>
                                                <p>3 years and more (Including 1 year or more experience in quality or environment field related to the standard)</p>
                                            </td>
                                            <td class="none">
                                                <p>None</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Audit experience</p>
                                            </th>
                                            <td>
                                                <p>Audit log of 20 M/D or higher as an auditor or lead auditor within the last 3 years</p>
                                            </td>
                                            <td>
                                                <p>Audit log of 35 MD or higher as an auditor or lead auditor within the last 3 years (of which 15 M/D or more are audit log as lead auditor)</p>
                                            </td>
                                            <td>
                                                <p>Audit log of 15 M/D or more as a lead auditor within the last 3 years (only the log after acquiring lead auditor certification from an accredited personnel certification body is acceptable)</p>
                                            </td>
                                            <td>
                                                <p>Within the last 3 years awarded 5 times + audit log of at least 15 M/D</p>
                                            </td>
                                            <td class="none">
                                                <p>None</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Education training</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>* Completion of auditor training course within the last 3 years (Only a certificate of completion issued by an accredited personnel certification body or a training provider designated by it can be accepted)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>Exam</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>GPC knowledge and personality exam pass</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_ohsas18001_02.jpg" alt="ISO 45001 Auditor Certification Procedure">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 45001 Auditor Certification Procedure</h3>
                                 <div class="con_txt">
                                    <ul class="list_st">
                                        <li>
                                            <p><span class="number">1.</span> Receipt of application documents</p>
                                            <p class="list_st_txt">- The applicants fill out the application form and submit materials to prove their background.</p>
                                            
                                        </li>
                                        <li>
                                            <p><span class="number">2.</span> Review of application documents and other materials</p>
                                            <p class="list_st_txt">- After reviewing the submitted application documents and other materials, if they are not sufficient, applicants should prove their history by supporting additional data.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">3.</span> Performing GPC exam</p>
                                            <p class="list_st_txt">- The applicants should take the knowledge and attribution test and are granted certification upon passing the test.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">4.</span> Review by Certification Panel</p>
                                            <p class="list_st_txt">- Based on the submitted data and test results, the certification panel makes a certification decision.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">5.</span> Certification issuance</p>
                                            <p class="list_st_txt">- When the certification is determined, a certificate is issued and delivered to the applicant.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="con_txt">
                                    The certification is valid for 3 years from the date of issue, and maintenance fees must be paid annually in accordance with the certified cycle, and additional requirements must be met at the 3rd year in the renewal cycle.
                                </div>
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
                        <li><p><em><strong>01</strong></em><span>System Certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Testing</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Professional Personnel Training Education</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Product Certification</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Auditor Certification</span></p></li>
                        <li><p><em><strong>06</strong></em><span>Training Provider Designation</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 04 OHSAS 18001 OR ISO 45001 컨텐츠 종료 //------->


    </div><!--+++ / 20.05.07 탭컨텐츠 영역 / +++-->
</div><!--------// div class="content_wrap"  종료 //------------------>






<?php
include_once(G5_THEME_PATH.'/tail.php');
?>