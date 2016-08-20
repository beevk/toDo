<?php 
	class dbConnection {
		protected $dbCon;
		public $dbName = 'toDo';
		public $dbUser = 'root';
		public $dbPassword = 'honeyhive';
		public $dbHost = 'localhost';

		function connect() {
			try{
				$this->dbCon = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName",$this->dbUser,$this->dbPassword);
				return $this->dbCon;
			}
			catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}
