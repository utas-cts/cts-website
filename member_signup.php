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
			<input name="ID" required="true">
			<br>
			<label>First Name</label>
			<br>
			<input name="first_name" required="true">
			<br>
			<label>Last Name</label>
			<br>
			<input name="last_name" required="true">
			<br>
			<label>Utas e-mail address</label>
			<br>
			<input name="email" type="email" required="true">
			<br>
			<label>Member type</label>
			<br>
			<br>
			Staff
			<br>
			<input name="member_type" value="Staff" type="radio" required="true">
			<br>
			Student
			<br>
			<input name="member_type" value="Student" type="radio" required="true">
			<br>
			<label>Check if you will allow the CTS to take your photo at events and use them on social media</label>
			<br>
			<input name="photograph_allowed" type="checkbox">
			<br>
			<label>Check if you will allow the CTS to contact you via email (You can opt out any time)</label>
			<br>
			<input name="email_allowed" type="checkbox">
			<br>
			<button>Submit</button>
		</form>
	</body>

</html>
