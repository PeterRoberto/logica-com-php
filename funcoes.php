<?php 

// Função de calcular a SOMA
function calcularSoma($nota1, $nota2) {
    $soma = ($nota1 + $nota2);
    return $soma;
}


// Função de calcular a MÉDIA
function calcularMedia($nota1, $nota2, $nota3) {
    $media = ($nota1 + $nota2 + $nota3)/3;
    return $media;
}

// Função TABUADA (NÃO RETORNA NADA)
function tabuada($valor) {
    for($i=0; $i<=10; $i++) {
        echo $valor . " x " . $i . " = " .$i*$valor . "<br>"; 
    }
}


?>