<?php
require 'db_connect.php';
require 'check_login.php';
$query = $mysqli->prepare('DELETE FROM events where id=?');
$query->bind_param('i', $_POST['id']);
$query->execute();
header('Location: ./event_management.php');
die();
