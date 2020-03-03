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
	$showid=$_GET['showid'];
	//echo $showid;
	$sql1="select * from shows where show_id =".$showid;
	$query1=mysqli_query($con,$sql1);
	$a=mysqli_fetch_array($query1,MYSQLI_ASSOC);
	$movieid=$a['movie_id'];
	//echo $movieid;
	$theatreid=$a['theatre_id'];
	//echo $theatreid;
		
		
		$sql2="select * from movies";
		$query2=mysqli_query($con,$sql2);
		
		
		$sql3="select * from theatre ";
		$query3=mysqli_query($con,$sql3);
		
?>
<h2 class="text-center text-primary" style="text-decoration:underline;">Edit Show</h2>
<div class="row">
	<div class="col-sm-2">
		
	</div>
	<div class="col-sm-8">
		<form method="post">
		<div class="row">
			<div class="col-sm-6">
				<label>Select Theatre first:</label>
						 <div class="dropdown">
								<select name="theatreid2" class="form-control">
									<?php
										while($c=mysqli_fetch_array($query3,MYSQLI_ASSOC))
										{
											echo "<option value='".$c['theatre_id']."'>".$c['theatre_name']."</option>" ;
										}
									?>
								</select>
						  </div>	
			</div>
		<div class="col-sm-6">
			 <div class="form-group">
				<label>Select Movie:</label>
					 <div class="dropdown">
						<select name="movieid2" class="form-control">
						<?php
							while($b=mysqli_fetch_array($query2,MYSQLI_ASSOC))
							{
								echo "<option value='".$b['movie_id']."'>".$b['movie_name']."</option>" ;
							}
						?>
								 
						</select>
					</div>	
				</div>
		</div>
		</div>
		<div class="row">
			 <div class="col-sm-6">
				<label for="start_date">Show Start Date:</label>
				 <input type="text" class="form-control" id="start_date" name="new_start_date"
								 value="<?php echo $a['show_start_date'] ?>">
			</div>
			<div class="col-sm-6">
				<label for="end_date">Show End Date:</label>
				<input type="text" class="form-control" id="end_date" name="new_end_date"
				 value="<?php echo $a['show_end_date'] ?>">
		 </div>
							   
		</div>
					   
				 <div class="row">						   
					<div class="form-group">
					  <div class="col-sm-6">
						<label for="start_time">Show Start Time:</label>
						 <input type="time" class="form-control" id="start_time" name="new_start_time"
						 value="<?php echo $a['show_start_time'] ?>">
					  </div>
					<div class="col-sm-6">
						<label for="end_time">Show End Time:</label>
						 <input type="time" class="form-control" id="end_time" name="new_end_time"
						 value="<?php echo $a['show_end_time'] ?>">
					 </div>
					</div>
			   </div>
			   <label class="text-center"> Set Price</label>
			   <div class="row">						   
					<div class="form-group">
					    <div class="col-sm-1">
							  </div>
							  <div class="col-sm-2">
								<label for="gold_full">Gold Full:</label>
								 <input type="number" class="form-control" id="gold_full" 
								 value="<?php echo $a['gold_full'] ?>" name="gold_full" required>
							  </div>
							  <div class="col-sm-2">
								<label for="gold_half">Gold Half:</label>
								 <input type="number" class="form-control" id="gold_half"
								value="<?php echo $a['gold_half'] ?>" 	 name="gold_half" required>
							  </div>
							  <div class="col-sm-2">
								<label for="odc_full">ODC Full:</label>
								 <input type="number" class="form-control" id="odc_full" 
								 value="<?php echo $a['odc_full'] ?>" name="odc_full" required>
							  </div>
							  <div class="col-sm-2">
								<label for="odc_half">ODC Half:</label>
								 <input type="number" class="form-control" id="odc_half" 
								 value="<?php echo $a['odc_half'] ?>" name="odc_half" required>
							  </div>
							  <div class="col-sm-2">
								<label for="box">BOX:</label>
								 <input type="number" class="form-control" id="box" 
								 value="<?php echo $a['box'] ?>" name="box" required>
							  </div>
					
					 </div>
					</div>
			    
						 <br>
						 
				<p class="text-right">
				<input type="submit" class=" btn btn-primary text-center" value="Edit" name="edit"/>
				</p>
				</form>
	</div>
	<div class="col-sm-2">
		
	</div>

</div>
<?php
	extract ($_POST);
	if (isset($edit))
	{
		$sql5="update shows set show_start_date='".$new_start_date."', show_end_date='".$new_end_date."', 
		show_start_time='".$new_start_time."', show_end_time='".$new_end_time."', movie_id='".$movieid2."', 
		theatre_id='".$theatreid2."', odc_full='".$odc_full."',odc_half='".$odc_half."',
		gold_full='".$gold_full."', gold_half='".$gold_half."', box='".$box."'	where show_id='".$showid."'";
		$query5=mysqli_query($con,$sql5);
		header('location:index.php?page=showtime');
	}
?>