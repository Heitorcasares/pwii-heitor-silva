<?php
    $contador = 1;

    echo "While<br>";
    while($contador < 6){
        echo "${contador} <br>";
        $contador++;
    }

    //Do While: executa primeiro o código depois o teste lógico
    echo "<br> Do While <br>";

    $contadorii = 1;
    do{
        echo "${contadorii} <br>";
        $contadorii++;
    }while($contadorii < 6);

    //For
    echo "<br> For <br>";

    for($x=0; $x<=10; $x++){
        echo "O número é: ${x} <br>";
    }
?>