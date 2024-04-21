<section class="breadcrumb-section section-b-space">
	<ul class="circles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3><?php
					$ambildatakategori = $this->db->where('url', $kate)->get('tb_kategori')->row();
					echo $ambildatakategori->kategori;
					?></h3>
			</div>
		</div>
	</div>
</section>
<!-- Breadcrumb section end -->

<!-- product section 2 start -->
<section class="ratio_asos">
	<div class="container">
		<div class="row m-0">
			<div class="col-sm-12 p-0">
				<div class="product-wrapper product-style-2 row g-sm-4 g-3">
					<?php if (count($prokategori) > 0) { ?>
						<?php foreach ($prokategori as $prod) : ?> <div class="col-xl-3 col-lg-4 col-6">
								<div class="product-box">
									<div class="img-wrapper">
										<div class="front">
											<a href="<?php echo base_url(); ?>p/<?php echo $prod['produk_id']; ?>/<?php echo $prod['url']; ?>/<?php echo $prod['produk_url']; ?>">
												<img src="<?php echo base_url(); ?>upload/foto/<?php echo $prod['produk_image']; ?>" class="bg-img blur-up lazyload" alt="">
											</a>
										</div>
										<div class="back">
											<a href="<?php echo base_url(); ?>p/<?php echo $prod['produk_id']; ?>/<?php echo $prod['url']; ?>/<?php echo $prod['produk_url']; ?>">
												<img src="<?php echo base_url(); ?>upload/foto/<?php echo $prod['produk_image']; ?>" class="bg-img blur-up lazyload" alt="">
											</a>
										</div>
										<div class="cart-wrap">
											<ul>
												<li>
													<a href="<?php echo base_url(); ?>p/<?php echo $prod['produk_id']; ?>/<?php echo $prod['url']; ?>/<?php echo $prod['produk_url']; ?>">
														<i data-feather="shopping-bag"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="text-center">
										<p class="text-capitalize my-1"><?php echo $prod['produk_name']; ?></p>
										<span class="fw-bold">Rp <?php echo number_format($prod['produk_price'], 0, ',', '.'); ?></span>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					<?php } else { ?>
						<div class="col-md-12 text-center">
							Tidak ada produk dengan kategori '<?php echo $kate; ?>'
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<br><br>
