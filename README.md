# PHP

PHP é uma **linguagem de programação de código aberto, muito utilizada no desenvolvimento web, especialmente para criar páginas dinâmicas e aplicações web**. 

O nome PHP significa Hypertext Preprocessor, e o código PHP é interpretado no servidor e incorporado no HTML. 

Em resumo: PHP é uma linguagem de programação do lado do servidor que permite criar conteúdo dinâmico em websites.

https://www.apachefriends.org/pt_br/download.html

https://hcode.com.br/blog/alterando-a-porta-80-do-apache-no-xampp

[PHP: Hypertext Preprocessor](https://www.php.net/manual/pt_BR/)

# **Sintaxe básica.**

## **Imprimir um texto “Hello World”**

`Echo` - imprimi um valor solicitado

`Print` - imprimi um valor solicitado e sempre retorna 1, é possível atribuir o valor em uma variável.

```php
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
```

## **Variáveis**

PHP é case sensitive, ou seja, a variável $nome é diferente de $NOME e diferente de $Nome

PHP possui tipagem automática ou conhecido como fracamente “tipado”, porem é importante conhecer os tipos de dados que podemos atribuir no PHP.

## **Tipos de dados**

| **Tipo** | **Utilização** | **Exemplo** |
| --- | --- | --- |
| String | Usada para armazenar textos | $echo = “SENAC”; |
| Char | Usado para armazenar um único caractere | $sexo = “M”; |
| Float | Armazena números decimais, “quebrados” | $salario = 2365.15; |
| int | Armazena números inteiros | $idade = 23; |
| Bool | Armazena apenas Verdadeiro ou Falso | $ativo = true;
$ativo = false; |

O nome de variáveis devem começar com uma letra. Não iniciar com números, caracteres especiais e não pode ter espaço, como no exemplo: `$Fale conosco`. O correto é: `$fale_conosco`.

Outro exemplo: `$nome_de_cliente = “Maria”` .

## **Operadores Matemáticos**

Operador de Atribuição é `=`

Os seguintes operadores poderão ser utilizados sem o uso de funções adicionais.

| Exemplo | Nome | Resultado |
| --- | --- | --- |
| **+**$a | **Identidade** | Conversão de $a para `int` ou `float` conforme apropriado |
| **-**$a | **Negação** | Oposto de $a |
| $a **+** $b | **Adição** | Soma de $a e $b |
| $a **-** $b | **Subtração** | Subtração de $a e $b |
| $a ***** $b | **Multiplicação** | Produto de $a e $b |
| $a **/** $b | **Divisão** | Quociente de $a e $b |
| $a **%** $b | **Módulo** | Resto de $a por $b |
| $a ****** $b | **Exponencial** | Resultado de $a elevado por $b |

### **Exemplo:**

```php
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
```

## Operadores de Comparação

Operadores de comparação comparam valores de uma variável com outra.

Vamos pensar em uma variável `$a=5` e `$b=2`

| Exemplo | Nome | Resultado |
| --- | --- | --- |
| $a **==** $b | **Igual** | **F** |
| $a **===** $b | **Idêntico** | **F** |
| $a **!=** $b | **Diferente** | **V** |
| $a **<>** $b | **Diferente** | **V** |
| $a **>** $b | **Maior** | **V** |
| $a **>=** $b | **Maior ou Igual** | **V** |
| $a **<** $b | **Menor** | **F** |
| $a **<=** $b  | **Menor ou Igual** | **F** |

## Operadores Condicionais **If / Else / Else If**

Em PHP, o operador `if` é uma estrutura de controle de fluxo que permite executar um bloco condicionalmente, ou seja, apenas se uma condição for verdadeira. Sua estrutura é:

```php
<?php
if($condicao){
	//código se a condição for verdadeira
} else {
	//caso código se a condição não for atendida
?>
```

### **Exemplo:**

```php
<?php
    //declarar uma variavel chamada idade
    $idade = 17;

    //estrutura condicional
    if($idade > 18) {
        echo "Okay";
    } else {
        echo "Inválido";
    }
?>
```

### **Exemplo 2:**

```php
<?php
    //declarar uma variavel para a senha
    $senha = "12345";
    
    //estrutura condicional 
    if($senha == "123") {
        echo "Acesso Liberado - Nível 1";
    } else if($senha == "1234") {
        echo "Acesso Liberado - Nível 2";
    } else {
        echo "Acesso Negado";
    }
?>
```

### **Exercício sobre estrutura condicional:**

```php
<?php
    //declarando duas variaveis numericas
    $num1 = 8;
    $num2 = 7;

    //estrutura condicional para ver qual variavel possui o valor maior
    if($num1 > $num2) {
        echo "{$num1} é maior que {$num2}";
    } else if($num1 === $num2) {
        echo "{$num1} é igual a {$num2}";
    } else {
        echo "{$num1} é menor que {$num2}";
    }
?>
```

## Uso dos Operadores Lógicos - AND, OR , NOT

Podemos utilizar mais de uma condição no `IF` que são elas:

### **Exemplo com AND** **`(&&)`**

O operador `&&` (E lógico) exige que **TODAS** as condições sejam verdadeiras para o bloco de dentro do `IF` seja executado.

```php
<?php
    $valor = 10;
    $limiteInferior = 5;
    $limiteSuperior = 15;

    echo "Valor: {$valor} <br>";
    echo "Limite Inferior: {$limiteInferior} <br>";
    echo "Limite Superior: {$limiteSuperior} <br>";

    if($valor > $limiteInferior && $valor < $limiteSuperior) {
        echo "O valor está dentro do limite definido.";
    } else {
        echo "O valor NÃO está dentro do intervalo definido";
    }
?>
```

### **Exemplo com OR `(||)`**

O operador `||` (OU lógico) exige que pelo menos uma das condições seja verdadeira para que o bloco do código dentro do `IF` seja executado.

```php
<?php
    $diaSemana = "Domingo";
    $ehFeriado = false;

    echo "Dia da semana: " . $diaSemana . "<br>";
    echo "É feriado? " . ($ehFeriado ? "Sim" : "Não") . "<br>";

    if($diaSemana == "Sábado" || $diaSemana == "Domingo" || $ehFeriado == true) {
        echo "Hoje é um de descanso (fim de semana ou feriado)";
    } else {
        echo "Hoje é um dia útil. Não existe trabalho ruim. Ruim é ter que trabalhar!";
    }
?>
```

### **Exemplo com NOT `(!)`**

O operador NOT `!` (NÃO lógico) inverte o valor de uma condição booleana. Se a condição é `true`, `!condicao` se torna `false` e vice-versa.

```php
<?php
    $usuarioLogado = false;

    //Se NÃO usuário logado
    if(!$usuarioLogado) {
        echo "Atenção! Usuário NÃO logado.";
    } else {
        echo "Bem-vindo de volta!";
    }
?>
```

## SWITCH

A estrutura `switch` (também conhecida como “escolha caso” em português) é uma combinação de controle de fluxo presente em PHP e também em outras linguagens. Oferece uma maneira mais clara, e as vezes, mais eficiente de se comparar uma variável ou expressão com uma série de valores diferentes e executar um bloco de código específico caso uma correspondência seja encontrada.  

### Exemplo

```php
<?php

    $diaSemana = date_default_timezone_set('America/Sao_Paulo');
    $diaSemana = date('w');
    echo $diaSemana;
    switch ($diaSemana) {
        case 0:
            echo "Hoje é Domingo";
            break;
        case 1:
            echo "Hoje é Segunda";
            break;
        case 2:
            echo "Hoje é Terça";
            break;
        case 3:
            echo "Hoje é Quarta";
            break;
        case 4:
            echo "Hoje é Quinta";
            break;
        case 5:
            echo "Hoje é Sexta";
            break;
        case 6:
            echo "Hoje é Sábado";
            break;
        default:
            echo "Dia Inválido. Por favor, insira um número de 1 a 7.";
            break;
    }
?>
```

## WHILE / DO…WHILE / FOR

As estruturas de repetição (ou laços, ou loops) `while`, `do…while` e `for` são fundamentais em PHP para executar um bloco de código várias vezes, até que uma determina condição seja satisfeita ou um número específico de iterações seja alcançado.

### **`WHILE` (Enquanto)**

O laço `while` é o mais simples dos laços. Executa um bloco de código repetidamente enquanto uma condição específica for verdadeira.

```php
<?php
    $contador = 0;

    //enquanto(condição, enquanto condição for verdadeira)
    while($contador < 5) {
        //é executado este bloco
        echo "Número: " . ($contador+1) . "<br>";
        $contador++;
    }
    //bloco executado após sair do loop while
    echo "Fim do loop! <br>";
?>
```

### `DO…WHILE` (Faça…Enquanto)

O laço `do…while` é semelhante ao `while`, com uma diferença crucial: o bloco de código é executado **pelo menos uma vez**, e a condição é verificada após a execução do bloco.

```php
<?php
    $contador = 0;

    do{
        echo "Número: " . $contador . "<br>";
        $contador--;
    } while($contador >= 1);

    echo "Fim do loop do...while";
?>
```

### `FOR` (Para)

O laço `for` é geralmente usado quando você sabe de antemão quantas vezes o bloco de código precisa ser executado. Ele **combina inicialização, condição e incremento/decremento** em uma única linha, tornando o código mais conciso para esse tipo de situação.

```php
<?php
    for($i = 1; $i <= 5; $i++) {
        echo "Número: " . $i . "<br>";
    }
    echo "Acabou o laço FOR.";
?>
```

## Array

Em PHP, um “array” (arranjo) é uma estrutura de dados fundamental e versátil, pois uma array nada mais que uma variável especial que pode conter múltiplos valores sob um único nome.

Os valores armazenados numa array pode ser de qualquer tipo de dados que o PHP suporta: inteiros, floats (números de ponto flutuantes), strings, booleanos, outros arrays (criando arrays multidimensionais ou também chamados de matrizes), objetos, e até mesmo null. Pode misturar diferentes tipo de valores no mesmo array. 

### Vetor

Um “vetor”, no contexto PHP, é geralmente entendido como um arrays unidimensional que utiliza principalmente chaves numéricas inteiras e sequenciais para aceder aos seus elementos. É uma lista simples de valores.

```php
<?php

    //vetor d frutas
    $frutas = ["Maça", "Banana", "Laranja"];
    //as chaves ou índces são adicionadas 0, 1, 2 automaticamente

    //exemplo com vetor de números
    $numeros = [10, 20, 30, 40, 50];

    //vetor com tipos mistos
    $info = [1, "Olá mundo", true];

    //acessando o valor
    echo $frutas[2] . "<br>"; // saída será laranja
    echo $frutas[0] . "<br>"; // saída será maça

    //modificando valores array
    $frutas[0] = "Uva" . "<br>";

    echo $frutas[0] . "Alteramos o valor do índice zero. <br>";

    //percorrer o vetor
    //duas formas for foreach (simples)

    $nomes = ["Ana", "Bruno", "Carlos", "Luciana", "Luiz"];

    //com FOR precisamos usar a função (comando) count() para obter o tamanho
    echo "<br>Nomes (for): <br>";
    $quantidade = count($nomes);

    //usando loop for
    for ($i = 0; $i < $quantidade; $i++) {
        echo $nomes[$i] . "<br>";
    }

    echo "<br><hr>";
    //usando loop foreach bem mais simples
    echo "Nomes (foreach): <br>";
    foreach($nomes as $nome) {
        echo $nome . "<br>";
    } 
    
?>
```

### Matrizes

Uma “matriz” em PHP é uma array, que contém outras arrays como seus elementos. O caso mais comum é um array bidimensional (um array de arrays), que pode ser usado para representar estruturas tabulares como tabelas de uma base de dados, grids, ou listas de registros onde cada registro é ele um próprio array. 

```php
<?php

    // Representa uma "grelha" 3x3 
    $grelha = [
        [1, 2, 3], //linha 0 - posição 2 [0, 1]
        [4, 5, 6],  //linha 1
        [7, 8, 9] //linha 2
    ];

    $alunos = [
        ["nome" => "Rita", "idade" => 20, "curso" => "T.I"], // aluno 0
        ["nome" => "Carlos", "idade" => 43, "curso" => "ADM"], // aluno 1
        ["nome" => "Sofia", "idade" => 19, "curso" => "Artes"] // aluno 2
    ];
    echo $grelha[1][1] . "<br>"; // saída 5 (linha 1, coluna 1)
    echo $grelha[2][1] . "<br>"; // saída 8 (linha 2, coluna 1)

    // acessar o dado nome "Rita" e a sua respectiva idade
    echo $alunos[0]["nome"] . "<br>";
    echo $alunos[0]["curso"] . "<br><hr>";
    // mudar o curso da Rita
    $alunos[0]["curso"] = "Educação Física";
    echo $alunos[0]["curso"] . "<br><hr>";

    //percorrer a matriz alunos. Normalmente usamos o foreach
    foreach ($alunos as $aluno) {
        echo "Aluno(a): " . $aluno["nome"] . " | ";
        echo "Idade: " . $aluno["idade"] . " | ";
        echo "Curso: " . $aluno["curso"] . "<br>";
    }
?>
```

## Funções

Uma função é um bloco de código nomeado que realiza um tarefa específica. Pode pensar numa função como uma “sub-rotina” ou um “procedimento”. Uma vez definida, uma função pode ser “chamada” (ou “invocada”) várias vezes a partir de diferentes partes do seu script, evitando a necessidade de reescrever o mesmo código repetidamente.

### **Motivos para usarmos as funções:**

- **Reutilização de código:** Escreve o código uma vez e usa-o em múltiplos locais.
- **Organização:** Divide um script complexo em partes menores e mais manejáveis. Cada função lida com uma tarefa específica.
- **Legibilidade:** Scripts bem estruturados com funções são mais fáceis de ler e entender.
- Manutenção: Se precisar de alterar a lógica de uma tarefa específica, só precisa de  modificar a função correspondente, em vez de procurar por todas ocorrências desse código no script.
- Abstração: Pode usar uma função sem precisar saber os detalhe exatos da sua implementação interna, apenas o que ela faz e que tipo de entrada (parâmetros) ela espera e que tipo de saída (retorno) ela produz.

```php
<!-- Criar um script em PHP que utilize funções para 
convertar temperaturas entre as escaladas Celsius, Farenheit e Kelvin -->
<?php

//função que retorna um valor
//definindo a função que soma dois números 
// 0 references
function somarDoisNumeros($num1, $num2): mixed {
    $soma = $num1 + $num2;
    return $soma; // a função retorna um valor
}
$resultadoDaSoma = somarDoisNumeros(5, 3);
echo "A soma de 5 e 3 é: " . $resultadoDaSoma . "<br>";

$outroResultado = somarDoisNumeros(100, 55);
echo "A soma de 100 e 55 é: " . $outroResultado . "<br>";

$temperaturaAtual = 32;

//Celsius para Kelvin
function converterCelsiusParaKelvin($temperaturaAtual) {
    return $temperaturaAtual + 273.15;
}
//Celsius para Farenheit
function converterCelsiusParaFarenheit($temperaturaAtual) {
    return $temperaturaAtual * 1.8 + 32;
}
function converterKelvinParaCelsius($temperaturaAtual) {
    return $temperaturaAtual - 273.15;
}

function converterKelvinParaFarenheit($temperaturaAtual) {
    return ($temperaturaAtual - 273.15) * 1.8 + 32;
}
// // Celsius para kelvin e farenheit
// echo "Temperatura Cº: " . $temperaturaAtual . "<br>";
// echo "Temperatura convertida para Kelvin: " . converterParaKelvin($temperaturaAtual) . "<br>";
// echo "Temperatura covertida para Farenheit: " . converterParaFarenheit($temperaturaAtual) . "<br>";
// Kelvin para celsius e farenheit
echo "Temperatura Kº: " . $temperaturaAtual . "<br>";
echo "Temperatura convertida para Celsius: " . converterKelvinParaCelsius($temperaturaAtual) . "<br>";
echo "Temperatura covertida para Farenheit: " . converterKelvinParaFarenheit($temperaturaAtual) . "<br>";
?>
```
