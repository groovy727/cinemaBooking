<?php
	$movieuser=$_GET['userid'];
	//echo $userid;
	$sql="select * from users where user_email='$movieuser'";
	$query=mysqli_query($con,$sql);
	$a=mysqli_fetch_array($query,MYSQLI_ASSOC);
?>
<?php
	extract ($_POST);
	if (isset($update))
	{
		/*$sql="update users set user_fname='".$fname."',user_lname='".$lname."',user_gender='".$gender."'
		,user_dob='".$dob."',user_address='".$address."',user_city='".$city."'
		,user_district='".$district."',user_mobile='".$mobile."', 
		user_contact='".$contact."' where user_email='".$movieuser."'";*/
		
		$sql="update users set user_fname='".$fname."',user_lname='".$lname."',user_gender='".$gender."'
		,user_dob='".$dob."',user_address='".$address."',user_city='".$city."' ,user_district='".$district."',user_mobile='".$mobile."', 
		user_contact='".$contact."' where user_email='".$movieuser."'";
		if($query=mysqli_query($con,$sql))
		{	
			//echo "<h2 class='text-center'>Your profile has been updated.</h2>";
			header('location:index.php?page=editprofile&userid='.$movieuser);
		}	
		else
		{
		echo "<h2 class='text-center'>Update Failed</h2>";
		} 
		
	}	
	
?>
 <head>

<style>
.header{
background-color:white;
 background-image:none;
 }
</style>
</head>
<br>
<br>
<h2 class="text-center text-danger">Profile Edit</h2>
 
<div class="row">
	<div class="col-sm-3">
	</div>
	<div class="col-sm-6">
		  <form role="form"   id="myForm" method='post' name="myForm">
            <div class="form-group">
				<div class="row">
					<div class="col-sm-6">
					  <label for="fname1"><span class="glyphicon glyphicon-user"></span> First Name</label>
					  <input type="text" class="form-control" name="fname" id="fname1"
					  value="<?php echo $a['user_fname'] ?>">
						<p id="fname"> </p>
					</div>
					
					<div class="col-sm-6">
					   <label for="lname"><span class="glyphicon glyphicon-user"></span> Last Name</label>
						<input type="text" class="form-control" name="lname"
						id="lname1"   
						value="<?php echo $a['user_lname'] ?>">
						<p id="lname"></p>
					</div>
				</div>
            </div>
 
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						 <label> Gender</label>
						<select name="gender" class="form-control">
							<option Value="Male" <?php if($a['user_gender']=="Male") { echo 'selected="selected"';}?>)>Male</option>
							<option Value="Female" <?php if($a['user_gender']=="Female") { echo 'selected="selected"';}?>)>Female</option>		 
						</select>
					</div>
					<div class="col-sm-6">
					  <label for="dob"> Date of Birth</label>
					  <input type="text" class="form-control" id="dob1" name="dob" 
					  value="<?php echo $a['user_dob'] ?>">
					  
					</div>
				</div>   
	<!--<link rel="stylesheet" href="public/css/reset.css" type="text/css">-->
        <link rel="stylesheet" href="public/css/default.css" type="text/css">
       <!-- <link rel="stylesheet" href="public/css/style.css" type="text/css">-->
		  <script type="text/javascript" src="js/jquery-1.12.0.js"></script>
        <script type="text/javascript" src="js/zebra_datepicker.js"></script>
        <script type="text/javascript" src="js/core.js"></script>    
<script> 
  $(document).ready(function() {
	$('#dob1').Zebra_DatePicker({
    // remember that the way you write down dates
    // depends on the value of the "format" property!
    //direction: [startdate,enddate]
});
  }); 	
</script>				
            </div>
			
			
			<div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address1"  
			  name="address" value="<?php echo $a['user_address'] ?>">
			  <p id="address"></p>
            </div>
			
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						 <label for="city">City</label>
						  <input type="text" class="form-control" id="city1"  
						  name="city" value="<?php echo $a['user_city'] ?>">
						  <p id="city"></p>
					</div>
			        <div class="col-sm-6">
						 <label for="district">District</label>
						  <input type="text" class="form-control" id="district1" 
						  name="district" value="<?php echo $a['user_district'] ?>">
						  <p id="district"></p>
					</div>
				</div>
            </div>
			
			<div class="form-group">
               <div class="row">
				   <div class="col-sm-6">
					<label for="mobile">Mobile</label>
					<input type="number" class="form-control" id="mobile" name="mobile" 
					value="<?php echo $a['user_mobile'] ?>">					  
				   </div>
				   <div class="col-sm-6">
						<label for="contact">Contact Phone No.</label>
						<input type="number" class="form-control" id="contact1" name="contact"
						value="<?php echo $a['user_contact'] ?>">			  
				   </div>
				     
			   </div>
            </div>
			 
              <button type="submit" name="update" class="btn btn-success btn-block">Update</button>
          </form>
	</div>
	<div class="col-sm-3">
	</div>
</div>
<br><br><br><br>



 
