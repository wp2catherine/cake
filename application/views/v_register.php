 <!-- Section: Design Block -->
 <section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Sign Up Now</h2>
			<?php
					echo validation_errors('<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>', '</div>');
					if ($this->session->flashdata('pesan')) {
						echo '<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h5><i class="icon fas fa-check"></i> Sukses!</h5>';
						echo $this->session->flashdata('pesan');
						echo '</div>';
					}

					echo form_open('pelanggan/register'); ?>


            <form id="formAuthentication" class="row" method="POST" action="">
			<!-- Name input -->
			  <div class="form-outline">
                    <input type="text" name="nama_pelanggan" value="<?= set_value('nama_pelanggan') ?>" class="form-control" required autofocus/>
                    <label class="form-label" for="form3Example1">Name</label>
                  </div>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control" required autofocus />
                <label class="form-label" for="form3Example3">Email Address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control" required/>
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <!-- Password Confirmation -->
              <div class="form-outline mb-4">
                <input type="password" name="ulangi_password" value="<?= set_value('ulangi_password') ?>" class="form-control" required/>
                <label class="form-label" for="form3Example4">Password Confirmation</label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Sign up
              </button>
			  <a href="<?= base_url('pelanggan/login') ?>" class="text-center">I Have an Account...!</a>
            </form>
			<?php echo form_close() ?>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/096.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->


