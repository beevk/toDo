<?php 
	require_once "libs/loginUsers.php";
 ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>ToDo Maker</title>
 	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 	<script type="text/javascript">
 		$(function() {
 			$('#show-register').click(function() {
 				$('.login-form').hide();
 				$('.register-form').show();
 				return false;
 			});

 			$('#show-login').click(function() {
 				$('.register-form').hide();
 				$('.login-form').show();
 				return false;
 			});
 		});
 	</script>

 </head>

 <body>
 	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
	    	<div class="navbar-header">
	    		<a class="navbar-brand" href="#">ToDo Manager</a>
	    	</div>
		</div>
	</nav><!--End navigation -->

	<div class="container">

		<?php 
			if(isset($error)) {
				echo "<div class='alert alert-danger'> <strong>Error! </strong>" . $error . "</div>";
			}
		?>

		<div class="login-form">
			<h2 class="text-center">Login Form</h2>
			<form method="post" action="login.php" id="center">
				<div class="form-group">
			    	<label for="username">Username:</label>
			    	<input type="text" class="form-control" id="username" name="loginUsername" autofocus>
			  	</div>
			  	<div class="form-group">
			    	<label for="password">Password:</label>
			    	<input type="password" class="form-control" id="password" name="loginPassword">
			  	</div>			
				<button type="submit" class="btn btn-primary" name="login" id="login">Login</button>

				<br /><br />
				<a href="#" id="show-register">Don't have an account?</a>
			</form>
		</div><!-- login-form ends here-->

		<div class="register-form">
			<h2 class="text-center">Register Here</h2>
			<form method="post" action="login.php" id="center">
				<div class="form-group">
			    	<label for="username">Username:</label>
			    	<input type="text" class="form-control" id="username" name="username" autofocus>
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

			  	<button type="submit" class="btn btn-primary" name="register" id="register">Register</button>
			  	<br /><br />
				<a href="#" id="show-login">Already have an account?</a>
			</form>
		</div><!-- register-form ends-->
	</div><!-- container ends-->

 </body>
 </html> 
