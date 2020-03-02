<?php
    require_once('class_function/error.php');
  	require_once('class_function/session.php');
    require_once('class_function/function.php');
  	require_once('class_function/dbconfig.php');
    require_once('pages/title.php');
    require_once('pages/meta.php');
    require_once('pages/custom_files.php');
    require_once('pages/display_message.php');
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
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block "id="welcome_image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><?= $title ?></h1>
                    <h1 class="h4 text-gray-900 mb-4"><small>Create an Account</small></h1>
                  </div>

                  <?= $display_message; ?>

                  <form class="user validate_signup" action="exe_signup.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="name"  name="name"  class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Your Good Name" required>
                    </div>
                    <div class="form-group">
                      <input type="email"  name="email"  class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password"  class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password_repeat"  class="form-control form-control-user" id="exampleInputPassword" placeholder="Re-Password" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <input type="submit" value="Login" class="btn btn-primary btn-user btn-block">


                    <!--

                    <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>

                    -->
                  </form>
                  <hr>
                  <div class="text-center">
                    Already have an account? <a href="index.php">Login Now!</a>
                  </div>
                  <!--
                  <div class="text-center">
                    <a class="small" href="forgot.php">Forgot Password?</a>
                  </div>
                  -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <script>
    $(document).ready(function(){
      function validate_signup(){
        var password          = $("input[name='password']");
        var password_repeat   = $("input[name='password_repeat']");
        $(password).css("border","1px solid #d1d3e2");
        $(password_repeat).css("border","1px solid #d1d3e2");
        if(password.val().length > 0){
          if(password.val() == password_repeat.val()){
            return true;
          }else{
            $(password).css("border","1px solid #f00");
            $(password_repeat).css("border","1px solid #f00");
            return false;
          }
        }else{
          $(password).css("border","1px solid #f00");
          return false;
        }
      }
      $(".validate_signup").submit(function(e){
          if(!validate_signup()){
            e.preventDefault();
          }
      });
    });
  </script>

</body>

</html>
