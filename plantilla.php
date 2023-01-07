<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plantilla</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/movistar.png"/>
    <?php
      include("include/menu.php");
      include("include/conexion.php");
    ?>
  </head>
  <body class="container-fluid">

    <?php menu();   ?>

    <div class="alert alert-primary text-center" role="alert">
      <h3 class="fst-italic">Esta es mi plantilla HTML.</h3>
    </div>
    <br><br>

    
  </body>
</html>
<script src="js/bootstrap.bundle.min.js"></script>