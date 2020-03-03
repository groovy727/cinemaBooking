<?php
	include('connection.php');
	$showid=$_GET['showid'];
	$category=$_GET['category'];
	$sql="select * from shows where show_id=".$showid;
	$query=mysqli_query($con,$sql);
	$a=mysqli_fetch_array($query,MYSQLI_ASSOC);
	if ($category!="BOX")
	{
		echo "<label>No. of seats*</label>";
	?> <select class="form-control" name="overallseat" id="overallseat" onChange="showfullticket(this.value);">
			<option value="0"> No Selection </option>
	<?php 
	for ($i=1;$i<=20;$i++)
	{
		echo "<option value=".$i.">".$i."</option>";
	}
		?>	
	</select>
<br>	
	<label>No. of Full Tickets*</label>
	<select class="form-control" name="fullseat" id="fullseat" onChange="showhalfticket(this.value);">	
			<option value='0'> No Selection </option>
	</select>
<br>	
	</select>	
	<label>No. of Half Tickets</label>
	<select class="form-control" name="halfseat" id="halfseat">	
			<option value='0'> No Selection </option>
	</select>
	<h6 class="text-primary">(Ages between 3 to 12)</h6>	
	<?php
	}
	else
	{
		
		echo "<label>No. of Boxes*</label>";
	?> <select class="form-control" name="overallseat" id="overallseat">
	<?php 
	for ($i=1;$i<=8;$i++)
	{
		echo "<option value=".$i.">".$i."</option>";
	}
		?>	
	</select>
	<h6 class='text-primary'>(1 Box can accomodate only 2 persons)</h6>
	<?php
	}
	?>
 <?php
echo "<table class='table table-dashed' >
	<tr>
		<th class='text-center'>Category</th>
		<th class='text-center'>Type</th>
		<th class='text-center'>Price</th>
	</tr>
	<tr>
		<td class='text-center'>Gold</td>
		<td class='text-center'>Full</td>
		<td class='text-center'> ".$a['gold_full']."</td>
	</tr>
	<tr>
		<td class='text-center'>Gold</td>
		<td class='text-center'>half</td>
		<td class='text-center'> ".$a['gold_half']."</td>
	</tr>
	<tr>
		<td class='text-center'>ODC</td>
		<td class='text-center'>Full</td>
		<td class='text-center'>".$a['odc_full']." </td>
	</tr>
	<tr>
		<td class='text-center'>ODC</td>
		<td class='text-center'>Half</td>
		<td class='text-center'>".$a['odc_half']."</td>
	</tr>
	<tr>
		<td class='text-center'>BOX</td>
		<td class='text-center'>Full</td>
		<td class='text-center'>". $a['box']."</td>
	</tr>
</table>";
?>