<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Đơn hàng</title>
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
	<link href="<?= base_url()?>asset/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="<?= base_url()?>asset/css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="<?= base_url()?>asset/css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?= base_url()?>asset/css/shop.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/css/checkout.css">
	<link href="<?= base_url()?>asset/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="<?= base_url()?>asset/css/style.css" rel='stylesheet' type='text/css' />
	<link href="<?= base_url()?>asset/css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	 rel="stylesheet">

</head>

<body onload="initialize()">
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
						<li>Đơn hàng </li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!--checkout-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 mt-3">Đơn hàng </h3>
				<div class="checkout-right">
					<h4>Đơn hàng bạn hiện có:
						<span id="count"><?= count($name) ?> </span> sản phẩm
					</h4>
					<table class="timetable_sub tb1">
						<thead>
							<tr>
								<th>Mã sản phẩm</th>
								<th>Hình ảnh</th>
								<th>Số lượng</th>
								<th>Tên sản phẩm</th>
								<th>Đơn giá (VNĐ)</th>
								<th>Xoá</th>
							</tr>
						</thead>
						<tbody>
							<?php for($i =0; $i< count($name); $i++){?>
								<tr class="rem1">
								<td class="invert" name="pd_id[]"><?= $id[$i]?></td>
								<td class="invert-image">
									<a href="<?= base_url()?>home/single/<?= $id[$i]?>">
										<img src="<?= $image[$i]?>" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value" name="pdquantity[]"><?= $quantity[$i]?></div>
											<div class="entry value-plus active" >&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert" name="pdname[]"><?= $name[$i]?></td>

								<td class="invert" name="pdprice[]"><?= $price[$i]?></td>
								<td class="invert" >
									<div class="rem">
										<div class="close1 "><i class="far fa-times-circle"></i> </div>
									</div>
								</td>
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
				<div class="checkout-left row">
					<div class="col-md-4 checkout-left-basket">
						<h4><a  href="javascript:void(0)">Tiếp tục mua sắm</a></h4>
						<ul id="total">
							<?php for($i=0; $i<count($name); $i++){?>
							<li ><?= $name[$i]?>
								<i>-</i>
								<span><?= $quantity[$i]*$price[$i] ?> VNĐ</span>
							</li>
							<?php }?>
							<li>Tổng thanh toán
								<i>-</i>
								<?php $S= 0; for($i=0; $i<count($name); $i++){ $S += $quantity[$i]*$price[$i] ;}?>
								<span ><?= $S ?> VNĐ</span>
							</li>
						</ul>
					</div>
					<div class="col-md-8 address_form">
						<h4>Thêm đơn hàng mới</h4>
						<form id="formsubmit" action="<?= base_url()?>home/order" method="post" class="creditly-card-form agileinfo_form" autocomplete="off">
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
								<?php $S= 0; for($i=0; $i<count($name); $i++){ $S += $quantity[$i]*$price[$i] ;}?>
									<input type="hidden" id="totalmoney" name="totalmoney" value="<?= $S ?>">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">Họ tên: </label>
											<input class="billing-address-name form-control" type="text" id="name" name="name" placeholder="Nhập họ và tên" required>
										</div>
										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="controls" id="locationField">
													<label class="control-label">Địa chỉ:</label>
													<input class="form-control address" name="address" id="autocomplete" placeholder="Nhập địa chỉ của bạn" onFocus="geolocate()" type="text" required>
												</div>
											</div>
											<div class="card_number_grid_right">
												<div class="controls">
													<label class="control-label">Số điện thoại: </label>
													<input class="form-control" id="phone" name="phone" type="tel" placeholder="+84 / 00" required>
												</div>
											</div>
										</div>
									</div>
									<button class="submit check_out" >Đặt hàng</button>
								</div>
							</section>
						</form>
						<div class="checkout-right-basket">
							<a href="payment.html">Thanh toán trực tuyến </a>
						</div>
					</div>
					<div class="clearfix"> </div>

				</div>

			</div>

		</div>
	</section>
	<!--//checkout-->
	<!--footer -->
	<?php require 'footer.php';?>
	<!-- //footer -->
	<!--jQuery-->
	<script src="<?= base_url()?>asset/js/jquery-2.2.3.min.js"></script>
	<!-- newsletter modal -->
	<!--search jQuery-->
	<script src="<?= base_url()?>asset/js/modernizr-2.6.2.min.js"></script>
	<script src="<?= base_url()?>asset/js/classie-search.js"></script>
	<script src="<?= base_url()?>asset/js/demo1-search.js"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="<?= base_url()?>asset/js/minicart.js"></script>
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
				$.ajax({
					type: "POST",
					url: "url",
					data: "data",
					dataType: "dataType",
					success: function (response) {
						
					}
				});
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});

	</script>
	<!-- carousel -->
	<!-- easy-responsive-tabs -->
	<script src="<?= base_url()?>asset/js/easy-responsive-tabs.js"></script>
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
	<!--quantity-->
	<script>
		function loadtotal() {
			var S=0;
			var pdname = [];            
			$('td[name^=pdname]').each(function(){
				pdname.push($(this).text());
			});
			var pdprice = [];            
			$('td[name^=pdprice]').each(function(){
				pdprice.push($(this).text());
			});
			var pdquan = [];            
			$('div[name^=pdquantity]').each(function(){
				pdquan.push($(this).text());
			});
			$('#count').text(pdname.length);
			$.ajax({
				type: "POST",
				url: duongdan + "home/total",
				data: {
					pdname: pdname,
					pdprice: pdprice, 
					pdquan: pdquan
				},
				dataType: "json",
				success: function (res) {
					console.log(res);
					var html ='';
					// $.each (res, function (key, item){
						if (res['pdname'] != null) {
								for(var i=0; i< res['pdname'].length; i++){
								html += '<li >'+ res['pdname'][i];
								html +=	'<i>-</i>';
								html +=	'<span>'+ res['pdprice'][i]*res['pdquan'][i] +' VNĐ</span>';
								html += '</li>';
							}
							for(var i=0; i< res['pdname'].length; i++){
								S += res['pdprice'][i]*res['pdquan'][i];
							}
								html += '<li>Tổng thanh toán';
								html +=	'<i>-</i>';
								html += '<span >' + S + ' VNĐ </span>';
								html += '</li>';
						}
					$("#total").html(html);
					$("#totalmoney").val(S);
				}
			});
		}
	</script>
	<!-- Load order -->
	<script>
		$("#formsubmit").submit(function(e) {
		var form = $(this);
		var load = '<?= base_url() ?>';
		var url = form.attr('action');
		var pdname = [];            
		$('td[name^=pdname]').each(function(){
			pdname.push($(this).text());
		});
		var pdprice = [];            
		$('td[name^=pdprice]').each(function(){
			pdprice.push($(this).text());
		});
		var pdquan = [];            
		$('div[name^=pdquantity]').each(function(){
			pdquan.push($(this).text());
		});
		var pd_id = [];            
		$('td[name^=pd_id]').each(function(){
			pd_id.push($(this).text());
		});
			$.ajax({
				type: "POST",
				url: url,
				data: {
					name: $('#name').val(),
					address: $('#autocomplete').val(),
					phone: $('#phone').val(),
					totalmoney: $('#totalmoney').val(),
					pdname: pdname,
					pdprice: pdprice, 
					pdquan: pdquan,
					pd_id: pd_id,
				},
				success: function(data)
				{
					alert("Đặt hàng thành công !!!"); // show response from the php script.
					// $('#loadnew').click();
				}
				});
				var n =$('.sbmincart-remove').length ;
				for(var i=0; i <= n; i++){				
					$('.sbmincart-remove').click();
				}
				window.location = load + 'home';
			e.preventDefault(); // avoid to execute the actual submit of the form.
		});
	</script>
	<!-- Load order -->
	<script>
	 var duongdan = '<?= base_url() ?>';
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
			loadtotal();
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
			loadtotal();
		});

	</script>
	<!--quantity-->
	<!--close-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {			
				$(this).parents().eq(2).fadeOut('slow', function (c) {
					$(this).remove();
					loadtotal();
				});
			});
		});

	</script>
	<!--//close-->

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
	<script src="<?= base_url()?>asset/js/move-top.js"></script>
	<script src="<?= base_url()?>asset/js/easing.js"></script>
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
					
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});

	</script>
	<!--// end-smoth-scrolling -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
	<script>
		var autocomplete;
		function initialize() {
			autocomplete = new google.maps.places.Autocomplete(
				/** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
				{ types: ['geocode'] });
			google.maps.event.addListener(autocomplete, 'place_changed', function() {
			});
		}
	</script>
	<script src="<?= base_url()?>asset/js/bootstrap.js"></script>
	<!-- js file -->
</body>

</html>
