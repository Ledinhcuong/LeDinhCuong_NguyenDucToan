<?php
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});


$maLoai = $_POST['maloai'];
$tenLoai = $_POST['tenloai'];


$loai = new loai();

$loai->suaLoai($maLoai ,$tenLoai);
header("location: tableloai.php");
?>
