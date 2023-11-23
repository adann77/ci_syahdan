
<!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/'); ?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https:/bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https:/bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">BPF TI 2023</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

   

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

        <a href="<?= site_url('Auth/logout') ?>" >Logout</a>


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="" data-bs-toggle="dropdown">
            <img src="<?= base_url('assets/'); ?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Syahdan Aqilla</span>
          </a><!-- End Profile Iamge Icon -->


      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <div class="sidebar-heading">
        Menu
      </div>
      

      <li class="nav-item">
    <a class="nav-link collapsed" href="<?= site_url('Mahasiswa/') ?>">
        <i class="fas fa-fw fa-users"></i>
        <span>Mahasiswa</span>
    </a>
    </li>
<?php if ($user['role'] == 'admin') { ?>
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= site_url('Mahasiswa/') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Mahasiswa</span>
        </a>
    </li>
<?php } else { ?>
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= site_url('Prodi/') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Prodi</span>
        </a>
    </li>
<?php } ?>

<li class="nav-item">
    <a class="nav-link collapsed" href="<?= site_url('Profil/') ?>">
        <i class="fas fa-fw fa-users"></i>
        <span>Profil</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="<?= site_url('Auth/logout') ?>">
        <i class="fas fa-fw fa-users"></i>
        <span>Logout</span>
    </a>
</li>


    <?php


?>    

  </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    
     