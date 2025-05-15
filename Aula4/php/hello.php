<?php
    echo "Hello World!";

    //comentário em um linha
    /* 
    comentário em block
    */

    // como declarar uma variável
    $nome = "Allisson";
    echo "<br>";
    echo "Meu nome é " . $nome . "<br>"; // concatenar
    echo "Meu nome é {$nome}"; // literal string

    // usando print
    $retorno = print "<br>Meu nome é: {$nome}";
    echo $retorno;
?>