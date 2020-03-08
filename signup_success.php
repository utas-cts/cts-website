<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>CTS Home</title>
    <meta name="viewport" content ="width=device-width,initial-scale=1,
    user-scalable=yes" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
  </head>
 <body>
   <div id="page-container">
     <?php
        require 'navbar.php';
       ?>
    <div id="content-wrap">
      <h3>Congratulations! You have successfully signed up to the CTS!</h3>
      <p>Click <a href="index.php">here</a> to go back to the home page.</p>
    </div>
    <?php
        require 'footer.php';
    ?>
    </div>
  </body>
</html>
