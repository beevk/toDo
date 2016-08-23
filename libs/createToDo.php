<?php 
	require_once "classes/class.manageToDo.php";
	$init = new manageToDo();

	if(isset($_POST['create_todo'])) {
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		$due = $_POST['due_date'];
		$label = $_POST['label_under'];

		if(empty($title) || empty($due) || empty($label)) {
			$err = "All fields except optional are required!";
		}
		else {
			$title = strip_tags($title);
			$desc = strip_tags($desc);

			$createdOn = date('Y-m-d');
			$username = $_SESSION['username'];

			$create = $init->createToDo($username, $title, $desc, $due, $createdOn, $label);

			if($create == 1) {
				$success = "To-Do created successfully!";
			}
			else {
				$err = "There was an error inserting data!";
			}
		}
	}

 ?>