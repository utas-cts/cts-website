<?php
include('db_connect.php');

$event_query = 'select name, description, project_link from projects;';
$table = mysqli_query($mysqli, $event_query);

if (mysqli_num_rows($table) > 0) {
	echo '<table><tr>
			<td>Name</td><td>Description</td><td>Link</td>
		  </tr>';
	while ($row = mysqli_fetch_assoc($table)) {
		$link = $row['project_link'];
		if($link == NUll){
			$link = "Not applicable";
		}else{
			$link = '<a href="' . $link . '">' . $link . '</a>';
		}
		echo '<tr><td>' . $row['name'] . '</td><td>' . $row['description'] . '</td><td>' . $link . '</td>';
	}

    echo '</table>';
} else {
    echo '<h3>The CTS currently have no active projects</h3>';
}
?>
