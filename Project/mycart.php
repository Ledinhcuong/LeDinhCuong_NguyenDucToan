<?php
session_start();
require "app/config.php";
require "app/db.php";
$db = new db();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="public/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/css/styles.css">
	<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="public/js/sitecripts.js"></script>
	<script src="public/js/sitecripts.js"></script>
	<style>

	.title-page {
		padding-top: 20px;
		padding-bottom: 20px;
		font-size: 30px;
	}
	.list-product {
		margin: 25px 0px;
		padding: 20px 0px;
	}
	.img-product {
		padding: 20px 20px;


	}

	.detail-pr {
		padding-top: 20px;
	}

	.name-pr {
		font-size: 25px;
		color: #009688;

	}

	.title-d {
		font-size: 25px;
		color: #000;
	}

	.pay-product {
		padding: 20px 10px;
	}

	.pay-product ul {
		padding-left: 0px;
		list-style: none;
		font-size: 15px;
	}





</style>
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
				<li><a href="index.html"><i class="fa fa-mobile" aria-hidden="true"></i>   Phone</a></li>
				<li><a href="index.php?maLoai=2"><i class="fa fa-tablet" aria-hidden="true"></i>   Tablet</a></li>
				<li><a href="#"><i class="fa fa-laptop" aria-hidden="true"></i>   Laptop</a></li>
				<li><a href="#"><i class="fa fa-headphones" aria-hidden="true"></i>   Accessories</a></li>
				<li><a href="#" class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>   My cart</a></li>
				
			</ul>

		</div>

	</header>

	<!--content-->
	<div class="content">

		
		<div class="list-product">
			<div class="container">
				<div class="title-page">
					Các sản phẩm trong giỏ

				</div>
				<?php 
				if (isset($_SESSION['masp']))
				{
					foreach ($_SESSION['masp'] as $key => $masp) {
					
						$sanPham = $db->chiTietSanPham($masp);
						?>
						<div class="row" style="background: #F0F0F0; margin: 20px 0;">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-6">
										<div class="img-product">
											<img src="public/images/<?php echo $sanPham['Anh'] ?>" alt="" class="img-responsive">
										</div>

									</div>
									<div class="col-md-6">
										<div class="detail-pr">
											<div class="name-pr">
												<?php echo $sanPham['TenSP']?>
											</div>
											<div class="company" style="font-size: 15px;">
												<?php echo $sanPham['Hang'] ?>
											</div>
											<div class="price-pr" style="font-size: 20px; color: red; margin-top: 10px">
												<?php echo $sanPham['Gia'] ?> VNĐ
											</div>
											
										</div>

									</div>
								</div>

							</div>
							<div class="col-md-6 pay-product">
								<div class="title-d">
									Thông tin đơn hàng
								</div>
								<ul>
									<li>Phí giao hàng: miễn phí</li>
									<li>Đơn giá: <span><?php echo $sanPham['Gia'] ?></span> đ</li>
									<li>Số lượng: <span>1</span> </li>
									<button class="btn-plus">Thêm</button>
									<li>Tổng cộng: <span><?php echo $sanPham['Gia'] ?></span> đ</li>

								</ul>
								<button class="btn-pay" style="background: #FE7E10; border: none; padding: 10px 20px; display: inline-block;">
									<span  style="color: #fff;">
										Thanh Toán
									</span>
								</button>
								<a href="xoavp.php?index=<?php echo $key?>">
									<button style="background: #FE7E10; border: none; padding: 10px 20px; color: #fff;">
								 	<i class="fa fa-trash-o" aria-hidden="true"></i>
								</button>
								</a>
								

							</div>
						</div>
						<?php 
					}
				}
				else
				{
					echo "Chưa có sản phẩm nào trong giỏ hàng của bạn!";
				}
				?>

				
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