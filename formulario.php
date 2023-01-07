<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/movistar.png"/>
    <?php
      include("include/menu.php");
    ?>
  </head>
  <body class="container-fluid">

    <?php menu();   ?>

    <div class="alert alert-primary text-center" role="alert">
      <h3 class="fst-italic">Práctica envío de datos al servidor.</h3>
    </div>
    <br><br>

    <!-- Formulario -->
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">

        <form action="formulario_destino.php" method="post">
          <div class="form-group">
            <label for="nombre">Nombre del usuario.</label>
            <input type="text" id="nombre" name="nombre" placeholder="Escriba su usuario" class="form-control">
          </div>
          <br>
          <div class="form-group">
            <label for="apellido">Apellido del usuario.</label>
            <input type="text" id="apellido" name="apellido" placeholder="Escriba su apellido" class="form-control">
          </div> 
          <br>
          <div class="form-group">
            <label for="clave">Clave del usuario.</label>
            <input type="password" id="clave" name="clave" placeholder="Escriba su clave" class="form-control">
          </div>          
          <br>
          <hr size="2px" color="black"/>
          <h6>Seleccione lenguajes preferidos</h6>
          <div class="form-group">
            <input type="checkbox" id="lenguaje1" name="lenguaje1" value="php">
            <label for="lenguaje1">PHP</label>
          </div>
          <div class="form-group">
            <input type="checkbox" id="lenguaje2" name="lenguaje2" value="java">
            <label for="lenguaje2">Java</label>
          </div>
          <div class="form-group">
            <input type="checkbox" id="lenguaje3" name="lenguaje3" value="python">
            <label for="lenguaje3">Python</label>
          </div>  
          <br>
          <hr size="2px" color="black"/>
          <fieldset>
            <legend>Seleccione su nivel de inglés.</legend>
            <div class="form-group">
              <label>
                  <input type="radio" name="nivel" value="alto">Alto
              </label>
            </div>
            <div class="form-group">
              <label>
                  <input type="radio" name="nivel" value="medio">Medio
              </label>
            </div>
            <div class="form-group">
              <label>
                  <input type="radio" name="nivel" value="bajo">Inicial
              </label>
            </div>                        
          </fieldset>        
          <br>
          <hr size="2px" color="black"/>

          <div class="form-group">
            <label for="selector1">Seleccione el motivo de su contacto.</label>
            <select name="selector1" id="selector1">
              <option value="consulta">Consulta</option>
              <option value="sugerencia">Sugerencia</option>
              <option value="queja">Queja</option>
            </select>
          </div>


      
          <hr size="3px" color="red"/>
          <button type="submit" class="btn btn-primary container-fluid">Enviar</button>         
        </form>

        <br><br><br><br>
      </div>
      <div class="col-3"></div>
    </div>

    
  </body>
</html>
<script src="js/bootstrap.bundle.min.js"></script>