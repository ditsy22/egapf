<!-- home slider start -->
<section class="home-section home-style-2 pt-0">
	<div class="container-fluid p-0">
		<div class="slick-2 dot-dark">
			<div>
				<div class="home-slider">
					<div class="home-wrap row m-0">
						<img style="50px" src="<?php echo base_url('assets_home/assets/images/fashion/slider/welcome.png'); ?>" class="bg-img blur-up lazyload" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="col-xxl-9 col-lg-8 p-0 left-content">
			<img src="<?php echo base_url('assets_home/assets/images/fashion/slider/1.png'); ?>" class="bg-img blur-up lazyload" alt="">
		</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</section>
<!-- home slider end -->

<!-- category section start -->
<section class="category-section ratio_40">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="title title-2 text-center">
					<h2>Kategori</h2>
					<h5 class="text-color">Dari Menu Kami</h5>
				</div>
			</div>
		</div>
		<div class="row gy-3">
			<div class="col-xxl-2 col-lg-3">
				<div class="category-wrap category-padding category-block theme-bg-color">
					<div>
						<h2 class="top-spacing">Kategori</h2>
						<span>Teratas</span>
					</div>
				</div>
			</div>
			<div class="col-xxl-10 col-lg-9">
				<div class="category-wrapper category-slider1 white-arrow category-arrow">
					<div>
						<a href="#" class="category-wrap category-padding">
							<img src="<?php echo base_url('assets_home/assets/images/fashion/category/outfit.png'); ?>" class="bg-img blur-up lazyload" alt="category image">
							<div class="category-content category-text-1">
								<h3 class="text-dark">Baju</h3>
							</div>
						</a>
					</div>
					<div>
						<a href="#" class="category-wrap category-padding">
							<img src="<?php echo base_url('assets_home/assets/images/fashion/category/pashmina.png'); ?>" class="bg-img blur-up lazyload" alt="category image">
							<div class="category-content category-text-1">
								<h3 class="text-dark">Hijab</h3>
							</div>
						</a>
					</div>
					<div>
						<a href="#" class="category-wrap category-padding">
							<img src="<?php echo base_url('assets_home/assets/images/fashion/category/accsesoris.png'); ?>" class="bg-img blur-up lazyload" alt="category image">
							<div class="category-content category-text-1">
								<h3 class="text-dark">Aksesoris</h3>
							</div>
						</a>
					</div>
					<div>
						<a href="#" class="category-wrap category-padding">
							<img src="<?php echo base_url('assets_home/assets/images/fashion/category/outfit.png'); ?>" class="bg-img blur-up lazyload" alt="category image">
							<div class="category-content category-text-1">
								<h3 class="text-dark">Baju</h3>
							</div>
						</a>
					</div>
					<div>
						<a href="#" class="category-wrap category-padding">
							<img src="<?php echo base_url('assets_home/assets/images/fashion/category/pashmina.png'); ?>" class="bg-img blur-up lazyload" alt="category image">
							<div class="category-content category-text-1">
								<h3 class="text-dark">Hijab</h3>
							</div>
						</a>
					</div>
					<div>
						<a href="#" class="category-wrap category-padding">
							<img src="<?php echo base_url('assets_home/assets/images/fashion/category/accsesoris.png'); ?>" class="bg-img blur-up lazyload" alt="category image">
							<div class="category-content category-text-1">
								<h3 class="text-dark">Aksesoris</h3>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- category section end -->

<!-- product section 2 start -->
<section class="ratio_asos">
	<div class="container">
		<div class="row m-0">
			<div class="col-sm-12 p-0">
				<div class="title title-2 text-center">
					<h2>Menu</h2>
				</div>
				<div class="product-wrapper product-style-2 row g-sm-4 g-3">
					<?php foreach ($produk as $pro) : ?>
						<div class="col-xl-4 col-lg-4 col-6">
							<div class="product-box">
								<div class="img-wrapper">
									<div class="front">
										<a href="<?php echo base_url(); ?>p/<?php echo $pro['produk_id']; ?>/<?php echo $pro['url']; ?>/<?php echo $pro['produk_url']; ?>">
											<img src="<?php echo base_url(); ?>upload/foto/<?php echo $pro['produk_image']; ?>" class="bg-img blur-up lazyload" alt="">
										</a>
									</div>
									<div class="back">
										<a href="<?php echo base_url(); ?>p/<?php echo $pro['produk_id']; ?>/<?php echo $pro['url']; ?>/<?php echo $pro['produk_url']; ?>">
											<img src="<?php echo base_url(); ?>upload/foto/<?php echo $pro['produk_image']; ?>" class="bg-img blur-up lazyload" alt="">
										</a>
									</div>
									<div class="cart-wrap">
										<ul>
											<li>
												<a href="<?php echo base_url(); ?>p/<?php echo $pro['produk_id']; ?>/<?php echo $pro['url']; ?>/<?php echo $pro['produk_url']; ?>" class="wishlist">
													<i data-feather="shopping-bag"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="text-center">
									<p class="text-capitalize my-1"><?php echo $pro['produk_name']; ?></p>
									<span class="fw-bold">Rp <?php echo number_format($pro['produk_price'], 0, ',', '.'); ?></span>
								</div>
							</div>
						</div>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- product section 2 end -->

<!-- Banner section 3 start -->
<section class="timer-banner-style-2">
	<div class="container">
		<div class="row gy-3">
			<div class="col-lg-12">
				<div class="discount-image-details discount-spacing">
					<img src="<?php echo base_url('assets_home/assets/images/fashion/banner/event.png'); ?>" class="bg-img blur-up lazyload" alt="">

					<div class="discunt-details">
						<div>
							<div class="heart-button heart-button-2">
								<i class="fas fa-heart theme-color"></i>
							</div>

							<h5 class="mt-3">Diskon Spesial <span class="theme-color">70% OFF</span></h5>
							<h2 class="my-3 deal-text">Khusus Spesial <br>Di <span class="theme-color">Setiap Bulan</span>
							</h2>
							<h5 class="mt-3">Diskon Mulai Dari Rp 50.000 Sampai Rp 100.000</h5>
							<br>
							<!-- -->
							<button onclick="window.location.href = 'https://shopee.co.id/Hana-Skirt-Plisket-Full-Motif-Klasik-Rok-Wanita-Skirt-Ruffle-i.562024793.22473366883';" type="button" class="btn default-light-theme default-theme mt-2">Beli Sekarang</button>

							<div class="timer-bg timer-bg-center d-lg-block d-none">
								<h3 class="mt-0">Discount Special</h3>
								<span>Setiap Event</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br><br>