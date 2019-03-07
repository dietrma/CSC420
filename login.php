<?php
        session_start();
        include('userAuthenticator.php');
        if (isset($_POST['Submit']))
        {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $auth = authenticate($username, $password);

                if($auth == true)
                {
                        logUserIn($username);
                        header('location: index.php');
                }
                else
                {
                        redirectToLogin();
                }
        }


?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Login Page</title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
	</head>
	<body>
		<p>Log In Here</p>
		<form name = "login" id = "login" method "post">
			<fieldset>
				<label for = 'username' >Username:</label>
				<input type = 'text' name = 'username' id = 'username' maxLength = '50' />
				
				<label for = 'password' >Password:</label>
				<input type = 'password' name = 'password' id = 'password' maxLength = '50' />
				
				<input type = 'submit' name = 'Submit' />
			</fieldset>
		</form>
	</body>
</html>
