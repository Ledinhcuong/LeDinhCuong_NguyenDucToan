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

	public function tatCaSanPham($loai) {

		if ($loai == 1)
		{
			//2. viet cau truy van
			$sql="SELECT * FROM `SanPham` WHERE MaLoai = 1 LIMIT 0,16";
			//3.Thuc thi cau truy van
			$result = self::$conn->query($sql);
			$result = self::$conn->query($sql);
			//4.Chuyen object thanh mang
			$arr = array();
			while($row = $result->fetch_assoc()){
				$arr[] = $row;
			}
			return $arr;
		}
		
	}

	public function tenTheLoai(){
		//2. viet cau truy van
		$sql="SELECT * FROM theloai";
		//3.Thuc thi cau truy van
		$result = self::$conn->query($sql);
		//4.Chuyen object thanh mang
		$arr = array();
		while($row = $result->fetch_assoc()){
			$arr[] = $row;
		}
		return $arr;
	}
	public function tinNoiBat($x){
		//2. viet cau truy van
		$sql="SELECT * FROM tin WHERE tinnoibat=1 LIMIT 0,$x";
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