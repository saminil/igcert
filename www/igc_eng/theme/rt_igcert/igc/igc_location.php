<?php
include_once('./_common.php');
$g5['title'] = 'Location';
include_once(G5_THEME_PATH.'/head.php');

	/* 이 페이지는 jquery 로 작동됩니다.	*/
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">


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
    /* ------------ 컨텐츠 ----------- */
    .way_to_gic{
        width:100%;
        height:auto;
        padding:45px 6% 35px;
        background:#f9f9f9;
        border-radius: 5px;
        margin-bottom:50px;
    }
    .way_to_gic li{
        margin-bottom:8px;
        color:#222;
        font-weight:400;
    }
    .way_to_gic li p{padding:3px 0;}
    .way_to_gic_tt{
        display:inline-block;
        width:26%;
        font-weight:500;
        color:#006699;
        margin-bottom:5px;
        vertical-align: top;
    }
    .way_to_gic_txt_subway{
        display:inline-block;
        width:72%;
        margin-left:-2px;
    }
    /* 위치안내 */
    .loca_img{ /*이미지 영역*/
        margin:50px 0 ;
        padding:50px 0 ;
        border-top:1px solid #ddd;
        border-bottom:1px solid #ddd;
    }
    .sub01_03 .title{ /* 컨텐츠 타이틀 */
        position: relative;
        display:inline-block;
        font-weight:500;
        font-size:1.5rem; 
        margin-bottom:15px;
    }
    .sub01_03 .title:before{
        content: "";
        display: block;
        width: 30px;
        height: 2px;
        background: #3296dd;
        position: absolute;
        left: 0;
        top:-8px;
    }
    .sub01_03 .google_map{ /* 구글지도 */
        margin:50px 0;
        padding-top:50px;
        border-top:1px solid #ddd;
    }
    #map {
		height: 500px;
		width: 100%;
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
    
    @media screen and (max-width: 1024px) {
    
        .txtBox02{font-size:1.4rem;padding:20px 0;}
        .way_to_gic_tt{ display:inline-block;width:100%; }
        .way_to_gic_txt, .way_to_gic_txt_subway{ display:inline-block;width:98%;margin-left:2%; } /* 텍스트 좌우 넓이, 여백 조정 */
        .sub01_03 .title{ font-size:1.3rem; } /* 타이틀 폰트 사이즈 축소 */
	}
    
    
    @media only screen and (max-device-width: 768px) and (-webkit-min-device-pixel-ratio: 1){
        
        .txtBox02{display:none;}
        .partner_type2 .con_box ul li { float:left; width:100%; list-style:none; margin:10px 0; } /* 사업영역 */
        
	}

    
    @media (max-width: 640px) {
        
        .content_wrap { font-size: 0.85rem }/* 전체 폰트 사이즈 조정 */
        .sub01_03 .title{ font-size:1.1rem; } /* 타이틀 폰트 사이즈 축소 */
        .sub01_03 .title:before { width:20px; } /* 타이틀 위 선 넓이 축소 */
        .way_to_gic_tt {font-size:0.95rem;} /* 위치안내 정보 타이틀 폰트 사이즈 축소*/
        
        .partner_type2 .con_arrow p { font-size: 1.4rem }/* 사업영역 타이틀 폰트 사이즈 조정 */
        
    }
    
    
    @media all and (min-width:360px) and (max-device-width : 414px) {

    }
    
    /* ============= 상세페이지 반응형 종료 ============= */
    
</style>


<div class="content_wrap">

    <section class="page_title">
        <div class="txtBox02">IGC / Map</div>
    </section>

    <div class="sub01_03">
        <ul class="way_to_gic">
            <li>
                <span class="way_to_gic_tt">&bull; Address</span><span class="way_to_gic_txt">#501, 638, Seobusaet-gil, Geumcheon-gu, Seoul, Republic of Korea</span>
            </li>
             <li>
                <span class="way_to_gic_tt">&bull; Tel</span><span class="way_to_gic_txt">+82 2 6749 0701</span>
            </li>
            <li>
                <span class="way_to_gic_tt">&bull; Car</span><span class="way_to_gic_txt">Parking Available (1 Hour Free)</span> 
            </li>
             <li>
                <span class="way_to_gic_tt">&bull; Public Transportation</span>   
                <span class="way_to_gic_txt way_to_gic_txt_subway">
                   Subway Line 1: Gasan Digital Complex Station Exit 7 (12-minutes by walk)<br>
                   Subway Line 7: Gasan Digital Complex Station Exit 6 (12 minutes by walk)
                </span>
            </li>
        </ul>


        <div class="google_map">
            <span class="title">https://www.google.com/maps/place</span>  

            <div id="map"></div>
            <script>
                var map;
                function initMap() {

                var namsan = {lat: 37.4809601, lng: 126.8768985};

                var map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 17, center: namsan});

                var marker = new google.maps.Marker({position: namsan, map: map});
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?callback=initMap&language=en&region=KR" async defer></script> 
        </div>

    </div>


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