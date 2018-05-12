<?php
session_start();
class db{

	//tao bien ket noi
	public static $conn;

	//1.Ket noi trong ham construct
	public function __construct(){
		self::$conn = new mysqli("localhost","root","mysql","QuanLy");
		//hien thi tieng viet
		self::$conn->set_charset('utf8');
		

	}

	public function getData($obj)
	{
		$arr = array();
		while($row = $obj->fetch_assoc()){
			$arr[] = $row;
		}
		return $arr;
	}


	//5.Dong ket noi
	public function __destruct(){
		self::$conn->close();
	}
}

?>