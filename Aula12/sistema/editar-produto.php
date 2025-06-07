<?php

    include("conexao.php");
    $id = $_GET["id"];

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
    <title>Editar Produto :: CRUD</title>
</head>
<body>

    <div id="tamanho-container" class="container">
        <h3>Editar Produto</h3>
        <form action="atualizar-produto.php" method="post">

        <?php
            $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {
                $id_estoque = $array["id_estoque"];
                $nroproduto = $array["nroproduto"];
                $nomeproduto = $array["nomeproduto"];
                $categoria = $array["categoria"];
                $quantidade = $array["quantidade"];
                $fornecedor = $array["fornecedor"];
            }
        ?>

            <div class="mb-3">
                <label class="form-label destaque">Nº do Produto</label>
                <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>

                <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display:none">
            </div>
            <div class="mb-3">
                <label class="form-label destaque">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
            </div>
            <!-- SELECT -->
            <div class="mb-3">
                <label class="form-label destaque">Categoria</label>
                <select name="categoria" id="" class="form-select">
                    <option selected>Escolha a categoria do produto</option>
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Smartphones</option>
                </select>
            </div>
            <!-- Quantidade do produto -->
             <div class="mb-3">
                <label class="form-label destaque">Quantidade</label>
                <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
            </div>
            <!-- Fornecedor do produto -->
             <div class="mb-3">
                <label class="form-label destaque">Fornecedor</label>
                <select name="fornecedor" id="" class="form-select">
                    <option selected>Escolha o fornecedor do produto</option>
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                    <option>Fornecedor D</option>
                </select>
            </div>
            <div class="alinha-botao">
                <button type="submit" class="btn btn-success botao">Atualizar</button>
            </div>
        </form>
    </div><!-- container -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
