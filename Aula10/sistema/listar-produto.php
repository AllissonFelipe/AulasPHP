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
    <title>Lista de Produto :: CRUD</title>
</head>
<body>
    
    <div class="container">
        <h3>Lista de Produtos</h3>
        <table class="table">
            <thead> <!-- table head -->
                <tr> <!-- table row ou linha da tabela -->
                    <th scope="col">Nº Produto</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php
                include("conexao.php");

                // código para consulta
                $sql = "SELECT * FROM `estoque`";
                $busca = mysqli_query($conexao, $sql);
                while($array = mysqli_fetch_array($busca)) {
                    $id_estoque = $array["id_estoque"];
                    $nroproduto = $array["nroproduto"];
                    $nomeproduto = $array["nomeproduto"];
                    $categoria = $array["categoria"];
                    $quantidade = $array["quantidade"];
                    $fornecedor = $array["fornecedor"];
            ?>
            <tr>
                <td><?php echo $nroproduto ?></td> <!--table data-->
                <td><?php echo $nomeproduto ?></td> <!--table data-->
                <td><?php echo $categoria ?></td> <!--table data-->
                <td><?php echo $quantidade ?></td> <!--table data-->
                <td><?php echo $fornecedor ?></td> <!--table data-->
                <!-- espaço para criar botão excluir e editar -->
                <td>
                    <a class="btn btn-sm btn-warning" href="editar-produto.php?id=<?php echo $id_estoque?>" role="button">Editar</a>
                    <a class="btn btn-sm btn-warning" href="excluir.php?id=<?php echo $id_estoque?>" role="button">Excluir</a>
                </td>
            <?php 
                }
            ?>
            </tr>
            
        </table>
        
        <!-- botão voltar para index -->
        <div style="text-align:right;">
                <a href="index.php" class="btn btn-sucess btn-sm estilo-botao">Voltar</a>
        </div>

    </div><!-- container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>