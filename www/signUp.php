<?php 
// define variables and set to empty values
$nameErr = $emailErr=$phoneErr=$pwdErr=$cnfpwdErr= "";
$name = $email =$phone=$pwd=$cnfpwd= "";
if(isset($_POST['submit'])){
  echo "Hello!";
$con=mysqli_connect("localhost","root","","logIn");
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pwd=$_POST['pwd'];
$cnfpwd=$_POST['cnfpwd'];
    if($pwd==$cnfpwd){
		$str="INSERT INTO registerId (name,email, phone, password)
		VALUES('$name','$email','$phone','$pwd')";
		  /*$str="INSERT INTO `myguests` (`id`, `firstname`, `lastname`, `email`) VALUES (NULL, 'mannu', 'kuam', 'ma@gmail.com')";
		  */
		$rs=mysqli_query($con,$str);
		if($rs)
		  echo "<h2> You are registered successfully </h2>";
		else
		    echo "Error";
	}else{
		echo "Password didn't match.";
	}
}   
?>