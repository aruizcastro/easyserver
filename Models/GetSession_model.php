<?php
/**
* 
*/
class GetSession_model extends Connection
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function getSession($username,$password){
		$response = $this->db->selectcondition("*","user","Username='".$username."' and Password='".$password."'");
		return $response;
	}


}

?>