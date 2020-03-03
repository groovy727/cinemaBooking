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

	
	<form method="post">
		
	   
			<table class="table table-bordered">
				<tr class="info">
					<th class='text-center'>S.No</th>
 					<th class='text-center'>Name</th>
					<th class='text-center'>Email</th>
					<th class='text-center'>Mobile</th>
					<th class='text-center'>City</th>
					<th class='text-center'>State</th>
					<th class='text-center'>Address</th>
					
				</tr>	
				<?php
					$sql="select * from users";
					$query=mysqli_query($con,$sql);
					$i=1;
					while($a=mysqli_fetch_array($query,MYSQLI_ASSOC))
					{
						 
							echo "<tr >";
							echo"<td >".$i."</td>";
			echo"<td >".$a['user_fname']." ".$a['user_lname']."</td>";
							
							echo"<td >".$a['user_email']."</td>";
							echo"<td >".$a['user_mobile']."</td>";
							echo"<td >".$a['user_city']."</td>";
							echo"<td >".$a['user_district']."</td>";
							echo"<td >".$a['user_address']."</td>";
							//echo"<td >".$a['status']."</td>";
							
							//echo"<td ><a href=''><span class='glyphicon glyphicon-share' style='color:green' ></span></a></td>";
							//echo"<td ><a href=''><span class='glyphicon glyphicon-remove' style='color:Red' ></span></a></td>";
						echo "</tr>";
						$i++;
					}
				?>
			</table>
			
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