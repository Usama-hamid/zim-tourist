<?php
  if(isset($LOGIN_USER_NAME) &&
    isset($LOGIN_ORG_ID) &&
    isset($LOGIN_EMAIL) &&
    isset($LOGIN_TYPE)){ //isset($LOGIN_ORG_NAME)
        // User is login
        //echo json_encode($_SESSION);
    }else{
        $_SESSION['msg_danger'] = "Please login to continue!";
        redirect("index.php");
    }
?>
