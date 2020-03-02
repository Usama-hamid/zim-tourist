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
            <h1 class="h3 mb-0 text-gray-800">Hotel Bookings</h1>
            <!--
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            -->
          </div>

          <?= $display_message; ?>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Hotel Bookings</h6>



            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Hotel Name</th>
                      <th>Date</th>
                      <th>No of Rooms</th>
                      <th>Details</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php
                      /*
                      $rows = sql($DBH,"select * from hotels where org_id = ?",array($LOGIN_ORG_ID),"rows");
                      $sno = 0;
                      foreach($rows as $row){
                        $sno++;
                        $id             =	$row['id'];
                        $name           = $row['name'];
                        $picture        = "uploads/".$row['picture'];
                        $small_desc     = $row['small_desc'];
                        $long_desc      = $row['long_desc'];
                        $rating         = $row['rating'];
                        $price          = $row['price'];
                        $active         = $row['active'];
                        $created_by     = user_name($row['created_by']);
                        //<a href='hotel.php?id=$id'>
                        echo "<tr>
                        <td>$sno</td>
                        <td class='text-center'>
                            <img class='medium_image' src='$picture' /><br>
                            $name
                        </td>
                        <td>$small_desc</td>
                        <td>$long_desc</td>
                        <td>$rating</td>
                        <td>$price</td>
                        <td>$active</td>
                        <td>$created_by</td>

                    </tr>";



                    	}
                      */
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
