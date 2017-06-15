<?php 
/**
* 
*/
class GetUser extends Controllers
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function getUser(){
		$i = 0;
		$resources = array();
		$response = $this->model->getUser();
		if(0 < sizeof($response)){
			foreach ($response as $key => $value) {
				$resources[$i] = array("IdUser"=>$value["IdUser"],"Name"=>$value["Name"],"Age"=>$value["Age"]);
				$i++;
			}
			$data = array("results" => $resources);
			echo json_encode($data);
		}
	}
}

?>