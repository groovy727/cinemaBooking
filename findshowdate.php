<?php 
include('connection.php');
$showid=$_GET['showid'];  
 
$sql=mysqli_query($con,"select * from shows where show_id=".$showid);
$a=mysqli_fetch_array($sql,MYSQLI_ASSOC);
$date=$a['show_start_date'];
$y=$a['show_end_date'];
$time=$a['show_start_time'];

date_default_timezone_set("Asia/Kolkata");
 $present=date('Y-m-d H:i:s');
 $present1=date('Y-m-d');
  
 
	$showinfo=$date. " ".$time;
	 
	$to_time = strtotime($present);
	$from_time = strtotime($showinfo);
	 
	if ($to_time > $from_time)
	{	 
		//echo "<br>current_time is larger";
		 $date=$present1;
	 }
	 
 ?>
 
<input id="startdate" class="form-control"  type="hidden" value="<?php echo $date ?>" >
<input id="enddate" class="form-control"  type="hidden" value="<?php echo $y ?>" >
 