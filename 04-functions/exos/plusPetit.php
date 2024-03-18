<?php

function plusPetit(array $tab)
{
    if (empty($tab)) {
        return null;
    }

    // Par défaut, je considère le premier
    // élément comme le plus petit
    $min = $tab[0];

    for ($i = 0; $i < count($tab); $i++) {
        if ($tab[$i] < $min) {
            $min = $tab[$i];
        }
    }

    return $min;
}

$min = plusPetit([4, 2, 1]);
echo ($min === null) ? "null" : $min;
