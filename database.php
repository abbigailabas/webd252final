<?php 
 
// Open connection to database
 
$db_connection = mysqli_connect(
	
	'localhost',
	'root',		//username
	'root', 	//password on mac is root / windows its blank
	'catdog' 	//IN CLASS EX. name of database you're cpnnecting too

) or die('Error connecting to database.');

//by doing this you can reuse it in several different scripts if you wanted.



 ?>