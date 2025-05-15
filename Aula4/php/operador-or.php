<?php
    $diaSemana = "Domingo";
    $ehFeriado = false;

    echo "Dia da semana: " . $diaSemana . "<br>";
    echo "É feriado? " . ($ehFeriado ? "Sim" : "Não") . "<br>";

    if($diaSemana == "Sábado" || $diaSemana == "Domingo" || $ehFeriado == true) {
        echo "Hoje é um de descanso (fim de semana ou feriado)";
    } else {
        echo "Hoje é um dia útil. Não existe trabalho ruim. Ruim é ter que trabalhar!";
    }
?>