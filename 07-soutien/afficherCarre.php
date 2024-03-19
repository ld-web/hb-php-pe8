<?php

function construireCarre(int $taille): string
{
    $compteur = 0; // instruction d'initialisation
    $carre = ""; // J'initialise $carre à une chaîne vide

    while ($compteur < $taille) { // condition de maintien
        for ($etoile = 0; $etoile < $taille; $etoile++) {
            $carre .= "* "; // équivaut à $carre = $carre . "* ";
        }
        $carre .= "<br />";

        $compteur++; // instruction de pas
    }

    return $carre;
}
