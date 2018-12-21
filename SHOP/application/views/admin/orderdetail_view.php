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
	<section class="content">
			<!-- headersection -->
			<div class="block-header">
			</div>
			<!-- Exportable Table -->
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								XUẤT DANH SÁCH HOÁ ĐƠN
							</h2>
						</div>
						<div class="body">
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover dataTable js-exportable">
									<thead>
										<tr>
											<th>Tên sản phẩm</th>
											<th>Hãng sản xuất</th>
											<th>Loại mặt hàng</th>
											<th>Ngày sản xuất</th>
											<th>Mô tả sản phẩm</th>
											<th>Thông tin sản phẩm</th>
											<th>Số lượng</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
                                            <th>Tên sản phẩm</th>
											<th>Hãng sản xuất</th>
											<th>Loại mặt hàng</th>
											<th>Ngày sản xuất</th>
											<th>Mô tả sản phẩm</th>
											<th>Thông tin sản phẩm</th>
											<th>Số lượng</th>
										</tr>
									</tfoot>
									<tbody>
										<?php foreach ($order as $key => $temp): ?>
                                            <?php foreach ($temp as $key => $value): ?>
                                                <tr>
                                                    <th>
                                                        <?= $value['pd_name'] ?>
                                                    </th>
                                                    <th>
                                                        <?= $value['pn_name'] ?>
                                                    </th>
                                                    <th>
                                                        <?= $value['listpd_name'] ?>
                                                    </th>
                                                    <th>
                                                        <?= $value['pd_date'] ?>
                                                    </th>
                                                    <th>
                                                        <?= $value['pd_des'] ?>
                                                    </th>
                                                    <th>
                                                        <?= $value['pd_info'] ?>
                                                    </th>
                                                    <th>
                                                        <?= $value['pd_quan'] ?>
                                                    </th>
                                                </tr>
                                            <?php endforeach ?>
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
</body>

</html>
	<?php } ?>
