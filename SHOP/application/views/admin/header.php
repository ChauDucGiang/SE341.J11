<!-- Page Loader -->
<style src="<?= base_url() ?>asset/css/fontawesome-all.css">
	body {
            overflow-y: scroll;
        }
    </style>
<div class="page-loader-wrapper">
	<div class="loader">
		<div class="preloader">
			<div class="spinner-layer pl-red">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div>
				<div class="circle-clipper right">
					<div class="circle"></div>
				</div>
			</div>
		</div>
		<p>Vui lòng chờ ...</p>
	</div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
	<div class="search-icon">
		<i class="material-icons">search</i>
	</div>
	<input type="text" placeholder="START TYPING...">
	<div class="close-search">
		<i class="material-icons">close</i>
	</div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
			 aria-expanded="false"></a>
			<a href="javascript:void(0);" class="bars"></a>
			<a class="navbar-brand" href="widgets/../../index.html">QUẢN LÝ WEB</a>
		</div>
	</div>
</nav>
<!-- #Top Bar -->
<section>
	<!-- Left Sidebar -->
	<aside id="leftsidebar" class="sidebar">
		<!-- User Info -->
		<div class="user-info">
			<div class="image">
				<img src="<?= base_url() ?>asset//images/team4.jpg" width="48" height="48" alt="User" />
			</div>
			<div class="info-container">
				<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('email')?></div>
				<div class="email"><?= $this->session->userdata('email')?></div>
				<div class="btn-group user-helper-dropdown">
					<i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
					<ul class="dropdown-menu pull-right">
						<li><a href="javascript:void(0);"><i class="material-icons">person</i>Thông tin</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?= base_url()?>admin/logout"><i class="material-icons">input</i>Đăng xuất</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- #User Info -->
		<!-- Menu -->
		<div class="menu">
			<ul class="list">
				<li class="header">MENU</li>
				<li id="users">
					<a href="<?= base_url() ?>admin/users">
						<i class="material-icons">account_circle</i>
						<span>Khách hàng</span>
					</a>
				</li>
				<li id="partners">
					<a href="<?=base_url()?>admin/partners">
						<i class="material-icons">account_box</i>
						<span>Đối tác</span>
					</a>
				</li>
				<li id="products">
					<a href="javascript:void(0);" class="menu-toggle">
						<i class="material-icons">widgets</i>
						<span>Sản phẩm</span>
					</a>
					<ul class="ml-menu">
						<li>
							<a href="javascript:void(0);" class="menu-toggle">
								<span>Danh mục</span>
							</a>
							<ul class="ml-menu">
								<?php foreach ($listpd as $key => $value): ?>
								<li>
									<a href="<?=base_url()?>admin/products/<?= $value['id_list']?>">
										<?= $value['listpd_name']?></a>
								</li>
								<?php endforeach ?>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0);" class="menu-toggle">
								<span>Hãng sản xuất</span>
							</a>
							<ul class="ml-menu">
								<?php foreach ($allpartners as $key => $value): ?>
								<li>
									<a href="<?=base_url()?>admin/products/<?= $value['id_pn']?>">
										<?= $value['pn_name']?></a>
								</li>
								<?php endforeach ?>
							</ul>
						</li>
					</ul>
				</li>
				<li id="banner_slide">
					<a href="<?= base_url()?>admin/editbanner">
						<i class="material-icons">slideshow</i>
						<span>Banners & Slides</span>
					</a>
				</li>
				<li>
					<a href="<?=base_url()?>admin/loadOrder">
						<i class="material-icons">view_list</i>
						<span>Đơn hàng</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- #Menu -->
		<!-- Footer -->
	</aside>
	<!-- #END# Left Sidebar -->
	<!-- Right Sidebar -->
	<aside id="rightsidebar" class="right-sidebar">
		<ul class="nav nav-tabs tab-nav-right" role="tablist">
			<li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
			<li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
		</ul>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active in active" id="skins">
				<ul class="demo-choose-skin">
					<li data-theme="red" class="active">
						<div class="red"></div>
						<span>Red</span>
					</li>
					<li data-theme="pink">
						<div class="pink"></div>
						<span>Pink</span>
					</li>
					<li data-theme="purple">
						<div class="purple"></div>
						<span>Purple</span>
					</li>
					<li data-theme="deep-purple">
						<div class="deep-purple"></div>
						<span>Deep Purple</span>
					</li>
					<li data-theme="indigo">
						<div class="indigo"></div>
						<span>Indigo</span>
					</li>
					<li data-theme="blue">
						<div class="blue"></div>
						<span>Blue</span>
					</li>
					<li data-theme="light-blue">
						<div class="light-blue"></div>
						<span>Light Blue</span>
					</li>
					<li data-theme="cyan">
						<div class="cyan"></div>
						<span>Cyan</span>
					</li>
					<li data-theme="teal">
						<div class="teal"></div>
						<span>Teal</span>
					</li>
					<li data-theme="green">
						<div class="green"></div>
						<span>Green</span>
					</li>
					<li data-theme="light-green">
						<div class="light-green"></div>
						<span>Light Green</span>
					</li>
					<li data-theme="lime">
						<div class="lime"></div>
						<span>Lime</span>
					</li>
					<li data-theme="yellow">
						<div class="yellow"></div>
						<span>Yellow</span>
					</li>
					<li data-theme="amber">
						<div class="amber"></div>
						<span>Amber</span>
					</li>
					<li data-theme="orange">
						<div class="orange"></div>
						<span>Orange</span>
					</li>
					<li data-theme="deep-orange">
						<div class="deep-orange"></div>
						<span>Deep Orange</span>
					</li>
					<li data-theme="brown">
						<div class="brown"></div>
						<span>Brown</span>
					</li>
					<li data-theme="grey">
						<div class="grey"></div>
						<span>Grey</span>
					</li>
					<li data-theme="blue-grey">
						<div class="blue-grey"></div>
						<span>Blue Grey</span>
					</li>
					<li data-theme="black">
						<div class="black"></div>
						<span>Black</span>
					</li>
				</ul>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="settings">
				<div class="demo-settings">
					<p>GENERAL SETTINGS</p>
					<ul class="setting-list">
						<li>
							<span>Report Panel Usage</span>
							<div class="switch">
								<label><input type="checkbox" checked><span class="lever"></span></label>
							</div>
						</li>
						<li>
							<span>Email Redirect</span>
							<div class="switch">
								<label><input type="checkbox"><span class="lever"></span></label>
							</div>
						</li>
					</ul>
					<p>SYSTEM SETTINGS</p>
					<ul class="setting-list">
						<li>
							<span>Notifications</span>
							<div class="switch">
								<label><input type="checkbox" checked><span class="lever"></span></label>
							</div>
						</li>
						<li>
							<span>Auto Updates</span>
							<div class="switch">
								<label><input type="checkbox" checked><span class="lever"></span></label>
							</div>
						</li>
					</ul>
					<p>ACCOUNT SETTINGS</p>
					<ul class="setting-list">
						<li>
							<span>Offline</span>
							<div class="switch">
								<label><input type="checkbox"><span class="lever"></span></label>
							</div>
						</li>
						<li>
							<span>Location Permission</span>
							<div class="switch">
								<label><input type="checkbox" checked><span class="lever"></span></label>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</aside>
	<!-- #END# Right Sidebar -->
</section>
