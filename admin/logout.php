<?php
    require_once('class_function/error.php');
  	require_once('class_function/session.php');
    require_once('class_function/function.php');
  	require_once('class_function/dbconfig.php');

    session_unset($_SESSION['LOGIN_USER_NAME']);
    session_unset($_SESSION['LOGIN_ORG_ID']);
    session_unset($_SESSION['LOGIN_EMAIL']);
    session_unset($_SESSION['LOGIN_TYPE']);
    session_unset($_SESSION['LOGIN_ORG_NAME']);
  


    session_destroy();
    //echo json_encode($_SESSION);
    //exit();
    redirect("index.php");
?>
