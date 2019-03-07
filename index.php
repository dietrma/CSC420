<!-- Madeline Dietrich
     CSC420 Database Principles
     Welcome Page -->

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
		<?php echo '<a href = "login.php">Click Here to Log In</a>'; ?>
		<!-- will be changed once I'm actually able to get stuff done -->
	</div>
	
	<!-- Optional navigator footer -->
	<div class = "navig">
		<p>Home || <a href = "abtCRJ.html">About CRJ Club</a> || <a href = "abtAPS.html">About APS</a> || <a href = "announce.html">Announcements</a> || <a href = "contact.html">Contacts</a></p>
	</div>
	
  </body>
</html>