<?php

// Écrivez une fonction retournant la moyenne des éléments d'un tableau
require_once __DIR__ . '/arraySum.php';

function moy(array $tab): float
{
    // Faire la somme des éléments du tableau
    $sum = arraySum($tab);
    // Puis diviser cette somme par le nombre d'éléments
    return  $sum / count($tab);
}

var_dump(moy([1, 2, 3, 4]));
