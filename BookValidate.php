<?php
	
	SESSION_start();
	
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "paavamaani";
	
	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	
	$username = $pickup = $dropl = $email = $vehicle = "";
	$username_err = $pickup_err = $dropl_err = $email_err = $vehicle_err = $valid_err = "" ;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["username"])) {
		  
			$username_err = "* Name is required";
		
		}	
		else {
		
			$username = $_POST["username"];

			if(!(preg_match("/^[a-z_]{3,10}$/i", $username))) {

				$username_err = "* Username must be only 'a-z', ' _ ', >5 and <10 characters";
				
			}
			else {

				$username = filter_data($_POST["username"]);
						
				if (empty($_POST["email"])) {
				  
					$email_err = "* Email-ID is required";
					
				}		
				else {	

					$email = $_POST["email"];

					if(!(preg_match("/^[a-z]{3,}+(_|\.)?[a-z0-9]*(@).[a-z]+(.com|.org|.co.in)$/i", $email))) {

						$email_err = "* Enter a valid Email-ID";
										
					}
					else {

						$email = filter_data($_POST["email"]);

						if (empty($_POST["pickup"])) {
								  
							$pickup_err = "* Pick Up location is required";
									
						}
						else {
										
							$pickup = $_POST["pickup"];
							$pickup = filter_data($_POST["pickup"]);

							if (empty($_POST["dropl"])) {
						  
								$dropl_err = "* Destination location is required";
										
							}
							else {

								$dropl = filter_data($_POST["dropl"]);

								if ($pickup != $dropl) {

									if(empty($_POST["vehicle"])) {
						  
										$vehicle_err = "* Vehicle is required";
										
									}
									else {

										$vehicle = filter_data($_POST["vehicle"]);

										$sql = "SELECT * FROM demo WHERE username = '$username' and email = '$email' ";
										if ($conn->query($sql)) {
											
											$result = mysqli_fetch_array($conn->query($sql));

											if ($email == $result["email"] && $username == $result["username"]) {

												$sql = "INSERT INTO book (username, email, pickup, dropl, vehicle) values('$username', '$email', '$pickup','$dropl','$vehicle')";
											
												if($conn->query($sql)) {

													header("location: Ride.php");
													$conn->close();
							
												}
												else {

													$valid_err = "connection error *";

												}
											
											}
											else {

												$valid_err = "* Email or Username is Incorrect";

											}

										}
										else {

											$valid_err = "connection error *";

										}

									}

								}
								else {

									$pickup_err = "Pick Up location and Drop points cannot be same";
									$drop_err = "Pick Up location and Drop points cannot be same";

								}

							}

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