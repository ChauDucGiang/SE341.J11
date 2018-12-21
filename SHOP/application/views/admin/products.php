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

	<!-- Custom Css -->
	<link href="<?= base_url() ?>asset/css/stylelist.css" rel="stylesheet">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?= base_url() ?>asset/css/themes/all-themes.css" rel="stylesheet" />

	<!-- Bootstrap Select Css -->
	<link href="<?= base_url() ?>asset/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

	<!-- slides -->
	<!-- <link href="<?= base_url() ?>asset/css/products.css" rel="stylesheet" /> -->
	<link href="<?= base_url() ?>asset/css/useredit.css" rel="stylesheet" />
	<link href="<?= base_url() ?>asset/css/bootstrap-imageupload.css" rel="stylesheet">

</head>

<body class="theme-red">
	<!-- header -->
	<?php require 'header.php';?>
	<!-- //header -->
	<section class="content">
		<!-- Edit Modal HTML -->
		<div id="editEmployeeModal" class="modal fade" style="margin:auto; width:900px">
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="container-fluid">
							<form action="" id="editpartner" method="POST" enctype="multipart/form-data">
								<hr>
								<div class="row">
									<div class="col-md-4"><img src="http://placehold.it/320x200" id="image" class="img-responsive"></div>
									<input type="hidden" id="old_image" name="old_image" value="">
									<div class="col-md-8">
										<br>
										<!-- body -->
										<div class="body">
											<label for="">Tên sản phẩm</label>
											<div class="form-group">
												<div class="form-line">
													<input type="text" id="name" name="name" class="form-control" value="" required>
												</div>
											</div>

											<label for="">Giá</label>
											<div class="form-group">
												<div class="form-line">
													<input type="number" id="price" min="0.00" step="1000.00" name="price" class="form-control" value=""
													 required>
												</div>
											</div>

											<label for="">Ngày sản xuất</label>
											<div class="form-group">
												<div class="form-line">
													<input id="date" type="date" name="date" class="form-control" value="">
												</div>
											</div>

											<label for="">Mô tả</label>
											<div class="form-group">
												<div class="form-line">
													<input type="text" id="desc" name="desc" class="form-control" value="" required>
												</div>
											</div>

											<label for="">Thông tin</label>
											<div class="form-group">
												<div class="form-line">
													<input type="text" id="info" name="info" class="form-control" value="" required>
												</div>
											</div>
											<!-- /// -->
											<div class="form-group">
												<div class="body">
													<div class="row clearfix">
														<div class="col-md-3">
															<p>
																<b>Danh mục</b>
															</p>
															<select class="form-control show-tick" name="listpd" data-live-search="true">
																<?php foreach ($listpd as $key => $value): ?>
																<option value="<?= $value['id_list'] ?>" selected="<?php if( $value['id_list'] == 2){echo 'selected';}?>">
																	<?= $value['listpd_name'] ?>
																</option>
																<?php endforeach ?>
															</select>
														</div>
														<div class="col-md-3">
															<p>
																<b>Hãng sản xuất</b>
															</p>
															<select class="form-control show-tick" name="partners" data-live-search="true">
																<?php foreach ($partners as $key => $value): ?>
																<option value="<?= $value['id_pn'] ?>">
																	<?= $value['pn_name'] ?>
																</option>
																<?php endforeach ?>

															</select>
														</div>
														<div class="col-md-3">
															<p>
																<b>Giới tính</b>
															</p>
															<select class="form-control show-tick" name="gender">
																<option value="men">Nam</option>
																<option value="women">Nữ</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<label for="">Ảnh</label>
											<div class="form-group">
												<div class="body">
													<div class="row clearfix">
														<!-- bootstrap-imageupload. -->
														<div class="imageupload panel panel-default">
															<div class="panel-heading clearfix">
																<h3 class="panel-title pull-left">Upload Image</h3>
																<div class="btn-group pull-right">
																	<button type="button" class="btn btn-default active">File</button>
																	<button type="button" class="btn btn-default">URL</button>
																</div>
															</div>
															<div class="file-tab panel-body">
																<label class="btn btn-default btn-file">
																	<span>Browse</span>
																	<!-- The file is stored here. -->
																	<input type="file" name="new_image">
																</label>
																<button type="button" class="btn btn-default">Remove</button>
															</div>
															<div class="url-tab panel-body">
																<div class="input-group">
																	<input type="text" class="form-control hasclear" placeholder="Image URL">
																	<div class="input-group-btn">
																		<button type="button" class="btn btn-default">Submit</button>
																	</div>
																</div>
																<button type="button" class="btn btn-default">Remove</button>
																<!-- The URL is stored here. -->
																<input type="hidden" name="image-url">
															</div>
														</div>
													</div>

												</div>
												<!-- end -->
											</div>
											<br>
										</div>
										<!-- end body -->
									</div>
								</div>
								<hr>
								<br>
								<div class="modal-footer" style="background: #ecf0f1; border-radius: 0 0 3px 3px;">
									<input type="button" class="btn btn-default" data-dismiss="modal" value="Huỷ">
									<input type="submit" class="btn btn-primary waves-effect" value="Lưu">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Edit Modal HTML -->
		<div id="addEmployeeModal" class="modal fade" style="margin:auto; width:900px">
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="body">
							<form action="<?= base_url() ?>admin/addpd" method="POST" enctype="multipart/form-data">
								<label for="">Tên sản phẩm</label>
								<div class="form-group">
									<div class="form-line">
										<input type="text" name="name" class="form-control" value="" required>
									</div>
								</div>

								<label for="">Giá</label>
								<div class="form-group">
									<div class="form-line">
										<input type="number" min="0.00" step="1000.00" name="price" class="form-control" value="" required>
									</div>
								</div>

								<label for="">Ngày sản xuất</label>
								<div class="form-group">
									<div class="form-line">
										<input id="datePicker" type="date" name="date" class="form-control" value="">
									</div>
								</div>

								<label for="">Mô tả</label>
								<div class="form-group">
									<div class="form-line">
										<input type="text" name="desc" class="form-control" value="" required>
									</div>
								</div>

								<label for="">Thông tin</label>
								<div class="form-group">
									<div class="form-line">
										<input type="text" name="info" class="form-control" value="" required>
									</div>
								</div>


								<!-- /// -->
								<div class="form-group">
									<div class="body">
										<div class="row clearfix">
											<div class="col-md-3">
												<p>
													<b>Danh mục</b>
												</p>
												<select class="form-control show-tick" name="listpd" data-live-search="true">
													<?php foreach ($listpd as $key => $value): ?>
													<option value="<?= $value['id_list'] ?>">
														<?= $value['listpd_name'] ?>
													</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="col-md-3">
												<p>
													<b>Hãng sản xuất</b>
												</p>
												<select class="form-control show-tick" name="partners" data-live-search="true">
													<?php foreach ($partners as $key => $value): ?>
													<option value="<?= $value['id_pn'] ?>">
														<?= $value['pn_name'] ?>
													</option>
													<?php endforeach ?>

												</select>
											</div>
											<div class="col-md-3">
												<p>
													<b>Giới tính</b>
												</p>
												<select class="form-control show-tick" name="gender">
													<option value="men">Nam</option>
													<option value="women">Nữ</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<label for="">Ảnh</label>
								<div class="form-group">
									<div class="body">
										<div class="row clearfix">
											<!-- bootstrap-imageupload. -->
											<div class="imageupload panel panel-default">
												<div class="panel-heading clearfix">
													<h3 class="panel-title pull-left">Upload Image</h3>
													<div class="btn-group pull-right">
														<button type="button" class="btn btn-default active">File</button>
														<button type="button" class="btn btn-default">URL</button>
													</div>
												</div>
												<div class="file-tab panel-body">
													<label class="btn btn-default btn-file">
														<span>Browse</span>
														<!-- The file is stored here. -->
														<input type="file" name="image">
													</label>
													<button type="button" class="btn btn-default">Remove</button>
												</div>
												<div class="url-tab panel-body">
													<div class="input-group">
														<input type="text" class="form-control hasclear" placeholder="Image URL">
														<div class="input-group-btn">
															<button type="button" class="btn btn-default">Submit</button>
														</div>
													</div>
													<button type="button" class="btn btn-default">Remove</button>
													<!-- The URL is stored here. -->
													<input type="hidden" name="image-url">
												</div>
											</div>
										</div>

									</div>
									<!-- end -->
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
		<!-- ddd -->
		<!-- Delete Modal HTML -->
		<div id="deleteEmployeeModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="" method="POST" id="delete_slide">
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
		<!-- dd -->
		<div class="container">
			<div class="container-fluid">
				<form id="myForm" action="<?= base_url() ?>admin/products/1" method="POST">
					<input type="hidden" class="page" name="page" value="">
					<a href="#addEmployeeModal" data-id='1' class="edit btn btn-info idtable" data-toggle="modal">
						<i class="material-icons" data-toggle="tooltip" title="Edit"></i>Thêm mới</a>
						<hr>
					<div class="row">
						<ul class="thumbnails">
							<?php foreach ($products as $key => $value): ?>
							<div class="col-md-4">
								<div class="thumbnail">
									<img src="<?= $value['pd_image']?>" alt="ALT NAME" class="img-responsive" />
									<div class="caption">
										<h3>Tên :
											<?= $value['pd_name']?>
										</h3>
										<h6>Giá :
											<?= $value['pd_price']?> vnđ</h6>
										<h6>Mô tả :
											<?= $value['pd_des']?>
										</h6>
										<h6>Thông tin :
											<?= $value['pd_info']?>
										</h6>
										<h6>Hãng :
											<?= $value['pn_name']?>
										</h6>
										<h6>Ngày sản xuất :
											<?= $value['pd_date']?>
										</h6>
										<h6>Danh mục :
											<?= $value['listpd_name']?>
										</h6>
										<h6>Giới tính :
											<?= $value['pd_gender']?>
										</h6>
										<div>
											<a href="#editEmployeeModal" data-toggle="modal" class="btn btn-primary edit" data-id='<?= $value['id']?>'
												data-name='<?= $value['pd_name']?>'
												data-price='<?= $value['pd_price']?>' data-image='<?= $value['pd_image']?>' data-desc='<?= $value['pd_des']?>' data-info='<?= $value['pd_info']?>' data-date='<?= $value['pd_date']?>'>Sửa</a>

											<a href="#deleteEmployeeModal" data-toggle="modal" data-id='<?= $value['id']?>' class="btn btn-danger
												delete">Xoá</a>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach ?>
						</ul>
					</div>
					<div>
						<nav>
							<ul class="pagination">
								<li class="disabled">
									<a href="javascript:void(0);">
										<i class="material-icons">chevron_left</i>
									</a>
								</li>
								<?php for($i=1; $i <= ceil(count($pd)/4); $i++) {?>
								<li class="currentpage <?php if($i == $page){ echo 'active';} ;?>"><a href="javascript:void(0);" class="submit waves-effect"
									 data-page="<?php echo $i ?>">
										<?php echo $i ?></a></li>
								<?php } ?>
								<li>
									<a href="javascript:void(0);" class="waves-effect">
										<i class="material-icons">chevron_right</i>
									</a>
								</li>
							</ul>
						</nav>
					</div>
					<form>
			</div>
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

	<!-- Custom Js -->
	<script src="<?= base_url() ?>asset/js/admin.js"></script>

	<!-- Dropzone Plugin Js -->
	<script src="<?= base_url() ?>asset/plugins/dropzone/dropzone.js"></script>

	<!-- Demo Js -->
	<script src="<?= base_url() ?>asset/js/demo.js"></script>
	<!-- dđ -->
	<script src="<?= base_url() ?>asset/js/bootstrap-imageupload.js"></script>

	<script>
		var $imageupload = $('.imageupload');
		$imageupload.imageupload();

	</script>
	<script>
		$(document).ready(function () {
			var now = new Date();

			var day = ("0" + now.getDate()).slice(-2);
			var month = ("0" + (now.getMonth() + 1)).slice(-2);

			var today = now.getFullYear() + "-" + (month) + "-" + (day);

			$('#datePicker').val(today);
		});

	</script>
	<script>
		$(document).ready(function () {

			$(".filter-button").click(function () {
				var value = $(this).attr('data-filter');

				if (value == "all") {
					$('.filter').show('1000');
				} else {
					$(".filter").not('.' + value).hide('3000');
					$('.filter').filter('.' + value).show('3000');

				}
			});

			if ($(".filter-button").removeClass("active")) {
				$(this).removeClass("active");
			}
			$(this).addClass("active");

		});

	</script>
	<script>
		$('.submit').click(function () {

			var page = $(this).attr('data-page');
			$(".page").attr("value", page);
			console.log(page);
			$('#myForm').submit();
		});

	</script>
	<script>
		$(function () {
			$('.delete').click(function () {
				console.log('xxx');
				var id = $(this).attr('data-id');
				var idcontent = $(this).attr('data-idcontent');
				url = '<?= base_url() ?>' + "admin/delpd/" + id;
				$("form#delete_slide").attr("action", url);
				console.log(id);
				console.log(url);
			});
			$('.edit').click(function () {
				var name = $(this).attr('data-name');
				$("#name").attr("value", name);
				var image = $(this).attr('data-image');
				$("#image").attr("src", image);
				$("#old_image").attr("value", image);
				var price = $(this).attr('data-price');
				$("#price").attr("value", price);
				var desc = $(this).attr('data-desc');
				$("#desc").attr("value", desc);
				var info = $(this).attr('data-info');
				$("#info").attr("value", info);
				var date = $(this).attr('data-date');
				$("#date").attr("value", date);
				var id = $(this).attr('data-id');
				url = '<?= base_url() ?>' + "admin/editpd/" + id;
				$("form#editpartner").attr("action", url);
			});
		});

	</script>
</body>

</html>
	<?php } ?>
