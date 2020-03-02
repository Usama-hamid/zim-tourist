<?php
    require_once('class_function/error.php');
  	require_once('class_function/session.php');
    require_once('class_function/function.php');
  	require_once('class_function/dbconfig.php');

    $email = $_POST['email'];

    $login_account  = sql($DBH,"select * from login where email = ?",array($email),"rows");

    if(count($login_account) != 1){
        $_SESSION['msg_danger'] = "No account exists with email '$email', please create an account!";
        redirect("forgot.php");
    }else{
        $_SESSION['msg_success']  = "Email sent to you at '$email', please check your email to reset password";
        redirect("forgot.php");
    }
?>
