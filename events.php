<!DOCTYPE html>
<html>
	<head>
		<title>CTS Events</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<?php
			include('navbar.php');
		?>
		<br>
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
