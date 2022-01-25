<?php
	include_once('./_common.php');
$g5['title'] = '러시아 제품 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
			<li><a href="javascript:;">GOST-R</a></li>
			<li class="on"><a href="javascript:;">의료기기 러시아 등록</a></li>
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
                <h1 class="tit_num">러시아 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">GOST-R</h2>
                <p class="outline">
                    GOST는 Euro-Asian Council for Standardization, Metrology and Certification (EASC)에서 규정한 국가기술표준규격으로 러시아어로 연방 규격을 뜻하는 GOsudarstvennyy STandart의 약어입니다.
                </p>
                
                <div class="tit_img">
                    <img src="./images/product_russia_gost-r_01.jpg" alt="GOST-R 로고" style="width: 100%">
                </div>
                
                <p class="outline">
                    현재 국가별 발행되는 GOST 인증서와 발행하는 인증기관의 주체가 다른 만큼, 국가별 GOST 인증서는 각각 다른 인증서이며 러시아는 GOST-R, 카자흐스탄은 GOST-K 등으로 구분지어 불리고 있습니다..<br><br>
                    관세동맹국가 간 발효된 통합 인증제도인 EAC의 도입 이후 러시아 내에서 GOST-R 인증 비중은 예전에 비하여 크게 줄었습니다. 하지만 아직 관세동맹국간에 협의가 이루지지 않은 강제인증 품목들에 한해서는 여전히 수입통관 시 GOST-R 인증이 요구됩니다.
                </p>
                
                <ul class="content">	
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_russia_gost-r_03_gostrCoC.jpg" alt="GOST R 인증서">
                                <span style="display:block;text-align:center;">- GOST R 인증서 -</span>
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">GOST R 인증서 유형</h3>
                                <div style="text-align:justify">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>GOST R CoC</span>
                                    <p>의무적으로 적합성 인증을 받아야하는 대상에 대해 발급됩니다. GOST R CoC는 러시아로 수입되는 물품에 대해 아이템 및 제조공정라인이 러시아 안전 규정에 따라 적합함을 인증해주는 인증서이며, GOST R CoC의 발행은 인정을 받은 인증기관 (Accredited Certification Body) 에서 이루어져야 합니다.</p>
                                </div>

                            </dd>
                        </dl>
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_russia_gost-r_04_gostrDoC.jpg" alt="GOST R DoC 인증서">
                                <span style="display:block;text-align:center;">- GOST R DoC 인증서 -</span>
                            </dt>
                            <dd class="txt_area">
                                <div style="text-align:justify">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>GOST R DoC</span>
                                    <p>의무적으로 적합성 선언을 받아야하는 대상에 대해 발급됩니다. 적합성 선언 (GOST R DoC)은 의무적인 적합성인증 (GOST R CoC)에 비해 간소화된 유형의 인증서입니다.</p>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_russia_gost-r_05_gostrVoluntary.jpg" alt="GOST Voluntary 인증서">
                                <span style="display:block;text-align:center;">- GOST Voluntary 인증서 -</span>
                            </dt>
                            <dd class="txt_area">
                                <div style="text-align:justify">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>GOST Voluntary (자발적 GOST)</span>
                                    <p>GOST Voluntary는 의무적으로 GOST 인증을 받아야 하는 제품은 아니지만 제품이 적용 규정과 지침에 따라 만들어 졌음을 증명하는 인증서로, EAC 인증을 받는 기업이 GOST Voluntary를 추가적으로 신청하여 받을 경우 기업의 홍보, 신뢰 확보 등의 효과가 있습니다.</p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_ce-mdd_01.png" alt="GOST R 인증서">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">GOST R 인증서</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>GOST R 인증서 유효기간
                                    </span>
                                    <p>
                                        GOST R 인증은 최소 1년에서 최대 3년까지 유효합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>GOST R 인증 절차
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="number">1. </span>인증기관에 신청서 및 제품 관련 서류 제출</li>
                                        <li><span class="number">2. </span>서류 검토</li>
                                        <li><span class="number">3. </span>적용되는 인증서 유형 확인</li>
                                        <li><span class="number">4. </span>샘플 시험 및 공장심사 여부 확인</li>
                                        <li><span class="number">5. </span>견적서 발행 및 계약</li>
                                        <li><span class="number">6. </span>샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행</li>
                                        <li><span class="number">7. </span>공장심사 필요 시, 심사 진행</li>
                                        <li><span class="number">8. </span>인증서 초안 발행 및 고객 확인</li>
                                        <li><span class="number">9. </span>인증서 발행</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>GOST R 인증 제출 서류
                                    </span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>신청서</li>
                                        <li><span class="bullet"></span>HS Code</li>
                                        <li><span class="bullet"></span>제품 설명서 (러시아어 또는 수출국 언어)</li>
                                        <li><span class="bullet"></span>기 보유 시험 성적서</li>
                                        <li><span class="bullet"></span>기 보유 인증서</li>
                                        <li><span class="bullet"></span>도면 (해당 시)</li>
                                        <li><span class="bullet"></span>기술문서 (해당 시)</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_russia_gost-r01.jpg" alt="왜 중요한가?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">왜 중요한가?</h3>
                                <p style="text-align: justify">
                                    관세동맹국가 간 발효된 통합 인증제도인 EAC의 도입 이후 러시아 내에서 GOST-R 인증 비중은 예전에 비하여 크게 줄었지만 아직 관세동맹국간에 협의가 이루지지 않은 강제인증 품목들에 한해서는 여전히 수입통관 시 GOST-R 인증이 요구됩니다.<br><br>
                                    그러므로, 관세동맹국간에 협의가 이루지지 않은 강제인증 품목들에 포함되어 있는 제품을 러시아 지역으로 수출하고자 하는 기업은 경우 적합성 준수를 증명하는 GOST R 인증을 받아야 하며 제품, 포장 또는 첨부 문서에 GOST R 적합성 마크를 표시해야 해당 국가로 수출이 가능합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_russia_gost-r03.jpg" alt="IGC인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증원의 역량</h3>
                                <p class="con_txt">
                                    IGC인증기관은 RUS-TEST PACIFIC인증기관과 협력하여 고객과 이해관계자들에게 경쟁력 있는 최고의 가치를 제공하여, 지속적 동반 성장을 통해 세계적인 인증기관으로 거듭나고 있습니다.<br><br>
                                    IGC는 다음을 준수합니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>법적 요구사항 준수</li>
                                    <li><span class="bullet"></span>팀워크 및 조직원간의 연대</li>
                                    <li><span class="bullet"></span>성실성과 공정성</li>
                                    <li><span class="bullet"></span>사회적 및 환경적 책임</li>
                                    <li><span class="bullet"></span>인증 및 등록 서비스 제공 업체로서의 지식과 학습을 통한 지속적인 발전과 개선활동</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_russia_gost-r04.jpg" alt="왜 IGC인가?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">왜 IGC인가?</h3>
                                <p class="con_txt">
                                    IGC는 여러 강점을 통해 고객에게 경쟁력 있고 만족스러운 서비스를 제공합니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>다양한 분야의 인증 사업을 통해 확보한 지식과 기술력을 바탕으로 한 경쟁력 있는 서비스 제공</li>
                                    <li><span class="bullet"></span>경쟁력 있는 인증 비용</li>
                                    <li><span class="bullet"></span>신속한 인증 서비스 진행을 통한 최소한의 기간 소요</li>
                                    <li><span class="bullet"></span>자회사를 통한 유라시아 이외 분야의 각종 시스템 및 제품 인증에 대하여 One Stop Service 제공</li>
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
                        <li><p><em><strong>02</strong></em><span>제품 인증(유럽, 유라시아, 미주, 중국, 동남아시아)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
                        <li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 01 GOST-R 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 02 의료기기 러시아 등록 컨텐츠 시작 //------->
        <article style="display:block">
            <section class="business_type5" class="area">
                <h1 class="tit_num">러시아 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">의료기기 러시아 등록</h2>
                <p class="outline">
                    건강 및 사회 발전 서비스를 제공하는 러시아 연방 보건 감독청인 Roszdravnadzor가 발행하는 공식 문서인 의료기기등록 인증서가 관련 의료기기에 대한 사전 평가를 통과하였기에 생산, 수입, 판매 및 러시아 내에서의 사용에 적합함을 승인하는 것입니다. 러시아에서 생산된 의료기기뿐만 아니라 해외에서 러시아로 수입된 모든 의료기기는 등록이 되어야 합니다.
                </p>
                
                <ul class="content">	
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medical_divice_registration_01.jpg" alt="의료기기 Class 분류">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의료기기 Class 분류</h3>
                                <p class="con_txt">
                                    러시아에서 운영중인 의료기기에 대한 명명 및 등급은 Order N4H “About Conformation of Nomenclature Classification of Medical Devices”에 정리되어 있으며 체외진단 장비는 포함되지 않습니다. 체외진단 장비는 별도의 등급 규정에 따릅니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Class 1 – 낮은 위험</li>
                                    <li><span class="bullet"></span>Class 2a – 중간 위험</li>
                                    <li><span class="bullet"></span>Class 2b – 높은 위험</li>
                                    <li><span class="bullet"></span>Class 3 – 최상위 위험</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_04.jpg" alt="의료기기 등록 진행 시험 종류">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의료기기 등록 진행 시험 종류</h3>
                                <p class="con_txt">
                                    의료기기 등록에 따른 시험은 06.05.2011 N 352 법령에 따라 등록된 시험소에서만 진행이 가능하고, 임상 시험에 관해서는 이 기능을 수행할 수 있는 기관 목록이 Roszdravnadzor 웹사이트에 게시되어 있습니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>독성시험</li>
                                    <li><span class="bullet"></span>기능시험</li>
                                    <li><span class="bullet"></span>전자파검사</li>
                                    <li><span class="bullet"></span>임상시험</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_05.jpg" alt="의료기기 등록 유효기간">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의료기기 등록 유효기간</h3>
                                <p class="con_txt">
                                    영구 (인증서에 등록된 해당제품이 단종될 때까지 유효합니다)
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medical_divice_registration_05.jpg" alt="의료기기 등록 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의료기기 등록 절차</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>기업의 대리인은 Rosdravnadzor가 러시아로 샘플을 보내는 것에 동의하는 허가 신청을 해야 하며, 이 권한은 6 개월 동안 유효합니다. 또한 대리인은 신청 제품에 대한 설명, 시험소와의 계약서, 변호사 또는 제조업체와의 계약서 등을 제공하여야 합니다.</li>
                                    <li><span class="number">2. </span>대리인은 샘플이 세관을 통과할 수 있도록 수속을 하여야 합니다. 또한 대표자는 샘플 외에도 계약서, 세관 공무원에게 제출할 문서 및 송장을 제공하여야 합니다.</li>
                                    <li><span class="number">3. </span>인정을 받은 실험소에서 독성시험, 기술시험 및 전기제품의 경우 전자파 시험을 실시합니다.</li>
                                    <li><span class="number">4. </span>(3단계와 동시 진행) 기업은 등록에 필요한 기술문서 전체를 준비하여야 합니다.</li>
                                    <li><span class="number">5. </span>의료 기기의 등급을 확정하고, 러시아에 등록된 유사 의료기기가 없는 경우 첫 번째 단계로 품질 평가, 효율성 및 안전성 시험이 실시되고, 그 이후 두 곳의 다른 의료기관에서 임상평가가 실시되어 두 번째 단계의 품질 평가, 효율성 및 안전성 평가가 수행됩니다.</li>
                                    <li><span class="number">6. </span>기업은 전체 기술문서를 Rosdravnadzor에 제출합니다. 의료기기등록을 마친 후, 등록증을 근거로 GOST-R 인증서와 품목에 따른 위생인증서 및 제품의 특성에 따라 계측기 인증서를 확보하여야 합니다.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medical_divice_registration_03.jpg" alt="의료기기 등록 제출 서류">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의료기기 등록 제출 서류</h3>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>등록 및 인증 절차 진행에 따른 제조자의 위임장 (공증 요망)</li>
                                        <li><span class="bullet"></span>본국의 회사 등록 증빙 자료 (예로서 상공회의소 자료, 내면 FDA 등록에 따른 증빙 자료 혹은 회사 등록 인증서, 사업 허가증)들은 공증이 되어 제출하여야 합니다.</li>
                                        <li><span class="bullet"></span>의료기기 적용 가능한 국내 혹은 국제 기관 발행의 ISO 9001 혹은 ISO 13485 인증서</li>
                                        <li><span class="bullet"></span>93/42/EEC의 요구 사항에 따른 적합성 인증서, 적합성 선언서, 자유판매 증명서, FDA 인증 증빙 자료, 자국 혹은 기타 국에 대한 의료기기 인증 증빙 자료. (공증하여 제출하여야 함)</li>
                                        <li><span class="bullet"></span>안전을 입증하는 시험 성적서 (IEC 60601-1, IEC 60601-1-2, ISO 10993 등) – 정확한 성적서는 시험소에서의 기술검사시 업무를 간략히 하는데 도움을 줄 수 있습니다.</li>
                                        <li><span class="bullet"></span>독성안전/생체적합성에 대한 안전성 시험 성적서</li>
                                        <li><span class="bullet"></span>기술 및 독성 시험 진행을 위한 샘플 제공</li>
                                        <li><span class="bullet"></span>의료기기 신규 등록 신청서 혹은 갱신 등록 신청서. 신청서는 반드시 신청자 (러시아에서 등록을 수행할 권한이 있는 법인) 레터 헤드를 사용하여야 합니다. 신청은 해당 의료기기 혹은 장비에 포함되는 모든 구성품 및 부품에 대한 설명을 포함하여야 합니다. 신청은 러시아어로 제출하여야 합니다.</li>
                                        <li><span class="bullet"></span>신청 업무를 수행할 법적 대리인 선임에 대한 위임장을 제출합니다. 제조 회사는 등록 권한이 있는 법인 (법인 책임자에게 주소 지정)에게 위임장을 발급해 주어야 하며 제조업체의 원산지 국가에서 공증을 받아야합니다. 또한 러시아어로 번역되어야 하며 자국 소재의 러시아 영사관에서 공증을 받아야 합니다. 위임장은 제조업체가 신청자가 의료 기기/장비의 등록을 수행하고 상담 및 전문 작업을 수행한다는 계약에 서명하고 등록 인증서를 받도록 위임해야 한다고 명시해야 합니다.</li>
                                    </ul>
                                </div>
                                <p style="text-align:justify">
                                    등록 프로세스에는 GMP (Good Manufacturing Practices) 심사가 필요하지 않습니다. 하지만 이러한 심사를 도입할 법안은 가까운 시일 내에 시행될 예정입니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-6 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medical_divice_registration_04.jpg" alt="왜 중요한가?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">왜 중요한가?</h3>
                                <p style="text-align: justify">
                                    유라시아에서 생산되는 의료기기뿐만 아니라 해외에서 생산되고 유라시아로 수입되는 모든 의료기기는 연방 보건 감독청에 등록이 되어야 합니다. 의료기기에 대한 사전 평가를 통과하며 등록되어야 유라시아 지역에 수입 및 판매 가능합니다.<br><br>
                                    러시아에 의료기기를 등록시키기 위해서 비록 CE 혹은 FDA등의 승인을 위하여 시험 등이 이루어졌더라도 강제적인 요구 사항에 의하여 유라시아 공인 시험소에서 실시된 별도의 시험 등이 이루어져야 합니다. 러시아는 EU 또는 미국과 인증과 관련한 협약을 매지 않았기 때문에 EU의 CE 인증 또는 미국 FDA승인 등과 같은 국제적으로 인정된 인증서를 인정하지 않습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-7 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medical_divice_registration_02.jpg" alt="IGC인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증원의 역량</h3>
                                <p class="con_txt">
                                    IGC인증기관은 RUS-TEST PACIFIC인증기관과 협력하여 고객과 이해관계자들에게 경쟁력 있는 최고의 가치를 제공하여, 지속적 동반 성장을 통해 세계적인 인증기관으로 거듭나고 있습니다.<br><br>
                                    IGC는 다음을 준수합니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>법적 요구사항 준수</li>
                                    <li><span class="bullet"></span>팀워크 및 조직원간의 연대</li>
                                    <li><span class="bullet"></span>성실성과 공정성</li>
                                    <li><span class="bullet"></span>사회적 및 환경적 책임</li>
                                    <li><span class="bullet"></span>인증 및 등록 서비스 제공 업체로서의 지식과 학습을 통한 지속적인 발전과 개선활동</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-8 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medical_divice_registration_06.jpg" alt="왜 IGC인가?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">왜 IGC인가?</h3>
                                <p class="con_txt">
                                    IGC는 여러 강점을 통해 고객에게 경쟁력 있고 만족스러운 서비스를 제공합니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>다양한 분야의 인증 사업을 통해 확보한 지식과 기술력을 바탕으로 한 경쟁력 있는 서비스 제공</li>
                                    <li><span class="bullet"></span>경쟁력 있는 인증 비용</li>
                                    <li><span class="bullet"></span>신속한 인증 서비스 진행을 통한 최소한의 기간 소요</li>
                                    <li><span class="bullet"></span>자회사를 통한 유라시아 이외 분야의 각종 시스템 및 제품 인증에 대하여 One Stop Service 제공</li>
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

        </article><!----// 컨텐츠 02 의료기기 러시아 등록 컨텐츠 종료 //------->
        
    </div> <!--------// div class="content_wrap"  종료  ------------------>
</div><!-------div class="tab_con" 종료 ------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>