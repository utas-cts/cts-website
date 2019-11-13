<!DOCTYPE html>
<html>

	<head>
		<Title>Member Signup</Title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<?php
			include('navbar.php');
		?>
		<form action="signup.php" method="post">
			<label>Student/Staff ID</label>
			<br>
			<input name="ID">
			<br>
			<label>First Name</label>
			<br>
			<input name="first_name">
			<br>
			<label>Last Name</label>
			<br>
			<input name="last_name">
			<br>
			<label>Member type</label>
			<br>
			<br>
			Staff
			<br>
			<input name="member_type" value="Staff" type="radio">
			<br>
			Student
			<br>
			<input name="member_type" value="Student" type="radio">
			<br>
			<button>Submit</button>
		</form>
	</body>

</html>
