<?php
	include_once('./_common.php');
$g5['title'] = 'Part 2';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    <!--+++ 20.05.11 탭메뉴/ 심사원인증2 > ISO 27001 시작 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">ISO 20000-1</a></li>
			<li><a href="javascript:;">ISO/IEC 27001</a></li>
			<li><a href="javascript:;">ISO 22716</a></li>
			<li class="on"><a href="javascript:;">ISO 50001</a></li>
		</ul>
	</div><!--+++ 20.05.11 탭메뉴/ 심사원인증2 > ISO 27001 종료  +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.15 탭컨텐츠 영역 시작 +++-->
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 ISO 20000-1 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	    <article style="display:block;">
	        <section class="business_type5" class="area">
	            <h1 class="tit_num">ISO/IEC 20000-1:2018</h1>
                <h2 class="tit_cer fc_pointer">IT Service Management System | Auditor Certification</h2>
                <p class="outline">
                    IGC provides certification services such as ISO/IEC 20000-1 IT Service management system provisional auditor, auditor, lead auditor, internal auditor, and senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personnel certification body based on ISO/IEC 17024.
                </p>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso20000_02.jpg" alt="ISO/IEC 20000-1:2018 Certification Overview">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 20000-1:2018 Overview</h3>
                                <p style="text-align:justify;">
                                    ISO/IEC 20000-1 is the first international standard for service management, specifying the requirements for service providers to plan, establish, implement, operate, monitor, review, maintain, and improve SMS. This standard contains two main parts that enable service providers to identify how to develop the quality of service they provide to their customers.<br><br>
                                    Part 1 specifies the requirements for the development and implementation of a service management system, Part 2 contains guidance on the application of service management systems within the scope of ISO/IEC 20000-1.<br><br>
                                    The IT Infrastructure Library (ITIL) describes best practices for achieving the same level of service quality required by ISO/IEC 20000-1, but ITIL certification is usually applied to individuals, whereas ISO/IEC 20000-1 enables certification for the entire enterprise.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO/IEC 20000-1 Auditor Certification Requirements</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso20000_01.jpg" alt="ISO/IEC 20000-1 Auditor Certification Requirements">
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
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso20000_03.jpg" alt="ISO/IEC 20000-1 Auditor Certification Procedure">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 20000-1 Auditor Certification Procedure</h3>
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

        </article><!----// 컨텐츠 01 ISO 20000-1 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 02 ISO/IEC 27001 컨텐츠 시작 //------->   
        <article>
	        <section class="business_type5" class="area">
	            <h1 class="tit_num">ISO/IEC 27001:2013</h1>
                <h2 class="tit_cer fc_pointer">Information Security Management System | Auditor Certification</h2>
                <p class="outline">
                    IGC provides certification services such as ISO/IEC 27001(ISMS) Information security management system provisional auditor, auditor, lead auditor, internal auditor, and senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personnel certification body based on ISO/IEC 17024.
                </p>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso27001_01.jpg" alt="ISO/IEC 27001:2013 Certification Overview">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 27001:2013 Overview</h3>
                                <p style="text-align:justify;">
                                    ISO/IEC 27001 is an international standard for information security management system established by the International Organization for Standardization (ISO) and the International Electrotechnical Commission (IEC) and the most authoritative international certification standard in the field of information security. It covers 133 items in 11 areas related to information security such as information protection policy, physical security, and information access control etc.<br><br>
                                    ISO/IEC 27001 consists of 10 items and 14 control items (refer to ISO/IEC 27002 for control items) of organizational environment, leadership, planning, support, operation, performance evaluation, and improvement. The requirements of this standard have been formulated to be general and applicable to any organization, regardless of its type, size or characteristics.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO/IEC 27001 Auditor Certification Requirements</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso27001_02.jpg" alt="ISO/IEC 27001 Auditor Certification Requirements">
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
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso27001_03.jpg" alt="ISO/IEC 27001 Auditor Certification Exam">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 27001 Auditor Certification Procedure</h3>
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

        </article><!----// 컨텐츠 02 ISO/IEC 27001 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 03 ISO 22716 컨텐츠 시작 //------->   
        <article>
	        <section class="business_type5" class="area">
	            <h1 class="tit_num">ISO 22716:2007</h1>
                <h2 class="tit_cer fc_pointer">Cosmetics — Good Manufacturing Practices Guidelines for standards | Auditor Certification</h2>
                <p class="outline">
                    IGC provides certification services for ISO 22716 CGMP provisional auditor, auditor, lead auditor, internal auditor, and senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personnel certification body based on ISO/IEC 17024.
                </p>
                
                <ul class="content">
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso27716_01.jpg" alt="ISO 22716:2007 Certification Overview">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 22716:2007 Overview</h3>
                                <p style="text-align:justify;">
                                    ISO 22716 aims to provide a guide to Good Manufacturing Practices (GMP) for cosmetic products. These guidelines have been prepared taking into account the specific needs of the cosmetic sector of the manufacturing industry.<br><br>
                                    ISO 22716 provides organized and practical advice on the management of factors affecting product quality.<br><br>
                                    ISO 22716 is becoming a prerequisite for cosmetic exports. In particular, the EU regulation of new cosmetics in Europe requires cosmetic manufacturers to comply with the harmonized standard, which is ISO 22716.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO 22716 Auditor Certification Requirements</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso27716_02.jpg" alt="ISO 22716 Auditor Certification Requirements">
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
                    
                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso27716_03.jpg" alt="ISO 22716 Auditor Certification Procedure">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 22716 Auditor Certification Procedure</h3>
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

        </article><!----// 컨텐츠 03 ISO 22716 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 04 ISO 50001 컨텐츠 시작 //------->       
        <article>
	        <section class="business_type5" class="area">
	            <h1 class="tit_num">ISO 50001:2018</h1>
                <h2 class="tit_cer fc_pointer">Energy management systems | Auditor Certification</h2>
                <p class="outline">
                    IGC provides certification services such as for ISO 50001:2018 energy management system provisional auditor, auditor, lead auditor, internal auditor, senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personnel certification body based on ISO/IEC 17024.
                </p>
                
                <ul class="content">
                    <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso27716_01.jpg" alt="ISO 50001:2018 Certification overview">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 50001:2018 overview</h3>
                                <p style="text-align:justify;">
                                    ISO 50001 is an international standard for energy management systems that went into effect in June 2011 by the International Organization for Standardization (ISO), and stipulates processes and requirements for energy efficiency and reduction. Efficient energy management is emerging as an important issue due to the prolonged high oil price system and responding to changes in the international Energy environment. Due to the demands and needs of these industries, the demand for ISO 50001 certification is constantly increasing, and accordingly, the demand of experts and auditors for ISO 50001 is also increasing.<br><br>
                                    Based on these requirements, the organization can develop and implement an energy policy, and can establish goals, targets and action plans that take into account legal requirements and information related to the use of critical energy.<br><br>
                                    Energy Management Systems (EnMS) enable organizations to achieve the organization's policy commitment, perform activities necessary to improve energy performance, and demonstrate conformance of the system to the requirements of this standard.<br><br>
                                    This standard applies to activities under the control of an organization, and its application can be tailored to the specific needs of the organization, including system complexity, degree of documentation and resources.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO 50001 Auditor certification requirements</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso50001_02.jpg" alt="ISO 50001 Auditor certification requirements">
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
                                <img src="./images/audit_iso50001_03.jpg" alt="ISO 50001 Auditor certification procedure">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 50001 Auditor certification procedure</h3>
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

        </article><!----// 컨텐츠 04 ISO 50001 컨텐츠 종료 //------->
                
    </div><!--+++ / 20.05.07 탭컨텐츠 영역 / +++-->
</div><!--------// div class="content_wrap"  종료 //------------------>
        



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>