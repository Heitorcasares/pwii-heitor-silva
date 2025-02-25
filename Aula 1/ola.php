<?php
    // echo é o print, mas também tem ECHO ou EcHo
     echo "Hello World! <br>"; 

     // para criar variáveis precisa colocar um sifrão antes do nome da variável

     $lindeza = "João Siles";
     $nota = 11;
     $ui = "melhor professor";

    // ${nome da variável} referência a variável
    // . é contatenar
    // você pode juntar html com php como mostrados nos exemplos abaixo
    echo "${lindeza} <br>";
    echo  $lindeza . " é nota " . $nota;
    echo  " <p> " . $lindeza . " é nota " . $nota . " e é o " . $ui . " <p> ";
?>