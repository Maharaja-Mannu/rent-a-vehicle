
<?php
if(isset($_POST['submit'])){
$con=mysqli_connect("localhost","root","","logIn");
$email=$phone=$pwd="";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
   $email=test_input($_POST['email']);
   $phone=test_input($_POST['phone']);
   $pwd=test_input($_POST['password']);
}
$str="INSERT INTO registerId (email, phone, password)
VALUES('$email','$phone','$pwd')";
/*$str="INSERT INTO `myguests` (`id`, `firstname`, `lastname`, `email`) VALUES (NULL, 'mannu', 'kuam', 'ma@gmail.com')";
*/
$rs=mysqli_query($con,$str);
if($rs)
echo "<h2> You are registered successfully</h2>
<a href='index.html'> Log In </a>";
else
   echo "Error";
}
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
?>