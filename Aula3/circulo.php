<?php 
function areaCirculo($raio){

    $pi=3.14;

    $area=$pi*$raio*$raio;
    return $area;

}
function circunferencia($raio){
    $pi=3.14;

    $circunferencia=2*$pi*$raio;
    return $circunferencia;
}
$i=0;
$raio = readline("Insira o raio do circulo: ");
//Valor de Pi = 3.14

do{ 
    areaCirculo($raio);
    print $area;

    circunferencia($raio);
    print $circunferencia;

    $raio= readline("Insira o raiodo circulo: ");
    $i++;
}
while($i < 3)

?>
