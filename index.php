<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>CTS Home</title>
    <meta name="viewport" content ="width=device-width,initial-scale=1,
    user-scalable=yes" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
  </head>
 <body>
   <div class="page-container">
     <?php
        require 'navbar.php';
        ?>
    <div class="content-wrap">
    <div class="introduction">
    <h2>UTAS Computing & Technology Society (CTS)</h2>
    <p>
    The CTS is a TUU affiliated society providing value
    to Launceston attending students of UTAS. Established in 2016 and now in our fifth year,
    our society has won awards including best society three years in a row and remain
    committed to continuing to offer events for students of any background. Get in contact
    with us or <a href='member_signup.php'>signup</a> today to learn more.
    </p>
    </div>
    <div class="events">
    <h2>Events</h2>
    <h3>What we offer</h3>
    <p>
    The CTS try to run at least one event per week, we frequently run barbecues where members eat
    free, we have games days, bowling nights, and D&D days to name a few. While we are the Computing 
    and Technology society, only some of our events relate to technology, most are simply
    opportunities to socialise with other students/staff. We run events both on and off the UTAS Newnham
    campus, as well as discord game nights, so that students have a greater chance of being able to
    attend. If you have any ideas for events that you would like to attend please post a suggestion at
    the <a href='contact.php'>contacts page.</a>
    </p>
    <h3>Today's Event/s</h3>
        <?php
        require 'event_table.php';
        if (!print_events(1)) {
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
