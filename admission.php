<?php
session_start();

$connect=mysqli_connect("localhost","root","","admission");
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$Message=$_POST['Message'];
$sql="SELECT * FROM studentadmission";
$insert=mysqli_query($connect,"INSERT INTO studentadmission(Name,Email,Phone,Message)VALUES('$Name','$Email','$Phone','$Message')");


if ($insert==true) {


	$_SESSION['message']="message sent successsfully";
	header("location:mfumo wa shule.php");

}
else{

	echo "Connection failed";
}





?>