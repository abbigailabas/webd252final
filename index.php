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
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<section id="heroImage">
		<!-- <div class="heroText"> -->
			<h1>Howdy! I'm Abby Abas</h1>
		
			<h2>This is my work.</h2>
		<!-- </div> -->
	</section>

<div class="allPost">
	<ul>

		<?php while($item = $result->fetch_assoc()): ?>

			<li>
				<a href = "detail.php?ID=<?php echo $item['ID']?>">
				<img class="thumbImage" src="imgs/cntower.jpeg" alt="">
				<h3> <?php echo $item['Title']; ?> </h3>
				<p> <?php echo $item['Short_Description']; ?> </p>
				</a>
			</li>

		<?php endwhile; ?>


		<a href="RENE.php">RENE</a>

	</ul>	
</div>

</body>
</html>


