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
      $hash = $COMPANY_HASH;
    }
    $company_profile  =  sql($DBH, "SELECT * from company WHERE hash = ?", array($hash), "rows");


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
            <h1 class="h3 mb-0 text-gray-800">Company Profile</h1>
            <!--
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            -->
          </div>

          <!-- Content Row -->

        <div class="row">
          <div class="col-xl-6 col-lg-5">

              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Company Profile</h6>
                </div>
                <!-- Card Body -->
                  <div class="card-body">
                  <div class="pb-2">

                    <!--Company Information-->
                    <form class="company_form" action="exe_profile.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="hash" value="<?= $hash ?>">

                    <label>Company Name: *</label>
                    <input required type="text" class="form-control form-control-user" name="org_name" value="<?= $company_profile[0]["org_name"] ?>"><br>

                    <label>Company Phone:</label>
                    <input type="number" class="form-control form-control-user" name="org_phone" value="<?= $company_profile[0]["org_phone"] ?>"><br>

                    <label>Company Email:</label>
                    <input type="email" class="form-control form-control-user" name="org_email" value="<?= $company_profile[0]["org_email"] ?>"><br>

                    <label>Company Address:</label>
                    <input type="text" class="form-control form-control-user" name="org_address" value="<?= $company_profile[0]["org_address"] ?>"><br>

                    <label>Company Description:</label>
                    <textarea class="form-control form-control-user" name="org_description"><?= $company_profile[0]["org_description"] ?></textarea><br>

                    <button type="submit" name="company_form" class="btn btn-success btn-icon-split" value="Company">
                      <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                      </span>
                      <span class="text">Update Company</span>
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

</body>

</html>
