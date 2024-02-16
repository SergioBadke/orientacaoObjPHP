<?php
$num1=readline("Insira o numero menor: ");
$num2=readline("Insira o numero maior: ");
$cont=0;

for($i=$num1; $i<$num2; $i++){
    if($i%5==0){
        $cont++;
    }
}
print $cont;