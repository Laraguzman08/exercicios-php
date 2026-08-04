<?php

// // Exercício 05 – Estatísticas de Texto
// Uma editora deseja obter algumas informações sobre os textos enviados pelos
// autores.
// Crie uma função chamada analisarTexto() que receba um texto e retorne:
// Quantidade de palavras;
// Quantidade de caracteres;
// Quantidade de vogais;
// Quantidade de consoantes.

function analisarTexto($texto) {

    $palavras = explode(' ', trim($texto)); // divide o texto em palavras
    $quantidadePalavras = count($palavras); // conta a quantidade

    $quantidadeCaracteres = strlen($texto);

    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $quantidadeVogais = 0;
    $quantidadeConsoantes = 0;

    $caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY); // divide o texto em caracteres

    // foreach é para percorrer cada caractere do texto
    foreach ($caracteres as $caractere) {
        if (in_array($caractere, $vogais)) {
            $quantidadeVogais++;
        } else {
            $quantidadeConsoantes++;
        } // se não for vogal, é consoante
    }

    return [
        'palavras' => $quantidadePalavras,
        'caracteres' => $quantidadeCaracteres,
        'vogais' => $quantidadeVogais,
        'consoantes' => $quantidadeConsoantes
    ];

}

$textoUsuario = "Exemplo de texto";
$resultado = analisarTexto($textoUsuario);

echo "Texto: " . $textoUsuario . "<br>";
echo "Quantidade de palavras: " . $resultado['palavras'] . "<br>";
echo "Quantidade de caracteres: " . $resultado['caracteres'] . "<br>";
echo "Quantidade de vogais: " . $resultado['vogais'] . "<br>";
echo "Quantidade de consoantes: " . $resultado['consoantes'] . "<br>";
