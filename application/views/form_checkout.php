<!--================Checkout Area =================-->
	<section class="checkout_area section_gap">
		<div class="container">
			<div class="billing_details">
				<div class="row">
					<div class="col-lg-8">
						<h3>isi data diri dengan lengkap</h3>
						<form class="row contact_form"  method="post" action="<?= base_url('dashboard/bayar');?>" novalidate="novalidate">
							<div class="col-md-6 form-group p_star">
								<input type="text" class="form-control" placeholder="First name" id="first" name="first_name">
								<span class="placeholder" data-></span>
								<?= form_error('first_name','<div class="text-danger small ml-2">','</div>') ?>
							</div>
							<div class="col-md-6 form-group p_star">
								<input type="text" class="form-control" placeholder="Last name" id="last" name="last_name">
								<span class="placeholder" data-></span>
								<?= form_error('last_name','<div class="text-danger small ml-2">','</div>') ?>
							</div>
							<div class="col-md-6 form-group p_star">
								<input type="text" class="form-control" placeholder="Phone number" id="number" name="no_telp">
								<span class="placeholder" data-></span>
								<?= form_error('no_telp','<div class="text-danger small ml-2">','</div>') ?>
							</div>
							<div class="col-md-6 form-group p_star">
								<input type="text" class="form-control " placeholder="Email Address" id="email" name="email">
								<span class="placeholder" data-></span>
								<?= form_error('email','<div class="text-danger small ml-2">','</div>') ?>
							</div>
							<div class="col-md-12 form-group p_star">
								<input type="text" class="form-control" id="add1" placeholder="Alamat Lengkap" name="alamat">
								<span class="placeholder" data-></span>
								<?= form_error('alamat','<div class="text-danger small ml-2">','</div>') ?>
							</div>
							<div class="col-md-12 form-group p_star">
								<input type="text" class="form-control" placeholder="Kota/Kabupaten" id="city" name="kota">
								<span class="placeholder" data-></span>
								<?= form_error('kota','<div class="text-danger small ml-2">','</div>') ?>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="zip" name="kode_pos" placeholder="Kode Pos">
								<?= form_error('kode_pos','<div class="text-danger small ml-2">','</div>') ?>
							</div>
							<div class="col-md-12 form-group">
								
								<textarea class="form-control" name="keterangan" id="message" rows="1" placeholder="Keterangan"></textarea>
							</div>
					</div>
					<div class="col-lg-4">
						<div class="order_box">
							<h2>Your Order</h2>
							<ul class="list">
							
								<li>
									<a href="#">Product
										<span>Total</span>
									</a>
								</li>
								<?php foreach($this->cart->contents() as $prd) :?>
								<li>

									<a href="#"><?= $prd['name'] ?>
										<span class="middle">X<?= $prd['qty'] ?></span>
										<span class="last">Rp.<?= number_format($prd['price'],0,',','.'); ?></span>
									</a>
								</li>
							<?php endforeach; ?>
							</ul>
							<ul class="list list_2">
								
								<li>
									<a href="#">Total
										<span>Rp.<?= number_format($this->cart->total(),0,',','.'); ?></span>
									</a>
								</li>
							</ul>
							<div class="payment_item">
							<button class="main_btn" type="submit">Proceed to Paypal</button>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Checkout Area =================-->