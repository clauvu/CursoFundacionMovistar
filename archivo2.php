<?php

    // Inicio el manejo de sesiones.
    session_start();

    //echo $_SESSION['numeros'][1];

    $a = session_id();
    echo 'Tu ID de sesión es: '.$a;

?>