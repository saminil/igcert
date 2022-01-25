<?php
	include_once('./_common.php');
$g5['title'] = '교육/사회적 책임 및 부패관리';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    <!--+++ 20.05.13 탭메뉴/  +++-->
    <div class="tab_menu tab01">
        <ul>
            <!-- 처음 활성화 메뉴에 class="on" -->
            <li class="on"><a href="javascript:;">ISO 26000</a></li>
            <li><a href="javascript:;">ISO 37001 </a></li>
        </ul>
    </div>
    <!--+++ 20.05.11 탭메뉴/ 종료 +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	
    <!--+++ 20.05.13 탭컨텐츠 영역 시작 +++-->
    
    <div class="tab_con">
        <!--+++++ 컨텐츠 01  ISO 26000 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block;">	
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 26000 전문인력 양성 교육</h1>
                <h2 class="tit_cer fc_pointer">사회적 책임에 대한 가이던스 교육과정</h2>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_26000_01.jpg" alt="ISO 26000:2010 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 26000:2010 개요</h3>
                                <p style="text-align:justify">
                                    ISO 26000은 국제표준화기구(ISO)가 2010년 11월 1일 발표한 기업의 사회적 책임(CSR : corporate social responsibility)에 대한 국제표준입니다. 이는 사회의 모든 조직이나 기업이 의사결정 및 활동 등을 할 때 소속된 사회에 이익이 될 수 있도록 하는 책임을 규정한 것입니다.<br><br>
                                    구체적으로 산업계, 정부, 소비자, 노동계, 비정부기구(NGO) 등 7개 경제주체를 대상으로 지배구조, 인권, 노동관행, 환경, 공정거래, 소비자 이슈, 공동체 참여 및 개발 등 7대 의제를 사회적 책임 이슈로 규정하고, 이에 대한 실행지침과 권고사항 등을 담고 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso_26000_02.jpg" alt="ISO 26000 교육의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 26000 교육의 중요성</h3>
                                <p style="text-align:justify">
                                    ISO 26000은 법을 준수하는 것이 모든 조직의 기본 의무이며 사회적 책임의 필수 요소임을 인식하고 법적 준수를 넘어서도록 장려합니다.<br><br>
                                    ISO 26000의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 26000 교육 과정의 목적은 이 프로그램을 통해 교육받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.<br><br>
                                    교육 과정에서 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO 26000 교육 프로그램은 ISO 26000 규격을 기본으로 하고 있습니다.
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
        
        
        <!--+++++ 컨텐츠 02 ISO 37001 +++++-->
        <article>	
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 37001 전문인력 양성 교육</h1>
                <h2 class="tit_cer fc_pointer">반부패 경영시스템 교육과정</h2>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/edu_iso37001_01.jpg" alt="ISO 37001:2016 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 37001:2016 개요</h3>
                                <p style="text-align:justify">
                                    ISO 37001:2016은 부패방지 경영시스템의 구축, 구현, 유지 관리, 검토 및 개선을 위한 요구사항으로 이를 위한 가이드라인을 제공합니다.<br><br>
                                    ISO 37001:2016은 뇌물 수수에만 적용됩니다. 조직이 뇌물 수수를 예방, 감지 및 대응하고 방지 대책을 마련할 수 있도록 설계된 관리 시스템입니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/iso_37001_02.jpg" alt="ISO 37001 교육의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 37001 교육의 중요성</h3>
                                <p style="text-align:justify">
                                    ISO 37001의 수립을 통해 전 세계적으로 기업에 대한 긍정적인 인식을 이끌어 나갈 수 있으며 이해관계자들 간의 법규위반 리스크를 감소하여 신뢰를 높일 수 있는 효과를 기대할 수 있습니다.<br><br>
                                    부패방지를 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 37001 교육 과정의 목적은 이 프로그램을 이수한 심사원 및 개인의 능력이 적격하며, 인증원과 기업 및 산업 분야에 신뢰성을 제공하기 위함입니다.<br><br>
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