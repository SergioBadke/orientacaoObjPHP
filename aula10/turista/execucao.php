<?php

require_once("modelos/Restaurante.php");
require_once("modelos/Hotel.php");
require_once("modelos/Pontos.php");

function Menu()
{
    echo "[1] Cadastrar Espaço";
    echo "[2] Remover Espaço";
    echo "[3] Listar Espaços";
    echo "[0] Sair";
}

$espacos = array();

switch ($escolha) {
    case 1:
        $espaco = new Espaco();
        $tipo = readline("Tipo: ");
        if ($tipo = "hotel") {

        } elseif ($tipo = "restaurante") {

        } elseif ($tipo = "ponto") {

        }
        break;

    case 2:

        break;

    case 3:

        break;

    default:

        break;
}
