<?php
	require("check_login.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Event Management</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes"/>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
		include('navbar.php');
	?>
	<h2>Events</h2>
	<?php
		include('event_table.php');
	?>
	<h2>Event management</h2>
	<form action=''>
	<lable>
	  Id
	  <br>
      <input name="id">
	</lable>
	<br>
	<lable>
	  Event name
	  <br>
	  <input name="name">
	</lable>
	<br>
	<lable>
	  Event description
	  <br>
	  <input name="description">
	</lable>
	<br>
	<lable>
	  Event date
	  <br>
	  <input type="date" name="date">
	</lable>
	<br>
	<lable>
	  Event time
	  <br>
	  <input type="time" name="time">
	</lable>
	</form>
  </body>
</html>
