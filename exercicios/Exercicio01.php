<form action="Exercicio01.php" method="get">
    Distância Total: <input type="number" name="DT"> KM <br> <br>
    Quantidade de Combustível: <input type="number" name="COM"> L <br> <br>
    <input type="submit"> 
</form>
<?php
    $consumoM = $_GET["DT"] / $_GET["COM"];

    echo "Este será o consumo médio de combustível da viagem: ${consumoM} L.";
?>