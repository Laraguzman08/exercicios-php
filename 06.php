<?php 

// Exercício 06 – Conversor de Temperatura
// Uma empresa que fabrica sensores precisa converter temperaturas entre diferentes
// escalas.
// Crie uma função chamada converterTemperatura() que receba um valor, a escala
// de origem e a escala de destino.
// A função deverá permitir conversões entre Celsius, Fahrenheit e Kelvin.

function converterTemperatura($valor, $escalaOrigem, escalaDestino) {

    // converte a escala pra minúsculo pra facilitar a comparação
    $escalaOrigem = strtolower($escalaOrigem);
    $escalaDestino = strtolower($escalaDestino);

    if ($escalaOrigem == $escalaDestino) {
        return $valor; // se as escalas forem iguais, retorna o valor original
    }

    switch ($escalaOrigem) {
        case 'celsius':
            $celsius = $valor;
            break;
        case 'fahrenheit':
            $celsius = ($valor - 32) * 5 / 9; // converte Fahrenheit para Celsius
            break;
        case 'kelvin':
            $celsius = $valor - 273.15; // converte Kelvin para Celsius
            break;  
        default:
            return "Escala de origem inválida.";
    }

    return round($resultado, 2); // arredonda o resultado pra 2 casas decimais

}

echo "0 celcius para fahrenheit: " . converterTemperatura(0, 'celsius', 'fahrenheit') . "<br>";
echo "100 calcius para kelvin:" . converterTemperatura(100, 'celsius', 'kelvin') . "<br>";

?>