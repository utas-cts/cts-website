<?php
echo "
<ul class='navbar'>
  <li class='navbar-image'><a href='/index.php'><img src='/logo.svg'></a></li>
  <li class='navbar'><a href='/events.php'>Events</a></li>
  <li class='navbar'><a href='/projects.php'>Projects</a></li>
  <li class='navbar'><a href='/contact.php'>Contacts</a></li>
  <li class='navbar'><a href='/member_signup.php'>Signup</a></li>";
if ($_SESSION['authorised']) {
    echo "
        <li class='navbar'><a href='/admin/'>Admin</a></li>
        <li class='navbar'><a href='/logout.php'>Logout</a></li>
        </ul>";
} else {
    echo "
        <li class='navbar'><a href='/login_page.php'>Admin Login</a></li>
        </ul>";
}
