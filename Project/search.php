<?php 
require "app/config.php";
require "app/db.php";

if (isset($_GET['loc']))
{
	$loc = explode("_" ,$_GET['loc']);

	$timTheo = $loc[0];
	if ($loc[1] == "Dưới 3 triệu")
	{
		$key ="Gia < 3000000";
	}
	else if ($loc[1] == "Từ 4 đến 10 triệu")
	{
		$key ="Gia BETWEEN 4000000 AND 10000000";
	}
	else if ($loc[1] == "Trên 10 triệu")
	{
		$key ="Gia > 10000000";
	}
	else
	{
		$key = $loc[1];
	}
	
}
else
{
	$timTheo = "";
	$key = $_GET['key'];
}



$db = new db();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang Chu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="public/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/css/styles.css">
	<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="public/js/sitecripts.js"></script>
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
						<span class="logo"><i class="fa fa-apple" aria-hidden="true"></i>  Zenstore</span>

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

						
						<li><a href="index.php"><i class="fa fa-mobile" aria-hidden="true"></i> Phone</a></li>
						<li><a href="index.php?maLoai=2"><i class="fa fa-tablet" aria-hidden="true"></i>  Tablet</a></li>
						<li><a href="#"><i class="fa fa-laptop" aria-hidden="true"></i>  Laptop</a></li>
						<li><a href="#"><i class="fa fa-headphones" aria-hidden="true"></i>  Accessories</a></li>
						<li><a href="#" class="cart" style="padding-bottom: 5px; padding-top: 10px;"><img src="public/images/avatar.png" alt="" class="img-responsive" width="30px" height="30px"></a></li>
						

						
						
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<div class="menu-cart">
			<div><a href="mycart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>   Quản lý giỏ hàng</a></div>
			<div> <a href="#"><i class="fa fa-history" aria-hidden="true"></i>   Lịch sử mua hàng</a></div>
			<div><a href="#"><i class="fa fa-globe" aria-hidden="true"></i>   Ngôn ngữ</a></div>
			<div><a href="#"><i class="fa fa-bug" aria-hidden="true"></i>   Báo cáo sự cố</a></div>
			<div><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>   Chính sách</a></div>
			<div><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>   Cài đặt</a></div>
			<div><a href="#"><i class="fa fa-question" aria-hidden="true"></i>   Trợ giúp</a></div>
			<div><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>   Đăng xuất</a></div>
			

		</div>
		<div class="menu-navbar">
			<ul>
				<li><a href="index.php"><i class="fa fa-mobile" aria-hidden="true"></i>   Phone</a></li>
				<li><a href="index.php?maLoai=2"><i class="fa fa-tablet" aria-hidden="true"></i>   Tablet</a></li>
				<li><a href="#"><i class="fa fa-laptop" aria-hidden="true"></i>   Laptop</a></li>
				<li><a href="#"><i class="fa fa-headphones" aria-hidden="true"></i>   Accessories</a></li>
				<li><a href="#" class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>   My cart</a></li>
				
			</ul>

		</div>

	</header>

	<!--content-->
	<div class="content">
		
		

		
		<!-- product -->
		<div class="product">
			<div class="container">
				<div class="all-product">
					<div class="row">
						<?php

						$total_rows= $db->tinhSoKetQua($timTheo, $key);
						$per_page= 12;

						if (isset($_GET['page'])){
								$page= $_GET['page'];
						}else{
								$page=1;
						}

						$sanPham = $db->timSanPham($timTheo, $key, $page, $per_page); 
						foreach ($sanPham as $row) {
						?>
						<div class="col-md-3 col-xs-6 format-product" >
							<div class="content-product">
								<div class="image-product">
									<a href="chitiet.php?id=<?php echo $row['MaSP']?>">
										<img src="public/images/<?php echo $row['Anh'] ?>" alt="<?php echo $row['Anh']?> " class="img-responsive">
									</a>
									
								</div>
								<div class="name-product">
									 <a href="chitiet.php?id=<?php echo $row['MaSP']?>"><?php echo $row['TenSP'] ?></a>
								</div>
								<div class="price">
									<?php echo $row['Gia']?> đ
								</div>
							</div>

						</div>

						<?php
						} 
						?>

						</div>
							
						

					</div>
					
				</div>



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
						 	echo $db->create_links ($base_url, $total_rows, $page, $per_page);
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
</html>