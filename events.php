<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>CTS Events</title>
    <meta name="viewport" content ="width=device-width,initial-scale=1,
    user-scalable=yes" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
  </head>
  <body>
  <div id="page-container">
    <?php
      require 'navbar.php';
    ?>
    <div id="content-wrap">
    <h2>Todays Date: <?php echo date('M dS')?></h2>
    <div style="overflow-x:auto;">
    <?php
        require 'event_table.php';
    if (!print_events(14)) {
        echo 'There are no events in the next two weeks. If you would like to
            suggest an event you can do so at the <a href="contact.php">contacts page</a></div>';
    } else {
        echo '</div>
                <p>Please contact us if you wish to suggest an event at the 
                <a href="contact.php">contacts page</a>
                </p>';
    }
    ?>
        </div>
    <?php
      require 'footer.php';
    ?>
    </div>
  </body>
</html>
