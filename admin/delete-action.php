<?php 
include('login-check.php');
include('commons/head.php');
include('../database.php');

//Query for specific cat or dog
$statement = $db_connection->prepare(
	"DELETE FROM Content WHERE ID=?"
	);


//replace ? with the actual id
$statement->bind_param(
	'i',
	$_GET['ID']
	);

//run the SQL query
$statement->execute();


?>
<body>
	<h2>Product Deleted!</h2>
	<a href="index.php" class="waves-effect waves-light btn orange lighten-3">Back</a>
</body>
