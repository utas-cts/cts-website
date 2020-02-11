<?php
require 'db_connect.php';
require 'check_login.php';

$query = $mysqli->prepare('SELECT semester_1, semester_2 from memberships WHERE ID=?');
$query->bind_param('i', $_POST['id']);
$query->execute();
$result = $query->get_result();
$row = $result->fetch_assoc();
$date = date('Y-m-d H:i:s');
$query = $mysqli->prepare(
    'UPDATE memberships SET payment_date=?, semester_1=?,
	semester_2=? WHERE ID=?'
);
switch ($_POST['payment_type']) {
    case 'First_Semester':
        $semester_1 = 1;
        $semester_2 = $row['semester_2'];
        break;
    case 'Second_Semester':
        $semester_1 = $row['semester_1'];
        $semester_2 = 1;
        break;
    default:
        $semester_1 = 1;
        $semester_2 = 1;
}
$query->bind_param('siii', $date, $semester_1, $semester_2, $_POST['id']);
$query->execute();
header('Location: ./member_list.php');
die();
