<?php

class sanpham extends db {
	
	public function tatCaSanPham() {

			//2. viet cau truy van
		

		$sql="SELECT * FROM SanPham";
		
		
			//3.Thuc thi cau truy van
		$result = self::$conn->query($sql);

			//4.Chuyen object thanh mang
		$arr = array();
		while($row = $result->fetch_assoc()){
			$arr[] = $row;
		}
		return $arr;
		
	}
}


?>