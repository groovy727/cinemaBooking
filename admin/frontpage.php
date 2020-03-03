<?php
	$sql="select * from movies ";
	$query=mysqli_query($con,$sql);
	while ($a=mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
		$movie=$a['movie_name'];
		$image=$a['movie_image'];
?>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-4">
				<?php echo "<img src='images/$movie/$image' class='img img-thumbnail imag-responsive' alt='No Image'/>"?>
			</div>
			<div class="col-sm-4">
				<h2 class="text-center"><?php echo $movie ?> </h2>
				<label>Details :</label> <?php echo $a['movie_details'] ?><br>
				<label>cast :</label> <?php echo $a['movie_cast']; ?><br>
				<label>Ratings :</label> <?php echo $a['movie_ratings']."/5"; ?><br>
				<label>Facts :</label> <?php echo $a['movie_facts']; ?>
				<?php 
					if ($a['status']==0)
				{?>
				<a href="<?php echo'index.php?page=activate&movieid='.$a['movie_id']; ?>"	class="btn btn-primary">
				Activate</a>
				<?php
					}
					else {
						echo '<a href="#" class="btn btn-danger">Activated</a>';
					}
				?>
			</div>
		</div>
<?php
	}
?>
