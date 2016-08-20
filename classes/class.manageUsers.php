<?php 
	require_once 'class.database.php';

	class manageUsers {
		public $link;

		function __construct() {
			$dbConnection = new dbConnection();
			$this->link = $dbConnection->connect();
			return $this->link;
		}

		public function registerUser($username,$email, $password, $ipAddress, $date, $time) {
			$sql = $this->link->prepare("INSERT INTO users (`username`, `email`, `password`, `ip_address`, `reg_date`, `reg_time`) VALUES (?, ?, ?, ?, ?, ?);");
			$values = array($username, $email, $password, $ipAddress, $date, $time);
			$sql->execute($values);
			$count = $sql->rowCount();
			return $count;
		}

		public function loginUser($username, $password) {
			$sql = $this->link->query("SELECT * FROM users WHERE username = $username AND password = $password");
			$rowCount = $sql->rowCount();

			return $rowCount;
		}

		public function getUserInfo($username) {
			$sql = $this->link->query("SELECT * FROM users WHERE username = $username");
			$count = $sql->rowCount();

			if($count == 1) {
				$result = $sql->fetchAll();
				return $result;
			}
			else {
				return $count;
			}
		}
	}
	
	$users = new manageUsers();
	//echo $users->registerUsers('bob', 'honeyhive', '127.0.0.1', '29-02-2016', '16:21');
 ?>
