<?php
require "app/db.php";
require "app/user.php";
$user = new user();
$user->logout();
header("location: login.php");
?>