<?php 

include ('../database.php');


//load user with matching username
$statement = $db_connection->prepare(
	"SELECT * FROM User WHERE Username = ?"
);

// Replace ? with username
$statement->bind_param(
	's',
	$_POST['Username']
);

// Run SQL query
$statement->execute();

// Get result
$result = $statement->get_result();

// user found
if ($result) {
	$user = $result->fetch_assoc();

	// chech if password is correct
	// if ($_POST['Password'] == $user['Password']) {  < this wont work anymore because hash !
	// var_dump(password_verify($_POST['Password'], $user['Password']));
	// die();
	if (password_verify($_POST['Password'], $user['Password'])) {
		// Set flag in session

		session_start();
		$_SESSION['flag'] = TRUE;
		$_SESSION['username'] = $user['Username'];


		// Redirect
		header('location: index.php');
		exit();
	}


}

// back to the
header('location: login.php');



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