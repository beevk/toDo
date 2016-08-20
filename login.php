<?php 
	require_once "libs/loginUsers.php";
 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>ToDo Maker</title>
 	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" -->
 	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
	    	<div class="navbar-header">
	    		<a class="navbar-brand" href="#">ToDo Manager</a>
	    	</div>
		</div>
	</nav><!--End navigation -->


	<form method="post" action="login.php" id="center">

		<?php 
			if(isset($error)) {
				echo "<div class='alert alert-danger'> <strong>Error! </strong>" . $error . "</div>";
			}
		?>

		<div class="form-group">
	    	<label for="username">Username:</label>
	    	<input type="text" class="form-control" id="username" name="username">
	  	</div>
		<div class="form-group">
	    	<label for="email">Email address:</label>
	    	<input type="email" class="form-control" id="email" name="email">
	  	</div>
	  	<div class="form-group">
	    	<label for="password">Password:</label>
	    	<input type="password" class="form-control" id="password" name="password">
	  	</div>
	  	<div class="form-group">
	    	<label for="rePassword">Re-Password:</label>
	    	<input type="password" class="form-control" id="rePassword" name="rePassword">
	  	</div>
	  	<div class="checkbox">
	    	<label><input type="checkbox" name="remember"> Remember me</label>
	  	</div>
	  	<button type="submit" class="btn btn-primary" name="register" id="register">Register</button>
	</form>

 </body>
 </html> 
