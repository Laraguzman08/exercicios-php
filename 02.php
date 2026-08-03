<?php

// Exercício 02 – Espelho Mágico
// Uma empresa de tecnologia está desenvolvendo um sistema para tratamento de
// textos.
// Crie uma função chamada inverterTexto() que receba uma string e retorne o texto
// completamente invertido.
// Além disso, exiba a quantidade de caracteres existentes na string original. -->

function inverterTexto($texto) {

    $caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY); // Divide a string em caracteres individuais, considerando caracteres multibyte
    $caracteresInvertidos = array_reverse($caracteres); // Inverte a ordem dos itens do array
    $textoInvertido = implode('', $caracteresInvertidos); // Junta os caracteres invertidos de volta em uma string
    $quantidadeCaracteres = mb_strlen($texto); // Conta a quantidade de caracteres na string original, considerando caracteres multibyte

    return [
        "invertido" => $textoInvertido,
        "quantidade" => $quantidadeCaracteres
    ]; 

}

$texto_usuario = "Programação em PHP";
echo "Texto original: $texto_usuario<br>";
$resultado = inverterTexto($texto_usuario);

echo "Texto invertido: " . $resultado["invertido"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["quantidade"] . "<br>";

?>
