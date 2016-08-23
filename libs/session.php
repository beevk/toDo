<?php 
	session_start();
	if($_SESSION['toDoName']) {
		$sessionName = $_SESSION['toDoName'];
	}
	else{
		header('Location: login.php');
		//echo "Session not found";
	}