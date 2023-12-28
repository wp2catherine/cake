<div class="col-lg-3 col-6">
	<!-- small box -->
	<div class="small-box bg-info">
		<div class="inner">
			<h3><?= $total_pesanan_masuk ?></h3>
			<p>Total Order</p>
		</div>
		<div class="icon">
			<i class="ion ion-bag"></i>
		</div>
		<a href="<?= base_url('admin/pesanan_masuk')  ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
	</div>
</div>

<div class="col-lg-3 col-6">
	<!-- small box -->
	<div class="small-box bg-success">
		<div class="inner">
			<h3><?= $total_barang ?></h3>
			<p>Cake & Bakery</p>
		</div>
		<div class="icon">
			<i class="fas  fa-birthday-cake"></i>
		</div>
		<a href="<?= base_url('barang') ?>" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
	</div>
</div>

<div class="col-lg-3 col-6">
	<!-- small box -->
	<div class="small-box bg-warning">
		<div class="inner">
			<h3><?= $total_pelanggan ?></h3>
			<p>Member</p>
		</div>
		<a href="<?= base_url('pelanggan') ?>" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
		<div class="icon">
			<i class="fas fa-users"></i>
		</div>
		<a href="#" class="small-box-footer"></a>
	</div>
</div>

<div class="col-lg-3 col-6">
	<div class="small-box bg-danger">
		<div class="inner">
			<h3><?= $total_kategori ?></h3>
			<p>Category</p>
		</div>
		<div class="icon">
			<i class="fas fa-list"></i>
		</div>
		<a href="<?= base_url('kategori') ?>" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
	</div>
</div>
