<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Trang chủ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="<?= base_url() ?>asset/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="<?= base_url() ?>asset/css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="<?= base_url() ?>asset/css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?= base_url() ?>asset/css/shop.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url() ?>asset/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?= base_url() ?>asset/css/owl.theme.css" type="text/css" media="all">
	<link href="<?= base_url() ?>asset/css/style.css" rel='stylesheet' type='text/css' />
	<link href="<?= base_url() ?>asset/css/fontawesome-all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Charmonman|Pacifico" rel="stylesheet">
	<!-- <link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet"> -->
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<?php require 'header.php';?>
		<!-- //header -->
		<!-- banner -->
		<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<!-- <ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol> -->
				<div class="carousel-inner" role="listbox">
					<?php $i =0	?>
					<?php foreach ($slides as $key => $value): ?>
					<div class="carousel-item <?php if ($i ==0 ) { echo 'active' ; } ?>" style="background-image: url(<?= $value['image'] ?>);">
						<img class="slide-image image-fluid" src="">

						<div class="carousel-caption text-center">
							<h3 style="text-transform: uppercase;">
								<?= $value['title'] ?>
								<span>
									<?= $value['content'] ?></span>
							</h3>
							<a href="<?= base_url() ?>home/shop" class="btn btn-sm animated-button gibson-three mt-4">Mua Ngay</a>
						</div>
					</div>
					<?php $i++ ?>
					<?php endforeach ?>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--//banner -->
		</div>
	</div>
	<!--//banner-sec-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 my-4">Sản phẩm mới dành cho bạn </h3>
				<div class="row">
					<!-- /womens -->
					<?php foreach ($women as $key => $value): ?>
					<div class="col-md-3 product-men women_two">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="<?= $value['pd_image'] ?>" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="<?= base_url() ?>home/single/<?= $value['id'] ?>" class="link-product-add-cart">Chi tiết</a>
										</div>
									</div>
									<span class="product-new-top">Mới</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4>
													<a href="<?= base_url() ?>home/single/<?= $value['id'] ?>">
														<?= $value['pd_name'] ?></a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">
														<?= $value['pd_price'] ?> vnđ</span>
												</div>
											</div>
										</div>
										<div class="googles single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="googles_item" value="<?= $value['pd_name']?>">
											<input type="hidden" name="item_number" value="<?= $value['id']?>">
											<input type="hidden" name="shipping" value="<?= $value['pd_image']?>">
											<input type="hidden" name="amount" value="<?= $value['pd_price']?>">
											<button type="submit" class="googles-cart pgoogles-cart">
												<i class="fas fa-cart-plus"></i>
											</button>
										</form>

										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
				<!-- //womens -->
				<!-- /mens -->
				<div class="row mt-lg-3 mt-0">
					<!-- /womens -->
					<?php foreach ($men as $key => $value): ?>
					<div class="col-md-3 product-men women_two">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="<?= $value['pd_image'] ?>" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="<?= base_url() ?>home/single/<?= $value['id'] ?>" class="link-product-add-cart">Chi tiết</a>
										</div>
									</div>
									<span class="product-new-top">Mới</span>
								</div>
								<div class="item-info-product">

									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4>
													<a href="<?= base_url() ?>home/single/<?= $value['id'] ?>">
														<?= $value['pd_name'] ?></a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">
														<?= $value['pd_price'] ?> vnđ</span>
												</div>
											</div>
										</div>
										<div class="googles single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="googles_item" value="<?= $value['pd_name']?>">
											<input type="hidden" name="item_number" value="<?= $value['id']?>">
											<input type="hidden" name="shipping" value="<?= $value['pd_image']?>">
											<input type="hidden" name="amount" value="<?= $value['pd_price']?>">
											<button type="submit" class="googles-cart pgoogles-cart">
												<i class="fas fa-cart-plus"></i>
											</button>
										</form>

										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach ?>
					<!-- /mens -->
				</div>
				<!--//row-->

				<!--/meddle-->
				<div class="row">
					<div class="col-md-12 middle-slider my-4">
						<div class="middle-text-info ">
							<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Siêu khuyến mãi mùa hè</h3>
							<div class="simply-countdown-custom" id="simply-countdown-custom"></div>
						</div>
					</div>
				</div>
				<!--//meddle-->
				<!--/slide-->
				<div class="slider-img mid-sec">
					<!--//banner-sec-->
					<div class="mid-slider">
					<h3 class="tittle-w3layouts my-lg-4 my-4">Sản phẩm nổi bật </h3>
						<div class="owl-carousel owl-theme row">
							<?php foreach ($products as $key => $value): ?>
							 
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="<?= $value['pd_image'] ?>" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="<?= base_url() ?>home/single/<?= $value['id'] ?>" class="link-product-add-cart">Chi tiết</a>
															</div>
														</div>
														<span class="product-new-top">Nổi bật</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="<?= base_url() ?>home/single/<?= $value['id'] ?>"><?= $value['pd_name'] ?> </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money "><?= $value['pd_price'] ?> vnđ</span>
																	</div>
																</div>
															</div>
															<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="<?= $value['pd_name']?>">
																	<input type="hidden" name="item_number" value="<?= $value['id']?>">
																	<input type="hidden" name="shipping" value="<?= $value['pd_image']?>">
																	<input type="hidden" name="amount" value="<?= $value['pd_price']?>">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						
							<?php endforeach ?>
							<!-- 5 sản phẩm -->
						</div>
					</div>
				</div>
				<!-- /testimonials -->
				<div class="testimonials py-lg-4 py-3 mt-4">
					<div class="testimonials-inner py-lg-4 py-3">
						<h3 class="tittle-w3layouts text-center my-lg-4 my-4">CAM KẾT</h3>
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
							<?php $i=0?>
							<?php foreach ($partners as $key => $value): ?>
								 
                                <div class="carousel-item <?php if($i == 0){ echo 'active';}?>">
                                    <div class="testimonials_grid text-center">
                                        <h3><?= $value['pn_name']?>
											<span><?= $value['pn_name']?></span>
										</h3>
                                        <label>United States</label>
                                        <p><?= $value['pn_des']?>.</p>
										<ul class="footer-social">
											<li class="mx-2">
												<a href="<?= $value['pn_fb']?>">
													<span class="fab fa-facebook-f"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="<?= $value['pn_tw']?>">
													<span class="fab fa-twitter"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="<?= $value['pn_gg']?>">
													<span class="fab fa-google-plus-g"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-linkedin-in"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fas fa-rss"></span>
												</a>
											</li>
										</ul>
                                    </div>
                                </div>
								<?php $i++?>
							<?php endforeach ?>

                                <a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="fas fa-long-arrow-alt-left"></span>
									<span class="sr-only">Previous</span>
								</a>
                                <a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>

								</a>
                            </div>
						</div>
					</div>
				</div>
				<!-- //testimonials -->
				<div class="row galsses-grids pt-lg-5 pt-3">
					<?php foreach ($bannerbot as $key => $value): ?>
					<div class="col-lg-6 galsses-grid-left">
						<figure class="effect-lexi">
							<img src="<?= $value['image'] ?>" alt="" class="img-fluid">
							<figcaption>
								<h3>
									<?= $value['title'] ?>
								</h3>
								<p>
									<?= $value['content'] ?>.</p>
							</figcaption>
						</figure>
					</div>
					<?php endforeach ?>
				</div>
				<!-- /grids -->
				<div class="bottom-sub-grid-content py-lg-5 py-3">
					<div class="row">
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="fas fa-handshake"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Nhân viên thân thiện</h4>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
							<p>
								<a href="<?= base_url()?>home/shop" class="btn btn-sm animated-button gibson-three mt-4">Mua sắm ngay</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon"> 
								<span class="fas fa-thumbs-up"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Hàng đảm bảo chất lượng</h4>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
							<p>
								<a href="<?= base_url()?>home/shop" class="btn btn-sm animated-button gibson-three mt-4">Mua sắm ngay</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="fas fa-lock"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Tuyệt đối an toàn</h4>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
							<p>
								<a href="<?= base_url()?>home/shop" class="btn btn-sm animated-button gibson-three mt-4">Mua sắm ngay</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
					</div>
				</div>
				<!-- //grids -->
				<!-- /clients-sec -->
				<div class="testimonials p-lg-5 p-3 mt-4">
					<div class="row last-section">
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-gift"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>KHUYẾN MÃI KHỦNG</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-shield-alt"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>ĐẢM BẢO AN TOÀN</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-dollar-sign"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>TIẾT KIỆM CHI PHÍ</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-truck"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>GIAO HÀNG NHANH CHÓNG</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //clients-sec -->
			</div>
		</div>
	</section>
	<!-- about -->
	<!--footer -->
	<?php require 'footer.php'; ?>
	<!-- //footer -->

	<!--jQuery-->
	<script src="<?= base_url() ?>asset/js/jquery-2.2.3.min.js"></script>
	<!-- newsletter modal -->
	<!-- Modal -->
	<!-- Modal -->
	<?php if($this->session->userdata('email') == '') { ?>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5 mx-auto mw-100">
					<h6>Xả ga mua sắm cùng chúng tôi</h6>
					<h3>Giảm giá khủng cho người đăng kí mới</h3>
					<div class="login newsletter">
						<form action="<?= base_url()?>home/singup" method="post" autocomplete="off">
							<div class="form-group">
								<label class="mb-2">Tên tài khoản</label>
								<input type="text" name="name" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder=""
								 required="">
							</div>
							<div class="form-group">
								<label class="mb-2">Địa chỉ email</label>
								<input type="email" name=email class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder=""
								 required="">
							</div>
							<div class="form-group">
								<label class="mb-2">Số điện thoại</label>
								<input type="tel" name="phone" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder=""
								 required="">
							</div>
							<div class="form-group">
								<label class="mb-2">Mật khẩu</label>
								<input type="password" name="pass" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder=""
								 required="">
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Đăng kí ngay</button>
						</form>
						<p class="text-center">
							<a href="#">Tôi đã có tài khoản</a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<?php }?>
	<script>
		$(document).ready(function () {
			$("#myModal").modal();
		});
	</script>
	<!-- // modal -->

	<!--search jQuery-->
	<script src="<?= base_url() ?>asset/js/modernizr-2.6.2.min.js"></script>
	<script src="<?= base_url() ?>asset/js/classie-search.js"></script>
	<script src="<?= base_url() ?>asset/js/demo1-search.js"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="<?= base_url() ?>asset/js/minicart.js"></script>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- Count-down -->
	<script src="<?= base_url() ?>asset/js/simplyCountdown.js"></script>
	<link href="<?= base_url() ?>asset/css/simplyCountdown.css" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 1,
			day: 11
			console.log(month);
		});
	</script>
	<!--// Count-down -->
	<script src="<?= base_url() ?>asset/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					900: {
						items: 3,
						nav: false
					},
					1000: {
						items: 4,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})

	</script>

	<!-- //end-smooth-scrolling -->


	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});

	</script>
	<!-- //dropdown nav -->
	<script src="<?= base_url() ?>asset/js/move-top.js"></script>
	<script src="<?= base_url() ?>asset/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});

	</script>
	<script>
		$(document).ready(function () {
			/*
									var defaults = {
										  containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									 };
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});

	</script>
	<!--// end-smoth-scrolling -->

	<script src="<?= base_url() ?>asset/js/bootstrap.js"></script>
	<!-- js file -->
</body>

</html>
