<?php

    $diaSemana = date_default_timezone_set('America/Sao_Paulo');
    $diaSemana = date('w');
    echo $diaSemana;
    switch ($diaSemana) {
        case 0:
            echo "Hoje é Domingo";
            break;
        case 1:
            echo "Hoje é Segunda";
            break;
        case 2:
            echo "Hoje é Terça";
            break;
        case 3:
            echo "Hoje é Quarta";
            break;
        case 4:
            echo "Hoje é Quinta";
            break;
        case 5:
            echo "Hoje é Sexta";
            break;
        case 6:
            echo "Hoje é Sábado";
            break;
        default:
            echo "Dia Inválido. Por favor, insira um número de 1 a 7.";
            break;
    }
?>