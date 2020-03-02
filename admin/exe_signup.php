<?php
    require_once('class_function/error.php');
  	require_once('class_function/session.php');
    require_once('class_function/function.php');
  	require_once('class_function/dbconfig.php');

    //die(json_encode($_REQUEST));


    $user_name  = $_POST['name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    //check duplicate email
    $duplicate_email  = sql($DBH,"select * from login where email = ?",array($email),"rows");
    //$duplicate_org    = sql($DBH,"select * from company where org_name = ?",array($org_name),"rows");

    //email
    if(count($duplicate_email) > 0){
      $_SESSION['msg_danger'] = "Email $email, already exists !";
      redirect("signup.php");
    }/*
    else if(count($duplicate_org) > 0){
      $_SESSION['msg_danger'] = "Organization $org_name, already exists !";
      redirect("SignUp.php");
    }*/
    else{
      //company
      sql($DBH,"insert into company (org_name,date_time,hash) values (?,?,?)",array("",time(),unique_md5() ),"rows");
      $org_id = $DBH->lastInsertId();
      //echo "ORG ID: $org_id";

      //user
      sql($DBH,"insert into login
      (user_name, org_id, email, password, date_time, type, last_login, hash)
      values
      (?,?,?,?,?,?,?,?)",
      array($user_name,$org_id,$email,md5($password.$salt),time(),"admin",time(), unique_md5() ),"rows");

      $_SESSION['msg_success'] = "Hello $user_name, your account is created !";
      redirect("index.php");
    }

?>
