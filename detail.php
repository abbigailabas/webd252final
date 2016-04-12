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
 	<title>Document</title>
 	<link rel="stylesheet" href="style.css">
 </head>
 
 <body id="detail">
 		
 		<h1><?php echo $item['Title']; ?></h1>
 		
 		<img class="detailImage" src="imgs/cntower.jpeg" alt="">
 		<p><?php echo $item['Short_Description']; ?></p>
 		<p><?php echo $item['Long_Description']; ?></p>

		<a id="" href="index.php">back home</a>

 </body>
 </html>