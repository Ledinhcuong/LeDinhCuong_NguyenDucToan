<<<<<<< HEAD
<?php
// Tu dong load cac class
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});

session_start();
if (isset($_SESSION['username']) == false)
{
	header("location: login.php");
}

$sp = new sanpham();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrator</title>
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
					
					<ul class="nav navbar-nav navbar-right">

						<form action="search.php" method="get" class="navbar-form navbar-left" role="search" onsubmit="return validateForm();">
							<div class="form-group">
								<input type="text" id="search" class="form-control" name="key" placeholder="Nhập tên sản phẩm ...">

							</div>
							<button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>

						</form>



						<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Wellcome: <?php echo $_SESSION['username']; ?></a></li>
						<li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>  Settings</a></li>
						<li><a href="#"> <i class="fa fa-commenting" aria-hidden="true"></i>  Message</a></li>
						<li><a href="logout.php?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
						<li><a href="#" class="cart" style="padding-bottom: 5px; padding-top: 10px;"><img src="public/images/avatar.png" alt="" class="img-responsive" width="30px" height="30px"></a></li>



					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>


	</header>

	<!--content-->
	<div class="content">
		<div class="container">

			<!-- list product -->
			
			<div class="list-table">
				<div class="name-list">CÁC THÀNH PHẦN TRONG BẢNG</div>
				<div class="add-product">
					<a href="formaddproduct.php" style="font-size: 30px; margin-bottom: 10px;"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
				</div>
				<div class="table">
					<div class="title">
						<div class="row">
							<div class="col-md-1 b-title">Mã loại</div>
							<div class="col-md-2 b-title">Mã sản phẩm</div>
							<div class="col-md-2 b-title">Tên sản phẩm</div>
							<div class="col-md-2 b-title">Giá</div>
							<div class="col-md-1 b-title">Hãng</div>
							<div class="col-md-2 b-title">Hệ Điều Hành</div>
							<div class="col-md-2 b-title">Thao tác</div>

						</div>
					</div>
					<?php
					$total_rows= $sp->coutAllProducts();
					$per_page= 30;

					if (isset($_GET['page'])){
						$page= $_GET['page'];
					}else{
						$page=1;
					}
					$product = $sp->tatCaSanPham($maLoai,$page,$per_page);
					foreach ($product as $key) {
						?>
						<div class="row">
							<div class="col-md-1 s-title"><?php echo $key['MaLoai']?></div>
							<div class="col-md-2 s-title"><?php echo $key['MaSP']?></div>
							<div class="col-md-2 s-title"><?php echo $key['TenSP']?></div>
							<div class="col-md-2 s-title"><?php echo $key['Gia']?> Đ</div>
							<div class="col-md-1 s-title"><?php echo $key['Gia']?></div>
							<div class="col-md-2 s-title"><?php echo $key['HeDieuHanh']?></div>
							<div class="col-md-2 " style="padding-top: 20px;">

								<button class="chitiet">Chi Tiết</button>
								<a href="editproduct.php?MaSP= <?php echo $key['MaSP'];?>"><button>Sửa</button></a>
								<a href="xoasanpham.php?MaSP= <?php echo $key['MaSP'];?>"><button>Xóa</button></a>

							</div>

						</div>

						<div class="table-hidden">
							<div class="row">
								<div class="col-md-4">
									<div class="image-product" style="padding: 50px;">
										<img src="../public/images/<?php echo $key['Anh']?>" alt="<?php echo $key['Anh']?>" class="img-responsive">
									</div>

								</div>
								<div class="col-md-8 more-info">
									<ul>
										<li>Hệ điều hành  : <?php echo $key['ManHinh'] ?> </li>
										<li>Cam sau : <?php echo $key['CamSau']?></li>
										<li>Cam trước : <?php echo $key['CamTruoc'] ?></li>
										<li>Cpu : <?php echo $key['CPU'] ?></li>
										<li>Ram : <?php echo $key['Ram']?> GB</li>
										<li>Bộ nhớ  : <?php echo $key['BoNho']?></li>
										<li>Chất liệu : <?php echo $key['ChatLieu']?></li>
										<li>Trọng lượng : <?php echo $key['TrongLuong'] ?>g</li>
										<li>Dung lượng pin: <?php echo $key['DungLuongPin']?></li>
									</ul>
								</div>
								<div class="col-md-12">
									<div class="tdacdiem">
										Đặc Điểm:
									</div>
									<span>
										<?php echo $key['DacDiem'] ?>
									</span>
								</div>

							</div>

						</div>
						<?php
					}
					?>

				</div>

			</div>
			<!-- paging -->

			<?php
			$base_url= $_SERVER['PHP_SELF']."?";
			?>
			<div class="paging">
				<div class="container">
					<div class="all-page">
						<tr>
							<?php
								echo $sp->create_links($base_url, $total_rows, $page, $per_page);
							?>
						</tr>

					</div>

			</div>
		</div>

</div>

</div>



<!-- footer -->
<footer>
	<!-- about -->
	<div class="about">
		<div class="container">
			<div class="all-about">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<ul>
							<li>
								<a href="#">Chính sách mua hàng</a> 
							</li>
							<li><a href="#">Chính sách bảo hành</a></li>
							<li><a href="#">Chính sách đổi trả</a></li>
							<li><a href="#">Giao hàng và thanh toán</a></li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-4">
						<ul>
							<li>
								<a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>  Giới thiệu về công ty</a> 
							</li>
							<li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Tuyển dụng</a></li>
							<li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i>  Khiếu nại</a></li>

						</ul>
					</div>
					<div class="col-md-4 col-sm-4">
						<ul>
							<li>
								<a href="#"><i class="fa fa-phone" aria-hidden="true"></i>  Gọi mua hàng 18001060</a> 
							</li>
							<li>
								<a href="#"><i class="fa fa-phone" aria-hidden="true"></i>  Gọi khiếu nại  18001062</a> 
							</li>
							<li>
								<a href="#"><i class="fa fa-phone" aria-hidden="true"></i>  Gọi bảo hành  18001064</a> 
							</li>
							<li>
								<a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Zenstore@gmail.com</a>
							</li>

						</ul>
					</div>
				</div>
			</div>


		</div>
	</div>
	<div class="footer">
		© 2018 Công ty cổ phần LDC
	</div>


</footer>

<div class="float-button">
	<i class="fa fa-arrow-up" aria-hidden="true"></i>

</div>




</body>
=======
<?php
// Tu dong load cac class
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});

session_start();
if (isset($_SESSION['username']) == false)
{
	header("location: login.php");
}

$sp = new sanpham();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrator</title>
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
					
					<ul class="nav navbar-nav navbar-right">

						<form action="search.php" method="get" class="navbar-form navbar-left" role="search" onsubmit="return validateForm();">
							<div class="form-group">
								<input type="text" id="search" class="form-control" name="key" placeholder="Nhập tên sản phẩm ...">

							</div>
							<button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>

						</form>



						<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Wellcome: <?php echo $_SESSION['username']; ?></a></li>
						<li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>  Settings</a></li>
						<li><a href="#"> <i class="fa fa-commenting" aria-hidden="true"></i>  Message</a></li>
						<li><a href="logout.php?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
						<li><a href="#" class="cart" style="padding-bottom: 5px; padding-top: 10px;"><img src="public/images/avatar.png" alt="" class="img-responsive" width="30px" height="30px"></a></li>



					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>


	</header>

	<!--content-->
	<div class="content">
		<div class="container">

			<!-- list product -->
			
			<div class="list-table">
				<div class="name-list">CÁC THÀNH PHẦN TRONG BẢNG</div>
				<div class="add-product">
					<a href="formaddproduct.php" style="font-size: 30px; margin-bottom: 10px;"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
				</div>
				<div class="table">
					<div class="title">
						<div class="row">
							<div class="col-md-1 b-title">Mã loại</div>
							<div class="col-md-2 b-title">Mã sản phẩm</div>
							<div class="col-md-2 b-title">Tên sản phẩm</div>
							<div class="col-md-2 b-title">Giá</div>
							<div class="col-md-1 b-title">Hãng</div>
							<div class="col-md-2 b-title">Hệ Điều Hành</div>
							<div class="col-md-2 b-title">Thao tác</div>

						</div>
					</div>
					<?php
					$total_rows= $sp->coutAllProducts();
					$per_page= 30;

					if (isset($_GET['page'])){
						$page= $_GET['page'];
					}else{
						$page=1;
					}
					$product = $sp->tatCaSanPham($maLoai,$page,$per_page);
					foreach ($product as $key) {
						?>
						<div class="row">
							<div class="col-md-1 s-title"><?php echo $key['MaLoai']?></div>
							<div class="col-md-2 s-title"><?php echo $key['MaSP']?></div>
							<div class="col-md-2 s-title"><?php echo $key['TenSP']?></div>
							<div class="col-md-2 s-title"><?php echo $key['Gia']?> Đ</div>
							<div class="col-md-1 s-title"><?php echo $key['Gia']?></div>
							<div class="col-md-2 s-title"><?php echo $key['HeDieuHanh']?></div>
							<div class="col-md-2 " style="padding-top: 20px;">

								<button class="chitiet">Chi Tiết</button>
								<button>Sửa</button>
								<button>Xóa</button>

							</div>

						</div>

						<div class="table-hidden">
							<div class="row">
								<div class="col-md-4">
									<div class="image-product" style="padding: 50px;">
										<img src="../public/images/<?php echo $key['Anh']?>" alt="<?php echo $key['Anh']?>" class="img-responsive">
									</div>

								</div>
								<div class="col-md-8 more-info">
									<ul>
										<li>Hệ điều hành  : <?php echo $key['ManHinh'] ?> </li>
										<li>Cam sau : <?php echo $key['CamSau']?></li>
										<li>Cam trước : <?php echo $key['CamTruoc'] ?></li>
										<li>Cpu : <?php echo $key['CPU'] ?></li>
										<li>Ram : <?php echo $key['Ram']?> GB</li>
										<li>Bộ nhớ  : <?php echo $key['BoNho']?></li>
										<li>Chất liệu : <?php echo $key['ChatLieu']?></li>
										<li>Trọng lượng : <?php echo $key['TrongLuong'] ?>g</li>
										<li>Dung lượng pin: <?php echo $key['DungLuongPin']?></li>
									</ul>
								</div>
								<div class="col-md-12">
									<div class="tdacdiem">
										Đặc Điểm:
									</div>
									<span>
										<?php echo $key['DacDiem'] ?>
									</span>
								</div>

							</div>

						</div>
						<?php
					}
					?>

				</div>

			</div>
			<!-- paging -->

			<?php
			$base_url= $_SERVER['PHP_SELF']."?";
			?>
			<div class="paging">
				<div class="container">
					<div class="all-page">
						<tr>
							<?php
								echo $sp->create_links($base_url, $total_rows, $page, $per_page);
							?>
						</tr>

					</div>

			</div>
		</div>

</div>

</div>



<!-- footer -->
<footer>
	<!-- about -->
	<div class="about">
		<div class="container">
			<div class="all-about">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<ul>
							<li>
								<a href="#">Chính sách mua hàng</a> 
							</li>
							<li><a href="#">Chính sách bảo hành</a></li>
							<li><a href="#">Chính sách đổi trả</a></li>
							<li><a href="#">Giao hàng và thanh toán</a></li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-4">
						<ul>
							<li>
								<a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>  Giới thiệu về công ty</a> 
							</li>
							<li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Tuyển dụng</a></li>
							<li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i>  Khiếu nại</a></li>

						</ul>
					</div>
					<div class="col-md-4 col-sm-4">
						<ul>
							<li>
								<a href="#"><i class="fa fa-phone" aria-hidden="true"></i>  Gọi mua hàng 18001060</a> 
							</li>
							<li>
								<a href="#"><i class="fa fa-phone" aria-hidden="true"></i>  Gọi khiếu nại  18001062</a> 
							</li>
							<li>
								<a href="#"><i class="fa fa-phone" aria-hidden="true"></i>  Gọi bảo hành  18001064</a> 
							</li>
							<li>
								<a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Zenstore@gmail.com</a>
							</li>

						</ul>
					</div>
				</div>
			</div>


		</div>
	</div>
	<div class="footer">
		© 2018 Công ty cổ phần LDC
	</div>


</footer>

<div class="float-button">
	<i class="fa fa-arrow-up" aria-hidden="true"></i>

</div>




</body>
>>>>>>> f049fd9a89f9be3d9cc8cf021cbe48ad75521229
</html>