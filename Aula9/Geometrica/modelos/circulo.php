<?php

require_once("FormaGeometrica.php");

class Circulo implements IForma
{
    private $raio;

    public function getArea($r)
    {
        $area = 3.14 * ($r * $r);
        return $area;
    }

    public function getDesenho()
    {
        echo "        *****\n";
        echo "     **       **\n";
        echo "   **           **\n";
        echo "  *               *\n";
        echo " *                 *\n";
        echo " *                 *\n";
        echo " *                 *\n";
        echo "  *               *\n";
        echo "   **           **\n";
        echo "     **       **\n";
        echo "        *****\n";

    }
}
