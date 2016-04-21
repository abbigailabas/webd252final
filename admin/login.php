<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">

			<form method="post" action="login-action.php" class="col s6 push-s3">
				
				<div class="card white ">
	            	<div class="card-content black-text">
		            	<h3 class="card-title">Happy Hammock Login</h3>
						
						<div class="row">
							<div class="input-field col s12">
								<input name="Username" placeholder="Username" id="Username" type="text" class="validate">
								<label for="Username">Username</label>
							</div>
						</div>


						<div class="row">
							<div class="input-field col s12">
								<input name="Password" placeholder="Password" id="Password" type="password" class="validate">
								<label for="Password">Password</label>
							</div>
						</div>

						<button type="submit" class="waves-effect waves-light btn orange lighten-3">Login</button>

						<a class="waves-effect waves-light btn orange lighten-3" href="../index.php">Back</a>
					</div>
				</div>

			</form>	

		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</body>
</html>