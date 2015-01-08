

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
      error_reporting(0);
      $mensaje = $_GET["mensaje"];
      if ($mensaje == 1) {
        
         echo " 
          <div data-alert class='alert-box success  radius'>
       Registro guardado con éxito
      <a href='#' class='close'>&times;</a>
    </div>
            
        ";
      }
      if ($mensaje == 2) {
        echo " 
          <div data-alert class='alert-box warning  radius'>
      Registro no se pudo guardar con éxtio.
      <a href='#' class='close'>&times;</a>
    </div>
            
        ";
      }
      
    ?>
      <div class="large-10 medium-8 columns">  
<form action="add_registros.php" method="post">
  <div class="row">
    <div class="small-8 columns">
      <div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline" >Nombre</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="right-label" placeholder="Nombre" name="nombre" required pattern="[a-zA-Z]+">
         
        </div>
      </div>
       <div class="row" >
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Apellido</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="right-label" placeholder="Apellido" name="apellido" required pattern="[a-zA-Z]+">

        </div>
      </div>
       <div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Dirección</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="right-label" placeholder="Dirección" name="direccion" required pattern="[a-zA-Z]+">
        </div>
      </div>
       <div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Teléfono</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="right-label" placeholder="Teléfono" name="telefono" required pattern="[a-zA-Z]+">
        </div>
      </div>
       <div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Ciudad</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="right-label" placeholder="Ciudad" name="ciudad" required pattern="[a-zA-Z]+">
        </div>
      </div>
      <di class="row">
        <div class="small-9 columns">
            <input class="button small success" type="submit" value="Guardar"> 
              <a href="listado.php" class="button small">Registros</a>
        </div>
      </di>
    </div>
  </div>
</form>  
    </div>
     <div class="large-12 columns">
 
        <div class="panel">
          <h5>Dale un vistazo a otros proyectos creados por mi!</h5>
          <p> Para mas profundidad en el uso de este poderoso framework, consulte la documentación de Foundation</p>
          <a href="http://mblogmongo.herokuapp.com" class="small button" target="_blank" >mBlogMongo</a>       
          <a href="http://ingedwinesneyder.wordpress.com" class="small button success" target="_blank" >Blog</a>
          <a href="http://ingedwinesneyder.hol.es" class="small button warning" target="_blank" >Pagina</a> 
           <a href="https://www.youtube.com/channel/UCCghAQHliodXURGl8d67UCw/videos" class="small button alert" target="_blank" >Canal</a>    
        </div>
      </div>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
