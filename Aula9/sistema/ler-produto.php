<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/ler-produto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Produtos</title>
</head>
<body>
    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nº Produto</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "conexao.php";
                        $sql_query = "SELECT * FROM estoque";
                        if ($result = $conexao ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $id_estoque = $row['id_estoque'];
                                $nroproduto = $row['nroproduto'];
                                $nomeproduto = $row['nomeproduto'];
                                $categoria = $row['categoria'];
                                $quantidade = $row['quantidade'];
                                $fornecedor = $row['fornecedor'];
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $id_estoque; ?></td>
                        <td><?php echo $nroproduto; ?></td>
                        <td><?php echo $nomeproduto; ?></td>
                        <td><?php echo $categoria; ?></td>
                        <td><?php echo $quantidade; ?></td>
                        <td><?php echo $fornecedor; ?></td>
                        <td><a href="updatedata.php?id=<?php echo $Id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="deletedata.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
                            } 
                        } 
                    ?>
                </tbody>
              </table>
        </div>
    </section>
</body>
</html>
