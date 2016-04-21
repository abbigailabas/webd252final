<?php 
include('login-check.php');
include('../database.php');
include('commons/head.php');


if(!empty($_FILES['image']['name'])) {

	  //get file extension of file
	  $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

	  //random filename with username follwed by filename extension
	  // session_start();
	  $filename = $_SESSION['username'] . rand(0, 100000) . '.' .$ext;
	  move_uploaded_file(
	    $_FILES['image']['tmp_name'],
	    // $target_path
	    // '../uploads/' . $_FILES['f_image']['name']
	    '../uploads/' . $filename
	  );
}

// prepare UPDATE SQL statement
$statement = $db_connection->prepare(
	"UPDATE Content SET Title=?, Short_Description=?, Long_Description=?, Large_Image=? WHERE ID=?"
);

//replace ?s
$statement->bind_param(
	"ssssi",
	// ! matches with name attribute in form !
	$_POST['Title'],
	$_POST['Short_Description'],
	$_POST['Long_Description'],
	$filename,
	$_POST['ID']

);


//run sql query
$statement->execute();



?><!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
 	<title>Happy Hammock</title>
</head>
<body>

	<div class="container">
		
		<div class="row">

	 		<h1>New Hammock Product Added!</h1>

	 		<a href="index.php" class="waves-effect waves-light btn orange lighten-3">back to menu</a> 
	 		<!-- index menu in the admin folder -->
		
		</div>

	</div>

</body>
</html>


