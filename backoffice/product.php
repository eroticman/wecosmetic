<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap admin template">
	<meta name="author" content="">

	<title>สินค้า | We-Cosmetic </title>

	<link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
	<link rel="shortcut icon" type="assets/images/png" href="assets/images/logo.png"/>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/bootstrap-extend.css">
	<link rel="stylesheet" href="assets/css/site.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="vendor/animsition/animsition.css">
	<link rel="stylesheet" href="vendor/asscrollable/asScrollable.css">
	<link rel="stylesheet" href="vendor/switchery/switchery.css">
	<link rel="stylesheet" href="vendor/intro-js/introjs.css">
	<link rel="stylesheet" href="vendor/slidepanel/slidePanel.css">
	<link rel="stylesheet" href="vendor/flag-icon-css/flag-icon.css">
	<link rel="stylesheet" href="assets/css/v2.css">

	<link rel="stylesheet" href="vendor/bootstrap-table/bootstrap-table.css?v4.0.2">

	<!-- Fonts -->
	<link rel="stylesheet" href="assets/fonts/web-icons/web-icons.min.css">
	<link rel="stylesheet" href="assets/fonts/font-awesome/font-awesome.min.css">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

	<!--[if lt IE 9]>
	<script src="vendor/html5shiv/html5shiv.min.js"></script>
	<![endif]-->

	<!--[if lt IE 10]>
	<script src="vendor/media-match/media.match.min.js"></script>
	<script src="vendor/respond/respond.min.js"></script>
	<![endif]-->

	<!-- Scripts -->
	<script src="vendor/breakpoints/breakpoints.js"></script>
	<script>
		Breakpoints();
	</script>
</head>
<body class="animsition dashboard">

	<?php $current_file = basename(__FILE__); ?>
	<?php include 'header.php'; ?>
	<?php
		if(!empty($_POST))
		{	
			if(changStatus())
			{
				echo '<script>
					alert("แก้ไขสถานะสินค้าสำเร็จ");
					window.location.href = "product.php"
					</script>';
				exit;
			}
		} 
	?>

	<?php $product_list = product_list(); ?>

	<!-- Page -->
	<div class="page">
		<div class="page-content container-fluid">

	      	<!-- Panel Other -->
	      	<div class="panel">
		        <div class="panel-heading">
		          	<h3 class="panel-title">สินค้า</h3>
		        </div>
		        <div class="panel-body">
		          	<div class="row row-lg">
			            <div class="col-md-12">
			              	<!-- Example Toolbar -->
			              	<div class="example-wrap">			                  
			                  	<div class="bootstrap-table">
								  <div class="fixed-table-toolbar">
			                  			<div class="bs-bars pull-left">
			                  				<div class="btn-group hidden-sm-down" id="exampleToolbar" role="group">
							                    <button type="button" class="btn btn-success btn-outline btn-sm" onclick="window.location.href = 'product_add.php';">
							                      	<i class="icon wb-plus" aria-hidden="true"></i> เพิ่ม
							                    </button>
			                  				</div>
			                  			</div>
			                  		</div>
			                  		<div class="" style="padding-bottom: 0px;">
			                  			<div class="fixed-table-body">
			                  				<table id="exampleTableToolbar" data-mobile-responsive="true" class="table table-hover" data-pagination="true" data-search="true" style="margin-top: 0px;">

			                  				<!-- <table id="exampleTablePagination" data-toggle="table" data-url="../assets/data/bootstrap_table_test.json" data-query-params="queryParams" data-mobile-responsive="true" data-height="400" data-pagination="true" data-icon-size="outline" data-search="true" class="table table-hover" style="margin-top: -36px;"> -->
			                    				<thead style="">
			                    					<tr>
			                    						<th style="" data-field="id" data-align="center">
			                    							<div class="th-inner ">#</div>
			                    							<div class="fht-cell"></div>
			                    						</th>
			                    						<th style="" data-field="name">
			                    							<div class="th-inner ">สินค้า</div>
			                    							<div class="fht-cell"></div>
			                    						</th>
			                    						<th style="" data-field="img" data-align="center">
			                    							<div class="th-inner ">รูปภาพ</div>
			                    							<div class="fht-cell"></div>
			                    						</th>
														<th style="" data-field="price">
			                    							<div class="th-inner ">ราคา</div>
			                    							<div class="fht-cell"></div>
			                    						</th>
			                    						<th style="" data-field="status">
			                    							<div class="th-inner text-center">สถานะสินค้า</div>
			                    							<div class="fht-cell"></div>
			                    						</th>
			                    						<th style="" data-field="">
			                    							<div class="th-inner ">แก้ไขล่าสุด</div>
			                    							<div class="fht-cell"></div>
			                    						</th>
			                    						<th style="" data-field="edit" data-align="center" data-width="120px">
			                    							<div class="th-inner "></div>
			                    							<div class="fht-cell"></div>
			                    						</th>
			                    					</tr>
			                    				</thead>
			                    				<?php if(!empty($product_list)) : ?>
			                  					<tbody>
			                  						<?php 
													$i = 0;
													foreach($product_list as $product_detail) : 
													?>
			                  						<tr> 
			                  							<td class=""><?php echo $i+1; ?></td> 
			                  							<td style=""><?php echo $product_detail->product_name; ?></td>
			                  							<td style="">
														  	<?php if(!empty($product_detail->img_cover)): ?>
														  		<img src="../img/product/cover/<?php echo $product_detail->id; ?>/<?php echo $product_detail->img_cover; ?>" style="width:200px;">
															<?php endif ?>
														</td>
														<td class="text-center"><?php echo $product_detail->price; ?></td>
														<td class="td-stock text-center">
															<form method="POST">
																<input type="hidden" name="p_best"
																	value="<?php echo $product_detail->id; ?>">
																<div class="form-group">
																	<select class="form-control" id="is_best"
																		name="is_best" onchange="this.form.submit()">
																		<option value="0"
																			<?php echo ($product_detail->is_best == '0') ? 'selected' : ''; ?>>
																			สินค้าปกติ
																		</option>
																		<option value="1"
																			<?php echo ($product_detail->is_best == '1') ? 'selected' : ''; ?>>
																			สินค้าขายดี
																		</option>
																	</select>
																</div>
															</form>
														</td>
			                  							<td style="">
														  <?php if(!empty($product_detail->updated)) {
																  echo date("d/m/Y", strtotime( $product_detail->updated ) ); 
															} else {
																echo '-';
															}
														  ?>
														</td>
			                  							<td>
			                  								<button type="button" class="btn btn-round btn-warning btn-sm" onclick="window.location.href = 'product_edit.php?id=<?php echo $product_detail->id; ?>';"><i class="icon wb-pencil" aria-hidden="true"></i></button>
			                  								<button type="button" class="btn btn-round btn-danger btn-sm" onclick="delP(<?php echo $product_detail->id; ?>)"><i class="icon wb-close" aria-hidden="true"></i></button>
			                  							</td> 
			                  						</tr>
			                  						<?php
			                  							$i++;
			                  						endforeach; 
			                  						?>
			                  					</tbody>
			                  					<?php endif; /* if(!empty($service_list)) : */ ?>
			                  				</table>
			                  			</div>
			                  			<div class="fixed-table-pagination" style="display: none;"></div>
			                  		</div>
				                  	<div class="clearfix"></div>
				                </div>
			              	</div>
			              	<!-- End Example Toolbar -->
			            </div>	         
		          	</div>
		        </div>
	      </div>
	      <!-- End Panel Other -->
    	</div>
	</div>
	<!-- End Page -->
	
	<?php include 'footer.php'; ?>

	<div class="modal fade bs-example-modal-sm" id="modaldelete" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel2">ลบ</h4>
				</div>
				<div class="modal-body">
					<h4>คุณต้องการลบสินค้านี้ใช่หรือไม่ ?</h4>
				</div>
				<div class="modal-footer">
					<input type="hidden" id="pid" name="pid">
					<button type="button" class="btn btn-success" onclick="deleteProduct()"><i class="fa fa-check"></i> ยืนยัน</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /modals -->
	
	<!-- Core-->
	<script src="vendor/babel-external-helpers/babel-external-helpers.js"></script>
	<script src="vendor/jquery/jquery.js"></script>
	<script src="vendor/popper-js/umd/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.js"></script>
	<script src="vendor/animsition/animsition.js"></script>
	<script src="vendor/mousewheel/jquery.mousewheel.js"></script>
	<script src="vendor/asscrollbar/jquery-asScrollbar.js"></script>
	<script src="vendor/asscrollable/jquery-asScrollable.js"></script>
	<script src="vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

	<!-- Plugins -->
	<script src="vendor/switchery/switchery.js"></script>
	<script src="vendor/intro-js/intro.js"></script>
	<script src="vendor/screenfull/screenfull.js"></script>
	<script src="vendor/slidepanel/jquery-slidePanel.js"></script>
	<script src="vendor/skycons/skycons.js"></script>
	<script src="vendor/aspieprogress/jquery-asPieProgress.min.js"></script>
	<script src="vendor/matchheight/jquery.matchHeight-min.js"></script>

	<script src="vendor/bootstrap-table/bootstrap-table.js?v4.0.2"></script>
	<script src="vendor/bootstrap-table/extensions/mobile/bootstrap-table-mobile.min.js?v4.0.2"></script>

	<!-- Scripts -->
	<script src="assets/js/Component.js"></script>
	<script src="assets/js/Plugin.js"></script>
	<script src="assets/js/Base.js"></script>
	<script src="assets/js/Config.js"></script>

	<script src="assets/js/Section/Menubar.js"></script>
	<script src="assets/js/Section/GridMenu.js"></script>
	<script src="assets/js/Section/Sidebar.js"></script>
	<script src="assets/js/Section/PageAside.js"></script>
	<script src="assets/js/Plugin/menu.js"></script>

	<script src="assets/js/config/colors.js"></script>
	<script src="assets/js/config/tour.js"></script>

	<!-- Page -->
	<script src="assets/js/Site.js"></script>
	<script src="assets/js/Plugin/asscrollable.js"></script>
	<script src="assets/js/Plugin/slidepanel.js"></script>
	<script src="assets/js/Plugin/switchery.js"></script>
	<script src="assets/js/Plugin/matchheight.js"></script>

	<script src="assets/js/v1.js"></script>

	<script src="assets/js/tables/bootstrap.js?v4.0.2"></script>

	<script type="text/javascript">

	function delP(pid)
    {
    	$('#pid').val(pid);
    	$('#modaldelete').modal('show');
    }

     function deleteProduct()
    {
   		$.ajax({
		  	type 	: 'POST',
		  	url 	: 'queryDB.php',
		  	data 	: {pid:$('#pid').val(), action:'delProduct'},
		  	success: function(data) {
					location.reload();
		        	// if (data == 'true') {
		        	// 	location.reload();
		        	// } else {
		        	// 	console.log(data);
		        	// }        	
		        }
		});
	}

	</script>
</body>
</html>
