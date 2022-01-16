<?php
	include_once('./_common.php');
$g5['title'] = '한국 KC 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    table.type03 .even { border-top: 1px solid #e1e1e1;border-bottom: 1px solid #e1e1e1 }
    table.type03 .headerT { background: #404953;color: #fff;text-align: center;vertical-align: middle }

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
        .tit_img { width: 90%;margin: 0 auto 50px }
        
        .content li .img_area { width: 90%;margin: 50px auto 0 }/* 이미지 크기/여백 조정 */
        
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */
        
    }

    
    /* ============= 상세페이지 반응형 종료 ============= */

</style>


<div class="content_wrap">
	<section class="business_type5" class="area">
		<h1 class="tit_num">안전인증/전자파인증</h1>
		<h2 class="tit_cer fc_pointer">KC인증</h2>
		<p class="outline">
		    해외 수입 또는 국내에서 제조한 전기제품이 국내에서 유통 및 판매되어 소비자가 사용시 화재, 감전 등 안전사고 방지를 위하여 안전인증기관으로부터 인증 받은 제품만이 유통 및 판매하도록 한국 정부가 지정한 강제 인증 제도입니다.<br><br>
		    인증대상에 포함된 제품이 인증을 받지 않은 경우 대한민국 내에서 판매가 불가능합니다. 해외제품을 수입하는 경우 KC 인증서가 없으면 제품은 통관이 불가능합니다.
		</p>
        <div class="tit_img">
            <img src="./images/igc_078_kc_00.jpg" alt="KC인증 로고" style="width: 100%">
        </div>
        
        <ul class="content">
            <li><!-- content 01 -->
                <dl>
                    <dt></dt>
                    <dd class="txt_area" style="width:90%;margin:0 auto">
                        <h3 class="con_tit" style="text-align:center">KC인증의 종류</h3>
                        <p class="con_txt">
                            KC인증은 크게 '안전인증'과 '전자파인증'으로 구분됩니다. 이 경우 주관부처가 다르기 때문에 각각 인증을 진행하여야 하며, 인증이 완료되면 별도의 인증번호와 인증서가 발행됩니다. '안전인증' 및 '전자파인증'은 대상제품의 품목(종류)/기능(사양)에 따라 아래와 같이 세분화됩니다.
                        </p>
                        <div class="con_txt_2">
                            <table class="type03">
                                <tbody>
                                    <tr>
                                        <td width="20%" rowspan="3" class="headerT">
                                            <p>안전 인증</p>
                                        </td>
                                        <td width="20%">
                                            <p>안전 인증</p>
                                        </td>
                                        <td width="60%">
                                            <p>엄격한 관리가 필요한 제품군으로 제품 심사 및 제조공장에 대한 공장 심사를 실시합니다. </p>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td width="20%">
                                            <p>안전 확인</p>
                                        </td>
                                        <td width="60%">
                                            <p>국가에서 지정한 안전인증기관을 통해 제품 심사를 실시합니다.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">
                                            <p>공급자 적합성 확인</p>
                                        </td>
                                        <td width="60%">
                                            <p>공급자 스스로 또는 민간시험소에서 실시한 제품 시험도 인정됩니다.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="con_txt_2">
                            <table class="type03">
                                <tbody>
                                    <tr>
                                        <td width="20%" rowspan="2" class="headerT">
                                            <p>전자파 인증</p>
                                        </td>
                                        <td width="20%">
                                            <p>전자파 적합 등록</p>
                                        </td>
                                        <td width="60%">
                                            <p>무선기능이 없는 일반 전기제품을 대상으로 하며 제품 심사를 실시합니다. </p>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td width="20%">
                                            <p>적합 인증</p>
                                        </td>
                                        <td width="60%">
                                            <p>무선기능이 있는 일반 전기제품을 대상으로 하며 제품 심사를 실시합니다.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </dd>
                </dl>
            </li>
            
            <li><!-- content 02 -->
                <dl>
                    <dt class="img_area">
                        <img src="./images/igc_078_kc_01.jpg" alt="KC인증의 절차">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">KC인증의 절차</h3>
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">1. </span>안전인증 신청
                            </span>
                            <p style="text-align: justify">
                                안전인증 대상 전기용품을 국내에서 제조하거나 해외에서 제조하여 한국으로 수출하려는 조직은 전기용품 안전인증기관으로부터 모델별로 인증을 받아야 합니다. 인증을 받으려는 신청자는 출고 전이나 통관하기 전에 전기용품 안전인증 신청서에 해당 서류를 첨부하여 안전 인증기관에 제출하여야 하며, 외국 제조자가 안전인증을 신청하는 경우에는 국내에 거주하는 자를 대리인으로 선정하여 안전 인증신청을 할 수 있으며, 이 경우 인증의 모든 권한은 제조자에게 있습니다.
                            </p>
                        </div>
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">2. </span>신청 서류
                            </span>
                            <ul class="list_st">
                                <li><span class="bullet"></span>전기용품 안전인증 신청서</li>
                                <li><span class="bullet"></span>제품 사용 설명서</li>
                                <li><span class="bullet"></span>제품 사양서</li>
                                <li><span class="bullet"></span>전기회로 도면</li>
                                <li><span class="bullet"></span>부품 리스트 (인증품 여부 및 인증서 포함)</li>
                                <li><span class="bullet"></span>대리인임을 증명하는 서류 (대리인이 신청하는 경우)</li>
                                <li><span class="bullet"></span>제품시험 시료 1개 (안전기준에서 다르게 정한 것이 없을 때는 1개로 하되, 전자파 장해시험이 포함된 경우에는 1개 추가)</li>
                                <li><span class="bullet"></span>관련 부품 (안전 인증 대상 전기용품으로서 인증을 받지 않는 부품)</li>
                            </ul>
                        </div>
                        <div class="con_txt_2">
                            외국 제조업자가 안전인증을 신청한 경우, 시험에 필요한 수입시료를 통관하기 위하여 그 외국 제조업자의 시료 확인서 발급신청이 있으면 안전인증 시료 확인서를 작성하여 발급할 수 있습니다.
                        </div>
                        <div class="con_txt_2">
                            <span class="point_blk">
                                <span class="number">3. </span>KC인증 절차
                            </span>
                            <ul class="list_st">
                                <li><span class="bullet"></span>제조자가 안전인증기관에 안전인증신청서 제출</li>
                                <li><span class="bullet"></span>안전인증기관에서 신청서 접수 및 검토</li>
                                <li><span class="bullet"></span>안전인증기관에서 공장검사와 제품시험 실시</li>
                                <li><span class="bullet"></span>합격 시 안전인증서 발급 후 인증서 수령 및 안전인증 표시</li>
                                <li><span class="bullet"></span>이후 정기검사 실시 (불합격시 결과 조치)</li>
                            </ul>
                        </div>
                    </dd>
                </dl>
            </li>
            
            <li><!-- content 03 -->
                <dl>
                    <dt class="img_area">
                        <img src="./images/products_09_04.jpg" alt="IGC인증의 역량">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">IGC인증의 역량</h3>
                        <ul class="list_st">
                            <li><span class="bullet"></span>IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                            <li><span class="bullet"></span>IGC는 자동차 분야에서의 고객들에게 전문적이고 경쟁력 있는 서비스를 제공합니다.</li>
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
                <li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 유라시아 인증)</span></p></li>
                <li><p><em><strong>03</strong></em><span>제품 시험 (전기 안전, 기계 안전)</span></p></li>
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