<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?= $result['0']['pd_name'] ?></title>
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
	<link href="<?= base_url() ?>asset/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?= base_url() ?>asset/css/flexslider.css" type="text/css" media="screen" />
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
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="<?= base_url()?>home">Trang chủ</a>
							<i>|</i>
						</li>
						<li>Chi tiết</li>
					</ul>
				</div>
			</div>

		</div>
		
	</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
					<div class="row">
							<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">
					
											<ul class="slides">
												<li data-thumb="<?= $result[0]['pd_image'] ?>">
													<div class="thumb-image"> <img src="<?= $result[0]['pd_image'] ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
												<li data-thumb="<?= $result[0]['pd_image'] ?>">
													<div class="thumb-image"> <img src="<?= $result[0]['pd_image'] ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
												<li data-thumb="<?= $result[0]['pd_image'] ?>">
													<div class="thumb-image"> <img src="<?= $result[0]['pd_image'] ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									<h3><?= $result[0]['pd_name'] ?></h3>
									<p><span class="item_price"><?= $result[0]['pd_price'] ?> vnđ</span>
										<del>$1,199</del>
									</p>
									<div class="description">
										<h5>Check delivery, payment options and charges at your location</h5>
										<form action="#" method="post">
												<input class="form-control" type="text" name="Email" placeholder="Please enter..." required="">
											<input type="submit" value="Check">
										</form>
									</div>
									<div class="color-quality">
										<div class="color-quality-right">
											<h5>Quality :</h5>
											<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
													<option value="null">5 Qty</option>
													<option value="null">6 Qty</option> 
													<option value="null">7 Qty</option>					
													<option value="null">10 Qty</option>								
												</select>
										</div>
									</div>
									<div class="occasional">
										<h5>Types :</h5>
										<div class="colr ert">
											<label class="radio"><input type="radio" name="radio" checked=""><i></i> Irayz Butterfly(Black)</label>
										</div>
										<div class="colr">
											<label class="radio"><input type="radio" name="radio"><i></i> Irayz Butterfly (Grey)</label>
										</div>
										<div class="colr">
											<label class="radio"><input type="radio" name="radio"><i></i> Irayz Butterfly (white)</label>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="occasion-cart">
											<div class="googles single-item singlepage">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="googles_item" value="<?= $result[0]['pd_name'] ?>">
													<input type="hidden" name="item_number" value="<?= $result[0]['id'] ?>">
													<input type="hidden" name="shipping" value="<?= $result[0]['pd_image'] ?>">
													<input type="hidden" name="amount" value="<?= $result[0]['pd_price'] ?>">
													<button type="submit" class="googles-cart pgoogles-cart">
													Thêm vào giỏ hàng	<i class="fas fa-cart-plus"></i>
													</button>
												</form>

											</div>
									</div>
									<ul class="footer-social text-left mt-lg-4 mt-3">
											<li>Share On : </li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-facebook-f"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-twitter"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
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
								<div class="clearfix"> </div>
								<!--/tabs-->
								<div class="responsive_tabs">
									<div id="horizontalTab">
										<ul class="resp-tabs-list">
											<li>Mô tả</li>
											<li>Đánh giá</li>
											<li>Thông tin sản phẩm</li>
										</ul>
										<div class="resp-tabs-container">
											<!--/tab_one-->
											<div class="tab1">
					
												<div class="single_page">
													<h6><?= $result[0]['pd_name'] ?></h6>
													<p><?= $result[0]['pd_des'] ?></p>
													<p class="para"></p>
												</div>
											</div>
											<!--//tab_one-->
											<div class="tab2">
					
												<div class="single_page">
													<div class="bootstrap-tab-text-grids">
														<div class="bootstrap-tab-text-grid">
															<div class="bootstrap-tab-text-grid-left">
																<img src="images/team1.jpg" alt=" " class="img-fluid">
															</div>
															<div class="bootstrap-tab-text-grid-right">
																<ul>
																	<li><a href="#">Admin</a></li>
																	<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
																</ul>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam,
																	quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
																	autem vel eum iure reprehenderit.</p>
															</div>
															<div class="clearfix"> </div>
														</div>
														<div class="add-review">
															<h4>add a review</h4>
															<form action="#" method="post">
																	<input class="form-control" type="text" name="Name" placeholder="Enter your email..." required="">
																<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
																<textarea name="Message" required=""></textarea>
																<input type="submit" value="SEND">
															</form>
														</div>
													</div>
					
												</div>
											</div>
											<div class="tab3">
					
												<div class="single_page">
													<h6><?= $result[0]['pd_name'] ?></h6>
													<p><?= $result[0]['pd_info'] ?></p>
													<p class="para"></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--//tabs-->
					
					</div>
				</div>
			</div>
				<div class="container-fluid">
					<!--/slide-->
					<div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
						<!--//banner-sec-->
						<h3 class="tittle-w3layouts text-left my-lg-4 my-3">Sản phẩm nổi bật</h3>
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
																<a href="single.html" class="link-product-add-cart">Xem chi tiết</a>
															</div>
														</div>
														<span class="product-new-top">Nổi bật</span>
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
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
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

		<!-- single -->
		<script src="<?= base_url() ?>asset/js/imagezoom.js"></script>
		<!-- single -->
		<!-- script for responsive tabs -->
		<script src="<?= base_url() ?>asset/js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!-- FlexSlider -->
		<script src="<?= base_url() ?>asset/js/jquery.flexslider.js"></script>
		<script>
			// Can also be used with $(document).ready()
			$(window).load(function () {
				$('.flexslider1').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
		</script>
		<!-- //FlexSlider-->

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
