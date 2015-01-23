<?php
   $mongo = new  MongoClient();
$db = $mongo->selectDB("practica");
$add_persona=$mongo->selectCollection($db,"persona");

$id = $_POST["id"];


$nombre=htmlspecialchars(addslashes(stripslashes(strip_tags(trim($_POST['nombre'])))));
$apellido=htmlspecialchars(addslashes(stripslashes(strip_tags(trim($_POST['apellido'])))));
$direccion=htmlspecialchars(addslashes(stripslashes(strip_tags(trim($_POST['direccion'])))));
$telefono=htmlspecialchars(addslashes(stripslashes(strip_tags(trim($_POST['telefono'])))));
$ciudad=htmlspecialchars(addslashes(stripslashes(strip_tags(trim($_POST['ciudad'])))));

$condicion = array("_id" => new MongoId($id));
$URegistro=array("nombre"=>$nombre,
					"apellido"=>$apellido,
					"direccion"=>$direccion,
					"telefono"=>$telefono,
					"ciudad"=>$ciudad);
if($add_persona->update($condicion,$URegistro)){

header("Refresh: 0;url=index.php?mensaje=3");
}else {
header("Refrens: 0;url=index.php?mensaje=4");
}
  ?>