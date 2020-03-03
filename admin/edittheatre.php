<?php
	$theatreid=$_GET['theatreid'];
	//echo $theatreid;
	$sql1="select * from theatre where theatre_id=".$theatreid;
	$query1=mysqli_query($con,$sql1);
	$a=mysqli_fetch_array($query1,MYSQLI_ASSOC);
	$theatre=$a['theatre_name'];
	$theatreimage=$a['theatre_image'];
?>
<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<h3> Edit Movie Theatre</h3>
		<form role="form" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
					
						<label for="theatre">Old Theatre Name:</label>
						<input type="text" class="form-control" id="theatre" value="<?php echo $a['theatre_name'] ?>" 
						readonly>
					</div>
					<div class="col-sm-6">
					
						<label for="theatre">Theatre Name:</label>
						<input type="text" class="form-control" id="theatre" name="newtheatre" 
						value="<?php echo $a['theatre_name'] ?>"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
					<?php
						 	echo"<td class='text-center'><img src='images/$theatre/$theatreimage'
							class='img img-thumbnail img-responsive' style='max-width:100px;'></td>";
						?>
					</div>
					<div class="col-sm-6">
						 <label>Theater Image:</label>
						<input type="file" class="form-control" name="image" >
				</div>
			</div>
			<input type="submit" class=" btn btn-primary" value="Edit Theatre" name="edit"/>
		</form>
	</div>
	<div class="col-sm-2">
	</div>
</div>
<?php
	extract ($_POST);
	if (isset($edit))
	{	
		$img=$_FILES['image']['name'];
		if ($img!="")
		{
			unlink("images/$theatre/$theatreimage");
			move_uploaded_file($_FILES['image']['tmp_name'],"images/$theatre/".
			$_FILES['image']['name']);
			$sql2="update theatre set  theatre_image='".$_FILES['image']['name']."' where theatre_id=".$theatreid;
		mysqli_query($con,$sql2);
		}	
		if ($theatre!=$newtheatre)
		{
			rename("images/$theatre","images/$newtheatre");
		}
	 
		$sql2="update theatre set theatre_name='".$newtheatre."' where theatre_id=".$theatreid;
		mysqli_query($con,$sql2);
			
		header('location:index.php?page=theatres');
	}
?>