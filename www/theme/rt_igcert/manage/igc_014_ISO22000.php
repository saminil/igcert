<?php
	include_once('./_common.php');
$g5['title'] = '식품 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #1F88E5 }/* 상세페이지 포인트 컬러 */
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
    <!--+++ 20.05.13 탭메뉴/ 시스템인증 > 보건 및 의료기기 시작 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">ISO 22000</a></li>
			<li><a href="javascript:;">FSSC 22000</a></li>
			<li><a href="javascript:;">FDA FSMA</a></li>
			<li><a href="javascript:;">Global HACCP</a></li>
			<li><a href="javascript:;">SQF</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 시스템인증 > 보건 및 의료기기 종료 +++-->

    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
        <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
    
    <!--+++ 20.05.13 탭컨텐츠 영역 시작 +++-->

    <div class="tab_con">  
    <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	<article style="display:block;">
	    <section class="business_type5" class="area">
		    <h1 class="tit_num"><span>ISO</span> 22000 </h1>
		    <h2 class="tit_cer fc_pointer">식품안전 경영시스템 인증</h2>		
		    <div class="outline">
                ISO 22000은 장비의 생산, 재료 포장, 세제, 첨가제 및 원료 등의 관련 기업을 포함하여 전체 식품 체인 비즈니스에 적합한 국제적인 표준입니다. ISO 22000은 ISO 9001 및 HACCP의 주요 내용이 혼합 및 보완된 규격으로, 이로 인해 식품안전경영시스템(FSMS)의 개발, 수행 및 지속적 개선을 위한 효과적인 프레임워크를 제공합니다.<br><br>
                2018년 6월 ISO 22000이 전면 개정됨에 따라, 기존 ISO 22000:2005 인증서는 2021년 6월 1일에 만료됩니다. 기존 ISO 22000:2005 고객은 만료일 이전까지 ISO 22000:2018로의 전환이 완료되어야 하며, 2020년 6월 이후로 모든 신규, 갱신 고객은 ISO 22000:2018로 인증을 받아야 합니다.<br><br>
                ISO 22000:2018의 주요한 변경사항은 다음과 같습니다.
            </div>
            <div class="outline">
                <ul class="list_st">
                    <li><span class="bullet"></span>리더십의 책임에 관한 보다 강력한 강조</li>
                    <li><span class="bullet"></span>식품안전 경영시스템 개발에서의 리스크 기반 접근법을 적용</li>
                    <li>
                        <span class="bullet"></span>다음을 포함한 주요 개념의 명백화
                        <ul class="list_st">
                            <li><span class="number">① </span>계획-실행-확인-조치(Plan-Do-Check-Act) 사이클: 하나는 경영 시스템을 다루고, 하나는 HACCP원칙을 다루는 두 개의 개별 사이클을 가지고 이 표준 내에서 함께 작동</li>
                            <li><span class="number">② </span>중요관리점(CCPs), 운용선행요건프로그램(Operational PRPs), 선행요건 프로그램(PRPs)를 포함한 주요 용어의 차별화</li>
                        </ul>
                    </li>
                    <li><span class="bullet"></span>High Level Structure 구조를 가진 표준의 내용 재배치를 통해 다른 ISO 경영 시스템과의 개선된 범용성</li>
                </ul>
            </div>
            
		    <ul class="content">
                <li><!-- content 1-1 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/iso_22000_01.jpg" alt="ISO 22000 요구사항">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit"><span>ISO</span> 22000:2018 요구사항</h3>
                            <p class="con_txt">
                                ISO 22000:2018은 ISO 9001:2015 등 규격에 적용되는 High Level Structure가 적용되어, 다른 규격과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
                            </p>
                            <ul class="list_st">
                                <li><span class="number">1. </span>적용범위</li>
                                <li><span class="number">2. </span>인용표준</li>
                                <li><span class="number">3. </span>용어와 정의</li>
                                <li><span class="number">4. </span>조직 상황</li>
                                <li><span class="number">5. </span>리더십</li>
                                <li><span class="number">6. </span>기획</li>
                                <li><span class="number">7. </span>지원</li>
                                <li><span class="number">8. </span>운용</li>
                                <li><span class="number">9. </span>성과평가</li>
                                <li><span class="number">10. </span>개선</li>
                            </ul>
                        </dd>
                    </dl>
                </li>
                
                <li><!-- content 1-2 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/iso_22000_02.jpg" alt="ISO 22000 인증의 중요성">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit"><span>ISO</span> 22000의 중요성</h3>
                            <p class="con_txt">
                                ISO 22000은 국제식품규격위원회가 개발한 위해요소중점관리기준(HACCP) 시스템의 원칙과 적용단계를 통합하고 있습니다.<br><br>
                                이 표준은 프로세스 형태 및 사용시설과 관련될 수 있는 위해요소를 포함하여, 식품사슬에서 발생할 것이 예측되는 모든 위해요소를 파악하고 평가하도록 요구하고 있습니다. 따라서 ISO 22000은 파악된 위해요소 중 관리될 필요가 있는 것과 없는 것을 구분하도록 도와주고 문서화를 위한 수단을 제공합니다.<br><br>
                                이 규격은 다음 사항들에 도움을 줍니다.
                            </p>
                            <div class="con_txt">
                                <ul class="list_st">
                                    <li><span class="number">1. </span>구축과정에서 효과적인 식품안전 경영시스템 관리수단의 확립 및 위험 최소화</li>
                                    <li><span class="number">2. </span>고객 신뢰성 확보</li>
                                    <li><span class="number">3. </span>종업원의 책임의식 향상</li>
                                    <li><span class="number">4. </span>비즈니스의 지속가능성 향상</li>
                                </ul>
                            </div>
                            <div class="con_txt">
                                이 규격은 다음을 포함한 식품 체인 내 직접 또는 간접 관여된 모든 조직에 적용 가능합니다.
                            </div>
                            <div class="con_txt">
                                <ul class="list_st">
                                    <li><span class="number">1. </span>농장, 어류 및 낙농장</li>
                                    <li><span class="number">2. </span>고기, 어류 및 사료 생산</li>
                                    <li><span class="number">3. </span>빵, 씨리얼, 음료 및 냉동식품 제조사</li>
                                    <li><span class="number">4. </span>레스토랑, 패스트푸드 체인점, 병원, 호텔 및 출장 연회를 포함한 식품 서비스 제공자</li>
                                    <li><span class="number">5. </span>식품 보관 및 납품, 식품 가공 기계, 첨가제, 원재료, 청소 및 살균 제품 및 포장지 납품업체</li>
                                </ul>
                            </div>
                            <p style="text-align:justify">
                                ※ 결론적으로 일부 또는 모든 ISO 22000 요구사항들은 식품 산업 또는 식품 체인 관련 모든 제품에 적용될 것입니다.
                            </p>
                        </dd>
                    </dl>			
                </li>
			
			    <li><!-- content 1-3 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/iso_22000_03.jpg" alt="ISO 22000 인증의 기대효과">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit"><span>ISO</span> 22000 기대효과</h3>
                            
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">1. </span>고객 만족
                                </span>
                                <p>
                                    품질, 안전 및 적법성을 포함한 고객 요구사항을 지속적으로 충족하는 제품 납품을 통해 달성
                                </p>
                            </div>
                            
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">2. </span>운영 비용 감소
                                </span>
                                <p>
                                    지속적 프로세스 개선 및 운영 효율성으로 인한 비용 감소
                                </p>
                            </div>
                              
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">3. </span>운영 효율성
                                </span>
                                <p>
                                    선행 요건 (PRPs &amp; OPRPs) 및 ISO 9001 계획-실행-검토-조치 철학 통합을 통해, 식품안전경영시스템 효과성 증가
                                </p>
                            </div>
                              
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">4. </span>주주 관계 개선
                                </span>
                                <p>
                                    직원, 고객 및 납품업체 포함
                                </p>
                            </div>
                              
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">5. </span>법규 준수
                                </span>
                                <p>
                                    내부심사 및 경영검토를 통해 법적/규제적 요구사항이 어떻게 귀사, 고객 및 시험 규정 준수에 영향을 끼치는지 이해 
                                </p>
                            </div>
                            
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">6. </span>리스크 관리 개선
                                </span>
                                <p>
                                    제품 일치성 및 추적성 증가를 통해 달성
                                </p>
                            </div>
                            
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">7. </span>검증된 사업 신뢰도
                                </span>
                                <p>
                                    인정된 규격에 대한 독립적 검증을 통해 달성
                                </p>
                            </div>
                            
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">8. </span>사업 확대
                                </span>
                                <p>
                                    특히 고객은 납품 조건으로 인증서를 요구하는 경우 해당
                                </p>
                            </div>
                        </dd>
                    </dl>
			    </li>

			    <li><!-- content 1-4 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/ISO_9001_03.jpg">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">IGC 인증원의 역량</h3>
                            <p class="con_txt">
                                IGC는 미국의 인정기구인 IAS로부터 ISO 22000에 대한 인정을 받아 경영시스템에 대한 인증 서비스를 제공하고 있습니다. IGC는 글로벌 경쟁력을 기반으로 ISO 22000 인증 외에 식품분야에 대하여 다양한 서비스를 제공하고 있습니다.
                            </p>
                            <ul class="list_st">
                                <li><span class="number">1. </span>FSSC 22000 인증</li>
                                <li><span class="number">2. </span>ISO 22000 심사원 교육</li>
                                <li><span class="number">3. </span>Vegan 인증</li>
                                <li><span class="number">4. </span>식품 시험 (ISO 17025인정)</li>
                                <li><span class="number">5. </span>FDA FSMA 3자 인증기관</li>
                                <li><span class="number">6. </span>PCQI Lead Instructor 보유 (2명)</li>
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
                        <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                        <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                        <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                        <li><p><em><strong>04</strong></em><span>보건&의료기기 인증</span></p></li>
                        <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                        <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                        <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                        <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                        <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                        <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                        <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                        <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                        <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

    </article>
    
    <!--+++++ 컨텐츠 02 시스템인증 > 식품 인증 > FSSC 22000 시작 +++++-->
    <article>
        <section class="business_type5" class="area">
            <h1 class="tit_num"><span>FSSC</span> 22000</h1>
            <h2 class="tit_cer fc_pointer">식품안전 시스템 인증</h2>		
            <p class="outline">
                FSSC 22000 (Food Safety System Certification) 표준은 식품제조회사들에게 가장 영향력 있는 국제식품안전기구 (GFSI: Global Food Safety Initiative)가 식품산업 전반에 적합한 식품안전인증제도를 도입하기 위하여 승인한 식품 안전 표준입니다.<br><br>
                세계 인구가 증가함에 따라 저렴하고 안전하며 양질의 식품에 대한 수요가 증가하고 있습니다. 이러한 요구를 충족시키기 위해 FSSC 22000은 신뢰할 수 있는 식품 안전 플랫폼을 식품 업계에 제공합니다. FSSC 22000은 ISO 22000을 기반으로 식품 및 그 성분의 공급자에 대한 분야별 선행요건 프로그램(PRPs)과 추가적인 FSSC 22000 요구사항을 조합한 것으로, 조직의 규모, 복잡성, 위치에 관계없이 모든 식품 제조기업에 적용됩니다. 또한, 수송 및 생산현장에서의 보관도 인증 범위에 포함됩니다.
            </p>
            
            <div class="tit_img">
                <img src="./image/FSSC22000_01.jpg" alt="FSSC 22000 식품안전 시스템 인증" style="width: 100%">
            </div>
            
            <p class="outline">
                IGC는 IAS로부터 인정받은 FSSC 22000 인증 기관으로써, 국내 인증원 중 가장 많은 FSSC 22000 인증 scope와 고객 수를 보유하고 있습니다. 따라서, FSSC 22000 인증을 받은 식품 제조 업체는 GFSI 승인 규격의 국제적 수요 증가에 따라 바이어들로부터 많은 신뢰를 받을 수 있고, 특히 IGC에서 받은 FSSC 22000 인증서를 통해 신뢰성 있는 인증원으로부터 인증서를 획득하였다는 점을 증명함으로써 업체의 이미지 제고 및 경쟁력 강화에 도움이 될 수 있습니다.
            </p>
            
            <ul class="content">
                <li><!-- content 2-1 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/FSSC22000_05.jpg" alt="FSSC 22000 요구사항">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit"><span>FSSC</span> 22000 요구사항</h3>
                            <p class="con_txt">
                                FSSC 22000 요구사항은 다음과 같은 항목으로 구성되어 있습니다.
                            </p>
                            
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    &#10020; ISO 22000:2018
                                </span>
                            </div>
                            
                            <div class="con_txt_2">
                                <ul class="list_st">
                                    <span class="point_blk">
                                        &#10020; PRP (선행요건 프로그램)
                                    </span>
                                    <li><span class="bullet"></span>ISO 22002-1 (식품 제조)</li>
                                    <li><span class="bullet"></span>ISO 22002-4 (식품 포장재 제조)</li>
                                    <li><span class="bullet"></span>PAS 221 (식품 도매 및 소매)</li>
                                </ul>
                            </div>
                            
                            <div class="con_txt_2">
                                <ul class="list_st">
                                    <span class="point_blk">
                                        &#10020; FSSC 22000 추가 요구사항
                                    </span>
                                    <li><span class="bullet"></span>서비스의 관리</li>
                                    <li><span class="bullet"></span>제품 라벨링</li>
                                    <li><span class="bullet"></span>식품 방어</li>
                                    <li><span class="bullet"></span>식품 사기 완화</li>
                                    <li><span class="bullet"></span>로고 사용</li>
                                    <li><span class="bullet"></span>알레르기 유발물질의 관리</li>
                                    <li><span class="bullet"></span>환경 모니터링 (카테고리 C, I에 해당)</li>
                                    <li><span class="bullet"></span>운송 및 배송 (카테고리 FI에 해당)</li>
                                </ul>
                            </div>
                            
                            <div class="con_txt_2">
                                FSSC 요구사항은 FSSC 22000 웹사이트에 공개되어 있으며, 하기 url을 통해 확인하실 수 있습니다.<br><br>
                                <p>
                                    <a href="https://www.fssc22000.com/wp-content/uploads/19.0528-FSSC-22000-Scheme-Version-5.pdf" target="_blank">< "FSSC 22000 요구사항(PDF파일)" 확인 바로가기 &#9756;Click! ></FSSC></a>
                                </p><br>
                                PDF 파일 url : <br>https://www.fssc22000.com/wp-content/uploads/19.0528-FSSC-22000-Scheme-Version-5.pdf
                            </div>
                        </dd>
                    </dl>
                </li>

                <li><!-- content 2-2 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/FSSC22000_02.jpg" alt="FSSC 22000 인증의 필요성 및 장점">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit"><span>FSSC</span> 22000의 중요성</h3>
                            
                            <div class="con_txt_2">
                                <ul class="list_st">
                                     <span class="point_blk">&#10020; 인증의 필요성</span>
                                    <li>
                                        <span class="number">1. </span>소비자의 식품에 대한 안정성 의식 증대 및 안전에 대한 정확한 관리 요구 증대
                                    </li>
                                    <li>
                                        <span class="number">2. </span>국내/외 바이어들이 식품 안전을 보증할 수 인증 요구에 따라 ISO 22000 등을 포괄할 수 있는 인증의 필요성 증대
                                    </li>
                                    <li>
                                        <span class="number">3. </span>식품안전에 따른 국제 상거래에 있어서의 무역장벽요소 대두
                                    </li>
                                    <li>
                                        <span class="number">4. </span>식품안전사고의 사전예방 및 비상사태에 대한 대응
                                    </li>
                                    <li>
                                        <span class="number">5. </span>식품관련 공급자, 내부 및 협력업체 등 관련자와의 효과적인 의사소통
                                    </li>
                                    <li>
                                        <span class="number">6. </span>식품안전 관리수준 향상 및 사전예방
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="con_txt_2">
                                <ul class="list_st">
                                     <span class="point_blk">&#10020; 인증의 장점</span>
                                    <li>
                                        <span class="number">1. </span>위생관리 시스템 효율성 극대화
                                    </li>
                                    <li>
                                        <span class="number">2. </span>국내/외 식품안전 규정 및 법규 강화에 따른 대응 용이
                                    </li>
                                    <li>
                                        <span class="number">3. </span>식품 관련 법률 준수
                                    </li>
                                    <li>
                                        <span class="number">4. </span>공급체인과의 의사소통 원활
                                    </li>
                                    <li>
                                        <span class="number">5. </span>식품 업계 종사자의 책임의식 상향화
                                    </li>
                                    <li>
                                        <span class="number">6. </span>식품과 관련한 다양한 프로그램을 통합적으로 운영 (HACCP, PRPs, Food Defense &amp; Fraud)
                                    </li>
                                    <li>
                                        <span class="number">7. </span>FSSC 22000 인증 유지에 따른 회사 이미지 제고, 신뢰성 향상 및 수출증대 효과
                                    </li>
                                </ul>
                            </div>
                        </dd>
                    </dl>			
                </li>

                <li><!-- content 2-3 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/FSSC22000_03.jpg" alt="FSSC 22000 IGC인증원의 역량">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">IGC 인증원의 역량</h3>
                            <p class="con_txt">
                                IGC는 미국의 인정기구인 IAS로부터 FSSC 22000에 대한 인정을 받아 경영시스템에 대한 인증 서비스를 제공하고 있습니다. IGC는 글로벌 경쟁력을 기반으로 FSSC 22000 인증 외에 식품분야에 대하여 다양한 서비스를 제공하고 있습니다.
                            </p>
                            <ul class="list_st">
                                <li>
                                    <span class="number">1. </span>FSSC 22000 Training Organization (FSSC 22000 Foundation 공식 지정 교육기관)
                                </li>
                                <li>
                                    <span class="number">2. </span>ISO 22000 인증
                                </li>
                                <li>
                                    <span class="number">3. </span>Vegan 인증
                                </li>
                                <li>
                                    <span class="number">4. </span>식품 시험 (ISO 17025인정)
                                </li>
                                <li>
                                    <span class="number">5. </span>FDA FSMA 3자 인증기관
                                </li>
                                <li>
                                    <span class="number">6. </span>PCQI Lead Instructor 보유 (2명)
                                </li>
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
                    <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                    <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                    <li><p><em><strong>04</strong></em><span>보건&의료기기 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                    <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                    <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                    <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                    <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                    <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                    <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                    <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                </ul>
            </div>
        </section>
        <!---------(주)아이지씨인증원 사업영역 종료 ------>
    </article>
    <!--+++++ 컨텐츠 02 시스템인증 > 식품 인증 > FSSC 22000 종료 +++++-->
    

    <!--+++++ 컨텐츠 03 시스템인증 > 식품 인증 > FDA FSMA 시작 +++++-->
    <article>
        <section class="business_type5" class="area">
            <h1 class="tit_num"><span>FDA </span> FSMA </h1>
            <h2 class="tit_cer fc_pointer">식품안전 경영시스템 인증</h2>		
            <p class="outline">
                <span style="font-size:1.4rem;color:#1f2558">FSMA (식품안전현대화법, Food Safety Modernization Act)</span><br><br>
                2011년 01월 04일, 미국정부는 사전예방을 통한 식품공급 안전성 및 국민건강 보호를 목적으로 식품안전현대화법 (Food Safety Modernization Act, FSMA)을 제정하였습니다. 이에 따라 FDA는 FSMA 제정으로 식품안전문제를 예방하는데 초점을 맞출 수 있게 되었습니다. FSMA의 적용대상은 식품이나 사료를 제조, 가공, 포장 또는 보관하는 시설입니다. 또한 생산농가, US 수입업체, 화주업체, 수취업체, 선적업체, 운송업체 등 미국으로 식품을 보내는 업체도 FSMA를 준수해야 합니다. 따라서 업체들은 FSMA에 따라 위해요소 분석에 기반한 예방관리가 포함된 식품안전시스템을 구축하고, 문서화된 식품안전계획서를 작성하는 등의 각종 준비가 필요합니다.
            </p>
                        
            <div class="tit_img">
                <img src="./image/FDA_FSMA_01.jpg" alt="세계식품 안전 기구 로고" style="width: 100%">
            </div>
            
            <p class="outline">
                <span style="font-size:1.4rem;color:#1f2558">FSMA 제 3자 인증</span><br><br>
                IGC는 미국 FDA와 IAS로부터 전 세계 7번째, 국내에서는 최초로 FDA FSMA 제 3자 인증기관으로 인정받았습니다.
            </p>
            
            <div style="width: 100%">
                <img src="./image/FDA_FSMA_02.jpg" alt="FDA FSMA 제3자인증기관 인증서 샘플1" style="float:left;width:45%;margin:0 2.5%;" > 
				<img src="./image/FDA_FSMA_03.jpg" alt="FDA FSMA 제3자인증기관 인증서 샘플2" style="float:left;width:45%;margin:0 2.5%;">
            </div>
            
            <div class="outline">
                <span class="point_blk">
                    <a href="https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification" target="_blank">인증 정보 확인 Click</a>
                </span>
                <a href="https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification" target="_blank">https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification</a><br><br>
                <p>
                    FSMA에는 ‘공인된 제 3자 인증 프로그램 (Accredited Third-Party Certification Program)’이라는 규정이 있습니다. 본 프로그램은 미국 외 지역에서 생산되어 미국으로 수입되는 식품들의 생산시설들이 FSMA에서 요구하는 규정을 잘 준수하고 있는지 공인된 제 3의 기관이 심사를 하여 요구사항을 충족하는 경우 인증서를 발행하는 프로그램입니다. 이렇게 발행된 인증서는 자발적 적격 수입업자 프로그램 (Voluntary Qualified Importer Program, VQIP)의 참여 자격을 얻는데 사용하거나 미국 소비자들에게 위해가 될 수 있는 식품의 반입을 예방하기 위해 FDA가 인증서를 요구할 경우 사용됩니다.
                </p>
            </div>
            
            <div>
                <div style="margin: 0 auto 30px">
                    <p class="point_blk">
                        <span class="number">1. </span>VQIP (Voluntary Qualified Importer Program)
                    </p>
                    <p style="padding-left:20px">
                        FDA가 식품 수입 업체들에게 통관 혜택을 주어 해당 식품을 미국에 신속하게 들여올 수 있도록 하는 프로그램
                    </p>
                </div>
                <div style="margin: 0 auto 30px">
                    <p class="point_blk">
                        <span class="number">2. </span>인증절차
                    </p>
                    <p style="padding-left:20px">
                        인증 신청 &#8658; 계약 체결 &#8658; 심사비 납부 &#8658; 서류 제출 &#8658; 1단계 심사 &#8658; 인증심의 (1단계) &#8658; 2단계 심사 &#8658; 인증 심의 (2단계) &#8658; 인증서 발행 &#8658; 사후심사 &#8658; 재인증 심사
                    </p>
                </div>
                <div style="margin: 0 auto 30px">
                    <p class="point_blk">
                        <span class="number">3. </span>제3자 인증 프로세스
                    </p>
                    <div class="tit_img">
                        <img src="./image/FDA_FSMA_04.jpg" alt="FDA FSMA 제3자인증기관 인증서 샘플2">
                        <span style="display:block;text-align:center;">미국 식품안전현대화법 대응 가이드북</span>
                    </div>
                </div>
                <div style="margin: 0 auto 30px">
                    <p class="point_blk">
                        <span class="number">4. </span>공인된 제3자 인증의 면제 대상 ★
                    </p>
                    <p style="padding-left:20px">
                        <span style="display:block">- 특정 상황에서 외국 시설에서 제조한 알코올 음료</span>
                        <span style="display:block">- 수입시점에서 USDA가 감독하는 특정 육류, 가금류 및 계란제품</span>
                    </p>
                </div>
            </div>

            <ul class="content">
                <li><!-- content 3-1 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/FDA_FSMA_05.jpg" alt="FDA FSMA 제3자 인증 준비사항">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit"><span>FSMA</span> 제3자 인증 준비사항</h3>
                            <p class="con_txt">
                                식품시설은 위해요소 분석과 위해를 기반으로 한 예방관리를 포함하는 식품안전시스템을 구축하고 실행해야 합니다. 또한 식품안전계획서를 반드시 서면으로 작성하고 식품안전계획서는 자격을 갖춘 식품예방관리전문가 (PCQI, Preventive Control Qualified Individual)에 의해 검토되어야 합니다.<br><br>
                                식품안전시스템에는 다음의 내용을 포함하는 식품안전계획을 설정하여야 합니다.
                            </p>
                            <div class="con_txt">
                                <ul class="list_st">
                                    <li><span class="number">1. </span>위해요소 분석</li>
                                    <li><span class="number">2. </span>예방관리 (공정, 식품 알레르기 유발물질, 위생, 공급망 및 기타, 회수계획)</li>
                                    <li><span class="number">3. </span>예방관리의 감시 및 운영</li>
                                    <li><span class="number">4. </span>시정조치 및 시정</li>
                                    <li><span class="number">5. </span>검증</li>
                                </ul>
                            </div>
                            <p>
                                식품안전계획에는 회수계획을 세워 식품안전에 문제가 되는 제품에 대해서는 회수조치 가능하도록 작성해야 합니다. 이에 대응해 IGC는 미국시장에 수출하고 있거나 수출을 계획 중인 식품업체들을 위한 식품예방관리전문가 (PCQI) 교육과정 또한 마련하고 있습니다.
                            </p>
                        </dd>
                    </dl>
                </li>

                <li><!-- content 3-2 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/FDA_FSMA_06.jpg" alt="FDA FSMA 제3자 인증 준비사항">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit"><span>FSMA</span> 제3자 인증의 중요성</h3>
                            <p style="text-align:justify">
                                FSMA는 식품 안전의 중점을 예방에 둠으로써, 미국 및 미국 이외 국가의 식품 제조업자, 시설 및 수입업체에 새로운 사항들을 요구합니다. 따라서 미국 시장에 제품을 판매하고 유통하려면 새로운 요구사항을 준수해야 합니다. 이와 같이 FSMA에 대응해 미국시장에 식품 수출을 원활히 추진하기 위해서는 미국으로 식품을 수출하는 기업들의 세심한 준비가 필요합니다.
                            </p>
                        </dd>
                    </dl>			
                </li>

                <li><!-- content 3-3 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/ISO_9001_03.jpg">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">IGC 인증원의 역량</h3>
                            <p style="text-align:justify">
                                IGC는 미국 FDA와 IAS로부터 전 세계 7번째, 국내에서는 최초로 FDA FSMA 3자 인증기관으로 인정받았습니다.<br><br>
                                IGC는 식품 시험소 운영 및 다양한 식품 관련 인증을 진행하고 있기에 식품안전 규정에 관한 광범위한 지식을 보유하고 있습니다.<br><br>
                                IGC는 고객들을 위해 빠르고 정확한 서비스를 제공하며, 고객이 올바른 선택을 하고 FSMA 준수 서비스를 통해 실사를 입증하도록 도와드립니다. <br><br>
                                IGC는 FDA FSMA 3자 인증의 선두기관으로서 빠르고 정확한 인증서비스를 제공합니다.
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
                    <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                    <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                    <li><p><em><strong>04</strong></em><span>보건&의료기기 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                    <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                    <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                    <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                    <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                    <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                    <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                    <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                </ul>
            </div>
        </section>
        <!---------(주)아이지씨인증원 사업영역 종료 ------>
           
    </article>
    <!--+++++ 컨텐츠 03 시스템인증 > 식품 인증 > FDA FSMA 종료 +++++-->
    

    <!--+++++ 컨텐츠 04 시스템인증 > 식품 인증 > Global HACCP 시작 +++++-->
    <article>
        <section class="business_type5" class="area">
		    <h1 class="tit_num"><span>Global HACCP</span></h1>
		    <h2 class="tit_cer fc_pointer">식품 안전에 대한 국제 권장 사항</h2>		
		    <p class="outline">
                국제식품규격위원회 (CODEX)에서는 HACCP 적용을 위한 지침을 제시하여 전 세계적으로 이 지침에 의거하여 HACCP을 적용하고 있습니다.<br>
                HACCP 은 원료 생산, 조달 및 취급에서 완제품 제조 및 유통, 소비에 이르기까지 생물학적, 화학적, 물리적 위험에 대한 분석 및 제어를 통해 식품안전을 다루는 관리 시스템입니다.<br>
                HACCP 기반 시스템은 1 차 생산을 제외하고는 모든 국가에서 미국과 EU를 포함한 여러 국가에서 법적 요구사항입니다.<br>
                HACCP 준수를 통해 식품안전에 대한 진정한 의지를 증명하는 것은 브랜드를 변화시키고 효과적인 시장 진출 도구로서의 역할을 수행하여 전세계의 새로운 비즈니스 기회를 열어줍니다.
            </p>
            
            <ul class="content">
                <li><!-- content 4-1 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/Global HACCP_01.jpg" alt="Global HACCP7원칙">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit"><span>Global HACCP 7원칙</span></h3>
                            <p class="con_txt">
                                국제식품규격위원회 (CODEX)에서는 HACCP 적용을 위한 7원칙 지침을 제시하였다.
                            </p>
                            <ul class="list_st">
                                <li><span class="number">1. </span>위해요소분석 실시</li>
                                <li><span class="number">2. </span>중요관리점 결정</li>
                                <li><span class="number">3. </span>한계기준 결정</li>
                                <li><span class="number">4. </span>중요관리점에 대한 모니터링 방법 설정</li>
                                <li><span class="number">5. </span>모니터링 결과 중요관리점 관리 상태 위반시 개선조치 설정</li>
                                <li><span class="number">6. </span>HACCP가 효과적으로 시행되는지 검증</li>
                                <li><span class="number">7. </span>HACCP원칙 및 적용에 대한 문서화 및 기록 방법 설정</li>
                            </ul>
                        </dd>
                    </dl>
                </li>

                <li><!-- content 4-2 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/Global HACCP_02.jpg" alt="HACCP의 중요성">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit"><span>HACCP의 중요성</span></h3>
                            <p class="con_txt">
                                국제식품규격위원회 (CODEX)가 개발한 위해요소중점관리기준(HACCP) 시스템의 원칙은 ISO 22000, FSSC 22000, FSMA 등 많은 인증 스킴의 기반이 되고 있습니다. 이 지침은 프로세스 형태 및 사용시설과 관련될 수 있는 위해요소를 포함하여, 식품사슬에서 발생할 것이 예측되는 모든 위해요소를 파악하고 평가하도록 요구하고 있습니다.<br><br>
                                Global HACCP를 통하여 조직은 다음과 같은 효과를 기대할 수 있습니다.
                            </p>
                            <ul class="list_st">
                                <li><span class="number">1. </span>구축과정에서의 효과적인 식품안전 경영 시스템 관리수단의 확립 및 위험 최소화</li>
                                <li><span class="number">2. </span>고객 신뢰성 확보</li>
                                <li><span class="number">3. </span>종업원의 책임의식 향상</li>
                                <li><span class="number">4. </span>비즈니스의 지속 가능성 향상</li>
                            </ul>
                        </dd>
                    </dl>			
                </li>

                <li><!-- content 4-3 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/Global HACCP_03.jpg" alt="IGC의 역량">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">IGC 인증원의 역량</h3>
                            <p style="text-align:justify">
                                IGC는 풍부한 경험과 전문지식을 보유한 다수의 숙달된 심사원을 보유하고 있습니다.<br><br>
                                IGC는 ISO 22000, FSSC 22000 및 EAC인증과 FSVP, PCQI 전문가 양성 과정을 통한 추가지원으로 귀사의 성장을 위해 필요한 과정을 빠르고 정확하게 지원합니다.
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
                    <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                    <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                    <li><p><em><strong>04</strong></em><span>보건&의료기기 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                    <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                    <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                    <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                    <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                    <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                    <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                    <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                </ul>
            </div>
        </section>
        <!---------(주)아이지씨인증원 사업영역 종료 ------>

    </article>
    <!--+++++ 컨텐츠 04 시스템인증 > 식품 인증 > Global HACCP 종료 +++++-->
    
    
    <!--+++++ 컨텐츠 05 시스템인증 > 식품 인증 > SQF 시작 +++++-->
    <article>
        <section class="business_type5" class="area">
		    <h1 class="tit_num"><span>SQF</span></h1>
		    <h2 class="tit_cer fc_pointer">안전 품질 식품 인증</h2>		
		    <p class="outline">
                SQF (Safe Quality Food) 인증은 1995 년 호주에서 처음 개발되었으며, 전 세계의 소매업체, 브랜드 소유자 및 식품 서비스 제공업체가 인정하는 엄격하고 신뢰할 수 있는 식품 안전 및 품질 프로그램입니다. 2003 년부터 미국의 FMI 가 소유하여 관리하고 있으며, FMI 산하 부서인 SQFI 에서 인증 규격 개발, 심사원 교육 등의 업무를 수행하고 있습니다.<br><br>
                GFSI (Global Food Safety Institute)에서 인정한 SQF 인증은 농장에서 소매점에 이르기까지 식품 공급망의 모든 부분에 대한 산업, 고객 및 규제 요구사항을 충족하도록 설계되었습니다. SQF 인증은 농장, 창고 또는 시설에서 포괄적인 식품 안전 관리 시스템을 설정하는 프로세스를 수립한 후 매년 심사를 통해 프로세스를 평가합니다.
            </p>
            
            <ul class="content">
                <li><!-- content 5-1 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/sqf_01.png" alt="SQF 인증의 분류">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">SQF 인증의 분류</h3>
                            <p class="con_txt">
                                SQF 인증은 여러 가지 프로그램으로 구분되어 있으며, 각 기업에 적합한 프로그램을 선택할 수 있습니다. 일반적인 식품 공급 업체에서 구현할 수 있는 프로그램은 다음과 같습니다.
                            </p>
                            
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">&#10020; </span>SQF Fundamentals Program
                                </span>
                                <p>
                                    중소 식품 공급 업체 및 1차 생산자를 위한 프로그램입니다. 단계별 접근 방식으로 구성되어 있으며, 강력한 식품 안전 표준을 기존 관행에 통합하는 동시에 전 세계적으로 인정되는 GFSI 인증을 획득할 수 있는 기반을 마련할 수 있습니다.
                                </p>
                            </div>
                            
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">&#10020; </span>SQF Food Safety Program
                                </span>
                                <p>
                                    전 세계적으로 인정되는 GFSI 벤치마킹 식품 안전 표준입니다. 조직에 HACCP 기반 접근 방식을 제공하여 해당 제품이 거의 모든 규정을 충족하도록 합니다.
                                </p>
                            </div>
                            
                            <div class="con_txt_2">
                                <span class="point_blk">
                                    <span class="number">&#10020; </span>SQF Quality Program
                                </span>
                                <p>
                                    식품 안전 그 이상을 원하는 조직을 위한 프로그램입니다. 이 프로그램은 식품 품질 관련 위협을 모니터링하고 통제하도록 설계되었으며, 이미 성공적이고 강력한 SQF 식품 안전 계획을 구현한 조직에 가장 적합합니다. 또한 SQF Food Safety Program과 함께 시행할 수 있습니다.
                                </p>
                            </div>
                            
                        </dd>
                    </dl>
                </li>

                <li><!-- content 5-2 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/sqf_02.jpg" alt="SQF 요구사항">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">SQF 요구사항</h3>
                            <p class="con_txt">
                                SQF 인증의 요구사항은 시스템 부분에서의 요구사항과 각 분야 별 GMP 요구사항으로 구성되어 있습니다. 대표적인 SQF Food Safety Program의 요구사항은 아래와 같습니다. (Edition 9 기준)
                            </p>
                            <p style="text-align: justify;padding: 50px 0 0">
                                <span class="point_blk">
                                    Part B: System Elements
                                </span>
                                <span class="number">2.1 </span>Management Commitment (경영 의지)<br><br>
                                <span class="number">2.2 </span>Document Control and Records (문서 관리 및 기록)<br><br>
                                <span class="number">2.3 </span>Specifications, Formulations, Realization, and Supplier Approval (사양, 제형, 실현 및 공급업체 승인)<br><br>
                                <span class="number">2.4 </span>Food Safety System (식품 안전 시스템)<br><br>
                                <span class="number">2.5 </span>SQF System Verification (SQF 시스템 검증)<br><br>
                                <span class="number">2.6 </span>Product Traceability and Crisis Management (제품 추적성 및 위험 관리)<br><br>
                                <span class="number">2.7 </span>Food Defense and Food Fraud (식품 방어 및 사기)<br><br>
                                <span class="number">2.8 </span>Allergen Management (알레르기 유발물질 관리)<br><br>
                                <span class="number">2.9 </span>Training (교육훈련)
                            </p>
                            
                            <p style="text-align: justify;padding: 50px 0 0">
                                <span class="point_blk">
                                    Module 11: Good Manufacturing Practices for Processing of Food Products
                                </span>
                                <span class="number">11.1 </span>Site Location and Premises (현장 위치 및 사업장)<br><br>
                                <span class="number">11.2 </span>Site Operation (현장 운영)<br><br>
                                <span class="number">11.3 </span>Personnel Hygiene and Welfare (개인 위생 및 복지)<br><br>
                                <span class="number">11.4 </span>Personnel Processing Practices (직원 처리 관행)<br><br>
                                <span class="number">11.5 </span>Water, Ice and Air Supply (물, 얼음 및 공기 공급)<br><br>
                                <span class="number">11.6 </span>Receipt, Storage, and Transport (수령, 보관 및 운송)<br><br>
                                <span class="number">11.7 </span>Separation of Functions (기능의 분리)<br><br>
                                <span class="number">11.8 </span>Waste Disposal (폐기물 처리)
                            </p>
                        </dd>
                    </dl>			
                </li>
                
                <li><!-- content 5-3 -->
                    <dl>
                        <dt></dt>
                        <dd class="txt_area" style="width:90%;margin:0 auto">
                            <h3 class="con_tit" style="text-align:center">SQF 진행 절차</h3>
                            <div style="width:100%;margin: 0 auto 50px">
                                <div style="text-align:center">
                                    <img src="./image/sqf_06.jpg" alt="SQF 진행 절차" style="max-width:600px">
                                </div>
                            </div>
                            <p class="con_txt">
                                SQF 인증을 취득하기 위한 절차는 아래와 같습니다.
                            </p>
                            <div class="con_txt">
                                <ul class="list_st">
                                    <li><span class="number">1. </span>SQFI 평가 데이터베이스 등록</li>
                                    <li><span class="number">2. </span>SQF 담당자 지정</li>
                                    <li><span class="number">3. </span>인증 범위 결정</li>
                                    <li><span class="number">4. </span>SQF 시스템 문서화</li>
                                    <li><span class="number">5. </span>SQF 시스템 시행</li>
                                    <li><span class="number">6. </span>평가 전 심사 (선택사항)</li>
                                    <li><span class="number">7. </span>인증 기관 선택</li>
                                    <li><span class="number">8. </span>최초 인증 심사</li>
                                    <li><span class="number">9. </span>심사 보고 및 종료</li>
                                    <li><span class="number">10. </span>인증 발행</li>
                                </ul>
                            </div>
                            <p class="con_txt">
                                SQF 인증은 심사 시 발견되는 부적합 사항을 바탕으로 점수로 등급을 매겨 인증 획득 여부를 결정합니다.
                            </p>
                            <div class="con_txt">
                                <table class="type02">
                                    <thead>
                                        <tr>
                                            <th scope="cols">
                                                <p>점수</p>
                                            </th>
                                            <th scope="cols">
                                                <p>등급</p>
                                            </th>
                                            <th scope="cols">
                                                <p>인증</p>
                                            </th>
                                            <th scope="cols">
                                                <p>심사 주기</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <p>96 – 100</p>
                                            </th>
                                            <td>
                                                <p>E – Excellent</p>
                                            </td>
                                            <td>
                                                <p>인증서 발행</p>
                                            </td>
                                            <td class="none">
                                                <p>12개월 후 갱신심사</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>86 – 95</p>
                                            </th>
                                            <td>
                                                <p>G – Good</p>
                                            </td>
                                            <td>
                                                <p>인증서 발행</p>
                                            </td>
                                            <td class="none">
                                                <p>12개월 후 갱신심사</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>70 – 85</p>
                                            </th>
                                            <td>
                                                <p>C – Complies</p>
                                            </td>
                                            <td>
                                                <p>인증서 발행</p>
                                            </td>
                                            <td class="none">
                                                <p>6개월 후 사후심사</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>0 – 69</p>
                                            </th>
                                            <td>
                                                <p>F – Fails to comply</p>
                                            </td>
                                            <td>
                                                <p>인증서 미발행</p>
                                            </td>
                                            <td class="none">
                                                <p>SQF 심사에 실패한 것으로 간주</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p style="text-align:justify">
                                최초 인증심사에서 “C – complies” 이상의 심사 등급을 받았을 경우 인증 획득이 가능합니다.<br><br>
                                최초 인증 심사 또는 갱신 심사에서 “C – complies” 등급을 받은 경우 6개월 후 사후심사를 진행합니다. 사후 심사에서 새로운 점수와 등급이 부여되지만, 갱신심사 일정은 영향을 받지 않습니다.<br><br>
                                갱신 심사는 최초 인증 심사의 12개월 후 실시하며, 최초 인증 심사와 동일한 방식으로 점수를 산정합니다. 최초 인증 심사와 마찬가지로 “C – complies” 이상의 심사 등급을 받아야 인증 갱신이 가능합니다.
                            </p>
                        </dd>
                    </dl>
                </li>

                <li><!-- content 5-4 -->
                    <dl>
                        <dt class="img_area">
                            <img src="./image/sqf_05.jpg" alt="IGC의 역량">
                        </dt>
                        <dd class="txt_area">
                            <h3 class="con_tit">IGC 인증원의 역량</h3>
                            <p class="con_txt">
                                IGC는 SQF 운영 기관인 SQFI로부터 SQF 인증 기관에 대한 라이센스를 받아 서비스를 제공하고 있습니다. 또한, SQF에서 요구하는 심사원 자격사항을 충족한 심사원을 보유하여 자체적으로 인증 서비스 진행이 가능합니다.<br><br>
                                IGC는 SQF 인증 외에 식품 분야에 대하여 다양한 서비스를 제공하고 있습니다.
                            </p>
                            <ul class="list_st">
                                <li><span class="number">1. </span>ISO 22000, FSSC 22000 인증</li>
                                <li><span class="number">2. </span>FSSC 22000 Training Organization (FSSC 22000 Foundation 공식 지정 교육기관)</li>
                                <li><span class="number">3. </span>Vegan 인증</li>
                                <li><span class="number">4. </span>HAHAL 인증</li>
                                <li><span class="number">5. </span>코셔 인증</li>
                                <li><span class="number">6. </span>식품 시험 (ISO 17025인정)</li>
                                <li><span class="number">7. </span>FDA FSMA 3자 인증기관</li>
                                <li><span class="number">8. </span>PCQI 양성과정 진행 가능</li>
                                <li><span class="number">9. </span>PCQI Lead Instructor 보유 (2명)</li>
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
                    <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                    <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                    <li><p><em><strong>04</strong></em><span>보건&의료기기 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                    <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                    <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                    <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                    <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                    <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                    <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                    <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                </ul>
            </div>
        </section>
        <!---------(주)아이지씨인증원 사업영역 종료 ------>

    </article>
    <!--+++++ 컨텐츠 05 시스템인증 > 식품 인증 > SQF 종료 +++++-->
    
    </div> <!------------+++++++/ <div class="tab_con"> 종료  /+++++++++++--------------->
</div><!--------++++++++/ <div class="content_wrap">  /++++++++---------------->



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>