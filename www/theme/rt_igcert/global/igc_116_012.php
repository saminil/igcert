<?php
	include_once('./_common.php');
$g5['title'] = '연수기관 개요';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #B37012 }/* 상세페이지 포인트 컬러 */
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
		<h1 class="tit_cer fc_pointer">연수기관 개요</h1>
		<p class="outline">
		    연수기관은 다양한 산업분야에 종사하는 모든 인원들에게 산업분야에 적용되는 표준에 근거하여 전문 인력 양성을 위한 교육 서비스를 제공하는 기관을 의미합니다.<br><br>
		    IPC (International Personnel Certification Association)는 IPC의 활동분야 (개인인증 및 연수기관 지정)에 대하여 IAF (International Accreditation Forum)와 MLA를 체결하였고 IPC의 정회원인 국제 개인인증기관 GPC(Global Personnel Certification)는 IPC MLA를 통해 연수기관 지정에 대한 업무를 수행하고 있습니다.
		</p>
        <div class="tit_img">
            <img src="./images/traininginstitutions_01.jpg" alt="연수기관이란?" style="width: 100%">
        </div>
        <p class="outline">
            이에 IGC는 GPC로부터 공식 연수기관 지정을 받아 다양한 산업분야에 대해 교육서비스를 제공하고 있습니다. IGC가 제공하는 교육서비스는 국내는 물론 전 세계 어디서나 동일하게 인정받을 수 있는 국제적인 서비스로 높은 신뢰성을 확보하고 있습니다.
        </p>
       
        
        <ul class="content">
            <li><!-- content 01 -->
                <dl>
                    <dt class="img_area">
                        <img src="./images/traininginstitutions_02.jpg" alt="IGC 교육 분야">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">IGC 교육 분야</h3>
                        <p class="con_txt">
                            IGC는 다양한 인증스킴 확보를 토대로 다음과 같은 다양한 서비스의 제공이 가능합니다.
                        </p>
                        <ul class="list_st">
                            <li><span class="number">1. </span>ISO 경영시스템 심사원/선임심사원/내부심사원 양성 교육</li>
                            <li><span class="number">2. </span>FSSC 22000 교육 (FSSC 본사 공인 교육기관)</li>
                            <li><span class="number">3. </span>FDA, FSMA 교육 (FSVP, PCQI)</li>
                            <li><span class="number">4. </span>전기 전자 시험 교육</li>
                            <li><span class="number">5. </span>식품 영양 시험 교육 (화학, 생물학적)</li>
                            <li><span class="number">6. </span>CE/MDR 교육</li>
                            <li><span class="number">7. </span>ISO/IEC 17021 교육</li>
                            <li><span class="number">8. </span>ISO/IEC 17025 교육</li>
                            <li><span class="number">9. </span>ISO 19011 교육</li>
                        </ul>
                    </dd>
                </dl>
            </li>
            
            <li><!-- content 02 -->
                <dl>
                    <dt class="img_area">
                        <img src="./images/traininginstitutions_03.jpg" alt="협력기관 GPC의 역량">
                    </dt>
                    <dd class="txt_area">
                        <h3 class="con_tit">협력기관 GPC의 역량</h3>
                        <p class="con_txt">
                            GPC는 다양한 인증스킴 확보를 토대로 다음과 같은 다양한 서비스의 제공이 가능합니다.
                        </p>
                        <ul class="list_st">
                            <li><span class="number">&#10020; </span>GPC는 ISO/IEC 17024에 의거하여 미국에 소재한 International Accreditation Service (IAS)로부터 인정받은 개인의 자격을 인증해주는 국제적인 개인인증 기관입니다.</li>
                            <li><span class="number">&#10020; </span>개인인증은 적용되는 표준에 근거하여 능력의 적합성을 평가한 후 인증서를 발행합니다.</li>
                            <li><span class="number">&#10020; </span>IAF 산하의 지역기구인 EA(유럽인정협력기구), APAC(아시아태평양인정협력기구)가 개인인증에 대한 MLA가 체결된 상태이며 나머지 지역기구인 IAAC(미주인정협력기구)까지 MLA 체결 시 모든 개인자격 인증 또한 IAF 로고가 적용된 개인인증서를 발행할 수 있도록 요청할 예정입니다.</li>
                            <li><span class="number">&#10020; </span>GPC는 다양한 인증스킴 확보를 통해 개인의 자격을 위한 다양한 서비스를 제공함으로써 수준 높은 전문인력을 양성하기 위해 지속적으로 노력할 것입니다.</li>
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
                <li><p><em><strong>02</strong></em><span>시험</span></p></li>
                <li><p><em><strong>03</strong></em><span>전문인력 양성 교육</span></p></li>
                <li><p><em><strong>04</strong></em><span>제품 인증</span></p></li>
                <li><p><em><strong>05</strong></em><span>심사원 인증</span></p></li>
                <li><p><em><strong>06</strong></em><span>연수기관 지정</span></p></li>
            </ul>
        </div>
    </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------>
    
</div>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>