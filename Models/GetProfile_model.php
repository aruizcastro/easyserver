<?php

/**
* 
*/
class GetProfile_model extends Connection
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function getProfile($id){
		$response = $this->db->selectcondition("*","user","IdUser=".$id);
		return $response;
	}
}



?>