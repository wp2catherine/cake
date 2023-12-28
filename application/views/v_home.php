<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="<?= base_url() ?>assets/slider/Eclair.jpg">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?= base_url() ?>assets/slider/hero-bg-3.jpg">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?= base_url() ?>assets/slider/hero-bg-2.jpg">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?= base_url() ?>assets/slider/dd.jpg">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
</br></br></br>

<div class="container">
    <div class="row">
      <div class="col-sm-6"> 
        <img class="img-thumbnail" src="https://t3.ftcdn.net/jpg/01/76/33/14/360_F_176331484_nLHY9EoW0ETwPZaS9OBXPGbCJhT70GZe.jpg" alt="images" style="width:120%; height: 100%;">
      </div>
      <div class="col-sm-6" style="text-align: justify;">
        <h3><b>We are Daily Fresh Bakery</b></h3>
        <p>Daily Fresh Bakery provides various kinds of cakes, breads and desserts. Not only that, we also provide cakes, bread or desserts with lots of toppings according to customer tastes.</p>
        You can order cake, bread or dessert anywhere and anytime, we will serve you well. without having to come directly to the store you can order and view our products.
      </div>
    </div>
  </div>
  </br></br>


<section class="work">
  <div class="container">
    <h3>Why Daily Fresh Bakery?</h3>
    <div class="row">
      <div class="col-sm-6">
        <img src="https://www.tastingtable.com/img/gallery/30-types-of-cake-explained/l-intro-1658850950.jpg" class="align-self-center mr-3" alt="image" style="width:100%">
          <div id="mi" class="media-body" style="text-align: justify; padding: 10px;">
            <h5 class="mt-0">Home Delivery</h5>
            <p class="mb-0">Can delivery from anywhere and anytime whenever we want, packed using a box that will not damage the cake</p>
          </div>
      </div>

      <div class="col-sm-6">
        <img src="https://wallpaperaccess.com/full/1462194.jpg" class="align-self-center mr-3" alt="image" style="width:100%">
          <div class="media-body" style="text-align: justify; padding: 10px;">
            <h5 class="mt-0">Best Price</h5>
            <p class="mb-0">The price is very affordable but the quality and taste are guaranteed, If the order does not match, it can be returned within 24 hours</p>
          </div>
      </div>
    </div>
  </div>
</section>
</br></br></br>

	<div class="container">
    	<h2 style="text-align:center">Our Product</h2>
  	<div class="row">

<div class="card card-solid">
	<div class="card-body pb-0">
		<div class="row">
			<?php foreach ($barang as $key => $value) { ?>
				<div class="col-sm-4">
					<?php
					echo form_open('belanja/add');
					echo form_hidden('id', $value->id_barang);
					echo form_hidden('qty', 1);
					echo form_hidden('price', $value->harga);
					echo form_hidden('name', $value->nama_barang);
					echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
					?>
					<div class="card bg-light">
						<div class="card-header text-muted border-bottom-0">
							<h2 class="lead"><b><?= $value->nama_barang ?></b></h2>
							<p class="text-muted text-sm"><b>Kategori : </b><?= $value->nama_kategori ?></p>
						</div>
						<div class="card-body pt-0">
							<div class="row">
								<div class="col-12 text-center">
									<img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" class="img-fluid" width="250px">
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="row">
								<div class="col-sm-6">
									<div class="text-left">
										<h4><span class="badge bg-primary">Rp. <?= number_format($value->harga, 0) ?></span></h4>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="text-right">
										<a href="<?= base_url('home/detail_barang/' . $value->id_barang)  ?>" class="btn btn-sm btn-success">
											<i class="fas fa-eye"></i>
										</a>
										<button type="submit" class="btn btn-sm btn-primary swalDefaultSuccess">
											<i class="fas fa-cart-plus"> Add</i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php echo form_close(); ?>
				</div>
			<?php } ?>

		</div>
	</div>
</div>

<script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript">
	$(function() {
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 8000
		});

		$('.swalDefaultSuccess').click(function() {
			Toast.fire({
				icon: 'success',
				title: 'Item Added To Cart Successfully !!!'
			})
		});
	});
</script>
