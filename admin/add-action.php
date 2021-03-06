<?php 
	// var_dump($_POST);
	// include('login-check.php');
	include('../database.php');


	if(!empty($_FILES['image']['name'])) {

	  //get file extension of file
	  $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

	  //random filename with username follwed by filename extension
	  session_start();
	  $filename = $_SESSION['username'] . rand(0, 100000) . '.' .$ext;
	  move_uploaded_file(
	    $_FILES['image']['tmp_name'],
	    // $target_path
	    // '../uploads/' . $_FILES['f_image']['name']
	    '../uploads/' . $filename
	  );

	  $statement = $db_connection->prepare("INSERT INTO Content(Large_Image) VALUES (?)");


	$statement->bind_param("s", $filename);
}


	//prepare an insert statement with posted data
	$statement = $db_connection->prepare(
		"INSERT INTO Content(Title, Short_Description, Long_Description, Large_Image) VALUES(?,?,?,?)"
	);

	$statement->bind_param(
		//sss means string, string, string
		"ssss",
		$_POST['Title'],
		$_POST['Short_Description'],
		$_POST['Long_Description'],
		$filename
		

	);

	$statement->execute();


 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 	<title>Happy Hammock</title>
 	<link rel="stylesheet" href="style.css">
 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<link rel="stylesheet" href="style.css">
</head>
 <body>
	
	<div class="container">
		
		<div class="row">
		
			<h1>Product Added!</h1>
		
			<a href="index.php">back to menu</a> <!-- index menu in the admin folder -->
		
		</div>
	
	</div>	
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</body>
</html>




