
<?php
error_reporting (0);
session_start();
session_destroy();

if ($_SESSION['message']) 
{
$message=$_SESSION['message'];

echo "	<script type='text/javascript'>

alert('$message');

</script>";



}





?>
 










<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>mfumo wa shule </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>




</head>
<body>


<nav>
	<label class="logo">w-school</label>
	<ul>
	<li><a href="">Home</a></li>
		
		<li><a href="contact.php">contact</a></li>
		<li><a href="">admission</a></li>
		<li><a class="btn btn-primary" href="login.php">login</a></li>
	</li>
	</ul>
</nav>
<div class="section1">
	<label class="img_text">we teach student with care</label>
	<img src="course1.jpg" class="shule">
	
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<img src="teacher1.jpg" class="welcome">
			
		</div>

		<div class="col-md-8">
			<h1>welcome to w-school</h1>
			<p>I am specialized in nursing and midwifery, who enjoys being a part of some organizations and 
institutions which will give me an opportunity to serve many people who require service especially 
Tanzanians Citizens. I am quick to gasp new ideas and concept related to social welfare of people 
and other additional skills. I have an ability to work well on my own initiatives and demonstrate</p>
			
		</div>

	</div>
	
</div>
	<center>
			<h1>OUR  TEACHERS</h1>
		</center>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="teacher1.jpg" class="teacher">

					<p>I am a student teacher at University of Dodoma, who enjoys being a part of some organizations 
and institutions which will give me an opportunity to serve many people who require service 
especially Tanzanians Citizens. I am quick to gasp new ideas and concept related to social</p>
				</div>
				<div class="col-md-4">
					
					<img src="teacher2.jpg" class="teacher">
					<p>I am a student teacher at University of Dodoma, who enjoys being a part of some organizations 
and institutions which will give me an opportunity to serve many people who require service 
especially Tanzanians Citizens. I am quick to gasp new ideas and concept related to social</p>
				</div>

				<div class="col-md-4">
					
					<img src="teacher3.jpg" class="teacher">
					<p>I am a student teacher at University of Dodoma, who enjoys being a part of some organizations 
and institutions which will give me an opportunity to serve many people who require service 
especially Tanzanians Citizens. I am quick to gasp new ideas and concept related to social</p>
				</div>

				
				

			</div>
			

		</div>

		<center>
			<h1>OUR  COURSE</h1>
		</center>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="course1.jpg" class="teacher">
					<h3>web design</h3>

					
				</div>
				<div class="col-md-4">
					
					<img src="course2.jpg" class="teacher">
					<h3>chemistry learning tutorial</h3>
				</div>

				<div class="col-md-4">
					
					<img src="course4.jpg" class="teacher">
					<h3>physics learning tutorial</h3>

				</div>

				
				

			</div>
			

		</div>
		<center>
			<h2 class="dm">Admission Form</h2>
		</center>
		<div align="center" class="admission_form">
			<form class="admission_dg" action="admission.php" method="post">
				
				<div class="admission_dg">
					<label class="label_text">Name</label>
						<input class="input_dg" type="text" name="Name" required>
					
				</div>

				<div class="admission_dg">
					<label class="label_text">Email</label>
						<input class="input_dg" type="text" name="Email" required>
					
				</div>

				<div class="admission_dg">
					<label class="label_text">phone</label>
						<input class="input_dg" type="text" name="phone" required>
					
				</div>
				<div class="admission_dg">
					<label class="label_text">Message</label>
						<textarea class="mess" name="Message" required></textarea>					
				</div>
				<div class="admission_dg">
					
						<input class="btn btn-primary" type="submit" value="APPLY" id="submit" >
					
				</div>
			</form>




		</div>
		<footer>
			<h3 class="food">All @copyright reserved by  experius henericko</h3>
		</footer>
</body>
</html>
