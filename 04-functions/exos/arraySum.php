<?php

// Écrivez une fonction retournant la somme des éléments d'un tableau
function arraySum(array $tab): int|float
{
    // $result = 0;
    // foreach ($tab as $elt) {
    //     $result += $elt;
    // }

    // for ($i = 0, $result = 0; $i < count($tab); $i++) {
    //     $result += $tab[$i];
    // }

    $result = 0;
    $i = 0;

    while ($i < count($tab)) {
        $result += $tab[$i];
        $i++;
    }

    return $result;
}

var_dump(arraySum([1, 2, 3])); // 6
var_dump(arraySum([1, 2, 3, 4, 5])); // 15
