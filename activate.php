<?php 
	$movieid=$_GET['movieid'];
	//echo $movieid;
	$sql="select *  FROM movies";
	$query=mysqli_query($con,$sql);
	while($a=mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
		$id=$a['movie_id'];
		//echo $id;
		$sql1="update movies set status=0 where movie_id=".$id;
		$query1=mysqli_query($con,$sql1);
	}
	$sql2="update movies set status=1 where movie_id=".$movieid;
		$query2=mysqli_query($con,$sql2);
		header('location:index.php?page=frontpage');
	
?>


