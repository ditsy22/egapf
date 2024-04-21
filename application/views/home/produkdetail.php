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
				<h3>Produk Detail</h3>
			</div>
		</div>
	</div>
</section>
<!-- Breadcrumb section end -->

<!-- Contact Section Start -->
<section class="contact-section">
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-7">
				<div class="materialContainer">
					<img style="width: 80%;height:500px;" class="img-fluid" src="<?php echo base_url(); ?>upload/foto/<?php echo $detail['produk_image']; ?>" alt="<?php echo $detail['produk_name']; ?>" alt="">
				</div>
			</div>
			<div class="col-lg-5">
				<div class="materialContainer">
					<h5><?php echo $detail['produk_name']; ?></h5>
					<br>
					<p><b>Rp <?php echo number_format($detail['produk_price'], 0, ',', '.'); ?></b></p><br>
					<p>Deskripsi :</p>
					<p><?php echo $detail['produk_description']; ?></p>

					<form action="<?php echo base_url(); ?>keranjang/add_cart" method="post">
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						<div class="row g-4 mt-md-1 mt-2">
							<div class="col-md-12">
								<label for="first" class="form-label">Jumlah :</label>
								<input value="1" name="qttybutton" min="1" max="<?php echo $detail['produk_stok']; ?>" class="form-control" type="number">
								<input type="hidden" name="produkid" value="<?php echo $detail['produk_id']; ?>">
							</div>

							<div class="col-auto">
								<button class="btn btn-solid-default float-right pull-right" type="submit">Tambah Ke Keranjang</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<br><br>
