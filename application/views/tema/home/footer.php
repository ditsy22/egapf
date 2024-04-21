<footer class="footer-sm-space">
	<div class="main-footer">
		<div class="container">
			<div class="row gy-4">
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="footer-contact">
						<div class="brand-logo">
							<a href="<?php echo base_url(); ?>" class="footer-logo">
								<img style="height: 150px;" src="<?php echo base_url('assets_home/assets/images/favicon/logo.png'); ?>" class="img-fluid blur-up lazyload" alt="logo">
							</a>
						</div>
						<ul class="contact-lists">
							<li>
								<span>
									<b>phone:</b>
									<span class="font-light"> +681572828718</span>
								</span>

							</li>
							<li>
								<span>
									<b>Address:</b>
									<span class="font-light"> Jl. Cangkuang , NO.518 , RT.01 RW.07 , Desa.Cangkuang , Kec.Leles , Kab.Garut - Jawa Barat</span>
								</span>
							</li>
							<li>
								<span>
									<b>Email:</b>
									<span class="font-light"> drfashion@gmail.com</span>
								</span>

							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="footer-links">
						<div class="footer-title">
							<h3>Tautan</h3>
						</div>
						<div class="footer-content">
							<ul>
								<li>
									<a href="<?php echo base_url(); ?>" class="font-dark">Home</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>produkdaftar" class="font-dark">Produk</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>kontak" class="font-dark">Kontak</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-3 col-md-4 col-sm-6">
					<div class="footer-links">
						<div class="footer-title">
							<h3>New Product</h3>
						</div>
						<div class="footer-content">
							<div class="row gy-4">
								<div class="col-lg-6">
									<img width="100%" src="<?php echo base_url('assets_home/assets/images/fashion/product/front/pashminainner.png'); ?>">
								</div>
								<div class="col-lg-6">
									<img width="100%" src="<?php echo base_url('assets_home/assets/images/fashion/product/front/ciput.png'); ?>">
								</div>
								<div class="col-lg-6">
									<img width="100%" src="<?php echo base_url('assets_home/assets/images/fashion/product/front/afriza.png'); ?>">
								</div>
								<div class="col-lg-6">
									<img width="100%" src="<?php echo base_url('assets_home/assets/images/fashion/product/front/manset.png'); ?>">
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="sub-footer">
		<div class="container">
			<div class="row gy-3">
				<div class="col-md-6">
					<p class="mb-0 font-dark">© 2023, DR fashion official store.</p>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- tap to top Section Start -->
<div class="tap-to-top">
	<a href="#home">
		<i class="fas fa-chevron-up"></i>
	</a>
</div>
<!-- tap to top Section End -->

<div class="bg-overlay"></div>

<!-- latest jquery-->
<script src="<?php echo base_url('assets_home/assets/js/jquery-3.5.1.min.js'); ?>"></script>

<!-- Bootstrap js-->
<script src="<?php echo base_url('assets_home/assets/js/bootstrap/bootstrap.bundle.min.js '); ?>"></script>

<!-- feather icon js-->
<script src="<?php echo base_url('assets_home/assets/js/feather/feather.min.js'); ?>"></script>

<!-- lazyload js-->
<script src="<?php echo base_url('assets_home/assets/js/lazysizes.min.js '); ?>"></script>

<!-- Slick js-->
<script src="<?php echo base_url('assets_home/assets/js/slick/slick.js'); ?>"></script>
<script src="<?php echo base_url('assets_home/assets/js/slick/slick-animation.min.js '); ?>"></script>
<script src="<?php echo base_url('assets_home/assets/js/slick/custom_slick.js'); ?>"></script>

<!-- newsletter js -->
<script src="<?php echo base_url('assets_home/assets/js/newsletter.js '); ?>"></script>

<!-- add to cart modal resize -->
<script src="<?php echo base_url('assets_home/assets/js/cart_modal_resize.js'); ?>"></script>

<!-- Add To Home js -->
<script src="<?php echo base_url('assets_home/assets/js/pwa.js '); ?>"></script>

<!-- add to cart modal resize -->
<script src="<?php echo base_url('assets_home/assets/js/cart_modal_resize.js'); ?>"></script>

<!-- feather icon js-->
<script src="<?php echo base_url('assets_home/assets/js/timer1.js '); ?>"></script>

<!-- notify js -->
<script src="<?php echo base_url('assets_home/assets/js/bootstrap/bootstrap-notify.min.js'); ?>"></script>

<!-- script js -->
<script src="<?php echo base_url('assets_home/assets/js/theme-setting.js '); ?>"></script>
<script src="<?php echo base_url('assets_home/assets/js/script.js'); ?>"></script>

<script src="<?php echo base_url(); ?>assets_home/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url(); ?>assets_home/js/materialize.min.js"></script>
<script src="<?php echo base_url('assets_home/js/main.js'); ?>"></script>
<!-- Javascript -->
<script type="text/javascript">
	$('#pay-button').click(function(event) {
		event.preventDefault();
		$(this).attr("disabled", "disabled");

		$.ajax({
			url: '<?php echo base_url(); ?>token',
			cache: false,

			success: function(data) {
				//location = data;

				console.log('token = ' + data);

				var resultType = document.getElementById('result-type');
				var resultData = document.getElementById('result-data');

				function changeResult(type, data) {
					$("#result-type").val(type);
					$("#result-data").val(JSON.stringify(data));
					//resultType.innerHTML = type;
					//resultData.innerHTML = JSON.stringify(data);
				}

				snap.pay(data, {

					onSuccess: function(result) {
						changeResult('success', result);
						console.log(result.status_message);
						console.log(result);
						$("#payment-form").submit();
					},
					onPending: function(result) {
						changeResult('pending', result);
						console.log(result.status_message);
						$("#payment-form").submit();
					},
					onError: function(result) {
						changeResult('error', result);
						console.log(result.status_message);
						$("#payment-form").submit();
					}
				});
			}
		});
	});
</script>
<script>
	const flashData = $('.flash-data').data('flashdata');
	// console.log(flashData);
	if (flashData) {
		Swal.fire({

			title: 'Berhasil !',
			text: '' + flashData,
			icon: 'success',
			showConfirmButton: false,
			timer: 3500
		});
	}
</script>
<script>
	const flashDataError = $('.flash-data-error').data('flashdata');
	// console.log(flashData);
	if (flashDataError) {
		Swal.fire({

			title: 'Gagal !',
			text: '' + flashDataError,
			icon: 'error',
			showConfirmButton: false,
			timer: 3500
		});
	}
</script>
<script>
	$('.bdel').on('click', function(e) {
		e.preventDefault();
		const href = $(this).attr('href');
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: 'btn btn-success',
				cancelButton: 'btn btn-danger'
			},
			buttonsStyling: false
		});
		swalWithBootstrapButtons.fire({

			title: 'Yakin data ini akan dihapus?',
			text: "Data tidak akan bisa dikembalikan!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Ya, Hapus!',
			cancelButtonText: 'Batal',
			reverseButtons: true
		}).then((result) => {
			if (result.value) {
				document.location.href = href;
			} else if (
				/* Read more about handling dismissals below */
				result.dismiss === Swal.DismissReason.cancel
			) {
				swalWithBootstrapButtons.fire(
					'Dibatalkan',
					'',
					'error'
				)
			}
		});
	});
</script>
<script>
	$('.bconfir').on('click', function(e) {
		e.preventDefault();
		const href = $(this).attr('href');
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: 'btn btn-success',
				cancelButton: 'btn btn-danger'
			},
			buttonsStyling: false
		});
		swalWithBootstrapButtons.fire({

			title: 'INFO',
			text: "Dengan mengklik tombol 'Ya', notifikasi tagihan SPP akan masuk ke ruang orang tua/wali.",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Ya !',
			cancelButtonText: 'Batal',
			reverseButtons: true
		}).then((result) => {
			if (result.value) {
				document.location.href = href;
			} else if (
				/* Read more about handling dismissals below */
				result.dismiss === Swal.DismissReason.cancel
			) {
				swalWithBootstrapButtons.fire(
					'Dibatalkan',
					'',
					'error'
				)
			}
		});
	});
</script>
<script>
	function goBack() {
		window.history.back();
	}
</script>
<script type="text/javascript">
	$(".button-collapse").sideNav();
	$(".modal").modal();

	$(document).ready(function() {
		<?php //if($this->uri->segment(1) == 'checkout' || $this->uri->segment(1) == 'Checkout') { 
		?>

		$('#prov').change(function() {
			var prov = $('#prov').val();
			var province = prov.split(',');

			$.ajax({
				url: "<?php echo base_url(); ?>home/city",
				method: "POST",
				data: {
					prov: province[0]
				},
				success: function(obj) {
					$('#kota').html(obj);
				}
			});
		});

		$('#kota').change(function() {
			var kota = $('#kota').val();
			var dest = kota.split(',');
			var kurir = $('#kurir').val()

			$.ajax({
				url: "<?php echo base_url(); ?>home/getcost",
				method: "POST",
				data: {
					dest: dest[0],
					kurir: kurir
				},
				success: function(obj) {
					$('#layanan').html(obj);
				}
			});
		});

		$('#kurir').change(function() {
			var kota = $('#kota').val();
			var dest = kota.split(',');
			var kurir = $('#kurir').val()

			$.ajax({
				url: "<?php echo base_url(); ?>home/getcost",
				method: "POST",
				data: {
					dest: dest[0],
					kurir: kurir
				},
				success: function(obj) {
					$('#layanan').html(obj);
				}
			});
		});

		$('#layanan').change(function() {
			var layanan = $('#layanan').val();

			$.ajax({
				url: "<?php echo base_url(); ?>home/cost",
				method: "POST",
				data: {
					layanan: layanan
				},
				success: function(obj) {
					var hasil = obj.split(",");

					$('#ongkir').val(hasil[0]);
					$('#total').val(hasil[1]);
				}
			});
		});

		<?php //} 
		?>
		$(window).scroll(function() {
			if ($(this).scrollTop() > 100) {
				$('.back-top').fadeIn();
			} else {
				$('.back-top').fadeOut();
			}
		});
		$('.back-top').click(function() {
			$("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	});
</script>
<!-- Google Map APi
		============================================ -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>
<script>
	function initialize() {
		var mapOptions = {
			zoom: 15,

			scrollwheel: false,
			center: new google.maps.LatLng(-7.3929748, 109.3480009),

		};
		var map = new google.maps.Map(document.getElementById('contact_map_area'),
			mapOptions);
		var marker = new google.maps.Marker({
			position: map.getCenter(),
			icon: '<?php echo base_url(); ?>assets_home/img/map_pin.png',
			map: map,

		});

	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>

</html>