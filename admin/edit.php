<?php 

include('login-check.php');
include('../database.php');


//Query for specific cat or dog
$statement = $db_connection->prepare(
	"SELECT * FROM Content WHERE ID=?"
);


//replace ? with the actual id
$statement->bind_param(
	'i',
	$_GET['id']
);

//run the SQL query
$statement->execute();

//get the results back
$result = $statement->get_result();

//load first row
$item = $result->fetch_assoc();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit cat dog</title>
</head>
<body>
	

	<form method="post" action="edit-action.php">

		<input name="ID" type="hidden" value="<?php echo $item['ID']; ?>">
		
		<label>Title</label>
		<input name="Title" type="text" value="<?php echo $item['Title']; ?>">
		
		
		<label for="">Short Description</label>		
		<textarea name="Short_Description"><?php echo $item['Short_Description']; ?></textarea>
		

		<label for="">Long Description</label>	
		<textarea name="Long_Description"><?php echo $item['Long_Description']; ?></textarea>
		

		<!-- <input type="submit" value="update catdog"> -->
		<button type="submit">Update catdog</button>

	</form>
</body>
</html>