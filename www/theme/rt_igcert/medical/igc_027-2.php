<?php
	include_once('./_common.php');
$g5['title'] = '시험/기계';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #11A6A6 }/* 상세페이지 포인트 컬러 */
    .point_blk { display: block;color: #111;font-weight: 500;margin: 0 0 10px }/* 상세페이지 폰트스타일 1 */
	.content_wrap { width: 100%;max-width: 1200px;margin: 0 auto;font-size: 1rem;font-weight: 400;line-height: 1.6 }/* 컨텐츠 중간 그리드 지정 */
    .content_wrap .business_type5 { margin: 0 0 100px }
    
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
    
    .content li .txt_area .con_sub_tt { display: block;font-size: 1.1rem;font-weight: 500;margin: 0 0 10px }/* 텍스트 영역 부제목 */
    
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

    <section class="business_type5" class="area">
		<h1 class="tit_cer fc_pointer">기계 안전 시험</h1>
        <p class="outline">
            많은 유형의 제품들은 유럽 연합, 미국 등의 다른 주요 시장으로 수출되거나 수입하기 위하여 기계적 안전성 시험이 요구됩니다. 기계적 고장은 사용자의 부상이나 사망을 초래할 수 있기에 사용자의 안전을 보장하기 위해 그 중요성이 부각되고 있습니다.<br><br>
            기계류 제조업체는 기계류에 적용되는 건강 및 안전 요구사항을 결정하기 위하여 위험성 평가를 같이 수행하여야 합니다. 위험을 감소시키고 보호조치 및 예방조치를 통해 위험요인을 제거하는 것이 중요합니다.<br><br>
            기계적 안전 시험에는 제품의 모양과 설계, 사용자의 부상을 초래할 수 있는지 여부에 대한 평가 및 사용자의 신체부위의 끼임, 조임, 빠짐 사고 등의 발생 여부에 대한 평가를 포함하고 있습니다. 또한 구조적으로 제품의 일반적인 사용환경에서 강도 및 내구성을 평가하고, 특정 제품의 특성에 대한 시험이 포함됩니다. 완제품에 사용되는 나사와 경첩과 같은 핵심 부품의 경우에도 안전 시험을 포함하여야 합니다.
        </p>
        
        <ul class="content">
            <li><!-- content 01 -->
				<dl>
					<dt></dt>
					<dd class="txt_area" style="width:90%;margin:0 auto">
						<h3 class="con_tit" style="text-align:center">IGC 시험소 소개</h3>
                        <p class="con_txt">IGC의 시험소는 미국 인정기구인 IAS로부터 ISO/IEC 17025  인정을 받은 시험소로 기계류 시험 및 시험성적서를 발행하고 있습니다.</p>
                        <div style="margin: 0 auto 50px">
                            <div style="text-align:center">
                                <img src="images/clinicaltest_machinery_01_1.png" alt="IGC인증원의 시험소 Scope">
                                <span style="display:block;text-align:center;">자세한 사항은 IGC 시험소로 문의주시면 답변 도와드리겠습니다.</span>
                            </div>
                        </div>
					</dd>
				</dl>			
			</li>
     
            <li><!-- content 02 -->
				<dl>
				    <dt class="img_area">
						<img src="images/clinicaltest_machinery_02.jpg" alt="만능재료 시험기 UTM">
					</dt>
					<dd class="txt_area">
				        <h3 class="con_tit">만능 재료 시험기 UTM</h3>
						<p class="con_txt">
                            인장 또는 압축 모드로 정적 시험을 할 때 가장 일반적으로 사용되며, 푸쉬풀 시험기(Push-pull Tester)로도 알려져 있습니다. 인장, 압축, 전단, 굴곡, 박리, 인열, 사이클, 그리고 굽힘 시험을 실시할 수 있습니다.
                        </p>
                        <ul class="list_st">
					        <li><span class="bullet"></span>측정항목: 인장, 압축, 밴딩 강도, 굴곡강도, 파괴 강도 등</li>
					        <li><span class="bullet"></span>용량(N): 10KN (1 ton)</li>
					        <li><span class="bullet"></span>분해능: 1/100,000</li>
					        <li><span class="bullet"></span>Test Speed: 1~500mm/min</li>
                        </ul>
					</dd>
				</dl>			
			</li>
      
            <li><!-- content 03 -->
				<dl>
				    <dt class="img_area">
						<img src="images/clinicaltest_machinery_03.jpg" alt="열 충격 시험기(Thermal Shock Tester)">
					</dt>
					<dd class="txt_area">
				        <h3 class="con_tit">열 충격 시험기 (Thermal Shock Tester)</h3>
						<p class="con_txt">
                            열 충격 시험은 제품이 갑작스런 온도변화에 어떤 영향을 받는지 평가하는 시험입니다. 시험은 실온에서 시작하여 규정된 횟수의 Cycle을 반복하는데, 아주 낮은 온도 (또는 고온)와 아주 높은 온도 (또는 저온)에서 비교적 짧은 시간 노출 되었다가 실온으로 돌아옵니다. 최종 Cycle을 마치면, Case와 Lead / Terminal 등을 대상으로 외관검사를 실시하거나 확대한 상태로 Marking의 정상 유무를 확인하며, 확인이 어렵거나 Case, Terminal 등에 손상이 발견되면 Failure로 판정합니다.
                        </p>
                        <ul class="list_st">
					        <li><span class="bullet"></span>장비사양</li>
					        <li>&nbsp; &nbsp; - Sample Basket: 350x350x350mm</li>
					        <li>&nbsp; &nbsp; - Temp Tange: -40℃ ~ 125℃</li>
					        <li><span class="bullet"></span>적용규격</li>
                            <li>&nbsp; &nbsp; - IEC 60068 2-14 Test N: Change of temperature</li>
                        </ul>
					</dd>
				</dl>			
			</li>
      
            <li><!-- content 04 -->
				<dl>
				    <dt class="img_area">
						<img src="images/clinicaltest_machinery_04.jpg" alt="항온 항습조">
					</dt>
					<dd class="txt_area">
				        <h3 class="con_tit">항온항습조</h3>
						<p class="con_txt">
                            고온, 고습 환경하에서의 부품 및 장비 등의 내구성을 확인할 수 있는 장비입니다.
                        </p>
                        <ul class="list_st">
					        <li><span class="bullet"></span>항온, 항습조 사양</li>
					        <li>&nbsp; &nbsp; - 온도: -40℃ ~ 150℃</li>
					        <li>&nbsp; &nbsp; - 습도: 30~98%</li>
					        <li>&nbsp; &nbsp; - Chamber Size: 500x500x500mm</li>
					        <li><span class="bullet"></span>적용규격</li>
                            <li>&nbsp; &nbsp; - IEC 60068 2-78 (Damp Heat Test)</li>
                        </ul>
					</dd>
				</dl>			
			</li>
      
            <li><!-- content 05 -->
				<dl>
					<dt></dt>
					<dd class="txt_area" style="width:90%;margin:0 auto">
						<h3 class="con_tit" style="text-align:center">CE Machinery Directive(2006/42/EEC)</h3>
                        <div class="con_txt_2">
                            <span class="con_sub_tt fc_pointer">1. CE Machinery Directive(2006/42/EEC)의 구성</span>
                            <ul class="list_st">
                                <li><span class="bullet"></span>서 론 : 작성에 해당되는 지침과 전반적인 해설 및 유의사항</li>
                                <li><span class="bullet"></span>본 문 : 지침을 적용하기 위한 조문, 가맹국에 대한 법적 의무나 권한</li>
                                <li><span class="bullet"></span>Annex I : 설계 및 제조에 관한 건강과 안전의 필수 요구사항</li>
                                <li><span class="bullet"></span>Annex II : 적합성 선언서에 관한 사항</li>
                                <li><span class="bullet"></span>Annex III : CE – Marking에 관한 사항</li>
                                <li><span class="bullet"></span>Annex IV : Notified Body로부터 EU 형식시험을 받아야 하는 기계류 목록</li>
                                <li><span class="bullet"></span>Annex V : 적합성 선언 및 기술파</li>
                                <li><span class="bullet"></span>Annex VI : EU 형식시험</li>
                                <li><span class="bullet"></span>Annex VII : Notified Body 기준</li>
                            </ul>
                        </div>
                        <div class="con_txt_2">
                            <div class="con_txt">
                                <span class="con_sub_tt fc_pointer">2. CE Machinery Directive(2006/42/EEC) 핵심 요구사항</span>
                                CE Machinery Directive(2006/42/EEC)는 기계가 안전하게 사용되고 있는지, 잔여 위험이 남아있는 경우 사용자에게 올바르게 경고하고 있는지에 대한 내용을 문서화한 것이며 제조자가 준수하여야 하는 문서화 요구사항은 MD의 부속서 I의 필수 보건 및 안전 요구 사항에 있습니다.<br><br>
                                필수 요구사항은 다음과 같습니다.
                            </div>
                            <div class="con_txt">
                                <ul class="list_st">
                                    <li><span class="number">1. </span>안전에 대한 원칙, 취급을 용이하게 하는 설계, 인체 공학, 제어 시스템, 기계적 위험으로 보호, 전기 및 기타 에너지 온도, 화재 및 폭발 등의 기타 위험, 소음 방출 등 모든 유형의 기계에 공통적인 일반사항, 진동, 방사선 및 유해물질, 유지보수, 청소, 정보의 표시 및 경고</li>
                                    <li><span class="number">2. </span>식품, 화장품 및 의약품 등과 같은 특정 등급의 기계류에 적용되는 요구사항</li>
                                    <li><span class="number">3. </span>기계의 이동성으로 인한 위험을 상쇄하기 위한 요구사항</li>
                                    <li><span class="number">4. </span>리프트 작업의 위험을 상쇄하기 위한 요구사항</li>
                                    <li><span class="number">5. </span>지하작업용 기계에 대한 요구사항</li>
                                    <li><span class="number">6. </span>기계 리프트 인력에 대한 요구사항</li>
                                </ul>
                            </div>
                            <div class="con_txt">
                                필수 준비문서는 다음과 같습니다.
                            </div>
                            <div class="con_txt">
                                <ul class="list_st">
                                    <li><span class="bullet"></span>매뉴얼: 사용자 매뉴얼, 서비스매뉴얼 (전문가용)</li>
                                    <li><span class="bullet"></span>Parts List (승인부품의 인증서 사본: CoC , AoC , DoC , Type approval Certificates)</li>
                                    <li><span class="bullet"></span>Catalogues: 완제품 및 주요부품류</li>
                                    <li><span class="bullet"></span>도면: 제품, 조립도, 주요부 조립도</li>
                                    <li><span class="bullet"></span>유압, 공압, 전기 관련 자료</li>
                                </ul>
                            </div>
                        </div>
                        <div class="con_txt_2">
                            <div class="con_txt">
                                <span class="con_sub_tt fc_pointer">3. 인증절차</span>
                                다음과 같이 4가지의 방식이 있습니다.
                            </div>
                            <div class="con_txt">
                                <ul class="list_st">
                                    <li><span class="number">A)</span>Annex 4에 기술된 고 위험군 기계류<br>승인기관 (Notified Body : NB)을 통한 인증취득</li>
                                    <li><span class="number">B)</span>Annex 4가 아닌 일반 기계류 (Annex Ⅱ A)<br>자가 적합성 선언(완성품에 대한 적합성의 입증으로써 CE 마크를 부착)으로 취득</li>
                                    <li><span class="number">C)</span>기계 부품류에 관한 자기 적합성 선언(Annex Ⅱ B)<br>자가 적합성 선언(완성품에 대한 적합성의 입증으로써 CE 마크를 부착)으로 취득</li>
                                    <li><span class="number">D)</span>안전 부품류에 관한 자기 적합성 선언 (Annex Ⅱ C)<br>자가 적합성 선언(완성품에 대한 적합성의 입증으로써 CE 마크를 부착)으로 취득</li>
                                </ul>
                            </div>
                            <p>※ 참고 : B)와 C)의 경우, 자기 적합성 선언서를 작성하고 관련 기술문서를 보관함으로써 규격에 적합함을 선언할 수 있지만 해당제품이나 포장 등에 CE 마크를 부착할 수 없습니다.</p>
                        </div>
					</dd>
				</dl>			
			</li>
       
            <li><!-- content 06 -->
				<dl>
					<dt class="img_area">
						<img src="./images/clinical_06constructionmaterials_01.jpg" alt="IGC인증원의 역량">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">IGC인증원의 역량</h3>
						<p style="text-align:justify">
                            IGC의 시험소는 광범위한 기계적 위험에 대한 기계적 안전 시험을 제공하며 고객사 제품의 해외시장 진출을 지원하기 위해 미국의 인정기구 IAS로부터 기계류 시험업무에 대한 인정을 획득하였습니다(TL-799).<br><br>
                            IGC의 시험소는 제조업체의 세계 시장 진출을 위해 필요한 법적 요구사항을 준수할 수 있도록 지원합니다.
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
                <li><p><em><strong>01</strong></em><span>CE LVD/EMC 인증</span></p></li>
                <li><p><em><strong>02</strong></em><span>유라시아 인증</span></p></li>
                <li><p><em><strong>03</strong></em><span>제품 등록 (CPNP, FDA)</span></p></li>
                <li><p><em><strong>04</strong></em><span>시험 및 인증을 위한 기술 지원 서비스 제공</span></p></li>
            </ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
  
</div> <!----------++++++++ content_wrap 종료 +++++++++----------------->



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>