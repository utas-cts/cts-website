<?php
    require 'check_login.php';
?>
<!doctype html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <title>Project Management</title>
    <meta name='viewport' content='width=device-width,initial-scale=1,user-scalable=yes'/>
    <link rel='stylesheet' href='/css/style.css'>
    <link rel='stylesheet' href='/css/mobile.css'>
  </head>
  <body>
    <?php
        require 'navbar.php';
    ?>
    <h2>Projects</h2>
    <?php
        require 'project_table.php';
    ?>
    <div class='left'>
    <h2>Add project</h2>
    <h3>* required field</h3>
    <form action='./add_project.php' method='post'>
    <lable>
      Project name*
      <br>
      <input name='name' maxLength='128' required>
    </lable>
    <br>
    <lable>
      Project description*
      <br>
      <textarea name='description' maxLength='512' required></textarea>
    </lable>
    <br>
    <lable>
      Project primary contact name*
      <br>
      <input name='primary_contact_name' maxLength='128' required>
    </lable>
    <br>
    <lable>
      Project primary contact email*
      <br>
      <input type='email' name='primary_contact_email' maxLength='255' required>
    </lable>
    <br>
    <lable>
      Project general email*
      <br>
      <input type='email' name='general_email' maxLength='255' required>
    </lable>
    <br>
    <lable>
      Project link
      <br>
      <input name='project_link' maxLength='255'>
    </lable>
    <br>
    <lable>
      Project details link
      <br>
      <input name='details_link' maxLength='255'>
    </lable>
    <br>
    <button>Submit</button>
    </form>
    </div>
    <div class='right'>
    <h2>Archive Project</h2>
    <form action='./archive_project.php' method='post'>
    <lable>
      Id
      <br>
      <input name='id'>
    </lable>
    <br>
    <button>Submit</button>
    </form>
    </div>
  </body>
</html>
