<?php
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});
$MaLoai = $_GET['MaLoai'];

$loai = new loai();
$loai->deleteLoai($MaLoai);
header("location: tableloai.php");

?>