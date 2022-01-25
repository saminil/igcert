<?php
	include_once('./_common.php');
$g5['title'] = '사회적 책임 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #1F88E5 }/* 상세페이지 포인트 컬러 */
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
        <h1 class="tit_num"><span>SA 8000</span> 인증</h1>
        <h2 class="tit_cer fc_pointer">사회적 책임 인증</h2>		
		<p class="outline">
            최근 전 세계적으로 기업 활동과 정책이 윤리적이고 사회 규범적 영향을 고려하는 것에 관한 관심과 개발도상국과 같은 제품이 생산되는 장소 및 작업 환경에 관한 관심이 높아지고 있습니다. 이러한 사회적 문제에 관심이 있는 소비자들 또한 증가하고 있습니다.<br><br>
            직원을 포함한 비정부 기구, 투자 분석가 및 다른 이해 관계자들은 공정하고 공평한 작업 환경과 투명한 업무 관행을 보장하기 위하여 점점 더 기업의 노력을 평가하고 있습니다. 이러한 환경은 기업이 사회적 책임을 보이기 위해 더 많이 요청될 것임을 의미합니다.
		</p>

		<ul class="content">
			<li><!-- content 01 -->
				<dl>
					<dt class="img_area">
						<img src="./image/sa8000_01.png">
					</dt>
					<dd class="txt_area">
					    <h3 class="con_tit"><span>SA 8000 인증이란</span></h3>
					    <p style="text-align:justify">
                            SA 8000 인증은 강제 및 아동 노동, 직장 내 건강 및 안전, 집회의 자유 및 단체 협상, 차별, 징계 관행, 업무 시간, 상여 및 경영 시스템을 비롯한 제반 문제를 다룹니다.<br>
                            SA 8000은 전 세계적으로 작업장 표준을 세울 뿐만 아니라 국제 노동 기구, 세계 인권 선언 및 유엔 아동 권리 협약을 포함한 기존 국제 협정을 포괄합니다.<br><br>
                            이 표준은 1989년에 경제 최우선 협의회(CEP, Council on Economic Priorities) 산하 기관인 사회적 책임 국제기구(SAI, Social Accountability International)에 의하여 개발되었으며, 세계적으로 가장 인정받는 독립적인 작업장 표준으로 간주되고 있습니다. 작업 환경의 개선을 위한 표준으로 범위, 산업 및 장소에 관계없이 전 세계 모든 규모의 회사에 적용될 수 있습니다.<br><br>
                            SA8000은 국제 노동 기구 (ILO)의 세계 인권 선언과 유엔 (UN)의 아동의 권리에 관한 국제 협정을 기반으로 합니다. 이 표준은 아동 노동, 강제 노동, 보건 및 안전, 결사의 자유 및 단체 교섭권, 차별, 징계 관행, 근로 시간, 보수 및 공급망 모니터링 시스템과 같은 경영 시스템, 외부 커뮤니케이션 및 기타 정책 등과 같은 다양한 내용을 포함하고 있습니다.
                        </p>
					</dd>
				</dl>
			</li>
			
			<li><!-- content 02 -->
				<dl>
				    <dt class="img_area">
						<img src="./image/ISO15378-2017_000.jpg" alt="SA 8000 요구사항">
					</dt>
					<dd class="txt_area">
				        <h3 class="con_tit">SA 8000 요구사항</h3>
						<p class="con_txt">
                            SA 8000 표준은 기존 ISO 표준과 동일하게 ISO 17021-1 표준을 기반으로 하며, High level structure가 아닌 독자적인 형태로 구성되어 있습니다.<br><br>
                            SA 8000의 목적은 UN 인권선언, ILO 및 기타 국제 노동법 등에 따라 심사 가능한 표준을 제공하여 조직의 모든 직원에게 권한을 부여하고 보호하는 것입니다. <br><br>
                            SA 8000의 다음 9요소에 대한 요구사항은 올바른 구현, 모니터링 및 시행의 핵심이 됩니다. 이것에 대한 경영시스템은 조직이 SA 8000을 완벽하고 지속적으로 준수하면서 개선할 수 있도록 하며 사회적 성과의 지표가 됩니다.<br><br>
                            SA 8000의 요소는 다음과 같습니다 :
                        </p>
                        <ul class="list_st">
					        <li><span class="number">1. </span>아동 근로자</li>
					        <li><span class="number">2. </span>강제 노동</li>
					        <li><span class="number">3. </span>건강과 안전</li>
					        <li><span class="number">4. </span>노동 조합 및 단체 교섭권</li>
					        <li><span class="number">5. </span>차별</li>
					        <li><span class="number">6. </span>근무시간</li>
					        <li><span class="number">7. </span>징계 사례</li>
					        <li><span class="number">8. </span>보수</li>
					        <li><span class="number">9. </span>경영시스템</li>
                        </ul>
					</dd>
				</dl>			
			</li>
			
			<li><!-- content 03 -->
				<dl>
					<dt></dt>
					<dd class="txt_area" style="width:90%;margin:0 auto">
						<h3 class="con_tit" style="text-align:center">SA 8000 인증 프로세스</h3>
                        <div style="margin: 0 auto 50px">
                            <div>
                                <img src="./image/sa8000_04.png" alt="SA 8000 인증 프로세스">
                                <span style="display:block;text-align:center;">IGC의 SA 8000 인증 프로세스는 상기 그림과 같습니다.</span>
                            </div>
                        </div>
                        
                        <p class="con_txt">SA 8000 인증을 위해서는 다음 사항을 준비하여야 합니다.</p>
                        <ul class="list_st">
                            <li><span class="number">1. </span>요구 사항에 대해 숙지해야 합니다. 여기에는 법적 요구 사항을 관리하고 기존 관행을 SA8000 표준의 요구 사항과 비교하는 것이 포함됩니다.</li>
                            <li><span class="number">2. </span>비교가 끝난 후 차이를 줄이며 표준의 요구 사항을 구현할 수 있습니다.</li>
                            <li><span class="number">3. </span>강제 이행 절차가 만들어 지고 기업의 기존 경영 시스템과 통합되어야 합니다.</li>
                            <li><span class="number">4. </span>내부 모니터링 프로세스를 적용하고 완료한 후 인증 절차를 시작할 수 있습니다.</li>
                        </ul>
					</dd>
				</dl>			
			</li>

    		<li><!-- content 04 -->
				<dl>
					<dt class="img_area">
						<img src="./image/sa8000_02.png">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>SA 8000의 중요성</span></h3>
						<p class="con_txt">
                            SA 8000 인증 채택은 기업이 사업체 운영으로 인한 사회적 영향뿐만 아니라 직원, 파트너 및 공급자가 운영하는 조건을 고려하고 있습니다.<br>
                            SA 8000은 규모, 지리적 위치 또는 산업 분야와 상관없이 모든 유형의 조직에 보편적으로 적용할 수 있습니다.<br><br>
                            SA8000은 자발적인 사회적 책임 준수 표준으로 인도적 작업 환경과 책임 생산에 대한 기업의 의지를 보여줍니다. 이 표준을 준수함으로써 귀사가 얻을 수 있는 혜택은 다음과 같습니다.
                        </p>
                        <ul class="list_st">
                            <li><span class="number">1. </span>기업과 노동자 간의 고용 관계가 국제 규범에 따라 공정하고 적법하게 운영함을 증명</li>
                            <li><span class="number">2. </span>공급망의 관리 및 성능을 개선합니다.</li>
                            <li><span class="number">3. </span>글로벌 표준과의 적합성을 보장하고, 의무 불이행, 공개 및 소송 발생 가능성을 줄입니다.</li>
                            <li><span class="number">4. </span>해외 계약에 입찰하거나 현지에서 새로운 비즈니스 수용을 위한 확장 시 적절한 사회적 책임을 입증합니다.</li>
                        </ul>
					</dd>
				</dl>
			</li>
			
			<li><!-- content 05 -->
				<dl>
					<dt class="img_area">
						<img src="./image/sa8000_03.png">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>SA 8000의 기대효과</span></h3>
						<p class="con_txt">
                            그림과 같이 SA8000 인증은 중국, 인도, 이탈리아 등 여러 국가에서 수요가 높으며, 개발도상국가에서도 그 중요성이 부각되고 있습니다.<br> 
                            섬유 및 의류 분야의 기업들이 인증을 받고 있으며 건축, 식품, 소비재, 인프라 등 다양한 분야의 기업들 또한 인증을 취득하고 있습니다.<br><br>
                            이 외의 SA 8000 인증에 대한 기대효과는 다음과 같습니다.
                        </p>
                        <ul class="list_st">
                            <li><span class="number">1. </span>기업과 노동자 간의 고용 관계가 국제 규범에 따라 공정하고 적법하게 운영함을 증명 가능</li>
                            <li><span class="number">2. </span>기업의 사회적 책임에 대한 국내외적인 요구에 대한 대응 가능</li>
                            <li><span class="number">3. </span>협력업체, 공급업체, 하청업체 등에 대한 사회적 책임 준수 증명 가능</li>
                            <li><span class="number">4. </span>사회적 문제들에 대한 시스템적인 접근 가능</li>
                        </ul>
					</dd>
				</dl>
			</li>

			<li><!-- content 05 -->
				<dl>
					<dt class="img_area">
						<img src="./image/ISO_9001_03.jpg">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">IGC 인증원의 역량</h3>
						<p style="text-align:justify">
                            IGC를 통하여 기업의 유지관리 및 적용할 수 있는 국제적인 인증 표준인 SA 8000을 검증받고 고객의 기대치를 충족하고 귀사의 성능을 증진할 수 있습니다.<br><br>
                            당사의 숙련된 심사원들과 협력하여 가장 세계적으로 인정받는 작업장 표준을 구현함으로써 계약 입찰 및 조직 확장 시 사회적 책임을 입증할 수 있게 됩니다.<br><br>
                            또한, IGC와의 협력을 통해 인증을 획득하면 성과 프로세스를 개선하고, 유용한 재능과 일관되고 적합한 공급망 및 보다 지속 가능한 고객 관계를 증진하며 수익성 높은 경쟁력을 제공할 수 있습니다.
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
    
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>