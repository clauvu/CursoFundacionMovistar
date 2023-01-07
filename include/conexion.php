<?php
      // Paso 1) Datos de conexión.
      $usuario = 'root';
      $clave = '';
      $servidor = 'localhost';
      $basededatos = 'tp1';

      // Paso 2) Creamos la conexión.
      $conexion = mysqli_connect($servidor,$usuario,$clave);

      // Paso 3) Conectamos con la base de datos.
      $db = mysqli_select_db($conexion,$basededatos);
      mysqli_set_charset($conexion,'utf8');

?>