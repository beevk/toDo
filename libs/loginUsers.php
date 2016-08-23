<?php 
	if(isset($_POST['register'])) {

		session_start();
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
			$password = md5($password);
			if($checkAvailability  == 0) {
				$registerUser = $user->registerUser($username, $email, $password, $ipAddress, $date, $time);
				if($registerUser == 1) {
				//echo "You have successfully registered!";
					$makeSession = $user->getUserInfo($username);
					//create session if user registers successfully
					foreach ($makeSession as $userSession) {
						$_SESSION['username'] = $userSession['username'];
						if($_SESSION['username']) {
							header('Location: index.php');
						}
					}
				}
			}
			else {
				$error = 'Username already in use! Please choose different username!';
			}
		}
	}

	if(isset($_POST['login'])) {

		session_start();
		require_once "classes/class.manageUsers.php";

		$username = $_POST['loginUsername'];
		$password = $_POST['loginPassword'];

		if(empty($username) || empty($password)) {
			$error = "All fields are required!";
		}
		else {
			$password = md5($password);
			$login = new manageUsers();
			$authUser = $login->loginUser($username, $password);

			if($authUser == 1) {
				$makeSession = $login->getUserInfo($username);
				//create session if user registers successfully
				$_SESSION['username'] = $makeSession['username'];
				if($_SESSION['username']) {
					header('Location: index.php');
				}
			}
			else {
				$error = "Invalid Credentials!";
			}
		}
	}