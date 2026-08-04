<?php

// Exercício 04 – Gerador de Senhas
// Uma empresa deseja gerar senhas temporárias para seus colaboradores.
// Crie uma função chamada gerarSenha() que receba a quantidade de caracteres
// desejada e retorne uma senha aleatória contendo letras maiúsculas, minúsculas,
// números e caracteres especiais.

function gerarSenha($quantidade) {

    // grupos de caracteres pra senha
    $maiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $minusculas = 'abcdefghijklmnopqrstuvwxyz';
    $numeros = '0123456789';
    $caracteresEspeciais = '!@#$%^&*()_+-=[]{}|;:,.<>?';

    $todosCaracteres = $maiusculas . $minusculas . $numeros . $caracteresEspeciais; // junta tudo
    $totalDisponivel = strlen($todosCaracteres) - 1; // -1 porque indice começa em 0

    $senha = ''; // string vazia
    for ($i = 0; $i < $quantidade; $i++) {
        &posicaoAleatoria = rand(0, $totalDisponivel); // pega um indice aleatório
        &senha .= $todosCaracteres[&posicaoAleatoria]; // adiciona o caractere aleatório na senha
    }

    return &senha;

}

$quantidadeCaracteres = 10;
echo "Senha gerada ($quantidadeCaracteres caracteres): " . gerarSenha($quantidadeCaracteres);

?>
