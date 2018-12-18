<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Cửa hàng</title>
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
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/jquery-ui1.css">
	<link href="<?= base_url() ?>asset/css/style.css" rel='stylesheet' type='text/css' />
	<link href="<?= base_url() ?>asset/css/fontawesome-all.css" rel="stylesheet">
	<!-- <link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet"> -->
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<?php require 'header.php';?>
    </div>
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="<?= base_url()?>home">Trang chủ</a>
							<i>|</i>
						</li>
						<li>Cửa hàng</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 mt-3">Sản phẩm mới dành cho bạn </h3>
					<div class="row">
						<!-- product left -->
						<div class="side-bar col-lg-3">
							<div class="search-hotel">
								<h3 class="agileits-sear-head">Tìm kiếm ...</h3>
								<form action="<?= base_url()?>home/search" method="get">
										<input class="form-control" type="search" name="search" placeholder="Tìm kiếm ..." required="">
										<button class="btn1">
												<i class="fas fa-search"></i>
										</button>
										<div class="clearfix"> </div>
									</form>
							</div>
							<!-- price range -->
							<div class="range">
								<h3 class="agileits-sear-head">Giá (nghìn VNĐ)</h3>
								<ul class="dropdown-menu6">
									<li>
										<div id="slider-range"></div>
										<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" readonly/>
									</li>
								</ul>
							</div>
							<!-- //price range -->
							<!--preference -->
							<div class="left-side">
								<h3 class="agileits-sear-head">Mẫu dành cho</h3>
								<ul>
									<!-- <li>
										<span class="span">Nam</span>
									</li> -->
									<form>
										<input type="radio" name="colors" id="red"> Nam <br>
										<input type="radio" name="colors" id="blue"> Nữ
									</form>
									<!-- <li>
										<input type="radio" class="checked">
										<span class="span">Nữ</span>
									</li> -->

								</ul>
							</div>
							<!-- // preference -->
							<!-- discounts -->
							<div class="left-side">
								<h3 class="agileits-sear-head">Discount</h3>
								<ul>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">5% or More</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">10% or More</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">20% or More</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">30% or More</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">50% or More</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">60% or More</span>
									</li>
								</ul>
							</div>
							<!-- //discounts -->
							<!-- deals -->
							<div class="deal-leftmk left-side">
								<h3 class="agileits-sear-head">Special Deals</h3>
								<div class="special-sec1">
									<div class="img-deals">
										<img src="images/s1.jpg" alt="">
									</div>
									<div class="img-deal1">
										<h3>Farenheit (Grey)</h3>
										<a href="single.html">$575.00</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="special-sec1">
									<div class="col-xs-4 img-deals">
										<img src="images/s2.jpg" alt="">
									</div>
									<div class="col-xs-8 img-deal1">
										<h3>Opium (Grey)</h3>
										<a href="single.html">$325.00</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="special-sec1">
										<div class="col-xs-4 img-deals">
											<img src="images/m2.jpg" alt="">
										</div>
										<div class="col-xs-8 img-deal1">
											<h3>Azmani Round</h3>
											<a href="single.html">$725.00</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="special-sec1">
											<div class="col-xs-4 img-deals">
												<img src="images/m4.jpg" alt="">
											</div>
											<div class="col-xs-8 img-deal1">
												<h3>Farenheit Oval</h3>
												<a href="single.html">$325.00</a>
											</div>
											<div class="clearfix"></div>
										</div>
							</div>
							<!-- //deals -->
						</div>
						<!-- //product left -->
						<!--/product right-->
						<div class="left-ads-display col-lg-9">
							<div class="wrapper_top_shop">
								<div class="row">
									<?php foreach ($wrapper as $key => $value): ?>
										<div class="col-md-6 shop_left">
											<img src="<?= $value['image'] ?>" alt="">
											<h6><?= $value['content'] ?></h6>
										</div>
									<?php endforeach ?>
											<!-- <div class="col-md-6 shop_right">
												<img src="images/banner4.jpg" alt="">
												<h6>50% off</h6>
											</div> -->
						
								</div>
								<form action="" id="myForm" method="POST">
									<div class="row">
										<!-- /womens -->
										<?php foreach ($products as $key => $value): ?>
										<input class="page" value="" type="hidden" name="page">
										<div class="col-md-3 product-men women_two shop-gd">
											<div class="product-googles-info googles" style="margin: 10px 5px;">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="<?= $value['pd_image']?>" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="<?= base_url()?>home/single/<?= $value['id']?>" class="link-product-add-cart">Chi tiết</a>
															</div>
														</div>
														<span class="product-new-top">Mới</span>
													</div>
													<div class="item-info-product">
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="<?= base_url()?>home/single/<?= $value['id']?>"><?= $value['pd_name']?></a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money "><?= $value['pd_price']?></span>
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
								</form>
							</div>
						</div>
						<!--//product right-->
					</div>
					<!--/slide-->
				<div class="slider-img mid-sec mt-lg-5 mt-2">
						<!--//banner-sec-->
						<h3 class="tittle-w3layouts text-left my-lg-4 my-3">Giá ưu đãi</h3>
						<div class="mid-slider">
							<div class="owl-carousel owl-theme row">
							<?php foreach ($pd as $key => $value): ?>
							<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="<?= $value['pd_image']?>" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="<?= base_url()?>home/single/<?= $value['id']?>" class="link-product-add-cart">Chi tiết</a>
															</div>
														</div>
														<span class="product-new-top">Ưu đãi</span>
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="<?= base_url()?>home/single/<?= $value['id']?>"><?= $value['pd_name']?> </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money "><?= $value['pd_price']?></span>
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
							</div>
						</div>
					</div>
					<!--//slider-->
				</div>
			</div>
			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-center">
					<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1">Prev</a>
					</li>
					<?php for($i =1; $i<= ceil(count($lst_products)/12); $i++){ ?>
						<li class="page-item <?php if($i == $page){echo 'active disabled';}?>"><a class="page-link submit" data-page="<?= $i?>" href="javascript:void(0);"><?= $i ?></a></li>
					<?php }?>
					<li>
					<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>
		</section>
		<!--footer -->
		<?php require 'footer.php';?>
		<!-- //footer -->

		<!--jQuery-->
		<script src="<?= base_url() ?>asset/js/jquery-2.2.3.min.js"></script>
		<!-- newsletter modal -->
		<!--search jQuery-->
		<script src="<?= base_url() ?>asset/js/modernizr-2.6.2.min.js"></script>
		<script src="<?= base_url() ?>asset/js/classie-search.js"></script>
		<script src="<?= base_url() ?>asset/js/demo1-search.js"></script>
		<!--//search jQuery-->
		<!-- cart-js -->
		<script src="<?= base_url() ?>asset/js/minicart.js"></script>
		<script>
			$('.submit').click(function () {

				var page = $(this).attr('data-page');
				$(".page").attr("value", page);
				console.log(page);
				$('#myForm').submit();
		});

		</script>
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
		<!-- price range (top products) -->
		<script src="<?= base_url() ?>asset/js/jquery-ui.js"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 1000,
					values: [50, 60],
					slide: function (event, ui) {
						$("#amount").val(ui.values[0] + "---" + ui.values[1]);
					}
				});
				$("#amount").val($("#slider-range").slider("values", 0) + "---"   + $("#slider-range").slider("values", 1) );

			});
		</script>
		<!-- //price range (top products) -->

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
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
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
