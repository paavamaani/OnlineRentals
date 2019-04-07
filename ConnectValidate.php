<?php 

	SESSION_start();
	
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "paavamaani";
	
	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	
	$password = $email = "";
	$password_err = $email_err = $valid_err = "" ;
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["email"])) {
		  
			$email_err = "* Email-ID is required";
			
		}
		else {

			$email = $_POST["email"];

			if(!(preg_match("/^[a-z]{3,}+(_|\.)?[a-z0-9]*(@).[a-z]+(.com|.org|.co.in)$/i", $email))) { // ? can come or not _ .

			$email_err = "* Enter a valid Email-ID";
						
		}
		else {

			$email = filter_data($_POST["email"]);


			if (empty($_POST["password"])) {
				  
				$password_err = "* Password is required";
					
			}
			else {
								
				$password = $_POST["password"];

				$password = filter_data($_POST["password"]);
				$password = md5($password);
				$sql = "SELECT * FROM demo WHERE email = '$email' and password = '$password' ";
					 
				if ($conn->query($sql)) {
						
					$result = mysqli_fetch_array($conn->query($sql));
						
					if ($email == $result["email"] && $password == $result["password"]) {
			
						$_SESSION["email"] = $email;
						header("location: Welcome.php");
						$conn->close();
					
					}
					else {

						$valid_err = "* Email or Password is Incorrect";

					}

				}

			}

		}	

	}

}
	
	function filter_data($text) {
		
		$text=trim($text);
		$text=stripslashes($text);
		$text=htmlspecialchars($text);
		
		return $text;
		
	}

?>								