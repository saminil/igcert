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
			<!------영상일 경우 : video src="http://a01.sgedu.co.kr/theme/a01/img/visual01.mp4" autoplay="autoplay" loop="loop" muted="muted"></video------->
			<h2 style="letter-spacing:-2.5px;">(주)아이지씨인증원</h2>
			<hr>
			<p>시스템 및 제품 인증기관<br class="mobile_no" /></p>
			<a href="<?php echo G5_THEME_URL ?>/manage/igc_006.php" class="btn_more">더보기</a>
		</div>
		
		<div class="roll roll02">
			<h2 style="letter-spacing: -1px;">Institute of <br> Global Certification </h2>
			<hr>
			<p>With IGC, Better Quality and Promising Future!!<br class="mobile_no" /></p>
			<!----a href="javascript:" class="btn_more">더보기</a---->
		</div>
		
		<div class="roll roll03">
			<h2>아이지씨인증원</h2>
			<hr>
			<p>국내외 기업 경쟁력 향상을 위한 <br>시스템인증 | 제품인증<br class="mobile_no" /><br></p>
			<a href="<?php echo G5_THEME_URL ?>/product/igc_069.php" class="btn_more">더보기</a>
		</div>
		
		<div class="roll roll04">
			<h2>IGC인증원</h2>
			<hr>
			<p>국내외 기업 경쟁력 향상을 위한 <br>인증기관<br class="mobile_no" /><br></p>
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
	margin-left: 15px;
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
    font-weight: 300;
    margin: 0px auto;
    margin-top: 20px;
    max-width: 800px;
    color:#fff;
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
    
/* ----------- 인증서 검색 영역 반응형 종료 ----------- */  
    
</style>


<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<!----------- 인증서검색 영역 시작 { ----------->
<section class="main_sec main_product main_cert" style=" background-color:#2B71A6">

	<div class="wrap">
       
        <h2 style="color:#fff;font-size:1.5rem">인 증 서 검 색<br>
            <span style="display:block;font-size:1.0rem;color:#aabbcc;text-align:center;margin-top:4px;margin-bottom:30px;">IGC Cert Search</span>
        </h2>
        
		<div class="form_wrap">
			<input type="text" name="cert_code" id="cert_code" placeholder="IGC 인증서 번호를 입력해주세요." />
			<button id="cert_btn">검색</button>
		</div>
		
	</div>
	
	<div id="cert_rst" class="wrap"></div>
	
</section>

<?
}
?>

<!----------- 인증서검색 영역 종료 } ----------->


<!----------- 게시판 영역 시작 { ----------->
<section class="main_sec main_bbs" style="background-color: #fff;">

	<div class="wrap">
		<!-- 일반 최근글 /theme/테마/skin/latest/basic/latest.skin.php>----->
        <section><?php echo latest('theme/basic', 'notice', 3, 40); ?></section>
		<!-- 일반 최근글 /theme/테마/skin/latest/basic/latest.skin.php -->
        <section><?php echo latest('theme/basic', 'free', 3, 40); ?></section>
		<!-- 질문과답변 최근글 /theme/테마/skin/latest/qna/latest.skin.php---->
        <section><?php echo latest('theme/qna', 'qa', 3, 40); ?></section>
	</div>
	
</section>
<!----------- 게시판 영역 종료 } ----------->


<!----------- 회사소개 영역 시작 { ----------->
<section class="main_sec main_about">
	<div class="bg"></div>
	<div class="wrap animatedParent animateOnce" data-sequence="500">
	    
	    <!-- 회사소개 이미지 영역 -->
		<div class="img animated fadeInRightShort" data-id="1">
            <img src="<?php echo G5_THEME_URL ?>/img/main_about_img01.png" alt="2020년6월 IGC인증기관 인정서1" /> 
		    <img src="<?php echo G5_THEME_URL ?>/img/main_about_img02.png" alt="2020년6월 IGC인증기관 인정서2" />			
		</div>
		
		<!-- 회사소개 텍스트 영역 -->
		<div class="text animated fadeInUpShort" data-id="2">
			<div class="animatedParent animateOnce" data-sequence="250">
				<h2 class="animated fadeInUpShort" data-id="1"><strong class="em_title">IGC인증원</strong></h2>
				<p class="animated fadeInUpShort" data-id="3" style="color:#fff;font-size:1.1rem;line-height:1.4;margin:0 0 25px;word-break:keep-all">
				    IGC는<br class="pc_only" />
				    고객의 성공적인 해외 진출을 지원할 수 있는<br class="pc_only"/>
				    최적의 제품 및 시스템 인증 기관입니다.
				</p>
				
				<p class="animated fadeInUpShort" data-id="4" style="color:#fff;font-size:1.1rem;line-height:1.4; margin:0 0 25px;word-break:keep-all">
				    이를 지원하기 위하여 <br class="pc_only" /> 
				    시험 및 검사 수행이 가능하고 고객의 업무 진행에 필요한  <br class="pc_only" />
				    인력을 양성하기 위한 교육 및 훈련을 <br class="pc_only" /> 
				    제공하고 있습니다.
				</p>
				
				<!-- 버튼 영역 -->
				<div class="btn_area animated fadeInUpShort" data-id="5">
					<a href="<?php echo G5_THEME_URL ?>/sub01/sub01.php" style="color:#fff;">회사소개</a>
					<a href="<?php echo G5_THEME_URL ?>/sub01/sub06.php" style="color:#fff;">오시는길</a>
				</div>
				
				<!-- CS 영역 -->
				<div class="cs animated fadeInUpShort" data-id="6" style="display:flex;">
				    <div class="cs_area" style="flex:1">
				        <p>대표번호</p>
				        <p class="tel"><img src="/theme/rt_igcert/image/tel.png" alt="tel 02-6749-0701">02-6749-0701</p>
					    <p class="time">이용시간</p>
                        <p class="day">평일 AM 09:00 ~ PM 06:00</p>
                    </div>
                    <div class="ce_area" style="flex:1">
				        <div class="ce_elec">
				            <p>CE 전자기기, PED, 기계 제품 인증</p>
				            <p class="tel"><img src="/theme/rt_igcert/image/tel_sm.png" alt="tel 02-6749-1161">02-6749-1161</p>
				        </div>
				        <div class="ce_medic">
				            <p>CE 의료기기 제품 인증</p>
				            <p class="tel"><img src="/theme/rt_igcert/image/tel_sm.png" alt="tel 02-6749-1186">02-6749-1186</p>
				            <p class="tel"><img src="/theme/rt_igcert/image/tel_sm.png" alt="tel 02-6749-1191">02-6749-1191</p>
				        </div>
                    </div>
                    <div class="fda_area" style="flex:1">
                        <div class="fda_medic">
                            <p>FDA 의료기기 인증</p>
                            <p class="tel"><img src="/theme/rt_igcert/image/tel_sm.png" alt="tel 02-6749-1180">02-6749-1180</p>
                        </div>
                        <div class="fda_foodCosmetic">
                            <p>FDA 식품, 화장품 인증</p>
                            <p class="tel"><img src="/theme/rt_igcert/image/tel_sm.png" alt="tel 02-6749-0702">02-6749-0702</p>
				            <p class="tel"><img src="/theme/rt_igcert/image/tel_sm.png" alt="tel 02-6749-0720">02-6749-0720</p>
                        </div>
                    </div>
				</div>
				
			</div>
		</div>
		
	</div>
</section>
<!----------- 회사소개 영역 종료 } ----------->


<!----------- 홍보자료실 영역 시작 { ----------->
<section class="main_sec main_product">

	<div class="wrap">
		<h2>홍보자료실</h2>
		<!-- 제품 슬라이드 /theme/구매테마/skin/latest/pic_block_slide/latest.skin.php -->
		<?php echo latest('theme/pic_block_slide', 'introduce', 4, 30); ?>
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
			$('#cert_rst').html('<p>올바른 검색어를 입력해주세요.</p>');
			return false;
		}

		$('#cert_rst').html('<p>검색중...</p>');
		$.get('/lib/certProxy/search.php',{'code':cert_code},function(r){
			//console.log(r);
			if(r === '') r = '<p>IGC인증서 조회결과가 없습니다.</p>';
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