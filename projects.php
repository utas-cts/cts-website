<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>CTS Projects</title>
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
  </head>
  <body>
  <div id="page-container">
    <?php
        require 'navbar.php';
    ?>
    <div id="content-wrap">
    <h2>Current CTS Projects</h2>
    <?php
        require 'project_table.php';
    ?>
    <p>
    If you would like to suggest a project or have a project you would
    like people to contribute to send us a message from the
    <a href="contact.php">Contacts page</a>
    </p>
    </div>
    <?php
        require 'footer.php';
    ?>
  </div>
  </body>
</html>
