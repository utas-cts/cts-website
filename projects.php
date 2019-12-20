<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>CTS Projects</title>
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
      include('navbar.php');
    ?>
    <h2></h2>
    <?php
          include('project_table.php');
    ?>
  </body>
</html>
