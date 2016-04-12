<?php 


// check if username and password are correct
if ($_POST['Username'] == 'admin' && $_POST['Password'] == 'password') {

	// set flag in session
	session_start();
	$_SESSION['flag'] = TRUE;

	//redirect to index
	header('location:index.php');
	exit();
}

// username and password are wrong goes back to login page
 header('location:login.php');


 ?>