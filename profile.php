<?php
session_start();
include "dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
</head>
<body style="background-color: #004528; color:white ">
	<div class="container">
	    <div class="wrapper">
			<h2 style="text-align: center;">My Profile</h2>
			<div style='text-align: center'>
				<img src=".\IMAGES\p.jpg"  height=110 width=120>
			</div>
			<div style="text-align: center;"> <b>Welcome, </b>
	 			<h4>
	 				<?php
					 echo $_SESSION['Username'];
					 ?>
	 			</h4>
 			</div>
			 <?php
				$Username = $_SESSION['Username'];
				
				$Username_search = "select * from registration where email = '$Username' ";
				
				
				$query = mysqli_query($con,$Username_search);
				$row = mysqli_fetch_assoc($query);
				echo $row; 
				exit();
 				
 			?>
			<div>
			   <?php
                  echo $row['Username'];
			   ?>
			</div>
			<div>
			   <?php
                  echo $row['email'];
			   ?>
			</div>
			<div>
			   <?php
                  echo $row['phone_number'];
			   ?>
			</div>
			<div>
			   <?php
                  echo $row['branch'];
			   ?>
			</div>
			<div>
			   <?php
                  echo $row['year'];
			   ?>
			</div>
			<div>
			   <?php
                  echo $row['domain'];
			   ?>
			</div>
		
		</div>
	</div>
</body>
</html>