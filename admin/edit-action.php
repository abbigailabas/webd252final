<?php 


include('login-check.php');
include('../database.php');


// prepare UPDATE SQL statement
$statement = $db_connection->prepare(
	"UPDATE Content SET Title=?, Short_Description=?, Long_Description=? WHERE ID=?"
);

//replace ?s
$statement->bind_param(
	"sssi",
	// ! matches with name attribute in form !
	$_POST['Title'],
	$_POST['Short_Description'],
	$_POST['Long_Description'],
	$_POST['ID']

);


//run sql query
$statement->execute();



 ?><!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<h1>cat dog Updated!</h1>
 	<a href="index.php">back to menu</a> <!-- index menu in the admin folder -->
 </body>
 </html>