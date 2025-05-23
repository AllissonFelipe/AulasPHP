<?php

    $servername = "localhost"; // padrão - servidor local
    $database = "sistema"; // o nome do banco de dados
    $username = "root"; // usuário padrão
    $password = "senac@02"; // senha de conexão com o banco de dados

    // criar a conexão
    $conexao = mysqli_connect($servername, $username, $password, $database);
    if (!$conexao) {
        //se a conexão falhar, exibe esta mensagem
        die("Conexão Falhou".mysqli_connect_error());
    } else {
        //se a conexão for bem-sucedida
        echo "Conexão bem-sucedido!";
    }
?>