<?php 

function imparPar($num){

    if($num%2==0){
        print $num. " é Par.\n";

    }
    else{
        print $num. " é Impar.\n";
    }
}
$num=readline("Escolha um numero: ");

while($num!=0){
    imparPar($num);
    $num=readline("Escolha um numero: ");
}



?>
