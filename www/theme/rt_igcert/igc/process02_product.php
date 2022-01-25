<?php
	include_once('./_common.php');
$g5['title'] = '인증절차';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

    /* 이 페이지는 jquery 로 작동됩니다.	*/
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 


<style>
    .content_wrap { 
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        font-size: 1rem;
        text-align:justify;
        font-weight: 400;
        line-height: 1.6 
    }
    .txtBox02 {  /* 상세페이지 타이틀 박스 */
        display: block;
        color:#006699;
        font-size: 1.6rem;
        font-weight: 500;
        text-align: center;
        border-radius: 5px;
        background: #f9f9f9;
        width: 100%;
        padding: 25px 0;
        margin: 0 0 20px;
    }
    .page_title img{margin-bottom:40px;} /*배너 이미지*/
	.page_title h2.sub_txt{ /* 타이틀 하단 텍스트 */
        margin:0 auto 50px; 
        text-align:center;
        color:#666; 
        font-weight:400;
        font-size:0.95rem;
    }
    .page_title h2.sub_txt:after {
        content: "";
        clear: both;
        display: block;
        width: 30px;
        margin: 50px auto 0;
        border: 1px solid #333;
    }
    /* ------------ 컨텐츠 ----------- */  
	.vision_type2 p.stitle {
        display:block; 
        margin-bottom:50px; 
    }
    .vision_type2 .img_div{
        width:100%;
        margin-bottom:60px;
        padding-bottom:50px;
        border-bottom:1px solid #ddd;
    }
	.vision_type2 .img_div img{
        width:90%; 
        margin:0 5% 10px;
    }
    .vision_type2 .img_div span{
        display:block;
        text-align:center;
        font-size:0.8rem;
        color: #1eafed;
    }
    
    /*인증절차 리스트*/
    .step_list{margin:80px 0 60px;}
    .step_list li{
        overflow:hidden;
        width:100%;
        height:200px;
        padding:20px 30px;
        margin:35px 0;
        background:#f7f7f7;
        border-radius:200px;
        position:relative;
        box-shadow:1px 1px 6px 4px #f0f0f0;
        text-align: justify;
    }
    .step_list li .step_number{ /*STEP CIRCLE*/
        position:absolute;
        top:30px;
        left:20px;
        width:140px;
        height:140px;
        border-radius:50%;
        border:1px solid #f0f0f0;
        background:#fff;
        color:#0a4f81;
        font-size:1.5rem;
        font-weight:500;
        line-height:140px;
        text-align:center;
    }
    .step_list .step_tt{
        font-size:1.5rem;
        color:#79af0d;
        font-weight:500;
        margin-left:160px;
        margin-bottom:5px;
    }
    .step_list .step_txt{
        font-weight:400;
        line-height:1.8rem;
        margin-left:160px;
    }
    
    
    /* 인증의 확대와 축소, 인증의 정지 및 취소 시작 */
    .vision_type5{margin-bottom:80px}
	.vision_type5 h3.title { /* 컨텐츠 타이틀 */
        position:relative; 
        font-size:1.5rem; 
        color:#000; 
        margin-bottom:20px; 
    }
	.vision_type5 h3.title:before{
        content: "";
        display: block;
        width: 30px;
        height: 2px;
        background: #3296dd;
        position: absolute;
        left: 0;
        top:-8px;
    }
    .vision_area{margin-bottom:80px;} /* 확대 축소 컨텐츠 박스 */
    .vision_area:last-child{margin-bottom:0px;}
    .box_title{
        font-size:1.4rem;
        color:#102f45;
        font-weight:500;
    }
    .box_content_txt{
        color:#222;
        font-weight:400;
        line-height:1.8em;
    }
    .box_content_txt>li{width:100%;}
    .content_box1, .content_box2{
        width:100%;
        height:auto;
        overflow:hidden;
        display:table;
    }
    .content_box1 .title_box, .content_box2 .title_box{ /* 왼쪽 타이틀 박스 */
        display:table-cell;
        width:30%;
        height:auto;
        vertical-align: middle;
        text-align:center;
        font-size:1.2rem;
        font-weight:400;
        background:#005bab;
        color:#fff;
    }
    .content_box2 .title_box{ background:#36b1d4;}
     .content_box1 .title_box>.material-icons,.content_box2 .title_box>.material-icons{
        display:block;
        font-size:1.8rem;
        margin-bottom:10px;
    }
    .content_box1 .text_box, .content_box2 .text_box{ /* 오른쪽 텍스트 박스 */
        display:table-cell;
        width:70%;
        height:auto;
        padding:20px 25px;
        color:#333;
        font-weight:400;
        background:#f7f7f7;
    }
    .text_box>ul:not(.text_box_first){
        width:98%;
        margin:5px 0 0 2%;
    }
    .text_box>ul li{
        color:#333;
        font-weight:400;
        font-size:0.95rem;
        line-height:1.7em;
        padding:3px 0;
        width:100%;
        text-align: justify;
    }
    .text_box>p{
        font-size:1.1em;
        line-height:1.7em;
        font-weight:500;
        color:#79af0d;
        margin-top:15px;
    }
    

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


    @media (max-width:1280px) {
        
        .step_list li{ height:230px; }
        .step_list li .step_number{ top:45px; } /*STEP CIRCLE*/
        
    }

    
    @media (max-width:1024px) {
        
        .step_list{ margin:60px 0; }
        .step_list li{ height:310px;padding:20px;border-radius:20px; }
        .step_list li .step_number{ top:25px;left:20px;width:110px; height:110px;line-height:110px; } /*STEP CIRCLE*/
        .step_list .step_tt{margin-left:125px;}
        .step_list .step_txt{margin-left:125px;}
    
    }


    @media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        
        .txtBox02{display:none;} 
        .step_list li{padding:25px 25px 30px;height:auto;line-height:1.6em;}
        .step_list li .step_number{ position:static;width:50px;height:50px;margin:0 auto 0px;border:1px solid #f0f0f0;font-size:1.6rem;line-height:46px; } /*STEP CIRCLE*/
        .step_list li .step_number>span{display:none;}
        .step_list .step_tt{margin-left:0;margin-top:15px;text-align:center;}
        .step_list .step_txt{margin-left:0;margin-top:15px;text-align:center;}
        
        .content_box1 .title_box, .content_box2 .title_box{display:none;}
        .content_box1 .text_box, .content_box2 .text_box{width:100%;padding:0; background:#fff;}
        
        .partner_type2 .con_box ul li { float:left; width:100%; list-style:none; margin:10px 0; } /* 사업영역 */
        
    }

   
    @media all and (max-device-width : 640px) { 
        
        .content_wrap { font-size: 0.85rem }/* 전체 폰트 사이즈 조정 */
        .page_title h2.sub_txt{font-size:0.85rem;}
        .step_list li{padding:20px 20px 30px;height:auto;}
        .step_list li .step_number{ width:42px;height:42px;font-size:1.2rem;line-height:40px; } /*STEP CIRCLE*/
        .step_list .step_tt{font-size:1.2rem;}
        .step_list .step_txt{margin-top:10px;}
        
        .vision_type5 h3.title{ font-size:1.1rem; } /* 타이틀 폰트 사이즈 축소 */
        .vision_type5 h3.title:before { width:20px; } /* 타이틀 위 선 넓이 축소 */
        .text_box>ul li{font-size:0.85rem;}
        .partner_type2 .con_arrow p { font-size: 1.4rem }/* 사업영역 타이틀 폰트 사이즈 조정 */
    }



    @media all and (min-width:360px) and (max-device-width : 414px) { 
        .vision_type2 .stitle{margin-bottom:40px;}
        .vision_type2 .img_div{width:100%;margin:0%;}
        .step_list{margin:50px 0;}
        .step_list .step_txt{line-height:1.6}
        
        .vision_type5{margin-bottom:60px}
        
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */

    } 
    
   /* ============= 상세페이지 반응형 종료 ============= */
    
</style>



<div class="content_wrap">
	<div class="page_title">
	    <img src="./images/banner03_07.png" alt="제품절차 배너">
		<h1 class="txtBox02">제품인증 절차 안내</h1>
		<h2 class="sub_txt">제품인증은 관련 국가 및 인증 종류별로 세부 인증 절차가 상이하므로, 정확한 절차는 카테고리별 안내 페이지에서 확인하실 수 있습니다.</h2>
	</div>
    
    <!--------------// class="vision_type2" //--------------->
	<div class="vision_type2">
		<p class="stitle">
            (주)아이지씨인증원은 시시각각 변화하는 글로벌 교류 분야에서 좀 더 빠르고 손쉽게 접근하는 방법을 연구합니다.
            상품 개발과 생산성 향상을 위해 지속적이고도 끊임없는 개선에 매진하며 품질 혁신 생산능력 향상을 통해 산업 발전에 기여하겠습니다.
        </p>
		<div class="img_div">
		  <img src="./images/process_02_product.png" alt="인증절차 이미지">
		</div>

        <!-- 제품 절차 리스트-->
		<ul class="step_list">
			<li>
                <div class="step_number"><span>STEP</span> 1</div>
				<div class="step_tt"> 인증문의 및 제안</div>
                <div class="step_txt">
                    인증신청 전 인증심사에 대한 전반적인 절차 및 방법에 대하여 상담해 드리며
                    기업의 요청 시 인증심사기간 및 인증비용에 대한 제안서를 보내드립니다.
				</div>
			</li>
			
			<li>
                <div class="step_number"><span>STEP</span> 2</div>
                <div class="step_tt">신청서 접수</div>
                <div class="step_txt">
                    기업은 해당 제품 및 인증에 대한 신청서를 ㈜아이지씨인증원에 제출합니다.			
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 3</div>
                <div class="step_tt">계약 체결</div>
                <div class="step_txt">
                     계약서 작성을 통해 제품 인증에 대한 계약을 체결합니다.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 4</div>
                <div class="step_tt">관련서류 제출</div>
                <div class="step_txt">
				    기업은 기술문서 등 제품에 대한 관련 서류를 ㈜아이지씨인증원에 제출합니다.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 5</div>
                <div class="step_tt">1단계 심사(문서 심사)</div>
                <div class="step_txt">
                    (해당 시) 제품 인증과 관련하여 문서심사를 실시합니다.					
				</div>
			</li>
			
			<li>
                <div class="step_number"><span>STEP</span> 6</div>
                <div class="step_tt">2단계 심사(현장 심사)</div>
                <div class="step_txt">
                     (해당 시) 2단계 심사는 제품 인증 관련 규정 또는 지침에 대한 요구조건을 충족시키고 있는지에 대한 실질적인 사실을 현장심사를 통하여 확인하기 위해 실시하며, 객관적인 사실에 의거 요구사항을 충족한다면 인증 추천을 받습니다.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 7</div>
                <div class="step_tt">부적합 시정조치</div>
                <div class="step_txt">
                    심사 결과 부적합 사항은 시정조치가 수행되어야 하며,
                    시정조치 결과는 서면 확인 또는 현장 심사 시 확인을 통해 이루어집니다.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 8</div>
                <div class="step_tt">인증심의</div>
                <div class="step_txt">
                    인증위원회를 통하여 심사의 전 과정에 대한
				    적절성을 평가하여 인증등록 여부를 결정합니다.						
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 9</div>
                <div class="step_tt">인증서 발행</div>
                <div class="step_txt">
                     인증등록이 결정되면
                     인증서가 발행되어 고객에게 전달됩니다.
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 10</div>
                <div class="step_tt">사후관리 심사</div>
                <div class="step_txt">
                    인증 등록 조직이 인증조건을 지속적으로 준수하고 있음을 검증하기 위하여 실시되면, 최초 현장심사 절차에 준하여 실시됩니다
                    정기 사후관리 심사 주기는 최초 심사일로부터 매해 이루어지며, ISO국제규정 및 IAF MD 규정에 따라 정기적으로 진행되어야 합니다.<br>
                    <SMALL>[비고] 사후 1차 심사는 이전 인증결정일로부터 12개월을 초과할 수 없다.</SMALL>
				</div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 11</div>
                <div class="step_tt">재인증 심사</div>
                <div class="step_txt">
                    3년 마다 인증의 재인증을 목적으로 실히하며,<br>
						최초 인증심사와 동일한 절차에 준하여 실시합니다.						
				</div>
			</li>
        </ul>
    </div>		
			
	<br><br>
    
    <!---//인증의 확대와 축소, 인증의 정지 및 취소 시작 ----->			
	<div class="vision_type5">
	
		<div class="vision_area">
            <h3 class="title">인증의 확대 및 축소</h3>
            <ul class="box_content_txt">
                <li class="clear content_box1">
                    <div class="title_box"><span class="material-icons">open_in_full</span>인증의 확대 및 축소</div>
                    <div class="text_box">
                        <p>인증의 확대</p>
                        <ul>
                            <li>
                            인증된 조직이 인증범위의 확대 또는 현장의 추가가 고려되는 경우, 인증 확대에 대한 신청을 할 수 있습니다. <br>
                            신청을 접수한 인증기관은 이에 대해 검토 후, 필요한 심사활동을 실시하여 승인 여부를 결정합니다.
                            </li>
                        </ul>

                        <p>인증의 축소</p>
                        <ul>
                            <li>
                            인증된 조직이 인증 범위 상 명기된 특정 제품 또는 서비스를 중단하거나, 등록된 현장의 철수 또는 서비스 제공이 중단된 경우, 조직은 1개월 내로 인증기관에 통보하여야 합니다. 통보를 받은 인증기관은 이를 검토후, 필요한 심사활동을 실시하여 승인 여부를 결정합니다. 인증범위가 축소되는 경우 모든 관련 홍보물에 대한 수정도 실시가 되어야 합니다.
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div> <!----// class="vision_area" 종료----->


        <div class="vision_area">
            <h3 class="title">인증의 정지 및 취소</h3>
            <ul class="box_content_txt">
                <li class="clear content_box2">
                    <div class="title_box"><span class="material-icons">block</span>인증의 정지 및 취소</div>
                    <div class="text_box">
                        <ul class="text_box_first">
                            <li>
                            인증을 받은 조직은 다음 경우로 제한되는 것은 아니지만, 다음의 경우에 인증의 효력이 정지되거나 취소 될 수 있으며 인증서가 회수될 수 있습니다. 이러한 정지 또는 취소 사유가 발생시, 인증원은 해당사안에 대해 검토 후 정지 또는 취소에 대한 결정을 내립니다. 조직은 인증의 정지 또는 취소 시, 인증 상태에 대해 언급한 모든 홍보물의 사용을 중지함을 보장하여야 합니다
                            </li>
                        </ul>
                        <p>인증의 정지</p>
                        <ul>
                            <li>&bull; 정해진 기한 내에 사후관리심사가 이루어지지 않은 경우(이전 인증결정일로부터 12개월이내에 사후심사가 이루어지지 않은 경우</li>
                            <li>&bull; 인증유지를 위한 심사결과 인증시스템이 적용규격 요구사항을 충족시키기 위한 자원 및 조직이 없거나 인증시스템이 대부분 가동되지 않은 경우</li>
                            <li>&bull; 이해관계자로부터 클레임이나 사회적 물의에 의하여 인증시스템에 대한 신뢰성이 없는 경우</li>
                            <li>&bull; 인증제도 및 인증요구사항의 변경에 대한 인증등록조직의 대응조치가 취해지지 않은 경우</li>
                            <li>&bull; 현장확인심사 결과 중부적합이 발생하여 재확인심사를 실시한 결과 중부적합이 재 발생된 경우</li>
                            <li>&bull; 인증마크의 오용으로 시정명령을 받은 이후 1개월 이내에 관련내용이 시정되지 않은 경우</li>
                            <li>&bull; 인증심사비용을 3개월 이상 연체한 경우</li>
                            <li>&bull; 인증계약에 따른 조직의 의무사항을 준수하지 않았을 경우</li>
                            <li>&bull; 인증서의 적용범위를 초과하여 사용한 경우</li>
                            <li>&bull; 계약 또는 합의사항을 위반한 경우</li>
                        </ul>

                        <p>인증의 취소</p>
                        <ul>
                            <li>&bull; 효력정지 처분에도 불구하고 3개월이 지나도록 시정조치가 이루어지지 않을 경우</li>
                            <li>&bull; 인증등록 조직에서 공식적으로 인증서를 반납한 경우</li>
                            <li>&bull; 인증범위에 포함된 제품(공정)의 생산, 활동이나 서비스가 중단된 경우</li>
                            <li>&bull; 인증등록 조직의 해체, 연락두절등으로 인증대상조직의 실체가 없어지거나 확인되지 않은 경우</li>
                            <li>&bull; 사후심사의 경우 정지 처분 후 1개월 이내에 심사가 진행되지 않을 경우</li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div> <!----class="vision_area 종료------>
    </div> <!--//class="vision_type5" 종료---->
    
   
   <!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>(주)아이지씨인증원 사업영역</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>경영시스템 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품인증 서비스</span></p></li>
				<li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증 서비스</span></p></li>
				<li><p><em><strong>05</strong></em><span>심사원 교육 및 양성</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>
   
</div>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
<!----위 코드 관련 내용 : 상단 메인메뉴 ----->