<?php 

require_once ("modelos/Departamento.php");
require_once ("modelos/Funcionarios.php");

$listaFuncionarios = array();


for ($i=0; $i < 2; $i++) { 
    $funcionario = new Funcionarios;
    $departamento = new Departamento;
    print "\n";
    $funcionario->setNome(readline("Nome: "));
    $funcionario->setSalario(readline("Salario: "));
    $funcionario->setCargo(readline("Cargo: "));
    $departamento->setNome(readline("Departamento:"));
    $departamento->setNumSala(readline("Sala:"));
    $funcionario->setDepartamento($departamento);

    array_push($listaFuncionarios, $funcionario);
}
for ($i=0; $i < 2; $i++) { 
    print("Funcionario: " . $listaFuncionarios($i)->getNome . "\nCargo: ". $listaFuncionarios($i)->getCargo."\nDepartamento: ". $listaFuncionarios($i)->getDepartamento->getNome. ", sala ". $listaFuncionarios($i)->getDepartamento->getNumSala. "\nSalario: ". $listaFuncionarios($i)->getSalario);
}
?>