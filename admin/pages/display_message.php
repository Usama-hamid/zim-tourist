<?php
  if($_SESSION['msg_success']){
    $display_message = "<div class='alert alert-success'><p>".$_SESSION['msg_success']."</p></div>";
    unset($_SESSION['msg_success']);
  }
  if($_SESSION['msg_danger']){
    $display_message = "<div class='alert alert-danger'><p>".$_SESSION['msg_danger']."</p></div>";
    unset($_SESSION['msg_danger']);
  }
?>
