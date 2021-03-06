<?php
require 'db_connect.php';

if ($_SESSION['authorised'] == true) {
    $event_query = 'select ID, name, description, project_link, archived from projects;';
} else {
    $event_query = 'select name, description, project_link, archived from projects where archived=false;';
}
$table = mysqli_query($mysqli, $event_query);

if (mysqli_num_rows($table) > 0) {
    echo '<table><tr>';
    if ($_SESSION['authorised'] == true) {
        echo '<th>Id</th><th>Archived</th>';
    }
        echo '<th>Name</th><th>Description</th><th>Link</th>
		  </tr>';
    while ($row = mysqli_fetch_assoc($table)) {
            $link = $row['project_link'];
        if ($link == null) {
            $link = "Not applicable";
        } else {
            $link = '<a href="' . $link . '">' . $link . '</a>';
        }
        if ($_SESSION['authorised'] == true) {
            echo '<tr><td data-label="ID:">' . $row['ID'] .
                '</td><td data-label="Archived:">' . $row['archived'] . '</td><td>';
        } else {
            echo '<tr><td data-label="Name:">';
        }
        echo $row['name'] . '</td><td data-label="Description:">' .
            $row['description'] . '</td><td data-label="Link:">' . $link . '</td>';
    }
    echo '</table>';
} else {
    echo '<h3>The CTS currently have no active projects</h3>';
}
