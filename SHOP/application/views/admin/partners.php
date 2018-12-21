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
		<div id="editEmployeeModal" class="modal fade" style="margin:auto; width:900px">
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="container-fluid">
							<form action="" id="editpartner" method="POST" enctype="multipart/form-data">
								<hr>
								<div class="row">
									<div class="col-md-4"><img src="http://placehold.it/320x200" id="image" class="img-responsive"></div>
									<div class="col-md-8">
										<br>
										<!-- body -->
										<div class="body">
											<input type="hidden" name="old_image" id="old_image" class="form-control" value="">
											<label for="">Tên</label>
											<div class="form-group">
												<div class="form-line">
													<input type="text" name="name" id="name" class="form-control" value="" required>
												</div>
											</div>
											<label for="">Facebook</label>
											<div class="form-group">
												<div class="form-line">
													<input type="text" name="fb" id="fb" class="form-control" value="">
												</div>
											</div>
											<label for="">Twitter</label>
											<div class="form-group">
												<div class="form-line">
													<input type="text" name="tw" id="tw" class="form-control" value="">
												</div>
											</div>
											<label for="">Google</label>
											<div class="form-group">
												<div class="form-line">
													<input type="text" name="gg" id="gg" class="form-control" value="">
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
											<!-- end -->
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
		<!-- Delete Modal HTML -->
		<!-- ddd -->
		<div id="deleteEmployeeModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="" method="POST" id="deletepartner">
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
		<!-- xx -->
		<!-- Edit Modal HTML -->
		<div id="addEmployeeModal" class="modal fade" style="margin:auto; width:500px">
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="body">
							<form action="<?= base_url()?>admin/addpn" id="addslide" method="POST" enctype="multipart/form-data">
								<label for="">Tên</label>
								<div class="form-group">
									<div class="form-line">
										<input type="text" name="name" class="form-control" value="">
									</div>
								</div>
								<label for="">Facebook</label>
								<div class="form-group">
									<div class="form-line">
										<input type="text" name="fb" class="form-control" value="">
									</div>
								</div>
								<label for="">Twitter</label>
								<div class="form-group">
									<div class="form-line">
										<input type="text" name="tw" class="form-control" value="">
									</div>
								</div>
								<label for="">Google</label>
								<div class="form-group">
									<div class="form-line">
										<input type="text" name="gg" class="form-control" value="">
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
		<div class="container-fluid">
			<a href="#addEmployeeModal" data-id='1' class="edit btn btn-info idtable" data-toggle="modal">
				<i class="material-icons" data-toggle="tooltip" title="Edit"></i>Thêm mới</a>
			<hr>
			<div class="row">
				<ul class="thumbnails">
					<?php foreach ($result as $key => $value): ?>
					<div class="col-md-4">
						<div class="thumbnail">
							<img src="<?= $value['pn_image']?>" alt="ALT NAME" class="img-responsive" />
							<div class="caption">
								<h3>Tên :
									<?= $value['pn_name']?>
								</h3>
								<p>Facebook :
									<?= $value['pn_fb']?>
								</p>
								<p>Twitter :
									<?= $value['pn_tw']?>
								</p>
								<p>Google :
									<?= $value['pn_gg']?>
								</p>
								<div>
									<a href="#editEmployeeModal" data-toggle="modal" class="btn btn-primary edit" data-id='<?= $value[' id_pn']?>' data-fb='<?= $value['pn_fb']?>' data-name='<?= $value['pn_name']?>' data-image='<?= $value['pn_image']?>' data-tw='<?= $value['pn_tw']?>' data-gg='<?= $value['pn_gg']?>'>Sửa</a>

									<a href="#deletetEmployeeModal" data-id='<?= $value['id_pn']?>' class="btn btn-danger delete">Xoá</a>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</ul>
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

	<!-- Demo Js -->
	<script src="<?= base_url() ?>asset/js/demo.js"></script>
	<script src="<?= base_url() ?>asset/js/bootstrap-imageupload.js"></script>
	<script>
		$(function () {
			$('.edit').click(function () {
				var name = $(this).attr('data-name');
				$("#name").attr("value", name);
				var image = $(this).attr('data-image');
				$("#image").attr("src", image);
				$("#old_image").attr("value", image);
				var tw = $(this).attr('data-tw');
				$("#tw").attr("value", tw);
				var gg = $(this).attr('data-gg');
				$("#gg").attr("value", gg);
				var fb = $(this).attr('data-fb');
				$("#fb").attr("value", fb);
				var id = $(this).attr('data-id');
				url = '<?= base_url() ?>' + "admin/editpartner/" + id;
				$("form#editpartner").attr("action", url);
			});

			$('.delete').click(function () {
				var id = $(this).attr('data-id');
				url = '<?= base_url() ?>' + "admin/delpartner/" + id;
				$("form#deletepartner").attr("action", url);
			});
		});

	</script>

	<script>
		var $imageupload = $('.imageupload');
		$imageupload.imageupload();

	</script>
</body>

</html>
	<?php } ?> 
