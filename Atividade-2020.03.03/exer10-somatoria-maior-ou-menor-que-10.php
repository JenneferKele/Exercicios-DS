<?php

    $numero1 = 350;
    $numero2 = 85;
     
    $resultado = $numero1 - $numero2;

    echo "resultado =" . $resultado;
    echo "<br>";
    if( $resultado > 10 ){
        echo "resultado maior que 10.";
    }else{
        if( $resultado < 10)
        echo "resultado menor que 10.";
    }
    exit;
?>
