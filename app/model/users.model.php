<?php

class users_model {
	
	private $db;
	private $table;
	
	function __construct(){
		
		$this->table = "usuarios";
		$host = "localhost";
		$dbname = "empresaX";
		$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
		$user = "root";
		$pass = "";
		$this->connect($dsn,$user,$pass);
		
	}
	
	private function connect($dsn,$user,$pass){
		try{
			$connection = new PDO($dsn, $user, $pass);
			return $connection;
		}catch (PDOException $error) {
			return null;
		}
	}
	
	private function check_connection (){
		
		return ($this->db) ? true : false;
		
	}
	
	function get($name){
		if ($this->check_connection){
			$query = $this->db->prepare("SELECT pass FROM $this->table WHERE name = ?");
				
			
			$result = $query->execute([$name]);
				

			return ($result->fetch(PDO::OBJ));
		} else {
			
			return false;
			
		}
	}
	
}