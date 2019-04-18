<!-- Madeline Dietrich
     CSC420 Database Principles
     Welcome Page -->
	 
<?php

include ("dummy.php");

$login = new Login();
	session_start();
	
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) > 0 )
	{
		echo '<ul style = "padding:0; color:red;">';
		
		foreach($_SESSION['ERRMSG_ARR'] as $msg)
		{
			echo '<li>',$msg,'</li>';
		}
		
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>

<!DOCTYPE html>
<html lang = "en">
  <head>
    <title>Welcome Page</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
  </head>
  <body>
    <!-- This is the header that will appear at the top of the screen, centered over everything -->
    <div class = "header">
      <p>Quincy University Criminal Justice Club</p>
    </div>
	
	<!-- Announcements? -->
	<div id = "ann">
		<p>CLICK HERE TO VIEW ANNOUNCEMENTS</p>
	</div>
	
	<!-- Placeholder for calendar -->
	<div id = "calendar">
		<p>I am a calendar, I will show you stuff.</p>
	</div>
	
	<!-- This is the login box, located on the left of the page -->
	<div class = "login">
		<form action = "login.php" method = "POST">
			Enter Username Here:<br />
			<input type = "text" name = "uname" /><br />
			
			Enter Password Here:<br />
			<input type = "password" name = "pswd" /><br />
			<input type = "submit" value = "login" />
		</form>
		<?php
			$login->login();
			?>
	</div>
	<div id = "register">
		<a href = "register.html">Register Here!</a>
	</div>
	
	<!-- Optional navigator footer -->
	<div class = "navig">
		<p>Home || <a href = "abtCRJ.html">About CRJ Club</a> || <a href = "abtAPS.html">About APS</a> || <a href = "announce.html">Announcements</a> || <a href = "contact.html">Contacts</a></p>
	</div>
	
  </body>
</html>