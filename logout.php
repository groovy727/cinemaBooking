<?php 
 session_start();
unset($_SESSION['movieuser']);
header('location:index.php');
?>
