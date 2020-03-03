<?php
$sql="select * from movies";
$query=mysqli_query($con,$sql);


?>
<html>
<head>

<style>
.header{
background-color:white;
 background-image:none;
 }
</style>
</head>
<body>
<br>
<br>
<div class="row">

	<div class="col-sm-4">
		<?php
			echo "<h2 class='text-center'>Welcome ".$_SESSION['movieuser']."</h2>";			
		?>
	</div>
	<div class="col-sm-8">
		<div class="btn-group">
		
			<?php
				echo '<a href="index.php?page=editprofile&userid='.$_SESSION['movieuser'].'">
				<button class="btn btn-warning btn-lg" padding="100px">  Edit Profile  </button></a>';
				echo '<a href="index.php?page=bookinghistory">
				<button class="btn btn-danger btn-lg" padding="100px">My Booking History</button></a>';
				echo'<a href="index.php?page=bookticket"><button class="btn btn-warning btn-lg" padding="100px">Book Tickets Now</button></a>';
			?>
		</div>
	</div>
</div>
 <div class="container">
  <div class="row">
	<?php
		while($a=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$movie=$a['movie_name'];
			$poster=$a['movie_image'];
			echo '<div class="col-sm-4">';
			echo '<div class="panel panel-primary">';
			echo '<div class="panel-heading"><h4 class="text-center">'.$movie.'</h4></div>';
			echo '<div class="panel-body">';
			echo "<img src='admin/images/$movie/$poster'
			class='img-responsive' style='width:100%; height:auto; max-width:350px; max-height:350px;' alt='Movie Image'></div>";
			echo '<div class="panel-footer"><a href="index.php?page=buyticket&movieid='.$a['movie_id'].'"><button class="btn btn-warning">Buy Tickets</button></a></div>';
			echo '</div></div>';
		}
	?>
     </div>
  </div>
 
</body>