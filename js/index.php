<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<title>ThapaCart</title>
	<style>
		.text-end{
			text-align: end;
		}
	</style>
	<script src="assets/test.js"></script>
</head>

<body>

      
   

     
	<div class="container"> 
		<div class="row">
			<div class="col-md-6 mx-auto mt-5 ">
				<h1 class="text-center">Form Validation</h1>
				
				<form class="mt-5" action="" method="POST" enctype="multipart/form-data">
				<div class="form-group mb-3">
					<label class="form-label">Name:</label>
					<input type="text" class="form-control" id="user_name" name="fname">
					<div id="massage" class="form-text"></div>
				</div>
				<div class="form-group mb-3">
					<label class="form-label">Email address:</label>
					<input type="text" class="form-control" id="email" name="email">
					<div id="email_massage" class="form-text"></div>
				</div>
				<div class="form-group mb-3">
					<label class="form-label">Password:</label>
					<input type="password" class="form-control" id="password" name="pass">
					<div id="p_password" class="form-text"></div>
				</div>
				<div class="form-group mb-3">
					<label class="form-label">Confirm Password:</label>
					<input type="password" class="form-control" id="confirm_password" name="cpassword">
					<div id="c_massage" class="form-text"></div>
				</div>
				<div class="form-group mb-3">
					<label class="form-label">Phone Number:</label>
					<input type="text" class="form-control" id="phone" name="phone">
					<div id="phone_massage" class="form-text"></div>
				</div>
				<div class="text-end w-100">
					<input type="submit" class="btn btn-primary w-100 inser_btn"  name="inser_btn">
				</div>
			</form>
				  <?php    
					require_once('inc/db.php');
					if (isset($_POST['inser_btn'])) {  
						$fname = $_POST['fname'];
						$email = $_POST['email']; 
						$p_word = $_POST['pass']; 
						$cpassword = $_POST['cpassword']; 
						$phone = $_POST['phone'];  
						// Insert data query
							// $insert_expense = "INSERT INTO form(fname, email, pass, cpassword, phone)
							// VALUES('$fname', '$email','$p_word', '$cpassword', '$phone')";  
							// $run_expense = mysqli_query($conn, $insert_expense);  
							// if ($run_expense === true) {
							// 	echo "Date has been add"; 

							// } else {
							// 	echo "Date has been not add";
							// }   
						}
					?>
			</div>
		</div>
	</div>  
    
			
	
</body>

</html>