<?php

require_once("modelo/Time.php");
require_once("modelo/Jogador.php");


//1- Criar obj time// 

$time = new Time();
$time->setNome("CR Vasco da Gama");
$time->setCidade("Rio de Janeiro");

//2- Criar obj jogador//

$coutinho = new Jogador();
$coutinho->setNome("Philippe Coutinho");
$coutinho->setNumero(11);
$coutinho->setTime($time);

$vegetti = new Jogador();
$vegetti->setNome("Pablo Vegetti");
$vegetti->setNumero(99);
$vegetti->setTime($time);

//3- Imprimir somente time//
/*$t = $coutinho->getTime();
print $t->getNome;*/

$jogadores = array();
array_push($jogadores, $coutinho);
array_push($jogadores, $vegetti);
print_r($jogadores);
