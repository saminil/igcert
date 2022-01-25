<?php
	include_once('./_common.php');
$g5['title'] = '화장품 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
			<li class="on"><a href="javascript:;">EWG</a></li>
			<li><a href="javascript:;">CPNP</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 종료  +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

    <!--+++ 20.05.01 탭컨텐츠 영역 시작 +++-->
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	    <article style="display:block">
	        <section class="business_type5" class="area">
	            <h1 class="tit_num">화장품 제품인증 소개</h1>
	            <h2 class="tit_cer fc_pointer">EWG(미국비영리환경단체)</h2>
	            <div class="tit_img">
                    <img src="./images/product_cosmetics_ewg_01.png" alt="EWG 화장품 검증 로고" style="width: 100%">
                </div>
	            <p class="outline">
                    EWG는 Environmental Working Group의 약자로서 미국에서 가장 영향력 있는 비영리 환경 운동 단체입니다. EWG는 주로 유해성분과 독성물질을 피하고 올바르고 안전한 제품을 선택할 수 있도록 교육과 계몽 활동을 진행하고 있는 단체입니다. EWG는 기업이나 정부 등으로부터 외압이나 후원을 일체 받지 않기 때문에, 그 어떤 단체보다도 공정하면서 객관적인 정보를 제공합니다. EWG는 식품, 에너지, 농업 등의 분야에서 인류의 건강과 환경에 대한 연구를 하며, 특히 화장품과 관련하여 그 성분과 안전성에 대한 데이터베이스를 제공하고 있습니다. EWG의 평가 및 검증으로 부여된 점수에 기반한 제품 안전등급을 부여하며, 개인 위생제품 및 화장품에서 이용이 가능합니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_ewg_03.jpg" alt="EWG의 특징">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">EWG의 특징</h3>
                                <p class="con_txt">
                                    EWG는 사람들이 더 건강한 환경에서 더 건강한 삶을 살 수 있도록 하는 것을 목표로 하고 있습니다. EWG는 화학 물질의 안전성을 추적하여 생산자는 성분의 안전성과 투명성 홍보 및 판매 증진, 소비자는 위험 인지 및 안전 추구를 할 수 있습니다.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>EWG 등급
                                    </span>
                                    <p class="con_txt">
                                        등급은 EWG가 운영하는 Skin Deep 데이터베이스를 기반으로 평가되며, 이 데이터는 전 세계 연구 단체들에 의해 발표된 안전성 연구 자료를 토대로 만들어진 것입니다.성분 안전 점수에 따라 적색, 황색 또는 녹색 등급이 있으며, 이 중 녹색이 가장 엄격한 기준을 충족하는 제품입니다.
                                    </p>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>1~2 등급: 녹색</li>
                                        <li><span class="bullet"></span>3~6 등급: 황색</li>
                                        <li><span class="bullet"></span>7~10 등급: 적색</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_ewg_05.jpg" alt="EWG 검증의 필요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">EWG 검증의 필요성</h3>
                                <p style="text-align: justify">
                                    EWG 검증이 시작된 이후로, 제조 업체는 암 발생률 상승, 알레르기 증가 등을 고려하여 보다 건강하고 안전한 제품을 만들게 되었습니다. EWG는 건강에 대한 가장 엄격한 기준을 충족하는 제품을 인정합니다. 이것은 EWG가 우려하는 화학 물질이 없음을 의미하고, 이것은 완전한 투명성을 의미합니다. EWG 승인 마크는 신뢰할 수 있다는 표시를 의미합니다.<br><br>
                                    수천개의 소비자 제품이 시장에 나와 있기 때문에, 어떤 제품이 더 안전하고 건강에 좋은 지 알기에는 어렵습니다. 제품에 EWG 마크가 표시되면, EWG의 화학 물질이 없고 건강에 대한 가장 엄격한 기준을 충족하는지 확인할 수 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_ewg_04.jpg" alt="EWG 인증 진행 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">EWG 인증 진행 절차</h3>
                                <p class="con_txt">
                                    최초 신청 시, 다음의 절차를 따릅니다.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>신청 및 허가 : 파트너사인 HLB(Healthy Lifestyle Brands)의 EWG 검증
                                    </span>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li><span class="bullet"></span>신청서 및 기타 서류 제출 (진술서, 공개 계약서, 제품성분 스프레드시트, 안전성 강화 통지서 등)</li>
                                            <li><span class="bullet"></span>4~6주 소요</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>인증 진행 : HBL의 EWG 검증 기준 충족 시 인증 진행
                                    </span>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li><span class="bullet"></span>추가 인증진행비: 제품의 매출 및 회사별 상이</li>
                                            <li><span class="bullet"></span>6~8주 소요</li>
                                            <li><span class="bullet"></span>필요에 따라 추가 서류가 요청될 수 있음</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>승인 및 라이선스 계약서 작성
                                    </span>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">4. </span>마크 사용법 및 접근 교육 이수
                                    </span>
                                </div>
                                <p style="text-align: justify">
                                    ※ 신규 인증은 3년간 유효하며, 성분이 바뀌는 경우 재시험을 거쳐야 합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_ewg_02.jpg" alt="IGC인증의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증의 역량</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC는 수년간 쌓아온 기술력 및 전문성을 통해 제품 인증의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                    <li><span class="bullet"></span>IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있습니다.</li>
                                    <li><span class="bullet"></span>IGC는 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                                    <li><span class="bullet"></span>IGC는 화장품 분야에서의 다양한 인증 관련 서비스를 제공하고 있습니다.</li>
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
                        <li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 22716)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>제품인증 (Vegan 인증, 유라시아 인증, VCRP, EWG, CPNP)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>04</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 01 EWG(미국비영리환경단체) 컨텐츠 종료 //------->
            
        
        <!----// 컨텐츠 02 CPNP 컨텐츠 시작 //------->
        <article>
	        <section class="business_type5" class="area">
	            <h1 class="tit_num">화장품 제품인증 소개</h1>
	            <h2 class="tit_cer fc_pointer">CPNP</h2>
	            <p class="outline">
                    CPNP (Cosmetic Product Notification Portal)는 EC No. 1223/2009에 따라 만들어진 온라인 화장품 등록 포털입니다. 유럽 시장에 유통될 모든 화장품 제품은 반드시 CPNP에 등록이 되어야 합니다. 단 한 번의 CPNP 등록으로 화장품 제품의 성분 및 원료가 관리 및 통제되고, 전 EU 시장에 진출이 가능합니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_cpnp_01.jpg" alt="CPNP 등록 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">CPNP 등록 절차</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>RP (Responsible Person) 지정
                                    </span>
                                    <p>
                                        유럽 시장에 화장품을 수출하고자 하는 화장품 제조사는 RP를 지정하고, RP는 화장품 제품을 CPNP에 등록하기 위한 절차를 준비합니다. RP는 또한 제품정보파일(PIF)을 보관 및 관리하며 유럽 내 유통되는 제품의 사후 관리를 담당하게 됩니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>필요 서류 및 라벨링 작성
                                    </span>
                                    <p>
                                        화장품 제조사는 CPNP 등록에 필요한 정보 및 서류를 RP에게 제출합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>제품 성분 및 라벨 검토
                                    </span>
                                    <p>
                                        제출한 서류를 토대로 RP는 제품의 성분 및 라벨을 검토합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>제품정보파일 (PIF) 작성
                                    </span>
                                    <p>
                                        PIF은 유럽 시장 진출에 필요한 모든 자료를 하나의 파일로 합친 것입니다. RP는 검토한 서류를 토대로 CPSR, GMP, 제품 효능 입증 정보 등을 포함한 PIF를 작성합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>CPNP 등록
                                    </span>
                                    <p>
                                        모든 요구사항을 충족하면 RP는 CPNP에 화장품 제품을 등록합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>제품 시장 출시
                                    </span>
                                    <p>
                                        CPNP등록이 완료되어 등록번호가 부여되면 해당 화장품은 유럽 시장 내에서 유통될 수 있습니다.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_cpnp_02.jpg" alt="CPNP 등록에 필요한 서류">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">CPNP 등록에 필요한 서류</h3>
                                <ul class="list_st">
                                    <li><span class="number">&#10020; </span>화장품 제조사 및 용기 제조사 정보</li>
                                    <li><span class="number">&#10020; </span>제조사 인증서 (GMP, CGMP, ISO 22716 등) 사본</li>
                                    <li><span class="number">&#10020; </span>완제품/원료MSDS (Material Safety Data Sheet)</li>
                                    <li><span class="number">&#10020; </span>완제품/원료 CoA (Certificate of Analysis)</li>
                                    <li><span class="number">&#10020; </span>향료 IFRA 인증서</li>
                                    <li><span class="number">&#10020; </span>전성분표</li>
                                    <li><span class="number">&#10020; </span>제품에 표기한 효능 및 효과의 증빙자료 (예시: 임상 테스트 결과)</li>
                                    <li>
                                        <span class="number">&#10020; </span>Test 성적서
                                        <ul class="list_st">
                                            <li><span class="bullet"></span>Stability Test (안정성 테스트)</li>
                                            <li><span class="bullet"></span>Compatibility Test (용기 적합성 테스트)</li>
                                            <li><span class="bullet"></span>Microbiological Test (미생물 테스트)</li>
                                            <li><span class="bullet"></span>Challenge Test (방부력 테스트)</li>
                                        </ul>
                                    </li>
                                    <li><span class="number">&#10020; </span>동물 실험 데이터</li>
                                    <li><span class="number">&#10020; </span>포장재 정보</li>
                                    <li><span class="number">&#10020; </span>단상자 및 라벨 파일</li>
                                    <li><span class="number">&#10020; </span>제품이 출시될 EU 회원국명</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_cpnp_03.jpg" alt="라벨 포함 사항">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">라벨 포함 사항</h3>
                                <ul class="list_st">
                                    <li><span class="number">&#10020; </span>제품의 기본정보</li>
                                    <li><span class="number">&#10020; </span>제조 batch number</li>
                                    <li><span class="number">&#10020; </span>전성분</li>
                                    <li><span class="number">&#10020; </span>제품의 중량 또는 부피</li>
                                    <li><span class="number">&#10020; </span>유통기한</li>
                                    <li><span class="number">&#10020; </span>알레르기 유발 성분</li>
                                    <li><span class="number">&#10020; </span>사용방법 및 주의사항</li>
                                    <li><span class="number">&#10020; </span>제품 수입 국가명 (원산지)</li>
                                    <li><span class="number">&#10020; </span>RP 이름 및 주소</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_cpnp_04.jpg" alt="CPNP 등록 주의 사항">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">CPNP 등록 주의 사항</h3>
                                <ul class="list_st">
                                    <li><span class="number">&#10020; </span>CPNP 등록정보는 업데이트가 가능합니다. 또한 한 제품에 대해 중복으로 CPNP 등록이 가능합니다. 따라서 여러 수입자가 동일 제품에 대하여 CPNP 등록을 하였다면, 각자 수입한 제품의 패키징에 RP 이름 및 주소가 다르게 기재됩니다.</li>
                                    <li><span class="number">&#10020; </span>CPNP는 화장품 ‘인증’이 아닌 ‘등록’입니다.</li>
                                    <li><span class="number">&#10020; </span>유럽 내 첫 진출 국가 해당 언어로 작성 및 등록해야 합니다.</li>
                                    <li><span class="number">&#10020; </span>세트 구성 상품의 경우 개별 상품에 대한 정보를 기입해야 합니다.</li>
                                    <li><span class="number">&#10020; </span>다기능 상품은 주요 기능을 중심으로 카테고리를 지정하여 등록합니다.</li>
                                    <li><span class="number">&#10020; </span>화장품 원료 및 제품에 대한 동물실험은 전면 금지되어 있습니다.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_cpnp_05.png" alt="RP의 의무 및 역할">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">RP의 의무 및 역할</h3>
                                <p class="con_txt">
                                    CPNP 등록은 유럽 내 책임자인 RP(Responsible Person)에 의해 이루어집니다. RP는 EU 내에서 유통되는 화장품에 대한 법적 책임자로, 제품이 유럽 시장에서 잘 유통될 수 있도록 돕는 역할을 하며, 제품에 문제가 발생할 경우 관할당국은 RP를 통해 조치를 시행할 것을 명령합니다.<br><br>
                                    RP의 의무 및 역할은 다음과 같습니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>안전성 평가 및 안전성 보고서(CPSR) 작성</li>
                                    <li><span class="bullet"></span>PIF 작성 및 보관</li>
                                    <li><span class="bullet"></span>CPNP 등록</li>
                                    <li><span class="bullet"></span>제품 라벨링 검토</li>
                                    <li><span class="bullet"></span>광고 문구 검토</li>
                                    <li><span class="bullet"></span>화장품 부작용 모니터링</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-6 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_cosmetics_cpnp_06.png" alt="관련 제공 서비스">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">관련 제공 서비스</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>ISO 22716 인증 서비스
                                    </span>
                                    <p>
                                        ISO 22716은 우수 화장품 제조 및 품질 관리 기준에 대한 국제 화장품 규격입니다. ISO 22716에서는 화장품 기업의 제조 시설 기준(GMP) 뿐만 아니라 제품 안전성 관리시스템의 실행 및 유지 경쟁력을 평가합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>RP 서비스
                                    </span>
                                    <p>
                                        CPNP 등록을 위해서는 RP를 지정하여 절차를 진행하여야 합니다. IGC는 독일 현지RP를 통한 대리인 서비스를 제공합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>Stability Test (안정성 테스트) 성적서 발행
                                    </span>
                                    <p>
                                        화장품 안정성 테스트는 화장품의 유통과정과 소비자의 사용기간을 고려하여 품질을 보증하기 위해 약 3개월간 진행되는 테스트입니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">4. </span>Compatibility Test (용기 적합성 테스트) 성적서 발행
                                    </span>
                                    <p>
                                        화장품 용기 적합성 테스트는 제품의 안정성에 영향을 미치는 화장품의 용기와 내용물의 상호작용이 있는지 확인하기 위해 약 3개월 간 진행되는 테스트입니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">5. </span>Microbiological Test (미생물 테스트) 성적서 발행
                                    </span>
                                    <p>
                                        화장품 미생물 테스트는 생산, 제조된 제품의 미생물에 대한 오염상태를 지속적으로 모니터링하는 테스트입니다. 테스트는 약 1개월 간 진행됩니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">6. </span>Challenge Test (방부력 테스트) 성적서 발행
                                    </span>
                                    <p>
                                        화장품 방부력 테스트는 제품에 인위적으로 균을 투입하여 시간 경과에 따른 균의 유의적 감소를 관찰하며 제품 품질과 소비자 건강에 영향을 줄 수 있는 미생물이 포함되지 않았음을 확인하는 테스트입니다. 단, 수분을 함유하지 않은 제품, 1회용 제품, 3≤pH≤10인 제품, 알코올 함량이 20%이상인 제품, 65°C 이상의 온도에서 채워진 제품, 적대적 환경(강한 산화제, 압축가스, 극성 유기용매)을 조성할 수 있는 원료를 포함한 제품은 방부력 테스트가 필요하지 않습니다. 테스트 소요기간은 약 1개월입니다.
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

        </article><!----// 컨텐츠 02 CPNP 컨텐츠 종료 //------->

    </div><!------div class="tab_con" 종료 --------->
</div> <!--------// div class="content_wrap"  종료  ------------------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>