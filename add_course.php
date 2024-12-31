<?php
session_start();
$connect=mysqli_connect("localhost","root","","weblogin");
$COMPUTERSCIENCE=$_POST['COMPUTERSCIENCE'];

$insert=mysqli_query($connect,"INSERT INTO courses(COMPUTERSCIENCE) VALUES ('$COMPUTERSCIENCE')");
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
