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
				<form method="POST" action="<?= site_url('admin/slider/insert') ?>" enctype="multipart/form-data">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Foto Slider</label>
						<div class="col-sm-10">
							<input type="file" name="foto" required class="form-control" placeholder="Foto Slider">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Judul Slider</label>
						<div class="col-sm-10">
							<input type="text" name="judul" required class="form-control" placeholder="Judul Slider">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Subjudul Slider</label>
						<div class="col-sm-10">
							<input type="text" name="subjudul" required class="form-control" placeholder="Subjudul Slider">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Link Slider</label>
						<div class="col-sm-10">
							<input type="text" name="link" required class="form-control" placeholder="Link Slider">
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
                url  : "<?= site_url('admin/slider/data') ?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $('#loading').modal('hide');
                    $("#judul").val(data.judul);
                    $("#subjudul").val(data.subjudul);
                    $("#link").val(data.link);
                    $("#id_slider").val(data.id_slider);
                    $("#foto").attr("src", data.foto);
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
				<form method="POST" action="<?= site_url('admin/slider/update') ?>" enctype="multipart/form-data">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Foto Slider</label>
						<div class="col-sm-10">
                            <img src="" id="foto" width="150px"><br>
                            <input type="file" name="foto" class="form-control" placeholder="Foto Admin">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Judul Slider</label>
						<div class="col-sm-10">
							<input type="text" id="judul" name="judul" required class="form-control" placeholder="Judul Slider">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Subjudul Slider</label>
						<div class="col-sm-10">
							<input type="text" id="subjudul" name="subjudul" required class="form-control" placeholder="Subjudul Slider">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Link Slider</label>
						<div class="col-sm-10">
							<input type="text" id="link" name="link" required class="form-control" placeholder="Link Slider">
							<input type="hidden" name="id_slider" id="id_slider">
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
