<?php

// exercício 15 - 10 funções

require '15/funcoes.php';

echo "1. IMC (peso 60kg, altura 1.70m): " . calcularIMC(60, 1.70) . "<br>";
echo "2. Validar email (lara@gmail.com): " . (validarEmail("lara@gmail.com") ? "Sim" : "Não") . "<br>";
echo "3. Gerar senha aleatória (8 caracteres): " . gerarSenha(8) . "<br>";
echo "4. Contar vogais (texto 'Texto para contar vogais'): " . contarVogais("Texto para contar vogais") . "<br>";
echo "5. Inverter texto (texto 'Texto para inverter'): " . inverterTexto("Texto para inverter") . "<br>";
echo "6. Calcular idade (data de nascimento 2009-08-18): " . calcularIdade("2009-08-18") . "<br>";
echo "7. Converter moeda (valor 100, taxa 5.2): " . converterMoeda(100, 5.2) . "<br>";
echo "8. Formatar telefone (telefone 11987654321): " . formatarTelefone("11987654321") . "<br>";
echo "9. Gerar saudação conforme o horário: " . gerarSaudacao() . "<br>";
echo "10. Validar uma senha forte (senha 'Senhaforte123@'): " . (validarSenhaForte("Senhaforte123@") ? "Sim" : "Não") . "<br>";

?>