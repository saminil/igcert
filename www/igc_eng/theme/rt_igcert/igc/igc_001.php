<?php
include_once('./_common.php');
$g5['title'] = 'Introduction';
include_once(G5_THEME_PATH.'/head.php');
?>

<style>
    .content_wrap { 
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        font-size: 1rem;
        text-align:justify;
        font-weight: 400;
        line-height: 1.6 
    }
    /* ------------ 컨텐츠 ----------- */
    .sec01:after { 
        clear:both; 
        content:""; 
        display:block 
    }
    .sec01 > div { 
        float:left; 
        width:calc(100% - 450px) 
    }
    .sec01 h2 { /* 파란색 텍스트 */
        font-size:1rem;
        color:#3296dd;
        font-weight:300; 
        letter-spacing:-0.05em; 
        margin:0 0 30px 
    }
    .sec01 h2 span{  /* (주)아이지씨인증원은 */
        display:block;
        font-weight:400; 
        font-size:1.2rem;
        color:#3296dd;
        margin-bottom:5px;
    }
    .sec01 h3 { /* 컨텐츠 타이틀 */
        font-size:1.3rem; 
        margin:30px 0 10px 0; 
        font-weight:600; 
        letter-spacing:-0.05em; 
        color:#333;
        text-align:left;
    }
    .sec01 h3>span{ display:block; }
    .sec01 p { margin:0 0 20px }
    .sec01 .detail_btn{ /* 자세히보기 버튼 */
        display: block;
        background: #fff;
        border: 1px solid  #617c8f;
        font-weight: 500;
        color: #102f45;
        font-size: 0.95rem;
        padding: 6px 15px;
        width: 120px;
        border-radius: 0px;
        text-align: center;
        transition: all 0.2s;
    } 
    .sec01 .detail_btn:hover{ background:#f9f9f9; border: 1px solid  #f9f9f9;}
    .sec01 .center{ margin:30px auto 0;} 
    
    /* -- 이미지 영역 -- */
    .sec01 .img01 { 
        float:right; 
        width:400px 
    }
    .sec01 .img01 p { 
        text-align:right; 
        margin:18px 0 0 0 
    }
    .sec01 .img01 p strong { 
        font-size:1.2rem; 
        font-weight:500; 
    }
    .sec01 .img01 .download_box{
        display:block;
        text-align:right;
        background:#f5f5f5;
        border-radius:10px;
        margin-top:20px;
    }
    .sec01 .img01 .download_box .btn{
        height:auto;
        display: block;
        text-align: right;
        font-size:0.8rem;
        padding:-30px;
        color:#113046;
    }
    /* -- 2번 ~ 5번 -- */
    .sec01 .sec01_01{
        display:block;
        width:100%;
    }
    .sec01 .sec01_01 .sec01_01_b{ /* 파란색 강조 텍스트 */
        font-weight:400;
        color:#3296dd;
        display:block;
    }
    .sec02 h2.title { /* 회사개요 타이틀 */
        font-size:1.5em; 
        font-weight:700; 
        padding:5px 0 15px;  
        position:relative;
        margin-top: 30px;
    }
    .sec02 h2.title:before {  /* 회사개요 타이틀 위 border*/
        content:""; 
        display:block; 
        width:40px; 
        height:2px; 
        background:#3296dd; 
        position:absolute;
        left:0; top:0 
    }
    /* ------------ 테이블 ----------- */
    table{width:100%;}
    th,td{
        border: 1px solid #ddd;
        margin-left:10px;
        font-size:0.95rem;
    }
	table,td p {
        font-size:0.9rem;
        margin-left:0px;
        padding-left:10px;
    }
    td {
        font-size:96%;
        padding-left:10px;
    }
    .sub01_01 th, #ctt_con.sub01_01 td { 
        padding:12px; 
        text-align:left 
    }
     .sub01_01 th { 
         background:#f4f4f4;
         width:15%;
    }
    
    
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
    
    @media screen and (max-width: 1024px){
        
        .sec01 h2>span{display:inline;}
        .sec01 h3>span{display:inline;} /*1번 영문 텍스트*/
        .sec01 .detail_btn{margin:0 auto;}
        .sec01 > div { float:none; width:100%; }
        .sec01 .img01 { float:none;  width:100%; border-bottom:1px solid #ddd; padding-bottom:40px;margin-bottom:40px;}
        .sec01 .img01 img{ margin:40px 25% 0; display:block; width:50% }
        .sec01 .img01 p, .sec01 .img01 .download_box .btn{text-align:center;} /* 이미지 하단 텍스트 중앙정렬 */
        
    }
    
    @media only screen and (max-device-width: 768px) and (-webkit-min-device-pixel-ratio: 1) {

        .partner_type2 .con_box ul li { float:left; width:100%; list-style:none; margin:10px 0; }
        .img01 .btn{ text-align: center; }
        .img01 img{ margin: 20px 12.5% 5px; width: 75%; }
        
    }
    
    @media (max-width: 640px) {
        
        .content_wrap { font-size: 0.85rem }/* 전체 폰트 사이즈 조정 */
        .sec01 h2 { font-size:0.85rem; }
        .sec01 h2>span{ font-size:1rem; }
        .sec01 h3 { font-size:1.1rem; } /* 컨텐츠 타이틀 */
        .sec01 .img01 img{margin-top:0;}
        .sec01 .img01 p strong {font-size:0.95rem;} /* 대표이사 성함 */
        .sec01 .detail_btn{font-size:0.85rem;}
        th,td{ font-size:0.85rem;padding:10px;}
        .sub01_01 th {width:25%}
        .partner_type2 .con_arrow p { font-size: 1.4rem }/* 사업영역 타이틀 폰트 사이즈 조정 */
    }
    
    @media (min-width: 360px) and (max-device-width: 414px) {
        
        .sec01 h3 {font-size: 1rem;}
        .sec01 .img01 img{width:80%; margin:0 10%;}
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */
        
    }
    
    /* ============= 상세페이지 반응형 종료 ============= */
    
</style>

<div class="content_wrap">

    <div class="sub01_01">
        <section class="sec01 paragraph animatedParent" data-sequence="300">
            <div class="img01 animated fadeInUpShort" data-id="1">
                <img src="<?php echo G5_THEME_URL ?>/img/sub01_01_img01.jpg" alt="(주)아이지씨인증원 이미지" /><br>
                <p>IGC Co., Ltd. will constantly strive to provide customer satisfaction services.<br />Thank you.</p>
                <p>CEO of IGC Co., Ltd. <strong>Dr. Gill-Taik Gong</strong></p>
                <div class="download_box">
                     <a class="btn" href="/data/file/IGC_01.pdf" download >IGC Co., Ltd. Company introduction PDF Download </a>
                    <a class="btn" href="/data/file/IGC_02_food.pdf" download >IGC Co., Ltd.(Food) Company introduction PDF Download  </a>
                     <a class="btn" href="/data/file/IGC_03_GPC.pdf" download >IGC Co., Ltd.(GPC) Company introduction PDF Download</a>
                </div>
            </div>
            
            <div class="animated fadeInUpShort" data-id="1">
                <h2>
                    IGC is an internationally accredited certification that provides system certification, product certification, auditor training, auditor registration, testing, and inspection under the concept of ONE STOP based on global competitiveness in order to advance into overseas markets and enhance competitiveness. We provide the following services:
                </h2>

                <div>
                    <h3>1. Management System Certification Services</h3>
                    <p>
                       ISO 9001 (Quality Management System)<br>
                       ISO 14001 (Environmental Management System)<br>
                       ISO 13485 (Medical Device Quality Management System)<br>
                       ISO/IEC 27001 (Information Security Management System)<br>
                       ISO 45001 (Occupational Health and safety Management Systems)<br>
                       ISO 37001 (Anti-Bribery Management System)<br>
                       ISO 22000 (Food Safety Management System)<br>
                       FSSC 22000 (Food Safety System Certification)<br>
                       FDA FSMA 3rd Party Certification (FDA Food Production Facility)<br>
                       ISO 50001 (Energy Management System)<br>
                       ISO 22716 (Excellent Cosmetic Manufacturing Management Standard)<br>
                       ISO 22301 (Business Continuity Management System)<br>
                       ISO 15378 (Guidelines for Pharmaceutical Packaging Materials)<br>
                       ISO 21001 (Educational Institution Management System)<br>
                       ISO/IEC 20000-1 (Service Management System)<br>
                       ISO/IEC 27701 (Personal Information Security Management System)<br>
                    </p>
                    <a href="/igc_eng/theme/rt_igcert/manage/igc_006.php" class="detail_btn"> Detail &nbsp; > </a>
                 </div>
            </div>
        </section>
	
        <hr style="display:block;height:1px;margin-top:0px;margin-bottom:0px;">

        <section class="sec01 paragraph animatedParent" data-sequence="300">
            <div class="sec01_01 animated fadeInRightShort" data-id="1">
                <h3 class="second_ser">2. Product Certification Services</h3>
			    <p>
                    IGC provides product certification services in various fields to companies which want to export products to Europe based on their accumulated experience over many years. In the case of medical devices (CE product certification service), we quickly respond to the reinforced MDR requirements to support customers' smooth entry into overseas markets. IGC provides the most competitive product certification services by establishing cooperative relationships with leading overseas product certification organizations.<br>
                    IGC Certification Center operates FDA DESIGNATED OFFICE directly managed in California, USA, and is successfully carrying out FDA projects of customers through smooth communication with FDA Officers by deploying professional personnel.
                    <br><br>
                    <span class="sec01_01_b">Certification Content</span>
                    GOST, EAC, FCE &amp; SID, OTC, CPNP
			    </p>
                <a href="/igc_eng/theme/rt_igcert/product/igc_069.php" class="detail_btn center"> Detail &nbsp; > </a>
                <hr style="display:block;height:1px;margin-top:40px;">
                
                <h3>3. Product Testing Services</h3>
			     <p>
                    <span class="sec01_01_b">&#9883; IGC LAB’s Global Competitiveness </span>
			        IGC LAB has obtained accreditation for testing in various fields from IAS, an accreditation body in the United States, in order to support customers' products entering overseas markets (TL-799/TL-832). <br>
			       The IGC test report is a report that has been accredited by the IAS, the accreditation body where ILAC and MRA are signed, so it can be used anywhere in the world.
			    </p>
                <a href="/igc_eng/theme/rt_igcert/medical/igc_026.php" class="detail_btn center"> Detail &nbsp; > </a>
                <hr style="display:block;height:1px;margin-top:40px;">
                
                <h3>4. Personnel Certification Services</h3>
			    <p>
                    IGC is providing ISO Management System auditors and professional manpower certification services through cooperation with GPC recognized by IAS, which has signed the IAF MLA for personal certification.
                    <span class="sec01_01_b center">
                        IGC supports the acquisition of auditor qualification through cooperation with GPC.
                    </span>
			    </p>
                <a href="/igc_eng/theme/rt_igcert/edu1/igc_033.php" class="detail_btn center"> Detail &nbsp; > </a>
                <hr style="display:block;height:1px;margin-top:40px;">
                
                <h3>5. Auditor Training Services</h3>
			    <p>
                    In addition to certification of audit qualifications, GPC has signed an MLA with IPC, a member of the IAF Association, to provide services with approval of the authority to designate a training institution for training auditors.
                    <br><br>
                    IGC has been designated as the No. 1 training institution by GPC and conducts training to train auditors for various international standards.
                    <span class="sec01_01_b center">
                        Completion of training and certification through IGC and GPC is a globally recognized and trusted service.
                    </span>
                </p>
			    <a href="/igc_eng/theme/rt_igcert/aduits/igc_104.php" class="detail_btn center"> Detail &nbsp; > </a>
            </div>
        </section>
        
        <hr style="display:block;width:100%;height:1px;padding:0 50 50 90;">

        <section class="sec02 animatedParent" data-sequence="300">
            <h2 class="title animated fadeInRightShort" data-id="1">Company Overview</h2>
            <table class="animated fadeInRightShort" data-id="2">
                <tr>
                    <th>Company</th>
                    <td>Institute of Global Certification Co., Ltd.</td>
                    <th>CEO</th>
                    <td>Dr. Gill-Taik Gong</td>
                </tr>
                <tr>
                    <th>Scale</th>
                    <td>Small and medium-sized enterprise</td>
                    <th>Since</th>
                    <td>Feb, 2000</td>
                </tr>
                <tr>
                    <th>Contact</th>
                    <td colspan="3"> [Tel.] +82 2 6749 0701  /  [Fax.] +82 2 6749 0711</td>
                </tr>
                <tr>
                    <th>Homepage</th>
                    <td colspan="3">https://www.igcert.org</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td colspan="3"> (08504) #501, 502, Daeryung-Technotown 7th, 638, Seobusaet-gil, Geumcheon-gu, Seoul, Republic of Korea</td>
                </tr>	
            </table>
        </section>
        <br><br>

        <!----(주)아이지씨인증원 사업영역 시작-------->
        <section class="partner_type2">
                <h2 class="con_arrow">
            <p>Related Services from IGC</p>
                </h2>
                <div class="con_box">
                  <ul>
                    <li><p><em><strong>01</strong></em><span>System Certification</span></p></li>
                    <li><p><em><strong>02</strong></em><span>Testing</span></p></li>
                    <li><p><em><strong>03</strong></em><span>Professional Personnel Training Course</span></p></li>
                    <li><p><em><strong>04</strong></em><span>Product Certification</span></p></li>
                    <li><p><em><strong>05</strong></em><span>Auditor Certification</span></p></li>
                    <li><p><em><strong>06</strong></em><span>Training Institution Designation</span></p></li>
                  </ul>
                </div>
        </section>
        <!---------(주)아이지씨인증원 사업영역 종료 ------> 
        
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>