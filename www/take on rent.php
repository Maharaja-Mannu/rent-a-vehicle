<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <title>take on rent</title>
    <link rel="stylesheet" href="css/take.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto|Lato:100|Merienda+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/select1.css">
    <link rel="stylesheet" type="text/css" href="css/overlay.css">
</head>
    <body>
    <header>
        
    </header>
          
       <div id="sticky">
<div class="topnav" id="myTopnav">
  <a href="javascript:void();" class="icon" onclick="openNav()"  onclick="myFunction()" >&#9776;</a> 
  <a href="index.html">HOME</a>
  <a href="contact.html">CONTACT US</a>
  <a href="about.html">ABOUT US</a>
  <a href="take on rent.html" class="active">TAKE ON RENT</a>
 
  <div class="navrow" id="ad">
        <a  href="submit free ad.html" id="adv">SUBMIT A FREE AD</a>
  </div>
  <div class="navrow" id="icon">
        <a href="javascript:void();" onclick="openSign()"><i class="material-icons">&#xe7fd;</i></a>
  </div>
   
     
</div>
           </div>
             <!-- **********  Sidenav   **************   -->
        <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.html">HOME</a>
  <a href="contact.html">CONTACT US</a>
  <a href="about.html">ABOUT US</a>
  <a href="take on rent.html" class="active">TAKE ON RENT</a>
         </div> <!--          overlay element        -->
    <div id="mySign" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeSign()">&times;</a>
  <div class="overlay-content">
   <button class="tablink" onclick="openPage('signIn', this, 'white')">Sign in</button>
  <button class="tablink" onclick="openPage('register', this, 'white')"    id="defaultOpen">Register</button>

<?php
$userName=$pwd=$snErr=""; 
if (isset($_POST['submit'])) {
  $userName = $_POST["username"];
  $pwd=$_POST["password"];
  $con=mysqli_connect("localhost","root","","logIn");
  if (!$con) {
    $snErr="Connection failed";
  }
$sql = "SELECT email,password FROM registerid";
$result = mysqli_query($con, $sql);
$fdata=mysqli_fetch_assoc($result);

  if ($userName==$fdata["email"] && $pwd=="mannu98") {
    header('location:index.php');
    $snErr='';
  }else{
    $snErr="Invalid username or password.";
  }
  
}else{
  $snErr="";
}
?>
<div id="signIn" class="tabcontent">
  <h2>SIGN IN</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
  <div class="row">
    <p class="msg" style="color: red;"><?php echo $snErr; ?></p>
   <input type="email" placeholder="Email" name="username" required>
  </div>
    <div class="row">          
   <input type="password" placeholder="Password" name="password" required>    
   </div>
    <div class="row">
        <input type="submit" name="submit" >
    </div>
    <!-- <div id="remember">
        <li>
        <input type="checkbox" id="checkbox">
        <label for="checkbox">Remember me</label>
        </li>
    </div> -->
    <div id="sfooter">
        <li id="btn"><button onclick="closeSign();">Cancel</button></li>
        <li><a href="">Lost your password ?</a></li>
      </div>
    </form>
    </div> 
      
      
   <div id="register" class="tabcontent">
    <h2>REGISTER</h2>
      <form method="post" action="storing_logIn_info.php">
       <input type="email" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,10}$" required>
       <input type="tel" maxlength="10" placeholder="Phone" name="phone" required >
       <input type="password" maxlength="16" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required title="At least 8 character must contain upper case, lower case & number. ">
       <input type="password" maxlength="16" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required
              title="At least 8 character must contain upper case, lower case & number.">
       <p>By creating an account you agree to our <span><a>Terms &amp; Privacy</a></span></p>
       <div class="registerBtn row" >
           <li><button onclick="closeSign();">Cancel</button></li>
           <li><input type="submit" name="submit"></li>
           
       </div>
     </form>
   </div>
       
    </div>      
    </div>
        <!--   image container  -->
        <div class="contain" >
            <img src="http://www.w3schools.com/w3images/notebook.jpg" alt="Notebook" style="width:100%;">
            <div class="content">
                <div class="irow" id="title">
                    <h1><span style="color:red"> rent</span>any<span style="color:lightgreen">vehicle</span>
                    </h1>
                    
                </div>
                <div class="irow" id="heading">
                    <h1>Find your nearest vehicle
                    on rent for the best price</h1>
                </div>
                 <form class="" action="/action_page.php" >
                 <div class="search">
                     <input type="text" placeholder="Search.." name="search2" size="40">
                     <button type="submit"><i class="fa fa-search"></i></button>
                 </div>
                    </form>
            </div>
            
            
        </div>
        <div class="filter">
            <div class="filh" id="hfilter" >
                <h3 onclick="openfilter()" id="filter">Filter</h3>
            </div>
            
              
        
        <div class=" filh sort">
          <div class="custom-select">
            <select>
            <option>Sort by</option>    
            <option>High to low price </option>
            <option>Low to high</option>
            </select>
          </div>  
        </div>
        </div>
        
        <div id="mySidefilter" class="sidefilter">
            <h2>Filters</h2>
  <a href="javascript:void(0)" class="closebtn" onclick="closefilter()">&times;</a>
            <div class="fil price">
                <h3>Price(₹) <span id="value"></span></h3>
                <p>₹500</p>
                <p id="max" >₹10000</p>
                <input type="range" min="500" max="10000" value="2000" class="slider" id="mySlide">
            </div>
            <div class="fil custom-select" >
                 <label for="type" ><h3>Vehicle type</h3> </label>
                 <select id="type" style="">
                   <option value="cars">Cars</option>
             <option value="mini-truck">Mini-truck</option>
             <option value="truck">Truck</option>
             <option value="bus">Bus</option>
             <option value="other">Others</option>   
                 </select>
            </div>
            <div class="fil custom-select">
                <h3>Select your city</h3>
                <select>
                <option value="godda">Godda</option>
                <option value="ranchi">Ranchi</option>    
                </select>
            </div>
            <div class="fil rating">
                <h3>User rating</h3>
                <ul>
                <li><button id="zero">0+</button></li>
                <li><button id="one">1+</button></li>
                <li><button id="two">2+</button></li>
                <li><button id="three">3+</button></li>
                <li><button id="four">4+</button></li>
                </ul>
                <input type="reset" name="resetfilter" value="Reset filter" >
            </div>
  
  
         </div>        
<?php
 $name="Maharaja Travel Ajency";
 $type="Car";
 $model="i20";
 $address="Poreyahat, Godda, Jharkhand";
 $img="Image";
 $deal="2000";
 $mobile="8409478887";
 $rating="55555";
 echo "<div class='main'><div class='row image'><div class='img'>".$img."</div></div><div class='row name'><h3>".$name."</h3><h4>Vehicle type :&nbsp;<span>".$type."</span></h4><h4>Model :&nbsp;<span>".$model."</span></h4><h4>Address :&nbsp;<span>".$address."</span></h4><h4>Contact No. :&nbsp; <span>".$mobile."</span></h4>
 </div>
 <div class='row deal'><h4 id='rating'>Rating :".$rating."</h4><h4>Best deal at<br><span>₹".$deal."</span></h4><a>Get Best Deal</a></div></div>";
 ?>
      
 
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
           
        <script src="js/select.js"></script>
        <script src="js/main.js"></script>
    
    </body>
</html>