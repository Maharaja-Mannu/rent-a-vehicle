<!DOCTYPE html>
<html lang="en">
<head>
	<title>
        rentanyvehicle
    </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="contact.css">
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
        <li><a href="index.html">HOME</a></li>
        <li><a href="about.html">ABOUT</a></li>
        
        <li><a href="submit ad.html">SUBMIT A FREE AD</a></li>
        <li><a href="take on rent.php">TAKE ON RENT</a></li>
        <li><a href="#contact">CONTACT</a></li>
          <li><a href="#myModal" data-toggle="modal">SIGN IN</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php include 'modal.php'; ?>
    <div id="contact" class="container-fluid">
  <div class="container text-center slide">
    <dl class="col-sm-4" >
      <i class="fa fa-user">&nbsp;</i>
      <h3  >CHAT SUPPORT</h3>
      <p  >Online chat is available from <br>10 a.m. to 6 p.m. local time.</p>
      <a target="_blank" class="btn"  >CHAT NOW</a>
    </dl>
    <dl class="col-sm-4">
      <i class="fa fa-phone"   style="">&nbsp;</i>
      <h3  >HOTLINE SERVICE</h3>
      
      <p  >Hotline Service is available from<br>10 a.m. to 6 p.m. local time.</p>
        <a id="call" href="callto:+917004479452" >7004479452</a>
    </dl>
    <dl class="col-sm-4">
      <i class="fa fa-envelope">&nbsp;</i>
      <h3 >SERVICE EMAIL</h3>
      <p class="email-des"  >rentanyvehicle@gmail.com</p>
      <a href="mailto:service.in@rentanyvehicle.com?body=Dear customer, for us to help you serve better and faster, please include your mobile number in the email." target="_self" class="btn"  >SEND EMAIL</a>
    </dl>
  </div>
    
    </div>
    
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

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#indexPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 600, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
 $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
             



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

// Initialize google maps
function myMap() {
  var myCenter = new google.maps.LatLng(51.508742,-0.120850);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 12};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
    </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaAyoikODM45qHJKhmFerJRgSIQjRRR9o&callback=myMap">
    </script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
        <!-- --------  accordion -------------------->
<script>    
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</body>
</html>
