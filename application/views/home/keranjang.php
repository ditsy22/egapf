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

<!-- product section 2 start -->
<section class="ratio_asos">
	<div class="container">
		<div class="row m-0">
			<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
			<div class="col-sm-12 p-0">
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
				<table class="table cart_prdct_table text-center table-striped">
					<thead>
						<tr>
							<th class="cpt_no">No.</th>
							<th class="cpt_img">Foto Produk</th>
							<th class="cpt_pn">Nama</th>
							<th class="cpt_q">Jumlah</th>
							<th class="cpt_p">Harga</th>
							<th class="cpt_t">Total</th>
							<th class="cpt_r">Hapus</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($keranjang as $cart) : ?>
							<tr>
								<td><span class="cp_no"><?php echo $i; ?></span></td>
								<td><a href="<?php echo base_url(); ?>upload/foto/<?php echo $cart['image']; ?>" class="cp_img"><img style="width: 50%;height:200px;" src="<?php echo base_url(); ?>upload/foto/<?php echo $cart['image']; ?>" alt="" /></a></td>
								<td><a href="#" class="cp_title"><?php echo $cart['name'] ?></a></td>
								<input type="hidden" name="cart[<?php echo $cart['id']; ?>][id]" value="<?php echo $cart['id']; ?>" />
								<input type="hidden" name="cart[<?php echo $cart['id']; ?>][rowid]" value="<?php echo $cart['rowid']; ?>" />
								<input type="hidden" name="cart[<?php echo $cart['id']; ?>][name]" value="<?php echo $cart['name']; ?>" />
								<input type="hidden" name="cart[<?php echo $cart['id']; ?>][image]" value="<?php echo $cart['image']; ?>" />
								<input type="hidden" name="cart[<?php echo $cart['id']; ?>][weight]" value="<?php echo $cart['weight']; ?>" />
								<input type="hidden" name="cart[<?php echo $cart['id']; ?>][price]" value="<?php echo $cart['price']; ?>" />
								<input type="hidden" name="cart[<?php echo $cart['id']; ?>][qty]" value="<?php echo $cart['qty']; ?>" />
								<td>
									<p class="cp_price"><?php echo $cart['qty']; ?></p>
								</td>
								<td>
									<p class="cp_price"><?php echo number_format($cart['price'], 0, ',', '.'); ?></p>
								</td>
								<td>
									<p class="cpp_total"><?php echo number_format($cart['subtotal'], 0, ',', '.'); ?></p>
								</td>
								<td><a href="<?php echo base_url(); ?>keranjang/delete/<?php echo $cart['rowid']; ?>" class="btn btn-solid-default">Hapus</a></td>
							</tr>
							<?php $i++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 cart-actions cart-button-cuppon">
				<div class="row">
					<div class="col-sm-12">
						<div class="cart-action float-end float-right">
							<h4 class="text-dark text-right mb-3"><span>Subtotal : Rp. </span><span><?php echo number_format($this->cart->total(), 0, ',', '.'); ?></span></h4>
							<a href="<?php echo base_url(); ?>" class="btn btn-solid-default">Lanjut Belanja</a>
							<a href="<?php echo base_url(); ?>checkout" class="btn btn-solid-default">Bayar Sekarang</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br><br>
