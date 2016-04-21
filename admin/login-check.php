<?php 
session_start();

if (isset($_SESSION['flag'])) {
	if( $_SESSION['flag'] == FALSE){
		header('location:login.php');
		exit();
	}
}else{
	header('location:login.php');
	exit();
}
 ?>
