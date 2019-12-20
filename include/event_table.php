<?php
require 'db_connect.php';
$date = date('Y-m-d H:i:s');
$fortnight = date('Y-m-d H:i:s', strtotime('+2 week'));
if ($_SESSION['authorised'] == true) {
    $event_query = 'SELECT id, name, event_datetime, description, location,
	   	may_change, cost from events';
} else {
    $event_query = "SELECT name, event_datetime, description, location, may_change,
	cost from events where event_datetime > '$date' and event_datetime < 
	'$fortnight'";
}
$table = mysqli_query($mysqli, $event_query);

if (mysqli_num_rows($table) > 0) {
    echo '<table>
            <tr>';
    if ($_SESSION['authorised'] == true) {
        echo '<th>Id</th>';
    }
    echo '<th>Event</th>
        <th>Date</th>
        <th>Description</th>
        <th>Location</th>
        <th>May change</th>
        <th>Cost</th>
        </tr>';
    while ($row = mysqli_fetch_assoc($table)) {
        if ($row['may_change'] == 1) {
            $may_change = 'Yes';
        } else {
            $may_change = 'No';
        }

        echo '<tr>';
        if ($_SESSION['authorised'] == true) {
            echo '<td data-label="ID:">' . $row['id'] . '</td>';
        }
        echo '<td data-label="Event:">' . htmlspecialchars($row['name']) . '</td><td data-label="Date">' .
        date_format(date_create($row['event_datetime']), 'D M dS ga') .
        '</td><td data-label="Description:">' .
        htmlspecialchars($row['description']) . '</td><td data-label="Location:">' .
        htmlspecialchars($row['location']) . '</td><td data-label="May Change">' . $may_change
            . '</td><td data-label="Cost:">$' . $row['cost'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo '<h3>There are no events scheduled in the next two weeks.</h3>';
}
