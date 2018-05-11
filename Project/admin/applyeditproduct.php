<?php
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});

$maSP = $_POST['MaSP'];
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

$sp = new sanpham();

if (strlen($file['name']) == 0)
{
	$sp->suaSanPham($file['name'], $maLoai, $tenSP, $gia, $hang, $manHinh, $hdh, $camSau, $camTruoc, $cpu,
	 $ram, $boNho, $chatLieu, $trongLuong, $pin, $dacDiem, $maSP);
	
}
else
{
	// Kiem tra file
	$target_dir = "../public/images/";  // Noi luu fiel 
	$target_file = $target_dir. basename($file['name']); // Duong dan file khi trong thu muc

	$uploadOK = 1; // Bien xac nhan cac tac vu xu ly file co thanh cong hay khong
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);  // Lay kieu cua file trich xuat tu duong dan

	// Kiem tra file co phai la file hinh hay Khong
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
			$sp->suaSanPham($file['name'], $maLoai, $tenSP, $gia, $hang, $manHinh, $hdh, $camSau, $camTruoc, $cpu,
				 $ram, $boNho, $chatLieu, $trongLuong, $pin, $dacDiem, $maSP);
			header("location: index.php");

		}
	}
	else
	{
		header("location: javascript:goback()");
	}

}

