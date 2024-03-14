<?php

function ePrimo($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$vetor = array();
$leitor = 1;
while (true) {
    $numero = readline("Digite um número: ");

    if ($numero == 0) {
        break;
    }

    if (ePrimo($numero)) {
        $vetor[] = $numero;
    }
}
print_r($vetor);
