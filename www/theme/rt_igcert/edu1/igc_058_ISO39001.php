<?php
	include_once('./_common.php');
$g5['title'] = '교통, 통신 및 에너지';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
        
        .content li .img_area { width: 90%;margin: 50px auto 0 }/* 이미지 크기/여백 조정 */
        
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */
        
    }

    
    /* ============= 상세페이지 반응형 종료 ============= */

</style>


<div class="content_wrap">
    <!--+++ 20.05.26 탭메뉴/ 시스템인증 > 보건 및 의료기기 시작 +++-->
    <div class="tab_menu tab01">
        <ul>
            <!-- 처음 활성화 메뉴에 class="on" -->
            <li><a href="javascript:;">ISO 29001</a></li>
            <li class="on"><a href="javascript:;">ISO 39001</a></li>
            <li><a href="javascript:;">ISO 50001</a></li>
        </ul>
    </div>
    <!--+++ 20.05.26 탭메뉴/ 시스템인증 > 보건 및 의료기기 종료 +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

    <!--+++ 20.0526.13 탭컨텐츠 영역 시작 +++-->
    
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 +++++-->	
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 29001 전문인력 양성 교육</h1>
		        <h2 class="tit_cer fc_pointer">석유, 석유화학 및 천연가스 산업-분야별 품질관리시스템 교육과정</h2>
		        
		        <ul class="content">
		            <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso29001_01.jpg" alt="ISO 29001:2020 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 29001:2020 개요</h3>
                                <p style="text-align:justify">
                                    ISO 29001은 ISO 9001:2015에 대한 보충 자료로 작성되었습니다. 이는 석유, 석유화학 및 천연 가스 산업과 관련된 공급망 위험 및 기회를 관리하고 산업 내에서 채택된 보완 표준에 대한 요구사항을 조정하기 위한 프레임 워크를 제공하기 위해 개발되었습니다.<br><br>
                                    ISO 29001의 목표은 공급망 및 서비스 제공업체의 결함예방, 변동 및 폐기물 감소를 강조하여 지속적인 개선을 제공하는 품질경영 시스템의 개발입니다.<br><br>
                                    또한 ISO 29001은 복수의 인증 심사를 피하고 석유화학 및 천연가스 산업의 품질 경영 시스템에 대한 공통 접근방식을 제공하기 위한 것입니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/ISO_29001_02.jpg" alt="ISO 29001 교육의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 29001 교육의 중요성</h3>
                                <p style="text-align:justify">
                                    석유 및 가스 산업이 재앙적인 위협에 가장 많이 노출되어 있다는 것을 고려할 때 품질 관리 프로세스와 자격을 갖춘 전문가가 이 분야에서 매우 중요합니다.<br><br>
                                    유해한 액체 및 가스를 잘못 취급하는 경우 사람들과 환경에 심각한 피해를 줄 수 있습니다. 따라서 매끄러운 운영에 대한 안전과 유지를 보장하기 위해서는 높은 수준의 작동 신뢰성이 업계에 필수적입니다.<br><br>
                                    인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO 29001 교육 프로그램은 ISO 29001 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
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
        
        <!--------+++++++/ 컨텐츠 02 ISO 39001 시작 /++++++++----------->
        <article style="display:block;">
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 39001 전문인력 양성 교육</h1>
		        <h2 class="tit_cer fc_pointer">도로 교통 안전(RTS) 경영시스템 교육과정</h2>
		        
		        <ul class="content">
		            <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso39001_01.jpg" alt="ISO 39001:2012 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 39001:2012 개요</h3>
                                <p style="text-align:justify">
                                    ISO 39001:2012 Road Traffic Safety(RTS) management system은 세계 각국이 참여한 ISO/TC 241에 의해 제정된 도로교통안전 경영시스템 국제 표준입니다.<br><br>
                                    ISO 39001은 교통사고 사망자나 심각한 부상자를 줄이는 것을 목적으로 개발되었으며, 조직의 도로 교통안전을 위한 경영시스템의 요구사항을 정하고 있습니다.<br><br>
                                    ISO 39001 은 조직이 도로교통 사고로 인한 사망 및 심각한 부상의 발생률과 위험을 줄이고 궁극적으로 제거하는 데 도움이 되는 표준입니다.<br><br>
                                    ISO 39001을 기반으로 하는 도로 교통안전 경영 시스템은 도로 교통 시스템과 상호 작용하는 공공 기관과 민간 기업 모두에 적용됩니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso39001_02.jpg" alt="ISO 39001란?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 39001란?</h3>
                                <p class="con_txt">
                                    ISO 39001은 조직 안전 및 사회적 책임 목표를 충족시킬 수 있으며, 더 나은 관리를 통해 효율성을 향상시키는 방법을 확인할 수 있습니다.<br><br>
                                    ISO 39001의 대상은 아래와 같습니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>도로교통안전 성과를 증진하고자 하는 조직</li>
                                    <li><span class="number">2. </span>도로교통안전경영시스템의 수립 및 실행, 유지, 개선을 하고자 하는 조직</li>
                                    <li><span class="number">3. </span>조직 내 도로교통안전방침의 적합성을 확립하고자 하는 조직</li>
                                    <li><span class="number">4. </span>조직 내 도로교통안전방침과 이 국제표준과의 적합성을 입증하고자 하는 조직</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso39001_03.jpg" alt="ISO 39001 교육의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 39001 교육의 중요성</h3>
                                <p style="text-align:justify">
                                    도로 교통 안전 무시의 결과는 사소한 사고가 끔찍한 사고로 되는 것과 관련되어 비극이 될 수 있습니다. ISO 39001은 도로 교통 안전(RTS) 경영 시스템에 대한 요구사항을 지정하여 도로 교통 시스템과 상호 작용하는 조직이 도로 교통 사고와 관련된 사망 및 중상을 줄일 수 있도록 지원합니다.<br><br>
                                    경쟁력과 능력을 갖추기 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 39001 경영 시스템 심사원 교육 과정의 목적은 이 프로그램을 통해 인증 받은 심사원이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하는 것입니다.<br><br>
                                    인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO 39001 교육 프로그램은 ISO 39001 규격을 기본으로 하고 있습니다.
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
        
        <!--------+++++++/ 컨텐츠 03 ISO 50001  시작 /++++++++----------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 50001 전문인력 양성 교육</h1>
		        <h2 class="tit_cer fc_pointer">에너지 경영시스템 교육과정</h2>
		        
		        <ul class="content">
		            <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso50001_01.jpg" alt="ISO 50001:2018 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 50001:2018 개요</h3>
                                <p style="text-align:justify">
                                    이 표준의 목적은 조직이 에너지 효율, 이용 및 사용량을 포함한 에너지 성과를 개선하기 위하여 필요한 시스템과 프로세스를 수립할 수 있도록 하는 것입니다. 체계적인 에너지 관리를 통하여 온실가스 배출량, 에너지 비용 및 그 밖의 관련된 환경영향을 저감시킬 수 있습니다. 이 표준은 지역적, 문화적, 사회적 조건에 무관하게 모든 종류 및 규모의 조직에 적용될 수 있습니다. 성공적인 실행을 위해서는 고객 조직의 모든 부서와 기능, 특히 최고경영자의 의지가 중요합니다.<br><br>
                                    조직은 이 요구사항을 바탕으로 에너지방침을 개발하고 실행할 수 있으며, 중요에너지 이용과 관련된 법적 요구사항 및 정보를 고려한 목표, 세부목표 및 실행계획을 수립할 수 있습니다. EnMS(Energy Management Systems)는 조직이 조직의 방침 의지를 달성하고, 에너지성과 개선에 필요한 활동을 하고 이 표준의 요구사항에 그 시스템의 적합성을 실증하는 것을 가능하게 합니다. 이 표준은 조직의 관리하에 있는 활동들에 대하여 적용되며, 이 표준의 적용은 시스템 복잡성, 문서화 정도 및 자원을 포함하는 조직의 특정 요구사항에 맞도록 조정될 수 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso50001_02.jpg" alt="ISO 50001 교육의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 50001 교육의 중요성</h3>
                                <p style="text-align:justify">
                                    에너지의 효율적인 활용은 조직의 경제적 이익에도 기여할 뿐만 아니라 세계적인 화두로 급부상하고 있는 환경문제에 대하여 긍정적인 영향을 끼칠 수 있습니다.<br><br>
                                    ISO 50001의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 50001 심사원 인증 과정의 목적은 이 프로그램을 통해 교육받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.<br><br>
                                    인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO 50001 교육 프로그램은 ISO 50001 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
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
    </div><!------------ class="tab_con" 종료 ---------------->
</div><!------ class="content_wrap" 종료 ----------->




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>