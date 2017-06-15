<?php

/**
* 
*/
class SetUser_model extends Connection
{
	
	function __construct()
	{
		parent:: __construct();
	}
	function insertUser($name,$age){
		$array["Name"] = $name;
		$array["Age"] = $age;
		$this->db->insert('user',$array);
		return true;
	}
}


?>