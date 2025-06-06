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
        echo "Conexão bem-sucedida!" . "<br>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>