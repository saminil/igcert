<?php
	include_once('./_common.php');
$g5['title'] = 'Part 1';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    <!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 시작 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">ISO 9001</a></li>
			<li><a href="javascript:;">ISO 14001</a></li>
			<li class="on"><a href="javascript:;">ISO 13485</a></li>
			<li><a href="javascript:;">ISO 45001</a></li>
		</ul>
	</div><!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 종료  +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
    
    
    <!--+++ 20.05.01 탭컨텐츠 영역 시작 +++-->
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block;">
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 9001:2015</h1>
                <h2 class="tit_cer fc_pointer">품질경영시스템(QMS) | 심사원 인증</h2>
                <p class="outline">
                    IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 와의 협력을 바탕으로 ISO 9001 품질경영시스템 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 1-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso9001_01.jpg" alt="ISO 9001:2015 인증 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 9001:2015 개요</h3>
                                <p style="text-align:justify;">
                                    ISO 9001은 품질경영시스템 (QMS)를 위한 국제적으로 인정된 규격입니다. 이는 전 세계적으로 가장 많이 사용되는 규격이며, 178개 국가 내 고객들에게 1,100만개 이상의 인증서가 발행되고 있습니다.<br><br>
                                    오늘날 많은 기업은 고객의 요구를 단순히 충족시키는 것뿐만 아니라 더욱 향상된 제품 및 서비스를 제공하기를 원하고 있습니다. 또한, 비용 절감을 통해 경쟁력을 유지하기 원합니다. 대기업이든 중소기업이든 품질 및 가격 경쟁력을 개선하기 위한 종합적인 솔루션이 필요하고, ISO 9001은 이러한 기업에게 효과적인 품질경영 프로세스를 제공합니다.<br><br>
                                    소프트웨어 개발은 식품제조나 상담서비스 제공과는 다릅니다. 그러나 ISO 9001은 모든 산업에 적용될 수 있습니다. 제조 회사, 소프트웨어 개발 회사, 거래 조직, 서비스 조직, 경찰서, 프로 축구 팀 및 시의회 등 다양한 조직이 ISO 9001:2015 시스템을 성공적으로 적용하였습니다. 이처럼 ISO 9001의 요구사항은 포괄적이며, 조직의 형태, 규모 또는 제공되는 제품 및 서비스에 관계없이 모든 조직에 적용될 수 있습니다. 그렇기에, 이 표준은 전세계적으로 가장 보편적으로 사용되고 있는 품질 경영 표준입니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 1-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO 9001 심사원 인증 요구사항</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso9001_02.jpg" alt="ISO 9001 심사원 인증 요구사항">
                                    </div>
                                </div>
                                <table class="type02">
                                    <thead style="text-align:center">
                                        <tr style="border-bottom:1px solid #fff">
                                            <th scope="cols" width="10%" style="border-right:1px solid #fff">
                                                <p>&nbsp;</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>심사원</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>선임심사원</p>
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
                                                <p>10년 이상 (해당 규격 관련 품질 또는 환경 분야 5년 이상의 경력 포함)</p>
                                            </td>
                                            <td>
                                                <p>3년 이상 (해당 규격 관련 품질 또는 환경 분야 1년 이상의 경력 포함)</p>
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
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 20 M/D 이상의 심사 이력</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 35 MD 이상의 심사 이력(그 중 15 M/D 이상은 선임심사원으로서 심사 이력)</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내 선임심사원으로서 15 M/D 이상의  심사 이력(공인된 개인 인증 기관으로부터 선임 심사원 자격 취득 후의 이력만 수용 가능)</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내 5회 시상 + 최소 15 M/D 이상의  심사 이력</p>
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
                                <img src="./images/audit_iso9001_03.jpg" alt="심사원인증 ISO 9001 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 9001 심사원 인증 절차</h3>
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

        </article><!----// 컨텐츠 01 ISO 9001 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 02 ISO 14001 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 14001:2015</h1>
                <h2 class="tit_cer fc_pointer">환경경영시스템(EMS) | 심사원 인증</h2>
                <p class="outline">
                    IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 와의 협력을 바탕으로 ISO 14001 환경경영시스템 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 2-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso27716_01.jpg" alt="ISO 14001:2015 인증 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 14001:2015 개요</h3>
                                <p style="text-align:justify;">
                                    ISO 14001:2015는 환경경영시스템(EMS)를 위한 국제 규격으로 환경경영시스템 구성 및 유지를 위한 요구사항을 명시한 주요 경영시스템 규격입니다. 한국 내 많은 기업들이 조직의 환경경영 위해 인증을 받고 있으며, 전 세계적으로는 25만개 이상의 인증서가 발행되고 있습니다.<br><br>
                                    ISO 14001은 환경경영시스템에 대한 원칙, 시스템 및 지원 기술에 관한 일반 가이드라인과 함께 환경경영시스템 수립, 시행, 유지 및 개선과 같은 이슈들을 다룹니다. 이는 고객사의 환경측면을 통제하고, 환경영향을 감소시키며, 법규 준수를 보장합니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 2-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO 14001 심사원 인증 요구사항</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso9001_04.jpg" alt="ISO 14001 심사원 인증 요구사항">
                                    </div>
                                </div>
                                <table class="type02">
                                    <thead style="text-align:center">
                                        <tr style="border-bottom:1px solid #fff">
                                            <th scope="cols" width="10%" style="border-right:1px solid #fff">
                                                <p>&nbsp;</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>심사원</p>
                                            </th>
                                            <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                <p>선임심사원</p>
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
                                                <p>10년 이상 (해당 규격 관련 품질 또는 환경 분야 5년 이상의 경력 포함)</p>
                                            </td>
                                            <td>
                                                <p>3년 이상 (해당 규격 관련 품질 또는 환경 분야 1년 이상의 경력 포함)</p>
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
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 20 M/D 이상의 심사 이력</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내에 심사원 또는 선임심사원으로서 35 MD 이상의 심사 이력(그 중 15 M/D 이상은 선임심사원으로서 심사 이력)</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내 선임심사원으로서 15 M/D 이상의  심사 이력(공인된 개인 인증 기관으로부터 선임 심사원 자격 취득 후의 이력만 수용 가능)</p>
                                            </td>
                                            <td>
                                                <p>최근 3년 이내 5회 시상 + 최소 15 M/D 이상의  심사 이력</p>
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
                                <img src="./images/audit_iso9001_05.jpg" alt="ISO 14001 심사원 인증 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 14001 심사원 인증 절차</h3>
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

        </article><!----// 컨텐츠 02 ISO 14001 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 03 ISO 13485 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 13485:2016</h1>
                <h2 class="tit_cer fc_pointer">의료기기 품질경영시스템 (MDQMS) | 심사원 인증</h2>
                <p class="outline">
                    IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 와의 협력을 바탕으로 ISO 13485 의료기기 품질경영시스템 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 3-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso9001_06.jpg" alt="ISO 13485 인증 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 13485:2016 개요</h3>
                                <p style="text-align:justify;">
                                    ISO 13485는 의료기기의 설계 및 개발, 생산, 설치 및 부가서비스를 제공하는 조직의 품질 경영 시스템에 대한 요구사항을 규정한 규격입니다. 또한 이 규격은 의료기기 조직에 멸균, 교정, 판매 등의 서비스를 제공하는 외부 조직에도 적용될 수 있어, 의료기기 및 관련 서비스 제공 조직에 품질 경영 시스템의 기반을 제공합니다.<br><br>
                                    의료기기는 인간의 생명 및 건강에 직접 영향을 끼치기 때문에 다른 어떤 제품보다도 높은 수준의 안정성에 대한 보장이 필요합니다. 그래서 의료기기 산업은 국내 규제제도, 국제적인 표준 및 다른 기타 요구사항 등 충족해야 하는 규제가 다양합니다. EU 의료기기 지침의 요구사항 충족을 위해서는 품질 시스템을 구축하여야 하며, 캐나다 등 일부 국가에서는 제품 판매를 위해 ISO 13485 인증을 요구하고 있습니다.<br><br>
                                    의료기기 제조사는 ISO 13485 시스템인증을 통해 조직의 시스템이 품질경영시스템에 대한 포괄적인 요구사항 및 의료기기에 대한 특별한 요구사항에 부합함을 입증할 수 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO 13485 심사원 인증 요구사항</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_iso9001_07.jpg" alt="ISO 13485 심사원 인증 요구사항">
                                    </div>
                                </div>
                                <div class="con_txt">
                                    <table class="type02">
                                        <thead style="text-align:center">
                                            <tr style="border-bottom:1px solid #fff">
                                                <th scope="cols" width="10%" style="border-right:1px solid #fff">
                                                    <p>&nbsp;</p>
                                                </th>
                                                <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                    <p>심사원</p>
                                                </th>
                                                <th scope="cols" width="18%" style="border-right:1px solid #fff">
                                                    <p>선임심사원</p>
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
                                                    <p>10년 이상 (해당 규격 관련 품질 또는 환경 분야 5년 이상의 경력 포함)</p>
                                                </td>
                                                <td>
                                                    <p>3년 이상 (해당 규격 관련 품질 또는 환경 분야 1년 이상의 경력 포함)</p>
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
                                                    <p>최근 3년 이내에 심사원 또는 선임심사원으로서 20 M/D 이상의 심사 이력</p>
                                                </td>
                                                <td>
                                                    <p>최근 3년 이내에 심사원 또는 선임심사원으로서 35 MD 이상의 심사 이력(그 중 15 M/D 이상은 선임심사원으로서 심사 이력)</p>
                                                </td>
                                                <td>
                                                    <p>최근 3년 이내 선임심사원으로서 15 M/D 이상의  심사 이력(공인된 개인 인증 기관으로부터 선임 심사원 자격 취득 후의 이력만 수용 가능)</p>
                                                </td>
                                                <td>
                                                    <p>최근 3년 이내 5회 시상 + 최소 15 M/D 이상의  심사 이력</p>
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
                                </div>
                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; ISO 13485:2016 심사원 요구사항
                                    </span>
                                    <div class="con_txt">
                                        <ul class="list_st">
                                            <li><span class="bullet"></span>학력 : 대학교(4년제) 졸업 이상</li>
                                            <li><span class="bullet"></span>전공 : 생물학, 미생물학, 화학, 생화학, 컴퓨터 및 소프트웨어 기술, 전기, 전자, 기계, 생물 공학, 인간생리학, 약학, 물리학</li>
                                            <li><span class="bullet"></span>또는 경력 : 의료기기, 의료 연구 분야에서 4년 이상 정규직으로 일한 사람</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="con_txt_3">
                                    <span class="point_blk">
                                        <span class="bullet"></span>&#10020; 특별 요구사항 및 기술적 역량
                                    </span>
                                    <div class="con_txt_2">
                                        <ul class="list_st">
                                            <li>
                                                <span class="number">1. </span>의료기기에 대한 기본 지식과 다음을 포함한 관련 생산활동의 이해
                                                <ul class="list_st">
                                                    <li><span class="bullet"></span>사용목적</li>
                                                    <li><span class="bullet"></span>위험분석을 포함한 의료기기의 분류</li>
                                                    <li><span class="bullet"></span>법적 규제 프레임 워크와 인증기관의 역할</li>
                                                    <li><span class="bullet"></span>의료기기 위험평가(ISO 14971)</li>
                                                    <li><span class="bullet"></span>의료기기 평가 관련 제품 규격</li>
                                                    <li><span class="bullet"></span>인증기관의 ISO 13485 인증</li>
                                                    <li><span class="bullet"></span>의료기기 사업/기술에 대한 지식</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="con_txt_2">
                                        <ul class="list_st">
                                            <li>
                                                <span class="number">2. </span>통계분석
                                                <ul class="list_st">
                                                    <li><span class="bullet"></span>신뢰성, 표준 편차 등을 고려한 샘플링 및 트렌드 분석에 따른 확률과 통계에 대한 기본 지식</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="con_txt_2">
                                        <ul class="list_st">
                                            <li>
                                                <span class="number">3. </span>다음사항에 대한 지식
                                                <ul class="list_st">
                                                    <li><span class="bullet"></span>멸균기술 및 검증 기술</li>
                                                    <li><span class="bullet"></span>미생물학 및 BIO-Burden 모니터링</li>
                                                    <li><span class="bullet"></span>생체 적합성 및 검증</li>
                                                    <li><span class="bullet"></span>클린룸 운영</li>
                                                    <li><span class="bullet"></span>환경 모니터링 및 제어</li>
                                                    <li><span class="bullet"></span>포장 기술</li>
                                                    <li><span class="bullet"></span>안정성 시험</li>
                                                    <li><span class="bullet"></span>위험 관리 기반</li>
                                                    <li><span class="bullet"></span>세척 및 소독</li>
                                                    <li><span class="bullet"></span>의료기기의 생물학적 평가</li>
                                                    <li><span class="bullet"></span>의료기기의 임상 평가</li>
                                                    <li><span class="bullet"></span>의료기기의 물리적, 화학적 평가</li>
                                                    <li><span class="bullet"></span>공정 검증 관행에 대한 지식</li>
                                                    <li><span class="bullet"></span>소프트웨어 검증 기술</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 3-3 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_iso9001_08.jpg" alt="ISO 13485 심사원 인증 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 13485 심사원 인증 절차</h3>
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

        </article><!----// 컨텐츠 03 ISO 13485 컨텐츠 종료 //------->
        
        
        <!----// 컨텐츠 04 OHSAS 18001 OR ISO 45001 컨텐츠 시작 //------->
        <article>
            <section class="business_type5" class="area">
                <h1 class="tit_num">ISO 45001:2018</h1>
                <h2 class="tit_cer fc_pointer">안전보건 경영시스템(OHSMS) | 심사원 인증</h2>
                <p class="outline">
                    IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 와의 협력을 바탕으로 ISO 45001 안전보건 경영시스템 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
                </p>
                
                <ul class="content">
                    <li><!-- content 4-1 -->
                        <dl>
                            <dt class="img_area">
                                <img src="./images/audit_ohsas18001_03.jpg" alt="ISO 45001:2018 인증 개요">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 45001:2018 개요</h3>
                                <p style="text-align:justify;">
                                    ISO 45001은 안전보건경영시스템으로, 기존의 OHSAS 18001:2007 규격이 2018년 ISO 45001로 대체되었습니다. 이는 ISO 9001 및 14001 관리 시스템과 호환되는 산업 보건 및 안전 관리 시스템을 통해 보건 및 안전 관리 책임을 관리하기 위한 프레임워크를 제공합니다.<br><br>
                                    이 표준은 국제적 사용을 위해 개발되었으며 조직이 보건 및 안전 위험을 제어하고 성능을 향상시킬 수 있도록 합니다.<br><br>
                                    ISO 45001은 127개국 이상의 9만개 이상 조직에게 적합합니다. 만약에 귀사의 조직이 책임이 있는 사람들의 안전관리의 '모범 사례'를 보여야 한다면 귀사에 적합합니다. IGC는 관공서, 제조업, 서비스업, 식품회사, 프랜차이즈점을 포함한 다양한 분야의 다양한 조직에게 인증을 부여하고 있습니다.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    
                    <li><!-- content 4-2 -->
                        <dl>
                            <dt></dt>
                            <dd class="txt_area" style="width:90%;margin:0 auto">
                                <h3 class="con_tit" style="text-align:center">ISO 45001 심사원 인증 요구사항</h3>
                                <div style="width:100%;margin: 0 auto 50px">
                                    <div style="text-align:center">
                                        <img src="./images/audit_ohsas18001_01.jpg" alt="ISO 45001 심사원 인증 요구사항">
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
                                <img src="./images/audit_ohsas18001_02.jpg" alt="ISO 45001 심사원 인증 절차">
                            </dt>
                            <dd class="txt_area">
                                <h3 class="con_tit">ISO 45001 심사원 인증 절차</h3>
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

        </article><!----// 컨텐츠 04 OHSAS 18001 OR ISO 45001 컨텐츠 종료 //------->


    </div><!--+++ / 20.05.07 탭컨텐츠 영역 / +++-->
</div><!--------// div class="content_wrap"  종료 //------------------>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>