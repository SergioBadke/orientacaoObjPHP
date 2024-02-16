<?php
$par=0;
$impar=0;

for($i=0;$i<10;$i++){
    $num=readline("Insira um numero: ");
    if($num%2==0){
        $par++;
    }else{
        $impar++;
    }
}
print 'Obtivemos '. $par ." numeros pares.\n";
print 'Obtivemos '. $impar ." numeros impares.\n";