<?php

// Exercício 18 – Gerenciador de Agenda
// Uma clínica deseja organizar automaticamente sua agenda de consultas.
// Cada consulta possui:
// Nome do paciente;
// Especialidade;
// Data;
// Horário.
// Crie uma função chamada organizarAgenda() que receba um vetor multidimensional
// contendo todas as consultas.
// Ela deverá retornar:
// Quantidade total de consultas;
// Quantidade de pacientes diferentes;
// Quantidade de consultas por especialidade;
// Primeiro atendimento do dia;
// Último atendimento do dia;
// Lista ordenada pelo horário;
// Pesquisa de um paciente informado pelo usuário;
// Verificar se existem horários duplicados.
// Requisitos
// Utilizar vetores multidimensionais.
// Modularizar a solução em pelo menos 6 funções.
// Retornar todas as informações em um único array.

function contarConsultas($agenda) {
    return count($agenda);
}

function contarPacientes($agenda) {
    $pacientes = array();
    foreach ($agenda as $consulta) {
        $pacientes[] = $consulta['nome'];
    }
    return count(array_unique($pacientes));
}

function contarEspecialidades($agenda) {
    $especialidades = array();
    foreach ($agenda as $consulta) {
        $especialidades[] = $consulta['especialidade'];
    }
    return array_count_values($especialidades);
}

function ordenarHorarios($agenda) {
    //usort ordena o array usando uma função de comparação
    usort($agenda, function($a, $b) {
        return strcmp($a['horario'], $b['horario']);
    });
    return $agenda;
}

function pesquisarPaciente($agenda, $nome) {
    $encontrado = array();
    // percorre o array de consultas e compara o nome do paciente com o nome informado pelo usuário
    foreach ($agenda as $consulta) {
        if (strcasecmp($consulta['nome'], $nome) == 0) { //strcasecmp compara strings sem diferenciar maiúsculas de minúsculas 
            $encontrado[] = $consulta;
        }
    }
    return $encontrado;
}

function verificarDuplicados($agenda) {
    $horarios = array();
    foreach ($agenda as $consulta) {
        $horarios[] = $consulta['horario'];
    }
    $contagem = array_count_values($horarios);

    foreach ($contagem as $quantidade) {
        if ($quantidade > 1) {
            return true;
        }
    }
    return false;
}

function organizarAgenda($agenda) {
    $ordenadas = ordenarHorarios($agenda);

    return [
        'quantidade_consultas' => contarConsultas($agenda),
        'quantidade_pacientes' => contarPacientes($agenda),
        'quantidade_consultas_especialidade' => contarEspecialidades($agenda),
        'primeiro_atendimento' => $ordenadas[0],
        'ultimo_atendimento' => end($ordenadas),
        'lista_ordenada_horario' => $ordenadas,
        'horarios_duplicados' => verificarDuplicados($agenda)
    ];
}

?>
