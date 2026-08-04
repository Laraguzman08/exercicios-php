<?php

//Exercício 11 – Formatador de Relatórios
// Uma empresa deseja padronizar automaticamente seus relatórios.
// Crie uma função chamada formatarTexto() que receba um texto e retorne:
// O texto totalmente em letras maiúsculas;
// O texto totalmente em letras minúsculas;
// A primeira letra de cada palavra em maiúscula;
// A quantidade total de caracteres.

function formatarTexto($texto) {

    return [
        'maiusculas' => mb_strtoupper($texto), // converte pra maiúsculo
        'minusculas' => mb_strtolower($texto), // converte pra minúsculo
        'primeiraMaiuscula' => mb_convert_case($texto, MB_CASE_TITLE), // converte a primeira letra de cada palavra para maiúsculo
        'quantidadeCaracteres' => mb_strlen($texto) // quantidade total de caracteres
        //mb_ functions são usadas pra suportar caracteres especiais e acentos
    ];

}

$textoUsuario = "Oi, texto pra relatório";
$resultado = formatarTexto($textoUsuario);
echo "Texto em maiúsculas: " . $resultado['maiusculas'] . "<br>";
echo "Texto em minúsculas: " . $resultado['minusculas'] . "<br>";
echo "Texto com primeira letra em maiúsculo: " . $resultado['primeiraMaiuscula'] . "<br>";
echo "Quantidade de caracteres: " . $resultado['quantidadeCaracteres'] . "<br>";

?>