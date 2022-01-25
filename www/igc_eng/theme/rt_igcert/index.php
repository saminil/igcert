<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<!----------- 메인비주얼 영역 시작 { ----------->
<div id="main_visual">	
	<div class="slider">

		<div class="roll roll01">
		    <div class="black"></div>
			<h2 style="letter-spacing: -1px;">Institute of <br> Global Certification </h2>
			<hr>
			<p>With IGC, Better Quality and Promising Future!!<br class="mobile_no" /></p>
			<!----a href="javascript:" class="btn_more">더보기</a---->
		</div>
		
		<div class="roll roll02">
			<h2 style="letter-spacing: -1px;">Products &amp; Systems <br> Certification</h2>
			<hr>
			<p>Improving corporate competitiveness<br class="mobile_no" /><br></p>
			<a href="javascript:" class="btn_more">더보기</a>
		</div>

	</div>	
</div>
<!----------- 메인비주얼 영역 종료 } ----------->


<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<!-------메인페이지 로고 하단 클릭했을 때 인증서검색 바로가기/// -------->
<div id="certification_search"></div>
        
	
	<!-- 메인 이벤트 /theme/테마/skin/latest/event/latest.skin.php -->
	<!----?php echo latest('theme/event', 'event', 1, 10); ?---->
	<!-- /메인 이벤트 -->		

<?
$v = @$_GET['view'];
if($v != 'dev'){
?>

<style type="text/css">
    
/* ----------- 인증서 검색 영역 css 시작 ----------- */ 
    
.main_cert .form_wrap{/* 검색 입력폼 & 검색 버튼 영역*/
	width: 90%;	
	max-width: 500px;
	align-items: center;
	margin: 0px auto;
	text-align: center;
}
    
.main_cert .form_wrap input{/* 검색 입력폼 */
	width: 70%;
}
    
.main_cert .form_wrap button{/* 검색 버튼 */
	margin-left: 8px;
	padding:7px 15px;
	border:1px solid #ddd;
	background: #f3f3f3;
    vertical-align: top;
}

.main_cert #cert_rst{/* 검색 결과 전체 영역 */
    position:relative;
    top:0px;
	text-align: left;
    margin-top: 20px;
    font-size: 1.05em;
    margin: 0px auto;
    margin-top: 20px;
    max-width: 800px;
    color: #fff;
    padding: 50px 0;
}

.main_cert #cert_rst p{
	text-align: center;
}

.main_cert #cert_rst b::before{
	content: '-';
	margin-right: 5px;
}
    
.main_cert #cert_rst span{/* 검색 결과값 문단의 내용 */
	display: inline-block;
	margin-left: 10px;
}
      
/* ----------- 인증서 검색 영역 css 종료 ----------- */ 
    
/* ----------- 인증서 검색 영역 반응형 시작 ----------- */
    
@media (max-width: 1280px){
    
    .main_product.main_cert { padding: 50px 0 }
    
}


@media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
    
    .main_cert #cert_rst { padding: 50px 4% }
    
}   
    
@media (min-width: 360px) and (max-device-width: 414px) {
    .main_cert .form_wrap button {
        padding: 7px 10px;
    }
}
    
/* ----------- 인증서 검색 영역 반응형 종료 ----------- */  
    
    
</style>


<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<!----------- 인증서검색 영역 시작 { ----------->
<section class="main_sec main_product main_cert" style=" background-color:#2B71A6">

    <div class="wrap">
     
        <h2 style="color:#fff">IGC CERT SEARCH
            <p style="display:block;font-size:0.5em;color:#aabbcc;text-align:center;margin-top:6px;margin-bottom:30px;">IGC Certificate verification</p>
        </h2>
	  
        <div class="form_wrap">
			<input type="text" name="cert_code" id="cert_code" placeholder="Please, Insert Certificate Number" />
			<button id="cert_btn">SEARCH</button>
		</div>
		
	</div>
	
	<div id="cert_rst" class="wrap"></div>
	
</section>

<?
}
?>

<!----------- 인증서검색 영역 종료 } ----------->


<!----------- 게시판 영역 시작 { ----------->
<section class="main_sec main_bbs">

	<div class="wrap">
		<!-- 일반 최근글 /theme/테마/skin/latest/basic/latest.skin.php -->
        <section><?php echo latest('theme/basic', 'notice_en', 3, 40); ?></section>
        <!--일반 최근글 /theme/테마/skin/latest/basic/latest.skin.php -->
        <section><?php echo latest('theme/basic', 'free_en', 3, 40); ?></section>
        <!--질문과답변 최근글 /theme/테마/skin/latest/qna/latest.skin.php -->
        <section><?php echo latest('theme/qna', 'qa_en', 3, 40); ?></section>
	</div>
	
</section>
<!----------- 게시판 영역 종료 } ----------->


<!----------- 회사소개 영역 시작 { ----------->
<section class="main_sec main_about">
	<div class="bg"></div>
	<div class="wrap container animatedParent animateOnce" data-sequence="500">
	    <!-- 회사소개 이미지 영역 -->
		<div class="pic animated fadeInRightShort" data-id="1">
            <img src="<?php echo G5_THEME_URL ?>/img/main_about_img01.png" alt="2020년6월 IGC인증기관 인정서1" class="main_about_img1" /> 
		    <img src="<?php echo G5_THEME_URL ?>/img/main_about_img02.png" alt="2020년6월 IGC인증기관 인정서2" class="main_about_img2" /> 			
		</div>
		
		<!-- 회사소개 텍스트 영역 -->
		<div class="txt animated fadeInUpShort" data-id="2">
			<div class="animatedParent animateOnce" data-sequence="250">
                <div class="txt_wrap">
                    <p class="con_sub_tit animated fadeInUpShort" data-id="1">
                        IGC is<br class="pc_only" />
                        the best certification institute for Product<br class="pc_only"/>
                        and Management system to help customers<br class="pc_only"/>
                        successful advance into overseas market.
                    </p>
                    <p class="con_sub_tit animated fadeInUpShort" data-id="2">
                        To support this, <br class="pc_only" />
                        we provide the education and training session  <br class="pc_only" />
                        for the expert who supports clients requirements <br class="pc_only" />
                        and conduct test  and inspection process.
                    </p>
                    
                    <!-- 버튼 영역 -->
                    <div class="btn_area animated fadeInUpShort" data-id="3">
                        <a href="<?php echo G5_THEME_URL ?>/sub01/sub01.php">About Us</a>
                        <a href="<?php echo G5_THEME_URL ?>/sub01/sub06.php">Location</a>
                    </div>
                </div>
            </div>
        </div>
		
        <!-- 회사소개 CS - 대표번호 영역 -->
        <div class="cs_top animated fadeInUpShort" data-id="3">
            <div class="main_about_img3">
                <p style="width:60px;height:60px;line-height:60px;text-align:center"><img src="/theme/rt_igcert/image/tel_tab_eng.png" alt="tel 02-6749-0701" style="width:38px;height:auto;padding-bottom:4px"></p>
            </div>
            <div class="cs_num">
                <p>
                    <span class="cs_num_tit">Contact us</span>
                    <span class="cs_num_txt"><img src="img/tel.png" alt="tel 02-6749-0701" class="cs_num_icon">02-6749-0701</span>
                </p>
                <p>
                    <span class="cs_num_tit time">Business hours</span>
                    <span>AM 09:00 ~ PM 06:00</span>
                </p>
            </div>
        </div>
        
        <!-- 회사소개 CS - 부서별 번호 영역 -->
        <div class="cs_bottom animated fadeInUpShort" data-id="4">
            <div class="cs_bot num01">
                <span>CE Electronic Device, PED, <br>Mechanical Products</span>
                <span class="cs_bottom_num"><img src="img/tel_sm.png" alt="tel 02-6749-1161" class="cs_num_icon">02-6749-1161</span>
            </div>
            <div class="cs_bot num02">
                <span>CE Medical Device Products</span>
                <span class="cs_bottom_num"><img src="img/tel_sm.png" alt="tel 02-6749-1186" class="cs_num_icon">02-6749-1186</span>
            </div>
            <div class="cs_bot num03">
                <span></span>
                <span class="cs_bottom_num"><img src="img/tel_sm.png" alt="tel 02-6749-1191" class="cs_num_icon">02-6749-1191</span>
            </div>
        </div>
        <div class="cs_bottom fda animated fadeInUpShort" data-id="5">
            <div class="cs_bot num04">
                <span>FDA Food and Cosmetics</span>
                <span class="cs_bottom_num"><img src="img/tel_sm.png" alt="tel 02-6749-0702" class="cs_num_icon">02-6749-0702</span>
            </div>
            <div class="cs_bot num05">
                <span></span>
                <span class="cs_bottom_num"><img src="img/tel_sm.png" alt="tel 02-6749-0720" class="cs_num_icon">02-6749-0720</span>
            </div>
            <div class="cs_bot num06">
                <span>FDA Medical Device Products</span>
                <span class="cs_bottom_num"><img src="img/tel_sm.png" alt="tel 02-6749-1180" class="cs_num_icon">02-6749-1180</span>
            </div>
		</div>		
	</div>
	
</section>
<!----------- 회사소개 영역 종료 } ----------->


<!----------- 홍보자료실 영역 시작 { ----------->
<section class="main_sec main_product">

	<div class="wrap">
		<h2>Brochure / Catalogue</h2>
		<!-- 제품 슬라이드 /theme/구매테마/skin/latest/pic_block_slide/latest.skin.php -->
		<?php echo latest('theme/pic_block_slide', 'introduce_en', 20, 23); ?>
	</div>
	
</section>
<!----------- 홍보자료실 영역 종료 } ----------->


<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<script type="text/javascript">
    
// 메인비주얼 슬라이드 효과
$(document).ready(function(){
	$('#main_visual .slider').bxSlider({
		mode: 'fade',
		auto: true,
		autoControls: true,
		stopAutoOnClick: false,
		speed: 800, 
		pager: true,
		touchEnabled: true,		
		pause: 8000
	});
});

<?
$v = @$_GET['view'];
if($v != 'dev'){

//http://igcert.net/?view=dev
?>

// 인증서검색에 대한 JS
const certProxt = {
	data:'',
	getData:function(){
		let cert_code = $('#cert_code').val();
		if(cert_code === ''){
			$('#cert_rst').html('<p>Please, enter a valid search term.</p>');
			return false;
		}

		$('#cert_rst').html('<p>Searching...</p>');
		$.get('/lib/certProxy/search.php',{'code':cert_code},function(r){
			//console.log(r);
			if(r === '') r = '<p>IGC. There is no certificate inquiry result.</p>';
			$('#cert_rst').hide().html(r).fadeIn(1500);
		});
	}
}

$('#cert_btn').click(certProxt.getData);

<?
}
?>
</script>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>