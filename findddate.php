<?php 
include('connection.php');
$theatreid=$_GET['theatreid']; 
$query  = mysqli_query($con,"SELECT * from shows WHERE theatre_id=".$theatreid);	
while($e = mysqli_fetch_array($query,MYSQLI_ASSOC))
{
	 $movieid[]=$e['movie_id'];	
}
@$count=count($movieid);
	//echo $count;
	for($i=0;$i<$count;$i++)
	{
		 for ($j=0;$j<$count;$j++)
		 {
			 if ($i!=$j)
			 {
				if (@$movieid[$i]==@$movieid[$j]) 
				{
					unset ($movieid[$j]);
				}
			 }
		 }
	}
	// echo "<select>";
	foreach($movieid as $y)				
	{					
		$sql2="select * from movies where movie_id=".$y;
		$query2=mysqli_query($con,$sql2);
			echo "<option>Select Movie</option>" ;
		while ($c=mysqli_fetch_array($query2,MYSQLI_ASSOC))
		{
			echo "<option value=".$c['movie_id'].">",$c['movie_name']."</option>" ;
		}
		
	}		
	// echo "</select>";	
?>
