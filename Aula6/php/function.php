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