<?php
include('funcoes.php');

// Variáveis que pegam os campos(parâmetros) pra calcular a SOMA
$numberA = $_POST["number_a"]; 
$numberB = $_POST["number_b"];

echo "O resultado da soma é: ". calcularSoma($numberA, $numberB);
// Variáveis que pegam os campos(parâmetros) pra calcular a SOMA



// Variáveis que pegam os campos(parâmetros) pra calcular a MÉDIA
$a = $_POST["txt_a"];
$b = $_POST["txt_b"];
$c = $_POST["txt_c"];

echo "A média igual a " . calcularMedia($a, $b, $c);
// Variáveis que pegam os campos(parâmetros) pra calcular a MÉDIA


echo "<br>";
echo "<br>";

// TABUADA
$tabuA = $_POST["tabu_a"];

echo tabuada($tabuA);
// TABUADA

?>