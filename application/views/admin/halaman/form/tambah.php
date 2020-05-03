<?php $this->load->view('admin/_partial/top'); ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/admin/modules/summernote/summernote-bs4.css">
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Tulis Halaman</h1>
         <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="<?= site_url('admin/halaman/data') ?>">Halaman</a></div>
            <div class="breadcrumb-item active"><a href="#">Tulis Halaman</a></div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <a style="color: white" onclick="history.back()" class="btn btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-12">
                        <form method="POST" action="<?= site_url('admin/halaman/insert') ?>" enctype="multipart/form-data">
                           <div class="form-group">
                              <label>Judul</label>
                              <input type="text" name="judul_halaman" required class="form-control" placeholder="Ketikkan judul halaman">
                           </div>
                           <div class="form-group">
                              <label>Header Halaman</label>
                              <input type="file" name="foto" required class="form-control" placeholder="Ketikkan judul halaman">
                           </div>
                           <div class="form-group">
                              <label>Isi Halaman</label>
                              <textarea class="summernote" name="isi_halaman"></textarea>
                           </div>
                           <div class="form-group">
                              <label>Meta Halaman</label>
                              <textarea class="form-control" name="meta_halaman" required></textarea>
                           </div>
                           <div class="form-group">
                             <button onclick="history.back()" class="btn btn-danger">Batal</button>
                             <button type="submit" class="btn btn-info">Simpan</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</div>
<?php $this->load->view('admin/_partial/bottom'); ?>
<script src="<?= base_url() ?>assets/admin/modules/summernote/summernote-bs4.js"></script>
<script>
   $('.summernote').summernote({
      placeholder: 'Ketikkan isi halaman...',
      tabsize: 2,
      height: 500
   });
</script>