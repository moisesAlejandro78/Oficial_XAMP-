<?php
    $numeroPerfecto=6;//28, 496
    $sumatoria=0;
    if (is_int($numeroPerfecto)&&$numeroPerfecto>0) {
        # code...
        
        for ($i=1; $i <$numeroPerfecto ; $i++) { 
            # code...
            if ($numeroPerfecto%$i==0) {
                # code...
                $sumatoria+=$i;
                echo $i."<br>";
            }
        }
    }
    else{
        echo "ingrese un numero entero positivo";
    }
    if ($sumatoria==$numeroPerfecto) {
        # code...
        echo "El numero ".$numeroPerfecto." es perfecto";
    }
    else{
        echo "El numero ".$numeroPerfecto." no es perfecto"; 
    }
?>