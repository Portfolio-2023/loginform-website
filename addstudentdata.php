<?php
session_start();
$connect=mysqli_connect("localhost","root","","weblogin");
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];
$insert=mysqli_query($connect,"INSERT INTO studentinformation(usename,phone,email,usertype,password) VALUES ('$username','$phone','$email','$usertype','$password')");
if($insert){



	$_SESSION['message']="message sent successsfully";
	header("location:mfumo wa shule.php");


}

else
{
	echo "data apploaded is failled";
}



?>
