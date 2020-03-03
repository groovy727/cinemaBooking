<?php
	 $totalticket=$_GET['totalticket'];
	 $fullticket=$_GET['fullticket'];
	 $i=$totalticket-$fullticket;
	 
		echo "<option value=".$i.">".$i."</option>";
	 
	 
?>