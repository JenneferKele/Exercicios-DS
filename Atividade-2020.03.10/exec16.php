<?php

    $controle = 0
    $tabuada = 4

    while($controle <= 10) {
        $resultado = $tabuada * $controle;
        echo $tabuada . 'x' . $controle . '-' . $resultado;
        echo "<br>";

        $controle = $controle + 1;
    }

?>