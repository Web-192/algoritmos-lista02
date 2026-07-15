<?php
/* Atividade 5 - Conta de energia
Uma empresa deseja calcular o valor da conta de energia de um cliente. Armazene e calcule
● Armazene o nome do cliente.
● Armazene a quantidade de quilowatts consumidos.
● Considere o preço de R$ 0,90 por quilowatt.
● Calcule o valor da conta.
● Exiba o consumo, o valor inicial, a taxa e o valor final.
● Se o consumo for maior que 200 quilowatts, acrescente uma taxa de R$ 25,00.
Caso contrário, informe: Não foi cobrada taxa adicional. */

// Entradas
$nomeCliente = "Geraldo";
$quillowattsConsumidos = 220;
$precoQuillowatts = 0.90;

// Processamento
$total = $quillowattsConsumidos * $precoQuillowatts;

$frase = "";
if ($quillowattsConsumidos >= 200){
    $frase = $quillowattsConsumidos + 25;
} else {
    $frase = "Não foi cobrada taxa adicional.";
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
    <h3>Atividade 5</h3>
    <p><?php echo ("Consumo: " . $frase); ?></p>
    <p><?php echo ("Valor Inicial: " . $frase); ?></p>
    <p><?php echo ("Taxa: " . $frase); ?></p>
    <p><?php echo ("valor Final: " . $frase); ?></p>
</body>

</html>