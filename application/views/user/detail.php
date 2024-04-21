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
		<?php $tr = $dtransaksi->row_array(); ?>
		<div class="row">
			<div class="col-12">
				<h3><?php echo $title; ?> <?php echo $tr['transaksi_id']; ?></h3>
			</div>
		</div>
	</div>
</section>
<!-- Breadcrumb section end -->

<!-- Contact Section Start -->
<section class="contact-section">
	<div class="container">
		<div class="row g-4">
			<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
			<div class="col-lg-12">
				<div class="materialContainer">
					<div class="material-details">
						<div class="title title1 title-effect mb-1 title-left">
							<h2>No Transaksi <?php echo $tr['transaksi_id']; ?></h2>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6 text-left">
							<tr>
								<th>Nama : <?php echo $tr['user_nama']; ?></th><br>
								<th>Email : <?php echo $tr['user_email']; ?></th><br>
								<th>Alamat : <?php echo $tr['transaksi_tujuan']; ?></th>
							</tr>
						</div>
						<div class="col-md-6 text-left">
							<tr>
								<th>Tujuan : <?php echo $tr['transaksi_kota']; ?>, <?php echo $tr['transaksi_prov']; ?>, <?php echo $tr['transaksi_pos']; ?></th><br>
								<th>Kurir / Layanan : <?php echo strtoupper($tr['transaksi_kurir']); ?> / <?php echo $tr['transaksi_service']; ?></th><br>
								<th>Batas Bayar : <?php echo date('d-m-Y', strtotime($tr['transaksi_bts_bayar'])); ?></th>
								<br>
								<?php
								if ($tr['transaksi_status'] == 'Dikirim') {
									if ($tr['noresi'] != "") {
										echo '<th>No Resi : ' . $tr['noresi'] . '<br></th>';
									}
								}
								?>
								<th><span class="text-danger">Status Transaksi : <?= $tr['transaksi_status']; ?></span></th>
							</tr>
						</div>
					</div>
					<br><br>
					<div class="material-details">
						<div class="title title1 title-effect mb-1 title-left">
							<h4>Pembayaran : BNI
								a. n Dr Fashion
								0632429168</h4>
						</div>
					</div>
					<div class="table-responsive mt-5">
						<table class="table table-sm table-bordered">
							<thead>
								<tr>
									<th scope="col">Nama Item</th>
									<th scope="col">Jumlah</th>
									<th scope="col">Subtotal</th>
								</tr>
							</thead>
							<tbody>
								<?php $ongkir = $tr['transaksi_total']; ?>
								<?php foreach ($dtransaksi->result_array() as $trs) : ?>
									<?php $ongkir -= $trs['d_transaksi_biaya']; ?>
									<tr class="text-left">
										<td><?php echo $trs['produk_name']; ?></td>
										<td><?php echo $trs['d_transaksi_qty']; ?></td>
										<td>Rp. <?php echo number_format($trs['d_transaksi_biaya'], 0, ',', '.'); ?></td>
									</tr>
								<?php endforeach; ?>
								<tr class="text-left">
									<td colspan="2">Ongkos Kirim</td>
									<td colspan="2">Rp. <?php echo number_format($ongkir, 0, ',', '.'); ?></td>
								</tr>
								<tr class="text-left">
									<td colspan="2">Total</td>
									<td colspan="2">Rp. <?php echo number_format($tr['transaksi_total'], 0, ',', '.'); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12 text-left">
							<?php if ($tr['transaksi_status'] != 'Dikirim' and $tr['transaksi_status'] != 'Sedang Di Kemas' and $tr['transaksi_status'] != 'Selesai' and $tr['transaksi_status'] != 'Di Tolak') { ?>
								<form action="<?php echo site_url('user/buktipembayaran/') ?>" method="post" enctype="multipart/form-data">
									<div class="row g-4 mt-md-1 mt-2">
										<div class="col-md-12">
											<label for="first" class="form-label">Bukti Pembayaran</label>
											<input type="hidden" name="id" value="<?php echo $tr['transaksi_id'] ?>" class="form-control" required>
											<input type="file" name="gambar" class="form-control" required>
										</div>
										<div class="col-auto">
											<button class="btn btn-solid-default" type="submit" id="acc_Login">Simpan</button>
											<br><br>
										</div>
									</div>
								</form>
							<?php } ?>
						</div>
						<div class="col-md-12">
							<img width="30%" src="<?php echo base_url('upload/buktipembayaran/' . $tr['buktipembayaran']) ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br><br>
