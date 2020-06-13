<!--================Cart Area =================-->
	<section class="cart_area">
		<div class="container">
			<div class="cart_inner">
				<div class="table-responsive">

				<?php
				if ($this->cart->total_items() > 0 ) { ?>
						<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
						<?php  foreach($this->cart->contents() as $prd) : ?>
							<tr>
								<td>
									<div class="media">
										<div class="media-body">
											<p><?= $prd['name'] ?></p>
										</div>
									</div>
								</td>
								<td>
									<h5>Rp.<?= number_format($prd['price'],0,',','.') ?></h5>
								</td>
								<td>
									<h5><?= $prd['qty'] ?></h5>
								</td>
								<td>
									<h5>Rp.<?= number_format($prd['subtotal'],0,',','.') ?></h5>
								</td>
							</tr>
						<?php endforeach; ?>
							<tr>
								<td>

								</td>
								<td>

								</td>
								<td>
									<h5>Subtotal</h5>
								</td>
								<td>
									<h5>Rp.<?= number_format($this->cart->total(),0,',','.'); ?></h5>
								</td>
							</tr>
							<tr class="shipping_area">
								<td>

								</td>
								<td>

								</td>
								<td>
								</td>
								<td></td>								
							</tr>
							<tr class="out_button_area">
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>
									<div class="checkout_btn_inner">
									<a class="genric-btn danger-border" href="<?= base_url('dashboard/hapus_keranjang') ?>">Kosongkan Keranjang</a>
										<a class="gray_btn" href="<?= base_url('dashboard/index') ?>">Continue Shopping</a>
										<a class="main_btn" href="<?= base_url('dashboard/checkout') ?>">Proceed to checkout</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				<?php }else{ ?>
					<div class="alert alert-success">
						<center><h3 class="mb-0">Anda Belum Belanja Apapun</h3></center>
					</div>
				<?php }?>
					
				</div>
			</div>
		</div>
	</section>
	<!--================End Cart Area =================-->	