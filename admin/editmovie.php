<?php
	$movieid=$_GET['movieid'];
	//echo $movieid;
	$sql1="select * from movies where movie_id=".$movieid;
	$query1=mysqli_query($con,$sql1);
	$a=mysqli_fetch_array($query1,MYSQLI_ASSOC);
	$movie=$a['movie_name'];
	$movieimage=$a['movie_image'];
?>
<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<h2 class="text-center" style="text-decoration:underline"> Edit Movie </h2>
		<?php echo @$msg ?>
		 <form role="form" method="post" enctype="multipart/form-data">
		 
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
						
						  <label for="movie">Old Movie Name:</label>
						  <input type="text" class="form-control" id="movie" name="movie" 
						  value="<?php echo $movie ?>"						  readonly>
					   </div>
				   </div>
				   <div class="col-sm-6">
						<div class="form-group">
						
						  <label for="movie">New Movie Name:</label>
						  <input type="text" class="form-control" id="movie" name="newmovie" 
						  placeholder="Enter movie name"   value="<?php echo $movie ?>">
					   </div>
				   </div>
				  </div>
			    
			   <div class="row">
				   <div class="col-sm-6">
					<?php echo "<img src='images/$movie/$movieimage' class='img img-responsive  img-thumbnail' 
					style='max-width:100px'		alt='No Image'/>"?>
				   </div>
				   <div class="col-sm-6">
					   <div class="form-group">
						  <label for="poster">Movie Poster:</label>
						  <input type="file" class="form-control"    
						  id="poster" name="image">
						   
					   </div>
				   </div>
			   </div>  
			    
			   <div class="form-group">
				  <label for="details">Movie Details:</label>
				  <textarea class="form-control" rows="5" id="details" 
				  name="details"  >
				  <?php echo $a['movie_details']; ?>
				  </textarea>
				</div>
				<div class="form-group">
				  <label for="cast">Cast</label>
				  <textarea class="form-control" rows="5" id="cast" name="cast" required="required">
				  <?php echo $a['movie_cast']; ?>
				  </textarea>
				</div>
				<div class="form-group">
				  <label for="facts">Facts</label>
				  <textarea class="form-control" rows="5" id="facts" name="facts" required="required">
				  <?php echo $a['movie_facts']; ?>
				  </textarea>
				</div>
				<div class="row">
				<div class="col-sm-6">
					<?php echo"<iframe  src=".$a['movie_embed']." 
							frameborder='0'></iframe>";?>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
					  <label for="embed">Paste Link from Youtube</label>
					  <input type="text" name="embed" class="form-control" value="https://www.youtube.com/embed/"/>
					</div>
				</div>
				<div class="col-sm-6">
					  
				</div>
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-sm-6">
							<div class="form-group">
					<label>Movie Ratings</label>
					<select name="ratings" class="form-control">	
						<option>No Selection</option>
						<option value=1.0>1.0</option>
						<option value=1.5>1.5</option>
						<option value=2.0>2.0</option>
						<option value=2.5>2.5</option>
						<option value=3.0>3.0</option>
						<option value=3.5>3.5</option>
						<option value=4.0>4.0</option>
						<option value=4.5>4.5</option>
						<option value=5.0>5.0</option>
					</select>
			   </div>
						</div>
						<div class="col-sm-3"></div>
					 
					 
					</div>
        </div>
        <div class="modal-footer">
			<input type="submit" class=" btn btn-primary" value="Edit Movie" name="edit"/>
			</form> 
	</div>
	<div class="col-sm-2">
	</div>
</div>
<?php
	extract ($_POST);
	if (isset($edit))
	{	$img=$_FILES['image']['name'];
		if ($img!="")
		{
			if (file_exists("images/$movie/$movieimage"))
			{
				unlink("images/$movie/$movieimage");
			}
			move_uploaded_file($_FILES['image']['tmp_name'],"images/$movie/".
			$_FILES['image']['name']);
			$sql3="update movies set movie_image='".$_FILES['image']['name']."' where movie_id=".$movieid;
			mysqli_query($con,$sql3);
		}
		
	
		
		
		$sql2="update movies set movie_name='".$newmovie."',movie_details='".$details."'
		,movie_cast='".$cast."',movie_facts='".$facts."'
		,movie_embed='".$embed."' where movie_id=".$movieid;
		if(mysqli_query($con,$sql2))
		{
		rename ("images/$movie","images/$newmovie");
		//$msg='<h3 class="text text-primary text-center">Movie Updated</h3>';
		header ("location:index.php?page=movies");
		}
		else 
		{
		echo mysqli_error($con);
		}
	}
	
?>