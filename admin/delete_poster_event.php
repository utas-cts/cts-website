<?php
require 'check_login.php';
require 'db_connect.php';
$query = $mysqli->prepare(
    'delete from event_posters where event_id=?'
);
$query->bind_param('i', $_POST['event_id']);
$query->execute();
header('Location: ./manage_posters.php');
die();
