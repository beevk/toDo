<?php 
	require_once "classes/class.manageToDo.php";
	require_once "session.php";

	$init = new manageToDo();
	$user = $_SESSION['username'];
	

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		//echo "{$id}<br>";
		$list = $init->listIndividual($username, array("id"=>$id));
		//print_r($list);
	}
	else {
		if(isset($_GET['label'])){
			$label = $_GET['label'];
			$list = $init->listToDo($user, $label);
		}
		else {
			$list = $init->listToDo($user);
		}
	}