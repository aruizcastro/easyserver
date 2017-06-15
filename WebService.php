<?php 

$function = $_POST["function"];
spl_autoload_register(function($class){
	//condicion que determina si existe determinada clase
	if(file_exists("Library/".$class.".php")){
		require "Library/".$class.".php";
	}
});

spl_autoload_register(function($class){
	//condicion que determina si existe determinada clase
	if(file_exists("Controllers/".$class.".php")){
		require "Controllers/".$class.".php";
	}
});

switch ($function) {
	case 'setUser':
		$setUser = new SetUser();
		$setUser->insertUser($_POST["name"],$_POST["age"]);
		break;
	case 'getSession':
		$image = new GetSession();
		$image->getSession($_POST["username"],$_POST["password"]);
		break;
	case 'getUser':
		$image = new GetUser();
		$image->getUser();
		break;
	case 'getProfile':
		$image = new GetProfile();
		$image->getProfile($_POST["id"]);
		break;
	
	default:
		# code...
		break;
}

?>