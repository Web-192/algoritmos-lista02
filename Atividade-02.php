<?php
/*Uma pessoa realizou uma viagem de carro. Armazene e calcule
● a distância percorrida.
● a quantidade de combustível consumida.
● Calcule o consumo médio: consumo médio = distância ÷ combustível
● Exiba a distância, o combustível gasto e o consumo médio.
● Se o consumo médio for maior ou igual a 12 km/l, exiba: O veículo teve um bom
consumo. Caso contrário, exiba: O veículo teve um consumo abaixo do 
esperado.*/

// Entradas
$distanciaPecorrida = 200;
$combustivel = 10;
$consumoMedio = $distanciaPecorrida / $combustivel;

$frase = "";

if ($consumoMedio >= 12) {
    $frase = "O veículo teve um bom consumo.";
} else {
    $frase = "O veículo teve um consumo abaixo do esperado.";
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
    <h3>Atividade 2</h3>
    <p> <?php echo ("Distância Pecorrida: " . $distanciaPecorrida); ?></p>
    <p> <?php echo ("Combustivel: " . $combustivel); ?></p>
    <p> <?php echo ("Consumo Médio: " . $consumoMedio); ?></p>
    <p> <?php echo ("Frase: " . $frase); ?></p>
</body>

</html>