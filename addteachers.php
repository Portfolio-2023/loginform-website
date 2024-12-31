<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>hello</title>
	<link rel="stylesheet" type="text/css" href="admin.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<style type="text/css">
	
label{
	display: inline-block;
	padding-top: 10px;
	padding-bottom: 10px;
	width: 100%;
}
.container
{
	background-color: skyblue;
	width: 400px;
	padding-top: 70px;
	padding-bottom: 70px;
}

</style>




</head>
<body>





<header class="header">

	
	<a href="exp.php">ADD TEACHER</a>
	<div class="Logout">
		<a  href="studentlogout.php" class="btn btn-primary">Logout</a>
	</div>
</header>
<?php

include'Teachersidebar.php';




?>


<center>
	<h1>LIST OF TEACHERS </h1>

	<div id="container">

	<form action="teachercategory.php" method="post">
	<div class="container">
<label> username</label>
<input type="text" name="username">
<br><br>

<label> Email</label>
<input type="text" name="email">
<br><br>

<label> Phone</label>
<input type="text" name="phone">
<br><br>



<label> password</label>
<input type="password" name="password">

<br>


<br>

<button class="btn btn-primary">Add Teacher</button>
</div>
</form>
</div> 
</center>
</body>
</html>
	
