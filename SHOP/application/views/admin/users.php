<?php if($this->session->userdata('email') == '') {
	redirect(base_url().'admin','refresh');
} else { ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
	<!-- Favicon-->
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="<?= base_url() ?>asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?= base_url() ?>asset/plugins/node-waves/waves.css" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="<?= base_url() ?>asset/plugins/animate-css/animate.css" rel="stylesheet" />

	<!-- Morris Chart Css-->
	<link href="<?= base_url() ?>asset/plugins/morrisjs/morris.css" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="<?= base_url() ?>asset/css/stylelist.css" rel="stylesheet">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?= base_url() ?>asset/css/themes/all-themes.css" rel="stylesheet" />
	<link href="<?= base_url() ?>asset/css/edit.css" rel="stylesheet" />
	<link href="<?= base_url() ?>asset/css/useredit.css" rel="stylesheet" />
</head>

<body class="theme-red">
	<!-- header -->
	<?php require 'header.php';?>
	<!-- //header -->
	<section class="content">
		<!-- Edit Modal HTML -->
		<div id="editEmployeeModal" class="modal fade" style="margin:auto; width:500px">
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="body">
							<form action="<?= base_url()?>/admin/edituser" method="POST">
								<label for="">Tên</label>
								<div class="form-group">
									<div class="form-line">
										<input type="text" name="username" id="name_edit" class="form-control" value="">
									</div>
								</div>
								<input type="hidden" name="password" id="pass_edit" class="form-control" value="">
								<input type="hidden" name="id" id="id_edit" class="form-control" value="">
								<label for="">Email</label>
								<div class="form-group">
									<div class="form-line">
										<input type="text" name="email" id="email_edit" class="form-control" value="">
									</div>
								</div>
								<label for="">Điện thoại</label>
								<div class="form-group">
									<div class="form-line">
										<input type="text" name="phone" id="phone_edit" class="form-control" value="">
									</div>
								</div>
								<br>
								<div class="modal-footer">
									<input type="button" class="btn btn-default" data-dismiss="modal" value="Huỷ">
									<input type="submit" class="btn btn-danger" value="Lưu">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Delete Modal HTML -->
		<div id="deleteEmployeeModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="" method="POST" id="delete_user">
						<div class="modal-header">
							<h4 class="modal-title">Xoá dữ liệu</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							<p>Bạn muốn xoá khách hàng này ?</p>
							<p class="text-warning"><small>Nếu đồng ý bạn không thể lấy lại dữ liệu này .</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Huỷ">
							<input type="submit" class="btn btn-danger" value="Xoá">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<!-- headersection -->
			<div class="block-header">
			</div>
			<!-- Basic Examples -->
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								CHỈNH SỬA DỮ LIỆU KHÁCH HÀNG
							</h2>
							<ul class="header-dropdown m-r--5">
								<li class="dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
									 aria-expanded="false">
										<i class="material-icons">more_vert</i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li><a href="javascript:void(0);">Action</a></li>
										<li><a href="javascript:void(0);">Another action</a></li>
										<li><a href="javascript:void(0);">Something else here</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="body">
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
									<thead>
										<tr>
											<th>Tên</th>
											<th>Email</th>
											<th>Số điện thoại</th>
											<th>Thao tác</th>

										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Tên</th>
											<th>Email</th>
											<th>Số điện thoại</th>
											<th>Thao tác</th>

										</tr>
									</tfoot>
									<tbody>
										<?php foreach ($result as $key => $value): ?>
										<tr>
											<th>
												<?= $value['username'] ?>
											</th>
											<th>
												<?= $value['email'] ?>
											</th>
											<th>
												<?= $value['phone'] ?>
											</th>
											<th>
												<a href="#editEmployeeModal" data-id=<?=$value['id'] ?> data-name=
													<?= $value['username'] ?> data-email=
													<?= $value['email'] ?> data-phone=
													<?= $value['phone'] ?>
													data-pass=
													<?= $value['password'] ?> class="edit btn btn-success" data-toggle="modal">
													<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

												<a href="#deleteEmployeeModal" id="id_edit" data-id=<?=$value['id'] ?> class="delete btn btn-danger"
													data-toggle="modal">
													<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
											</th>
										</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- #END# Basic Examples -->

			<!-- Exportable Table -->
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								XUẤT DỮ LIỆU KHÁCH HÀNG
							</h2>
							<ul class="header-dropdown m-r--5">
								<li class="dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
									 aria-expanded="false">
										<i class="material-icons">more_vert</i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li><a href="javascript:void(0);">Action</a></li>
										<li><a href="javascript:void(0);">Another action</a></li>
										<li><a href="javascript:void(0);">Something else here</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="body">
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover dataTable js-exportable">
									<thead>
										<tr>
											<th>Tên</th>
											<th>Email</th>
											<th>Số điện thoại</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Tên</th>
											<th>Email</th>
											<th>Số điện thoại</th>

										</tr>
									</tfoot>
									<tbody>
										<?php foreach ($result as $key => $value): ?>
										<tr>
											<th>
												<?= $value['username'] ?>
											</th>
											<th>
												<?= $value['email'] ?>
											</th>
											<th>
												<?= $value['phone'] ?>
											</th>

										</tr>
										<?php endforeach ?>
									</tbody>

								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- #END# Exportable Table -->
		</div>
	</section>
	<!-- Jquery Core Js -->
	<script src="<?= base_url() ?>asset/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core Js -->
	<script src="<?= base_url() ?>asset/plugins/bootstrap/js/bootstrap.js"></script>

	<!-- Select Plugin Js -->
	<script src="<?= base_url() ?>asset/plugins/bootstrap-select/js/bootstrap-select.js"></script>

	<!-- Slimscroll Plugin Js -->
	<script src="<?= base_url() ?>asset/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?= base_url() ?>asset/plugins/node-waves/waves.js"></script>

	<!-- Jquery CountTo Plugin Js -->
	<script src="<?= base_url() ?>asset/plugins/jquery-countto/jquery.countTo.js"></script>

	<!-- Morris Plugin Js -->
	<script src="<?= base_url() ?>asset/plugins/raphael/raphael.min.js"></script>
	<script src="<?= base_url() ?>asset/plugins/morrisjs/morris.js"></script>


	<!-- Custom Js -->
	<script src="<?= base_url() ?>asset/js/admin.js"></script>

	<!-- Demo Js -->
	<script src="<?= base_url() ?>asset/js/demo.js"></script>

	<!-- Editable Table Plugin Js -->

	<!-- Jquery DataTable Plugin Js -->
	<script src="<?= base_url() ?>asset/plugins/jquery-datatable/jquery.dataTables.js"></script>
	<script src="<?= base_url() ?>asset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
	<script src="<?= base_url() ?>asset/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="<?= base_url() ?>asset/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="<?= base_url() ?>asset/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="<?= base_url() ?>asset/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="<?= base_url() ?>asset/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="<?= base_url() ?>asset/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="<?= base_url() ?>asset/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<!-- Custom Js -->
	<script src="<?= base_url() ?>asset/js/pages/tables/jquery-datatable.js"></script>
	<script>
		$(function () {
			$('.edit').click(function () {
				var id = $(this).attr('data-id');
				$("#id_edit").attr("value", id);
				var name = $(this).attr('data-name');
				$("#name_edit").attr("value", name);
				var email = $(this).attr('data-email');
				$("#email_edit").attr("value", email);
				var phone = $(this).attr('data-phone');
				$("#phone_edit").attr("value", phone);
				var pass = $(this).attr('data-pass');
				$("#pass_edit").attr("value", pass);
			});

			$('.delete').click(function () {
				var id = $(this).attr('data-id');
				url = '<?= base_url() ?>' + "admin/deleteuser/" + id;
				$("form#delete_user").attr("action", url);
			});
		});

	</script>
	<script>
		$(document).ready(function () {
			$('.menu .list li.active').removeClass('active');
			$("#users").addClass('active');
		});

	</script>
</body>

</html>
	<?php } ?>
