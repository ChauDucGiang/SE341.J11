<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Trợ giúp</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Gọi</li>
						<li class="number-phone mt-3">+84 1234 5678 099</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts" >
						<a class="navbar-brand" href="<?= base_url() ?>home" style="font-family: 'Pacifico', cursive;">
							Châu Hoàng </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<li class="button-log">
							<a class="btn-open" href="javascript:void(0)">
							<?php if($this->session->userdata('email') != '') { ?>
									<span class="email" aria-hidden="true"> <?= $this->session->userdata('name') ?></span>
								<?php } else { ?> 
								<span class="fa fa-user" aria-hidden="true"></span>
							<?php } ?>
							</a>
						</li>
						<?php if($this->session->userdata('email') != '') { ?>
						<li class="galssescart galssescart2 cart cart box_1">
							<form action="javascript:void(0)" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_googles_cart" type="submit" name="submit" value="">
									Giỏ hàng
									<i class="fas fa-cart-arrow-down"></i>
								</button>
							</form>
						</li>
						<?php } ?>
					</ul>
					<!---->
					<?php if($this->session->userdata('email') == '') { ?>
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Đăng nhập</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="<?= base_url()?>home/login" method="post">
									<div class="form-group">
										<label class="mb-2">Email</label>
										<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="" >
										<small id="emailHelp" class="form-text text-muted">Email của bạn luôn được chúng tôi giữ kín.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Mật khẩu</label>
										<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="" required="">
									</div>
									<button type="submit" class="btn btn-primary submit mb-4">Đăng nhập</button>
									<button type="button" class="btn btn-primary submit mb-4"><a href ="<?= base_url()?>home">Đăng kí</a></button>
								</form>
							</div>
							<!---->
						</div>
					</div>
					<?php }?>
					<!---->
					<!---->
					<?php if($this->session->userdata('email') != '') { ?>
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Thông tin tài khoản</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="<?= base_url()?>home/logout" method="post">
									<div class="form-group">
										<label class="mb-2">Tên tài khoản</label>
										<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="" readonly value="<?= $this->session->userdata('name') ?>">
									</div>
									<div class="form-group">
										<label class="mb-2">Email</label>
										<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="" readonly value="<?= $this->session->userdata('email') ?>">
										<small id="emailHelp" class="form-text text-muted">Email của bạn luôn được chúng tôi giữ kín.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Số điện thoại</label>
										<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="" readonly value="<?= $this->session->userdata('phone') ?>">
										<small id="emailHelp" class="form-text text-muted">Số điện thoại của bạn luôn được chúng tôi giữ kín.</small>
									</div>
									<button type="submit" class="btn btn-primary submit mb-4 logout">Đăng xuất</button>
								</form>
							</div>
							<!---->
						</div>
					</div>
					<?php }?>
					<!---->
				</div>
			</div>
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form action="<?=base_url()?>home/search" method="get" class="d-flex">
						<input class="form-control" type="search" name="search" placeholder="Tìm kiếm ..." required="">
						<button type="submit" class="btn btn-primary submit">
							<i class="fas fa-search"></i>
						</button>
					</form>

				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="<?= base_url() ?>home">Trang chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url() ?>home/about">Liên hệ</a>
						</li>
						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Features
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="shop.html">Designer Glasses</a>
												</li>
												<li class="">
													<a href="shop.html"> Ray-Ban</a>
												</li>
												<li>
													<a href="shop.html">Prescription Glasses</a>
												</li>
												<li class="mt-3">
													<h5>View more pages</h5>
												</li>
												<li class="mt-2">
													<a href="about.html">About</a>
												</li>
												<li>
													<a href="customer.html">Customers</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.html">
													<img src="images/g2.jpg" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub">Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.html">
													<img src="images/g3.jpg" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li> -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Cửa hàng
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Mặt hàng </h5>
											<ul>
											<?php foreach ($listpd as $key => $value): ?>
												<li class="media-mini mt-3">

													<a href="<?= base_url()?>home/listpd/<?= $value['id_list']?>"><?= $value['listpd_name']?></a>
												</li>
											<?php endforeach ?>
										
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Hãng sản xuất </h5>
											<ul>
											<?php foreach ($partners as $key => $value): ?>
												<li class="media-mini mt-3">

													<a href="<?= base_url()?>home/partners"><?= $value['pn_name']?></a>
												</li>
											<?php endforeach ?>
										
											</ul>

										</div>
										<div class="col-md-4 media-list span4 text-left">

											<h5 class="tittle-w3layouts-sub-nav">Sản phẩm nổi bật </h5>
											<div class="media-mini mt-3">
												<a href="shop.html">
													<img src="images/g1.jpg" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url() ?>home/contact">Góp ý</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
