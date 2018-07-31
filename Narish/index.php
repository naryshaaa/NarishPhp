<!DOCTYPE html>
<html lang="en">
<head> 
	<title>Narish PHP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="index.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</head>
<body>
	<section class="container">

		<p id="test"> test show google</p>

		<p id="clicker">Click me Hide will hide</p>

		<p id="show">click me Hide will show</p>
		<p id="hiding"> hide </p>
	</section>

	<section class="container Login">
		<div class="row">
			<div class="col-lg-12 col-md-10 col-sm-10 col-xs-12">
				<!--<img src="image/bg.jpg"> -->
				<ul class="text-right">
					<li> Narish Anahaw - Tatlonghari </li>
					<li> 25 years old </li>
					<li> Married </li>
				</ul>	

				<div class="form-group">
					<label for="userName"> Username: </label>
					<input type="text" class="form-control" placeholder="Input your Username">
				</div>

				<div class="form-group">
					<label for="passWord"> Password: </label>
					<input type="password" class="form-control" placeholder="Input your password">
				</div>

				<button type="button" class="btn btn-success btn-lg center-block" id="btnLogin"> LOGIN </button>

			</div>	
		</div>
	</section>

	
	<div class="clear"> </div>

	<section class="container">
		<div class="row ">
			<div class="col-lg-12 col-md-10 col-sm-10 col-xs-12 ">

				
				<div class="form-group">
					<label for="user"> Username: </label>
					<input type="text" class="form-control" id="user" placeholder="Input Username here">
				</div>

				<div class="form-group">
					<label for="pass"> Password: </label>
					<input type="password" class="form-control" id="password" placeholder="Input Password here">
				</div>

				<div class="text-center">
					<button type="button" class="btn btn-primary btn-md" id="btnToLogin"> LOGIN </button>
					
					<button type="button" class="btn btn-info btn-md" id="btnToAdd"> Add Member </button>

					<button type="button" class="btn btn-warning btn-md" id="btnToDelete"> Delete Member </button>
				</div>

			</div>	
		</div>
	</section>
	
	<?php
		echo "test php";
	?>

</body>
</html>