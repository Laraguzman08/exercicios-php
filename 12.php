<?php

// Exercício 12 – Catálogo de Produtos
// Um supermercado deseja organizar automaticamente seu catálogo de produtos.
// Crie uma função chamada analisarProdutos() que receba um vetor contendo o
// nome e o preço dos produtos.
// A função deverá retornar:
// Produto mais caro;
// Produto mais barato;
// Média dos preços;
// Pesquisa de um produto informado pelo usuário.

function analisarProdutos($produtos, $produtoPesquisa) {
    $maisCaro = null;
    $maisBarato = null;
    $somaPrecos = 0;
    $quantidadeProdutos = count($produtos); // count tá contando a quantidade de produtos no array
    $produtoEncontrado = null;

    foreach ($produtos as $produto) {
        if ($maisCaro === null || $produto['preco'] > $maisCaro['preco']) {
            $maisCaro = $produto;
        }
        if ($maisBarato === null || $produto['preco'] < $maisBarato['preco']) {
            $maisBarato = $produto;
        }
        $somaPrecos += $produto['preco'];

        if (strcasecmp($produto['nome'], $produtoPesquisa) === 0) {
            $produtoEncontrado = $produto;
        }
    }

    $mediaPrecos = $somaPrecos / $quantidadeProdutos;

    return [
        'maisCaro' => $maisCaro,
        'maisBarato' => $maisBarato,
        'mediaPrecos' => $mediaPrecos,
        'produtoEncontrado' => $produtoEncontrado
    ];
}

?>