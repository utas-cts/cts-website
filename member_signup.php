<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <Title>Member Signup</Title>
    <meta name="viewport" content ="width=device-width,initial-scale=1,
    user-scalable=yes" />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <div id="page-container">
    <?php
      require 'navbar.php';
    ?>
    <div id="content-wrap">
    <form action="signup.php" method="post">
      <div id="user_details">
        <label for="id">Student ID if applicable</label>
        <br>
        <input type="number" id="id" name="id" max="999999999">
        <br>
        <label for="first_name">First Name</label>
        <br>
        <input type="text" id="first_name" name="first_name" maxLength="32" required>
        <br>
        <label for="last_name">Last Name</label>
        <br>
        <input type="text" id="last_name" name="last_name" maxLength="32" required>
        <br>
        <label for="email">E-mail address (UTAS email if student)</label>
        <br>
        <input id="email" name="email" type="email" maxLength="255" required>
      </div>

      <div id="member_type">
        <fieldset>
          <legend>Member Type</legend>
          <label>
            <input id="student" name="member_type" value="Student"
            type="radio" required>
            <i>Student</i>
          </label>
          <label>
            <input id="other" name="member_type" value="Other" type="radio" required>
            <i>Other</i>
          </label>

        </fieldset>
      </div>
      
      <div id="permissions">
        <label>
          <input id="photograph_allowed" name="photograph_allowed" type="checkbox">
          Check if you will allow the CTS to take your photo at 
          events and use them on social media
        </label>
        <br>
        <label>
          <input id="email_allowed" name="email_allowed" type="checkbox">
          Check if you will allow the CTS to contact you via email 
          (You can opt out any time)
        </label>
      </div>

      <input type="submit" name="submit" id="submit" value="Submit">
    </form>
    </div>
    <?php
        require 'footer.php';
    ?>
  </div>
  </body>
</html>
