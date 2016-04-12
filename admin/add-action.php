<?php 


	// var_dump($_POST);
	include('login-check.php');
	include('../database.php');

	//prepare an insert statement with posted data
	$statement = $db_connection->prepare(
		"INSERT INTO Content(Title, Short_Description, Long_Description) VALUES(?,?,?)"
	);

	$statement->bind_param(
		//sss means string, string, string
		"sss",
		$_POST['Title'],
		$_POST['Short_Description'],
		$_POST['Long_Description']
	);

	$statement->execute();


 ?><!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<h1>cat dog added</h1>
 	<a href="index.php">back to menu</a> <!-- index menu in the admin folder -->
 </body>
 </html>




