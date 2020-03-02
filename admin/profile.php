<?php
    require_once('class_function/error.php');
    require_once('class_function/session.php');
    require_once('class_function/function.php');
    require_once('class_function/dbconfig.php');
    require_once('class_function/validate.php');

    require_once('pages/header.php');
    require_once('pages/menu.php');
    require_once('pages/footer.php');

    require_once('pages/title.php');
    require_once('pages/meta.php');
    require_once('pages/custom_files.php');
    require_once('pages/display_message.php');
    require_once('pages/scroll_top.php');
    require_once('pages/logout_modal.php');

    if($_GET['id']){
      $hash = $_GET['id'];
    }else{
      $hash = $LOGIN_HASH;
    }

    $user_profile     =  sql($DBH, "SELECT * from login WHERE hash = ?", array($hash), "rows");
    //


    //die(json_encode($user_profile));
    //echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?= $meta ?>
  <title><?= $title; ?></title>
  <?= $favicon; ?>

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <?= $custom_files ?>

  <style>
  #personal_save {
    margin-top: 20px;
    width: 30%;
}



  </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?= $menu ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?= $header ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>            <!--
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            -->
          </div>

          <?= $display_message; ?>

          <!-- Content Row -->

          <div class="row">

            <!-- Pie Chart -->

              <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">

                <!-- Card Header - Dropdown -->

                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">User Profile</h6>
                </div>

                <!-- Card Body -->

                <div class="card-body">
                <div class="pb-2">

                  <!--Personal Information-->
                  <form class="personal_form" action="exe_profile.php" method="post" enctype="multipart/form-data">

                    <input required type="hidden" class="form-control form-control-user" name="hash" value="<?= $hash; ?>">

                    <label>User Name: *</label>
                    <input type="text" class="form-control form-control-user" name="user_name" value="<?= $user_profile[0]["user_name"]; ?>"><br>

                    <label>User Email: *</label>
                    <input required type="email" class="form-control form-control-user" name="email" value="<?= $user_profile[0]["email"]; ?>"><br>

                    <label>User Phone:</label>
                    <input type="text" class="form-control form-control-user" name="phone" value="<?= $user_profile[0]["phone"]; ?>"><br />

                    <label>Status:</label>
                    <select required class="form-control form-control-user" name="active">
                      <option <?php if($user_profile[0]['active'] == "true"){echo "selected";} ?> value="true">Enabled</option>
                      <option <?php if($user_profile[0]['active'] == "false"){echo "selected";} ?> value="false">Disabled</option>
                    </select><br><br>


                    <br />
                    <p class="text-muted">
                      Account created: <?= my_simple_date($user_profile[0]["date_time"]) ?>
                    </p>

                    <button type="submit" name="personal_form" class="btn btn-success btn-icon-split" value="Profile">
                      <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                      </span>
                      <span class="text">Update User</span>
                    </button>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-5 hidden">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Password</h6>
                  </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="pb-2">
                    <form class="password_form" action="exe_profile.php" method="post" enctype="multipart/form-data">
                      <label> Old Password:</label>
                      <input type="password" class="form-control form-control-user" name="old_password" value=""><br>
                      <label>New Password:</label>
                      <input type="password" class="form-control form-control-user" name="new_password" value=""><br>
                      <label>Confirm Password:</label>
                      <input type="password" class="form-control form-control-user" name="confirm_password" value="">

                      <br/>

                      <button type="submit" name="password_form" class="btn btn-success btn-icon-split" value="Password">
                        <span class="icon text-white-50">
                          <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Change Password</span>
                      </button>



                    </form>
                  </div>
                </div>
              </div>
            </div>




          </div>




        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?= $footer ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?= $scroll_top ?>

  <!-- Logout Modal-->
  <?= $logout_modal ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

  <script>
    $(document).ready(function(){
      function validate_signup(){
        var password          = $("input[name='new_password']");
        var confirm_password  = $("input[name='confirm_password']");
        $(password).css("border","1px solid #d1d3e2");
        $(confirm_password).css("border","1px solid #d1d3e2");
        if(password.val().length > 0){
          if(password.val() == confirm_password.val()){
            return true;
          }else{
            $(password).css("border","1px solid #f00");
            $(confirm_password).css("border","1px solid #f00");
            return false;
          }
        }else{
          $(password).css("border","1px solid #f00");
          return false;
        }
      }
      $(".password_form").submit(function(e){
          if(!validate_signup()){
            e.preventDefault();
          }
      });
    });
  </script>


</body>

</html>
