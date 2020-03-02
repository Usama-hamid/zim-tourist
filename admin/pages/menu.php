<?php
//die(json_encode($_SESSION));
$menu = '
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">'.$title.'</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="dashboard.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
      <a class="nav-link" href="profile.php">
        <i class="fas fa-fw fa-user"></i>
        <span>Profile</span></a>
    </li>';

    if($LOGIN_TYPE == "admin"){
      $menu .= '
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="company.php">
          <i class="fas fa-fw fa-building"></i>
          <span>Company Profile</span></a>
      </li>';
    }

    if($LOGIN_TYPE == "super"){
      /*
      $menu .= '
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="list_companies.php">
          <i class="fas fa-building"></i>
          <span>Companies</span></a>
      </li>';
      */
    }



    if($LOGIN_TYPE == "super" || $LOGIN_TYPE == "admin" || $LOGIN_TYPE == "user"){

      /*
      $menu .= '<hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="list_hotels.php">
          <i class="fas fa-bed"></i>
          <span>Hotels</span></a>
      </li>';

      $menu .= '<hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="list_bookings.php">
          <i class="fas fa-check"></i>
          <span>Hotel Bookings</span></a>
      </li>';
      */


      $menu .= '<hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="list_categories.php">
          <i class="fas fa-list"></i>
          <span>Categories</span></a>
      </li>';

      $menu .= '<hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="list_products.php">
          <i class="fas fa-list"></i>
          <span>Products</span></a>
      </li>';

    }

    if($LOGIN_TYPE == "super" || $LOGIN_TYPE == "admin"){

      $menu .= '<hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="list_users.php">
          <i class="fas fa-users"></i>
          <span>Users & Permissions</span></a>
      </li>';

    }




    $menu .= '<hr class="sidebar-divider">
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-power-off"></i>
        <span>Logout</span></a>
    </li>';

  $menu .= '
  <hr class="sidebar-divider d-none d-md-block ">
  <br>
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline "  >
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>';




  $menu .= '</ul>';

?>
