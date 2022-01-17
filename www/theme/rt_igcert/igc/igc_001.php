<?php
include_once('./_common.php');
$g5['title'] = '회사소개';
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
         width:160px 
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
                <img src="<?php echo G5_THEME_URL ?>/img/sub01_01_img01.jpg" alt="(주)아이지씨인증원 이미지" />
                <p>(주)아이지씨인증원은 고객만족 서비스를 제공하기 위해 끊임없이 노력하겠습니다.<br>감사합니다!.</p>
                <p>(주)아이지씨인증원 대표이사 <strong>공 길택</strong></p>
                <div class="download_box">
                     <a class="btn" href="/data/file/IGC_01.pdf" download>IGC인증원 회사소개 PDF 다운로드</a>
                     <a class="btn" href="/data/file/IGC_02_food.pdf" download>IGC인증원(식품) 회사소개 PDF 다운로드</a>
                     <a class="btn" href="/data/file/IGC_03_GPC.pdf" download>IGC인증원(GPC) 회사소개 PDF 다운로드</a>
                </div>
            </div>
            
            <div class="animated fadeInUpShort" data-id="1">
                <h2>
                    <span>(주)아이지씨인증원은</span>
                     고객님의 해외시장 진출 및 경쟁력 제고를 위하여 글로벌 경쟁력을 기반으로 시스템인증, 제품인증, 심사원 양성훈련, 심사원 등록과  시험 및 검사 업무를 ONE STOP의 개념으로 제공하는 국제공인 인증기관이며, 다음과 같은 서비스를 제공합니다. 
                </h2>
                <div>
                    <h3>1.경영시스템인증 서비스<span>(Management System Certification Services)</span></h3>
                    <p>
                        ISO 9001 (품질경영시스템)<br> 
                        ISO 14001 (환경경영시스템)<br>
                        ISO 13485 (의료기기품질경영시스템)<br>
                        ISO/IEC 27001 (정보보안경영시스템)<br>
                        ISO 45001 (안전보건경영시스템)<br>
                        ISO 37001 (반부패경영시스템)<br>
                        ISO 22000 (식품안전경영시스템)<br>
                        FSSC 22000 (식품안전시스템인증)<br>
                        FDA FSMA3자 인증 (FDA식품 생산설비)<br>
                        ISO 50001 (에너지경영시스템)<br>
                        ISO 22716 (화장품 우수제조관리기준)<br>
                        ISO 22301 (비즈니스연속성 경영시스템)<br>
                        ISO 15378 (의약품 포장재 지침)<br>
                        ISO 21001 (교육기관경영시스템)<br>
                        ISO/IEC 20000-1 (서비스경영시스템)<br>
                        ISO/IEC 27701 (개인정보보안 경영시스템)<br>
                    </p>
                     <a href="/theme/rt_igcert/manage/igc_006.php" class="detail_btn"> 자세히보기&nbsp; > </a>
                 </div>
            </div>
        </section>

        <hr style="display:block;height:1px;margin-top:0px;margin-bottom:0px;">

        <section class="sec01 paragraph animatedParent" data-sequence="300">
            <div class="sec01_01 animated fadeInRightShort" data-id="1">
                <h3>2.제품인증 서비스(Product Certification Services)</h3>
                <p>
                    IGC는 다년간의 축적된 경험을 바탕으로 유럽으로 제품을 수출하고자 하는 기업을 대상으로 다양한 분야에 대한 제품인증 서비스를 제공하고 있습니다.
                    의료기기(CE제품인증 서비스)의 경우 강화된 MDR 요구사항에 신속히 대응하여 고객사의 원활한 해외시장 진출을 지원합니다.
                    IGC는 해외 유수의 제품인증 기관과 협력관계 구축을 통하여 가장 경쟁력 있는 제품인증 서비스를 제공하고 있습니다. <br>
                    IGC인증원은 미국 캘리포니아에 직영 FDA DESIGNATED OFFICE를 운영하며 전문인력을 배치하여 FDA OFFICER들과의 원활한 의사소통을 통하여 고객사의 FDA 프로젝트를 성공적으로 수행하고 있습니다.
                    <br><br>
                    <span class="sec01_01_b">인증 내용</span>
                    GOST, EAC, FCE &amp; SID, OTC, CPNP 
                </p>
                <a href="/theme/rt_igcert/product/igc_069.php" class="detail_btn center"> 자세히보기&nbsp; > </a>
                <hr style="display:block;height:1px;margin-top:40px;">

                <h3>3.제품 시험 검사서비스(Product Testing Services)</h3>
                <p>
                    <span class="sec01_01_b">&#9883; IGC LAB의 글로벌 경쟁력</span>
                    IGC LAB은 고객사 제품의 해외시장 진출을 지원하기 위하여 미국의 인정기구 IAS로부터 다양한 분야의 시험 업무에 대한 인정을 획득하였습니다.(TL-799/TL-832) <br>
                    IGC시험성적서는 ilac과 MRA가 체결된 인정기관인 IAS로부터 인정을 받은 시험기관의 성적서이므로, 전세계 어디에서도 통용될 수 있습니다.
                </p>
                <a href="/theme/rt_igcert/medical/igc_026.php" class="detail_btn center"> 자세히보기&nbsp; >  </a>
                <hr style="display:block;height:1px;margin-top:40px;">

                <h3>4.개인인증 서비스(Personnel Certification Services)</h3>
                <p>
                    IGC는 개인인증에 대한 IAF MLA를 체결한 IAS로부터 인정받은 GPC와의 협력을 통해 ISO Management System 심사원 및 전문인력 인증 서비스를 진행하고 있습니다. 
                    <span class="sec01_01_b center">
                        IGC는 GPC와의 협력을 통해 공인 심사 자격 인증 취득을 지원하고 있습니다.
                    </span>
                </p>
                <a href="/theme/rt_igcert/edu1/igc_033.php" class="detail_btn center"> 자세히보기&nbsp; > </a>
                <hr style="display:block;height:1px;margin-top:40px;">

                <h3>5.심사원 양성 서비스(Auditor Training Services)</h3>
                <p>
                    GPC는 심사자격 인증과 더불어 IAF Association member인 IPC와 MLA를 체결하여 심사원 양성을 위한 연수기관 지정 권한을 승인 받아 서비스를 제공하고 있습니다.
                    <br><br>
                    IGC는 GPC로부터 제 1호 연수기관으로 지정 받아 다양한 국제 표준에 대한 심사원 양성 교육을 진행하고 있습니다.
                    <span class="sec01_01_b center">
                         IGC 및 GPC를 통한 교육 수료 및 심사 자격 인증은 전 세계적으로 인정받는 공신력 있는 서비스입니다.
                    </span>
                 </p>
                <a href="/theme/rt_igcert/aduits/igc_104.php" class="detail_btn center"> 자세히보기&nbsp; > </a>
            </div>

        </section>
        
        <hr style="display:block;width:100%;height:1px;padding:0 50 50 90;">

        <section class="sec02 animatedParent" data-sequence="300">
            <h2 class="title animated fadeInRightShort" data-id="1">회사개요</h2>
            <table class="animated fadeInRightShort" data-id="2">
                <tr>
                    <th>회사명</th>
                    <td>(주)아이지씨인증원</td>
                    <th>CEO</th>
                    <td>공길택</td>
                </tr>
                <tr>
                    <th>규모</th>
                    <td>중소기업</td>
                    <th>Since</th>
                    <td>2000.02</td>
                </tr>
                <tr>
                    <th>대표전화 / 팩스</th>
                    <td colspan="3">02-6749-0701 / 02-6749-0711</td>
                </tr>
                <tr>
                    <th>메인 홈페이지</th>
                    <td colspan="3">https://www.igcert.org</td>
                </tr>
                <tr>
                    <th>주소</th>
                    <td colspan="3"> (08504) 서울특별시 금천구 서부샛길 638, 대륭테크노타운7차 501,502</td>
                </tr>	
            </table>
        </section>
        <br><br>

        <!----(주)아이지씨인증원 사업영역 시작-------->
        <section class="partner_type2">
            <h2 class="con_arrow">
               <p>우리가 제공하는 관련 서비스</p>
            </h2>
                <div class="con_box">
                  <ul>
                    <li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>시험</span></p></li>
                    <li><p><em><strong>03</strong></em><span>전문인력 양성 교육</span></p></li>
                    <li><p><em><strong>04</strong></em><span>제품 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>심사원 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>연수기관 지정</span></p></li>
                  </ul>
                </div>
        </section>
        <!---------(주)아이지씨인증원 사업영역 종료 ------> 
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>