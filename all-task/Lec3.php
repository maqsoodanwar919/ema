<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="icon" href="assets/images/favicon.png" type="image/png">
	<link type="text/css" rel="stylesheet" href="assets/css/style.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/responsive.css" />
	<title>Capitoo</title>
</head>

<body>
 
   
    <!-- string mathed -->
	<?php 
	   $db_password = "122456";
	   $db_username = "maqsood";

	   $form_password = "122456";
	   $form_username = "maqsood";


	

    if($db_username == $form_username && $db_password == $form_password){ 
		echo "wellcome to forms";
	}
	else{ 
		echo "form login username and password is wrong";
	}

	?> 
 
	
	<script type="application/javascript" src="assets/js/merged_scripts.min.js"></script>
</body>

</html>