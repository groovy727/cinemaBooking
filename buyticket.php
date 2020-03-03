 <?php
	@$movieid=$_GET['movieid'];
	//echo $movieid;
	$sql="select * from movies where movie_id=".$movieid;
	$query=mysqli_query($con,$sql);
	$a=mysqli_fetch_array($query,MYSQLI_ASSOC);
	$movie=$a['movie_name'];
	$poster=$a['movie_image'];
	
	
	//get showid from movieid in shows table and then get theatreid and display all possible theaters
	$sql1="select * from shows where movie_id=".$movieid;
	$query1=mysqli_query($con,$sql1);
?>
<html>
<head>

<style>
body{
margin:0px;
padding:0px;
}
.header{
background-color:white;
 background-image:none;}
</style>

</head>
<body>
<br>
<br>
<?php
	while ($b=mysqli_fetch_array($query1,MYSQLI_ASSOC))
	{
		$theatreid[]=$b['theatre_id'];
		//echo $theatreid;
	}
	//check if there is 2 or more shows of a movie in a theaters
	//if it is so then unset one theaterid;
	@$count=count($theatreid);
	//echo $count;
	for($i=0;$i<$count;$i++)
	{
		 for ($j=0;$j<$count;$j++)
		 {
			 if ($i!=$j)
			 {
				if (@$theatreid[$i]==@$theatreid[$j]) 
				{
					unset ($theatreid[$j]);
				}
			 }
		 }
	}
	 
	
	
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<?php
				echo "<div class='video'>";
				echo "<iframe  src='".$a['movie_embed']."' frameborder='0' allowfullscreen></iframe>";				
				echo "</div>";
			?>
			<br>
		</div>
	</div>
	<div class="row">		 
		<div class="col-sm-1">
		</div>
		<div class="col-sm-4">
			<?php				
				echo "<img src='admin/images/$movie/$poster' style='width:100%; height:auto;' class='img img-rounded img-responsive '>";

			?>
			
		</div>
		<div class="col-sm-1">
		</div>
		<div class="col-sm-6">
			<?php
				echo "<p>Home >>Movies >>".$movie."<br>";
				echo "<h1 class='text text-warning' style='text-decoration: underline;'>".$movie."</h1>";
			?>
			 
			<h3> Synopsis:</h3>
			<?php
				echo "<p>".$a['movie_details']."</p>";
			?>
			<br><br>
			<h3> casts:</h3>
			<?php
				echo "<p>".$a['movie_cast']."</p>";
			?>
			<br><br>
			<div class="row">
				<div class="col-sm-7">
				<h3> Facts:</h3>
				<?php
					echo "<p>".$a['movie_facts']."</p>";
				?>
				</div>
				<div class="col-sm-5">
				<?php 
				if (isset($_SESSION['movieuser']))
				{
				?>			
				<a href="index.php?page=bookticket"><button class="btn btn-danger btn-lg" > Book Tickets Now </button></a>
				<?php
				}
				else{
				echo '<a href="#" id="myBtnlogin5" data-toggle="modal" data-target="#log"><button class="btn btn-danger btn-lg ">
				Book Tickets Now </button></a>';
				}
				?>				
				</div>
			</div>
			
			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<?php
			error_reporting(1);
				echo "<h2 class='text-center text-info' style='text-decoration:underline'> Available Theaters </h2><br>";
			 
				foreach(@$theatreid as $x)				
				{					
					$sql2="select * from theatre where theatre_id=".$x;
					$query2=mysqli_query($con,$sql2);
					$c=mysqli_fetch_array($query2,MYSQLI_ASSOC);
					$theatrename=$c['theatre_name'];
					$theatreimage=$c['theatre_image'];
					$thid=$c['theatre_id'];
					echo "<div class='col-sm-3'>";
						echo "<div class='panel panel-primary'>";
							echo "<div class='panel-heading'><p class='text-center'>".$theatrename."</p></div>";
							echo "<div class='panel-body'><img src='admin/images/$theatrename/$theatreimage' 
							class='img img-responsive img-rounded' style='width:100%' alt='Image'></div>";													echo "<div class='panel-footer'>";
							if (isset($_SESSION['movieuser']))
							{
							echo"<a href='index.php?page=bookticket&movieid=".$movieid."&theaterid=".$thid."'
							class='btn btn-success'>Book Tickets</a></div>";
							}
							
 
						echo"</div>";
						echo"</div>";
					echo"</div>";
					}				 
			?>
			
		</div>
	</div>
</div>
</body>