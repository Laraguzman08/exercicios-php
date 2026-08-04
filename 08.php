<?php 

// Exercício 08 – Organizador de Lista
// Uma escola deseja organizar automaticamente a lista de alunos matriculados.
// Crie uma função chamada ordenarNomes() que receba uma string contendo nomes
// separados por vírgulas.
// A função deverá transformar os nomes em um vetor, remover espaços
// desnecessários, ordenar em ordem alfabética e retornar a lista organizada.

function ordenarNomes($nomes) {

    // Transforma string em um vetor
    $vetorNomes = explode(',', $nomes);
    
    // tira espaços em branco
    $vetorNomes = array_map('trim', $vetorNomes);
    
    // organiza em ordem alfabética
    sort($vetorNomes);
    
    return $vetorNomes;

}

echo "Lista organizada: <br>";
$nomes = "Maria, Lara, Lucas, Gabriel, Ana";
$nomesOrdenados = ordenarNomes($nomes);

// mostra a lista organizada percorrendo o vetor com foreach
foreach ($nomesOrdenados as $nome) {
    echo $nome . "<br>";
}

?>
