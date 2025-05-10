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