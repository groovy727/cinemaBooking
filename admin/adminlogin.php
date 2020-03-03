<?php
	extract($_POST);
	 
	 //connect database 
	   
	if(isset($login))
	{
		if($iuser== "admin" && $ipassword=="admin123")
		{	
			session_start();			
			$_SESSION['user']="admin";
			 
			header('location:index.php');
		}
		else
		{	 
			@$msg= "<h5 color='red'>Wrong Credentils. Please <label for='email'><a href=''>
			Login </a></label> again.</h5>";
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href=" css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
         
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#"><img src="images/noimage.jpg" class="img-responsive img-circle"/></a></p>
       
    </div>
    <div class="col-sm-8 text-left">
      <h1>Login</h1>
      <p>
		This page is for admin only. Any unauthorised user is not permitted to login through this page.
	  </p>
      <hr>
	  <?php
		echo @$msg;
	  ?>
		<div class="container">
  <h2>Enter to login</h2>
  <form role="form" method="post">
    <div class="form-group">
      <label for="user">User Id:</label>
      <input type="text" class="form-control" name="iuser" id="user" placeholder="Enter user id">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="ipassword" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" name="login" class="btn btn-warning">Submit</button>
  </form>
  
  
  <br/>
  <br/>
  <br/>
<?php
	echo @$msg;
?> 
  
</div>
    </div>
    <div class="col-sm-2 sidenav">
       
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

