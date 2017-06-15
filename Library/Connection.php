<?php

/**
* 
*/
class Connection extends Controllers
{
	
	function __construct()
	{
		$this->db = new QueryManager("localhost","root","","easy_todo");
	}
}


 ?>
