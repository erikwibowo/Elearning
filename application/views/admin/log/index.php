<?php $this->load->view('admin/_partial/top'); ?>
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Data Log</h1>
         <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Log</a></div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-striped table-hover" id="table-1">
                        <thead>
                           <tr>
                              <th class="text-center">
                                 #
                              </th>
                              <th>IP Address</th>
                              <th>Browser</th>
                              <th>Keterangan</th>
                              <th>URL</th>
                              <th>Tanggal</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; foreach ($data as $x) { ?>
                           <tr>
                              <td><?= $no++ ?></td>
                              <td><?= x($x->ip_address) ?></td>
                              <td><?= x($x->browser) ?></td>
                              <td><?= x($x->keterangan) ?></td>
                              <td><?= x($x->url) ?></td>
                              <td><?= x($x->dibuat) ?></td>
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