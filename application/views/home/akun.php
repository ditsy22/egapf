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
				<h3>Akun</h3>
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
							<h2>Buat Akun</h2>
						</div>
					</div>
					<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
					<div class="flash-data-error" data-flashdata="<?php echo $this->session->flashdata('error'); ?>"></div>
					<form action="<?php echo base_url(); ?>register" method="post">
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						<div class="row g-4 mt-md-1 mt-2">
							<div class="col-md-6">
								<label for="first" class="form-label">Nama</label>
								<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama'); ?>" autofocus="" required>
								<small class="text-danger"><?php echo form_error('nama'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="last" class="form-label">No. KTP</label>
								<input type="text" class="form-control" name="noktp" value="<?php echo set_value('noktp'); ?>" required>
								<small class="text-danger"><?php echo form_error('noktp'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="email" class="form-label">No. HP</label>
								<input type="number" class="form-control" name="nohp" value="<?php echo set_value('nohp'); ?>" autofocus="" required>
								<small class="text-danger"><?php echo form_error('nohp'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="email2" class="form-label">Alamat</label>
								<input type="text" class="form-control" name="alamat" value="<?php echo set_value('alamat'); ?>" autofocus="" required>
								<small class="text-danger"><?php echo form_error('alamat'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="email2" class="form-label">Email</label>
								<input type="email" class="form-control" name="email_reg" value="@gmail.com" required>
								<small class="text-danger"><?php echo form_error('email_reg'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="email2" class="form-label">Sandi</label>
								<input type="password" class="form-control" name="password1" required>
								<small class="text-danger"><?php echo form_error('password1'); ?></small>
							</div>
							<div class="col-md-12">
								<label for="email2" class="form-label">Konfirmasi Ulang Sandi</label>
								<input type="password" class="form-control" name="password2" required>
								<small class="text-danger"><?php echo form_error('password2'); ?></small>
							</div>

							<div class="col-auto">
								<button class="btn btn-solid-default" type="submit" id="acc_Create">Buat akun</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-lg-5">
				<div class="contact-details">
					<div>
						<h2>Sudah Terdaftar ?</h2>
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						<form action="<?php echo base_url(); ?>login" method="post">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<div class="row g-4 mt-md-1 mt-2">
								<div class="col-md-12">
									<label for="first" class="form-label">Email</label>
									<input type="email" class="form-control" name="email" required>
									<small class="text-danger"><?php echo form_error('email'); ?></small>
								</div>
								<div class="col-md-12">
									<label for="last" class="form-label">Sandi</label>
									<input type="password" class="form-control" name="password" required>
									<small class="text-danger"><?php echo form_error('password'); ?></small>
								</div>

								<div class="col-auto">
									<button class="btn btn-solid-default" type="submit" id="acc_Login">Login</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br><br>
