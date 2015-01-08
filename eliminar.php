<?php 
$mongo = new  MongoClient();
$db = $mongo->selectDB("practica");
$add_persona=$mongo->selectCollection($db,"persona");
 
 $id = $_GET["id"];
	$condicion = array("_id" => new MongoId($id));
	if ($add_persona->count($condicion) == 1)
	{
		$add_persona->remove($condicion);
		header("Refresh: 0;url=listado.php?mensaje=1");
	}else{
    header("Refresh: 0;url=listado.php?mensaje=2");
	}

?>