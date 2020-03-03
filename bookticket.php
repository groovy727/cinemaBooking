<?php
	@$theaterid=$_GET['theaterid'];
	@$movieid=$_GET['movieid'];
	//echo $theaterid."<br>".$movieid;
	$sql="select * from theatre";
	$query=mysqli_query($con,$sql);
?>
<head>
<style>
.header{
background-color:white;
 background-image:none;}
 
	<!--<link rel="stylesheet" href="public/css/reset.css" type="text/css">-->
        <link rel="stylesheet" href="public/css/default.css" type="text/css">
       <!-- <link rel="stylesheet" href="public/css/style.css" type="text/css">-->
		  <script type="text/javascript" src="js/jquery-1.12.0.js"></script>
        <script type="text/javascript" src="js/zebra_datepicker.js"></script>
        <script type="text/javascript" src="js/core.js"></script>
    </head>
   
</style>

<!--<link rel="stylesheet" href="public/css/reset.css" type="text/css">-->
        <link rel="stylesheet" href="public/css/default.css" type="text/css">
       <!-- <link rel="stylesheet" href="public/css/style.css" type="text/css">-->
		  <script type="text/javascript" src="js/jquery-1.12.0.js"></script>
        <script type="text/javascript" src="js/zebra_datepicker.js"></script>
        <script type="text/javascript" src="js/core.js"></script>
		<script>
	$(document).ready(function() {

 $("#start").hide();

});
</script>
<script>
 
		function showmovie(str)
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
		document.getElementById("movie").innerHTML=xmlhttp.responseText;
		}
		}//alert(str)
		

		xmlhttp.open("GET","findmovie.php?theatreid="+str,true);
		xmlhttp.send();
		}
				
		function show(str)
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
		document.getElementById("time").innerHTML=xmlhttp.responseText;
		}
		}
		//alert(str)
		var thea=	document.getElementById("theatre").value;
		
		//alert(str+" "+thea);
	
		xmlhttp.open("GET","findshow.php?movieid="+str+"&theatreid="+thea,true);
		xmlhttp.send();
		}
		
		
		function showdate(str)
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
		document.getElementById("test").innerHTML=xmlhttp.responseText;
				//$("#start1").load('findshowdate.php');
		
	
		}
		}
		//alert(str)
		var thea=	document.getElementById("theatre").value;
		
		//alert(str+" "+thea);
	
		xmlhttp.open("GET","findshowdate.php?showid="+str,true);
		xmlhttp.send();
		}
		
		function showsubcategory(str)
		{
				var startdate=document.getElementById("startdate").value;
				var enddate=document.getElementById("enddate").value;
			// alert (startdate+"hello"+enddate);
	//$(document).ready(function() {

    // assuming the controls you want to attach the plugin to
    // have the "datepicker" class set
  
	$('#input').Zebra_DatePicker({
    // remember that the way you write down dates
    // depends on the value of the "format" property!
    direction: [startdate,enddate]
});

//});
 
				 
		$("#start").show();
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
		document.getElementById("ticket").innerHTML=xmlhttp.responseText;
		}
		}
		//alert(str)
		var showid=	document.getElementById("time").value;
		
		//alert(str+" "+thea);
	
		xmlhttp.open("GET","findnext.php?category="+str+"&showid="+showid,true);
		xmlhttp.send();
		}
		
		
		function showfullticket(str)
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
		document.getElementById("fullseat").innerHTML=xmlhttp.responseText;
		}
		}
		//alert(str)
 
		
		//alert(str+" "+thea);
	
		xmlhttp.open("GET","findfull.php?totalticket="+str,true);
		xmlhttp.send();
		}
		
		function showhalfticket(str)
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
		document.getElementById("halfseat").innerHTML=xmlhttp.responseText;
		}
		}
		//alert(str)
 
		var totalticket= document.getElementById("overallseat").value;
		//alert(str+" "+thea);
	
		xmlhttp.open("GET","findhalf.php?fullticket="+str+"&totalticket="+totalticket,true);
		xmlhttp.send();
		}
	</script>
	
	
</head>
<body>
<script>
	
</script>


 
</script> 
<br>
<p id="test"></p>
<div class="container">
	<div class="row">		 
		<div class="col-sm-12">
			 <h1 style="background-color:black; padding:10px;" class="text-center text-primary"> BUY TICKETS</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">	
			<ul class="nav nav-tabs nav-justified">
				<li class="active">
					<a><h4 class="text-center info">Step 1-</h4></h6>Make Your Selection</h6></a>
				</li>
				<li>
					<a><h4 class="text-center info">Step 2-</h4><p>Selection Preferences</p></a>
				</li>
				<li>
				<a ><h4 class="text-center info">Step 3-</h4><p>Confirm Booking</p></a>
				</li>
				<li><a><h4 class="text-center info">Step 4-</h4><p>Make Payment</p></a></li>
			  </ul> 
			 
		</div>
		<div class="col-sm-2">
		</div>
	</div>
	<br>
	<div class="row">		 
		<div class="col-sm-3">
		</div>
		<div class="col-sm-6">
			<form method="post">
				 <div class="row">
				  <?php echo @$errmsg1 ; ?>
					<div class="col-sm-3">						 
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Select Theatre:</label>
							<select name="selectedtheatre" id="theatre" class="form-control" 
						required onChange="showmovie(this.value);">	
								<option>No Selection</option>
								 <?php 
									while ($a=mysqli_fetch_array($query,MYSQLI_ASSOC))
									{
										echo "<option value='".$a['theatre_id']."'>".$a['theatre_name']."</option>";
									}
								 ?>
							</select>
						</div>
					</div>
					<div class="col-sm-3">
						 
					</div>
					</div>
					<div class="row">
					<div class="col-sm-3">						 
					</div>
					<div class="col-sm-6">					
					<div class="form-group">
							<label>Select Movie:</label>
							<select name="selectedmovie" class="form-control" id="movie" 
							 required  onChange="show(this.value);">	
								<option>No Selection</option> 
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Select Show Timing:</label>
							 <select id="time" class="form-control" name="selectedtime" 
							 required onChange="showdate(this.value);">
								<option>No Selection</option>
							</select>
						</div>
					</div>
					<div class="col-sm-3">
					</div>
				</div>
				<div class="row">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-6">
				<div class="form-group">
 
					
					
					 
				</div>
				</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Select category:</label>
							 <select id="category" name="selectedcategory"  
							 onChange="showsubcategory(this.value);" class="form-control" >
								<option>No Selection</option>
								<option value="GOLD">GOLD CLASS</option>
								<option value="ODC">ODC</option>
								<option value="BOX">BOX</option>
							</select><br>
		<p id="start">
					 <?php 
						include('connection.php');
						@$showid=@$_GET['showid'];  
						//echo $showid;
						 //$sql="select * from shows where show_id=".$showid;
						 //$query=mysqli_query($con,$sql);
						 echo "<label>Select Show Date</label>"; 
						 
						?>
<input id="input" class="form-control"  type="text" name="selecteddate">
					</p>
					</div>
					</div>
					<div class="col-sm-3">
					</div>					
				</div>
				 <div class="row">
					 <div class="col-sm-3">
					 </div>
					 <div class="col-sm-6">
						 <p id="ticket"></p>
					</div>
				</div>
				</div>
				<div class="row">
					<div class="col-sm-6">						 
					</div>
					<div class="col-sm-6">
						<input type="submit" name="book" class="btn btn-warning btn-lg" Value="  NEXT  "/>
					</div>
				</div>			 
			</form>
		</div>
		<div class="col-sm-3">
		</div>
	</div>
 <p id="demo"></p>
  </body>
 <?php
 extract ($_POST);
 if (isset($book))
 {
	/* echo $selectedtheatre."<br/>";
	 echo $selectedmovie."<br>";
	 echo $selectedtime."<br>";
	 echo $selectedcategory;*/
	 $_SESSION['theatre']=$selectedtheatre;
	 $_SESSION['movie']=$selectedmovie;
	 $_SESSION['showid']=$selectedtime;
	 $_SESSION['category']=$selectedcategory;
	 $_SESSION['date']=$selecteddate;
	 $_SESSION['overallseat']=$overallseat;
	 $_SESSION['fullseat']=$fullseat;
	 $_SESSION['halfseat']=$halfseat;
	 $x=mysqli_query($con,"select * from shows where show_id=".$selectedtime);
	 $y=mysqli_fetch_array($x,MYSQLI_ASSOC);	 
	if ($selectedcategory=="GOLD")
		{
			$_SESSION['f']=$y['gold_full'];
			$_SESSION['h']=$y['gold_half'];
			$_SESSION['fullprice']=$fullseat*$y['gold_full'];
			$_SESSION['halfprice']=$halfseat*$y['gold_half'];
		 $_SESSION['overallprice']=$fullseat*$y['gold_full']+$halfseat*$y['gold_half'];
		}
		else if ($selectedcategory=="ODC")
		{
			$_SESSION['f']=$y['odc_full'];  
			$_SESSION['h']=$y['odc_half'];
			$_SESSION['fullprice']=$fullseat*$y['odc_full'];
			$_SESSION['halfprice']=$halfseat*$y['odc_half'];
		 $_SESSION['overallprice']=$fullseat*$y['odc_full']+$halfseat*$y['odc_half'];
		}
		else if ($selectedcategory=="BOX")
		{
			$_SESSION['f']=$y['box'];
			$_SESSION['h']=0;
			$_SESSION['fullprice']=$overallseat*$y['box'];	
			$_SESSION['halfprice']=0;			
		 $_SESSION['overallprice']=$overallseat*$y['box'];
		  $_SESSION['fullseat']=$overallseat;
		  $_SESSION['halfseat']=0;
		
		 header('location:index.php?page=selectseatbox&category='.$selectedcategory);
		}
		if ($overallseat==$fullseat+$halfseat && ($selectedctegory="GOLD" || $selectedctegory="ODC"))
		{
			 header('location:index.php?page=selectseat&category='.$selectedcategory);	 
		}
		else{
			echo"<h2 class='text-center'><font color='red'>Number of full and half tickets should be equal to total seats. </font></h2>";
		}
	
 }
 ?>