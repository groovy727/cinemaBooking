<?php
	//echo "<option>test</option>";
	$totalticket=$_GET['totalticket'];
	for ($i=$totalticket;$i>=1;$i--)
	{
		echo "<option value=".$i.">".$i."</option>";
	}
?>