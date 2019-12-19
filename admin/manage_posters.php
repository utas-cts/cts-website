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
        include 'navbar.php';
    ?>
    <h2>Poster management</h2>
    <div class='row'>
      <div class='column'>
        <h2>Upload poster</h2>
		<form action='./add_poster.php' method='post' enctype='multipart/form-data'>
		<div id='inputs'>
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
			<input name='event_type' required>
		  </label>
	      </div>
          <input type='submit' name='submit' value='Upload'>
        </form>
      </div>
	  <div class='column'>
	    <h2>Poster view</h2>
        <?php
			require 'db_connect.php';
			$query = 'SELECT filename from posters';
			$result = mysqli_query($mysqli, $query);
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<a href='posters/" . $row['filename'] . "'><p>" . $row['filename'] . "</p></a>";
			}
        ?>
      </div>
    </div>
  </body>
</html>
