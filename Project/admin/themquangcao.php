<?php
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});


$maSP = $_POST['masp'];
$maLoai = $_POST['maloai'];
$moi = $_POST['moi'];
$noiDungQC =$_POST['noidungqc'];
$file = $_FILES['fileUpload'];


$qc = new quangcao();



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
		$qc->themQuangCao($maSP, $maLoai, $moi, $noiDungQC, $file['name']);
		header("location: mquangcao.php");

	}
}
else
{
	 $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
    echo "<a href='$url'>Dữ liệu đã tồn tại vui lòng nhập lại</a>"; 
}


?>