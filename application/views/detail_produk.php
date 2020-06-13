<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_product_img">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="<?= base_url() ?>/assets_admin/produk/<?= $detail->gambar ?>" alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="<?= base_url() ?>/assets_admin/produk/<?= $detail->gambar ?>"alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="<?= base_url() ?>/assets_admin/produk/<?= $detail->gambar ?>" alt="Third slide">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?= $detail->nama_produk ?></h3>
						<h2>Rp.<?= number_format($detail->harga,0,',','.') ?></h2>
						<ul class="list">
							<li>
								<a><span>Merk</span> : <?= $detail->merk; ?></a>
							</li>
							<li>
								<a><span>Stock</span> :
								 <?php
								 $bayar = $detail->harga - $detail->harga_diskon; 
								 if ($detail->stock==0) {
								 	echo "<label class='badge badge-success'>Stok Habis</label>";
								 }else{
								 	echo $detail->stock;
								 }
								  ?>
								 </a>
								
							</li>
							<li>
								<a><span>Diskon</span> :  <?= $detail->diskon; ?>%  </a><br>
							</li>
							<li>
								<a><span>Harga Bayar</span> : Rp. <?php echo number_format($detail->harga_bayar,0,',','.'); ?>  </a><br>
							</li>							
						</ul>
						<p><?= $detail->keterangan ?></p>
						<div class="card_area">
							
						<?php
						if($detail->stock == 0 ){

						}else{
						echo anchor('dashboard/add_to_cart/'.$detail->id,'<div class="main_btn">Tambah Ke Keranjang <i class="fa fa-shopping-cart"></i></div>');
						}
						?>
							<?= anchor('dashboard/','<div class="btn">Kembali <i class="fa fa-arrow-left"></i></div>') ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->