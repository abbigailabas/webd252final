<?php 
session_start();
if (isset($_SESSION['flag']) && $_SESSION['flag'] != TRUE) {
	header('location:login.php');
	exit();
}
 ?>