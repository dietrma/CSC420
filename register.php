<?php
	$fname=$_POST['fName'];
	$lname=$_POST['lName'];
	$email=$_POST['email'];
	$uname=$_POST['username'];
	$password=$_POST['password'];
	
	$host="localhost";
	$user="root";
	$pass=" ";
	
	try
	{
		$pdo = new PDO("mysql:host=localhost;dbname=crjclub", "root", "");
		
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	
	catch(PDOException $e)
	{
		die("ERROR: Could not connect. " . $e->getMessage());
	}
	
	try
	{
		$sql = "INSERT INTO users (firstName, lastName, email, userName, password) VALUES ('$fname', '$lname', '$email', '$uname', '$password')";
		
		$pdo->exec($sql);
		
		echo "Registration Complete";
		echo '<p><a href = "index.php">Return to Welcome Page</a></p>';
	}
	
	catch(PDOException $e)
	{
		die("ERROR: Could not execute $sql. " . $e->getMessage());
	}
	
	
?>

