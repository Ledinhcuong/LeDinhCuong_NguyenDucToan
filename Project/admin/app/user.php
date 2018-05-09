
<?php 
require "db.php";
class user extends db {

	public function logout() {

		session_unset();
	}

	public function login ($username, $password)
	{
		// Viet cau truy van
		$sql = "SELECT * FROM Account WHERE Username = '" .$username . "'";
		// Thuc thi cau truy van
		$result = self::$conn->query($sql);


		if ($result->num_rows < 1) // Tai khoan khong ton tai
		{
			return false;
		}
		else
		{
			// Chuyen thanh mang
			$row = $result->fetch_assoc();
			if ($row['Password'] != $password)
			{
				return false;
			}
			else
			{
				return true;
			}
		}

	}

}

?>