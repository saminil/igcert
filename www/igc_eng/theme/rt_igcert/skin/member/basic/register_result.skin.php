<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 회원가입결과 시작 { -->
<div id="reg_result" class="register">
    <p class="reg_result_p">
    	<i class="fa fa-gift" aria-hidden="true"></i><br>
        <strong><?php echo get_text($mb['mb_name']); ?></strong>Congratulations on your membership.
    </p>

    <?php if (is_use_email_certify()) {  ?>
    <p class="result_txt">
        A verification email was sent to the email address you entered when registering as a member.<br>
        You can use the site smoothly if you check the sent verification email and perform the verification process.
    </p>
    <div id="result_email">
        <span>ID</span>
        <strong><?php echo $mb['mb_id'] ?></strong><br>
        <span>Email Address</span>
        <strong><?php echo $mb['mb_email'] ?></strong>
    </div>
    <p>
        If you have entered the wrong email address, please contact the site administrator.
    </p>
    <?php }  ?>

    <p class="result_txt">
        You can rest assured that your password is stored as an encryption code that no one knows.<br>
         If you lose your ID or password, you can find it using the email address you entered when signing up.
    </p>

    <p class="result_txt">
        Membership withdrawal is possible at any time, and after a certain period, the member's information is deleted.<br>
         Thank you.
    </p>
</div>
<!-- } 회원가입결과 끝 -->
<div class="btn_confirm_reg">
	<a href="<?php echo G5_URL ?>/" class="reg_btn_submit">To Main</a>
</div>