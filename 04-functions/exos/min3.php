<?php

// Écrivez une fonction retournant l'entier le plus petit parmi 3

// Définition
function min3(int $a, int $b, int $c): int
{
    // Corps de la fonction
    // = Implémentation de la fonction
    if ($a < $b && $a < $c) {
        return $a;
    }

    if ($b < $a && $b < $c) {
        return $b;
    }

    return $c;
}

// Appel : démonstration de la solution
var_dump(min3(12, 54, 87)); // 12
var_dump(min3(2, 1, 3)); // 1
var_dump(min3(45, 18, 2)); // 2
