<?php

function calcularMedia ($numeros) {
    $soma = array_sum($numeros);
    $quantidade = count($numeros); 

    if ($quantidade === 0) {
        return 0; 
    }

    $media = $soma / $quantidade; 

    return $media;
}
echo "<h2>";
$numeros = [1,3,6,9,12];
$media = calcularMedia($numeros);
echo "A média é: $media"; 
echo "<hr>";

?>