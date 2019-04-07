<?php 

	SESSION_start();
	
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "paavamaani";
	
	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	
	$username = $email = "";
	
	$email = $_SESSION["email"];

	$sql = "SELECT * FROM book WHERE email = '$email' ";
	$result = mysqli_fetch_array($conn->query($sql));

?>								