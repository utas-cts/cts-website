<?php
    require $_SERVER['DOCUMENT_ROOT'] . '/db_connect.php';
    $query = $mysqli->prepare('UPDATE projects SET archived=true where id=?');
    $query->bind_param('i', $_POST['id']);
    $query->execute();
    header('Location: ./project_management.php');
    exit;
