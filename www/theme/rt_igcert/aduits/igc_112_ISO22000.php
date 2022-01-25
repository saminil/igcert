<?php
	include_once('./_common.php');
$g5['title'] = 'Part 3';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
			<li class="on"><a href="javascript:;">ISO 22000</a></li>
			<li><a href="javascript:;">FSSC 22000</a></li>
			<li><a href="javascript:;">FDA FSMA</a></li>
			<li><a href="javascript:;">PCQI</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 심사원인증2 > ISO 27001 종료  +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.15 탭컨텐츠 영역 시작 +++-->
    <div class="tab_con">
        <!--++++ 컨텐츠 01 ISO 22000 (처음 활성화 컨텐츠에만 style="display:block") ++++-->   
        <article style="display:block;">
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 22000:2018</h1>
                <h2 class="tit_cer fc_pointer">식품안전 경영시스템(FSMS) | 심사원 인증</h2>
                <p class="outline">
                    IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 와의 협력을 바탕으로 ISO 22000 식품안전 경영시스템 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
                </p>
                
                <ul class="content">
                   <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso9001_10.jpg" alt="ISO 22000 인증 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 22000 개요</h3>
                                <p style="text-align:justify;">
                                    ISO 22000은 국제식품규격위원회가 개발한 위해요소중점관리기준(HACCP) 시스템의 원칙과 적용단계를 통합하고 있습니다. 이 표준은 프로세스 형태 및 사용시설과 관련될 수 있는 위해요소를 포함하여, 식품사슬에서 발생할 것이 예측되는 모든 위해요소를 파악하고 평가하도록 요구하고 있습니다. 따라서 ISO 22000은 파악된 위해요소 중 관리될 필요가 있는 것과 없는 것을 구분하도록 도와주고 문서화를 위한 수단을 제공합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO 22000 심사원 인증 요구사항</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso9001_10_01.jpg" alt="ISO 22000 심사원 인증 요구사항">
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
                                <img src="./images/audit_iso9001_11.jpg" alt="ISO 22000 심사원 인증 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 22000 심사원 인증 절차</h3>
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

        </article><!----// 컨텐츠 01 ISO 22000 컨텐츠 종료 //------->
            
            
        <!----// 컨텐츠 02 FSSC 22000 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">FSSC 22000 Version 5</h1>
                <h2 class="tit_cer fc_pointer">식품안전시스템(FSSC) | 심사원 인증</h2>
                <p class="outline">
                    IGC는 FSSC의 공식 Training Organization으로 등록된 교육기관으로 FSSC 22000 심사원 등록 서비스를 제공하고 있습니다.
                </p>
                
                <ul class="content">
                   <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_fssc22000_01.jpg" alt="FSSC 22000 version 5 인증 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FSSC 22000 version 5 인증 개요</h3>
                                <p style="text-align:justify;">
                                    FSSC 22000 (Food Safety System Certification) 표준은 식품제조회사들에게 가장 영향력 있는 국제식품안전기구 (GFSI: Global Food Safety Initiative)가 식품산업 전반에 적합한 식품안전인증제도를 도입하기 위하여 승인한 식품 안전 표준입니다.<br><br>
                                    세계 인구가 증가함에 따라 저렴하고 안전하며 양질의 식품에 대한 수요가 증가하고 있습니다. 이러한 요구를 충족시키기 위해 FSSC 22000은 신뢰할 수 있는 식품 안전 플랫폼을 식품 업계에 제공합니다. FSSC 22000은 ISO 22000을 기반으로 식품 및 그 성분의 공급자에 대한 분야별 선행요건 프로그램(PRPs)과 추가적인 FSSC 22000 요구사항을 조합한 것으로, 조직의 규모, 복잡성, 위치에 관계없이 모든 식품 제조기업에 적용됩니다. 또한, 수송 및 생산현장에서의 보관도 인증 범위에 포함됩니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_fssc22000_02.jpg" alt="FSSC 22000 심사원 자격부여 프로세스">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FSSC 22000 심사원 자격부여 프로세스</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>실무경력</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>식품생산 또는 제조업, 소매업, 식품검사 또는 식품 관련법 집행 또는 이와 동등한 분야에서 품질보증 또는</li>
                                        <li><span class="bullet"></span>식품안전기능과 관련하여 상근으로 최소 2 년의 근무경력을 포함하는 식품 또는 관련 산업분야의 경력</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>학력</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>학력 : 식품관련 또는 생명과학 분야의 학위, 또는</li>
                                        <li><span class="bullet"></span>최소한 식품 관련 또는 생명과학 고등 교육 과정이나</li>
                                        <li><span class="bullet"></span>이와 동등한 과정에 대한 성공적 이수</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>교육훈련</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>FSMS 또는 QMS 선임심사원 과정 - 시험을 포함하여 최소 40 시간</li>
                                        <li><span class="bullet"></span>HACCP 교육훈련 - 시험을 포함하여 최소 16 시간</li>
                                        <li><span class="bullet"></span>ISO 22000 표준 – 시험을 포함하여 최소 8 시간(선임심사원 과정에 ISO 22000 표준에 대한 부분이 포함되지 않은 경우)</li>
                                        <li><span class="bullet"></span>식품 방어 리스크의 평가 방법 및 가능한 완화 조치를 다루는 식품 방어 교육훈련(시험 포함)</li>
                                        <li><span class="bullet"></span>식품 사기 취약성의 평가 방법 및 가능한 완화 조치를 다루는 식품 사기 교육훈련 (시험 포함)</li>
                                        <li><span class="bullet"></span>표준 – 스킴과 관련된 모든 요구사항(시험 포함): ISO/TS 22003 (부속서 C), ISO 19011 및 ISO/IEC 17021-1 (시험을 포함하여 인증기관 심사 프로세스에 적용 가능한 표준 들)</li>
                                        <li><span class="bullet"></span>관련 PRP 표준에 대한 교육훈련</li>
                                    </ul>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>기타</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>심사 : 최소 10 일의 심사경력과 5 회의 ISO 22000 심사</li>
                                        <li><span class="bullet"></span>또는 최소 1 회의 FSSC 22000 심사를 포함하여 특정 산업분야와 관련된 GFSI의 인정된 스킴 심사</li>
                                        <li><span class="bullet"></span>GFSI 시험 : 모든 심사원은 재단이 규정한 기한 내에 GFSI 시험을 통과하여야 한다. 새로운 심사원들은 FSSC 22000에 대한 자격을 부여 받기전에 GFSI 시험을 통과하여야 한다.</li>
                                        <li><span class="bullet"></span>범주 I 관련 : 포장관련 기본 자격증, 포장기술 관련 학위</li>
                                        <li><span class="bullet"></span>또는 상위 자격증과 식품기술, 식품위생 또는 관련 과학분야 자격증 또는 식품기술, 식품안전/위생 또는 관련 과학 분야 기본 자격증 및 세계포장협회의 교육훈련(최소 30 시간)과 세계포장협회가 규정한 요구사항을 충족하는 포장기술에 대한 자격증</li>
                                        <li><span class="bullet"></span>FSSC 22000-품질 : ISO/TS 22003 범주 및 ISO 9001 식품분야 코드에 따라 인정된 ISO 9001 인증과 관련하여 ISO/IEC 17021-1에 대한 자격이 부여된 심사원</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_fssc22000_03.jpg" alt="심사원의 최초 평가 및 승인">
                            </dt>
                            <dd class="txt_area">
                                <div style="text-align:justify">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>심사원의 최초 평가 및 승인</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>적격성이 달성되었음을 확인하기 위해 심사원에 대한 FSSC 22000 입회심사</li>
                                        <li><span class="bullet"></span>모든 FSSC 22000 심사원은(교육훈련 중에 있는 심사원포함) 재단 지침에 따라 포탈에 등록되어야 한다.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_fssc22000_04.jpg" alt="소분류에 대한 인증수행범위 부여(최초 및 확대)">
                            </dt>
                            <dd class="txt_area">
                                <div style="text-align:justify">
                                    <span class="point_blk"><span class="bullet">&#10020; </span>소분류에 대한 인증수행범위 부여(최초 및 확대)</span>
                                    <p class="con_txt">
                                        최초 심사원 자격을 부여받은 후, 심사원은 각각의 Category와 관련하여 자격을 부여/승인받아야 한다. 인증기관은 심사원에 대하여 Category code를 부여하기 위해 심사원이 다음 요구사항에 적합함을 실증하여야 한다.
                                    </p>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>해당 소분류에 대한 6 개월 실무경력 또는 해당 소분류에 대하여 자격을 보유한 심사원의 감독 하에 훈련자로 또는 심사반원으로서 부여받고자 하는 새로운 Category(post-farm gate only except for food chain category A)와 관련하여 GFSI 가 인정한 스킴에 대한 심사 5 회. 5 회의 심사 중 최소 1 회의 심사는 FSSC 22000 심사이어야 한다(사후 또는 갱신심사 2 단계) 실무경력을 입증하기 위해 자문업무가 활용되는 경우, 총 자문 일수는 6 개월 실무경력에 합산되어야 한다.</li>
                                        <li><span class="bullet"></span>소분류에 대한 구체적인 적격성 실증</li>
                                        <li><span class="bullet"></span>소분류에 대한 인증기관 자체 적격성 기준 충족</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 2-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/FSSC22000Version5_06.jpg" alt="제공하는 교육">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">제공하는 교육</h3>
                                <div class="con_txt_2">
                                    <span class="point_blk">FSSC 22000 이해</span>
                                    <p>
                                        이 과정은 조직, 인증 기관, 컨설턴트 및 FSSC 22000 요구 사항에 대한 일반적인 지식에 관심이 있고 다른 식품 사슬 조직에 적용할 수 있는 방법을 이해하는 사람들을 대상으로 합니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">FSSC 22000 실행</span>
                                    <p>
                                        위의 과정을 기반으로 하는 조직, 컨설턴트 및 기타의 경우 다양한 식품 사슬 범주 내에서 FSSC 22000을 구현할 수 있는 방법을 보여줍니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">FSSC 22000 내부 심사원 과정</span>
                                    <p>
                                        내부 심사원의 교육 요구 사항을 충족하도록 FSSC 22000을 구현하는 조직을 위해 설계되었습니다. 교육은 ISO 19011:2018에 지정된 모든 요소를 다룹니다.
                                    </p>
                                </div>
                                <div class="con_txt_2">
                                    <span class="point_blk">FSSC 22000 선임 심사원 과정</span>
                                    <p>
                                        선임 심사원 등록을 원하시는 분을 위하여 개최되는 과정입니다. 또한 내부 심사원 및 컨설턴트에도 적용될 수 있습니다. 교육의 구성은 FSSC 22000 요구사항, ISO 19011 : 2018, ISO / IEC 17021-1 : 2015 및 ISO / TS 22003 : 2013을 다루며 연습 과정 (예 : Case study) 및 필기 시험을 포함합니다. 총 교육 시간은 40 시간입니다.
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 2-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_fssc22000_05.jpg" alt="IGC인증원의 경쟁력">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증원의 경쟁력</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>IGC인증원은 국내 식품 제조 기업의 해외시장 진출을 위한 다양한 인증 및 시험서비스를 제공합니다.</li>
                                    <li><span class="bullet"></span>IGC인증원은 시험, 인증, 심사원 양성까지 수출을 위해 필요한 모든 과정을 One-stop 서비스로 빠르고 정확하게 지원합니다.</li>
                                    <li><span class="bullet"></span>IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 22000 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다.</li>
                                    <li><span class="bullet"></span>FSSC 22000 선임 심사원 지정을 위해 FSSC로부터 TO(Training Organization)로 지정을 받아 활발하게 FSSC 22000 심사원 양성 업무를 수행하고 있습니다.</li>
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

        </article><!----// 컨텐츠 02 FSSC 22000 컨텐츠 종료 //------->
            
            
        <!----// 컨텐츠 03 FDA FSMA 컨텐츠 시작 //------->   
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">FDA FSMA</h1>
                <h2 class="tit_cer fc_pointer">식품안전현대화법 | 심사원 인증</h2>
                <p class="outline">
                    IGC는 미국 FDA와 IAS로부터 전 세계 7번째, 국내에서는 최초로 FDA FSMA 제 3자 인증기관으로 인정받았아 심사원 등록 서비스를 제공하고 있습니다.
                </p>
                
                <ul class="content">
                   <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_FSMA_011.jpg" alt="FDA FSMA인증 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FDA FSMA 인증 개요</h3>
                                <p style="text-align:justify;">
                                    2011년 01월 04일, 미국정부는 사전예방을 통한 식품공급 안전성 및 국민건강 보호를 목적으로 식품안전현대화법 (Food Safety Modernization Act, FSMA)을 제정하였습니다. 이에 따라 FDA는 FSMA 제정으로 식품안전문제를 예방하는데 초점을 맞출 수 있게 되었습니다.<br><br>
                                    FSMA의 적용대상은 식품이나 사료를 제조, 가공, 포장 또는 보관하는 시설입니다. 또한 생산농가, US 수입업체, 화주업체, 수취업체, 선적업체, 운송업체 등 미국으로 식품을 보내는 업체도 FSMA를 준수해야 합니다. 따라서 업체들은 FSMA에 따라 위해요소 분석에 기반한 예방관리가 포함된 식품안전시스템을 구축하고, 문서화된 식품안전계획서를 작성하는 등의 각종 준비가 필요합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_FSMA_012.jpg" alt="FSMA 심사원 인증의 중요성">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FSMA 심사원 인증의 중요성</h3>
                                <p style="text-align:justify;">
                                    미국은 한국의 중요한 수출 대상국으로 매우 중요한 식품 수출시장입니다. 따라서 FSMA 제 3자 인증은 식품업체의 미국 수출 확대의 기회로 작용하고 있습니다. 따라서 FSMA에서 요구하는 규정을 잘 준수하고 있는지 공인된 제 3의 기관이 심사를 수행하기 위하여 FSMA 심사원 인증이 필요합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_FSMA_013.jpg" alt="FSMA 심사원 교육과정">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">FSMA 심사원 교육과정</h3>
                                <div>
                                    <span class="point_blk"><span class="bullet">&#10020; </span>IGC의 FSMA 제 3자 인증 심사원 교육과정 내용</span>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>FDA FSMA 3자 인증 프로그램</li>
                                        <li><span class="bullet"></span>심사원 적격성 기준</li>
                                        <li><span class="bullet"></span>FSMA 3자 인증 심사 점검항목</li>
                                        <li>
                                            <span class="bullet"></span>FSMA Human Food Category 별 특징 및 심사적용 방법
                                            <ul class="list_st">
                                                <li><span class="number">- </span>Low Acid and Acidified Foods (산성식품)</li>
                                                <li><span class="number">- </span>Fisheries/Seafood Products (수산식품)</li>
                                                <li><span class="number">- </span>Fruit or Vegetable Juices, Other Beverages Including Water (과채주스)</li>
                                                <li><span class="number">- </span>Starch Products (전분, 밀가루식품)</li>
                                                <li><span class="number">- </span>Food Additives (식품 첨가제)</li>
                                                <li><span class="number">- </span>Nuts and Edible Seed Products (견과, 씨앗류)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 3-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/FDA FSMA_07.jpg" alt="IGC인증원의 경쟁력">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">IGC인증원의 경쟁력</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>FSMA 심사원 교육과정은 미국 FDA에서 승인한 FSMA 제 3자 인증기관이자, FSPCA로부터 PCQI 양성과정과 FSVP 전문가 양성에 대한 교육권한을 받은 IGC에서 직접 준비한 교육과정입니다.</li>
                                    <li><span class="bullet"></span>FSMA 심사원 교육과정은 FSMA 제 3자 인증을 위한 심사원 양성을 위해 체계적이고 심도 있게 구성되었습니다.</li>
                                    <li><span class="bullet"></span>IGC만의 풍부한 경험을 바탕으로 양질의 심사 스킬을 습득할 수 있도록 준비된 교육과정입니다.</li>
                                    <li><span class="bullet"></span>FSMA 제 3자 인증 심사원 활동을 위해서는 PCQI 양성과정과 FSAM 제 3자 인증 심사원 과정을 모두 수료하여야 합니다.</li>
                                    <li><span class="bullet"></span>PCQI 자격이 있으시거나, 사전에 교육을 수료하신 경우 FSMA 제 3자 인증 심사원 과정만 선택하실 수 있습니다.</li>
                                    <li><span class="bullet"></span>IGC는 식품 시험소 운영 및 다양한 식품 관련 인증을 진행함으로써 식품 안전에 관한 광범위한 지식을 보유하고 있습니다.</li>
                                    <li><span class="bullet"></span>IGC인증원은 수년 간의 경험을 바탕으로 해당 분야 전문가들이 가르치는 과정과 전문 교육을 제공합니다. 또한, 수년 간의 글로벌 경험을 바탕으로 효과적인 학습과 개발의 기회를 제공합니다.</li>
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

        </article><!----// 컨텐츠 03 FDA FSMA 컨텐츠 종료 //------->
            
        
        <!----// 컨텐츠 04 PCQI 컨텐츠 시작 //------->  
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">PCQI</h1>
                <h2 class="tit_cer fc_pointer">PCQI(Preventive Controls Qualified Individual) | 심사원 인증</h2>
                <p class="outline">
                    미국에 식품을 수출하는 업체는 FSMA 요구사항에 기초하여 식품안전예방관리전문가 (PCQI: Preventive Controls Qaulified Individual)를 선임하여 HARPC (위해요소예방관리시스템)을 운영하여야 합니다.<br><br>
                    FSMA 규정에 따르면 식품제조회사는 전통적인 위해 요소 분석뿐만 아니라 잠재적인 위험성을 사전에 예방관리 하기 위한 식품안전계획을 수립하고 운영하도록 요구하고 있으며 또한 예방관리전문가에 의해 식품안전계획이 수립되어야 하고 예방관리의 유효성이 확인되어야 하며 관련 기록은 정기적으로 재검토할 것을 요구하고 있습니다.<br><br>
                    PCQI 자격증은 FSPCA(The food safety preventive Controls Alliance)가 승인한 교육 과정을 성공적으로 수료한 이후 FSPCA를 통해 Certificate를 발급받아야 합니다.
                </p>
                
                <ul class="content">
                   <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_pcqi_01.jpg" alt="PCQI란?">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">PCQI란?</h3>
                                <p style="text-align:justify;">
                                    최소한 FDA가 적합하다고 인정된 표준화된 커리큘럼에 따라 받은 것과 동등한 위험 기반 예방 통제의 개발 및 적용 교육을 성공적으로 완료했거나, 그렇지 않은 경우 식품 안전 시스템을 개발하고 적용하기 위한 직무 경험을 통해 자격을 갖춘 자격을 갖춘 사람을 의미한다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_pcqi_02.jpg" alt="PCQI의 책임">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">PCQI의 책임</h3>
                                <p class="con_txt">
                                    신청서와 함께 제출해야 할 증빙서류는 아래와 같습니다.
                                </p>
                                <ul class="list_st">
                                    <li><span class="number">1. </span>식품안전계획의 작성</li>
                                    <li><span class="number">2. </span>예방조치의 유효성 확인</li>
                                    <li><span class="number">3. </span>기록검토</li>
                                    <li><span class="number">4. </span>식품안전계획의 재분석</li>
                                    <li><span class="number">5. </span>기타 식품에 적합한 활동을 감독 또는 수행</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 4-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_pcqi_03.jpg" alt="PCQI에 대한 교육 여건을 갖추어 식품안전 생산에 관여할 실무자">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">PCQI에 대한 교육 여건을 갖추어 식품안전 생산에 관여할 실무자</h3>
                                <div>
                                    <ul class="list_st">
                                        <li><span class="bullet"></span>식품 안전 담당 부사장</li>
                                        <li><span class="bullet"></span>유지보수 관리자</li>
                                        <li><span class="bullet"></span>생산 감독 책임자 및 관리자</li>
                                        <li><span class="bullet"></span>위생 감독자</li>
                                        <li><span class="bullet"></span>품질 보증 책임자 및 관리자</li>
                                        <li><span class="bullet"></span>안전 관리자</li>
                                        <li><span class="bullet"></span>교육 감독자</li>
                                        <li><span class="bullet"></span>기술 책임자</li>
                                        <li><span class="bullet"></span>포장 감독자 및 관리자</li>
                                        <li><span class="bullet"></span>법규 및 규제 담당자</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <li><!-- content 4-4 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_pcqi_04.jpg" alt="PCQI 교육 내용">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">PCQI 교육 내용</h3>
                                <ul class="list_st">
                                    <li><span class="bullet"></span>FSMA 대응을 위한 예방관리 개념 교육</li>
                                    <li><span class="bullet"></span>식품 안전 계획 개요</li>
                                    <li><span class="bullet"></span>GMP와 기타 선행요건 프로그램 운영</li>
                                    <li><span class="bullet"></span>생물학적 식품안전 위해요소</li>
                                    <li><span class="bullet"></span>화학적, 물리적, 경제적 측면에서의 식품안전 위해요소</li>
                                    <li><span class="bullet"></span>식품안전 계획의 개발을 위한 사전 단계</li>
                                    <li><span class="bullet"></span>식품안전 계획의 준비를 위한 지원 (자료)</li>
                                    <li><span class="bullet"></span>위해요소 분석과 예방관리점의 결정-개요</li>
                                    <li><span class="bullet"></span>위해요소 분석과 예방관리점의 결정</li>
                                    <li><span class="bullet"></span>예방관리</li>
                                    <li><span class="bullet"></span>식품의 알러지원 예방관리</li>
                                    <li><span class="bullet"></span>위생 예방관리</li>
                                    <li><span class="bullet"></span>공급망 예방관리</li>
                                    <li><span class="bullet"></span>검증 및 유효성 확인절차</li>
                                    <li><span class="bullet"></span>기록의 보관 및 관리</li>
                                    <li><span class="bullet"></span>회수계획</li>
                                    <li><span class="bullet"></span>법규개요 (cGMP, 위험성분석, 위험성 기반의 예방관리)</li>
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

        </article><!----// 컨텐츠 04 PCQI 컨텐츠 종료 //------->
             
    </div><!--+++ / 20.05.07 탭컨텐츠 영역 / +++-->
</div> <!--------// div class="content_wrap"  종료 //------------------>





<?php
include_once(G5_THEME_PATH.'/tail.php');
?>