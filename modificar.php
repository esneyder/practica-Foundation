

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Mongodb</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <div class="row">
      <div class="large-12 columns">
        <h1>Práctica Fundation Mongodb</h1>
      </div>
    </div>
    
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel">
	        <h3>Edwin Esneyder Alvarez</h3>
	         
      	</div>
      </div>
    </div>

    <div class="row">
       <?php
        require_once("connet.php");

        $id = $_GET["id"];
        $condicion = array("_id" => new MongoId($id));
        if ($add_persona->count($condicion) == 1) {
          $persona = $add_persona->findOne($condicion);
        }
      ?>
      <div class="large-10 medium-8 columns">  
<form action="actualizar.php" method="post">
  <div class="row">
    <div class="small-8 columns">
      <div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline" >Nombre</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="right-label" value="<?php echo $persona['nombre'] ?>" placeholder="Nombre" name="nombre" required  >
         
        </div>
      </div>
       <div class="row" >
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Apellido</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="right-label" value="<?php echo $persona['apellido'] ?>" placeholder="Apellido" name="apellido" required >

        </div>
      </div>
       <div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Dirección</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="right-label" value="<?php echo $persona['direccion'] ?>" placeholder="Dirección" name="direccion" required  >
        </div>
      </div>
       <div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Teléfono</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="right-label" value="<?php echo $persona['telefono'] ?>" placeholder="Teléfono" name="telefono" required >
        </div>
      </div>
       <div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Ciudad</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="right-label" placeholder="Ciudad" value="<?php echo $persona['ciudad'] ?>" name="ciudad" required  >
        </div>
      </div>
      <di class="row">
        <div class="small-9 columns">
            <input class="button small success" type="submit" value="Actualizar"> 
              <a href="listado.php" class="button small">Registros</a>
        </div>
      </di>
    </div>
  </div>
</form>  
    </div>
     
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
