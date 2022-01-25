<?php
	include_once('./_common.php');
$g5['title'] = '사업연속성 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
        <h1 class="tit_num"><span>ISO</span> 22301</h1>
		<h2 class="tit_cer fc_pointer">비즈니스연속성 경영시스템 인증</h2>		
		<p class="outline">
            ISO 22301은 비즈니스 연속성 경영 시스템으로, 시장의 위험뿐만 아니라 도난, 자연재해, 질병 등 중단적 사고가 발생했을 때 조직이 이에 대한 방어, 발생 가능성의 감축, 대비, 대응 및 복구를 위해 문서화된 경영시스템을 수립하고 이 시스템을 실행, 운영, 모니터링 및 지속적인 개선활동을 하기위한 요구사항을 규정하고 있습니다.<br><br>
            비즈니스 연속성 경영 시스템은 모든 산업 분야 및 활동에 적용할 수 있으며 조직의 각종 위협에 대한 영향을 파악하고, 효과적인 대응능력 및 조직 회복 능력을 구축하는 프레임워크를 제공합니다. 이 표준은 영업 중단 이후의 비즈니스 운영을 지속하기 위한 비즈니스 연속성의 지침을 제공하며, 중단 시 제품 및 서비스가 즉시 제공되고 복구될 수 있도록 보장하여 제품 및 서비스에 미치는 영향을 최소화하고자 합니다.<br><br>
            2012년 발행되었던 ISO 22301:2012는 2019년 10월 31일부로 ISO 22301:2019로 개정되었으며 2022년 10월까지 3년간의 전환 유예 기간을 거칩니다. 2021년 5월 1일부터 모든 비즈니스 연속성 관리 시스템 심사는 ISO 22301:2019 버전을 적용합니다. 2012 버전은 2021년 4월 30일까지만 심사 수행이 가능합니다.
		</p>
		
		<ul class="content">
			<li><!-- content 01 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_22301_01.jpg" alt="ISO 22301 요구사항">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 22301:2019 요구사항</h3>
						<p class="con_txt">
                            이 국제규격은 조직의 존재에 중요한 영향을 끼치는 제품과 서비스를 식별하고 중단이 발생할 경우에 필요한 대응이 무엇인지 수립하는 데 도움을 줍니다. 또한, 사업 중단의 경우도 적절하게 대응할 수 있는 기능도 제공합니다.
                        </p>
                        <ul class="list_st">
					        <li><span class="number">1. </span>적용범위</li>
					        <li><span class="number">2. </span>인용표준</li>
					        <li><span class="number">3. </span>용어와 정의</li>
					        <li><span class="number">4. </span>조직 상황</li>
					        <li><span class="number">5. </span>리더십</li>
					        <li><span class="number">6. </span>기획</li>
					        <li><span class="number">7. </span>지원</li>
					        <li><span class="number">8. </span>운용</li>
					        <li><span class="number">9. </span>성과평가</li>
					        <li><span class="number">10. </span>개선</li>
                        </ul>
					</dd>
				</dl>
			</li>
			
			<li><!-- content 02 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_22301_02.jpg" alt="ISO 22301의 중요성">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 22301의 중요성</h3>
						<p class="con_txt">
                            ISO 22301은 위험하거나 복잡한 환경에서 운영되거나 빠른 일 처리를 할 수 있는 능력이 중점적인 글로벌 기업에 적합합니다.<br><br>
                            이 규격의 목표는 다음 사항을 포함하는 광범위한 범위의 잠재적인 위협 및 중단을 보호하는 데 있습니다.
                        </p>
                        <ul class="list_st">
					        <li><span class="number">1. </span>기술 실패</li>
					        <li><span class="number">2. </span>주요 자원의 갑작스러운 손실</li>
					        <li><span class="number">3. </span>자연 재난</li>
					        <li><span class="number">4. </span>테러 공격</li>
					        <li><span class="number">5. </span>기타 긴급 상황</li>
                        </ul>
					</dd>
				</dl>			
			</li>
			
			<li><!-- content 03 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_22301_03.jpg" alt="ISO 22301 기대효과">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 22301 기대효과</h3>
						
						<div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">1. </span>고객 만족
                            </span>
                            <p>
                                고객에게 귀사의 서비스는 신뢰할 수 있고 항상 의지할 수 있다는 고객의 신뢰를 제공합니다.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">2. </span>비즈니스 탄력성
                            </span>
                            <p>
                                위기, 비상대비 및 비상계획에 대한 효율적인 관리로 다운타임과 재정적 손실을 피할 수 있습니다.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">3. </span>법규 준수
                            </span>
                            <p>
                                법적/규제적 요구사항이 귀사와 고객사들에게 끼치는 영향을 이해할 수 있습니다.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">4. </span>향상된 리스크 관리
                            </span>
                            <p>
                                위험 관리 및 위기 상황에서 빠르게 회복하며 귀하의 평판을 보호할 수 있습니다.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">5. </span>사업 자격 증명 입증
                            </span>
                            <p>
                                인증받은 사업 군에 대한 독립적인 검증은 귀하의 브랜드를 향상시킵니다.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">6. </span>더 많은 사업 조달 능력
                            </span>
                            <p>
                                조달 사양은 종종 공급 조건으로 인증이 필요하므로, 인증 획득과 함께 문이 열립니다.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">7. </span>국제 인정
                            </span>
                            <p>
                                귀하는 전 세계적으로 인정받고 평가될 것입니다.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk" style="display:inline-block">8.</span>
                            <span>
                                KS A ISO 22301 국내인증 취득을 통한 국제공신력 확보 및 대내외 이미지 제고
                            </span>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk" style="display:inline-block">9.</span>
                            <span>
                                BCMS 체계 구축으로 선도적인 재난안전관리 체계 및 문화정착 확산
                            </span>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk" style="display:inline-block">10.</span>
                            <span>
                                주주가치보호 및 이해관계자의 기대충족으로 기업 가치 상승
                            </span>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk" style="display:inline-block">11.</span>
                            <span>
                                향후 인증을 통한 초기시장 선점 및 저변 확대
                            </span>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk" style="display:inline-block">12.</span>
                            <span>
                                재난 발생 시 효율적 대응 능력 확보
                            </span>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk" style="display:inline-block">13.</span>
                            <span>
                                재난으로부터 조직의 경영체계 연속성 확보
                            </span>
                        </div>
					</dd>
				</dl>			
			</li>

			<li><!-- content 04 -->
				<dl>
					<dt class="img_area">
						<img src="./image/ISO_9001_03.jpg">
					</dt>
					<dd class="txt_area">
				        <h3 class="con_tit">IGC 인증원의 역량</h3>
				        <p style="text-align: justify">
                           IGC는 비즈니스 연속성 경영 시스템에 대한 인증 서비스를 제공하고 있습니다.<br><br>
                           IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
                           IGC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 미국의 인정기구인 IAS로부터 다양한 규격에 대해 인정받아 인증 서비스를 제공하고 있습니다.<br><br>
                           IGC는 전 세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.
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