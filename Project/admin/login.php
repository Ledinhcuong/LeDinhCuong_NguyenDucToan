<?php 
session_start();
// Tu dong load cac class
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});

if ($_POST['username'] && $_POST['password'])
{

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$user = new user();
	if ($user->login($username, $password) == true)
	{
		$_SESSION['username'] = $username;
		header("location: index.php");
	}

}



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
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
						<span class="logo"><i class="fa fa-apple" aria-hidden="true"></i>  Login</span>

					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					
					
					<ul class="nav navbar-nav navbar-right">

						<li><a href="#"><i class="fa fa-registered" aria-hidden="true"></i> Register</a></li>
						
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		

	</header>

	<!--content-->
	<div class="content">
		<div class="login">
			<div class="container">
				<form action="" method="POST" class="form-horizontal" role="form" onsubmit="validateLogin();">
					<div class="form-group">
						<legend style="color: #009688">Đăng nhập vào tài khoản của bạn</legend>

					</div>

					<div class="form-group">
						<label for="username" class="col-sm-2 control-label">Username: </label>
						<div class="col-sm-10">
							<input type="text" name="username" id="username" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="col-sm-2 control-label">Password: </label>
						<div class="col-sm-10">
							<input type="password" name="password" id="password" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>


					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-primary">Đăng nhập</button>
						</div>
					</div>
				</form>
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


	</body>
	</html>