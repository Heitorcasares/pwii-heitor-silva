<?php
    $x = "Hello World!";
    $y = "Hello World!";

    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";

    $x = 25.5;

    var_dump($x);
    echo "<br><br>";

    $y = ['Heitor', 'Baldão', 25];

    var_dump($y);
    echo "<br>";
    echo $y[1];
    echo "<br>";
    echo "<br>";

    $meuobj = new stdClass();
    $meuobj->nome = "Heitor";
    $meuobj->idade = 16;
    $meuJson = json_encode($meuobj);
    echo $meuJson;
    echo "<br>";
    echo "<br>";

    var_dump($meuJson);
?>