<?php
// E-mail 수정시 인증 메일 (회원님께 발송)
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>Membership verification email</title>
</head>

<body>

<div style="margin:30px auto;width:600px;border:10px solid #f7f7f7">
    <div style="border:1px solid #dedede">
        <h1 style="padding:30px 30px 0;background:#f7f7f7;color:#555;font-size:1.4em">
            Membership verification email.
        </h1>
        <span style="display:block;padding:10px 30px 30px;background:#f7f7f7;text-align:right">
            <a href="<?php echo G5_URL ?>" target="_blank"><?php echo $config['cf_title'] ?></a>
        </span>
        <p style="margin:20px 0 0;padding:30px 30px 50px;min-height:200px;height:auto !important;height:200px;border-bottom:1px solid #eee">
            <?php if($w == 'u') { ?>
            <b><?php echo $mb_name ?></b> Your e-mail address has changed.<br><br>
            <?php } ?>

            Click the address below to complete the verification.<br>
            <a href="<?php echo $certify_href ?>" target="_blank"><b><?php echo $certify_href ?></b></a><br><br>

            We will work harder and harder to reward your support.<br>
            Thank you.
        </p>
        <a href="<?php echo G5_BBS_URL ?>/login.php" target="_blank" style="display:block;padding:30px 0;background:#484848;color:#fff;text-decoration:none;text-align:center"><?php echo $config['cf_title'] ?> Log in</a>
    </div>
</div>

</body>
</html>
