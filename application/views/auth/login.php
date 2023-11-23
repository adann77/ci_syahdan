<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/')?>assets/img/favicon.png" rel="icon">
  <link href="<?= base_url('assets/')?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?= base_url('assets/')?>https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/')?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/')?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/')?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/')?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url('assets/')?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url('assets/')?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url('assets/')?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/')?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">

             

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                  <div class="text-center">
                    <h4 class="h4 text-gray-900-mb-4">Halaman Login</h4>
                  </div>

                  <?= $this->session->flashdata('message');?>

                  <form class="user" method="post" action="<?= base_url('auth'); ?>" 
                  class="row g-3 needs-validation" novalidate >

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                       
                        <input type="text" name="email" class="form-control" value="<?=set_value('email');?>"
                         id="email" name="email" placeholder="masukkan alamat email">
                         <?=form_error('email','<small class="text-danger pl-3">','</small>');?>
                       
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" class="form-control" value="<?=set_value('password');?>" name="password" id="password" 
                      placeholder="password">
                      <?=form_error('password','<small class="text-danger pl-3">','</small>');?>
                    </div>

                    
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Login
            </button>
            </form>
                    </div>
                    <div class="text-center">
                      <p class="small" href="forgot-password.html">Lupa Password</a></p>
                    </div>
                    <div class="text-center">
                    <div class="col-12">
                      <p class="small mb-0"><a href="<?=base_url('auth/registrasi'); ?>">Buat akun</a></p>
                    </div>
                  

                </div>
              </div>

             
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/')?>vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/')?>vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url('assets/')?>vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url('assets/')?>vendor/quill/quill.min.js"></script>
  <script src="<?= base_url('assets/')?>vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url('assets/')?>vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url('assets/')?>vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/')?>js/main.js"></script>

</body>

</html>