<!-- Modal Tambah-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="<?= site_url('admin/konfigurasi-email/insert') ?>" enctype="multipart/form-data">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nama Pengguna</label>
						<div class="col-sm-10">
							<input type="text" name="name" required class="form-control" placeholder="Nama Pengguna">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-10">
							<input type="email" name="email" required class="form-control" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password" name="password" required class="form-control" placeholder="Password">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Protocol</label>
						<div class="col-sm-10">
							<input type="text" name="protocol" required class="form-control" placeholder="Protocol">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Host</label>
						<div class="col-sm-10">
							<input type="text" name="host" required class="form-control" placeholder="Host">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Port</label>
						<div class="col-sm-10">
							<input type="text" name="port" required class="form-control" placeholder="Port">
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
				<button type="submit" class="btn btn-primary">SIMPAN</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- End modal tambah -->

<script type="text/javascript">
    $(document).ready(function(){
        $(".btn-edit").on("click", function(){
            var id = $(this).attr('data-id');
            $('#loading').modal({backdrop: 'static', keyboard: false});
            $('#loading').modal('show');
            $.ajax({
                type : "POST",
                url  : "<?= site_url('admin/konfigurasi-email/data') ?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $('#loading').modal('hide');
                    $("#name").val(data.name);
                    $("#email").val(data.email);
                    $("#password").val(data.password);
                    $("#password").val(data.password);
                    $("#protocol").val(data.protocol);
                    $("#host").val(data.host);
                    $("#port").val(data.port);
                    $("#id_email_config").val(data.id_email_config);
                    $('#modal-edit').modal({backdrop: 'static', keyboard: false});
                    $('#modal-edit').modal('show');
                }
            });
        });
    });
</script>

<!-- Modal Edit-->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="<?= site_url('admin/konfigurasi-email/update') ?>" enctype="multipart/form-data">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nama Pengguna</label>
						<div class="col-sm-10">
							<input type="text" id="name" name="name" required class="form-control" placeholder="Nama Pengguna">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-10">
							<input type="email" id="email" name="email" required class="form-control" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="text" id="password" name="password" required class="form-control" placeholder="Password">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Protocol</label>
						<div class="col-sm-10">
							<input type="text" id="protocol" name="protocol" required class="form-control" placeholder="Protocol">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Host</label>
						<div class="col-sm-10">
							<input type="text" id="host" name="host" required class="form-control" placeholder="Host">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Port</label>
						<div class="col-sm-10">
							<input type="text" id="port" name="port" required class="form-control" placeholder="Port">
							<input type="hidden" name="id_email_config" id="id_email_config">
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
				<button type="submit" class="btn btn-primary">SIMPAN</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- End modal edit -->
