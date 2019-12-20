<?php
session_start();
$_SESSION['authorised'] = false;
header('Location: /index.php');
die();
