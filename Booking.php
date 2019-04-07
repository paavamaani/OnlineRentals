<?php include('BookValidate.php'); ?>

<!DOCTYPE html>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="Style.css">
	
</head>

<body>

	<h1> Booking Details <a href="Welcome.php"> <input type="button" name="home" value="Home"> </a> </h1> 
	<fieldset>

		<span style="color: red"> <?php echo $valid_err; ?> </span> <br> <br>
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		
			<label>
			
				<strong> Name: <span style="color: red"> * </span> </strong> <br> <br>
				<input type="text" name="username" placeholder="Enter your name" value="<?php echo $username; ?>" > <br>
				<span style="color: red"> <?php echo $username_err; ?> </span> <br> <br>
			
			</label>
		
			<label>
			
				<strong> Email: <span style="color: red"> * </span> </strong> <br> <br> 
				<input type="text" name="email" placeholder="Enter your Email-ID" value="<?php echo $email; ?>" > <br> <br>
				<span style="color: red"> <?php echo $email_err; ?> </span> <br> <br>
				
			</label>

			<label>
			
				<strong> Enter Vehicle: <span style="color: red"> * </span> </strong> <br> <br>
				<input type="text" name="vehicle" placeholder="Enter Car or Bike" value="<?php echo $vehicle; ?>" > <br>
				<span style="color: red"> <?php echo $vehicle_err; ?> </span> <br> <br>
			
			</label>

			<label>
			
				<strong> Enter Pick Up Point: <span style="color: red"> * </span> </strong> <br> <br>
				<input type="text" name="pickup" placeholder="Address, Landmark, Street" value="<?php echo $pickup; ?>" > <br>
				<span style="color: red"> <?php echo $pickup_err; ?> </span> <br> <br>
			
			</label>

			<label>
			
				<strong> Enter Drop Point: <span style="color: red"> * </span> </strong> <br> <br>
				<input type="text" name="dropl" placeholder="Address, Landmark, Street" value="<?php echo $dropl; ?>" > <br>
				<span style="color: red"> <?php echo $dropl_err; ?> </span> <br> <br>
			
			</label>
			
			<label>
			
				<input type="submit" name="Book" value="Book Ride"> <br> <br>
			
			</label>
			
		</form>
		
	</fieldset>

</body>

</html>