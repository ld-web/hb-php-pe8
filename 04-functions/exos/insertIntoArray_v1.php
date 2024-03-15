<?php

// Sans fonctions de la SPL (à part count), style impératif
// Quand on appelle la fonction insertIntoArrayV1, on génère une nouvelle
// version du tableau donc c'est un style déclaratif
// Mais au sein de la fonction elle-même, on construit un tableau pas à pas
// avec une boucle for, donc style impératif

//  0  1  2
// [1, 2, 3] <-- original
// [1, 7, 2, 3] <-- résultat

function insertIntoArrayV1(array $tab, int $pos, mixed $value): array
{
    // $result = [];
    // $i = 0;

    // while ($i < count($tab)) {
    //     if ($i === $pos) {
    //         $result[] = $value;
    //     }

    //     $result[] = $tab[$i];
    //     $i++;
    // }

    for ($result = [], $i = 0; $i < count($tab); $result[] = $tab[$i], $i++) {
        if ($i === $pos) {
            $result[] = $value;
        }
    }

    return $result;
}

var_dump(insertIntoArrayV1([1, 2, 3], 1, 7));
var_dump(insertIntoArrayV1([1, 2, 3], 0, 7));
var_dump(insertIntoArrayV1([1, 2, 3], 2, 45));
