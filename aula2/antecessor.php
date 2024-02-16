<?php
    $num = readline("Escolha um numero: ")-1;

    while($num>1){
        print $num . ",";
        $num--;
    }
    print $num."\n";