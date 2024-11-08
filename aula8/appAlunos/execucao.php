<?php 

require_once("modelo/Aluno.php");
require_once("modelo/Turma.php");

//Turma//

$turma = new Turma();
$turma->setCurso("TDS");
$turma->setAno(2023);

//Aluno//
$alunos=array();
for ($i=0; $i < 5; $i++) { 
    $aluno = new Aluno();
    $aluno->setNome(readline("Nome: "));
    $aluno->setIdade(readline("Idade: "));
    $aluno->setTurma($turma);
    array_push($alunos,$aluno);
}
print_r($alunos);
?>