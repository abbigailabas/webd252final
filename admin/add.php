<?php 


include('login-check.php');
include('commons/head.php');

?>

<div class="container">
	<div class="row">
	<h2>Add New Product Bitch!</h2>
		<form method="post" action="add-action.php" class="col s12" enctype="multipart/form-data">

			<div class="row">
				<div class="input-field col s6">
					<input name="Title" placeholder="Title" id="Title" type="text" class="validate">
					<label for="Title">Product Title</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12">
					<textarea id="ShortDescription" class="materialize-textarea" name="Short_Description"></textarea>
					<label for="ShortDescription">Short Description</label>		
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12">
					<textarea id="LongDescription" class="materialize-textarea" name="Long_Description"></textarea>
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
	         			 <input class="file-path validate" type="text" placeholder="test!">
	        		</div>
      			</div>
			</div>

			<button type="submit" class="waves-effect waves-light btn orange lighten-3">Add Product</button>

			<a class="waves-effect waves-light btn orange lighten-3" href="../admin/index.php">Cancel</a>

		</form>

	</div>
</div>


<?php 
include('commons/footer.php');
?>