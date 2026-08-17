<?php
    $tamanho = $_GET['tamanho'];
    $genero = $_GET['genero'];
    $quantidade = $_GET['quantidade'];

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

    $total = $valor * $quantidade;

    $desconto = $quantidade * 3;

    if($desconto > 27){
        $desconto = 27;
    }

    $valorDesconto = $total * ($desconto / 100);

    $totalFinal = $total - $valorDesconto;

    echo "Valor final: R$ " . $totalFinal;

?>