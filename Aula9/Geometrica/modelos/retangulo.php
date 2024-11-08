<?php

require_once("FormaGeometrica.php");

class Retangulo implements iForma;
{
    private $base;
    private $altura;

    public function getArea($b, $a){
        $area = $b*$a;

        return $area;
    }

    public function getDesenho()
    {
       echo "
        ┌─────────────────────────┐\n
        │                         │\n
        │                         │\n
        │                         │\n
        │                         │\n
        │                         │\n
        │                         │\n
        │                         │\n
        └─────────────────────────┘";

    }
}
