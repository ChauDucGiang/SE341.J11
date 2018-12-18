
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Góp ý</title>
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
	<link href="<?= base_url() ?>asset/css/contact.css" rel='stylesheet' type='text/css' />
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
							<a href="<?= base_url() ?>home">Trang chủ</a>
							<i>|</i>
						</li>
						<li>Góp ý</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!-- top Products -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Góp ý</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">Chúng tôi luôn lắng nghe góp ý từ bạn .</p>
				<div class="address row">

					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Địa chỉ</h6>
								<p> Phước Long B - Quận 9
								</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Email</h6>
								<p>
									<a href="mailto:chau.ducgiang@gmail.com"> chau.ducgiang@gmail.com</a>
								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Điện thoại</h6>
								<p>+1 234 567 8901</p>

							</div>

						</div>
					</div>
				</div>
				<div class="contact_grid_right">
					<!-- <form action="home/sendmail" method="post"> -->
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
								<div class="form-group">
									<label class="my-2">Tên</label>
									<input class="form-control" type="text" name="Name" id="name" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="Email" id="email" placeholder="" required="">
								</div>
								<div class="form-group">
									<label class="my-2">Tiêu đề</label>
									<input class="form-control" type="text" name="Subject" id="subject" placeholder="" required="">
								</div>
							</div>
							<div class="col-md-6 con-right addcontent">
								<div class="form-group">
									<label>Nội dung</label>
									<textarea  id="content" placeholder="" required=""></textarea>
								</div>
								<input class="form-control" id="sendmail" type="submit" value="Submit">

							</div>
						</div>
					<!-- </form> -->
				</div>
			</div>
		</div>
	</section>
	<div class="contact-map">

	<iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJv9WaflgndTERkTy-yPlm-go&key=AIzaSyDriTt5EFHOx87zDps0Cr-j-ANtcrhye0k" 
		    class="map" style="border:0" allowfullscreen=""></iframe>
	</div>

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

	<script >
		var duongdan = '<?= base_url() ?>';
		$('#sendmail').click(function (e) { 
			e.preventDefault();
			$.ajax({
                        type: "POST",
                        url: duongdan + 'home/sendmail',
                        dataType: "json",
                        data: {
                            name: $('#name').val(),
                            email: $('#email').val(),
                            subject: $('#subject').val(),
                            content: $('#content').val()
                        },
                    })
                    .done(function () {
                        console.log("success");
                    })
                    .fail(function () {
                        console.log("error");
                    })
                    .always(function (res) {
                        console.log("complete");
						// content =	'<input class="form-control text-xs-center alert-danger" type="text" placeholder="Ý kiến của bạn đã được chúng tôi tiếp nhận !" readonly>';
						content = '<div class="text-xs-center alert alert-success">';
						content += 'Ý kiến đã được tiếp nhận !'
						content += '</div>',
                        $('.addcontent').append(content);
                    });
		});
	</script>
	<script src="<?= base_url() ?>asset/js/bootstrap.js"></script>
	<!-- js file -->
</body>

</html>
