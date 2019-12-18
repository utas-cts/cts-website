<?php
    require 'check_login.php';
?>
<!doctype html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <title>Member List</title>
    <meta name='viewport' content='width=device-width,initial-scale=1,user-scalable=yes'/>
    <link rel='stylesheet' href='/css/style.css'>
  </head>
  <body>
    <?php
      include 'navbar.php';
    ?>
    <br>
    <table>
      <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Member Type</th>
        <th>Email</th>
        <th>Signup Date</th>
        <th>Payment Date</th>
        <th>Semester 1</th>
        <th>Semester 2</th>
        <th>Photos Allowed</th>
        <th>Email Allowed</th>
      </tr> 
    <?php
      require 'db_connect.php';
      $query = 'SELECT * FROM members';
      $result = mysqli_query($mysqli, $query);
      while ($row = mysqli_fetch_assoc($result)) {
          echo '<tr><td>' . $row['ID'] . '</td><td>' . $row['first_name'] . '</td><td>' . $row['last_name'] .
              '</td><td>' . $row['member_type'] . '</td><td>' . $row['email'] . '</td><td>' . $row['signup_date'] .
              '</td><td>' . $row['payment_date'] . '</td><td>' . $row['semester_1'] .
              '</td><td>' . $row['semester_2'] . '</td>' .
              '</td><td>' . $row['photo_allowed'] . '</td><td>' . $row['email_allowed'] .'</td></tr>';
      }
    ?>
    </table>
    <h2>Update payment</h2>
    <form action='./update_payment.php' method='post'>
        <label>
            Id
            <br>
            <input type='number' name='id' required>
        </label>
        <br>
        <label>
            Payment type
            <br>
            <select name='payment_type' required>
                <option value='First_Semester'>First Semester</option>
                <option value='Second_Semester'>Second Semester</option>
                <option value='Both'>Both</option>
            </select>
        </label>
        <br>
        <button>Submit</button>
        <br>


    </form>
  </body>
</html>
