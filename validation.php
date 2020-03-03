<?php
session_start();
$value = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "username") {
if (strlen($value) < 4) {
echo "Must be 3+ letters";
} else {
echo "<span>Valid</span>";
}
}
//check for first name
if ($formfield == "fname") {
if (strlen($value) < 4) {
echo "Must be 3+ letters";
} else {
echo "<span>Valid</span>";
}
}
//check for last name
if ($formfield == "lname") {
if (strlen($value) < 4) {
echo "Must be 3+ letters";
} else {
echo "<span>Valid</span>";
}
}
//check for nid
if ($formfield == "nid") {
if (strlen($value) < 10) {
echo "Must be 9+ letters";
} else {
echo "<span>Valid</span>";
}
}
//check for Address
if ($formfield == "address") {
if (strlen($value) < 10) {
echo "Must be 9+ letters";
} else {
echo "<span>Valid</span>";
}
}
//check for city		
if ($formfield == "city") {
if (strlen($value) < 3) {
echo "Must be 2+ letters";
} else {
echo "<span>Valid</span>";
}
}
//check for District
if ($formfield == "district") {
if (strlen($value) < 3) {
echo "Must be 2+ letters";
} else {
echo "<span>Valid</span>";
}
}
//check for contact
if ($formfield == "contact") {
if (strlen($value) < 10) {
echo "Must be 10 letters";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "password") 
{
if (strlen($value) < 6) {
	$_SESSION['password']=$value;
echo "Password: Weak";
} else {
echo "<span>Strong</span>";
}
}
//confirm password
/*
if($formfield == "cpassword")
 {
	 if ($value==$_SESSION['password'])
	 {
	echo "Password does not match";
	}
	 else 
	 {
	echo "<span>Password Match</span>";
	}
}
*/
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") {
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
echo "Invalid email";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "iemail") {
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
echo "Invalid iemail";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid website address when user enters website address in website input field.
if ($formfield == "website") {
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $value)) {
echo "Invalid website";
} else {
echo "<span>Valid</span>";
}
}
?>