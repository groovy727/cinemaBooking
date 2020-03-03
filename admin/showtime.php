  	<!--<link rel="stylesheet" href="public/css/reset.css" type="text/css">-->
        <link rel="stylesheet" href="../public/css/default.css" type="text/css">
       <!-- <link rel="stylesheet" href="public/css/style.css" type="text/css">-->
		  <script type="text/javascript" src="../js/jquery-1.12.0.js"></script>
        <script type="text/javascript" src="../js/zebra_datepicker.js"></script>
        <script type="text/javascript" src="../js/core.js"></script>
    
<script>
 
  $(document).ready(function() {
	$('#start_date').Zebra_DatePicker({
    // remember that the way you write down dates
    // depends on the value of the "format" property!
    //direction: [startdate,enddate]
});
  }); 
  $(document).ready(function() {
	$('#end_date').Zebra_DatePicker({
    // remember that the way you write down dates
    // depends on the value of the "format" property!
    //direction: [startdate,enddate]
});
  });
 
 
				 
		 
		
		</script>
  <?php
	if(isset($_POST['delete']))
	{
		$showid=implode(',',$_POST['showid']);
		//echo $showid;
		 
		 
		
		//delete row in category table
		$data="delete from shows WHERE show_id in(".$showid.")";
		if(mysqli_query($con,$data))
		{
			header('location:index.php?page=showtime');
		}
		
	}
	extract($_POST);
	//fetch data from theatre table
	$data="SELECT * FROM theatre";
	$val=mysqli_query($con,$data);
	
	//fetch data from movies table
	$data1="SELECT * FROM movies";
	$val1=mysqli_query($con,$data1);
?>
<div class="row">
	<div class="col-sm-12 text-center">
	   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Show </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Showtime</h4>
        </div>
        <div class="modal-body">
			 <form role="form" method="post"  enctype="multipart/form-data">
				<div class="form-group">
				<label>Select Theatre first:</label>
					 <div class="dropdown">
							<select name="theatreid1" class="form-control" required>
								<?php
									while($r=mysqli_fetch_array($val,MYSQLI_BOTH))
									{
										echo "<option value='".$r['theatre_id']."'>".$r['theatre_name']."</option>" ;
									}
								?>
							</select>
					  </div>		
					 <br/>
					 
					 <div class="form-group">
				<label>Select Movie:</label>
					 <div class="dropdown">
							<select name="movieid1" class="form-control" required>
							<?php
								while($x=mysqli_fetch_array($val1,MYSQLI_BOTH))
								{
									echo "<option value='".$x['movie_id']."'>".$x['movie_name']."</option>" ;
								}
							?>
								 
							</select>
					  </div>		
					 <br/>
					 
						
						  
						  <div class="row">
							   
							  <div class="col-sm-3">
							  </div>
							  <div class="col-sm-3">
								<label for="start_date">Show Start Date:</label>
								 <input type="text" class="form-control" id="start_date" name="start_date" required>
							  </div>
							  <div class="col-sm-3">
								<label for="end_date">Show End Date:</label>
								 <input type="text" class="form-control" id="end_date" name="end_date" required>
							  </div>
							  <div class="col-sm-3">
							  </div>
						</div>
					   
				</div>
				<div class="form-group">
				
						  <div class="row">
							   
							  <div class="col-sm-3">
							  </div>
							  <div class="col-sm-3">
								<label for="start_time">Show Start Time:</label>
								 <input type="time" class="form-control" id="start_time" name="start_time" required>
							  </div>
							  <div class="col-sm-3">
								<label for="end_time">Show End Time:</label>
								 <input type="time" class="form-control" id="end_time" name="end_time" required>
							  </div>
							  <div class="col-sm-3">
							  </div>
						</div>
					   
				</div><label>Set Price</label>
					<div class="form-group">
				
						  <div class="row">
							   
							  <div class="col-sm-1">
							  </div>
							  <div class="col-sm-2">
								<label for="gold_full">Gold Full:</label>
								 <input type="number" class="form-control" id="gold_full" name="gold_full" required>
							  </div>
							  <div class="col-sm-2">
								<label for="gold_half">Gold Half:</label>
								 <input type="number" class="form-control" id="gold_half" name="gold_half" required>
							  </div>
							  <div class="col-sm-2">
								<label for="odc_full">ODC Full:</label>
								 <input type="number" class="form-control" id="odc_full" name="odc_full" required>
							  </div>
							  <div class="col-sm-2">
								<label for="odc_half">ODC Half:</label>
								 <input type="number" class="form-control" id="odc_half" name="odc_half" required>
							  </div>
							  <div class="col-sm-2">
								<label for="box">BOX:</label>
								 <input type="number" class="form-control" id="box" name="box" required>
							  </div>
							  
						</div>
					   
				</div>
						 
						 
				<input type="submit" class=" btn btn-primary" value="Add" name="add"/>
				<!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
		  </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</div>
	  <h3> Show Timings</h3>
	<form method="post">
		
	   <input type="submit" class="btn btn-primary" name="delete" value="Delete Selected"/> 
		<br><br>
			<table class="table table-striped">
				<tr class="warning">
					<th class='text-center'>	S.No.		</th>
					<th class='text-center'>	Theatre</th>
					<th class='text-center'>	Movie </th>
 
					<th class='text-center'>	Start/End Date      </th>
					<th class='text-center'>	Start/End Time      </th>
					<th class='text-center'>	GOLD FULL      </th>
					<th class='text-center'>	GOLD HALF      </th>
					<th class='text-center'>	ODC FULL    </th>
					<th class='text-center'>	ODC HALF     </th>
					<th class='text-center'>	BOX     </th>
					<th class='text-center'>	Delete		</th>
					<th class='text-center'>	Modify		</th>
					<th class='text-center'>	Show Id		</th>

				</tr>	
				<?php
					$sql="select * from shows";
					$query=mysqli_query($con,$sql);
					$i=1;
					while($a=mysqli_fetch_array($query,MYSQLI_ASSOC))
					{
						 $theatreid=$a['theatre_id'];
						 $movieid=$a['movie_id'];
						 $p="select * from theatre where theatre_id=".$theatreid;
						 $q=mysqli_query($con,$p);
						 $r=mysqli_fetch_array($q);
						 $theatre=$r['theatre_name'];
						 
						  
						 $s="select * from movies where movie_id=".$movieid;
						 $t=mysqli_query($con,$s);
						 $u=mysqli_fetch_array($t);
						 $movie=$u['movie_name'];
						 
						 
						echo "<tr >";
							echo"<td >".$i."</td>";
							echo"<td>".$theatre."</td>";
							echo"<td>".$movie."</td>";
							echo"<td>".$a['show_start_date']."/".$a['show_end_date']."</td>";
							echo"<td>".$a['show_start_time']."/".$a['show_end_time']."</td>";
							echo"<td>Ksh. ".$a['gold_full']."</td>";
							echo"<td>Ksh. ".$a['gold_half']."</td>";
							echo"<td>Ksh. ".$a['odc_full']."</td>";
							echo"<td>Ksh. ".$a['odc_full']."</td>";
							echo"<td>Ksh. ".$a['box']."</td>";
							
						 
							echo "<td> <input type='checkbox' name='showid[]' value='".$a['show_id']."'/></td>";
							echo "<td> <a href='index.php?page=editshow&showid=".$a['show_id']."'>Edit</a></td>";
							echo"<td><title='Check Show details'>".$a['show_id']."</a></td>";

						echo "</tr>";
						$i++;
					}
				?>
			</table>
			<input type="submit" class="btn btn-primary" name="delete" value="Delete Selected"/> 
		</form>
		<hr>
	</div>	   
</div>	   
 
 
<?php
 if(isset($add))
	{	
		 
		 
		//Insert values in shows table
		
		$query="INSERT INTO shows VALUES ('', '".$start_date."','".$end_date."','".$start_time."',		
		'".$end_time."','".$theatreid1."','".$movieid1."','".$odc_full."','".$odc_half."','".$gold_full."'
		,'".$gold_half."','".$box."')";		 
		
		if($y=mysqli_query($con,$query))
		{
			header('location:index.php?page=showtime');
		}
		else
		{
			$msg="<h1>ShowTime can not be added</h1>";
		}
	}
	?>