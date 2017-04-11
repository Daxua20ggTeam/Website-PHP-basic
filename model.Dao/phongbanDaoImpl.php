<?php
	
	include 'lib/ConnectDB.php';
	include 'model/phongban.php';
	$phong = new phongban;
	$db = new ConnectDB;
	
	class phongbanDaoImple {
		
		private $conn;
		private $pst;
		private $rs;
		
		public function add($phong){
			$conn = $db->getConnection();
			$pst->fetch(PDO::FETCH_OBJ);
			$pst = $conn->prepare('INSERT INTO tb_phongban VALUES (?,?,?)');
			$rs = $pst->execute();
			while ($rs->fetch()) {
				$rs->
			}

		}

	}
?>