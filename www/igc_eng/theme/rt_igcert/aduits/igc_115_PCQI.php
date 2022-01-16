<?php
	include_once('./_common.php');
$g5['title'] = 'Part 3';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
			<li><a href="javascript:;">ISO 22000</a></li>
			<li><a href="javascript:;">FSSC 22000</a></li>
			<li><a href="javascript:;">FDA FSMA</a></li>
			<li class="on"><a href="javascript:;">PCQI</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 심사원인증2 > ISO 27001 종료  +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.15 탭컨텐츠 영역 시작 +++-->
    <div class="tab_con">
        <!--++++ 컨텐츠 01 ISO 22000 (처음 활성화 컨텐츠에만 style="display:block") ++++-->   
        <article style="display:block;">
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 22000:2018</h1>
                <h2 class="tit_cer fc_pointer">Food Safety Management System | Auditor Certification</h2>
                <p class="outline">
                    IGC provides certification services such as ISO 22000 food safety management system provisional auditor, auditor, lead auditor, internal auditor, and senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personnel certification body based on ISO/IEC 17024.
                </p>
                
                <ul class="content">
                   <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso9001_10.jpg" alt="ISO 22000 Certification Overview">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 22000 Overview</h3>
                                <p style="text-align:justify;">
                                    ISO 22000 integrates the principles and application stages of the Hazard Analysis and Critical Control Point (HACCP) system developed by the Codex Alimentarius Commission.<br><br>
                                    This standard requires the identification and evaluation of all expected hazards in the food chain, including hazards that may be associated with the type of process and facility used. Therefore, ISO 22000 helps to distinguish between identified hazards that need and don’t need to be managed and provides methods for documentation.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO 22000 Auditor Certification Requirements</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso9001_10_01.jpg" alt="ISO 22000 Auditor Certification Requirements">
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
                                <img src="./images/audit_iso9001_11.jpg" alt="ISO 22000 Auditor Certification Procedure">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 22000 Auditor Certification Procedure</h3>
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

        </article><!----// 컨텐츠 01 ISO 22000 컨텐츠 종료 //------->
                   
                   
        
        <!----// 컨텐츠 02 FSSC 22000 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">FSSC 22000 Version 5</h1>
                <h2 class="tit_cer fc_pointer">Food Safety System (FSSC) | Auditor Certification</h2>
                <p class="outline">
                    IGC is an educational institution registered as the official Training Organization of FSSC and provides FSSC 22000 auditor registration service.
                </p>
                
                <ul class="content">
                   <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_fssc22000_01.jpg" alt="FSSC 22000 Version 5 Certificate Overview">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FSSC 22000 Version 5 Certificate Overview</h3>
                                <p style="text-align:justify;">
                                    The FSSC 22000 (Food Safety System Certification) standard is a food safety standard approved by the Global Food Safety Initiative (GFSI), which has the most influence on food manufacturers, to introduce a food safety certification system suitable for the overall food industry.<br><br>
                                    As the world's population grows, there is an increasing demand for cheap, safe and quality food. To meet these needs, FSSC 22000 provides the food industry with a reliable food safety platform.<br><br>
                                    FSSC 22000, as a combination of Sector Prerequisite Programs (PRPs) based on ISO 22000 for manufacturer of different food products and ingredients in different sectors, and additional FSSC 22000 requirements, is applicable to all food manufacturers regardless of size, complexity and location. In addition, transportation and storage at the production site are included in the scope of certification.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_fssc22000_02.jpg" alt="FSSC 22000 Auditor Qualification Process">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FSSC 22000 Auditor Qualification Process</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>Working experience</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Experience in quality assurance in food production or manufacturing, retail, food inspection or food-related law enforcement or equivalent sectors, or</li>
                                        <li><span class="bullet"></span>Experience in food or related industries, including at least 2 years of full-time work experience related to food safety functions.</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>Education</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Education : Food-related or life science degree, or</li>
                                        <li><span class="bullet"></span>at least a food-related or life sciences higher education course,</li>
                                        <li><span class="bullet"></span>successful completion of an equivalent course</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>Education training</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>FSMS or QMS lead auditor course-at least 40 hours including exam</li>
                                        <li><span class="bullet"></span>HACCP training-minimum 16 hours including exam</li>
                                        <li><span class="bullet"></span>ISO 22000 standard-at least 8 hours including exam (if the lead auditor course does not include parts about the ISO 22000 standard)</li>
                                        <li><span class="bullet"></span>Food defense training (including exam) covering methods of food defense risk assessment and possible mitigation measures.</li>
                                        <li><span class="bullet"></span>Food fraud education and training (including exam) covering methods of assessing food fraud vulnerability and possible mitigation measures.</li>
                                        <li><span class="bullet"></span>Standards-All requirements related to the scheme (including tests): ISO/TS 22003 (Annex C), ISO 19011 and ISO/IEC 17021-1 (standards applicable to the certification body audit process, including exam)</li>
                                        <li><span class="bullet"></span>Education and training on relevant PRP standards</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>Others</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Audit : At least 10 days of audit experience and 5 ISO 22000 audits</li>
                                        <li><span class="bullet"></span>or GFSI's accredited scheme audit related to a specific industry, including at least one FSSC 22000 audit</li>
                                        <li><span class="bullet"></span>GFSI exam: All auditors must pass the GFSI exam within the deadline set by the foundation. New auditors are required to pass the GFSI exam before becoming eligible for FSSC 22000.</li>
                                        <li><span class="bullet"></span>Category I related: basic packaging certification, packaging technology degree</li>
                                        <li><span class="bullet"></span>Or higher-level certifications and certifications in food technology, food hygiene or related sciences, or basic certifications in food technology, food safety/sanitation or related sciences, and training (minimum 30 hours) of the World Packaging Association and the Certification for packaging technology that meets the requirements specified by the World Packaging Association</li>
                                        <li><span class="bullet"></span>FSSC 22000-Quality: Auditors qualified to ISO/IEC 17021-1 with respect to ISO 9001 certification recognized under the ISO/TS 22003 category and ISO 9001 food sector code.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_fssc22000_03.jpg" alt="Auditor’s Initial evaluation and Approval">
                            </dt>
                            <dd class="txt_area">
                                <div style="text-align:justify">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>Auditor’s Initial evaluation and Approval</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>FSSC 22000 witness screening of auditors to confirm that competence has been achieved</li>
                                        <li><span class="bullet"></span>All FSSC 22000 auditors (including auditors during training) must be registered on the portal according to Foundation guidelines.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_fssc22000_04.jpg" alt="Granting scope of certification for sub-classification (first and expanded)">
                            </dt>
                            <dd class="txt_area">
                                <div style="text-align:justify">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>Granting scope of certification for sub-classification (first and expanded)</span>
                                    <p class="con_txt">
                                        After receiving the initial auditor qualification, the auditor must be granted/approved for each category. The certification body shall demonstrate that the auditor satisfies the following requirements in order to assign the category code to the auditor. Granting scope of certification for sub-classification (first and expanded)
                                    </p>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>In relation to a new category (post-farm gate only except for food chain category A) to be granted as a trainee or as an auditor under the supervision of an auditor who has 6 months working experience in the subclass or qualified for the subclass, 5 audits of recognized by GFSI schemes. At least one of the five audits must be an FSSC 22000 audit (post or renewal audit phase 2). If an advisory service is used to demonstrate working experience, the total number of consulting days must be added to the six-month working experience.</li>
                                        <li><span class="bullet"></span>Demonstrate specific eligibility for sub-classification</li>
                                        <li><span class="bullet"></span>Satisfy the certification body's own qualification criteria for sub-classification</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/FSSC22000Version5_06.jpg" alt="Education provided">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Education provided</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">Understanding FSSC 22000</span>
                                    <p>
                                        This course is intended for organizations, certification bodies, consultants, and those who are interested in a general knowledge of FSSC 22000 requirements and understand how they can be applied to other food chain organizations.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">FSSC 22000 Implementation</span>
                                    <p>
                                        shows how FSSC 22000 can be implemented within various food chain categories for organizations, consultants and others based on the process above.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">FSSC 22000 Internal Auditor Course</span>
                                    <p>
                                        designed for organizations implementing FSSC 22000 to meet the training requirements of internal auditors. Training covers all elements specified in ISO 19011:2018.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">FSSC 22000 Senior Auditor Course</span>
                                    <p>
                                        This course is held for those who wish to register as a lead auditor. It can also be applied to internal auditors and consultants. The composition of the training covers FSSC 22000 requirements, ISO 19011: 2018, ISO / IEC 17021-1: 2015 and ISO / TS 22003: 2013 and includes practice courses (e.g. Case study) and written exams. The total training time is 40 hours.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_fssc22000_05.jpg" alt="IGC's Competitiveness">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC's Competitiveness</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC Certification Center provides various certification and testing services for domestic food manufacturing companies to enter overseas markets.</li>
                                    <li><span class="bullet"></span>IGC Certification Center provides fast and accurate support with one-stop service for all processes necessary for export, from testing, certification to training auditors.</li>
                                    <li><span class="bullet"></span>IGC provides services for ISO 22000 senior auditor training and certificate issuance based on cooperation with GPC, an IAF MLA personal certification approval body.</li>
                                    <li><span class="bullet"></span>FSSC 22000 We are actively training FSSC 22000 auditors by being designated as TO (Training Organization) by FSSC to designate lead auditors.</li>
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

        </article><!----// 컨텐츠 02 FSSC 22000 컨텐츠 종료 //------->
                   
                   
                   
        <!----// 컨텐츠 03 FDA FSMA 컨텐츠 시작 //------->   
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">FDA FSMA</h1>
                <h2 class="tit_cer fc_pointer">Food Safety Modernization Act | Auditor Certification</h2>
                <p class="outline">
                    IGC is the 7th in the world and the first in Korea to be recognized as an FDA FSMA third-party certification body by the US FDA and IAS, providing auditor registration services.
                </p>
                
                <ul class="content">
                   <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_FSMA_011.jpg" alt="FDA FSMA Certification Overview">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FDA FSMA Certification Overview</h3>
                                <p style="text-align:justify;">
                                    On January 4, 2011, the US government enacted the Food Safety Modernization Act (FSMA) for the purpose of protecting food supply safety and public health through precautionary prevention.This allows FDA to focus on preventing food safety issues with the enactment of FSMA.FSMA applies to facilities that manufacture, process, package or store food or feed. Also, companies that send food to the United States, such as producers, US importers, shippers, recipients, shippers, and transporters, must comply with FSMA.<br><br>
                                    Therefore, according to FSMA, companies need to establish a food safety system that includes preventive management based on hazard analysis and prepare a documented food safety plan.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_FSMA_012.jpg" alt="The Importance of FSMA Auditor Certification">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The Importance of FSMA Auditor Certification</h3>
                                <p style="text-align:justify;">
                                    The United States is an important export destination for Korea and is a very important food export market. Therefore, the FSMA third-party certification serves as an opportunity for food companies to expand their exports to the US.<br><br>
                                    Therefore, FSMA auditor certification is required in order to conduct an audit by an accredited third party to ensure compliance with the regulations required by FSMA.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_FSMA_013.jpg" alt="FSMA Auditor Training Course">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FSMA Auditor Training Course</h3>
                                <div>
                                    <span class="point_blk"><span class="bullet">&#10020; </span>Contents of IGC's FSMA Third Party Certified Auditor Training Course</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>FDA FSMA Third-Party Certification Program</li>
                                        <li><span class="bullet"></span>Auditor Acceptance Criteria</li>
                                        <li><span class="bullet"></span>FSMA Third-Party Certification Audit Checklist</li>
                                        <li>
                                            <span class="bullet"></span>FSMA Human Food Category Characteristics and application method
                                            <ul class="list_st">
                                                <li><span class="number">- </span>Low Acid and Acidified Foods</li>
                                                <li><span class="number">- </span>Fisheries/Seafood Products</li>
                                                <li><span class="number">- </span>Fruit or Vegetable Juices, Other Beverages Including Water</li>
                                                <li><span class="number">- </span>Starch Products</li>
                                                <li><span class="number">- </span>Food Additives</li>
                                                <li><span class="number">- </span>Nuts and Edible Seed Products</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 3-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/FDA FSMA_07.jpg" alt="Competitiveness of the IGC Certification Center">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Competitiveness of the IGC Certification Center</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>The FSMA Auditor Training Course is a third-party FSMA certification body approved by the US FDA, and is a training course prepared by IGC that received the authority to train PCQI and FSVP experts from FSPCA.</li>
                                    <li><span class="bullet"></span>The FSMA auditor training course is structured and in-depth to train auditors for FSMA third-party certification.</li>
                                    <li><span class="bullet"></span>It is a curriculum designed to build quality screening skills from IGC's rich experience.</li>
                                    <li><span class="bullet"></span>For the FSMA third-party certification auditor activity, you must complete both the PCQI training course and the FSAM third-party certification auditor course.</li>
                                    <li><span class="bullet"></span>If you are eligible for PCQI, or if you have completed training in advance, you can only choose the FSMA Third Party Certified Auditor Course.</li>
                                    <li><span class="bullet"></span>IGC has extensive knowledge of food safety by operating a food laboratory and conducting various food-related certifications.</li>
                                    <li><span class="bullet"></span>IGC accreditation center provides courses and professional training taught by experts in the field based on years of experience. In addition, we provide effective learning and development opportunities based on years of global experience.</li>
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

        </article><!----// 컨텐츠 03 FDA FSMA 컨텐츠 종료 //------->
                   
                   
        <!----// 컨텐츠 04 PCQI 컨텐츠 시작 //------->  
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">PCQI</h1>
                <h2 class="tit_cer fc_pointer">PCQI(Preventive Controls Qualified Individual) | Auditor Certification</h2>
                <p class="outline">
                    Companies that export food to the United States must appoint a Food Safety Preventive Controls Professional (PCQI: Preventive Controls Qualified Individual) based on FSMA requirements to operate the HARPC (Hazard Prevention Management System).<br><br>
                    According to FSMA regulations, food manufacturers are required to establish and operate a food safety plan to prevent and manage potential risks in advance as well as traditional hazard analysis. Also, a food safety plan must be established and preventive management by a preventive management expert. Should be validated and related records are required to be reviewed regularly.<br><br>
                    PCQI certification must be issued through FSPCA after successful completion of a training course approved by The Food Safety Preventive Controls Alliance (FSPCA).
                </p>
                
                <ul class="content">
                   <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_pcqi_01.jpg" alt="What is a PCQI?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">What is a PCQI?</h3>
                                <p style="text-align:justify;">
                                    A Preventive controls qualified individual means a qualified individual who has successfully completed training in the development and application of risk-based preventive controls at least equivalent to that received under a standardized curriculum recognized as adequate by FDA or is otherwise qualified through job experience to develop and apply a food safety system.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_pcqi_02.jpg" alt="PCQI's responsibility">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">PCQI's responsibility</h3>
                                <p class="con_txt">
                                    The supporting documents to be submitted with the application are as follows.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Preparation of food safety plan</li>
                                    <li><span class="number">2. </span>Validation of preventive measures</li>
                                    <li><span class="number">3. </span>Record review</li>
                                    <li><span class="number">4. </span>Re-analysis of food safety plan</li>
                                    <li><span class="number">5. </span>Supervise or conduct other food-appropriate activities</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 4-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_pcqi_03.jpg" alt="Practitioners who will be involved in food safety production with training conditions for PCQI">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Practitioners who will be involved in food safety production with training conditions for PCQI</h3>
                                <div>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Vice President of Food Safety</li>
                                        <li><span class="bullet"></span>Maintenance manager</li>
                                        <li><span class="bullet"></span>Production supervisor and manager</li>
                                        <li><span class="bullet"></span>Hygiene supervisor</li>
                                        <li><span class="bullet"></span>Quality Assurance Officer and Manager</li>
                                        <li><span class="bullet"></span>Safety manager</li>
                                        <li><span class="bullet"></span>Education supervisor</li>
                                        <li><span class="bullet"></span>Technical Director</li>
                                        <li><span class="bullet"></span>Packaging supervisor and manager</li>
                                        <li><span class="bullet"></span>Legal and Regulatory Officer</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 4-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_pcqi_04.jpg" alt="PCQI training content">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">PCQI training content</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Preventive management concept training for FSMA response</li>
                                    <li><span class="bullet"></span>Food safety plan overview</li>
                                    <li><span class="bullet"></span>Operating GMP and other prerequisite programs</li>
                                    <li><span class="bullet"></span>Biological food safety hazards</li>
                                    <li><span class="bullet"></span>Food safety hazards in terms of chemical, physical and economic aspects</li>
                                    <li><span class="bullet"></span>Pre-steps for the development of a food safety plan</li>
                                    <li><span class="bullet"></span>Assistance in preparing a food safety plan (material)</li>
                                    <li><span class="bullet"></span>Hazard Analysis and Determination of Preventive Control Points-Outline</li>
                                    <li><span class="bullet"></span>Hazard analysis and determination of preventive control points</li>
                                    <li><span class="bullet"></span>Preventive management</li>
                                    <li><span class="bullet"></span>Preventive management of food allergy support</li>
                                    <li><span class="bullet"></span>Supply chain preventive management</li>
                                    <li><span class="bullet"></span>Verification and validation procedure</li>
                                    <li><span class="bullet"></span>Record storage and management</li>
                                    <li><span class="bullet"></span>Recovery plan</li>
                                    <li><span class="bullet"></span>Overview of the law (GMP, risk analysis, risk-based preventive management)</li>
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

        </article><!----// 컨텐츠 04 PCQI 컨텐츠 종료 //------->
             
    </div><!--+++ / 20.05.07 탭컨텐츠 영역 / +++-->
</div> <!--------// div class="content_wrap"  종료 //------------------>
                    
                    



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>