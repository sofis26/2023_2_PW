<?php

function triangulo(){

$lado1 = 6;
$lado2 = 2;
$lado3 = 5;
if ($lado1 == $lado2 and $lado1 == $lado3) {
	echo "É um Triângulo Equilátero";
} elseif ($lado1 != $lado2 and $lado1 != $lado3 and $lado2 != $lado3) {
	echo "É um Triângulo Escaleno";
}else{
	echo "É um Triângulo Isósceles";
}
};
echo triangulo();
echo "<hr>";

?>