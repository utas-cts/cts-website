<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	require($_SERVER["DOCUMENT_ROOT"]."/db_connect.php");
	require($_SERVER["DOCUMENT_ROOT"]."/check_login.php");
	$date = date('Y-m-d H:i:s');
	$query = $mysqli->prepare("UPDATE members SET payment_date=?, payment_status=? WHERE id=?");

	$query->bind_param("ssi",$date,$_POST["payment_type"],$_POST["id"]);
	$query->execute();
	header("Location: ./member_list.php");
	exit();
?>
