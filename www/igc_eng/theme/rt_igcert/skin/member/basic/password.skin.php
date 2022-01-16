<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$delete_str = "";
if ($w == 'x') $delete_str = "Comment";
if ($w == 'u') $g5['title'] = $delete_str."Modify";
else if ($w == 'd' || $w == 'x') $g5['title'] = $delete_str."Delete";
else $g5['title'] = $g5['title'];

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 비밀번호 확인 시작 { -->
<div id="pw_confirm" class="mbskin">
    <h1><?php echo $g5['title'] ?></h1>
    <p>
        <?php if ($w == 'u') { ?>
        <strong>Only the author can edit the article.</strong>
        If you are the author, you can edit the post by entering the password you entered when writing the post.
        <?php } else if ($w == 'd' || $w == 'x') {  ?>
        <strong>Only the author can delete the post.</strong>
        If you are the author, you can delete the post by entering the password you entered when writing the post.
        <?php } else {  ?>
        <strong>This article is protected by the secret article function.</strong>
        Only the author and administrator can view it. If you are yourself, enter your password.
        <?php }  ?>
    </p>

    <form name="fboardpassword" action="<?php echo $action;  ?>" method="post">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="comment_id" value="<?php echo $comment_id ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">

    <fieldset>
        <label for="pw_wr_password" class="sound_only">Password<strong>Nessary</strong></label>
        <input type="password" name="wr_password" id="password_wr_password" required class="frm_input required" size="15" maxLength="20" placeholder="Password">
        <input type="submit" value="Send" class="btn_submit">
    </fieldset>
    </form>

</div>
<!-- } 비밀번호 확인 끝 -->