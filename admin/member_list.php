<?php
require 'check_login.php';
?>
<!doctype html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <title>Member List</title>
    <meta name='viewport' content='width=device-width,initial-scale=1,
      user-scalable=yes'/>
    <link rel='stylesheet' href='/css/style.css'>
    <link rel='stylesheet' href='/css/mobile.css'>
    <script>
function filterTable() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("memberFilter");
  filter = input.value.toUpperCase();
  table = document.getElementById("memberTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
  </head>
  <body>

  <div class="page-container">
    <?php
      require 'navbar.php';
    ?>
    <div class="content-wrap">
    <br>
    <input type="text" id="memberFilter" onkeyup="filterTable()" placeholder="Search for names..">
    <table id="memberTable">
      <tr>
        <th>Student Id</th>
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
      $query = '
      SELECT members.*, memberships.ID, memberships.* FROM members inner
      join memberships on members.ID=memberships.member ORDER BY memberships.signup_date DESC';
      $result = mysqli_query($mysqli, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['student_id'] . '</td><td>' .$row['ID']. '</td><td>' . htmlspecialchars(
            $row['first_name']
        ) . '</td><td>' .
        htmlspecialchars($row['last_name']) . '</td><td>' . $row['member_type'] .
        '</td><td>' . htmlspecialchars($row['email']) . '</td><td>' .
        $row['signup_date'] . '</td><td>' . $row['payment_date'] . '</td><td>' .
        $row['semester_1'] . '</td><td>' . $row['semester_2'] . '</td>' .
        '</td><td>' . $row['photo_allowed'] . '</td><td>' . $row['email_allowed'] .
        '</td></tr>';
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
    </div>
    <?php
      require 'footer.php';
    ?>
    </div>
  </body>
</html>
