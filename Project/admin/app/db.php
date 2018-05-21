<?php
require "config.php";
class db{

	//tao bien ket noi
	public static $conn;

	//1.Ket noi trong ham construct
	public function __construct(){
		self::$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		//hien thi tieng viet
		self::$conn->set_charset('utf8');
		

	}


	//5.Dong ket noi
	public function __destruct(){
		self::$conn->close();
	}
}

?>