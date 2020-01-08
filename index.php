<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>CTS Home</title>
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
     </div>
     <?php
        require 'footer.php';
        ?>
    </div>
  </body>
</html>
