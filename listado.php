<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Mongodb</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>
	<div class="row">
      <div class="large-12 columns">
      	<div class="panel">
	        <h3>Foundation | Mongodb -Listado personas</h3>
	         
      	</div>
      </div>
    </div>
 
	<div class="row">
		<?php
      error_reporting(0);
      $mensaje = $_GET["mensaje"];
      if ($mensaje == 1) {
        echo " 
          <div data-alert class='alert-box info  radius'>
		   Registro eliminado con éxito
		  <a href='#' class='close'>&times;</a>
		</div>
            
        ";
      }
      if ($mensaje == 2) {
          echo " 
          <div data-alert class='alert-box warning  radius'>
		   Registro no fue eliminado
		  <a href='#' class='close'>&times;</a>
		</div>
            
        ";
      }
      
    ?>
	 <div class="large-12 medium-8 columns">  

	<table>
  <thead>
    <tr>
      <th width="200">Id</th>
      <th>Nombre</th>
      <th >Apellido</th>
      <th  >Dirección</th>
       <th >Teléfono</th>
       <th >Ciudad</th>
       <th >Modificar</th>
       <th >Eliminar</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	  $mongo = new  MongoClient();
	$db = $mongo->selectDB("practica");
	$personas=$mongo->selectCollection($db,"persona");
  	if($personas->count()>0){
  		$columnas=$personas->find();
  	foreach ($columnas as $value) {
  		 
  	?>
    <tr>
      <td><?php echo $value['_id'] ;?></td>
       <td><?php echo $value['nombre'] ;?></td>
       <td><?php echo $value['apellido'] ;?></td>
       <td><?php echo $value['direccion'] ;?></td>
       <td><?php echo $value['telefono'] ;?></td>
       <td><?php echo $value['ciudad'] ;?></td>   
       <td><a href="mod_persona.php?id=<?php echo $value['_id'] ;?>">Modificar</a></td>
       <td><a href="eliminar.php?id=<?php echo $value['_id']; ?>">Eliminar</a></td>    
    </tr>
    <? } }?>
  </tbody>
</table>
 <di class="row">
        <div class="small-9 columns">
           
              <a href="index.php" class="button">Volver</a>
        </div>
      </di>
</div>
</div>
 <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
	<script>
	   .custom-alert-box {
	  @include alert();
	}
	</script>
</body>
</html>