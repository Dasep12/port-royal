<?php $tentang = $this->db->get("about")->row(); ?>
	<!--================ start footer Area  =================-->
	<center>
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
		
				<div class="col-lg-3  col-md-6 col-sm-6 ml-5">
					<div class="single-footer-widget">
						<h6 class="footer_title">Tentang Kami</h6>
						<p><?= $tentang->about ?> </p>
					</div>
				</div>
			
				<div class="col-lg-3 col-md-6 col-sm-6 ml-5">
					<div class="single-footer-widget instafeed">
						<h6 class="footer_title">Instagram Feed</h6>
						<ul class="list instafeed d-flex flex-wrap">
						<?php foreach($gambar as $gmb) : ?>
							<li>
								<img src="<?= base_url() ?>/assets/img/igFeed/<?= $gmb->img1;?>" >
							</li>
							<li>
								<img src="<?= base_url() ?>/assets/img/igFeed/<?= $gmb->img2;?>" >
							</li>
							<li>
								<img src="<?= base_url() ?>/assets/img/igFeed/<?= $gmb->img3;?>" >
							</li>
							<li>
								<img src="<?= base_url() ?>/assets/img/igFeed/<?= $gmb->img4;?>" >
							</li>
							<li>
								<img src="<?= base_url() ?>/assets/img/igFeed/<?= $gmb->img5;?>" >
							</li>
							<li>
								<img src="<?= base_url() ?>/assets/img/igFeed/<?= $gmb->img6;?>" >
							</li>
							<li>
								<img src="<?= base_url() ?>/assets/img/igFeed/<?= $gmb->img7;?>" >
							</li>
							<li>
								<img src="<?= base_url() ?>/assets/img/igFeed/<?= $gmb->img8;?>" >
							</li>
						<?php endforeach ?>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 ml-5">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Follow Us</h6>
						<p>Let us be social</p>
						<div class="f_social">
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-dribbble"></i>
							</a>
							<a href="#">
								<i class="fa fa-behance"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> | @Dasep_Depiyawan 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->
</center>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?= base_url() ?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>/assets/js/popper.js"></script>
	<script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>/assets/js/stellar.js"></script>
	<script src="<?= base_url() ?>/assets/vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="<?= base_url() ?>/assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="<?= base_url() ?>/assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="<?= base_url() ?>/assets/vendors/isotope/isotope-min.js"></script>
	<script src="<?= base_url() ?>/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>/assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?= base_url() ?>/assets/js/mail-script.js"></script>
	<script src="<?= base_url() ?>/assets/vendors/jquery-ui/jquery-ui.js"></script>
	<script src="<?= base_url() ?>/assets/vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="<?= base_url() ?>/assets/vendors/counter-up/jquery.counterup.js"></script>
	<script src="<?= base_url() ?>/assets/js/theme.js"></script>
</body>

</html>