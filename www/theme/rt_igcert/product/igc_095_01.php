<?php
	include_once('./_common.php');
$g5['title'] = '동남아시아 제품 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    <!--+++ 20.05.11 탭메뉴/ 동남아시아 제품인증 시작 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">태국 의료기기 등록</a></li>
			<li><a href="javascript:;">대만 의료기기 등록</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 동남아시아 제품인증 종료  +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
    <!--+++ 20.05.01 탭컨텐츠 영역 시작 +++-->
    <div class="tab_con">
    <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	    <article style="display:block;">
	        <section class="business_type5" class="area">
	            <h1 class="tit_num">동남아시아 제품인증 소개</h1>
	            <h2 class="tit_cer fc_pointer">태국 의료기기 등록</h2>
	            
	            <div class="tit_img">
                    <img src="./images/product_tailand_00.jpg" alt="태국 국기" style="width: 100%">
                </div>
	            
	            <ul class="content">
	                <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_tailand_02.jpg" alt="인허가 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">인허가 절차</h3>
                                <p style="text-align: justify">
                                    태국 내 수입의료기기를 취급하기 위해서는 사업자 등록 및 의료기기 수입 라이센스(Thai FDA) , 취급 의료기기 분류에 따른 인증절차 진행이 요구됩니다.<br><br>
                                    의료기기의 적합성 평가는 의료기기 법(The Medical Device Act 2008)에서 규정하고 있으며, 공공보건부 산하의 식약청 (FDA)에서 관할하고 있습니다. 제품 인증과 관련해 태국 식약청은 의료기기를 일반 의료기기(General Medical Device), 신고 의료기기(Notified Medical Device), 면허 의료기기(Licensed Medical Device) 등 세 가지로 분류하고 있으며 모든 의료기기의 등록 유효기간은 5년이며, 5년 경과 시 연장이 요구됩니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_tailand_03.jpg" alt="일반 의료기기(General Medical Devices) 인증_Class I">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">일반 의료기기(General Medical Devices) 인증_Class I</h3>
                                <p class="con_txt">
                                    이 카테고리에 해당되는 제품의 생산자, 수입업자, 혹은 유통업자는 별도의 허가를 획득할 필요가 없습니다. 그러나 이들은 제품 생산국가 정부가 발행하는 자유판매증명서(Certificate of Free Sale)를 제출해야 합니다. 예외로 일반의료기기 중에서 인체에 직접 사용되는 다음에 해당되는 의료기기의 경우 ISO 13485 또는 GMP 인증서를 제출하여야 합니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>임플란트</li>
                                    <li><span class="bullet"></span>조직(tissue origin)관련 의료기기</li>
                                    <li><span class="bullet"></span>진단 및 치료용 방사선 기구 체외 진단 기구(In Vitro Diagnostic Products)</li>
                                    <li><span class="bullet"></span>의료기기 소독 용품</li>
                                    <li><span class="bullet"></span>치아 충전(tooth filling), 보철 관련기기</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_tailand_05.jpg" alt="신고 의료기기(Notified Medical Devices) 인증_Class II">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">신고 의료기기(Notified Medical Devices) 인증_Class II</h3>
                                <p class="con_txt">
                                    이 카테고리에 해당되는 제품의 생산자, 수입자, 혹은 유통업자는 제품 생산 국가 정부가 발행하는 자유판매 증명서(Certificate of Free Sale) 이외에도 신고서(Jor Nor 1)와 함께 제품 기술 문서를 제출해야 하며 이는 다음을 포함해야 합니다.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>제품기술문서
                                    </span>
                                    <p>
                                        제품 설명서, 사용법, 사양, 라벨, 생산자 및 유통업자명
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>대상 의료기기
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>재활치료 의료기기</li>
                                        <li><span class="bullet"></span>혈중 알코올 진단 도구</li>
                                        <li><span class="bullet"></span>의료용 실리콘</li>
                                        <li><span class="bullet"></span>기타 진단 도구</li>
                                        <li><span class="bullet"></span>실리콘 가슴 보형물</li>
                                        <li><span class="bullet"></span>안과용 점탄성 물질(Ophthalmic Viscosurgical Devices; OVD)</li>
                                        <li><span class="bullet"></span>각성제 테스트기(Metamphetamine screening test in urine)</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_tailand_04.jpg" alt="면허 의료기기(Licensed Medical Device) Class III">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">면허 의료기기(Licensed Medical Device) Class III</h3>
                                <p class="con_txt">
                                    이 카테고리에 해당되는 제품의 생산자, 수입자, 혹은 유통업자는 제품의 생산, 수입, 판매에 대한 면허를 획득해야 합니다. 태국 식약청은 면허권자가 제품의 생산과정, 수입, 판매, 부작용에 대한 정보를 제출하도록 요구하고 있으며 또한 태국 식약청에 제품 생산국가 정부가 발행하는 판매증명서(Certificate of Free Sale)와 허가 신청서(Khor Por 1)를 제출해야 합니다.<br><br>
                                    이 카테고리에는 다음과 같이 8종류의 의료기기가 있습니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>HIV 진단 도구</li>
                                    <li><span class="bullet"></span>콘돔</li>
                                    <li><span class="bullet"></span>실험용 장갑</li>
                                    <li><span class="bullet"></span>수술용 장갑</li>
                                    <li><span class="bullet"></span>의료용 혈액 주머니</li>
                                    <li><span class="bullet"></span>콘텍트 렌즈</li>
                                    <li><span class="bullet"></span>1회용 피하 주사기</li>
                                    <li><span class="bullet"></span>1회용 인슐린 주사기</li>
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
                        <li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 유라시아 인증)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>제품 시험 (전기 안전, 기계 안전)</span></p></li>
                        <li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 01 태국 의료기기 등록 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 02 대만 의료기기 등록 컨텐츠 시작 //------->
        <article>
	        <section class="business_type5" class="area">
	            <h1 class="tit_num">동남아시아 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">대만 의료기기 등록</h2>
                <p class="outline">
                    대만에 수출되는 의료기기는 반드시 TFDA (Taiwan Food and Drug Administration)에서 요구하는 등록 요건에 따라 허가를 받아 의료기기 등록을 하여야 합니다. 대만은 2004년 2월부터 대만 내에서 판매되는 의료기기에 대해 의료기기 GMP를 의무적으로 요구하고 있으며, 이 인증은 ISO 13485의 내용을 기본으로 하여 제정되었습니다.<br><br>
                    대만의 의료기기 시장은 의료시스템 개발 필요성에 대한 인식 확산에 따라 지속적인 성장을 보이고 있으며, 보건 의료시스템의 선진화, 정부의 의료기기산업지원 등으로 시장의 성장이 더욱더 촉진될 것입니다.
                </p>
	            
	            <ul class="content">
	                <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_Taiwan_01.jpg" alt="의료기기 정의 및 등급 분류">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의료기기 정의 및 등급 분류</h3>
                                <p class="con_txt">
                                    대만의 약사법 (Pharmaceuticals Affairs Law)에 따르면, 의료기기는 장비, 기계, 기구와 악세서리, 부속품 등을 포함하고 있으며, 진단, 치료, 치유, 질병 완화, 질병 예방, 또는 신체의 기능이나 구조에 영향을 미칠 수 있는 제품으로 정의되고 있습니다. 대만의 의료기기 등급 분류는 기본적으로 미국 FDA의 분류를 따르고 있습니다. 크게 일반 의료기기와 체외진단 의료기기로 나누며, 제품의 기능, 용도, 사용 및 작동 원리에 따라 17개의 카테고리로 분류됩니다. 의료기기의 특성과 위험도에 따라 3개의 등급 (Class I, II, III)으로 분류합니다.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>Class I (위험도 낮음)
                                    </span>
                                    <p>
                                        생명을 유지하거나 연장하지 않으며 인체 훼손 방지에 있어 상당히 중요한 용도로 사용하지 않고, 질병과 부상에 대한 위험 가능성을 가지지 않은 의료기기
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>Class II (위험도 중간)
                                    </span>
                                    <p>
                                        생명 유지나 연장에 사용할 것으로 인정되는 의료기기
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>Class III (위험도 높음)
                                    </span>
                                    <p>
                                        생명을 유지하거나 연장하는 기기, 또는 인체 손상 방지를 위해 상당히 중요한 의료기기, 질병과 부상의 잠재적 위험을 줄 수 있는 의료기기
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_Taiwan_02.jpg" alt="등록 프로세스">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">등록 프로세스</h3>
                                <p class="con_txt">
                                    대만 의료기기 등록 절차는 다음과 같습니다.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>의료기기 등급 분류
                                    </span>
                                    <p>
                                        대만 의료기기 등록 프로세스는 모든 등급의 의료기기에 반드시 필요하며, 의료기기 등급에 따라 제출 서류가 상이합니다. 그러므로 신청 전에 제품의 올바른 등급분류가 이루어져야 합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>대만 현지대리인 지정
                                    </span>
                                    <p>
                                        대만에 의료기기를 판매하고자 하는 해외 제조사의 경우, 대만 현지 대리인을 지정해야 합니다. 대만 대리인은 대만에 거주하고 있어야 하며, 대만 내에 판매 라이선스를 보유하고 있어야 합니다. 대리인은 업체를 대신하여 의료기기를 등록하고 TFDA와 직접 연락하며 업무를 처리합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>제품 허가/신고 신청
                                    </span>
                                    <p>
                                        제품허가증 신청은 의료기기 등급에 따라 차이가 있습니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">4. </span>QSD(GMP) 준비 및 신청
                                    </span>
                                    <p>
                                        대만 내 현지 제조사의 경우 의료기기 GMP의 취득 절차에 따라 인증을 취득해야 하며, 해외 제조사의 경우 ISO 13485 인증서 보유 시 QSD (Quality System Documentation)심사를 받아야 합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">5. </span>TFDA 심사
                                    </span>
                                    <p>
                                        품질시스템 인증 문서를 준비하여 TFDA에서 지정한 기관에 제출하면 심사기관에서 심사가 진행됩니다. 필요에 따라 해외 제조 현장 심사가 이루어집니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">6. </span>최종 인증 발급
                                    </span>
                                    <p>
                                        TFDA에 의료기기 등록이 완료되면 대만에서 제품을 유통할 수 있습니다.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_Taiwan_03.jpg" alt="필요 정보 및 서류">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">필요 정보 및 서류</h3>
                                <p class="con_txt">
                                    대만 의료기기 허가 절차는 제품 허가 / 신고 신청과 품질시스템 인증으로 구성되어 있습니다.<br><br>
                                    의료기기 제조사가 제품 허가 / 신고 신청 시 준비해야할 서류는 의료기기 등급별로 상이합니다.
                                </p>
                                <div class="con_txt_2">
                                    <ul class="list_st">
                                        <span class="point_blk">(1) Class I</span>
                                        <li><span class="bullet"></span>신청서</li>
                                        <li><span class="bullet"></span>의료기기 제조업 허가증 사본</li>
                                        <li><span class="bullet"></span>대만 현지 제조사의 경우, GMP 적합 인정서</li>
                                        <li><span class="bullet"></span>해외 제조사의 경우, QSD 적합 인정서</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <ul class="list_st">
                                        <span class="point_blk">(2) Class II / III</span>
                                        <li><span class="bullet"></span>신청서</li>
                                        <li><span class="bullet"></span>의료기기 제조업 허가증 사본</li>
                                        <li><span class="bullet"></span>대만 현지 제조사의 경우, GMP 적합 인정서</li>
                                        <li><span class="bullet"></span>해외 제조사의 경우, QSD 적합 인정서 및 해당국가 제조판매허가 승인서 원본</li>
                                        <li><span class="bullet"></span>중문 지침 리플릿, 카탈로그 포장, 라벨링, 사용방법, 제품 외형 사진</li>
                                        <li><span class="bullet"></span>시험 기록 및 보고서</li>
                                        <li><span class="bullet"></span>기술문서</li>
                                        <li><span class="bullet"></span>논문 및 데이터</li>
                                        <li><span class="bullet"></span>임상 시험 보고서</li>
                                        <li><span class="bullet"></span>방사선 제품일 경우, 안전정보 자료</li>
                                    </ul>
                                </div>
                                <p class="con_txt">
                                    의료기기 품질시스템 인증 신청 시 대만 현지 제조업체는 의료기기 GMP 취득 절차에 따라 인증을 취득해야 하며, 해외 제조업체의 경우, ISO 13485 인증서 보유 시 QSD(Quality System Documentation)를 통해 심사가 이루어집니다. QSD는 다음 3가지로 분류됩니다.
                                </p>
                                <div class="con_txt_2">
                                    <ul class="list_st">
                                        <span class="point_blk">(1) 유럽 CE 인증 제조사 및 미국 FDA 등록 제품: QSD 간소화 대상</span>
                                        <li><span class="bullet"></span>신청서</li>
                                        <li><span class="bullet"></span>제조업체 문서</li>
                                        <li><span class="bullet"></span>CE 인증 제조사의 경우, ISO 13485 인증서 사본, 가장 최근의 심사보고서, 해당 국가 제조 판매 증명서 CFG (Certificate to Foreign Government)</li>
                                        <li><span class="bullet"></span>미국 FDA 등록 제품 제조사의 경우, FDA가 발급한 공장 조사 보고서, 적합성 검증 등록 증명서, FDA 제조 판매 증명서 CFG</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <ul class="list_st">
                                        <span class="point_blk">(2) 그 외 해외국가의 의료기기 허가 제품 : 일반 QSD 대상</span>
                                        <li><span class="bullet"></span>신청서</li>
                                        <li><span class="bullet"></span>제조업체 문서</li>
                                        <li><span class="bullet"></span>공장 배치도</li>
                                        <li><span class="bullet"></span>해당 제품에 대한 공정구역</li>
                                        <li><span class="bullet"></span>주요 생산 설비 리스트</li>
                                        <li><span class="bullet"></span>공정 프로세스</li>
                                        <li><span class="bullet"></span>제조공장 품질매뉴얼 및 절차서</li>
                                        <li><span class="bullet"></span>품질문서 목록표</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <ul class="list_st">
                                        <span class="point_blk">(3) 위 경우에 해당되지 않는 경우: 해외 제조사 현장 실사 대상</span>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_Taiwan_04.jpg" alt="IGC인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증원의 역량</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC는 다년간 쌓아온 기술력 및 전문성을 통해 의료기기 제품 품질 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                    <li><span class="bullet"></span>IGC는 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있어 전 세계 주요 시장에서 고객들의 의료기기 인증을 지원하고 있습니다.</li>
                                    <li><span class="bullet"></span>IGC는 해외 제품 인증 기관과의 협력관계 구축을 통해, 의료기기 분야에서 다양한 인증 관련 서비스를 제공하고 있습니다.</li>
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
                        <li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 임상평가, 의료기기등록[유라시아, 중국, 미국, 태국, 대만])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>04</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 02 대만 의료기기 등록 컨텐츠 종료 //------->

    </div><!------div class="tab_con" 종료 --------->	
</div> <!--------// div class="content_wrap"  종료  ------------------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>