<?php 
	require_once "listToDo.php";

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$list = $init->listIndividual($username, array("id"=>6));
	}
 ?>