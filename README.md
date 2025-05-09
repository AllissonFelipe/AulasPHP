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
