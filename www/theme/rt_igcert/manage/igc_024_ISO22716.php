<?php
	include_once('./_common.php');
$g5['title'] = '화장품 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
		<h1 class="tit_num"><span>ISO</span> 22716 </h1>
		<h2 class="tit_cer fc_pointer">화장품 GMP 우수 화장품 제조 및 품질관리 기준에 대한 가이드라인</h2>		
		<p class="outline">
            ISO 22716은 우수 화장품 제조 및 품질관리 기준에 대한 가이드라인 ‘GMP(Good Manufacturing Practices)’ 로 화장품의 생산, 관리, 보관과 출하를 위한 지침을 제공하는데 목적이 있습니다.<br><br>
            ISO 22716에서는 제품의 품질에 영향을 미치는 요인들 관리에 있어서 조직적이고 실질적인 조언을 제공하고자 하며, 원료의 수령에서부터 출하까지의 제품의 흐름에 따라 그 목적에 도달하기 위한 방법을 포함하고 있습니다.
        </p>

		<ul class="content">
			<li><!-- content 01 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_22716_01.jpg" alt="ISO 22716 요구사항 구성">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 22716:2007 요구사항</h3>
						<ul class="list_st">
					        <li><span class="number">1. </span>적용범위</li>
					        <li><span class="number">2. </span>용어와 정의</li>
					        <li><span class="number">3. </span>인적 자원</li>
					        <li><span class="number">4. </span>건물</li>
					        <li><span class="number">5. </span>설비</li>
					        <li><span class="number">6. </span>원료와 포장재</li>
					        <li><span class="number">7. </span>생산</li>
					        <li><span class="number">8. </span>완제품</li>
					        <li><span class="number">9. </span>품질관리</li>
					        <li><span class="number">10. </span>규격 외 제품의 처리</li>
					        <li><span class="number">11. </span>폐기물</li>
					        <li><span class="number">12. </span>도급계약</li>
					        <li><span class="number">13. </span>일탈</li>
					        <li><span class="number">14. </span>불만과 리콜</li>
					        <li><span class="number">15. </span>변경관리</li>
					        <li><span class="number">16. </span>내부감사</li>
					        <li><span class="number">17. </span>문서관리</li>
                        </ul>
					</dd>
				</dl>
			</li>
			
			<li><!-- content 02 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_22716_02.jpg" alt="ISO 22716 중요성">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 22716의 중요성</h3>
						<p style="text-align:justify">
                            ISO 22716은 화장품 수출을 위한 필수 조건으로 변화하고 있습니다. 특히 유럽의 새로운 화장품 EU regulation에서는 화장품 제조사에게 harmonized standard를 준수하도록 요구하고 있는데 이 harmonized standard가 ISO 22716입니다.
                        </p>
					</dd>
				</dl>			
			</li>
			
			<li><!-- content 03 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_22716_03.jpg" alt="ISO 22716 인증의 개대 효과">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 22716의 기대효과</h3>
						<div class="con_txt_2">
                            <ul class="list_st">
                                <span class="point_blk">&#10020; 고객</span>
                                <li>
                                    <span class="number">1. </span>신뢰할 수 있는 브랜드를 통해 신뢰구축
                                </li>
                                <li>
                                    <span class="number">2. </span>품질과 순도에 부합하는 제품
                                </li>
                            </ul>
                        </div>
                        <div class="con_txt_2">
                            <ul class="list_st">
                                <span class="point_blk">&#10020; 판매자</span>
                                <li>
                                    <span class="number">1. </span>GMP 요구사항, 품질 등의 기준에 부합함
                                </li>
                                <li>
                                    <span class="number">2. </span>배치의 일관성으로 공정의 재현성/ 안정성 보증
                                </li>
                                <li>
                                    <span class="number">3. </span>오염과 오류의 위험 최소화
                                </li>
                                <li>
                                    <span class="number">4. </span>브랜드 &amp; 명성의 보호
                                </li>
                            </ul>
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
						<ul class="list_st">
                            <li>
                                <span class="bullet"></span>IGC는 화장품을 생산, 관리, 보관 출하하는 조직이 ISO 22716 인증을 구현하고 달성하도록 지원합니다.
                            </li>
                            <li>
                                <span class="bullet"></span>IGC의 풍부한 경험을 갖춘 전문가들이 현장 심사에서 인증까지의 프로세스에 걸쳐 조직의 생산 라인을 ISO 22716 지침에 따라 잠재적 위험을 최소화할 수 있도록 지원하고 있습니다.
                            </li>
                            <li>
                                <span class="bullet"></span>IGC는 인증 이외에도 기존 절차를 개선하고 기존 능력을 강화하길 원하는 조직에게 가장 효과적인 방법으로 정기적 피드백을 제공합니다.
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

</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>