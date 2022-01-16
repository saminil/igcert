<?php
	include_once('./_common.php');
$g5['title'] = '교육 / 안전 보건';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    <!--+++ Tab Menu 20.07.29 탭메뉴 버튼 설정 시작 +++-->
    <div class="tab_menu tab01">
        <ul>
            <!-- 처음 활성화 메뉴에 class="on" -->
  	        <li class="on"><a href="javascript:;">OHSAS 18001</a></li>
  	        <li><a href="javascript:;">ISO 45001</a></li>
        </ul>
    </div>
    <!--+++ /Tab Menu 20.07.29 탭메뉴 버튼 설정 종료 +++-->
    
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	
    <!--+++ Tab Menu 20.07.29 탭메뉴 컨텐츠 영역 +++-->
    
    <div class="tab_con">	
        <!--+++++ Tab Menu 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block">
            <section class="business_type5" class="area">
                <h1 class="tit_num">OHSAS 18001 전문인력 양성 교육</h1>
                <h2 class="tit_cer fc_pointer">안전보건경영시스템 교육과정</h2>

                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_ohsas1800_01.jpg" alt="OHSAS 18001:2007 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">OHSAS 18001:2007 개요</h3>
                                <p style="text-align:justify">
                                    조직 내부의 안전 관련 위험성을 현저히 줄이기 위해 OHSAS 18001 인증은 모든 기업에 적합합니다. 안전보건경영시스템은 가장 잘 알려진 산업 안전 경영 시스템으로 인정받고 있습니다. 이 인증을 통해 귀사 임직원의 건강과 안전이 귀사의 우선 사항이라는 것을 입증할 수 있습니다.<br><br>
                                    안전보건경영시스템이 국제표준(ISO 45001)으로 채택됨에 따라, OHSAS 18001은 전환 가능 기간(2018.3.12~2021.3.11)이 지나면 효력을 잃게 됩니다. 따라서 OHSAS 18001 인증기업은 그전에 ISO 45001로 전환이 필요합니다. IGC는 전환 및 신규 인증을 돕기 위하여 최적의 인증 서비스를 제공하고 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>

                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_ohsas1800_03.jpg" alt="OHSAS 18001 교육의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">OHSAS 18001 교육의 중요성</h3>
                                <p style="text-align:justify">
                                    OHSAS 18001은 품질, 환경 및 기타 경영시스템과 더불어 핵심적인 경영시스템 중 하나입니다. 조직 전체에 최적의 작업 환경을 만들어 위험요소를 파악하고 이를 제대로 통제할 수 있도록 관리할 수 있습니다.<br><br>
                                    표준 OHSAS 18001의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. OHSAS 18001 심사원 인증 과정의 목적은 이 프로그램을 통해 인증받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.<br><br>
                                    심사원 과정의 일환으로 당사는 적격성을 정의하는 주요능력, 지식 그리고 경험을 반영하는 요구사항에 대비하여 평가를 할 것입니다. 교육 프로그램은 심사 주요 표준에 기초합니다.
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

        </article><!--+++ / Tab Menu 컨텐츠 01 종료 / +++-->


        <!--+++++ / Tab Menu 컨텐츠 02 시작 / +++++-->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 45001 전문인력 양성 교육</h1>
                <h2 class="tit_cer fc_pointer">안전보건경영시스템 교육과정</h2>

                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_45001_02.jpg" alt="ISO 45001:2018 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 45001:2018 개요</h3>
                                <p style="text-align:justify">
                                    ISO 45001은 안전보건경영시스템으로, 기존의 OHSAS 18001:2007 규격이 2018년 3월 ISO 45001로 대체되었습니다. 이는 ISO 9001 및 14001 관리 시스템과 호환되는 산업 보건 및 안전 관리 시스템을 통해 보건 및 안전 관리 책임을 관리하기 위한 프레임워크를 제공합니다. 이 표준은 국제적 사용을 위해 개발되었으며 조직이 보건 및 안전 위험을 제어하고 성능을 향상하도록 지원합니다.<br><br>
                                    효과적인 안전보건 관리시스템은 직원 및 기타 이해 관계자에 대한 위험을 줄이고 법규 준수를 지원합니다. 기존 OHSAS 18001 규격이 2021년 3월 만료됨에 따라 신규 고객의 경우 2020년 3월부터는 ISO 45001로 진행되어야 하고, 기존 OHSAS 18001 인증 고객은 ISO 45001로 전환되어야 합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>

                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_45001_01.jpg" alt="ISO 45001 교육의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 45001 교육의 중요성</h3>
                                <p style="text-align:justify">
                                    효과적인 안전보건 관리시스템은 직원 및 기타 이해 관계자에 대한 위험을 줄이고 법규 준수를 지원합니다.<br><br>
                                    표준 ISO 45001의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 45001 심사원 인증 과정의 목적은 이 프로그램을 통해 인증받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.<br><br>
                                    심사원 과정의 일환으로 당사는 적격성을 정의하는 주요능력, 지식 그리고 경험을 반영하는 요구사항에 대비하여 평가를 할 것입니다. 교육 프로그램은 심사 주요 표준에 기초합니다.
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

        </article><!--+++ / Tab Menu 컨텐츠 02 종료 / +++-->
    </div><!-----Tab Menu 20.07.29 class="tab_con" 종료 ------->
</div> <!-----// class="content_wrap" 종료 //------------>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>