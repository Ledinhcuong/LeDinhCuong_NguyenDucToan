<?php
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});


$maSP = $_GET['MaSP'];
$sanPham = new sanpham();
$sanPham->deleteProduct($maSP);
header("location: index.php");