<?php
	require("check_login.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Member List</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes"/>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
      include('navbar.php');
	?>
	<br>
	<table>
	  <tr>
	    <th>Id</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Member Type</th>
		<th>Email</th>
		<th>Signup Date</th>
		<th>Payment Date</th>
		<th>Payment Status</th>
		<th>Photos Allowed</th>
		<th>Email Allowed</th>
	  </tr>	
    <?php
      require('db_connect.php');
      $query="SELECT * FROM members";
	  $result=mysqli_query($mysqli, $query);
	  while($row = mysqli_fetch_assoc($result)){
		  echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] .
			  "</td><td>" . $row["member_type"] . "</td><td>" . $row["email"] . "</td><td>" . $row["signup_date"] .
			  "</td><td>" . $row["payment_date"] . "</td><td>" . $row["payment_status"] .
			  "</td><td>" . $row["photo_allowed"] . "</td><td>" . $row["email_allowed"] ."</td></tr>";
	  }
	?>
	</table>
  </body>
</html>
