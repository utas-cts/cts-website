<?php
include("db_connect.php");

$id = $_POST["ID"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$type = $_POST["member_type"];
$date = date('Y-m-d H:i:s');

$sql_insert="INSERT INTO members (ID, first_name, last_name, member_type, signup_data, payment_status) values ('$id','$first_name', '$last_name', '$type', '$date', 'None');";

if($mysqli->query($sql_insert) === TRUE) {
	echo "success";
} else{
	echo "Error: " . $sql_insert . "<br>" . $mysqli->error;
}
header('Location: index.php');
?>
