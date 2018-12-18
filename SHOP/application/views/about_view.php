<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Liên hệ</title>
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
						<li>Liên hệ</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!-- top Products -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">

			<div class="inner-sec-shop px-lg-4 px-3">
				<div class="about-content py-lg-5 py-3">
					<div class="row">

						<div class="col-lg-6 p-0">
							<img src="../images/banner1.jpg" alt="Goggles" class="img-fluid">
						</div>
						<div class="col-lg-6 about-info">
							<h3 class="tittle-w3layouts text-left mb-lg-5 mb-3">Châu Hoàng</h3>
							<p class="my-xl-4 my-lg-3 my-md-4 my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
								dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
								book.
							</p>

							<a href="<?= base_url() ?>home/shop" class="btn btn-sm animated-button gibson-three mt-4">Mua sắm ngay</a>

						</div>
					</div>
				</div>
				<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Đối tác</h3>
				<div class="pns-info">
					<div class="row mt-lg-5 mt-3">
						<?php foreach ($partners as $key => $value): ?>
						<div class="col-md-3 team-main-gd">
							<div class="team-grid text-center">
								<div class="team-img">
									<img class="img-fluid rounded" src="<?= $value['pn_image'] ?>" alt="">
								</div>
								<div class="team-info">
									<h4><?= $value['pn_name'] ?></h4>

									<ul class="d-flex justify-content-center py-3 social-icons">
										<li>
											<a target="_blank" rel="noopener noreferrer" href="https://<?= $value['pn_fb'] ?>">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li class="mx-3">
											<a target="_blank" rel="noopener noreferrer" href="https://<?= $value['pn_tw'] ?>">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a target="_blank" rel="noopener noreferrer" href="https://<?= $value['pn_gg'] ?>">
												<i class="fab fa-google-plus-g"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<?php endforeach ?>
					</div>
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
				<!--/meddle-->
				<div class="row">
					<div class="col-md-12 middle-slider my-4">
						<div class="middle-text-info ">
							<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Siêu khuyến mãi hè</h3>
							<div class="simply-countdown-custom" id="simply-countdown-custom"></div>
						</div>
					</div>
				</div>
				<!--//meddle-->

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
										</h3>
                                        <label>United States</label>
                                        <p style="text-align: center;"><?= $value['pn_des']?>.</p>
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
								<h3><?= $value['title'] ?></h3>
								<p> <?= $value['content'] ?>.</p>
							</figcaption>
						</figure>
					</div>
					<?php endforeach ?>
				</div>

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
	<!-- Count-down -->
	<script src="<?= base_url() ?>asset/js/simplyCountdown.js"></script>
	<link href="<?= base_url() ?>asset/css/simplyCountdown.css" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--// Count-down -->
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
	<!-- js file -->
</body>


</html>
