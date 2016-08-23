<?php 
	require_once "classes/class.manageToDo.php";
	require_once "libs/session.php";

	$username = $_SESSION['username'];

	$init = new manageToDo();

	if(isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$count = $init->deleteToDo($username, $id);
		if($count == 1) {
			//$deleted = "Deleted Successfully!";
			header('Location: index.php');
		}
		else {
			$delError = "Couldn't delete that! Error!!!";
		}
	}