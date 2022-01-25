<?php
	include_once('./_common.php');
$g5['title'] = '교육/식품';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    <!--+++ 20.05.07 탭메뉴 버튼 시작 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">ISO 22000</a></li>
			<li><a href="javascript:;">FSSC 22000</a></li>
			<li><a href="javascript:;">FDA FSMA</a></li>
			<li><a href="javascript:;">PCQI</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 버튼 종료 +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
    <!--+++ 20.05.07 탭 컨텐츠 영역 +++-->
    
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	    <article style="display: block">
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 22000 전문인력 양성 교육</h1>
	  	        <h2 class="tit_cer fc_pointer">식품안전경영시스템 교육과정</h2>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/iso_22000_01.jpg" alt="ISO 22000:2018 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 22000:2018 개요</h3>
                                <p style="text-align:justify">
                                    ISO 22000은 인간의 소비시점에서 식품이 안전하다는 것을 보장하기 위해 식품의 원재료 생산, 제조, 가공, 보존, 유통단계 등의 식품 안전 위해요소를 관리하기 위한 식품안전경영시스템에 대한 요구사항을 규정한 국제표준 규격입니다.<br><br>
                                    최종 소비자가 섭취하기 전까지 각 단계에서 발생할 우려가 있는 요소를 규명하고, 이를 중점적으로 관리하기 위한 중요관리점을 설정, 관리함으로써 식품의 안전성을 확보하는 위생관리 체계라고 할 수 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/iso_22000_03.jpg" alt="ISO 22000 교육의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 22000 교육의 중요성</h3>
                                <p style="text-align:justify">
                                    ISO 22000은 프로세스 형태 및 사용시설과 관련될 수 있는 위해요소를 포함하여, 식품사슬에서 발생할 것이 예측되는 모든 위해요소를 파악하여 식품안전경영시스템을 달성할 수 있도록 지원하고 있습니다.<br><br>
                                    ISO 22000의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 22000 심사원 인증 과정의 목적은 이 프로그램을 통해 인증받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.<br><br>
                                    인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO 22000 교육 프로그램은 ISO 22000 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
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

        </article><!--+++ / 20.05.25 탭컨텐츠 01 영역 종료 / +++-->

        <article><!--+++ / Tab Menu 컨텐츠 02, 20.05.25 탭컨텐츠 영역 시작 / +++-->
            <section class="business_type5" class="area">
		        <h1 class="tit_num">FSSC 22000 전문인력 양성 교육</h1>
		        <h2 class="tit_cer fc_pointer">식품안전시스템 교육과정 </h2>

                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_fssc_22000_01.jpg" alt="FSSC 22000 Ver. 5 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FSSC 22000 Ver. 5 개요</h3>
                                <p class="con_txt">
                                    FSSC 22000은 글로벌 식품 안전 표준으로, 식품 관리 시스템 표준 ISO 22000과 PRP(Pre-Requisite Program) 및 추가 요건들을 기반으로 식품안전 리스크 관리에 대한 포괄적인 기준을 제시합니다.<br><br>
                                    이 표준은 식품 안전 경영시스템 뿐만 아니라 보관 및 운송에 대한 지침도 포함하고 있기때문에 식품안전 및 품질 책임 관리를 위한 틀을 제공합니다.<br><br>
                                    IGC는 FSSC로부터 FSSC 22000 Full License에 대한 교육 권한을 부여받아, 다음 교육을 제공합니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>조직, 인증기관, 컨설턴트 및 기타 사람들을 위한 과정</li>
                                    <li><span class="number">2. </span>FSSC 22000 내부 심사원 과정</li>
                                    <li><span class="number">3. </span>FSSC 22000 선임 심사원 과정</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_fssc_22000_02.jpg" alt="FSSC 22000 교육의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FSSC 22000 교육의 중요성</h3>
                                <p class="con_txt">
                                    FSSC 22000 요구사항에 대한 일반적인 지식에 관심이 있고, 다른 식품 사슬 조직에서 어떻게 적용될 수 있는지 이해하기 위한 조직, 인증기관, 컨설턴트 및 기타 사람들을 위한 과정입니다.<br><br>
                                    다양한 식품 사슬 범주 내에서 FSSC 22000이 어떻게 구현될 수 있는지를 보여줍니다.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>내부 심사원 과정
                                    </span>
                                    <p>
                                        내부 심사원에 대한 교육 요구사항을 충족하기 위해 FSSC 22000을 구현하는 조직을 위해 설계되었습니다. 교육은 ISO 19011:2018에 명시된 모든 요소를 다룹니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>선임 심사원 과정
                                    </span>
                                    <p>
                                        인증기관에서 인증 받은 선임 심사원이 될 수 있도록 설계되었습니다. 내부 심사 기술 및 컨설턴트를 추가로 개발하려는 조직에도 적용될 수 있습니다. FSSC 22000에 대한 사전 지식이 필요합니다. 교육은 ISO 19011:2018, ISO/IEC 17021-1:2015 및 ISO/TS 22003:2013에 명시된 모든 요소를 다루며, 연습 과정(예: case study)과 필기 시험이 포함되어 있습니다. 교육 시간은 총 40시간입니다.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_fssc_22000_03.png" alt="교육과정 소개">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">교육과정 소개</h3>
                                <p style="text-align:justify">
                                    IGC는 FSSC로부터 지정 받은 <span class="fc_pointer">Training Organization</span> 기관입니다. IGC가 제공하는 FSSC 공인 교육과정은 IGC인증원만의 풍부한 경험을 바탕으로 체계적이고 심도 있게 구성되었으며, 양질의 심사 스킬을 습득할 수 있도록 준비된 최고의 심사원 양성과정입니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_fssc_22000_04.png" alt="교육의 이점">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">교육의 이점</h3>
                                <p class="con_txt">
                                    IGC는 FSSC로부터 지정 받은 <span class="fc_pointer">Training Organization</span> 기관으로, 다음과 같은 이점이 있습니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>수료증에 FSSC 22000 마크가 포함되어, 신뢰성을 줄 수 있습니다.</li>
                                    <li><span class="number">2. </span>교육이 FSSC 22000 요구사항을 충족한다는 확신을 제공하며, 최신의 FSSC 22000 요구사항을 반영할 수 있습니다.</li>
                                    <li><span class="number">3. </span>실제로 조직에 FSSC 22000이 어떻게 적용될 수 있는지에 대한 방법을 제공합니다.</li>
                                    <li><span class="number">4. </span>FSSC 22000과 관련된 문의 사항에 빠르게 접근할 수 있습니다.</li>
                                    <li><span class="number">5. </span>IGC의 FSSC 22000 심사원 등록과 연계가 가능하여 빠르게 등록절차 진행이 가능합니다.</li>
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
        </article><!--+++ / Tab Menu 컨텐츠 02, 20.05.25 탭컨텐츠 영역  종료 / +++-->

        <!--+++ / Tab Menu 컨텐츠 03, 20.05.25 탭컨텐츠 영역 시작 / +++-->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">FDA FSMA 전문인력 양성 교육</h1>
		        <h2 class="tit_cer fc_pointer">식품안전현대화법 교육과정</h2>
		        
		        <ul class="content">
		            <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_fda-fsma_01.jpg" alt="FSMA(식품안전현대화법, FOOD SAFETY MODERNIZATION ACT) 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FSMA(식품안전현대화법, FOOD SAFETY MODERNIZATION ACT) 개요</h3>
                                <p style="text-align:justify">
                                    FDA는 FSMA법을 통해 미국으로 수출하는 모든 식품 관련 기업이 식품안전시스템을 구비하고 위해요소가 있는 식품에 대해 리콜 조치를 취할 수 있는 권한을 갖게 되어, 식품 안전문제를 효과적으로 예방할 수 있게 되었습니다.<br><br>
                                    미국 식품 공급망에 관련된 모든 국가와 기업이 FSMA의 대상이 될 수 있습니다. 따라서 FSMA에 대응해 미국으로의 식품 수출을 원활히 추진하기 위해서는 미국으로 식품을 수출하는 기업들의 준비가 필요합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_fda-fsma_02.jpg" alt="FSMA (식품안전현대화법, FOOD SAFETY MODERNIZATION ACT)란?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FSMA (식품안전현대화법, FOOD SAFETY MODERNIZATION ACT)란?</h3>
                                <p style="text-align:justify">
                                    FDA FSMA 3자 인증은 미국 이외의 지역에 위치한 식품 생산 시설에 대하여 FSMA 규정 준수 여부를 제 3의 공인된 인증기관이 심사를 실시하여 요구사항에 부합할 경우 인증서를 발행하는 제도입니다.<br><br>
                                    FSMA는 미국 정부에서 2011년 1월 4일 ‘사전 예방을 통한 식품 공급 안정성 및 국민건강 보호’를 목적으로 제정되었습니다. FDA는 FSMA법을 통해 미국으로 수출하는 모든 식품 관련 기업이 식품안전시스템을 구비하고 위해요소가 있는 식품에 대해 리콜 조치를 취할 수 있는 권한을 갖게 되어, 식품 안전문제를 효과적으로 예방할 수 있게 되었습니다.<br><br>
                                    미국 식품 공급망에 관련된 모든 국가와 기업이 FSMA의 대상이 될 수 있습니다. 따라서 FSMA에 대응해 미국으로의 식품 수출을 원활히 추진하기 위해서는 미국으로 식품을 수출하는 기업들의 준비가 필요합니다.
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

        </article><!--+++ / Tab Menu 컨텐츠 03, 20.05.25 탭컨텐츠 영역  종료 / +++-->
        
        <!--+++ / Tab Menu 컨텐츠 04, 20.05.25 탭컨텐츠 영역 시작 / +++-->
        <article>
            <section class="business_type5" class="area">
		        <h1 class="tit_num">PCQI 전문인력 양성 교육</h1>
		        <h2 class="tit_cer fc_pointer">식품안전예방관리전문가 교육과정</h2>
		        
		        <ul class="content">
                    <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/EDU_FSPCA_PCQI_01.jpg" alt="FSPCA 승인 PCQI 양성과정 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FSPCA 승인 PCQI 양성과정 개요</h3>
                                <p style="text-align:justify">
                                    FDA FSMA법에 따라 FDA FSMA 3자 인증을 위하여 식품 생산시설은 반드시 한 명 이상의 PCQI 전문가를 확보하여야 합니다.<br><br>
                                    PCQI란 각 기업 내, Food Safety Plan(식품안전 계획)을 수립하는 인원이며, 각 기업은 적정 인원의 Preventive Control Qualified Individual (PCQI: 자격을 가진 예방관리 담당자)을 통해 Food Safety Plan을 수립하여 FSMA법을 준수할 수 있습니다.<br><br>
                                    이 자격은 PCQI 교육 수행을 미국 FDA로부터 위탁받아 수행하는 미국 내, 지정 기관인 FSPCA(Food Safety Preventive Control Alliance : 식품 안전 예방 관리 협회)가 주관하는 PCHF(Preventive Controls for Human Food) Lead Instructor 교육 과정을 이수한 이후 certificate을 획득한 인원에게 부여됩니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_fda-fsma_03.jpg" alt="PCQI란?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">PCQI란?</h3>
                                <p class="con_txt">
                                    PCQI는 식품안전예방관리전문가 (PCQI: Preventive Controls Qaulified Individual)입니다. PCQI(Preventive controls qualified individual) 예방관리(통제)에 관해 자격을 갖춘 자는 위해에 기반을 둔 예방관리의 개발 및 적용을 통해 FDA가 적합하다고 인정하는 표준화된 커리큘럼과 동등한 교육을 성공적으로 이수하여 자격이 주어지거나, 그렇지 않으면 식품안전시스템의 개발 및 적용 경력을 통해 자격이 주어진 개인을 뜻합니다.<br><br>
                                    식품에 대한 예방적 방제규정에는 특정 식품안전 관련 업무는 반드시 PCQI에 의해 수행되거나 관리·감독을 받아야 한다고 명시되어 있어, 해당 식품 시설에서 PCQI를 고용하거나 기술적 자 문을 받는 것을 의무로 규정하고 있습니다.<br><br>
                                    PCQI의 자격을 취득하기 위해서 식품안전 관련 종사자는 FSPCA에서 실시하는 US FDA 공인 표준 교과과정을 성공적으로 이수해야 합니다.<br><br>
                                    PCQI 교육 내용은 다음과 같습니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>FSMA 대응을 위한 예방관리 개념 교육</li>
                                    <li><span class="number">2. </span>식품 안전 계획 개요</li>
                                    <li><span class="number">3. </span>GMP와 기타 선행요건 프로그램 운영</li>
                                    <li><span class="number">4. </span>생물학적 식품안전 위해요소</li>
                                    <li><span class="number">5. </span>화학적, 물리적, 경제적 측면에서의 식품안전 위해요소</li>
                                    <li><span class="number">6. </span>식품안전 계획의 개발을 위한 사전 단계</li>
                                    <li><span class="number">7. </span>식품안전 계획의 준비를 위한 지원 (자료)</li>
                                    <li><span class="number">8. </span>위해요소 분석과 예방관리점의 결정-개요</li>
                                    <li><span class="number">9. </span>위해요소 분석과 예방관리점의 결정</li>
                                    <li><span class="number">10. </span>식품의 알러지원 예방관리</li>
                                    <li><span class="number">11. </span>위생 예방관리</li>
                                    <li><span class="number">12. </span>공급망 예방관리</li>
                                    <li><span class="number">13. </span>검증 및 유효성 확인절차</li>
                                    <li><span class="number">14. </span>기록의 보관 및 관리</li>
                                    <li><span class="number">15. </span>회수계획</li>
                                    <li><span class="number">16. </span>법규개요 (cGMP, 위험성분석, 위험성 기반의 예방관리)</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/EDU_FSPCA_PCQI_02.jpg" alt="PCQI의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">PCQI의 중요성</h3>
                                <p style="text-align:justify">
                                    식품에 대한 예방적 방제규정에 따르면, PCQI는 첫째, 식품안전계획을 수립하고 둘째, 예방적 방제에 대해 검증하고 셋째, 기록을 검토하고 넷째, 식품안전계획을 재분석하는 업무를 수행하거나 관리·감독하도록 되어있습니다.<br><br>
                                    이처럼 PCQI의 고용은 현재 식품에 대한 예방적 방제규정 요건을 충족시키기 위한 필수요건입니다. PCQI는 해당 식품 관련 시설의 고용인일 수도 있으며, 또는 식품안전계획 수립 시 외부 PCQI의 자문을 받을 수도 있고, 경우에 따라서는 2명 이상의 PCQI들이 식품안전계획을 수립하는 데 효과적일 수도 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso9001_03.jpg" alt="PCQI의 요건">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">PCQI의 요건</h3>
                                <p class="con_txt">
                                    한 명 또는 그 이상의 예방관리에 대해 자격을 갖춘 자는 반드시 다음을 실행하거나 감독해야 합니다
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>식품안전계획의 준비</li>
                                    <li><span class="bullet"></span>예방관리의 검증</li>
                                    <li><span class="bullet"></span>적용되는 식품의 생산 첫 90일 이후 실행된 검증에 대한 타당한 이유의 증명서류</li>
                                    <li><span class="bullet"></span>검증이 요구되지 않는다는 결정</li>
                                    <li><span class="bullet"></span>기록 검토</li>
                                    <li><span class="bullet"></span>모니터링 및 시정조치 기록의 검토가 7일 이내에 이루어지지 않은 것에 대한 타당한 이유의 증명서류</li>
                                    <li><span class="bullet"></span>식품안전계획의 재분석</li>
                                    <li><span class="bullet"></span>적용 식품의 생산 후 90일 이후, 예방관리의 특성과 해당 시설의 식품안전시스템에서의 역할에 적합하게 재분석이 완료되며, 추가적 예방관리가 검증될 수 있다는 결정</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/iso-iec1725-05.jpg" alt="IGC 인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC 인증원의 역량</h3>
                                <p class="con_txt">
                                    IGC인증원은 미국 FDA와 IAS로부터 전 세계 7번째, 국내에서는 최초로 FDA FSMA 3자 인증기관으로 인정받았습니다.
                                </p>
                                <div class="con_txt">
                                    <button onclick="window.open('https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification')" style="margin-top:7px;border-radius:30px;border:1px solid #0099ff;">
                                        &nbsp; <span style="color:#0099ff;margin:10px;">인정 정보 확인 : FDA 사이트 바로가기 </span> &nbsp;
                                    </button>
                                </div>
                                <p style="text-align:justify">
                                    FDA FSMA 3자 인증을 위하여 식품 생산기업은 필히 한 명 이상의 PCQI 전문가를 확보하여야 합니다. IGC는 FSPCA로부터 PCQI 양성과정과 FSVP 전문가 양성에 대한 교육권한 (Lead Instructor 지정)을 부여받아 FSMA 및 PCQI, FSVP 전문가 양성 교육 서비스를 제공합니다.
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

        </article><!--+++ / Tab Menu 컨텐츠 04, 20.05.25 탭컨텐츠 영역 종료 / +++-->
    </div><!------------ class="tab_con" 종료 ---------------->	
</div><!------ class="content_wrap" 종료 ----------->




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>