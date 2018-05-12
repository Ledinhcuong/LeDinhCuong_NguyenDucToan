<?php

class sanpham extends db {


	public function suaSanPham($newImg, $maLoai, $tenSP, $gia, $hang, $manHinh, $hdh, $camSau, $camTruoc, $cpu,
	 $ram, $boNho, $chatLieu, $trongLuong, $pin, $dacDiem, $maSP)
	{
		if ($newImg == '')
		{
			$sql = "UPDATE SanPham SET MaLoai = $maLoai, TenSP = '$tenSP', Gia = $gia, Hang = '$hang', ManHinh = '$manHinh', HeDieuHanh = '$hdh', 
			CamSau = '$camSau', CamTruoc = '$camTruoc', CPU = '$cpu', Ram = $ram, BoNho = $boNho, ChatLieu = '$chatLieu', TrongLuong = $trongLuong, 
			DungLuongPin = $pin, DacDiem = '$dacDiem' WHERE MaSP = $maSP";
		}
		else
		{
			$sql = "UPDATE SanPham SET MaLoai = $maLoai, TenSP = '$tenSP', Gia = $gia, Hang = '$hang', ManHinh = '$manHinh', HeDieuHanh = '$hdh', 
			CamSau = '$camSau', CamTruoc = '$camTruoc', CPU = '$cpu', Ram = $ram, BoNho = $boNho, ChatLieu = '$chatLieu', TrongLuong = $trongLuong, 
			DungLuongPin = $pin, DacDiem = '$dacDiem', Anh = '$newImg' WHERE MaSP = $maSP";
		}

		$result = self::$conn->query($sql);

	}

	public function chiTietSanPham($id)
	{
		$sql = "SELECT * FROM SanPham WHERE MaSP = $id";

		// Thuc thi cau truy van
		$result = self::$conn->query($sql);
		
		// Chuyen doi tuong thanh mang
		$sanPham = $result->fetch_assoc();
		
		return $sanPham;
	}
	
	public function deleteProduct($maSP)
	{
		$sql="DELETE FROM SanPham  WHERE MaSP= $maSP";
		$result = self::$conn->query($sql);
	}

	public function addProduct($maLoai, $tenSP, $gia, $hang, $manHinh, $hdh, $camSau, $camTruoc, $cpu, $ram, $boNho, $chatLieu, $trongLuong, $pin, $dacDiem, $anh)
	{
		$sql = "INSERT INTO SanPham (MaLoai, TenSP, Gia, Hang, ManHinh, HeDieuHanh, CamSau, CamTruoc, CPU, Ram, BoNho, ChatLieu, TrongLuong, DungLuongPin, DacDiem, Anh ) VALUES ($maLoai, '$tenSP', $gia, '$hang', '$manHinh', '$hdh', '$camSau', '$camTruoc', '$cpu', $ram, $boNho, '$chatLieu', $trongLuong, $pin, '$dacDiem', '$anh')";
		echo $sql;

		//3.Thuc thi cau truy van
		$result = self::$conn->query($sql);

		return $result;
	}

	public function tatCaSanPham($page, $per_page) {

		$fist_link = ($page-1)* $per_page;
		//2. viet cau truy van
		
		$sql="SELECT * FROM SanPham  LIMIT $fist_link,$per_page";
		
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
	public function coutAllProducts(){
		//viet cau truy van
		$sql= "SELECT * FROM SanPham";


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