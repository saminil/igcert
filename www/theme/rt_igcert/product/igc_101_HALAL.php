<?php
	include_once('./_common.php');
$g5['title'] = '할랄 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #404953 }/* 상세페이지 포인트 컬러 */
    .point_blk { display: block;color: #111;font-weight: 500;margin: 0 0 10px }/* 상세페이지 폰트스타일 1 */
	.content_wrap { width: 100%;max-width: 1200px;margin: 0 auto;font-size: 1rem;font-weight: 400;line-height: 1.6 }/* 컨텐츠 중간 그리드 지정 */
    .content_wrap .business_type5 { margin: 0 0 100px }
    
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
    .content li .txt_area .con_txt { text-align: justify;margin: 0 0 50px }/* 텍스트 영역 내용 */
    .content li .txt_area .con_txt_2 { margin: 0 0 30px }/* 텍스트 영역 내용 스타일 2 */
    .content li .txt_area .con_txt_2:last-child { margin: 0 }
    .content li .txt_area .con_txt_3 { margin: 0 0 50px;border-bottom: 1px solid #ddd }/* 텍스트 영역 내용 스타일 3 */
    .content li .txt_area .con_txt_3:last-child { margin: 0;border: none }
    
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
	.partner_type2 .con_box ul li { float: left;width: 100%;margin: 10px 0 }/* 리스트 세로배열 */
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
	<section class="business_type5" class="area">
		<h1 class="tit_num">할랄 제품인증 소개</h1>
		<h2 class="tit_cer fc_pointer">HALAL</h2>
		<div class="outline">
            <ul class="list_st">
                <li><span class="bullet"></span>할랄(HALAL)의 사전적 의미는 ‘허용되는 것’을 의미합니다.</li>
                <li><span class="bullet"></span>할랄은 생활 전반에 걸쳐 이슬람법에 따라 사용이 허용되는 것을 의미하며, 음식, 화장품 과 의약품 등 생활 전반에 걸친 모든 것이 해당됩니다.</li>
                <li><span class="bullet"></span>무슬림이 먹을 수 있는 음식은 ‘할랄 식품’이라 하여 별도로 규정하고 있으며 공산품의 경우 할랄 식품에는 할랄 인증마크를 붙이고 있습니다.</li>
                <li><span class="bullet"></span>할랄 인증과정의 철저한 위생검사를 통해 할랄 인증은 이슬람권에서 일종의 품질보증 마크로 여겨지고 있습니다.</li>
                <li><span class="bullet"></span>인도네시아의 경우 ‘신할랄인증법’을 시행하고 있습니다.<br>➜ 이에 따라 이전에는 할랄 인증이 없더라도 제품 유통이 가능했으나 19년 10월 17일부터 일정 계도기간을 거친 후, 할랄 인증이 본격적으로 의무화 될 예정이므로 할랄 인증의 중요성은 더욱 커지고 있습니다.</li>
            </ul>
        </div>
        
        <ul class="content">
            <li><!-- content 01 -->
                <dl>
                    <dt class="img_area">
                        <img src="./images/product_HALAL_02.jpg" alt="제품 분류">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">제품 분류</h3>
                        <p class="con_txt">
                            제품은 할랄(Halal), 하람(Haram), 또는 마쉬부(Mashbooh)로 분류합니다.
                        </p>
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">&#10020; </span>할랄(Halal)
                            </span>
                            <p>
                                무슬림에게 ‘허용되는’ 모든 것입니다. 대표적인 할랄에는 소, 양, 닭, 오리와 같은 식품 등이 있습니다.
                            </p>
                        </div>
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">&#10020; </span>하람(Haram)
                            </span>
                            <p>
                                할랄의 반대 개념으로 ‘금지된’이라는 의미를 가지고 있는 하람입니다. 대표적인 하람 제품은 돼지, 피, 알코올 등이 있으며 이러한 재료를 사용한 제품이 하람에 속합니다.
                            </p>
                        </div>
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">&#10020; </span>매쉬부(Mashbooh)
                            </span>
                            <p>
                                기준상 할랄인지 하람인지 분류하기 애매모호한 또는 의심스러운 성분을 가진 제품을 의미합니다. 대표적인 매쉬부에는 담배가 있습니다.
                            </p>
                        </div>
                    </dd>
                </dl>
            </li>
            
            <li><!-- content 02 -->
                <dl>
                    <dt class="img_area">
                        <img src="./images/product_HALAL_03.jpg" alt="할랄 인증 제품 요구사항">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">할랄 인증 제품 요구사항</h3>
                        <ul class="list_st">
                            <li><span class="bullet"></span>할랄 인증 대상 제품 선정</li>
                            <li><span class="bullet"></span>생산공정에 사용되는 원재료 및 원재료의 공급자</li>
                            <li><span class="bullet"></span>제품의 생산 과정 검토</li>
                            <li><span class="bullet"></span>작업 환경 또는 장비/설비 안전성 확보 및 위생관리 평가</li>
                            <li><span class="bullet"></span>조직의 내부할랄팀 구성원 임명 및 이슬람 규칙 및 할랄 요구사항에 대한 교육</li>
                            <li><span class="bullet"></span>제포장의 라벨링 검토</li>
                        </ul>
                    </dd>
                </dl>
            </li>
            
            <li><!-- content 03 -->
                <dl>
                    <dt></dt>
                    <dd class="txt_area" style="width:90%;margin:0 auto">
                        <h3 class="con_tit" style="text-align:center">인증절차</h3>
                        <div style="width:100%;margin: 0 auto 50px">
                            <div style="text-align:center">
                                <img src="./images/Process_halal.png" alt="인증절차">
                            </div>
                        </div>
                    </dd>
                </dl>
            </li>
            
            <li><!-- content 04 -->
                <dl>
                    <dt class="img_area">
                        <img src="./images/product_HALAL_04.jpg" alt="제출 서류">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">제출 서류</h3>
                        <div class="con_txt">
                            <ul class="list_st">
                                <li><span class="number">1. </span>신청서</li>
                                <li><span class="number">2. </span>제품 설문지(성문/원재료)</li>
                                <li><span class="number">3. </span>사업자등록증</li>
                                <li><span class="number">4. </span>회사 소개서</li>
                                <li><span class="number">5. </span>제조 등록증명서</li>
                                <li><span class="number">6. </span>제품 제조공정도</li>
                                <li><span class="number">7. </span>공장 위치 및 공장 구내 지도</li>
                                <li><span class="number">8. </span>공정흐름도, 생산절차서</li>
                                <li><span class="number">9. </span>주요 성분(원자재)에 대한 할랄 인증서 또는 사양</li>
                                <li><span class="number">10. </span>HACCP, CMP, GHP, ISO 또는 기타 보유 인증서 사본 (있을 경우)</li>
                                <li><span class="number">11. </span>제품 디자인 및 라벨지</li>
                            </ul>
                        </div>
                        <p>※ 제품에 따라 추가 서류가 요구될 수 있습니다.</p>
                    </dd>
                </dl>
            </li>
            
            <li><!-- content 05 -->
                <dl>
                    <dt class="img_area">
                        <img src="./images/product_HALAL_05.jpg" alt="IGC인증원의 역량">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">IGC인증원의 역량</h3>
                        <ul class="list_st">
                            <li><span class="bullet"></span>IGC는 JAKIM(말레이시아) 및 유라시아 인증 스킴을 함께 보유하고 있는 국제적인 할랄 인증기관과 협력하여 할랄 인증 서비스를 제공하고 있습니다.</li>
                            <li><span class="bullet"></span>IGC는 전문인력을 통해 할랄 인증 신청부터, 내부할랄그룹 교육, 심사 및 인증서 발행까지 전문적인 서비스를 제공하고 있습니다.</li>
                            <li><span class="bullet"></span>IGC는 전 세계 국가의 무슬림 시장에서의 샤리아 (Sharia) 법적 요구 사항에 대한 최신 지식을 바탕으로 기업의 글로벌 운영을 지원하기 위해 적극 노력할 것을 약속드립니다.</li>
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
                <li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 22000, FSSC 22000, FDA FSMA, Global HACCP)</span></p></li>
                <li><p><em><strong>02</strong></em><span>제품 인증 (Vegan 인증, HALAL 인증, 유라시아 인증, 위생등록, FDA 등록/승인)</span></p></li>
                <li><p><em><strong>03</strong></em><span>FDA (시험, FSMA 인증, 등록/승인)</span></p></li>
                <li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
                <li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
            </ul>
        </div>
    </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------>
    
</div>





<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
