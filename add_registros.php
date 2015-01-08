<?php
 ob_start();
error_reporting(E_ALL);
try{
$mongo = new  MongoClient();
$db = $mongo->selectDB("practica");
$add_persona=$mongo->selectCollection($db,"persona");
}catch(MongoConnectionException $ex)
{
	die("error al conectar al servidor mongodb");
}
catch(MongoException $ex){
die("Error".$ex->getMessage());
}
$nombre=htmlspecialchars(addslashes(stripslashes(strip_tags(trim($_POST['nombre'])))));
$apellido=htmlspecialchars(addslashes(stripslashes(strip_tags(trim($_POST['apellido'])))));
$direccion=htmlspecialchars(addslashes(stripslashes(strip_tags(trim($_POST['direccion'])))));
$telefono=htmlspecialchars(addslashes(stripslashes(strip_tags(trim($_POST['telefono'])))));
$ciudad=htmlspecialchars(addslashes(stripslashes(strip_tags(trim($_POST['ciudad'])))));

$nuevaRegistro=array("nombre"=>$nombre,
					"apellido"=>$apellido,
					"direccion"=>$direccion,
					"telefono"=>$telefono,
					"ciudad"=>$ciudad);
if($add_persona->insert($nuevaRegistro)){

header("Refresh: 0;url=index.php?mensaje=1");
}else {
header("Refrens: 0;url=index.php?mensaje=2");
}

 ?>