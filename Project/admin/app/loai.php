<?php


class loai extends db
{

	// Sua thong tin mot loai
	public function suaLoai($maLoai ,$tenLoai)
	{
		
		
		$sql = "UPDATE Loai SET TenLoai = '$tenLoai' WHERE MaLoai = $maLoai";
		

		$result = self::$conn->query($sql);

	}

	// Lay thong tin mot loai
	public function chiTietLoai($MaLoai)
	{
		$sql = "SELECT * FROM Loai WHERE MaLoai = $MaLoai";

		// Thuc thi cau truy van
		$result = self::$conn->query($sql);
		
		// Chuyen doi tuong thanh mang
		$loai = $result->fetch_assoc();
		
		return $loai;
	}

	// Xoa mot loai khoi co so du lieu
	public function deleteLoai($MaLoai)
	{
		$sql="DELETE FROM Loai  WHERE MaLoai= $MaLoai";
		$result = self::$conn->query($sql);
	}

	public function themLoai($tenLoai)
	{
		$sql = "INSERT INTO Loai (TenLoai) VALUES ('$tenLoai')";
		echo $sql;

		//3.Thuc thi cau truy van
		$result = self::$conn->query($sql);

		
	}

	// Lay tat ca loai tu co so du lieu
	public function tatCaLoai($page, $per_page) {

		$fist_link = ($page-1)* $per_page;
		//2. viet cau truy van
		
		$sql="SELECT * FROM Loai  LIMIT $fist_link,$per_page";
		
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
	public function coutAllLoai(){
		//viet cau truy van
		$sql= "SELECT * FROM Loai";


		//thuc thi 
		$result = self::$conn->query($sql);
		//chuyen object thanh mang
		return $result->num_rows;
	}

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