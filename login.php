<?php
	session_start();
	include('connection.php');
	extract ($_POST);
	echo $username ."<br/>";
	echo $password ."<br/>";
	if (isset($login1))
	{$password=md5($password);
echo $password ."<br/>";
		$sql="select * from users where user_email='$username' and user_password='$password'";
		echo $sql;
		$query=mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
		// If result matched $username and $password, table row must be 1 row
		  if($count==1)
		  {	
			$a=mysqli_fetch_array($query,MYSQLI_ASSOC);
			 $_SESSION['user'] = $username;
			 $_SESSION['userid'] = $a['user_id'];
			 
			 echo "done";
			 header("location:index.php?page=dashboard");
		  }
		  else
		  {
			 echo "Your Login Name or Password is invalid";
		  }
	}
?>