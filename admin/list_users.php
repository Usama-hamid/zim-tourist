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

    if ($_SESSION['LOGIN_TYPE']=='User') {
    redirect ("404.php");
  }
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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Users & Permissions</h1>
            <!--
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            -->
          </div>

          <?= $display_message; ?>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users & Permissions</h6>

              <a href="add_users.php" class="btn btn-sm btn-info btn-icon-split pull-right">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">Create New</span>
              </a>

              <!--
              <a href="javascript:;" class="btn btn-sm btn-info btn-icon-split pull-right mr-5">
                <span class="icon text-white-50">
                  <i class="fas fa-link"></i>
                </span>
                <span class="text">Signup Link</span>
              </a>
              -->

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Company Name</th>
                      <th>Email</th>
                      <th>Type</th>
                      <th>Date Time</th>
                      <th>Last Login</th>
                      <th>Status</th>
                      <th>Options</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php
                      if($LOGIN_TYPE == "super"){
                        $rows = sql($DBH,"select * from login where id != ?",array($LOGIN_USER_ID),"rows");

                      }else{
                        $rows = sql($DBH,"select * from login where org_id = ? and id != ?",array($LOGIN_ORG_ID,$LOGIN_USER_ID),"rows");

                      }

                      $sno = 0;
                      foreach($rows as $row){
                        $sno++;
                        $id             =	 $row['id'];
                        $user_name      =  $row['user_name'];
                        $org_id         =  $row['org_id'];
                        $email          =  $row['email'];
                        $password       =  $row['password'];
                        $date_time      =  my_simple_date($row['date_time']);
                        // if(!empty($row['last_login'])){
                        //   $last_login      = my_simple_date($row['last_login']);
                        // }
                        // else{
                        //   $last_login      = "Not Login Yet";
                        // }
                        $last_login      = (!empty($row['last_login']))? my_simple_date($row['last_login']) : "Not Login Yet";

                        $type           =  ucfirst($row['type']);
                        $active         =  $row['active'];
                        $login_hash     =  $row['hash'];


                        $company_name = company_name($org_id);
                        $company_hash = company_hash($org_id);


                        if($active == "true"){
                          $active_show = "<span class='badge badge-success'>Active</span>";
                        }else{
                          $active_show = "<span class='badge badge-danger'>Blocked</span>";
                        }

                        //<img class='small_image' src='https://source.unsplash.com/QAB-WJcbgJk/60x60' /><br>


                        echo "<tr>
                        <td>$sno</td>
                        <td>
                          <a href='profile.php?id=$login_hash'>
                            $user_name
                          </a>
                        </td>
                        <td>
                          <a href='company.php?id=$company_hash'>
                            $company_name
                          </a>
                        </td>

                        <td>$email</td>
                        <td>$type</td>
                        <td>$date_time</td>
                        <td>$last_login</td>
                        <td>$active_show</td>
                        <td>

                          <a href='profile.php?id=$login_hash' class='btn btn-sm btn-info btn-icon-split'>
                            <span class='icon text-white-50'>
                              <i class='fas fa-info-circle'></i>
                            </span>
                            <span class='text'>Update</span>
                          </a>
                        </td>

                    </tr>";



                    	}
                    ?>


                  </tbody>
                </table>
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
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
