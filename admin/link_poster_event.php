<?php
require 'check_login.php';
require 'db_connect.php';
$query = $mysqli->prepare(
    'INSERT INTO event_posters (poster_id, event_id) values (?, ?)'
);
$query->bind_param('ii', $_POST['poster_id'], $_POST['event_id']);
$query->execute();
header('Location: ./manage_posters.php');
die();
