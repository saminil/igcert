<?php
	include_once('./_common.php');
$g5['title'] = '시험/건축자재';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
		<h1 class="tit_cer fc_pointer">건축자재 인증시험</h1>
		<p class="outline">
            경쟁이 치열한 건축자재 산업에서 제조업체와 공급업체는 제품의 품질과 가격에 균형을 맞추는 동시에 국내 및 국제 건축 규격 및 법률을 준수하여 법률적인 위험을 피하고 건설 공기를 단축하여 프로젝트 지연을 예방해야 합니다.<br><br>
            저희 IGC는 여러 수출 시장의 다양한 요구사항을 만족할 수 있는 원스톱 서비스를 제공하고 있습니다.
        </p>

        <ul class="content">
			<li><!-- content 01 -->
				<dl>
				    <dt class="img_area">
						<img src="images/clinicaltest_construction_01.jpg" alt="건축자재 인증 시험이란?">
					</dt>
					<dd class="txt_area">
				        <h3 class="con_tit">건축자재 인증 시험이란?</h3>
						<p style="text-align:justify">
                            CPR(Construction products regulation(EU) No305/2013)에 따라 건축자재 제조업체는 유럽표준(hEN)또는 유럽 기술평가(ETA)가 적용되는 제품에 CE 마크를 적용해야 합니다.<br><br>
                            건축자재 인증 시험이란, 건물 및 토목공사를 포함하는 건축물의 영구적인 일부분을 구성하는 모든 제품을 의미합니다.<br><br>
                            건축자재 품목에는 환기 구조 설비, 플라스틱 연도, 천장복사 냉난방 패널, 문, 창문관련 제품 및 단열재류, 바닥재류, 시멘트류, 모르타르, 타일류, 접착제류, 회전문, 화재감지기류, 닥트, 밸브 및 캡, 파이프, 누수방지설비, 탱크, 목재, 골재 및 충진재, 구조용 베어링 토목 섬유등 건물 및 토목공사 목적물을 포함하는 모든 제품을 포함합니다.
                        </p>
					</dd>
				</dl>			
			</li>
			
			<li><!-- content 02 -->
				<dl>
					<dt class="img_area">
						<img src="./images/clinicaltest_construction_02.jpg" alt="건축자재 인증 시험 종류">
					</dt>
					<dd class="txt_area">
                        <h3 class="con_tit">건축자재 인증 시험 종류</h3>
					    <ul class="list_st">
					        <li><span class="number">1. </span>벽체 시험 및 인증</li>
					        <li><span class="number">2. </span>지붕체 및 보행데그 시험</li>
					        <li><span class="number">3. </span>내부 표면재 시험 및 인증</li>
					        <li><span class="number">4. </span>배관 제품 시험</li>
					        <li><span class="number">5. </span>내후성 및 시란트 시험</li>
					        <li><span class="number">6. </span>창문과 문 시험</li>
                        </ul>
					</dd>
				</dl>
			</li>
			
			<li><!-- content 03 -->
				<dl>
				    <dt class="img_area">
						<img src="./images/clinicaltest_construction_03.jpg" alt="건축자재 인증의 중요성">
					</dt>
					<dd class="txt_area">
				        <h3 class="con_tit">건축자재 인증의 중요성</h3>
						<p class="con_txt">
                            유럽경제지역(EEA)내의 모든 건축 제품은 EU 건축자재 규정을 준수해야 합니다. 이 법은 유럽에서 거래 또는 판매되는 모든 제품의 경우 해당 제품에 유럽조화규격이 있을 때 CE 마크를 부착해야 한다고 규정하고 있습니다.<br><br>
                            이 CE마크는 반드시 제품이 모든 최종 용도에 적합함을 의미하지는 않지만 제조업체에서 제조할 때 해당 제품이 성능 선언(DoP)과 일치함을 나타냅니다.<br><br>
                            또한 CE 마크가 있는 건축 제품은 EEA 전체에서 거래할 수 있습니다.
                        </p>
                        <div>
                            <img src="./images/ce-EEA.png" alt="CE 마크가 있는 건축 제품은 EEA 전체에서 거래" style="display:block;margin: 0px auto;">
                        </div>
					</dd>
				</dl>			
			</li>
			
			<li><!-- content 04 -->
				<dl>
				    <dt class="img_area">
						<img src="./images/clinicaltest_construction_04.jpg" alt="왜 IGC인가?">
					</dt>
					<dd class="txt_area">
				        <h3 class="con_tit">왜 IGC인가?</h3>
						<p style="text-align:justify">
                            IGC는 제조사들이 경쟁사보다 더 혁신적이면서도, 더 높은 효율성과 지속가능성을 보유한 제품을 개발하고, 제품을 신속하고 안전하게 시장에 출시하기 위해 겪게 되는 지속적인 압력을 잘 알고 있습니다.<br><br>
                            IGC는 시험 및 인증 업체로서 건축 업계 최고의 전문성을 갖춘 서비스를 제공합니다.<br><br>
                            당사는 CE마크를 획득하는 전 과정을 지원하는데 필요한 역량과 책임을 보유하고 있으며 CPR 요구사항에 따라 제품 인증, 공장 생산 제어 인증, 연구실 테스트를 제공할 수 있습니다.<br><br>
                            IGC는 광범위한 분야에서 폭넓은 건축 제품에 대한 포괄적인 시험 서비스를 제공합니다.<br><br>
                            IGC의 로고는 고객이 변화하는 시장과 트렌드에 맞는 비즈니스를 개척하도록 도와드립니다. 이를 통해 IGC의 고객이 경쟁사와 차별화하고 제품에 대한 신뢰성과 안정성을 입증하며, 시장에서 제품의 효율성과 신뢰도를 강화할 수 있습니다.
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