<?php
require 'check_login.php';
?>
<!doctype html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <title>Suggestions</title>
    <meta name='viewport' content='width=device-width,initial-scale=1,
      user-scalable=yes'/>
    <link rel='stylesheet' href='/css/style.css'>
    <link rel='stylesheet' href='/css/mobile.css'>  
  </head>
  <body>
  <div class="page-container">
    <?php
      require 'navbar.php';
    ?>
    <div class='content-wrap'>
    <br>
    <table>
      <tr>
        <th>Suggestion</th>
      </tr> 
    <?php
    //print suggestions formatted as table rows
    require 'db_connect.php';
    $query = 'select * from suggestions';
    $result = mysqli_query($mysqli, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['suggestion'] . '</td></tr>';   
    }
    ?>
    </table>
    </div>
    <?php
      require 'footer.php';
    ?>
    </div>
  </body>
</html>
