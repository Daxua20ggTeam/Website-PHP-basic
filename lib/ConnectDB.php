<?php

	/**
	* 
	*/
	class ConnectDB  
	{
		private $conn = null;
		private $host = 'localhost';
		private $user = 'root';
		private $pass = '';
		private $data = 'dulieu';
		private $result = null;
		public function get_Connection()
		{ 
			$conn = mysqli_connect($host,$user,$pass,$data) or die('Ket noi that bai');
			$this->conn->query('SET NAME UTF-8');
			return $conn;
		}
		// public function select($sql){
		// 	$this->getConnecTion();
		// 	$this->result = $this->conn->query($sql);
		// }
		// public function fetch(){
		// 	if($this->result->num_rows > 0){
		// 		$rows = $this->result->fetch_assoc();
		// 	}else{
		// 		$rows = 0;
		// 	}
		// 	return $rows;
		// }
		// public function command($sql){
		// 	$this->getConnecTion();
		// 	$this->conn->query($sql);
		// }
	}
	
?>