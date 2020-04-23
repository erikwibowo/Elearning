<?php $this->load->view('admin/_partial/top'); ?>
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Data Konfigurasi Email</h1>
         <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Konfigurasi Email</a></div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <a href="" class="btn btn-success"  data-toggle="modal" data-target="#exampleModal" title="Tambah data"><i class="fa fa-plus"></i> Tambah</a>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-striped table-hover" id="table-1">
                        <thead>
                           <tr>
                              <th class="text-center">
                                 #
                              </th>
                              <th>Nama Pengguna</th>
                              <th>Alamat Email</th>
                              <th>Password</th>
                              <th>Protocol</th>
                              <th>Host</th>
                              <th>Port</th>
                              <th>Status</th>
                              <th>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; foreach ($data as $x) { ?>
                           <tr>
                              <td><?= $no++ ?></td>
                              <td><?= x($x->name) ?></td>
                              <td><?= x($x->email) ?></td>
                              <td><?= x($x->password) ?></td>
                              <td><?= x($x->protocol) ?></td>
                              <td><?= x($x->host) ?></td>
                              <td><?= x($x->port) ?></td>
                              <td>
                                 <?php if ($x->aktif == 0){ ?>
                                    <div class="badge badge-danger">Nonaktif</div>
                                 <?php }else{ ?>
                                    <div class="badge badge-success">Aktif</div>
                                 <?php } ?>
                              </td>
                              <td>
                                 <div class="btn-group">
                                    <a style="color: white" data-toggle="tooltip" title="Lihat/Edit Data" class="btn btn-sm btn-info btn-edit" data-id="<?= $x->id_email_config ?>"><i class="fa fa-eye"></i></a>

                                    <?php if ($x->aktif == 0){ ?>
                                       <a data-toggle="tooltip" title="Aktifkan Data" href="#" class="btn btn-sm btn-warning" data-confirm="Aktifkan data|Apakah anda yakin akan mengaktifkan <b><?= x($x->email) ?></b>?" data-confirm-yes="window.location = '<?= site_url('admin/admin/aktifkan/'.$x->id_email_config) ?>'"><i class="fa fa-unlock"></i></a>
                                    <?php }else{ ?>
                                       <a data-toggle="tooltip" title="Nonaktifkan Data" href="#" class="btn btn-sm btn-warning" data-confirm="Non aktifkan data|Apakah anda yakin akan menonaktifkan <b><?= x($x->email) ?></b>?" data-confirm-yes="window.location = '<?= site_url('admin/admin/non-aktifkan/'.$x->id_email_config) ?>'"><i class="fa fa-lock"></i></a>
                                    <?php } ?>

                                    <a data-toggle="tooltip" title="Hapus Data" href="#" class="btn btn-sm btn-danger" data-confirm="Hapus data|Apakah anda yakin akan menghapus <b><?= x($x->email) ?></b>?" data-confirm-yes="window.location = '<?= site_url('admin/admin/delete/'.$x->id_email_config) ?>'"><i class="fa fa-trash"></i></a>
                                 </div>
                              </td>
                           </tr>
                        <?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</div>
<?php $this->load->view('admin/_partial/bottom'); ?>