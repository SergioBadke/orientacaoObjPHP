<?php

require_once("modelos/retangulo.php");
require_once("modelos/quadrado.php");
require_once("modelos/circulo.php");
require_once("modelos/FormaGeometrica.php");

$forma = null;

echo "
\n┌─┬─────────┐
\n│1│QUADRADO │
\n├─┼─────────┤
\n│2│RETANGULO│
\n├─┼─────────┤
\n│3│CIRCULO  │
\n└─┴─────────┘";

$escolha = readline("\nEscolha:");

if ($escolha = 1) {
    $lado="Lado:";
    
}
if ($escolha = 2) {

}
if ($escolha = 3) {

}
