<?php
	include_once('./_common.php');
$g5['title'] = 'Social Accountability';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

?>



<style>
    
    /* ============= 상세페이지 공통 CSS 영역 ============= */
    
	.fc_pointer { color: #1F88E5 }/* 상세페이지 포인트 컬러 */
    .point_blk { display: block;color: #111;font-weight: 500;margin: 0 0 10px }/* 상세페이지 폰트스타일 1 */
	.content_wrap { width: 100%;max-width: 1200px;margin: 0 auto;font-size: 1rem;font-weight: 400;line-height: 1.6 }/* 컨텐츠 중간 그리드 지정 */
    .content_wrap .business_type5 { margin: 0 0 100px }
    
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
        
        .content li .img_area { width: 90%;margin: 50px auto 0 }/* 이미지 크기/여백 조정 */
        
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */
        
    }

    
    /* ============= 상세페이지 반응형 종료 ============= */

</style>


<div class="content_wrap">
   
    <section class="business_type5" class="area">
        <h1 class="tit_num"><span>SA 8000</span> Certification</h1>
        <h2 class="tit_cer fc_pointer">Social Accountability</h2>		
		<p class="outline">
            In recent years, there has been a growing worldwide interest in considering ethical and social normative impacts of corporate activities and policies, as well as where products such as developing countries are produced and the working environment. Clients who are interested in these social issues are also increasing.<br><br>
            Non-governmental organizations, investment analysts and other stakeholders, including employees, are increasingly evaluating corporate efforts to ensure a fair and equitable working environment and transparent business practices. This means that companies will be asked more to demonstrate social responsibility.
		</p>

		<ul class="content">
			<li><!-- content 01 -->
				<dl>
					<dt class="img_area">
						<img src="./image/sa8000_01.png">
					</dt>
					<dd class="txt_area">
					    <h3 class="con_tit">The overview of SA 8000 Certification</h3>
					    <p style="text-align:justify">
                            The SA 8000 certification covers all matters including forced and child labor, health and safety in the workplace, Freedom of association &amp; right to collective bargaining, discrimination, disciplinary practices, working hours, remuneration and management systems.<br><br>
                            The SA 8000 not only sets workplace standards worldwide, but also covers existing international agreements, including the International Labor Organization, the Universal Declaration of Human Rights and the United Nations Convention on the Rights of the Child.<br><br>
                            This standard was developed in 1989 by the Social Accountability International (SAI), an organization under the Council on Economic Priorities (CEP), and is considered the world's most recognized independent workplace standard. As a standard for improving the work environment, it can be applied to companies of all sizes, regardless of scope, industry, or location.<br><br>
                            SThe SA8000 is based on the International Labor Organization (ILO)'s Universal Declaration of Human Rights and the United Nations' International Convention on the Rights of Children. This standard includes a wide range of content, including child labor, forced or compulsory labor, health and safety, freedom of association and right to collective bargaining, discrimination, disciplinary practices, management systems such as working hours, remuneration and supply chain monitoring systems, and external communications and other policies.
                        </p>
					</dd>
				</dl>
			</li>
			
			<li><!-- content 02 -->
				<dl>
				    <dt class="img_area">
						<img src="./image/ISO15378-2017_000.jpg" alt="SA 8000 Requirements">
					</dt>
					<dd class="txt_area">
				        <h3 class="con_tit">SA 8000 Requirements</h3>
						<p class="con_txt">
                            The SA 8000 standard is based on the ISO 17021-1 standard, the same as the existing ISO standard, and is composed of an independent form rather than a high level structure.<br><br>
                            The purpose of SA 8000 is to empower and protect all employees of the organization by providing a standard that can be reviewed in accordance with the United Nations Declaration of Human Rights, the ILO and other international labor laws.<br><br>
                            The requirements for the following nine elements of the SA 8000 are key to proper implementation, monitoring and enforcement. The management system for this enables the organization to improve with complete and continuous compliance with SA 8000 and is an indicator of social performance.<br><br>
                            The elements of SA 8000 are as follows :
                        </p>
                        <ul class="list_st">
					        <li><span class="number">1. </span>Child Labor</li>
					        <li><span class="number">2. </span>Forced or Compulsory Labor</li>
					        <li><span class="number">3. </span>Health and Safety</li>
					        <li><span class="number">4. </span>Freedom of Association &amp; Right to Collective Bargaining</li>
					        <li><span class="number">5. </span>Discrimination</li>
					        <li><span class="number">6. </span>Disciplinary Practices</li>
					        <li><span class="number">7. </span>Working Hours</li>
					        <li><span class="number">8. </span>Remuneration</li>
					        <li><span class="number">9. </span>Management System</li>
                        </ul>
					</dd>
				</dl>			
			</li>
			
			<li><!-- content 03 -->
				<dl>
					<dt></dt>
					<dd class="txt_area" style="width:90%;margin:0 auto">
						<h3 class="con_tit" style="text-align:center">SA 8000 Certification Process</h3>
                        <div style="margin: 0 auto 50px">
                            <div>
                                <img src="./image/sa8000_04.png" alt="SA 8000 Certification Process">
                                <span style="display:block;text-align:center;">IGC's SA 8000 certification process is shown above.</span>
                            </div>
                        </div>
                        
                        <p class="con_txt">
                            For SA 8000 certification, the following must be prepared :
                        </p>
                        
                        <ul class="list_st">
                            <li><span class="number">1. </span>Be familiar with the requirements. This includes managing legal requirements and comparing existing practices with the requirements of the SA8000 standard.</li>
                            <li><span class="number">2. </span>After the comparison is done, the difference can be reduced and the requirements of the standard can be implemented.</li>
                            <li><span class="number">3. </span>Enforcement procedures must be created and integrated with the company's existing management systems.</li>
                            <li><span class="number">4. </span>After applying and completing the internal monitoring process, you can begin the certification process.</li>
                        </ul>
					</dd>
				</dl>			
			</li>

    		<li><!-- content 04 -->
				<dl>
					<dt class="img_area">
						<img src="./image/sa8000_02.png" alt="The importance of SA 8000">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">The importance of SA 8000</h3>
						<p class="con_txt">
                            Adoption of the SA 8000 certification takes into account the social impacts of business operating as well as the conditions under which employees, partners and suppliers operate.<br><br>
                            The SA 8000 is universally applicable to any type of organization, regardless of size, geographic location or industry.<br><br>
                            The SA8000 is a voluntary social responsibility compliance standard that demonstrates a company's commitment to a humane work environment and responsible production.<br><br>
                            The benefits of complying with this standard include:
                        </p>
                        <ul class="list_st">
                            <li><span class="number">1. </span>Demonstrate that the employment relationship between enterprises and workers operates fairly and lawfully in accordance with international norms.</li>
                            <li><span class="number">2. </span>Improve supply chain management and performance.</li>
                            <li><span class="number">3. </span>Ensure compliance with global standards and reduce the possibility of non-compliance, disclosure and litigation.</li>
                            <li><span class="number">4. </span>Demonstrate appropriate social responsibility when bidding for overseas contracts or expanding locally to accommodate new businesses.</li>
                        </ul>
					</dd>
				</dl>
			</li>
			
			<li><!-- content 05 -->
				<dl>
					<dt class="img_area">
						<img src="./image/sa8000_03.png" alt="Estimated effectiveness of SA 8000">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit"><span>Estimated effectiveness of SA 8000</span></h3>
						<p class="con_txt">
                            As shown in the figure, SA8000 certification is in high demand in many countries, including China, India, and Italy, and its importance is emerging in developing countries as well.<br><br>
                            Companies in the textile and clothing are getting certifications, and companies in various fields including architecture, food, consumer goods and infrastructure, are also getting certifications.<br><br>
                            Other estimated effectiveness for SA 8000 certification are as follows.
                        </p>
                        <ul class="list_st">
                            <li><span class="number">1. </span>It is possible to prove that the employment relationship between companies and workers operates fairly and lawfully in accordance with international norms.</li>
                            <li><span class="number">2. </span>Possible to respond to domestic and international demands for corporate social responsibility</li>
                            <li><span class="number">3. </span>Demonstrate compliance with social responsibility for suppliers, suppliers, subcontractors, etc.</li>
                            <li><span class="number">4. </span>Systematic access to social issues</li>
                        </ul>
					</dd>
				</dl>
			</li>

			<li><!-- content 05 -->
				<dl>
					<dt class="img_area">
						<img src="./image/ISO_9001_03.jpg" alt="IGC’s competency">
					</dt>
					<dd class="txt_area">
						<h3 class="con_tit">IGC’s competency</h3>
						<p style="text-align:justify">
                            IGC enables you to validate SA 8000, an international standard for corporate maintenance and application, to meet customer expectations and improve your performance.<br><br>
                            Working with our experienced auditors to implement the most globally recognized workplace standards, you will be able to demonstrate social responsibility in contract bidding and organization expansion.<br><br>
                            In addition, obtaining certification through cooperation with IGC can improve performance processes, enhance useful talent, a consistent and appropriate supply chain, and more sustainable customer relationships, and provide a more profitable competitive advantage.
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
                <li><p><em><strong>01</strong></em><span>Quality</span></p></li>
                <li><p><em><strong>02</strong></em><span>Environment</span></p></li>
                <li><p><em><strong>03</strong></em><span>Health and Safety</span></p></li>
                <li><p><em><strong>04</strong></em><span>Medical Devices</span></p></li>
                <li><p><em><strong>05</strong></em><span>Food</span></p></li>
                <li><p><em><strong>06</strong></em><span>Energy</span></p></li>
                <li><p><em><strong>07</strong></em><span>Information Security</span></p></li>
                <li><p><em><strong>08</strong></em><span>Anti-Bribery</span></p></li>
                <li><p><em><strong>09</strong></em><span>Education</span></p></li>
                <li><p><em><strong>10</strong></em><span>Business Continuity</span></p></li>
                <li><p><em><strong>11</strong></em><span>Cosmetics</span></p></li>
                <li><p><em><strong>12</strong></em><span>Customer Satisfaction</span></p></li>
                <li><p><em><strong>13</strong></em><span>Social Accountability</span></p></li>
            </ul>
        </div>
    </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------>
    
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>