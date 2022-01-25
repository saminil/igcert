<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<?php if (!defined("_INDEX_")) { ?>
		</div>
	</div>
</div>
<? } ?>

<script src="<?php echo G5_THEME_URL ?>/js/css3-animate-it.js"></script>


<!----------- 푸터 시작 { ----------->
<footer id="footer" <?php if (defined("_INDEX_")) { ?>class="main"<? }?>>
    <hr class="hr02"><!-- 구분선, 메인메뉴, 하단 컨텐츠 -->
	<div class="wrap">
		<h1><a href="/"></a></h1><!-- 하단로고 -->
        

        
                <!----------- 푸터 fnb 영역 ----------->
		<nav class="gnb">
			<ul style="position:relative;right:0;">
                
                <!-- 개인정보처리방침/서비스이용약관 영역 -->
               <li><a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a></li> 
               <li><a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a></li>
                
                <div style="margin-right:0px;">
				      <hr class="site_up" style="border-top: 1px solid #cccccc;display:block;margin-bottom:15px;margin-top:0px;width:100%;right:0px;">
				</div>
               
                <!----------- 관련사이트 ----------->
				<li class="sites">
				   <select onchange="copyrtChgUrl(this.value)" style="background-color:#203864;color:#fff;width:160px;" class="site2">
	                  <option value=""> 관련사이트 </option>
	                  <option value="https://gicert.org">GIC인증원</option>
	                  <option value="http://gpcert.org/">GPC인증원</option>
	                  <option value="https://igc.gpcacademy.org/?lang=ko">IGC Academy</option>
	                  <option value="http://rus-test.org/">RUS-TEST인증원</option>
	                  <option value="http://dna-tec.org">DNA-TEC인증원</option>
	                  <option value="https://www.asiaitc.com/">ASIAITC</option>
	                  <option value="https://www.gpc.center">GPC-CENTER</option>
                      <option value="http://aemiworld.com/">AEMIWORLD</option>    
                      <!--                  
                      <option value="https://blog.naver.com/kate_0432">BLOG01</option>
                      <option value="https://blog.naver.com/woheni19">BLOG02</option>
                      <option value="https://blog.naver.com/djrrlforyou">BLOG03</option>
                      <option value="https://blog.naver.com/kate_0432">BLOG04</option>
                      -->
                   </select>
				</li>
				
			</ul>			
		</nav>
		
		<br class="s_mobile_only" />
		
		<!----------- 회사정보 ----------->
		<div class="f_left">
			<dl>  
				<dt style="color:#fff;">회사 : (주)아이지씨인증원</dt>&nbsp; &nbsp;<br class="s_mobile_only" />			
				<dt style="color:#fff;">주소 : </dt> 
				<dt style="color:#fff;">(08504) 서울시 금천구 서부샛길 638, 대륭테크노타운7차 501</dt><br />
				<dt style="color:#fff;">대표 : </dt>
				<dt style="color:#fff;">Dr.공길택</dt>&nbsp; &nbsp;
				<dt style="color:#fff;">사업자등록번호 : </dt>
				<dt style="color:#fff;">107-81-76722</dt>&nbsp; &nbsp; 
				<a href="tel:02-6749-0723">
				<dt style="color:#fff;">전화 바로하기 : </dt>
				<dt style="color:#fff;">02-6749-0701</dt>
				</a>&nbsp; &nbsp;
				<dt style="color:#fff;">팩스 : </dt>
				<dt style="color:#fff;">02-6749-0711</dt> &nbsp; &nbsp; <br>
				<a href="mailto:info@igcert.org">
				<dt style="color:#fff;">이메일 바로가기 : </dt>
				<dt style="color:#fff;" class="igc_email">info@igcert.org</dt>
				</a>
			</dl>
			
			<!-- 카피라이터 -->
			<p class="copyright" style="color:#fff;font-weight:200;">Copyright &copy; <strong>(주)아이지씨인증원</strong> All rights reserved.</p>
		</div>
	</div>    

    <!-- TOP 버튼 -->
    <a href="javascript:" id="top_btn">
        <i class="fa fa-angle-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </a>
   
</footer>  
<!----------- 푸터 종료 } ----------->


<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<script>
    
// TOP버튼 클릭시 브라우저 최상단으로 이동
$(function() {
    $("#top_btn").on("click", function() {
        $("html, body").animate({scrollTop:0}, '1000');
        return false;
    });
});

// 관련사이트 클릭시 해당사이트로 이동
function copyrtChgUrl(url){
	if(url){
		window.open(url);
	}
}

</script>


<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>