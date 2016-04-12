<?php 


session_start();

if ($_SESSION['flag'] != TRUE) {
	
	header('location:login.php');
	
	exit();

}




 ?>