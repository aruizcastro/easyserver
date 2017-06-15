<?php

/**
* 
*/
class QueryManager
{
	private $link;
	function __construct($HOST,$USER,$PASS,$NAME)
	{
		$this->link = new mysqli($HOST,$USER,$PASS,$NAME);
		if(mysqli_connect_errno()){
			printf("connect failed %s \n", mysqli_connect_error());
			exit();
		}
	}

	function insert($table,$columns){
		$columnas = null;
		$datos = null;
		foreach ($columns as $key => $value) {
			$columnas .= $key.',';
			$datos .= '"'.$value.'",';
		}
		$columnas = substr($columnas, 0,-1);
		$datos = substr($datos, 0,-1);
		$stmt = "INSERT INTO ".$table." (".$columnas.") VALUES (".$datos.")";
		$result = $this->link->query($stmt) or die($this->link->error);
	}

	function select($attr,$table){
		$query = "SELECT ".$attr." FROM ".$table.";";
		$result = $this->link->query($query);
		if($result->num_rows > 0){
			while ($row = $result->fetch_assoc()) {
				$response[] = $row;
			}
			return $response;
		}
	}


	function selectcondition($attr,$table,$condition){
		$query = "SELECT ".$attr." FROM ".$table." WHERE ".$condition.";";
		$result = $this->link->query($query);
		if($result->num_rows > 0){
			while ($row = $result->fetch_assoc()) {
				$response[] = $row;
			}
			return $response;
		}

	}


}




?>