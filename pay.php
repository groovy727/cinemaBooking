<?php
include ('connection.php');
session_start();
$bookingid=$_SESSION['bookingid'];
echo $bookingid;
extract($_POST);
		if(isset ($paynow))
		{
			$sql6="update booking set status='BOOKED' where booking_id=".$bookingid;
			//echo "<br><br><br>".$sql6;
			if(mysqli_query($con,$sql6))
			{
				header('location:index.php?page=success');
			}
			else
			{
				echo"<h1 style='align=center'>Sorry! Your ticket has not been booked</h1>";
			}
			
			//header('location:index.php');
		}
?>