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

  <style>
    .edit_category{
      display:none;
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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Categories</h1>
            <!--
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            -->
          </div>

          <?= $display_message; ?>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Categories</h6>


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


                <form class="new_category">
                    <input class="form-control" required name="name" type="text" placeholder="Name" /><br/>
                    <input class="form-control" required name="icon" type="text" placeholder="Icon" /><br/>
                    <select class="form-control" required name="status">
                        <option value="">Status</option>
                        <option value="true">True</option>
                        <option value="false">False</option>
                    </select><br/>
                    <button class="btn btn-success">Add New Category</button><br/>
                </form>

                <form class="edit_category">
                    <input class="form-control" required name="id" type="hidden"/><br/>
                    <input class="form-control" required name="name" type="text" placeholder="Name" /><br/>
                    <input class="form-control" required name="icon" type="text" placeholder="Icon" /><br/>
                    <select class="form-control" required name="status">
                        <option value="">Status</option>
                        <option value="true">True</option>
                        <option value="false">False</option>
                    </select><br/>
                    <button class="btn btn-success">Edit Category</button><br/>
                </form>


                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <th>Firebase Key</th>
                    <th>Name</th>
                    <th>Icon</th>
                    <th>Status</th>
                    <th>Delete</th>
                  </thead>
                  <tbody class="data_here">
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

  <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-analytics.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-firestore.js"></script>
  <script>
  var firebaseConfig = {
    apiKey: "AIzaSyCi95HjxscCAK7iK0-bHLbXVkRIj_r1paQ",
    authDomain: "e-schoolshop.firebaseapp.com",
    databaseURL: "https://e-schoolshop.firebaseio.com",
    projectId: "e-schoolshop",
    storageBucket: "e-schoolshop.appspot.com",
    messagingSenderId: "429472644817",
    appId: "1:429472644817:web:2ed95334aa994795370ff0",
    measurementId: "G-R7YC6YB072"
    };
      firebase.initializeApp(firebaseConfig);
      firebase.analytics();
  </script>
  <script>
      $(document).ready(function(){

          //Document Names
          var category_doc = "categories";

          var db = firebase.firestore();

          $(".new_category").submit(function(e){
              e.preventDefault();

              var name    = $(".new_category").find("input[name='name']").val();
              var icon    = $(".new_category").find("input[name='icon']").val();
              var status  = $(".new_category").find("select[name='status']").val();

              db.collection(category_doc).add({
                  name: name,
                  icon: icon,
                  status: (status === "true")
              })
              .then(function(docRef) {
                  console.log("Document written with ID: ", docRef.id);
              })
              .catch(function(error) {
                  console.error("Error adding document: ", error);
              });

          });

          $(".data_here").delegate(".delete","click",function(){
              var id = $(this).parent().parent().attr("id");
              db.collection(category_doc).doc(id).delete().then(function() {
                  console.log("Document successfully deleted!");
              }).catch(function(error) {
                  console.error("Error removing document: ", error);
              });

              $(".edit_category").slideUp();
              $(".new_category").slideDown();
          });

          $(".data_here").delegate(".edit","click",function(){
              var id      = $(this).parent().parent().attr("id");
              var name    = $(this).parent().siblings(".name").text();
              var icon    = $(this).parent().siblings(".icon").text();
              var status  = $(this).parent().siblings(".status").text();

              $(".new_category").slideUp();
              $(".edit_category").slideDown();

              $(".edit_category").find("input[name='id']").val(id);
              $(".edit_category").find("input[name='name']").val(name);
              $(".edit_category").find("input[name='icon']").val(icon);
              $(".edit_category").find("select[name='status']").val(status);

              console.log({id,name,icon,status});
          });

          $(".edit_category").submit(function(e){
              e.preventDefault();

              var id      = $(".edit_category").find("input[name='id']").val();
              var name    = $(".edit_category").find("input[name='name']").val();
              var icon    = $(".edit_category").find("input[name='icon']").val();
              var status  = $(".edit_category").find("select[name='status']").val();

              db.collection(category_doc).doc(id).set({
                  name: name,
                  icon: icon,
                  status: status
              }, { merge: true });

              $(".edit_category").slideUp();
              $(".new_category").slideDown();


          });

          function new_data(change){
              if($(".data_here").children("#"+change.doc.id).length == 0){
                  $(".data_here").append("<tr id='"+(change.doc.id)+"'>"+
                  "<td>"+(change.doc.id)+"</td>"+
                  "<td class='name'>"+(change.doc.data().name)+"</td>"+
                  "<td class='icon'>"+(change.doc.data().icon)+"</td>"+
                  "<td class='status'>"+(change.doc.data().status)+"</td>"+
                  "<td><button class='btn btn-warning edit'>Edit</button><button class='btn btn-danger delete'>Delete</button></td>"+
                  "</tr>");
              }
          }
          function modified_data(change){
              $(".data_here").children("#"+change.doc.id).children(".name").text(change.doc.data().name);
              $(".data_here").children("#"+change.doc.id).children(".icon").text(change.doc.data().icon);
              $(".data_here").children("#"+change.doc.id).children(".status").text(change.doc.data().status);
          }
          function removed_data(change){
              $(".data_here").children("#"+change.doc.id).remove();
          }

          db.collection(category_doc)
          //.where("name", "==", "some name")
          .onSnapshot(function(snapshot) {
              snapshot.docChanges().forEach(function(change) {
                  if (change.type === "added") {
                      console.log("New: ", change.doc.data());
                      new_data(change);
                  }
                  if (change.type === "modified") {
                      console.log("Modified: ", change.doc.data());
                      modified_data(change);
                  }
                  if (change.type === "removed") {
                      console.log("Removed: ", change.doc.data());
                      removed_data(change);
                  }
              });
          });

      });

  </script>

</body>

</html>
