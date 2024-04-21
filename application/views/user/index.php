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

<!-- product section 2 start -->
<section class="ratio_asos">
	<div class="container">
		<div class="row m-0">
			<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
			<div class="col-sm-12 p-0">
				<form action="<?php echo base_url(); ?>cart/update" method="post" enctype="multipart/form-data">
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
					<table class="table cart_prdct_table text-center">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">No Transaksi</th>
								<th scope="col">Tanggal</th>
								<th scope="col">Status</th>
								<th scope="col">Detail</th>
							</tr>
						</thead>
						<tbody>
							<?php if (count($transaksi) == 0) { ?>
								<tr>
									<td colspan="5">Belum ada transaksi</td>
								</tr>
							<?php } else { ?>
								<?php $i = 1; ?>
								<?php foreach ($transaksi as $trx) : ?>
									<tr>
										<th scope="row"><?php echo $i . '.'; ?></th>
										<td><?php echo $trx['transaksi_id']; ?></td>
										<td><?php echo date('d-m-Y', strtotime($trx['transaksi_tgl_pesan'])); ?></td>
										<td><?php echo $trx['transaksi_status']; ?></td>
										<td><a href="<?php echo base_url(); ?>user/detail/<?php echo $trx['transaksi_id']; ?>" class="btn btn-primary"><i class="fa fa-search"></i></a></td>
									</tr>
									<?php $i++; ?>
								<?php endforeach; ?>
							<?php } ?>
						</tbody>
					</table>
			</div>
		</div>
	</div>
</section>
<br><br>
