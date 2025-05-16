<?php

    //vetor d frutas
    $frutas = ["Maça", "Banana", "Laranja"];
    //as chaves ou índces são adicionadas 0, 1, 2 automaticamente

    //exemplo com vetor de números
    $numeros = [10, 20, 30, 40, 50];

    //vetor com tipos mistos
    $info = [1, "Olá mundo", true];

    //acessando o valor
    echo $frutas[2] . "<br>"; // saída será laranja
    echo $frutas[0] . "<br>"; // saída será maça

    //modificando valores array
    $frutas[0] = "Uva" . "<br>";

    echo $frutas[0] . "Alteramos o valor do índice zero. <br>";

    //percorrer o vetor
    //duas formas for foreach (simples)

    $nomes = ["Ana", "Bruno", "Carlos", "Luciana", "Luiz"];

    //com FOR precisamos usar a função (comando) count() para obter o tamanho
    echo "<br>Nomes (for): <br>";
    $quantidade = count($nomes);

    //usando loop for
    for ($i = 0; $i < $quantidade; $i++) {
        echo $nomes[$i] . "<br>";
    }

    echo "<br><hr>";
    //usando loop foreach bem mais simples
    echo "Nomes (foreach): <br>";
    foreach($nomes as $nome) {
        echo $nome . "<br>";
    } 
    
?>