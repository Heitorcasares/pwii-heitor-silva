<form action="Exercicio04.php" method="get">
    Insira o Valor do Produto: <input type="number" name="VL"> <br> <br>
    <input type="submit">
</form>
<?php
    $precoT = $_GET["VL"] + ($_GET["VL"] * 0.16);
    $parcelas = $precoT / 10;

    echo "O valor total do produto é: R$${precoT} <br> <br>";
    echo "O valor de cada parcela será: R$${parcelas}"
?>