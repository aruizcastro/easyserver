<?php

/**
* 
*/
class GetUser_model extends Connection
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function getUser(){
		$response = $this->db->select("*","user");
		return $response;
	}
}



?>