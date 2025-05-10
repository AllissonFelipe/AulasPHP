<?php
    //declarando duas variaveis numericas
    $num1 = 6;
    $num2 = 7;

    //estrutura condicional para ver qual variavel possui o valor maior
    if($num1 > $num2) {
        echo "{$num1} é maior que {$num2}";
    } else if($num1 === $num2) {
        echo "{$num1} é igual a {$num2}";
    } else {
        echo "{$num1} é menor que {$num2}";
    }
?>