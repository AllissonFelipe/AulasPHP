<?php

    include("conexao.php");

    $nroproduto = $_POST['nroproduto'];
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

    // inserindo os produtos
    // Inserindo os produtos
    $sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ('$nroproduto','$nomeproduto','$categoria','$quantidade','$fornecedor')";

    $inserir = mysqli_query($conexao, $sql);

?>

<h1>Teste</h1>