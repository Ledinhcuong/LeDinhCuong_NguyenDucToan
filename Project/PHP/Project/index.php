<?php
require "public/app/db.php";
require "public/app/config.php";
$db = new db();
$sanPham = $db->tatCaSanPham(1);

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

					<a class="navbar-brand" href="#"> 
						<span class="logo"><i class="fa fa-apple" aria-hidden="true"></i>  Zenstore</span>

					</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					
					
					<ul class="nav navbar-nav navbar-right">

						<form action="search.html" class="navbar-form navbar-left" role="search" >
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Bạn tìm gì ...">

							</div>
							<button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
						
						</form>

						
						<li><a href="index.php"><i class="fa fa-mobile" aria-hidden="true"></i> Phone</a></li>
						<li><a href="tablet.php"><i class="fa fa-tablet" aria-hidden="true"></i>  Tablet</a></li>
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
				<li><a href="tablet.html"><i class="fa fa-tablet" aria-hidden="true"></i>   Tablet</a></li>
				<li><a href="#"><i class="fa fa-laptop" aria-hidden="true"></i>   Laptop</a></li>
				<li><a href="#"><i class="fa fa-headphones" aria-hidden="true"></i>   Accessories</a></li>
				<li><a href="#" class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>   My cart</a></li>
				
			</ul>

		</div>

	</header>

	<!--content-->
	<div class="content">
		
		<!--advertisement-->
		<div class="advertisement">
			<div class="container">
				
				<div class="row">
					<div class="col-md-6 col-xs-6 all-ad">
						<div class="ad1">
							<div class="image-ad">
								<img src="public/images/ad1.png" alt="ad1" class="img-responsive">
							</div>

						</div>

					</div>
					<div class="col-md-6 col-xs-6 all-ad">
						<div class="ad1">
							<div class="image-ad">
								<img src="public/images/ad2.png" alt="ad2" class="img-responsive">
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>

		<!--filter-->
		<div class="filter">
			<div class="container all-filter">
				<div class="row ">
					<div class="col-md-6 col-xs-6">
						<div class="row">
							<div class="col-md-3 title-filter">
								Điện Thoại:
							</div>
							<div class="col-md-2 filters">
								<a href="#">Apple</a>
							</div>
							<div class="col-md-2 filters">
								<a href="#">Samsung</a>
							</div>
							<div class="col-md-2 filters">
								 <a href="#">Sony</a>
							</div>
							
							<div class="col-md-3 filters">
								
								<a href="#">Tất cả</a>
							</div>


						</div>

					</div>

					<div class="col-md-6 col-xs-6">
						<div class="row">
							<div class="col-md-1 title-filter">
								Giá: 
							</div>
							<div class="col-md-3 filters">
								 <a href="#">Dưới 3 triệu</a>
							</div>
							<div class="col-md-3 filters">
								 <a href="#">Từ 4 đến 7 triệu</a>
							</div>
							<div class="col-md-3 filters">
								 <a href="#">Trên 10 triệu</a>
							</div>
							<div class="col-md-2 filters">
								 <a href="#">Tất cả</a>
							</div>


						</div>

					</div>
					
				</div>

			</div>

		</div>

		<!-- product -->
		<div class="product">
			<div class="container">
				<div class="all-product">
					<div class="row">
						<?php
						foreach ($sanPham as $row) {
						?>
						<div class="col-md-3 col-xs-6 format-product" >
							<div class="content-product">
								<div class="image-product">
									<img src="public/images/<?php echo $row['Anh'] ?>" alt="<?php echo $row['Anh']?> " class="img-responsive">
								</div>
								<div class="name-product">
									 <a href="chitiet.php"><?php echo $row['TenSP'] ?></a>
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
		<div class="paging">
			<div class="container">
				<div class="all-page">
					<tr>
						<td><a href="#" >
							<span class="background-p">1</span>
						</a></td>
						<td><a href="#">
							<span class="background-p">2</span>
						</a></td>
						<td><a href="#">
							<span class="background-p">3</span>
						</a></td>
						<td><a href="#">
							<span class="background-p">4</span>
						</a></td>
						<td><a href="#">
							<span class="background-p">5</span>
						</a></td>
						<td><a href="#">
							<span class="background-p">6</span>
						</a></td>
					</tr>

				</div>

			</div>
		</div>

		<!-- more-information -->
		<div class="more-information">
			<div class="container">
				<div class="row">
					<div class="col-md-12 information1">
						<div class="title-i">Cuộc sống trở nên tiện nghi hơn với điện thoại di động</div>
						<div class="content-i">Xuất hiện từ năm 1973, điện thoại di động chính thức được ra mắt trên toàn thế giới và được xem là một bước tiến vĩ đại trong lịch sử công nghệ viễn thông. Ngày nay, những chiếc điện thoại mà chúng ta sử dụng đều có thiết kế nhỏ gọn, khác xa với kiểu dáng cồng kềnh và ít chức năng của những mẫu thuộc thời kỳ sơ khai. Với nhịp sống bận rộn, thiết bị này dần trở thành vật bất ly thân của hầu hết mọi người, bởi vì ngoài chức năng nghe, gọi, nhắn tin, chúng còn là chiếc máy vi tính thu nhỏ trong túi của chúng ta. Những lúc cần thư giãn, điện thoại di động, đặc biệt là điện thoại thông minh sẽ trở thành một người bạn giải trí thú vị với đầy đủ các chức năng như chụp hình, nghe nhạc, xem phim, chơi game, lướt Facebook… Hơn nữa, kiểu dáng thời thượng, quý phái của chúng sẽ thể hiện đẳng cấp và phong cách thời trang của người chủ sở hữu.

						Sự bùng nổ nhanh chóng của điện thoại thông minh đã kéo theo sự cạnh tranh của nhiều nhà sản xuất . Vì thế, các công ty lớn ngoài việc sản xuất những dòng cao cấp, bên cạnh đó còn cho ra những sản phẩm tầm trung với giá cả hợp lý để mở rộng thị trường đang hái ra tiền này. Tại CellphoneS, bạn có thể tìm thấy cho mình nhiều dòng máy với nhiều tầm giá khác nhau cùng hàng ngàn ưu đãi hấp dẫn.
					</div>


				</div>
				<div class="col-md-12">
						<div class="title-i">Tại sao chúng ta nên lựa chọn điện thoại thông minh?</div>
						<div class="content-i">
							<ul>
								<li>Kết nối mọi người trở nên gần nhau hơn bất kể khoảng cách địa lý.</li>
								<li>Công cụ làm việc hữu ích của những người bận rộn: xem tin tức, kiểm tra hộp thư, giao dịch ngân hàng, thanh toán trực tuyến, xem bản đồ, quản lý thời gian…</li>
								<li>Nơi lưu giữ những khoảnh khắc đáng nhớ trong cuộc sống qua những bức ảnh, video hoặc giọng nói.</li>
								<li>Giải toả căng thẳng sau những giờ làm việc mệt mỏi hoặc giờ giải lao bằng những ứng dụng game, xem phim hoặc nghe nhạc.</li>
							</ul>
							
						</div>


				</div>
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