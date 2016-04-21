<?php 
//connect to the database
include('database.php');

// Query for specific cat or dog
// not the way to do it
// $result = $db_connection->query(
// 	"SELECT * FROM Content WHERE ID=1" 
// );

$statement = $db_connection->prepare(
	"SELECT * FROM Content WHERE ID=?"
);

$statement->bind_param(
	"i",			//Type of data ( i = integer, d = decomal, s = sting)
	$_GET['ID']	//Value to replace ? with
);

$statement->execute();

$result = $statement->get_result();

//load first row
$item = $result->fetch_assoc();


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
 
<body id="detail">
 		
 	<div class="container">
 		
 		<h1><?php echo $item['Title']; ?></h1>

	 	<img class="detailImage" src="uploads/<?php echo $item['Large_Image'] ?>">
		
		<p><?php echo $item['Short_Description']; ?></p>
		
		<p><?php echo $item['Long_Description']; ?></p>

		<a class="waves-effect waves-light btn orange lighten-3" href="index.php">Back</a>
	
	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
 </body>
 </html>