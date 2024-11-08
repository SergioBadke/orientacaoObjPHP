<?php

require_once("FormaGeometrica.php");

class Quadrado implements iForma
{
    private $lado;

    public function getArea($l){
        $area = $l*$l;

        return $area;
    }

    public function getDesenho()
    {
       echo "
        ┌───────────────────────┐\n
        │                       │\n
        │                       │\n
        │                       │\n
        │                       │\n
        │                       │\n
        │                       │\n
        │                       │\n
        │                       │\n
        │                       │\n
        │                       │\n
        └───────────────────────┘";

    }
}
