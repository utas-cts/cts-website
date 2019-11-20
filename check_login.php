<?php
    session_start();
    if ($_SESSION['authorised'] != true) {
        header('Location: /index.php');
    }
?>
