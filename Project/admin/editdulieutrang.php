<?php
// Tu dong load cac class
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});
$maLoai = $_GET['MaLoai'];
$trang = new dulieutrang();
$chitiet = $trang->chiTietTrang($maLoai);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm du liệu trang</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="public/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/css/mystyles.css">
	<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="public/js/mycripts.js"></script>
</head>
<body>	
	<!--header-->
	<header class="top-header">
		<!--navbar-->
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="index.php"> 
						<span class="logo"><i class="fa fa-apple" aria-hidden="true"></i> Admin</span>

					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>


	</header>

	<!--content-->
	<div class="content">
		<div class="them-sp" style="margin: 50px 0;">
			<div class="container">
				<form action="applyeditdulieutrang.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" onsubmit="return validateTrang();">
					<div class="form-group">
						<legend style="color: #009688">Sửa thành phần của trang</legend>

					</div>

					<div class="form-group">
						<label for="maloai" class="col-sm-2 control-label">Mã loại: </label>
						<div class="col-sm-10">
							<input type="text" name="maloai" id="maloai" class="form-control" value="<?php echo $chitiet['MaLoai'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

					<input type="text" name="maloaicu" style="display: none;" value="<?php echo $chitiet['MaLoai']?>">
					<div class="form-group">
						<label for="tdl" class="col-sm-2 control-label">Tiêu đề tìm kiếm 1: </label>
						<div class="col-sm-10">
							<input type="text" name="tdl" id="tdl" class="form-control" value="<?php echo $chitiet['TDL'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="l1" class="col-sm-2 control-label">Tìm theo 1: </label>
						<div class="col-sm-10">
							<input type="text" name="l1" id="l1" class="form-control" value="<?php echo $chitiet['L1'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="l2" class="col-sm-2 control-label">Tìm theo 2: </label>
						<div class="col-sm-10">
							<input type="text" name="l2" id="l2" class="form-control" value="<?php echo $chitiet['L2'] ?>">
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="l3" class="col-sm-2 control-label">Tìm theo 3: </label>
						<div class="col-sm-10">
							<input type="text" name="l3" id="l3" class="form-control" value="<?php echo $chitiet['L3'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="l4" class="col-sm-2 control-label">Tìm theo 4: </label>
						<div class="col-sm-10">
							<input type="text" name="l4" id="l4" class="form-control" value="<?php echo $chitiet['L4'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="tdl2" class="col-sm-2 control-label">Tiêu đề tìm kiếm 2: </label>
						<div class="col-sm-10">
							<input type="text" name="tdl2" id="tdl2" class="form-control" value="<?php echo $chitiet['TDL2'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="l5" class="col-sm-2 control-label">Tìm theo 5: </label>
						<div class="col-sm-10">
							<input type="text" name="l5" id="l5" class="form-control" value="<?php echo $chitiet['L5'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="l6" class="col-sm-2 control-label">Tìm theo 6: </label>
						<div class="col-sm-10">
							<input type="text" name="l6" id="l6" class="form-control" value="<?php echo $chitiet['L6'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="l7" class="col-sm-2 control-label">Tìm theo 7: </label>
						<div class="col-sm-10">
							<input type="text" name="l7" id="l7" class="form-control" value="<?php echo $chitiet['L7'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="l8" class="col-sm-2 control-label">Tìm theo 8: </label>
						<div class="col-sm-10">
							<input type="text" name="l8" id="l8" class="form-control" value="<?php echo $chitiet['L8'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

			

					<div class="form-group">
						<label for="tieude" class="col-sm-2 control-label">Tiêu đề giới thiệu: </label>
						<div class="col-sm-10">
							<input type="text" name="tieude" id="tieude" class="form-control" value="<?php echo $chitiet['TieuDe'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

					
					<div class="form-group">
						<label for="ndgt" class="col-sm-2 control-label">Nội dung giới thiệu: </label>
						<div class="col-sm-10">
							<textarea name="ndgt" id="ndgt" cols="30" rows="5" class="form-control"><?php echo $chitiet['NDGT'] ?></textarea>
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="tieude2" class="col-sm-2 control-label">Tiêu đề lợi ích: </label>
						<div class="col-sm-10">
							<input type="text" name="tieude2" id="tieude2" class="form-control" value="<?php echo $chitiet['TieuDe2'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="li1" class="col-sm-2 control-label">Lợi ích 1: </label>
						<div class="col-sm-10">
							<input type="text" name="li1" id="li1" class="form-control" value="<?php echo $chitiet['Li1'] ?>" >
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="li2" class="col-sm-2 control-label">Lợi ích 2: </label>
						<div class="col-sm-10">
							<input type="text" name="li2" id="li2" class="form-control" value="<?php echo $chitiet['Li2'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="li3" class="col-sm-2 control-label">Lợi ích 3: </label>
						<div class="col-sm-10">
							<input type="text" name="li3" id="li3" class="form-control" value="<?php echo $chitiet['Li3'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="li4" class="col-sm-2 control-label">Lợi ích 4: </label>
						<div class="col-sm-10">
							<input type="text" name="li4" id="li4" class="form-control" value="<?php echo $chitiet['Li4'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

					

					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-primary">Sửa</button>
						</div>
					</div>
				</form>
			</div>
		</div>



	</div>



	<!-- footer -->
	<footer>
		<div class="footer">
			© 2018 Công ty cổ phần LDC
		</div>


	</footer>

	<div class="float-button">
		<i class="fa fa-arrow-up" aria-hidden="true"></i>

	</div>




</body>
</html>