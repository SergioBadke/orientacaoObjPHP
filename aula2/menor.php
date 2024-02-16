<?php
$num=readline("Escolha um numero: ");
 for($i=0; $i<2; $i++){
    $escolha=readline("Escolha um numero: ");
    if($escolha <= $num){
        $num=$escolha;
    }
 }
 print 'O menor numero é '. $num. "\n";