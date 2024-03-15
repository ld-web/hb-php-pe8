<?php

// Avec fonctions de la SPL, style impératif

//  0  1  2
// [1, 2, 3] <-- original
// [1, 7, 2, 3] <-- résultat

function insertIntoArrayV2(array &$tab, int $pos, mixed $value): void
{
    array_splice($tab, $pos, 0, $value);
    // return $tab;
}

$originalTab = [1, 2, 3];

var_dump($originalTab);
insertIntoArrayV2($originalTab, 1, 7);
var_dump($originalTab);
insertIntoArrayV2($originalTab, 0, 7);
var_dump($originalTab);
insertIntoArrayV2($originalTab, 2, 45);
var_dump($originalTab);
