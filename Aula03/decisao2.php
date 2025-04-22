<?php
    
    $x = 5;
    $y = 9;
    $media = ($x+$y)/2;
    //media >= 6,0 = 'aprovado'
    //media < 6,0 && >= 4,0
    //media = 'recuperação'
    //media < 4,0 = 'reprovado'
    //&& = e
    // || = ou
    
    if (3.0 > 5.0) {
        echo "verdadeiro";
    }
    else{
        echo "falso";
    }

    
    if($media >= 6.0){
        echo "Aprovado";
    }
    else if($media < 4.0){
        echo "reprovado";
    }
    else{
        echo "recuperação";
    }
    
    
    if($media >= 6.0){
        echo "Aprovado";
        die;
    }
    if ($media < 4.0){
        echo "Reprovado";
        die;
    }
    echo "Recuperação";
    
    if($media < 6.0){
        echo "Aprovado";
    }
    else if($media < 4.0){
        echo "reprovado";
    }
    else{
        echo "recuperação";
    }
    
    
    
    



?>