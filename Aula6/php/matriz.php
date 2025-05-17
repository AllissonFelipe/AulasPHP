<?php

    // Representa uma "grelha" 3x3 
    $grelha = [
        [1, 2, 3], //linha 0 - posição 2 [0, 1]
        [4, 5, 6],  //linha 1
        [7, 8, 9] //linha 2
    ];

    $alunos = [
        ["nome" => "Rita", "idade" => 20, "curso" => "T.I"], // aluno 0
        ["nome" => "Carlos", "idade" => 43, "curso" => "ADM"], // aluno 1
        ["nome" => "Sofia", "idade" => 19, "curso" => "Artes"] // aluno 2
    ];
    echo $grelha[1][1] . "<br>"; // saída 5 (linha 1, coluna 1)
    echo $grelha[2][1] . "<br>"; // saída 8 (linha 2, coluna 1)

    // acessar o dado nome "Rita" e a sua respectiva idade
    echo $alunos[0]["nome"] . "<br>";
    echo $alunos[0]["curso"] . "<br><hr>";
    // mudar o curso da Rita
    $alunos[0]["curso"] = "Educação Física";
    echo $alunos[0]["curso"] . "<br><hr>";

    //percorrer a matriz alunos. Normalmente usamos o foreach
    foreach ($alunos as $aluno) {
        echo "Aluno(a): " . $aluno["nome"] . " | ";
        echo "Idade: " . $aluno["idade"] . " | ";
        echo "Curso: " . $aluno["curso"] . "<br>";
    }
?>