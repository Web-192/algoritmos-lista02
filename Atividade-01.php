<?php
/* Atividade 1 - Pagamento de funcionário
Uma empresa deseja calcular o salário de um funcionário. Armazene e calcule
● o nome do funcionário.
● o valor da hora trabalhada.
● a quantidade de horas trabalhadas.
● o salário bruto.
● exiba o nome, o salário bruto, o desconto e o salário final.
● Se o salário bruto for maior que R$ 2.500,00, desconte R$ 200,00. Caso 
contrário, informe que o funcionário não possui desconto. */

// Entradas
$nomeFuncionario = "Michelle";
$valorHoraTrabalhadas = 10.00;
$qtdHorasTrabalhadas = 200;
$salarioBruto = $valorHoraTrabalhadas * $qtdHorasTrabalhadas;
$desconto = 200.00;
$salarioLiquido = $salarioBruto; // inicializar
$frase = "";

if ($salarioBruto > 2500.00) {
    $salarioLiquido = $salarioBruto - $desconto;
}  else {
    $frase = "O Funcionário não possui desconto";
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
    <h3>Atividade 1</h3>
    <p> <?php echo ("Nome do funcionário: " . $nomeFuncionario); ?></p>
    <p> <?php echo ("Valor da hora trabalhadas: " . $valorHoraTrabalhadas); ?></p>
    <p> <?php echo ("Quantidade de horas trabalhadas: " . $qtdHorasTrabalhadas); ?></p>
    <p> <?php echo ("Desconto: " . $desconto); ?></p>
    <p> <?php echo ("Salário Líquido: " . $salarioLiquido); ?></p>
    <p> <?php echo ("Frase: " . $frase); ?></p>
    
</body>

</html>