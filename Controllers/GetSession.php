<?php
/**
* 
*/
class GetSession extends Controllers
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function getSession($username,$password){
		$response = $this->model->getSession($username,$password);
		if(0 < sizeof($response)){

			$data = array("Session" => "true","IdUser"=>$response[0]["IdUser"]);
			echo json_encode($data);
			
		}

		
	}



}

?>