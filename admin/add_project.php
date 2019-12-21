<?php
require 'db_connect.php';
if ($_POST['may_change'] == 'yes') {
    $may_change = 1;
} else {
    $may_change = 0;
}
    $datetime = $_POST['date'] . ' ' . $_POST['time'];

$query = $mysqli->prepare(
    'INSERT INTO projects (name, description, primary_contact_name,
	primary_contact_email, general_email, project_link, details_link)
   	values (?, ?, ?, ?, ?, ?, ?)'
);

$query->bind_param(
    'sssssss',
    $_POST['name'],
    $_POST['description'],
    $_POST['primary_contact_name'],
    $_POST['primary_contact_email'],
    $_POST['general_email'],
    $_POST['project_link'],
    $_POST['details_link']
);

$query->execute();
header('Location: ./project_management.php');
die();
