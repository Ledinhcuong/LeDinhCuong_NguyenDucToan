<?php
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});
$loai = new loai();
$MaLoai = $_GET['MaLoai'];
$chitiet = $loai->chiTietLoai($MaLoai);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa loại</title>
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
				<form action="applyeditloai.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" onsubmit="return validateLoai();">
					<div class="form-group">
						<legend style="color: #009688">Sửa loại</legend>

					</div>

					<div class="form-group">
						<label for="tenloai" class="col-sm-2 control-label">Tên loại </label>
						<div class="col-sm-10">
							<input type="text" name="tenloai" id="tenloai" class="form-control" value="<?php echo $chitiet['TenLoai'] ?>">
							<span class="help-block"></span>
						</div>
					</div>

					<input type="text" name="maloai" value="<?php echo $chitiet['MaLoai'] ?>" style="display: none;">



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