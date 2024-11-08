<?php 
require_once("modelo/Estado.php");
require_once("modelo/Cidade.php");

//1- Criar Estados//

$parana = new Estado();
$parana->setNome("Paraná");
$parana->setSigla("PR");

$stCatarina = new Estado();
$stCatarina->setNome("Santa Catarina");
$stCatarina->setSigla("SC");

//2- Criar Cidades//

$cascavel = new Cidade();
$cascavel->setNome("Cascavel");
$cascavel->setQtdHabitantes(348.051);
$cascavel->setAltitude(781);
$cascavel->setEstado($parana);

$foz = new Cidade();
$foz->setNome("Foz do Iguaçu");
$foz->setQtdHabitantes(258.248);
$foz->setAltitude(192);
$foz->setEstado($parana);

$floripa = new Cidade();
$floripa->setNome("Florianópolis");
$floripa->setQtdHabitantes(537.211);
$floripa->setAltitude(3);
$floripa->setEstado($stCatarina);

$blumenal = new Cidade();
$blumenal->setNome("Blumenal");
$blumenal->setQtdHabitantes(361.855);
$blumenal->setAltitude(21);
$blumenal->setEstado($stCatarina);

$cidades = array();
array_push($cidades,$blumenal);
array_push($cidades,$cascavel);
array_push($cidades,$floripa);
array_push($cidades,$foz);

foreach ($cidades as $c) {
    printf("A cidade de %s,localizada no estado %s-s, possui %d habitantes e uma altitude de %d metros.\n\n",
$c->getNome(),$c->getEstado()->getNome(),$c->getEstado()->getSigla(),$c->getQtdHabitantes(),$c->getAltitude());
}


?>

