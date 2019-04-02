<!-- Madeline Dietrich
     CSC420 Database Principles
     Events Submission -->
	 
<?php
	$ename=$_POST['eName'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$location=$_POST['location'];
	$contact=$_POST['contact'];
	$info=$_POST['info'];

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

	$dbname = "crjclub";

	try 
	{
		$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO events (name, date, time, location, contact, info)
		VALUES ('$ename', '$date', '$time', '$location', '$contact', '$info')";
		// use exec() because no results are returned
		$conn->exec($sql);
		echo "Event submitted successfully";
	}
	catch(PDOException $e)
		{
		echo $sql . "<br>" . $e->getMessage();
		}

	$conn = null;
?>
