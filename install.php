<?php 


include('database.php');

// what do we need to store in this table
// 

$db_connection->query("	
	CREATE TABLE Content(
		ID INT AUTO_INCREMENT,
		Title VARCHAR(255),
		Short_Description TEXT,
		Long_Description TEXT,
		Thumbnail_Image VARCHAR(255),
		Large_Image VARCHAR(255),
		PRIMARY KEY(ID)
	)	

");



var_dump($db_connection);
 ?>