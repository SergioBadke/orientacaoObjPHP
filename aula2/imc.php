<?php

    $nome = readline("Insira seu nome: ");
    $altura = readline("Insira sua altura em metros: ");
    $peso = readline("Insira sua peso em kg: ");

    $imc= $peso/($altura**2);
    $nivel;

    if($imc<18.5){
        $nivel= 'abaixo do pesp';
    }elseif($imc>18.5 and $imc<24.99){
        $nivel= 'normal';
    }elseif($imc>24.99 and $imc<29.99){
        $nivel='sobrepeso';
    }else(
        $nivel='obeso');

    print "O IMC de ". $nome . " é de ". $imc . " você esta ". $nivel;

