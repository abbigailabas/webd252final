<?php 

include('database.php');

$result = $db_connection->query(
	"SELECT * FROM Content"
);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cats on cats on cats</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<section id="heroImage">
		
		<h1>Happy Hammock</h1>
		
		<h2>swing happily</h2>
		
	</section>

	<div class="container">
		<div class="eachPost" >

		<h3 class="center-align">Happy Hammock Products</h3>
			<ul>

				<?php while($item = $result->fetch_assoc()): ?>

					<li class="card-panel hoverable">
						
						<a href = "detail.php?ID=<?php echo $item['ID']?>">
						
							<img class="productImage responsive-img s6" src="imgs/cntower.jpeg" alt="">
							
							<div class="right-align">
								<h3> <?php echo $item['Title']; ?> </h3>
								
								<p> <?php echo $item['Short_Description']; ?> </p>
							</div>
							
						</a>

					</li>

				<?php endwhile; ?>

				<!-- button to RENE.php -->
				<a class="waves-effect waves-light btn orange lighten-3" href="RENE.php">RENE.php</a>

			</ul>	
		</div>
	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</body>
</html>


