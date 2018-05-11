<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm sản phẩm</title>
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
				<form action="themsanpham.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" onsubmit="return validateformProduct();">
					<div class="form-group">
						<legend style="color: #009688">Thêm sản phẩm</legend>

					</div>

					<div class="form-group">
						<label for="maloai" class="col-sm-2 control-label">Mã loại: </label>
						<div class="col-sm-10">
							<input type="text" name="maloai" id="maloai" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>


					<div class="form-group">
						<label for="tensp" class="col-sm-2 control-label">Tên sản phẩm: </label>
						<div class="col-sm-10">
							<input type="text" name="tensp" id="tensp" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="gia" class="col-sm-2 control-label">Giá: </label>
						<div class="col-sm-10">
							<input type="text" name="gia" id="gia" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="hang" class="col-sm-2 control-label">Hãng: </label>
						<div class="col-sm-10">
							<input type="text" name="hang" id="hang" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="manhinh" class="col-sm-2 control-label">Màn hình: </label>
						<div class="col-sm-10">
							<input type="text" name="manhinh" id="manhinh" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="hedieuhanh" class="col-sm-2 control-label">Hệ điều hành: </label>
						<div class="col-sm-10">
							<input type="text" name="hedieuhanh" id="hedieuhanh" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="camsau" class="col-sm-2 control-label">Camera sau: </label>
						<div class="col-sm-10">
							<input type="text" name="camsau" id="camsau" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="camtruoc" class="col-sm-2 control-label">Camera trước: </label>
						<div class="col-sm-10">
							<input type="text" name="camtruoc" id="camtruoc" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="cpu" class="col-sm-2 control-label">CPU: </label>
						<div class="col-sm-10">
							<input type="text" name="cpu" id="cpu" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="ram" class="col-sm-2 control-label">RAM: </label>
						<div class="col-sm-10">
							<input type="text" name="ram" id="ram" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="bonho" class="col-sm-2 control-label">Bộ nhớ: </label>
						<div class="col-sm-10">
							<input type="text" name="bonho" id="bonho" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="chatlieu" class="col-sm-2 control-label">Chất liệu: </label>
						<div class="col-sm-10">
							<input type="text" name="chatlieu" id="chatlieu" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="trongluong" class="col-sm-2 control-label">Trọng lượng: </label>
						<div class="col-sm-10">
							<input type="text" name="trongluong" id="trongluong" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="pin" class="col-sm-2 control-label">Dung lượng pin: </label>
						<div class="col-sm-10">
							<input type="text" name="pin" id="pin" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					

					<div class="form-group">
						<label for="dacdiem" class="col-sm-2 control-label">Đặc điểm: </label>
						<div class="col-sm-10">
							<textarea name="dacdiem" id="dacdiem" cols="30" rows="5" class="form-control"></textarea>
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
							<button type="submit" class="btn btn-primary">Thêm</button>
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