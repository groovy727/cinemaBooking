
<?php
	include ('connection.php');
	extract ($_POST);
	extract ($_GET);
	if($email=="" || $password=="" || $cpassword=="" ||$dob=="" || $district=="" || $city=="" || $address=="" ||$fname=="" || $lname=="")
	{
		echo "<h4><span class='glyphicon glyphicon-exclamation-sign' style='color:green'></span>Please fill all the mandatory fields.</h4>";

		
	}
	else
	{
		$sql=mysqli_query($con,"select * from users where user_email='".$email."'");
	$row=mysqli_num_rows($sql);
	if ($row)
	{
		echo "<h4><span class='glyphicon glyphicon-exclamation-sign' style='color:green'></span>This emailid already exists</h4>";
	}
	else
	{
		if($email!=$iemail)
		{
			echo "<h4 color='red'><span class='glyphicon glyphicon-exclamation-sign' style='color:green'></span>Email-id does not match</h4>";
		}
		else if($password!=$cpassword)
		{
			echo "<h4 color='red'><span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> Password  does not match</h4>";
		}
		else if ($email==$iemail && $password==$cpassword)
		{
		$fname= ucwords($fname);
		$lname= ucwords($lname);
		$password= md5($password);
		 
			$sql="insert into users values ('','".$fname."','".$lname."','".$gender."','".$dob."'
			,'".$address."'	,'".$city."','".$district."','".$mobile."','".$contact."'
			,'".$password."','".$email."','PENDING')";
			if(mysqli_query($con,$sql))
			{
				$actual_link = "demo.phptpoint.com/sanojamovie/index.php?page=activateuser&email=".$email;
			 
				
				require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mx.000webhost.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@paurushpage1.comli.com';                 // SMTP username
$mail->Password = '21feb1993';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('paurushankit5@gmail.com', 'CINEMA BOOKING ');
$mail->addAddress($email);     // Add a recipient
 
    
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'User Registration Activation Email';
$mail->Body    = "Click this link to activate your account. <a href='" . $actual_link . "'><button style='background-color:red; padding:10px;'>Verify Account</button></a>";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

/*if(!$mail->send())
{
    echo "Could not create your account";
			
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else
{
   echo "<h4 class='text-primary text-center'>An email has been send to your registerd email. <br>
					Verify to activate your account.</h4>";
}
*/
				
	echo "Registeration Successful. Please login to enjoy our services.";			
				
				 
		 
		}
		 
	}
	}
	}
	
	
	 
?>
