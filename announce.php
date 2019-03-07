<!-- Madeline Dietrich
     CSC420 Database Principles
     Announcements -->

<?php
        session_start();
        include('userAuthenticator.php');
        if(!isLoggedIn())
        {
                redirectToLogin();
        }
?>
	 

<!DOCTYPE html>
<html lang = "en">
	<head>
		<!-- Note that users must be logged in to see this page -->
		<title> Announcements Page </title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
	</head>
	<body>
		<!-- Header for the announcements page -->
		<div class = "header">
			<p>ANNOUNCEMENTS</p>
		</div>
		
		<!-- This will show the next meeting date -->
		<div id = "mtg">
			<p>Next Meeting: DD/MM/YY @ HH:MM PM</p>
		</div>
		
		<!-- This shows updates/announcements pertinent to the club and honors members, but not necessarily the public -->
		<div class = "info">
			<p>Information will be in bulleted form</p>
		</div>
		
		<div class = "navig">
			<p><a href = "index.php">Home</a> || <a href = "abtCRJ.html">About CRJ Club</a> || <a href = "abtAPS.html">About APS</a> || Announcements || <a href = "contact.html">Contacts</a></p>
		</div>
		