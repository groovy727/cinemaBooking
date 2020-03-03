<?php
	//$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
	//$paypal_id = ' paurushankit5-facilitator@gmail.com'; //Business Email
		
 
	 $category=$_SESSION['category'];
	 
	 $selected_seats=$_GET['seats'];
	 $_SESSION['seat']=$selected_seats;
	 //echo $_SESSION['movieuser'];
	
 
	 //echo $selected_seats."<br>";
	 //fetching Theatre name
	 $sql="select * from theatre where theatre_id=".$_SESSION['theatre'];
	 $query=mysqli_query($con,$sql);
	 $a=mysqli_fetch_array($query,MYSQLI_ASSOC);
	 
	 //fetching movie name  
	 $sql1="select * from movies where movie_id=".$_SESSION['movie'];
	 $query1=mysqli_query($con,$sql1);
	 $b=mysqli_fetch_array($query1,MYSQLI_ASSOC);
	 
	 //fetching show time
	  $sql2="select * from shows where show_id=".$_SESSION['showid'];
	 $query2=mysqli_query($con,$sql2);
	 $c=mysqli_fetch_array($query2,MYSQLI_ASSOC);
	 $_SESSION['show_time']=$c['show_start_time'];
	 //fetching user data
	  $sql3="select * from users where user_email='".$_SESSION['movieuser']."'";
	 $query3=mysqli_query($con,$sql3);
	 $d=mysqli_fetch_array($query3,MYSQLI_ASSOC);
	 $user_id=$d['user_id'];
	 $showid=$_SESSION['showid'];
	 $seatid=$_GET['seatid'];
	 //echo "<br><br><br>".addslashes($seatid);
	 $seatid2=addslashes($seatid);
	 //echo "<br><br><br>".stripslashes($demo);
 
	 //string manupulation
		//ucwords($name)
	 
	 //echo "<br><br><br>".$seatid;
	 $show_date=$_SESSION['date'];
	 $category= $_SESSION['category'];
	 date_default_timezone_set('Asia/Kolkata');
	 $date=date("Y-m-d H:i:s");
	$sql4="insert into booking (booking_id,show_id,show_date,status,category,user_id,seat,time) 
	 values ('','$showid','$show_date','PENDING','$category','$user_id','$seatid2',now())";
	 mysqli_query($con,$sql4);
	 
	 //code to fetch booking id
	 $sql5="select * from booking where show_id='".$showid."' and show_date='".$show_date."' and 
	 category='".$category."' and seat='".$seatid2."'";
	 $query5=mysqli_query($con,$sql5);
	 $res5=mysqli_fetch_array($query5);
	 $bookingid=$res5['booking_id'];
	 $_SESSION['bookingid']=$bookingid;
	  
?>
<html>
<head>
 
<style>
.header{
background-color:white;
 background-image:none;}
</style>
<script type="text/javascript">
	function preventBack(){
		window.history.forward();}
		setTimeout("preventBack(),0");
		window.onunload=function (){null};
		
function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };

$(document).ready(function(){
$(document).on("keydown", disableF5);
});
</script>
<body >
<br>
<br>
<script>
	//define your time in second
		var c= '<?php echo $_GET['time'];?>';
        var t;
        timedCount();

        function timedCount()
		{

        	 
        	var seconds = c ;

        	var result =   + (seconds  < 10 ? "0" + seconds : seconds);

            
        	$('#timer').html(result);
            if(c == 0 )
			{
            	//setConfirmUnload(false);
                //$("#quiz_form").submit();
				window.location="index.php?page=bookticket";
			}
            c = c - 1;
            t = setTimeout(function()
			{
			 timedCount()
			},
			1000);
        }
	</script>
	
	<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<div class="well" ><h1 class="text-center">You have <span id="timer" style="color:red"></span> 
		seconds to complete this booking.</h1></div>
	</div>
	
		 
	</div>
<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">	
			<ul class="nav nav-tabs nav-justified">
				<li >
					<a><h4 class="text-center info">Step 1-</h4><p>Make Your Selection</p></a>
				</li>
				<li>
					<?php echo '<a>
					<h4 class="text-center info">Step 2-</h4><p>Selection Preferences</p></a>';?>
				</li>
				<li class="active">
				<a ><h4 class="text-center info ">Step 3-</h4><p>Confirm Booking</p></a>
				</li>
				<li><a><h4 class="text-center info">Step 4-</h4><p>Make Payment</p></a></li>
			  </ul> 
		</div>
		<div class="col-sm-2">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-4">
			<div border="1px solid red" height="auto">
				<h2 style="background-color:black; padding:10px; color:white">Booking Details</h2>
				<table>
				<tr>
				<td colspan="4"><label><h4> Booking Id:</h4></label></td>
				 <td class="text-center"><?php echo $bookingid ?></td>
				</tr>
				<tr>
				<th colspan="4"><label><h4> Theater Name </h4></label></td>
				 <td class="text-center"><?php echo $a['theatre_name'];?></td>
				</tr>
				<tr>
				<td colspan="4"><b><h4> Movie Name </h4></b></td>
				 <td class="text-center"><?php echo $b['movie_name'];?></td>
				</tr>
				<tr>
				<td colspan="4"><label><h4> Show Date </h4></label></td>
				 <td class="text-center"><?php echo $_SESSION['date'] ?></td>
				</tr>
				<tr>
				<td colspan="4"><label><h4> Show Time </h4></label></td>
				 <td class="text-center"><?php echo $c['show_start_time'];?></td>
				</tr>
				<tr>
				<td colspan="4"><label><h4> show Category </h4></label></td>
				 <td class="text-center"> <?php echo $_SESSION['category'];?></td>
				</tr>
				<tr>
				<td colspan="4"><label><h4> Total Tickets </h4></label></td>
				 <td class="text-center"><?php echo $_SESSION['overallseat']; ?></td>
				</tr>
				<tr>
				<td colspan="4"><label><h4> Seat Number </h4></label></td>
				 <td class="text-center"><?php echo $selected_seats ?></td>
				<!-- <td class="text-center"><?php echo $_GET['seatid'] ?></td>-->
				</tr>
				 
				</table>
				<div class="col-sm-6">
					<div class="table-responsive">
						<table class="table" border="1px solid black">
							<tr style="background-color:black; padding:10px;">
								<th style="padding:15px;color:white;">Type</th>
								<th style="padding:15px;color:white;">Qty</th>
								<th style="padding:15px;color:white;">Rate</th>
								<th style="padding:15px;color:white;">Total</th>
							</tr>
							<tr style="padding:5px;" class="table">
								<th class="text-center">Full</th>
								<th class="text-center"><?php echo $_SESSION['fullseat']; ?></th>
								<th class="text-center"><?php echo $_SESSION['f']; ?></th>
								<th > <?php echo $_SESSION['fullprice']; ?></th>
							</tr>
							<tr style="padding:5px;" class="table">
								<th class="text-center">Half</th>
								<th class="text-center"><?php echo $_SESSION['halfseat']; ?></th>
								<th class="text-center"><?php echo $_SESSION['h']; ?></th>
								<th > <?php echo $_SESSION['halfprice']; ?></th>
							</tr>
							<tr style="padding:5px;" class="table">
								<th class="text-right" colspan="3">Total</th>
								 
								<th > <?php echo $_SESSION['overallprice']; ?></th>
								
							</tr>
						</table>						
					</div>
					
				</div>				
			</div>
		</div>
		<div class="col-sm-4">
			<h2 style="background-color:black; padding:10px; color:white">User Details</h2>
			<table>
				<tr>
				<td colspan="4"><label><h4> Full Name</h4></label></td>
				 <td class="text-center"><?php echo $d['user_fname']," ",$d['user_lname']; ?></td>
				</tr>
				<tr>
				<td colspan="4"><label><h4> Address</h4></label></td>
				 <td class="text-center"><?php echo $d['user_address']; ?></td>
				</tr>
				<tr>
				<td colspan="4"><label><h4> City</h4></label></td>
				 <td class="text-center"><?php echo $d['user_city']; ?></td>
				</tr>
				<tr>
				<td colspan="4"><label><h4> District</h4></label></td>
				 <td class="text-center"><?php echo $d['user_district']; ?></td>
				</tr>
				<tr>
				<td colspan="4"><label><h4> Mobile</h4></label></td>
				 <td class="text-center"><?php echo $d['user_contact']; ?></td>
				</tr>
				<td colspan="4"><label><h4> Mail</h4></label></td>
				 <td class="text-center"><?php echo $d['user_email']; ?></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-4">
			<h2 style="background-color:black; padding:10px; color:white">Payment Mode</h2>
			<form method="post" action="pay.php">
				<input type="checkbox" value="yes" required r><span>I agree to Terms & Conditions</span>
				<input type="submit" value="Pay Now" name="paynow" class="btn btn-lg btn-danger"/>
			</form>
			<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		</div>
		
	</div>
	</div>
	</div>
</body>
</html>