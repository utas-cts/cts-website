<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("db_connect.php");

$id = $_POST["id"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$type = $_POST["member_type"];
$email = $_POST["email"];

if($_POST["photograph_allowed"] === "on"){
	$photo_allowed = 1;
}else{
	$photo_allowed = 0;
}

if($_POST["email_allowed"] === "on"){
	$email_allowed = 1;
}else{
	$email_allowed = 0;
}

$date = date('Y-m-d H:i:s');
$status = 'None';

$query = $mysqli->prepare("INSERT INTO members (ID, first_name, last_name, member_type, email, signup_date, payment_status, photo_allowed, email_allowed) values (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$query->bind_param("issssssii",$_POST["id"], $_POST["first_name"], $_POST["last_name"], $_POST["member_type"], $_POST["email"], $date, $status, $photo_allowed, $email_allowed);
$query->execute();

header('Location: index.php');
?>
