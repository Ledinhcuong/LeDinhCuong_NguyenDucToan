<?php


class quangcao extends db
{

	// Sua mot quang cao tren co so du lieu
	public function suaQuangCao($maQC ,$maSP, $maLoai, $moi, $noiDungQC, $anh)
	{
		if ($anh == '')
		{
			$sql = "UPDATE QuangCao SET MaSP = $maSP, MaLoai = $maLoai, Moi = $moi, NoiDungQC = '$noiDungQC' WHERE IDQC = $maQC";
		}
		else
		{
			$sql = "UPDATE QuangCao SET MaSP = $maSP, MaLoai = $maLoai, Moi = $moi, NoiDungQC = '$noiDungQC', Anh = '$anh' WHERE IDQC = $maQC";
		}

		$result = self::$conn->query($sql);

	}

	// Lay thong tin mot quang cao
	public function chiTietQC($IDQC)
	{
		$sql = "SELECT * FROM QuangCao WHERE IDQC = $IDQC";

		// Thuc thi cau truy van
		$result = self::$conn->query($sql);
		
		// Chuyen doi tuong thanh mang
		$quangcao = $result->fetch_assoc();
		
		return $quangcao;
	}

	// Phuong thuc xoa quang cao
	public function deleteQC($IDQC)
	{
		$sql="DELETE FROM QuangCao  WHERE IDQC= $IDQC";
		$result = self::$conn->query($sql);
	}

	public function themQuangCao($maSP, $maLoai, $moi, $noiDungQC, $anh)
	{
		$sql = "INSERT INTO QuangCao (MaSP, MaLoai, Moi, NoiDungQC, Anh) VALUES ($maSP, $maLoai, $moi, '$noiDungQC', '$anh')";
		echo $sql;

		//3.Thuc thi cau truy van
		$result = self::$conn->query($sql);

		
	}

	// Lay thong tin tat ca quang cao
	public function tatCaQuangCao($page, $per_page) {

		$fist_link = ($page-1)* $per_page;
		//2. viet cau truy van
		
		$sql="SELECT * FROM QuangCao  LIMIT $fist_link,$per_page";
		
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
	public function coutAllQC(){
		//viet cau truy van
		$sql= "SELECT * FROM QuangCao";


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