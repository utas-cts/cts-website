<?php
	require("db_connect.php");
	if($_POST["may_change"] == "yes"){
		$may_change = 1;
	}else{
		$may_change = 0;
	}
	$datetime=$_POST["date"] . " " . $_POST["time"];

	$query = $mysqli->prepare("INSERT INTO events (name, event_datetime, description, location, may_change, cost) values (?, ?, ?, ?, ?, ?)");

	$query->bind_param("ssssis",$_POST["name"], $datetime,
		$_POST["description"], $_POST["location"], $may_change,
	   	$_POST["cost"]);

	$query->execute();
	header("Location: event_management.php");
	exit();
?>
