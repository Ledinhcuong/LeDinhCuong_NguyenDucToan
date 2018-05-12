<?php
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});
$MaLoai = $_GET['MaLoai'];

$trang = new dulieutrang();
$trang->deleteDuLieu($MaLoai);

header("location: tabletrang.php");

?>