<!-- General JS Scripts -->
  <script src="<?= base_url() ?>assets/admin/modules/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/modules/popper.js"></script>
  <script src="<?= base_url() ?>assets/admin/modules/tooltip.js"></script>
  <script src="<?= base_url() ?>assets/admin/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/modules/moment.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="<?= base_url() ?>assets/admin/modules/jquery.sparkline.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/modules/chart.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/modules/summernote/summernote-bs4.js"></script>
  <script src="<?= base_url() ?>assets/admin/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/modules/datatables/datatables.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/modules/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/modules/izitoast/js/iziToast.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url() ?>assets/admin/js/page/index.js"></script>
  <script src="<?= base_url() ?>assets/admin/js/page/modules-datatables.js"></script>
  <script src="<?= base_url() ?>assets/admin/js/page/modules-toastr.js"></script>

  <!-- Template JS File -->
  <script src="<?= base_url() ?>assets/admin/js/scripts.js"></script>
  <script src="<?= base_url() ?>assets/admin/js/custom.js"></script>
  <script type="text/javascript">
    <?php if (!empty($this->session->flashdata('notif'))) {
      if ($this->session->flashdata('type') == "s") { ?>
        iziToast.success({
          title: 'Berhasil',
          message: '<?= $this->session->flashdata('notif'); ?>',
          position: 'topRight'
        });
    <?php }else{ ?>
        iziToast.error({
          title: 'Gagal',
          message: '<?= $this->session->flashdata('notif'); ?>',
          position: 'topRight'
        });
    <?php } } ?>
  </script>
</body>
</html>