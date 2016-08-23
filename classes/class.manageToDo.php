<?php 
	require_once 'class.database.php';

	class manageToDo {
		public $link;

		public function __construct() {
			$dbConnection = new dbConnection();
			$this->link = $dbConnection->connect();
			//echo "connected!";
			return $this->link;
		}

		public function createToDo($username, $title, $description, $dueDate, $createdOn, $label) {
			$sql = "INSERT INTO todo (username, title, description, dueDate, createdDate, label) VALUES (?, ?, ?, ?, ?, ?)";
			$query = $this->link->prepare($sql);
			$values = array($username, $title, $description, $dueDate, $createdOn, $label);
			$query->execute($values);
			$count = $query->rowCount();
			//print_r($query);
			return $count;
		}

		public function listToDo($username, $label = null) {
			if(isset($label)) {
				$sql = "SELECT * FROM todo WHERE username = ? AND label = ? ORDER BY id DESC";
				$var = array($username, $label);
			}
			else {
				$sql = "SELECT * FROM todo WHERE username = ? ORDER BY id DESC";	
				$var = array($username);
			}
			$query = $this->link->prepare($sql);
			$query->execute($var);
			$count = $query->rowCount();

			if($count >= 1) {
				$result = $query->fetchAll();
				//print_r($result);
			}
			else {
				$result = "";
			}
			return $result;
		}

		public function countToDo($username, $label) {
			$sql = "SELECT count(*) AS TOTAL FROM todo WHERE username = ? AND label = ?";
			$query = $this->link->prepare($sql);
			$query->execute([$username, $label]);
			//Fetches o/p as an object
			$query->setFetchMode(PDO::FETCH_OBJ);
			$count = $query->fetchAll();
			return $count;
		}

		public function editToDo($username, $id, $values) {
			$x = 0;
			foreach ($values as $key => $value) {
				$query = $this->link->prepare("UPDATE todo SET $key = ? WHERE username = ? and id = ?");
				$query->execute([$value, $username, $id]);
				$x++;
			}
			return $x;
			
		}

		public function deleteToDo($username, $id) {
			$query = $this->link->query("DELETE FROM todo WHERE username = '$username' AND id = '$id' LIMIT 1");
			$count = $query->rowCount();
			return $count;
		}
	}