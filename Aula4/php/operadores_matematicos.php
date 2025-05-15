<?php
    //declarar nossas variaveis
    $adicao = 2 + 5;
    $subtracao = 5 - 2;
    $multiplicacao = 5 * 2;
    $divisao = 5 / 2;
?>

<html lang="pt-br">
    <head>
        <title>Operadores Aritméticos</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>2 + 5 = <?php echo $adicao ?></p>
        <p>5 - 2 = <?= $subtracao ?></p>
        <p>5 * 2 = <?= $multiplicacao ?></p>
        <p>5 / 2 = <?= $divisao ?></p>

        <!-- ou fazer calculos com as variaveis -->
        <p>A soma de adição com divisão é: <?= ($adicao + $divisao) ?></p>
    </body>
</html>