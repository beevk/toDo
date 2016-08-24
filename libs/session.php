<?php 
	session_start();
	if($_SESSION['username']) {
		$sessionName = $_SESSION['username'];
	}
	else{
		header('Location: login.php');
		//echo "Session not found";
	}