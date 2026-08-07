<?php

// Exercício 15 – Biblioteca de Funções
// Uma empresa deseja criar uma biblioteca reutilizável de funções para ser utilizada em
// diversos sistemas.
// Crie um arquivo chamado funcoes.php contendo, no mínimo, 10 funções úteis, como:
// Calcular IMC;
// Validar e-mail;
// Gerar senha aleatória;
// Contar vogais;
// Inverter texto;
// Calcular idade;
// Converter moeda;
// Formatar telefone;
// Gerar saudação conforme o horário;
// Validar uma senha forte

// função 1
function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return round($imc, 2);
}

// função 2
function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false; // filter_var é uma função do php que valida emails
}

// função 3
function gerarSenha($comprimento = 8) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#&*';
    $senha = '';
    // loop pra gerar senha aleatória
    for ($i = 0; $i < $comprimento; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)]; // rand gera número aleatório, strlen pega o tamanho da string e subtrai 1 pq o índice começa em 0
    }
    return $senha;
}

// função 4 
function contarVogais($texto) {
    $vocais = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;
    // loop pra contar vogais
    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array(strtolower($texto[$i]), $vocais)) { // in_array verifica se o caractere está no array de vogais
            $contador++;
        }
    }
    return $contador;
}

// função 5
function inverterTexto($texto) {
    $caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY); // preg_split divide a string em caracteres
    return implode('', array_reverse($caracteres)); // array_reverse inverte o array de caracteres e implode junta os caracteres em uma string
}

// função 6
function calcularIdade($dataNascimento) {
    $dataNascimento = new DateTime($dataNascimento); // cria um objeto datetime com a data de nascimento
    $hoje = new DateTime; 
    $idade = $hoje->diff($dataNascimento); // diff calcula a diferença entre as duas datas
    return $idade->y;
}

// função 7
function converterMoeda($valor, $taxa) {
    return round($valor * $taxa, 2);
}

// função 8
function formatarTelefone($numero) {
    $numeroLimpo = preg_replace('/[^0-9]/', '', $numero); // remove tudo que não é número
    // formata número
    return preg_replace('/(\d{2})(\d{4,5})(\d{4})/', '($1) $2-$3', $numeroLimpo); // (\d{2}) pega os dois primeiros dígitos, (\d{4,5}) pega os próximos 4 ou 5 dígitos e (\d{4}) pega os últimos 4 dígitos
}

// função 9
function saudacao() {
    $hora = (int) date('H'); // hora atual
    if ($hora < 12) {
        return "Bom dia";
    } elseif ($hora < 18) {
        return "Boa tarde";
    } else {
        return "Boa noite";
    }
}

// função 10
function validarSenha($senha) {
    $maiuscula = preg_match('/[A-Z]/', $senha);
    $minuscula = preg_match('/[a-z]/', $senha);
    $numero = preg_match('/[0-9]/', $senha);
    $especial = preg_match('/[!@#&*]/', $senha);
    $tamanho = strlen($senha) >= 8;

    return $maiuscula && $minuscula && $numero && $especial && $tamanho;
}

?>