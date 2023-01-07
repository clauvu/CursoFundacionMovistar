<?php

    // Busco los datos.
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $clave = $_POST['clave'];

    if(isset($_POST['lenguaje1'])){
        $materia1 = $_POST['lenguaje1'];
    }else $materia1 = '';

    if(isset($_POST['lenguaje2'])){
        $materia2 = $_POST['lenguaje2'];
    }else $materia2 = '';

    if(isset($_POST['lenguaje3'])){
        $materia3 = $_POST['lenguaje3'];
    }else $materia3 = '';

    if(isset($_POST['nivel'])){
        $nivel = $_POST['nivel'];
    }else $nivel = 'El nivel de inglés no fue seleccionado.';
   
    $a = $_POST['selector1'];
    

    // Salida por pantalla.
    echo 'Nombre recibido: '.$nombre.'<br>';
    echo 'Apellido recibido: '.$apellido.'<br>';
    echo 'Clave recibida: '.$clave.'<br>';

    echo 'Lenguajes preferidos: '.$materia1.' '.$materia2.' '.$materia3.'<br>';

    echo 'Nivel de inglés: '.$nivel.'<br>';

    echo 'Motivo de contacto: '.$a.'<br>';



?>