<?php
	include_once('./_common.php');
$g5['title'] = '정보보안 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	<!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">ISO/IEC 27001</a></li>
			<li><a href="javascript:;">ISO/IEC 27701</a></li>
			<li><a href="javascript:;">ISO/IEC 20000-1</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
        <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.07 탭컨텐츠 영역 +++-->
	
	<div class="tab_con">
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block;">
	        <section class="business_type5" class="area">
                <h1 class="tit_num"><span>ISO/IEC</span> 27001</h1>
                <h2 class="tit_cer fc_pointer">개인 정보 보안 경영시스템 인증</h2>		
                <p class="outline">
                    ISO/IEC 27001은 국제표준화기구 (ISO: International Organization for Standardization) 및 국제 전기기술 위원회 (IEC: International Electrotechnical Commission)에서 제정한 정보보호 관리체계에 대한 국제 표준이자 정보보호 분야에서 가장 권위 있는 국제 인증표준으로, 정보보호 정책, 물리적 보안, 정보 접근 통제 등 정보 보안 관련 11개 영역, 133개 항목을 다루고 있습니다.
                </p>

                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_IEC 27001_02.jpg" alt="ISO/IEC 27001 구조">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit"><span>ISO/IEC</span> 27001:2013 요구 사항</h3>
                                <p class="con_txt">
                                    ISO/IEC 27001은 조직 환경, 리더십, 계획, 지원, 운영, 성과 평가, 개선의 10가지 항목과 14가지의 통제항목 (통제 항목은 ISO/IEC 27002를 참조)으로 구성되어 있습니다. 이 표준의 요구사항은 조직의 유형, 규모, 특성에 상관없이 모든 조직에 적용할 수 있도록 일반적인 내용으로 수립되었습니다.
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
			
                    <li><!-- content 02 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_IEC 27001_01.jpg" alt="ISO/IEC 27001 인증효과">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit"><span>ISO/IEC</span> 27001의 중요성</h3>
                                <p class="con_txt">
                                    ISO/IEC 27001 인증 취득을 통해 조직은 다음과 같은 혜택을 얻을 수 있습니다.
                                </p>
                                 
                                 <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>고객 만족
                                    </span>
                                    <p>
                                        고객 정보를 안전하게 보호함으로써 고객만족 도모
                                    </p>
                                </div>
                                 
                                 <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>비즈니스 연속성
                                    </span>
                                    <p>
                                        리스크 관리, 법규 준수 및 미래 보안 이슈 및 우려사항에 대한 경계를 통해 사업의 안정성 확보
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>법규 준수
                                    </span>
                                    <p>
                                        법적/규제적 요구 사항이 어떻게 귀사 및 고객에 영향을 끼치며, 법적 제재에 따른 리스크를 감소시키는 방법 이해
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">4. </span>리스크 관리 증대
                                    </span>
                                    <p>
                                        고객 기록, 회계 정보 및 지적재산권이 체계적인 프레임워크를 통해 손실, 절도 및 손상으로부터 보호됨을 보장
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">5. </span>증명된 사업 신뢰도
                                    </span>
                                    <p>
                                        인정된 글로벌 산업 규격에 대한 독립적 검증으로 신뢰성 확보
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">6. </span>사업 확대
                                    </span>
                                    <p>
                                        고객은 종종 납품 조건으로 인증서를 요구하기 때문에 인증을 통한 사업 확대 가능
                                    </p>
                                </div>
                            </dd>
                        </dl>			
                    </li>
			
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_IEC 27001_04.jpg" alt="ISO/IEC 27001 IGC인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC 인증원의 역량</h3>
                                <p style="text-align: justify">
                                    IGC는 정보 보안을 포함하여 다양한 산업 분야의 품질경영시스템에 대한 인증활동에 많은 지식과 풍부한 경험을 보유하고 있습니다.<br><br>
                                    여러 국제 표준에서 요구되는 IT 시험 및 인증을 종합적으로 수행한 노하우를 바탕으로 빠르고 정확한 인증 서비스를 제공합니다.
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
           	
        </article> <!--+++++ /컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	
        <!--+++ 컨텐츠 02 /20.06.08 ISO/IEC 27701 탭컨텐츠 영역  시작+++-->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num"><span>ISO/IEC </span>27701</h1>
                <h2 class="tit_cer fc_pointer">개인 정보 경영시스템 인증</h2>
                <div class="outline">
                    데이터 수집 및 처리가 현저하게 늘어나는 가운데 개인 정보 위협을 줄이기 위해 데이터를 관리하고 처리해야 하는 방법에 대한 요구가 더욱 증가하고 있습니다.<br><br>
                    이는 국제 표준인 ISO/IEC 27701 표준의 제정의 배경이 되었습니다.<br><br>
                    ISO/IEC 27701은 ISO/IEC 27001 및 ISO/IEC 27002의 확장 형태로서 조직의 프라이버시 관리를 위해 PIMS(Privacy Information Management System)를 수립, 구현, 유지관리 및 지속적으로 개선하기 위한 요구 사항 및 지침을 제공합니다.<br>
                    또한 개인식별정보(PII, Personally Identifiable Information) 처리에 대한 책임과 책임을 갖는 PII 컨트롤러와 PII 프로세서에 대한 지침을 제공합니다.<br><br>
                    ISO/IEC 27701은 ISO/IEC 27001을 기반으로 한 Information Security Management System (ISMS) 내에서 PII를 처리하는 PII 컨트롤러 또는 PII 프로세서를 포함하는 공공 및 민간 기업, 정부 기관 및 비영리 조직을 포함한 모든 유형의 조직과 규모에 적용될 수 있습니다.
                </div>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_IEC 27701_02.jpg" alt="ISO/IEC 27701:2019 표준">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 27701:2019 표준</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>범위</li>
                                    <li><span class="number">2. </span>인용표준</li>
                                    <li><span class="number">3. </span>용어, 정의, 약어</li>
                                    <li><span class="number">4. </span>일반사항</li>
                                    <li><span class="number">5. </span>ISO/IEC 27001과 관련된 PIMS 고유의 요규사항</li>
                                    <li><span class="number">6. </span>ISO/IEC 27002와 관련된 PIMS 고유 지침</li>
                                    <li><span class="number">7. </span>PII 컨트롤러에 대한 추가 ISO/IEC 27002 지침</li>
                                    <li><span class="number">8. </span>PII 프로세서에 대한 추가 ISO/IEC 27002 지침</li>
                                </ul>
                            </dd>
                        </dl>			
                    </li>

                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_IEC 27701_03.jpg" alt="ISO/IEC 27701의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 27701의 중요성</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>개인 정보 관리 능력에 대한 신뢰를 구축</li>
                                    <li><span class="number">2. </span>조직 내 역할과 책임의 명확화</li>
                                    <li><span class="number">3. </span>내부 역량 향상 및 프로세스 개선을 통한 위반 방지</li>
                                    <li><span class="number">4. </span>프라이버시 관리를 위한 확립된 통제 및 투명성 제공</li>
                                    <li><span class="number">5. </span>비즈니스 파트너와의 합의를 촉진</li>
                                    <li><span class="number">6. </span>선도적인 정보보안 표준 ISO/IEC 27001과 쉽게 통합 가능</li>
                                </ul>
                            </dd>
                        </dl>	
                    </li>

                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_IEC 27701_04.jpg" alt="ISO/IEC 27701의 기대효과">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 27701의 기대효과</h3>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="number">1. </span>범용 운영 제어 집합을 사용하여 여러 규제 요구 사항을 조정하여 일관되고 효율적인 구현을 가능하게 합니다.</li>
                                        <li><span class="number">2. </span>PIMS는 여러 규정 요구 사항에 대해 평가함으로써 인증 심사에 소모되는 비용을 절감할 수 있습니다.</li>
                                        <li><span class="number">3. </span>대부분의 조직들이 전 세계에 걸쳐 퍼져 있기 때문에 ISO 국제 표준을 사용하여 규정 준수를 관리하는 것이 좋습니다.</li>
                                    </ul>
                                </div>
                                <p style="text-align:justify">
                                    이러한 규정 준수에 대한 의존도로 인해 표준에 대한 인증의 중요성은 높아집니다. 특히 많은 양의 중요한 데이터 처리가 관련된 경우에는 파트너 및 공급업체로부터 이익을 얻을 수 있습니다.
                                </p>
                            </dd>
                        </dl>	
                    </li>

                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/ISO_IEC 27701_05.jpg" alt="IGC 인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC 인증원의 역량</h3>
                                <p style="text-align: justify">
                                    풍부한 경험을 통해 인정된 경영시스템 인증을 제공하는 IGC는 정보 보안을 포함하여 다양한 산업 분야의 품질경영시스템에 대한 인증활동에 많은 지식과 풍부한 경험을 보유하고 있습니다.<br><br>
                                    여러 국제 표준에서 요구되는 IT 시험 및 인증을 종합적으로 수행한 노하우를 바탕으로 빠르고 정확한 인증 서비스를 제공합니다.<br><br>
                                    ISO 9001: 품질경영시스템, ISO/IEC 20000-1: 서비스경영시스템, ISO/IEC 27001: 정보보호 경영시스템의 관련 서비스와 연계하여 조직의 효과적인 시스템을 구현할 수 있는 서비스를 제공합니다.
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
                      <li><p><em><strong>02</strong></em><span>환경 인증</span></p></li>
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
           </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
        </article><!--+++ 02 컨텐츠 /20.06.08 ISO/IEC 27701 탭컨텐츠 영역 종료 +++-->
   
        <!--+++ 03 컨텐츠 /20.05.25 탭컨텐츠 영역 시작 +++-->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num"><span>ISO/IEC</span> 20000-1</h1>
		        <h2 class="tit_cer fc_pointer">IT서비스경영시스템 인증</h2>		
		        <p class="outline">
                    Service Management System(SMS)는 조직이 수행하는 IT서비스의 설계, 계획, 제공, 운영 및 제어하기 위해 수행되는 활동에 적용됩니다.<br>
                    ISO/IEC 20000-1은 이러한 유형에 적용되는 최초의 국제 표준이며, 2005년 제정되어 2011년과 2018년 2번의 개정을 거쳐왔습니다.<br>
                    ISO/IEC 20000-1은 서비스 요구 사항을 충족하고 가치를 제공하기 위한 서비스 계획, 디자인, 전환, 제공 및 개선이 포함됩니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso20000-1_1.jpg" alt="ISO IEC 20000-1 표준구조">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit"><span>ISO/IEC</span> 20000-1:2018 요구 사항</h3>
                                <p class="con_txt">
                                    ISO/IEC 20000-1은 조직 환경, 리더십, 계획, 지원, 운영, 성과 평가 및 개선의 10가지 항목으로 구성되어 있습니다.<br><br>
                                    가이드 문서는 ISO/IEC 20000-3을, 모범사례는 ISO/IEC 20000-5를 참조하십시오.<br><br>
                                    이 표준의 요구사항은 조직의 유형, 규모, 특성에 상관없이 서비스를 제공하는 모든 조직에 적용할 수 있도록 일반적인 내용으로 수립되었습니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>적용범위</li>
                                    <li><span class="number">2. </span>인용표준</li>
                                    <li><span class="number">3. </span>용어와 정의</li>
                                    <li><span class="number">4. </span>조직 상황</li>
                                    <li><span class="number">5. </span>리더십</li>
                                    <li><span class="number">6. </span>기획</li>
                                    <li><span class="number">7. </span>서비스경영시스템의 지원</li>
                                    <li><span class="number">8. </span>서비스경영시스템의 운용</li>
                                    <li><span class="number">9. </span>성과 평가</li>
                                    <li><span class="number">10. </span>개선</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
			
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso20000-1_2.jpg" alt="ISO/IEC 20000-1의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit"><span>ISO/IEC </span> 20000-1의 중요성</h3>
                                <ul class="list_st">
                                    <span class="point_blk">조직은 ISO/IEC 20000-1 인증을 통하여 다음과 같은 효과를 얻을 수 있습니다.</span>
                                    <li><span class="number">1. </span>서비스 품질 향상</li>
                                    <li><span class="number">2. </span>일관된 서비스 품질 수준 유지</li>
                                    <li><span class="number">3. </span>서비스의 기획, 설계, 전환, 전달 및 개선에 대한 능력을 입증</li>
                                    <li><span class="number">4. </span>SMS 및 서비스의 모니터링, 측정 및 검토</li>
                                    <li><span class="number">5. </span>서비스 상품화, 서비스 통합, 업체별 공급업체 관리, 고객의 서비스 가치결정</li>
                                </ul>
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
                                    IGC의 심사원은 부문별 IT 경험과 기술적 자격을 갖춘 전문가로서 ISO/IEC 20000-1 경영시스템의 구현 및 효과에 대한 철저하고 정직한 심사를 제공합니다.<br><br>
                                    또한 귀사의 비즈니스 요구에 부합하는 지식과 역량을 갖추고 있으므로 경영시스템의 효과적이고 철저한 심사를 제공합니다.
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

        </article><!--+++ /20.05.25 탭컨텐츠 영역 종료+++-->
    </div><!------------ class="tab_con" 종료 ---------------->
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>