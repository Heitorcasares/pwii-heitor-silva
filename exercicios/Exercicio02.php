<form action="Exercicio02.php" method="GET">
    Comprimento da Caixa:
    <input type="number" name="COM">
    cm
    <br>
    <br>
    Largura da Caixa:
    <input type="number" name="LAR">
    cm
    <br>
    <br>
    Altura da Caixa:
    <input type="number" name="ALT">
    cm
    <br>
    <br>
    <input type="submit">
</form>
<?php
    $volume = $_GET["COM"] * $_GET["LAR"] * $_GET["ALT"];

    echo "O volume desta caixa é: ${volume} cm<sup>3</sup>"
?>