<?php
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});


$maLoai = $_POST['maloai'];
$tenSP = $_POST['tensp'];
$gia = $_POST['gia'];
$hang = $_POST['hang'];
$manHinh =$_POST['manhinh'];
$hdh = $_POST['hedieuhanh'];
$camSau = $_POST['camsau'];
$camTruoc = $_POST['camtruoc'];
$cpu = $_POST['cpu'];
$ram = $_POST['ram'];
$boNho = $_POST['bonho'];
$chatLieu = $_POST['chatlieu'];
$trongLuong = $_POST['trongluong'];
$pin = $_POST['pin'];
$dacDiem = $_POST['dacdiem'];
$file = $_FILES['fileUpload'];

$sanPham = new sanpham();



// Kiem tra file
$target_dir = "../public/images/";  // Noi luu fiel 
$target_file = $target_dir. basename($file['name']); // Duong dan file khi trong thu muc

$uploadOK = 1; // Bien xac nhan cac tac vu xu ly file co thanh cong hay khong
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);  // Lay kieu cua file trich xuat tu duong dan

// Kiem tra file co phai la file hinh hay khong
$check = getimagesize($file['tmp_name']);		// Tra ve mang gi do

if ($check == false)
{
	$uploadOK = 0;
}

// Kiem tra file da ton tai hay chua
if (file_exists($target_file))
{
	$uploadOK = 0;
}

// Gioi han loai file
if ($imageFileType != "png" && $imageFileType != "jpg")
{
	$uploadOK = 0;
}

// Di chuyen file vo thu muc neu dap ung cac dieu kien
if ($uploadOK == 1) 
{
	if (move_uploaded_file($file['tmp_name'], $target_file) == false) 
	{
		echo "Upload file that bai";
	}
	else
	{
		// Tien hanh thuc hien
		$sanPham->addProduct($maLoai, $tenSP, $gia, $hang, $manHinh, $hdh, $camSau, $camTruoc, $cpu, $ram, $boNho, $chatLieu, $trongLuong, $pin, $dacDiem, $file['name']);
		header("location: index.php");

	}
}
else
{
	 $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
    echo "<a href='$url'>Dữ liệu đã tồn tại vui lòng nhập lại</a>"; 
}


?>