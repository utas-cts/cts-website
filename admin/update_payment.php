<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	require($_SERVER["DOCUMENT_ROOT"]."/db_connect.php");
	require($_SERVER["DOCUMENT_ROOT"]."/check_login.php");
	
	$query = $mysqli->prepare("SELECT semester_1, semester_2 from members WHERE id=?");
	$query->bind_param("i",$_POST["id"]);
	$query->execute();
	$result = $query->get_result();
	$row = $result->fetch_assoc();
	$date = date('Y-m-d H:i:s');
	$query = $mysqli->prepare("UPDATE members SET payment_date=?, semester_1=?, semester_2=? WHERE id=?");
	switch($_POST["payment_type"]){
		case "First_Semester":
			$semester_1 = 1;
			$semester_2 = $row["semester_2"];
			break;
		case "Second_Semester":
			$semester_1 = $row["semester_1"];
			$semester_2 = 1;
			break;
		default:
			$semester_1 = 1;
			$semester_2 = 1;
	}
	$query->bind_param("siii",$date,$semester_1,$semester_2,$_POST["id"]);
	$query->execute();
	header("Location: ./member_list.php");
	exit();
?>
