<?php
    $valor = 10;
    $limiteInferior = 5;
    $limiteSuperior = 15;

    echo "Valor: {$valor} <br>";
    echo "Limite Inferior: {$limiteInferior} <br>";
    echo "Limite Superior: {$limiteSuperior} <br>";

    if($valor > $limiteInferior && $valor < $limiteSuperior) {
        echo "O valor está dentro do limite definido.";
    } else {
        echo "O valor NÃO está dentro do intervalo definido";
    }
?>