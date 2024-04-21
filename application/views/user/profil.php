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
			<div class="col-lg-7">
				<div class="materialContainer">
					<div class="material-details">
						<div class="title title1 title-effect mb-1 title-left">
							<h2>Profil</h2>
						</div>
					</div>
					<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
					<div class="flash-data-error" data-flashdata="<?php echo $this->session->flashdata('error'); ?>"></div>
					<form action="" method="post" enctype="multipart/form-data">
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						<div class="row g-4 mt-md-1 mt-2">
							<div class="col-md-6">
								<label for="first" class="form-label">Nama Lengkap</label>
								<input type="text" class="form-control" name="nama" value="<?php echo $profilanda['user_nama']; ?>" required>
								<small class="text-danger"><?php echo form_error('nama'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="last" class="form-label">No. KTP</label>
								<input type="text" class="form-control" name="noktp" value="<?php echo $profilanda['noktp']; ?>" required>
								<small class="text-danger"><?php echo form_error('noktp'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="email" class="form-label">No. HP</label>
								<input type="number" class="form-control" name="nohp" value="<?php echo $profilanda['nohp']; ?>" autofocus="" required>
								<small class="text-danger"><?php echo form_error('nohp'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="email2" class="form-label">Alamat</label>
								<input type="text" class="form-control" name="alamat" value="<?php echo $profilanda['alamat']; ?>" autofocus="" required>
								<small class="text-danger"><?php echo form_error('alamat'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="email2" class="form-label">Email</label>
								<input type="email" class="form-control" name="email" value="<?php echo $profilanda['user_email']; ?>" required>
								<small class="text-danger"><?php echo form_error('email_reg'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="email2" class="form-label">Foto Profil</label>
								<input type="file" class="form-control" name="fotoprofil" required>
								<small class="text-danger"><?php echo form_error('fotoprofil'); ?></small>
							</div>
							<div class="col-md-12">
								<label for="email2" class="form-label">Konfirmasi Password</label>
								<input type="password" class="form-control" name="password" placeholder="Konfirmasi password anda" required>
								<small class="text-danger"><?php echo form_error('password'); ?></small>
							</div>

							<div class="col-auto">
								<button class="btn btn-solid-default" type="submit">Simpan</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-lg-5">
				<?php if ($profilanda['fotoprofil'] != "") { ?>
					<img width="100%" src="<?= base_url('upload/fotoprofil/' . $profilanda['fotoprofil']) ?>">
				<?php } else { ?>
					<img width="100%" src="<?= base_url('upload/fotoprofil/user.png') ?>">
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<br><br>
