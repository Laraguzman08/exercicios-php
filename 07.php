<?php

//Exercício 07 – Sistema de Descontos
// Uma loja virtual oferece descontos conforme o valor da compra.
// Crie uma função chamada calcularDesconto() que receba o valor total da compra
// e aplique as seguintes regras:
// Até R$ 100,00: sem desconto;
// Acima de R$ 100,00: 10%;
// Acima de R$ 500,00: 20%;
// Acima de R$ 1.000,00: 30%.
// Retorne o valor original, o desconto aplicado e o valor final da compra

function calcularDesconto($valorTotal) {

    $desconto = 0;

    if ($valorTotal > 1000) {
        $desconto = 0.30; // 30% de desconto
    } elseif ($valorTotal > 500) {
        $desconto = 0.20; // 20% de desconto
    } elseif ($valorTotal > 100) {
        $desconto = 0.10; // 10% de desconto
    }

    $valorDesconto = $valorTotal * $desconto;
    $valorFinal = $valorTotal - $valorDesconto;

    return [
        'valorOriginal' => round($valorTotal, 2),
        'descontoAplicado' => round($valorDesconto, 2),
        'valorFinal' => round($valorFinal, 2)
    ];

}   

$resultado = calcularDesconto(150);
echo "Valor original: R$ 150,00<br>";
echo "Desconto aplicado: R$ " . $resultado['descontoAplicado'] . "<br>";
echo "Valor final: R$ " . $resultado['valorFinal'] . "<br>";

?>