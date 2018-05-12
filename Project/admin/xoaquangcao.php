<?php
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});
$IDQC = $_GET['IDQC'];

$qc = new quangcao();
$qc->deleteQC($IDQC);
header("location: mquangcao.php");


?>