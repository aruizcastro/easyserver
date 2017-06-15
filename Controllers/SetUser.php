<?php

/**
* 
*/
class SetUser extends Controllers
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function insertUser($name,$age){
		if($this->model->insertUser($name,$age)){
			$data = array("Insert" => "insert");
			echo json_encode($data);
		}
	}

}

?>