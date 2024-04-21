<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="manifest" href="manifest.json" />
	<link rel="icon" href="<?php echo base_url('assets_home/assets/images/favicon/logo.png'); ?>" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo base_url('assets_home/assets/images/favicon/logo.png'); ?>" />
	<meta name="theme-color" content="#e22454" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="apple-mobile-web-app-title" content="drfashion" />
	<meta name="msapplication-TileImage" content="<?php echo base_url('assets_home/assets/images/favicon/logo.png'); ?>" />
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="preconnect" href="https://fonts.googleapis.com/" />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
	<link rel="preconnect" href="https://fonts.googleapis.com/" />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="drfashion.">
	<meta name="keywords" content="drfashion.">
	<meta name="author" content="SIJ">
	<link rel="icon" href="<?php echo base_url('assets_home/assets/images/favicon/logo.png'); ?>" type="image/x-icon" />
	<title>Dr Fashion</title>

	<!-- Google font -->
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

	<!-- bootstrap css -->
	<link id="rtl-link" rel="stylesheet" type="text/css" href="<?php echo base_url('assets_home/assets/css/vendors/bootstrap.css'); ?>">

	<!-- font-awesome css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_home/assets/css/vendors/font-awesome.css'); ?>">

	<!-- feather icon css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_home/assets/css/vendors/feather-icon.css'); ?>">

	<!-- animation css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_home/assets/css/vendors/animate.css'); ?>">

	<!-- slick css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_home/assets/css/vendors/slick/slick.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_home/assets/css/vendors/slick/slick-theme.css'); ?>">

	<!-- Theme css -->
	<link id="color-link" rel="stylesheet" type="text/css" href="<?php echo base_url('assets_home/assets/css/style.css'); ?>">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>

<body class="theme-color2 light ltr">

	<!-- header start -->
	<header class="header-style" id="home">
		<div class="main-header navbar-searchbar">
			<div class="container-fluid-lg">
				<div class="row">
					<div class="col-lg-12">
						<div class="main-menu">
							<div class="menu-left">
								<div class="brand-logo">
									<a href="<?php echo base_url(); ?>">
										<img style="height: 60px;" src="<?php echo base_url('assets_home/assets/images/favicon/logo.png'); ?>" class="brand img-fluid blur-up lazyload" alt="logo">
									</a>
								</div>
							</div>
							<nav>
								<div class="main-navbar">
									<div id="mainnav">
										<div class="toggle-nav">
											<i class="fa fa-bars sidebar-bar"></i>
										</div>
										<ul class="nav-menu">
											<li class="back-btn d-xl-none">
												<div class="close-btn">
													Menu
													<span class="mobile-back"><i class="fa fa-angle-left"></i>
													</span>
												</div>
											</li>
											<li class="mega-menu home-menu">
												<a href="<?php echo base_url(); ?>" class="font-dark">
													<div class="gradient-title">Home</div>
												</a>
											</li>

											<li class="mega-menu dropdown ratio_40">
												<a href="javascript:void(0)" class="nav-link menu-title">
													<div class="gradient-title">Kategori</div>
												</a>
												<div class="mega-menu-container menu-content">
													<div class="container-fluid">
														<div class="row row-cols-5">
															<div class="col mega-box">
																<div class="link-section">
																	<div class="submenu-title">
																		<h5>Kategori Menu</h5>
																	</div>
																	<div class="submenu-content opensubmegamenu">
																		<ul class="list">
																			<?php foreach ($kategori as $tag) : ?>
																				<li>
																					<a href="<?php echo base_url(); ?>kategori/<?php echo $tag['url'] ?>"><?php echo $tag['kategori'] ?></a>
																				</li>
																			<?php endforeach; ?>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>

											<li class="">
												<a href="<?php echo base_url(); ?>produkdaftar" class="font-dark">
													<div class="gradient-title">Produk</div>
												</a>
											</li>

											<li class="">
												<a href="<?php echo base_url(); ?>kontak" class="font-dark">
													<div class="gradient-title">Kontak</div>
												</a>

											</li>
											<?php if ($this->session->userdata('loginstatus') != '6484bbvnvfdswuieywor3443993') { ?>
												<li class="">
													<a href="<?php echo base_url(); ?>home/akun" class="font-dark">
														<div class="gradient-title">Akun Saya</div>
													</a>
												</li>
											<?php } else { ?>

												<li class="mega-menu dropdown ratio_40">
													<a href="javascript:void(0)" class="nav-link menu-title">
														<div class="gradient-title"><?php echo $this->session->userdata('username'); ?></div>
													</a>
													<div class="mega-menu-container menu-content">
														<div class="container-fluid">
															<div class="row row-cols-5">
																<div class="col mega-box">
																	<div class="link-section">
																		<div class="submenu-title">
																			<h5>Dashboard Menu</h5>
																		</div>
																		<div class="submenu-content opensubmegamenu">
																			<ul class="list">
																				<li>
																					<a href="<?php echo base_url(); ?>user">Dashboard</a>
																				</li>
																				<li>
																					<a href="<?php echo base_url(); ?>keranjang">Keranjang</a>
																				</li>
																				<li>
																					<a href="<?php echo base_url(); ?>user/transaksi">Transaksi</a>
																				</li>
																				<li>
																					<a href="<?php echo base_url(); ?>user/profil">Profil</a>
																				</li>
																				<li>
																					<a href="<?php echo base_url(); ?>user/ganti_password">Ganti Sandi</a>
																				</li>
																				<li>
																					<a href="<?php echo base_url(); ?>logout">Logout</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</nav>
							<!-- <div class="menu-right">
								<ul>
									<li>
										<div class="search-box">
											<i data-feather="search"></i>
										</div>
									</li>
									<li class="onhover-dropdown">
										<div class="cart-media">
											<i data-feather="user"></i>
										</div>
										<div class="onhover-div profile-dropdown">
											<ul>
												<li>
													<a href="log-in.html" class="d-block">Masuk</a>
												</li>
												<li>
													<a href="sign-up.html" class="d-block">Daftar</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="onhover-dropdown wislist-dropdown">
										<div class="cart-media">
											<a href="wishlist.html">
												<i data-feather="heart"></i>
												<span class="label label-theme rounded-pill">5</span>
											</a>
										</div>
										<div class="onhover-div">
											<a href="wishlist.html">
												<div class="wislist-empty">
													<i class="fab fa-gratipay"></i>
													<h6 class="mb-1">Daftar keinginanmu kosong !!</h6>
													<p class="font-light mb-0">Telusuri lebih lanjut.</p>
												</div>
											</a>
										</div>
									</li>
								</ul>
							</div> -->

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>