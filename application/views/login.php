<!--================Login Box Area =================-->
	<section class="login_box_area p_120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?= base_url() ?>/assets/img/login.jpg" alt="">
						<div class="hover">
							<h4>Baru di sini?</h4>
							<a class="main_btn" href="<?= base_url('register') ?>">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
					
						<h3>Log in to enter</h3>
						<?= $this->session->flashdata('pesan'); ?>
						<form class="row login_form" action="<?= base_url('auth/login') ?>" method="post" >
							<div class="col-md-12 form-group">
								<input type="text" autocomplete="off" class="form-control" id="name" name="username" placeholder="Username">
								<?= form_error('username','<div class="text-danger small text-left">','</div>') ?>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" autocomplete="off" class="form-control" id="name" name="password" placeholder="Password">
								<?= form_error('password','<div class="text-danger small text-left">','</div>') ?>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="btn submit_btn">Log In</button>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->