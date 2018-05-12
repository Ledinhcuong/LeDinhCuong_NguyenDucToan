<?php
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});

$tenLoai = $_POST['tenloai'];
$loai = new loai();

// Tien hanh thuc hien
$loai->themLoai($tenLoai);
header("location: tableloai.php");
?>