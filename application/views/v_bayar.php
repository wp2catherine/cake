<div class="row">
	<div class="col-sm-6">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Store Account Number</h3>
			</div>
			<div class="card-body">
				<p>Please Transfer Money To The Account Number Below : <h1 class="text-primary">Rp. <?= number_format($pesanan->total_bayar, 0) ?>.-</h1>
				</p><br>
				<table class="table">
					<tr>
						<th>Bank</th>
						<th>No Rekening</th>
						<th>Name</th>
					</tr>
					<?php foreach ($rekening as $key => $value) { ?>
						<tr>
							<td><?= $value->nama_bank ?></td>
							<td><?= $value->no_rek ?></td>
							<td><?= $value->atas_nama ?></td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Upload Proof of Payment</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php
			echo form_open_multipart('pesanan_saya/bayar/' . $pesanan->id_transaksi);
			?>
			<div class="card-body">
				<div class="form-group">
					<label>Name</label>
					<input name="atas_nama" class="form-control" placeholder="Name" required>
				</div>
				<div class="form-group">
					<label>Bank Name</label>
					<input name="nama_bank" class="form-control" placeholder="Bank Name" required>
				</div>
				<div class="form-group">
					<label>No Rekening</label>
					<input name="no_rek" class="form-control" placeholder="No Rekening" required>
				</div>

				<div class="form-group">
					<label for="exampleInputFile">Proof of Payment</label>
					<input type="file" name="bukti_bayar" class="form-control" required>
				</div>

			</div>
			<!-- /.card-body -->

			<div class="card-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
				<a href="<?= base_url('pesanan_saya') ?>" class="btn btn-success">Back</a>
			</div>
			<?php echo form_close() ?>
		</div>
	</div>
</div>
