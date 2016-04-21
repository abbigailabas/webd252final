<?php 


include('login-check.php');
include('../database.php');
include('commons/head.php');

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

<div class="container">
	<div class="row">
 		<h1>New Hammock Product Added!</h1>
 		<a href="index.php" class="waves-effect waves-light btn orange lighten-3">back to menu</a> <!-- index menu in the admin folder -->
	</div>
</div>

</body>
</html>


