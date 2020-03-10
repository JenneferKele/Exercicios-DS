<?php

    $numero1 = 500;
    $numero2 = 200;
     
    $resultado = $numero1 - $numero2;

    echo "resultado =" . $resultado;
    echo "<br>";
    if( $resultado > 0 ){
        echo "resultado positivo.";
    }else{
        if( $resultado < 0 )
        echo "resultado negativo.";
    }
    exit;
?>
