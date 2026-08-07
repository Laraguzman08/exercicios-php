<?php

// Exercício 16 – Analisador de Senhas
// Uma empresa de segurança digital deseja validar automaticamente as senhas criadas
// pelos colaboradores.
// Crie uma função chamada analisarSenha() que receba uma senha e retorne um
// array contendo:
// Quantidade de letras maiúsculas;
// Quantidade de letras minúsculas;
// Quantidade de números;
// Quantidade de caracteres especiais;
// Tamanho da senha;
// Nível de segurança:
// Fraca
// Média
// Forte
// Muito Forte
// A classificação deve considerar:
// mínimo de 8 caracteres;
// presença de letras maiúsculas;
// letras minúsculas;
// números;
// caracteres especiais.
// Requisitos
// Criar pelo menos 5 funções.
// Não repetir código.
// Cada função deve possuir apenas uma responsabilidade.

function contarMaiusculas($senha) {
    return preg_match_all('/[A-Z]/', $senha); // conta letras maiusculas da senha
}

function contarMinusculas($senha) {
    return preg_match_all('/[a-z]/', $senha);
}

function contarNumeros($senha) {
    return preg_match_all('/[0-9]/', $senha);
}

function contarEspeciais($senha) {
    return preg_match_all('/[!@#$%^&*(),.?":{}|<>]/', $senha);
}

function classificarSenha($senha, $quantidadeMaiusculas, $quantidadeMinusculas, $quantidadeNumeros, $quantidadeEspeciais, $tamanho) {
    if ($tamanho < 8) {
        return 'Fraca';
    }
    if ($quantidadeMaiusculas > 0 && $quantidadeMinusculas > 0 && $quantidadeNumeros > 0 && $quantidadeEspeciais > 0) {
        return 'Muito Forte';
    }
    if (($quantidadeMaiusculas > 0 || $quantidadeMinusculas > 0) && $quantidadeNumeros > 0) {
        return 'Forte';
    }
    if ($quantidadeMaiusculas > 0 || $quantidadeMinusculas > 0) {
        return 'Média';
    }
    return 'Fraca';
}

function analisarSenha($senha) {
    $quantidadeMaiusculas = contarMaiusculas($senha);
    $quantidadeMinusculas = contarMinusculas($senha);
    $quantidadeNumeros = contarNumeros($senha);
    $quantidadeEspeciais = contarEspeciais($senha);
    $tamanho = strlen($senha);
    $nivelSeguranca = classificarSenha($senha, $quantidadeMaiusculas, $quantidadeMinusculas, $quantidadeNumeros, $quantidadeEspeciais, $tamanho);
    
    return [
        'maiúsculas' => $quantidadeMaiusculas,
        'minúsculas' => $quantidadeMinusculas,
        'números' => $quantidadeNumeros,
        'especiais' => $quantidadeEspeciais,
        'tamanho' => $tamanho,
        'nível' => $nivelSeguranca
    ];
}

?>