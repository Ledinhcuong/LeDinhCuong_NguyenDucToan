<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm quảng cáo</title>
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
				<form action="themquangcao.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" onsubmit="return validateAddQC();">
					<div class="form-group">
						<legend style="color: #009688">Thêm quảng cáo</legend>

					</div>

					<div class="form-group">
						<label for="masp" class="col-sm-2 control-label">Mã sản phẩm: </label>
						<div class="col-sm-10">
							<input type="text" name="masp" id="masp" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="maloai" class="col-sm-2 control-label">Mã loại </label>
						<div class="col-sm-10">
							<input type="text" name="maloai" id="maloai" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="moi" class="col-sm-2 control-label">Trang thái </label>
						<div class="col-sm-10">
							<input type="text" name="moi" id="moi" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="noidungqc" class="col-sm-2 control-label">Nội dung </label>
						<div class="col-sm-10">
							<input type="text" name="noidungqc" id="noidungqc" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>



					<div class="form-group">
						<label for="anh" class="col-sm-2 control-label">Tệp ảnh </label>
						<div class="col-sm-10">
							<input type="file" id="anh" name="fileUpload" class="form-control" style="opacity: 0.3">
							<span class="help-block"></span>
						</div>
					</div>


					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-primary">Thêm quảng cáo</button>
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