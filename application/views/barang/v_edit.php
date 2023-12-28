<div class="col-md-12">
	<!-- general form elements disabled -->
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Form Edit Product</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<?php
			//notifikasi form kosong
			echo validation_errors('<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h5><i class="icon fas fa-info"></i>', '</h5> </div>');
			//notifikasi gagal upload gambar
			if (isset($error_upload)) {
				echo '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5><i class="icon fas fa-info"></i>' . $error_upload . '</h5> </div>';
			}

			echo form_open_multipart('barang/edit/' . $barang->id_barang) ?>
			<div class="form-group">
				<label>Product</label>
				<input name="nama_barang" class="form-control" placeholder="Product" value="<?= $barang->nama_barang  ?>">
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Category</label>
						<select name="id_kategori" class="form-control">
							<option value="<?= $barang->id_kategori ?>"><?= $barang->nama_kategori ?></option>
							<?php foreach ($kategori as $key => $value) { ?>
								<option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Price</label>
						<input name="harga" class="form-control" placeholder="Price" value="<?= $barang->harga ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Weight (Gr)</label>
						<input type="number" name="berat" min="0" class="form-control" placeholder="Weight" value="<?= $barang->berat ?>">
					</div>
				</div>
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea name="deskripsi" class="form-control" rows="5" placeholder="Description.."><?= $barang->deskripsi ?></textarea>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label>Foto </label>
						<input type="file" name="gambar" class="form-control" id="preview_gambar">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" id="gambar_load" width="400px">
					</div>
				</div>
			</div>

			<div class="form-group">
			<a href="<?= base_url('barang') ?>" class="btn btn-secondary btn-sm">Back</a>
				<button type="submit" class="btn btn-primary btn-sm">Submit</button>
			</div>
			<?php echo form_close() ?>
		</div>
	</div>
</div>

<script>
	function bacaGambar(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#gambar_load').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$("#preview_gambar").change(function() {
		bacaGambar(this);
	});
</script>
