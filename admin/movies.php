 <?php
	if(isset($_POST['delete']))
	{
		foreach($movie as $x)
		{
			$sql2="select * from movies where movie_id=".$x;
			$query2=mysqli_query($con,$sql2);
			$v=mysqli_fetch_array($query2,MYSQLI_ASSOC);
			$delmovie=$v['movie_name'];
			$delimage=$v['movie_image'];
			unlink("images/$delmovie/$delimage");
			rmdir("images/$delmovie");
		}
		$movieid=implode(',',$_POST['movieid']);
		//echo $movieid;
		//select multiple category name
		$sql="select * from movies where movie_id in(".$movieid.")";
		$query=mysqli_query($con,$sql);
		
		
		//delete row in category table
		$data="delete from movies WHERE movie_id in(".$movieid.")";
		if(mysqli_query($con,$data))
		{
			
			while($b=mysqli_fetch_array($query))
			{	
				//delete multiple category directories
				$moviename= $b['movie_name'];
				$movieimage=$b['movie_image'];
				unlink("images/$moviename/$movieimage");
				rmdir("images/$moviename");
			}
		}
		header('location:index.php?page=movies');
	}
?>
<body style="margin:30px;">
<div class="row">
	<div class="col-sm-12 text-center">
	   
	  
	  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add New Movie</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Add Movie</h2>
        </div>
        <div class="modal-body">
            
			<form role="form" method="post" enctype="multipart/form-data">
				<div class="form-group">
				  <label for="movie">Movie Name:</label>
				  <input type="text" class="form-control" id="movie" name="movie" 
				  placeholder="Enter movie name" required="required">
			   </div>
			   <div class="form-group">
				  <label for="poster">Movie Poster:</label>
				  <input type="file" class="form-control" id="poster" name="poster1" required="required">
				   
			   </div>
			    
			   <div class="form-group">
				  <label for="details">Movie Details:</label>
				  <textarea class="form-control" rows="5" id="details" name="details" required="required"></textarea>
				</div>
				<div class="form-group">
				  <label for="cast">Cast</label>
				  <textarea class="form-control" rows="5" id="cast" name="cast" required="required"></textarea>
				</div>
				<div class="form-group">
				  <label for="facts">Facts</label>
				  <textarea class="form-control" rows="5" id="facts" name="facts" required="required"></textarea>
				</div>
				<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
					  <label for="embed">Paste Link from Youtube</label>
					  <input type="text" name="embed" class="form-control" value="https://www.youtube.com/embed/"/>
					</div>
				</div>
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
        </div>
        <div class="modal-footer">
			<input type="submit" class=" btn btn-primary" value="Add Movie" name="add"/>
			</form> 
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</div>	
	<div class="row">
	<form method="post">
	<br>
	<br>
		<h2 class="text-center"> Movies List</h2>
	   <input type="submit" class="btn btn-primary" name="delete" value="Delete Selected"/> 
		<br><br>
			<table class="table table-striped">
				<tr class="warning">
					<th class='text-center'>	S.No.		</th>
					<th class='text-center'>	Movie Name</th>
					<th class='text-center'>	Poster    </th>
					<th class='text-center'>	Details</th>
					<th class='text-center'>	Trailer</th>
					
					<th class='text-center'>	Casts</th>
					<th class='text-center'>	Facts</th>
					<th class='text-center'>	Ratings</th>					 
					<th class='text-center'>	Delete		</th>
					<th class='text-center'>	Modify		</th>
				</tr>	
				<?php
					$sql="select * from movies";
					$query=mysqli_query($con,$sql);
					$i=1;
					while($a=mysqli_fetch_array($query,MYSQLI_ASSOC))
					{
						$movie=$a['movie_name'];
						$image=$a['movie_image'];
						echo "<tr >";
							echo"<td class='text-center'>".$i."</td>";
							echo"<td class='text-center'>".$a['movie_name']."</td>";
							echo"<td class='text-center'><img src='images/$movie/$image' class='img img-circle img-responsive'></td>";
							echo"<td class='text-center'>".$a['movie_details']."</td>";
							echo"<td ><iframe  src=".$a['movie_embed']." 
							frameborder='0'></iframe></td>";
							echo"<td class='text-center'>".$a['movie_cast']."</td>";
							echo"<td class='text-center'>".$a['movie_facts']."</td>";
							echo"<td class='text-center'>".$a['movie_ratings']."</td>";
							 
							echo "<td class='text-center'> <input type='checkbox' name='movieid[]' value='".$a['movie_id']."'/></td>";
							echo "<td class='text-center'> <a href='index.php?page=editmovie&movieid=".$a['movie_id']."'>Edit</a></td>";
						echo "</tr>";
						$i++;
					}
				?>
			</table>
			<input type="submit" class="btn btn-primary" name="delete" value="Delete Selected"/> 
		</form>
		<hr>
	</div>	
</body>	
 <?php
	extract ($_POST);
	
	if (isset($add))
	{
		 $query="INSERT INTO movies(movie_id,movie_name,movie_image,movie_details,movie_ratings,movie_cast,movie_facts,movie_embed) VALUES ('', '".$movie."','".$_FILES['poster1']['name']."','".$details."'
		 ,'".$ratings."','".$cast."','".$facts."','".$embed."' )";

		if(mysqli_query($con,$query))
		{	
			mkdir("images/$movie");
			move_uploaded_file($_FILES['poster1']['tmp_name'],"images/$movie/".
			$_FILES['poster1']['name']);
			header('location:index.php?page=movies');
		}
		else
		{
			echo mysqli_error($con);
		}
		
	}
?>
	   
 
 
