<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABM</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/movistar.png"/>
    <?php
      include("include/menu.php");
      include("include/conexion.php");

      $a = 'administrador';
      $b = 'analista';



      // Paso 4) Creamos las consultas de SQL.
      $consulta1 = "select count(distinct usuario) as usuarios from usuario";
      $consulta2 = "select count(distinct usuario) as administradores from usuario where rol = '$a' ";
      $consulta3 = "select count(distinct usuario) as analistas from usuario where rol = '$b' ";
      $consulta4 = "select * from usuario";

      // Paso 5) Ejecutamos la consulta de SQL.
      
      // Extraer el resultado de la query
      $resultado1 = mysqli_query($conexion,$consulta1);
      while($fila = mysqli_fetch_assoc($resultado1)){
        $cantidad_usuarios = $fila['usuarios'];
      };

      $resultado2 = mysqli_query($conexion,$consulta2);
      while($fila = mysqli_fetch_assoc($resultado2)){
        $administradores = $fila['administradores'];
      };

      $resultado3 = mysqli_query($conexion,$consulta3);
      while($fila = mysqli_fetch_assoc($resultado3)){
        $analistas = $fila['analistas'];
      };

      $resultado4 = mysqli_query($conexion,$consulta4);



      // Paso 6) Cerramos la conexión.
      mysqli_close($conexion);

    ?>
  </head>
  <body class="container-fluid">

    <?php menu();   ?>

    <div class="alert alert-primary text-center" role="alert">
      <h3 class="fst-italic">Práctica de ABM con base de datos.</h3>
    </div>
    

    <!-- Fila 1 -->
    <div class="container">
      <div class="row">
        <div class="col-3">
          <button type="button" class="btn btn-primary container-fluid text-start">
            <?php echo 'Usuarios '.$cantidad_usuarios; ?>
          </button> 
        </div>
        <div class="col-3">
          <button type="button" class="btn btn-primary container-fluid">
            <?php echo 'Administradores: '.$administradores; ?>
          </button>
        </div>
        <div class="col-3">
          <button type="button" class="btn btn-primary container-fluid">
            <?php echo 'Analistas: '.$analistas; ?>
          </button>
        </div>
        <div class="col-3">
          <button type="button" class="btn btn-danger container-fluid">
            <a href="alta_usuario.php">Alta de nuevo usuario</a>
          </button>
        </div>
      </div>
    </div>
    <br>
    <!-- Fila 2 -->
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <div class="table-responsive">
          <table class="table table-bordered table-sm table-hover table-dark">
            <thead>
              <tr class="text-center">
                <td>Usuario</td><td>Clave</td><td>Perfil</td><td>Acciones</td>
              </tr>
            </thead>
            <tbody>
              <?php

                while($columna = mysqli_fetch_array($resultado4)){
                  echo "<tr>";
                    echo "<td>".$columna['USUARIO']."</td>
                          <td>".$columna['CLAVE']."</td>
                          <td>".$columna['ROL']."</td>";
                    echo "<td>
                            <a href='#'>Editar |</a>
                            <a href='#'> Eliminar</a>
                          </td>";
                    echo "</tr>";
                }

              ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-2"></div>
    </div>
    
  </body>
</html>
<script src="js/bootstrap.bundle.min.js"></script>