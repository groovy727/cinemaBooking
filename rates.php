	<!--<link rel="stylesheet" href="public/css/reset.css" type="text/css">-->
        <link rel="stylesheet" href="public/css/default.css" type="text/css">
       <!-- <link rel="stylesheet" href="public/css/style.css" type="text/css">-->
		  <script type="text/javascript" src="js/jquery-1.12.0.js"></script>
        <script type="text/javascript" src="js/zebra_datepicker.js"></script>
        <script type="text/javascript" src="js/core.js"></script>
    
<script>
 
  $(document).ready(function() {
	$('#date').Zebra_DatePicker({
    // remember that the way you write down dates
    // depends on the value of the "format" property!
    //direction: [startdate,enddate]
});
  });
 
 
				 
		 
		
		</script>
 <script>
	function fetchinfo(str)
		{
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("demo").innerHTML=xmlhttp.responseText;
		}
		}
		var movieid=document.getElementById("selectedmovie").value;
		var date=document.getElementById("date").value;
		//alert(str)
		xmlhttp.open("GET","fetchinfo.php?movieid="+movieid+"&date="+date,true);
		xmlhttp.send();
		}
 </script>

<style>
 
.header{
background-color:white;
 background-image:none;}
 </style>
  <br>
  <br>
  <br>
  <br>
  <div class="row">
  <div class="col-sm-5">
  </div>
  <div class="col-sm-2">
	<div class="form-group">
		<label>Select Date</label>
		<input type="text" name="date" id="date" class="form-control"><br>
		<label> Select Movie </label>
		<select class="form-control" name="selectedmovie" id="selectedmovie">
			<option value="0">  No Selection </option>
			<?php
				$sql="select * from movies";
				$query=mysqli_query($con,$sql); 
				while ($a=mysqli_fetch_array($query,MYSQLI_ASSOC))
				{
					echo "<option value='".$a['movie_id']."'>".$a['movie_name']."</option>";
				}
			?>
		<select>
		<br>
		<p class="text-right"><input type="submit" value="Next" class="btn btn-primary"
		onClick="fetchinfo(this.value);"/></p>
	</div>
  </div>
  <div class="col-sm-3">
  </div>
  </div>
  <div class="container">'
	<div class="row">'
	  <div class="col-sm-2">'
	  </div>
		<div class="col-sm-8">
		<p id="demo"></p>
	  </div>
	  </div>
  </div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>