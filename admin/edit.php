<?php 
include('login-check.php');
include('commons/head.php');
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
<div class="container">
	<div class="row">
		<form method="post" action="edit-action.php" class="col s12">

			<div class="row">
				<div class="input-field col s6">
					<input name="Title" placeholder="Title" id="Title" type="text" class="validate" value="<?php echo $item['Title']; ?>">
					<label for="Title">Product Title</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12">
					<textarea id="ShortDescription" class="materialize-textarea" name="Short_Description"><?php echo $item['Short_Description']; ?></textarea>
					<label for="ShortDescription">Short Description</label>		
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12">
					<textarea id="LongDescription" class="materialize-textarea" name="Long_Description"><?php echo $item['Long_Description']; ?></textarea>
					<label for="LongDescription">Long Description</label>	
				</div>
			</div>


			<div class="row">
				 <!-- upload image for post -->
      			<div class="file-field input-field">
        			<div class="btn">
         				<span>image</span>
         				<input id="image" name="image" type="file" accept="image/*" placeholder="test" required>
       			 	</div>
       				<div class="file-path-wrapper">
         				<input class="file-path validate" type="text" placeholder="test">
        			</div>
     			</div>
			</div>





			<input name="ID" type="hidden" value="<?php echo $item['ID']; ?>">

			<button type="submit" class="waves-effect waves-light btn orange lighten-3">Submit</button>

			<a class="waves-effect waves-light btn orange lighten-3" href="../admin/index.php">Back</a>

		</form>
	</div>
</div>


<?php include('commons/footer.php'); ?>