<?php
	require($_SERVER["DOCUMENT_ROOT"] . "/db_connect.php");
	$query = $mysqli->prepare("DELETE FROM events where id=?");
	$query->bind_param("i",$_POST["id"]);
	$query->execute();
	header("Location: ./event_management.php");
	exit();
?>
