

	<!--================Category Product Area =================-->
	<section class="cat_product_area section_gap">
		<div class="container-fluid">
			<div class="row flex-row-reverse">
				<div class="col-lg-12">
					<div class="product_top_bar">
						<div class="left_dorp col-md-12">
							<?= $this->session->flashdata('pesan'); ?>
						</div>
					</div>
					<div class="latest_product_inner row">
					<?php foreach($sepatu as $spt) : ?>
						<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="f_p_item">
								<div class="f_p_img">
									<img class="img-fluid" src="<?= base_url() ?>/assets_admin/produk/<?= $spt->gambar ?>" alt="">
									<div class="p_icon">
									<?php if($spt->stock == 0 ) {
										echo "<span class='badge badge-danger'>Stok Habis</span>";
									}else{
										
										echo anchor('dashboard/add_to_cart/'.$spt->id,'<i class="lnr lnr-cart"></i>') ;
									} ?>
										<?=  anchor('dashboard/detail_produk/'.$spt->id,'<i class="fa fa-eye"></i>') ?>
									</div>
								</div>
								<a>
									<h4><?= $spt->nama_produk ?></h4>
								</a>
								<h5>Rp.<?= number_format($spt->harga,0,',','.') ?></h5>
								<span class="small">Diskon <?= $spt->diskon ?>%</span>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			<div class=" col-md-8">
				<?= $this->pagination->create_links(); ?>
			</div>
			</div>

			<div class="row">
			
			</div>
		</div>
	</section>
	<!--================End Category Product Area =================-->

