<?php
	include_once('./_common.php');
$g5['title'] = '미주 제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .tit_img { width: 50%;margin: 0 auto 70px;text-align: center }
    
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
        .tit_img { width: 90%;margin: 0 auto 50px }
        
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
			<li><a href="javascript:;">FDA</a></li>
			<li><a href="javascript:;">의료기기</a></li>
			<li class="on"><a href="javascript:;">전자 및 방사선 장치</a></li>
			<li><a href="javascript:;">의약품</a></li>
			<li><a href="javascript:;">식음료품</a></li>
			<li><a href="javascript:;">건강보조 식품</a></li>
			<li><a href="javascript:;">화장품</a></li>
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
                <h1 class="tit_num">미주 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">FDA</h2>
                <p class="outline">
                    미국 연방 식품 의약국 FDA(food and drug administration)는 미국 보건 복지부 DHHS(Department Health and human service) 산하 연방 정부 기관으로 한국의 식품의약품 안전처에 해당하는 기관입니다. 미국 시장 진출을 위해 외국 기업들은 Food, Drugs, Medical Devices 등 분야별로 FDA 규정을 숙지하고 이를 준수하여 미 세관에 제품이 억류(압류)되지 않도록 해야 합니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_FDA_06.png" alt="FDA 역할 및 책임">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FDA 역할 및 책임</h3>
                                <p style="text-align: justify">
                                    FDA는 음식, 의약품, 화장품 및 의료기기가 안전하고 위생적이며 효과적인지 확인하고, 전자레인지와 같은 방사선 발생기기의 유해성 여부를 확인하며, 애완견이나 가축들의 사료, 약품에 대해서도 조사합니다. 또한, FDA는 시험을 거치지 않은 제품의 판매를 규제할 수 있고 유해한 제품의 판매를 중지시키기 위하여 필요한 법적 조치를 취할 수 있습니다. 또 소송을 통해 유해한 제품을 압수하거나 법규를 위반한 회사를 고발할 수도 있습니다. 조사, 분석, 연구 및 규정 준수 여부 감시는 국립의료기기 및 방사능보건센터, 생물학 및 연구센터, 의약품 평가 및 연구센터, 식품안전 및 영양센터, 수의약품센터에서 관할합니다.<br><br>
                                    FDA는 전 세계적으로 가장 엄격하고 신중한 시판 승인 결정을 내리는 것으로 유명하기 때문에 공신력을 인정받고 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_FDA_07.png" alt="FDA 규정 및 기준">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FDA 규정 및 기준</h3>
                                <p style="text-align: justify">
                                    미국에서 생산, 유통, 판매되는 모든 종류의 품목에 대해 연방식품의약품화장품법, 관리상의과정행위법, 규제약품행위법, 공정포장 및 표시법, 연방거래위원회법 등 FDA 세부적인 법령 하에 통제, 관리, 승인을 담당합니다.
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
                        <li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
                        <li><p><em><strong>02</strong></em><span>제품 인증(의료기기, 의약품, 식품, 화장품)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
                        <li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 01 미주 FDA 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 02 미주 의료기기 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">미주 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">의료기기</h2>
                <p class="outline">
                    미국에서 시판되는 모든 의료기기는 Federal Food, Drug, and Cosmetic Act (FD&amp;C Act)와 regulations in Title 21- Code of Federal Regulations (21 CFR) Parts 1-58, 800-129에 의해 규제되고 있으며, 반드시 FDA의 의료기기 규정을 준수하여야 합니다.<br><br>
                    위험수준에 따라 Class I, II, III로 분류하며 해당하는 Class별로 시판 전 신고 및 허가 등의 요구 사항이 다르게 적용됩니다. Class I은 가장 위험성이 적은 기기가 포함되고 Class III은 위험성이 가장 높은 기기가 포함됩니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_medical_01.png" alt="FDA 의료기기 등록 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FDA 의료기기 등록 절차</h3>
                                <p class="con_txt">
                                    일반적인 등록 절차는 다음과 같습니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>의료기기 등급 분류 확인</li>
                                    <li><span class="number">2. </span>등급에 따른 사전 허가 절차 파악</li>
                                    <li><span class="number">3. </span>자료 준비</li>
                                    <li><span class="number">4. </span>제조시설 및 제품 등록</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_medical_02.png" alt="의료기기 등급 분류">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의료기기 등급 분류</h3>
                                <p class="con_txt">
                                    FDA 의료기기는 Class I부터 III까지 분류되며, 의료기기의 등급 및 세부분류에 따라 절차가 상이하므로 먼저 제품의 분류코드(Product Code), 규제번호(Regulation Number), 등급(Device Class)확인이 필요합니다.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>Class I (1등급 의료기기)
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>인체에 건강과 안전에 심각한 위험을 주지 않는 비교적 단순한 기능의 용구</li>
                                        <li><span class="bullet"></span>예시 : 의료용 고무장갑, 밴드, 수술용 칼, 수술용 카메라, 썬텐 부스, 수술용 브러시, 의료용 솜 등</li>
                                        <li><span class="bullet"></span>일반규제(General Control)에 따름</li>
                                        <li><span class="bullet"></span>특례에 한하여 시판 전 신고(Premarket Notification 또는 510(k)) 해당</li>
                                        <li><span class="bullet"></span>품질시스템 규정에서 면제</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>Class II (2등급 의료기기)
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>인체의 건강과 안전에 직접적인 영향을 끼칠 수 있는 의료기기</li>
                                        <li><span class="bullet"></span>예시 : 소프트 콘택트렌즈, 의료용 시멘트, 이식용 클립, 콘돔, 정형외과용 스테이플, 자동 휠체어, 혈액이나 액체 주입펌프, 멸균제품 등</li>
                                        <li><span class="bullet"></span>일반규제(General Control) 및 특별규제(Special Control)에 따름</li>
                                        <li><span class="bullet"></span>시판 전 신고(Premarket Notification 또는 510(k)) 적용제외 품목 있으므로 확인 필요</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>Class III (3등급 의료기기)
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>인체의 건강과 안전에 심각한 영양을 끼칠 수 있는 의료기기</li>
                                        <li><span class="bullet"></span>예시 : 이식용 심장밸브, 페이스메이커, 혈관 확장용 풍선, 혈관 수술용 레이저, 동맥혈관 접착제, 유방확대용 실리콘 등</li>
                                        <li><span class="bullet"></span>일반규제(General Control) 및 시판 전 승인(PMA: Premarket Approval)에 따름</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_medical_03.png" alt="의료기기 등급별 규제">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의료기기 등급별 규제</h3>
                                <p class="con_txt">
                                    미국 FDA는 모든 의료기기를 그것의 안전성과 효능 확인에 필요한 규제수준을 3가지 등급으로 나누고 등급에 따라 규제내용을 달리합니다.<br><br>
                                    FDA에서 규제하는 일반적인 시판 전 심사제도는 4가지로 구분하여 다음과 같이 진행합니다.
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>시판 전 신고: 510(k)(Premarket Notification)</li>
                                        <li><span class="bullet"></span>시판 전 승인: PMA(Premarket Approval)</li>
                                        <li><span class="bullet"></span>De Novo(Evaluation of Automatic Class III Designation)</li>
                                        <li><span class="bullet"></span>예외조항 적용의료기기: HDE(Humanitarian Device Exemption)</li>
                                    </ul>
                                </div>
                                <p style="text-align:justify">
                                    모든 등급의 의료기기에는 일반규제(General Control)가 적용되며, Class II에는 특별규제(Special Control), Class III 의료기기에는 시판 전 승인(PMA: Premarket Approval)이 요구됩니다. 비슷한 의료기기가 없는 새로운 Class I, II 의료기기는 De Novo로 제출해야 합니다. 희귀 질환(rare disease)의 환자에게 도움을 주기 위한 Class III 의료기기는 HUD로 제출합니다.<br><br>
                                    새로운 의료기기의 경우 자동으로 Class III로 분류되는데, 의료기기의 위험성이 낮거나 보통 수준 일 경우 이를 증명하여 다시 Class I, II로 재분류 받는 De Novo (Evaluation of Automatic Class III Designation) 절차가 필요합니다. 희귀병 환자들을 위한 제품일 경우 이를 증명하는 자료를 제출하여 FDA에게 HUD(Designating Humanitarian Use Device)로 지정 받습니다. 제품이 HUD로 지정되면 HDE(Humanitarian Device Exemption) 판매 신청을 하게 됩니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_medical_04.png" alt="시판 전 신고">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">시판 전 신고</h3>
                                <p class="con_txt">
                                    일부 1등급 의료기기(Class I)와 대부분의 2등급 의료기기(Class II)는 510(k)가 요구되며, 만일 제품이 시판 전 신고 대상품목인 경우 시판 전 90일 이내에 510(k) 양식을 작성하여 제출하여야 합니다.<br><br>
                                    시판 전 신고서 제출대상은 다음과 같습니다.
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>미국 시장에 의료기기를 도입하려는 국내제조자</li>
                                        <li><span class="bullet"></span>미국 시장에 의료기기 판매하려는 개발자</li>
                                        <li><span class="bullet"></span>표시사항의 변경이나 의료기기에 영향을 주는 작업을 하는 재포장/표기자</li>
                                        <li><span class="bullet"></span>미국시장에 의료기기 판매를 계획하는 국외제조자나 그 대리인</li>
                                    </ul>
                                </div>
                                <p class="con_txt">
                                    시판 전 신고서 내용은 다음을 포함하여야 합니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>신청자의 이름, 주소, 제조업체, 멸균 시설 주소, 등록 번호, 신청 날짜를 작성합니다.</li>
                                    <li><span class="bullet"></span>제품 설명 : 제품명, 분류, 외관 및 구조, 사용 목적, 작동 원리, labeling 및 성능 기준</li>
                                    <li><span class="bullet"></span>평가 보고서, 생체 적합성 및 성능에 대한 평가 보고서</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_medical_05.png" alt="관련 제공 서비스">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">관련 제공 서비스</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>의료기기 등록(Electronic Device Listing)
                                    </span>
                                    <p>
                                        의료기기 제조업자는 모든 기기를 각각 등록해야 하며, 등록되어 있지 않은 제품은 미국 통관 시 FDA 소속 수입국에 의해 통관이 거부되거나 압류될 수 있습니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>시설 등록
                                    </span>
                                    <p>
                                        본사 및 각 제조공장은 FDA에 등록(Initial Registration)하고 매년 정기 등록 (Annual Registration)을 하여야 합니다. 또한 미국 내 제조자가 아닌 해외제조자의 경우에 반드시 미국 내 상주하는 US Agent(미국 내 대리인)을 지정해야 합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>시판 전 신고(Premarket Notification, 510(k))
                                    </span>
                                    <p>
                                        판매될 혹은 판매하고자 하는 제품이 안전하고 효과적이라는 증거를 제시하기 위하여, 즉 시판 전 승인에 대항되지 않고 법적으로 이미 판매되고 있는 기허가 제품과의 동등성을 제시하기 위하여 제품을 미국에서 판매하기 전에 FDA에 서류를 제출해야 합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">4. </span>DUNS 넘버 발급
                                    </span>
                                    <p>
                                        개별 기업에 부여되는 9자리의 고유 번호로 ‘국제사업자등록번호’로 통용되고 있습니다. 의료기기 등록을 위해서 DUNS 번호 발급은 필수입니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">5. </span>라벨링 검토
                                    </span>
                                    <p>
                                        일반규제에 따르면 모든 의료기기는 적절한 라벨 표시가 되어야 합니다. 라벨링 규정에 따르면 의료기기의 라벨에서 허위광고 및 과대광고는 금지되며, 라벨링 요건을 만족해야 합니다.
                                    </p>
                                </div>
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
                        <li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 임상평가, 의료기기등록[유라시아, 중국, 미국, 태국, 대만])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>04</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 02 미주 의료기기 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 03 미주 전자 및 방사선 장치 컨텐츠 시작 //------->
        <article style="display:block">
            <section class="business_type5" class="area">
                <h1 class="tit_num">미주 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">전자 및 방사선 장치</h2>
                
                <ul class="content">                    
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_electronic_02.jpg" alt="전자 및 방사선 장치">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">전자 및 방사선 장치</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>FDA 란?
                                    </span>
                                    <p style="text-align: justify">
                                        미국에서 의료기기는 "Federal Food, Drug &amp; Cosmetic Act : 연방 식품, 의약품, 화장품법"에 의해 식품, 의약품, 화장품 등과 함께 규제·관리되고 있습니다. 제품에 대한 사전검사 및 승인, 사후검사를 통한 부적합 제품의 제재 그리고 수입품/수출품 검사를 통해 해당 제품의 안전성을 확보합니다.<br><br>
                                        만약 FDA에서 요구하는 규정을 준수하지 않을 시 미국 내 유통 및 판매가 불가하며 판매 중인 제품이라도 의료기기 규정에 만족되지 않는 제품은 FDA 사후 관리에 의해 시정조치, 리콜, 제품 압류나 폐기 처분, 형사처분 등이 이루어 질 수 있습니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>관련규정
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>FD &amp; C Act (Federal Food, Drug &amp; Cosmetic Act : 연방 식품, 의약품, 화장품법)</li>
                                        <li><span class="bullet"></span>21 CFR (The Code of Federal Regulations : 연방법규집)</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>적용 범위
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>식품, 화장품, 의약품 및 의료기기(부속품 포함), 동물용 약품, 동물사료, 유아용 유동식, 식품첨가물, 저산성통조림, 산화식품 (단, 육류, 가금류 및 육가공품의 경우 농무부 위생검역국(FSIS, Food Safety &amp; Inspection Service)에서 검사 및 규제 시행</li>
                                        <li><span class="bullet"></span>방사선기기(전자제품) : 초음파 치료장비, Sunlamp, X-rays, TV수신기등</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_electronic_04.jpg" alt="용구 및 방사선 건강평가 (CRDH)란?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">용구 및 방사선 건강평가 (CRDH)란?</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>방사선의 다양하고 잠재적인 위험성에 근거하여 역학적인 실험조사를 하여 안전한 방사선 사용을 권장합니다.</li>
                                    <li><span class="bullet"></span>방사선을 방출하는 용구와 제품을 평가할 수 있도록 그 측정 방법과 도구를 개발합니다.</li>
                                    <li><span class="bullet"></span>의료용구의 안전과 효능도에 따라 분류(class I, class II, class III) 하여 판매 전 신고 및 승인을 받도록 합니다.</li>
                                    <li><span class="bullet"></span>방사선을 방출하는 용구에 대한 실무표준을 개발하여 불필요한 방사선 노출 방지를 위해 사용지침을 마련합니다.</li>
                                    <li><span class="bullet"></span>의료용구와 방사선 방출 제품에 대한 정확한 정보와 근거를 소비자나 제조업체에 교육을 시행합니다.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_ce-mdd_02.jpg" alt="시장 접근 번호란?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">시장 접근 번호란?</h3>
                                <p style="text-align: justify">
                                    시장 접근 번호는 FDA의 데이터 베이스의 보고서에 대한 유일한 식별 번호입니다. 이 번호는 CDRH 확인 서신에서 제공합니다. 시장 접근 번호는 특정 보고에 대한 의사소통을 촉진시킵니다. 왜냐하면 모든 기관들은 문서가 논의가 되었는지 파악하기 위해 이 시장 접근 번호를 사용할 수 있기 때문입니다. 추가적으로, FDA 수입부서 직원이 제조업자가 최소한으로 수입되는 제품에 대한 요구사항이 기록되었는지 확인하기 위해 시장 접근 번호를 사용합니다.<br><br>
                                    시장 접근 번호는 보고서가 CDRH의 서류 보관실로 수신된 것을 의미할 뿐 아니라 제조 업체 및 제품에 대한 정보의 일부는 FDA의 데이터베이스에 입력된 것을 의미합니다.<br><br>
                                    확인 서신은 보고서 제출자가 제공 한 주소로 반환됩니다. 오직 한 부의 복사본만이 배송됩니다. 제출자가 제조업자와 다른 경우, 편지는 보고서 제출자에게만 발송됩니다. 제출자는 제조업자에게 복사본을 보낼 수 있습니다.<br><br>
                                    제조업자가 제품 보고서, 요약 보고서, 연간 보고서 또는 문의 전 보완 보고서를 보낸 이후, 최소 4주일이 소요됩니다.<br><br>
                                    제조업체가 전자 보고서 형식으로 제출한 경우, CDRH 데이터베이스의 성공적으로 실리자 마자 전자메일 확인 메시지가 발송됩니다. 일반적으로 전자 보고서는 수신으로부터 1일 안에 데이터베이스에 실립니다.<br><br>
                                    제조업자는 제품이 미국 상업에 도입되기 이전에 CDRH에 보고서를 제출해야 합니다. 확인 서신과 시장 접근번호는 이러한 보고서가 CDRH에 의해 수신되었다는 증거입니다. 만약 제품이 다른 나라에서 만들어진 후 미국에 수입된 경우, 수입 승인 절차에서는 세관 신고서 FDA 2877양식에 시장 접근번호의 식별을 요구합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_electronic_01.jpg" alt="전자제품이란?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">전자제품이란?</h3>
                                <p style="text-align: justify">
                                    전자회로를 포함하고 방사선을 방출하는 모든 제품을 전자 제품이라고 합니다. X방사선(엑스레이), 극 초단파, 전파(고주파(RF)), 레이저, 가시 광선, 음파, 초음파 및 자외선은 전자 제품으로부터 방출되는 다양한 방사선 유형의 몇 가지 예시입니다. 진단용 X선 시스템, 레이저 제품, 레이저 광선 쇼 및 전자 레인지는 방사선을 배출하는 다양한 전자 제품 중 몇 가지 예입니다.<br><br>
                                    미국(U.S.) 식약청(FDA) 방사선 보건 및 장치 센터는 방사선을 방출하는 전자 제품을 규정하는 것에 대한 책임을 지닙니다. CDRH는 위험하고 불필요한 전자 제품 방사선 노출 로부터 대중을 보호하는 것을 목표로 둡니다. 대부분의 전자 제품의 경우 안정 규제는 CDRH와 주 규제 기관 사이에서 분할됩니다. CDRH는 제품의 제조를 단속하고 주 규제 기관은 제품의 사용을 단속합니다.<br><br>
                                    연방법 타이틀 21, J 조항, 파트 1000에서 1050(21 CFR 1,000에서 1,050 사이)는 방사선을 방출하는 전자 제품의 제조업자에 대한 안정 규제를 포함합니다. 제조업자는 위험하고 불필요한 방사선을 방출하지 않는 제품을 생산하는 것에 대한 책임을 지닙니다. 모든 제조업자들은 반드시 타이틀 21 CFR 1000, 1002, 1003, 1004 및 1005에서 요구하는 해당 요구사항에 대하여 부합하여야 합니다. 만약 제조업자의 제품에 의무적인 방사선 안전성 수행 규범이 적용되는 경우, 이러한 규범은 21 CFR 1020에서 1050에서 찾을 수 있습니다.<br><br>
                                    위 FDA 홈페이지에서 언급한 바와 같이, 제조업자가 미국 내에 그들의 제품을 판매하고자 하는 경우, FDA는 제조업자에게 그들의 제품이 요구사항에 부합되는지 요청하고 확인할 것입니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_us_electronic_05.jpg" alt="IGC인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증원의 역량</h3>
                                <p class="con_txt">
                                    임상시험계획 승인신청(Investigational New Drug application, IND)은 판매용 및 연구용(비판매용) 두 가지 범주가 있으며 다음과 같은 세 가지 신청유형이 있습니다.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>연구자 임상시험계획 승인신청
                                    </span>
                                    <p>
                                        해당 신청은 임상시험을 개시하고 수행하는 의사가 제출하며, 의사의 직접적인 지시 하에 시험용 의약품이 투여 또는 조제됩니다. 의사는 미허가 의약품 또는 새로운 적응증이나 새로운 환자군에 대한 허가 의약품에 대한 시험을 제안하기 위해 연구용 임상시험계획 승인신청을 제출할 수 있습니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>응급상황 사용 임상시험계획 승인신청
                                    </span>
                                    <p>
                                        해당 신청은 미국 식품의약품청이 『연방규정집』312.23조 또는 312.34조에 따른 임상시험계획 승인을 위한 시간이 허용되지 않는 상황에서의 시험약의 사용을 허가할 수 있도록 합니다. 또한 기존의 시험 계획 조건을 충족시키기 못하는 환자를 대상으로 또는 허가된 시험 계획서가 존재하지 않을 경우에 사용될 수 있습니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>치료목적 임상시험계획 승인신청
                                    </span>
                                    <p>
                                        해당 신청은 임상 시험이 수행되고 미국 식품의약품청의 검토가 진행 중일 때, 임상 시험에서 중증 또는 즉각적으로 생명을 위협할 수 있는 증상에 대한 전망을 보이는 시험약을 위해 제출됩니다. 중증질환의 경우 임상 3상 중이거나 또는 모든 임상시험들이 완료된 의약품을 본 항에 따른 치료용 사용이 가능합니다. 즉각적으로 생명을 위협할 수 있는 질환의 경우, 임상 3상 이전이라 하더라도, 통상 임상 2상 이전이 아니라면 해당 의약품을 본 항에 따른 치료용으로 사용 가능할 수 있습니다.

                                    </p>
                                </div>
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
                        <li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 유라시아 인증)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>제품 시험 (전기 안전, 기계 안전)</span></p></li>
                        <li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 03 미주 전자 및 방사선 장치 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 04 미주 의약품 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">미주 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">의약품</h2>
                <p class="outline">
                    미국 식품의약품청은 식품 및 의약품의 유효성을 확보하고 자국민에게 보다 안전하고 비용부담이 적은 제품의 공급을 추진하며, 국민 건강 유지 및 개선을 위해 의약품과 식품 사용에 필요한 정확하고 과학적 기반을 가진 정보를 얻을 수 있도록 도움으로써 공중보건을 증진시키고 있습니다.
                </p>
                
                <ul class="content">                    
                    <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usas_medicine01.jpg" alt="OTC Drug 등록이란?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">OTC Drug 등록이란?</h3>
                                <p style="text-align: justify">
                                    미국으로 수출하는 의약품 회사는 the Federal Food, Drug, and Cosmetic Act (미연방식품의약품화장품법)과 Title 21 of the Code of Federal Regulations (21 CFR: 21 미연방규제코드)의 요구사항 및 규제에 따라야 합니다. 이러한 요구사항 및 규제에는 새로운 의약품 및 abbreviated(단축된) 새로운 의약품, 라벨링, 의약품 리스팅, 그리고 Current Good Manufacturing Practices (CGPM)에 따른 제조가 요구됩니다. 그리고 의약품 시설 등록 및 OTC 제품 등록이 포함됩니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usas_medicine02.jpg" alt="OTC Drug">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">OTC Drug</h3>
                                <p style="text-align: justify">
                                    처방전 없이 일반 대중이 사용할 수 있는 안전하고 유효성 있는 의약품으로, 자외선차단제, 비듬 샴푸, 여드름 제품 등은 미국에서는 OTC Drug로 분류됩니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usas_medicine03.jpg" alt="OTC Drug 등록 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">OTC Drug 등록 절차</h3>
                                <p style="text-align: justify">
                                    FDA는 미국 내에서 사용되는 의약품을 제조하거나 재포장, 재라벨링하는 모든 시설(establishment)에 대해 FDA 등록을 요구합니다. 또한 OTC Drug Monograph를 따르는 제품은 미국 시장에 판매하기 전에 OTC Drug 등록이 완료되어야 합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usas_medicine04.jpg" alt="IGC인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증원의 역량</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC는 다년간의 풍부한 경험으로 의약품 미국 수출을 지원합니다.</li>
                                    <li><span class="bullet"></span>제품 라벨 검토, NDC 라벨러 코드 발급 및 OTC 등록 서비스를 제공합니다.</li>
                                    <li><span class="bullet"></span>IGC는 신속한 인증획득 뿐만 아니라 사후 인증 향상/유지 보수 서비스를 제공함으로써 고객관리를 지원하고 있습니다.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usas_medicine05.jpg" alt="관련 제공 서비스">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">관련 제공 서비스</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>성분 검토
                                    </span>
                                    <p>
                                        성분표를 토대로 Active Ingredients, Inactive Ingredients를 구분하고 OTC Drug로의 등록 가능여부를 확인합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>DUNS 넘버 발급
                                    </span>
                                    <p>
                                        개별 기업에 부여되는 9자리의 고유 번호로 ‘국제사업자등록번호’로 통용되고 있습니다. 라벨러 코드 획득과 더불어 OTC등록을 위해서 DUNS 번호 발급은 필수입니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>시설 등록
                                    </span>
                                    <p>
                                        제조사는 NDC 라벨러 코드발급 및 시설등록을 해야 합니다. FDA는 미국 내에서 사용되는 의약품을 제조하거나 재포장, 재라벨링하는 모든 시설(establishment)에 대해 FDA 등록을 요구합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">4. </span>NDC 라벨러 코드 발급
                                    </span>
                                    <p>
                                        라벨러 코드는 의약품을 위한 국가 의약품 코드(NDC, National Drug Code)의 생성을 위해 사용됩니다. 이는 등록시설에 대해 FDA가 부여하는 숫자로, 4~5자리로 구성되어 있습니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">5. </span>라벨 검토
                                    </span>
                                    <p>
                                        21 CFR 201.66 Drug Facts labeling requirements에 따라 미국 내 판매하는 OTC 제품은 반드시 FDA 라벨 규정을 준수해야 합니다. 미국 진출을 고려하고 계신 의약품 제조업, 의약품수출업 및 유통업에 종사하는 조직은 새로운 규제 및 관련법 개정 내용을 확인하고 라벨링을 준비해야 합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">6. </span>OTC Drug 등록
                                    </span>
                                    <p>
                                        미국 내 의약품을 유통하기 위해 the Federal Food, Drug, and Cosmetic Act (미연방식품의약품화장품법)과 Title 21 of the Code of Federal Regulations (21 CFR: 21 미연방규제코드)의 OTC Drug 요구사항 및 규제에 따라 제품을 등록합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">7. </span>미국 내 대리인 서비스
                                    </span>
                                    <p>
                                        미국에서 OTC Drug을 판매하고자 하는 외국 회사는 시설등록, NDC 라벨러 코드 발급에 앞서 반드시 미국 내 대리인을 지정하여야 합니다. 미국 내 대리인은 FDA와의 중개자 역할을 합니다. IGC는 풍부한 경험이 있는 미국 대리인 서비스를 제공합니다.
                                    </p>
                                </div>
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
                        <li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 임상평가, 의료기기등록[유라시아, 중국, 미국, 태국, 대만])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>04</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 04 미주 의약품 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 05 미주 식음료품 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">미주 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">식음료품</h2>
                <p class="outline">
                    미국에서는 식품안전 위험으로부터 자국민을 보호하기 위해 관련법을 통해 미국으로 수출되는 식품을 규제하고 있으며, 정해진 기준을 준수하는 제품은 FDA 승인 또는 등록이 필요합니다.
                </p>
                
                <ul class="content">                    
                    <li><!-- content 5-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_food&beverage_01.jpg" alt="FDA의 식품 시설 등록 (FFR)이란?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FDA의 식품 시설 등록 (FFR)이란?</h3>
                                <p style="text-align: justify">
                                    바이오 테러리즘 법(Bioterrorism Act)은 FDA에 미국 식품 공급 및 기타 식품 관련 비상 사태에 대한 위협 또는 실제 테러 공격으로부터 국민을 보호하기 위해 조치를 취하도록 합니다. 바이오 테러리즘 법의 특정 조항을 수행하기 위해 FDA는 미국 내 소비를 목적으로 하는 식품을 제조, 가공, 포장 또는 보관하는 시설의 FDA 등록을 의무화하였습니다. 해당 법은 따라 식품이 미국으로 수입되기 전 FDA에 반드시 식품 시설 등록(FFR)을 해야 합니다. 또한 이러한 시설등록은 매 짝수년도에 갱신되어야 합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_food&beverage_02.jpg" alt="FDA 등록 대상 품목">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FDA 등록 대상 품목</h3>
                                <p style="text-align: justify">
                                    식품, 화장품, 의약품 및 의료기기(부속품 포함), 동물용 약품, 동물사료, 유아용 유동식, 식품첨가물, 저산성통조림, 산화식품 (단, 육류, 가금류 및 육가공품의 경우 농무부 위생검역국(FSIS, Food Safety &amp; Inspection Service)에서 검사 및 규제 시행.)
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_food&beverage_03.jpg" alt="식품 FDA 수출 전 확인사항">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">식품 FDA 수출 전 확인사항</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>식품시설등록 (FFR)</li>
                                    <li><span class="bullet"></span>제품 성분 검토</li>
                                    <li><span class="bullet"></span>DUNS No. 보유</li>
                                    <li><span class="bullet"></span>영양분석 및 Nutrition Facts 라벨 작성</li>
                                    <li><span class="bullet"></span>산성화 또는 저산성식품의 경우 SID / FCE 등록</li>
                                    <li><span class="bullet"></span>수산물의 경우 HACCP 인증 및 관련 서류 구비</li>
                                    <li><span class="bullet"></span>건강식품의 경우 미국 건강식품의 규정을 준수</li>
                                    <li><span class="bullet"></span>일반 식품의 경우 인간용 식품규정을 준수하는지</li>
                                    <li><span class="bullet"></span>신선농산물의 경우 농산물 규정 (Produce Safety Rule)을 준수</li>
                                    <li><span class="bullet"></span>소량의 육류, 계란, 우유 성분이 포함될 경우 USDA관련 규제 확인</li>
                                    <li><span class="bullet"></span>미국의 수입자의 경우 FSVP (해외공급자 검증제도)의 준수</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_food&beverage_04.jpg" alt="IGC인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증원의 역량</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC는 수년간 쌓아온 기술력 및 전문성을 통해 제품 인증의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                    <li><span class="bullet"></span>IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_food&beverage_05.jpg" alt="관련 제공 서비스">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">관련 제공 서비스</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>식품 시설 등록
                                    </span>
                                    <p>
                                        미국에서 소비되는 식품, 사료를 제조, 가공, 포장, 보관하는 국내 및 해외 시설은 반드시 FDA 식품 시설 등록을 해야 하며, 미국 내 유통을 위해 수출 전 반드시 FDA 식품 시설 등록을 마쳐야 합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>해외 공급업체 검증 프로그램 (FSVP)
                                    </span>
                                    <p>
                                        FSVP는 제조업체의 식품이 미국의 식품안전기준에 따라 생산된다는 것을 수입업자가 증명하도록 규정한 프로그램입니다. 수입자는 미국으로 수입할 식품 및 음료를 FSVP 요구사항을 철저히 확인하여야 합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>미국 대리인 서비스
                                    </span>
                                    <p>
                                        미국에서 식품 또는 음료를 판매하고자 하는 해외 시설은 반드시 미국 대리인을 지정하여 절차를 진행하여야 합니다. 미국 대리인은 회사와 FDA 사이의 중개자 역할을 합니다. IGC는 풍부한 경험이 있는 미국 대리인 서비스를 제공합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">4. </span>FDA 식품 라벨링 검토
                                    </span>
                                    <p>
                                        미국으로 식품 수출 시 식품 라벨링을 엄격히 준수해야 합니다. 미국 진출을 고려하는 식품 제조, 식품 수출 및 유통시설은 새로운 규제 및 관련법 개정 내용을 확인하고 식품 라벨링을 준비해야 합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">5. </span>FCE &amp; SID 등록
                                    </span>
                                    <p>
                                        일부 산성화 또는 저산성 식품의 경우 요구사항에 따라 FCE &amp; SID 등록 (식품 공장 등록 &amp; 공정 등록)이 필수입니다. 따라서 해당 규정에 부합하는 식품이라면 반드시 사전에 등록을 해야 미국 수출이 가능합니다. IGC는 FCE &amp; SID 등록 (식품 공장 등록 &amp; 공정 등록)을 통해 제조업체가 FDA규정을 준수하도록 도와드립니다.

                                    </p>
                                </div>
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

        </article><!----// 컨텐츠 05 미주 식음료품 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 06 미주 건강보조식품 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">미주 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">건강 보조 식품</h2>
                <p class="outline">
                    의회는 1994년 건강 보조 식품 건강 교육법(DSHEA)에서 ‘건강 보조 식품’이란 용어를 정의하였습니다. 건강 보조 식품이란 사람이 건강한 삶을 유지하는데 있어서 매일 필요한 성분(비타민, 미네랄, co-enzyme, 탄수화물, 지방, 단백질 등)들을 우리가 매일 섭취하는 음식으로 적당량을 섭취하기에는 부족한 영양소를 보충해주는 식품들을 말합니다.
                </p>
                
                <ul class="content">                    
                    <li><!-- content 6-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_dietarysupplementinusa_04.jpg" alt="FDA(Food and Drug Administration) 승인">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FDA(Food and Drug Administration) 승인</h3>
                                <p style="text-align: justify">
                                    모든 Dietary Supplement는 식품으로 분류되며 FDA의 관리를 받게 됩니다. 효과나 안전성에 대하여 개발사는 자체적으로 책임이 있지만, 의약품과는 다르게 시판전에 FDA 승인을 받아야 하는 절차는 없습니다. (단, 새로 개발된 원료일 경우는 제외) 모든 Dietary Supplement에는 ‘These statements has not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease’라는 문구가 반드시 표기되어야 하며 어느 특정한 질병의 이름을 사용하는 문구를 선전광고나 제품의 겉포장에 쓰지 못합니다. 또한, FDA라는 단어를 상업적 목적으로 광고에 이용하는 것은 위법이며, FDA는 강력한 제제조치를 취하게 됩니다.<br><br>
                                    Dietary Supplement에서의 FDA 승인은 수입 허가 승인으로써 외국에서 수입해 들여오는 식품들은 모두 중금속 검사, 오염물 검사, 세균 검사, 농약 검사 등 소비자들이 먹어서 해로운 물질이 들어있지 않다는 실험결과를 조사하여 안정성을 인정해 식품으로 수입을 허가하는 것입니다. 이 안정성 검사는 FDA가 직접 시행하여 결과를 인정하는 것이 아니며 수입자들이 제출한 서류에 의하여 허가를 승인합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 6-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_dietarysupplementinusa_02.jpg" alt="우수 제조 관리 기준">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">우수 제조 관리 기준</h3>
                                <p class="con_txt">
                                    IGC인증기관은 RUS-TEST PACIFIC인증기관과 협력하여 고객과 이해관계자들에게 경쟁력 있는 최고의 가치를 제공하여, 지속적 동반 성장을 통해 세계적인 인증기관으로 거듭나고 있습니다.<br><br>
                                    IGC는 다음을 준수합니다.
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li>
                                            <span class="point_blk"><span class="number">1. </span>Labeler인 경우, DS CGMP 규정은 아래와 같습니다.</span>
                                            <ul class="list_st">
                                                <li><span class="bullet"></span>일괄 생산 기록을 수립하기 위해 21 CFR111.255 요구 사항을 충족해야 합니다.</li>
                                                <li><span class="bullet"></span>인원, 시설 및 물리적 시설 및 공간, 시설 및 기구, 현상 유지 등의 기타 관련 요구사항을 준수해야 합니다.</li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <p class="con_txt">
                                    개별 구성요소단계가 이미 완성된 포장 프로세스부터 진행되므로, 21 CFR111.260(e)요구사항에서 사용되는 각 성분의 특징 및 중량 또는 측정을 준수할 필요가 없습니다.
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li>
                                            <span class="point_blk"><span class="number">2. </span>Distributor인 경우, DS CGMP 규정은 아래와 같습니다.</span>
                                            <ul class="list_st">
                                                <li><span class="bullet"></span>보관 및 분배하는 것에 대한 요구사항을 준수해야 합니다.</li>
                                                <li><span class="bullet"></span>인재, 물리적 시설 및 공간에 대한 요구사항 등 해당 요구 사항을 준수해야 합니다.</li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <p style="text-align: justify">
                                    건강보조 식품 제조를 위한 식이 성분을 가공하는 제조자만 유일한 고객인 경우, DS CGMP의 대상이 아닙니다. 그러나 DS CGMP 규정을 준수함으로써 우수한 관리를 진행하도록 독려할 수 있습니다. 단순한 건강 보조 식품으로써 식이성분을 포장하거나 포장된 식이성분을 라벨표시 하는 회사의 경우, DS CGMP 규정의 대상입니다. 이는 그 회사가 추가공정 없이 단순히 포장이나 라벨링만 하는 건강 보조 식품을 제조하는 제조업체이기 때문입니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 6-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_dietarysupplementinusa_03.jpg" alt="건강보조식품의 포장 및 라벨링">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">건강보조식품의 포장 및 라벨링</h3>
                                <p class="con_txt">
                                    건강 보조 식품의 품질을 보장하기 위해 관리가 필요한 제조 공정 및 단계에 대한 모든 세부사항, 그리고 건강 보조 식품의 완제품 제조 기록에 명시된 대로 포장 및 라벨링에 표시되어야 합니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>건강 보조 식품의 제조에 사용되는 부품의 사양</li>
                                    <li><span class="bullet"></span>중간 생산에 대한 사양</li>
                                    <li><span class="bullet"></span>건강 보조 식품의 라벨이나 포장 사양</li>
                                    <li><span class="bullet"></span>건강 보조 식품 완제품에 대한 제품 사양</li>
                                    <li><span class="bullet"></span>건강 보조 식품으로서 포장 및 라벨링에 대해 공급자로부터 받은 제품에 대한 사양</li>
                                    <li><span class="bullet"></span>포장 및 라벨 표시가 완료된 건강 보조 식품에 대한 포장 및 라벨 사양</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 6-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_dietarysupplementinusa_01.jpg" alt="IGC인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증원의 역량</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC는 수년간 쌓아온 기술력 및 전문성을 통해 제품 인증의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                    <li><span class="bullet"></span>IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                                    <li><span class="bullet"></span>IGC는 식품 분야에서의 다양한 인증 관련 서비스를 제공하고 있습니다.</li>
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
                        <li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 22000, FSSC 22000, FDA FSMA, Global HACCP)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>제품 인증 (Vegan 인증, HALAL 인증, 유라시아 인증, 위생등록, FDA 등록/승인)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>FDA (시험, FSMA 인증, 등록/승인)</span></p></li>
                        <li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 06 미주 건강보조식품 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 07 미주 화장품 컨텐츠 종료 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">미주 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">화장품</h2>
                <p class="outline">
                    미국 FDA는 미주 내의 소비자 보호를 위해 미주에서 판매되는 화장품을 규제하고 있는데 그 규제가 까다로워 충분한 이해 없이 화장품을 수출할 경우 문제가 발생할 수 있습니다. 이 때문에 미주에 화장품을 수출하는 기업은 관련 내용을 충분히 이해하고 적용한 후에 제품을 수출해야 합니다.
                </p>
                
                <ul class="content">                    
                    <li><!-- content 7-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_01.jpg" alt="VCRP 등록이란?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">VCRP 등록이란?</h3>
                                <p style="text-align: justify">
                                    <span style="font-weight:600">VCRP(Voluntary Cosmetic Registration Program)</span>에 화장품 제조자가 자발적으로 참여함으로써, 화장품과 성분이 안전함을 입증하며 적절한 라벨링 표시규정을 준수하는 책임을 다하고 있음을 알릴 수 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 7-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_02.jpg" alt="VCRP 등록 대상 품목">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">VCRP 등록 대상 품목</h3>
                                <p style="text-align: justify">
                                    VCRP는 미국에서 소비자에게 판매되는 화장품에만 적용됩니다. 미용실, 스파, 또는 피부 클리닉에서 사용된 제품과 같은 전문가용으로 사용되는 화장품에는 적용되지 않습니다. 또한 호텔의 무료배포 제품, 집에서 만드는 화장품 등의 판매 목적 이외의 제품에도 적용되지 않습니다.<br><br>
                                    화장품이 의약품(OTC Drug)으로도 분류될 경우, 화장품인 동시에 의약품으로도 간주되기 때문에 관련 의약품 조항을 적용하여 법적 요구사항을 준수해야 합니다. VCRP 성분등록은 미국 내 연매출이 $1,000 이상인 제품에 한해서 등록 가능합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 7-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_03.jpg" alt="VCRP 등록의 장점">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">VCRP 등록의 장점</h3>
                                <p style="text-align: justify">
                                    VCRP 등록을 통해 FDA가 화장품 및 성분, 이용 빈도수, 시중에 판매되는 화장품 유형, 제품을 제조 및 유통하는 회사에 대한 유용한 정보를 제공받을 수 있도록 지원하게 됩니다. 또한 VCRP를 등록함으로써 아마존, 월그린, CVS, 월마트, 타겟 등 미국의 대표적인 대형 유통망에 입점 시, 기업의 수출활동에 이득이 됩니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 7-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_04.jpg" alt="VCRP 등록 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">VCRP 등록 절차</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>제조/포장시설 등록
                                    </span>
                                    <p>
                                        화장품 시설은 화장품이 제조 또는 포장되는 장소를 의미하며 사업장 운영만 행해지는 장소는 해당되지 않습니다. 화장품 제조 또는 포장 시설의 소유자 및 운영자만 각 시설의 위치에 대해 시설을 등록할 수 있습니다. 미국 외에 위치한 회사는 화장품을 미국으로 판매하기 위해 수출한 후에 시설을 자발적으로 등록하여도 됩니다. FDA는 각 시설 위치에 등록 번호를 할당하게 됩니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>CPIS 제출 (제품 및 성분 등록)
                                    </span>
                                    <p>
                                        VCRP 등록 시 21 CFR part 710 및 720의 VCRP 참여 법적 근거에 따라 화장품을 등록해야 합니다. 또한 FDA에 화장품 성분을 등록하려면, 각 화장품 성분에 대해 CPIS(Cosmetic Product Ingredient Statement)를 제출해야 합니다. FDA는 각 화장품 전성분에 대해 CPIS 번호를 할당하게 됩니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>CPIS 수정 또는 중단
                                    </span>
                                    <p>
                                        제출된 각 화장품의 전성분 변경이나 제품 단종 시에는 이에 대한 CPIS를 수정 또는 중단이 가능합니다. 브랜드명 또는 성분에 대한 변경은 제품이 상업적 유통에 들어간 후 60일 이내에 제출해야 합니다. 또한 상업적 유통의 배포 중단을 알게 된 후 180일 이내에 중단해야 합니다.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 7-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_05.jpg" alt="VCRP 등록 주의사항">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">VCRP 등록 주의사항</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>FDA는 화장품에 대해 판매 전 승인(Pre-market Approval)을 하지 않습니다.</li>
                                    <li><span class="bullet"></span>화장품 등록, 등록번호 부여, CPIS 번호 등은 FDA가 회사 및 제품을 승인했다는 의미가 아닙니다.</li>
                                    <li><span class="bullet"></span>VCRP는 수입화장품에 대해 사전신고 제도가 아닙니다.</li>
                                    <li><span class="bullet"></span>VCRP에 등록하는 것은 화장품과 성분이 안전하고, 라벨링 표시 관련법을 적절히 준수하고 있음을 확인하는 것이 회사의 책임임을 의미할 수 있습니다.</li>
                                    <li><span class="bullet"></span>FDA의 공식적인 승인을 받은 느낌을 주는 광고나 라벨링 표현을 사용할 경우 오도하는(misleading) 것으로 간주됩니다.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 7-6 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_06.png" alt="관련 제공 서비스">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">관련 제공 서비스</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>성분 검토
                                    </span>
                                    <p>
                                        성분표를 토대로 등록 가능 성분, 배합금지 및 배합제한 성분, FDA 배치 인증을 받아야하는 성분을 구분하고 VCRP 등록 가능여부를 확인합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>시설 등록
                                    </span>
                                    <p>
                                        화장품 제조, 포장, 유통 시설은 각 시설 위치별로 시설을 등록할 수 있습니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>성분 등록
                                    </span>
                                    <p>
                                        21 CFR part 710 및 720에 따라 화장품을 등록해야 하며, 화장품 성분을 등록하려면 각 화장품 성분에 대해 CPIS(Cosmetic Product Ingredient Statement)를 제출해야 합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">4. </span>라벨 검토
                                    </span>
                                    <p>
                                        FD&amp;C Act (Food, Drug and Cosmetic Act, 식의약품 및 화장품법), FD&amp;L Act (Fair Packaging &amp; Labeling Act, 공정포장 및 표시법), 21 CFR (Title21, Code of Federal Regulation, 미국 연방규정 제21편)에 따라 미국 내 판매되는 화장품은 반드시 FDA 라벨 규정을 준수해야 합니다. VCRP 등록을 고려하고 계신 화장품 제조업, 포장업, 유통업에 종사하는 조직은 새로운 규제 및 관련법 개정 내용을 확인하고 라벨링을 준비해야 합니다. 제품에 표시된 라벨이 거짓 또는 부정확할 경우, 제품 라벨은 "오도한다(misleading)" 및 "부정표시되었다(misbranded)"라고 간주됩니다.
                                    </p>
                                </div>
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
                        <li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 22716)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>제품인증 (Vegan 인증, 유라시아 인증, VCRP, EWG, CPNP)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>04</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 07 미주 화장품 컨텐츠 종료 //------->

    </div><!------div class="tab_con" 종료 --------->		
</div> <!--------// div class="content_wrap"  종료  ------------------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>