<?php
/*  Atividade 3- Compra no supermercado
Uma pessoa comprou arroz, feijão e leite. Armazene e calcule
● o preço e a quantidade de cada produto.
● calcule o valor de cada item de acordo com o preço.
● calcule o valor total da compra.
● exiba o valor de cada item e o total.
● calcule e exiba o valor final após o desconto.
● Se o total da compra for maior que R$ 100,00, exiba: “Você ganhou um
desconto de R$ 10,00. */

//Processamento
$produto1 = "Arroz";
$quantidade1 = 4;
$preco1 = 20.00;
$totalProduto1 = $quantidade1 * $preco1;

$produto2 = "Feijão";
$quantidade2 = 2;
$preco2 = 9.90;
$totalProduto2 = $quantidade2 * $preco2;

$produto3 = "Leite";
$quantidade3 = 3;
$preco3 = 4.50;
$totalProduto3 = $quantidade3 * $preco3;

$totalCompra = $totalProduto1 + $totalProduto2 + $totalProduto3;

if ($totalCompra > 100) {
    $frase = "Você ganhou um desconto de R$100,00";
    $desconto = $totalCompra * 10 / 100;
}

$totalcomdesconto = $totalCompra - $desconto;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>
</head>

<body>
    <h3>Atividade 3</h3>
    <p>
    <p><?php echo ("Produto 1: " . $produto1 . " - Qtd: - " . $quantidade1 . " - Preço Unitário - " . $preco1) ?></p>
    <p><?php echo ("Produto 2: " . $produto2 . " - Qtd: - " . $quantidade2 . " - Preço Unitário - " . $preco2) ?></p>
    <p><?php echo ("Produto 3: " . $produto3 . " - Qtd: - " . $quantidade3 . " - Preço Unitário - " . $preco3) ?></p>

    <p><?php echo ("Produto 1: " . $produto1 . " - Qtd: - " . $totalProduto1 . " - Preço Unitário - " . $preco1) ?></p>
    <p><?php echo ("Produto 1: " . $produto2 . " - Qtd: - " . $totalProduto2 . " - Preço Unitário - " . $preco2) ?></p>
    <p><?php echo ("Produto 1: " . $produto3 . " - Qtd: - " . $totalProduto3 . " - Preço Unitário - " . $preco3) ?></p>

    <p><?php echo ("Total da compra R$ " . $totalCompra) ?></p>
    <p><?php echo ("Total do Desconto R$ " . $desconto) ?></p>
    <p><?php echo ("Total sem Desconto R$ " . $totalcomdesconto ) ?></p>
    </p>
</body>

</html>