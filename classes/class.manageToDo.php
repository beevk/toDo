<?php 
	require_once 'class.database.php';

	class manageToDo {
		public $link;

		public function __construct() {
			$dbConnection = new dbConnection();
			$this->link = $dbConnection->connect();
			return $this->link;
		}

		public function createToDo($username, $title, $description, $dueDate, $createdOn, $status) {
			$sql = "INSERT INTO todo (`username`, `title`, `desc`, `due_date`, `created_date`, `status`) VALUES (?, ?, ?, ?, ?, ?)";
			$query = $this->link->prepare($sql);
			$values = array($username, $title, $description, $dueDate, $createdOn, $status);
			$query->execute($values);
			$count = $query->rowCount();
			return $count;
		}

		public function listToDo($username, $status) {
			$sql = "SELECT * FROM todo WHERE username = ? AND status = ?";
			$query = $this->link->prepare($sql);
			$query->execute([$username, $status]);
			$count = $query->rowCount();

			if($count >= 1) {
				$result = $query->fetchAll();
			}
			else {
				$result = $result;
			}
		}

		public function countToDo($username, $status) {
			$sql = "SELECT count(*) AS TOTAL FROM todo WHERE username = ? AND status = ?";
			$query = $this->link->prepare($sql);
			$query->execute([$username, $status]);
			//Fetches o/p as an object
			$query->setFetchMode(PDO::FETCH_OBJ);
			$count = $query->fetchAll();
			return $count;
		}

		public function editToDo($username, $id, $values = array()) {
			$x = 0;
			foreach ($values as $key => $value) {
				$query = $this->link->query->("UPDATE todo SET $key = '$value' WHERE username = '$username' and id = '$id'");
				$x++;
			}
			return $x;
			
		}

		public function deleteToDo($username, $id) {
			$query = $this->link->query("DELETE FROM todo WHERE username = '$username' AND id = '$id' LIMIT 1");
			$count = $query->rowCount();
			return $count;
		}