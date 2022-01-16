<?php
	include_once('./_common.php');
$g5['title'] = 'China Product Certification';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #404953 }/* 상세페이지 포인트 컬러 */
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
	.partner_type2 .con_box ul li { float: left;width: 100%;margin: 10px 0 }/* 리스트 세로배열 */
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
			<li><a href="javascript:;">CFDA</a></li>
			<li class="on"><a href="javascript:;">Food Sanitary Registration</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 종료  +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

    <!--+++ 20.05.01 탭컨텐츠 영역 시작 +++-->
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 +++++-->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">China product certification introduction</h1>
                <h2 class="tit_cer fc_pointer">CFDA</h2>
                <p class="outline">
                    The National Maternity and Perinatal Audit (NMPA) is an organization under the State Council of China, and is responsible for the management and supervision of medical devices nationwide, similar to the Korean Food and Drug Administration. Among imported medical devices in China, NMPA target products can be marketed after approval.<br><br>
                    The National Maternity and Perinatal Audit (NMPA) was changed from CFDA to NMPA due to the reorganization of the governmental organization in March 2018. It stipulated that health food (health functional food in Korea) is managed and supervised by the National Market Supervision and Administration Bureau.<br><br>
                    NMPA can be seen as CFDA in the past and is currently divided into two organizations, but for convenience, it is collectively referred to as NMPA.
                </p>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_china_cfda_01.jpg" alt="What is NMPA registration?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">What is NMPA registration?</h3>
                                <p class="con_txt">
                                    It refers to the registration process in which the product lines included in the following items are certified by the Chinese NMPA according to Chinese regulations.
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Medical devices (including in vitro diagnostic devices)</li>
                                        <li><span class="bullet"></span>Cosmetics</li>
                                        <li><span class="bullet"></span>Raw materials and ingredients for pharmaceuticals and pharmaceutical packaging materials</li>
                                        <li><span class="bullet"></span>Infant formula</li>
                                        <li><span class="bullet"></span>Health food (nutrients and special dietary supplements)</li>
                                        <li><span class="bullet"></span>Food for special medical purposes</li>
                                    </ul>
                                </div>
                                <p style="text-align:justify;">
                                    The NMPA certification is a system introduced so that it can match international requirements as international competition intensifies after identifying institutional gaps as China faces globalization.<br><br>
                                    Import, sale and use of the above products are permitted only with valid NMPA certification for quality assurance and product safety.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_china_cfda_02.jpg" alt="NMPA related regulations">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">NMPA related regulations</h3>
                                <p class="con_txt">
                                    The ever-changing laws and increasing regulatory requirements make the application process complex and difficult, not only for first time applicants, but also for companies with extensive application experience. This is because the laws related to NMPA certification for certain product lines have been introduced only recently and are constantly being revised.<br><br>
                                    NMPA registration rules are similar to international standards.
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>GB standard (national standard)</li>
                                        <li><span class="bullet"></span>YY standard (industry standard)</li>
                                    </ul>
                                </div>
                                <p style="text-align:justify;">
                                    In particular, the guidelines for labeling health food warning phrases are scheduled to be implemented from 2020, so health food must indicate the warning phrase, production date, and quality guarantee period on the minimum packaging (container). In addition, the number of health foods subject to the registration system is expected to increase as the health food ingredient list and health function list management method are implemented.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_china_cfda_03.jpg" alt="What is SAMR?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">What is SAMR?</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>On March 13, 2018, at the 13th National People's Congress, the Chinese Cabinet decided to reduce the number of ministries at the ministerial level, and the related regulations and officials in charge of registration were to remain the same.</li>
                                    <li><span class="bullet"></span>“Health food” in China refers to foods that can supply nutrients to specific or general consumers or control body functions, and are foods that are not intended for treatment and do not have acute or chronic harm to the human body. SAMR health food license and registration is an essential gateway to export health food to China. Only health food approved by the National Market Supervision and Management Administration (SAMR) can be officially sold in China.</li>
                                    <li><span class="bullet"></span>State Administration for Market Regulation (SAMR) and China Drug Administration (CDA) have decided to replace CFDA</li>
                                    <li><span class="bullet"></span>In IGC, since all revisions have not been finalized, they are used interchangeably with the term CFDA.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-4 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">Classification of medical devices</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_china_cfda_04.jpg" alt="Classification of medical devices">
                                    </div>
                                </div>
                                <table class="type02">
                                    <thead>
                                        <tr>
                                            <th scope="cols" width="15%">
                                                <p>Classification</p>
                                            </th>
                                            <th scope="cols">
                                                <p>Definition</p>
                                            </th>
                                            <th scope="cols">
                                                <p>Product</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- 1등급 시작 -->
                                        <tr>
                                            <th scope="row" rowspan="5">
                                                <p>Class I</p>
                                            </th>
                                            <td rowspan="5">
                                                <p>Medical devices that can guarantee safety and effectiveness through general management</p>
                                            </td>
                                            <td class="none">
                                                <p>Basic surgical instruments</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Ophthalmology/Otolaryngology surgical instruments</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Stethoscope</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Medical hammer</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Medical radiation protection equipment and supplies</p>
                                            </td>
                                        </tr>
                                        <!-- 1등급 종료 -->
                                        
                                        <!-- 2등급 시작 -->
                                        <tr>
                                            <th scope="row" rowspan="13">
                                                <p>Class II</p>
                                            </th>
                                            <td rowspan="13">
                                                <p>Medical devices requiring additional management to ensure safety and effectiveness</p>
                                            </td>
                                            <td class="none">
                                                <p>Medical suture</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Neurosurgery surgical instruments</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Thermometer, sphygmomanometer, spirometer</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Electrocardiogram, diagnostic device</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Disinfection and sterilization equipment</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Contraceptive</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Blood flow measuring device</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Ophthalmic optics</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Magnetotherapy machine</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Medical X-ray accessories and parts</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Ultrasound physiotherapy equipment</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Surface sealing material</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Biochemical analyzer</p>
                                            </td>
                                        </tr>
                                        <!-- 2등급 종료 -->
                                        
                                        <!-- 3등급 시작 -->
                                        <tr>
                                            <th scope="row" rowspan="11">
                                                <p>Class III</p>
                                            </th>
                                            <td rowspan="11">
                                                <p>Medical devices that are used for life support or maintenance, are inserted into the human body, or have a potential risk to the human body and must be strictly managed from the viewpoint of safety and effectiveness.</p>
                                            </td>
                                            <td class="none">
                                                <p>Needle and electronic needle</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Electronic endoscope</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Ultrasound surgical equipment and treatment equipment</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Laser surgery and treatment equipment</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Medical high frequency equipment and equipment</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>MRI, X-ray treatment diagnostic equipment</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Medical radiation therapy equipment</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Blood type analyzer</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Oxygen supply prosthesis</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Medical sealing material and bonding material</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>Fluids, transfusion devices and hoses</p>
                                            </td>
                                        </tr>
                                        <!-- 3등급 종료 -->
                                    </tbody>
                                </table>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_china_cfda_05.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC is able to provide the best service in the field of certification based on long experience and trust accumulated with customers.</li>
                                    <li><span class="bullet"></span>As the best partner for exporting to China and other overseas certifications, IGC Certification Center accurately supports the issuance of Chinese certificates necessary for Korean companies to enter the Chinese market.</li>
                                    <li><span class="bullet"></span>It is possible to respond quickly to variables in the regulations of the China Sanitation Permit Bureau, which are constantly changing rapidly, and quick feedback on work is possible.</li>
                                    <li><span class="bullet"></span>It is possible to quickly connect to the laboratory and share the rapid progress through the Beijing branch office direct management system.</li>
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
                        <li><p><em><strong>01</strong></em><span>System certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (Medical devices, Medicine, Food, Cosmetics)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Product test</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Auditor qualification certification</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Professional auditor training</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>
           
        </article><!----// 컨텐츠 01 CFDA 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 02 식품위생 등록 컨텐츠 시작 //------->
        <article style="display:block">
            <section class="business_type5" class="area">
                <h1 class="tit_num">China product certification introduction</h1>
                <h2 class="tit_cer fc_pointer">Food Sanitary Registration</h2>
                <p class="outline">
                    As food exports to China increase every year, customs clearance issues are becoming very important when exporting food to China. Currently, exports of various foods such as snacks and ramen, as well as Korean health functional foods, are showing continuous growth. As food exports to China increase every year, the issue of customs clearance to China is becoming very important. (CIQ检验检疫证明, CIQ inspection and quarantine certificate = sanitation permit)
                </p>
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_china_registration_01.jpg" alt="What is an import export zone?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">What is an import export zone?</h3>
                                <p style="text-align:justify;">
                                    In Korea, in the 1980s, only companies with certain licenses were allowed to export and import through the first class trade registration system. This was a system to secure trust in overseas customers and to efficiently manage foreign exchange.<br><br>
                                    Currently, even if China has a business registration card equivalent to the Korean business registration card, it is only possible to import and export imports and exports only after obtaining an import-export license.<br><br>
                                    The agency system for import and export countries is an official system recognized by the Chinese government. It is not illegal at all, and when the importer does not have an exit permit, it is a system that allows the importer to clear the import and export licensed company, and the actual taxpayer to import under the name of the accidental party.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">Exporter preparation documents</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_china_registration_02.jpg" alt="Exporter preparation documents">
                                    </div>
                                </div>
                                <table class="type02">
                                    <thead style="text-align:center">
                                        <tr style="border-bottom:1px solid #fff">
                                            <th scope="cols" style="border-right:1px solid #fff">
                                                <p>Number</p>
                                            </th>
                                            <th scope="cols" style="border-right:1px solid #fff">
                                                <p>Document name<br> (Korean)</p>
                                            </th>
                                            <th scope="cols" style="border-right:1px solid #fff">
                                                <p>Document name<br> (Chinese)</p>
                                            </th>
                                            <th scope="cols" width="30%" style="border-right:1px solid #fff">
                                                <p>Document name<br> (English)</p>
                                            </th>
                                            <th scope="cols" style="border-right:1px solid #fff">
                                                <p>Issuance</p>
                                            </th>
                                            <th scope="cols">
                                                <p>Issuing agency</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><!-- 제조증명서(영문) -->
                                            <th scope="row">
                                                <p>1</p>
                                            </th>
                                            <td>
                                                <p>제조증명서(영문)</p>
                                            </td>
                                            <td>
                                                <p>制作证明书（英文）</p>
                                            </td>
                                            <td>
                                                <p>CERTIFICATE OF MANUFACTURE</p>
                                            </td>
                                            <td>
                                                <p>Korea</p>
                                            </td>
                                            <td class="none">
                                                <p>Ministry of Food and Drug Safety (MFDS)</p>
                                            </td>
                                        </tr>
                                        <tr><!-- 자유판매증명서(영문) -->
                                            <th scope="row">
                                                <p>2</p>
                                            </th>
                                            <td>
                                                <p>자유판매증명서(영문)</p>
                                            </td>
                                            <td>
                                                <p>自由贩卖证明书（英文）</p>
                                            </td>
                                            <td>
                                                <p>CERTIFICATE OF FREE SALES</p>
                                            </td>
                                            <td>
                                                <p>Korea</p>
                                            </td>
                                            <td class="none">
                                                <p>Ministry of Food and Drug Safety (MFDS)</p>
                                            </td>
                                        </tr>
                                        <tr><!-- 위생증명서(영문) -->
                                            <th scope="row">
                                                <p>3</p>
                                            </th>
                                            <td>
                                                <p>위생증명서(영문)</p>
                                            </td>
                                            <td>
                                                <p>卫生证明（英文）</p>
                                            </td>
                                            <td>
                                                <p>HEALTH CERTIFICATE</p>
                                            </td>
                                            <td>
                                                <p>Korea</p>
                                            </td>
                                            <td class="none">
                                                <p>Ministry of Food and Drug Safety (MFDS)</p>
                                            </td>
                                        </tr>
                                        <tr><!-- 영문 사업자등록증 -->
                                            <th scope="row">
                                                <p>4</p>
                                            </th>
                                            <td>
                                                <p>영문 사업자등록증</p>
                                            </td>
                                            <td>
                                                <p>英文营业执照</p>
                                            </td>
                                            <td>
                                                <p>CERTIFICATE OF BUSINESS REGISTRATION</p>
                                            </td>
                                            <td>
                                                <p>Korea</p>
                                            </td>
                                            <td class="none">
                                                <p>National Tax Service (NTS)</p>
                                            </td>
                                        </tr>
                                        <tr><!-- 공장신고증(영문) -->
                                            <th scope="row">
                                                <p>5</p>
                                            </th>
                                            <td>
                                                <p>공장신고증(영문)</p>
                                            </td>
                                            <td>
                                                <p>工厂申报证</p>
                                            </td>
                                            <td>
                                                <p>REGISTRATION CERTIFICATION FORM</p>
                                            </td>
                                            <td>
                                                <p>Korea</p>
                                            </td>
                                            <td class="none">
                                                <p>Competent authority or self-production</p>
                                            </td>
                                        </tr>
                                        <tr><!-- 영양성분 검사성적서 -->
                                            <th scope="row">
                                                <p>6</p>
                                            </th>
                                            <td>
                                                <p>영양성분 검사성적서</p>
                                            </td>
                                            <td>
                                                <p>营养成分 检测书</p>
                                            </td>
                                            <td>
                                                <p>PRODUCT INSPECTION CERTIFICATION</p>
                                            </td>
                                            <td>
                                                <p>Korea</p>
                                            </td>
                                            <td class="none">
                                                <p>Manufacturing plant</p>
                                            </td>
                                        </tr>
                                        <tr><!-- 제품포장지 도면 -->
                                            <th scope="row">
                                                <p>7</p>
                                            </th>
                                            <td>
                                                <p>제품포장지 도면</p>
                                            </td>
                                            <td>
                                                <p>产品包装纸 图面</p>
                                            </td>
                                            <td>
                                                <p>WRAPPING PAPER MAP</p>
                                            </td>
                                            <td>
                                                <p>Korea</p>
                                            </td>
                                            <td class="none">
                                                <p>Exporter or manufacturer</p>
                                            </td>
                                        </tr>
                                        <tr><!-- 품질 표시 스티커(중국어) -->
                                            <th scope="row">
                                                <p>8</p>
                                            </th>
                                            <td>
                                                <p>품질 표시 스티커(중국어)</p>
                                            </td>
                                            <td>
                                                <p>食品品种标签</p>
                                            </td>
                                            <td>
                                                <p>LABEL STICKER</p>
                                            </td>
                                            <td>
                                                <p>Korea</p>
                                            </td>
                                            <td class="none">
                                                <p>Exporter or manufacturer</p>
                                            </td>
                                        </tr>
                                        <tr><!-- 원산지 증명서 -->
                                            <th scope="row">
                                                <p>9</p>
                                            </th>
                                            <td>
                                                <p>원산지 증명서</p>
                                            </td>
                                            <td>
                                                <p>原产地证明</p>
                                            </td>
                                            <td>
                                                <p>CERTIFICATION OF ORIGIN</p>
                                            </td>
                                            <td>
                                                <p>Korea</p>
                                            </td>
                                            <td class="none">
                                                <p>Korea Chamber of Commerce and Industry (KCCI)</p>
                                            </td>
                                        </tr>
                                        <tr><!-- 인보이스 -->
                                            <th scope="row">
                                                <p>10</p>
                                            </th>
                                            <td>
                                                <p>인보이스</p>
                                            </td>
                                            <td>
                                                <p>发票</p>
                                            </td>
                                            <td>
                                                <p>COMMERCIAL INVOICE</p>
                                            </td>
                                            <td>
                                                <p>Korea</p>
                                            </td>
                                            <td class="none">
                                                <p>Exporter</p>
                                            </td>
                                        </tr>
                                        <tr><!-- 패킹리스트 -->
                                            <th scope="row">
                                                <p>11</p>
                                            </th>
                                            <td>
                                                <p>패킹리스트</p>
                                            </td>
                                            <td>
                                                <p>箱单</p>
                                            </td>
                                            <td>
                                                <p>PACKING LIST</p>
                                            </td>
                                            <td>
                                                <p>Korea</p>
                                            </td>
                                            <td class="none">
                                                <p>Exporter</p>
                                            </td>
                                        </tr>
                                        <tr><!-- 업체별 제품정보리스트 -->
                                            <th scope="row">
                                                <p>12</p>
                                            </th>
                                            <td>
                                                <p>업체별 제품정보리스트</p>
                                            </td>
                                            <td>
                                                <p>货物明细</p>
                                            </td>
                                            <td>
                                                <p>DETAIL PACKING LIST</p>
                                            </td>
                                            <td>
                                                <p>Korea</p>
                                            </td>
                                            <td class="none">
                                                <p>Exporter</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="font-size:0.8rem">※ In addition, several additional documents may be added depending on product characteristics.</p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_china_registration_03.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p style="text-align:justify">
                                    IGC is contributing to the continuous development of customers by accurately evaluating the suitability of product certifications through the technology and expertise accumulated over the years. IGC has up-to-date knowledge of a wide range of specific scopes and legal requirements in major markets around the world, and provides knowledge and services to support your entire global operations.<br><br>
                                    Basically, when exporting to China, you need to check whether the local buyer company has an import license registered in China Customs. If there is no license, normal customs clearance will not take place.<br><br>
                                    In this situation, IGC can contact companies from importing and exporting countries to conduct customs clearance on behalf of the importing and exporting countries, and support trade practical work necessary for export, communication with buyers, consulting, delivery, customs clearance, etc.<br><br>
                                    In addition, it is possible to prepare in advance exchange of the most suitable cost and prompt customs clearance method according to the characteristics of the product.
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
                        <li><p><em><strong>01</strong></em><span>System certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (Medical devices, Medicine, Food, Cosmetics)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Product test</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Auditor qualification certification</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Professional auditor training</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>
           
        </article><!----// 컨텐츠 02 식품위생 등록 컨텐츠 종료 //------->   
    
    </div><!------div class="tab_con" 종료 --------->	
</div> <!--------// div class="content_wrap"  종료  ------------------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>