<?php 


include('login-check.php');


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

	<form method="post" action="add-action.php">
		
		<label>Title</label>
		<input name="Title" type="text">
		
		
		<label for="">Short Description</label>	
			
			<textarea name="Short_Description"></textarea>
		

		<label for="">
			Long Description
			<textarea name="Long_Description"></textarea>
		</label>

		<input type="submit" value="submit">
	</form>
</body>
</html>