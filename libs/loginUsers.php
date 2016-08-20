<?php 
	if(isset($_POST['register'])) {

		require_once "classes/class.manageUsers.php";
		$user = new manageUsers();

		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$rePassword = $_POST['rePassword'];

		$ipAddress = $_SERVER['REMOTE_ADDR'];
		$date = date('Y-m-d');
		$time = date('H:i:s');

		if(empty($username) || empty($password) || empty($email) || empty($rePassword)) {
			$error = 'All fields are required!';
			//echo "Inside empty!";
		}
		else if($password != $rePassword) {
			$error = "Password doesn't match Re-password";
		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error = "Invalid email!";
		}
		else {
			$error = null;
			$checkAvailability = $user->getUserInfo($username);
			if($checkAvailability  == 0) {
				$registerUser = $user->registerUser($username, $email, $password, $ipAddress, $date, $time);
				if($registerUser == 1) {
				//echo "You have successfully registered!";
					$makeSession = $user->getUserInfo($username);
					print_r($makeSession);
				}
			}
			else {
				$error = 'Username already in use! Please choose different username!';
			}
		}
	}