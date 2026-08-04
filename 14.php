<?php

// // Exercício 14 – Estatísticas Numéricas
// Uma empresa de análise de dados precisa gerar informações estatísticas sobre uma
// coleção de números.
// Crie uma função chamada estatisticasNumericas() que receba um vetor de
// números e retorne:
// Soma;
// Média;
// Maior valor;
// Menor valor;
// Mediana;
// Quantidade de números pares;
// Quantidade de números ímpares.

function estatisticasNumericas($numeros) {

    $soma = array_sum($numeros); //array_sum calcula a soma dos elementos do array
    $media = $soma / count($numeros); //calcula a média dividindo a soma pelo número de elementos
    $maior = max($numeros);
    $menor = min($numeros);

    // mediana precisa ordenar o array e pega o valor do meio
    &ordenado = $numeros;
    sort($ordenado);
    $quantidade = count($ordenado);
    $meio = (int)($quantidade / 2); // int divisão para pegar o valor do meio

    if ($quantidade % 2 == 0) {
        $mediana = ($ordenado[$meio - 1] + $ordenado[$meio]) / 2; // se for par pega a média dos dois valores do meio
    } else {
        $mediana = $ordenado[$meio]; // se for ímpar pega o valor do meio
    }

    $pares = 0;
    $impares = 0;
    foreach ($numeros as $numero) { // percorre o array de números e checa se cada número é par ou impar
        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    return [
        'soma' => $soma,
        'media' => $media,
        'maior' => $maior,
        'menor' => $menor,
        'mediana' => $mediana,
        'pares' => $pares,
        'impares' => $impares
    ]

}

?>