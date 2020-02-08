<?php
if (!isset($_POST['suggestion'])) {
    header('Location: ./index.php');
    die();
}

require 'db_connect.php';

$query = $mysqli->prepare(
    'INSERT INTO suggestions (suggestion) values (?)'
);
$query->bind_param('s', $_POST['suggestion']);
$query->execute();
header('Location: ./index.php');
die();
