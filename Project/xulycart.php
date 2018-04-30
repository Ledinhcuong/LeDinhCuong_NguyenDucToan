<?php
session_start();
$masp = $_GET['masp'];

if (!isset($_SESSION['sosp']))
{
	$_SESSION['sosp'] = 1;
	$_SESSION['masp'] = array(1=>$masp);
	
}
else
{
	$_SESSION['sosp'] = ($_SESSION['sosp'] + 1);
	$_SESSION['masp'] += array($_SESSION['sosp']=>$masp);
	foreach ($_SESSION['masp'] as $key) {
		
	}
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Them vao gio hang</title>
	<link rel="stylesheet" href="public/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
	<style>
	.thongbao {
		background: rgba(0,0,0,0.7);
		display: inline-block;
		padding: 30px 50px;
		position: absolute;
		left: 32%;
		top: 5px;
		display: none;

	}

	.noidung {
		color: #fff;
		font-size: 20px;
	}

	.btn-accept {
		padding: 6px 20px;
		font-size: 12px;
		background: #fff;
		border: none;
		border-radius: 5px;
	}

	.btn-accept:hover {
		background: #00A8FF;
	}

	.thongbao a{
		text-decoration: none;
		color: #000;
		font-weight: bold;
	}

</style>
<script>
	function goback() {
		history.back(-1)
	}
	$(document).ready(function(){

		$('.thongbao').slideToggle(500);
	});
</script>
</head>
<body>

	<div class="thongbao">
		<div class="noidung">Bạn đã thêm vào giỏ hàng thành công!</div>
		<div style="text-align: center; margin: 10px 0;">
			<a href='javascript:goback()'><button class="btn-accept">OK</button></a>
			
		</div>

	</div>
	
</body>
</html>