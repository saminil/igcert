<?php
	include_once('./_common.php');
$g5['title'] = '교육/비즈니스 운영';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #B3AA00 }/* 상세페이지 포인트 컬러 */
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
    .list_st li .bullet { content: '';position: absolute;display: inline-block;width: 5px;height: 5px;background: #222;border-radius: 50%;top: 10px;left: 0}/* 리스트 스타일 2

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
    <!--+++ 20.05.13 탭메뉴/  +++-->
    <div class="tab_menu tab01">
        <ul>
            <!-- 처음 활성화 메뉴에 class="on" -->
            <li class="on"><a href="javascript:;">ISO 13053</a></li>
            <li><a href="javascript:;">ISO 21500</a></li>
            <li><a href="javascript:;">ISO 30301</a></li>
            <li><a href="javascript:;">ISO 55001</a></li>
        </ul>
    </div><!--+++ 20.05.11 탭메뉴/ 종료 +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
    <!--+++ 20.05.13 탭컨텐츠 영역 시작 +++-->
    
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 ISO 13053 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block;">	
            <section class="page_title">
                <h1 class="tit_num">ISO 13053 전문인력 양성 교육</h1>
                <h2 class="tit_cer fc_pointer">공정 개선의 정량적 방법 - 6 시그마 교육과정</h2>
                <p class="outline">
                    ISO 13053은 6 시그마 방법론을 설명하는 국제 표준입니다. 이 방법론은 조직의 비즈니스 프로세스를 향상시키기 위해 사용됩니다. 많은 기업들은 종종 폐기물 낭비와 같은 결함과 오류를 초래하는 프로세스 변형을 겪고 있습니다.<br><br>
                    6 시그마의 목적은 통계적 접근법을 사용함으로써 오류율을 낮추고 품질 성능을 높이기 위해 통계적 접근법을 사용함으로써 변이를 식별 및 크게 줄이는 것입니다. 게다가, 6 시그마 방법론은 새로운 서비스, 제품 또는 프로세스 개발에 사용되는 DMAIC (정의, 측정, 분석, 개선 및 제어) DMADV (정의, 측정, 분석, 설계 및 검증)를 통해 기존 프로세스를 개선하는 데 사용할 수 있습니다.<br><br>
                    DMAIC는 정의(Define), 측정(Measure,), 분석(Analyze), 개선(Improvement), 관리(Control)를 거쳐 최종적으로 6 시그마 기준에 도달하게 되는 것을 의미하며 각 단계의 내용은 다음과 같습니다.
				</p>
              
                <div class="tit_img">
                    <img src="./images/edu_iso_13053_01.jpg" alt="ISO 13053(ISO 13053-1:2011, ISO 13053-2:2011) 개요" style="width: 100%">
                </div>
                
                <div class="outline">
                    <ul class="list_st">
                        <li>
                            <span class="number">1. </span>정의(Define)<br>
                            기업 전략과 소비자 요구사항과 일치하는 디자인 활동의 목표를 정합니다.
                        </li>
                        <li>
                            <span class="number">2. </span>측정(Measure)<br>
                            현재의 프로세스 능력, 제품의 수준, 위험 수준을 측정하고 품질에 결정적 영향을 끼치는 요소(CTQs, Criticals to qualities)를 밝혀냅니다.
                        </li>
                        <li>
                            <span class="number">3. </span>분석(Analyze)<br>
                            디자인 대안, 상위 수준의 디자인을 만들고 최고의 디자인을 선택하기 위한 디자인 가능성을 평가하는 것을 개발하는 과정입니다.
                        </li>
                        <li>
                            <span class="number">4. </span>개선(Improvement)<br>
                            바람직한 프로세스가 구축될 수 있도록 시스템 구성요소들을 개선합니다.
                        </li>
                        <li>
                            <span class="number">5. </span>관리(Control)<br>
                            개선된 프로세스가 의도된 성과를 얻도록 투입요소와 변동성을 관리합니다.
                        </li>
                    </ul>
                </div>
               
                <ul class="content">                    
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_13053_02.jpg" alt="ISO 13053 교육의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 13053 교육의 중요성</h3>
                                <p style="text-align:justify">
                                    6 시그마를 이해하고 직업에서 그것의 실무를 운영 할 수 있다면 향후 커다란 효과를 가질 수 있습니다.<br><br>
                                    비용 절감, 비즈니스 프로세스 개선 및 이익 증대에 대한 지식으로 이 인증은 귀하의 분야에서 다른 전문가와 차별화됩니다. ISO 13053에 대한 인증을 받은 개인은 또한 시그마의 방법론에 대한 정보뿐만 아니라 직장에서의 변화를 위한 주도자가 될 능력이 있기 때문에 리더십 역할을 수행할 준비가 되어있습니다.<br><br>
                                    당사는 적격성을 정의하는 주요능력, 지식 그리고 경험을 반영하는 요구사항에 대비하여 평가를 할 것입니다. 교육 프로그램은 심사 주요 표준에 기초합니다.
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
                        <li><p><em><strong>01</strong></em><span>품질</span></p></li>
                        <li><p><em><strong>02</strong></em><span>환경</span></p></li>
                        <li><p><em><strong>03</strong></em><span>안전보건</span></p></li>
                        <li><p><em><strong>04</strong></em><span>의료기기</span></p></li>
                        <li><p><em><strong>05</strong></em><span>식품</span></p></li>
                        <li><p><em><strong>06</strong></em><span>정보 보안</span></p></li>
                        <li><p><em><strong>07</strong></em><span>위험 관리</span></p></li>
                        <li><p><em><strong>08</strong></em><span>교통, 통신 및 에너지</span></p></li>
                        <li><p><em><strong>09</strong></em><span>연속성 및 복원력</span></p></li>
                        <li><p><em><strong>10</strong></em><span>비즈니스 운영</span></p></li>
                        <li><p><em><strong>11</strong></em><span>사회적 책임 및 부패관리</span></p></li>
                        <li><p><em><strong>12</strong></em><span>시험 및 교정</span></p></li>

                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>
               
        </article> <!--------+++++++/ 컨텐츠 01 종료 /++++++++----------->
        
        
        <!--------+++++++/ 컨텐츠 02 ISO 21500 시작 /++++++++----------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 21500 전문인력 양성 교육</h1>
                <h2 class="tit_cer fc_pointer">프로젝트 관리에 대한 가이던스 교육과정</h2>
                <p class="outline">
                    ISO 21500은 프로젝트 관리에 대한 가이던스로서 프로젝트 관리 이외의 비즈니스 운영의 중단을 최소화하면서 예산 및 시간 제약 내에서 프로젝트를 성공적으로 완료할 수 있도록 합니다.<br><br>
                    또한, 조직이 모든 프로젝트 관리 요구사항을 충족하며 프로젝트 실패의 가능성을 줄일 수 있도록 지원합니다.
				</p>
               
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso21500_01.jpg" alt="ISO 21500란?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 21500란?</h3>
                                <p class="con_txt">
                                    ISO 21500 교육대상은 아래와 같습니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>프로젝트 관리에 관련된 개인</li>
                                    <li><span class="bullet"></span>프로젝트 관리의 주요 프로세스에 대한 지식을 얻으려는 개인 및 심사원</li>
                                    <li><span class="bullet"></span>프로젝트 관리 경력을 쌓고자 하는 개인</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso21500_02.jpg" alt="ISO 21500의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 21500의 중요성</h3>
                                <p style="text-align:justify">
                                    ISO 21500은 프로젝트를 이끌고 팀을 관리하는 데 필요한 지식을 제공하며 교육 이수자가 성공적인 프로젝트 관리에 필요한 기술 및 지식을 보유하고 있음을 증명합니다.<br><br>
                                    프로젝트의 효과적인 관리를 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 21500 교육 과정의 목적은 이 프로그램을 이수한 심사원 및 개인의 능력이 적격하며, 인증원과 기업 및 산업 분야에 신뢰성을 제공하기 위함입니다.<br><br>
                                    교육 과정의 일환으로 당사는 적격성을 정의하는 주요능력, 지식 그리고 경험을 반영하는 요구사항에 대비하여 평가를 할 것입니다. 교육 프로그램은 심사 주요 표준에 기초합니다.
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
                        <li><p><em><strong>01</strong></em><span>품질</span></p></li>
                        <li><p><em><strong>02</strong></em><span>환경</span></p></li>
                        <li><p><em><strong>03</strong></em><span>안전보건</span></p></li>
                        <li><p><em><strong>04</strong></em><span>의료기기</span></p></li>
                        <li><p><em><strong>05</strong></em><span>식품</span></p></li>
                        <li><p><em><strong>06</strong></em><span>정보 보안</span></p></li>
                        <li><p><em><strong>07</strong></em><span>위험 관리</span></p></li>
                        <li><p><em><strong>08</strong></em><span>교통, 통신 및 에너지</span></p></li>
                        <li><p><em><strong>09</strong></em><span>연속성 및 복원력</span></p></li>
                        <li><p><em><strong>10</strong></em><span>비즈니스 운영</span></p></li>
                        <li><p><em><strong>11</strong></em><span>사회적 책임 및 부패관리</span></p></li>
                        <li><p><em><strong>12</strong></em><span>시험 및 교정</span></p></li>

                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>
               
        </article> <!--------+++++++/ 컨텐츠 02 종료 /++++++++----------->
        
        
        <!--------+++++++/ 컨텐츠 03 ISO 30301 시작 /++++++++----------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 30301 전문인력 양성 교육</h1>
                <h2 class="tit_cer fc_pointer">정보 문서 - 기록 관리시스템 교육과정</h2>
                
                <ul class="content">
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_30301_01.jpg" alt="ISO 30301:2019 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 30301:2019 개요</h3>
                                <p style="text-align:justify">
                                    ISO 30301은 기록관리를 통해 궁극적으로 조직이 원하는 조직의 임무, 성과 및 목표 달성을 지원하는 표준입니다. 조직의 성과와 목표 달성을 위한 조직의 기록경영시스템을 수립하고 이에 필요한 요구사항을 제시하고 있는 것이 ISO 30301 표준입니다.<br><br>
                                    기록의 생산과 관리 등 기록관리와 관련한, 조직의 경영진을 포함하여 조직의 모든 구성원들이 이 표준을 활용할 수 있고 쉽게 적용할 수 있습니다.<br><br>
                                    ISO 30301 국제 표준은 기록 관리 및 기록 경영에 관심이 있고 효과적인 기록 관리를 통한 조직의 성과 및 목표 달성에 기여하고자 하는 모든 개인에게 적용됩니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_30301_02.jpg" alt="ISO 30301란?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 30301란?</h3>
                                <p style="text-align:justify">
                                    ISO 30301은 기록관리를 통해 궁극적으로 조직이 원하는 조직의 임무, 성과 및 목표 달성을 지원하는 표준입니다. 조직의 성과와 목표 달성을 위한 조직의 기록경영시스템을 수립하고 이에 필요한 요구사항을 제시하고 있는 것이 ISO 30301 표준입니다.<br><br>
                                    기록의 생산과 관리 등 기록관리와 관련한, 조직의 경영진을 포함하여 조직의 모든 구성원들이 이 표준을 활용할 수 있고 쉽게 적용할 수 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_30301_03.jpg" alt="ISO 30301 교육의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 30301 교육의 중요성</h3>
                                <p style="text-align:justify">
                                    ISO 30301 표준은 기록 “관리”에서 멈추는 것이 아니라 기록 “경영”이라는 영역으로 넘어가면서 단순히 기록관리에서 그치지 않고 기록관리를 함으로써 궁극적으로 조직이 원하는 조직의 성과와 목표를 지원하는 표준입니다.<br><br>
                                    효과적인 기록관리를 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 30301 교육 과정의 목적은 이 프로그램을 이수한 심사원 및 개인의 능력이 적격하며, 인증원과 기업 및 산업 분야에 신뢰성을 제공하기 위함입니다.<br><br>
                                    교육 과정의 일환으로 당사는 적격성을 정의하는 주요능력, 지식 그리고 경험을 반영하는 요구사항에 대비하여 평가를 할 것입니다. 교육 프로그램은 심사 주요 표준에 기초합니다.
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
                        <li><p><em><strong>01</strong></em><span>품질</span></p></li>
                        <li><p><em><strong>02</strong></em><span>환경</span></p></li>
                        <li><p><em><strong>03</strong></em><span>안전보건</span></p></li>
                        <li><p><em><strong>04</strong></em><span>의료기기</span></p></li>
                        <li><p><em><strong>05</strong></em><span>식품</span></p></li>
                        <li><p><em><strong>06</strong></em><span>정보 보안</span></p></li>
                        <li><p><em><strong>07</strong></em><span>위험 관리</span></p></li>
                        <li><p><em><strong>08</strong></em><span>교통, 통신 및 에너지</span></p></li>
                        <li><p><em><strong>09</strong></em><span>연속성 및 복원력</span></p></li>
                        <li><p><em><strong>10</strong></em><span>비즈니스 운영</span></p></li>
                        <li><p><em><strong>11</strong></em><span>사회적 책임 및 부패관리</span></p></li>
                        <li><p><em><strong>12</strong></em><span>시험 및 교정</span></p></li>

                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>
               
        </article> <!--------+++++++/ 컨텐츠 03 종료 /++++++++----------->
        
        
        <!--------+++++++/ 컨텐츠 04 ISO 55001 시작 /++++++++----------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 55001 전문인력 양성 교육</h1>
                <h2 class="tit_cer fc_pointer">자산관리 경영시스템 교육과정</h2>
                
                <ul class="content">
                    <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso55001_01.jpg" alt="ISO 55001:2014 교육 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 55001:2014 교육 개요</h3>
                                <p style="text-align:justify">
                                    Asset Management System (AMS)은 자산 경영 관리 시스템을 의미합니다.<br><br>
                                    자산관리의 사전적인 의미는, 조직의 재무, 운영, 유지관리 및 기타 자산 관련 활동을 조정하여 자산에서 더 많은 가치를 실현하도록 하는 것입니다. 자산 라이프 사이클 전반에 대해 계획적으로 관리하고 그 가치를 최대화하는 것을 목적으로 하는 국제 표준입니다.<br><br>
                                    ISO 55001은 조직의 자산관리 자체에도 도움이 되지만 대외적으로 안정적으로 재정을 운영하는 이미지를 형성함으로써 고객 및 파트너에게 신뢰성을 줄 수 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/ISO55001_02.jpg" alt="ISO 55001의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 55001의 중요성</h3>
                                <p style="text-align:justify">
                                    효과적인 자산 관리를 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 55001 교육 과정의 목적은 이 프로그램을 이수한 심사원 및 개인의 능력이 적격하며, 인증원과 기업 및 산업 분야에 신뢰성을 제공하기 위함입니다.<br><br>
                                    교육 과정의 일환으로 당사는 적격성을 정의하는 주요능력, 지식 그리고 경험을 반영하는 요구사항에 대비하여 평가를 할 것입니다. 교육 프로그램은 심사 주요 표준에 기초합니다.
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
                        <li><p><em><strong>01</strong></em><span>품질</span></p></li>
                        <li><p><em><strong>02</strong></em><span>환경</span></p></li>
                        <li><p><em><strong>03</strong></em><span>안전보건</span></p></li>
                        <li><p><em><strong>04</strong></em><span>의료기기</span></p></li>
                        <li><p><em><strong>05</strong></em><span>식품</span></p></li>
                        <li><p><em><strong>06</strong></em><span>정보 보안</span></p></li>
                        <li><p><em><strong>07</strong></em><span>위험 관리</span></p></li>
                        <li><p><em><strong>08</strong></em><span>교통, 통신 및 에너지</span></p></li>
                        <li><p><em><strong>09</strong></em><span>연속성 및 복원력</span></p></li>
                        <li><p><em><strong>10</strong></em><span>비즈니스 운영</span></p></li>
                        <li><p><em><strong>11</strong></em><span>사회적 책임 및 부패관리</span></p></li>
                        <li><p><em><strong>12</strong></em><span>시험 및 교정</span></p></li>

                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>
               
        </article> <!--------+++++++/ 컨텐츠 04 종료 /++++++++----------->
    </div><!------------ class="tab_con" 종료 ---------------->
</div><!------ class="content_wrap" 종료 ----------->




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>