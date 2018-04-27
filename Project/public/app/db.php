<?php
class db{

	//tao bien ket noi
	public static $conn;

	//1.Ket noi trong ham construct
	public function __construct(){
		self::$conn = new mysqli("localhost","root","mysql","QuanLy");
		//hien thi tieng viet
		self::$conn->set_charset('utf8');
	}

	public function tatCaSanPham($loai, $page, $per_page) {

		$fist_link = ($page-1)* $per_page;
			//2. viet cau truy van
		if ($loai == 1)
		{
			$sql="SELECT * FROM SanPham WHERE MaLoai = 1 LIMIT $fist_link,$per_page";
		}
		else
		{
			$sql="SELECT * FROM SanPham WHERE MaLoai = 2 LIMIT $fist_link,$per_page";
		}
			//3.Thuc thi cau truy van
		$result = self::$conn->query($sql);

			//4.Chuyen object thanh mang
		$arr = array();
		while($row = $result->fetch_assoc()){
			$arr[] = $row;
		}
		return $arr;
		
		
		
	}

	// Tinh so luong san pham
	public function coutAllProducts($loai){
		//viet cau truy van
		if ($loai == 1)
		{
			$sql= "SELECT * FROM SanPham WHERE MaLoai = 1";
		}
		else
		{
			$sql= "SELECT * FROM SanPham WHERE MaLoai = 2";
		}

		//thuc thi 
		$result = self::$conn->query($sql);
		//chuyen object thanh mang
		return $result->num_rows;
	}

	// Phuong thuc tao link
	public function create_links ($base_url, $total_rows, $page, $per_page)
	{
		$total_links = ceil($total_rows/$per_page);
		$link ="";

		for($j=1; $j <= $total_links ; $j++)
		{
			//$link = $link."<a href='".$base_url."page=$j'> $j </a>";

			$s = "<td> <a href='". $base_url. "page=$j'> <span class='background-p'> $j </span> </a> </td> ";
			$link = $link.$s;
		}
		return $link;
	}


	// Phuong thuc lay tri tiet cua mot san pham
	public function chiTietSanPham($id)
	{
		$sql = "SELECT * FROM SanPham WHERE MaSP = $id";

		// Thuc thi cau truy van
		$result = self::$conn->query($sql);
		
		// Chuyen doi tuong thanh mang
		$sanPham = $result->fetch_assoc();
		//$arr = array();
		/*
		while($row = $result->fetch_assoc()){
				$arr[] = $row;
		}
		*/
		return $sanPham;
	}

	public function layDuLieuTrang($id)
	{
		$sql = "SELECT * FROM DuLieuTrang WHERE MaLoai = $id";

		// Thuc thi cau truy van
		$result = self::$conn->query($sql);
		
		// Chuyen doi tuong thanh mang
		$duLieu = $result->fetch_assoc();
		
		return $duLieu;
	}

	// Tinh ket qua so ket qua tim duoc
	public function tinhSoKetQua($timTheo, $key){
		//viet cau truy van
		if ($timTheo == "hang")
		{
			$sql= "SELECT * FROM SanPham WHERE Hang LIKE '".$key."'";
		}
		else if ($timTheo == "gia") {
			$sql= "SELECT * FROM SanPham WHERE ". $key;
		} else {

			$sql= "SELECT * FROM SanPham WHERE TenSP LIKE '%".$key."%'";

		}

		//thuc thi 
		$result = self::$conn->query($sql);
		//chuyen object thanh mang
		return $result->num_rows;
	}

	// Search
	public function timSanPham($timTheo, $key, $page, $per_page) {

			// Tinh so thu tu trang bat dau hien thi
		$fist_link = ($page-1)* $per_page;
			//2. viet cau truy van
		if ($timTheo == "hang")
		{
			$sql= "SELECT * FROM SanPham WHERE Hang LIKE '".$key."' LIMIT $fist_link,$per_page";

		}
		else if ($timTheo == "gia") {
			$sql= "SELECT * FROM SanPham WHERE " .$key. " LIMIT $fist_link,$per_page";
		} else {

			$sql= "SELECT * FROM SanPham WHERE TenSP LIKE '%".$key."%' LIMIT $fist_link,$per_page";

		}

			//3.Thuc thi cau truy van
		$result = self::$conn->query($sql);

			//4.Chuyen object thanh mang
		$arr = array();
		while($row = $result->fetch_assoc()){
			$arr[] = $row;
		}
		return $arr;
		
	}

	// Quang cao
	public function noiDungQuangCao() {

			

			//2. viet cau truy van
		
		$sql="SELECT * FROM QuangCao WHERE IDQC IN(".rand(1,4). "," . rand(1,4) .") AND Moi = 1"; 

			//3.Thuc thi cau truy van
		$result = self::$conn->query($sql);

			//4.Chuyen object thanh mang
		$arr = array();
		while($row = $result->fetch_assoc()){
			$arr[] = $row;
		}
		return $arr;
		
		
		
	}


	
	//5.Dong ket noi
	public function __destruct(){
		self::$conn->close();
	}
}