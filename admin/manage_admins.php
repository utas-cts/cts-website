<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Admin Management</title>
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
    <link rel="stylesheet" href="/css/style.css">
  </head>
 <body>
    <?php
     include($_SERVER["DOCUMENT_ROOT"] . '/navbar.php');
	?>
	<h2>Admins</h2>
	<?php
		require($_SERVER["DOCUMENT_ROOT"] . "/db_connect.php");
		$query = $mysqli->prepare('SELECT username from admins where username!="admin"');
		$query->execute();
		$result = $query->get_result();
		if($result->num_rows === 0){
			echo "<p>No admin accounts exist except the default</p>";
		}
		while($row = $result->fetch_assoc()){
			echo "<ol>" . $row["username"] . "</ol>";
		}
	?>
	<div class="row">
	  <div class="column">
	    <h2>Add new admin</h2>
	    <form action="./add_admin.php" method="post">
	      <label>
		    Username
  		    <br>
		    <input type="text" name="username" required>
	      </label>
	      <br>
	      <label>
		    Password
		    <br>
		    <input type="password" name="password" required>
	      </label>
	      <br>
	      <button>Submit</button>
	    </form>
	  </div>
	  <div class="column">
	    <h2>Update Password</h2>
	    <form action="./update_admin.php" method="post">
		  <label>
			Username
			<br>
			<input type="text" name="username" required>
		  </label>
		  <br>
		  <label>
		    New Password
		    <br>
		    <input type="text" name="new_password" required>
		  </label>
		  <br>
		  <button>Submit</button>
		</form>	
	  </div>
	</div>
  </body>
</html>
