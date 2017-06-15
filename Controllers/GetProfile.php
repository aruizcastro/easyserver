<?php 
/**
* 
*/
class GetProfile extends Controllers
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function getProfile($id){
		$i = 0;
		$resources = array();
		$response = $this->model->getProfile($id);
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