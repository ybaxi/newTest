<?php

class DatabaseConnect{
	public function __construct($db_host,$db_username,$db_password){
		if (!@$this->Connect($db_host,$db_username,$db_password)) {
			# code...
			echo "Connection has Failed!";
		}
		else if($this->Connect($db_host,$db_username,$db_password)){
			echo "Connected to " . $db_host;
		}
	}

	public function Connect($db_host,$db_username,$db_password){
		if (!mysql_connect($db_host,$db_username,$db_password)) {
			# code...
			return false;
		} else {
			# code...
			return true;
		}
		
	}
}

$connect = new DatabaseConnect('localhost','root','');

?>