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

$trang = new dulieutrang();
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
	<script type="text/javascript" src="public/js/myscripts.js"></script>
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


						<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Wellcome: <?php echo $_SESSION['username']; ?></a></li>
						<li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>  Settings</a></li>
						<li><a href="#"> <i class="fa fa-commenting" aria-hidden="true"></i>  Message</a></li>
						<li><a href="logout.php?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>


					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>


	</header>

	<!--content-->
	<div class="content">
		<div class="container">

			<!-- other table -->
			<div class="other-table">
				<div class="row">
					<div class="col-md-2" style="font-size: 20px; color: #2196F3;">
						Các bảng:
					</div>
					<div class="col-md-2">
						<a href="index.php">
							<span class="btn-table">
								Sản phẩm
							</span>
						</a>

					</div>

					<div class="col-md-2">
						<a href="mquangcao.php">
							<span class="btn-table">
								Quảng cáo
							</span>
						</a>
					</div>

					<div class="col-md-2">
						<a href="tableloai.php">
							<span class="btn-table">
								Loại
							</span>
						</a>
					</div>

					<div class="col-md-2">
						<a href="#">
							<span class="btn-table">
								Dữ liệu trang
							</span>
						</a>
					</div>

				</div>

			</div>

			<!-- list product -->
			<div class="list-table">
				<div class="name-list">Dữ liệu trên trang</div>
				<div class="add-product">
					<a href="formdulieutrang.php" style="font-size: 30px; margin-bottom: 10px;"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
				</div>
				<div class="table">
					<div class="title">
						<div class="row">
							<div class="col-md-2 b-title">Mã loại</div>
							<div class="col-md-2 b-title">Kiểu Search 1</div>
							<div class="col-md-2 b-title">Kiểu Search 2</div>
							<div class="col-md-2 b-title">Thao tác</div>

						</div>
					</div>
					<?php
					$total_rows= $trang->coutAllDLTrang();
					$per_page= 10;

					if (isset($_GET['page'])){
						$page= $_GET['page'];
					}else{
						$page=1;
					}
					$page = $trang->tatCaDuLieu($page,$per_page);
					foreach ($page as $key) {
						?>
						<div class="row">
							<div class="col-md-2 s-title"><?php echo $key['MaLoai']?></div>
							<div class="col-md-2 s-title"><?php echo $key['TDL']?></div>
							<div class="col-md-2 s-title"><?php echo $key['TDL2']?></div>
							
							
							<div class="col-md-6 " style="padding-top: 20px;">

								<button class="chitiet">Chi Tiết</button>
								<a href="editdulieutrang.php?MaLoai= <?php echo $key['MaLoai'];?>"><button>Sửa</button></a>
								<a href="xoadulieutrang.php?MaLoai= <?php echo $key['MaLoai'];?>"><button>Xóa</button></a>

							</div>

						</div>

						<div class="table-hidden">
							<div class="row">
								<div class="col-md-6 more-info">
									<ul>
										<li>Search 1  : <?php echo $key['L1'] ?> </li>
										<li>Search 2  : <?php echo $key['L2']?></li>
										<li>Search 3  : <?php echo $key['L3'] ?></li>
										<li>Search 4 : <?php echo $key['L4'] ?></li>
										<li>Search 5 : <?php echo $key['L5']?> </li>
										<li>Search 6 : <?php echo $key['L6']?></li>
										<li>Search 7 : <?php echo $key['L7']?></li>
										<li>Search 8 : <?php echo $key['L8'] ?></li>
										<li>Tiêu đề giới thiệu : <?php echo $key['TieuDe']?> GB</li>
										
									</ul>

								</div>
								<div class="col-md-6 more-info">
									<ul>
										
										<li>Tiêu đề lợi ích  : <?php echo $key['TieuDe2'] ?> </li>
										<li>Lợi ích 1 : <?php echo $key['Li1']?></li>
										<li>Lợi ích 2 : <?php echo $key['Li2'] ?></li>
										<li>Lợi ích 3 : <?php echo $key['Li3'] ?></li>
										<li>Lợi ích 4 : <?php echo $key['Li4']?> </li>
									</ul>
								</div>

								<div class="col-md-12">
									<div class="tdacdiem">
										Nội dung giới thiệu:
									</div>
									<span>
										<?php echo $key['NDGT'] ?>
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
								echo $trang->create_links($base_url, $total_rows, $page, $per_page);
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