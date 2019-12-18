<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <Title>Member Signup</Title>
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
      include('include/navbar.php');
    ?>
    <form action="signup.php" method="post">
      <div id="user_details">
        <label for="id">Student/Staff ID</label>
        <br>
        <input type="number" id="id" name="id" required>
        <br>
        <label for="first_name">First Name</label>
        <br>
        <input id="first_name" name="first_name" required>
        <br>
        <label for="last_name">Last Name</label>
        <br>
        <input id="last_name" name="last_name" required>
        <br>
        <label for="email">Utas e-mail address</label>
        <br>
        <input id="email" name="email" type="email" required>
      </div>

      <div id="member_type">
        <fieldset>
          <legend>Member Type</legend>
          <label>
            <input id="staff" name="member_type" value="Staff" type="radio" required>
            <i>Staff</i>
          </label>
          <label>
            <input id="student" name="member_type" value="Student" type="radio" required>
            <i>Student</i>
          </label>
        </fieldset>
      </div>
      
      <div id="permissions">
        <label>
          <input id="photograph_allowed" name="photograph_allowed" type="checkbox">
          Check if you will allow the CTS to take your photo at events and use them on social media
        </label>
        <br>
        <label>
          <input id="email_allowed" name="email_allowed" type="checkbox">
          Check if you will allow the CTS to contact you via email (You can opt out any time)
        </label>
      </div>

      <button>Submit</button>
    </form>
  </body>
</html>
