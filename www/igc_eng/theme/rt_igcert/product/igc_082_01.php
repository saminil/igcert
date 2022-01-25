<?php
	include_once('./_common.php');
$g5['title'] = 'Eurasian Product Certification';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
			<li><a href="javascript:;">EAC Certification</a></li>
			<li><a href="javascript:;">Medical Device</a></li>
			<li><a href="javascript:;">Food</a></li>
			<li class="on"><a href="javascript:;">Cosmetics</a></li>
			<li><a href="javascript:;">Medicine</a></li>
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
                <h1 class="tit_num">Introduction of Eurasian Product Certification</h1>
                <h2 class="tit_cer fc_pointer">EAC(TRCU)</h2>
                <p class="outline">
                    TRCU abbreviated for Technical Regulation of Customs Union and stands for the technical regulations of the Customs Union centered on Russia.<br><br>
                    TRCU is an integrated certification system that began with the Eurasian Customs Union “EACU, Eurasian Customs Union” formed by Russia, Kazakhstan and Belarus in 2010, and entered into force in the Eurasian Economic Union “EEU, Eurasian Economic Union” in 2015.<br><br>
                    Currently, the Eurasian Customs Union/Economic Union consists of five countries: Russia, Kazakhstan, Belarus, Kyrgyzstan, and Armenia, and TRCU certification follows the stipulated certification procedure according to the decision of the Eurasian Economic Commission.<br><br>
                    The EAC mark is affixed on the certificate, which means Eurasian Conformity.
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
                                <h3 class="con_tit" style="text-align:center">TRCU EAC Regulation</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/product_EACTRCU_011.jpg" alt="TRCU EAC Regulation">
                                    </div>
                                </div>
                                <table class="type02">
                                    <thead style="text-align:center">
                                        <tr style="border-bottom:1px solid #fff">
                                            <th scope="cols" style="border-right:1px solid #fff;width:20%">
                                                <p>Technical Regulation</p>
                                            </th>
                                            <th scope="cols" style="border-right:1px solid #fff">
                                                <p>Technical regulations specific content</p>
                                            </th>
                                            <th scope="cols" rowspan="2" style="border-right:1px solid #fff">
                                                <p>Products</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 001/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of railway rolling stock”</p>
                                            </td>
                                            <td class="none">
                                                <p>railway rolling stock</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 002/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of high-speed railway transport”</p>
                                            </td>
                                            <td class="none">
                                                <p>high-speed railway transport</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 003/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of railway transport infrastructure”</p>
                                            </td>
                                            <td class="none">
                                                <p>railway transport infrastructure</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 004/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of Low-voltage equipment”</p>
                                            </td>
                                            <td class="none">
                                                <p>Low-voltage equipment</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 005/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of packages”</p>
                                            </td>
                                            <td class="none">
                                                <p>packages</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 006/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of pyrotechnic articles”</p>
                                            </td>
                                            <td class="none">
                                                <p>pyrotechnic articles</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 007/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of products intended for children and adolescents”</p>
                                            </td>
                                            <td class="none">
                                                <p>products intended for children and adolescents</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 008/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of toys”</p>
                                            </td>
                                            <td class="none">
                                                <p>toys</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 009/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of perfumes and cosmetics”</p>
                                            </td>
                                            <td class="none">
                                                <p>perfumes and cosmetics</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 010/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of machinery and equipment”</p>
                                            </td>
                                            <td class="none">
                                                <p>machinery and equipment</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 011/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of elevators”</p>
                                            </td>
                                            <td class="none">
                                                <p>elevators</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 012/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of equipment in explosion hazardous environments”</p>
                                            </td>
                                            <td class="none">
                                                <p>equipment in explosion hazardous environments</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 013/2011</p>
                                            </th>
                                            <td>
                                                <p>“0n requirements to motor and aviation petrol, diesel and marine, fuel, reactive engines fuel and black oil”</p>
                                            </td>
                                            <td class="none">
                                                <p>motor and aviation petrol, diesel and marine, fuel, reactive engines fuel and black oil</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 014/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of roads”</p>
                                            </td>
                                            <td class="none">
                                                <p>roads</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 015/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of grain”</p>
                                            </td>
                                            <td class="none">
                                                <p>grain</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 016/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of apparatuses working on gaseous fuel”</p>
                                            </td>
                                            <td class="none">
                                                <p>apparatuses working on gaseous fuel</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 017/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of light industry products”</p>
                                            </td>
                                            <td class="none">
                                                <p>light industry products</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 018/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of wheeled vehicles”</p>
                                            </td>
                                            <td class="none">
                                                <p>wheeled vehicles</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 019/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of personal protection equipment”</p>
                                            </td>
                                            <td class="none">
                                                <p>personal protection equipment</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 020/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of Electromagnetic compatibility of technical devices”</p>
                                            </td>
                                            <td class="none">
                                                <p>Electromagnetic compatibility of technical devices</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 021/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of food products”</p>
                                            </td>
                                            <td class="none">
                                                <p>food products</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 022/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of food products in terms of their marking”</p>
                                            </td>
                                            <td class="none">
                                                <p>food products in terms of their marking</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 023/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of juice products made of fruit and vegetables”</p>
                                            </td>
                                            <td class="none">
                                                <p>juice products made of fruit and vegetables</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 024/2011</p>
                                            </th>
                                            <td>
                                                <p>“On safety of oil &amp; fat products”</p>
                                            </td>
                                            <td class="none">
                                                <p>oil &amp; fat products</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 025/2012</p>
                                            </th>
                                            <td>
                                                <p>“On safety of furniture”</p>
                                            </td>
                                            <td class="none">
                                                <p>furniture</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 026/2012</p>
                                            </th>
                                            <td>
                                                <p>“On safety of small-size crafts”</p>
                                            </td>
                                            <td class="none">
                                                <p>small-size crafts</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 027/2012</p>
                                            </th>
                                            <td>
                                                <p>“On safety of certain types of specialized food products, including food for dietary treatment and protective diet”</p>
                                            </td>
                                            <td class="none">
                                                <p>certain types of specialized food products</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 028/2012</p>
                                            </th>
                                            <td>
                                                <p>“On safety of explosives and products on their basis”</p>
                                            </td>
                                            <td class="none">
                                                <p>explosives and products on their basis</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 029/2012</p>
                                            </th>
                                            <td>
                                                <p>“On requirements for food additives, flavoring agents and processing supplements”</p>
                                            </td>
                                            <td class="none">
                                                <p>food additives, flavoring agents and processing supplements</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 030/2012</p>
                                            </th>
                                            <td>
                                                <p>“On requirements for lubricants, oils and special liquids”</p>
                                            </td>
                                            <td class="none">
                                                <p>lubricants, oils and special liquids</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 031/2012</p>
                                            </th>
                                            <td>
                                                <p>“On safety of agricultural and forestry tractors and trailers thereto”</p>
                                            </td>
                                            <td class="none">
                                                <p>agricultural and forestry tractors and trailers thereto</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 032/2013</p>
                                            </th>
                                            <td>
                                                <p>“On safety of pressure equipment”</p>
                                            </td>
                                            <td class="none">
                                                <p>pressure equipment</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 033/2013</p>
                                            </th>
                                            <td>
                                                <p>“On the safety of milk and dairy products”</p>
                                            </td>
                                            <td class="none">
                                                <p>milk and dairy products</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 034/2013</p>
                                            </th>
                                            <td>
                                                <p>“On safety of meat and meat products”</p>
                                            </td>
                                            <td class="none">
                                                <p>meat and meat products</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТR CU 035/2014</p>
                                            </th>
                                            <td>
                                                <p>“On safety of tobacco products”</p>
                                            </td>
                                            <td class="none">
                                                <p>tobacco products</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>TR EAEU 036/2016</p>
                                            </th>
                                            <td>
                                                <p>“On requirements for liquified petroleum gases foe use as fuel”</p>
                                            </td>
                                            <td class="none">
                                                <p>liquified petroleum gases foe use as fuel</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>TR EAEU 037/2016</p>
                                            </th>
                                            <td>
                                                <p>“Restricting usage of hazardous substances in the electrical goods and radio electronics”</p>
                                            </td>
                                            <td class="none">
                                                <p>electrical goods and radio electronics</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>TR EAEU 038/2016</p>
                                            </th>
                                            <td>
                                                <p>“On safety of amusement rides”</p>
                                            </td>
                                            <td class="none">
                                                <p>amusement rides</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>TR EAEU 039/2016</p>
                                            </th>
                                            <td>
                                                <p>“On requirements for mineral fertilizers”</p>
                                            </td>
                                            <td class="none">
                                                <p>mineral fertilizers</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>ТР EAEC 040/2016</p>
                                            </th>
                                            <td>
                                                <p>“On safety of fish and fish products”</p>
                                            </td>
                                            <td class="none">
                                                <p>fish and fish products</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>TR EAEU 041/2017<br>(Scheduled to take effect on June 2, 2021)</p>
                                            </th>
                                            <td>
                                                <p>“On safety of chemical products”</p>
                                            </td>
                                            <td class="none">
                                                <p>chemical products</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>TR EAEU 042/2017</p>
                                            </th>
                                            <td>
                                                <p>“On safety of chemical products”</p>
                                            </td>
                                            <td class="none">
                                                <p>chemical products</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>TR EAEU 043/2017</p>
                                            </th>
                                            <td>
                                                <p>“On safety of equipment for children’s playgrounds”</p>
                                            </td>
                                            <td class="none">
                                                <p>equipment for children’s playgrounds</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>TR EAEU 044/2017</p>
                                            </th>
                                            <td>
                                                <p>“On safety of packaged drinking water, including natural mineral water”</p>
                                            </td>
                                            <td class="none">
                                                <p>drinking water, including natural mineral water</p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">
                                                <p>TR EAEU 045/2017</p>
                                            </th>
                                            <td>
                                                <p>“On safety of oil prepared for transportation and(or) use”</p>
                                            </td>
                                            <td class="none">
                                                <p>oil prepared for transportation and(or) use</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>TR EAEU 046/2018<br>(Scheduled to take effect on January 1, 2022)</p>
                                            </th>
                                            <td>
                                                <p>“On safety of natural flammable gas, prepared for transportation or usage”</p>
                                            </td>
                                            <td class="none">
                                                <p>natural flammable gas, prepared for transportation or usage</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <p>TR EAEU 047/2018</p>
                                            </th>
                                            <td>
                                                <p>“On safety of alcohol products”</p>
                                            </td>
                                            <td class="none">
                                                <p>alcohol products</p>
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
                                <h3 class="con_tit">TRCU EAC certification type</h3>
                                <div class="con_txt">
                                    TRCU certificates are classified into two categories: Certification of Conformity (CoC) and Declaration of Conformity (DoC) according to the details.
                                </div>
                                <div style="text-align:justify">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>TRCU CoC</span>
                                    <p>This includes pressure vessels, hand tools, cranes, elevators, some machinery, test equipment, electrical and electronic products, etc., and a sample test or factory inspection is required.</p>
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
                                    <p>This is a general product with relatively low risk, and some products can be issued certificate by only document review. In the case of CoC, product tests are conducted through designated testing laboratories in principle, but a number of certification agencies are issuing certificates after acknowledging CB safety reports without additional tests.</p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_EACTRCU_013.jpg" alt="TRCU EAC certification validity period">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">TRCU EAC certification validity period</h3>
                                <p style="text-align:justify">
                                    One-Shipment (Single Delivery Certification): This is mainly in cases where products are exported on a one-off basis, such as plants, and in cases where resale to third parties or other general consumers is not possible, and is valid until the contract fulfillment period indicated in the contract with the importer.<br><br>
                                    Serial Production Certification: This is advantageous in cases where continued export is expected, and one certification can result in a certificate valid for up to 5 years.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_EACTRCU_014.jpg" alt="TRCU EAC certification process">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">TRCU EAC certification process</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>Submit application form and product-related documents to the certification body</li>
                                    <li><span class="number">2. </span>Document review</li>
                                    <li><span class="number">3. </span>Check the type of certificate applied</li>
                                    <li><span class="number">4. </span>Check the Sample test and factory inspection</li>
                                    <li><span class="number">5. </span>Issuance of quotation and contract</li>
                                    <li><span class="number">6. </span>If sample test is needed, test and test report is issued after sending sample</li>
                                    <li><span class="number">7. </span>If factory inspection is necessary, proceed with the inspection</li>
                                    <li><span class="number">8. </span>Draft certificate issuance and customer verification</li>
                                    <li><span class="number">9. </span>Certificate issuance</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_EACTRCU_015.jpg" alt="TRCU EAC submission documents">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">TRCU EAC submission documents</h3>
                                <div class="con_txt">
                                    The documents to be submitted by the manufacturer are as follows: (Not limited to this, but can be added as needed.)
                                </div>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>application</li>
                                    <li><span class="bullet"></span>HS Code</li>
                                    <li><span class="bullet"></span>Product manual (Russian or exporting country language)</li>
                                    <li><span class="bullet"></span>Existing test report</li>
                                    <li><span class="bullet"></span>Existing Certificate</li>
                                    <li><span class="bullet"></span>Drawing (if applicable)</li>
                                    <li><span class="bullet"></span>Technical document (if applicable)</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-6 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_EACTRCU_013.jpg" alt="Eurasian certification applicant (Eurasia Representative)">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Eurasian certification applicant (Eurasia Representative)</h3>
                                <p class="con_txt">
                                    <span class="point_blk">Rosakkreditasiya Register</span>
                                    TRCU certification and GOST R certification are registered on the Rosakkreditasiya website.<br><br>
                                    <a href="https://www.fsa.gov.ru/">Go to Rosakkreditasiya website (https://www.fsa.gov.ru/) ☜ Click!</a>
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>When applying for TRCU certification, GOST R certification, etc., only companies located in Russia or other customs union countries can become the applicant. The company must be a legal entity or a private business, and the general public can’t be an applicant for certification.</li>
                                    <li><span class="bullet"></span>IGC provides the Eurasia Representative service for customers who don’t have a business operator who can act as an applicant in the Eurasia region.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-7 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_EACTRCU_012.jpg" alt="Why is it important?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Why is it important?</h3>
                                <p style="text-align:justify">
                                    Companies wishing to export products to the Eurasian region must obtain certification proving conformity to the applicable technical regulations and mark the conformity mark on the product, packaging or attached documents to be exported to that country.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-8 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_evalu_07.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p class="con_txt">
                                    IGC cooperates with the RUS-TEST PACIFIC certification body to provide the best competitive value to customers and stakeholders, and is reborn as a global certification body through continuous shared growth.<br><br>
                                    IGC complies with :
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Compliance with legal requirements</li>
                                    <li><span class="bullet"></span>Teamwork and solidarity among members</li>
                                    <li><span class="bullet"></span>Sincerity and fairness</li>
                                    <li><span class="bullet"></span>Social and environmental accountability</li>
                                    <li><span class="bullet"></span>Continuous development and improvement activities through knowledge and learning as a certification and registration service provider</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </section>
            
            <!----(주)아이지씨인증원 사업영역 시작-------->
            <section class="partner_type2">
                <h2 class="con_arrow">
                    <p>Related Services from IGC</p>
                </h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>System certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (Europe, Eurasia, Americas, China, Southeast Asia)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Product test</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Certification of audit qualifications</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Professional manpower training</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 01 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 02 의료기기 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">Introduction of Eurasian Product Certification</h1>
                <h2 class="tit_cer fc_pointer">Medical Device</h2>
                <p class="outline">
                    In order to register medical devices in Russia, it takes a lot of time and fee to perform separate tests according to compulsory requirements, even if tests are conducted for approval by CE or FDA. Since Russia has not entered into a certification agreement with the EU or the United States, it does not accept internationally recognized certificates such as CE certification from the EU or FDA approval from the United States.<br><br>
                    Since 2002, the Russian government has started to change the part of the test to other forms such as product safety assurance, such as production site inspection, quality system check, and post-marketing continuous management. However, such attempts were unsuccessful and, therefore, from January 1, 2013, these procedures were operated in a more robust and realistic form.<br><br>
                    The Medical Device Registration Certificate, an official document issued by Roszdravnadzor, the Russian Federation Health Supervisory Service, which provides health and social development services, has passed the preliminary evaluation of the relevant medical device and is therefore suitable for production, import, sale and use in Russia. All medical devices, whether produced in Russia or imported into Russia from abroad, must be registered.<br><br>
                    The registration certificate contains the name of the manufacturer, distributor or legal representative. If the medical device for which cancer drug registration is to be registered is composed of modules/blocks manufactured by other manufacturers, but is not a branded product, each module/block must be registered individually. Government Decree Jan. For medical devices listed in 17, 2002 N 19, if there is a registration certificate, VAT is not collected from the manufacturing company.
                </p>
                
                <ul class="content">                    
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_03.jpg" alt="Classification of medical devices">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Classification of medical devices</h3>
                                <p class="con_txt">
                                    Nomenclature and classification of medical devices operating in Russia are listed in Order N4H “About Conformation of Nomenclature Classification of Medical Devices” and in vitro diagnostic equipment is not included. In vitro diagnostic equipment is subject to separate class regulations.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Class 1 – Low risk</li>
                                    <li><span class="bullet"></span>Class 2a – Medium risk</li>
                                    <li><span class="bullet"></span>Class 2b – High risk</li>
                                    <li><span class="bullet"></span>Class 3 – Top risk</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_04.jpg" alt="Test type of Medical device registration progress">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Test type of Medical device registration progress</h3>
                                <p class="con_txt">
                                    Testing according to medical device registration can only be conducted in laboratories registered under the 2011 N 352 Act of 06 May 2011, and for clinical trials, a list of institutions that can perform this function is posted on the Roszdravnadzor website.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Toxicity test</li>
                                    <li><span class="bullet"></span>Functional test</li>
                                    <li><span class="bullet"></span>Electromagnetic inspection</li>
                                    <li><span class="bullet"></span>Clinical trial</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_05.jpg" alt="Medical device registration validity period">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Medical device registration validity period</h3>
                                <p style="text-align:justify">
                                    Permanent (valid until the product registered in the certificate is discontinued.)
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_06.jpg" alt="Medical device registration process">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Medical device registration process</h3>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>The representative of the company must apply for permission to consent to sending samples to Russia by Rosdravnadzor, which is valid for 6 months. In addition, the representative must provide a description of the applied product, a contract with the laboratory, and a contract with an attorney or manufacturer.</li>
                                    <li><span class="number">2. </span>The representative must check in to get the sample through customs. In addition, the representative must also provide samples, contracts, documents to be submitted to customs officials, and invoices.</li>
                                    <li><span class="number">3. </span>Toxicity tests, technical tests, and electromagnetic tests are conducted in the case of electrical products at accredited laboratory.</li>
                                    <li><span class="number">4. </span>(Simultaneous with step 3) The company must prepare all technical documents required for registration.</li>
                                    <li><span class="number">5. </span>If the class of medical devices is determined, and there is no similar medical device registered in Russia, quality evaluation, efficiency and safety tests are conducted as the first step, and then clinical evaluation is carried out at two different medical institutions. Quality assessment, efficiency and safety assessments are carried out.</li>
                                    <li><span class="number">6. </span>The company submits the entire technical file to Rospotrebnadzor. After completing the registration of medical devices, GOST-R certificate, hygiene certificate for each item, and measuring instrument certificate according to the characteristics of the product must be secured based on the registration certificate.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_01.jpg" alt="Medical device registration submission documents">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Medical device registration submission documents</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Manufacturer's power of attorney following the registration and certification process (requires notarization)</li>
                                    <li><span class="bullet"></span>Proof of company registration in the home country (for example, chamber of commerce, internal FDA registration or company registration certificate, business license) must be notarized and submitted.</li>
                                    <li><span class="bullet"></span>9001 or ISO 13485 certificate issued by national or international organizations applicable to medical devices</li>
                                    <li><span class="bullet"></span>Certificate of conformity according to the requirements of 93/42/EEC, declaration of conformity, free-selling certificate, FDA certification document, medical device certification document for national or other countries. (Must be notarized and submitted)</li>
                                    <li><span class="bullet"></span>Test reports proving safety (IEC 60601-1, IEC 60601-1-2, ISO 10993, etc.)-Accurate reports can help to simplify work during technical inspections in laboratory.</li>
                                    <li><span class="bullet"></span>Toxic Safety / Biocompatibility Safety Test Report</li>
                                    <li><span class="bullet"></span>Providing samples for technical and toxicity tests</li>
                                    <li><span class="bullet"></span>Medical device new registration application or renewal registration application. The application must use the letterhead of the applicant (a legal entity authorized to carry out registration in Russia). The application must include a description of all components and parts included in the medical device or device. Applications must be submitted in Russian.</li>
                                    <li><span class="bullet"></span>Submit a power of attorney for the appointment of a legal representative to perform the application. The manufacturing company must issue a power of attorney to a legal entity with registration authority (address to the head of the legal entity), and must be notarized in the country of origin of the manufacturer. It must also be translated into Russian and notarized by the Russian consulate in your country. The power of attorney must stipulate that the manufacturer must entrust the applicant to sign a contract to perform registration of medical devices/equipment, perform consultation and professional work, and obtain a registration certificate.</li>
                                    <li><span class="number">※ </span>The registration process does not require Good Manufacturing Practices (GMP) audits. However, legislation to introduce these screenings will be implemented in the near future.</li>
                                    <li><span class="number">※ </span>In general, the fee of registration depends on the scope of testing required.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-6 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_medicaldivices_02.jpg" alt="Medical device registration confirmation">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Medical device registration confirmation</h3>
                                <p class="con_txt">
                                    You can check the registration status of medical devices on the website of Rospotrebnadzor in the Russian version.<br><br>
                                    <a href="http://roszdravnadzor.ru/registration/mi/login">☞ Go to Rospotrebnadzor website ☜</a>
                                </p>
                                <p style="text-align:justify">
                                    For medical devices of Class 1 and 2a, if the products are similar (same grade, applied in the same way, same efficiency), both products are registered on the basis of equivalent or technical testing, safety.<br><br>
                                    All other products including Class 2b, 3, 1 and 2a (if no similar product has already been registered) are registered on the basis of technical tests, safety assessments, clinical and medical tests to confirm effectiveness and safety.
                                </p>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </section>
            
            <!----(주)아이지씨인증원 사업영역 시작-------->
            <section class="partner_type2">
                <h2 class="con_arrow">
                    <p>Related Services from IGC</p>
                </h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>System certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (Europe, Eurasia, Americas, China, Southeast Asia)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Product test</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Certification of audit qualifications</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Professional manpower training</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 02 의료기기 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 03 식품 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">Introduction of Eurasian Product Certification</h1>
                <h2 class="tit_cer fc_pointer">Food</h2>
                <p class="outline">
                    If you wish to export food to the Eurasian region, you must obtain a certification proving compliance with the applicable technical regulations. And the conformity mark (EAC) is affixed on the product, packaging or attached documents to export to that country.<br><br>
                    Exporting to countries that have joined the Economic Union/Customs Union (Russia, Kazakhstan, Belarus, Kyrgyzstan, Armenia) requires EAC certification or GOST certification in accordance with the Technical Regulation of Customs Union (TRCU). Or exporting to other Eurasian countries such as Uzbekistan requires national certification.<br><br>
                    Certification for food is divided into EAC, GOST and State Registration Certificate.
                </p>
                
                <ul class="content">
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_food_02.jpg" alt="Eurasian Product Certification (EAC)">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Eurasian Product Certification (EAC)</h3>
                                <p class="con_txt">
                                    TRCU abbreviated for Technical Regulation of Customs Union and stands for the technical regulations of the Customs Union centered on Russia.<br><br>
                                    TRCU is an integrated certification system that began with the Eurasian Customs Union “EACU, Eurasian Customs Union” formed by Russia, Kazakhstan and Belarus in 2010, and entered into force in the Eurasian Economic Union “EEU, Eurasian Economic Union” in 2015.<br><br>
                                    Currently, the Eurasian Customs Union/Economic Union consists of five countries: Russia, Kazakhstan, Belarus, Kyrgyzstan, and Armenia, and TRCU certification follows the stipulated certification procedure according to the decision of the Eurasian Economic Commission.<br><br>
                                    The EAC mark is affixed on the certificate, which means Eurasian Conformity.
                                </p>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">1) TRCU EAC applied items (food)</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>TR СU 015/2011 On safety of grain</li>
                                        <li><span class="bullet"></span>TR CU 021/2011 On safety of food product</li>
                                        <li><span class="bullet"></span>TR СU 022/2011 On food products in terms of its marking</li>
                                        <li><span class="bullet"></span>TR CU 023/2011 On juice production of vegetables and fruits</li>
                                        <li><span class="bullet"></span>TR CU 024/2011 On oil and fat products</li>
                                        <li><span class="bullet"></span>TR CU 027/2012 On safety of certain types of specialized food products, including foods for dietary treatment and dietary preventive nutrition</li>
                                        <li><span class="bullet"></span>TR CU 029/2012 Requirements for the safety of food additives, flavorings and technological aids</li>
                                        <li><span class="bullet"></span>TR CU 033/2013 On safety of milk and dairy products</li>
                                        <li><span class="bullet"></span>TR CU 034/2013 On safety of meat and meat products</li>
                                        <li><span class="bullet"></span>TR CU 040/2016 On safety of fish and fish products</li>
                                        <li><span class="bullet"></span>TR CU 044/2017 On the safety of packaged drinking water, including natural mineral water</li>
                                        <li><span class="bullet"></span>TR CU 047/2018 On safety of alcohol products</li>
                                    </ul>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">2) EAC certificate type</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>This is a general product with relatively low risk, and some products can be issued certificate by only document review. Food is subject to the EAC DoC.</li>
                                    </ul>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">3) EAC certification information</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Documents to be submitted : application form, product manual, HS Code, drawing, technical document, test report, certificate (Documents to be submitted must be written in Russian)</li>
                                        <li><span class="bullet"></span>Sample test : Depending on the product, it is decided whether to submit and test the sample.</li>
                                        <li><span class="bullet"></span>Factory inspection : None</li>
                                        <li><span class="bullet"></span>Duration : 2 weeks (Excluding sample delivery and sample testing period)</li>
                                        <li><span class="bullet"></span>Certificate validity period : up to 5 years (Serial Production Certification)</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                                      
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_food_01.jpg" alt="Eurasian Product Certification (GOST)">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Eurasian Product Certification (GOST)</h3>
                                <p class="con_txt">
                                    GOST is a national technical standard specified by the Euro-Asian Council for Standardization, Metrology and Certification (EASC), an abbreviation of GOsudarstvennyy STandart, which means federal standard in Russian.<br><br>
                                    Currently, GOST certificates issued by country and the subject of issuing certification bodies are different, so each country's GOST certificate is a different certificate, and it is classified as GOST-R in Russia and GOST-K in Kazakhstan.<br><br>
                                    After the introduction of the EAC, an integrated certification system that took effect between customs alliance countries, the proportion of GOST certification in the country has decreased significantly compared to the past. However, GOST certification is still required for import customs clearance for compulsory certification items that have not yet been negotiated between customs alliances.
                                </p>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">1) GOST applied items (food)</span>
                                    <p style="text-align:justify">
                                        After the introduction of the integrated certification system that took effect between the countries of the Eurasian Customs Union such as meat, fish, shellfish, vegetables/fruits, grains, citrons, alcohol/drinks, etc., the share of GOST certifications in Russia has decreased significantly compared to the past.<br><br>
                                        However, compulsory certification items that have not yet been negotiated between allies must be certified by GOST.<br><br>
                                        In addition, EAC-certified companies may additionally apply for a voluntary GOST certificate for customer promotion and trust.
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">2) GOST certificate type</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>GOST DoC (Declaration of Conformity)</li>
                                        <li><span class="bullet"></span>GOST Voluntary</li>
                                    </ul>
                                    <p style="text-align:justify">
                                        GOST Voluntary is a certificate that proves that the product has been made in accordance with applicable regulations and guidelines, although it is not mandatory to obtain GOST certification.<br><br>
                                        The additional acquisition of the GOST Voluntary Certificate will have the expected effect of more clearly demonstrating your management capabilities, thus securing the effect of increasing exports.
                                    </p>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">3) GOST certification information</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Documents to be submitted : application form, product manual, HS Code, drawing, technical document, Existing test report, Existing certificate (Documents to be submitted must be written in Russian)</li>
                                        <li><span class="bullet"></span>Sample test : Depending on the product, it is decided whether to submit and test the sample.</li>
                                        <li><span class="bullet"></span>Factory inspection : None</li>
                                        <li><span class="bullet"></span>Duration : 2 weeks (Excluding sample delivery and sample testing period)</li>
                                        <li><span class="bullet"></span>Certificate validity period : up to 3 years (Serial Production Certification)</li>
                                    </ul>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">4) Certification process</span>
                                    <p class="con_txt">
                                        TRCU EAC, GOST and State Registration Certificate certification process
                                    </p>
                                    <ul class="list_st">
                                        <li><span class="number">1. </span>Submit application form and product-related documents to the certification body</li>
                                        <li><span class="number">2. </span>Document review</li>
                                        <li><span class="number">3. </span>Check the type of certificate applied</li>
                                        <li><span class="number">4. </span>Check the Sample test and factory inspection</li>
                                        <li><span class="number">5. </span>Issuance of quotation and contract</li>
                                        <li><span class="number">6. </span>If sample test is needed, test and test report is issued after sending sample</li>
                                        <li><span class="number">7. </span>If factory inspection is necessary, proceed with the inspection</li>
                                        <li><span class="number">8. </span>Draft certificate issuance and customer verification</li>
                                        <li><span class="number">9. </span>Certificate issuance</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                                      
                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_food_03.jpg" alt="State Registration Certificate">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">State Registration Certificate</h3>
                                <p class="con_txt">
                                    The hygiene registration certificate issued by each country has been integrated into one certificate according to the Decision of CU commission No.299 adopted in 2010 by the Customs Union.<br><br>
                                    One certificate can be used in all 5 countries of the Eurasian Customs Union (Russia, Kazakhstan, Belarus, Kyrgyzstan, Armenia).
                                </p>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">1) Food products to which national hygiene registration is applied</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Mineral water, bottled water, soft drinks, alcohol-including low alcohol and tonic drinks</li>
                                        <li><span class="bullet"></span>Baby food, food for pregnant and breastfeeding women, dietary products, food for athletes, biologically active food additives, organic products, specialty foods including supplements</li>
                                        <li><span class="bullet"></span>Food additives (plant extracts, aromas, etc.)</li>
                                        <li><span class="bullet"></span>Food produced using genetically modified (transgenic) organisms</li>
                                        <li><span class="bullet"></span>Materials, devices, equipment and other technical products for use in drinking water supply</li>
                                        <li><span class="bullet"></span>Food contact products (excluding cutlery, tableware, and manufacturing equipment)</li>
                                    </ul>
                                </div>
                                
                                <div class="con_txt_2">
                                    <span class="point_blk">2) National hygiene registration certification information</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Sample test : Depending on the product, sample submission and testing are decided.</li>
                                        <li><span class="bullet"></span>Factory inspection : Depending on the product, factory inspection may be required, and inspection M/D and fee are determined through quotation.</li>
                                        <li><span class="bullet"></span>Duration : 4~6 weeks (excluding sample sending and sample testing period)</li>
                                        <li><span class="bullet"></span>Validity period of certificate : 5 years</li>
                                        <li><span class="bullet"></span>Certification fee : It is different for each product, so consultation is required for accurate quotation.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-4-->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_food_04.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p class="con_txt">
                                    IGC provides a competitive and satisfactory service to its customers through several strengths.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Providing competitive services based on knowledge and technology secured through certification projects in various fields</li>
                                    <li><span class="bullet"></span>Competitive certification fee</li>
                                    <li><span class="bullet"></span>Minimum time required through rapid certification service</li>
                                    <li><span class="bullet"></span>Provides One Stop Service for various system and product certifications</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </section>
            
            <!----(주)아이지씨인증원 사업영역 시작-------->
            <section class="partner_type2">
                <h2 class="con_arrow">
                    <p>Related Services from IGC</p>
                </h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>System certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (Europe, Eurasia, Americas, China, Southeast Asia)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Product test</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Certification of audit qualifications</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Professional manpower training</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 03 식품 컨텐츠 종료 //------->
        
        
        
        <!----// 컨텐츠 04 화장품 컨텐츠 시작 //------->
        <article style="display:block;">
            <section class="business_type5" class="area">
                <h1 class="tit_num">Introduction of Eurasian Product Certification</h1>
                <h2 class="tit_cer fc_pointer">Cosmetics</h2>
                <p class="outline">
                    Companies wishing to export products to the Eurasian region must obtain certification proving conformity to the applicable technical regulations and mark the conformity mark on the product, packaging or attached documents to be exported to that country.<br><br>
                    Exporting to countries that have joined the Economic Union/Customs Union (Russia, Kazakhstan, Belarus, Kyrgyzstan, Armenia) requires EAC certification or State Registration Certificate in accordance with the TRCU regulation. Exporting to other Eurasian countries such as Uzbekistan requires national GOST certification.<br><br>
                    The certification for cosmetics is divided into EAC, GOST and State Registration Certificate according to product characteristics.
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
                                    TRCU is an integrated certification system that began with the Eurasian Customs Union “EACU, Eurasian Customs Union” formed by Russia, Kazakhstan, and Belarus in 2010 and entered into force in the Eurasian Economic Union “EAEU, Eurasian Economic Union” in 2015.
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li>
                                            <span class="bullet"></span>TRCU EAC applied items (cosmetics)
                                            <p>TR СU 009/2011 On safety of cosmetics and perfumes</p>
                                        </li>
                                        <li>
                                            <span class="bullet"></span>EAC certificate type (cosmetics)
                                            <p>DoC (Declaration of Conformity): This is a general product with relatively low risk, and some products can be issued certificate by only document review. Cosmetics require EAC DoC.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; Certification Information</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Documents to be submitted : application form, product manual, HS Code, test report, certificate, etc. (Documents to be submitted must be written in Russian)</li>
                                        <li><span class="bullet"></span>Sample test : Depending on the product, it is decided whether to submit a sample or test. For cosmetics, sample tests are conducted</li>
                                        <li><span class="bullet"></span>Factory inspection : None</li>
                                        <li><span class="bullet"></span>Duration : 2 weeks (Excluding sample sending and sample testing period)</li>
                                        <li><span class="bullet"></span>Certificate validity period : 5 years (Serial Production Certification)</li>
                                        <li><span class="bullet"></span>Certification fee : It is different for each product, so consultation is required for accurate quotation.</li>
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
                                    GOST is a national technical standard specified by the Euro-Asian Council for Standardization, Metrology and Certification (EASC), an abbreviation of GOsudarstvennyy STandart, which means federal standard in Russian.<br><br>
                                    Currently, GOST certificates issued by country and the subject of issuing certification bodies are different, so each country's GOST certificate is a different certificate, and it is classified as GOST-R in Russia and GOST-K in Kazakhstan.
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; GOST applied items (cosmetics)</span>
                                    <p class="con_txt">
                                        After the introduction of the EAC, an integrated certification system that took effect between customs alliance countries, the proportion of GOST certification in the country has decreased significantly compared to the past. However, GOST certification is still required for import customs clearance for compulsory certification items that have not yet been negotiated between customs alliances.<br><br>
                                        EAC DoC or State Registration Certificate (National Hygiene Registration) is mandatory when exporting cosmetics to countries belonging to the Eurasian Economic Union (Russia, Kazakhstan, Belarus, Kyrgyzstan, Armenia), and GOST certification is not included. However, when exporting to Eurasian countries (such as Uzbekistan) other than the countries of the Economic Union, GOST certification for each country or State registration within the country is required.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; GOST certificate type</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>GOST DoC (Declaration of Conformity)</li>
                                        <li><span class="bullet"></span>GOST Voluntary</li>
                                        <li><span class="bullet"></span>GOST Voluntary is a certificate that proves that the product has been made in accordance with applicable regulations and guidelines, although it is not mandatory to obtain GOST certification. The additional acquisition of the GOST Voluntary Certificate will have the expected effect of more clearly demonstrating your management capabilities, thus securing the effect of increasing exports.</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; Certification Information</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Documents to be submitted : application form, product manual, HS Code, test report, and certificate (Documents to be submitted must be written in Russian)</li>
                                        <li><span class="bullet"></span>Sample test : Depending on the product, it is decided whether to submit or test the sample. (In the case of GOST Voluntary certification, a sample test of cosmetics is performed, but since it was conducted in the EAC certification process, no additional test is required)</li>
                                        <li><span class="bullet"></span>Factory inspection : None</li>
                                        <li><span class="bullet"></span>Duration : 2 weeks (Excluding sample sending and sample testing period)</li>
                                        <li><span class="bullet"></span>Certificate validity period : 3 years (Serial Production Certification)</li>
                                        <li><span class="bullet"></span>Certification fee : It is different for each product, so consultation is required for accurate quotation.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                                     
                    <li><!-- content 4-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_03.jpg" alt="State Registration Certificate">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">State Registration Certificate</h3>
                                <p class="con_txt">
                                    The hygiene registration certificate issued by each country was integrated into one in accordance with the Decision of CU commission No.299 adopted in 2010 by the Customs Union. One certificate can be used in all countries of the Eurasian Economic Union (Russia, Kazakhstan, Belarus, Kyrgyzstan, Armenia).
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; Products subject to State Registration Certificate (cosmetics)</span>
                                    <p class="con_txt">
                                        Cosmetics that are classified as special cosmetics according to their ingredients, functions and purposes must obtain a national hygiene registration certificate.
                                    </p>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Tanning products</li>
                                        <li><span class="bullet"></span>Whitening products</li>
                                        <li><span class="bullet"></span>Products for tattoos</li>
                                        <li><span class="bullet"></span>Intimate care</li>
                                        <li><span class="bullet"></span>Perfume or cosmetics intended to protect the skin from the effects of harmful factors by individuals</li>
                                        <li><span class="bullet"></span>Infant cosmetics (Products for children under 14)</li>
                                        <li><span class="bullet"></span>Dyeing and Bleaching Products</li>
                                        <li><span class="bullet"></span>Products for perm, hair straights</li>
                                        <li><span class="bullet"></span>Perfume and cosmetics using nanomaterials (nanomaterials: insoluble or in-body stability substance, internal or Exterior particle size specially manufactured within a range of 1 to 100 nm)</li>
                                        <li><span class="bullet"></span>Brushing products</li>
                                        <li><span class="bullet"></span>Pilling agent (chemical filling). Products for removing surface cells from the epidermis using exfoliating agents)</li>
                                        <li><span class="bullet"></span>Fluoride oral hygiene products with fluorine content of 0.15% or higher (liquid products for oral hygiene of oral hygiene are 0.05% or higher)</li>
                                        <li><span class="bullet"></span>Contains zinc peroxide and peroxide elements concentrated in hydrogen peroxide or whitening products with hydrogen oxide. Other components that produce hydrogen peroxide (0.1-6.0%)</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; State Registration Certificate Certification Information</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>Documents to be submitted : Application form, product manual, MSDS, copy of product and label (photo), test report, certificate (documents must be written in Russian)</li>
                                        <li><span class="bullet"></span>Sample test : Required</li>
                                        <li><span class="bullet"></span>Factory inspection : Depending on the product, factory inspection may be required, and inspection M/D and fee are determined through quotation.</li>
                                        <li><span class="bullet"></span>Duration : 4~6 weeks (Excluding sample sending and sample testing period)</li>
                                        <li><span class="bullet"></span>Certificate validity period : 5 years</li>
                                        <li><span class="bullet"></span>Certification fee : It is different for each product, so consultation is required for accurate quotation.</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; TRCU EAC, GOST and State Registration Certificate certification process</span>
                                    <ul class="list_st">
                                        <li><span class="number">1. </span>Submit application form and product-related documents to the certification body</li>
                                        <li><span class="number">2. </span>Document review</li>
                                        <li><span class="number">3. </span>Check the type of certificate applied</li>
                                        <li><span class="number">4. </span>Issuance of quotation and contract</li>
                                        <li><span class="number">5. </span>If sample test is needed, test and test report is issued after sending sample</li>
                                        <li><span class="number">6. </span>Certificate issuance</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                                      
                    <li><!-- content 4-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_04.jpg" alt="Cosmetic test">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Cosmetic test</h3>
                                <p class="con_txt">
                                    Product samples submitted for certification or national state registration are tested by accredited laboratories in Eurasian countries for :
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Physical and chemical analysis test</li>
                                    <li><span class="bullet"></span>Microorganism detection test</li>
                                    <li><span class="bullet"></span>Toxicity test</li>
                                    <li><span class="bullet"></span>Hygiene inspection</li>
                                    <li><span class="bullet"></span>Other necessary tests and tests</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_usa_cosmetic_06.png" alt="Why is it important?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Why is it important?</h3>
                                <p style="text-align:justify">
                                    Companies wishing to export products to the Eurasia region must obtain certification proving conformity to the applicable technical regulations and mark the conformity mark on the product, packaging or attached documents to be exported to that country.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-6 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_evalu_07.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <p class="con_txt">
                                    IGC cooperates with the RUS-TEST PACIFIC certification body to provide the best competitive value to customers and stakeholders, and is reborn as a global certification body through continuous shared growth.<br><br>
                                    IGC complies with :
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Compliance with legal requirements</li>
                                    <li><span class="bullet"></span>Teamwork and solidarity among members</li>
                                    <li><span class="bullet"></span>Sincerity and fairness</li>
                                    <li><span class="bullet"></span>Social and environmental accountability</li>
                                    <li><span class="bullet"></span>Continuous development and improvement activities through knowledge and learning as a certification and registration service provider</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-7 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_uasia_food_04.jpg" alt="Why IGC?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Why IGC?</h3>
                                <p class="con_txt">
                                    IGC provides a competitive and satisfactory service to its customers through several strengths.
                                </p>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>Providing competitive services based on knowledge and technology secured through certification projects in various fields</li>
                                    <li><span class="bullet"></span>Competitive certification fee</li>
                                    <li><span class="bullet"></span>Minimum time required through rapid certification service</li>
                                    <li><span class="bullet"></span>Provides One Stop Service for various system and product certifications</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </section>
            
            <!----(주)아이지씨인증원 사업영역 시작-------->
            <section class="partner_type2">
                <h2 class="con_arrow">
                    <p>Related Services from IGC</p>
                </h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>System certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (Europe, Eurasia, Americas, China, Southeast Asia)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Product test</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Certification of audit qualifications</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Professional manpower training</span></p></li>
                    </ul>
                </div>
           </section>
           <!---------(주)아이지씨인증원 사업영역 종료 ------>

        </article><!----// 컨텐츠 04 화장품 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 05 의약품 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">Introduction of Eurasian Product Certification</h1>
                <h2 class="tit_cer fc_pointer">Medicine</h2>
                <p class="outline">
                    In accordance with Russian Federal Law (Pharmaceutical Distribution Act: #61-FZ / 2010.04.12), all pharmaceuticals and medical substances imported into the Russian Federation must obtain an import license and are subject to federal state control over the distribution of pharmaceuticals. State control bodies are territorial authorities under the Health Supervisory Service of the Russian Federation (ROSZDRAVNADZOR) and constituent bodies of the Russian Federation. The purpose of state supervision is to prevent, detect and contain violations of the requirements of the legislation of the Russian Federation in the field of drug distribution.
                </p>
                
                <ul class="content">
                    <li><!-- content 5-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medicine_01.jpg" alt="The need to comply with the Drug Distribution Act (#61-FZ)">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">The need to comply with the Drug Distribution Act (#61-FZ)</h3>
                                <p class="con_txt">
                                    According to the current law, violations of the law on the distribution of drugs are subject to penalties under the laws of the Russian Federation.<br><br>
                                    The relevant laws are :
                                </p>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; Resolution of the Government of the Russian Federation Article 5.1.4</span>
                                    <p>
                                        Health monitoring service (No323, 2004/06/30). State oversight includes the organization and conduct of inspections for compliance with the circulation of pharmaceuticals with requirements for the distribution, transportation, dispensing, sale of pharmaceuticals, and use of pharmaceuticals.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">&#10020; Federal Law Regulations (#294-F3, 2008/12/26)</span>
                                    <p>
                                        It is about the protection of the rights of corporations and private companies in the implementation of state control (supervision) and local governments. Monitoring the integrity and quality of state supervision includes conducting inspections, identifying and eliminating violations of the applicant's rights, violating essential requirements, applying measures to contain the violation, and eliminating the consequences of such violations, reviewing, making decisions and preparing responses to the applicant's appeal.<br><br>
                                        Therefore, if your company wants to distribute medicines in Russia, you must comply with the Drug Distribution Act and other relevant laws.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                                      
                    <li><!-- content 5-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medicine_02.jpg" alt="Product license registration">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Product license registration</h3>
                                <p style="text-align:justify">
                                    In order to register an import license, product registration must be preceded to the Russian Federation Health Supervisory Service (ROSZDRAVNADZOR). Product registration requires registration review and clinical trials conducted by the Federal Health Supervisory Service. The registration review is determined within the 210-day period excluding the clinical trial period, and document review, production process review, and sampling type test are required.<br><br>
                                    In the case of clinical trials, the requirements for preclinical and clinical trials established by federal law of drug distribution and other regulatory laws of Russia must be complied. In accordance with Article 4, Paragraph 40 of the Drug Distribution Act (#61-FZ/2010.04.12), preclinical testing is defined as biological, microbiological, immunological, toxicological, physical testing, and stability testing of pharmaceuticals by other scientific evaluation methods. For clinical trials, this includes research into the diagnosis, treatment, prevention and pharmacological properties of a drug.<br><br>
                                    This includes interactions with other pharmaceuticals and foods, not limited to processes such as absorption, allocation and transformation by scientific methods.
                                </p>
                            </dd>
                        </dl>
                    </li>
                                    
                    <li><!-- content 5-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medicine_03.jpg" alt="Application for import permit">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Application for import permit</h3>
                                <p style="text-align:justify">
                                    After the drug is registered with the Federal Health Supervisory Service, you can apply for an import license, and all drug certifications that are initially registered are valid for five years. After that, upon renewal, the certificate of the approved drug is indefinitely valid.<br><br>
                                    In addition to issuing a drug registration certificate, it is also necessary to obtain a Certificate of Conformity or a Declaration of Conformity according to Russian certification GOST R.
                                </p>
                            </dd>
                        </dl>
                    </li>
                                    
                    <li><!-- content 5-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medicine_04.jpg" alt="Products subject to certification">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Products subject to certification</h3>
                                <p style="text-align:justify">
                                    According to the legislation of the Russian Federation government (#982, 2009.12.01), the items that require certification are immunoglobulins, gamma globulin, serum, toxins, medical and veterinary vaccines. Items subject to the declaration of conformity include drugs, pharmaceutical chemicals, coenzymes, enzymes, amino acids, vitamins, organic products, and veterinary serum.
                                </p>
                            </dd>
                        </dl>
                    </li>
                                    
                    <li><!-- content 5-5 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medicine_05.jpg" alt="Benefits of pharmaceutical certification : prospects of expanding Eurasian pharmaceutical certification">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">Benefits of pharmaceutical certification : prospects of expanding Eurasian pharmaceutical certification</h3>
                                <p class="con_txt">
                                    Eurasian countries that require drug certification are expected to increase further. Currently, the member countries of the Eurasian Economic Union are in the process of forming a pharmaceutical market community as in the case of medical devices.
                                </p>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>On December 23, 2014, Russia, Belarus and Kazakhstan signed an agreement on common rules and principles for drug distribution within the EEC.</li>
                                        <li><span class="bullet"></span>And applied about 26 regulations including No. 78 Drug Registration Inspection Regulation (November 3, 2016) (Applicable date: 2017.05~)</li>
                                    </ul>
                                </div>
                                <p style="text-align:justify">
                                    Therefore, the effectiveness and application of drug certification will be expanded.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-6 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medicine_06.jpg" alt="EAEU drug distribution regulation">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">EAEU drug distribution regulation</h3>
                                <p style="text-align:justify">
                                    On May 5, 2017, the Eurasian Economic Commission announced that the 26-document EAEU drug distribution regulation came into effect on May 6, 2017. Transnational regulations apply to drug development, preclinical and clinical research, quality control, registration, production and distribution, while national regulations include preclinical and clinical trials, pricing, retail, public procurement, cost reimbursement, and advertising.<br><br>
                                    There is a grace period until December 31, 2020, so if you need a registration certificate, you can choose between EAEU and national regulatory systems to apply. If applying for registration before December 31, 2018, EAEU manufacturers were required to submit according to the country-specific regulatory system instead of the EAEU GMP certificate. All drugs registered in accordance with the regulations prior to December 31, 2020 must be re-registered in accordance with the regulations of each market by December 31, 2025.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 5-7 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/product_medicine_07.jpg" alt="IGC’s Competency">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC’s Competency</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC is providing certification services for medicines in cooperation with RUS-TEST PACIFIC, an Eurasian regional certification service provider.</li>
                                    <li><span class="bullet"></span>IGC auditors are contributing to the continuous development of customers by accurately evaluating the suitability through the technology and expertise accumulated over the years.</li>
                                    <li><span class="bullet"></span>IGC is a reliable global leader in Eurasian certification, providing certification for medical devices, cosmetics, food and EAC certification as well as pharmaceuticals.</li>
                                    <li><span class="bullet"></span>IGC has up-to-date knowledge of a wide range of specific scope and legal requirements in major markets around the world, and provides the knowledge and services to support your entire global operation.</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </section>
            
            <!----(주)아이지씨인증원 사업영역 시작-------->
            <section class="partner_type2">
                <h2 class="con_arrow">
                    <p>Related Services from IGC</p>
                </h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>System certification</span></p></li>
                        <li><p><em><strong>02</strong></em><span>Product certification (Europe, Eurasia, Americas, China, Southeast Asia)</span></p></li>
                        <li><p><em><strong>03</strong></em><span>Product test</span></p></li>
                        <li><p><em><strong>04</strong></em><span>Certification of audit qualifications</span></p></li>
                        <li><p><em><strong>05</strong></em><span>Professional manpower training</span></p></li>
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