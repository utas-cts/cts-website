<?php
	require("db_connect.php");
	$query = $mysqli->prepare("UPDATE members (payment_date, payment_status) values (?, ?) WHERE id=?");

	$query->bind_param("ssi",date('Y-m-d H:i:s'),$_POST["payment_status"],$_POST["id"]);
	$query->execute();
	header("Location: member_list.php");
	exit();
?>
