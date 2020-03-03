<?php
	session_start();
	ob_start();
	include('connection.php');
	if(!isset($_SESSION['user']))
	{
		header('location:login.php');
	}
	
	//count all number of users
	$sl="select * from users ";
	$query=mysqli_query($con,$sl);
	$s=mysqli_num_rows($query);
	//user end
	
	//count all number theatures
	$s2="select * from theatre ";
	$q2=mysqli_query($con,$s2);
	$r2=mysqli_num_rows($q2);
	//theatures end
	
	
	//count all number movies
	$s3="select * from movies ";
	$q3=mysqli_query($con,$s3);
	$r3=mysqli_num_rows($q3);
	//movies end
	
	//count all booking details
	$s4="select * from booking ";
	$q4=mysqli_query($con,$s4);
	$r4=mysqli_num_rows($q4);
	//booking details end
	
	
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>
<!--<script src="js/jquery.min.js"></script>-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<style>
	.navbar li a{
		color:gray;
		font-size:15px;
		
	}
</style>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<ul  class="nav navbar-nav navbar-left">
				
				<li><a  href="index.php">Welcome Admin!</a></li>
				<li><a  href="index.php?page=theatres">Movie Theatres</a></li>
				<li><a  href="index.php?page=movies">Movies</a></li>
				<li><a href="index.php?page=showtime">Show Timings</a></li>
				
				</ul>
				 
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="logout.php"  >
						<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use>
						</svg>Logout <span  ></span></a>
						 
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar" style="border-right:2px solid gray">
		<!--<form role="search">
		<input type="text" placeholder="Search"/>	 
		</form>-->
		<ul class="nav menu" >
			 
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Dashboard</a></li>
			<li><a href="index.php?page=theatres"><span class="glyphicon glyphicon-edit"></span>Movie Theatres</a></li>
			<li><a href="index.php?page=movies"><span class="glyphicon glyphicon-edit"></span>Movies</a></li>
			<li><a href="index.php?page=showtime"><span class="glyphicon glyphicon-edit"></span>Show Timings</a></li>
			<li><a href="index.php?page=frontpage"><span class="glyphicon glyphicon-edit"></span>Home Page</a></li>
			<li><a href="index.php?page=users"><span class="glyphicon glyphicon-edit"></span>Users</a></li>
			<li><a href="index.php?page=booking_details"><span class="glyphicon glyphicon-edit"></span>Booking</a></li>
			<li><a href="index.php?page=password"><span class="glyphicon glyphicon-edit"></span>Update Password</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
		<?php
			@$opt=$_GET['page'];
			if($opt=='theatres')
			{
				include ('theatres.php');
			}
			else if($opt=='addtheatre')
			{
				include ('addtheatre.php');
			}
			else if($opt=='showtime')
			{
				include ('showtime.php');
			}
			else if($opt=='movies')
			{
				include ('movies.php');
			}
			else if($opt=='addmovie')
			{
				include ('addmovie.php');
			}
			else if($opt=='addshow')
			{
				include ('addshow.php');
			}
			else if($opt=='edittheatre')
			{
				include ('edittheatre.php');
			}
			else if($opt=='editshow')
			{
				include ('editshow.php');
			}
			else if($opt=='editmovie')
			{
				include ('editmovie.php');
			}
			else if($opt=='frontpage')
			{
				include ('frontpage.php');
			}
			
			else if($opt=='activate')
			{
				include ('activate.php');
			}
			else if($opt=='booking_details')
			{
				include ('booking_details.php');
			}
			else if($opt=='password')
			{
				include ('password.php');
			}
			else if($opt=='users')
			{
				include ('users.php');
			}
			else
			{
		?>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Administrator</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			 
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $s; ?></div>
							<div class="text-muted"><a href="index.php?page=users" title="View user details">Users</a></div>
						</div>
					</div>
				</div>
			</div>
			 
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $r2; ?></div>
							<div class="text-muted"><a href="index.php?page=theatres" title="View theature details">Theatures</a></div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $r3; ?></div>
							<div class="text-muted"><a href="index.php?page=movies" title="View all Movie details">Movies</a></div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $r4; ?></div>
							<div class="text-muted"><a href="index.php?page=booking_details" title="View All Booking Details">Booking</a></div>
						</div>
					</div>
				</div>
			</div> 
			 
		</div><!--/.row-->
		
		 
		
		 
	 
<?php
			}
			
	 
	ob_end_flush();
?>
 