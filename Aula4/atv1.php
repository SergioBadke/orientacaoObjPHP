<?php 

function Vetor($vetor){
    foreach($vetor as $v){
        print $v. " || ";
}
print "\n";
};

$nomes=array("Malu","Sergio","Gustavo","Iza","Felipe");
$timesVolei=array("EC Pinheiros", "Sesc Flamengo", "Sesi Bauru", "Bluvolei","Minas TC");
$timesFut=array("CR Vasco","CR Flamengo", "CRF Botafogo", "FC FluminenCe", "EC Bahia");
$materias=array("Algoritmos", "Informatica e Redes", "Banco de Dados", "Orientação á Objetos", "Desenvolvimento Web");
$professores=array("Julio", "Jefferson", "Daniel", "Silvia", "Givaldo");

Vetor($nomes);
Vetor($timesVolei);
Vetor($timesFut);
Vetor($materias);
Vetor($professores);


//foreach($nomes as $c){
//print $c. " || ";
//}
//print "\n";
//foreach($timesFut as $c){
//    print $c. " || ";
//}
//print "\n";
//foreach($timesVolei as $c){
//    print $c. " || ";
//}
//print "\n";
//foreach($materias as $c){
//    print $c. " || ";
//}
//print "\n";
//foreach($professores as $c){
//    print $c. " || ";
//}


?>
