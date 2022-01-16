<?php
	include_once('./_common.php');
$g5['title'] = '시험/생물학적 시험';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>




<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #11A6A6 }/* 상세페이지 포인트 컬러 */
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

    <!--+++ 20.05.19 탭메뉴/ 시험 /식품영양 분석 시작 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">식품 미생물 시험</a></li>
			<li><a href="javascript:;">위생테스트</a></li>
		</ul>
	</div>
	<!--+++ 20.05.19 탭메뉴/ 시험 /식품영양 분석 종료 +++-->
 
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.19 탭컨텐츠 영역 시작 +++-->
	
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	    <article style="display:block">
            <section class="business_type5" class="area">
                <h1 class="tit_cer fc_pointer">식품 미생물 시험</h1>
                <p class="outline">
                    FDA의 식품 안전 요구사항은 식품별로 모두 다르기 때문에 제조업자는 식품마다 FDA에서 요구하는 사항을 잘 파악하여 위해요소 분석을 하여야 합니다. 이러한 위해요소를 분석하기 위해선 생물학적, 화학적 및 물리적 위해요인을 확인하는 단계를 거쳐야 합니다.<br><br>
                    IGC의 식품 미생물 시험을 통해 국내·외 식품업체는 위해요인 분석과 이를 기반으로 효과적인 식품안전체계를 구축할 수 있습니다.
                </p>
                
                <div class="tit_img">
                    <img src="images/clinicaltest_Nutrition&analysis_07.jpg" alt="생물학적 시험 항목" style="max-width: 100%;height:auto;">
                    <span style="display:block;text-align:center;">생물학적 시험 항목</span>
                </div>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
						<dl>
							<dt class="img_area">
								<img src="./images/clinicaltest_Nutrition&analysis_04.jpg" alt="ISO/IEC 17025 인정 시험기관">
							</dt>
							<dd class="txt_area">
							    <h3 class="con_tit">ISO/IEC 17025 인정 시험기관</h3>
								<p class="con_txt">
								    미국의 시험소 인정기관인 IAS는 식품 시험소 인정 요구사항을 언급한 Guideline을 발간하였고, Guideline에서는 ISO/IEC 17025에 따른 인정 획득과 인정 시 사용하는 시험규격에 대해 미국 국가 규격 및 국제 공인규격의 사용을 요청하고 있습니다. 이에는 AOAC, BAM 등이 사용됩니다.<br><br>
                                    IGC의 식품 시험소는 AOAC, BAM에 의거한 ISO/IEC 17025 인정을 취득하여 보다 신뢰성 있는 시험 서비스를 제공합니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>E. coli</li>
                                    <li><span class="bullet"></span>E. coli / Total Coliform Counts</li>
                                    <li><span class="bullet"></span>Salmonella Sp.</li>
                                    <li><span class="bullet"></span>Listeria Sp. / Listeria monocytogenes</li>
                                    <li><span class="bullet"></span>Staphylococcus aureus</li>
                                    <li><span class="bullet"></span>Aerobic Plate Counts</li>
                                    <li><span class="bullet"></span>Yeast and Mold</li>
                                    <li><span class="bullet"></span>Bacillus cereus</li>
                                </ul>
							</dd>
						</dl>
					</li>
					
					<li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/clinicaltest_Nutrition&analysis_05.jpg" alt="IGC 인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC 인증원의 역량</h3>
                                <ul class="list_st">
                                    <li>
                                        <span class="bullet"></span>IGC는 고객사의 인증 획득에 필요한 시험검사 업무를 지원하고자 시험소를 운영하고 있습니다.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>의료기기, 전기전자 제품 및 기계류에 대한 시험업무를 시작으로 지속적인 발전을 달성하여 식품에 대한 시험 업무로 영역을 확대하였습니다.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>IAS로부터 ISO/IEC 17025 인정을 취득한 IGC 식품 시험소는 국제적으로 인정된 검사방법인 AOAC 및 BAM에 따라 FDA FSMA 3자 인증을 위한 식품 안전 및 생산현장 안전성 시험 서비스를 제공하고 있습니다.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>IGC LAB에서 발행하는 성적서는 ilac과 MRA가 체결된 인정기관인 IAS로부터 인정을 받은 시험기관의 성적서이므로, IGC LAB의 성적서는 전 세계 어디에서도 통용될 수 있습니다.
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
                        <li><p><em><strong>01</strong></em><span>CE LVD/EMC 인증</span></p></li>
                        <li><p><em><strong>02</strong></em><span>유라시아 인증</span></p></li>
                        <li><p><em><strong>03</strong></em><span>제품 등록 (CPNP, FDA)</span></p></li>
                        <li><p><em><strong>04</strong></em><span>시험 및 인증을 위한 기술 지원 서비스 제공</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>	
        </article><!-------+++++++ / 시험/식품영양 분석 종료 /++++++++++-------------->  
   
        <!-------++++++ / 시험 > 위생테스트(Sanitation test) [ Insert ] 시작 / ++++++-------> 
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_cer fc_pointer">위생테스트</h1>

                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/clinicaltest_Sanitationtest_01.jpg" alt="위생 테스트 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">위생 테스트 개요</h3>
                                <p style="text-align:justify">
                                    미국으로 식품을 수출하는 해외 업체는 미국 FDA 식품안전현대화법(FSMA) 요구사항에 따라 식품 안전 시스템을 운용하고 있음을 입증해야 합니다. 이는 ‘FSMA 인증을 받으려는 식품 생산 시설은 FDA 또는 ISO/IEC 17025 인정 시험소에서 현장 위생 테스트를 진행해야 한다’는 요구사항을 포함합니다.<br><br>
                                    미국 FDA 실사단에 의해 실사 진행 시 environment swab test의 방법, 미생물학적 검사방법, 빈도 등을 점검하기 때문에 수출업체는 위생 테스트를 실시하여야 합니다. ISO/IEC 17025 인정 시험소인 IGCLAB에서 제공하는 위생 테스트를 통해 이를 대비하고 미국 FDA 규정을 준수함을 입증할 수 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>

                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/clinicaltest_Sanitationtest_02.jpg" alt="위생 테스트의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">위생 테스트의 중요성</h3>
                                <p style="text-align:justify">
                                    2011년 미국에서 제정되어 본격적으로 시행중인 FSMA(식품현대안전화법)는 식품에 영향을 끼치는 위해요소 중 특히 생물학적 위해요소의 관리를 강조하고 있습니다.<br><br>
                                    FSMA는 대상이 되는 모든 식품 제조업체에 식품예방관리(HARPC)를 적용합니다.<br><br>
                                    HARPC는 식품공급에 대한 잠재적 위험을 식별하고 방지하기 위해 기존 GMP와 HACCP 과는 다른 접근방식을 취하며, 특히 식품 제조과정에서의 생물학적 위해요소 관리를 강조하고 있습니다.<br><br>
                                    또한 FSMA 예방관리 요구사항에는 알레르기 유발물질 관리, 위생관리 등을 규정하고 있으며 이에 따라 위생 테스트에 대한 철저한 준비가 요구됩니다.<br><br>
                                    IGC에서 제공하는 위생 테스트를 통해 이러한 요구사항을 충족할 수 있습니다.<br><br>
                                    IGC는 다양한 인증 및 시험 서비스 제공 경험과 전문성을 바탕으로 식품 시설에 요구되는 사항에 대한 맞춤 서비스를 지원하고 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>

                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/clinicaltest_Sanitationtest_03.jpg" alt="IGC 인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC 인증원의 역량</h3>
                                <ul class="list_st">
                                    <li>
                                        <span class="bullet"></span>IGCLAB은 고객사의 해외시장 진출을 지원하기 위한 다양한 서비스를 지원하고 있습니다.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>IGCLAB에서 발행하는 성적서는 ILAC과 MRA가 체결된 인정기관인 IAS로부터 인정을 받은 시험기관의 성적서로 전 세계 어디에서도 통용될 수 있습니다.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>IGC의 FSMA 제 3자 인증 또는 FSVP 인증 진행 시 제품에 대한 적격성 제시로서 성적서를 활용함으로써 식품 시설의 해외 진출을 위한 서비스를 편리하게 제공받을 수 있습니다.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>IGCLAB은 고객사의 해외시장 진출을 지원하기 위한 다양한 서비스를 지원하고 있습니다.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>IGCLAB에서 발행하는 성적서는 ILAC과 MRA가 체결된 인정기관인 IAS로부터 인정을 받은 시험 성적서로 전 세계 어디에서도 통용될 수 있습니다.
                                    </li>
                                    <li>
                                        <span class="bullet"></span>IGC인증원에서 제공하는 FSMA 제 3자 인증 또는 FSVP 인증 진행 시 IGC가 발행한 시험 성적서를 활용할 수 있습니다.
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
                        <li><p><em><strong>01</strong></em><span>CE LVD/EMC 인증</span></p></li>
                        <li><p><em><strong>02</strong></em><span>유라시아 인증</span></p></li>
                        <li><p><em><strong>03</strong></em><span>제품 등록 (CPNP, FDA)</span></p></li>
                        <li><p><em><strong>04</strong></em><span>시험 및 인증을 위한 기술 지원 서비스 제공</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>	
           
        </article><!-----+++++ / 심사원인증 > Sanitation test 종료 / +++++-----> 
    </div><!-----+++++ / tab_con 종료 / +++++----->
</div><!-----+++++ / content_wrap 종료 / +++++----->




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>