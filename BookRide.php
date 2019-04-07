<?php include('ConnectWelcome.php'); ?>

<!DOCTYPE html>

<html>

<head>
	
	<meta charset="utf-8">
	<title> Destination Rides </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette|Gentona">
	<link rel="stylesheet" type="text/css" href="teststyle.css">
	
</head>

<body>

	<nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
			 
			<a class="navbar-brand" href="Welcome.php"> <img src="logo.png"> </a>
			<a class="navbar-brand d-none d-lg-block" href="Welcome.php"> <h3 class="title"> Destination Rides </h3> </a>
			 
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			 
			<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
			 
			    <ul class="navbar-nav">
			 
			    	<li class="nav-item">
			   			<a class="nav-link" href="Welcome.php"> Home </a>
			      	</li>
			 
				    <li class="nav-item">
				        <a class="nav-link" href="#bookRide"> Book a Ride </a>
				    </li>
			 
			    </ul>
			 
			</div>  
			
		</nav>

		<div class="bar"></div>

		<p onclick="topFunction()" id="myBtn" title="Go to top"> <img src="top.png"> </p>

		<div class="wrapper">

		<div class="bd-example">
  
  			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  
			    <ol class="carousel-indicators">
			     
			 		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			    	<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			    
			    </ol>

			    <div class="carousel-inner active">

				    <div class="carousel-item active">
				        
				        <div class="carousel-caption">
				         
				        	<h1 class="title"> 

				        		" Happiness is a journey<span style="color: black;"> not a Destination " </span> 

				        	</h1>
				        
				        </div>
				      
				    </div>
  
			        <div class="carousel-item">
			        
			        	<div class="carousel-caption">
			          
			          		<h1 class="title"> 

				        		" We discover people,<span style="color: black;"> We discover life " </span> 

				        	</h1>
			        
			        	</div>
			      
			      	</div>

			      	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
           
            			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
            			<span class="sr-only">Previous</span>
          
          			</a>

			        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			            
			            <span class="carousel-control-next-icon" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        
			        </a>
			    
			    </div>

  			</div>
		
		</div>	

	</div>

	<h1 class="title text-center" id="bookRide"> <u> Book a Ride </u>  </h1> 

	<p class="divider"></p>

	<div class="row feature">
		
		<div class="col-md-7 description1">
			
			<h1 class="title"> Book a Car </h1>

			<blockquote class="blockquote">
  
  				<p class="mb-0">
  				
  					<a href="Booking.php"> <button type="button" class="btn btn-dark"> Avail a Ride </button> </a>
  				
  				</p>
			
			</blockquote>

		</div>

		<div class="col-md-5 float-right">
			
			<img src="budget.jpg" class="img-responsive img-thumbnail">

		</div>

	</div>

	<p class="divider"></p>

	<div class="row feature">

		<div class="col-md-5 float-left">
			
			<img src="entertainment.jpg" class="img-responsive img-thumbnail">

		</div>

		
		<div class="col-md-7 description2">
			
			<h1 class="title"> Book a Bike </h1>

			<blockquote class="blockquote">
  
  				<p class="mb-0">
  				
  					<a href="Booking.php"> <button type="button" class="btn btn-dark"> Avail a Ride </button> </a>
  				
  				</p>
			
			</blockquote>

		</div>

	</div>

	<p class="divider"></p>

	<footer>
		
		<div class="row" id="policy">
		
			<div class="col-md-4 text-center"> <br>
				
				<p> &copy; 2019-2020 Company, Inc. </p>

			</div>

			<div class="col-md-4 text-center"> <br>
				
				<a href="#" class="privacy"> Privacy </a>
				<a href="#" class="terms"> Terms and Conditions </a>

			</div>

			<div class="col-md-4 text-center"> <br>
					
				<a href="#" class="facebook"> <img src="facebook.png"> </a>
				<a href="#" class="instagram"> <img src="instagram.png"> </a>
				<a href="#" class="twitter"> <img src="twitter.png"> </a>

				<br> <br>

			</div>

		</div>

	</footer>

	<script>

		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
  
  			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    			
    			document.getElementById("myBtn").style.display = "block";
  			} 
  			else {
    
    			document.getElementById("myBtn").style.display = "none";
  			}
		
		}

		function topFunction() {
  		
  			document.body.scrollTop = 0;
  			document.documentElement.scrollTop = 0;
		}

	</script>

</body>	

</html>