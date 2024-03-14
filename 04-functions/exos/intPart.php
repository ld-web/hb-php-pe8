<?php

// Écrivez une fonction retournant la partie entière d'un réel positif
// Exemple : 13.4 => 13, 2.6 => 2

function intPart(float $nb): int
{
    // for($a = 0; $a < $nb; $a++) {
    // }

    $a = 0; // Instruction d'initialisation

    while ($a < $nb) { // Condition de maintien
        $a++; // Instruction de pas
    }

    return $a - 1;
}

var_dump(intPart(3.1)); // 3
var_dump(intPart(13.4)); // 13
