<?php
    $num=readline("Insira um numero: ");

    if($num>0){
        print 'Numero positivo recebe o dobro: '. $num*2;
    }
    elseif($num<0){
        print 'Numero negativo recebe o triplo: '. $num*3;
    }