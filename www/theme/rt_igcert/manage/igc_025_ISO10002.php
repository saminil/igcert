<?php
	include_once('./_common.php');
$g5['title'] = '고객만족 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
			<li class="on"><a href="javascript:;">ISO 10002</a></li>
			<li><a href="javascript:;">ISO 10004</a></li>
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
		        <h1 class="tit_num"><span>ISO</span> 10002</h1>
		        <h2 class="tit_cer fc_pointer">고객만족 경영시스템 지침</h2>		
                <p class="outline">
                    ISO 10002는 전자상거래를 포함한 모든 유형의 상업적 또는 비상업적 활동에 대하여 기획, 설계, 운영, 유지 및 개선을 포함한 조직 내의 제품 관련 불만처리 프로세스에 대한 지침을 제공합니다. 그리고 기술된 불만처리 프로세스를 전체 품질경영시스템 중 하나의 프로세스로 활용하는 것도 적절합니다.<br><br>
                    효과적이고 효율적인 불만처리 프로세스는 제품을 공급하는 조직과 그 제품을 받는 이들 모두의 요구를 반영합니다. 또한, 불만처리 프로세스를 통해 얻은 정보는 제품 및 프로세스의 개선을 이끌 수 있고 적절하게 불만이 처리된 경우에는 조직의 규모, 지역 및 산업 분야와 관계없이 조직의 명성이 높아질 수 있습니다.<br><br>
                    이와 관련된 국제적인 표준은 일관된 불만 처리에 대한 확신을 주기 때문에 국제 시장에서 이 표준의 가치는 점점 높아지고 있습니다.
                </p>

                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso_10002_03.jpg" alt="ISO 1002 규격의 요구사항">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit"><span>ISO</span> 10002:2014 요구사항</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>적용범위</li>
                                    <li><span class="number">2. </span>인용표준</li>
                                    <li><span class="number">3. </span>용어와 정의</li>
                                    <li><span class="number">4. </span>불만처리 기본 원칙</li>
                                    <li><span class="number">5. </span>불만처리의 체제 및 구조</li>
                                    <li><span class="number">6. </span>기획 및 설계</li>
                                    <li><span class="number">7. </span>불만처리 프로세스의 운영</li>
                                    <li><span class="number">8. </span>유지 및 개선</li>
                                </ul>
                            </dd>
                        </dl>	
                    </li>

                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso_10002_01.jpg" alt="ISO 1002 도입의 필요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit"><span>ISO</span> 10002의 중요성</h3>
                                <ul class="list_st">
                                    <li>
                                        <span class="bullet"></span>시장개방에 따른 기업들의 무한경쟁 상황 하에서 생존 및 발전을 위한 경쟁력 제고의 필요성 인식
                                    </li>
                                    <li>
                                        <span class="bullet"></span>고객 서비스 개선을 통한 기존 고객의 이탈방지
                                    </li>
                                    <li>
                                        <span class="bullet"></span>고객 수준의 향상과 소비자 권리의식의 증대
                                    </li>
                                    <li>
                                        <span class="bullet"></span>상품 및 서비스 다양화에 따른 고객 문의에 대한 응대
                                    </li>
                                    <li>
                                        <span class="bullet"></span>고객과의 관계 개선
                                    </li>
                                    <li>
                                        <span class="bullet"></span>고객 관점의 만족도 향상
                                    </li>
                                    <li>
                                        <span class="bullet"></span>고객 상담원 및 영업사원의 중요성 대두
                                    </li>
                                    <li>
                                        <span class="bullet"></span>공공기관의 고객만족도 조사 강화
                                    </li>
                                    <li>
                                        <span class="bullet"></span>제조사의 제조물 책임에 따른 대응능력 강화
                                    </li>
                                </ul>
                            </dd>
                        </dl>
                    </li>

                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso_10002_02.jpg" alt="ISO 10002의 기대효과">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit"><span>ISO</span> 10002의 기대효과</h3>
                                <ul class="list_st">
                                    <li>
                                        <span class="bullet"></span>공개적이며 신속히 대응하는 불만처리 프로세스를 불만제기자에게 제공
                                    </li>
                                    <li>
                                        <span class="bullet"></span>일관성 있고 체계적이며 신속히 대응하는 방식으로 불만을 해결하여 불만제기자 및 조직이 만족할 수 있도록 하는 조직의 능력을 증진
                                    </li>
                                    <li>
                                        <span class="bullet"></span>동향 파악, 불만의 원인 제거 및 조직의 운영 개선에 대한 조직의 능력을 증진
                                    </li>
                                    <li>
                                        <span class="bullet"></span>불만 해결을 위한 고객중심 접근방법을 조직이 수립하도록 하고, 고객업무에 대한 관련 인원의 숙련도가 향상되도록 권장
                                    </li>
                                    <li>
                                        <span class="bullet"></span>불만처리 프로세스의 지속적인 검토 및 분석, 불만 해결 그리고 프로세스 개선에 대한 근거를 제공
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

        </article><!--+++++ /컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->

       
        <article><!--+++++ 컨텐츠 02 +++++-->	
            <section class="business_type5" class="area">
                <h1 class="tit_num"><span>ISO</span> 10004</h1>
                <h2 class="tit_cer fc_pointer">고객만족 경영시스템 지침</h2>	
                <p class="outline">
                    ISO 10004는 조직에 고객만족도를 모니터링하고 측정하기 위한 효과적인 절차를 수립하는 데 도움을 주는 가이드를 제공합니다. 모든 규모 및 산업 분야에 대한 적용을 목표로 합니다. 이 규격을 적용함으로써 얻어질 수 있는 많은 이득 중에 중요한 부분은, 고객과의 관계 개선을 위한 고객의 불평, 고객 만족, 고객 중심, 개인 동기부여의 해결책을 확인할 수 있습니다.<br><br>
                    특히 공공 또는 민간 조직으로부터 제품이나 서비스를 받는 개인이나 조직의 만족도를 정확하게 파악하고 이에 대해 적절한 대응을 통해 조직이 발전해 나가도록 하는 것이 이 표준의 주안점입니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso_10002_03.jpg" alt="ISO 1002 규격의 요구사항">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit"><span>ISO </span>10004:2018 요구사항</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>적용범위</li>
					                <li><span class="number">2. </span>인용표준</li>
					                <li><span class="number">3. </span>용어와 정의</li>
					                <li><span class="number">4. </span>컨셉과 안내 원리</li>
					                <li><span class="number">5. </span>고객 만족도 모니터링 및 측정을 위한 프레임워크</li>
					                <li><span class="number">6. </span>계획</li>
					                <li><span class="number">7. </span>운영</li>
					                <li><span class="number">8. </span>유지관리 및 개선</li>
                                </ul>
                            </dd>
                        </dl>	
                    </li>

                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso10004_01.jpg" alt="ISO 10004의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit"><span>ISO</span> 10004의 중요성</h3>
                                <p class="con_txt">
                                    ISO 10004는 고객의 기대치를 상회하고자 하는 어떠한 조직에도 적절하며, 그 조직이 개인적 성격, 공공의 성격 혹은 자발적인 성향이 있던 상관없이, 모든 형태와 규모의 다양한 산업 분야에 도 적용이 가능한 가장 기본적인 요구조건입니다.<br><br>
                                    고객 만족은 조직(기업)으로부터 공급된 제품에 대한 고객의 기대치와 고객이 느끼는 인식의 차이에 의하여 결정됩니다. 고객 만족을 달성하기 위하여, 기업(조직)은 최우선으로 고객의 기댓값을 이해해야 합니다. 공급된 제품, 고객의 기대심리를 만족하는 제품의 정도가 고객 만족의 정도를 결정합니다. 전달된 제품의 품질에 대한 조직의 관점과 고객의 인식 사이에 특징이 있는 것이 중요합니다. 왜냐하면, 이 특징이 차후에 고객 만족 정도를 결정하기 때문입니다.
                                </p>
                                <div class="con_txt_2">
                                    <ul class="list_st">
                                        <span class="point_blk">&#10020; 고객만족 달성을 위한 조직의 수행항목</span>
                                        <li><span class="bullet"></span>고객의 기대를 식별 및 파악</li>
                                        <li><span class="bullet"></span>고객 만족 정보를 수집</li>
                                        <li><span class="bullet"></span>고객 만족 정보를 분석</li>
                                        <li><span class="bullet"></span>고객 만족 향상을 위한 의견의 제시</li>
                                        <li><span class="bullet"></span>고객 만족의 진행 상태에 대한 관리 감독</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>

                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./image/iso10004_02.jpg" alt="ISO 10004의 효과">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit"><span>ISO</span> 10004의 기대효과</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>새로운 기대에 대한 정보 획득</li>
                                    <li><span class="bullet"></span>불만과 조직의 만족에 대한 불만 해결</li>
                                    <li><span class="bullet"></span>고객의 경향을 파악하고 그로 인하여 불만족 사항의 원인 제거</li>
                                    <li><span class="bullet"></span>불만사항 해결에 관한 고객 중심 접근</li>
                                    <li><span class="bullet"></span>고객과 직원들의 고객 대응에 따른 능력 향상</li>
                                    <li><span class="bullet"></span>불만처리 절차에 대한 지속적인 검토 및 분석에 관한 토대 확립</li>
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
	
        </article><!--+++++ /컨텐츠 02 종료 +++++-->					
    </div> <!----class="tab_con------>
</div> <!-----div class="content_wrap------>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>