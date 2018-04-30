<?php
session_start();
$key = $_GET['index'];
unset($_SESSION['masp'][$key]);

if (count($_SESSION['masp']) == 0)
{
	session_unset();
}

header('location:mycart.php');
?>