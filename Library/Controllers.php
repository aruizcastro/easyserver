<?php 

/**
* 
*/
class Controllers
{
	
	function __construct()
	{
		$this->loadClassmodels();
	}

	function loadClassmodels(){
		$model = get_class($this).'_model';
		$path = 'Models/'.$model.'.php';
		if(file_exists($path)){
			require $path;
			$this->model = new $model();
		}

	}
}


?>