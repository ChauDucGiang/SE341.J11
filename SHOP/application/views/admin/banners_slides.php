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
	<link href="<?= base_url() ?>asset/css/banner.css" rel="stylesheet">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?= base_url() ?>asset/css/themes/all-themes.css" rel="stylesheet" />
	<link href="<?= base_url() ?>asset/css/bootstrap-imageupload.css" rel="stylesheet">

	<style>
		.imageupload {
            margin: 20px 0;
        }
    </style>

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
							<form action="" id="addslide" method="POST" enctype="multipart/form-data">
								<label for="">Tiêu đề</label>
								<div class="form-group">
									<div class="form-line">
										<input type="text" name="title" class="form-control" value="">
									</div>
								</div>
								<label for="">Nội dung</label>
								<div class="form-group">
									<div class="form-line">
										<input type="text" name="content" class="form-control" value="">
									</div>
								</div>
								<label for="">Ảnh</label>
								<div class="form-group">
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
		<div id="deleteEmployeeModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="" method="POST" id="delete_slide">
						<input type="hidden" name="idcontent" value="" id="idcontent">
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
			<div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="false">
				<div class="controls">
					<ul class="nav">
						<li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#">
								<h4>SLIDES</h4>
							</a></li>
						<li data-target="#custom_carousel" data-slide-to="1"><a href="#">
								<h4>BANNER TOP</h4>
							</a></li>
						<li data-target="#custom_carousel" data-slide-to="2"><a href="#">
								<h4>BANNER BOT</h4>
							</a></li>
						<li data-target="#custom_carousel" data-slide-to="3"><a href="#">
								<h4>WRAPPER</h4>
							</a></li>
					</ul>
				</div>
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<!-- //SLIDES -->
					<div class="item active">
						<div class="container-fluid">
							<form action="<?= base_url()?>admin/editslides/1" method="POST" enctype="multipart/form-data">
								<?php if( count($slides) < 4) { ?>
								<a href="#editEmployeeModal" data-id='1' class="edit btn btn-info idtable" data-toggle="modal">
									<i class="material-icons" data-toggle="tooltip" title="Edit"></i>Thêm mới</a>
								<?php }  ?>
								<?php $i= 1 ?>

								<?php foreach ($slides as $key => $value): ?>
								<hr>
								<div class="row">
									<div class="col-md-4"><img src="<?= $value['image'] ?>" class="img-responsive"></div>
									<div class="col-md-8">
										<h2>Slides
											<?= $i ?>
										</h2>
										<br>
										<!-- body -->
										<div class="body">
											<input type="hidden" name="old_image[]" class="form-control" value="<?= $value['image'] ?>">
											<input type="hidden" name="id[]" class="form-control" value="<?= $value['id'] ?>">
											<label for="">Tiêu đề</label>
											<div class="form-group">
												<div class="form-line">
													<input type="text" name="title[]" class="form-control" value="<?= $value['title'] ?>">
												</div>
											</div>
											<label for="">Nội dung</label>
											<div class="form-group">
												<div class="form-line">
													<input type="text" name="content[]" class="form-control" value="<?= $value['content'] ?>">
												</div>
											</div>
											<!-- bootstrap-imageupload. -->
											<label for="">Thay đổi ảnh</label>
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
														<input type="file" name="new_image[]">
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
											<!-- end -->
											<br>
										</div>
										<!-- end body -->
									</div>
								</div>
								<div class="modal-footer">
									<a href="#deleteEmployeeModal" id="id_edit" data-id="1" data-idcontent='<?= $value['id'] ?>' class="delete
										btn btn-danger" data-toggle="modal">
										<i class="material-icons" data-toggle="tooltip" title="Delete"></i>Xoá</a>
								</div>
								<?php $i++ ?>
								<?php endforeach ?>
								<hr>
								<br>
								<div class="modal-footer" style="background: #ecf0f1; border-radius: 0 0 3px 3px;">
									<input type="button" class="btn btn-default" data-dismiss="modal" value="Huỷ">
									<input type="submit" class="btn btn-primary waves-effect" value="Lưu">
								</div>
							</form>
						</div>
					</div>
					<!-- End Item -->
					<!-- END SLIDES -->
					<!-- //BANNER TOP -->
					<div class="item">
						<div class="container-fluid">
							<form action="<?= base_url()?>admin/editslides/2" method="POST" enctype="multipart/form-data">
								<?php if( count($bannertop) < 2) { ?>
								<a href="#editEmployeeModal" data-id='2' class="edit btn btn-info idtable" data-toggle="modal">
									<i class="material-icons" data-toggle="tooltip" title="Edit"></i>Thêm mới</a>
								<?php } ?>
								<?php $i= 1 ?>
								<?php foreach ($bannertop as $key => $value): ?>
								<hr>
								<div class="row">
									<div class="col-md-4"><img src="<?= $value['image'] ?>" class="img-responsive"></div>
									<div class="col-md-8">
										<h2>Banner Top
											<?= $i ?>
										</h2>
										<br>
										<!-- body -->
										<div class="body">
											<input type="hidden" name="old_image[]" class="form-control" value="<?= $value['image'] ?>">
											<input type="hidden" name="id[]" class="form-control" value="<?= $value['id'] ?>">
											<label for="">Tiêu đề</label>
											<div class="form-group">
												<div class="form-line">
													<input type="text" name="title[]" class="form-control" value="<?= $value['title'] ?>">
												</div>
											</div>

											<label for="">Nội dung</label>
											<div class="form-group">
												<div class="form-line">
													<input type="text" name="content[]" class="form-control" value="<?= $value['content'] ?>">
												</div>
											</div>
											<!-- bootstrap-imageupload. -->
											<label for="">Thay đổi ảnh</label>
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
														<input type="file" name="new_image[]">
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
											<!-- end -->
											<br>

										</div>
										<!-- end body -->
									</div>
								</div>
								<div class="modal-footer">
									<a href="#deleteEmployeeModal" id="id_edit" data-id="2" data-idcontent='<?= $value['id'] ?>' class="delete
										btn btn-danger" data-toggle="modal">
										<i class="material-icons" data-toggle="tooltip" title="Delete"></i>Xoá</a>
								</div>
								<?php $i++ ?>
								<?php endforeach ?>
								<div class="modal-footer" style="background: #ecf0f1; border-radius: 0 0 3px 3px;">
									<input type="button" class="btn btn-default" data-dismiss="modal" value="Huỷ">
									<input type="submit" class="btn btn-primary waves-effect" value="Lưu">
								</div>
							</form>
						</div>
					</div>
					<!-- End Item -->
					<!-- END BANNER TOP -->
					<!-- //BANNER BOT -->
					<div class="item">
						<div class="container-fluid">
							<form action="<?= base_url()?>admin/editslides/3" method="POST" enctype="multipart/form-data">
								<?php if( count($bannerbot) < 2) { ?>
								<a href="#editEmployeeModal" data-id='3' class="edit btn btn-info idtable" data-toggle="modal">
									<i class="material-icons" data-toggle="tooltip" title="Edit"></i>Thêm mới</a>
								<?php } ?>
								<?php $i= 1 ?>
								<?php foreach ($bannerbot as $key => $value): ?>
								<hr>
								<div class="row">
									<div class="col-md-4"><img src="<?= $value['image'] ?>" class="img-responsive"></div>
									<div class="col-md-8">
										<h2>Banner Bot
											<?= $i ?>
										</h2>
										<br>
										<!-- body -->
										<div class="body">
											<input type="hidden" name="old_image[]" class="form-control" value="<?= $value['image'] ?>">
											<input type="hidden" name="id[]" class="form-control" value="<?= $value['id'] ?>">
											<label for="">Tiêu đề</label>
											<div class="form-group">
												<div class="form-line">
													<input type="text" name="title[]" class="form-control" value="<?= $value['title'] ?>">
												</div>
											</div>
											<label for="">Nội dung</label>
											<div class="form-group">
												<div class="form-line">
													<input type="text" name="content[]" class="form-control" value="<?= $value['content'] ?>">
												</div>
											</div>
											<!-- bootstrap-imageupload. -->
											<label for="">Thay đổi ảnh</label>
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
														<input type="file" name="new_image[]">
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
											<!-- end -->
											<br>

										</div>
										<!-- end body -->
									</div>
								</div>
								<div class="modal-footer">
									<a href="#deleteEmployeeModal" id="id_edit" data-id="3" data-idcontent='<?= $value['id'] ?>' class="delete
										btn btn-danger" data-toggle="modal">
										<i class="material-icons" data-toggle="tooltip" title="Delete"></i>Xoá</a>
								</div>
								<?php $i++ ?>
								<?php endforeach ?>
								<div class="modal-footer" style="background: #ecf0f1; border-radius: 0 0 3px 3px;">
									<input type="button" class="btn btn-default" data-dismiss="modal" value="Huỷ">
									<input type="submit" class="btn btn-primary waves-effect" value="Lưu">
								</div>
							</form>
						</div>
					</div>
					<!-- End Item -->
					<!-- END BANNER BOT -->
					<!-- //WRAPPERS -->
					<div class="item">
						<div class="container-fluid">
							<form action="<?= base_url()?>admin/editslide/4" method="POST" enctype="multipart/form-data">
								<?php if( count($wrappers) < 1) { ?>
								<a href="#editEmployeeModal" data-id='4' class="edit btn btn-info idtable" data-toggle="modal">
									<i class="material-icons" data-toggle="tooltip" title="Edit"></i>Thêm mới</a>
								<?php } ?>
								<?php $i= 1 ?>
								<?php foreach ($wrappers as $key => $value): ?>
								<hr>
								<div class="row">
									<div class="col-md-4"><img src="<?= $value['image'] ?>" class="img-responsive"></div>
									<div class="col-md-8">
										<h2>Wrapper
											<?= $i ?>
										</h2>
										<br>
										<!-- body -->
										<div class="body">
											<input type="hidden" name="old_image[]" class="form-control" value="<?= $value['image'] ?>">
											<input type="hidden" name="id[]" class="form-control" value="<?= $value['id'] ?>">
											<label for="">Tiêu đề</label>
											<div class="form-group">
												<div class="form-line">
													<input type="text" name="title[]" class="form-control" value="<?= $value['title'] ?>">
												</div>
											</div>
											<label for="">Nội dung</label>
											<div class="form-group">
												<div class="form-line">
													<input type="text" name="content[]" class="form-control" value="<?= $value['content'] ?>">
												</div>
											</div>
											<!-- bootstrap-imageupload. -->
											<label for="">Thay đổi ảnh</label>
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
														<input type="file" name="new_image[]">
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
											<!-- end -->
											<br>
										</div>
										<!-- end body -->
									</div>
								</div>
								<div class="modal-footer">
									<a href="#deleteEmployeeModal" id="id_edit" data-id="4" data-idcontent='<?= $value['id'] ?>' class="delete
										btn btn-danger" data-toggle="modal">
										<i class="material-icons" data-toggle="tooltip" title="Delete"></i>Xoá</a>
								</div>
								<?php $i++ ?>
								<?php endforeach ?>
								<div class="modal-footer" style="background: #ecf0f1; border-radius: 0 0 3px 3px;">
									<input type="button" class="btn btn-default" data-dismiss="modal" value="Huỷ">
									<input type="submit" class="btn btn-primary waves-effect" value="Lưu">
								</div>
							</form>
						</div>
					</div>
					<!-- End Item -->
					<!-- END WRAPPER -->
				</div>
				<!-- End Carousel Inner -->
			</div>
			<!-- End Carousel -->
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
	<!-- Jquery Validation Plugin Css -->
	<script src="<?= base_url() ?>asset/plugins/jquery-validation/jquery.validate.js"></script>

	<!-- JQuery Steps Plugin Js -->
	<script src="<?= base_url() ?>asset/plugins/jquery-steps/jquery.steps.js"></script>
	<!-- Sweet Alert Plugin Js -->
	<script src="<?= base_url() ?>asset/plugins/sweetalert/sweetalert.min.js"></script>

	<script src="<?= base_url() ?>asset/js/pages/forms/form-wizard.js"></script>


	<script src="<?= base_url() ?>asset/js/bootstrap-imageupload.js"></script>

	<script>
		var $imageupload = $('.imageupload');
		$imageupload.imageupload();

	</script>
	<script>
		$(document).ready(function (ev) {
			$('#custom_carousel').on('slide.bs.carousel', function (evt) {
				$('#custom_carousel .controls li.active').removeClass('active');
				$('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
			})
		});

	</script>
	<script>
		$(function () {
			$('.delete').click(function () {
				var id = $(this).attr('data-id');
				var idcontent = $(this).attr('data-idcontent');
				url = '<?= base_url() ?>' + "admin/deleteslides/" + id;
				$("form#delete_slide").attr("action", url);
				$("input#idcontent").attr("value", idcontent);
				console.log(idcontent);
			});
			$('.idtable').click(function () {
				var id = $(this).attr('data-id');
				url = '<?= base_url() ?>' + "admin/addslide/" + id;
				$("form#addslide").attr("action", url);
				console.log(url);
				console.log(id);
			});
		});

	</script>
	<script>
		$(document).ready(function () {
			$('.menu .list li.active').removeClass('active');
			$("#banner_slide").addClass('active');
		});

	</script>
</body>

</html>
