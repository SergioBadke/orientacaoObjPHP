<?php

for($ano= 1980; $ano<=2024; $ano++){
    if($ano%4==0 and $ano%100!=0){
        print $ano. " É ANO BISSEXTO\n";

    }
    elseif($ano%4==0 and $ano%400==0){
        print $ano. " É ANO BISSEXTO\n";

    }
    else{
        print $ano . " NÃO É BISSEXTO\n";
    }
}
