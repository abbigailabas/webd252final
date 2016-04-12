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



$db_connection->query("
	CREATE TABLE User(
		ID INT AUTO_INCREMENT,
		Username VARCHAR(255),
		Password VARCHAR(255),
		PRIMARY KEY(ID)
	)
");

$id = 1;
$username = 'admin';
$password = password_hash('password', PASSWORD_DEFAULT);

$statement = $db_connection->prepare(
	"INSERT INTO User(ID, Username, PAssword) VALUES(?,?,?)"
	);

$statement->bind_param(
	'iss',
	$id,
	$username,
	$password
);

$statement->execute();



 ?>