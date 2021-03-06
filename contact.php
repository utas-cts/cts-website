<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>CTS Contacts</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,
    user-scalable=yes"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
  </head>
  <body>
    <div class="page-container">
    <?php
       require 'navbar.php';
    ?>
    <div class="content-wrap">
    <div class="left">
      <h2>Suggestions</h2>
      <form action='./add_suggestion.php' method='post'>
      <label for="suggestion">Suggestion (max 1000 characters)</label>
      <br>
      <textarea id="suggestion" name="suggestion" maxLength="1000" required></textarea>
      <br>
      <button>Submit</button>
      </form>
    </div>
    <div class="right">
    <h2>General Inquiries</h2>
    <p>
    For general inquiries you can email us at cts.utas@gmail.com or fill in the form below.
    We endeavour to answer all correspondence promptly, however in some instances it may take
    a day or two for a reply
    </p>
    <form>
    </form>
    </div>
    </div>
    <?php
      require 'footer.php';
    ?>
    </div>
  </body>
</html>
