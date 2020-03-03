<?php
	include ('connection.php');
	$date=$_GET['date'];
	$movieid=$_GET['movieid'];
	//echo $date;
	//echo $movieid;
	$sql="select * from shows where movie_id='".$movieid."' and show_start_date<='".$date."'  and show_end_date>='".$date."'";
	$query=mysqli_query($con,$sql);
	if (mysqli_num_rows($query))
	{
			echo "<table class='table table-dashed'>
			<tr>
						<th class='text-primary'>Theatre</th>
						<th class='text-primary'colspan='0'>Showtime</th>
						<th colspan='5' class='text-center text-primary'>Rates</th>
					</tr>
					<tr>
						<th colspan='2'></th>
						<th>GOLD FULL</th>
						<th>GOLD HALF</th>
						<th>ODC FULL</th>
						<th>ODC HALF</th>
						<th>BOX</th>
					</tr>";
		while($a=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{	
			$showid=$a['show_id'];
			$theatreid=$a['theatre_id'];
			$sql1="select * from theatre where theatre_id=".$theatreid;
			$query1=mysqli_query($con,$sql1);
			$b=mysqli_fetch_array($query1,MYSQLI_ASSOC);
			
			?>
					
				 
					<tr>
						<td><?php echo $b['theatre_name']; ?></td>
						<td><?php echo $a['show_start_time']; ?></td>
						<td><?php echo "Ksh. ". $a['gold_full']; ?></td>
						<td><?php echo "Ksh. ".$a['gold_half']; ?></td>
						<td><?php echo "Ksh. ". $a['odc_full']; ?></td>
						<td><?php echo "Ksh. ".$a['odc_half']; ?></td>
						<td><?php echo "Ksh. ".$a['box']; ?></td>
	
						<?php 
						if (isset ($_SESSION['movieuser']))
						{
							echo '<td><a href="index.php?page=bookticket" class="btn btn-primary" > Book Tickets </a></td>';
	
							}
					else{
						echo "<td><li><a href='#' data-toggle='modal' data-target='#log' class='btn btn-primary' > Book Tickets </a></li></td>";
						
								}
						?>
						  </tr>
		<?php }
				 	
	}
	
	else 
	{
		echo "<h3 class='text-center text-danger'>No shows found for the selected date. Please try again</h3>";
	}
	echo "</table>";
?>
