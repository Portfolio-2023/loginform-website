
<?php


$data=mysqli_connect("localhost","root","","weblogin");
$sql="SELECT*FROM courses";
$result=mysqli_query($data,$sql);


?>




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







</head>
<body>





<header class="header">

	
	<a href="">ADMISSION REQUEST</a>
	<div class="Logout">
		<a  href="studentlogout.php" class="btn btn-primary">Logout</a>
	</div>
</header>
<?php

include'admissionsidebar.php';




?>



	<h1>List of courses</h1>
	<table border="1px" >
		<tr >
			<th style="padding: 20px; ,font-size: 15px;">S/Na:</th>
			<th style="padding: 20px; ,font-size: 15px;">COMPUTERSCIENCE</th>
			
		</tr>
		<?php
         while ($info=$result->fetch_assoc()) {
         	// code...
        



		?>

		<tr>
			<td style="padding:20px"><?php  echo "{$info['id']}";?></td>
			<td style="padding:20px"><?php  echo "{$info['COMPUTERSCIENCE']}";?></td>
			
			
			
		</tr>
       <?php

   }


       ?>
          


	</table>

</div>
</body>
</html>