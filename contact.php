<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="icon" type="text/css" href="http://www.idealcasinos.co.uk/virtual.png" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
 


 
</head>
<style type="text/css">body{
		background-color: black;
	}


	.background h1{
		color: #ffffff;
		text-align:center;
	
		font-family: monospace;
	}
	form{
		background: transparent;
		
		
	}
	input{
		background: transparent;
		border:none;
		outline:none;
		border-bottom:1px solid #ffffff;
		color: gold;
	}
	textarea{
		background: transparent;
		border:none;
		outline:none;
		border-bottom:1px solid #fff;
		color: gold;
	}
	.form{
		width:600px;
		line-height:60px;
		letter-spacing: 2px;

	}
	.submit{
		background-color: red;
		height:50px;
		border:none;
		font-size: 20px;
		color:#ffffff;
		font-family:monospace;
		text-align: center;
		border-radius: 2px;
		letter-spacing: 2px;
	}
	.submit:hover{
		background-color:darkred;
	}
	::placeholder{
		color:#fff;
		letter-spacing: 3px;

	}
	textarea:focus, input:focus {
    color: #ffffff;
}
.background{
	background-image: linear-gradient(rgba(10,55,30,0.5),rgba(10,55,30,0.5)), url("slider4.jpg");
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}
.background:after {
  background: -webkit-linear-gradient(5deg, green 0%, rgba(18, 1, 248, 0.2) 100%);
  background: -webkit-linear-gradient(5deg, green 0%, rgba(18, 1, 248, 0.2) 100%);
  background: -ms-linear-gradient(5deg, blue 0%, rgba(18, 1, 248, 0.2) 100%);
}
</style>
<body>

<div class="container ">
		

	<div class="container bg-dark border-top  border-warning">

					
		<div class="container py-5 ">
			<h1 class="text-white text-center">Contact Us</h1>
						<hr>
			<div class="row background">
				<div class="col-lg-6  ">
					
					<form method="POST" action="sendemail.php" >
						
						<input class="form col-12" type="text" name="name" placeholder="FullName" required><br>
						<input class="form col-12" type="email" name="email" placeholder="Email" required><br>
						<input class="form col-12" type="text" name="subject" placeholder="Subject" required ><br>
						
						<textarea class="form col-12" name="message" rows="2" placeholder="Message"></textarea><br><br>
						
						<input class="form submit col-12" type="submit" value="Send" name="submit"><br><br>

					</form>
				</div>
<br>


				<div class="col-lg-6 px-5 py-5 ">
		          <div class="media contact-info ">
		            <span class="contact-info__icon"><i class="fa fa-home " style="color: orange;font-size: 25px;"></i></span>
		            
				            <div class="media-body">
				              <h4 class="text-white ml-2">410 Valenca Ave,Dagenham RM8<br>3QL,UK</h4>
				             
				            </div>
		          </div>
<br>
				      
<br>
				          <div class="media contact-info">
				            <span class="contact-info__icon"><i class="far fa-envelope" style="color: orange; font-size: 25px;"></i> </span>
				            <div class="media-body">
				              <h4 class="text-white ml-2">support@idealcasinos.co.uk</h4>
				              <p class="text-white ml-2">Send us your query anytime!</p>
				            </div>
				          </div>
        		</div>
        </div>		
        	
    		
		</div>

	</div>
		<?php
include "footer.php";
?>
</div>

	
</body>
</html>
