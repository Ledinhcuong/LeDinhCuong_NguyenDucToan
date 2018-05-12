<?php
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});


$maLoai = $_POST['maloai'];
$tdl = $_POST['tdl'];
$tdl2 = $_POST['tdl2'];
$l1 = $_POST['l1'];
$l2 =$_POST['l2'];
$l3 = $_POST['l3'];
$l4 = $_POST['l4'];
$l5 = $_POST['l5'];
$l6 = $_POST['l6'];
$l7 = $_POST['l7'];
$l8 = $_POST['l8'];
$tieude = $_POST['tieude'];
$ndgt = $_POST['ndgt'];
$tieude2 = $_POST['tieude2'];
$li1 = $_POST['li1'];
$li2 = $_POST['li2'];
$li3 = $_POST['li3'];
$li4 = $_POST['li4'];

$trang = new dulieutrang();



// Tien hanh thuc hien
$trang->addDuLieu($maLoai, $tdl, $tdl2, $l1, $l2, $l3, $l4, $l5, $l6, $l7, $l8, $tieude, $ndgt, $tieude2, $li1, $li2, $li3, $li4);
header("location: tabletrang.php");