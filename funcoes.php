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



// Função chegar no SALÁRIO LÍQUIDO
function salarioLiquidoFinal($name1, $age1, $charge1, $salary1) {

    $reajuste = 38/100* $salary1; // 38% x o valor do salário bruto que está sendo pego através do formulário
    $gratificacao = 20/100* $salary1; // 20% x o valor do salário bruto que está sendo pego através do formulário

    $somaparcial = ($salary1 + $reajuste + $gratificacao); // Soma do salário + reajuste de 38% + a gratificação de 20%
    $desconto = 15/100* $salary1; // Desconto de 15% em cima do salário bruto
    $salarioliquido = ($somaparcial - $desconto); // A variável $salarioliquido recebe o resultado do salário total menos o desconto de 15% que está guardado na variável $desconto


    echo "Salário: " . "R$".$salary1;
    echo "<br>";
    echo "<br>";

    echo "Salário bruto: " . "R$".$somaparcial;
    echo "<br>";
    echo "<br>";

    echo $name1 . " com apenas " . $age1 . " anos de idade, com base nos 38% de reajuste, 20% de gratificação e o desconto de 15% do salário total de sua função de " . $charge1 . "." . "<br>";
    echo "Possui o salário líquido de " . "R$".$salarioliquido.".";
}



// Função que calcula quantos dias de vida uma pessoa tem até o dia atual
function diasdevida($ano, $mes, $dia) {
    $idadeDias = 365*$ano + 30*$mes + $dia;
    
    echo 'Você viveu ' . $idadeDias . ' dias';
}


?>