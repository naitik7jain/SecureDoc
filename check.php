<?php
require('db.php');
if (isset($_POST['button'])) {
    
    $mobile_otp = $_POST['mobile_otp'];
    $_SESSION['mobile_otp'] = $mobile_otp;

    $mail_otp = $_POST['mail_otp'];
    $_SESSION['mail_otp'] = $mail_otp;

    if(($_SESSION['otp_mail'] == $mail_otp) && ($_SESSION['otp_mobile'] == $mobile_otp)){
        echo ("<script>
        window.location.href='profile.php';
        </script>");
    
    }

}