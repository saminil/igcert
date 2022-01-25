<?php
	include_once('./_common.php');
$g5['title'] = '안전보건 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #1F88E5 }/* 상세페이지 포인트 컬러 */
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
	<!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">OHSAS 18001</a></li>
			<li><a href="javascript:;">ISO 45001</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.07 탭컨텐츠 영역 +++-->
	
	<div class="tab_con">
		<!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
		<article style="display:block">
			<section class="business_type5" class="area">
				<h1 class="tit_num"><span>OHSAS</span> 18001</h1>
				<h2 class="tit_cer fc_pointer">
				    안전보건경영시스템 인증 <span>Occupational Health and Safety Assessment Series</span>
				</h2>		
				<p class="outline">
					조직 내부의 안전 관련 위험성을 현저히 줄이기 위해 OHSAS 18001 인증은 모든 기업에 적합합니다. 안전보건경영시스템은 가장 잘 알려진 산업 안전 관리 시스템으로 인정받고 있습니다. 이 인증을 통해 귀사 임직원의 건강과 안전이 귀사의 우선 사항이라는 것을 입증할 수 있습니다.<br> <br>
					안전보건경영시스템이 국제표준(<span>ISO</span> 45001)으로 채택됨에 따라, 기존의 OHSAS 18001은 인증전환기간(2018.3.12~2021.3.11)이 경과하면 효력을 상실하게 됩니다. 따라서 OHSAS 18001 인증기업들은 그전에 ISO 45001로의 전환이 필요합니다. <span>IGC</span>는 전환 및 신규 인증을 돕기 위하여 최적의 인증 서비스를 제공하고 있습니다.
				</p>

				<ul class="content">
			        <li><!-- content 1-1 -->
						<dl>
							<dt class="img_area">
								<img src="./image/OHSAS_18001_01.jpg" alt="OHSAS 18001 인증이란">
							</dt>
							<dd class="txt_area">
							    <h3 class="con_tit">OHSAS 18001:2007 요구사항</h3>
								<p class="con_txt">
								    OHSAS 18001은 보건 및 안전 경영 시스템입니다. 이는 모든 리스크 관리 측면 미 법규 준수를 포함한 보건 및 안전의 효율적 관리를 위한 프레임워크를 제공합니다. 귀사의 조직에 필요한 정책 절차 및 통제를 통해 국제적으로 인정된 모범 사례에 부합하는, 최상의 근로 조건 및 근로 환경 상의 건강과 안전을 달성할 수 있도록 지원합니다.  
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>적용범위</li>
					                <li><span class="number">2. </span>인용표준</li>
					                <li><span class="number">3. </span>용어와 정의</li>
					                <li><span class="number">4.1. </span>일반 요구사항</li>
					                <li><span class="number">4.2. </span>안전보건 방침</li>
					                <li><span class="number">4.3. </span>기획</li>
					                <li><span class="number">4.4. </span>실행 및 운영</li>
					                <li><span class="number">4.5. </span>점검</li>
					                <li><span class="number">4.6. </span>경영검토</li>
                                </ul>
							</dd>
						</dl>
					</li>
					
					<li><!-- content 1-2 -->
						<dl>
							<dt class="img_area">
								<img src="./image/OHSAS_18001_02.jpg" alt="OHSAS 18001 인증의 중요성">
							</dt>
							<dd class="txt_area">
								<h3 class="con_tit">OHSAS 18001의 중요성</h3>
								<p class="con_txt">
								    OHSAS 18001은 127개 이상의 국가에 있는 90,000 개 이상의 조직에 적합합니다. 조직이 책임있는 사람들의 안전 관리에 대한 '모범 사례'를 보여줄 필요가 있다면 귀사에 적합할 것입니다.<br><br>
                                    IGC는 관공서, 제조업, 서비스업, 식품회사, 프랜차이즈점을 포함한 다양한 분야의 다양한 조직에게 인증을 부여하고 있습니다.<br><br>
                                    이 규격은 다음 사항들에 도움을 줍니다.
                                </p>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">1. </span>고객 만족
                                    </span>
                                    <p>
                                        고객의 건강 및 재산을 보호함으로써 지속적인 고객 요구사항의 충족
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">2. </span>운영비용 감소
                                    </span>
                                    <p>
                                        사고 및 질병으로 인한 시간 손실 감소. 그리고, 법률 비용 및 보상으로 인한 비용 감소로 자금 축적
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">3. </span>법규 준수
                                    </span>
                                    <p>
                                        법적/규제적 요구사항이 어떻게 귀사 및 고객에게 영향을 끼치는지 이해
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">4. </span>리스크 관리 개선
                                    </span>
                                    <p>
                                        잠재적 사고를 파악하여 리스크를 최대한 낮게 유지하기 위해 관리 및 조치를 실행
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">5. </span>증명된 사업 신뢰도
                                    </span>
                                    <p>
                                        인정된 규격에 대한 독립적 심사를 통한 신뢰도 향상
                                    </p>
                                </div>
                			</dd>
						</dl>
					</li>
					
					<li><!-- content 1-3 -->
						<dl>
							<dt class="img_area">
								<img src="./image/ISO_9001_03.jpg" alt="IGC 인증원의 역량">
							</dt>
							<dd class="txt_area">
								<h3 class="con_tit"><span>IGC</span> 인증원의 역량</h3>
								<p style="text-align: justify">
								    IGC는 미국의 인정기구인 IAS로부터 OHSAS 18001에 대한 인정을 받아 안전보건 경영시스템에 대한 인증 서비스를 제공하고 있습니다.<br><br>
								    IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
								    IGC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 OHSAS 18001은 물론 품질경영 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.<br><br>
								    IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.
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
           
		</article>		
		
		<!--+++++ 컨텐츠 02 +++++-->
		<article>
			<section class="business_type5" class="area">
				<h1 class="tit_num"><span>ISO</span> 45001</h1>
				<h2 class="tit_cer fc_pointer">안전/보건 경영시스템 인증</h2>		
				<p class="outline">
                    <span>ISO</span> 45001은 안전보건경영시스템으로, 기존의 <span>OHSAS</span> 18001:2007 규격이 2018년 <span>ISO</span> 45001로 대체되었습니다. 이는 <span>ISO</span> 9001 및 14001 관리 시스템과 호환되는 산업 보건 및 안전 관리 시스템을 통해 보건 및 안전 관리 책임을 관리하기 위한 프레임워크를 제공합니다. 이 표준은 국제적 사용을 위해 개발되었으며 조직이 보건 및 안전 위험을 제어하고 성능을 향상시킬 수 있도록 합니다.<br><br>
                    효과적인 안전보건 관리시스템은 직원 및 기타 이해 관계자에 대한 위험을 줄이고 법규 준수를 지원합니다. 기존 <span>OHSAS</span> 18001 규격이 2021년 3월 만료됨에 따라 신규 고객의 경우 2020년 3월부터는 <span>ISO</span> 45001로 진행되어야 하고, 기존 <span>OHSAS</span> 18001 인증 고객은 <span>ISO</span> 45001로 전환되어야 합니다.
				</p>

				<ul class="content">
					<li><!-- content 2-1 -->
						<dl>
							<dt class="img_area">
								<img src="./image/ISO 45001_01.jpg" alt="ISO 45001 요구사항">
							</dt>
							<dd class="txt_area">
								<h3 class="con_tit"><span>ISO</span> 45001:2018 요구사항</h3>
								<p class="con_txt">
                                    <span>ISO</span> 45001:2018은 ISO 9001:2015 등의 규격에 적용되는 High Level Structure가 적용되어, 다른 규격과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>적용범위</li>
                                    <li><span class="number">2. </span>인용표준</li>
                                    <li><span class="number">3. </span>용어와 정의</li>
                                    <li><span class="number">4. </span>조직 상황</li>
                                    <li><span class="number">5. </span>리더십과 근로자 참여</li>
                                    <li><span class="number">6. </span>기획</li>
                                    <li><span class="number">7. </span>지원</li>
                                    <li><span class="number">8. </span>운용</li>
                                    <li><span class="number">9. </span>성과평가</li>
                                    <li><span class="number">10. </span>개선</li>
                                </ul>
							</dd>
						</dl>
					</li>
					
					<li><!-- content 2-2 -->
						<dl>
							<dt class="img_area">
								<img src="./image/ISO 45001_02.jpg" alt="ISO 4500의 중요성">
							</dt>
							<dd class="txt_area">
                                <h3 class="con_tit"><span>ISO</span> 45001의 중요성</h3>
								<p class="con_txt">
								    <span>ISO</span> 45001은 127개국 이상의 9만개 이상 조직에게 적합합니다. 만약에 귀사의 조직이 책임이 있는 사람들의 안전관리의 '모범 사례'를 보여야 한다면 ISO 45001은 귀사에게 적합할 것입니다.<br><br>
                                    <span>IGC</span>는 관공서, 제조업, 서비스업, 식품회사, 프랜차이즈점을 포함한 다양한 분야의 다양한 조직에게 인증을 부여하고 있습니다.<br><br>
                                    이 규격은 다음 사항들에 도움을 줍니다.
                                </p>
                                <ul class="list_st">
                                    <li>
                                        <span class="number">1. </span>작업장 유해물질 파악 및 효과적인 예방관리 수행
                                    </li>
                                    <li>
                                        <span class="number">2. </span>작업장 내 부상 및 건강 악화 방지
                                    </li>
                                    <li>
                                        <span class="number">3. </span>현장 사고 감소를 통해 비용 절감
                                    </li>
                                    <li>
                                        <span class="number">4. </span>법적 요구사항 준수 평가
                                    </li>
                                    <li>
                                        <span class="number">5. </span>안전 환경 개선
                                    </li>
                                    <li>
                                        <span class="number">6. </span>교육훈련 및 적격성 요구사항 분야 파악
                                    </li>
                                    <li>
                                        <span class="number">7. </span>생산성 증가
                                    </li>
                                    <li>
                                        <span class="number">8. </span>고객사의 사전 등록 프로세스 보완
                                    </li>
                                    <li>
                                        <span class="number">9. </span>기업 책임 촉진
                                    </li>
                                </ul>
							</dd>
						</dl>			
					</li>
					
					<li><!-- content 2-3 -->
						<dl>
							<dt class="img_area">
								<img src="./image/ISO_9001_03.jpg" alt="ICG인증원의 역량">
							</dt>
							<dd class="txt_area">
								<h3 class="con_tit">IGC 인증원의 역량</h3>
								<ul class="list_st">
                                    <li>
                                        <span class="number">1. </span><span>IGC</span>는 미국의 인정기구인 <span>IAS</span>로부터 <span>ISO</span> 45001에 대한 인정을 받아 안전보건 경영시스템에 대한 인증 서비스를 제공하고 있습니다.
                                    </li>
                                    <li>
                                        <span class="number">2. </span><span>IGC</span>의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.
                                    </li>
                                    <li>
                                        <span class="number">3. </span><span>IGC</span>는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 <span>ISO</span> 45001은 물론 품질, 환경 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.
                                    </li>
                                    <li>
                                        <span class="number">4. </span><span>IGC</span>는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.
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
		</article><!--+++++ .컨텐츠 02 +++++-->
	</div><!--+++ /20.05.07 탭컨텐츠 영역 +++-->
</div>





<?php
include_once(G5_THEME_PATH.'/tail.php');
?>