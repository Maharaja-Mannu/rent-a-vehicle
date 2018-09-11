<!DOCTYPE html>
<html lang="en">
<head>
	<title>
        rentanyvehicle
    </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/index.css"> 
    <link rel="stylesheet" type="text/css" href="css/header&footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Lato:300|Muli|Open+Sans:300|Sonsie+One|Merienda One|Ovo|PT+Serif+Caption|Scope+One' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<body id="indexPage">	

<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">LOGO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">HOME</a></li>
        <li><a href="about.html">ABOUT</a></li>
        
        <li><a href="submit ad.html">SUBMIT A FREE AD</a></li>
        <li><a href="take on rent.php">TAKE ON RENT</a></li>
        <li><a href="contact.html">CONTACT</a></li>
          <li><a href="#myModal" data-toggle="modal">SIGN IN</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php include 'modal.php';?>

<div class="jumbotron text-center">
  <h1 id="sitename"><span id="r">rent</span>any<span id="v">vehicle</span></h1> 
  <p>Find your nearest vehicle on rent</p> 
  <form>
    <div class="input-group">
      <input type="search" class="form-control" size="10" placeholder="Search" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Search</button>
      </div>
    </div>
  </form>
</div>
    <!-- sideshow -->
    <div id="myCarousel" class="carousel" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/carroad4.jpg" alt="" width="1200" height="700">
        <div class="carousel-caption">
          <h1>Welcome to rentanyvehicle.com</h1>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>      
      </div>

      <div class="item">
        <img src="images/carroad1.jpg" alt="" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we won't forget.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="images/carroad3.jpg" alt="" width="1200" height="700">
        <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
    <!-- customer says-->
<div id="customer" class="container-fluid text-center bg-grey">
    <h2>What our customers say</h2>
</div>
  <div id="cCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#cCarousel" data-slide-to="0" class="active"></li>
      <li data-target="cCarousel" data-slide-to="1"></li>
      <li data-target="cCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John </span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Mannu</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#cCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#cCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    
    <div id="services" class="container slide">
        <h2>Rental Services</h2>
        <div class="column col-sm-4">
            <div class="cardlink1">
                <div class="linkWord">
                    <a href="" >Car</a>
                </div>
               
            </div>
        
        </div>
        <div class="column col-sm-4">
            <div class="cardlink2">
               <div class="linkWord ">
                   <a href="" >Bus</a>
                
                </div>
            </div>
        </div>
        <div class="column col-sm-4">
            <div class="cardlink3">
               <div class="linkWord">
                   <a href="" >Truck</a>
                
                </div>
            </div>
        </div>
        
    
    
    </div>
    
<!--
<div class="container-fluid text-center">
    <h3>VIDEOS</h3>
    <div class="col-sm-4">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PT2UaSJAgCM"></iframe>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PT2UaSJAgCM"></iframe>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="embed-responsive embed-responsive-16by9" >
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7KgzE3W23uY"></iframe>
    </div>
    </div>
    
    </div>
    
-->

 <footer class="text-center">
  <a class="up-arrow" href="#indexPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br>
  <div class="container">
      <div class="col-sm-4">
          <h5>LET'S STAY IN TOUCH</h5>
          <form>
          <input type="email" class="group" placeholder="Enter Email Address" name="email" required >
              <button type="submit" name="submit"><span><i class="fa fa-angle-right"></i></span></button>
          </form>
          
      </div>
      <div class="col-sm-4">
          <div class="col-sm-6">
          <h5>LEGAL</h5>
          <a href="#"><p>Terms &amp; Conditions</p></a>
          </div>
          <div class="col-sm-6">
              <h5>SUPPORT</h5>
              <a href="#"><p>Feedback</p></a>
          </div>
      </div>
      
      <div class="col-sm-4">
          <h5>CONNECT WITH US</h5>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"> <i class="fa fa-youtube" ></i></a>
          <a href="#"> <i class="fa fa-instagram"></i></a>
      </div>
      <p class="col-sm-12 copyright" >&copy; Copyright 2018 rentanyvehicle. All rights reserved.</p>
        
    </div>
</footer>

<script src="js/mainjquery.js"></script>
             


</body>
</html>