<?php
    require 'check_login.php';
?>
<!doctype html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <title>Admin</title>
    <meta name='viewport' content='width=device-width,initial-scale=1,
    user-scalable=yes'/>
    <link rel='stylesheet' href='/css/style.css'>
  </head>
  <body>
    <?php
      require 'navbar.php';
    ?>
    <h2>Admin Control Panel</h2>
    <a href='./member_list.php'><p>Member list</p></a>
    <a href='./event_management.php'><p>Event Management</p></a>
    <a href='./project_management.php'><p>Project Management</p></a>
    <a href='./manage_admins.php'><p>Manage Admins</p></a>
    <a href='./manage_posters.php'><p>Manage Posters</p></a>
  </body>
</html>
