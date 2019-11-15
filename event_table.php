<?php
include("db_connect.php");

$event_query="SELECT name, event_datetime, description, location, may_change, cost from events;";
$table= mysqli_query($mysqli, $event_query);

if (mysqli_num_rows($table) > 0) {
	while($row = mysqli_fetch_assoc($table)) {
		if(time()<strtotime($row["event_datetime"]) &&
			strtotime($row["event_datetime"]) < strtotime("+2 week")){
			if($row["may_change"] == 1){
				$may_change = "Yes";
			}else{
				$may_change = "No";
			}

			echo "<tr>";
				echo "<td>" . $row["name"]. "</td><td>" . $row["event_datetime"]. "</td><td>" .
				$row["description"] . "</td><td>" . $row["location"] . "</td><td>" . $may_change 
				. "</td><td>$" . $row["cost"] . "</td>";
			echo "</tr>";
		}
	}
}
?>
