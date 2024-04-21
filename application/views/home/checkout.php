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
				<h3>Checkout</h3>
			</div>
		</div>
	</div>
</section>
<!-- Breadcrumb section end -->

<!-- Contact Section Start -->
<section class="contact-section">
	<div class="container">
		<div class="row g-4">
			<form class="checkout_form" action="" method="post">
				<div class="col-lg-12">
					<div class="materialContainer">
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						<div class="row g-4 mt-md-1 mt-2">
							<div class="col-md-6">
								<label for="first" class="form-label">Provinsi :</label>
								<select name="prov" id="prov" class="form-control">
									<option value="" disabled selected>-Pilih Provinsi-</option>
									<?php $this->load->view('home/prov'); ?>
								</select>
								<small class="text-danger"><?php echo form_error('prov'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="last" class="form-label">Kota Kabupaten :</label>
								<select name="kota" id="kota" class="form-control">
									<option value="" disabled selected>-Kota/Kabupaten-</option>
								</select>
								<small class="text-danger"><?php echo form_error('kota'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="email" class="form-label">Kode Pos :</label>
								<input type="text" name="kodepos" class="form-control" value="<?php echo set_value('kodepos'); ?>">
								<small class="text-danger"><?php echo form_error('kodepos'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="email2" class="form-label">Kurir :</label>
								<select name="kurir" id="kurir" class="form-control">
									<option value="pos">POS</option>
									<option value="jne">JNE</option>
									<option value="tiki">TIKI</option>
								</select>
								<small class="text-danger"><?php echo form_error('kurir'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="email2" class="form-label">Layanan :</label>
								<select name="layanan" id="layanan" class="form-control">
									<option value="" disabled selected>-Layanan-</option>
								</select>
								<small class="text-danger"><?php echo form_error('layanan'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="email2" class="form-label">Alamat Lengkap :</label>
								<textarea rows="3" name="alamat" id="address" placeholder="Alamat Lengkap" class="form-control"></textarea>
								<small class="text-danger"><?php echo form_error('alamat'); ?></small>
							</div>
							<div class="col-md-12">
								<label for="email2" class="form-label">Nomor Telepon / WA Anda (Penting, Supaya kami bisa menghubungi anda) :</label>
								<textarea rows="3" name="nohp" placeholder="" class="form-control"></textarea>
							</div>
							<br><br>
							<h2>Rincian Belanja</h2>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="product-name">Nama Produk</th>
										<th class="product-total">Total</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($keranjang as $cart) : ?>
										<tr>
											<td class="product-name"><?php echo $cart['name'] ?></td>
											<td class="product-total"><span><?php echo number_format($cart['subtotal'], 0, ',', '.'); ?></span></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<th>Subtotal</th>
										<td><span class="amount"><?php echo number_format($this->cart->total(), 0, ',', '.'); ?></span></td>
									</tr>
								</tfoot>
							</table>
							<div class="col-md-6">
								<label for="email2" class="form-label">Ongkir :</label>
								<input type="text" class="form-control" name="ongkir" id="ongkir" readonly="" value="0">

							</div>
							<div class="col-md-6">
								<label for="email2" class="form-label">Yang harus dibayar :</label>
								<input type="text" class="form-control" name="total" id="total" readonly="" value="<?php echo number_format($this->cart->total(), 0, ',', '.'); ?>">
							</div>

							<div class="col-auto">
								<button class="btn btn-solid-default" type="submit" tabindex="0">Lanjutkan</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<br><Br>
