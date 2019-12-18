<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>CTS Events</title>
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
      include('include/navbar.php');
    ?>
    <h2>Todays Date: <?php echo date('M dS')?></h2>
    <?php
          include('include/event_table.php');
    ?>
    <p>Please contact us if you wish to suggest an event at the <a href="contact.php">contacts page</a></p>
  </body>
</html>
