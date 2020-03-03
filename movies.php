<?php
	$sql="select * from movies ";
	$query=mysqli_query($con,$sql);
	
?>
<html>
 <head>
	<style>
		.header{
			background-color:white;
			background-image:none;
		}
		{
			margin:0px;
			padding:0px;
		}
	</style>
 </head>
<body>
	<div class="container-fluid">
	 <br>
			<h1 class="text-center" style="text-decoration:undeline;">  Movies </h1>
	 
		<div class="row">
		<?php
			while($a=mysqli_fetch_array($query,MYSQLI_ASSOC))
			{
				$movie=$a['movie_name'];
				$image=$a['movie_image'];
		?>
		<div class="col-sm-3">
				<div class="well">
					<?php echo "<a  href='index.php?page=buyticket&movieid=".$a['movie_id']."'><p class='text-center'><img src='admin/images/$movie/$image' class='img img-responsive img-thumbnail'
					alt='No Image'/></p></a>";
					echo "<a href='index.php?page=buyticket&movieid=".$a['movie_id']."'>
					<h3 class='text-center bg-primary text-justified' 
					style='text-decoration:underline;'><label>". $movie."</label></h3></a>";	
					echo "<h4 class='text-center text-justified'><label>Ratings : </label>". $a['movie_ratings'].
					"/ 5</h5>";	?>
					<?php 
					if (isset($_SESSION['movieuser']))
					{
					echo '<p class="text-center"><a href="index.php?page=bookticket" class="btn btn-danger btn-lg">
					Book Tickets</a> </p>';
					}
					else
					{
						 
					}
				 
					?>
				</div>
			</div>
	<?php } ?>
			
		</div>
	</div>
	
</body>
</html>