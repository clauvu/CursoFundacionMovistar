<?php

    // Funciones
    function paridad($valor){
        if($valor%2==0){
            echo 'PAR';
        }else echo 'IMPAR';
    }
 
    paridad(-4);
?>