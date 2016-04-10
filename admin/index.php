<?php 

include('../database.php');

//query for all content
$result = $db_connection->query(
	"SELECT * FROM Content"
);



 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<ul>
		<?php while($item = $result->fetch_assoc()): ?>
		<li><a href="edit.php?id=<?php echo $item['ID']; ?>"><?php echo $item['Title'] ?></a></li>	
		<?php endwhile; ?>
	</ul>


	<ul>
		
		<li><a href="add.php">add cat/ dog</a></li>
		
	</ul>
	
	

</body>
</html>