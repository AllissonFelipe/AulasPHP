<?php
    $contador = 0;

    //enquanto(condição, enquanto condição for verdadeira)
    while($contador < 5) {
        //é executado este bloco
        echo "Número: " . ($contador+1) . "<br>";
        $contador++;
    }
    //bloco executado após sair do loop while
    echo "Fim do loop! <br>";
?>