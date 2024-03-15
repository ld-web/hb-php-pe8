<?php

function insertIntoArrayV3(array $tab, int $pos, mixed $value): array
{
    if ($pos < count($tab)) {
        // Je suis dans les bornes du tableau
        array_splice($tab, $pos, 0, $value);
    } else {
        // Je suis en-dehors des bornes du tableau
        $tab = array_pad($tab, $pos, 0);
        $tab[] = $value;
    }

    return $tab;
}

// Index en-dehors des limites du tableau => remplir avec des 0
var_dump(insertIntoArrayV3([1, 2, 3], 8, 14));
var_dump(insertIntoArrayV3([1, 2, 3], 1, 7));
var_dump(insertIntoArrayV3([1, 2, 3], 3, 45));
