<?php
require 'check_login.php';
require 'db_connect.php';
$query = $mysqli->prepare(
    'INSERT INTO admins (username, hashed_password) values (?, ?)'
);
$hash = password_hash($_POST['password'], PASSWORD_ARGON2I);
$query->bind_param('ss', $_POST['username'], $hash);
$query->execute();
header('Location: ./manage_admins.php');
die();
