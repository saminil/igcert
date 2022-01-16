<?php
	include_once('./_common.php');
$g5['title'] = '유라시아 제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
			<li><a href="javascript:;">EAC 인증</a></li>
			<li class="on"><a href="javascript:;">의료기기</a></li>
			<li><a href="javascript:;">식품</a></li>
			<li><a href="javascript:;">화장품</a></li>
			<li><a href="javascript:;">의약품</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

    <!--+++ 20.05.07 탭컨텐츠 영역 시작 +++-->
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 +++++-->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">유라시아 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">EAC(TRCU)</h2>
                <p class="outline">
                    TRCU는 Technical Regulation of Customs Union의 약어로 러시아를 중심으로 한 관세동맹(Customs Union)의 기술규정을 의미합니다.<br><br>
                    TRCU는 2010년 러시아, 카자흐스탄, 벨라루스 3개국이 결성한 유라시안 관세동맹 “EACU, Eurasian Customs Union”을 시작으로, 2015년 유라시안 경제연합 “EEU, Eurasian Economic Union”에서 발효 한 통합 인증제도입니다.<br><br>
                    현재 유라시안 관세동맹/경제연합은 러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아 총 5개국으로 결성되어있으며, TRCU인증은 유라시안 경제 위원회 결정을 따라 규정된 인증절차를 따릅니다.<br><br>
                    인증서 상에는 EAC 마크가 부착되며 이는 Eurasian Conformity를 뜻합니다.
                </p>
                
                <div style="width:100%">
                    <img src="./images/product_eactrcu_01.png" alt="EAC 인증 로고" style="float:left;width:45%;margin:0 2.5%;">
                    <img src="./images/product_eactrcu_02.png" alt="EAC 인증 로고" style="float:left;width:45%;margin:0 2.5%;">
                </div>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">TRCU EAC 규격</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_EACTRCU_011.jpg" alt="TRCU EAC 규격">
                                    </div>
                                </div>
                                <table class="type02">
                                    <thead style="text-align:center">
                                        <tr style="border-bottom:1px solid #fff">
                                            <th scope="cols" rowspan="2" style="border-right:1px solid #fff;width:20%">
                                                <p>기술규정 명칭</p>
                                            </th>
                                            <th scope="cols" style="border-right:1px solid #fff">
                                                <p>기술규정 구체적 내용(국문 명)</p>
                                            </th>
                                            <th scope="cols" rowspan="2" style="border-right:1px solid #fff">
                                                <p>품목</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="cols" style="border-right:1px solid #fff">
                                                <p>(영문 명)</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 001/2011</p>
                                            </th>
                                            <td>
                                                <p>철도차량 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>철도차량</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of railway rolling stock”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 002/2011</p>
                                            </th>
                                            <td>
                                                <p>고속열차 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>고속열차</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of high-speed railway transport”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 003/2011</p>
                                            </th>
                                            <td>
                                                <p>철도교통 인프라 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>철도교통 인프라</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of railway transport infrastructure”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 004/2011</p>
                                            </th>
                                            <td>
                                                <p>저전압 장비 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>저전압 장비</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of Low-voltage equipment”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 005/2011</p>
                                            </th>
                                            <td>
                                                <p>포장재 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>포장재</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of packages”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 006/2011</p>
                                            </th>
                                            <td>
                                                <p>폭죽 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>폭죽</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of pyrotechnic articles”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 007/2011</p>
                                            </th>
                                            <td>
                                                <p>유아 및 청소년 용품 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>유아 및 청소년 용품</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of products intended for children and adolescents”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 008/2011</p>
                                            </th>
                                            <td>
                                                <p>장난감 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>장난감</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of toys”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 009/2011</p>
                                            </th>
                                            <td>
                                                <p>향수 및 화장품 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>향수 및 화장품</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of perfumes and cosmetics”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 010/2011</p>
                                            </th>
                                            <td>
                                                <p>기계 및 설치장비 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>기계 및 장비류</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of machinery and equipment”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 011/2011</p>
                                            </th>
                                            <td>
                                                <p>승강기 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>승강기</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of elevators”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 012/2011</p>
                                            </th>
                                            <td>
                                                <p>폭발가능환경 작업을 위한 장비의 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>폭발가능대비 보호장비</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of equipment in explosion hazardous environments”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 013/2011</p>
                                            </th>
                                            <td>
                                                <p>연료(휘발유, 경유, 제트연료)에 대한 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>연료(휘발유, 경유, 제트연료)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“0n requirements to motor and aviation petrol, diesel and marine, fuel, reactive engines fuel and black oil”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 014/2011</p>
                                            </th>
                                            <td>
                                                <p>자동차 도로 안전 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>자동차 도로</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of roads”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 015/2011</p>
                                            </th>
                                            <td>
                                                <p>곡물 안전성 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>곡물</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of grain”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 016/2011</p>
                                            </th>
                                            <td>
                                                <p>가스연료 장치 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>가스연료 장치</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of apparatuses working on gaseous fuel”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 017/2011</p>
                                            </th>
                                            <td>
                                                <p>경공업 제품 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>경공업 제품</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of light industry products”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 018/2011</p>
                                            </th>
                                            <td>
                                                <p>차륜 차량 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>차륜 차량</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of wheeled vehicles”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 019/2011</p>
                                            </th>
                                            <td>
                                                <p>개인보호장비 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>개인보호용품</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of personal protection equipment”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 020/2011</p>
                                            </th>
                                            <td>
                                                <p>전자제품 전자기 호환성 관련 기술 규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>전자제품</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of Electromagnetic compatibility of technical devices”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 021/2011</p>
                                            </th>
                                            <td>
                                                <p>식품 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>식품</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of food products”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 022/2011</p>
                                            </th>
                                            <td>
                                                <p>식품 라벨링 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>식품 라벨링</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of food products in terms of their marking”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 023/2011</p>
                                            </th>
                                            <td>
                                                <p>야채 및 과일음료 기술 규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>야채 및 과일음료</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of juice products made of fruit and vegetables”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 024/2011</p>
                                            </th>
                                            <td>
                                                <p>유지제품 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>유지제품</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of oil &amp; fat products”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 025/2012</p>
                                            </th>
                                            <td>
                                                <p>가구제품 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>가구제품</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of furniture”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 026/2012</p>
                                            </th>
                                            <td>
                                                <p>소형선박 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>소형선박</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of small-size crafts“</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 027/2012</p>
                                            </th>
                                            <td>
                                                <p>건강 기능성 식품 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>건강 기능성 식품</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of certain types of specialized food products, including food for dietary treatment and protective diet”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 028/2012</p>
                                            </th>
                                            <td>
                                                <p>폭발성 물질 및 제품 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>폭발성 물질 및 제품</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of explosives and products on their basis”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 029/2012</p>
                                            </th>
                                            <td>
                                                <p>식품 첨가물 안전 규격 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>식품 첨가물</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On requirements for food additives, flavoring agents and processing supplements”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 030/2012</p>
                                            </th>
                                            <td>
                                                <p>윤활류 규격 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>윤활류</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On requirements for lubricants, oils and special liquids”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 031/2012</p>
                                            </th>
                                            <td>
                                                <p>농·임업용 트랙터 및 트레일러 안전관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>농·임업용 트랙터 및 트레일러</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of agricultural and forestry tractors and trailers thereto”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 032/2013</p>
                                            </th>
                                            <td>
                                                <p>고압장비 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>고압장비</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of pressure equipment”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 033/2013</p>
                                            </th>
                                            <td>
                                                <p>우유 및 유제품 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>우유 및 유제품</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On the safety of milk and dairy products”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 034/2013</p>
                                            </th>
                                            <td>
                                                <p>육류 및 육류제품 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>육류 및 육류제품</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of meat and meat products“</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТR CU 035/2014</p>
                                            </th>
                                            <td>
                                                <p>담배제품 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>담배제품</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of tobacco products”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>TR EAEU 036/2016</p>
                                            </th>
                                            <td>
                                                <p>가스연료의 관련 조건</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>가스연료</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On requirements for liquified petroleum gases foe use as fuel”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>TR EAEU 037/2016</p>
                                            </th>
                                            <td>
                                                <p>전기 및 전자 장비에서 특정 유해 물질의 사용 제한에 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>전기 및 전자 장비</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“Restricting usage of hazardous substances in the electrical goods and radio electronics”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>TR EAEU 038/2016</p>
                                            </th>
                                            <td>
                                                <p>놀이기구의 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>놀이기구</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of amusement rides”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>TR EAEU 039/2016</p>
                                            </th>
                                            <td>
                                                <p>광물비료 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>광물비료</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On requirements for mineral fertilizers”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>ТР EAEC 040/2016</p>
                                            </th>
                                            <td>
                                                <p>어류 및 어류제품 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>어류 및 어류제품</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of fish and fish products”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>TR EAEU 041/2017<br>(2021년 6월 2일 시행될 예정)</p>
                                            </th>
                                            <td>
                                                <p>화학물질 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>화학물질</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of chemical products”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>TR EAEU 042/2017</p>
                                            </th>
                                            <td>
                                                <p>어린이 놀이터 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>어린이 놀이터</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of chemical products”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>TR EAEU 043/2017</p>
                                            </th>
                                            <td>
                                                <p>화재지연제 및 소화시스템 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>화재지연제 및 소화시스템</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of equipment for children’s playgrounds”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>TR EAEU 044/2017</p>
                                            </th>
                                            <td>
                                                <p>생수 및 천연 미네랄 워터의 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>생수 및 천연 미네랄 워터</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of packaged drinking water, including natural mineral water”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>TR EAEU 045/2017</p>
                                            </th>
                                            <td>
                                                <p>미네랄 오일 안전 관련 기수규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>미네랄 오일</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>“On safety of oil prepared for transportation and(or) use”</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>TR EAEU 046/2018<br>(2022년 1월 1일 시행될 예정)</p>
                                            </th>
                                            <td>
                                                <p>천연가스 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>천연가스</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>"On safety of natural flammable gas, prepared for transportation or usage"</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" rowspan="2">
                                                <p>TR EAEU 047/2018</p>
                                            </th>
                                            <td>
                                                <p>알코올 음료의 안전 관련 기술규정</p>
                                            </td>
                                            <td rowspan="2" class="none">
                                                <p>알코올 음료</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>"On safety of alcohol products”</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_eactrcu_03.png" alt="EAC CoC">
                                <span style="display:block;text-align:center;">EAC CoC</span>
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">TRCU EAC 인증 유형</h3>
                                <div class="con_txt">
                                    TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두 가지로 분류됩니다.
                                </div>
                                <div style="text-align:justify">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>TRCU CoC</span>
                                    <p>압력 용기류, 수공구류, 크레인, 승강기, 일부 기계류, 시험장비, 전기전자제품 등의 제품군이 해당되며, 샘플시험 또는 공장심사가 요구됩니다.</p>
                                </div>

                            </dd>
                        </dl>
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_eactrcu_04.png" alt="EAC DoC">
                                <span style="display:block;text-align:center;">EAC DoC</span>
                            </dt>
                            <dd class="txt_area">
                                <div style="text-align:justify">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>TRCU DoC</span>
                                    <p>비교적 위험성이 작은 일반 제품에 해당되며 일부 제품은 서류심사만으로 인증서 발급이 가능합니다. CoC의 경우 지정시험소를 통한 제품 시험을 원칙으로 하고 있으나 다수의 인증기관에서 추가 시험 없이 CB Safety 성적서 등을 인정하여 인증서를 발행하고 있습니다.</p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_EACTRCU_013.jpg" alt="TRCU EAC 인증 유효기간">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">TRCU EAC 인증 유효기간</h3>
                                <p style="text-align:justify">
                                    단일 선적에 대한 인증 (One-Shipment: Single Delivery Certification): 주로 플랜트 등 단발성(1회성)으로 수출하는 물품인 경우와 제 3자나 다른 일반적인 소비자에게 재판매가 되지 않는 경우에 해당하며 수입자와의 계약서에 표기된 계약이행 기간까지 유효합니다.<br><br>
                                    연속 생산 (Serial Production Certification): 계속적인 수출이 예상되는 경우에 유리하며 한 번의 인증을 통해 최대 5년까지 유효한 인증서를 받을 수 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_EACTRCU_014.jpg" alt="TRCU EAC 인증 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">TRCU EAC 인증 절차</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>인증기관에 신청서 및 제품 관련 서류 제출</li>
                                    <li><span class="number">2. </span>서류 검토</li>
                                    <li><span class="number">3. </span>적용되는 인증서 유형 확인</li>
                                    <li><span class="number">4. </span>샘플 시험 및 공장심사 여부 확인</li>
                                    <li><span class="number">5. </span>견적서 발행 및 계약</li>
                                    <li><span class="number">6. </span>샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행</li>
                                    <li><span class="number">7. </span>공장심사 필요 시, 심사 진행</li>
                                    <li><span class="number">8. </span>인증서 초안 발행 및 고객 확인</li>
                                    <li><span class="number">9. </span>인증서 발행</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_EACTRCU_015.jpg" alt="TRCU EAC 제출 서류">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">TRCU EAC 제출 서류</h3>
                                <div class="con_txt">
                                    제조업체가 제출해야할 서류는 다음과 같습니다. (이에 국한되지 않으며 필요에 따라 추가될 수 있습니다.)
                                </div>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>신청서</li>
                                    <li><span class="bullet"></span>HS Code</li>
                                    <li><span class="bullet"></span>제품 설명서 (러시아어 또는 수출국 언어)</li>
                                    <li><span class="bullet"></span>기 보유 시험 성적서</li>
                                    <li><span class="bullet"></span>기 보유 인증서</li>
                                    <li><span class="bullet"></span>도면 (해당 시)</li>
                                    <li><span class="bullet"></span>기술문서 (해당 시)</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-6 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_EACTRCU_013.jpg" alt="유라시아 인증 신청자">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">유라시아 인증 신청자</h3>
                                <p class="con_txt">
                                    <span class="point_blk">Rosakkreditasiya 대장(Register)</span>
                                    TRCU인증, GOST R인증은 Rosakkreditasiya 웹사이트에 등록됩니다.<br><br>
                                    <a href="https://www.fsa.gov.ru/">Rosakkreditasiya 웹사이트 바로가기 (https://www.fsa.gov.ru/) ☜ 클릭</a>
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>TRCU인증, GOST R인증 등을 신청할 경우 러시아 또는 기타 관세동맹 국가에서 위치한 업체만 신청자가 될 수 있습니다. 해당 업체는 법적실체 또는 개인사업자여야 하며 일반인은 인증의 신청자가 될 수 없습니다.</li>
                                    <li><span class="bullet"></span>IGC는 유라시아 지역 내에 신청자 역할을 할 수 있는 사업자가 없는 고객을 위해 Eurasia Representative 서비스를 제공하고 있습니다.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-7 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_EACTRCU_012.jpg" alt="왜 중요한가?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">왜 중요한가?</h3>
                                <p style="text-align:justify">
                                    유라시아 지역으로 상품을 수출하고자 하는 기업은 해당 기술규정에 따른 적합성 준수를 증명하는 인증을 받아야 하며 제품, 포장 또는 첨부 문서에 적합성 마크를 표시해야 해당 국가로 수출이 가능합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-8 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_evalu_07.jpg" alt="IGC인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증원의 역량</h3>
                                <p class="con_txt">
                                    IGC인증기관은 RUS-TEST PACIFIC인증기관과 협력하여 고객과 이해관계자들에게 경쟁력 있는 최고의 가치를 제공하여, 지속적 동반 성장을 통해 세계적인 인증기관으로 거듭나고 있습니다.<br><br>
                                    IGC는 다음을 준수합니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>법적 요구사항 준수</li>
                                    <li><span class="bullet"></span>팀워크 및 조직원간의 연대</li>
                                    <li><span class="bullet"></span>성실성과 공정성</li>
                                    <li><span class="bullet"></span>사회적 및 환경적 책임</li>
                                    <li><span class="bullet"></span>인증 및 등록 서비스 제공 업체로서의 지식과 학습을 통한 지속적인 발전과 개선활동</li>
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
                        <li><p><em><strong>02</strong></em><span>제품 인증(유럽, 유라시아, 미주, 중국, 동남아시아)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
                        <li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 01 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 02 의료기기 컨텐츠 시작 //------->
        <article style="display:block;">
            <section class="business_type5" class="area">
                <h1 class="tit_num">유라시아 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">의료기기</h2>
                <p class="outline">
                    러시아에 의료기기를 등록시키기 위해선 비록 CE 혹은 FDA등의 승인을 위하여 시험 등이 이루어 졌더라도 강제적인 요구 사항에 의하여 별도의 시험 등이 이루어 져야 하는 시간과 비용이 많이 소요됩니다. 러시아는 EU 또는 미국과 인증과 관련한 협약을 매지 않았기 때문에 EU의 CE 인증 또는 미국 FDA승인 등과 같은 국제적으로 인정된 인증서를 인정하지 않습니다.<br><br>
                    2002년 이후로 러시아 정부는 시험에 대한 부분을 제품안전 보장 등의 다른 형태인 생산현장 심사, 품질시스템 확인 및 시판 이후의 지속적 관리로 변경을 시작하였습니다. 하지만 그러한 시도는 성공을 거두지 못하였고 따라서 2013년 1월 1일부터 이러한 절차는 보다 강력하면서 현실적인 형태로 운영되게 되었습니다.<br><br>
                    건강 및 사회 발전 서비스를 제공하는 러시아 연방 보건 감독청인 Roszdravnadzor가 발행하는 공식 문서인 의료기기등록 인증서가 관련 의료기기에 대한 사전 평가를 통과하였기에 생산, 수입, 판매 및 러시아 내에서의 사용에 적합함을 승인하는 것입니다. 러시아에서 생산이 되었든 아니면 해외에서 러시아로 수입이 되었든 모든 의료기기는 등록이 되어야 합니다.<br><br>
                    등록 인증서에는 제조업체, 유통업자 또는 법정 대리인의 명칭이 포함됩니다. 암약 등록을 하고자 하는 의료기기가 다른 생산자가 제조 한 모듈/블록으로 구성되어 있지만 상표가 부착된 제품이 아닌 경우 각 모듈/블록은 개별적으로 등록하여야 합니다. 정부 법령 Jan. 17, 2002 N 19에 등재되어 있는 의료기기에 대하여 등록인증서가 있을 경우 생산 기업에게 부가세를 징수하지 않습니다.
                </p>
                
                <ul class="content">                    
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_03.jpg" alt="의료기기 Class 분류">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의료기기 Class 분류</h3>
                                <p class="con_txt">
                                    러시아에서 운영중인 의료기기에 대한 명명 및 등급은 Order N4H “About Conformation of Nomenclature Classification of Medical Devices”에 정리되어 있으며 체외진단 장비는 포함되지 않습니다. 체외진단 장비는 별도의 등급 규정에 따릅니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Class 1 – 낮은 위험</li>
                                    <li><span class="bullet"></span>Class 2a – 중간 위험</li>
                                    <li><span class="bullet"></span>Class 2b – 높은 위험</li>
                                    <li><span class="bullet"></span>Class 3 – 최상위 위험</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_04.jpg" alt="의료기기 등록 진행 시험 종류">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의료기기 등록 진행 시험 종류</h3>
                                <p class="con_txt">
                                    의료기기 등록에 따른 시험은 5월 06자의 2011 N 352법형에 따라 등록된 시험소에서만 진행이 가능하고, 임상 시험에 관해서는 이 기능을 수행할 수 있는 기관 목록이 Roszdravnadzor 웹 사이트에 게시되어 있습니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>독성시험</li>
                                    <li><span class="bullet"></span>기능시험</li>
                                    <li><span class="bullet"></span>전자파검사</li>
                                    <li><span class="bullet"></span>임상시험</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_05.jpg" alt="의료기기 등록 유효기간">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의료기기 등록 유효기간</h3>
                                <p style="text-align:justify">
                                    영구 (인증서에 등록된 해당제품이 단종될 때까지 유효합니다)
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_06.jpg" alt="의료기기 등록 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의료기기 등록 절차</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>기업의 대리인은 Rosdravnadzor가 러시아로 샘플을 보내는 것에 동의하는 허가 신청을 해야 하며, 이 권한은 6 개월 동안 유효합니다. 또한 대리인은 신청 제품에 대한 설명, 시험소와의 계약서, 변호사 또는 제조업체와의 계약서 등을 제공하여야 합니다.</li>
                                    <li><span class="number">2. </span>대리인은 샘플이 세관을 통과할 수 있도록 수속을 하여야 합니다. 또한 대표자는 샘플 외에도 계약서, 세관 공무원에게 제출할 문서 및 송장을 제공하여야 합니다.</li>
                                    <li><span class="number">3. </span>인정을 받은 실험소에서 독성시험, 기술시험 및 전기제품의 경우 전자파 시험을 실시합니다.</li>
                                    <li><span class="number">4. </span>(3단계와 동시 진행) 기업은 등록에 필요한 기술문서 전체를 준비하여야 합니다.</li>
                                    <li><span class="number">5. </span>의료 기기의 등급을 확정하고, 러시아에 등록된 유사 의료기기가 없는 경우 첫 번째 단계로 품질 평가, 효율성 및 안전성 시험이 실시되고, 그 이후 두 곳의 다른 의료기관에서 임상평가가 실시되어 두 번째 단계의 품질 평가, 효율성 및 안전성 평가가 수행됩니다.</li>
                                    <li><span class="number">6. </span>기업은 전체 기술문서를 Rospotrebnadzor에 제출합니다. 의료기기등록을 마친 후, 등록증을 근거로 GOST-R 인증서와 품목에 따른 위생인증서 및 제품의 특성에 따라 계측기 인증서를 확보하여야 합니다.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_01.jpg" alt="의료기기 등록 제출 서류">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의료기기 등록 제출 서류</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>등록 및 인증 절차 진행에 따른 제조자의 위임장 (공증 요망)</li>
                                    <li><span class="bullet"></span>본국의 회사 등록 증빙 자료 (예로서 상공회의소 자료, 내면 FDA 등록에 따른 증빙 자료 혹은 회사 등록 인증서, 사업 허가증)들은 공증이 되어 제출하여야 합니다.</li>
                                    <li><span class="bullet"></span>의료기기 적용 가능한 국내 혹은 국제 기관 발행의 ISO 9001 혹은 ISO 13485 인증서</li>
                                    <li><span class="bullet"></span>93/42/EEC의 요구 사항에 따른 적합성 인증서, 적합성 선언서, 자유판매 증명서, FDA 인증 증빙 자료, 자국 혹은 기타 국에 대한 의료기기 인증 증빙 자료. (공증하여 제출하여야 함)</li>
                                    <li><span class="bullet"></span>안전을 입증하는 시험 성적서 (IEC 60601-1, IEC 60601-1-2, ISO 10993 등) – 정확한 성적서는 시험소에서의 기술검사시 업무를 간략히 하는데 도움을 줄 수 있습니다.</li>
                                    <li><span class="bullet"></span>독성안전 / 생체적합성에 대한 안전성 시험 성적서</li>
                                    <li><span class="bullet"></span>기술 및 독성 시험 진행을 위한 셈플 제공</li>
                                    <li><span class="bullet"></span>의료기기 신규 등록 신청서 혹은 갱신 등록 신청서. 신청서는 반드시 신청자 (러시아에서 등록을 수행할 권한이 있는 법인) 레터 헤드를 사용하여야 합니다. 신청은 해당 의료기기 혹은 장비에 포함되는 모든 구성품 및 부품에 대한 설명을 포함하여야 합니다. 신청은 러시아어로 제출하여야 합니다.</li>
                                    <li><span class="bullet"></span>신청 업무를 수행할 법적 대리인 선임에 대한 위임장을 제출합니다. 제조 회사는 등록 권한이 있는 법인 (법인 책임자에게 주소 지정)에게 위임장을 발급해 주어야 하며 제조업체의 원산지 국가에서 공증을 받아야합니다. 또한 러시아어로 번역되어야 하며 자국 소재의 러시아 영사관에서 공증을 받아야 합니다. 위임장은 제조업체가 신청자가 의료 기기/장비의 등록을 수행하고 상담 및 전문 작업을 수행한다는 계약에 서명하고 등록 인증서를 받도록 위임해야 한다고 명시해야 합니다.</li>
                                    <li><span class="number">※ </span>등록 프로세스에는 GMP (Good Manufacturing Practices) 심사가 필요하지 않습니다. 하지만 이러한 심사를 도입할 법안은 가까운 시일 내에 시행될 예정입니다.</li>
                                    <li><span class="number">※ </span>일반적으로 등록 비용은 필요한 테스트 범위에 따라 달라집니다.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-6 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_02.jpg" alt="의료기기 등록 확인">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의료기기 등록 확인</h3>
                                <p class="con_txt">
                                    러시아어 버전의 Rospotrebnadzor 웹 사이트에서 의료 기기의 등록 상태를 확인할 수 있습니다.<br><br>
                                    <a href="http://roszdravnadzor.ru/registration/mi/login">☞ Rospotrebnadzor 웹 사이트 바로가기 ☜</a>
                                </p>
                                <p style="text-align:justify">
                                    Class 1 및 2a의 의료기기의 경우 유사한 제품일 경우 (동일한 등급, 동일한 방법으로 적용, 동일한 효율) 두 제품이 동등하거나 기술 테스트, 안전을 기반으로 등록됩니다.<br><br>
                                    Class 2b, 3, 1 및 2a를 포함한 다른 모든 제품 (이미 등록을 마친 유사제품이 존재하지 않을 경우) 들은 효과 및 안전성을 확인하는 기술 테스트, 안전성 평가, 임상 및 의료 테스트를 기반으로 등록됩니다.
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
                        <li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 임상평가, 의료기기등록[유라시아, 중국, 미국, 태국, 대만])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>04</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 02 의료기기 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 03 식품 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">유라시아 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">식품</h2>
                <p class="outline">
                    유라시아 지역으로 식품을 수출하고자 하는 경우 해당 기술규정에 따른 적합성 준수를 증명하는 인증을 받아야 하며 제품, 포장 또는 첨부 문서에 적합성 마크를 표시해야 해당 국가로 수출이 가능합니다.<br><br>
                    경제연합/관세 동맹에 가입된 국가 (러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)로 수출할 경우 Technical Regulation of Customs Union (TRCU) 규정에 따른 EAC 인증 또는 GOST 인증을 받아야 하며 우즈베키스탄 등 기타 유라시아 국가로 수출할 경우에는 국가별 인증을 받아야 합니다.<br><br>
                    식품에 대한 인증은 EAC, GOST 및 State Registration Certificate으로 구분됩니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_food_02.jpg" alt="유라시아 제품인증 (EAC)">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">유라시아 제품인증 (EAC)</h3>
                                <p class="con_txt">
                                    TRCU는 Technical Regulation of Customs Union의 약어로 러시아를 중심으로 한 관세동맹(Customs Union)의 기술규정을 의미합니다.<br><br>
                                    TRCU는 2010년 러시아, 카자흐스탄, 벨라루스 3개국이 결성한 유라시안 관세동맹 “EACU, Eurasian Customs Union”을 시작으로, 2015년 유라시안 경제연합 “EEU, Eurasian Economic Union”에서 발효 한 통합 인증제도 입니다.<br><br>
                                    현재 유라시안 관세동맹/경제연합은 러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아 총 5개국으로 결성되어 있으며, TRCU인증은 유라시안 경제 위원회 결정을 따라 규정된 인증절차를 따릅니다.<br><br>
                                    인증서 상에는 EAC 마크가 부착되며 이는 Eurasian Conformity를 뜻합니다.
                                </p>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">1) TRCU EAC 적용 품목 (식품)</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>TR СU 015/2011 On safety of grain 곡물</li>
                                        <li><span class="bullet"></span>TR CU 021/2011 On safety of food product 식품</li>
                                        <li><span class="bullet"></span>TR СU 022/2011 On food products in terms of its marking 식품 라벨링</li>
                                        <li><span class="bullet"></span>TR CU 023/2011 On juice production of vegetables and fruits 야채 및 과일음료</li>
                                        <li><span class="bullet"></span>TR CU 024/2011 On oil and fat products 지방 및 유제품</li>
                                        <li><span class="bullet"></span>TR CU 027/2012 On safety of certain types of specialized food products, including foods for dietary treatment and dietary preventive nutrition 다이어트 식품을 포함한 특정 유형 식품</li>
                                        <li><span class="bullet"></span>TR CU 029/2012 Requirements for the safety of food additives, flavorings and technological aids 식품첨가물, 향료</li>
                                        <li><span class="bullet"></span>TR CU 033/2013 On safety of milk and dairy products 우유 및 유제품</li>
                                        <li><span class="bullet"></span>TR CU 034/2013 On safety of meat and meat products 육류 및 육류제품</li>
                                        <li><span class="bullet"></span>TR CU 040/2016 On safety of fish and fish products 어류 및 어류제품</li>
                                        <li><span class="bullet"></span>TR CU 044/2017 On the safety of packaged drinking water, including natural mineral water 생수</li>
                                        <li><span class="bullet"></span>TR CU 047/2018 On safety of alcohol products 주류</li>
                                    </ul>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">2) EAC 인증서 유형</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>DoC (Declaration of Conformity): 비교적 위험성이 작은 제품군이 해당하며, 일부 제품은 서류심사 만으로 인증서 발급 가능합니다. 식품은 EAC DoC에 해당합니다.</li>
                                    </ul>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">3) EAC 인증 정보</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>제출서류 : 신청서, 제품 매뉴얼, HS Code, 도면, 기술문서, 기 보유 시험성적서, 기 보유 인증서 (제출서류는 러시아어로 작성되어야 함)</li>
                                        <li><span class="bullet"></span>샘플시험 : 제품에 따라 샘플 제출 및 시험 여부가 결정됩니다.</li>
                                        <li><span class="bullet"></span>공장심사 : 없음</li>
                                        <li><span class="bullet"></span>소요기간 : 2주 (샘플발송 및 샘플시험기간 제외)</li>
                                        <li><span class="bullet"></span>인증서 유효기간 : 최대 5년 (Serial Production Certification)</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                                      
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_food_01.jpg" alt="유라시아 제품인증 (GOST)">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">유라시아 제품인증 (GOST)</h3>
                                <p class="con_txt">
                                    GOST는 Euro-Asian Council for Standardization, Metrology and Certification (EASC)에서 규정한 국가기술표준규격으로 러시아어로 연방 규격을 뜻하는 GOsudarstvennyy STandart의 약어입니다.<br><br>
                                    현재 국가별 발행되는 GOST 인증서와 발행하는 인증기관의 주체가 다른 만큼, 국가별 GOST 인증서는 각각 다른 인증서이며 러시아는 GOST-R, 카자흐스탄은 GOST-K 등으로 구분 지어 불리고 있습니다.<br><br>
                                    관세동맹국가 간 발효된 통합 인증제도인 EAC의 도입 이후 해당국가 내에서 GOST인증 비중은 예전에 비하여 크게 줄었습니다. 하지만 아직 관세동맹국간에 협의가 이루지지 않은 강제인증 품목들에 한해서는 여전히 수입통관 시 GOST 인증이 요구됩니다.
                                </p>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">1) GOST 적용 품목 (식품)</span>
                                    <p style="text-align:justify">
                                        육류, 어류, 패류, 채소/과일류, 곡물류, 유자류, 주류/음료 등 유라시안 관세동맹국가간 발효된 통합 인증제도의 도입 후, 러시아 내 GOST 인증 비중은 예전에 비하여 크게 줄어들었지만, 아직 동맹국 간 협의가 이루지지 않은 강제인증 품목은 GOST 인증을 받아야 합니다. 또한 EAC 인증을 받은 기업이 고객 홍보, 신뢰 확보 등을 이유로 추가적으로 자발적 GOST 인증서를 신청하기도 합니다.
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">2) GOST 인증서 유형</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>GOST DoC (Declaration of Conformity)</li>
                                        <li><span class="bullet"></span>GOST Voluntary (자발적 GOST)</li>
                                    </ul>
                                    <p style="text-align:justify">
                                        GOST Voluntary는 의무적으로 GOST 인증을 받아야 하는 제품은 아니지만 제품이 적용 규정과 지침에 따라 만들어 졌음을 증명하는 인증서로, 주로 EAC 인증을 받는 기업이 홍보, 신뢰 확보 등을 이유로 GOST Voluntary를 추가적으로 신청하여 받고 있습니다. GOST Voluntary 인증서의 추가적인 확보는 귀사의 관리 능력을 보다 명확히 보여주는 기대 효과를 가져와 수출 증대 효과를 확보해 줄 것입니다.
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">3) GOST인증 정보</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>제출서류 : 신청서, 제품 매뉴얼, HS Code, 도면, 기술문서, 기 보유 시험성적서, 기 보유 인증서 (제출서류는 러시아어로 작성되어야 함)</li>
                                        <li><span class="bullet"></span>샘플시험 : 제품에 따라 샘플 제출 및 시험 여부가 결정됨</li>
                                        <li><span class="bullet"></span>공장심사 : 없음</li>
                                        <li><span class="bullet"></span>소요기간 : 2주 (샘플발송 및 샘플시험기간 제외)</li>
                                        <li><span class="bullet"></span>인증서 유효기간 : 3년 (Serial Production Certification)</li>
                                    </ul>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">4) 인증 진행 절차</span>
                                    <p class="con_txt">
                                        TRCU EAC, GOST 및 State Registration Certificate 인증 절차
                                    </p>
                                    <ul class="list_st">
                                        <li><span class="number">1. </span>인증기관에 신청서 및 제품 관련 서류 제출</li>
                                        <li><span class="number">2. </span>서류 검토</li>
                                        <li><span class="number">3. </span>적용되는 인증서 유형 확인</li>
                                        <li><span class="number">4. </span>샘플 시험 및 공장심사 여부 확인</li>
                                        <li><span class="number">5. </span>견적서 발행 및 계약</li>
                                        <li><span class="number">6. </span>샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행</li>
                                        <li><span class="number">7. </span>공장심사 필요 시, 심사 진행</li>
                                        <li><span class="number">8. </span>인증서 초안 발행 및 고객 확인</li>
                                        <li><span class="number">9. </span>인증서 발행</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                                      
                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_food_03.jpg" alt="국가위생등록 (State Registration Certificate)">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">국가위생등록 (State Registration Certificate)</h3>
                                <p class="con_txt">
                                    기존 국가별로 발행되던 위생등록증이 관세동맹국에 의해 2010년 채택된 Decision of CU commission No.299에 의거하여 하나로 통합되었습니다. 하나의 인증서로 유라시아 관세동맹 5개국 (러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)에서 모두 사용 가능합니다.
                                </p>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">1) 국가위생등록 적용 제품(식품)</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>미네랄 워터, 생수, 청량 음료, 주류 – 저 알코올 및 토닉 음료 포함</li>
                                        <li><span class="bullet"></span>이유식, 임산부 및 모유 수유 여성을 위한 음식, 식이 제품, 운동 선수를 위한 음식, 생물학적 활성 식품 첨가물, 유기농 제품, 보충제를 포함한 특수 식품</li>
                                        <li><span class="bullet"></span>식품 첨가제 (식물 추출물, 아로마 등)</li>
                                        <li><span class="bullet"></span>유전자 변형 (형질 전환) 유기체를 사용하여 생산된 식품</li>
                                        <li><span class="bullet"></span>식수 공급용 물 사용을 위한 재료, 기기, 장비 및 기타 기술 제품</li>
                                        <li><span class="bullet"></span>식품 접촉용 제품 (수저류, 식기류, 제조 장비 제외)</li>
                                    </ul>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">2) 국가위생등록 인증 정보</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>제출서류 : 신청서, 제품 매뉴얼, MSDS, 제품 및 라벨 사본(사진), 기 보유 시험성적서, 기 보유 인증서 (제출서류는 러시아어로 작성되어야 함)</li>
                                        <li><span class="bullet"></span>샘플시험 : 제품에 따라 샘플 제출 및 시험 여부가 결정됨</li>
                                        <li><span class="bullet"></span>공장심사 : 제품에 따라 공장심사가 요구될 수 있으며, 견적을 통해 심사 M/D와 심사 비용이 결정됨</li>
                                        <li><span class="bullet"></span>소요기간 : 4~6주 (샘플발송 및 샘플시험기간 제외)</li>
                                        <li><span class="bullet"></span>인증서 유효기간 : 5년</li>
                                        <li><span class="bullet"></span>인증비용 : 제품별로 상이하므로 정확한 견적을 위해서는 상담이 필요함</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-4-->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_food_04.jpg" alt="IGC인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증원의 역량</h3>
                                <p class="con_txt">
                                    IGC는 여러 강점을 통해 고객에게 경쟁력 있고 만족스러운 서비스를 제공합니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>다양한 분야의 인증 사업을 통해 확보한 지식과 기술력을 바탕으로 한 경쟁력 있는 서비스 제공</li>
                                    <li><span class="bullet"></span>경쟁력 있는 인증 비용</li>
                                    <li><span class="bullet"></span>신속한 인증 서비스 진행을 통한 최소한의 기간 소요</li>
                                    <li><span class="bullet"></span>유라시아 이외 분야의 각종 시스템 및 제품 인증에 대하여 One Stop Service 제공</li>
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

        </article><!----// 컨텐츠 03 식품 컨텐츠 종료 //------->
        
        
        
        <!----// 컨텐츠 04 화장품 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">유라시아 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">화장품</h2>
                <p class="outline">
                    유라시아 지역으로 화장품을 수출하고자 하는 기업은 해당 기술규정에 따른 적합성 준수를 증명하는 인증을 받아야 하며 제품, 포장 또는 첨부 문서에 적합성 마크를 표시해야 해당 국가로 수출이 가능합니다.<br><br>
                    유라시아 경제연합에 가입된 국가(러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)로 수출할 경우 TRCU 규정에 따른 EAC 인증 또는 State Registration Certificate를 받아야 하며, 우즈베키스탄 등의 기타 유라시아 국가로 수출할 경우에는 국가별 GOST 인증을 받아야 합니다.<br><br>
                    화장품에 대한 인증은 제품 특성에 따라 EAC, GOST 및 State Registration Certificate로 구분됩니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_01.jpg" alt="EAC">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">EAC</h3>
                                <p class="con_txt">
                                    TRCU는 2010년 러시아, 카자흐스탄, 벨라루스 3개국이 결성한 유라시아 관세동맹 “EACU, Eurasian Customs Union”을 시작으로, 2015년 유라시아 경제연합 “EAEU, Eurasian Economic Union”에서 발효한 통합 인증 제도입니다.
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li>
                                            <span class="bullet"></span>TRCU EAC 적용 품목 (화장품)
                                            <p>TR СU 009/2011 On safety of cosmetics and perfumes 향수 및 화장품</p>
                                        </li>
                                        <li>
                                            <span class="bullet"></span>EAC 인증서 유형 (화장품)
                                            <p>DoC (Declaration of Conformity): 비교적 위험성이 작은 제품군이 해당하며, 일부 제품은 서류심사만으로 인증서 발급 가능합니다. 화장품은 EAC DoC에 해당합니다.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; 인증 정보</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>제출서류 : 신청서, 제품 매뉴얼, HS Code, 기 보유 시험성적서, 기 보유 인증서 등 (제출서류는 러시아어로 작성되어야 함)</li>
                                        <li><span class="bullet"></span>샘플시험 : 제품에 따라 샘플 제출 및 시험 여부가 결정됨. 화장품의 경우 샘플시험 실시</li>
                                        <li><span class="bullet"></span>공장심사 : 없음</li>
                                        <li><span class="bullet"></span>소요기간 : 2주 (샘플발송 및 샘플시험기간 제외)</li>
                                        <li><span class="bullet"></span>인증서 유효기간 : 5년 (Serial Production Certification)</li>
                                        <li><span class="bullet"></span>인증비용 : 제품별로 상이하므로 정확한 견적을 위해서는 상담이 필요함</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                                      
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_02.jpg" alt="GOST">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">GOST</h3>
                                <p class="con_txt">
                                    GOST (ГОСТ)는 Euro-Asian Council for Standardization, Metrology and Certification (EASC)에서 규정한 국가기술표준규격으로 러시아어로 연방 규격을 뜻하는 GOsudarstvennyy STandart의 약어입니다.<br><br>
                                    현재 국가별 발행되는 GOST 인증서와 발행하는 인증기관의 주체가 다른 만큼, 국가별 GOST 인증서는 각각 다른 인증서이며 러시아는 GOST-R, 카자흐스탄은GOST-K 등으로 구분지어 불리고 있습니다.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; GOST 적용 품목 (화장품)</span>
                                    <p class="con_txt">
                                        유라시안 관세동맹국가간 발효된 통합 인증제도의 도입 후, GOST 인증 비중은 예전에 비하여 크게 줄어들었지만, 아직 동맹국 간 협의가 이루지지 않은 강제인증 품목은 GOST 인증을 받아야 합니다.<br><br>
                                        화장품을 유라시아 경제연합 소속국가(러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)에 수출하는 경우에는 EAC DoC 또는 State Registration Certificate (국가위생등록)이 필수적이며 GOST 인증은 포함되어 있지 않습니다. 하지만 경제연합 국가 이외의 유라시아 국가(우즈베키스탄 등)으로 수출하는 경우에는 각 국가별 GOST 인증 또는 국가내의 위생등록이 요구됩니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; GOST 인증서 유형</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>GOST DoC (Declaration of Conformity)</li>
                                        <li><span class="bullet"></span>GOST Voluntary (자발적 GOST)</li>
                                        <li><span class="bullet"></span>GOST Voluntary는 의무적으로 GOST 인증을 받아야 하는 제품은 아니지만 제품이 적용 규정과 지침에 따라 만들어 졌음을 증명하는 인증서로, EAC 인증을 받는 기업이 GOST Voluntary를 추가적으로 신청하여 받을 경우 기업의 홍보, 신뢰 확보 등의 효과가 있습니다.</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; 인증 정보</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>제출서류 : 신청서, 제품 매뉴얼, HS Code, 기 보유 시험성적서, 기 보유 인증서 (제출서류는 러시아어로 작성되어야 함)</li>
                                        <li><span class="bullet"></span>샘플시험 : 제품에 따라 샘플 제출 및 시험 여부가 결정됨. (GOST Voluntary 인증 경우, 화장품의 샘플시험을 실시하지만, EAC 인증 절차에서 실시했기 때문에 추가 시험은 필요하지 않음)</li>
                                        <li><span class="bullet"></span>공장심사 : 없음</li>
                                        <li><span class="bullet"></span>소요기간 : 2주 (샘플발송 및 샘플시험기간 제외)</li>
                                        <li><span class="bullet"></span>인증서 유효기간 : 3년 (Serial Production Certification)</li>
                                        <li><span class="bullet"></span>인증비용: 제품별로 상이하므로 정확한 견적을 위해서는 상담이 필요함</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                                     
                    <li><!-- content 4-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_03.jpg" alt="State Registration Certificate (국가위생등록)">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">State Registration Certificate (국가위생등록)</h3>
                                <p class="con_txt">
                                    기존 국가별로 발행되던 위생등록증이 관세동맹국에 의해 2010년 채택된 Decision of CU commission No.299에 의거하여 하나로 통합되었습니다. 하나의 인증서로 유라시아 경제연합 국가 (러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)에서 모두 사용 가능합니다.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; State Registration Certificate 대상 제품 (화장품)</span>
                                    <p class="con_txt">
                                        성분, 기능, 목적에 따라 특수 화장품으로 분류되는 화장품은 국가위생등록증을 필수로 받아야 합니다.
                                    </p>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>태닝을 위한 제품</li>
                                        <li><span class="bullet"></span>미백 제품</li>
                                        <li><span class="bullet"></span>타투용 제품</li>
                                        <li><span class="bullet"></span>인티메이트 케어</li>
                                        <li><span class="bullet"></span>개인이 유해 인자의 영향으로 부터 피부를 보호하기 위한 용도의 향수나 화장품</li>
                                        <li><span class="bullet"></span>유아용 화장품 (14세 이하의 어린이를 위한 제품)</li>
                                        <li><span class="bullet"></span>염색, 탈색 제품</li>
                                        <li><span class="bullet"></span>파마, 헤어 스트레이트를 위한 제품</li>
                                        <li><span class="bullet"></span>나노물질을 사용한 향수 및 화장품 (나노물질: 불용성 또는 체내 안정성 물질이며, 내부 또는 외부의 입자 크기가 1~100nm의 범위 내로 특별히 제조된 것)</li>
                                        <li><span class="bullet"></span>제모 제품</li>
                                        <li><span class="bullet"></span>필링제 (화학적 필링. 각질 제거제를 사용하여 표피의 표면 세포를 제거하기 위한 제품)</li>
                                        <li><span class="bullet"></span>불소 함량이 0.15% 이상인 불소 구강 위생 제품 (구강위생용 액상제품은 0.05% 이상)</li>
                                        <li><span class="bullet"></span>산화 수소가 들어간 치아 미백 제품 또는 과산화수소로 농축된 과산화 아연과 과산화 요소를 함유하며, 과산화 수소를 생성하는 다른 구성품들 (0.1~6.0%)</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; State Registration Certificate 인증 정보</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>제출서류 : 신청서, 제품 매뉴얼, MSDS, 제품 및 라벨 사본(사진), 기 보유 시험성적서, 기 보유 인증서 (제출서류는 러시아어로 작성되어야 함)</li>
                                        <li><span class="bullet"></span>샘플시험 : 있음</li>
                                        <li><span class="bullet"></span>공장심사 : 제품에 따라 공장심사가 요구될 수 있으며, 견적을 통해 심사 M/D와 심사 비용이 결정됨</li>
                                        <li><span class="bullet"></span>소요기간 : 4~6주 (샘플발송 및 샘플시험기간 제외)</li>
                                        <li><span class="bullet"></span>인증서 유효기간 : 5년</li>
                                        <li><span class="bullet"></span>인증비용 : 제품별로 상이하므로 정확한 견적을 위해서는 상담이 필요함</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; TRCU EAC, GOST 및 State Registration Certificate 인증 절차</span>
                                    <ul class="list_st">
                                        <li><span class="number">1. </span>인증기관에 신청서 및 제품 관련 서류 제출</li>
                                        <li><span class="number">2. </span>서류 검토</li>
                                        <li><span class="number">3. </span>적용되는 인증서 유형 확인</li>
                                        <li><span class="number">4. </span>견적서 발행 및 계약</li>
                                        <li><span class="number">5. </span>샘플 발송 후 시험 및 시험 성적서 발행</li>
                                        <li><span class="number">6. </span>인증서 발행</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                                      
                    <li><!-- content 4-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_04.jpg" alt="화장품 시험">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">화장품 시험</h3>
                                <p class="con_txt">
                                    인증 또는 국가위생등록을 위해 제출한 제품 샘플은 유라시아 국가내의 공인된 시험소에서 다음에 대한 시험을 실시합니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>물리적, 화학적 분석 시험</li>
                                    <li><span class="bullet"></span>미생물 검출 시험</li>
                                    <li><span class="bullet"></span>독성 시험</li>
                                    <li><span class="bullet"></span>위생 검사</li>
                                    <li><span class="bullet"></span>기타 필요한 시험 및 검사</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_06.png" alt="왜 중요한가?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">왜 중요한가?</h3>
                                <p style="text-align:justify">
                                    유라시아 지역으로 상품을 수출하고자 하는 기업은 해당 기술규정에 따른 적합성 준수를 증명하는 인증을 받아야 하며 제품, 포장 또는 첨부 문서에 적합성 마크를 표시해야 해당 국가로 수출이 가능합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-6 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_evalu_07.jpg" alt="IGC인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증원의 역량</h3>
                                <p class="con_txt">
                                    IGC인증기관은 RUS-TEST PACIFIC인증기관과 협력하여 고객과 이해관계자들에게 경쟁력 있는 최고의 가치를 제공하여, 지속적 동반 성장을 통해 세계적인 인증기관으로 거듭나고 있습니다.<br><br>
                                    IGC는 다음을 준수합니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>법적 요구사항 준수</li>
                                    <li><span class="bullet"></span>팀워크 및 조직원간의 연대</li>
                                    <li><span class="bullet"></span>성실성과 공정성</li>
                                    <li><span class="bullet"></span>사회적 및 환경적 책임</li>
                                    <li><span class="bullet"></span>인증 및 등록 서비스 제공 업체로서의 지식과 학습을 통한 지속적인 발전과 개선활동</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-7 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_food_04.jpg" alt="왜 IGC인가?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">왜 IGC인가?</h3>
                                <p class="con_txt">
                                    IGC는 여러 강점을 통해 고객에게 경쟁력 있고 만족스러운 서비스를 제공합니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>다양한 분야의 인증 사업을 통해 확보한 지식과 기술력을 바탕으로 한 경쟁력 있는 서비스 제공</li>
                                    <li><span class="bullet"></span>경쟁력 있는 인증 비용</li>
                                    <li><span class="bullet"></span>신속한 인증 서비스 진행을 통한 최소한의 기간 소요</li>
                                    <li><span class="bullet"></span>사회적 및 환경적 책임</li>
                                    <li><span class="bullet"></span>유라시아 이외 분야의 각종 시스템 및 제품 인증에 대하여 One Stop Service 제공</li>
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
                        <li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 22716)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>제품인증 (Vegan 인증, 유라시아 인증, VCRP, EWG, CPNP)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>04</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 04 화장품 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 05 의약품 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">유라시아 제품인증 소개</h1>
                <h2 class="tit_cer fc_pointer">의약품</h2>
                <p class="outline">
                    러시아 연방법 (의약품 유통법: #61-FZ /2010.04.12)에 의거해 러시아 연방으로 수입되는 모든 의약품 및 의료 물질은 수입 허가를 획득해야 하며 의약품 유통에 대해 연방 국가의 통제를 받게 됩니다. 국가 통제 기관은 러시아 연방 보건 감독국(ROSZDRAVNADZOR) 및 러시아 연방 구성 기관 하의 영토 당국입니다. 국가 감독의 목표는 의약품 유통분야에서 러시아 연방 법률의 요구사항 위반의 예방, 탐지 및 억제하는 것입니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 5-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medicine_01.jpg" alt="의약품 유통법(#61-FZ) 준수의 필요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의약품 유통법(#61-FZ) 준수의 필요성</h3>
                                <p class="con_txt">
                                    현행법을 따르면, 의약품 유통법을 위반한 경우 러시아 연방 법률에 따라 처벌을 받게 됩니다.<br><br>
                                    관련 법들은 다음과 같습니다 :
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; 러시아 연방 정부 결의 제 5.1.4조</span>
                                    <p>
                                        건강 감시 서비스(No323, 2004/06/30)입니다. 국가 감독에는 의약품의 유통, 운송, 조제, 의약품 판매 및 의약품 사용에 대한 요구사항을 갖춘 의약품의 순환 대상 준수 여부 검사 조직 및 수행이 포함됩니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; 연방법의 규정(#294-F3, 2008/12/26)</span>
                                    <p>
                                        국가 통제(감독) 및 지방자치단체 구현에 있어 법인 및 개인 기업의 권리 보호에 대한 사항입니다. 국가 감독의 완전성 및 품질 모니터링에는 검사 수행, 신청자의 권리 위반 식별 및 제거, 필수 요구사항의 위반, 위반을 억제하기 위한 조치 적용 및 그러한 위반의 결과 제거, 검토, 결정 및 신청자의 항소에 대한 대응 준비가 포함됩니다.<br><br>
                                        따라서 귀사가 러시아로 의약품을 유통하시고자 한다면, 반드시 의약품 유통법 및 기타 관련 법들을 준수해야 합니다.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                                      
                    <li><!-- content 5-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medicine_02.jpg" alt="제품 허가 등록">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">제품 허가 등록</h3>
                                <p style="text-align:justify">
                                    수입 허가 등록을 위해서는 러시아 연방 보건감독국(ROSZDRAVNADZOR)에 제품 등록이 선행되어야 합니다. 제품 등록 시 연방 보건감독국 주관의 등록 심사와 임상 실험이 필요합니다. 등록 심사는 임상 시험 기간을 제외하고 210일 기한 내외로 결정되며, 서류 심사, 생산 공정 심사, 샘플링 형식의 테스트 등이 요구됩니다.<br><br>
                                    임상 시험의 경우, 약물 유통 연방법 및 러시아의 기타 규제 법률에 의해 설정된 전임상 시험 및 임상 시험에 대한 요구 사항이 준수되어야 합니다. 의약품 유통법(#61-FZ/2010.04.12) 4조 40항에 따라, 전임상 시험은 생물학적, 미생물학적, 면역학적, 독성학적, 물리적 시험, 기타 과학적 평가방법에 의한 의약품의 안정성 시험 등으로 정의됩니다. 임상 시험의 경우, 의약품의 진단, 치료, 예방 및 약리학적 특성 등에 대한 연구가 포함됩니다. 이는 과학적 방법에 의한 흡수, 할당, 변형 등의 과정에 국한되는 것이 아닌 다른 의약품 및 식품과의 상호작용까지 해당됩니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                                    
                    <li><!-- content 5-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medicine_03.jpg" alt="수입 허가 신청">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">수입 허가 신청</h3>
                                <p style="text-align:justify">
                                    연방 보건감독국에 의약품이 등록된 후 수입허가를 신청할 수 있으며, 처음 등록된 모든 의약품 인증은 5년 동안 유효합니다. 그 후 갱신 시 승인받은 의약품의 인증서는 무한으로 유효합니다.<br><br>
                                    또한, 의약품 등록증 발급 외에도 러시아 인증 GOST R에 따른 인증서 (Certificate of Conformity)나 적합성신고서(Declaration of Conformity)의 획득도 필요합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                                    
                    <li><!-- content 5-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medicine_04.jpg" alt="인증 대상 품목">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">인증 대상 품목</h3>
                                <p style="text-align:justify">
                                    러시아 연방 정부 법령(#982, 2009.12.01)에 따라 필수적으로 인증서가 필요한 대상 품목은 면역글로불린, 감마글로불린, 혈청, 독소, 의학용 및 수의학용 백신 등이며 적합성 신고서 대상 품목들은 약품, 의약용 화학제품, 조효소, 효소, 아미노산, 비타민, 유기농 제품, 수의학용 혈청 등이 해당됩니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                                    
                    <li><!-- content 5-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medicine_05.jpg" alt="의약품 인증의 이익 : 유라시아 의약품 인증 확대 전망">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">의약품 인증의 이익 : 유라시아 의약품 인증 확대 전망</h3>
                                <p class="con_txt">
                                    의약품 인증을 요구하는 유라시아 국가들이 더욱 증가할 전망입니다. 현재 유라시아경제연합 성원국들은 의료기기의 경우와 마찬가지로 약품시장 공동체 형성을 진행 중입니다.
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>2014년 12월 23일 러시아, 벨라루스, 카자흐스탄은 EEC 내 의약품 유통에 관한 공통 규칙과 원칙에 관한 협정 체결</li>
                                        <li><span class="bullet"></span>제78호 의약품등록검사규칙(2016.11.03) 포함 약 26개의 규제 사항 승인 및 적용(적용일: 2017.05~)</li>
                                    </ul>
                                </div>
                                <p style="text-align:justify">
                                    따라서 의약품 인증의 효력 및 적용국가는 확대될 것입니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-6 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medicine_06.jpg" alt="EAEU 의약품 유통 규제">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">EAEU 의약품 유통 규제</h3>
                                <p style="text-align:justify">
                                    2017년 5월 5일 유라시아 경제위원회는 26개 문서로 구성된 EAEU 의약품 유통 규제는 2017년 5월 6일부터 발효됨을 발표했습니다. 초국가적규제는 의약품의 개발, 전임상 및 임상 연구, 품질 관리, 등록, 생산 및 유통에 적용되며 국가적 규제는 전임상 및 임상 시험, 가격 책정, 소매업, 공공 조달, 비용 환급, 광고 등을 포함합니다.<br><br>
                                    2020년 12월 31일까지 유예기간이 있기 때문에, 등록 인증서가 필요한 경우 EAEU와 국가별 규제 시스템 중에서 선택해 신청할 수 있습니다. 2018년 12월 31일 이전에 등록을 신청하는 경우 EAEU 제조업체는 EAEU GMP 인증서 대신 국가별 규제 시스템에 따라 제출해야 했습니다. 2020년 12월 31일 이전 규정에 따라 등록된 모든 의약품은 2025년 12월 31일까지 각 시장 별 규정에 따라 재등록하여야 합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-7 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medicine_07.jpg" alt="IGC인증원의 역량">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증원의 역량</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>유라시아 지역 인증 서비스 제공 기관인 RUS-TEST와의 협력을 통해, 의약품에 대한 인증 서비스를 제공하고 있습니다.</li>
                                    <li><span class="bullet"></span>IGC 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                    <li><span class="bullet"></span>IGC는 유라시아 인증의 신뢰할 수 있는 글로벌 리더로서 의약품은 물론 의료기기, 화장품, 식품, EAC 인증 등에 대한 인증을 제공하고 있습니다.</li>
                                    <li><span class="bullet"></span>IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
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
                        <li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
                        <li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 임상평가, 의료기기등록[유라시아, 중국, 미국, 태국, 대만])</span></p></li>
                        <li><p><em><strong>03</strong></em><span>심사자격 인증</span></p></li>
                        <li><p><em><strong>04</strong></em><span>전문인력 양성 교육</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 05 의약품 컨텐츠 종료 //------->
        
    </div><!--+++ 20.05.07 탭컨텐츠 영역 종료 +++-->
</div> <!--------// div class="content_wrap"  종료  ------------------>





<?php
include_once(G5_THEME_PATH.'/tail.php');
?>