<<<<<<< HEAD
<?php
require "app/db.php";
require "app/user.php";
$user = new user();
$user->logout();
header("location: login.php");
=======
<?php
require "app/db.php";
require "app/user.php";
$user = new user();
$user->logout();
header("location: login.php");
>>>>>>> f049fd9a89f9be3d9cc8cf021cbe48ad75521229
?>