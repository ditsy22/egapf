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
				<h3><?php echo $title; ?></h3>
			</div>
		</div>
	</div>
</section>
<!-- Breadcrumb section end -->

<!-- Contact Section Start -->
<section class="contact-section">
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-12">
				<div class="materialContainer">
					<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
					<div class="flash-data-error" data-flashdata="<?php echo $this->session->flashdata('error'); ?>"></div>
					<form action="" method="post">
						<div class="row g-4 mt-md-1 mt-2">
							<div class="col-md-12">
								<label for="first" class="form-label">Password Baru</label>
								<input type="password" class="form-control" name="sandi2" placeholder="Password baru" required>
							</div>
							<div class="col-md-12">
								<label for="last" class="form-label">Konfirmasi Password Baru</label>
								<input type="password" class="form-control" name="sandi1" placeholder="Konfirmasi password baru" required>
							</div>
							<div class="col-md-12">
								<label for="email" class="form-label">Konfirmasi Password Lama</label>
								<input type="password" class="form-control" name="sandi" placeholder="Konfirmasi password lama" required>
							</div>

							<div class="col-auto">
								<button class="btn btn-solid-default" type="submit">Simpan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<br><Br>
