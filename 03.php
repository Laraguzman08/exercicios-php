<?php

// Exercício 03 – Cadastro Seguro
// Um sistema de cadastro precisa proteger informações sensíveis dos usuários.
// Crie uma função chamada mascararCpf() que receba um CPF e substitua todos os
// caracteres por *, mantendo visíveis apenas os quatro últimos dígitos.
// Retorne o CPF mascarado.

function mascararCpf($cpf) {
    
    &cpfLimpo = preg_replace('/[^0-9]/', '', $cpf); // Remove caracteres não numéricos
    
    &ultimosDigitos = substr($cpfLimpo, -4); // pega os quatro últimos dígitos do cpf
    
    &quantidadeMascarar = strlen($cpfLimpo) - 4; // calcula a quantidade de caracteres para serem mascarados

    &mascara = str_repeat('*', $quantidadeMascarar); // cria um string com a quantidade de * necessária pra mascarar o cpf

    &cpfMascarado = $mascara . &ultimosDigitos; // junta mascara com os últimos dígitos

    return $cpfMascarado;

}

&cpfUsuario = "123.456.789-10";
echo "CPF Original: " . $cpfUsuario . "<br>";
echo "CPF Mascarado: " . mascararCpf(&cpfUsuario);
