<?php

include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Logout</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
</head>
<style type="text/css">
	body{
		background-color: black;
	}

    .content{
    
      height: 400px;
    }
    


.chart{
    width:100%;
    height: 90vh;
}
.para{
  height: 2.5em;
  padding-left: 1em;
  font-size: 23px;
  font-weight:bold;
  font-family: imprint mt shadow;
  padding-top: 10px;
}
.chart a{
  text-decoration: none;
}
.link{
  width: 100%
  ;padding:0;
  margin:0;
}
.bord{
  border-bottom: 2px solid black;
  line-height: 5px;
  margin-top: 30px;
}
.small
{
  line-height: 5px;

}
.small p a{
  color:#666666;
  text-decoration: none;
}
.small p a:hover{
  color:skyblue;
  
}


        @media (min-width: 768px) and (max-width: 991px) {
    /* Show 4th slide on md if col-md-4*/
    .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -33.3333%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) and (max-width: 768px) {
    /* Show 3rd slide on sm if col-sm-6*/
    .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -50%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) {
    .carousel-item {
        margin-right: 0;
    }
    /* show 2 items */
    .carousel-inner .active + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* farthest right hidden item must be also positioned for animations */
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* right or prev direction */
    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* MD */
@media (min-width: 768px) {
    /* show 3rd of 3 item slide */
    .carousel-inner .active + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* LG */
@media (min-width: 991px) {
    /* show 4th item */
    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    /* Show 5th slide on lg if col-lg-3 */
    .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction //t - previous slide direction last item animation fix */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
h2{
  animation:myanimation 3s infinite;
  text-align: center;

}
h1{
  animation:myanimation 17s infinite;
  text-align: center;

}
@keyframes myanimation {
  0% {color: red;}
  25%{color:yellow;}
  50%{color:green;}
  75%{color:brown;}
  100% {color: red;}
}
div#mon2 img{
        width:100%;
        height:90px;
}
div#slide img{
        width: 230px;
        height:150px;
        border-radius:5px;
}
	</style>
	<body>

		<div class="container">

		<div class="container bg-dark  border-top border-warning ">
<h1 class="text-white text-center py-4">Live Casinos</h1>
		
<!--Slider start-->
<div class="top-content ">
    <div class="container">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">

                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                    <div class="card" id="slide">
 
                <script type="text/javascript" charset="utf-8" src="https://www.gambling-affiliation.com/cpm/v=X0IXhZl.5.Tu.x4aloxoTnkw2ktitgcVOhGNmQwaYOc_GA7331V2"></script>

    <div class="card-body">
      <h6 class="card-title "><a href="live.php" style="text-decoration:none;" class="text-primary">Coral</h6></a>
     <!--  <p class="card-text">Click here Banner</p> -->
    
    </div> 
  </div>
                    
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card" id="slide">
<script type="text/javascript" charset="utf-8" src="https://www.gambling-affiliation.com/cpm/v=wm2dOMLErvREiixfUJtZUDOGUBAbJsdtf11IesmnxPA_GA7331V2"></script>
     <div class="card-body">
      <h6 class="card-title "><a href="live.php"style="text-decoration:none;" class="text-primary">Ladbrokes</h6></a>
  
    
    </div> 
  </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card" id="slide">
<script type="text/javascript" charset="utf-8" src="https://www.gambling-affiliation.com/cpm/v=-.ihcCj.8xp5boA33e8L3SKhoPVPPW1X9UbCJcxMeSg_GA7331V2"></script>
     <div class="card-body">
      <h6 class="card-title "><a href="live.php"style="text-decoration:none;" class="text-primary"> 888 Poker</h6></a>
   
    
    </div> 
  </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card" id="slide">
  <script type="text/javascript" charset="utf-8" src="https://www.gambling-affiliation.com/cpm/v=LN-QKestRpcxHXk-4R5Bot6eiQoQFijqLf56R1W3gc4_GA7331V2"></script>
    <div class="card-body">
      <h6 class="card-title "><a href="live.php"style="text-decoration:none;" class="text-primary">Mongoose Casinos</h6></a>

    
    </div>
  </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                   <div class="card" id="slide">
<script type="text/javascript" charset="utf-8" src="https://www.gambling-affiliation.com/cpm/v=-.ihcCj.8xp5boA33e8L3SKhoPVPPW1X9UbCJcxMeSg_GA7331V2"></script>
     <div class="card-body">
      <h6 class="card-title "><a href="live.php"style="text-decoration:none;" class="text-primary"> 888 Poker</h6></a>
    
    
    </div> 
  </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                     <div class="card" id="slide">
<script type="text/javascript" charset="utf-8" src="https://www.gambling-affiliation.com/cpm/v=wm2dOMLErvREiixfUJtZUDOGUBAbJsdtf11IesmnxPA_GA7331V2"></script>
     <div class="card-body">
      <h6 class="card-title "><a href="live.php"style="text-decoration:none;" class="text-primary">Ladbrokes</h6></a>

    
    </div> 
  </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card" id="slide">
  <script type="text/javascript" charset="utf-8" src="https://www.gambling-affiliation.com/cpm/v=EXL9TsaCfyE35SV78uRW28QMTAUIs0iFXUZimu5zYYw_GA7331V2"></script>
    <div class="card-body">
      <h6 class="card-title text-primary"><a href="live.php"style="text-decoration:none;" class="text-primary">Party Casinos</h6></a>

    
    </div> 
  </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                   <div class="card" id="slide">
<script type="text/javascript" charset="utf-8" src="https://www.gambling-affiliation.com/cpm/v=-.ihcCj.8xp5boA33e8L3SKhoPVPPW1X9UbCJcxMeSg_GA7331V2"></script>
     <div class="card-body">
      <h6 class="card-title "><a href="live.php"style="text-decoration:none;" class="text-primary"> 888 Poker</h6></a>
     
    
    </div> 
  </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="live.php.html#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="live.php.html#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!--slider end-->
<!--banner start-->
<div class="container">
  <div class="row">
    <div class="col-lg-3">
                <div class="py-5 pl-4">
	 <script type="text/javascript" charset="utf-8" src="https://www.gambling-affiliation.com/cpm/v=FgiNjUqOMwS9udHyBFXspeiBHLCJIRA7qKAODTdVePY_GA7331V2"></script>
		</div>
  </div>
  <div class="col-lg-9">
    <div class="mt-5">
    <h2 class="pb-3">Coral</h2>
    <p class="text-white">
18+. New Casino customers only. Min bet £10 on qualifying games. Bonus must be accepted with 48 hours, has 40 x wagering reqs (certain games only) and is valid for 30 days. Certain deposit methods only. Bets covering >70% of Roulette table don't count to wagering. T&Cs Apply.</p>
</div>
<div class="py-2">
  <h2 class="pb-3">888 Poker</h2>
 <div id="mon2">
          <script type="text/javascript" charset="utf-8" src="https://www.gambling-affiliation.com/cpm/v=XTIeIj2ii.8I7OHX-quor1XF8e7qSLPz7YREF5BRAjs_GA7331V2"></script>
 </div>
  <p class="text-white pt-3">
    With over 10 million registered members worldwide, 888poker is the fastest growing online poker room, with a new player signing up every 12 seconds.

888poker is for players who thrive on the fun and excitement of the game. Hosting the largest variety of cash games and tournaments online, you'll always find a table that's right for you, no matter what your player level or budget.
  </p>
</div>
<div class="mt-3">
  <h2 class="pb-3">Ladbrokes</h2>
  <div id="mon2">
          <script type="text/javascript" charset="utf-8" src="https://www.gambling-affiliation.com/cpm/v=no73YkIAV7Bz1QibVU1nOUOio.vJNSlrIJYFLYkJd.4_GA7331V2"></script>
  </div>
  <p class="text-white pt-3">18+. New players only. Min bet £10 on qualifying games. 40x wager reqs (bonus only) on selected games. Bonus valid for 30 days. Certain deposit types excluded. Bets covering >70% of Roulette table excluded. T&Cs Apply.</p>
</div>


  </div>
</div>
</div>
    <!--banner end-->




</div>
		
<?php
include "footer.php";
?>
</div>

  <script type="text/javascript">

$('#carousel-example').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});
</script>	
</body>
</html>
