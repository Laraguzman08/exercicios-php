<?php

// Exercício 09 – Verificador Matemático
// Uma plataforma de ensino deseja verificar algumas propriedades dos números
// informados pelos alunos.
// Crie uma função chamada analisarNumero() que receba um número inteiro e
// informe se ele é:
// Par ou ímpar;
// Primo ou não;
// Perfeito ou não.
// Retorne a todas essas informações.

function analisarNumero($numero) {

    $parOuImpar = ($numero % 2 == 0) ? "Par" : "Ímpar"; // verifica se é par ou ímpar

    // Verifica se é primo
    $primo = true;
    if ($numero < 2) {
        $primo = false;
    } else {
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $primo = false;
                break;
            }
        }
    }

    $primoOuNao = $primo ? "Primo" : "Não Primo"; // verifica se é primo ou não

    // Verifica se é perfeito
    $somaDivisores = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $somaDivisores += $i;
        }
    }
    
    $perfeitoOuNao = ($somaDivisores == $numero) ? "Perfeito" : "Não Perfeito";

    return [
        'parOuImpar' => $parOuImpar,
        'primoOuNao' => $primoOuNao,
        'perfeitoOuNao' => $perfeitoOuNao
    ];

}

$numero = 28;
$resultado = analisarNumero($numero);
echo "Número: " . $numero . "<br>";
echo "Par ou Ímpar: " . $resultado['parOuImpar'] . "<br>";
echo "Primo ou Não: " . $resultado['primoOuNao'] . "<br>";
echo "Perfeito ou Não: " . $resultado['perfeitoOuNao'] . "<br>";

?>
