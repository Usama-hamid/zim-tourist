<?php
    require_once('class_function/error.php');
  	require_once('class_function/session.php');
    require_once('class_function/function.php');
  	require_once('class_function/dbconfig.php');
    // die(json_encode($_REQUEST));
    $name         = $_POST['name'];
    $small_desc   = $_POST['small_desc'];
    $long_desc    = $_POST['long_desc'];
    $rating       = $_POST['rating'];
    $price        = $_POST['price'];

  	//echo "File Name: ".$_FILES[picture][name]."<br>";
  	//echo "tmp name: ".$_FILES[picture][tmp_name]."<br>";
  	//echo "File Type: ".$_FILES[picture][type]."<br>";
    $picture = $_FILES[picture][name];
  	move_uploaded_file($_FILES[picture][tmp_name],"uploads/".$picture);

    //user
    sql($DBH,"insert into hotels(org_id,name,picture,small_desc,long_desc,rating,price,created_at,created_by) values
    (?,?,?,?,?,?,?,?,?);",
    array($LOGIN_ORG_ID,$name,$picture,$small_desc,$long_desc,$rating,$price,time(),$LOGIN_USER_ID),"rows");

    $_SESSION['msg_success'] = "New Hotel successfully created!";
    redirect("list_hotels.php");

?>
