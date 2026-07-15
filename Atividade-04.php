<?php
/* Atividade 4 - Média de um aluno
Um professor precisa calcular a média de um aluno. Armazene e calcule:
● Armazene o nome do aluno.
● Armazene três notas.
● Calcule a soma das notas.
● Calcule a média.
● Exiba o nome, as notas e a média.
● Se a média for maior ou igual a 60, exiba: Aluno aprovado.
● Se a média for maior ou igual a 60, exiba: Aluno aprovado. Caso contrário,
exiba: Aluno reprovado. */

// Entradas
$nomeAluno = "Caua";
$nota1 = 22.04;
$nota2 = 41.50;
$nota3 = 15.67;

// Processamento
$totalSoma = $nota1 + $nota2 + $nota3;
$media = $totalSoma / 3;

$frase = "";
if ($media >= 60) {
    $frase = "Aprovado!";
} else {
    $frase = "Reprovado!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>
</head>
<body>
    <h3>Atividade 4</h3>
    <p><?php echo ("Situação: " . $frase); ?></p>
</body>
</html>