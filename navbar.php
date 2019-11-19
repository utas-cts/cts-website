<?php
echo '
<ul>
  <li><a href="/index.php">Home</a></li>
  <li><a href="/events.php">Events</a></li>
  <li><a href="/contact.php">Contacts</a></li>
  <li><a href="/member_signup.php">Signup</a></li>';
if($_SESSION["authorised"]){
	echo '
		<li><a href="/admin/">Admin</a></li>
		<li><a href="/logout.php">Logout</a></li>
		</ul>';
}else{
	echo '
		<li><a href="/login_page.php">Admin Login</a></li>
		</ul>';
}

