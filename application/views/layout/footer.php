<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>BPF TI 2023</span></strong>. All Rights Reserved
    </div>
</footer><!-- End Footer -->
 
<!-- Vendor CSS Files -->
<link href="<?php echo base_url('assets/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="<?php echo base_url('assets/'); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/'); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
<link href="<?php echo base_url('assets/'); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
<link href="<?php echo base_url('assets/'); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="<?php echo base_url('assets/'); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="<?php echo base_url('assets/'); ?>assets/css/style.css" rel="stylesheet">

<script>
  $(document).ready(function(){
    $('.custom-file-input').on('change', function(){
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
  });
</script>
