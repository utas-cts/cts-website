<!DOCTYPE html>
<html>

	<head>
		<Title>Member Signup</Title>
		<meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
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
			<br>
			Member type
			<br>
			<br>
			<label for="staff">Staff</label>
			<br>
			<input id="staff" name="member_type" value="Staff" type="radio" required="true">
			<br>
			<label for="student">Student</label>
			<br>
			<input id="student" name="member_type" value="Student" type="radio" required="true">
			<br>
			<label for="photograph_allowed">Check if you will allow the CTS to take your photo at events and use them on social media</label>
			<br>
			<input id="photograph_allowed" name="photograph_allowed" type="checkbox">
			<br>
			<label for="email_allowed">Check if you will allow the CTS to contact you via email (You can opt out any time)</label>
			<br>
			<input id="email_allowed" name="email_allowed" type="checkbox">
			<br>
			<button>Submit</button>
		</form>
	</body>

</html>
