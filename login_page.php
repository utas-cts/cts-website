<?php session_start();?>
<!doctype html>
<html leng="en">
  <head>
    <meta charset="UTF-8">
    <title>CTS Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,
    user-scalable=yes"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
  </head>
  <body>
  <div id="page-container">
    <?php
      require 'navbar.php';
    ?>
    <div id="content-wrap">
    <form action="login.php" method="post">
      <label>
        Username:
        <br>
        <input name="username" required>
      </label>
      <br>
      <label>
        Password:
        <br>
        <input name="password" type="password" required>
      </label>
      <button>Login</button>
    </form>
    </div>
    <?php
      require 'footer.php';
    ?>
  </div>
  </body>
</html>
