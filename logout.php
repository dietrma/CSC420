<?php
        session_start();
        include('userAuthenticator.php');
        logout();
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Logged Out</title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
	</head>
	
	<body>
		<p>You are now logged out.</p>
		
		<?php
			header('location: index.php');
		?>
	</body>
</html>