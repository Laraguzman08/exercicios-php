<?php

// Exercício 17 – Processador de Texto
// Uma editora deseja gerar automaticamente estatísticas sobre textos enviados pelos
// autores.
// Crie uma função chamada processarTexto() que receba um texto e retorne:
// Quantidade de caracteres;
// Quantidade de palavras;
// Quantidade de frases;
// Palavra mais longa;
// Palavra mais curta;
// Quantidade de palavras repetidas;
// Lista das cinco palavras mais frequentes;
// Texto sem espaços duplicados;
// Texto totalmente formatado (Primeira Letra Maiúscula).
// Requisitos
// Utilizar funções de manipulação de strings.
// Utilizar arrays.
// Criar pelo menos 6 funções auxiliares
// Dica de execução
// 1. Utilize explode() para separar as palavras.
// 2. Utilize array_count_values() para contar repetições.
// 3. Utilize trim() e preg_replace() para remover espaços extras.
// 4. Utilize ucwords() para formatar o texto.
// 5. Utilize um laço para encontrar a maior e a menor palavra

function contarCaracteres($texto) {
    return strlen($texto);
}

function contarPalavras($texto) {
    $palavras = explode(' ', trim($texto));
    return count($palavras);
}

function contarFrases($texto) {
    return preg_match_all('/[.!?]/', $texto);
}

function palavraLonga($texto) {
    $palavras = explode(' ', $texto);
    $maior = '';
    foreach ($palavras as $palavra) {
        if (strlen($palavra) > strlen($maior)) {
            $maior = $palavra;
        }
    }
    return $maior;
}

function palavraCurta($texto) {
    $palavras = explode(' ', $texto);
    $menor = null; 
    foreach ($palavras as $palavra) {
        if ($menor === null || strlen($palavra) < strlen($menor)) {
            $menor = $palavra;
        }
    }
    return $menor;
}

function palavrasRepetidas($texto) {
    $palavras = explode(' ', $texto);
    $contar = array_count_values($palavras);
    $repetidas = 0;
    foreach ($contar as $quantidade) {
        if ($quantidade > 1) {
            $repetidas++;
        }
    }
    return $repetidas;
}

function maisFrequentes($texto) {
    $palavras = explode(' ', $texto);
    $contar = array_count_values($palavras);
    arsort($contar); // artsort ordena o array em ordem decrescente mantendo a associação
    return array_slice($contar, 0, 5);
}

function removerEspaços($texto) {
    return preg_replace('/\s+/', ' ', trim($texto));
}

function formatarTexto($texto) {
    return ucwords($texto);
}

function processarTexto($texto) {
    return [
        'caracteres' => contarCaracteres($texto),
        'palavras' => contarPalavras($texto),
        'frases' => contarFrases($texto),
        'palavra_mais_longa' => palavraLonga($texto),
        'palavra_mais_curta' => palavraCurta($texto),
        'palavras_repetidas' => palavrasRepetidas($texto),
        'palavras_mais_frequentes' => maisFrequentes($texto),
        'sem_espacos' => removerEspaços($texto),
        'texto_formatado' => formatarTexto($texto)
    ];
}

?>