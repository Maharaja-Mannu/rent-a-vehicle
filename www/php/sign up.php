<!DOCTYPE html>
<html lang="en">
<head>
	<title>
        rentanyvehicle
    </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/header&footer.ss">
    <link rel="stylesheet" type="text/css" href="css/sign up.css">
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
        <li><a href="#services">HOME</a></li>
        <li><a href="about.html">ABOUT</a></li>
        
        <li><a href="submit ad.html">SUBMIT A FREE AD</a></li>
        <li><a href="take on rent.php">TAKE ON RENT</a></li>
        <li><a href="#contact">CONTACT</a></li>
          <li><a href="">SIGN IN</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php 

include 'modal.php';
$nameErr = $emailErr=$phoneErr=$pwdErr=$cnfpwdErr=$cnfmsg= "";
$name = $email =$phone=$pwd=$cnfpwd="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed"; 
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format"; 
      }
    }
    if(empty($_POST["phone"])){
        $phoneErr="Phone is required";
    }else{

      $phone=test_input($_POST["phone"]);
      if(!preg_match("/^[0-9]{10}+$/",$phone)){
        $phoneErr="Invalid phone number";
      }
            
    }
    if(empty($_POST["pwd"])){
        $pwdErr="Password is required";
    }else{
        $pwd=test_input($_POST["pwd"]);
        $cnfpwd=test_input($_POST["cnfpwd"]);
        if(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/",$pwd)){
            if($pwd!=$cnfpwd){
                $pwdErr="Password should be same";
            }
              
        }else{
            $pwdErr="Invalid Password format";
        }
    }
  }
  

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
if(isset($_POST['submit'])){
  $con=mysqli_connect("localhost","root","","logIn");
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $pwd=$_POST['pwd'];
  $cnfpwd=$_POST['cnfpwd'];
  $sql = "SELECT email FROM registerid WHERE email='$email'";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result)>0) {
    $cnfmsg="User Already exist.";
    
  }elseif ($pwd==$cnfpwd) {

    $str="INSERT INTO registerId (name,email, phone, password)
    VALUES('$name','$email','$phone','$pwd')";
        /*$str="INSERT INTO `myguests` (`id`, `firstname`, `lastname`, `email`) VALUES (NULL, 'mannu', 'kuam', 'ma@gmail.com')";
        */
    $rs=mysqli_query($con,$str);
    if($rs)
      $cnfmsg="You are registered successfully!";
    else
      $cnfmsg= "Error";
  }elseif ($pwd!=$cnfpwd) {
    
    $cnfmsg="Confirm Password must be same as Password .";
  }

}    


?>
    <div id="signUpForm" class="container">

        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="col-sm-12">
            <h2>SIGN UP</h2><br>
            
            <span class="msg"><?php echo "<b>".$cnfmsg."</b>";?></span>
            <h3>Already Registered? <a href="#myModal" data-toggle="modal">Sign in</a></h3>
            <div class="row">
                <label for="name" class="col-sm-5 col-xs-12"><h4>Name</h4></label>
                <input type="text" name="name" id="name" class="col-sm-7 col-xs-12" value="<?php echo $name;?>" placeholder="<?php echo $cnfmsg; ?>" required>
            </div>
            <div class="row">
                <label for="email" class="col-sm-5 col-xs-12" ><h4>Email</h4></label>
                <span class="msg">
        
                </span>
                <input type="email" id="email" name="email" class="col-sm-7 col-xs-12" value="<?php echo $email;?>" placeholder="demo@domain.com" required >
                
            </div>
            <div class="row">
                <label for="phone" class="col-sm-5 col-xs-12"><h4>Phone</h4></label>
                <span class="msg">
                </span>
                <input type="tel" name="phone" id="phone" class="col-sm-7 col-xs-12" maxlength="10" value="<?php echo $phone;?>" placeholder="Only 10 digit" required>
            </div>
            <div class="row">
                <label for="pwd" class="col-sm-5 col-xs-12"><h4>Password</h4></label>
                
                <input type="password" name="pwd" id="pwd" class="col-sm-7 col-xs-12" required data-toggle="tooltip" title="Atleast 8 character and must contain upper case, lower case, number, special character">
            </div>
            <div class="row">
                <label for="cnfpwd" class="col-sm-5 col-xs-12">
                <h4>Confirm Password</h4></label>
               <span class="msg col-sm-7 col-xs-12">
                  
                    </span>
                <input type="password" name="cnfpwd" id="cnfpwd" class="col-sm-7 col-xs-12" required data-toggle="tooltip" title="Atleast 8 character and must contain upper case, lower case, number, special character">
            </div>
                <p class="col-sm-8 col-xs-12">By creating an account you agree to our <a>Terms &amp; Conditions</a></p>
                <input type="submit" name="submit" class="col-sm-4 col-xs-12" value="SUBMIT">
            
        </form>
    
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

<script src="js/mainjquery.js"></script>
<script>
        $(function(){
            $('input').focus(function(){
                $(this).next('span.help').removeAttr('hidden');
            }).blur(function(){
                $('span.help').attr('hidden','hidden');
                
            });
            // setTimeout(function(){
            // $('span.msg').fadeOut('slow');},3000);
            
        });
    
</script>
</body>
</html>
<?php 
// define variables and set to empty values
$nameErr = $emailErr=$phoneErr=$pwdErr=$cnfpwdErr= "";



  
   

  
?>