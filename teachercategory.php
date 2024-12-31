<?php
session_start();
$connect=mysqli_connect("localhost","root","","weblogin");
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];

$insert=mysqli_query($connect,"INSERT INTO studenttable(usename,phone,email,password) VALUES ('$username','$phone','$email','$password')");
if($insert){



	echo "<script type='text/javascript'>


alert('data is apploaded successfully');



	</script>";

}

else
{
	echo "data apploaded is failled";
}



?>