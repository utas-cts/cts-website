<?php
include("db_connect.php");

$id = $_POST["ID"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$type = $_POST["member_type"];
$email = $_POST["email"];

if($_POST["photograph_allowed"] === "on"){
	$photo_allowed = true;
}else{
	$photo_allowed = false;
}

if($_POST["email_allowed"] === "on"){
	$email_allowed = true;
}else{
	$email_allowed = false;
}

$date = date('Y-m-d H:i:s');

$sql_insert="INSERT INTO members (ID, first_name, last_name, member_type, email, signup_date, payment_status, photo_allowed, email_allowed) values ('$id','$first_name', '$last_name', '$type', '$email', '$date', 'None', '$photo_allowed', '$email_allowed');";

if($mysqli->query($sql_insert) === TRUE) {
	echo "success";
} else{
	echo "Error: " . $sql_insert . "<br>" . $mysqli->error;
}
header('Location: index.php');
?>
