<?php 
	$email=$_SESSION['movieuser'];;
	$sql="select user_id from users where user_email='".$email."'";
	$query=mysqli_query($con,$sql);
	$a=mysqli_fetch_array($query,MYSQLI_ASSOC);
	$userid=$a['user_id'];
	$sql1="select * from booking where user_id='".$userid."' and status='BOOKED' order by booking_id desc";
	$query1=mysqli_query($con,$sql1);	
?> 
<style>
.header{
background-color:white;
 background-image:none;}
</style>
	<div class="container">
		<br>
		<br>
		
		<h1 class="text-center" style="background-color:black; color:white;">My Booking History</h1>
		<?php
		 
			if(mysqli_num_rows($query1))
			{ 	
				echo "<table class='table table-responsive table-dashed'>";
				echo"<tr  >";
					echo"<th class='text-center'>Sl.No.</th>";
					echo"<th class='text-center'>Movie</th>";
					echo"<th class='text-center'>Theatre</th>";
					echo"<th class='text-center'>Show Date</th>";
					echo"<th class='text-center'>Show Time</th>";					
				echo"</tr>";
				$i=1;
				 while($a=mysqli_fetch_array($query1,MYSQLI_ASSOC))
				 {	
					$showid=$a['show_id'];
					$sql2="select * from shows where show_id='".$showid."'";
					$query2=mysqli_query($con,$sql2);
					$b=mysqli_fetch_array($query2,MYSQLI_ASSOC);
					$movieid=$b['movie_id'];
					$theatreid=$b['theatre_id'];
					$showdate=$b['show_start_date'];
					$showtime=$b['show_start_time'];
					 
					
					
					//code to get movie name
					$sql3="select * from movies where movie_id='".$movieid."'";
					$query3=mysqli_query($con,$sql3);
					$c=mysqli_fetch_array($query3,MYSQLI_ASSOC);
					$movie=$c['movie_name'];
					
					//code to get theatre name
					$sql4="select * from theatre where theatre_id='".$theatreid."'";
					$query4=mysqli_query($con,$sql4);
					$d=mysqli_fetch_array($query4,MYSQLI_ASSOC);
					$theatre=$d['theatre_name'];
					
					
					 ?>
						<tr class="text-center">
							<td><?php echo $i; ?>	</td>
							<td><?php echo $movie; ?>	</td>
							<td><?php echo $theatre; ?>	</td>
							<td><?php echo $showdate; ?>	</td>
							<td><?php echo $showtime; ?>	</td>
							 
						</tr>
						
					 <?php
					 $i++;
				 }
				 echo "</table><br><br><br><br>";
				 
			}
			else
			{
				echo"<h2 class='text text-center text-danger'>No History found</h3>";
			}
		?>
	</div>
	