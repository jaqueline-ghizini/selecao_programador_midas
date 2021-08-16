<?php
    $numeros = array();
    $contador = array();
    $c = 1;
    $maior=0;


    echo "Array aorteado = [";
    for($n = 1; $n<=20; $n = $n+1){
        $numeros[$n] = rand(1,10); 
        echo $numeros[$n].",";
    }
    echo "] <br / >";

    while ($c<=10){
        $contador[$c] = 0;
    

        for($n= 1; $n<=20; $n=$n+1){

            if(($numeros[$n]) == $c){
                $contador[$c] = $contador[$c] + 1;
            }
            
        }
               
        echo "$c"." = ".$contador[$c]."<br /> ";
        $c = $c+1;
    }

    $resultado=0;
    $maior = max($contador);
    for($m= 1; $m<=10; $m=$m+1){
        if (($contador[$m]) == ($maior)){
            $resultado = $m;
        }
    }

    
    echo "o número que mais apareceu foi ".$resultado;
    echo "<br/> ele se repete ".$contador[$resultado]." vezes";
    
?>