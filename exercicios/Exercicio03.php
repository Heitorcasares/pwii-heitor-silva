<form action="Exercicio03.php" method="get">
    Informe o Valor da Base Maior: <input type="number" name="B"> cm <br> <br>
    Informe o Valor da Base Menor: <input type="number" name="b"> cm <br> <br>
    Informe o Valor da altura deste trapézio: <input type="number" name="ALT"> cm <br> <br>
    <input type="submit">
</form>
<?php
    $area = ($_GET["B"] + $_GET["b"]) * $_GET["ALT"] / 2;

    echo "Esta é a área do seu trapézio: ${area} cm<sup>2</sup>"
?>