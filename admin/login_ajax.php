<?php
session_start();
include('../connection.php');
extract($_POST);
extract($_GET);
if(!empty($email_id))
{	
//$pass=md5($password);
	
	$r="select * from admin where user_name='$email_id' and password='$password'";
	$select=mysqli_query($con,$r);
	if(mysqli_num_rows($select)>0)
	{			
	$_SESSION['user']=$email_id;
	echo "<script>window.location='index.php'</script>";
	}
	else
	{
		echo "Sorry, wrong password or username ";
	}
}
?>