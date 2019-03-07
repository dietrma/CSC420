<?php
	$name=$_POST['name'];
	$email=$POST['email'];
	$password=$_POST['password'];
	
	$host=; //if the damn server worked then I'd include it
	$user="root";
	$password=;//get the server working
	
	$connect=mysql_connect($host,$user,$pass);
	
	$db=;//don't have one yet
	
	if($connect)
	{
		$select=mysql_select_db($db);
		
		if(!$select)
		{
			echo "There was an issue selecting the database!";
		}
	}
	
	else
	{
		echo "Sorry, we can't connect to the database right now.";
	}
	
	if(strlen($password) >= 8)
	{
		$q=mysql_query("INSERT INTO `database_name` (`name`,`email`,`password`) VALUES ('".$name."','".$email."','".$password."')");
		
		if($q)
		{
			echo "Congrats! Your account has been created.";
		}
		
		else
		{
			echo "Ohp, something went wrong!";
		}	
	}
	
	else
	{
		echo "Your password need to be a minimum of 8 characters in length.";
	}
	
?>

