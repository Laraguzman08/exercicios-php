<?php

// Exercício 13 – Criptografia Simples
// Uma empresa deseja proteger pequenas mensagens antes de armazená-las em seu
// sistema.
// Crie uma função chamada criptografarMensagem() que receba um texto e aplique
// uma criptografia utilizando o método da Cifra de César.
// Em seguida, crie outra função chamada descriptografarMensagem() capaz de
// recuperar o texto original.

function criptografarMensagem($mensagem, $deslocamento) {
    $mensagemCriptografada = '';
    $tamanho = strlen($mensagem); // pega o tamanho da mensagem

    for ($i = 0; $i < $tamanho; $i++) {
        $caractere = $mensagem[$i];

        // verifica se o caractere é uma letra maiúscula
        if (ctype_upper($caractere)) {
            $mensagemCriptografada .= chr((ord($caractere) + $deslocamento - 65) % 26 + 65);
        }
        
        // verifica se o caractere é uma letra minúscula
        elseif (ctype_lower($caractere)) {
            $mensagemCriptografada .= chr((ord($caractere) + $deslocamento - 97) % 26 + 97);
        } else {
            // mantém caracteres q não são do alfabeto inalterados
            $mensagemCriptografada .= $caractere;
        }
    }

    return $mensagemCriptografada;
}

function descriptografarMensagem($mensagemCriptografada, $deslocamento) { // descriptografar é o inverso de criptografar, ent reaproveita a função de criptografar
    // aplicando o deslocamento "ao contrário" (26 - deslocamento)
    return criptografarMensagem($mensagemCriptografada, 26 - $deslocamento);
}

?>
