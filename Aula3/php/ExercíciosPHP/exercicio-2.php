<?php
    $hora = 5;

    if($hora > 4 && $hora < 12) {
        echo "Bom dia!";
    } else if ($hora > 11 && $hora < 18) {
        echo "Boa tarde!";
    } else if ($hora > 17 && $hora < 24 || $hora > -1 && $hora < 5) {
        echo "Boa noite!";
    } else {
        echo "Hora inválida!";
    }
?>