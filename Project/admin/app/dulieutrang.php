<?php

class dulieutrang extends db {


	public function suaLieuTrang($maloaicu, $maLoai, $tdl, $tdl2, $l1, $l2, $l3, $l4, $l5, $l6, $l7, $l8, $tieude, $ndgt, $tieude2, $li1, $li2, $li3, $li4)
	{
		
		
		$sql = "UPDATE DuLieuTrang SET MaLoai = $maLoai, TDL = '$tdl', TDL2 = '$tdl2', L1 = '$l1', L2 = '$l2', L3 = '$l3', 
			L4 = '$l4', L5 = '$l5', L6 = '$l6', L7 = '$l7', L8 = '$l8', TieuDe = '$tieude', NDGT = '$ndgt', 
			TieuDe2 = '$tieude2', Li1 = '$li1', Li2 = '$li2', Li3 = '$li3', Li4 = '$li4' WHERE MaLoai = $maloaicu";
		

		$result = self::$conn->query($sql);

	}

	public function chiTietTrang($maLoai)
	{
		$sql = "SELECT * FROM DuLieuTrang WHERE MaLoai = $maLoai";

		// Thuc thi cau truy van
		$result = self::$conn->query($sql);
		
		// Chuyen doi tuong thanh mang
		$sanPham = $result->fetch_assoc();
		
		return $sanPham;
	}
	
	public function deleteDuLieu($maLoai)
	{
		$sql="DELETE FROM DuLieuTrang  WHERE MaLoai= $maLoai";
		$result = self::$conn->query($sql);
	}

	public function addDuLieu($maLoai, $tdl, $tdl2, $l1, $l2, $l3, $l4, $l5, $l6, $l7, $l8, $tieude, $ndgt, $tieude2, $li1, $li2, $li3, $li4)
	{
		$sql = "INSERT INTO DuLieuTrang (MaLoai, TDL, TDL2, L1, L2, L3, L4, L5, L6, L7, L8, TieuDe, NDGT, TieuDe2, Li1, Li2, Li3, Li4) VALUES ($maLoai, '$tdl', '$tdl2', '$l1', '$l2', '$l3', '$l4', '$l5', '$l6', '$l7', '$l8', '$tieude', '$ndgt', '$tieude2', '$li1', '$li2', '$li3', '$li4')";
		echo $sql;

		//3.Thuc thi cau truy van
		$result = self::$conn->query($sql);

		return $result;
	}

	public function tatCaDuLieu($page, $per_page) {

		$fist_link = ($page-1)* $per_page;
		//2. viet cau truy van
		
		$sql="SELECT * FROM DuLieuTrang  LIMIT $fist_link,$per_page";
		
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
	public function coutAllDLTrang(){
		//viet cau truy van
		$sql= "SELECT * FROM DuLieuTrang";


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
			
			if ($j == $page)
			{
				
				$s = "<td> <a href='". $base_url. "page=$j'> <span class='background-p active'> $j </span> </a> </td> ";
				$link = $link.$s;
				

			}
			else
			{
				$s = "<td> <a href='". $base_url. "page=$j'> <span class='background-p'> $j </span> </a> </td> ";
				$link = $link.$s;
			}
			
		}
		return $link;
	}
	
}


?>