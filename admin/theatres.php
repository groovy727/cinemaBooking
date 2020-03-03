 <?php 
 ob_start();

	if(isset($_POST['delete']))
	{
		foreach($theatreid as $x)
		{
			$sql2="select * from thaeatre where theatre_id=".$x;
			$query2=mysqli_query($con,$sql2);
			$v=mysqli_fetch_array($query2,MYSQLI_ASSOC);
			$deltheatre=$v['theatre_name'];
			$delimage=$v['theatre_image'];
			unlink("images/$deltheatre/$delimage");
			rmdir("images/$deltheatre");
		}
		
		$theatreid=implode(',',$_POST['theatreid']);
		//echo $catid;
		//delete row in category table
		$data="delete from theatre WHERE theatre_id in(".$theatreid.")";
		if(mysqli_query($con,$data))
		{
			header('location:index.php?page=theatres');
		}
		else
		{
			$msg="<h1> Theatre can not be added.</h1>";
		}
	}
?>
 
<div class="row">
	<div class="col-sm-12 text-center">
	 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add New Theatre</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Add Movie Theatre</h2>
        </div>
        <div class="modal-body">
 			<form role="form" method="post" enctype="multipart/form-data">
				<div class="form-group">
				  <label for="theatre">Theatre Name:</label>
				  <input type="text" class="form-control" id="theatre" name="theatre" 
				  placeholder="Enter theatre name">
			   </div>
			  
					<div class="row">
						 
						<div class="col-sm-6">
							<div class="form-group">
								<label>Theater Image:</label>
								<input type="file" class="form-control" name="image" >
							</div>
						</div>
						
					</div>
			   </div>
			    
				<input type="submit" class=" btn btn-primary" value="Add Theatre" name="add"/>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
        </div>
        
      </div>
      
    </div>
  </div>
  
</div>
	
	<div class="row">
		<div class="col-sm-12">
		
			<h3 class="text-center"> Theatre List</h3>
			<form method="post">
				
				<input type="submit" class="btn btn-primary " name="delete" value="Delete Selected"/> 
				<br><br>
				<table class="table table-striped">
					<tr class="warning">
						<th class='text-center'>	S.No.		</th>
						<th class='text-center'>	Theatre Name</th>
						 
						<th class='text-center'>	Image       </th>
						<th class='text-center'>	Delete		</th>
						<th class='text-center'>	Modify		</th>
					</tr>	
					<?php
						$sql="select * from theatre";
						$query=mysqli_query($con,$sql);
						$i=1;
						while($a=mysqli_fetch_array($query,MYSQLI_ASSOC))
						{
							$theatre=$a['theatre_name'];
							$theatreimage=$a['theatre_image'];
							echo "<tr >";
								echo"<td class='text-center'>".$i."</td>";
								echo"<td class='text-center'>".$a['theatre_name']."</td>";
								 
								echo"<td class='text-center'><img src='images/$theatre/$theatreimage'
								class='img img-thumbnail img-responsive' style='max-width:100px;'></td>";
								echo "<td class='text-center'> <input type='checkbox' name='theatreid[]' value='".$a['theatre_id']."'/></td>";
								echo "<td class='text-center'> <a href='index.php?page=edittheatre&theatreid=".$a['theatre_id']."'>Edit</a></td>";
							echo "</tr>";
							$i++;
						}
					?>
				</table>
				<input type="submit" class="btn btn-primary" name="delete" value="Delete Selected"/> 
			</form>
			<hr>
		</div>	   
	</div>	   
</div>	    
<?php
	extract ($_POST);
	
	if (isset($add))
	{
		 $query1="INSERT INTO theatre VALUES ('', '".$theatre."','".$_FILES['image']['name']."' )";

		if(mysqli_query($con,$query1))
		{
			mkdir("images/$theatre");
			move_uploaded_file($_FILES['image']['tmp_name'],"images/$theatre/".
			$_FILES['image']['name']);
			header('location:http://localhost/movie/admin/index.php?page=theatres');
		}
		
	}
ob_end_flush();
?>
	?>