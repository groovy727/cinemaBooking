 
<style>
.header{
background-color:white;
 background-image:none;}
</style>
<body>
<br>
<br>
 
 
 
<h1 class="text-primary text-center">Congrats !..Your payment has been successful.</h1>
<div class="row">
<div class="col-sm-3">
</div>
<div class="col-sm-8">
<table>
<tr>
<td><label>Booking ID-</label></td><td> <p class="text-right"><?php echo $_SESSION['bookingid']; ?>.</p></td>
</tr>
<tr>
<td><label>Seat No.-</label></td><td> <p class="text-right"><?php echo $_SESSION['seat']; ?>.</p></td>
</tr>
<tr>
<td><label>Category-</label></td><td> <p class="text-right"><?php echo $_SESSION['category']; ?>.</p></td>
</tr>
<tr>
<td><label>Show Date-</label></td><td> <p class="text-right"><?php echo $_SESSION['date']; ?>.</p></td>
</tr>
<tr>
<td><label>Show Time-</label></td><td> <p class="text-right"><?php echo $_SESSION['show_time']; ?>.</p></td>
</tr> 
<tr>
	  <?php
  date_default_timezone_set("Asia/Kolkata"); 
 $present=date('d-M-Y');
// echo $present;
//if "email" variable is filled out, send email
  
  //echo $_SESSION['movieuser'];
  //Email information
  $admin_email =$_SESSION['movieuser'];
  $email = 'info@phptpoint.com';
  $subject = 'SCORPIO MOVIES TICKET';
  $comment = "Your Booking Details.
				Booking ID-'". $_SESSION['bookingid']."'
				Seat No.-'".$_SESSION['seat']."'
				Show Date-'".$_SESSION['date']."'
				Show Time-'".$_SESSION['show_time']."'
				BookingDate-'".$present."'
				
			";
   
  //send email
 /*if ( mail($admin_email, $subject, $comment, "From:" . $email))
 {
	 echo "<label>Ticket invoice has been sent to your registered email-id.</label> ";
 }*/
?>

</tr>
</table>
</div>
</div>
 

  
 