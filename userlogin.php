<?php

$connect=mysqli_connect("localhost","root","","weblogin");


if ($_SERVER['REQUEST_METHOD']=="POST") 
{

	$usename=$_POST['usename'];
$password=$_POST['password'];
$sql="SELECT*FROM studentinformation where usename='".$usename."'AND password='".$password."' ";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_array($result);

if ($row["usertype"]=="student") {

	// code...
	header("location:student.php");
}

elseif ($row["usertype"]=="admin") {

	// code...
	header("location:exp.php");
}

else{
	session_start();
	$message="username and password not match";
	$_SESSION['loginMessage']=$message;
	header("location:login.php");
}

}



?>