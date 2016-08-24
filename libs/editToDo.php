<?php 
	if(isset($_POST['edit_todo'])) {
		require_once "classes/class.manageToDo.php";
		require_once "session.php";

		$username = $sessionName;
		$id = $_GET['id'];

		$init = new manageToDo();

		if(empty($_POST['title']) || empty($_POST['due_date']) || empty($_POST['label_under'])) {
			$err = "All fields except optional are required!";
		}else {
			if(empty($_POST['progressValue'])) {
				$progress = 0;
			}
			else {
				$progress = $_POST['progressValue'];	
			}

			$title = $_POST['title'];
			$desc = $_POST['desc'];
			$dueDate = $_POST['due_date'];
			$label = $_POST['label_under'];
			
			//echo "{$username} <br> {$id} <br> {$title} <br> {$desc} <br> {$dueDate} <br> {$label} <br> {$progress}";
			//$desc = mysql_real_escape_string($desc);
			//$title = mysql_real_escape_string($title);

			$count = $init->editToDo($username, $id, $title, $desc, $dueDate, $label, $progress);

			print_r($count);
			//$count = 1;

			if($count) {
				$success = "Updated Successfully";
			}
			else {
				$err = "There has been some mistake!";
			}
		}

		
	}