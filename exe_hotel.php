<?php
require_once('admin/class_function/error.php');
require_once('admin/class_function/session.php');
require_once('admin/class_function/function.php');
require_once('admin/class_function/dbconfig.php');



    //die(json_encode($_REQUEST));

    //$user_full_name  = $_POST['surname']." ".$_POST['midname']." ".$_POST['lastname'];
    $title                                    = $_POST['title'];
    $guest_name                               = $_POST['guest_name'];
    $accompanying_person                      = $_POST['accompanying_person'];
    $company_name                             = $_POST['company_name'];
    $address_details                          = $_POST['address_details'];
    $telephone_number                         = $_POST['telephone_number'];
    $email_address                            = $_POST['email_address'];
    $room_type1                               = $_POST['room_type1'];
    $room_type2                               = $_POST['room_type2'];
    $check_in_date                            = $_POST['check_in_date'];
    $airline_in                               = $_POST['airline_in'];
    $flight_number_in                         = $_POST['flight_number_in'];
    $arrival_time                             = $_POST['arrival_time'];
    $check_out_date                           = $_POST['check_out_date'];
    $airline_out                              = $_POST['airline_out'];
    $flight_number_out                        = $_POST['flight_number_out'];
    $departure_time                           = $_POST['departure_time'];

    // die(json_encode($telephone_number));


 $qry = "insert INTO `hotel`(`title`, `guest_name`, `accompanying_person`, `company_name`, `address_details`, `telephone_number`, `email_address`, `room_type1`, `room_type2`, `check_in_date`, `airline_in`, `flight_number_in`, `arrival_time`, `check_out_date`, `airline_out`, `flight_number_out`, `departure_time`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
 $rows = sql($DBH,$qry ,array($title,$guest_name,$accompanying_person,$company_name,$address_details,$telephone_number,$email_address,$room_type1,$room_type2,$check_in_date,$airline_in,$flight_number_in,$arrival_time,$check_out_date,$airline_out,$flight_number_out,$departure_time),"rows");



   // die(json_encode($rows));

      if(!isset($rows)){
      $_SESSION['msg_success'] = "Done";
      redirect("hotel.php");
}

  else{
  //error msg
  $_SESSION['msg_danger'] = "Error";
  redirect("hotel.php");

}




?>
