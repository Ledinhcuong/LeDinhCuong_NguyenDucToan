
<?php

require "app/config.php";
require "app/db.php";
$id = $_GET['id'];
$db = new db();
$sanPham = $db->chiTietSanPham($id);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chi tiết</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="public/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/css/styles.css">
	<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="public/js/sitecripts.js"></script>
	<style>

		.detail {
			margin-top: 25px;
			margin-bottom: 25px;
			padding: 20px 0;
		}
		.name-product {
			font-size: 25px;
		}

		.specification-title {
			font-size: 25px;
			color: #008EFF;
		}

		.specifications ul {
			list-style: none;
			padding-left: 0px;
		}

		.specifications li {
			padding: 10px 0px;
			border-top: 1px solid gray;

		}

		.product-detail {
			padding: 20px 0;
			margin-bottom: 60px;
		}

		.price {
			margin: 10px 0px;
			font-size: 25px;
		}

		
		.add-button {
			padding: 20px 40px;
			background: #FFB900;
			position: absolute;
			border-radius: 12px;
			color: #fff;
			font-size: 20px;

		}

		.icon-add {
			position: absolute;
			right: 0px;
			top: -20px;
		}

		.btn-add {
			margin: 20px 0;
		}

		.buy-product {
			padding-left: 20px;
		}

		.introduction-product {
			padding: 20px 0px;
			margin: 20px 0;
		}

		.title-intro {
			font-size: 25px;
			color: #00CC6A;
			margin-bottom: 15px;


		}

		@media(min-width: 320px) and (max-width: 767px) {
			.specifications {
				margin-top: 75px;
			}

			.detail {
				padding-left: 15px;
				padding-right: 15px;
			}

			.add-button {
				padding: 20px 30px;
				font-size: 15px;
			}

		}

		@media(min-width: 768px) and (max-width: 1023px) {
			.detail {
				padding-left: 10px;
				padding-right: 10px;
			}

		}
		
	</style>
	<script>
		$(document).ready(function(){
			$('.title-intro').click(function(){
				$('.content-intro').slideToggle(300);
			});
		});
	</script>

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
		<div class="container detail">
			<div class="name-product">
				Điện thoại <?php echo $sanPham['TenSP']?>

			</div>
		<div class="row product-detail">
			<div class="col-md-6 col-sm-6 col-sm-12">
				<div class="image-pr">
					<div>
						<img src="public/images/<?php echo $sanPham['Anh']?>" alt="<?php echo $sanPham['TenSP']?>" class="img-responsive">
					</div>

					<div class="buy-product">
						<div class="price">
							<?php echo $sanPham['Gia']?> đ
						</div>
						<div class="row">
							
							<div class="col-md-9 btn-a">
								<a href="xulycart.php?masp=<?php echo $sanPham['MaSP'] ?>">
									<span class="add-button">
										Thêm vào giỏ hàng
										<div class="icon-add">
											<img src="public/images/alfons.png" alt="" class="img-responsive" width="30px" height="30px">
										</div>
									</span>

								</a>

							</div>
							<div class="col-md-3"></div>
								
							

						</div>

					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-sm-12">
				<div class="specifications">
						<div class="specification-title">
							Thông số kỹ thuật
						</div>
						<ul>
							<li>Màn hình: <?php echo $sanPham['ManHinh'] ?> </li>
							<li>Hệ điều hành: <?php echo $sanPham['HeDieuHanh']?> </li>
							<li>Camera sau: <?php echo $sanPham['CamSau']?> </li>
							<li>Camera trước: <?php echo $sanPham['CamTruoc']?> </li>
							<li>Cpu: <?php echo $sanPham['CPU'] ?> </li>
							<li>Ram: <?php echo $sanPham['Ram'] ?> GB </li>
							<li>Bộ nhớ trong: <?php echo $sanPham['BoNho'] ?> GB</li>
							<li>Chất liệu: <?php echo $sanPham['ChatLieu']?> </li>
							<li>Trọng lượng: <?php echo $sanPham['TrongLuong']?> g</li>
							<li>Dung lượng pin: <?php echo $sanPham['DungLuongPin']?> ma</li>
						</ul>	
				</div>

			</div>
		</div>

		<div class="introduction-product">
			<div class="title-intro">
				<button style="border: none; background: none;">Đặc điểm nổi bật của sản phẩm</button>
			</div>
			<div class="content-intro" style="display: none;">
				<?php echo $sanPham['DacDiem']?>
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