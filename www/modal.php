<!doctype html>
<html lang="en">
    <head>

        <style type="text/css">
          
          

.modal li{
    list-style: none;
    display: inline-flex;
   
}
.close{
    position: absolute;
    top: 15px;right: 25px;
    padding: 10px;
}
.modal input{
  width: 100%;
  margin: auto;
  border-radius: 2px;
    padding: 6px;
    margin-top: 10px;
    margin-bottom: 10px;
    text-align: center;
}
h5{
  font-size: 16px;
}
.modal input[type=checkbox]{
    box-shadow: 0px 0px 0px ;
}
.modal input[type=text]:hover,input[type=password]:hover{
  border:2px solid purple;
}
.modal input[type=text]:focus,input[type=password]:focus{
  border:2px solid skyblue;
}
.modal li input{
    width: 100%;
}
.msg{
    color:red;
}
.fb{
  margin: auto;
}

@media (min-width:480px) and (max-width:768px){
    .modal{
    width:60%;      
    margin: auto;
  }
  
   
 
}
@media screen and (max-width: 480px){
  .modal{
    width: 80%;
    margin: auto;
  }
}@media screen and (max-width: 768px){
  label{
    display: none;
  }
  input[type=checkbox]{
    display: none;
  }
}
        </style>
    </head>
    <body>


<script>

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '426306367816291',
      cookie     : true,
      xfbml      : true,
      version    : '{latest-api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };
</script>
<div id="fb-root"></div>

<script>
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=426306367816291&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script>
FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});
{
    status: 'connected',
    authResponse: {
        accessToken: '...',
        expiresIn:'...',
        signedRequest:'...',
        userID:'...'
    }
}

</script>


 <?php 
 $userName=$pwd=$fuserName=$fpwd="";
 $userNameErr=$pwdErr=$snErr="";
 $userNameErr=TRUE;
 
 // function test_input($data) {
 //   $data = trim($data);
 //   $data = stripslashes($data);
 //   $data = htmlspecialchars($data);
 //   return $data;
 // }


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if(empty($_POST["username"])){
//     $userNameErr="User Name required";
//   }else{
//      $userName=test_input($_POST['username']);
//   }
//   if(empty($_POST["pwd"])){
//     $pwdErr="Password is required";
//   }else{
//     $pwd= test_input($_POST["pwd"]);
//   }
  




if (isset($_POST['signin'])) {
  $userName = $_POST["username"];
  $pwd=$_POST["pwd"];
  $con=mysqli_connect("localhost","root","","logIn");
  if (!$con) {
    $snErr="Connection failed";
  }
$sql = "SELECT email,password FROM registerid WHERE email='$userName'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result)>0) {
  while($fdata=mysqli_fetch_assoc($result))
      {
        $fuserName=$fdata["email"];
        $fpwd=$fdata["password"];
        if ($userName==$fuserName && $pwd==$fpwd) {
          $snErr="";
          header('location:myaccount.html');
    
        }else{
          $snErr="Invalid username or password.";
        }

      }
}else{
  $snErr="User name doesn't exist.";
}      
// echo test_input("<h1>mannu</h1>");
  
}


 
?>
           <!-- The Modal -->
  <div class="modal  fade" id="myModal">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
        <form method="post" action='<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title text-cent">SIGN IN</h4>
            <h5>First time here? <a href="sign up.php">Create an Account.</a></h5>
            
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <span class="msg text-center"><?php echo $snErr; ?></span>
        </div>
        
        <!-- Modal body -->
          <div class="modal-body">
            <!-- <label for="user" class="col-sm-6 col-xs-12"><h4>User Name</h4></label> -->
            <input type="text" id="user" name="username"  placeholder="Email or Phone" size="20" required>

        
            <!-- <label for="pwd" class="col-sm-6 col-xs-12"><h4>Password</h4></label> -->
            <input type="password" placeholder="Password" id="pwd" name="pwd" required>
             
            <!-- <input type="checkbox" id="checkbox">
            <label for="checkbox"><p>Remember me</p></label> -->
          </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        
              <a href="#" class="col-sm-12 col-xs-12 text-left">Forgot Password?</a>
           
          
          <li class="col-sm-6 col-xs-6"><input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel"></li>
          <li class="col-sm-6 col-xs-6" ><input type="submit" name="signin" value="Submit" class="btn btn-success"></li>
          <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
            
            
        </div>
        
          </form>
        </div>
        
      </div>
    </div>
    <?php
// define variables and set to empty values
 
?>
    
    </body>



</html>