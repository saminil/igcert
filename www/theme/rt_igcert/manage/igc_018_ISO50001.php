<?php
	include_once('./_common.php');
$g5['title'] = '에너지 경영인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
		<h1 class="tit_num"><span>ISO</span> 50001</h1>
		<h2 class="tit_cer fc_pointer">에너지 경영시스템 인증</h2>		
		<p class="outline">
            이 표준의 목적은 조직이 에너지 효율, 이용 및 사용량을 포함한 에너지 성과를 개선하기 위하여 필요한 시스템과 프로세스를 수립할 수 있도록 하는 것입니다. 체계적인 에너지 관리를 통하여 온실가스 배출량, 에너지 비용 및 그 밖의 관련된 환경영향을 저감시킬 수 있습니다. 이 표준은 지역적, 문화적, 사회적 조건에 무관하게 모든 종류 및 규모의 조직에 적용될 수 있습니다. 성공적인 실행을 위해서는 고객 조직의 모든 부서와 기능, 특히 최고경영자의 의지가 중요합니다.<br><br>
            조직은 이 요구사항을 바탕으로 에너지방침을 개발하고 실행할 수 있으며, 중요에너지 이용과 관련된 법적 요구사항 및 정보를 고려한 목표, 세부목표 및 실행계획을 수립할 수 있습니다. EnMS(Energy Management Systems)는 조직이 조직의 방침 의지를 달성하고, 에너지성과 개선에 필요한 활동을 하고 이 표준의 요구사항에 그 시스템의 적합성을 실증하는 것을 가능하게 합니다. 이 표준은 조직의 관리하에 있는 활동들에 대하여 적용되며, 이 표준의 적용은 시스템 복잡성, 문서화 정도 및 자원을 포함하는 조직의 특정 요구사항에 맞도록 조정될 수 있습니다.
		</p>

		<ul class="content">
		    <li><!-- content 01 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_50001_09.jpg">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 50001:2011 요구사항</h3>
						<div class="con_txt">
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
                        </div>
					</dd>
				</dl>	
			</li>
		
			<li><!-- content 02 -->
				<dl>
					<dt class="img_area">
						<img src="./image/iso_50001_01.jpg" alt="ISO 5001의 목적">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>ISO</span> 50001의 중요성</h3>
						<div>
                            <p class="con_txt">
                                ISO 50001 인증 취득을 통해 조직은 다음과 같은 혜택을 얻을 수 있습니다.
                            </p>
                            <div class="con_txt">
                                <ul class="list_st">
                                <li><span class="bullet"></span>조직이 에너지 효율성, 에너지 사용과 소비를 개선</li>
                                <li><span class="bullet"></span>에너지 자원의 관리에 있어 보다 투명하고 효과적인 의사소통</li>
                                <li><span class="bullet"></span>에너지 관리의 우수사례가 확산되도록 촉진</li>
                                <li><span class="bullet"></span>시설에 대한 새로운 에너지 효율성 기술을 적용하기 위한 평가 및 우선순위 검토를 지원</li>
                                <li><span class="bullet"></span>공급망 내의 에너지 효율성을 높이기 위한 프레임워크를 제공</li>
                                <li><span class="bullet"></span>온실가스 배출 저감 프로젝트에 대한 에너지 관리 개선을 실행</li>
                            </ul>
                            </div>
                            <p style="text-align:justify">
                                이 표준의 국제적인 활용은 가용 에너지원의 보다 효율적인 이용, 경쟁력 향상, 온실가스 배출량 및 그 밖의 환경영향의 저감에 기여합니다. 이 표준은 사용되는 에너지의 종류에 무관하게 적용될 수 있다는 장점이 있습니다.<br><br>
                                이는, 에너지의 효율적인 활용을 통하여 조직의 경제적 이익에도 기여할 뿐만 아니라 세계적인 화두로 급부상하고 있는 환경문제에 대하여 긍정적인 영향을 끼칠 수 있습니다.
                            </p>
                        </div>
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