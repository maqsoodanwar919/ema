<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="icon" href="assets/images/favicon.png" type="image/png"> 
	<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css" /> 
	<title>Capitoo</title>
</head>

<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<form action="" mathed="get">
				<div class="form-group">
					<label>First Name</label>
					<input type="text" class="form-control" name="username" placeholder="Enter first name" />
				</div> 
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="Enter password" />
				</div>  
				<input type="submit" class="btn btn-primary btn_submit"   />
			</form>
		</div>



		<div class="col-md-12">
			<?php   
				if (isset($_GET['btn_submit'])) {
					echo $username = $_GET["username"];
					echo $password = $_GET["password"];
				} 
			?>
		</div>


	</div>
</div>
 
 
	
	<script type="application/javascript" src="assets/js/merged_scripts.min.js"></script>
</body>

</html>