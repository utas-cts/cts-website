<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <Title>Member Signup</Title>
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
      <div>
		<h2><u>About becoming a CTS Member</u></h2>
		<p>Becoming a member is one of the easiest ways to support us and help fund future CTS events. 
		As a society, we believe that our events should be as free as possible, and every member who
		signs up helps us achieve that goal. Members who sign up will receive certain discounts, such as;
		free food and half price drinks at BBQs.</p>
		</br>
		<h3>Benifits we offer to members!</h3>
		<p><u>BBQs</u></p>
		<p>As previously mentioned, members will receive free food and half price drinks at all of our BBQs. We
		usually run BBQs every two or three weeks, meaning that your membership quickly pays itself off through
		our BBQs alone.</p>
		
		<p><u>Affiliates</u></p>
		<p>One of our current ambitions is to bring more value to being a part of the society as a member, and 
		one particular way we'regoing about this is extending offers to off campus services through affiliations. 
		Currently, Another Computer Store has offered to provide priority service to our members. They have stated;</p>
		
		<p><i>"Your members will receive priority service. If a student needs help getting their 
		computer working, they will go to the top of our queue. The same applies if they need data 
		recovery or if they want a new computer and setup. We understand that students are on a budget 
		and funds are always important because one day they will be earning the big $$."</i></p>
		
	<hr>
	<div>
	<h3>Membership Form</h3>
	<p>* Membership costs are $6 for a semester or $10 for the year</p>
	<p>** To pay, just come up to us at our next event and you'll receive your membership card</p> 
    <form action="signup.php" method="post">
      <div id="user_details">
        <label for="id">Student ID if applicable</label>
        <br>
        <input type="number" id="id" name="id" min="0" max="999999999">
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
          <input id="photograph_allowed" name="photograph_allowed" type="checkbox" value="on">
          Check if you will allow the CTS to take your photo at 
          events and use them on social media
        </label>
        <br>
        <label>
          <input id="email_allowed" name="email_allowed" type="checkbox" value="on">
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
