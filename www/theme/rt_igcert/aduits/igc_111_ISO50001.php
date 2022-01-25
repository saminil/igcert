<?php
	include_once('./_common.php');
$g5['title'] = 'Part 2';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #00BFBF }/* 상세페이지 포인트 컬러 */
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
    
    /* 리스트 내부 텍스트 - 수정사항 반영 211216 전산팀 yr*/
    .list_st li .list_st_txt{ margin-bottom:15px; }
    .list_st li:last-child .list_st_txt{ margin-bottom:0px; }
    
    
    table { font-size: 0.85rem }
    /* type01 : 줄노트형식 */
    table.type01 { border-collapse: collapse;text-align: left;line-height: 1.6;border-top: 3px solid #009999;border-bottom: 3px solid #009999 }
    table.type01 th { padding: 10px 0 10px 20px;vertical-align: middle }
    table.type01 td { padding: 10px 0 10px 20px;vertical-align: top }
    table.type01 .even { background: #f4f4f4 }
    
    /* type02 : 헤더에 배경색/왼쪽-항목명/오른쪽-내용 기본테이블형식 */
    table.type02 { border-collapse: collapse;line-height: 1.6;border-bottom: 3px solid #009999 }
    table.type02 thead th { padding: 10px;vertical-align: middle;color: #fff;background: #009999 }
    table.type02 tbody th { padding: 10px;vertical-align: middle;font-weight: 500;border-bottom: 1px solid #e1e1e1;border-right: 1px solid #e1e1e1 }
    table.type02 tbody td { padding: 10px;vertical-align: middle;border-bottom: 1px solid #e1e1e1;border-right: 1px solid #e1e1e1 }
    table.type02 tbody td.none { border-right: none }
    
    /* type03 : 항목명과 내용이 가로정렬 되어있는 테이블형식 */
    table.type03 { border-collapse: collapse;text-align: left;line-height: 1.6;border-top: 3px solid #009999;border-bottom: 3px solid #009999 }
    table.type03 th { padding: 10px 20px;vertical-align: middle }
    table.type03 td { padding: 10px 20px;vertical-align: middle }
    table.type03 .even { background: #f4f4f4 }
    table.type03 .headerT { background: #009999;color: #fff;text-align: center;vertical-align: middle }

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
    <!--+++ 20.05.11 탭메뉴/ 심사원인증2 > ISO 27001 시작 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">ISO/IEC 20000-1</a></li>
			<li><a href="javascript:;">ISO/IEC 27001</a></li>
			<li><a href="javascript:;">ISO 22716</a></li>
			<li class="on"><a href="javascript:;">ISO 50001</a></li>
		</ul>
	</div><!--+++ 20.05.11 탭메뉴/ 심사원인증2 > ISO 27001 종료  +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.15 탭컨텐츠 영역 시작 +++-->
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 ISO 20000-1 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	    <article style="display:block;">
	        <section class="business_type5" class="area">
	            <h1 class="tit_num">ISO/IEC 20000-1:2018</h1>
                <h2 class="tit_cer fc_pointer">IT 서비스 경영시스템(SMS) | 심사원 인증</h2>
                <p class="outline">
                    IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 와의 협력을 바탕으로 ISO/IEC 20000-1 IT 서비스 경영시스템 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso20000_02.jpg" alt="ISO/IEC 20000-1:2018 인증 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 20000-1:2018 개요</h3>
                                <p style="text-align:justify;">
                                    ISO/IEC 20000-1은 서비스 제공자가 SMS를 계획, 수립, 구현, 운용, 감시, 검토, 유지, 개선하기 위한 요건을 명시하고 있는 서비스 관리를 위한 최초의 국제 표준입니다. 이 표준은 서비스 제공자가 고객에게 제공하는 서비스의 품질을 개발하는 방법을 식별할 수 있도록 하는 두 가지 주요 부분을 포함합니다.<br><br>
                                    Part 1은 서비스 관리 시스템의 개발 및 구현에 대한 요구사항을 명시하고 있으며, part 2는 ISO/ IEC 20000-1의 범위 내에서 서비스 관리 시스템의 적용에 관한 지침이 포함되어 있습니다.<br><br>
                                    IT Infrastructure Library (ITIL)에서는 ISO/IEC 20000에서 필요로 하는 동일한 서비스 품질 수준을 달성할 수 있는 모범사례를 설명하고 있지만, ITIL 인증은 보통 개인에 적용되는데 반해 ISO/IEC 20000-1은 전체 기업에 대한 인증을 가능하게 합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO/IEC 20000-1 심사원 인증 요구사항</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso20000_01.jpg" alt="ISO/IEC 20000-1 심사원 인증 요구사항">
                                    </div>
                                </div>
                                <table class="type02">
                                    <thead style="text-align:center">
                                        <tr style="border-bottom:1px solid #fff">
                                            <th scope="cols" width="10%" style="border-right:1px solid #fff">
                                                <p>&nbsp;</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>선임심사원</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>심사원</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>검증 심사원</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>내부심사원</p>
                                            </th>
                                            <th scope="cols" width="18%">
                                                <p>심사원보</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <p>교육</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>중등 교육 이상</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>업무 경력</p>
                                            </th>
                                            <td colspan="2">
                                                <p>5년 이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</p>
                                            </td>
                                            <td>
                                                <p>10년 이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</p>
                                            </td>
                                            <td>
                                                <p>3년 이상( 해당 규격 관련 품질 또는 환경 분야 1년 이상의 경력 포함)</p>
                                            </td>
                                            <td class="none">
                                                <p>해당 사항 없음</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>심사 경력</p>
                                            </th>
                                            <td>
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 35MD 이상의 심사 이력(그 중 15MD이상은 선임심사원으로서의 심사이력)</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 20MD 이상의 심사 이력</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 15MD 이상의 심사 이력(공인된 개인인증기관으로부터 선임심사원 자격 취득후의 이력만 수용 가능)</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내 5회 이상 + 최소 15MD 이상의 심사 이력</p>
                                            </td>
                                            <td class="none">
                                                <p>해당 사항 없음</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>교육 훈련</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>최근 3년 이내 심사원 교육 과정 수료 (공인된 개인 인증 기관 혹은 그로부터 지정 받은 연수 기관에서 발행한 수료증만 수용 가능)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>시험</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>GPC 지식 및 인성 시험 합격</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso20000_03.jpg" alt="ISO/IEC 20000-1 심사원 인증 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 20000-1 심사원 인증 절차</h3>
                               <div class="con_txt">
                                    <ul class="list_st">
                                        <li>
                                            <p><span class="number">1.</span> 신청 서류 접수</p>
                                            <p class="list_st_txt">- 신청자는 신청서를 작성하고 이력을 증빙할 수 있는 자료를 제출합니다.</p>
                                            
                                        </li>
                                        <li>
                                            <p><span class="number">2.</span> 신청 서류 및 제반 자료 검토</p>
                                            <p class="list_st_txt">- 제출된 신청 서류 및 제반 자료를 검토하여, 증빙 자료가 충분하지 않을 경우 추가 자료 증빙을 통해 이력을 증빙해야 합니다.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">3.</span> 시험 응시</p>
                                            <p class="list_st_txt">- 신청자는 지식 및 인성시험에 응시하여, 시험 통과 시 자격이 부여됩니다.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">4.</span> 인증결정위원회의 검토</p>
                                            <p class="list_st_txt">- 제출 자료 및 시험 결과를 기반으로 인증결정위원회의 인증 결정이 이루어집니다.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">5.</span> 인증서 발행</p>
                                            <p class="list_st_txt">- 자격 인증이 결정되면 인증서가 발행되어 신청자에게 전달됩니다.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="con_txt">
                                    인증은 발행일로부터 3년간 유효하고, 매년 인증받은 주기에 따라 유지비용을 지불해야 하며 3년 차인 갱신주기에는 추가 요구사항을 충족해야 합니다.
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

        </article><!----// 컨텐츠 01 ISO 20000-1 컨텐츠 종료 //------->
               
        
        <!----// 컨텐츠 02 ISO/IEC 27001 컨텐츠 시작 //------->   
        <article>
	        <section class="business_type5" class="area">
	            <h1 class="tit_num">ISO/IEC 27001:2013</h1>
                <h2 class="tit_cer fc_pointer">정보보안 경영시스템(ISMS) | 심사원 인증</h2>
                <p class="outline">
                    IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 와의 협력을 바탕으로 ISO/IEC 27001 정보보안 경영시스템 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso27001_01.jpg" alt="ISO/IEC 27001:2013 인증 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 27001:2013 개요</h3>
                                <p style="text-align:justify;">
                                    ISO/IEC 27001은 국제표준화기구 (ISO: International Organization for Standardization) 및 국제전기기술위원회 (IEC: International Electrotechnical Commission)에서 제정한 정보보호 관리체계에 대한 국제 표준이자 정보보호 분야에서 가장 권위 있는 국제 인증표준으로, 정보보호정책, 물리적 보안, 정보접근 통제 등 정보보안 관련 11개 영역, 133개 항목을 다루고 있습니다.<br><br>
                                    ISO/IEC 27001은 조직 환경, 리더십, 계획, 지원, 운영, 성과 평가, 개선의 10가지 항목과 14가지의 통제항목 (통제 항목은 ISO/IEC 27002를 참조)으로 구성되어 있습니다. 이 표준의 요구사항은 조직의 유형, 규모, 특성에 상관없이 모든 조직에 적용할 수 있도록 일반적인 내용으로 수립되었습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO/IEC 27001 심사원 인증 요구사항</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso27001_02.jpg" alt="ISO/IEC 27001 심사원 인증 요구사항">
                                    </div>
                                </div>
                                <table class="type02">
                                    <thead style="text-align:center">
                                        <tr style="border-bottom:1px solid #fff">
                                            <th scope="cols" width="10%" style="border-right:1px solid #fff">
                                                <p>&nbsp;</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>선임심사원</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>심사원</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>검증 심사원</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>내부심사원</p>
                                            </th>
                                            <th scope="cols" width="18%">
                                                <p>심사원보</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <p>교육</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>중등 교육 이상</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>업무 경력</p>
                                            </th>
                                            <td colspan="2">
                                                <p>5년 이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</p>
                                            </td>
                                            <td>
                                                <p>10년 이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</p>
                                            </td>
                                            <td>
                                                <p>3년 이상( 해당 규격 관련 품질 또는 환경 분야 1년 이상의 경력 포함)</p>
                                            </td>
                                            <td class="none">
                                                <p>해당 사항 없음</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>심사 경력</p>
                                            </th>
                                            <td>
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 35MD 이상의 심사 이력(그 중 15MD이상은 선임심사원으로서의 심사이력)</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 20MD 이상의 심사 이력</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 15MD 이상의 심사 이력(공인된 개인인증기관으로부터 선임심사원 자격 취득후의 이력만 수용 가능)</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내 5회 이상 + 최소 15MD 이상의 심사 이력</p>
                                            </td>
                                            <td class="none">
                                                <p>해당 사항 없음</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>교육 훈련</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>최근 3년 이내 심사원 교육 과정 수료 (공인된 개인 인증 기관 혹은 그로부터 지정 받은 연수 기관에서 발행한 수료증만 수용 가능)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>시험</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>GPC 지식 및 인성 시험 합격</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso27001_03.jpg" alt="ISO/IEC 27001 심사원 인증 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO/IEC 27001 심사원 인증 절차</h3>
                                 <div class="con_txt">
                                    <ul class="list_st">
                                        <li>
                                            <p><span class="number">1.</span> 신청 서류 접수</p>
                                            <p class="list_st_txt">- 신청자는 신청서를 작성하고 이력을 증빙할 수 있는 자료를 제출합니다.</p>
                                            
                                        </li>
                                        <li>
                                            <p><span class="number">2.</span> 신청 서류 및 제반 자료 검토</p>
                                            <p class="list_st_txt">- 제출된 신청 서류 및 제반 자료를 검토하여, 증빙 자료가 충분하지 않을 경우 추가 자료 증빙을 통해 이력을 증빙해야 합니다.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">3.</span> 시험 응시</p>
                                            <p class="list_st_txt">- 신청자는 지식 및 인성시험에 응시하여, 시험 통과 시 자격이 부여됩니다.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">4.</span> 인증결정위원회의 검토</p>
                                            <p class="list_st_txt">- 제출 자료 및 시험 결과를 기반으로 인증결정위원회의 인증 결정이 이루어집니다.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">5.</span> 인증서 발행</p>
                                            <p class="list_st_txt">- 자격 인증이 결정되면 인증서가 발행되어 신청자에게 전달됩니다.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="con_txt">
                                    인증은 발행일로부터 3년간 유효하고, 매년 인증받은 주기에 따라 유지비용을 지불해야 하며 3년 차인 갱신주기에는 추가 요구사항을 충족해야 합니다.
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

        </article><!----// 컨텐츠 02 ISO/IEC 27001 컨텐츠 종료 //------->
               
        
        <!----// 컨텐츠 03 ISO 22716 컨텐츠 시작 //------->   
        <article>
	        <section class="business_type5" class="area">
	            <h1 class="tit_num">ISO 22716:2007</h1>
                <h2 class="tit_cer fc_pointer">화장품 GMP 우수 제조 및 품질관리 기준에 대한 가이드 라인(cGMP) | 심사원 인증</h2>
                <p class="outline">
                    IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 와의 협력을 바탕으로 ISO 22716 CGMP 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso27716_01.jpg" alt="ISO 22716:2007 인증 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 22716:2007 개요</h3>
                                <p style="text-align:justify;">
                                    ISO 22716은 화장품 제품을 위한 GMP(Good Manufacturing Practices) 안내서를 제공하는데 목적이 있습니다. 이 가이드라인은 제조업의 화장품 분야의 특정 요구를 고려하여 마련되었습니다.<br><br>
                                    ISO 22716 은 제품의 품질에 영향을 미치는 요인들의 관리에 있어서 조직적이고 실질적인 조언을 제공합니다.<br><br>
                                    ISO 22716은 화장품 수출을 위한 필수 조건으로 변화하고 있습니다. 특히 유럽의 새로운 화장품 EU regulation에서는 화장품 제조사에게 harmonized standard를 준수하도록 요구하고 있는데 이 harmonized standard가 바로 ISO 22716 입니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO 22716 심사원 인증 요구사항</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso27716_02.jpg" alt="ISO 22716 심사원 인증 요구사항">
                                    </div>
                                </div>
                                <table class="type02">
                                    <thead style="text-align:center">
                                        <tr style="border-bottom:1px solid #fff">
                                            <th scope="cols" width="10%" style="border-right:1px solid #fff">
                                                <p>&nbsp;</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>선임심사원</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>심사원</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>검증 심사원</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>내부심사원</p>
                                            </th>
                                            <th scope="cols" width="18%">
                                                <p>심사원보</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <p>교육</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>중등 교육 이상</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>업무 경력</p>
                                            </th>
                                            <td colspan="2">
                                                <p>5년 이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</p>
                                            </td>
                                            <td>
                                                <p>10년 이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</p>
                                            </td>
                                            <td>
                                                <p>3년 이상( 해당 규격 관련 품질 또는 환경 분야 1년 이상의 경력 포함)</p>
                                            </td>
                                            <td class="none">
                                                <p>해당 사항 없음</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>심사 경력</p>
                                            </th>
                                            <td>
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 35MD 이상의 심사 이력(그 중 15MD이상은 선임심사원으로서의 심사이력)</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 20MD 이상의 심사 이력</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 15MD 이상의 심사 이력(공인된 개인인증기관으로부터 선임심사원 자격 취득후의 이력만 수용 가능)</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내 5회 이상 + 최소 15MD 이상의 심사 이력</p>
                                            </td>
                                            <td class="none">
                                                <p>해당 사항 없음</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>교육 훈련</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>최근 3년 이내 심사원 교육 과정 수료 (공인된 개인 인증 기관 혹은 그로부터 지정 받은 연수 기관에서 발행한 수료증만 수용 가능)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>시험</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>GPC 지식 및 인성 시험 합격</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso27716_03.jpg" alt="ISO 22716 심사원 인증 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 22716 심사원 인증 절차</h3>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li>
                                            <p><span class="number">1.</span> 신청 서류 접수</p>
                                            <p class="list_st_txt">- 신청자는 신청서를 작성하고 이력을 증빙할 수 있는 자료를 제출합니다.</p>
                                            
                                        </li>
                                        <li>
                                            <p><span class="number">2.</span> 신청 서류 및 제반 자료 검토</p>
                                            <p class="list_st_txt">- 제출된 신청 서류 및 제반 자료를 검토하여, 증빙 자료가 충분하지 않을 경우 추가 자료 증빙을 통해 이력을 증빙해야 합니다.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">3.</span> 시험 응시</p>
                                            <p class="list_st_txt">- 신청자는 지식 및 인성시험에 응시하여, 시험 통과 시 자격이 부여됩니다.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">4.</span> 인증결정위원회의 검토</p>
                                            <p class="list_st_txt">- 제출 자료 및 시험 결과를 기반으로 인증결정위원회의 인증 결정이 이루어집니다.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">5.</span> 인증서 발행</p>
                                            <p class="list_st_txt">- 자격 인증이 결정되면 인증서가 발행되어 신청자에게 전달됩니다.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="con_txt">
                                    인증은 발행일로부터 3년간 유효하고, 매년 인증받은 주기에 따라 유지비용을 지불해야 하며 3년 차인 갱신주기에는 추가 요구사항을 충족해야 합니다.
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

        </article><!----// 컨텐츠 03 ISO 22716 컨텐츠 종료 //------->
               
               
        <!----// 컨텐츠 04 ISO 50001 컨텐츠 시작 //------->       
        <article>
	        <section class="business_type5" class="area">
	            <h1 class="tit_num">ISO 50001:2018</h1>
                <h2 class="tit_cer fc_pointer">에너지 경영시스템(EnMS) | 심사원 인증</h2>
                <p class="outline">
                    IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 와의 협력을 바탕으로 ISO 50001:2018 에너지 경영시스템 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso27716_01.jpg" alt="ISO 50001:2018 인증 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 50001:2018 개요</h3>
                                <p style="text-align:justify;">
                                    'ISO 50001'은 국제표준화기구(ISO)가 2011년 6월 발효한 에너지경영시스템 국제표준으로, 에너지 효율화와 절감을 위한 프로세스와 요구사항을 규정하고 있습니다. 고유가 체제의 장기화와 국제적인 에너지 환경변화의 대응으로 효율적인 에너지 경영이 중요한 이슈로 대두되고 있습니다. 이러한 산업의 요구와 필요성으로 ISO 50001인증 수요가 지속적으로 증가하고 있으며 이에 따라 ISO 50001에 대한 전문가와 심사원의 수요 또한 증가하고 있습니다.<br><br>
                                    조직은 이 요구사항을 바탕으로 에너지방침을 개발하고 실행할 수 있으며, 중요에너지 이용과 관련된 법적 요구사항 및 정보를 고려한 목표, 세부목표 및 실행계획을 수립할 수 있습니다.<br><br>
                                    EnMS(Energy Management Systems)는 조직이 조직의 방침 의지를 달성하고, 에너지 성과 개선에 필요한 활동을 하고 이 표준의 요구사항에 그 시스템의 적합성을 실증하는 것을 가능하게 합니다. 이 표준은 조직의 관리하에 있는 활동들에 대하여 적용되며, 이 표준의 적용은 시스템 복잡성, 문서화 정도 및 자원을 포함하는 조직의 특정 요구사항에 맞도록 조정될 수 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO 50001 심사원 인증 요구사항</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso50001_02.jpg" alt="ISO 50001 심사원 인증 요구사항">
                                    </div>
                                </div>
                                <table class="type02">
                                    <thead style="text-align:center">
                                        <tr style="border-bottom:1px solid #fff">
                                            <th scope="cols" width="10%" style="border-right:1px solid #fff">
                                                <p>&nbsp;</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>선임심사원</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>심사원</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>검증 심사원</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>내부심사원</p>
                                            </th>
                                            <th scope="cols" width="18%">
                                                <p>심사원보</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <p>교육</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>중등 교육 이상</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>업무 경력</p>
                                            </th>
                                            <td colspan="2">
                                                <p>5년 이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</p>
                                            </td>
                                            <td>
                                                <p>10년 이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</p>
                                            </td>
                                            <td>
                                                <p>3년 이상( 해당 규격 관련 품질 또는 환경 분야 1년 이상의 경력 포함)</p>
                                            </td>
                                            <td class="none">
                                                <p>해당 사항 없음</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>심사 경력</p>
                                            </th>
                                            <td>
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 35MD 이상의 심사 이력(그 중 15MD이상은 선임심사원으로서의 심사이력)</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 20MD 이상의 심사 이력</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 15MD 이상의 심사 이력(공인된 개인인증기관으로부터 선임심사원 자격 취득후의 이력만 수용 가능)</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내 5회 이상 + 최소 15MD 이상의 심사 이력</p>
                                            </td>
                                            <td class="none">
                                                <p>해당 사항 없음</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>교육 훈련</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>최근 3년 이내 심사원 교육 과정 수료 (공인된 개인 인증 기관 혹은 그로부터 지정 받은 연수 기관에서 발행한 수료증만 수용 가능)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p>시험</p>
                                            </th>
                                            <td colspan="5" class="none">
                                                <p>GPC 지식 및 인성 시험 합격</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso50001_03.jpg" alt="ISO 50001 심사원 인증 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 50001 심사원 인증 절차</h3>
                                <div class="con_txt">
                                    <ul class="list_st">
                                        <li>
                                            <p><span class="number">1.</span> 신청 서류 접수</p>
                                            <p class="list_st_txt">- 신청자는 신청서를 작성하고 이력을 증빙할 수 있는 자료를 제출합니다.</p>
                                            
                                        </li>
                                        <li>
                                            <p><span class="number">2.</span> 신청 서류 및 제반 자료 검토</p>
                                            <p class="list_st_txt">- 제출된 신청 서류 및 제반 자료를 검토하여, 증빙 자료가 충분하지 않을 경우 추가 자료 증빙을 통해 이력을 증빙해야 합니다.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">3.</span> 시험 응시</p>
                                            <p class="list_st_txt">- 신청자는 지식 및 인성시험에 응시하여, 시험 통과 시 자격이 부여됩니다.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">4.</span> 인증결정위원회의 검토</p>
                                            <p class="list_st_txt">- 제출 자료 및 시험 결과를 기반으로 인증결정위원회의 인증 결정이 이루어집니다.</p>
                                        </li>
                                        <li>
                                            <p><span class="number">5.</span> 인증서 발행</p>
                                            <p class="list_st_txt">- 자격 인증이 결정되면 인증서가 발행되어 신청자에게 전달됩니다.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="con_txt">
                                    인증은 발행일로부터 3년간 유효하고, 매년 인증받은 주기에 따라 유지비용을 지불해야 하며 3년 차인 갱신주기에는 추가 요구사항을 충족해야 합니다.
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

        </article><!----// 컨텐츠 04 ISO 50001 컨텐츠 종료 //------->
                
    </div><!--+++ / 20.05.07 탭컨텐츠 영역 / +++-->
</div><!--------// div class="content_wrap"  종료 //------------------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>