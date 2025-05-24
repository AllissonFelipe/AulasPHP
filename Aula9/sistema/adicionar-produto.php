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

    <div id="tamanho-container" class="container">
        <h3>Formulário de Cadastro de Produtos</h3>
        <form action="inserir-produto.php" method="post">
            <div class="mb-3">
                <label class="form-label destaque">Nº do Produto</label>
                <input type="number" class="form-control" name="nroproduto" required autocomplete="off" placeholder="Insira o número do produto">
            </div>
            <div class="mb-3">
                <label class="form-label destaque">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeproduto" required autocomplete="off" placeholder="Insira o nome do produto">
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
                <input type="number" class="form-control" name="quantidade" required autocomplete="off" placeholder="Insira a quantidade do produto">
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
                <button type="submit" class="btn btn-success botao">Enviar</button>
            </div>
        </form>
    </div><!-- container -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
