<?php
require 'check_login.php';
require 'db_connect.php';

$query = $mysqli->prepare(
    "UPDATE admins SET hashed_password = ? WHERE username=?
 	and username!='admin'"
);
$hash = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
$query->bind_param('ss', $hash, $_POST['username']);
$query->execute();
header('Location: ./manage_admins.php');
die();
