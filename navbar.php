<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ideal Casinos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <script type="text/javascript">
    function Redriect(){
    window.location ="https://blog.idealcasinos.co.uk/";
    // document.write("<h1>page redriect just 5 secound Blog Page</h1>");
    // setTimeout('Redriect()',5000);
  }
  </script>
</head>
<style type="text/css">body{
		background-color: black;
	}
	.imge{
		background: url("logo1.jpg");
		background-repeat: no-repeat;
	height: 160px; /* You must set a specified height */
  background-position: center; /* Center the image */
 
  background-size: cover;
	}
	
	nav{
		letter-spacing: 1px;

	}

nav.shift ul li.active a:hover {
  color: gold;
}

nav.stroke ul li a {
  position: relative;
}
nav.stroke ul li a:after {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  width: 0%;
  content: '.';
  color: transparent;
  background: gold;
  height: 2px;
}
nav.stroke ul li a:hover:after {
  width: 100%;
  
}
/* Smartphones (portrait and landscape) ----------- */
@media only screen and (min-device-width : 768px) and (max-device-width : 701px) {
/* Styles */
 .logo{
  margin-left:-135px;
}
}

/* Smartphones (landscape) ----------- */
@media only screen and (min-width : 321px) {
/* Styles */.logo{
  margin-left: 140px;
}
}

/* Smartphones (portrait) ----------- */
@media only screen and (max-width : 320px) {
/* Styles */
}

@media only screen and (min-device-width : 320px) and (max-device-width : 701px) {
/* Styles */
  
}
@media only screen and (min-device-width : 425px) and (max-device-width : 701px) {
/* Styles */
   .imge{
  width:100%;
  height: 100px;
  background-position: center;
}
}
@media only screen and (min-device-width : 375px) and (max-device-width : 701px) {
/* Styles */
   .logo{
  margin-left: 130px;
}
}


</style>
<body>
	<div class="container">
	<div class="imge">
		<!-- <img class="logo" src="ideal.jpeg" width="150" height="150"> -->
		</div>
	
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark justify-content-center stroke " >
  <ul class="navbar-nav">
    <li class="nav-item active ml-5">
      <a class="nav-link text-warning" id="home" href="index.php">Home</a>
    </li>
     <li class="nav-item  ml-5">
      <a class="nav-link text-warning" href="strategies.php">Strategies</a>
    </li>
    <li class="nav-item  ml-5">
      <a class="nav-link text-warning" href="live.php">Live</a>
    </li>
    <li class="nav-item  ml-5">
      <a class="nav-link text-warning" href="casino.php">Casinos</a>
    </li> 
    <li class="nav-item  ml-5">
      <a class="nav-link text-warning " href="bingo.php">Bingo</a>
    </li>
     <li class="nav-item  ml-5">
      <a class="nav-link text-warning " onclick="Redriect();">Blogs</a>
    </li>
    <li class="nav-item  ml-5">
      <a class="nav-link text-warning" href="contact.php">Contact Us</a>
    </li>
   
  </ul>
</nav>
</div>




</body>
</html>