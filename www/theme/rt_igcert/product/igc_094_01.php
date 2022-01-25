<?php
	include_once('./_common.php');
$g5['title'] = '중국 제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
			<li><a href="javascript:;">CFDA</a></li>
			<li class="on"><a href="javascript:;">식품 위생 등록</a></li>
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
                <h1 class="tit_num">중국 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">CFDA(중국 국가식품약품 감독관리총국)</h2>
                <p class="outline">
                    NMPA(National Maternity and Perinatal Audit)는 중국 국무원 산하 기관으로 전국의 의료기기에 대한 관리 및 감독의 책임을 지고 있으며, 한국 식약처와 유사합니다. 중국 내 수입 의료기기 중 NMPA의 대상 제품은 승인 후 시장 판매가 가능합니다.<br><br>
                    NMPA(National Maternity and Perinatal Audit)는 2018년 3월 정부 기구 개편으로 중국국가식약품감독관리총국이 CFDA에서 NMPA로 변경되었고, 보건식품(한국의 건강기능식품)은 국가 시장 감독 관리국에서 관리 감독한다고 규정하였습니다.<br><br>
                    NMPA는 과거 CFDA로 볼 수 있으며, 현재 두 기관으로 나뉘어 있으나 편의상 NMPA로 통칭합니다.
                </p>
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_china_cfda_01.jpg" alt="NMPA 등록이란?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">NMPA 등록이란?</h3>
                                <p class="con_txt">
                                    다음 항목에 포함되는 제품군이 중국 규정에 따라 중국 NMPA에서 인증을 받는 등록 절차를 뜻합니다.
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>의료기기 (체외진단기기 포함)</li>
                                        <li><span class="bullet"></span>화장품</li>
                                        <li><span class="bullet"></span>의약품, 의약품 포장재 원료와 원성분</li>
                                        <li><span class="bullet"></span>유아용 분유</li>
                                        <li><span class="bullet"></span>건강식품 (영양제 그리고 특수 건강 기능 식품)</li>
                                        <li><span class="bullet"></span>특수 의료용 목적의 식품</li>
                                    </ul>
                                </div>
                                <p style="text-align:justify;">
                                    NMPA 인증은 중국이 세계화에 직면하면서 제도적인 격차를 파악한 후 국제 경쟁이 심화되자 국제 요구 사항과 견줄 수 있도록 도입된 제도입니다.<br><br>
                                    상기 제품의 수입, 판매 및 사용은 품질 보증과 제품 안전을 위해 유효한 NMPA 인증이 있어야만 허용됩니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_china_cfda_02.jpg" alt="NMPA 관련 규정">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">NMPA 관련 규정</h3>
                                <p class="con_txt">
                                    끊임없이 변화하는 법률과 늘어나는 규제 요건은 최초 신청자뿐만 아니라 신청 경험이 많은 기업에게도 신청 절차를 복잡하고 어렵게 느껴지게 합니다. 특정 제품군에 대한 NMPA 인증 관련 법률이 최근에야 도입되어 지속적으로 개정되고 있기 때문입니다.<br><br>
                                    특정 제품군에 대한 NMPA 인증 관련 법률이 최근에야 도입되어 지속적으로 개정되고 있기 때문입니다.<br><br>
                                    NMPA 등록 규정은 국제 표준과 유사합니다.
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>GB표준 (국가 표준)</li>
                                        <li><span class="bullet"></span>YY표준 (산업 표준)</li>
                                    </ul>
                                </div>
                                <p style="text-align:justify;">
                                    특히 보건식품 경고 문구 표시 지침이 2020년부터 시행될 예정으로 보건식품은 최소 포장(용기)에 경고 문구, 생산일자, 품질보증기간을 표기해야 합니다. 또한 보건식품 원료 목록 및 보건기능 목록 관리 방법 시행에 따라 등록제가 적용되는 보건식품이 늘어날 전망입니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_china_cfda_03.jpg" alt="SAMR 이란?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">SAMR 이란?</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>2018년3월13일, 제13차 전국인민대표대회 때 중국 내각은 장관급 부처를 축소하기로 결정하고, 관련 규정과 등기 담당 공무원들은 그대로 유지하기로 하였습니다.</li>
                                    <li><span class="bullet"></span>중국에서의 ‘보건식품’ 이란 특정 혹은 일반 소비자에게 영양소를 공급하거나 체내 기능을 조절할 수 있는 식품으로, 치료를 목적으로 하지 않고 인체에 급성, 만성 위해가 없는 식품을 말합니다. SAMR 보건식품 허가 및 등록은 보건식품을 중국으로 수출 시 거쳐야 하는 필수 관문으로 국가시장감독관리총국 (SAMR)에서 허가한 보건식품만이 중국에서 정식 판매가 가능합니다.</li>
                                    <li><span class="bullet"></span>SAMR(State Administration for Market Regulation) 과 CDA(China Drug Administration)가 CFDA를 대체하기로 하였습니다.</li>
                                    <li><span class="bullet"></span>IGC 에서는 모든 개정 사항이 아직 확정되지 않았기 때문에 CFDA라는 용어와 함께 혼용하여 사용하고 있습니다.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-4 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">의료기기 등급분류</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_china_cfda_04.jpg" alt="의료기기 등급분류">
                                    </div>
                                </div>
                                <table class="type02">
                                    <thead>
                                        <tr>
                                            <th scope="cols" width="15%">
                                                <p>등급분류</p>
                                            </th>
                                            <th scope="cols">
                                                <p>정의</p>
                                            </th>
                                            <th scope="cols" width="20%">
                                                <p>제품</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- 1등급 시작 -->
                                        <tr>
                                            <th scope="row" rowspan="5">
                                                <p>1등급</p>
                                            </th>
                                            <td rowspan="5">
                                                <p>일반적인 관리로 안전성 및 유효성을 보장할 수 있는 의료기기</p>
                                            </td>
                                            <td class="none">
                                                <p>기초 외과수술기구</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>안과/이비인후과용 수술기구</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>청진기</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>의료용 망치</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>의료용 방사선 보호설비 및 용품</p>
                                            </td>
                                        </tr>
                                        <!-- 1등급 종료 -->
                                        
                                        <!-- 2등급 시작 -->
                                        <tr>
                                            <th scope="row" rowspan="13">
                                                <p>2등급</p>
                                            </th>
                                            <td rowspan="13">
                                                <p>안전성 및 유효성을 보장하기 위하여 추가적인 관리가 요구되는 의료기기</p>
                                            </td>
                                            <td class="none">
                                                <p>의료용 봉합기</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>신경외과 수술기구</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>체온계, 혈압계, 폐활량계</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>심전, 진단 기기</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>소독, 살균 설비 기구</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>피임기구</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>혈류량 측정 기구</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>안과 광학기계</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>자기요법 기계</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>의료용 X선 부속설비 및 부품</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>초음파 물리요법기기</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>표면 봉합 재료</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>생화학분석기</p>
                                            </td>
                                        </tr>
                                        <!-- 2등급 종료 -->
                                        
                                        <!-- 3등급 시작 -->
                                        <tr>
                                            <th scope="row" rowspan="11">
                                                <p>3등급</p>
                                            </th>
                                            <td rowspan="11">
                                                <p>생명 보조 또는 유지에 사용되고 인체에 삽입되거나 인체에 대한 잠재적 위험성을 가지고 있어 안전성 및 유효성 관점에서 엄격하게 관리되어야 하는 의료기기</p>
                                            </td>
                                            <td class="none">
                                                <p>주사침 및 전자침</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>전자내시경</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>초음파 수술기 및 치료설비</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>레이저 수술 및 치료설비</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>의료용 고주파 기기 및 설비</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>MRI, X선 치료 진단 설비</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>의료용 방사선 치료 설비</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>혈액형 분석기</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>산소 공급기 인공기관</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>의료용 봉합 재료 및 접합재료</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="none">
                                                <p>수액, 수혈 기구 및 호스</p>
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
                                <img src="./images/product_china_cfda_05.jpg" alt="IGC인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증원의 역량</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC는 오랜 경험과 고객과 쌓아온 신뢰를 바탕으로 인증분야 최고의 서비스를 제공할 수 있습니다.</li>
                                    <li><span class="bullet"></span>IGC인증원은 중국 수출 및 기타 해외인증의 최상의 파트너로서 한국 기업이 중국 시장 진출을 위해 반드시 필요한 중국 인증서 발급을 정확하게 지원합니다.</li>
                                    <li><span class="bullet"></span>계속적으로 급변하는 중국 위생허가국 규정에 대한 변수에 대해 발빠르게 대응이 가능하며 업무에 대한 빠른 피드백이 가능합니다.</li>
                                    <li><span class="bullet"></span>북경 지사 직영 시스템으로 신속한 시험소 연결 및 발빠른 진행과정 공유가 가능합니다.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </section>
               
            <!----(주)아이지씨인증원 사업영역 시작-------->
            <section class="partner_type2">
                <h2 class="con_arrow">
                    <p>우리가 제공하는 관련 서비스</p>
                </h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
                        <li><p><em><strong>02</strong></em><span>제품 인증(의료기기, 의약품, 식품, 화장품)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
                        <li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>
           
        </article><!----// 컨텐츠 01 CFDA 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 02 식품위생 등록 컨텐츠 시작 //------->
        <article style="display:block">
            <section class="business_type5" class="area">
                <h1 class="tit_num">중국 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">식품위생 등록</h2>
                <p class="outline">
                    해마다 중국으로의 식품 수출이 증가하면서 중국으로 식품 수출 시 통관 문제가 매우 중요해지고 있습니다. 현재 한국 건강기능식품 뿐만 아니라 과자류 및 라면 류 등 다양한 식품의 중국 수출이 지속적인 성장세를 보이고 있습니다. 해마다 중국 식품 수출이 늘어나면서 중국으로 식품을 통관하는 문제가 매우 중요해지고 있습니다. (CIQ检验检疫证明, CIQ 검사검역 증명서=위생허가)
                </p>
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_china_registration_01.jpg" alt="수입수출구(进出口)란?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">수입수출구(进出口)란?</h3>
                                <p style="text-align:justify;">
                                    한국 역시 1980년대에는 갑종 무역업 등록이라는 제도를 통해서 수출 수입을 일정한 허가를 받은 업체만 할 수 있었습니다. 이는 해외 거래처에 대한 신뢰도 확보 및 외환을 효율적으로 관리하기 위한 제도였습니다. 현재는 일반 사업자 등록증만 보유하고 있으면 언제든지 수출입을 할 수 있도록 제도가 변경되었습니다.<br><br>
                                    현재의 중국은 한국의 사업자등록증에 해당되는 사업자등록증을 가지고 있다고 하더라도 수입 수출을 할 수 있는 수입 수출국 허가를 추가로 받아야만 수출 수입을 할 수 있습니다.<br><br>
                                    수입 수출국 대행 제도는 중국 정부에서 인정하는 공식적인 제도입니다. 전혀 불법이 아니며 수입하는 사람이 진출구 허가가 없을 때 수입 수출을 허가받은 업체로 통관하고 실제 납세 의무자는 실수입자 회사 이름으로 수입이 가능한 제도입니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">수출자 준비 서류</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_china_registration_02.jpg" alt="수출자 준비 서류">
                                    </div>
                                </div>
                                <table class="type02">
                                    <thead>
                                        <tr>
                                            <th scope="cols">
                                                <p>번호</p>
                                            </th>
                                            <th scope="cols">
                                                <p>서류명(한국어)</p>
                                            </th>
                                            <th scope="cols">
                                                <p>서류명(중국어)</p>
                                            </th>
                                            <th scope="cols" width="30%">
                                                <p>서류명(영어)</p>
                                            </th>
                                            <th scope="cols">
                                                <p>발급</p>
                                            </th>
                                            <th scope="cols">
                                                <p>발급 기관</p>
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
                                                <p>한국</p>
                                            </td>
                                            <td class="none">
                                                <p>식품의약품안전처</p>
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
                                                <p>한국</p>
                                            </td>
                                            <td class="none">
                                                <p>식품의약품안전처</p>
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
                                                <p>한국</p>
                                            </td>
                                            <td class="none">
                                                <p>식품의약품안전처</p>
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
                                                <p>한국</p>
                                            </td>
                                            <td class="none">
                                                <p>국세청</p>
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
                                                <p>한국</p>
                                            </td>
                                            <td class="none">
                                                <p>관할관청 or 자체제작</p>
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
                                                <p>한국</p>
                                            </td>
                                            <td class="none">
                                                <p>제조공장</p>
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
                                                <p>한국</p>
                                            </td>
                                            <td class="none">
                                                <p>수출자 또는 제조자</p>
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
                                                <p>한국</p>
                                            </td>
                                            <td class="none">
                                                <p>수출자 또는 제조자</p>
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
                                                <p>한국</p>
                                            </td>
                                            <td class="none">
                                                <p>대한상공회의소</p>
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
                                                <p>한국</p>
                                            </td>
                                            <td class="none">
                                                <p>수출자</p>
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
                                                <p>한국</p>
                                            </td>
                                            <td class="none">
                                                <p>수출자</p>
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
                                                <p>한국</p>
                                            </td>
                                            <td class="none">
                                                <p>수출자</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="font-size:0.8rem">※ 이외에도 상품 특성에 따라 몇가지 서류가 더 추가될 수 있다.</p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_china_registration_03.jpg" alt="IGC인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증원의 역량</h3>
                                <p style="text-align:justify">
                                    IGC는 수년간 쌓아온 기술력 및 전문성을 통해 제품 인증의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다. IGC는 전 세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
                                    기본적으로 중국에 수출을 할 경우에는 현지 바이어 회사가 중국 해관에 등록된 수입 라이선스가 있는 회사인지를 확인해야 합니다. 만약 라이선스가 없다면 정상 통관이 이루어지지 않습니다.<br><br>
                                    이런 상황에서 저희 IGC는 수입 수출국 회사를 Contact 하여 수입 수출국 대행 통관을 진행하고 수출에 필요한 무역 실무 업무, 바이어와의 커뮤니케이션, 무역서류작성과 무역 업무 전반에 걸친 컨설팅, 배송, 통관 업무 등을 지원할 수 있습니다. 또 상품의 특성에 맞게 가장 적합한 비용과 신속하게 통관하는 방법을 사전에 교류하여 준비할 수 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </section>
               
            <!----(주)아이지씨인증원 사업영역 시작-------->
            <section class="partner_type2">
                <h2 class="con_arrow">
                    <p>우리가 제공하는 관련 서비스</p>
                </h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 22000, FSSC 22000, FDA FSMA, Global HACCP)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>제품 인증 (Vegan 인증, HALAL 인증, 유라시아 인증, 위생등록, FDA 등록/승인)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>FDA (시험, FSMA 인증, 등록/승인)</span></p></li>
                        <li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
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