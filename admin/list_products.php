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
    .edit_product{
          display: none;
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
            <h1 class="h3 mb-0 text-gray-800">Products</h1>
            <!--
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            -->
          </div>

          <?= $display_message; ?>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Products</h6>


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


                <form class="new_product">
                  <input class="form-control" required name="name" type="text" placeholder="Name" /><br/>
                  <input class="form-control" required name="image" type="text" placeholder="Image" /><br/>
                  <input class="form-control" required name="price" type="number"placeholder="Price" /><br/>
                  <select class="form-control" required name="category">

                  </select><br/>
                  <select class="form-control" required name="status">
                      <option value="">Status</option>
                      <option value="true">True</option>
                      <option value="false">False</option>
                  </select><br/>
                  <button class="btn btn-success">Add New Product</button><br/>
              </form>

              <form class="edit_product">
                  <input class="form-control" required name="id" type="hidden"/><br/>
                  <input class="form-control" required name="name" type="text" placeholder="Name" /><br/>
                  <input class="form-control" required name="image" type="text" placeholder="Image" /><br/>
                  <input class="form-control" required name="price" type="number"placeholder="Price" /><br/>
                  <select class="form-control" required name="category">

                  </select><br/>
                  <select class="form-control" required name="status">
                      <option value="">Status</option>
                      <option value="true">True</option>
                      <option value="false">False</option>
                  </select><br/>
                  <button class="btn btn-success">Edit Product</button><br/>
              </form>
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Firebase Key</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Price</th>
                          <th>Category</th>
                          <th>Status</th>
                          <th>Options</th>
                      </tr>
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
                var product_doc     = "products";
                var category_doc    = "categories";

                var db = firebase.firestore();

                $(".new_product").submit(function(e){
                    e.preventDefault();

                    var name    = $(".new_product").find("input[name='name']").val();
                    var image   = $(".new_product").find("input[name='image']").val();
                    var price   = $(".new_product").find("input[name='price']").val();
                    var category= $(".new_product").find("select[name='category']").val();
                    var status  = $(".new_product").find("select[name='status']").val();

                    db.collection(product_doc).add({
                        name: name,
                        image: image,
                        price: price,
                        category: category,
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
                    db.collection(product_doc).doc(id).delete().then(function() {
                        console.log("Document successfully deleted!");
                    }).catch(function(error) {
                        console.error("Error removing document: ", error);
                    });
                    $(".edit_product").slideUp();
                    $(".new_product").slideDown();
                });

                $(".data_here").delegate(".edit","click",function(){
                    var id          = $(this).parent().parent().attr("id");
                    var name        = $(this).parent().siblings(".name").text();
                    var image       = $(this).parent().siblings(".image").text();
                    var price       = $(this).parent().siblings(".price").text();
                    var category    = $(this).parent().siblings(".category").text();
                    var status      = $(this).parent().siblings(".status").text();

                    $(".new_product").slideUp();
                    $(".edit_product").slideDown();

                    $(".edit_product").find("input[name='id']").val(id);
                    $(".edit_product").find("input[name='name']").val(name);
                    $(".edit_product").find("input[name='image']").val(image);
                    $(".edit_product").find("input[name='price']").val(price);
                    $(".edit_product").find("select[name='category']").val(category);
                    $(".edit_product").find("select[name='status']").val(status);

                    console.log({id,name,image,price,category,status});
                });

                $(".edit_product").submit(function(e){
                    e.preventDefault();
                    var id      = $(".edit_product").find("input[name='id']").val();
                    var name    = $(".edit_product").find("input[name='name']").val();
                    var image   = $(".edit_product").find("input[name='image']").val();
                    var price   = $(".edit_product").find("input[name='price']").val();
                    var category= $(".edit_product").find("select[name='category']").val();
                    var status  = $(".edit_product").find("select[name='status']").val();
                    db.collection(product_doc).doc(id).set({
                        name: name,
                        image: image,
                        price: price,
                        category: category,
                        status: status
                    }, { merge: true });
                    $(".edit_product").slideUp();
                    $(".new_product").slideDown();
                });

                $(".filter_category").change(function(){
                    var category = null;
                    if($(this).val().length > 0){
                        category = $(this).val();
                    }
                    show_products(category);
                });

                function new_data(change){
                    if($(".data_here").children("#"+change.doc.id).length == 0){
                        $(".data_here").append("<tr id='"+(change.doc.id)+"'>"+
                        "<td>"+(change.doc.id)+"</td>"+
                        "<td class='name'>"+(change.doc.data().name)+"</td>"+
                        "<td class='image'>"+(change.doc.data().image)+"</td>"+
                        "<td class='price'>"+(change.doc.data().price)+"</td>"+
                        "<td class='category'>"+(change.doc.data().category)+"</td>"+
                        "<td class='status'>"+(change.doc.data().status)+"</td>"+
                        "<td><button class='btn btn-warning btn-xs edit'>Edit</button><button class='btn btn-danger delete'>Delete</button></td>"+
                        "</tr>");
                    }
                }
                function modified_data(change){
                    $(".data_here").children("#"+change.doc.id).children(".name").text(change.doc.data().name);
                    $(".data_here").children("#"+change.doc.id).children(".image").text(change.doc.data().image);
                    $(".data_here").children("#"+change.doc.id).children(".price").text(change.doc.data().price);
                    $(".data_here").children("#"+change.doc.id).children(".category").text(change.doc.data().category);
                    $(".data_here").children("#"+change.doc.id).children(".status").text(change.doc.data().status);
                }
                function removed_data(change){
                    $(".data_here").children("#"+change.doc.id).remove();
                }

                function show_products(category){

                    $(".data_here").empty();

                    if(category == null){
                        db.collection(product_doc)
                        //.where("category", "==", category)
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
                    }else{
                        db.collection(product_doc)
                        .where("category", "==", category)
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
                    }

                }


                show_products(null);

                //Category Names
                db.collection(category_doc)
                //.where("status", "==", true)
                .onSnapshot(function(snapshot) {

                    console.log(snapshot.doc);

                    snapshot.docChanges().forEach(function(change) {
                        if (change.type === "added") {
                            console.log("New: ", change.doc.data());
                            $("select[name='category'], .filter_category optgroup")
                            .append("<option value='"+(change.doc.id)+"'>"+(change.doc.data().name)+"</option>");
                        }
                        if (change.type === "modified") {
                            console.log("Modified: ", change.doc.data());
                            $("select[name='category'], .filter_category optgroup").children("option[value='"+(change.doc.id)+"']").text(change.doc.data().name);
                        }
                        if (change.type === "removed") {
                            console.log("Removed: ", change.doc.data());
                            $("select[name='category'], .filter_category optgroup").children("option[value='"+(change.doc.id)+"']").remove();
                        }
                    });
                });


            });

        </script>



</body>

</html>
