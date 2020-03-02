<?php
require_once('admin/class_function/error.php');
require_once('admin/class_function/session.php');
require_once('admin/class_function/function.php');
require_once('admin/class_function/dbconfig.php');


    //die(json_encode($_REQUEST));

    //$user_full_name  = $_POST['surname']." ".$_POST['midname']." ".$_POST['lastname'];
    $title                                    = $_POST['title'];
    $sex                                      = $_POST['sex'];
    $surname                                  = $_POST['surname'];
    $middle_name                              = $_POST['middle_name'];
    $last_name                                = $_POST['last_name'];
    $date_of_birth                            = $_POST['date_of_birth'];
    $place_of_birth                           = $_POST['place_of_birth'];
    $present_nationality                      = $_POST['present_nationality'];
    $previous_nationality                     = $_POST['previous_nationality'];
    $passport_number                          = $_POST['passport_number'];
    $place_of_issue                           = $_POST['place_of_issue'];
    $date_of_issue                            = $_POST['date_of_issue'];
    $date_of_expiry                           = $_POST['date_of_expiry'];
    $applicants_present_occupation            = $_POST['applicants_present_occupation'];
    $purpose_of_visit                         = $_POST['purpose_of_visit'];
    $residential_address                      = $_POST['residential_address'];
    $proposed_address_in_zimbabwe             = $_POST['proposed_address_in_zimbabwe'];
    $period_of_visit_intended                 = $_POST['period_of_visit_intended'];
    $intended_place_of_entry_into_zimbabwe    = $_POST['intended_place_of_entry_into_zimbabwe'];
    $dates_of_previous_entries_into_zimbabwe  = $_POST['dates_of_previous_entries_into_zimbabwe'];
    $address_to_which_visa_should_be_sent     = $_POST['address_to_which_visa_should_be_sent'];
    $any_criminal_convictions                 = $_POST['any_criminal_convictions'];

$inst = "INSERT INTO `visa`(`title`, `sex`, `surname`, `middle_name`, `last_name`, `date_of_birth`, `place_of_birth`, `present_nationality`, `previous_nationality`, `passport_number`, `place_of_issue`, `date_of_issue`, `date_of_expiry`, `applicant's_present_occupation`, `purpose_of_visit`, `residential_address`, `proposed_address_in_zimbabwe`, `period_of_visit_intended`,`intended_place_of_entry_in_zimbabwe`,`dates_of_previous_entries_into_zimbabwe`,`address_to_which_visa_should_be_sent`,`any_criminal_convictions`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
  //     //visa form
   $rows = sql($DBH,$inst,array($title,$sex,$surname,$middle_name,$last_name,$date_of_birth,$place_of_birth,$present_nationality,$previous_nationality,$passport_number,$place_of_issue,$date_of_issue,$date_of_expiry,$applicants_present_occupation,$purpose_of_visit,$residential_address,$proposed_address_in_zimbabwe,$period_of_visit_intended,$intended_place_of_entry_in_zimbabwe,$dates_of_previous_entries_into_zimbabwe,$address_to_which_visa_should_be_sent,$any_criminal_convictions),"rows");


   //die(json_encode($rows));

if(!isset($rows)){
    $_SESSION['msg_success'] = "Done";
  redirect("visa.php");
}
else{
  //error msg
  $_SESSION['msg_danger'] = "Error";
  redirect("visa.php");

}




?>
