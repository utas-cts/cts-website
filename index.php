<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>CTS Home</title>
    <meta name="viewport" content ="width=device-width,initial-scale=1,
    user-scalable=yes" />
    <link rel="stylesheet" href="css/style.css">
  </head>
 <body>
   <div id="page-container">
     <?php
        require 'navbar.php';
        ?>
    <div id="content-wrap">
    <div id="introduction">
    <h2>UTAS Computing & Technology Society (CTS)</h2>
    <p>
    The CTS is a TUU affiliated society providing value
    to Launceston attending students of UTAS. Now in our fifth year, our society has won
    awards including best society three years in a row and remain committed to continuing
    to offer events for students of any background. Get in contact with us or
    <a href='member_signup.php'>signup</a> today
    to learn more.
    </p>
    </div>
    <div id="events">
    <?php
        require 'event_table.php';
        if(!print_events(1)){
            echo 'There are no events today. Visit the <a href="events.php">events page</a>
                to see all scheduled events for the next two weeks';
        }
    ?>
    </div>
    </div>
    <?php
        require 'footer.php';
    ?>
    </div>
  </body>
</html>
