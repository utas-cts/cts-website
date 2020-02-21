<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <title>Poster management</title>
    <meta name='viewport' content ='width=device-width,initial-scale=1,user-scalable=yes' />
    <link rel='stylesheet' href='/css/style.css'>
  </head>
 <body>
    <?php
        require 'check_login.php';
        require 'navbar.php';
    ?>
    <h2>Poster management</h2>
    <div class='left'>
      <h2>Upload poster</h2>
      <form action='./add_poster.php' method='post' enctype='multipart/form-data'>
      <div class='inputs'>
        <label>
          Poster Image Upload
          <br>
          <input type='file' name='poster_image' id='poster_image' required>
        </label>
        <br>
        <label>
          Event date
          <br>
          <input type='date' name='event_date' required>
        </label>
        <br>
        <label>
          Event Type
          <br>
          <input name='event_type' maxLength='64' required>
        </label>
        <br>
        <label>
          Short Name
          <br>
          <input name='short_name' maxLength='64' required>
        </label>
        <br>
        <label>
          Event ID
          <br>
          <input name='event_id' type='number'>
        </label>
      </div>
      <br>
      <input type='submit' name='submit' value='Upload'>
      </form>
      <br>
      <h2>Link poster to event</h2>
      <form action='./link_poster_event.php' method='post'>
      <div class='inputs'>
      <label>
        Poster ID
        <br>
        <input type='number' name='poster_id' required>
      </label>
      <br>
      <label>
        Event ID
        <br>
        <input type='number' name='event_id' required>
      </label>
      </div>
      <br>
      <input type='submit' name='submit' value='Submit'>
      </form>
      <br>
      <h2>Delete poster from event</h2>
      <form action='./delete_poster_event.php' method='post'>
      <div class='inputs'>
      <label>
        Event ID
        <br>
        <input type='number' name='event_id' required>
      </label>
      </div>
      <br>
      <input type='submit' name='submit' value='Submit'>
      </form>
    </div>
    <div class='right'>
      <h2>Poster view</h2>
      <?php
          require 'db_connect.php';
          $query = 'SELECT ID, filename, event_date, short_name from posters';
          $result = mysqli_query($mysqli, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a href='/posters/" . $row['filename'] . "'><p>ID: " . $row['ID'] . " - " .
              $row['event_date'] . ' - ' .  $row['short_name'] . "</p></a>";
        }
        ?>
    </div>
    <div class='center'>
    <?php
          include('event_table.php');
          print_events(60);
    ?>
    </div>
  </body>
</html>
