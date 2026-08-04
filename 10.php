<?php

// Exercício 10 – Sistema de Notas
// Uma escola precisa automatizar o cálculo das médias dos estudantes.
// Crie uma função chamada calcularMedia() que receba um vetor contendo as notas
// de um aluno.
// A função deverá retornar:
// Maior nota;
// Menor nota;
// Média;
// Situação final (Aprovado, Recuperação ou Reprovado).

function calcularMedia($notas) {

    $maiorNota = max($notas); // encontra a maior nota
    $menorNota = min($notas); // encontra a menor
    $media = array_sum($notas) / count($notas); // calcula média

    // determina a situação final com a média
    if ($media >= 7) {
        $situacaoFinal = "Aprovado";
    } elseif ($media >= 5) {
        $situacaoFinal = "Recuperação";
    } else {
        $situacaoFinal = "Reprovado";
    }

    return [
        'maiorNota' => round($maiorNota, 2), // round pra arredondar a nota pra 2 casas decimais
        'menorNota' => round($menorNota, 2),
        'media' => round($media, 2),
        'situacaoFinal' => $situacaoFinal
    ];

}

$notas = [8.5, 7.0, 6.5, 9.0, 5.5];
$resultado = calcularMedia($notas);
echo "Maior nota: " . $resultado['maiorNota'] . "<br>";
echo "Menor nota: " . $resultado['menorNota'] . "<br>";
echo "Média: " . $resultado['media'] . "<br>";
echo "Situação final: " . $resultado['situacaoFinal'] . "<br>";