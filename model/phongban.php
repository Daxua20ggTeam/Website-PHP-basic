<?php

	class phongBan 
	{
		private $_maPhong;
		private $_tenPhong;
		private $_soLuong;
	
		public function phongBan($_maPhong,$_tenPhong,$_soLuong)
		{
			$this->_maPhong = $_maPhong;
			$this->_tenPhong = $_tenPhong;
			$this->_soLuong = $_soLuong;
		}
		public function set_maPhong($_maPhong){
			$this->_maPhong=$_maPhong;
		}
		public function get_maPhong(){
			echo $this->_maPhong."<br/>";
		}

		public function set_tenPhong($_tenPhong){
			$this->_tenPhong=$_tenPhong;
		}
		public function get_tenPhong(){
			echo $this->_tenPhong."<br/>";
		}

		public function set_soLuong($_soLuong){
			$this->_soLuong=$_soLuong;
		}
		public function get_soLuong(){
			echo $this->_soLuong."<br/>";
		}

		public function toString(){
			return($this->_maPhong.",".$this->_tenPhong.",".$this->_soLuong);
		}
	}
?>