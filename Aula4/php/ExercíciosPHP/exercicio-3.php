<?php
    
    // $ant = 0;
    // $atual = 1;
    
    // for ($i = 0; $i < 15; $i++) {
    //     if ($i == 0) {
    //         echo "Número: " . $ant . "<br>";
    //     } elseif ($i == 1) {
    //         echo "Número: " . $atual . "<br>"; 
    //     } else {
    //         $prox = $ant + $atual;
    //         echo "Número: " . $prox . "<br>";
    //         $ant = $atual;
    //         $atual = $prox;
    //     }
    // }
    
    $sequence = array();
    for ( $i = 0; $i <= 100 ; $i++) { 
        if ($i <= 1) { // Ou começa $i de 0, ou usa "<=" aqui em vez do "<"
            $sequence[$i] = $i;
            echo $sequence[$i] . "<br>";    
        } else{
            $sequence[$i] = $sequence[$i - 1] + $sequence[$i - 2];  
            echo $sequence[$i] . "<br>"; 
        }       
    }
?> 
