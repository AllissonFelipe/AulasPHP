<?php

    include("conexao.php");

    $id_estoque = $_POST['id'];
    $nomeproduto = $_POST['nomeproduto'];
    $quantidade = $_POST['quantidade'];
    $imagem = $_POST['imagem'];
    

    // inserindo os produtos
    // Inserindo os produtos
    $sql = "UPDATE estoque SET nomeproduto = '$nomeproduto', quantidade = '$quantidade', imagem = '$imagem' WHERE id_estoque = $id_estoque";

    $atualizar = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Estilo da Página -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Formulário e Cadastro Produto :: CRUD</title>
</head>
<body>

    <!-- AVISO -->
     <div class="container">
        <h4>Produto Atualizado com Sucesso</h4>
        <div>
            <a href="listar-produto.php" role="button" class="btn btn-primary btn-sm">Atualizar novo item</a>
            <a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar á página inicial</a>
        </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
</body>
</html>