<?php 
require_once("Mago.php");
require_once("Poder.php");

$recEnergia = new Poder();
$recEnergia->setDescricao("Recupera Energia");
$recEnergia->setForca(0);

$recEnergiaS = new Poder();
$recEnergiaS->setDescricao("Recupera Energia Super");
$recEnergiaS->setForca(0.2);


$golpeN = new Poder();
$golpeN->setDescricao("Golpe Normal");
$golpeN->setForca(0);

$golpeE = new Poder();
$golpeE->setDescricao("Golpe Especial");
$golpeE->setForca(0.15);


$magos=array();

$bill = new Curandeiro();
$bill->setNome("Bill de Lucinda");
$bill->setForcaDeCura(47);
$bill->setPoder($recEnergiaS);
array_push($magos, $bill);

$roger = new Combatente();
$roger->setNome("Rogerio de LeMains");
$roger->setForcaDeAtaque(50);
$roger->setPoder($golpeE);
array_push($magos, $roger);

$clio = new Curandeiro();
$clio->setNome("Cliovaldo Graveto");
$clio->setForcaDeCura(32);
$clio->setPoder($recEnergia);
array_push($magos, $clio);

$valei = new Combatente();
$valei->setNome("Valter Eivoda");
$valei->setForcaDeAtaque(28);
$valei->setPoder($golpeN);
array_push($magos, $valei);


foreach($m as $magos){
    lancarPoder();
}
