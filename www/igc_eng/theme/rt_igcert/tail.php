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
		<h1><a href="/igc_eng/"></a></h1><!-- 푸터 하단로고 -->
		
		<!----------- 푸터 fnb 영역 ----------->
		<nav class="gnb">
			<ul style="position:relative">
              
                <!-- 개인정보처리방침/서비스이용약관 영역 -->
                <div class="privacyprovision" style="position:relative;clear:both;">
                    <li><a href="<?php echo get_pretty_url('content', 'privacy'); ?>"><span>Privacy</span></a></li> 
                    <li><a href="<?php echo get_pretty_url('content', 'provision'); ?>"><span>Provision</span></a></li>
                </div>
				
				<!-- 관련사이트 상단 라인 -->   
				<hr class="hr03">
				
				<!----------- 관련사이트 ----------->
				<li class="sites" style="padding:20px 0 0 0;clear:both;">
                    <select onchange="copyrtChgUrl(this.value)">
                         <option value="" style="display:block;margin-left:10px;"> Web Sites </option>
                         <option value="https://gicert.org">www.gicert.org</option>
                         <option value="http://gpcert.org/">www.gpcert.net</option>
                         <option value="http://rus-test.org/">www.rus-test.org</option>
                         <option value="http://dna-tec.org">www.dna-tec.org</option>
                         <option value="https://igc.gpcacademy.org/?lang=ko">IGC Academy</option>
                         <option value="https://www.asiaitc.com/">www.asiaitc.com</option>
                         <option value="https://www.gpc.center">www.gpc.center</option>
                         <option value="http://aemiworld.com/">www.aemiworld.com</option>
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
		
		
		<!----------- 회사정보 ----------->
		<div class="f_left" style="color:#999">
			<dl class="f_left_text">  
				<dt>Company : Institute of Global Certification Co., Ltd.</dt>&nbsp; &nbsp;		
				<dt>CEO : </dt>
				<dt>Dr.Gill-Taik Gong</dt> <br>
				
				<dt>Address : 
				(08504) #501, 638, Seobusaet-gil, Geumcheon-gu, Seoul, Republic of Korea</dt><br />
				
				<dt>Business License : </dt>
				<dt>107-81-76722</dt>&nbsp; &nbsp;  <br class="s_mobile_only" />
				<a href="tel:02-6749-0723">
				<dt>Tel. : </dt>
				<dt>+82 2 6749 0701</dt>
				</a>&nbsp; &nbsp;
				<dt>FAX : </dt>
				<dt>+82 2 6749 0711</dt> &nbsp; &nbsp; 
				<a href="mailto:info@igcert.org">
				<dt>E-MAIL : </dt>
				<dt class="igc_email">info@igcert.org</dt>
				</a>
			</dl>
			
			<!-- 카피라이터 -->
			<p class="copyright">Copyright &copy; <strong>IGC Co., Ltd.</strong> All rights reserved.</p>
        </div>
	</div>

    <!-- TOP 버튼 -->
    <a href="javascript:" id="top_btn">
       <i class="fa fa-angle-up" aria-hidden="true"></i><span class="sound_only">Up</span>
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