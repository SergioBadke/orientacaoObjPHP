<?php

    $total=0;
    $ler = 10;

    while($ler!=0){
        $doado=readline("Insira valor doado: ");
        $ler=$doado;
        $total=$total+$doado;
    }
    print 'Valor total arrecadado foi de '. $total . " Reais.\n";