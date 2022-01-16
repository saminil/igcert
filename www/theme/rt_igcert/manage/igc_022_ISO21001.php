<?php
	include_once('./_common.php');
$g5['title'] = '교육 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .content li .txt_area .con_txt { text-align: justify;margin: 0 0 50px }/* 텍스트 영역 내용 */
    
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
        <h1 class="tit_num"><span>ISO</span> 21001</h1>
		<h2 class="tit_cer fc_pointer">교육기관 경영시스템 인증</h2>		
		<p class="outline">
            ISO 21001은 모든 교육, 학습 또는 연구를 통해 역량 개발을 지원하는 조직에 적용할 수 있도록 고안되었습니다. 교육용 제품을 생산하거나 제조하는 조직은 ISO 21001이 적용되지 않습니다.<br><br>
            ISO 21001은 EOMS (Educational Organization Managements System)에 대한 요구 사항을 규정합니다. 조직은 학습자에게 지속적으로 지식을 제공, 공유 및 촉진하는 능력을 갖추어야 하며, 시스템 개선 프로세스를 포함하여 EOMS를 효과적으로 적용하여 학습자, 다른 고객 및 직원의 만족도를 높이는 것을 목표로 하여야 합니다.
		</p>

		<ul class="content">
			<li><!-- content 01 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_21001_01.jpg" alt="iso 21001 표준구조">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 21001:2018 요구사항</h3>
						<p class="con_txt">
                            ISO/IEC 20000-1은 조직 환경, 리더십, 계획, 지원, 운영, 성과 평가 및 개선의 10가지 항목으로 구성되어 있습니다. (인증 가이드는 ISO/IEC 20000-3을, 모범사례는 ISO/IEC 20000-5를 참조하십시오.)<br><br>
                            이 표준의 요구사항은 조직의 유형, 규모, 특성에 상관없이 서비스를 제공하는 모든 조직에 적용할 수 있도록 일반적인 내용으로 수립되었습니다.
                        </p>
                        <ul class="list_st">
					        <li><span class="number">1. </span>적용범위</li>
					        <li><span class="number">2. </span>인용표준</li>
					        <li><span class="number">3. </span>용어와 정의</li>
					        <li><span class="number">4. </span>조직 상황</li>
					        <li><span class="number">5. </span>리더십</li>
					        <li><span class="number">6. </span>기획</li>
					        <li><span class="number">7. </span>서비스경영시스템의 지원</li>
					        <li><span class="number">8. </span>서비스경영시스템의 운용</li>
					        <li><span class="number">9. </span>성과 평가</li>
					        <li><span class="number">10. </span>개선</li>
                        </ul>
					</dd>
				</dl>
			</li>
			
			<li><!-- content 02 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_21001_02.jpg" alt="iso 21001 인증 효과">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 21001의 중요성</h3>
						<ul class="list_st">
					        <li><span class="number">1. </span>방침(미션 및 비전 포함)과 목표 및 활동의 연계 향상</li>
					        <li><span class="number">2. </span>모든 사람에게 포용적이고 공평한 양질의 교육을 제공함으로써 사회적 책임 강화</li>
					        <li><span class="number">3. </span>모든 학습자, 특히 특수 교육 요구, 원격 학습자 및 평생 학습 기회가 있는 학습자에 대한 개인화 된 학습 및 효과적인 대응</li>
					        <li><span class="number">4. </span>효과 및 효율성을 입증하고 증가시키기 위한 일관된 프로세스 및 평가 도구</li>
					        <li><span class="number">5. </span>조직의 신뢰성 증가</li>
					        <li><span class="number">6. </span>교육 기관이 효과적인 교육 관리 관행에 대한 헌신을 보여줄 수 있는 수단</li>
					        <li><span class="number">7. </span>국제적 틀 내에서 지역, 국가, 공개, 독점 및 기타 표준의 조화</li>
                        </ul>
					</dd>
				</dl>			
			</li>
			
			<li><!-- content 03 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_21001_03.jpg" alt="IGC인증원의 역량">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">IGC 인증원의 역량</h3>
						<p style="text-align: justify">
                            IGC의 심사원은 교육과 관련 기술적 자격을 갖춘 전문가로서 ISO 21001 경영시스템의 구현 및 효과에 대한 철저하고 정직한 심사를 제공합니다. 또한 귀사의 비즈니스 요구에 부합하는 지식과 역량을 갖추고 있으며 효과적이고 철저한 심사를 제공합니다.
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