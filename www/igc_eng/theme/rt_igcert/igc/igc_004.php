<?php
include_once('./_common.php');
$g5['title'] = 'CI & Mark';
include_once(G5_THEME_PATH.'/head.php');
?>
   
    
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


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
        margin: 0 0 50px;
    }
    .page_title{margin:0 auto 60px;}
    .page_title h2>img{ /*로고 이미지*/
        width:16%; 
        margin:0 42%; 
        display:block;
    } 
    /* ------------ 컨텐츠 ----------- */
    .vision_type1 ul { /* 각 영역 박스*/
        margin:0 auto 20px; 
        padding:30px 3%;
        border:1px solid #ddd; 
        overflow:hidden;
        text-align:justify;
    }
     .ci_box .cibox_01, .ci_box1 .cibox1, .vision_type1 .mark_tt {  /* 1) ~ 3) title, 인증마크 사용시 주의사항 타이틀*/
        font-weight:600;
        color:#102f45;
        font-size: 1.3rem;
        width:100%;
        margin-bottom:20px;
    }
    .vision_type1 span.stitle { /* 1번 CI 텍스트 */
        display:block; 
        width:100%; 
        text-align:justify; 
        margin:5px auto 20px; 
        font-size:1.05rem; 
        font-weight:400; 
    }
    .vision_type1 .img_div{ /* 왼쪽 로고 */
        margin:0 4% 0 14%; 
        padding:30px;
        width:32%;
        float:left;
    }
    .vision_type1 .img_div_2{ /* 오른쪽 로고 */
        margin:2.5% 14% 0 4%; 
        padding:30px;
        width:32%;
        float:left;
    }
    
    /* -- ci 형태규정 -- */
    .ci_box .cibox_02 { /* A ~ C 박스 */
        width:auto;
        height:100%;
        margin-bottom:40px;
    }
    .ci_box .cibox_02 strong{ /* A ~ C 타이틀 */
        font-weight:500;
        color:#3296dd;
        font-size:1.05rem;
        display:block;
        margin-bottom:5px;
    }
    .download_btn{ /* 다운로드 버튼 */
        display: block;
        background: #fff;
        border: 1px solid #999;
        font-weight: 500;
        color: #333 !important;
        font-size: 0.95rem;
        height: 46px;
        line-height: 44px;
        width: 450px;
        text-align: center;
        margin: 40px auto 20px;
        transition: all 0.2s;
    }
    .download_btn .material-icons{
        vertical-align: middle;
        font-size: 1.25rem;
        color: #3296dd;
        margin-right:2px;
    }
    .download_btn:hover{
        background:#f9f9f9;
        border:1px solid #f9f9f9;
    }

    /* -- ci 색상규정 --*/
    .ci_box1{padding-bottom:10px;} /* 색상규정 박스 */
    .cibox2>div{ /* 색상규정 컬러박스 */
        width:32%;
        height:90px;
        float:left;
        background-color:#1428a0;
        padding:14px 2%;
        font-size:0.85rem;
        color:#ffffff;
        margin-right:2%;
    }
    .cibox2>div:last-child{margin-right:0%;}
    .cibox2 .color01{background-color:#1428a0;}  /* 1번째 컬러 */
    .cibox2 .color02{background-color:#0265ac;}  /* 2번째 컬러 */
    .cibox2 .color03{background-color:#034ea2;}  /* 3번째 컬러 */
    
    /* -- 인증마크 사용시 주의사항 --*/
    .mark_box{line-height:2;}
    
    /* -- 인증마크 다운로드 리스트 -- */
    .vision_type1 .downloadlist_tt, .vision_type1 .downloadlist_txt{
        display:block; 
        text-align:center;
        color:#3296dd;
    }
    .vision_type1 .downloadlist_tt{font-size:1.3rem;font-weight:500;}
    .vision_type1 ul.Logo_mark{padding:0;} /* 다운로드 리스트 박스*/
	.vision_type1 ul li {
        float:left; 
        display:inline-block; 
        padding:30px 0; 
        padding-bottom:15px; 
        width:20%; 
        height:200px; 
        text-align:center; 
        margin:20px 2.5%; 
        border-bottom:1px solid #ddd; 
    }
	.vision_type1 ul li p { /* 인증마크 번호 */
        display:block; 
        color:#1b7958; 
        margin-top:-10px;
    }   
    .bg1, .bg2, .bg3, .bg4, .bg5, .bg6, .bg7, .bg8, .bg9, .bg10, .bg11, .bg12, .bg13, .bg14, .bg15, .bg16 {width:10%;height:auto;background-color:#ffffff;display:block;}
    ul .bg1{background-image:url('images/ISO-9001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg2{background-image:url('images/ISO-14001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg3{background-image:url('images/ISO-13485.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg4{background-image:url('images/OHS-18001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg5{background-image:url('images/ISO-45001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg6{background-image:url('images/ISO-22000.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg7{background-image:url('images/FSSC-22000.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg8{background-image:url('images/ISO-IEC-20000-1.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg9{background-image:url('images/ISO-27001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg10{background-image:url('images/ISO-21001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg11{background-image:url('images/ISO-22301.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg12{background-image:url('images/ISO-22716.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg13{background-image:url('images/ISO-37001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg14{background-image:url('images/ISO-50001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
   /*  ul .bg15{background-image:url('images/ISO-IEC-27001.png');background-size:contain; background-position:center;background-repeat:no-repeat;} */
    ul .bg15{background-image:url('images/ISO-IEC-27701.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    

 
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
    
    
    @media (max-width:1024px) {
        
        .txtBox02{font-size:1.4rem;padding:20px 0;}
        .vision_type1 ul {padding:30px 4%;}  /* 각 영역 박스*/ 
        .vision_type1 h3.title>span, .cibox_01, .cibox1{font-size: 1.3rem;} /* 1) ~ 3) title */
        .vision_type1 span.stitle {font-size: 1rem;}
        .vision_type1 .img_div{margin:20px 10% 10px; padding:0px;width:30%;float:left;}
        .vision_type1 .img_div_2{margin:40px 10% 10px; padding:0px;width:30%;float:left;}
        .download_btn{font-size: 0.9rem; width:440px; height: 42px; line-height: 40px;} /* 다운로드 버튼 */
        .cibox2>div{width:100%;height:auto;float:none;padding:15px 25px;color:#ffffff;margin-right:0%;margin-bottom:15px;}
        
        /*인증마크 다운로드 리스트*/
        .vision_type1 ul li {margin:20px 2.5%;}
        .vision_type1 ul li p {font-size:0.9rem}  
        
	}
    
    
	@media screen and (max-width: 768px){

        .txtBox02{display:none;} /*탭메뉴와 중복되는 타이틀로 사이트 전체 반응형 규격에 맞게 768px 이하~ 부터 안보이게 설정 210825 전산팀 yr*/
        .page_title h2>img{width:20%;margin:0 40%}
        .vision_type1 .img_div{margin:30px 7% 15px; padding:0px;width:36%;float:left;}
        .vision_type1 .img_div_2{margin:50px 7% 15px; padding:0px;width:36%;float:left;}
        
        .partner_type2 .con_box ul li { float:left; width:100%; list-style:none; margin:10px 0; } /* 사업영역 */
        
        /*인증마크 다운로드 리스트*/
        .Logo_mark {display:inline-block;margin:0 auto;}
        .vision_type1 ul li {display:inline-block; padding:50px 0; padding-bottom:15px; width:29%; height:60px;margin:50px 2% 20px;}
        .vision_type1 ul li p {font-size:0.9rem; margin-top:-80px;}
        
	} 
    
    
    @media (max-width: 640px) {
        
        .content_wrap { font-size: 0.85rem }/* 전체 폰트 사이즈 조정 */
        .vision_type1 span.stitle {font-size: 0.85rem;}
        .ci_box .cibox_01, .ci_box1 .cibox1, .vision_type1 .mark_tt {font-size: 1.1rem;}
        .ci_box .cibox_02 strong {font-size: 0.95rem;}
        .download_btn{font-size: 0.85rem; width:280px; height: 42px; line-height: 40px;} /* 다운로드 버튼 */
        .download_btn>span.hidden{display:none;}
        .download_btn .material-icons{1rem;}
        
        /*인증마크 다운로드 리스트*/
        .vision_type1 .downloadlist_tt { font-size: 1.1rem;}
        .vision_type1 ul li p {font-size:0.85rem;}
        .partner_type2 .con_arrow p { font-size: 1.4rem }/* 사업영역 타이틀 폰트 사이즈 조정 */
    }
    
    
     @media (min-width: 360px) and (max-device-width: 414px) { 
        
        .vision_type1 .img_div, .vision_type1 .img_div_2{width:70%; margin:40px 15%;}
        .vision_type1 ul li { width:42%; height:60px;margin:50px 4% 20px; }
         
        .partner_type2 .con_box ul li { width: 100% }/* 사업영역 리스트 가로비율 100%, 컨텐츠 세로정렬 */
         
    }
    
    
</style>

<div class="content_wrap">
	<section class="page_title">
		<div class="txtBox02">01. IGC Logo (CI)</div>
		 <h2><img src="images/ICG_LOGO.png" alt="(주)아이지씨인증원 로고"></h2>
	</section>
    
	<section class="vision_type1">
        <ul>
            <div class="ci_box">
                <div class="cibox_01">1) Corporate Identity(CI)</div>
                <div class="cibox_02">
                    <span class="stitle">
                      The design of Wordmark emphasizes flexibility and simplicity, and by honestly processing the circles symbolizing the universe and the world stage, we wanted to present an innovative yet balanced image. In addition, the I, G, and C characters express the will to breathe with the world and contribute to human society by communicating the inside and outside through the divisions that are orderly located in the circle. The English logo design expresses the customer-oriented will integrating technicalism and humanism, and the image of a global company with a modern sense.
                    </span>
                    <div class="img_div">
                       <img src="./images/IGC_LOGO_02.png" alt="IGC 로고 이미지">
                    </div>
                    <div class="img_div_2"> <!--로고이미지추가 210630 yr-->
                        <img src="./images/IGC_LOGO_3.PNG" alt="IGC 로고 이미지2">
                    </div>
                </div>
            </div>
        </ul>
        <ul>		
            <div class="ci_box">
                <div class="cibox_01">2) Form</div>
                <div class="cibox_02">
                   <strong>A) Basic wordmark</strong>
                    The basic word mark is a form that combines orb and text and has a formative feature in which the text part is inherent in the background.
                    Therefore, a plan for the application space must be preceded so that optimal application conditions can be maintained during application.
                    <br><br>
                    <h2>
                      <img src="./images/img_mark_base.jpg" alt="IGC 기본형 워드마크">
                   </h2>
                </div>  <!-------class="cibox_02" End -------->
                <div style="clear:both;"></div>
                <div class="cibox_02">
                   <strong>B) Utilization Watermark</strong>
                   It is a wordmark used in video, internet and outdoor media, and its use in print media is prohibited.<br>
                   The ellipse and the character part are separated, making it easy to express in three dimensions and minimizing the restrictions of the background space.<br> <br>  
                    <h2>
                      <img src="./images/img_mark_use.jpg" alt="IGC 활용형 워터마크">
                   </h2>
                </div >  <!-------class="cibox_02" End -------->

                <div style="clear:both;"></div>
                <div class="cibox_02">
                   <strong>C)  Logo of IGC Certification Institute</strong>
                   The logo of the IGC certification body is not a certification mark and cannot be used by customers.<br><br>
                    <h2>
                      <img src="./images/img_mark_latest.jpg" alt="IGC 인증원의 로고">
                   </h2>
                </div>  <!-------class="cibox_02" End -------->

                <div>
                    <a class="download_btn" href="/data/file/IGC-LOGO_TheLatestLOGOs.zip" download> <span class="material-icons">file_download</span> IGC <span class="hidden">Certification Agency</span>logo AI (illustration) download</a>
                </div>
            </div>
        </ul>

        <ul>		
            <div class="ci_box1">
                <div class="cibox1">3) Color</div>
                <div class="cibox2">
                    <div class="color01">
                        Process Color<br>
                        C100 M80 Y0 K0<br>
                        All print media and products<br>
                    </div>
                    <div class="color02">
                        Pantone Color<br>
                        Pantone 286C<br>
                        All print media and products<br>
                    </div>   
                    <div class="color03">
                        RGB Color<br>
                        R20 / G40 / B160<br>
                        For screens such as video, website, etc.<br>
                    </div>
                </div>  <!-------class="cibox_02" End -------->
                <div style="clear:both;"></div>
            </div>
        </ul>
	</section>	
    
	<br><br><br>
    
	<section class="vision_type1">
	<div class="txtBox02">02. Quality Certification Mark</div>
	<ul>
	   <div class="mark_box">
	       <p class="mark_tt">&#10024; Certification Mark Precautions for use</p>
           You can use the Certification Mark and Accreditation Mark only when the certificate is valid.<br><br>
           &#10017; Certification marks and Accreditation marks can only be used within the scope that has been certified.<br>
           &#10017; Certification marks and Accreditation marks are never used by IGC certifiers in a manner that gives them the impression that they have certified a product or certified a process.<br>
           &#10017; Certification marks and Accreditation marks are not available other than those provided by IGC.<br>
           &#10017; No misleading expression can be made regarding certification.<br>
           &#10017; If the certification is suspended or revoked, no advertisement with a mark referring to the certification shall be made.<br>
           &#10017; If the certification terms are reduced, all advertisements must be modified.<br>
           &#10017; Certification marks and Accreditation marks may not be used in such a way that the IGC certification system is likely to be discredited or subject to public distrust.<br>
           &#10017; Accreditation marks and certification marks should always be marked together. <br>          
        </div>
   </ul>        
   <br><br>
 
    <p class="downloadlist_tt">[ Certification mark download list ] </p>
        <p class="downloadlist_txt">You can download the file by clicking the corresponding certification mark below.<br></p><br>
    <ul class="Logo_mark">
            <a href="/data/file/01_ISO 9001.zip">
			<li class="bg1">
				<p>ISO 9001 Mark(01)</p>
			</li>
			</a>
			
			<a href="/data/file/02_ISO 14001.zip">
			<li class="bg2">
				<p>ISO 14001 Mark(02)</p>
			</li>
			</a>
			
			<a href="/data/file/03_ISO 13485.zip">
			<li class="bg3">
				<p>ISO 13485 Mark(03)</p>
            </li>
			</a>
			<a href="/data/file/04_OHS 18001.zip">
			<li class="bg4">
				<p>OHS 18001 Mark(04)</p>
            </li>
			</a>	
			<a href="/data/file/05_ISO 45001.zip">
			<li class="bg5">
				<p> ISO 45001 Mark(05)</p>
            </li>
			</a>
			<a href="/data/file/06_ISO 22000.zip">
			<li class="bg6">
				<p>ISO 22000 Mark(06)</p>
            </li>
			</a>
			<a href="/data/file/07_FSSC 22000.zip">
			<li class="bg7">
				<p>FSSC 22000 Mark(07)</p>
            </li>
			</a>			
			<a href="/data/file/08_ISO-IEC 20000-1.zip">
			<li class="bg8">
				<p>ISO/IEC 20000-1 Mark(08)</p>
            </li>
            </a>
<!--
			<a href="/data/file/09_ISO 27001.zip">
            <li class="bg9">
				<p>ISO 27001 마크</p>
            </li> 
			</a>
-->
			<a href="/data/file/09_ISO 21001.zip">
			<li class="bg10">
				<p>ISO 21001 Mark(09)</p>
            </li>
			</a>
			<a href="/data/file/10_ISO 22301.zip">
			<li class="bg11">
				<p> ISO 22301 Mark(10)</p>
            </li>
			</a>
			<a href="/data/file/11_ISO 22716.zip">
			<li class="bg12">
				<p>ISO 22716 Mark(11)</p>
            </li>
			</a>
			<a href="/data/file/12_ISO 37001.zip">
			<li class="bg13">
				<p>ISO 37001 Mark(12)</p>
			</li>
            </a>
			<a href="/data/file/13_ISO 50001.zip">
			<li class="bg14">
				<p>ISO 50001 Mark(13)</p>
			</li>
            </a>
			<a href="/data/file/14_ISO-IEC 27001.zip">
			<li class="bg15">
				<p> ISO/IEC 27001 Mark(14)</p>
			</li>
            </a>
            <a href="/data/file/15_ISO-IEC 27701.zip">
			<li class="bg15">
				<p> ISO-IEC 27701 Mark(15)</p>
			</li>
            </a>
		</ul>
   </section>
    <br><br>
    
    <!----(주)아이지씨인증원 사업영역 시작-------->
    <section class="partner_type2">
        <h2 class="con_arrow">
            <p>Related Services from IGC</p>
        </h2>
        <div class="con_box">
          <ul>
            <li><p><em><strong>01</strong></em><span>System Certification</span></p></li>
            <li><p><em><strong>02</strong></em><span>Testing</span></p></li>
            <li><p><em><strong>03</strong></em><span>Professional Manpower Training Course</span></p></li>
            <li><p><em><strong>04</strong></em><span>Product Certification</span></p></li>
            <li><p><em><strong>05</strong></em><span>Auditor Certification</span></p></li>
            <li><p><em><strong>06</strong></em><span>Designation of Training Institute</span></p></li>
          </ul>
        </div>
    </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------>   
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>