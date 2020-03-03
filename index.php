  <?php
	ob_start();
	session_start();
	include('connection.php');
	$sql="select * from movies";
	$query=mysqli_query($con,$sql);
	$sql7="select * from movies where status=1";
	$query7=mysqli_query($con,$sql7);
	$f=mysqli_fetch_array($query7,MYSQLI_ASSOC);
	
	//code to refresh selected seat status
	date_default_timezone_set("Asia/Kolkata"); 
 $present=date('Y-m-d H:i:s');
 //echo $present;
 //include ('connection.php');
 $sql156="select * from booking where status='PENDING'";
 $query156=mysqli_query($con,$sql156);
 while ($d=mysqli_fetch_array($query156,MYSQLI_ASSOC))
 { 
	$time=$d['time'];
	$to_time = strtotime($present);
	$from_time = strtotime($time);
	$difference= round(abs($to_time - $from_time) / 60,2). " minute";
 
	$difference=intval($difference);
 
	if ($difference >"5")
	{	//echo "smaller";
		$bookingid=$d['booking_id'];
		$sql22="update booking set status='FAILED' where booking_id=".$bookingid;
		if(mysqli_query($con,$sql22))
		{
			//echo"upadated";
		}
		 else{
			// echo "Not updated";
		 }
	 }
	 else{
		// echo "larger";
	 }
	 
 }
 //end of code to update status of selected seat
	
?> 
<!DOCTYPE html>
<html>
<head>
<title>SCORPIO</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
 
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/jquery-1.12.0.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery.timer.js"></script>
  <link rel="stylesheet" href="js/jquery-ui.css">
  <script src="js/jquery-ui-1.8.17.custom.min.js"></script>
  
  
  <!--<link rel="stylesheet" href="public/css/reset.css" type="text/css">-->
        <link rel="stylesheet" href="public/css/default.css" type="text/css">
       <!-- <link rel="stylesheet" href="public/css/style.css" type="text/css">-->

		  <script type="text/javascript" src="js/jquery-1.12.0.js"></script>
        <script type="text/javascript" src="js/zebra_datepicker.js"></script>
        <script type="text/javascript" src="js/core.js"></script>
		
   	
  
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="script.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

 <style>
 	.main{border-left:0px solid gray}
	.header
	{
		background-image:url('images/it2.jpg');
		padding-left:0px;
	}
	.navbar{
		mragin:10px;
		padding:0px;
	}
	.navbar li a{
		color:#8B55FF;
		
	}
 </style>
</head>
<body>
	<!-- header-section-starts -->
	<div class="full">
			 
		<div class="main">
		<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#281212;">
  <div class="container-fluid">
    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  </div>
     <!-- 
		<div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>	
    </div>-->
	 <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav" >
      <li class="active"><a href="index.php">Home</a></li>
      <li class="active"><a href="index.php?page=movies">Movies</a></li>
      <li class="active"><a href="index.php?page=rates">Rates & Shows</a></li> 
        <?php
		if(isset($_SESSION['movieuser']))
		{
			echo'<li class="active"><a href="index.php?page=bookticket">Buy Tickets</a></li>';			 
		}
		else
		{
			echo'<li class="active"><a href="#" id="myBtnlogin3" data-toggle="modal" data-target="#log">Buy Tickets</a></li>'; 
		}
				?>
      <li class="active"><a href="index.php?page=videos">Trailers</a></li> 
	  
      <li class="active"><a href="index.php?page=about">About Us</a></li> 
      <li class="active"><a href="index.php?page=contact">Contact Us</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
 
	  				<?php
					if(isset($_SESSION['movieuser']))
					{
						echo'<li class="active"><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>	';
						echo'<li class="active"><a href="index.php?page=dashboard"><span class="glyphicon glyphicon-user"></span>
						Dashboard</a></li>';
					}
					else{
						echo '<li class="active"><a href="#" id="myBtnregister" data-toggle="modal" data-target="#regx"> 
						<span class="glyphicon glyphicon-user">Register</a>  </li>
							 <li><a href="#" data-toggle="modal" data-target="#log" style="color:#fff" >
			<span class="glyphicon glyphicon-lock"></span>Sign In</a></li> ';
					}
				?>
    </ul>
  </div>
</nav>
		<div class="header" >
			<div class="top-header">
					
	<!-- for login -->
<div class="modal fade" id="log" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    	<div class="modal-content">
   
        <div class="modal-header" style=" background-color:#284761;   color:#fff;">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">
<span class="glyphicon glyphicon-log-in"style=" background-color:#284761; margin-left:180px; color:#fff;">&nbsp;Login</h4>
      	</div>
      	<div class="modal-body">
	
         	<div class="alert alert-success" id="err" role="alert"></div>  
	     	<form action="#" method="post">
			<div class="form-group">
				<div class="input-group input-group-sm">
		 
		 <span class="input-group-addon">  
		 <span class="glyphicon glyphicon-envelope"></span></span>
						
	 <input type="email" class="form-control" name="email"  id="email" placeholder="Email"/>
	</div>
	</div>

	<!-- for password-->
	<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-lock"></span></span>
							
	 <input type="password" class="form-control" name="pass"  id="pass" placeholder="password"/>
					
		</div>
	</div>
	<!-- password end -->
	
		<!-- for user type-->
 
	<!-- password end -->
	
	  
      
    <div class="modal-footer">
        <input type="submit" class="btn btn-success" style="background:#284761" id="save1"  value="Login" name="login" />
		<button type="button" class="btn btn-success" data-dismiss="modal" style="background:#284761">Cancel</button>
	</div>
</form>
</div> 
  </div>
   		<script src="js/jquery-1.11.1.min.js"></script>
<script>

$(document).ready(function()
{	
	$("#err").hide();
	$("#save1").click(function()
	{		
	var email1 =$('#email').val();
	var pass1 =$('#pass').val();	
	var user =$('#user').val();
	var dataString = 'email_id='+ email1+'&password='+pass1+'&user='+user  ;
	
	if(email1== '' )
	{	
		$("#err").show();
		$("#err").hide().slideDown();
		setTimeout(function(){
		$("#err").hide();        
		}, 3000);
		
 		$("#err").html("Please enter email ");
	} 
	else if(pass1=='')
	{
	$("#err").show();
	$("#err").hide().slideDown();
	setTimeout(function(){
	$("#err").hide();        
			  }, 3000);
			  
 	$("#err").html("Please enter password");
	}
	else
	{
	$.ajax({
	type: "POST",
	url: "ajax_login.php",
	data: dataString,
	cache: false,
	success: function(result){
	$("#err").show(300);
	$('#err').html(result);
	$("#err").hide().slideDown();
	setTimeout(function(){
				  	$("#err").hide();        
			  }, 3000);
	
	}
	});
	}
return false;
			
	});
	
});
</script>

   
    </div>
  </div>
 
<!-- login model end -->
  
  
    <!-- Modal for Register-->
   <div class="modal fade" id="regx" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
         
        <div class="modal-body" style="padding:20px 50px;">
		<h4><span class="glyphicon glyphicon-lock"></span> Sign Up</h4>
		<div class="alert alert-success" id="err3" role="alert"></div>
          <form role="form"  id="myForm" method='post' name="myForm">
            <div class="form-group">
				<div class="row">
					<div class="col-sm-6">
					  <label for="fname1"><span class="glyphicon glyphicon-user" ></span> First Name*</label>
					  <input type="text" class="form-control" name="fname" id="fname1" required
					  onblur="validate('fname', this.value)" placeholder="Enter Your First Name">
						<p id="fname"> </p>
					</div>
					
					<div class="col-sm-6">
					   <label for="lname1"><span class="glyphicon glyphicon-user"></span> Last Name*</label>
						<input type="text" class="form-control" name="lname" required
						id="lname1" onBlur="validate('lname', this.value)"placeholder="Enter Your Last Name">
						<p id="lname"></p>
					</div>
				</div>
            </div>
 
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						 <label> Gender*</label>
						<select name="gender" class="form-control" id="gender">
							<option Value="Male">Male</option>
							<option Value="Female">Female</option>		 
						</select>
					</div>
					<div class="col-sm-6">
					  <label for="dob"> Date of Birth*</label>
					  <input type="text" class="form-control" id="dob" name="dob" required>
					</div>
					<!--<link rel="stylesheet" href="public/css/reset.css" type="text/css">-->
        <link rel="stylesheet" href="public/css/default.css" type="text/css">
       <!-- <link rel="stylesheet" href="public/css/style.css" type="text/css">-->
		  <script type="text/javascript" src="js/jquery-1.12.0.js"></script>
        <script type="text/javascript" src="js/zebra_datepicker.js"></script>
        <script type="text/javascript" src="js/core.js"></script>
    
<script>
 
  $(document).ready(function() {
	$('#dob').Zebra_DatePicker({
    // remember that the way you write down dates
    // depends on the value of the "format" property!
    //direction: [startdate,enddate]
});
  }); 
 
				 
		 
		
		</script>
 
				</div>               
            </div>
			<!--<div class="form-group">
              <label for="nid">National Identity Card No.*</label>
              <input type="text" class="form-control" id="nid1" name="nid"
			  onblur="validate('nid', this.value)" placeholder="Enter Your National Identity Number">
			  <p id="nid"></p>
            </div>-->
			
			<div class="form-group">
              <label for="address">Address*</label>
              <input type="text" class="form-control" id="address1" onBlur="validate('address', this.value)"
			  name="address" placeholder="Enter Your Address" required>
			  <p id="address"></p>
            </div>
			
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						 <label for="city">City*</label>
						  <input type="text" class="form-control" id="city1" onBlur="validate('city', this.value)"
						  name="city" placeholder="Enter Your  City" required>
						  <p id="city"></p>
					</div>
			        <div class="col-sm-6">
						 <label for="district">District*</label>
						  <input type="text" class="form-control" id="district1" 
						  onblur="validate('district', this.value)" name="district" required
						  placeholder="Enter Your District">
						  <p id="district"></p>
					</div>
				</div>
            </div>
			
			<div class="form-group">
               <div class="row">
				   <div class="col-sm-6">
					
					  		 
              <label for="contact">Mobile No.*</label>
              <input type="number" class="form-control" id="contact1" name="contact"
				onblur="validate('contact', this.value)" required placeholder="Enter Your Contact Phone Number">
				<p id="contact"></p>
				   </div>
				    <div class="col-sm-6">
					<label for="mobile">Alternate Phone No.</label>
					<input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Mobile No. ">

				   </div>
			   </div>
            </div>
			
			 	 <div class="form-group">
				<div class="row">
					<div class="col-sm-6">
					  <label for="email1"> Email Address*</label>
					  <input type="email" class="form-control" id="email1" 
					  onblur="validate('email', this.value)" required name="email" placeholder="Enter Email Address">
					  <p id="email"></p>
					</div>
					 <div class="col-sm-6">
					  <label for="iemail"> Confirm Email Address*</label>
					  <input type="email" class="form-control" required id="iemail1" name="iemail"
					  onkeypress="validate('iemail', this.value)" placeholder="Confirm Email Address">
					  <p id="iemail"></p>
					</div>
				</div>
            </div>
			
			 
            <div class="form-group">
				<div class="row">
					<div class="col-sm-6">
					  <label for="password1"><span class="glyphicon glyphicon-eye-open"></span> Password*</label>
					  <input type="password" class="form-control" id="password1" required
					  onblur="validate('password', this.value)"
					  name="password" placeholder="Enter Password">
						<p id="password"></p>
					</div>
					 <div class="col-sm-6">
					  <label for="cpassword1"><span class="glyphicon glyphicon-eye-open"></span> Confirm Password*</label>
					  <input type="password" class="form-control" id="cpassword1" name="cpassword" required
						onkeypress="validate('cpassword', this.value)" placeholder="Confirm Password">
						<p id="cpassword"></p>
					</div>
				</div>
            </div>
            
			<div class="alert alert-success" id="err4"><p class="text-center">
			  <strong>Loading!</strong></p>
			</div>
			<div id="err5">
              <button type="submit" name="register" id="register" onClick="checkForm()" 
			  class="btn btn-success btn-block"  style="background:#284761;width:150px">Register</button>
			  </div>
          </form>
		  
        </div>
        <!--<div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left"  style="background:#284761;width:150px" data-dismiss="modal">
		  <span class="glyphicon glyphicon-remove"></span> Cancel</button>
           
        </div>-->
      </div>
      
    </div>
  </div>
  
  <script>
$(document).ready(function()
{	
	$("#err3").hide();
	 $("#err4").hide();
	$("#register").click(function()
	{		
	var fname =$('#fname1').val();
	var lname =$('#lname1').val();
	var gender =$('#gender').val();
	var dob =$('#dob').val();
	var address =$('#address1').val();
	var city =$('#city1').val();
	var district =$('#district1').val();
	var contact =$('#contact1').val();
	var mobile =$('#mobile').val();
	var email =$('#email1').val();
	var iemail =$('#iemail1').val();
	var password =$('#password1').val();
	var cpassword =$('#cpassword1').val();
	 
	var dataString ='fname='+fname+'&lname='+lname+'&gender='+gender+'&dob='+dob+'&address='+address+'&city='+city+'&district='+district+'&contact='+contact+'&mobile='+mobile+'&email='+email+'&iemail='+iemail+'&password='+password+'&cpassword='+cpassword;
	
	$.ajax({
	type: "POST",
	url: "ajax_registration.php",
	data: dataString,
	cache: false,
	 beforeSend: function() {
         $("#err5").hide();
         $("#err4").show();
		 
       
    },
	success: function(result){
		
	$("#err3").show(300);
	$('#err3').html(result);
	$("#err3").hide().slideDown();
	setTimeout(function(){
				  	$("#err3").hide();        
			  }, 30000);	
			  $("#err5").show();
         $("#err4").hide();
	}
	
	});	 
return false;
	});
}
);
</script> 
			 
				<div class="clearfix"></div>
			</div>
			<?php
				$opt= @$_GET['page'];
				if($opt=='dashboard')
				{
					include('dashboard.php');
				}
				else if($opt=='editprofile')
				{
					include('editprofile.php');
				}
				else if($opt=='buyticket')
				{
					include('buyticket.php');
				}
				else if($opt=='bookticket')
				{
					include('bookticket.php');
				}
				else if($opt=='selectseat')
				{
					include('selectseat.php');
				}
				else if($opt=='selectseatbox')
				{
					include('selectseatbox.php');
				}
				else if($opt=='contact')
				{
					include('contact.php');
				}
				else if($opt=='about')
				{
					include('about.php');
				}
				else if($opt=='rates')
				{
					include('rates.php');
				}
				else if($opt=='videos')
				{
					include('videos.php');
				}
				else if($opt=='movies')
				{
					include('movies.php');
				}
				else if($opt=='success')
				{
					include('success.php');
				}
				else if($opt=='cancel')
				{
					include('cancel.php');
				}
				else if($opt=='confirmbooking')
				{
					include('confirmbooking.php');
				}
				else if($opt=='success')
				{
					include('success.php');
				}
				else if($opt=='activateuser')
				{
					include('activateuser.php');
				}
				else if($opt=='bookinghistory')
				{
					include('bookinghistory.php');
				}
				 
				else
				{
			?>
			<div class="header-info" >
			<br>
				<h1><?php echo $f['movie_name']; ?></h1>
				<p class="age"><a href="#">Cast</a><?php echo $f['movie_cast']; ?> </p>
				<p class="review">Rating	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; 
				<?php echo $f['movie_ratings']." / 5"; ?></p>
 				<p class="special"><?php echo $f['movie_details']; ?></p>
				<a class="video" href="<?php echo $f['movie_embed']?>"><i class="video1"></i>WATCH TRAILER</a>
				<?php if (isset($_SESSION['movieuser']))
				{
					echo '<a class="book" href="index.php?page=bookticket" ><i class="book1" ></i>BOOK TICKETS</button></a>';
				}
				else
				{
				echo '<a class="book" href="#" id="myBtnlogin1" data-toggle="modal" data-target="#log"><i class="book1" ></i>BOOK TICKETS </button></a>';	
				}
				?>
			</div>
		</div>
		<div class="review-slider">
			 <ul id="flexiselDemo1">
			 <?php
				while($a=mysqli_fetch_array($query,MYSQLI_ASSOC))
				{
					$movie=$a['movie_name'];
					$image=$a['movie_image'];
					echo "<li><img src='admin/images/$movie/$image' width='2000px' height='1000px' 
					class='img img-responsive' alt=''/></li>";
				}
			 ?>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo1").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 4
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>
		<div class="video_holder">
        <video controls>
            <source src=vid/IMAXintro.mp4 type="video/mp4">Your browser does not support the video tag.
    	</video>
    	</div>
		<div class="news">
			<div class="col-md-6 news-left-grid">
				<h3>Don’t be late,</h3>
				<h2>Book your ticket now!</h2>
				<h4>Easy, simple & fast.</h4>
				 
				<?php if (isset($_SESSION['movieuser']))
				{
					echo '<a class="book1" href="index.php?page=bookticket"><i class="book" ></i>BOOK TICKET</button></a>';
				}
				else
				{
				echo '<a class="book1" href="#" id="myBtnlogin2" data-toggle="modal" data-target="#log"><i class="book" ></i>BOOK TICKET</button></a>';	
				}
				?>
				<p>Get Discount up to <strong>30%</strong> if you are a student!!</p>
			</div>
			<div class="col-md-6 news-right-grid">
				<h3>News</h3>
				<div class="news-grid">
					<h5>Lorem Ipsum Dolor Sit Amet</h5>
					<label>Dec 18 2019</label>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				</div>
				<div class="news-grid">
					<h5>Lorem Ipsum Dolor Sit Amet</h5>
					<label>Jan 11 2020</label>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				</div>
				<a class="more" href="#">GO TO TOP</a>
			</div>
			<div class="clearfix"></div>
		</div>
 
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>	
<?php
 	}
?>
	<div class="footer" style="background:#CCC">
		<h6 align="center">THIS WEBSITE USES COOKIES TO IMPROVE OUR WEBSITE, PROVIDE MORE PERSONALISED SERVICES TO YOU AND ANALYSE OUR TRAFFIC. TO FIND OUT MORE INFORMATION ABOUT OUR USE OF COOKIES PLEASE READ OUR COOKIES POLICY.</h6>
	</div>	
		<div class="copyright">
			<p> <a href="#">&copy; 2020 Arthur Corporation</a></p>
		</div>
	</div>	
	</div>
	</div>

	<div class="clearfix"></div>
	

 
</body
></html>

<?php
	 
	extract ($_POST);
	 
	if (isset($login1))
	{$password=md5($password);
echo $password ."<br/>";
		$sql="select * from users where user_email='$username' and user_password='$password'";
		echo $sql;
		$query=mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
		// If result matched $username and $password, table row must be 1 row
		  if($count==1)
		  {	
			$a=mysqli_fetch_array($query,MYSQLI_ASSOC);
			 $_SESSION['movieuser'] = $username;
			 $_SESSION['userid'] = $a['user_id'];
			 
			 
			 header("location:index.php?page=dashboard");
		  }
		  else
		  {
			?>  
			 <script>

$(document).ready(function()
{	
	 
	 
	$("#loginx").show();
		$("#loginx").hide().slideDown();
		setTimeout(function(){
		$("#loginx").hide();        
		}, 3000);
		
 		$("#loginx").html("Wrong Credentials ");
  	 
});
</script>

<?php
		  }
	}
?>
<?php
	ob_end_flush();
?>