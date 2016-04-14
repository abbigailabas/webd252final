<?php 

session_start();
$_SESSION['flag'] = FALSE;


//redirect to login
header('location:login.php');

 ?>