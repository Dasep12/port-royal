

	<!--================Login Box Area =================-->
	<section class="login_box_area p_120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?= base_url() ?>/assets/img/login.jpg" alt="">
						<div class="hover">
							<h4>Sudah Punya Akun?</h4>
							
							<a class="main_btn" href="<?= base_url('auth') ?>">Login</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner reg_form">
						<h3>Create an Account</h3>
						<form class="row login_form" action="<?= base_url('register/tambahUser') ?>" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="nama" placeholder="Name">
								<?= form_error('nama','<div class="text-danger small ml-0 mb-0 text-left">', '</div>') ?>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="username" placeholder="Username">
								<?= form_error('username','<div class="text-danger small ml-0 mb-0 text-left">', '</div>') ?>
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
								<?= form_error('email','<div class="text-danger small ml-0 mb-0 text-left">', '</div>') ?>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="password" name="password" placeholder="Password">
								<?= form_error('password','<div class="text-danger small ml-0 mb-0 text-left">', '</div>') ?>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="pass" name="pass" placeholder="Confirm password">
								<?= form_error('pass','<div class="text-danger small ml-0 mb-0 text-left">', '</div>') ?>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="btn submit_btn">Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->