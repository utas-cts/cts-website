<?php
    require $_SERVER['DOCUMENT_ROOT'].'/include/check_login.php';
    require $_SERVER['DOCUMENT_ROOT'].'/include/db_connect.php';
    $query = $mysqli->prepare('INSERT INTO admins (username, hashed_password) values (?, ?)');
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query->bind_param('ss', $_POST['username'], $hash);
    $query->execute();
    header('Location: ./manage_admins.php');
    exit;
