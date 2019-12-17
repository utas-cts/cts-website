<?php
include('db_connect.php');

if($_SESSION['authorised'] == true){
	$event_query = 'select ID, name, description, project_link, archived from projects;';
}else{
	$event_query = 'select name, description, project_link, archived from projects;';
}
$table = mysqli_query($mysqli, $event_query);

if (mysqli_num_rows($table) > 0) {
	echo '<table><tr>';
	if($_SESSION['authorised'] == true){
		echo '<th>Id</th><th>Archived</th>';
	}
		echo '<th>Name</th><th>Description</th><th>Link</th>
		  </tr>';
	while ($row = mysqli_fetch_assoc($table)) {
		if($row['archived'] == false || $_SESSION['authorised'] == true){
			$link = $row['project_link'];
			if($link == NUll){
				$link = "Not applicable";
			}else{
				$link = '<a href="' . $link . '">' . $link . '</a>';
			}
			if($_SESSION['authorised'] == true){
				echo '<tr><td>' . $row['ID'] . '</td><td>' . $row['archived'] . '</td><td>';
			}else{
				echo '<tr><td>';
			}
			echo $row['name'] . '</td><td>' . $row['description'] . '</td><td>' . $link . '</td>';
		}
	}

    echo '</table>';
} else {
    echo '<h3>The CTS currently have no active projects</h3>';
}
?>
