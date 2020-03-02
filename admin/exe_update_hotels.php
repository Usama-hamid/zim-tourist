<?php
    require_once('class_function/error.php');
  	require_once('class_function/session.php');
    require_once('class_function/function.php');
  	require_once('class_function/dbconfig.php');
    // die(json_encode($_REQUEST));

    $id           = $_POST['id'];
    $name         = $_POST['name'];
    $small_desc   = $_POST['small_desc'];
    $long_desc    = $_POST['long_desc'];
    $rating       = $_POST['rating'];
    $price        = $_POST['price'];
    $active       = $_POST['active'];

  	//echo "File Name: ".$_FILES[picture][name]."<br>";
  	//echo "tmp name: ".$_FILES[picture][tmp_name]."<br>";
  	//echo "File Type: ".$_FILES[picture][type]."<br>";
    $picture = $_FILES[picture][name];
    if(strlen($picture) > 0){
      move_uploaded_file($_FILES[picture][tmp_name],"uploads/".$picture);
      sql($DBH,"update hotels set name=?,picture=?,small_desc=?,long_desc=?,
      rating=?,price=?,active=? where id = ?",
      array($name,$picture,$small_desc,$long_desc,
      $rating,$price,$active,$id),"rows");
    }else{
      sql($DBH,"update hotels set name=?,small_desc=?,long_desc=?,
      rating=?,price=?,active=? where id = ?",
      array($name,$small_desc,$long_desc,
      $rating,$price,$active,$id),"rows");
    }


    $_SESSION['msg_success'] = "Hotel successfully updated!";
    redirect("list_hotels.php");
?>
