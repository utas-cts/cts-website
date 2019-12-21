<?php
    require 'check_login.php';
?>
<!doctype html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <title>Event Management</title>
    <meta name='viewport' content='width=device-width,initial-scale=1,
    user-scalable=yes'/>
    <link rel='stylesheet' href='/css/style.css'>
  </head>
  <body>
    <?php
        require 'navbar.php';
    ?>
    <h2>Events</h2>
    <?php
        require 'event_table.php';
    ?>
    <div class='row'>
    <div class='column'>
    <h2>Add event</h2>
    <form action='./add_event.php' method='post'>
    <lable>
      Event name
      <br>
      <input name='name' maxlength='128' required>
    </lable>
    <br>
    <lable>
      Event description
      <br>
      <textarea name='description' maxlength='512' required></textarea>
    </lable>
    <br>
    <lable>
      Event location
      <br>
      <input name='location' maxlength='128' required>
    </lable>
    <br>
    <lable>
      Event date
      <br>
      <input type='date' name='date' required>
    </lable>
    <br>
    <lable>
      Event time
      <br>
      <input type='time' name='time' required>
    </lable>
    <br>
    <lable>
      Event Cost
      <br>
      <input type='number' step='0.01' name='cost' required>
    </lable>
    <br>
    <lable>
      Event may change
      <br>
      <input type='checkbox' name='may_change'>
    </lable>
    <br>
    <button>Submit</button>
    </form>
    </div>
    <div class='column'>
    <h2>Delete Event</h2>
    <form action='./delete_event.php' method='post'>
      <label>
        Id
        <input type='number' name='id'>
      </label>
      <br>
      <button>Submit</button>
    </form>
    </div>
    </div>
  </body>
</html>
