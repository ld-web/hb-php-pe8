<?php

function afficherNombresPairs(int $limit)
{
    $nombre = 2; // instruction d'initialisation

    while ($nombre <= $limit) { // condition de maintien
        echo "$nombre<br />";
        $nombre += 2; // instruction de pas
    }
}

afficherNombresPairs(16);
afficherNombresPairs(35);
