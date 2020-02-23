<?php
function print_events($days)
{
    require 'db_connect.php';
    
    //Format dates so that mysql understands them
    $date = date('Y-m-d H:i:s', strtotime('today midnight'));
    $cutoff = date('Y-m-d H:i:s', strtotime('+' . $days . 'day'));
    if ($_SESSION['authorised'] && $days == 0) {
        $event_query = 'SELECT events.id, name, filename, event_datetime,
        description, location, may_change, cost from
        ((events left join event_posters on events.ID=event_id)
        left join posters on posters.ID=event_posters.poster_id) ORDER BY event_datetime';
    } elseif ($_SESSION['authorised']) {
        $event_query = "SELECT events.id, name, filename, event_datetime,
            description, location, may_change, cost from
            ((events left join event_posters on events.ID=event_id)
            left join posters on posters.ID=event_posters.poster_id)
            WHERE event_datetime > '$date' and event_datetime <
            '$cutoff' ORDER BY event_datetime";
    } else {
        $event_query = "SELECT name, filename, event_datetime, description, location, may_change, cost
        from ((events left join event_posters on events.ID=event_id)
        left join posters on posters.ID=event_posters.poster_id)
        WHERE event_datetime > '$date' and event_datetime <
        '$cutoff' ORDER BY event_datetime";
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
            echo '<td data-label="Event:">';
            if (isset($row['filename'])) {
                echo "<a href='/posters/" . $row['filename'] . "'>" . htmlspecialchars($row['name']) . '</a>';
            } else {
                echo htmlspecialchars($row['name']);
            }
            echo '</td><td data-label="Date:">' .
            date_format(date_create($row['event_datetime']), 'D M dS ga') .
            '</td><td data-label="Description:">' .
            htmlspecialchars($row['description']) . '</td><td data-label="Location:">' .
            htmlspecialchars($row['location']) . '</td><td data-label="May Change:">' . $may_change
                . '</td><td data-label="Cost:">$' . $row['cost'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        return true;
    } else {
        return false;
    }
}
