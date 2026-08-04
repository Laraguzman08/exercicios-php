<?php

// Exercício 13 – Criptografia Simples
// Uma empresa deseja proteger pequenas mensagens antes de armazená-las em seu
// sistema.
// Crie uma função chamada criptografarMensagem() que receba um texto e aplique
// uma criptografia utilizando o método da Cifra de César.
// Em seguida, crie outra função chamada descriptografarMensagem() capaz de
// recuperar o texto original.

function criptografarMensagem($texto, $deslocamento) {

    $resultado = '';
    $tamanho = mb_strlen($texto); // mb_strlen serve pra suportar caracteres especiais e acentos

}
