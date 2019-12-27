<?php
require 'db_connect.php';
require 'check_login.php';
$query = $mysqli->prepare('UPDATE projects SET archived=true where id=?');
$query->bind_param('i', $_POST['id']);
$query->execute();
header('Location: ./project_management.php');
die();
