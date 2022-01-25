<?php
	include_once('./_common.php');
$g5['title'] = 'Vegan 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #404953 }/* 상세페이지 포인트 컬러 */
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
    .content li .txt_area .con_txt { text-align: justify;margin: 0 0 50px }/* 텍스트 영역 내용 스타일 */
    .content li .txt_area .con_txt_2 { margin: 0 0 30px }/* 텍스트 영역 내용 스타일 2 */
    .content li .txt_area .con_txt_2:last-child { margin: 0 }
    .content li .txt_area .con_txt_3 { margin: 0 0 50px;border-bottom: 1px solid #ddd }/* 텍스트 영역 내용 스타일 3 */
    .content li .txt_area .con_txt_3:last-child { margin: 0;border: none }

    /* 리스트 스타일 생성 */
    .list_st li { position: relative;padding: 0 0 4px 30px }
    .list_st li .number { position: absolute;display: inline-block;width: 5px;height: 5px;top: 0;left: 0}/* 리스트 스타일 1 */
    .list_st li .bullet { content: '';position: absolute;display: inline-block;width: 5px;height: 5px;background: #222;border-radius: 50%;top: 10px;left: 0}/* 리스트 스타일 2 */
    
    
    table { font-size: 0.85rem }
    
    /* type01 : 줄노트형식 */
    table.type01 { border-collapse: collapse;text-align: left;line-height: 1.6;border-top: 3px solid #404953;border-bottom: 3px solid #404953 }
    table.type01 th { padding: 10px 0 10px 20px;vertical-align: middle }
    table.type01 td { padding: 10px 0 10px 20px;vertical-align: top }
    table.type01 .even { background: #f4f4f4 }
    
    /* type02 : 헤더에 배경색/왼쪽-항목명/오른쪽-내용 기본테이블형식 */
    table.type02 { border-collapse: collapse;line-height: 1.6;border-bottom: 3px solid #404953 }
    table.type02 thead th { padding: 10px;vertical-align: middle;color: #fff;background: #404953 }
    table.type02 tbody th { padding: 10px;vertical-align: middle;font-weight: 500;border-bottom: 1px solid #e1e1e1;border-right: 1px solid #e1e1e1 }
    table.type02 tbody td { padding: 10px;vertical-align: middle;border-bottom: 1px solid #e1e1e1;border-right: 1px solid #e1e1e1 }
    table.type02 tbody td.none { border-right: none }
    
    /* type03 : 항목명과 내용이 가로정렬 되어있는 테이블형식 */
    table.type03 { border-collapse: collapse;text-align: left;line-height: 1.6;border-top: 3px solid #404953;border-bottom: 3px solid #404953 }
    table.type03 th { padding: 10px 20px;vertical-align: middle }
    table.type03 td { padding: 10px 20px;vertical-align: middle }
    table.type03 .even { background: #f4f4f4 }
    table.type03 .headerT { background: #404953;color: #fff;text-align: center;vertical-align: middle }

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
    <!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 시작 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">Vegan Society 소개</a></li>
			<li><a href="javascript:;">식품 &amp; Restaurant</a></li>
            <li><a href="javascript:;">화장품</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 종료  +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
  
    <!--+++ 20.05.01 탭컨텐츠 영역 시작 +++-->
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block">
            <section class="business_type5" class="area">
                <h1 class="tit_num">비건 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">Vegan Society(영국)</h2>
                <p class="outline">
                    비건 소사이어티(The Vegan Society)는 1944년 11월 창립자 도날드 왓슨(Donald Watson)과 6명의 창립 멤버들이 함께 설립한 비영리 단체입니다. 비건(VEGAN)이라는 새로운 베지테리언 개념과 신조어를 탄생시킨 단체이자 세계에서 가장 오래된 독창적인 비건 조직입니다. 비건 소사이어티는 1944 년에 '비건(VEGAN)'라는 단어를 만들었습니다.<br><br>
                    세계에서 가장 오래되고 독창적인 완전 채식 단체인 비건 소사이어티는 1990 년에 제품 라벨링을 개선하기 위해 국제 비건 상표를 설립했습니다. 비건 소사이어티는 29 년 동안 전 세계에 제품을 등록해 왔으며 비건 상표는 전 세계 35,000 개가 넘는 제품에서 찾을 수 있습니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan1_01.jpg" alt="Vegan Trademark / 비건 인증마크">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Vegan Trademark / 비건 인증마크</h3>
                                <p style="text-align: justify">
                                    1990년에 비건 제품의 라벨링을 개선하기 위해 ‘국제 비건 트레이드마크(Vegan Trademark)’를 확립했습니다. 엄격한 기준과 꼼꼼한 심사를 통과한 제품들에 트레이드마크를 허용하고 있기 때문에 가장 공신력 있는 국제 비건 마크로 알려져 있습니다. 29년 동안 전 세계의 제품을 등록해 왔으며 전세계 35,000개가 넘는 제품에서 비건 상표를 확인할 수 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan1_02.jpg" alt="제품 등록 기준">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">제품 등록 기준</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>동물성 성분
                                    </span>
                                    <p>
                                        제품의 제조 및/또는 개발, 그리고 해당되는 경우 그 성분은 동물성 제품, 부산물 또는 파생물의 사용을 포함하거나 관련되어서는 안됩니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>동물 실험
                                    </span>
                                    <p>
                                        제품의 제조 및/또는 개발, 그리고 해당되는 경우, 회사나 회사의 주도로 또는 회사를 대신하여 수행된 동물에 대한 모든 종류의 시험을 포함하거나 관여해서는 안됩니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>교차오염
                                    </span>
                                    <p>
                                        동물에서 얻어진 성분의 잠재적인 교차오염을 가능한 한 방지해야 합니다. Vegan 생산라인은 사용하기 전에 최소한의 표면과 기기들을 철저히 청소해야 합니다. 생산공간에서의 non-vegan 원료에 의한 교차 오염 위험성을 인지하고, 이를 제거하기위해 모든 합리적, 실질적인 조치를 취해야 합니다. 동일 공간에서 Vegan과 non-vegan을 생산한다면 non-vegan 라인부터 할 것을 강력히 권장합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="bullet"></span>유전자조작생물(GMO’s)
                                    </span>
                                    <p>
                                        유전자 변형 생물의 개발 및/또는 생산은 동물의 유전자나 동물유래 성분을 포함하지 않아야 하며, GMO를 포함할 수 있는 제품의 경우 라벨링을 해야 합니다.
                                    </p>
                                </div>
                                <p>
                                    ※ 동물은 모든 척추 동물과 다세포 무척추 동물을 포함하는 동물계를 의미합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan1_011.jpg" alt="Vegan Trademark 선택 이점">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Vegan Trademark 선택 이점</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>가장 오래된 공신력 있는 Vegan 조직입니다.</li>
                                    <li><span class="number">2. </span>Vegan 제품 등록 평가를 위한 전문팀을 보유하고 있습니다.</li>
                                    <li><span class="number">3. </span>Vegan 상표는 국제적으로 소비자들이 식별하기 더 쉽습니다.</li>
                                    <li><span class="number">4. </span>Vegan Trademark 로고는 소비자들에게 제품이 그들의 윤리적 기준에 부합한다는 확신을 줍니다.</li>
                                    <li><span class="number">5. </span>고객은 등록이 되면 포장, 마케팅 자료, 온라인에 로고를 사용 등 혜택을 받을 수 있습니다.</li>
                                    <li><span class="number">6. </span>제품 업데이트 및 추가는 수수료에 포함되어 등록기간 동안 추가 비용이 없습니다.</li>
                                    <li><span class="number">7. </span>고객들은 The Vegan Society가 참석하는 전시에 샘플을 제공할 수 있습니다.</li>
                                    <li><span class="number">8. </span>현재 35,000 개 이상의 제품이 상표에 등록되어 있습니다.</li>
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
                        <li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
                        <li><p><em><strong>02</strong></em><span>제품 인증-식품 (Vegan 인증, HALAL 인증, 유라시아 인증, 위생등록, FDA 등록/승인)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>제품 인증-화장품 (Vegan 인증, 유라시아 인증, VCRP, EWG, CPNP)</span></p></li>
                        <li><p><em><strong>04</strong></em><span>제품 시험</span></p></li>
                        <li><p><em><strong>05</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>06</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 01 Vegan Society 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 02 식품 & Restaurant 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">비건 제품인증</h1>
                <h2 class="tit_cer fc_pointer">식품 &amp; Restaurant</h2>
                <div class="outline">
                    The Vegan Society (영국비건협회)는 1944년 11월에 설립한 비영리 단체입니다. 세계에서 가장 오래된 독창적인 비건 조직으로써 70여년이 지난 지금까지도 전세계 그 어떤 비건 단체보다 활발한 활동으로 비건 개념과 필요성을 널리 확산시키고 있습니다.
                </div>
                <div class="outline">
                    <ul class="list_st">
                        <li><span class="bullet"></span>가장 오랜 역사와 경험을 가진 독창적인 비건 조직입니다.</li>
                        <li><span class="bullet"></span>‘VEGAN’이라는 신조어를 탄생시켜 새로운 트랜드를 선도하는 세계적인 권위를 가지고 있습니다.</li>
                        <li><span class="bullet"></span>개별 제품에 대한 마크 적용 기준을 철저히 준수하고, 완제품에 더 이상 남아있지 않은 성분을 포함하여 그 어떠한 동물성 성분 함유 가능성도 남아있지 않도록 세심하게 검토합니다.</li>
                        <li><span class="bullet"></span>Vegan Trademark는 전세계 소비자들이 쉽게 식별할 수 있는 국제 마크입니다.</li>
                        <li><span class="bullet"></span>Vegan Trademark Logo는 소비자들에게 제품이 윤리적 기준을 충족한다는 확신을 줍니다.</li>
                        <li><span class="bullet"></span>License 기간 동안 제품과 관련된 모든 홍보물에 마크를 사용함으로써 다양한 홍보효과를 얻을 수 있습니다.</li>
                        <li><span class="bullet"></span>전세계 35,000개가 넘는 제품이 Vegan Trademark에 등록되어 있습니다.</li>
                        <li><span class="bullet"></span>제조라인이나 설비에 대한 현장 실사 없이 100% 서류 심사로만 진행됩니다.</li>
                    </ul>
                </div>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan_certification_01.jpg" alt="비건 인증의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">비건 인증의 중요성</h3>
                                <p style="text-align: justify">
                                    비건 인증은 동물 유래 원재료를 사용하거나 이용하지 않고, 교차오염 되지 않도록 관리하며, 제품에 동물실험을 실시하지 않는 기준으로 부여하는 인증입니다. Vegan Trademark는 까다로운 인증절차를 거쳤기 때문에 소비자들이 세부 원재료를 확인해야 하는 번거로움을 덜 수 있으며, 비건 제품을 쉽게 선택할 수 있습니다. 제품을 제조하는 생산자 역시, 제조하는 비건 제품을 자신감 있게 홍보하고 제품의 신뢰성을 재고하여 수익 증대에 도움을 줄 수 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan1_01_01.jpg" alt="Vegan Trademark 등록 기준">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Vegan Trademark 등록 기준</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Animal Ingredients (동물성 원료 &amp; 동물 유래 성분)
                                    </span>
                                    <p>
                                        원료 선택부터 제품의 제조 및/또는 전체 생산 단계에 걸쳐 그 어떠한 동물성 원료 및 생산품, 부산품, 부산물 혹은 파생물의 사용을 포함하거나 관련되어서는 안됩니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Animal Testing (동물 실험)
                                    </span>
                                    <p>
                                        제품의 제조 및/또는 개발, 그리고 제품 성분에 대해 회사의 주도로 혹은 회사를 대신하여 혹은 회사가 통제할 수 있는 관계자에 의해 어떠한 종류의 동물에게도 실험을 하거나 실험을 했던 적이 없어야 합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Genetically Modified Organisms (GMO) (유전자 변형 생물)
                                    </span>
                                    <p>
                                        유전자 변형 생물체 (GMO)의 개발 및 생산과정에서 동물의 유전자 또는 동물 유래 성분과 절대 관련되지 않아야 합니다. 단, 식물성 성분은 해당되지 않습니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Cross Contamination with Non-vegan (논비건과의 교차오염)
                                    </span>
                                    <p>
                                        동물성 원료 및 동물 유래 성분과의 잠재적 교차오염을 최대한 방지해야 합니다. Vegan 생산라인을 가동하기 전에 최소한의 사용면적과 기기들을 반드시 세척해야 합니다. 생산과정에서 Non-vegan 물질로부터 교차오염 될 수 있다는 위험성을 인지하고, 이를 방지하기 위해 모든 실천적, 합리적 조치를 취해야 합니다. Vegan과 Non-vegan을 동일라인에서 생산하는 경우, Non-vegan라인부터 먼저 생산하는 것을 권장합니다.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan_certification_02.jpg" alt="Vegan Trademark 등록 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Vegan Trademark 등록 절차</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>과정
                                    </span>
                                    <p>
                                        상담문의 ➜ 견적 제공 ➜ 신청서 접수 ➜ 비용 완납 ➜ 서류심사 ➜ 계약서 서명 ➜ 인증서 발행 ➜ 제품등록 ➜ 마크 적용 ➜ 완료<br><br>
                                        ‣ 예상 소요기간 : 평균 6개월
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>License 조건
                                    </span>
                                    <p>
                                        Vegan Trademark에 대한 License는 12개월 또는 24개월 중 선택이 가능하며, 유효기간이 종료되기 1~2개월 전에 영국에서 갱신여부를 확인합니다. 갱신 시 제품에 대한 변경사항 (제품명/디자인 변경/전성분 변경/제품 단종 등)이 없으면 기존 License 비용과 동일한 금액을 지불하고 재계약을 통해 기간을 연장할 수 있습니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>기간
                                    </span>
                                    <p>
                                        신청서 접수 후 등록이 완료되기까지 약 3~6개월 정도 소요됩니다. 소요기간은 제품 및 전성분의 종류, 서류 대응 속도, 비용 처리, 커뮤니케이션의 효율성 등 여러가지 요인에 따라 다소 차이가 있을 수 있습니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>비용
                                    </span>
                                    <p>
                                        License 비용은 회사의 연매출, 제품 등록 수, 제품의 종류 등을 고려하여 유연하게 산정됩니다. 만약 제품의 비건 여부를 심사하는 도중 제품이 비건에 부적합하다고 판단되어 등록이 불가한 경우, 지불 금액의 50%가 환불됩니다.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan_certification_03.jpg" alt="IGC인증의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증의 역량</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC는 The Vegan Society와 협력하여 비건 인증을 실시하고 있습니다.</li>
                                    <li><span class="bullet"></span>IGC는 다년간 쌓아온 기술력 및 전문성을 통해 비건 인증의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                    <li><span class="bullet"></span>광범위한 식품 관련 인증 제공업체인 IGC는 고도로 숙련되고 지식을 갖춘 심사원의 방대한 네트워크를 활용하여 최고의 인증서비스를 제공합니다.</li>
                                    <li><span class="bullet"></span>IGC는 식품 관련 인증의 선두기관으로서 비건 인증의 까다로운 절차를 빠르고 정확하게 제공합니다.</li>
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

        </article><!----// 컨텐츠 02 식품 & Restaurant 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 03 화장품 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">비건 제품인증</h1>
                <h2 class="tit_cer fc_pointer">화장품</h2>
                <div class="outline">
                    The Vegan Society (영국비건협회)는 1944년 11월에 설립한 비영리 단체입니다. 세계에서 가장 오래된 독창적인 비건 조직으로써 70여년이 지난 지금까지도 전세계 그 어떤 비건 단체보다 활발한 활동으로 비건 개념과 필요성을 널리 확산시키고 있습니다.
                </div>
                <div class="outline">
                    <ul class="list_st">
                        <li><span class="bullet"></span>가장 오랜 역사와 경험을 가진 독창적인 비건 조직입니다.</li>
                        <li><span class="bullet"></span>‘VEGAN’이라는 신조어를 탄생시켜 새로운 트랜드를 선도하는 세계적인 권위를 가지고 있습니다.</li>
                        <li><span class="bullet"></span>개별 제품에 대한 마크 적용 기준을 철저히 준수하고, 완제품에 더 이상 남아있지 않은 성분을 포함하여 그 어떠한 동물성 성분 함유 가능성도 남아있지 않도록 세심하게 검토합니다.</li>
                        <li><span class="bullet"></span>Vegan Trademark는 전세계 소비자들이 쉽게 식별할 수 있는 국제 마크입니다.</li>
                        <li><span class="bullet"></span>Vegan Trademark Logo는 소비자들에게 제품이 윤리적 기준을 충족한다는 확신을 줍니다.</li>
                        <li><span class="bullet"></span>License 기간 동안 제품과 관련된 모든 홍보물에 마크를 사용함으로써 다양한 홍보효과를 얻을 수 있습니다.</li>
                        <li><span class="bullet"></span>전세계 35,000개가 넘는 제품이 Vegan Trademark에 등록되어 있습니다.</li>
                        <li><span class="bullet"></span>제조라인이나 설비에 대한 현장 실사 없이 100% 서류 심사로만 진행됩니다.</li>
                    </ul>
                </div>
                
                <ul class="content">
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan_cosmetic_01.jpg" alt="비건 인증의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">비건 인증의 중요성</h3>
                                <p style="text-align: justify">
                                    비건 인증은 동물 유래 원재료를 사용하거나 이용하지 않고, 교차오염 되지 않도록 관리하며, 제품에 동물실험을 실시하지 않는 기준으로 부여하는 인증입니다. Vegan Trademark는 까다로운 인증절차를 거쳤기 때문에 소비자들이 세부 원재료를 확인해야 하는 번거로움을 덜 수 있으며, 비건 제품을 쉽게 선택할 수 있습니다. 제품을 제조하는 생산자 역시, 제조하는 비건 제품을 자신감 있게 홍보하고 제품의 신뢰성을 재고하여 수익 증대에 도움을 줄 수 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan_cosmetic_02.jpg" alt="Vegan Trademark 등록 기준">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Vegan Trademark 등록 기준</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Animal Ingredients (동물성 원료 &amp; 동물 유래 성분)
                                    </span>
                                    <p>
                                        원료 선택부터 제품의 제조 및/또는 전체 생산 단계에 걸쳐 그 어떠한 동물성 원료 및 생산품, 부산품, 부산물 혹은 파생물의 사용을 포함하거나 관련되어서는 안됩니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Animal Testing (동물 실험)
                                    </span>
                                    <p>
                                        제품의 제조 및/또는 개발, 그리고 제품 성분에 대해 회사의 주도로 혹은 회사를 대신하여 혹은 회사가 통제할 수 있는 관계자에 의해 어떠한 종류의 동물에게도 실험을 하거나 실험을 했던 적이 없어야 합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Genetically Modified Organisms (GMO) (유전자 변형 생물)
                                    </span>
                                    <p>
                                        유전자 변형 생물체 (GMO)의 개발 및 생산과정에서 동물의 유전자 또는 동물 유래 성분과 절대 관련되지 않아야 합니다. 단, 식물성 성분은 해당되지 않습니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>Cross Contamination with Non-vegan (논비건과의 교차오염)
                                    </span>
                                    <p>
                                        동물성 원료 및 동물 유래 성분과의 잠재적 교차오염을 최대한 방지해야 합니다. Vegan 생산라인을 가동하기 전에 최소한의 사용면적과 기기들을 반드시 세척해야 합니다. 생산과정에서 Non-vegan 물질로부터 교차오염 될 수 있다는 위험성을 인지하고, 이를 방지하기 위해 모든 실천적, 합리적 조치를 취해야 합니다. Vegan과 Non-vegan을 동일라인에서 생산하는 경우, Non-vegan라인부터 먼저 생산하는 것을 권장합니다.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_vegan_cosmetic_03.jpg" alt="Vegan Trademark 등록 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Vegan Trademark 등록 절차</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">
                                        <span class="number">&#10020; </span>비건 인증 절차
                                    </span>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li><span class="number">1. </span>접수</li>
                                            <li>
                                                <span class="number">2. </span>서류 검토사항 확인
                                                <div>
                                                    <ul class="list_st">
                                                        <li><span class="bullet"></span>인증 받고자 하는 제품에 대한 서류를 제출합니다. (신청서, 동의서, OEM 계약서 등)</li>
                                                        <li><span class="bullet"></span>신청서 검토 및 보완 요청</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><span class="number">3. </span>수수료 납부</li>
                                            <li><span class="number">4. </span>원재료 검토 서류심사 (동물성 유전자 검사)</li>
                                            <li><span class="number">5. </span>적합 / 보완 / 취소 판정에 따른 보완 요청</li>
                                            <li><span class="number">6. </span>동물성 DNA 검사 실시</li>
                                            <li><span class="number">7. </span>동물성 유전자 불검출임이 확인 후 최종심사</li>
                                            <li><span class="number">8. </span>비건 인증 발급</li>
                                        </ul>
                                    </div>
                                    <p>※ 공식적인 인증 처리기한은 30일 입니다.</p>
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
                        <li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 22716)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>제품인증 (Vegan 인증, 유라시아 인증, VCRP, EWG, CPNP)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>04</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 03 화장품 컨텐츠 종료 //------->
        
    </div><!------div class="tab_con" 종료 --------->
</div> <!--------// div class="content_wrap"  종료  ------------------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>