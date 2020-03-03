<body>


<?php
	//echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>hello";
	include ('connection.php');
	$email=$_GET['email'];
	//echo "<br><br><br><br>".$email;
	//echo gettype($email);
	$sql="update users set status='ACTIVE' where user_email='".$email."'";
	//echo $sql;
	if(mysqli_query($con,$sql))
	{
		echo "<br><br><br><br><br><h2 class='text text-success text-center '><br><br><br><br>Your account has been activated. Please login to book tickets.</h2>";
	
	}
	else
	{
		echo "<h2 class='text text-primary '>Failed</h2>".mysqli_error($con);
	}
	echo "<br><br><br><br><br><br><br><br><br><br>";
?>
</body>
<style>
.header{
background-color:white;
 background-image:none;
 }
 </style>
 
 