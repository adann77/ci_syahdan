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
  <!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
</head>

<body>
    <div class="container">
        <div class="card bg-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/cek_regis'); ?>">
                            <div class="form-group">
                                <input type="text" name="nama" value="<? set_value('nama');?>" 
                                class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">
                                <?=form_error('nama', '<small class="text-danger pl-3">' , '</small>');?>
                            </div>

                            <div class="form-group">
                                <input type="text" name="email" value="<? set_value('email');?>"
                                class="form-control form-control-user" id="email" placeholder="Alamat email">
                                <?=form_error('email', '<small class="text-danger pl-3">' , '</small>');?>

                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" value="<? set_value('password');?>"  
                                    class="form-control form-control-user" id="password1" name="password1" placeholder="Kata Sandi">
                                    <?=form_error('password', '<small class="text-danger pl-3">' , '</small>');?>

                                </div>
                                <div class="col-sm-6">
                                    <input type="password"  value="<? set_value('password');?>" 
                                    class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi kata sandi">
                                    <?=form_error('password', '<small class="text-danger pl-3">' , '</small>');?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftar Akun
                            </button>
                        </form>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('Auth'); ?>">Sudah Punya akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

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
