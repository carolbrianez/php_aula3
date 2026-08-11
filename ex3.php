<?php
    $tamanho = $_GET['tamanho'];
    $genero = $_GET['genero'];

    if($tamanho == 'P'){
        $valor = -5;
    } else if($tamanho == 'M'){
        $valor = +1;
    } else {
        $valor = +10;
    }

    if($genero == 'Masculino'){
        $valor += 30;
    } else{
        $valor +=25;
    }

    echo "Valor da camiseta: " . $valor;

?>