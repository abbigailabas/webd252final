<?php 
include('login-check.php');
include('commons/head.php');


include('../database.php');

//query for all content
$result = $db_connection->query(
	"SELECT * FROM Content"
	);



	?>
	
	<div class="container">
		<br>
		<div class="fixed-action-btn" style="bottom: 30px; right: 24px;">
			<a class="btn-floating btn-large waves-effect waves-light red" href="add.php"><i class="material-icons">add</i></a>
		</div>

		<div class="row">

			<?php while($item = $result->fetch_assoc()): ?>
				
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="../uploads/<?php echo $item['Large_Image'] ?>">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<?php echo $item['Title'] ?>
							</span>
							
							<p><a href="edit.php?id=<?php echo $item['ID']; ?>">EDIT</a></p>
						</div>
						<div class="card-reveal">
							<h5>Short Description</h5>
							<p><?php echo $item['Short_Description'] ?></p>
							<h5>Long Description</h5>
							<span class="card-title activator grey-text text-darken-4"><i class="material-icons right">close</i></span>
							<?php echo $item['Long_Description'] ?>

							<p><a href="edit.php?id=<?php echo $item['ID']; ?>">EDIT</a></p>
						</div>
						
					</div>
				</div>

				

				
				
			<?php endwhile; ?>
		</div>
	</div>


	<ul>
		
		
		
		
	</ul>
	
	
	<?php include('commons/footer.php'); ?>