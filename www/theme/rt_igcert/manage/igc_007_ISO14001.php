<?php
	include_once('./_common.php');
$g5['title'] = '환경경영인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
		<h1 class="tit_num"><span>ISO</span> 14001</h1>
		<h2 class="tit_cer fc_pointer">환경경영시스템 인증</h2>		
		<p class="outline">
            <span>ISO</span> 14001:2015는 환경경영시스템(EMS)를 위한 국제 규격으로 환경경영시스템 구성 및 유지를 위한 요구사항을 명시한 주요 경영시스템 규격입니다. 한국 내 많은 기업들이 조직의 환경경영을 위해 인증을 받고 있으며, 전 세계적으로는 25만개 이상의 인증서가 발행되고 있습니다.<br><br>
            <span>ISO</span> 14001은 환경경영시스템에 대한 원칙, 시스템 및 지원 기술에 관한 일반 가이드라인과 함께 환경경영시스템 수립, 시행, 유지 및 개선과 같은 이슈들을 다룹니다. 이는 귀사의 환경측면을 통제하고, 환경영향을 감소시키며, 법규 준수를 보장합니다.    
		</p>

		<ul class="content">
			<li><!-- content 01 -->
				<dl>
					<dt class="img_area">
						<img src="./image/ISO_04-01.jpg" alt="ISO 14001:2015 요구사항">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 14001:2015 요구사항</h3>
						<p class="con_txt">
                            <span class="point_blk"><span>ISO</span> 14001:2015 환경 경영 시스템 요구사항</span>
                            <span>ISO</span> 14001:2015은 <span>ISO</span> 9001:2015 등의 규격에 적용되는 High Level Structure가 적용되어, 다른 규격과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
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
						<img src="./image/ISO_04-02.jpg"alt="ISO 14001:2015 인증 이익">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 14001의 중요성</h3>
						<p class="con_txt">
                            거의 모든 사업이 <span>ISO</span> 14001 규격 인증 취득을 통해 이익을 얻을 수 있습니다. 인증은 모든 산업 또는 분야 내 조직에 상당한 이익을 제공하기에 충분하며, 관련 지속 가능한 실례를 수행하는 특정 기반을 제공합니다. ISO 14001 인증 취득 장점은 다음과 같습니다 :
                        </p>
                       
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">1. </span>환경관리 향상
                            </span>
                            <p>
                                <span>ISO</span> 14001을 준수하는 환경경영시스템은 잠재적 영향 파악에 도움을 주며, 리스크를 최소화하기 위한 관리 및 조치를 수행합니다. <span>ISO</span> 14001은 자원활용 감소 및 귀사 사업의 전반적 효율성을 향상시키기 위해, 그리고 귀사 운영의 더 큰 역량을 최고화하기 위해 정량화 및 측정 가능한 도구를 제공합니다.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">2. </span>사업 역량 증대
                            </span>
                            <p>
                                최종고객은 종종 납품 조건으로 인증서를 요구합니다. 따라서, 인증 취득은 사업 확장 역량이 됩니다. 새로운 시장 부문으로 귀사의 사업을 확장하는 경우, 인증은 프로세스를 빈틈없이 만드는 가장 최고의 도구입니다.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">3. </span>증명된 사업 신뢰도
                            </span>
                            <p>
                                인정된 규격에 대한 독립적 심사는 많은 것을 보여주며, 귀사 브랜드를 향상시킵니다. <span>ISO</span> 14001을 준수하는 조직은 많은 시간과 노력이 듭니다. 바이어 및 기타 주주들은 이를 인식하고 누구와 새로 추진할지에 대한 의사결정을 할 때 이를 참고합니다.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">4. </span>주주 관계 개선
                            </span>
                            <p>
                                환경을 우선시하게 되면 사람들은 귀사에 긍정적으로 반응할 것입니다. <span>ISO</span> 14001 인증은 전 세계적으로 인정 받고 있습니다. 귀사의 사업을 다른 지역으로 확장하려고 하는 경우, 인증은 귀사가 책임을 다하기 위해 적극적 조치를 취하고 있다는 것을 잠재적 고객에게 보이기 위한 최선의 방법입니다.
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">5. </span>운영 비용 감소
                            </span>
                            <p>
                                에너지 및 물 사용량 효율성 달성 및 폐기물 최소화는 비용 절감을 의미합니다. 
                            </p>
                        </div>
                        
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">6. </span>법규 준수
                            </span>
                            <p>
                                법적/규제적 요구사항이 어떻게 귀사에 영향을 끼치는지 이해한다면, 법을 지키는 것이 더욱 쉽고 합리적일 것입니다. <span>ISO</span> 14001 또한 귀사가 미래 법적 규제들을 충족하도록 합니다. 이는 지속적으로 변화하는 법적 상황에 대해 매우 큰 장점입니다.
                            </p>
                        </div>
					</dd>
				</dl>	
			</li>
			
			<li><!-- content 03 -->
				<dl>
					<dt class="img_area">
						<img src="./image/ISO_9001_03.jpg" alt="ISO 9001, 아이지씨인증원의 역량">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>IGC</span>인증원의 역량</h3>
						<p style="text-align: justify">
						    <span>IGC</span>는 미국의 인정기구인 IAS로부터 <span>ISO</span> 14001에 대한 인정을 받아 환경경영시스템에 대한 인증 서비스를 제공하고 있습니다.<br><br>
						    <span>IGC</span>의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
						    <span>IGC</span>는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 <span>ISO</span> 14001은 물론 품질 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.<br><br>
						    <span>IGC</span>는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.
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