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
      include('navbar.php');
    ?>
    <h2>Todays Date: <?php echo date("M dS")?></h2>
    <br>
    <table>
      <tr>
        <th>Event</th>
        <th>Date</th>
        <th>Description</th>
        <th>Location</th>
        <th>May change</th>
        <th>Cost</th>
      </tr>
    <?php
      include('event_table.php');
    ?>
    </table>
  </body>
</html>
