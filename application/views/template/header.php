<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/img/logo.jpg">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo.jpg">
	<title>FIND YOUR SHOES</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/linericon/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/responsive.css">
	
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">

		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img height="100px" src="<?= base_url() ?>assets/img/<?= $logo->logo ?>" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-7 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item ">
										<a class="nav-link" href="<?= base_url('dashboard'); ?>">Home</a>
									</li>
									<li class="nav-item submenu dropdown">
										<a href="<?= base_url('about'); ?>" class="nav-link dropdown-toggle">About</a>
										</li>
											<li class="nav-item">
												<a class="nav-link"  href="<?= base_url('contact'); ?>">Contact</a>
											</li>
								</ul>
							</div>

							<div class="col-lg-5">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-user" aria-hidden="true"></i>
										</a>
									</li>

									<hr>
									<li class="nav-item">
										<a href="<?= base_url('list_belanja/index'); ?>" class="icons">
											<i class="lnr lnr lnr-cart"><?= $this->cart->total_items() ?></i>
										</a>
									</li>

									<hr>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->