<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 스크랩 시작 { -->
<div id="scrap_do" class="new_win">
    <h1 id="win_title">Scrap</h1>
    <form name="f_scrap_popin" action="./scrap_popin_update.php" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <div class="new_win_con">
	    <h2 class="sound_only">Check title and write comments</h2>
	    <ul>
	        <li class="scrap_tit">
	            <span class="sound_only">Title</span>
	            <?php echo get_text(cut_str($write['wr_subject'], 255)) ?>
	        </li>
	        <li>
	            <label for="wr_content">Write a comment</label>
	            <textarea name="wr_content" id="wr_content"></textarea>
	        </li>
	    </ul>
	</div>
    <p class="win_desc">You can leave a comment of thanks or encouragement while making a scrap.</p>

    <div class="win_btn">
        <button type="submit" class="btn_submit">Scrap check</button>
    </div>
    </form>
</div>
<!-- } 스크랩 끝 -->