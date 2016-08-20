<?php 
	class dbConnection {
		protected $dbCon;
		protected $db;
		public $dbName = 'toDo';
		public $dbUser = 'root';
		public $dbPassword = 'honeyhive';
		public $dbHost = 'localhost';

		function connect() {
			try{
				$this->dbCon = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName",$this->dbUser,$this->dbPassword);
				//echo "Connected to DB<br />";
				return $this->dbCon;
			}
			catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}
