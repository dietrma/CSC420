<?php
        session_start();
        /* include('userAuthenticator.php');
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
        } */
		
	$errmsg_arr = array();
	$errflag = false;
	
/*
	$servername = "localhost";
	$username = "root";
	$password = " ";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
*/
	
	$uname = $_POST['uname'];
	$pswd = $_POST['pswd'];
	$host="localhost";
	$user="root";
	$pass=" ";
	
	echo "$uname";

	$num = 4;
	
	echo "etrtrefh";
	try
	{
		$pdo = new PDO("mysql:host=localhost;dbname=crjclub", "root", "");
		
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	
	catch(PDOException $e)
	{
		die("ERROR: Could not connect. " . $e->getMessage());
	}
	
	if($uname == null)
	{
		$errmsg_arr[] = 'You must enter your username.';
		$errflag = true;
		
	}
	
	if($pswd == null)
	{
		$errmsg_arr[] = 'You must enter your password.';
		$errflag = true;
	}
	
	if(isset($_POST['uname']) && isset($_POST['pswd'])){
		$sql = "SELECT email FROM users WHERE userName=:uname AND password=:pswd";
	$result = $pdo->prepare($sql);
	
	$result->bindParam(':uname', $uname);
	$result->bindParam(':pswd', $pswd);
	$result->execute();
	$rows = $result->fetch(PDO::FETCH_ASSOC);
	}
	
	if($rows > 0)
	{
		header("location: announce.php");
	}
	
	else
	{
		$errmsg_arr[] = "Incorrect or nonexistent username and/or password.";
		$errflag = true;
	}
	
	if($errflag)
	{
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
?>