<?php

$vetor = array();
$leitor = 1;
while ($leitor != 0) {
    $leitor = readline("Informe um numero: ");
    if ($leitor != 1) {
        if ($leitor % 2 != 0 or $leitor == 2) {
            if ($leitor % 3 != 0 or $leitor == 3) {
                if ($leitor % 5 != 0 or $leitor == 5) {
                    array_push($vetor, $leitor);
                }
            }
        }
    }
}
print_r($vetor);
