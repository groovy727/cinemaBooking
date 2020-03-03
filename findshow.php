<?php 
include('connection.php');
$movieid=$_GET['movieid']; 
$theatreid=$_GET['theatreid']; 
//echo "movie id=".$movieid,"<br><br>";
//echo $theatreid;
 $sql="select * from shows where movie_id=".$movieid." and theatre_id=".$theatreid;
 $query=mysqli_query($con,$sql);
 echo "<option>Select Show Time</option>";
 while($a=mysqli_fetch_array($query,MYSQLI_ASSOC))
 {
	 echo "<option value='".$a['show_id']."'>".$a['show_start_time']."</option>";
 }
 